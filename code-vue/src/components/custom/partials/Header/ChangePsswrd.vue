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
          <a class="sign-in-logo mb-5" href="#"><img src="@/assets/images/logo-full.png" class="img-fluid" alt="logo"></a>
          <Swiper :options="options">
            <SwiperSlide  class="item">
              <img src="@/assets/images/login/1.png" class="img-fluid mb-4" alt="logo">
              <h4 class="mb-1 text-white">Manage your orders</h4>
              <p>It is a long established fact that a reader will be distracted by the readable content.</p>
            </SwiperSlide>
            <SwiperSlide class="item">
              <img src="@/assets/images/login/2.png" class="img-fluid mb-4" alt="logo">
              <h4 class="mb-1 text-white">Manage your orders</h4>
              <p>It is a long established fact that a reader will be distracted by the readable content.</p>
            </SwiperSlide>
            <SwiperSlide class="item">
              <img src="@/assets/images/login/3.png" class="img-fluid mb-4" alt="logo">
              <h4 class="mb-1 text-white">Manage your orders</h4>
              <p>It is a long established fact that a reader will be distracted by the readable content.</p>
            </SwiperSlide>
          </Swiper>
        </div>
      </div>
      <div class="col-md-6 bg-white pt-5 pb-lg-0 pb-5">
        <div class="sign-in-from">
          <h1 class="mb-0">Reset Password</h1>
          <p>Enter your email address and we'll send you an email with instructions to reset your password.</p>
          <form class="mt-4" @submit.prevent="onSubmit()">
            <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="d-inline-block w-100">
                                   <button type="submit" class="btn btn-primary float-right">Reset Password</button>
                                </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</template>
<script>

import Swiper from '../../../components/custom/slider/Swiper'
import SwiperSlide from '../../../components/custom/slider/SwiperSlide'
export default {
  name: 'RecoverPassword1',
  components: { Swiper, SwiperSlide },
  data () {
    return {
      options: {
        centeredSlides: false,
        loop: false,
        slidesPerView: 1,
        autoplay: {
          delay: 3000
        },
        spaceBetween: 15,
        pagination: {
          el: '.swiper-pagination'
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },

        // And if we need scrollbar
        scrollbar: {
          el: '.swiper-scrollbar'
        }
      }
    }
  },
  methods: {
    onSubmit () {
      this.$router.push({ name: 'auth1.sign-in1' })
    }
  }
}
</script>
