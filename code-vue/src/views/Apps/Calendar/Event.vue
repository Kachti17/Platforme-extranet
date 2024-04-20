<template>
  <div v-if="eventDetails">
    <div class="card card-block card-stretch card-height blog-list">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="image-block">
              <img :src="defaultImageUrl" class="img-fluid rounded w-100" alt="blog-img" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="blog-description p-2 rounded">
              <div class="blog-meta d-flex align-items-center justify-content-between mb-2">
                <div class="date text-center">
                  <a href="#" tabindex="-1" style="font-size: 18px; font-weight: bold;">
                    {{ formatDate(eventDetails.date_event) }}
                  </a>
                </div>              </div>
              <div class="blog-meta d-flex align-items-center justify-content-between mb-2"></div>

              <h4 class="event-heading">Description :</h4>
              <p class="event-details">{{ eventDetails.description }}</p>
              <h4 class="event-heading">Place :</h4>
              <p class="event-details">{{ eventDetails.lieu_event }}</p>
              <h4 class="event-heading">Maximum number :</h4>
              <p class="event-details">{{ eventDetails.nbr_max }}</p>
              <h4 class="event-heading">Number of participants :</h4>
              <p class="event-details">{{ eventDetails.nbr_participants }}</p>
            </div>
          </div>
        </div>

        <!-- Actions -->
        <div class="actions mt-3">
          <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
              <button @click="participerEvenement(eventDetails.id)" class="btn btn-sm btn-success mr-2">Participate</button>
              <button @click="annulerParticipation(eventDetails.id)" class="btn btn-sm btn-warning">Cancel</button>
              <button @click="editEvent(eventDetails.id)" class="btn btn-sm btn-primary mr-2">Update</button>
              <button @click="deleteEvent(eventDetails.id)" class="btn btn-sm btn-danger mr-2">Delete</button>
              <button @click="voirParticipants(eventDetails.id)" class="btn btn-sm btn-info">Voir les participants</button>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <button @click="goBack" class="btn btn-sm btn-secondary">Go back</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</template>



<script>
import axios from 'axios';

export default {
  data() {
    return {
      eventDetails: null,
      defaultImageUrl: require('../../../assets/images/DefaultEvent.png'),
      participantsList: [],

    };
  },
  mounted() {
    const eventId = this.$route.params.id;
    this.fetchEventDetails(eventId);
  },
  methods: {


    voirParticipants(idEvenement) {
  this.$router.push({ name: 'Participant', params: { eventId: idEvenement } });
},

    async fetchEventDetails(id) {
      try {
        const response = await axios.get(`http://127.0.0.1:8000/api/events/${id}`);
        this.eventDetails = response.data;
      } catch (error) {
        console.error('Erreur lors de la récupération des détails de l\'événement :', error);
        alert('Une erreur s\'est produite lors de la récupération des détails de l\'événement.');
      }
    },

    formatDate(dateString) {
  // Convertir la chaîne de date en objet Date
  const date = new Date(dateString);
  // Options de formatage pour la date complète en anglais
  const options = {
    day: '2-digit',
    month: 'long',
    year: 'numeric',
    hour: '2-digit',
    minute: '2-digit',
  };
  // Obtenir la date formatée
  const formattedDate = date.toLocaleDateString('en-US', options);
  // Retourner la date formatée
  return formattedDate.replace(',', ' at');
},


    editEvent(id) {
      this.$router.push(`/edit-event/${id}`);
    },
    async deleteEvent(id) {
      try {
        const confirmed = window.confirm('Êtes-vous sûr de vouloir supprimer cet événement ?');
        if (!confirmed) {
          return;
        }
        await axios.delete(`http://127.0.0.1:8000/api/events/${id}`);
        alert('L\'événement a été supprimé avec succès.');
        this.goBack();
      } catch (error) {
        console.error('Erreur lors de la suppression de l\'événement :', error);
        alert('Une erreur s\'est produite lors de la suppression de l\'événement.');
      }
    },
    goBack() {
      this.$router.go(-1);
    },

    async participerEvenement(idEvenement) {
      try {
        // Récupérer le token depuis le local storage
        const token = localStorage.getItem('token');
        if (!token) {
          throw new Error('Token non trouvé. Veuillez vous connecter.');
        }

        // Effectuer la requête avec le token
        const response = await axios.post(
          `http://127.0.0.1:8000/api/evenements/${idEvenement}/participer`,
          {},
          {
            headers: {
              Authorization: `Bearer ${token}`,
            },
          }
        );

        // Afficher le message de succès
        alert(response.data.message);
        // Actualiser les détails de l'événement après participation
        this.fetchEventDetails(idEvenement);
      } catch (error) {
        console.error('Erreur lors de la participation à l\'événement :', error);
        // Afficher le message d'erreur
        alert('Erreur lors de la participation à l\'événement.');
      }
    },

    async annulerParticipation(idEvenement) {
      try {
        // Récupérer le token depuis le local storage
        const token = localStorage.getItem('token');
        if (!token) {
          throw new Error('Token non trouvé. Veuillez vous connecter.');
        }

        // Effectuer la requête avec le token
        const response = await axios.post(
          `http://127.0.0.1:8000/api/evenements/${idEvenement}/annuler-participation`,
          {},
          {
            headers: {
              Authorization: `Bearer ${token}`,
            },
          }
        );

        // Afficher le message de succès
        alert(response.data.message);
        // Actualiser les détails de l'événement après annulation de participation
        this.fetchEventDetails(idEvenement);
      } catch (error) {
        console.error('Erreur lors de l\'annulation de la participation à l\'événement :', error);
        // Afficher le message d'erreur
        alert('Erreur lors de l\'annulation de la participation à l\'événement.');
      }
    },


  },
};
</script>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.actions {
    margin-top: 20px; /* Espacement entre les boutons et le contenu précédent */
}

.actions .btn {
    margin-right: 10px; /* Espacement horizontal entre les boutons */
}

.actions .space {
    display: inline-block;
    width: 20px; /* Ajustez la largeur de l'espace selon vos besoins */
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.event-heading {
    margin-top: 15px;
    margin-bottom: 5px;
    font-size: 18px;
    color: #333;
}
.space {
    display: inline-block;
    width: 10px; /* Ajustez la largeur de l'espace selon vos besoins */
}

.event-details {
    font-size: 16px;
    color: #666;
    margin-bottom: 15px;
}</style>
