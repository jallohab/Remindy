
function myFunction() {
    // var redir = window.location.replace("../LogSignUp/login.html");
   if (document.getElementById("enter").value == "Submitty") {
        document.write("Great, seems like you will never forget submitty!")
        setTimeout(window.location = "login.html", 4000);
   }
    else {

        alert("You enter the wrong answer!");
    }
  }
  