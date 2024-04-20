<template>
  <div class="container">
    <h2>Modifier l'événement</h2>
    <div class="form-group">
      <label for="description">Description :</label>
      <input type="text" id="description" v-model="editedEvent.description" class="form-control" />
    </div>
    <div class="form-group">
      <label for="lieu_event">Lieu de l'événement :</label>
      <input type="text" id="lieu_event" v-model="editedEvent.lieu_event" class="form-control" />
    </div>
    <div class="form-group">
      <label for="date_event">Date de l'événement :</label>
      <input type="text" id="date_event" v-model="editedEvent.date_event" class="form-control" />
    </div>
    <div class="form-group">
      <label for="nbr_max">Nombre maximal :</label>
      <input type="number" id="nbr_max" v-model="editedEvent.nbr_max" class="form-control" />
    </div>
    <div class="form-group">
      <label for="image">Image :</label>
      <input type="file" id="image" @change="handleFileChange" class="form-control" />
    </div>
    <div class="form-group">
      <button @click="confirmEdit" class="btn btn-primary">Confirmer</button>
      <button @click="goBack" class="btn btn-secondary">Retour</button>
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
        const response = await axios.put(`http://127.0.0.1:8000/api/UpdateEvent/${this.editedEvent.id}`, this.editedEvent);
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
    axios.get(`http://127.0.0.1:8000/api/Evenement/${eventId}`)
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
