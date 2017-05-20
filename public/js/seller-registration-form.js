$(function(){
  $.validator.addMethod('strongPassword', function(value, element) {
    return this.optional(element)
      || value.length >= 6
      && /\d/.test(value)
      && /[a-z]/i.test(value);
  }, 'Your password must be at least 6 characters long and contain at least one number and one char.');
  $.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z]+$/i.test(value);
  }, "Letters only please.");
  $.validator.addMethod("letterspace", function(value, element) {
    return this.optional(element) || /^[a-zA-Z\s]*$/i.test(value);
  }, "Letters and spaces only.");
  $.validator.addMethod("zip", function(value, element) {
    return this.optional(element) || /^[1-9][0-9]{5}$/i.test(value);
  }, "Please specify a valid Pin Code.");
  $.validator.addMethod("pan", function(value, element) {
    return this.optional(element) || /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/i.test(value);
  }, "Please specify a valid PAN number.");
  $.validator.addMethod("tin", function(value, element) {
    return this.optional(element) || /^(9\d{2})([ \-]?)([7]\d|8[0-8]|9[0-2]|9[4-9])([ \-]?)(\d{4})$/i.test(value);
  }, "Please specify a valid TIN number.");
  $.validator.addMethod("phoneIndian", function(value, element) {
    console.log(/^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/i.test(value));
    return this.optional(element) || /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/i.test(value);
  }, "Please specify a valid Mobile number.");
  $.validator.addMethod("vatCheck", function(value, element) {
    var final = value.slice(-2);
    final = final - ( final * 2 );
    var sum = 0;
    var j = 0;
    var firstSeven = value.substring(0,7).match(/.{1,1}/g);
    for(i = 8; i > 1; i--){
      sum = sum + firstSeven[j] * i;
      j++;
    }
    while(sum > final){
      sum = sum - 97;
    }
    return this.optional(element) || sum == final;
  }, "Please specify a valid VAT number.");
  $("#seller-register-form").validate({
    rules:{
      firstName:{
        required: true,
        lettersonly: true,
        minlength: 3
      },
      middleName: {
        lettersonly: true
      },
      lastName: {
        required: true,
        lettersonly: true,
        minlength: 1
      },
      fatherHusbandName:{
        required: true,
        letterspace: true
      },
      addressHouseShopNo: {
        required: true
      },
      addressStreet:{
        required: true
      },
      addressCity: {
        required: true,
        letterspace: true
      },
      addressPin: {
        required: true,
        zip: true
      },
      panOfProprietor:{
        required: true,
        pan: true
      },
      companyName: {
        required: true,
        minlength: 3
      },
      shopName: {
        minlength: 3
      },
      mainPersonName: {
        required: true,
        letterspace: true,
        minlength: 2
      },
      contactablePersonName: {
        letterspace: true,
        minlength: 2
      },
      WhatsappNo: {
        required: true,
        phoneIndian: true
      },
      panOfCompany: {
        pan: true
      },
      tinOfCompany: {
        tin: true
      },
      vat: {
        number: true,
        maxlength: 9,
        minlength: 9
      },
      experienceDescription: {
        maxlength: 255
      },
      experienceURL: {
        url: true
      },
      description: {
        required: true
      },
      facebookURL: {
        url: true
      },
      linkedinURL: {
        url: true
      },
      idProof: {
        required: true
      },
      addressProof: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        strongPassword: true
      },
      password_confirmation: {
        required: true,
        equalTo: "#password"
      },
      terms: {
        required: true
      },
      typeOfCompany: {
        required: true
      },
      combo: {
        required: true
      },
      experience: {
        required: true
      }
    },
    messages: {
      firstName: {
        required: "Please Specify your first name.",
        minlength: "Your first name should be minimum of three characters."
      },
      lastName: {
        required: "Please Specify your last name",
        minlength: "Your last name should be minimum of one character"
      },
      fatherHusbandName:{
        required: "Please Specify your father\'s name or husband\'s name"
      },
      addressHouseShopNo: {
        required: "Please Specify the house/shop no."
      },
      addressStreet:{
        required: "Please Specify the street name"
      },
      addressCity: {
        required: "Please Specify the city"
      },
      addressPin: {
        required: "Please Specify the PIN Code"
      },
      panOfProprietor:{
        required: "Please Specify the PAN of Proprietor"
      },
      companyName: {
        required: "Please Specify the company name",
        minlength: "Company name should be minimum of three characters"
      },
      shopName: {
        minlength: "Shop name should be minimum of three characters"
      },
      mainPersonName: {
        required: "Please Specify the main person\'s name",
        minlength: "Main person\'s name should be minimum of theree characters"
      },
      contactablePersonName: {
        minlength: "Contactable Person\;s name should be minimum of 3 characters"
      },
      WhatsappNo: {
        required: "Please Specify the Whatsapp No"
      },
      vat: {
        number: "Onlu numbers are allowed",
        maxlength: "Should be exactly of nine digits",
        minlength: "Should be exactly of nine digits"
      },
      experienceDescription: {
        maxlength: "Description shoud not be greater the 255 characters"
      },
      description: {
        required: "Please give a brief description"
      },
      idProof: {
        required: "Please select an ID proof"
      },
      addressProof: {
        required: "Please select an Address proof"
      },
      email: {
        required: "Please Specify your email",
        email: "Should be a valid email"
      },
      password: {
        required: "Please Specify your password"
      },
      password_confirmation: {
        required: "Please Confirm your password"
      },
      terms: {
        required: "Check this box"
      },
      typeOfCompany: {
        required: "Select any"
      },
      combo: {
        required: "Select any"
      },
      experience: {
        required: "Select any"
      }
    }
  });
});
