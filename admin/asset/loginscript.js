function validateForm() {
            
                     var username = document.getElementById("user").value;
                     var password = document.getElementById("pass").value;
                     var type = document.getElementById("ty").value;
            
                     if (username == "") {
                         alert("Username must be filled out");
                         return false;
                     }
                     if (password == "") {
                         alert("Password must be filled out");
                         return false;
                     }
                     if (type == "") {
                         alert("Type must be filled out");
                         return false;
                     }
              }  