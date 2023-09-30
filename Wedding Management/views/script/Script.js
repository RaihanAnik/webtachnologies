
//---------------------------------------------------

//-----------------Registration form validation---------

function validateRegistrationForm(pForm){
    let regerr1 = document.getElementById("regerr1");
    let regerr2 = document.getElementById("regerr2");
    let regerr3 = document.getElementById("regerr3");
    let regerr4 = document.getElementById("regerr4");
    let regerr5 = document.getElementById("regerr5");
    let regerr6 = document.getElementById("regerr6");
    let regerr7 = document.getElementById("regerr7");


    const firstname = pForm.firstname.value;
    const lastname = pForm.lastname.value;
    const phone = pForm.phone.value;
    const email = pForm.email.value;
    const username = pForm.username.value;
    const password = pForm.password.value;
    const cpassword = pForm.cpassword.value;

    flag=true;

    if(firstname == "")
    {
        regerr1.innerHTML = "First Name cannot be empty";
        flag=false;
    }
    if(lastname == "")
    {
        regerr2.innerHTML = "Last Name cannot be empty";
        flag=false;
    }
    if(phone == "")
    {
        regerr3.innerHTML = "Phone cannot be empty";
        flag=false;
    }
    if(email == "")
    {
        regerr4.innerHTML = "E-mail cannot be empty";
        flag=false;
    }
    if(username == "")
    {
        regerr5.innerHTML = "Username cannot be empty";
        flag=false;
    }
    if(password == "")
    {
        regerr6.innerHTML = "Password cannot be empty";
        flag=false;
    }
    if(cpassword == "")
    {
        regerr7.innerHTML = "Confirm Password cannot be empty";
        flag=false;
    }

    if (password!=cpassword) {
        alert("Confirm Password does not match");
        flag=false;
    }
    return(flag);
}

function validateLoginForm(pForm) {

    let logerr1 = document.getElementById("err1");
    let logerr2 = document.getElementById("err2");


    const username = pForm.username.value;
    const password = pForm.password.value;

    let flag=true;

    if (username == "") {
        logerr1.innerHTML = "username cannot be empty";
        flag=false;
    }
    if (password == "") {
        logerr2.innerHTML = "password cannot be empty";
        flag=false;
    }
    return(flag);
}





function validateForgetPasswordForm(pForm)
{
    let err1 = document.getElementById("err1");
    let err2 = document.getElementById("err2");
    let err3 = document.getElementById("err3");
    
    const fuser=pForm.user.value;
    const fpass= pForm.npassword.value;
    const fcpass=pForm.cnpassword.value;

    if (fuser=="") {
        err1.innerHTML="username cannot be empty";
        return false;
    }
    if (fpass=="") {
        err2.innerHTML="New Password cannot be empty";
        return false;
    }
    if (fcpass=="") {
        err3.innerHTML="Confirm new Password cannot be empty";
        return false;
    }
    if(fpass!=fcpass)
    {
        alert("Confirm Password does not match");
        return false;
    }
}

function validateChangePasswordForm(pForm)
{
    let err1 = document.getElementById("err1");
    let err2 = document.getElementById("err2");
    let err3 = document.getElementById("err3");
    
    const opass=pForm.opass.value;
    const npass= pForm.npassword.value;
    const cnpass=pForm.cnpassword.value;

    if (opass=="") {
        err1.innerHTML="username cannot be empty";
        return false;
    }
    if (npass=="") {
        err2.innerHTML="New Password cannot be empty";
        return false;
    }
    if (cnpass=="") {
        err3.innerHTML="Confirm new Password cannot be empty";
        return false;
    }
    if(npass!=cnpass)
    {
        alert("Confirm Password does not match");
        return false;
    }
}













