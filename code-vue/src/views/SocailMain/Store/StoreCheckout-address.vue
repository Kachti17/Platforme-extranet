<template>
   <div class="row">
      <div id="address" class="cart-card-block show p-0 col-12">
         <div class="row align-item-center">
            <div class="col-lg-8">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Add New Address</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <form onsubmit="required()">
                        <div class="row mt-3">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="form-label">Full Name: *</label>
                                 <input type="text" class="form-control" name="fname" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="form-label">Mobile Number: *</label>
                                 <input type="text" class="form-control" name="mno" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="form-label">Flat, House No: *</label>
                                 <input type="text" class="form-control" name="houseno" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="form-label">Landmark e.g. near apollo hospital:: *</label>
                                 <input type="text" class="form-control" name="landmark" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="form-label">Town/City: *</label>
                                 <input type="text" class="form-control" name="city" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="form-label">Pincode: *</label>
                                 <input type="text" class="form-control" name="pincode" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="form-label">State: *</label>
                                 <input type="text" class="form-control" name="state" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="addtype" class="form-label">Address Type</label>
                                 <select class="form-control" id="addtype">
                                    <option>Home</option>
                                    <option>Office</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <button id="savenddeliver" type="submit" @click="$router.push({name: 'store.store-checkoutaddress'})" class="btn btn-primary text-white">Save And Deliver Here</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="card">
                  <div class="card-body">
                     <h4 class="mb-2">Nik John</h4>
                     <div class="shipping-address">
                        <p class="mb-0">9447 Glen Eagles Drive</p>
                        <p>Lewis Center, OH 43035</p>
                        <p>UTC-5: Eastern Standard Time (EST)</p>
                        <p>202-555-0140</p>
                     </div>
                     <hr>
                     <router-link id="deliver-address" :to="{name:'store.store-checkoutpayment'}" class="btn btn-primary text-white d-block mt-1 next">Deliver To this Address</router-link>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>
<script>
export default {
  name: 'StoreCheckout-address'
}
</script>
