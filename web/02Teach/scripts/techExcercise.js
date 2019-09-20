function alertClicked() {
  document.getElementById("clicked").innerHTML = "Clicked!";
}

function colorChange() {
  // Selecting the input element and get its value
  var inputVal = document.getElementById("newColor").value;
  document.getElementById("colorChange").style.backgroundColor = inputVal;
  // Displaying the value
  // alert(inputVal);
}
