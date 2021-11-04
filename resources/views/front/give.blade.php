@extends('front.master-pages')
@section('content')
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach ($SiteSettings as $Settings)


		<!--sab banner start-->
		<div class="sab_banner_wrap overlay">
			<div class="sub_slider">
                <div class="banner_slide">
                    <img src="{{asset('theme/images/sab-banner-bg.png')}}" alt="">
                </div>
                <div class="banner_slide">
                    <img src="{{asset('theme/images/sab-banner-bg.png')}}" alt="">
                </div>
                <div class="banner_slide">
                    <img src="{{asset('theme/images/sab-banner-bg.png')}}" alt="">
                </div>
            </div>
            <div class="container">
				<div class="sab_banner_text">
					<h3>Give</h3>
					<ul class="breadcrumb">
					  <li class="active">Give</li>
					</ul>
					<div class="banner_dots">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
		</div>
        <!--sab banner end-->
        

        <div class="content">
       
            {{--  --}}
            <section>
                <div class="container">
                  <div class="row">
                    <div class="col-md-5 col-md-5 border-1px p-20">
                      <h4 class="mt-0 pt-5">Give Using M-Pesa PayBill</h4>
                      <p>Thank you fo</p>
                      <hr>
                      
                      <!-- Paypal Form Starts -->
                      <form id="paypal_donate_form-recurring" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <div class="row">
                          <input type="hidden" name="cmd" value="_xclick-subscriptions">
                          <input type="hidden" name="business" value="accounts@thememascot.com">
                          <input type="hidden" name="currency_code" value="USD">
                          <div class="col-sm-12">
                            <div class="form-group mb-20">
                              <label><strong>I Want to Donate for</strong></label>
                              <select name="item_name" class="form-control">
                                <option value="Educate Children">Educate Children</option>
                                <option value="Child Camps">Child Camps</option>
                                <option value="Clean Water for Life">Clean Water for Life</option>
                                <option value="Campaign for Child Poverty">Campaign for Child Poverty</option>
                              </select>
                            </div>
                          </div>
          
                          <div class="col-sm-12">
                            <div class="form-group mb-20">
                              <label><strong>Currency</strong></label>
                              <select name="currency_code" class="form-control">
                                <option value="">Select Currency</option>
                                <option value="USD" selected="selected">USD - U.S. Dollars</option>
                                <option value="AUD">AUD - Australian Dollars</option>
                                <option value="BRL">BRL - Brazilian Reais</option>
                                <option value="GBP">GBP - British Pounds</option>
                                <option value="HKD">HKD - Hong Kong Dollars</option>
                                <option value="HUF">HUF - Hungarian Forints</option>
                                <option value="INR">INR - Indian Rupee</option>
                                <option value="ILS">ILS - Israeli New Shekels</option>
                                <option value="JPY">JPY - Japanese Yen</option>
                                <option value="MYR">MYR - Malaysian Ringgit</option>
                                <option value="MXN">MXN - Mexican Pesos</option>
                                <option value="TWD">TWD - New Taiwan Dollars</option>
                                <option value="NZD">NZD - New Zealand Dollars</option>
                                <option value="NOK">NOK - Norwegian Kroner</option>
                                <option value="PHP">PHP - Philippine Pesos</option>
                                <option value="PLN">PLN - Polish Zlotys</option>
                                <option value="RUB">RUB - Russian Rubles</option>
                                <option value="SGD">SGD - Singapore Dollars</option>
                                <option value="SEK">SEK - Swedish Kronor</option>
                                <option value="CHF">CHF - Swiss Francs</option>
                                <option value="THB">THB - Thai Baht</option>
                                <option value="TRY">TRY - Turkish Liras</option>
                              </select>
                            </div>
                          </div>
                              
                          <div class="col-sm-12">
                            <div class="form-group mb-20">
                              <label><strong>How much do you want to donate?</strong></label>
                              <select id="amount" name="a3" class="form-control">
                                  <option value="20">$20</option>
                                  <option value="50">$50</option>
                                  <option value="100">$100</option>
                                  <option value="200">$200</option>
                                  <option value="500">$500</option>
                                  <option value="other">Other Amount</option>
                              </select>
                              <div id="custom_other_amount">
                                <label><strong>Custom Amount:</strong></label>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group mb-20">
                              <label><strong>Donation Type</strong></label>
                              <div class="radio mt-5">
                                <label class="radio-inline">
                                  <input type="radio" value="D" name="t3">
                                  Daily</label>
                                <label class="radio-inline">
                                  <input type="radio" value="W" name="t3">
                                  Weekly</label>
                                <label class="radio-inline">
                                  <input type="radio" value="M" name="t3">
                                  Monthly</label>
                                <label class="radio-inline">
                                  <input type="radio" value="Y" name="t3">
                                  Yearly</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group mb-20">
                              <input type="hidden" name="p3" value="1">
                              <input type="hidden" name="rm" value="2">
                              <input type="hidden" name="src" value="1">
                              <input type="hidden" name="sra" value="1">
                              <input type="hidden" name="no_shipping" value="0">
                              <input type="hidden" name="no_note" value="1">                 
                              <input type="hidden" name="lc" value="US">
                              <input type="hidden" name="bn" value="PP-DonationsBF">
                              <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
                              <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
                              <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">                
                              <input type="image" src="../../../../../www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.png" name="submit" alt="PayPal - The safer, easier way to pay online!">
                              <img alt="" src="../../../../../www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </div>
                          </div>
                        </div>
                      </form>
                      
                      <!-- Script for Donation Form Custom Amount -->
                      <script type="text/javascript">
                        $(document).ready(function(e) {
                          var $recurring_form = $("#paypal_donate_form-recurring");
                          var $custom_other_amount = $recurring_form.find("#custom_other_amount");
                          $custom_other_amount.hide();
                          $recurring_form.find("select[name='a3']").change(function() {
                              var $this = $(this);
                              if ($this.val() == 'other') {
                                $custom_other_amount.show().append('<div class="input-group"><span class="input-group-addon">$</span> <input type="text" name="a3" class="form-control" value="100"/></div>');
                              }
                              else{
                                $custom_other_amount.children( ".input-group" ).remove();
                                $custom_other_amount.hide();
                              }
                          });
                        });
                      </script>
                      <!-- Paypal Form Ends -->
          
                    </div>
                    <div class="col-md-5 col-md-offset-1 col-md-5 border-1px p-20">
                      <h4 class="mt-0 pt-5">One-Time Donation</h4>
                      <p>Thank you for making a donation to our charitable organization. Please use the form below to pay your desired giving amount.</p>
                      <hr>
          
                      <!-- Paypal Form Starts -->
                      <form id="paypal_donate_form-onetime" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <div class="form-group mb-20">
                          <label><strong>I Want to Donate for</strong></label>
                          <select class="form-control" name="item_name">
                            <option value="Educate Children">Educate Children</option>
                            <option value="Child Camps">Child Camps</option>
                            <option value="Clean Water for Life">Clean Water for Life</option>
                            <option value="Campaign for Child Poverty">Campaign for Child Poverty</option>
                          </select>
                        </div>
          
          
                        <div class="form-group mb-20">
                          <label><strong>Currency</strong></label>
                          <select name="currency_code" class="form-control">
                            <option value="">Select Currency</option>
                            <option value="USD" selected="selected">USD - U.S. Dollars</option>
                            <option value="AUD">AUD - Australian Dollars</option>
                            <option value="BRL">BRL - Brazilian Reais</option>
                            <option value="GBP">GBP - British Pounds</option>
                            <option value="HKD">HKD - Hong Kong Dollars</option>
                            <option value="HUF">HUF - Hungarian Forints</option>
                            <option value="INR">INR - Indian Rupee</option>
                            <option value="ILS">ILS - Israeli New Shekels</option>
                            <option value="JPY">JPY - Japanese Yen</option>
                            <option value="MYR">MYR - Malaysian Ringgit</option>
                            <option value="MXN">MXN - Mexican Pesos</option>
                            <option value="TWD">TWD - New Taiwan Dollars</option>
                            <option value="NZD">NZD - New Zealand Dollars</option>
                            <option value="NOK">NOK - Norwegian Kroner</option>
                            <option value="PHP">PHP - Philippine Pesos</option>
                            <option value="PLN">PLN - Polish Zlotys</option>
                            <option value="RUB">RUB - Russian Rubles</option>
                            <option value="SGD">SGD - Singapore Dollars</option>
                            <option value="SEK">SEK - Swedish Kronor</option>
                            <option value="CHF">CHF - Swiss Francs</option>
                            <option value="THB">THB - Thai Baht</option>
                            <option value="TRY">TRY - Turkish Liras</option>
                          </select>
                        </div>
          
                        <div class="form-group mb-20">
                          <label><strong>How much do you want to donate?</strong></label>
                          <select id="amount" name="amount" class="form-control">
                              <option value="20">$20</option>
                              <option value="50">$50</option>
                              <option value="100">$100</option>
                              <option value="200">$200</option>
                              <option value="500">$500</option>
                              <option value="other">Other Amount</option>
                          </select>
                          <div id="custom_other_amount">
                            <label><strong>Custom Amount:</strong></label>
                          </div>
                        </div>
                        <input type="hidden" name="cmd" value="_donations">
                        <input type="hidden" name="business" value="accounts@thememascot.com">
                        <input type="hidden" name="no_shipping" value="1">
                        <input type="hidden" name="cn" value="Comments...">
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="hidden" name="tax" value="0">
                        <input type="hidden" name="lc" value="US">
                        <input type="hidden" name="bn" value="PP-DonationsBF">
                        <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
                        <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
                        <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">              
                        <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png" width="1" height="1">
                      </form>
                      
                      <!-- Script for Donation Form Custom Amount -->
                      <script type="text/javascript">
                        $(document).ready(function(e) {
                          var $onetime_form = $("#paypal_donate_form-onetime");
                          var $custom_other_amount = $onetime_form.find("#custom_other_amount");
                          $custom_other_amount.hide();
                          $onetime_form.find("select[name='amount']").change(function() {
                              var $this = $(this);
                              if ($this.val() == 'other') {
                                $custom_other_amount.show().append('<div class="input-group"><span class="input-group-addon">$</span> <input type="text" name="amount" class="form-control" value="100"/></div>');
                              }
                              else{
                                $custom_other_amount.children( ".input-group" ).remove();
                                $custom_other_amount.hide();
                              }
                          });
                        });
                      </script>
                      <!-- Paypal Form Ends -->
                      
                    </div>
                  </div>
                </div>
              </section>
            {{--  --}}

            
            <section style="padding:0px; margin:0 auto !important">
                <div class="weekly-groups_services full-width-services text-center">
                    <ul class="services_weekly">
                        <li style="min-height:310px !important">
                            <div class="weekly_column">
                                <span class="fa fa-calendar-minus-o" aria-hidden="true"></span>
                                <h4><a href="#">GOD-CENTERED</a></h4>
                                <p>
                                    God is holy, glorious, and sovereign over all things. As a church, we are committed to knowing, loving, obeying, and glorifying the Father, Son, and Holy Spirit in all we do.
                                </p>
                                {{-- <a href="#" class="arrow_btn">See More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
                            </div>
                        </li>
                        <li style="min-height:310px !important">
                            <div class="weekly_column">
                                <span class="fa fa-hourglass-end" aria-hidden="true"></span>
                                <h4><a href="#">SCRIPTURE-GUIDED</a></h4>
                                <p>
                                    The Bible is ultimately authoritative in the life of the believer and the church. This leads us to a commitment to Bible exposition in all our ministries, whether for adults, youth, or even children.
                                </p>
                                {{-- <a href="#" class="arrow_btn">See More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
                            </div>
                        </li>
                        <li style="min-height:310px !important">
                            <div class="weekly_column">
                                <span class="fa fa-users" aria-hidden="true"></span>
                                <h4><a href="#">WORSHIP-ORIENTED</a></h4>
                                <p>
                                    Reverence, awe, joy, fear, and submission are true responses to God’s glory and salvation. We seek to cultivate worship that rightly exalts God while humbling and dignifying people by placing them in their right place below Him.
                                </p>
                                {{-- <a href="#" class="arrow_btn">See More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        

		</div>
		




 

@endforeach
@endsection