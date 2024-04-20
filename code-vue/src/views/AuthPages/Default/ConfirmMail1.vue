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
      <div class="col-md-6 bg-white pt-5 pb-5">
        <div class="sign-in-from">
          <img src="@/assets/images/login/mail.png" width="80"  alt="">
          <h1 class="mt-3 mb-0">Success !</h1>
          <p>A email has been send to youremail@domain.com. Please check for an email from company and click on the included link to reset your password.</p>
          <div class="d-inline-block w-100">

            <button type="submit" class="btn btn-primary mt-3" @click="$router.push({name: 'social.list'})">
              <span class="d-flex align-items-center">
                <i class="material-symbols-outlined md-18 me-1">
                  home
                </i>
                Back to Home
              </span>
            </button>
          </div>
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
  name: 'ConfirmMail1',
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
  }
}
</script>
