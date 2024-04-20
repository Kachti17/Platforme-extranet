<template>
<footer class="iq-footer bg-white">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6">
            <ul class="list-inline mb-0">
               <li class="list-inline-item"><router-link :to="{ name: 'social.privacy'}">Privacy Policy</router-link></li>
               <li class="list-inline-item"><router-link :to="{ name: 'social.termofservice'}">Term of Use</router-link></li>
            </ul>
         </div>
         <div class="col-lg-6 d-flex justify-content-end">
            Copyright 2020 <a href="#">SocialV</a> All Rights Reserved.
         </div>
      </div>
   </div>
</footer>
</template>
<script>
export default {
  name: 'DefaultFooter'
}
</script>
