<?php include ('includes/login_header.php'); ?>


      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
               <span><i class="fal fa-times"></i></span>
               <span>close</span>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="logo mb-40">
                  <a href="index">
                  <!-- <img src="assets/img/logo/logo.png" alt="logo"> -->
                  </a>
               </div>
               <div class="mobile-menu fix"></div>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->      
      <div class="body-overlay"></div>
      <!-- sidebar area end -->

      <main>

         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center my-bg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Checkout</h3>                         
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section> <br> <br>
         <!-- page title area end -->

       

         <!-- checkout-area start -->
         <section class="checkout-area pb-70 mt-5">
               <div class="container">
                  <form action="#">
                     <div class="row">
                           <div class="col-lg-6">
                              <div class="checkbox-form">
                                 <h3>Billing Details</h3>
                                 <div class="row">
                                       <div class="col-md-12">
                                         
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>First Name <span class="required">*</span></label>
                                             <input type="text" placeholder="" />
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Last Name <span class="required">*</span></label>
                                             <input type="text" placeholder="" />
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="checkout-form-list">
                                             <label>Company Name</label>
                                             <input type="text" placeholder="" />
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="checkout-form-list">
                                             <label>Address <span class="required">*</span></label>
                                             <input type="text" placeholder="Street address" />
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="checkout-form-list">
                                             <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="checkout-form-list">
                                             <label>Town / City <span class="required">*</span></label>
                                             <input type="text" placeholder="Town / City" />
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>State / County <span class="required">*</span></label>
                                             <input type="text" placeholder="" />
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Postcode / Zip <span class="required">*</span></label>
                                             <input type="text" placeholder="Postcode / Zip" />
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Email Address <span class="required">*</span></label>
                                             <input type="email" placeholder="" />
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Phone <span class="required">*</span></label>
                                             <input type="text" placeholder="Postcode / Zip" />
                                          </div>
                                       </div>
                                       
                                 </div>
                                 <div class="different-address">
                                       
                                       <div id="ship-box-info">
                                          <div class="row">
                                             <div class="col-md-12">
                                                   <div class="country-select">
                                                      <label>Country <span class="required">*</span></label>
                                                      <select>
                                                         <option value="volvo">bangladesh</option>
                                                         <option value="saab">Algeria</option>
                                                         <option value="mercedes">Afghanistan</option>
                                                         <option value="audi">Ghana</option>
                                                         <option value="audi2">Albania</option>
                                                         <option value="audi3">Bahrain</option>
                                                         <option value="audi4">Colombia</option>
                                                         <option value="audi5">Dominican Republic</option>
                                                      </select>
                                                   </div>
                                             </div>
                                             <div class="col-md-6">
                                                   <div class="checkout-form-list">
                                                      <label>First Name <span class="required">*</span></label>
                                                      <input type="text" placeholder="" />
                                                   </div>
                                             </div>
                                             <div class="col-md-6">
                                                   <div class="checkout-form-list">
                                                      <label>Last Name <span class="required">*</span></label>
                                                      <input type="text" placeholder="" />
                                                   </div>
                                             </div>
                                             <div class="col-md-12">
                                                   <div class="checkout-form-list">
                                                      <label>Company Name</label>
                                                      <input type="text" placeholder="" />
                                                   </div>
                                             </div>
                                             <div class="col-md-12">
                                                   <div class="checkout-form-list">
                                                      <label>Address <span class="required">*</span></label>
                                                      <input type="text" placeholder="Street address" />
                                                   </div>
                                             </div>
                                             <div class="col-md-12">
                                                   <div class="checkout-form-list">
                                                      <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                                   </div>
                                             </div>
                                             <div class="col-md-12">
                                                   <div class="checkout-form-list">
                                                      <label>Town / City <span class="required">*</span></label>
                                                      <input type="text" placeholder="Town / City" />
                                                   </div>
                                             </div>
                                             <div class="col-md-6">
                                                   <div class="checkout-form-list">
                                                      <label>State / County <span class="required">*</span></label>
                                                      <input type="text" placeholder="" />
                                                   </div>
                                             </div>
                                             <div class="col-md-6">
                                                   <div class="checkout-form-list">
                                                      <label>Postcode / Zip <span class="required">*</span></label>
                                                      <input type="text" placeholder="Postcode / Zip" />
                                                   </div>
                                             </div>
                                             <div class="col-md-6">
                                                   <div class="checkout-form-list">
                                                      <label>Email Address <span class="required">*</span></label>
                                                      <input type="email" placeholder="" />
                                                   </div>
                                             </div>
                                             <div class="col-md-6">
                                                   <div class="checkout-form-list">
                                                      <label>Phone <span class="required">*</span></label>
                                                      <input type="text" placeholder="Postcode / Zip" />
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                       
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="your-order mb-30 ">
                                 <h3>Your order</h3>
                                 <div class="your-order-table table-responsive">
                                       <table>
                                          <thead>
                                             <tr>
                                                   <th class="product-name">Product</th>
                                                   <th class="product-total">Total</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr class="cart_item">
                                                   <td class="product-name">
                                                     Web development 
                                                   </td>
                                                   <td class="product-total">
                                                      <span class="amount">$1000.00</span>
                                                   </td>
                                             </tr>
                                             <tr class="cart_item">
                                                   <td class="product-name">
                                                     Web Design 
                                                   </td>
                                                   <td class="product-total">
                                                      <span class="amount">$400.00</span>
                                                   </td>
                                             </tr>
                                          </tbody>
                                          <tfoot>
                                             <tr class="cart-subtotal">
                                                   <th>Cart Subtotal</th>
                                                   <td><span class="amount">$14000.00</span></td>
                                             </tr>
                                             
                                             <tr class="order-total">
                                                   <th>Order Total</th>
                                                   <td><strong><span class="amount">$14100.00</span></strong>
                                                   </td>
                                             </tr>
                                          </tfoot>
                                       </table>
                                 </div>

                                 <div class="payment-method">
                                    <div class="accordion" id="checkoutAccordion">
                                       <div class="accordion-item">
                                          <h2 class="accordion-header" id="checkoutOne">
                                             <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                             Direct Bank Transfer
                                             </button>
                                          </h2>
                                          <div id="bankOne" class="accordion-collapse collapse show" aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                             <div class="accordion-body">
                                             Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t recieve you orders until the funds have cleared in our account.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="accordion-item">
                                          <h2 class="accordion-header" id="paymentTwo">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                                             Cheque Payment
                                             </button>
                                          </h2>
                                          <div id="payment" class="accordion-collapse collapse" aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">
                                             <div class="accordion-body">
                                             Please send your cheque to Store Name, Store Street, Store Town, Store
                                             State / County, Store
                                             Postcode.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="accordion-item">
                                          <h2 class="accordion-header" id="paypalThree">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                             PayPal
                                             </button>
                                          </h2>
                                          <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                             <div class="accordion-body">
                                             Pay via PayPal; you can pay with your credit card if you don’t have a
                                             PayPal account.
                                             </div>
                                          </div>
                                       </div>
                                       </div>
                                       <div class="order-button-payment mt-20">
                                          <button type="submit" class="e-btn e-btn-border">Place order</button>
                                       </div>
                                 </div>
                              </div>
                           </div>
                     </div>
                  </form>
               </div>
         </section>
         <!-- checkout-area end -->


      </main>

      <?php include ('includes/footer.php'); ?>
   </body>

<!-- Mirrored from themepure.net/template/educal/educal/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Apr 2022 08:17:33 GMT -->
</html>

