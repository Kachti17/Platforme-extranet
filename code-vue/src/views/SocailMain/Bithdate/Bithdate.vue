<template>
<div class="col-lg-4 col-md-12">
  <div class="container" style="width: 1200px;">

  <div class="row">
    <div class="col-lg-6" style="width: 250px; justify-content: flex-end;">
    <div class="row justify-content-end">
      <div class="col-lg-12 " v-for="event in eventsList" :key="event.id">
        <div class="card card-block card-stretch card-height blog-list">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="image-block">
                  <!-- Remplacez cet URL par l'URL de l'image de l'événement -->
                  <img :src="event.image_url ? event.image_url : defaultImageUrl" class="img-fluid rounded w-100" alt="blog-img" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="blog-description p-2 rounded">
                  <div class="blog-meta d-flex align-items-center justify-content-between mb-2">
                    <div class="date"><a href="#" tabindex="-1">{{ formatDate(event.date_event) }}</a></div>
                    <!-- Boutons Modifier et Supprimer -->
                    <div>
                      <button @click="editEvent(event.id)" class="btn btn-primary">Update</button>
                      <button @click="deleteEvent(event.id)" class="btn btn-danger">Delete</button>
                    </div>
                  </div>
                  <h5 class="mb-2">{{ event.description }}</h5>
                  <p>Place : {{ event.lieu_event }}</p>
                  <p>Date : {{ event.date_event }}</p>
                  <p>Maximum number : {{ event.nbr_max }}</p>
                  <p>Number of participants : {{ event.nbr_participants }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

  <div class="col-lg-6" style="width: 750px; justify-content: flex-end;">
    <form @submit.prevent="createEvent">
      <div class="col-md-12 col-lg-8">
        <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-4">
          <div class="create-workform">
            <button type="button" class="btn btn-primary position-relative d-flex align-items-center justify-content-between" data-bs-toggle="modal" :options="viewModeOptions" data-bs-target="#modalcal">
              <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
              Add new event
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-block card-stretch">
                <div class="card-body">
                  <div id="calendar1" class="calendar-s"></div>
                  <full-calender :events="events"></full-calender>
                </div>
            </div>
          </div>
        </div>
      </div>

      <modal id="modalcal" tabindex="-1" title="Create Post" aria-labelledby="modalcalLabel" aria-hidden="true">
        <model-header>
          <h5 class="modal-title" id="modalcalLabel">Add event</h5>
          <button :dismissable="true" type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </model-header>
        <model-body>
          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="eventTitle" class="form-label font-weight-bold text-muted text-uppercase">Titre de l'événement</label>
              <input type="text" class="form-control" id="eventTitle" placeholder="Entrez le titre de l'événement" v-model="description">
              <p v-if="errors.description" class="error">{{ errors.description }}</p>
            </div>
            <div class="form-group">
              <label class="form-label">Télécharger votre photo :</label>
              <input type="file" class="form-control" name="photo" accept="image/*" @change="handleFileChange">
            </div>
            <div class="form-group">
              <label class="form-label" for="eventDateTime">Date et heure</label>
              <input type="datetime-local" class="form-control" placeholder="Entrez la date" id="date_event" v-model="date_event">
              <p v-if="errors.date_event" class="error">{{ errors.date_event }}</p>
            </div>
            <div class="col-md-12 mb-3">
              <label for="eventPlace" class="form-label font-weight-bold text-muted text-uppercase">Lieu</label>
              <input type="text" class="form-control" id="eventPlace" placeholder="Entrez le lieu" v-model="lieu_event">
              <p v-if="errors.lieu_event" class="error">{{ errors.lieu_event }}</p>
            </div>
            <div class="col-md-12 mb-3">
              <label for="maxParticipants" class="form-label font-weight-bold text-muted text-uppercase">Nombre maximum</label>
              <input type="text" class="form-control" id="maxParticipants" placeholder="Entrez le nombre maximum" v-model="nbr_max">
              <p v-if="errors.nbr_max" class="error">{{ errors.nbr_max }}</p>
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit" class="submit-button">Ajouter l'événement</button>
          </div>
        </model-body>
      </modal>
    </form>
  </div>
  </div>
  </div>




  </template>


<script setup>
import { ref, reactive } from 'vue'
import moment from 'moment'
import FullCalender from '@/components/custom/calender/FullCalender.vue'
import FlatPicker from 'vue-flatpickr-component'
import 'flatpickr/dist/flatpickr.css'
const inlineDate = ref('')

const inlineDatepicker = reactive({
  inline: true,
  minDate: 'today',
  dateFormat: 'Y-m-d'
})
const account = ref({
  series: [{
    name: 'Total Account',
    data: [42, 30, 25, 40, 57, 71, 86, 71, 108]
  }],
  options: {
    colors: ['#50b5ff'],
    chart: {
      toolbar: {
        show: false
      }
    },
    forecastDataPoints: {
      count: 2
    },
    stroke: {
      width: 3
    },
    grid: {
      show: true,
      strokeDashArray: 7
    },
    markers: {
      size: 6,
      colors: '#FFFFFF',
      strokeColors: ['#50b5ff'],
      strokeWidth: 2,
      strokeOpacity: 0.9,
      strokeDashArray: 0,
      fillOpacity: 0,
      shape: 'circle',
      radius: 2,
      offsetX: 0,
      offsetY: 0
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      tooltip: {
        enabled: false
      }
    }
  }
})

const events = ref([
  {
    title: 'Click for Google',
    url: 'http://google.com/',
    start: moment(new Date(), 'YYYY-MM-DD').add(-20, 'days').format('YYYY-MM-DD') + 'T05:30:00.000Z',
    backgroundColor: 'rgba(58,87,232,0.2)',
    textColor: 'rgba(58,87,232,1)',
    borderColor: 'rgba(58,87,232,1)'
  },
  {
    title: 'Click for Google',
    url: 'http://google.com/',
    start: moment(new Date(), 'YYYY-MM-DD').add(0, 'days').format('YYYY-MM-DD') + 'T06:30:00.000Z',
    backgroundColor: 'rgba(58,87,232,0.2)',
    textColor: 'rgba(58,87,232,1)',
    borderColor: 'rgba(58,87,232,1)'
  },


])
</script>


<script>
import axios from 'axios';


export default {
  data() {
    return {
      description: '',
    lieu_event: '',
    date_event: '',
    nbr_max: '',
    image: null,
    errors: {},
    eventsList: [], // Nouveau champ pour stocker la liste des événements
    defaultImageUrl: require('../../../assets/images/DefaultEvent.png'), // Remplacez 'DefaultEvent.jpg' par le nom réel de votre image par défaut
    name: 'BlogList',

    };
  },

  methods: {

    async createEvent() {
    console.log('Méthode createEvent appelée.',  this.image );
    const errors = this.validateInput();
    if (Object.keys(errors).length > 0) {
      this.errors = errors;
      return;
    }

    try {
      const token = localStorage.getItem('token');
      console.log('Données du formulaire :', {
        description: this.description,
        lieu_event: this.lieu_event,
        nbr_max: this.nbr_max,
        date_event: this.date_event,
        image: this.image,
      });

      const formData = new FormData();
      formData.append('lieu_event', this.lieu_event);
      formData.append('date_event', this.date_event);
      formData.append('nbr_max', this.nbr_max);
      formData.append('description', this.description);
      formData.append('image', this.image);

      const response = await axios.post('http://127.0.0.1:8000/api/creerEvent', {
        description: this.description,
        lieu_event: this.lieu_event,
        nbr_max: this.nbr_max,
        date_event: this.date_event,
        image: this.image,
      }, {
        headers: {
          'Content-Type': 'multipart/form-data',
          Authorization: `Bearer ${token}`,
        },
      });

      const responseData = response.data;
      alert(responseData.message);
    } catch (error) {
      console.error('Erreur lors de la création de l\'événement :', error);
      alert('Une erreur s\'est produite lors de la création de l\'événement.');
    }
  },

  handleFileChange(event) {
    this.image = event.target.files[0];
  },

  validateInput() {
      const errors = {};
      if (!this.description.trim()) errors.description = 'Description requise';
      if (!this.lieu_event.trim()) errors.lieu_event = 'Lieu de l\'événement requis';
      if (!this.date_event) errors.date_event = 'Date de l\'événement requise';
      if (!this.nbr_max) errors.nbr_max = 'Nombre maximal requis';
      return errors;
    },


    formatDate(dateString) {
      // Convertir la chaîne de date en objet Date
      const date = new Date(dateString);
      // Options de formatage pour le mois en français
      const options = { month: 'short' };
      // Obtenir le jour et le mois formatés
      const day = date.getDate();
      const month = new Intl.DateTimeFormat('fr-FR', options).format(date);
      // Retourner la date formatée
      return `${day} ${month}`;
    },

    editEvent(id) {
      // Rediriger vers la page de modification de l'événement
      this.$router.push(`/EditEvent/${id}`);
    },

    async showEvents() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/events');
        this.eventsList = response.data; // Stocke la liste des événements dans eventsList
      } catch (error) {
        console.error('Erreur lors de la récupération des événements :', error);
      }
    },

    async deleteEvent(id) {
  try {
    // Afficher une boîte de dialogue de confirmation avant la suppression
    const confirmed = window.confirm('Êtes-vous sûr de vouloir supprimer cet événement ?');
    if (!confirmed) {
      return; // Annuler la suppression si l'utilisateur a annulé la confirmation
    }

    const response = await fetch(`http://127.0.0.1:8000/api/DeleteEvent/${id}`, {
      method: 'DELETE',
    });
    if (!response.ok) {
      throw new Error('Échec de la suppression de l\'événement');
    }
    // Supprimer l'événement de la liste dans Vue.js
    const indexToDelete = this.eventsList.findIndex(event => event.id === id);
    if (indexToDelete !== -1) {
      this.eventsList.splice(indexToDelete, 1);
      console.log('Événement supprimé avec succès');
    } else {
      console.error('Événement non trouvé dans la liste');
    }
  } catch (error) {
    console.error('Erreur lors de la suppression de l\'événement :', error);
  }
},

  },

  created() {
    this.showEvents(); // Appel de la méthode pour récupérer les événements au chargement du composant
  },




};
</script>
<style>
  .flatpickr-calendar{
      width: 100%;
  }
  </style>
