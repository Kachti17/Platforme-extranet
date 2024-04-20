<template>
  <div class="mt-5 iq-maintenance">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-sm-12 text-center">
          <div class="iq-maintenance">
            <img :src="require('../../assets/images/error/02.png')" class="img-fluid" alt="error">
            <h3 class="mt-4 mb-1 text-center">We are Currently Performing Maintenance</h3>
            <p class="text-center">Please check back in sometime.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <div class="row mt-3">
        <div class="col-lg-4">
          <div class="card text-center">
            <div class="card-body">
              <i class="material-symbols-outlined text-primary md-64">dvr</i>
              <h5 class="card-title mt-1 text-center">Why is the Site Down?</h5>
              <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-center">
            <div class="card-body">
              <i class="material-symbols-outlined text-primary md-64">history </i>
              <h5 class="card-title mt-1 text-center">What is the Downtime?</h5>
              <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-center">
            <div class="card-body">
              <i class="material-symbols-outlined text-primary md-64">info</i>
              <h5 class="card-title mt-1 text-center">Do you need Support?</h5>
              <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
// import { socialvue } from '../../config/pluginInit'

export default {
  name: 'Maintenance',
  mounted () {
    // socialvue.index()
  }
}
</script>
