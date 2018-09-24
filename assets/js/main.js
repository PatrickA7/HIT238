//Password match validation
$('#register-password-input, #register-passwordconfirm-input').on('keyup', function () {
  if ($('#register-password-input').val() == $('#register-passwordconfirm-input').val()) {
    $('#message').html('Passwords match').css('color', 'green');
  } else 
    $('#message').html('Passwords do not match').css('color', 'red');
});

//nav items
var navItems = document.querySelectorAll(".mobile-bottom-nav__item");
navItems.forEach(function(e, i) {
	e.addEventListener("click", function(e) {
		navItems.forEach(function(e2, i2) {
			e2.classList.remove("mobile-bottom-nav__item--active");
		})
		this.classList.add("mobile-bottom-nav__item--active");
	});
});
