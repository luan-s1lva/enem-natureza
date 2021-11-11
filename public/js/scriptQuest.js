function myFunction() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck");
    // Get the output text
    var text = document.getElementById("text");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }
  }
  
  let checkbox = $('txt_arq');
  
  if(checkbox.is(":checked")) {
      console.log("O cliente não marcou o checkbox");
      } else {
      console.log("O cliente marcou o checkbox");
  }
  