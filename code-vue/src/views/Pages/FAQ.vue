<template>
  <div class="row">
    <div class="col-sm-12">
      <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
        <div class="inner-page-title">
          <h3 class="text-white">FAQ Page</h3>
          <p class="text-white">lorem ipsum</p>
        </div>
      </div>
    </div>
    <div id="faqAccordion" class="container">
    <div class="col-lg-12">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item mb-3" v-for="(item,index) in faqList" :key="index">
            <h2 class="accordion-header" id="heading1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" :data-bs-target="'#collapse'+index" aria-expanded="true" :aria-controls="'collapse'+index">
              {{ item.title }}
              </button>
            </h2>
            <div :id="'collapse'+index" class="accordion-collapse collapse " aria-labelledby="heading1" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <p>{{ item.description }}</p>
              </div>
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
  name: 'FAQ',
  mounted () {
    // socialvue.index()
  },
  data () {
    return {
      faqList: [
        {
          title: 'It is a long established fact that a reader will be?',
          description: 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.'  
        },
        {
          title: 'Distracted by the readable content of a page whent?',
          description: 'It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.'
        },
        {
          title: 'What is user interface kit?',
          description: 'It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.'
        },
        {
          title: 'The readable content of a page when looking at its layout?',
          description: 'It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.'
        },
        {
          title: 'It is a long established fact that a reader will be?',
          description: 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.'
        },
        {
          title: 'Distracted by the readable content of a page whent?',
          description: 'It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.'
        },
        {
          title: 'What is user interface kit?',
          description: 'It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.'
        }
      ]
    }
  }
}
</script>
