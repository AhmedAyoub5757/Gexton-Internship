function disableButton() {
  var button = document.getElementById("submitBtn");
  button.disabled = true;
}

document.getElementById("myForm").addEventListener("submit", function (event) {
  event.preventDefault();
  disableButton();

  setTimeout(function () {
    alert("Form has been submitted successfully!");

    var timeToEnable = 4000;

    setTimeout(function () {
      document.getElementById("submitBtn").disabled = false;
    }, timeToEnable);
  }, 1000);
});
