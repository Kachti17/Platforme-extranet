<template>
  <div>
    <h3 class="font-weight-bold">Liste des participants</h3>
    <div class="table-responsive-md">
      <table class="table table-bordered table-striped text-left">
        <thead>
          <tr>
            <th>Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Inscription date</th>
            <th>Action</th> <!-- Nouvelle colonne pour le bouton d'envoi d'email -->

          </tr>
        </thead>
        <tbody>
          <tr v-for="(participant, index) in participantsList" :key="index">
            <td>{{ participant.nom }}</td>
            <td>{{ participant.prenom }}</td>
            <td>{{ participant.email }}</td>
            <td>{{ participant.tel }}</td>
            <td>{{ participant.inscription_date }}</td>
            <td>
              <button @click="sendEmail(participant)" class="btn btn-primary btn-sm">Envoyer Email</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>


<script>
import axios from 'axios';

export default {
  data() {
    return {
      participantsList: [], // Liste des participants à afficher dans le tableau
    };
  },
  mounted() {
    const eventId = this.$route.params.id;
    this.fetchParticipants(eventId);
  },
  methods: {
    async fetchParticipants(eventId) {
  try {
    const response = await axios.get(`http://127.0.0.1:8000/api/participants/filtrer-by-event/${eventId}`);
    // Vous pouvez accéder aux détails du user comme ceci
    this.participantsList = response.data.map(participant => {
      return {
        nom: participant.user.nom,
        prenom: participant.user.prenom,
        email: participant.user.email,
        tel: participant.user.tel,
        inscription_date: participant.inscription_date,
      };
    });
  } catch (error) {
    console.error('Erreur lors de la récupération des participants :', error);
    alert('Une erreur s\'est produite lors de la récupération des participants.');
  }
},

sendEmail(participant) {
      const subject = "Détails du participant";
      const body = `Nom: ${participant.nom}\nPrénom: ${participant.prenom}\nEmail: ${participant.email}\nTéléphone: ${participant.tel}\nDate d'inscription: ${participant.inscription_date}`;

      const mailToUrl = `mailto:?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
      window.location.href = mailToUrl;
    },
  },
};
</script>
