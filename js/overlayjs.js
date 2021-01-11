function openNav() {
    document.getElementById("loginNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("loginNav").style.width = "0%";
}

function openNav2() {
    document.getElementById("signupNav").style.width = "100%";
}

function closeNav2() {
    document.getElementById("signupNav").style.width = "0%";
}

function validationlogin() {
    var username = document.getElementById("usernamelogin").value;
    var password = document.getElementById("passwordlogin").value;
    if (username != "" && password != "") {
        return true;
    } else {
        alert('Username and Password must be filled.');
        return false;
    }
}

function validationsignup() {
    var email = document.getElementById("emailsignup").value;
    var username = document.getElementById("usernamesignup").value;
    var password = document.getElementById("passwordsignup").value;
    var repassword = document.getElementById("repasswordsignup").value;
    if (email != "" && username != "" && password != "") {
        if (repassword == password)
            return true;
        else {
            alert('Please Re-Type your password correctly.')
            return false;
        }
    } else {
        alert('Email, Username and Password must be filled.');
        return false;
    }
}

// function checkUrl() {

//     if (window.location.href == "http://localhost/websites/gamedevwebci/Data/index.php/welcome/login") {
//         openNav();
//     } else if (window.location.href == "http://localhost/websites/gamedevwebci/Data/index.php/welcome/register") {
//         openNav2();
//     }
// }

// document.onload = checkUrl();
