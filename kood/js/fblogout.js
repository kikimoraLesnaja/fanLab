window.onload = function() {

var a = document.getElementById("logout");

a.onclick = function() {
    FB.getLoginStatus(function(response) {
        if (response && response.status == 'connected') {
            FB.logout(function(response) {
                document.location.reload();
            });
        }
    });
}
}