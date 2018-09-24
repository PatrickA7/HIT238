//Password match validation
$('#register-password-input, #register-passwordconfirm-input').on('keyup', function () {
  if ($('#register-password-input').val() == $('#register-passwordconfirm-input').val()) {
    $('#message').html('Passwords match').css('color', 'green');
  } else 
    $('#message').html('Passwords do not match').css('color', 'red');
});