let input = document.querySelector("input");

input.addEventListener("focus", () => {
  console.log("Selected the input");
});

input.addEventListener("blur", () => {
  console.log("exited the input");
});
