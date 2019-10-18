function checkPswd() {

    var confirmPassword = "1352";
    var pswdInput = document.getElementById("pswd").value;

    if (pswdInput == confirmPassword) {
        window.location.href = "../Corridor/Corridor.html";
        return false;
    }
    else {
        alert("Incorrect password!");
    }
};
