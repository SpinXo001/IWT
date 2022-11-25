




function validateform() {
    var name =document.getElementById("uname").value;
    var password = document.getElementById("psw").value;
    var secondpassword = document.getElementById("psw2").value;
    if (name == null || name == "") {
      alert("Name can't be blank");
      return false
     
    } else if (password.length < 8) {
      alert("Password must be at least 8 characters long.");
       event.preventDefault();
         return false
     
    } else if (password != secondpassword) {
      alert("password must be same!");
       event.preventDefault();
         return false
     
    }
    else {
     
        return true
      
    console.log(password);

  }  
}

