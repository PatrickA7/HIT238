//Password match validation
$('#register-password-input, #register-passwordconfirm-input').on('keyup', function () {
  if ($('#register-password-input').val() == $('#register-passwordconfirm-input').val()) {
    $('#message').html('Passwords match').css('color', 'green');
  } else 
    $('#message').html('Passwords do not match').css('color', 'red');
});

var notif_request = document.getElementById('notif-request');
var close_notif = document.getElementById("close");
var notif_button = document.getElementById("allow-notifs");

//Close notification request footer when close button is pressed
close_notif.onclick = function() {
    notif_request.style.display = "none";
};

notif_button.onclick = function() {
  //Check of browser supports notifications
  if (!("Notification" in window)) {
    alert("This browser does not support system notifications");
  }

  // Check if permission has already been granted
  else if (Notification.permission === "granted") {
      var notification = new Notification("Notifications enabled!", {"body":"You'll be notified 2 hours before your reservation starts", "icon":"assets/img/waiter-icon-dark.png"});
      setTimeout(notification.close.bind(notification), 4000);
      notif_request.style.display = "none";
  }

  // Ask user for permission
  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {
      // Create notification when permission granted
      if (permission === "granted") {
        var notification = new Notification("Notifications enabled!", {"body":"You'll be notified 2 hours before your reservation starts", "icon":"assets/img/waiter-icon-dark.png"});
        setTimeout(notification.close.bind(notification), 4000);
        notif_request.style.display = "none";
      }
    });
  }
}