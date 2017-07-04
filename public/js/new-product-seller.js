$(function(){
  $.validator.addMethod("alphadash", function(value, element) {
    return this.optional(element) || /^[a-zA-Z-]+$/i.test(value);
  }, "Letters and dashes only please.");
  $("#product-add-form").validate({
    rules:{
      title: {
        required: true,
        maxlength: 255
      },
      slug: {
        required: true,
        alphadash: true
      },
      selling_price: {
        required: true,
        number: true
      },
      min_sell_price: {
        required: true,
        number: true
      },
      quantity: {
        required: true,
        number: true
      },
      combo: {
        required: true
      },
      max_delivery_time: {
        required: true,
        number: true
      }
    },
    messages:{
      title: {
        required: "Please specify the title of the product.",
        maxlength: "Title Shoild not be greater than 255 characters"
      },
      slug: {
        required: "Please Specify the URL"
      },
      selling_price: {
        required: "Please Specify the selling price",
        number: "Only numbers are accepted."
      },
      min_sell_price: {
        required: "Please Specify the minimum selling price",
        number: "Only numbers are accepted."
      },
      quantity: {
        required: "Please Specify the quantity of the product",
        number: "Only numbers are accepted."
      },
      combo: {
        required: "choose one"
      },
      max_delivery_time: {
        required: "Please Specify the maximum delivery time in days",
        number: "Only numbers are accepted."
      }
    }
  });
  $("#productPictureUploadForm").validate({
    rules: {
      description: {
        maxlength: 40
      },
      main: {
        required: true
      },
      productPicture: {
        required: true
      }
    }
  });
});
