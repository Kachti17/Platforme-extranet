<template>
    <div>
      <div class="row setup-content" id="bank-detail">
         <div class="col-sm-12">
            <div class="col-md-12 p-0">
               <h3 class="mb-4">Bank Detail:</h3>
               <div class="row">
                  <div class="col-md-6 form-group">
                      <label for="panno" class="form-label">Pan No: *</label>
                      <input type="text" class="form-control" required="required" id="panno" name="panno" placeholder="Pan No.">
                  </div>
                  <div class="col-md-6 form-group">
                      <label for="accno" class="form-label">Account No: *</label>
                      <input type="text" class="form-control" required="required" id="accno" name="accno" placeholder="Account No.">
                  </div>
                  <div class="col-md-6 form-group">
                      <label for="accname" class="form-label">Account Holder Name: *</label>
                      <input type="text" class="form-control" required="required" id="accname" name="accname" placeholder="Account Holder Name.">
                  </div>
                  <div class="col-md-6 form-group">
                      <label for="ifsc" class="form-label">IFSC Code: *</label>
                      <input type="text" class="form-control" required="required" id="ifsc" name="ifsc" placeholder="IFSC Code.">
                  </div>
                  <div class="col-md-6 form-group">
                      <label for="bankname" class="form-label">Bank Name: *</label>
                      <input type="text" class="form-control" required="required" id="bankname" name="bankname" placeholder="Bank Name.">
                  </div>
                  <div class="col-md-6 form-group">
                      <label for="branch" class="form-label">Bank Branch Name: *</label>
                      <input type="text" class="form-control" required="required" id="branch" name="branch" placeholder="Bank Branch Name.">
                  </div>
              </div>
              <button type="button" class="btn btn-secondary" data-enchanter="previous">Previous</button>
               <button @click="changeTab(4)" class="btn btn-primary nextBtn  float-end" type="button" >Next</button>
            </div>
         </div>
      </div>
    </div>
</template>
<script>
export default {
  name: 'Step3',
  methods: {
    changeTab (value) {
      this.$emit('onNext', value)
    }
  }
}
</script>
