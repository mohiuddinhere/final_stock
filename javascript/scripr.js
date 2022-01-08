/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
} 

function promptPassword( )
{
    var pwd = document.getElementById("pwdText").value;
    if(pwd != 'P@ssw0rd'){
        alert("Login is incorrect");
        document.getElementById('pwdText').value = "";
        return false;
    }
    else{
        alert("Password is correct, you are allowed to enter the site");    
        // Enter Site Code Here
    }
}