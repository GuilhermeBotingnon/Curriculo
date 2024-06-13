window.addEventListener("keydown", (e) => {
  if (e.key == "q") {
    console.log("you pressed the Q");
  } else if (e.key == "Enter") {
    console.log("you pressed the Enter");
  }
});

window.addEventListener("keyup", (e) => {
  if (e.key == "Enter") {
    console.log("You free the Enter");
  }
});
