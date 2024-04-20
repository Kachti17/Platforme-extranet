<template>
   <div class="row">
      <div id="payment" class="cart-card-block show p-0 col-12">
         <div class="row align-item-center">
            <div class="col-lg-8">
               <iq-card>
                  <template v-slot:headerTitle>
                     <h4 class="card-title">Payment Options</h4>
                  </template>
                  <template v-slot:body>
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                           <img src="@/assets/images/icon/cart.png" alt="" height="40" width="50">
                           <span>US Unlocked Debit Card 12XX XXXX XXXX 0000</span>
                        </div>
                        <span>Nik John</span>
                        <span>28/2020</span>
                     </div>
                     <form class="mt-3">
                        <div class="d-flex align-items-center">
                           <span>Enter CVV: </span>
                           <div class="cvv-input ms-3 me-3">
                              <input type="text" class="form-control" required="">
                           </div>
                           <button type="submit" @click="$router.push({name: 'store.checkout'})" class="btn btn-primary text-white">Continue</button>
                        </div>
                     </form>
                     <hr>
                     <div class="card-lists">
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="radio" id="credit" name="customRadio">
                              <label class="form-check-label" for="credit"> Credit / Debit / ATM Card</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="radio" id="netbaking" name="customRadio">
                              <label class="form-check-label" for="netbaking"> Net Banking</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="radio" id="emi" name="emi">
                              <label class="form-check-label" for="emi"> EMI (Easy Installment)</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="radio" id="cod" name="cod">
                              <label class="form-check-label" for="cod"> Cash On Delivery</label>
                           </div>
                        </div>
                     </div>
                     <hr>
                     <div class="add-card">
                        <a href="#"><span><i class="ri-add-box-line me-2 h5"></i>Add Gift Card</span></a>
                     </div>
                  </template>
               </iq-card>
            </div>
            <div class="col-lg-4">
               <iq-card>
                  <template v-slot:body>
                     <h4 class="mb-2">Price Details</h4>
                     <div class="d-flex justify-content-between">
                        <span>Price 3 Items</span>
                        <span><strong>$1000.00</strong></span>
                     </div>
                     <div class="d-flex justify-content-between">
                        <span>Delivery Charges</span>
                        <span class="text-success">Free</span>
                     </div>
                     <hr>
                     <div class="d-flex justify-content-between">
                        <span>Amount Payable</span>
                        <span><strong>$1000.00</strong></span>
                     </div>
                  </template>
               </iq-card>
            </div>
         </div>
      </div>
   </div>
</template>
<script>
export default {
  name: 'StoreCheckout-payment'
}
</script>
