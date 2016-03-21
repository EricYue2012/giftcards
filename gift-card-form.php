
<style type="text/css">

  form#multiphase{ border:none; padding:24px }
  form#multiphase > #phase2, #phase3, #phase4, #show_all_data{ display:none;}
  
  #multiphase hr{
    border-top: 1px solid #DCDADA;
  }

  #multiphase div.cbtn{
    display: inline-block;
  }
  .cbtn-giftcard-back{
    margin-right:30px;
  }
  .giftcard_form h3{
    margin-bottom: 0;
    color: #4e6b85;
  }
  .giftcard_form label{
    color: #1a455c;
  }
  .giftcard_subtitle{
    text-transform: uppercase;
    font-size: 18px;
    color: #a5c7c0;
    margin-bottom: 28px;
  }
  .giftcard_submit button{
    display: inherit;
    margin: 10px auto;

  }
  .giftcard_total{
    display: inherit;
    margin: auto;
    width:288px;
  }
  .giftcard_error{
    color:red;
  }
  .giftcard_total_value{
    font-size: 40px;
    color: #4e6b85;
    font-family: "bebas_neuebold", "Helvetica Neue", "Helvetica", Arial, sans-serif;
  }
</style>
<script>


var fname, lname, gender, country;
function _(x){
  return document.getElementById(x);
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function backtoPhase1(){
    _("phase2").style.display = "none";
    _("phase1").style.display = "block";

    window.location = "/giftcards#giftcards_form_wrapper";
}


function backtoPhase2(){
    _("phase3").style.display = "none";
    _("phase2").style.display = "block";
    window.location = "/giftcards#giftcards_form_wrapper";
}


function backtoPhase3(){
    _("phase4").style.display = "none";
    _("phase3").style.display = "block";

    window.location = "/giftcards#giftcards_form_wrapper";
}

function validationReset(){
  itemList = document.getElementsByClassName('giftcard_error');
  for (i = 0; i < itemList.length; i++) {
    itemList[i].style.display = "none";
  }
}

function validatePhase1(){

  validationReset();

  name      = _("name").value;
  email     = _("email").value;
  address   = _("address").value;
  city      = _("city").value;
  state     = _("state").value;
  postcode  = _("postcode").value;
  country   = _("country").value;

  number_of_error = 0;

  if(name.length <= 0){
    _("giftcard_error_name").style.display = "block";
    number_of_error++;
  }

  if(email.length <= 0 || !validateEmail(email)){
    _("giftcard_error_email").style.display = "block";
    number_of_error++;
  }

  if(address.length <= 0){
    _("giftcard_error_address").style.display = "block";
    number_of_error++;
  }

  if(city.length <= 0){
    _("giftcard_error_city").style.display = "block";
    number_of_error++;
  }

  if(state.length <= 0){
    _("giftcard_error_state").style.display = "block";
    number_of_error++;
  }

  if(postcode.length <= 0){
    _("giftcard_error_postcode").style.display = "block";
    number_of_error++;
  }

  if(country.length <= 0){
    _("giftcard_error_country").style.display = "block";
    number_of_error++;
  }

  if(number_of_error >0) return false;
  return true;
}



function validatePhase2(){

  validationReset();

  if(_("checkbox_same_person").checked) return true;
  

  recipient_name      = _("recipient_name").value;
  recipient_email     = _("recipient_email").value;
  recipient_address   = _("recipient_address").value;
  recipient_city      = _("recipient_city").value;
  recipient_state     = _("recipient_state").value;
  recipient_postcode  = _("recipient_postcode").value;
  recipient_country   = _("recipient_country").value;

  number_of_error = 0;

  if(recipient_name.length <= 0){
    _("giftcard_error_recipient_name").style.display = "block";
    number_of_error++;
  }

  if(recipient_email.length <= 0 || !validateEmail(recipient_email)){
    _("giftcard_error_recipient_email").style.display = "block";
    number_of_error++;
  }

  if(recipient_address.length <= 0){
    _("giftcard_error_recipient_address").style.display = "block";
    number_of_error++;
  }

  if(recipient_city.length <= 0){
    _("giftcard_error_recipient_city").style.display = "block";
    number_of_error++;
  }

  if(recipient_state.length <= 0){
    _("giftcard_error_recipient_state").style.display = "block";
    number_of_error++;
  }

  if(recipient_postcode.length <= 0){
    _("giftcard_error_recipient_postcode").style.display = "block";
    number_of_error++;
  }

  if(recipient_country.length <= 0){
    _("giftcard_error_recipient_country").style.display = "block";
    number_of_error++;
  }

  if(number_of_error >0) return false;
  return true;
}


function validatePhase3(){

  validationReset();

  step3_message   = _("step3_message").value;
  step3_preset    = _("step3_preset").value;
  step3_amount    = _("step3_amount").value;
  step3_postage   = _("step3_postage").value;

  number_of_error = 0;

/*  if(step3_message.length <= 0){
    _("giftcard_error_step3_message").style.display = "block";
    number_of_error++;
  }*/

  if(step3_preset.length <= 0){
    _("giftcard_error_step3_preset").style.display = "block";
    number_of_error++;
  }

  if(step3_amount.length <= 0){
    _("giftcard_error_step3_amount").style.display = "block";
    number_of_error++;
  }

  if(step3_postage.length <= 0){
    _("giftcard_error_step3_postage").style.display = "block";
    number_of_error++;
  }


  if(number_of_error >0) return false;
  return true;
}


/*
function reValidation () {
  validatePhase1(); 
}

formControls = document.getElementsByClassName('giftcard-form-control');
for (i = 0; i < formControls.length; i++) {
  formControls[i].addEventListener('keyup', reValidation());
}

*/


function processPhase1(){

  if(validatePhase1()){
    _("phase1").style.display = "none";
    _("phase2").style.display = "block";
    window.location = "/giftcards#giftcards_form_wrapper";
  } 
}

function processPhase2(){



  if(validatePhase2()){
    _("phase2").style.display = "none";
    _("phase3").style.display = "block";
    window.location = "/giftcards#giftcards_form_wrapper";
  }
}

function processPhase3(){

  if(validatePhase3()){
    _("phase3").style.display = "none";
    _("phase4").style.display = "block";
    window.location = "/giftcards#giftcards_form_wrapper";
  }


  _('giftcard_final_value').innerHTML = parseFloat(_('step3_amount').value) + parseFloat(_('step3_postage').value);
  _('giftcards_summary_shipping').innerHTML = _('step3_postage').value;

}

function processPhase4(){
  country = _("country").value;
  if(country.length > 0){
    _("phase3").style.display = "none";
    _("show_all_data").style.display = "block";
    _("display_fname").innerHTML = fname;
    _("display_lname").innerHTML = lname;
    _("display_gender").innerHTML = gender;
    _("display_country").innerHTML = country;
    _("progressBar").value = 100;
    _("status").innerHTML = "Data Overview";
  } else {
      alert("Please choose your country");  
  }
}
function submitForm(){
  _("multiphase").method = "post";
  _("multiphase").action = "my_parser.php";
  _("multiphase").submit();
}
</script>


<div class="form-block brandbg" id="giftcards_form_wrapper">
  <form id="multiphase" onsubmit="return false" class="container giftcard_form">

    <!-- Begin of step 1 -->
    <div id="phase1">
      <div class="row">
        <div class="col-xs-12">
          <h3>STEP 1</h3>
          <div class="giftcard_subtitle">Personal Information</div>
        </div>
      </div>
      
      <div class="form-row row">
        <div class="form-group col-sm-6">
          <label>Your name*</label>
          <input type="text" class="giftcard-form-control form-control" id="name" placeholder="Your name...">
          <div class="giftcard_error" id="giftcard_error_name" style="display:none;">Please enter your name</div>
        </div>

        <div class="form-group col-sm-6">
          <label>Your email*</label>
          <input type="email" class="giftcard-form-control form-control" id="email" placeholder="Your email...">
          <div class="giftcard_error" id="giftcard_error_email" style="display:none;">Please enter valid email</div>
        </div>
      </div>

      <div class="row"><div class="col-xs-12"><hr></div></div>

      <div class="form-row row">
        <div class="form-group col-sm-12">
          <label>Address*</label>
          <input type="text" class="giftcard-form-control form-control" id="address" placeholder="Address...">
          <div class="giftcard_error" id="giftcard_error_address" style="display:none;">Please enter your address</div>
        </div>
      </div>

      <div class="form-row row">
        <div class="form-group col-sm-6">
          <label>City*</label>
          <input type="text" class="giftcard-form-control form-control" id="city" placeholder="City...">
          <div class="giftcard_error" id="giftcard_error_city" style="display:none;">Please enter city</div>
        </div>

        <div class="form-group col-sm-6">
          <label>State*</label>
          <input type="text" class="giftcard-form-control form-control" id="state" placeholder="State...">
          <div class="giftcard_error" id="giftcard_error_state" style="display:none;">Please enter state</div>
        </div>
      </div>

      <div class="form-row row">
        <div class="form-group col-sm-6">
          <label>Postcode*</label>
          <input type="text" class="giftcard-form-control form-control" id="postcode" placeholder="Postcode">
          <div class="giftcard_error" id="giftcard_error_postcode" style="display:none;">Please enter postcode</div>
        </div>

        <div class="form-group col-sm-6">
          <label>Country*</label>
          <select class="giftcard-form-control form-control" id="country" name="country">
            <option value="" selected="">-Select-</option>
            <option value="Australia" selected="">Australia</option>
          </select>
          <div class="giftcard_error" id="giftcard_error_country" style="display:none;">Please select country</div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <button class="cbtn cbtn-green" onclick="processPhase1()">Next</button>
        </div>
      </div>
    </div>
    <!-- End of step 1 -->

    <!-- Begin of step 2-->
    <div id="phase2" class="">
      <div class="row">
        <div class="col-xs-12">
          <h3>STEP 2</h3>
          <div class="giftcard_subtitle">Recipient Information</div>
        </div>
      </div>

      <div class="form-row row">
        <div class="form-group col-sm-6">
          <label>Your name*</label>
          <input type="text" class="giftcard-form-control form-control" id="recipient_name" placeholder="Your name...">
          <div class="giftcard_error" id="giftcard_error_recipient_name">Please enter a name</div>
        </div>

        <div class="form-group col-sm-6">
          <label>Your email*</label>
          <input type="email" class="giftcard-form-control form-control" id="recipient_email" placeholder="Your email...">
          <div class="giftcard_error" id="giftcard_error_recipient_email">Please enter a valid email</div>
        </div>
      </div>
      

      <div class="form-row row">
        <div class="form-group col-sm-12">
          <label>Address*</label>
          <input type="text" class="giftcard-form-control form-control" id="recipient_address" placeholder="Address...">
          <div class="giftcard_error" id="giftcard_error_recipient_address">Please enter address</div>
        </div>
      </div>

      <div class="form-row row">
        <div class="form-group col-sm-6">
          <label>City*</label>
          <input type="text" class="giftcard-form-control form-control" id="recipient_city" placeholder="City...">
          <div class="giftcard_error" id="giftcard_error_recipient_city">Please enter city</div>
        </div>

        <div class="form-group col-sm-6">
          <label>State*</label>
          <input type="text" class="giftcard-form-control form-control" id="recipient_state" placeholder="State...">
          <div class="giftcard_error" id="giftcard_error_recipient_state">Please enter state</div>
        </div>
      </div>

      <div class="form-row row">
        <div class="form-group col-sm-6">
          <label>Postcode*</label>
          <input type="text" class="giftcard-form-control form-control" id="recipient_postcode" placeholder="Postcode">
          <div class="giftcard_error" id="giftcard_error_recipient_postcode">Please enter postcode</div>
        </div>

        <div class="form-group col-sm-6">
          <label>Country*</label>
          <select class="giftcard-form-control form-control" id="recipient_country" name="recipient_country">
            <option value="" selected="">-Select-</option>
            <option value="Australia" selected="">Australia</option>
          </select>
          <div class="giftcard_error" id="giftcard_error_recipient_country">Please enter country</div>
        </div>
      </div>

      <div class="form-row row">
        <div class="form-group col-xs-12">
          <label></label>
          <input type="checkbox" class="" id="checkbox_same_person" name="checkbox_same_person"> Deliver to recipient
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <button class="cbtn cbtn-teal-blue teal-bg cbtn-giftcard-back" onclick="backtoPhase1()">Back</button><button class="cbtn cbtn-green" onclick="processPhase2()">Next</button>
        </div>
      </div>

    </div>
    <!-- End of step 2-->

    <!-- Begin of step 3-->
    <div id="phase3" class="">
      <div class="row">
        <div class="col-xs-12">
          <h3>Step 3</h3>
          <div class="giftcard_subtitle">Giftcard Information</div>
        </div>
      </div>

      <div class="form-row row">
        <div class="form-group col-xs-12">
          <label>Message</label>
          <textarea class="giftcard-form-control form-control" id="step3_message" name="step3_message" placeholder="Write your message..."></textarea>
        </div>
      </div>

      <div class="form-row row">
        <div class="form-group col-sm-3">
          <label>Amount*</label>
          <input type="number" class="giftcard-form-control form-control" id="step3_amount" placeholder="Amount...">
          <div class="giftcard_error" id="giftcard_error_step3_amount">Please enter amount</div>
        </div>

        <div class="form-group col-sm-3">
          <label>&nbsp;</label>
          <select class="giftcard-form-control form-control" id="step3_preset" name="step3_preset">
            <option value="" selected="selected">Preset amount</option>
            <option value="100">$100</option>
            <option value="150">$150</option>
          </select>
          <div class="giftcard_error" id="giftcard_error_step3_preset">Pleasa choose preset amount</div>
        </div>

        <div class="form-group col-sm-6">
          <label>Postage*</label>
          <select class="giftcard-form-control form-control" id="step3_postage" name="step3_postage">
            <option value="5.25" selected="select">Pxpress Post - $5.25(Within 5 business days)</option>
          </select>
          <div class="giftcard_error" id="giftcard_error_step3_postage">Please choose postage</div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <button class="cbtn cbtn-giftcard-back cbtn-teal-blue teal-bg" onclick="backtoPhase2()">Back</button><button class="cbtn cbtn-green" onclick="processPhase3()">Next</button>
        </div>
      </div>

    </div>
    <!-- End of step 3-->

    <!-- Begin of step 4-->
    <div id="phase4" class="">
      <div class="row">
        <div class="col-xs-12">
          <h3>Step 4</h3>
          <div class="giftcard_subtitle">Payment Information</div>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-6 col-xs-12">
          <label>Card number*</label>
          <input type="number" class="giftcard-form-control form-control" id="cardnumber" name="cardnumber" placeholder="Card number...">
          <div class="giftcard_error" id="giftcard_error_step4_card">Please enter credit card number</div>
        </div>

        <div class="form-group col-sm-3 col-xs-12">
          <label>CVV*</label>
          <input type="number" class="giftcard-form-control form-control" id="cvv" name="cvv" placeholder="CVV">
          <div class="giftcard_error" id="giftcard_error_step4_cvv">Please enter CVV number</div>
        </div>

        <div class="form-group col-sm-1 col-xs-6">
          <label>Expiration(MM/YYYY)*</label>
          <input type="number" class="giftcard-form-control form-control" id="expiration_month" name="expiration_month" placeholder="MM...">
          <div class="giftcard_error" id="giftcard_error_step4_month">Please choose expiration month</div>
        </div>

        <div class="form-group col-sm-1 col-xs-6">
          <label>&nbsp;</label>
          <input type="number" class="giftcard-form-control form-control" id="expiration_year" name="expiration_year" placeholder="YYYY...">
          <div class="giftcard_error" id="giftcard_error_step4_year">Please choose expiration year</div>

        </div>

      </div>
      
      <div class="form-row row">
        <div class="form-group col-xs-12">
          <input type="checkbox" class="" id="agree_term_condition" name="agree_term_condition"> <a href=""> I agree to the term & conditions*</a>
        </div>
        <div class="form-group col-xs-12">
          <input type="checkbox" class="" id="giftcard_signup_newsletter" name="giftcard_signup_newsletter"> Sign up to our Newsletter
        </div>
      </div>
      
      <div class="row giftcard_submit">
        <div class="col-xs-12">
          <div class="giftcard_total"><span class="giftcard_total_value">Total: </span><span class="giftcard_total_value" id="giftcard_final_value">$110 </span><span class="giftcard_shipping">(including $</span><span class="giftcard_shipping" id="giftcards_summary_shipping"></span><span class="giftcard_shipping"> postage)</span></div>
        <div class="col-xs-12">
          <button class="cbtn cbtn-green" onclick="processPayment()">Pay Securely</button>
        </div>
        <div class="col-xs-12">
          <button class="cbtn cbtn-giftcard-back cbtn-teal-blue teal-bg" onclick="backtoPhase3()">Back</button>
        </div>
      </div>

    </div>
    <!-- End of step 4-->
  </form>
</div>