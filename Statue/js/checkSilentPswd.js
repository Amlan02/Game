function checkSilentPswd() {

    var confirmPassword = "Silence";
    var pswdInput = document.getElementById("silent-pswd").value;

    if (pswdInput == confirmPassword) {
        window.location.href = "../Background/Background.php";
        return false;
    }
    else {
        alert("Nothing Happens");
    }
};
