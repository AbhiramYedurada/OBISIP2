var screen = document.getElementById("display");
buttons = document.querySelectorAll("button");
let screenValue = "";
for (item of buttons) {
  item.addEventListener("click", (e) => {
    buttonText = e.target.innerText;
    if (buttonText == "x") {
      buttonText = "*";
      screenValue += buttonText;
      screen.value = screenValue;
    }else if (buttonText == "C") {
      screenValue = "";
      screen.value = screenValue;
    }else if(buttonText == "DEL"){
      screenValue = screenValue.substring(0,screenValue.length-1);
      screen.value = screenValue;
    }else if (buttonText == "=") {
      var result;
      try {
        result = eval(screenValue);
      } catch (error) {
        result = "Expression error";
      }
      screen.value = result;
    } else {
      screenValue += buttonText;
      screen.value = screenValue;
    }
  });
}