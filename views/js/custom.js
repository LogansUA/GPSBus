/**
 * Created by logans on 15.12.14.
 */
function checkForm() {
    var email = document.signin.email.value;
    var password = document.signin.password.value;

    var isFully = false;
    var isEmail = false;

    if ((email.length > 5) && (password.length > 3)) {
        isFully = true;
    }

    for (var i = 0; i < email.length; i++) {
        if (email[i] == '@') {
            isEmail = true;
        }
    }

    if (isEmail && isFully) {
        return true;
    } else {
        document.getElementById('message').innerHTML = getErrorBar();
    }

    return false;
}

function getErrorBar() {
    return "<div class=\"alert alert-danger\" role=\"alert\"><strong>Помилка!</strong> Невірна довжина паролю, або імейлу.</div>";
}