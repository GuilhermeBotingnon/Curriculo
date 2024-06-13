window.addEventListener("load", () => {
  alert("Window load test");
});

window.addEventListener("beforeunload", (event) => {
  event.returnValue = null;
});
