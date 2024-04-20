<template>
  <div class="row">
    <div class="col-sm-12">
        <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
          <div class="inner-page-title">
              <h3 class="text-white">Form Switch Page</h3>
              <p class="text-white">lorem ipsum</p>
          </div>
        </div>
    </div>
    <div class="col-lg-12">
      <iq-card>
        <template v-slot:headerTitle>
          <h4 class="card-title">State</h4>
        </template>
        <template v-slot:body>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
            <div class="form-check form-switch form-check-inline">
              <input class="form-check-input" type="checkbox" id="customSwitch1">
                  <label class="form-check-label" for="customSwitch1">false / Inactive</label>
                </div>
              <div class="form-check form-switch form-check-inline">
                  <input class="form-check-input" type="checkbox" id="customSwitch2" checked="">
                    <label class="form-check-label" for="customSwitch2">true / active</label>
              </div>
              <div class="form-check form-switch form-check-inline">
                  <input class="form-check-input" type="checkbox" checked="" id="customSwitch3" disabled>
                    <label class="form-check-label" for="customSwitch3">disable / active</label>
              </div>
              <div class="form-check form-switch form-check-inline">
                  <input class="form-check-input" type="checkbox" id="customSwitch4" disabled>
                      <label class="form-check-label" for="customSwitch4">disable / Inactive</label>
              </div>
        </template>
      </iq-card>
    </div>
    <div class="col-lg-12">
      <iq-card>
        <template v-slot:headerTitle>
          <h4 class="card-title">Color</h4>
        </template>
        <template v-slot:body>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
          <div class="form-check form-switch form-check-inline">
                              <input type="checkbox" class="form-check-input bg-primary" id="customSwitch01" checked="">
                              <label class="form-check-label" for="customSwitch01">Primary</label>
                          </div>
                          <div class="form-check form-switch form-check-inline">
                              <input type="checkbox" class="form-check-input bg-success" id="customSwitch02" checked="">
                              <label class="form-check-label" for="customSwitch02">Success</label>
                          </div>
                          <div class="form-check form-switch form-check-inline">
                              <input type="checkbox" class="form-check-input bg-danger" id="customSwitch03" checked="">
                              <label class="form-check-label" for="customSwitch03">Danger</label>
                          </div>
                          <div class="form-check form-switch form-check-inline">
                              <input type="checkbox" class="form-check-input bg-waring" id="customSwitch04" checked="">
                              <label class="form-check-label" for="customSwitch04">Waring</label>
                          </div>
                          <div class="form-check form-switch form-check-inline">
                              <input type="checkbox" class="form-check-input bg-dark" id="customSwitch05" checked="">
                              <label class="form-check-label" for="customSwitch05">Dark</label>
                          </div>
                          <div class="form-check form-switch form-check-inline">
                              <input type="checkbox" class="form-check-input bg-info" id="customSwitch06" checked="">
                              <label class="form-check-label" for="customSwitch06">Info</label>
                          </div>
        </template>
      </iq-card>
    </div>
  </div>
</template>
<script>
// import { socialvue } from '../../config/pluginInit'

export default {
  name: 'FormSwitches',
  mounted () {
    // socialvue.index()
  },
  data () {
    return {
    }
  }
}
</script>
