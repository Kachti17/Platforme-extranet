<template>
  <div class="row row-cols-1">
    <div class="col-sm-20" style="height: 300%">
      <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
        <div class="inner-page-title">
          <h3 class="text-white">Page de la Table Éditable</h3>
          <p class="text-white">Lorem ipsum</p>
        </div>
      </div>
    </div>
    <div class="col-sm-40">
      <iq-card class="w-100">
        <template v-slot:headerTitle>
          <h4 class="card-title">List of Users</h4>

        </template>
        <template v-slot:body>
          <div id="table" class="table-editable">
            <span class="table-add float-end mb-3 mr-2">
              <router-link to="/auth/signup" class="btn btn-sm btn-success d-flex align-items-center">
                <i class="material-symbols-outlined me-1 md-18">add</i>Add user
              </router-link>
            </span>
            <!-- Barre de recherche -->
            <form action="#" class="searchbox d-flex align-items-center">
  <a class="search-link d-none d-lg-block" href="javascript:void(0);">
    <span class="material-symbols-outlined">search</span>
  </a>
  <input type="text" v-model="searchText" @input="searchUsers" class="text search-input form-control bg-soft-primary w-75" placeholder="Search here...">
  <a class="d-lg-none d-flex align-items-center" href="javascript:void(0);">
    <span class="material-symbols-outlined">search</span>
  </a>
</form>
            <!-- Fin de la barre de recherche -->
            <div class="table-responsive-md">
              <table class="table table-bordered table-striped text-left">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone Number</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(user, index) in filteredUsers" :key="index">
                    <td>{{ user.nom }}</td>
                    <td>{{ user.prenom }}</td>
                    <td>{{ user.email }}</td>
                    <td class="password-cell">{{ user.password }}</td>
                    <td>{{ user.tel }}</td>
                    <td>{{ user.created_at }}</td>
                    <td>{{ user.updated_at }}</td>
                    <td>
                      <button type="button" class="btn btn-danger btn-sm" @click="confirmDeleteUser(user.id, index)">Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </template>
      </iq-card>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      users: [], // Pour stocker les utilisateurs récupérés
      deleteUserId: null, // ID de l'utilisateur à supprimer
      deleteIndex: null, // Index de l'utilisateur à supprimer dans la liste
      searchText: '', // Texte de recherche saisi par l'utilisateur
    };
  },
  methods: {
    async showAllUsers() {
      try {
        const response = await fetch('http://127.0.0.1:8000/api/users');
        if (!response.ok) {
          throw new Error('Failed to fetch users');
        }
        const usersData = await response.json();
        this.users = usersData; // Mettre à jour la liste des utilisateurs dans les données de Vue.js
      } catch (error) {
        console.error('Error fetching users:', error);
      }
    },
    confirmDeleteUser(userId, index) {
      this.deleteUserId = userId;
      this.deleteIndex = index;
      // Afficher la boîte de dialogue de confirmation ici
      if (confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')) {
        this.deleteUser(); // Si l'utilisateur confirme la suppression, appeler la fonction deleteUser
      } else {
        // Réinitialiser les valeurs
        this.deleteUserId = null;
        this.deleteIndex = null;
      }
    },
    async deleteUser() {
      try {
        const response = await fetch(`http://127.0.0.1:8000/api/DeleteUser/${this.deleteUserId}`, {
          method: 'DELETE',
        });
        if (!response.ok) {
          throw new Error('Failed to delete user');
        }
        this.users.splice(this.deleteIndex, 1); // Supprimer l'utilisateur de la liste dans Vue.js
        console.log('User deleted successfully');
      } catch (error) {
        console.error('Error deleting user:', error);
      } finally {
        // Réinitialiser les valeurs après la suppression
        this.deleteUserId = null;
        this.deleteIndex = null;
      }
    },
    async searchUsers() {
  try {
    const response = await fetch(`http://127.0.0.1:8000/api/users?keyword=${this.searchText}`);
    if (!response.ok) {
      throw new Error('Failed to fetch users');
    }
    const usersData = await response.json();
    this.users = usersData; // Mettre à jour la liste des utilisateurs filtrés dans les données de Vue.js
  } catch (error) {
    console.error('Error searching users:', error);
  }
},

  },
  computed: {
  filteredUsers() {
    // Filtrer les utilisateurs localement en fonction du texte de recherche pour le nom ou le prénom
    return this.users.filter(user =>
      user.nom.toLowerCase().includes(this.searchText.toLowerCase()) ||
      user.prenom.toLowerCase().includes(this.searchText.toLowerCase())
    );
  },
},
  created() {
    this.showAllUsers(); // Appeler la méthode pour afficher les utilisateurs au chargement de la page
  },
};
</script>

<style>
  .table-editable td.password-cell {
    max-width: 150px; /* Définir la largeur maximale de la cellule du mot de passe */
    word-wrap: break-word; /* Permettre le retour à la ligne pour les mots de passe longs */
  }

  /* Agrandir la table à droite */
  .table-responsive-md {
    width: 100%;
  }
</style>
