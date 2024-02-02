function sign_in()
{
    document.getElementById("sign-in-tab").style.display = "flex";
    document.getElementById("sign-up-tab").style.display = "none";
    document.getElementById("sign-in-button").style.backgroundColor = "azure";
    document.getElementById("sign-in-button").style.color = "hotpink";
    document.getElementById("sign-up-button").style.backgroundColor = "hotpink";
    document.getElementById("sign-up-button").style.color = "azure";
    
}
function sign_up()
{
    document.getElementById("sign-in-tab").style.display = "none";
    document.getElementById("sign-up-tab").style.display = "flex";
    document.getElementById("sign-in-button").style.backgroundColor = "hotpink";
    document.getElementById("sign-in-button").style.color = "azure";
    document.getElementById("sign-up-button").style.backgroundColor = "azure";
    document.getElementById("sign-up-button").style.color = "hotpink";
    document.getElementById("roll-no").attributes="autofocus";
}



// function signin_validation()
// {
//     let username = documnet.forms["signin_form"]["user-name"].value;
//     let password = documnet.forms["signin_form"]["pwd"].value;
//     if ( username == "" || password == "" ) 
//     {
//         alert("No fields must be empty");
//         return false;
//     }

// } 
// function signup_validation()
// {
//     let rollno = documnet.forms["signup_form"]["roll-no"].value;
//     let username = documnet.forms["signup_form"]["user-name"].value;
//     let password = documnet.forms["signup_form"]["pwd"].value;
//     let address = documnet.forms["signup_form"]["address"].value;
//     let phone_no = documnet.forms["signup_form"]["phone-no"].value;
//     let cpassword = documnet.forms["signup_form"]["cpwd"].value;
//     if ( username == "" || password == "" ) 
//     {
//         alert("No fields must be empty");
//         return false;
//     }

// } 