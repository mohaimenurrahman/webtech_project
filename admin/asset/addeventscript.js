function validateForm() {

       var name = document.getElementById("namee").value;
       var date = document.getElementById("datee").value;
       var description = document.getElementById("descriptionn").value;

       if (name == "") {
           alert("Event name must be filled out");
           return false;
       }
       if (date == "") {
           alert("Event date must be filled out");
           return false;
       }
       if (description == "") {
           alert("Event description must be filled out");
           return false;
       }
} 