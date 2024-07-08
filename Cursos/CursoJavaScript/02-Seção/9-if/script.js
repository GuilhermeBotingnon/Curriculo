let idade = 19;

if (idade == 19) {
  console.log("a idade é = 19");
}

if (idade > 25) {
  console.log("a idade é maior que 25");
}

let nome = "Matheus";

if (nome == "Matheus" && idade > 10) {
  console.log("liberado");
}

let passaporte = true;

if ((nome == "Matheus" && idade > 10) || passaporte == true) {
  console.log("liberado 2!");
}
