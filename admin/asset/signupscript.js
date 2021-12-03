function validateForm() {
            
            var username = document.getElementById("usernamee").value;
            var password = document.getElementById("passwordd").value;
            var email = document.getElementById("emaill").value;
            var gender = document.getElementById("genderr").value;
            var dateofbirth = document.getElementById("dateofbirthh").value;
            var type = document.getElementById("typee").value;
            
            if (username == "") {
                alert("Username must be filled out");
                return false;
            }
            if (password == "") {
                alert("Password must be filled out");
                return false;
            }
            if (email == "") {
                alert("Email must be filled out");
                return false;
            }
            if (gender == "") {
                alert("Gender must be filled out");
                return false;
            }
            if (dateofbirth == "") {
                alert("DateOfBirth must be filled out");
                return false;
            }
            if (type == "") {
                alert("Type must be filled out");
                return false;
            }
            
        }