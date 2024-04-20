<template>
      <div class="row">
         <div class="col-sm-12">
            <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
            <div class="inner-page-title">
               <h3 class="text-white">Validate Wizard Page</h3>
               <p class="text-white">lorem ipsum</p>
            </div>
            </div>
         </div>
         <div class="col-sm-12 col-lg-12">
            <iq-card>
               <template v-slot:headerTitle>
                  <h4 class="card-title">Validate Wizard</h4>
               </template>
               <template v-slot:body>
                  <div class="stepwizard mt-4"></div>
                  <nav>
                     <div class="nav nav-pills nav-fill stepwizard-row" id="nav-tab" role="tablist">
                        <a :class="checkActive(0, 1)" class="nav-link btn active" id="user-tab" data-toggle="tab" href="#user-detail">
                           <i class="material-symbols-outlined bg-soft-primary text-primary">lock_open</i><span>User Detail</span>
                        </a>
                        <a :class="checkActive(1, 2)" class="nav-link btn" id="document-tab" data-toggle="tab" href="#document-detail">
                           <i class="material-symbols-outlined bg-soft-danger text-danger">person</i><span>Document Detail</span>
                        </a>
                        <a :class="checkActive(2, 3)" class="nav-link btn" id="bank-tab" data-toggle="tab" href="#bank-detail">
                           <i class="material-symbols-outlined bg-soft-success text-success">photo_camera</i><span>Bank Detail</span>
                        </a>
                        <a :class="checkActive(3, 4)" class="nav-link btn" id="cpnfirm-tab" data-toggle="tab" href="#cpnfirm-data">
                           <i class="material-symbols-outlined bg-soft-warning text-warning">done</i><span>Confirm</span>
                        </a>
                     </div>
                  </nav>
                  <fieldset :class="current == 1 ? 'd-block' : 'd-none'">
                     <Step1 @onNext="changeTab" />
                  </fieldset>
                  <fieldset :class="current == 2 ? 'd-block' : 'd-none'">
                     <Step2 @onNext="changeTab" />
                  </fieldset>
                  <fieldset :class="current == 3 ? 'd-block' : 'd-none'">
                     <Step3 @onNext="changeTab" />
                  </fieldset>
                  <fieldset :class="current == 4 ? 'd-block' : 'd-none'">
                     <Step4 @onNext="changeTab" />
                  </fieldset>
               </template>
            </iq-card>
         </div>
      </div>
</template>
<script>
import Step1 from './ValidateForms/Step1'
import Step2 from './ValidateForms/Step2'
import Step3 from './ValidateForms/Step3'
import Step4 from './ValidateForms/Step4'

export default {
  name: 'Validate',
  components: {
    Step1,
    Step2,
    Step3,
    Step4
  },
  data () {
    return {
      current: 1,
      name: ''
    }
  },
  methods: {
    changeTab (tab) {
      this.current = tab
      window.scrollTo({ top: 0, behavior: 'smooth' })
    },
    checkActive (item, active) {
      let className = ''
      if (this.current > item) {
        className = 'active'
      }
      if (this.current > active) {
        className = className + ' done'
      }
      return className
    }
  }

}
</script>
