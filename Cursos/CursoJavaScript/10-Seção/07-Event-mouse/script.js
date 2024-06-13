let btn1 = document.querySelector("#btn1");
let btn2 = document.querySelector("#btn2");

btn1.addEventListener("mousedown", () => {
  console.log("you pressed the button");
});

btn1.addEventListener("mouseup", () => {
  console.log("you free the button");
});

btn2.addEventListener("dblclick", () => {
  console.log("you clicked two times");
});

btn2.addEventListener("contextmenu", (e) => {
  e.preventDefault();
  console.log("you pressed the right button");
});
