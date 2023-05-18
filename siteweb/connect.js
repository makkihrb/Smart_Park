$(document).ready(function() {
  $('#conform').validate({
      rules: {
          nom: {
              required: true,
              minlength: 5
          },
          mail: {
              required: true,
              email: true
          },
          
          pwd: {
              required: true,
              minlength : 5
          }
      },
      messages: {
          
      }
  });
});