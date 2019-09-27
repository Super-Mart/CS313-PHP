// click me fuction
function clickMe() {
  document.getElementById("display-message").innerHTML = "Clicked!";
}
// section-a - change background color
function changeColor() {
  // Selecting the input element and get its value
  var inputVal = document.getElementById("colorInput").value;
  // Selecting section-a's id and get its value
  document.getElementById("changeColor").style.backgroundColor = inputVal;
  // Displaying the value
  // alert(inputVal);
}
// use jQuery to fade out and back in section-c
$("#faded").click(function() {
  $(".fadeOut").fadeToggle("slow", "linear");
});

$("#colorButton").click(function() {
  $("#changeColor").css("background-color", $("#colorInput").val);
});
