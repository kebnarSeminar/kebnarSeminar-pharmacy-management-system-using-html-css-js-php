function start() {
    var v1 = document.forms["form1"]["name"].value;
    var v2 = document.forms["form1"]["address"].value;
    var v3 = document.forms["form1"]["email"].value;
    var v4 = document.forms["form1"]["contactnumber"].value;
    var v5 = document.forms["form1"]["username"].value;
    var v6 = document.forms["form1"]["password"].value;
    var v7 = document.forms["form1"]["passwrodconfirmation"].value;
    if (v1 == "") {
        alert("pharmacy name is required");
    } else if (v2 == "") {
        alert("address name is required");
    } else if (v3 == "") {
        alert("email  is required");
    } else if (v4 == "") {
        alert("contact number is required");
    } else if (v5 == "") {
        alert("uername is required");
    } else if (v6 == "") {
        alert("password is required");
    } else if (v7 == "") {
        alert("re enter the passord please");
    } else if (v6 != v7) {

        alert("your password does not match");
    } else {
        window.location = "signup.html";

    }

}