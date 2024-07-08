function detectaDado(y) {
  let x = typeof y;
  if (x === "boolean") {
    alert("O Dado inserido é um Boolean");
  } else if (x === "string") {
    alert("O dado inserido é uma String");
  } else if (x === "number") {
    alert("O dado inserido é um Number");
  } else {
    alert("Dado não pode ser verificado");
  }
}

detectaDado("A");
detectaDado(20);
detectaDado(true);
