$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='profile_edit']").validate({
    // Specify validation rules
    rules: {
      name: "required",
      email: {
        required:true,
        email:true
      },
      mobile: "required"
    },
    messages: {
      name: "Enter name",
      email: {
        required: "Enter email",
        email:"Enter correct email"
      },
      mobile: "Enter mobile"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
  $("form[name='login']").validate({
    // Specify validation rules
    rules: {
      Username: "required",
      password: "required"
    },
    messages: {
      Username: "Enter username",
      email: "Password required"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
  $("form[name='register']").validate({
    // Specify validation rules
    rules: {
      username: "required",
      mobile: "required",
      otp: "required",
      password: "required",
      confirm_password: "required"
    },
    messages: {
      username: "Enter username",
      mobile: "Enter mobile",
      otp: "Enter otp",
      password: "Enter password",
      confirm_password: "Confirm password"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});