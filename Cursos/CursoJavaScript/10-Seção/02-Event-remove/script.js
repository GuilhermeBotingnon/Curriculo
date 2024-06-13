let btn1 = document.querySelector("#btn1");
let btn2 = document.querySelector("#btn2");

function msg() {
  console.log("Activated the event");
}

btn1.addEventListener("click", msg);

btn2.addEventListener("click", () => {
  console.log("Remove the event successfully");
  btn1.removeEventListener("click", msg);
});
