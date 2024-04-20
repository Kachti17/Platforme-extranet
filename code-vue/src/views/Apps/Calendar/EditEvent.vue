<template>
  <div class="container">
    <h2>Update event</h2>
    <div class="form-group">
      <label for="description">Title :</label>
      <input type="text" id="description" v-model="editedEvent.description" class="form-control" />
    </div>
    <div class="form-group">
      <label for="lieu_event">Event place :</label>
      <input type="text" id="lieu_event" v-model="editedEvent.lieu_event" class="form-control" />
    </div>
    <div class="form-group">
      <label for="date_event">Event date :</label>
      <input type="datetime-local" id="date_event" v-model="editedEvent.date_event" class="form-control" />
    </div>
    <div class="form-group">
      <label for="nbr_max"> Maximum Number :</label>
      <input type="number" id="nbr_max" v-model="editedEvent.nbr_max" class="form-control" />
    </div>
    <div class="form-group">
      <label for="image">Image :</label>
      <input type="file" id="image" @change="handleFileChange" class="form-control" />
    </div>
    <div class="form-group">
      <button @click="confirmEdit" class="btn btn-primary">Confirm</button>
      <button @click="goBack" class="btn btn-secondary">Back</button>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      editedEvent: {
        id: '', // ID de l'événement à éditer
        description: '',
        lieu_event: '',
        date_event: '',
        nbr_max: '',
        image: null, // Image à afficher ou modifier
      },
    };
  },
  methods: {

    async confirmEdit() {
      try {
        let formData = new FormData();
        formData.append('description', this.editedEvent.description);
        formData.append('lieu_event', this.editedEvent.lieu_event);
        formData.append('date_event', this.editedEvent.date_event);
        formData.append('nbr_max', this.editedEvent.nbr_max);
        formData.append('image', this.editedEvent.image);

        const response = await axios.post(`http://127.0.0.1:8000/api/UpdateEvent/${this.editedEvent.id}`,   {description: this.editedEvent.description,
          lieu_event: this.editedEvent.lieu_event,
          nbr_max: this.editedEvent.nbr_max,
          date_event: this.editedEvent.date_event,
          image: this.editedEvent.image,
        }, {
          headers: {
            'Content-Type': 'multipart/form-data', // Important pour envoyer des fichiers
          },
        });

        alert(response.data.message); // Affiche le message de succès de la modification
        // Rediriger vers la page précédente après la confirmation
        this.$router.go(-1); // Retour d'une page en arrière
      } catch (error) {
        console.error('Erreur lors de la modification de l\'événement :', error);
        alert('Une erreur s\'est produite lors de la modification de l\'événement.');
      }
    },
    goBack() {
      // Rediriger vers la page précédente sans modifications
      this.$router.go(-1); // Retour d'une page en arrière
    },
    handleFileChange(event) {
      // Gérer le changement de fichier pour l'image
      this.editedEvent.image = event.target.files[0];
    },
  },
  mounted() {
    // Récupérer l'ID de l'événement à éditer depuis les paramètres de l'URL
    const eventId = this.$route.params.id;
    this.editedEvent.id = eventId;
    // Récupérer les données de l'événement à éditer depuis l'API
    axios.get(`http://127.0.0.1:8000/api/events/${eventId}`)
      .then(response => {
        this.editedEvent.description = response.data.description;
        this.editedEvent.lieu_event = response.data.lieu_event;
        this.editedEvent.date_event = response.data.date_event;
        this.editedEvent.nbr_max = response.data.nbr_max;
        // Vous pouvez également récupérer l'URL de l'image et l'assigner à editedEvent.image si nécessaire
      })
      .catch(error => {
        console.error('Erreur lors de la récupération des données de l\'événement à éditer :', error);
      });
  },
};
</script>

<style>
/* Styles CSS ici */
</style>
