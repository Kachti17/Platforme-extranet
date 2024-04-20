<template>
   <div class="row">
      <div class="col-sm-12">
         <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
         <div class="inner-page-title">
            <h3 class="text-white">Vertical Wizard Page</h3>
            <p class="text-white">lorem ipsum</p>
         </div>
         </div>
      </div>
      <div class="col-sm-12 col-lg-12">
         <iq-card>
            <template v-slot:headerTitle>
               <h4 class="card-title">Vertical Wizard</h4>
            </template>
            <template v-slot:body>
               <div class="row">
                  <div class="col-md-3">
                     <ul id="top-tabbar-vertical" class="p-0">
                        <li :class="checkActive(0, 1)" @click="changeTab(1)" id="personal">
                           <a href="javascript:void(0);">
                           <i class="material-symbols-outlined bg-soft-primary text-primary">lock_open</i><span>Personal</span>
                           </a>
                        </li>
                        <li :class="checkActive(1, 2)" @click="changeTab(2)" id="contact">
                           <a href="javascript:void(0);">
                           <i class="material-symbols-outlined bg-soft-danger text-danger">person</i><span>Contact</span>
                           </a>
                        </li>
                        <li :class="checkActive(2, 3)" @click="changeTab(3)" id="official">
                           <a href="javascript:void(0);">
                           <i class="material-symbols-outlined bg-soft-success text-success">photo_camera</i><span>Official</span>
                           </a>
                        </li>
                        <li :class="checkActive(3, 4)" @click="changeTab(4)" id="payment">
                           <a href="javascript:void(0);">
                           <i class="material-symbols-outlined bg-soft-warning text-warning">done</i><span>Payment</span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-9">
                        <form id="form-wizard3" class="text-center">
                           <!-- fieldsets -->
                           <fieldset :class="current == 1 ? 'd-block' : 'd-none'">
                              <div class="form-card text-start">
                                 <div class="row">
                                    <div class="col-12">
                                       <h3 class="mb-4">User Information:</h3>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label" for="fname">First Name: *</label>
                                          <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required="required" />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label" for="lname">Last Name: *</label>
                                          <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label">Gender: *</label>
                                          <div class="form-check">
                                             <div class="form-check form-check-inline">
                                                <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
                                                <label class="form-check-label" for="customRadio1"> Male</label>
                                             </div>
                                             <div class="form-check form-check-inline">
                                                <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                                                <label class="form-check-label" for="customRadio2"> Female</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label" for="dob">Date Of Birth: *</label>
                                          <input type="date" class="form-control" id="dob" name="dob" />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <button id="submit" type="button" name="next" @click="changeTab(2)" class="btn btn-primary next action-button float-end" value="Next" >Next</button>
                           </fieldset>
                           <fieldset :class="current == 2 ? 'd-block' : 'd-none'">
                              <div class="form-card text-start">
                                 <div class="row">
                                    <div class="col-12">
                                       <h3 class="mb-4">Contact Information:</h3>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label" for="email">Email Id: *</label>
                                          <input type="email" class="form-control" id="email" name="email" placeholder="Email Id" />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label" for="ccno">Contact Number: *</label>
                                          <input type="text" class="form-control" id="ccno" name="ccno" placeholder="Contact Number" />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label" for="city">City: *</label>
                                          <input type="text" class="form-control" id="city" name="city" placeholder="City." />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label" for="state">State: *</label>
                                          <input type="text" class="form-control" id="state" name="state" placeholder="State." />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <button type="button" name="next" @click="changeTab(3)" class="btn btn-primary next action-button float-end" value="Next" >Next</button>
                              <button type="button" name="previous" @click="changeTab(1)" class="btn btn-dark previous action-button-previous float-end me-3" value="Previous" >Previous</button>
                           </fieldset>
                           <fieldset :class="current == 3 ? 'd-block' : 'd-none'">
                              <div class="form-card text-start">
                                 <div class="row">
                                    <div class="col-12">
                                       <h3 class="mb-4">Official Information:</h3>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label" for="empid">Employee Id: *</label>
                                          <input type="email" class="form-control" id="empid" name="empid" placeholder="Employee Id." />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label" for="desg">Designation: *</label>
                                          <input type="text" class="form-control" id="desg" name="desg" placeholder="Designation." />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label" for="accname">Department Name: *</label>
                                          <input type="text" class="form-control" id="accname" name="accname" placeholder="Department Name." />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label" for="workhour">Working Hour: *</label>
                                          <input type="text" class="form-control" id="workhour" name="workhour" placeholder="Working Hour." />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <button type="button" name="next" @click="changeTab(4)" class="btn btn-primary next action-button float-end" value="Submit" >Submit</button>
                              <button type="button" name="previous" @click="changeTab(2)" class="btn btn-dark previous action-button-previous float-end me-3" value="Previous" >Previous</button>
                           </fieldset>
                           <fieldset :class="current == 4 ? 'd-block' : 'd-none'">
                              <div class="form-card text-start">
                                 <div class="row">
                                    <div class="col-12">
                                       <h3 class="mb-4 text-start">Payment:</h3>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label" for="panno">Pan No: *</label>
                                          <input type="text" class="form-control" id="panno" name="panno" placeholder="Pan No." />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label" for="accno">Account No: *</label>
                                          <input type="text" class="form-control" id="accno" name="accno" placeholder="Account No." />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label" for="holname">Account Holder Name: *</label>
                                          <input type="text" class="form-control" id="holname" name="accname" placeholder="Account Holder Name." />
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="form-label" for="ifsc">IFSC Code: *</label>
                                          <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="IFSC Code." />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <router-link to="/form-wizard-vertical" onclick="window.location.reload();" class="btn btn-primary action-button float-end" >Submit</router-link>
                              <button type="button" name="previous" @click="changeTab(3)" class="btn btn-dark previous action-button-previous float-end me-3" value="Previous" >Previous</button>
                           </fieldset>
                        </form>
                  </div>
               </div>
            </template>
         </iq-card>
      </div>
   </div>
</template>
<script>
export default {
  name: 'Vertical',
  data () {
    return {
      current: 1
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
