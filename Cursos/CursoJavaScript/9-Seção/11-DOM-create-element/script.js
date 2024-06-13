let list = document.createElement("ul");

for (i = 0; i < 5; i++) {
  let item = document.createElement("li");

  let text = document.createTextNode("list text " + i);

  item.appendChild(text);

  list.appendChild(item);
}

let container = document.getElementById("main-container");

container.appendChild(list);
