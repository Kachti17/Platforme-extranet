<template>
  <section class="sign-in-page">
    <div id="container-inside">
      <div id="circle-small"></div>
      <div id="circle-medium"></div>
      <div id="circle-large"></div>
      <div id="circle-xlarge"></div>
      <div id="circle-xxlarge"></div>
    </div>
    <div class="container p-0">
      <div class="row no-gutters">
        <div class="col-md-6 text-center pt-5">
          <div class="sign-in-detail text-white">
            <!-- <a class="sign-in-logo mb-5" href="#"><img src="@/assets/images/logo-full.png" class="img-fluid" alt="logo"></a> -->
            <!-- Swiper pour le carrousel d'images -->
            <Swiper :options="options">
              <!-- <SwiperSlide class="item">
                <img src="@/assets/images/digiRam.jpg" class="img-fluid mb-4" alt="logo" width="200px" height="200px">
                <h4 class="mb-1 text-white">Gérez vos commandes</h4>
                <p>Il est établi de longue date qu'un lecteur sera distrait par le contenu lisible.</p>
              </SwiperSlide>
              <SwiperSlide class="item">
                <img src="@/assets/images/digitrendsBur.jpg" class="img-fluid mb-4" alt="logo" width="200px" height="200px">
                <h4 class="mb-1 text-white">Gérez vos commandes</h4>
                <p>Il est établi de longue date qu'un lecteur sera distrait par le contenu lisible.</p>
              </SwiperSlide> -->
              <SwiperSlide class="item">
                <img
                  src="@/assets/images/digitrendsBlue.jpg"
                  class="img-fluid mb-4"
                  alt="logo"
                  width="200px"
                  height="200px"
                />
                <h4 class="mb-1 text-white">Gérez vos commandes</h4>
                <p>
                  Il est établi de longue date qu'un lecteur sera distrait par
                  le contenu lisible.
                </p>
              </SwiperSlide>
            </Swiper>
          </div>
        </div>
        <div class="col-md-6 bg-white pt-5 pt-5 pb-lg-0 pb-5">
          <div class="sign-in-from pb-5">
            <h1 class="mb-0">Connection</h1>
            <p>
              Enter your e-mail address and password to access the platform.
            </p>
            <form class="mt-4" @submit.prevent="onSubmit">
              <div class="form-group">
                <label class="form-label" for="exampleInputEmail1"
                  >E-mail address</label
                >
                <input
                  type="email"
                  class="form-control mb-0"
                  id="exampleInputEmail1"
                  placeholder="Enter your e-mail address
"
                  v-model="email"
                />
              </div>
              <div class="form-group">
                <label class="form-label" for="exampleInputPassword1"
                  >Password</label
                >
                <router-link
                  :to="{ name: 'auth1.recoverpassword1' }"
                  class="float-end"
                >
                  Forgot Password ?</router-link
                >
                <input
                  type="password"
                  class="form-control mb-0"
                  id="exampleInputPassword1"
                  placeholder="Password "
                  v-model="password"
                />
              </div>
              <div class="d-inline-block w-100">
                <div class="form-check d-inline-block mt-2 pt-1">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="customCheck11"
                  />
                  <label class="form-check-label" for="customCheck11"
                    >Remember me</label
                  >
                </div>
                <button type="submit" class="btn btn-primary float-end">
                  Connection
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      email: "",
      password: "",
      loggedIn: false,
      user: {},
      error: "",
    };
  },
  methods: {
    login() {
      axios
        .post("http://127.0.0.1:8000/api/login", {
          email: this.email,
          password: this.password,
        })
        .then((response) => {
          localStorage.setItem("token", response.data.token);

          this.loggedIn = true;
          this.loadUserDetails();
        })
        .catch((error) => {
          this.error = error.response.data.message;
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
    onSubmit() {
      this.login(); // Appeler la fonction de connexion lors de la soumission du formulaire
      this.$router.push({ name: "social.list" }); // Rediriger vers la page 'social.list'
    },
  },
  created() {
    const token = localStorage.getItem("token");
    if (token) {
      this.loggedIn = true;
      this.loadUserDetails();
    }
  },
};
</script>
