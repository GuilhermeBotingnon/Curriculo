let newElement = document.createElement("p");
let text = document.createTextNode("Some Text");

newElement.appendChild(text);

let targetedElement = document.querySelector("#principal-tittle");
let parentElement = document.querySelector("#main-container");

parentElement.insertBefore(newElement, targetedElement);
