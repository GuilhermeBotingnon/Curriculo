let newElement = document.createElement("p");
let text = document.createTextNode("Replaced Text");

newElement.appendChild(text);

let heading = document.querySelector("#principal-tittle");
let parentHeading = heading.parentNode;

parentHeading.replaceChild(newElement, heading);
