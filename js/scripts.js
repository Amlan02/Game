function checkPswd() {

    var confirmPassword = "1352";
    var pswdInput = document.getElementById("pswd").value;
    
    if (pswdInput == confirmPassword) {
        window.location.href = "level2.html";
        return false;
    }
    else {
        alert("Incorrect password!");
    }
};

function enterDoor() {
	window.location.href = "level2.1.html";
};