<template>
  <div class="iq-top-navbar">
    <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar p-lg-0">
      <div class="container-fluid navbar-inner">
        <div class="d-flex align-items-center gap-3">
          <router-link
            :to="{ name: 'social.list' }"
            class="d-flex align-items-center gap-2 iq-header-logo d-none d-lg-flex iq-logo-none"
          >
            <svg
              width="50"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M1.67733 9.50001L7.88976 20.2602C9.81426 23.5936 14.6255 23.5936 16.55 20.2602L22.7624 9.5C24.6869 6.16666 22.2813 2 18.4323 2H6.00746C2.15845 2 -0.247164 6.16668 1.67733 9.50001ZM14.818 19.2602C13.6633 21.2602 10.7765 21.2602 9.62181 19.2602L9.46165 18.9828L9.46597 18.7275C9.48329 17.7026 9.76288 16.6993 10.2781 15.8131L12.0767 12.7195L14.1092 16.2155C14.4957 16.8803 14.7508 17.6132 14.8607 18.3743L14.9544 19.0239L14.818 19.2602ZM16.4299 16.4683L19.3673 11.3806C18.7773 11.5172 18.172 11.5868 17.5629 11.5868H13.7316L15.8382 15.2102C16.0721 15.6125 16.2699 16.0335 16.4299 16.4683ZM20.9542 8.63193L21.0304 8.5C22.1851 6.5 20.7417 4 18.4323 4H17.8353L17.1846 4.56727C16.6902 4.99824 16.2698 5.50736 15.9402 6.07437L13.8981 9.58676H17.5629C18.4271 9.58676 19.281 9.40011 20.0663 9.03957L20.9542 8.63193ZM14.9554 4C14.6791 4.33499 14.4301 4.69248 14.2111 5.06912L12.0767 8.74038L10.0324 5.22419C9.77912 4.78855 9.48582 4.37881 9.15689 4H14.9554ZM6.15405 4H6.00746C3.69806 4 2.25468 6.50001 3.40938 8.50001L3.4915 8.64223L4.37838 9.04644C5.15962 9.40251 6.00817 9.58676 6.86672 9.58676H10.2553L8.30338 6.22943C7.9234 5.57587 7.42333 5.00001 6.8295 4.53215L6.15405 4ZM5.07407 11.3833L7.88909 16.2591C8.05955 15.7565 8.28025 15.2702 8.54905 14.8079L10.4218 11.5868H6.86672C6.26169 11.5868 5.66037 11.5181 5.07407 11.3833Z"
                fill="currentColor"
              />
            </svg>
          </router-link>
          <h3 class="logo-title d-none d-lg-block" data-setting="app_name">
            Digitrends
          </h3>
          <router-link
            class="sidebar-toggle"
            @click="toggleSidebar"
            data-toggle="sidebar"
            data-active="true"
            to="#"
          >
            <div class="icon material-symbols-outlined iq-burger-menu">
              menu
            </div>
          </router-link>
        </div>
        <div class="d-block d-lg-none">
          <router-link
            :to="{ name: 'social.list' }"
            class="d-flex align-items-center gap-2 iq-header-logo"
          >
            <svg
              width="30"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M1.67733 9.50001L7.88976 20.2602C9.81426 23.5936 14.6255 23.5936 16.55 20.2602L22.7624 9.5C24.6869 6.16666 22.2813 2 18.4323 2H6.00746C2.15845 2 -0.247164 6.16668 1.67733 9.50001ZM14.818 19.2602C13.6633 21.2602 10.7765 21.2602 9.62181 19.2602L9.46165 18.9828L9.46597 18.7275C9.48329 17.7026 9.76288 16.6993 10.2781 15.8131L12.0767 12.7195L14.1092 16.2155C14.4957 16.8803 14.7508 17.6132 14.8607 18.3743L14.9544 19.0239L14.818 19.2602ZM16.4299 16.4683L19.3673 11.3806C18.7773 11.5172 18.172 11.5868 17.5629 11.5868H13.7316L15.8382 15.2102C16.0721 15.6125 16.2699 16.0335 16.4299 16.4683ZM20.9542 8.63193L21.0304 8.5C22.1851 6.5 20.7417 4 18.4323 4H17.8353L17.1846 4.56727C16.6902 4.99824 16.2698 5.50736 15.9402 6.07437L13.8981 9.58676H17.5629C18.4271 9.58676 19.281 9.40011 20.0663 9.03957L20.9542 8.63193ZM14.9554 4C14.6791 4.33499 14.4301 4.69248 14.2111 5.06912L12.0767 8.74038L10.0324 5.22419C9.77912 4.78855 9.48582 4.37881 9.15689 4H14.9554ZM6.15405 4H6.00746C3.69806 4 2.25468 6.50001 3.40938 8.50001L3.4915 8.64223L4.37838 9.04644C5.15962 9.40251 6.00817 9.58676 6.86672 9.58676H10.2553L8.30338 6.22943C7.9234 5.57587 7.42333 5.00001 6.8295 4.53215L6.15405 4ZM5.07407 11.3833L7.88909 16.2591C8.05955 15.7565 8.28025 15.2702 8.54905 14.8079L10.4218 11.5868H6.86672C6.26169 11.5868 5.66037 11.5181 5.07407 11.3833Z"
                fill="currentColor"
              />
            </svg>
            <h3 class="logo-title d-none d-sm-block" data-setting="app_name">
              Digitrends
            </h3>
          </router-link>
        </div>

        <div class="iq-search-bar device-search position-relative">
          <form
            action="#"
            class="searchbox"
            data-bs-toggle="modal"
            data-bs-target="#exampleModalFullscreenSm"
          >
            <a class="search-link d-none d-lg-block" href="javascript:void(0);">
              <span class="material-symbols-outlined">search</span>
            </a>
            <input
              type="text"
              class="text search-input form-control bg-soft-primary d-none d-lg-block"
              placeholder="Search here..."
            />
            <a
              class="d-lg-none d-flex"
              href="javascript:void(0);"
              data-bs-toggle="modal"
              data-bs-target="#exampleModalFullscreenSm"
            >
              <span class="material-symbols-outlined">search</span>
            </a>
          </form>
          <!--  modal full screen modal -->
          <div
            class="modal fade search-modal"
            id="exampleModalFullscreenSm"
            aria-labelledby="exampleModalFullscreenSmLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-fullscreen-lg-down">
              <div class="modal-content">
                <div class="modal-header py-2">
                  <div
                    class="d-flex align-items-center justify-content-between d-lg-none w-100"
                  >
                    <form
                      action="#"
                      class="searchbox w-50"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModalFullscreenSm"
                    >
                      <a class="search-link" href="javascript:void(0);">
                        <span class="material-symbols-outlined">search</span>
                      </a>
                      <input
                        type="text"
                        class="text search-input form-control bg-soft-primary"
                        placeholder="Search here..."
                      />
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div
          class="offcanvas offcanvas-end iq-profile-menu-responsive"
          tabindex="-1"
          id="offcanvasRight"
          aria-labelledby="offcanvasRightLabel"
        >
          <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">General Setting</h5>
            <button
              type="button"
              class="btn-close text-reset"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body pt-0">
            <ul class="navbar-nav ms-auto navbar-list">
              <li class="nav-item">
                <router-link
                  :to="{ name: 'social.list' }"
                  class="d-flex align-items-center"
                >
                  <i class="material-symbols-outlined">home</i>
                  <span class="mobile-text d-lg-none ms-3">Home</span>
                </router-link>
              </li>

              <li class="nav-item dropdown d-none d-lg-block">
                <a
                  href="javascript:void(0);"
                  class="search-toggle dropdown-toggle d-flex align-items-center"
                  id="notification-drop"
                  data-bs-toggle="dropdown"
                >
                  <i class="material-symbols-outlined">notifications</i>
                </a>
                <div
                  class="sub-drop dropdown-menu"
                  aria-labelledby="notification-drop"
                >
                  <div class="card shadow-none m-0">
                    <div
                      class="card-header d-flex justify-content-between bg-primary"
                    >
                      <div class="header-title bg-primary">
                        <h5 class="mb-0 text-white">All Notifications</h5>
                      </div>
                      <small class="badge bg-light text-dark">4</small>
                    </div>
                    <div class="card-body p-0">
                      <a href="#" class="iq-sub-card">
                        <div class="d-flex align-items-center">
                          <div class="">
                            <img
                              class="avatar-40 rounded"
                              src="@/assets/images/user/01.jpg"
                              alt=""
                            />
                          </div>
                          <div class="ms-3 w-100">
                            <h6 class="mb-0">Emma Watson Bni</h6>
                            <div
                              class="d-flex justify-content-between align-items-center"
                            >
                              <p class="mb-0">95 MB</p>
                              <small class="float-right font-size-12"
                                >Just Now</small
                              >
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item d-lg-none">
                <router-link
                  :to="{ name: 'social.notification' }"
                  class="d-flex align-items-center"
                >
                  <i class="material-symbols-outlined">notifications</i>
                  <span class="mobile-text ms-3">Notifications</span>
                </router-link>
              </li>
              <li class="nav-item dropdown d-none d-lg-block">
                <a
                  href="javascript:void(0);"
                  class="dropdown-toggle d-flex align-items-center"
                  id="mail-drop"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="material-symbols-outlined">mail</i>
                  <span class="mobile-text d-lg-none ms-3">Message</span>
                </a>
                <div class="sub-drop dropdown-menu" aria-labelledby="mail-drop">
                  <div class="card shadow-none m-0">
                    <div
                      class="card-header d-flex justify-content-between bg-primary"
                    >
                      <div class="header-title bg-primary">
                        <h5 class="mb-0 text-white">All Message</h5>
                      </div>
                      <small class="badge bg-light text-dark">1</small>
                    </div>
                    <div class="card-body p-0">
                      <a href="#" class="iq-sub-card">
                        <div class="d-flex align-items-center">
                          <div class="">
                            <img
                              class="avatar-40 rounded"
                              src="@/assets/images/user/01.jpg"
                              alt=""
                              loading="lazy"
                            />
                          </div>
                          <div class="w-100 ms-3">
                            <h6 class="mb-0">Bni Emma Watson</h6>
                            <small class="float-left font-size-12"
                              >13 Jun</small
                            >
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item d-lg-none">
                <router-link
                  :to="{ name: 'social.friendlist' }"
                  class="dropdown-toggle d-flex align-items-center"
                  id="mail-drop-1"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="material-symbols-outlined">mail</i>
                  <span class="mobile-text ms-3">Message</span>
                </router-link>
              </li>
              <li class="nav-item dropdown d-none d-lg-block">
                <a
                  href="javascript:void(0);"
                  class="d-flex align-items-center dropdown-toggle"
                  id="drop-down-arrow"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img
                    v-if="user && user.img_profile"
                    :src="user.img_profile"
                    class="img-fluid rounded-circle me-3"
                    alt="user"
                    loading="lazy"
                    style="max-width: 25px; height: auto"
                  />
                  <img
                    v-else
                    src="@/assets/images/user/user.png"
                    class="img-fluid rounded-circle me-3"
                    alt="user"
                    loading="lazy"
                    style="max-width: 25px; height: auto"
                  />
                  <div class="caption">
                    <h6 class="mb-0 line-height">
                      {{ user ? user.nom + " " + user.prenom : "Utilisateur" }}
                    </h6>
                  </div>
                </a>
                <div
                  class="sub-drop dropdown-menu caption-menu"
                  aria-labelledby="drop-down-arrow"
                >
                  <div class="card shadow-none m-0">
                    <div class="card-header">
                      <div class="header-title">
                        <h5 class="mb-0">
                          Hello
                          {{
                            user ? user.nom + " " + user.prenom : "Utilisateur"
                          }}
                        </h5>
                      </div>
                    </div>
                    <div class="d-flex align-items-center iq-sub-card border-0">
                      <span class="material-symbols-outlined">
                        line_style
                      </span>
                      <div class="ms-3">
                        <router-link
                          :to="{ name: 'social.profilemain' }"
                          class="mb-0 h6"
                        >
                          My Profile
                        </router-link>
                      </div>
                    </div>

                    <div class="d-flex align-items-center iq-sub-card border-0">
                      <span class="material-symbols-outlined"> edit_note </span>
                      <div class="ms-3">
                        <router-link
                          :to="{ name: 'user.profile-edit' }"
                          class="mb-0 h6"
                        >
                          Edit Profile
                        </router-link>
                      </div>
                    </div>

                    <div class="d-flex align-items-center iq-sub-card">
    <span class="material-symbols-outlined"> login </span>
    <div class="ms-3">
      <router-link
        :to="{ name: 'auth1.sign-in1' }"
        class="mb-0 h6"
        @click="logout"
      >
        Sign out
      </router-link>
    </div>
  </div>
                  </div>
                </div>
              </li>
              <li class="nav-item d-lg-none">
                <router-link
                  :to="{ name: 'social.profilemain' }"
                  class="dropdown-toggle d-flex align-items-center"
                >
                  <span class="material-symbols-outlined">person</span>
                  <span class="mobile-text ms-3">Profile</span>
                </router-link>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
import { useStore } from "vuex";
import { computed } from "vue";

import axios from "axios";

export default {
  data() {
    return {
      user: null,
    };
  },
  mounted() {
    this.loadUserDetails();
  },
  name: "DefaultHeader",
  props: {
    image: {
      type: String,
      default: require("@/assets/images/logo.png"),
    },
  },
  setup() {
    const store = useStore();
    const sidebarType = computed(() => store.getters["setting/sidebar_type"]);
    const toggleSidebar = () => {
      if (sidebarType.value.includes("sidebar-mini")) {
        store.dispatch(
          "setting/sidebar_type",
          sidebarType.value.filter((item) => item !== "sidebar-mini")
        );
      } else {
        store.dispatch("setting/sidebar_type", [
          ...sidebarType.value,
          "sidebar-mini",
        ]);
      }
    };
    return {
      store,
      sidebarType,
      toggleSidebar,
    };
  },
  methods: {
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
    logout() {
      axios.post("http://127.0.0.1:8000/api/logout") // Appel à l'API Laravel pour la déconnexion
        .then((response) => {
          localStorage.removeItem("token"); // Suppression du token du local storage
          // Redirection vers la page de connexion ou autre page appropriée
          this.$router.push({ name: "auth1.sign-in1" }); // Redirection vers la page de connexion
          // Redirection vers la page d'inscription après la déconnexion
          this.$router.push({ name: "auth1.register" }); // Remplacez 'auth1.register' par l'URL appropriée
        })
        .catch((error) => {
          console.error("Erreur lors de la déconnexion :", error);
        });
    },
  },
};
</script>
