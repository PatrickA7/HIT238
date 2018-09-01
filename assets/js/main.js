//Password match validation
$('#register-password-input, #register-passwordconfirm-input').on('keyup', function () {
  if ($('#register-password-input').val() == $('#register-passwordconfirm-input').val()) {
    $('#message').html('Passwords match').css('color', 'green');
  } else 
    $('#message').html('Passwords do not match').css('color', 'red');
});
//code for dummy item list - remove later
/*$('.search').keyup(function() {
    var value = $(this).val();
    var exp = new RegExp('^' + value, 'i');

    $('.dummyItemList .item').each(function() {
        var isMatch = exp.test($('.name', this).text());
        $(this).toggle(isMatch);
    });
});
function saveDataBread(){
    var input = document.getElementById("bread-quantity");
    sessionStorage.setItem("Bread", input.value);
}

function saveDataEggs(){
    var input = document.getElementById("eggs-quantity");
    sessionStorage.setItem("Eggs", input.value);
}

function saveDataMilk(){
    var input = document.getElementById("milk-quantity");
    sessionStorage.setItem("Milk", input.value);
}
for (var i = 0; i < sessionStorage.length; i++) {
    var items = sessionStorage.key(i);
    var quantity = sessionStorage.getItem(sessionStorage.key(i));
    document.getElementById('test2').innerHTML = '<tr><td>' + items + '</td>' + '<td>' + quantity + '</td><td><button class="btn btn-danger" id="bread-button" onclick="deleteItem()">Delete</button></td></tr>';
}

function deleteItem(){
    sessionStorage.removeItem(items);
    location.reload();
}*/