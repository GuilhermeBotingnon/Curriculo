let newElement = document.createElement("p");
let text = document.createTextNode("Some Text");

newElement.appendChild(text);

let p = document.querySelector("#main-paragraph");
let parent = p.parentNode;

p.appendChild(newElement);
