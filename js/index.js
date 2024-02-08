window.onscroll = function() {scrollFunction()};
function scrollFunction() 
{
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) 
  {
    
    document.getElementById("header").style.height = "75px";
    document.getElementById("logo").style.height = "50px";
    document.getElementById("logo").style.width = "50px";
    
    
  } 
  else 
  {
    document.getElementById("header").style.height = "auto";
    document.getElementById("logo").style.height = "150px";
    document.getElementById("logo").style.width = "150px";
    
    
  }
}