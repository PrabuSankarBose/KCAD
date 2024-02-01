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
}