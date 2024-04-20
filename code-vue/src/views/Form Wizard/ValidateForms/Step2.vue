<template>
   <div>
      <div class="row setup-content" id="document-detail">
         <div class="col-sm-12">
            <div class="col-md-12 p-0">
               <h3 class="mb-4">Document Details:</h3>
               <div class="row">
                  <div class="col-md-6 form-group">
                      <label for="fname" class="form-label">Company Name: *</label>
                      <input type="text" class="form-control" required="required" id="fname" name="fname" placeholder="Company Name">
                  </div>
                  <div class="col-md-6 form-group">
                      <div class="form-group">
                      <label for="ccno" class="form-label">Contact Number: *</label>
                      <input type="text" class="form-control" required="required" id="ccno" name="ccno" placeholder="Contact Number">
                      </div>
                  </div>
                  <div class="col-md-6 form-group">
                      <div class="form-group">
                      <label for="url" class="form-label">Company Url: *</label>
                      <input type="text" class="form-control" required="required" id="url" name="url" placeholder="Company Url.">
                      </div>
                  </div>
                  <div class="col-md-6 form-group">
                      <div class="form-group">
                      <label for="cemail" class="form-label">Company Mail Id: *</label>
                      <input type="email" class="form-control" required="required" id="cemail" name="cemail" placeholder="Company Mail Id.">
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                      <label for="cadd" class="form-label">Company Address: *</label>
                      <textarea name="cadd" required="required" id="cadd" class="form-control" rows="5"></textarea>
                      </div>
                  </div>
              </div>
              <button type="button" class="btn btn-secondary" data-enchanter="previous">Previous</button>
              <button @click="changeTab(3)" class="btn btn-primary nextBtn  float-end" type="button" >Next</button>
            </div>
         </div>
      </div>
   </div>
</template>
<script>
export default {
  name: 'Step2',
  methods: {
    changeTab (value) {
      this.$emit('onNext', value)
    }
  }
}
</script>
