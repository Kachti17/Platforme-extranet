<template>
  <div>
    <iq-card
      id="post-modal-data"
      body-class="iq-card iq-card-block iq-card-stretch iq-card-height"
    >
      <modal
        id="newModal"
        dialogClass="modal-fullscreen-sm-down  modal-margin"
        tabindex="-1"
        title="New Modal Title"
        aria-labelledby="newModalLabel"
        aria-hidden="true"
      >
        <model-header>
          <h5 class="modal-title" id="modalsLabel">Update Post</h5>
          <a href="javascript:void(0);" class="lh-1" data-bs-dismiss="modal">
            <span class="material-symbols-outlined">close</span>
          </a>
        </model-header>
        <model-body>
          <div class="d-flex align-items-center">
            <div class="user-img">
              <img
                src="@/assets/images/user/1.jpg"
                alt="userimg"
                class="avatar-60 rounded-circle img-fluid"
              />
            </div>

            <form class="post-text ms-3 w-100" action="javascript:void();">
              <input
                type="text"
                class="form-control rounded"
                placeholder="Write something here ..."
                v-model="contenu.texte"
                required
                style="border: none"
              />
            </form>
          </div>
          <br />
          <br />

          <ul class="post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
            <li class="me-3 mb-md-0 mb-2">
              <label for="input-photo" class="btn btn-soft-primary">
                <img
                  src="../../../../assets/images/small/07.png"
                  alt="icon"
                  class="img-fluid me-2"
                />
                Picture
                <input
                  id="input-photo"
                  type="file"
                  ref="image_path"
                  style="display: none"
                  @change="handleImageChange"
                />
              </label>
            </li>

            <li class="me-3 mb-md-0 mb-2">
              <label for="input-video" class="btn btn-soft-primary">
                <img
                  src="../../../../assets/images/small/08.png"
                  alt="icon"
                  class="img-fluid me-2"
                />
                Video
                <input
                  id="input-video"
                  type="file"
                  ref="video_path"
                  style="display: none"
                  @change="handleVideoChange"
                />
              </label>
            </li>

            <li class="me-3 mb-md-0 mb-2">
              <a
                href="#"
                class="btn btn-soft-primary"
                @click.prevent="showLinkInput = !showLinkInput"
                ><img
                  src="../../../../assets/images/small/09.png"
                  alt="icon"
                  class="img-fluid me-2"
                />
                Link</a
              >
            </li>
            <div v-if="showLinkInput">
              <input
                type="url"
                placeholder="Enter the link here..."
                class="rounded form-control my-2"
                v-model="contenu.lien"
                style="border: none"
              />
            </div>
          </ul>
          <button
            class="btn btn-primary d-block w-100 mt-3"
            type="button"
            @click="modifierPublication()"
          >
            Update
          </button>
        </model-body>
      </modal>
    </iq-card>
  </div>

  <div class="col-sm-12">
    <div class="d-flex justify-content-between mb-3">
      <button @click="showApproved = true">Publications Approuvées</button>
      <button @click="showApproved = false">Publications Non Approuvées</button>
      <button @click="showApproved = null">
        Publications En Attente de Modification
      </button>
    </div>

    <div>
      <div
        v-for="(post, index) in filteredPublications"
        :key="index"
        class="card card-block card-stretch card-height"
      >
        <div class="card-body">
          <div class="user-post-data">
            <div class="d-flex justify-content-between">
              <div class="me-3">
                <img
                  class="rounded-circle img-fluid"
                  src="@/assets/images/user/02.jpg"
                  alt=""
                />
              </div>
              <div class="w-100">
                <div class="d-flex justify-content-between">
                  <div v-if="post && post.user" class="">
                    <h5 class="mb-0 d-inline-block">
                      {{ post.user.nom }} {{ post.user.prenom }}
                    </h5>
                    <p class="mb-0 text-primary">
                      {{ formatDateTime(post.contenu.created_at) }}
                    </p>
                  </div>

                  <div
                    v-if="!showApproved"
                    class="d-flex justify-content-between mt-3"
                  >
                    <button @click="accepterPublication(post.id)">
                      Accepter</button
                    >&nbsp;
                    <button @click="refuserPublication(post.id)">
                      Refuser
                    </button>
                  </div>

                  <div class="card-post-toolbar">
                    <div class="dropdown">
                      <span
                        class="dropdown-toggle material-symbols-outlined"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        role="button"
                      >
                        more_horiz
                      </span>
                      <div class="dropdown-menu m-0 p-0">
                        <a
                          class="dropdown-item p-3"
                          @click="UpdatePost(post)"
                          href="#"
                          data-bs-toggle="modal"
                          data-bs-target="#newModal"
                        >
                          <div class="d-flex align-items-top">
                            <span class="material-symbols-outlined">
                              edit
                            </span>
                            <div class="data ms-2">
                              <h6>Edit Post</h6>
                              <p class="mb-0">
                                Update your post and saved items
                              </p>
                            </div>
                          </div>
                        </a>
                        <div>
                          <iq-card
                            id="post-modal-data"
                            body-class="iq-card iq-card-block iq-card-stretch iq-card-height"
                          >
                            <modal
                              id="newModal"
                              dialogClass="modal-fullscreen-sm-down  modal-margin"
                              tabindex="-1"
                              title="New Modal Title"
                              aria-labelledby="newModalLabel"
                              aria-hidden="true"
                            >
                              <model-header>
                                <h5 class="modal-title" id="modalsLabel">
                                  Update Post
                                </h5>
                                <a
                                  href="javascript:void(0);"
                                  class="lh-1"
                                  data-bs-dismiss="modal"
                                >
                                  <span class="material-symbols-outlined"
                                    >close</span
                                  >
                                </a>
                              </model-header>
                              <model-body>
                                <div class="d-flex align-items-center">
                                  <div class="user-img">
                                    <img
                                      src="@/assets/images/user/1.jpg"
                                      alt="userimg"
                                      class="avatar-60 rounded-circle img-fluid"
                                    />
                                  </div>

                                  <form
                                    class="post-text ms-3 w-100"
                                    action="javascript:void();"
                                  >
                                    <input
                                      type="text"
                                      class="form-control rounded"
                                      placeholder="Write something here ..."
                                      v-model="contenu.texte"
                                      required
                                      style="border: none"
                                    />
                                  </form>
                                </div>
                                <br />
                                <br />

                                <ul
                                  class="post-opt-block d-flex list-inline m-0 p-0 flex-wrap"
                                >
                                  <li class="me-3 mb-md-0 mb-2">
                                    <label
                                      for="input-photo"
                                      class="btn btn-soft-primary"
                                    >
                                      <img
                                        src="../../../../assets/images/small/07.png"
                                        alt="icon"
                                        class="img-fluid me-2"
                                      />
                                      Picture
                                      <input
                                        id="input-photo"
                                        type="file"
                                        ref="image_path"
                                        style="display: none"
                                        @change="handleImageChange"
                                      />
                                    </label>
                                  </li>

                                  <li class="me-3 mb-md-0 mb-2">
                                    <label
                                      for="input-video"
                                      class="btn btn-soft-primary"
                                    >
                                      <img
                                        src="../../../../assets/images/small/08.png"
                                        alt="icon"
                                        class="img-fluid me-2"
                                      />
                                      Video
                                      <input
                                        id="input-video"
                                        type="file"
                                        ref="video_path"
                                        style="display: none"
                                        @change="handleVideoChange"
                                      />
                                    </label>
                                  </li>

                                  <li class="me-3 mb-md-0 mb-2">
                                    <a
                                      href="#"
                                      class="btn btn-soft-primary"
                                      @click.prevent="
                                        showLinkInput = !showLinkInput
                                      "
                                      ><img
                                        src="../../../../assets/images/small/09.png"
                                        alt="icon"
                                        class="img-fluid me-2"
                                      />
                                      Link</a
                                    >
                                  </li>
                                  <div v-if="showLinkInput">
                                    <input
                                      type="url"
                                      placeholder="Enter the link here..."
                                      class="rounded form-control my-2"
                                      v-model="contenu.lien"
                                      style="border: none"
                                    />
                                  </div>
                                </ul>
                              </model-body>
                            </modal>
                          </iq-card>
                        </div>
                        <a
                          class="dropdown-item p-3"
                          @click="supprimerPublication(post.id)"
                        >
                          <div class="d-flex align-items-top">
                            <span class="material-symbols-outlined"
                              >delete</span
                            >
                            <div class="data ms-2">
                              <h6>Delete</h6>
                              <p class="mb-0">Remove this Post on Timeline</p>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div v-if="post.contenu">
            <template v-if="post.contenu.texte !== null">
              <p>{{ post.contenu.texte }}</p>
            </template>
            <template v-if="post.contenu.lien !== null">
              <a :href="post.contenu.lien" target="_blank"
                >{{ post.contenu.lien }}
              </a>
            </template>
            <template v-if="post.contenu.image_path !== null">
              <img :src="post.contenu.image_path" alt="Image du post" />
            </template>
            <template v-if="post.contenu.video_path !== null">
              <div class="ratio ratio-16x9">
                <iframe :src="post.contenu.video_path" allowfullscreen></iframe>
              </div>
            </template>
          </div>

          <div class="comment-area mt-3">
            <div
              class="d-flex justify-content-between align-items-center flex-wrap"
            >
              <div
                class="like-block position-relative d-flex align-items-center"
              >
                <div class="d-flex align-items-center">
                  <div class="like-data">
                    <div class="dropdown">
                      <span
                        class="dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        role="button"
                      >
                        <img
                          src="@/assets/images/icon/01.png"
                          class="img-fluid"
                          alt=""
                        />
                      </span>
                      <div class="dropdown-menu py-2">
                        <a
                          class="ms-2 me-2"
                          href="#"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Like"
                          ><img
                            src="@/assets/images/icon/01.png"
                            class="img-fluid"
                            alt=""
                        /></a>
                        <a
                          class="me-2"
                          href="#"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Love"
                          ><img
                            src="@/assets/images/icon/02.png"
                            class="img-fluid"
                            alt=""
                        /></a>
                        <a
                          class="me-2"
                          href="#"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Happy"
                          ><img
                            src="@/assets/images/icon/03.png"
                            class="img-fluid"
                            alt=""
                        /></a>
                        <a
                          class="me-2"
                          href="#"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="HaHa"
                          ><img
                            src="@/assets/images/icon/04.png"
                            class="img-fluid"
                            alt=""
                        /></a>
                        <a
                          class="me-2"
                          href="#"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Think"
                          ><img
                            src="@/assets/images/icon/05.png"
                            class="img-fluid"
                            alt=""
                        /></a>
                        <a
                          class="me-2"
                          href="#"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Sade"
                          ><img
                            src="@/assets/images/icon/06.png"
                            class="img-fluid"
                            alt=""
                        /></a>
                        <a
                          class="me-2"
                          href="#"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Lovely"
                          ><img
                            src="@/assets/images/icon/07.png"
                            class="img-fluid"
                            alt=""
                        /></a>
                      </div>
                    </div>
                  </div>
                  <div class="total-like-block ms-2 me-3">
                    <div class="dropdown">
                      <span
                        class="dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        role="button"
                      >
                        {{ post.nbr_react }} Likes
                      </span>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Max Emum</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="total-comment-block">
                  <div class="dropdown">
                    <span
                      class="dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                      role="button"
                    >
                      {{ post.nbr_comm }} Comment
                    </span>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Max Emum</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr />
            <div v-for="(commentaire, cIndex) in commentaires[post.id]" :key="cIndex">
  <div class="d-flex flex-wrap">
    <div class="user-img">
      <img src="@/assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid" />
    </div>
    <div class="comment-data-block ms-3">
      <h6>{{ commentaire.nom }}</h6>
      <p class="mb-0">{{ commentaire.contenu }}</p>
      <div class="d-flex flex-wrap align-items-center comment-activity">
        <a href="#">like</a>
        <a href="#">reply</a>
        <a href="#">translate</a>
        <span>{{ formatDateTime(commentaire.created_at) }}</span>
      </div>
    </div>
  </div>
</div>

            <form
              class="comment-text d-flex align-items-center mt-3"
              action="javascript:void(0);"
            >
              <input
                type="text"
                class="form-control rounded"
                placeholder="Enter Your Comment"
              />
              <div class="comment-attagement d-flex">
                <a
                  href="javascript:void(0);"
                  class="material-symbols-outlined me-3 link"
                >
                  insert_link
                </a>
                <a
                  href="javascript:void(0);"
                  class="material-symbols-outlined me-3"
                >
                  sentiment_satisfied
                </a>
                <a
                  href="javascript:void(0);"
                  class="material-symbols-outlined me-3"
                >
                  photo_camera
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      user: null,
      commentaires: [],
      unapprovedPublications: [],
      approvedPublications: [],
      waitingForModificationPublications: [],
      showApproved: true,
      newCommentContent: "",
      publicationId: null,
      selectedPostId: null,
      editPostDialog: false,
      modalVisible: false,
      showLinkInput: false,
      texte: "",
      contenu: {
        id: "",
        texte: "",
        image_path: "",
        video_path: "",
        lien: "",
      },

      // editedPostTitle: '',
      // editedPostContent: ''
    };
  },
  computed: {
    filteredPublications() {
      if (this.showApproved === true) {
        return this.approvedPublications;
      } else if (this.showApproved === false) {
        return this.unapprovedPublications;
      } else {
        // Afficher les publications en attente de modification
        return this.waitingForModificationPublications;
      }
    },

    filteredComments() {
    if (!Array.isArray(this.commentaires) || this.commentaires.length === 0) {
      console.log("Aucun commentaire disponible.");
      return []; // Retourner un tableau vide si les commentaires ne sont pas disponibles
    }
    return this.commentaires.filter(
      (commentaire) => commentaire.publication_id === this.selectedPostId
    );
  },
  },

  mounted() {
    this.loadUserDetails();
    this.loadUnapprovedPublications();
    this.loadApprovedPublications();
    this.loadWaitingForModificationPublications();
    this.loadCommentaires(this.selectedPostId);
    console.log(this.publicationId);
  },
  methods: {
    loadCommentaires(publicationId) {
      axios
        .get(`http://127.0.0.1:8000/api/commentaires/${publicationId}`)
        .then((response) => {
          this.commentaires = response.data; // Stockage des commentaires dans la variable
        })
        .catch((error) => {
          console.error(error);
          alert(
            "Erreur lors du chargement des commentaires. Veuillez réessayer plus tard."
          );
        });
    },
    modifierPublication(publicationId) {
      const token = localStorage.getItem("token");

      const headers = { Authorization: `Bearer ${token}` };

      axios
        .put(
          `http://127.0.0.1:8000/api/modifierPublication/${this.publication.id}`,
          this.contenu,
          { headers }
        )
        .catch((error) => {
          console.error(
            "Erreur lors de la modification de la publication:",
            error.response.data.error
          );
        });
      window.location.reload();
    },
    UpdatePost(item) {
      this.publication = item;
      this.contenu = item.contenu;
      this.showLinkInput = true;
    },
    accepterPublication(publicationId) {
      axios
        .post(`http://127.0.0.1:8000/api/publication/accepter/${publicationId}`)
        .then((response) => {
          alert("La publication a été acceptée avec succès");
          this.loadUnapprovedPublications();
          this.loadWaitingForModificationPublications();
        })
        .catch((error) => {
          console.error(error);
          alert(
            "Erreur lors de l'acceptation de la publication. Veuillez réessayer plus tard."
          );
        });
    },

    refuserPublication(publicationId) {
      axios
        .delete(
          `http://127.0.0.1:8000/api/publication/refuser/${publicationId}`
        )
        .then((response) => {
          alert("La publication a été refusée avec succès");
          // Rechargez les publications non approuvées après le refus
          this.loadUnapprovedPublications();
          this.loadWaitingForModificationPublications();
        })
        .catch((error) => {
          console.error(error);
          alert(
            "Erreur lors du refus de la publication. Veuillez réessayer plus tard."
          );
        });
    },

    loadUserDetails() {
      axios
        .get("http://127.0.0.1:8000/api/user", {
          headers: {
            Authorization: "Bearer " + localStorage.getItem("token"),
          },
        })
        .then((response) => {
          this.user = response.data;
        })
        .catch((error) => {
          console.error(error);
        });
    },

    loadUnapprovedPublications() {
      axios
        .get("http://127.0.0.1:8000/api/publicationNonApprouvée")
        .then((response) => {
          this.unapprovedPublications = response.data;
          if (this.unapprovedPublications.length > 0) {
            this.publicationId = this.unapprovedPublications[0].id;
            this.loadCommentaires(this.publicationId);
          }
        })
        .catch((error) => {
          console.error(error);
          alert(
            "Erreur lors du chargement des publications non approuvées. Veuillez réessayer plus tard."
          );
        });
    },
    loadApprovedPublications() {
      axios
        .get("http://127.0.0.1:8000/api/publicationApprouvée")
        .then((response) => {
          this.approvedPublications = response.data;
          if (this.approvedPublications.length > 0) {
            this.publicationId = this.approvedPublications[0].id;
            this.loadCommentaires(this.publicationId);
          }
        })
        .catch((error) => {
          console.error(error);
          alert(
            "Erreur lors du chargement des publications approuvées. Veuillez réessayer plus tard."
          );
        });
    },

    loadWaitingForModificationPublications() {
      axios
        .get("http://127.0.0.1:8000/api/publicationModification")
        .then((response) => {
          // Filtrer les publications en attente d'acceptation de modification
          this.waitingForModificationPublications = response.data.filter(
            (publication) => publication.isApproved === -1
          );
          if (this.waitingForModificationPublications.length > 0) {
            this.publicationId = this.waitingForModificationPublications[0].id;
            this.loadCommentaires(this.publicationId);
          }
        })
        .catch((error) => {
          console.error(error);
          alert(
            "Erreur lors du chargement des publications en attente d'acceptation de modification. Veuillez réessayer plus tard."
          );
        });
    },

    commenterPublication(publication_id) {
      axios
        .post(`http://127.0.0.1:8000/api/commenter/${publication_id}`, {
          contenu_comm: this.newCommentContent,
        })
        .then((response) => {
          alert("Commentaire ajouté avec succès");
          this.newCommentContent = ""; // Effacer le contenu du nouveau commentaire après l'ajout réussi
        })
        .catch((error) => {
          console.error(error);
          alert(
            "Erreur lors de l'ajout du commentaire. Veuillez réessayer plus tard."
          );
        });
    },

    formatDateTime(datetime) {
      const options = {
        month: "long",
        day: "numeric",
        hour: "numeric",
        minute: "numeric",
      };
      return new Date(datetime).toLocaleDateString("en-US", options);
    },

    supprimerPublication(publicationId) {
      // Récupérer le token JWT du local storage
      const token = localStorage.getItem("token");

      // Configurer les headers de la requête DELETE avec le token JWT
      const headers = { Authorization: `Bearer ${token}` };

      // Envoyer la requête DELETE avec les headers configurés
      axios
        .delete(
          `http://127.0.0.1:8000/api/supprimerPublication/${publicationId}`,
          { headers }
        )
        .then((response) => {
          console.log(response.data.message);
          this.loadApprovedPublications();
          window.location.reload();
        })
        .catch((error) => {
          console.error(
            "Erreur lors de la suppression de la publication:",
            error.response.data.error
          );
        });
    },
  },
};
</script>

<style>
.approved {
  border: 2px solid green; /* Exemple de style pour les posts approuvés */
}

.not-approved {
  border: 2px solid red; /* Exemple de style pour les posts non approuvés */
}
.modal-margin {
  margin: 100px !important; /* Exemple de style pour les posts non approuvés */
}
</style>
