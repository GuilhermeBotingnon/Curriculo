let login = prompt("Digite o seu login");

let nomes = ["Guilherme", "Pedro", "Maria", "Rafael"];

if (login == nomes[0]) {
  alert("Login Encontrado...");
} else {
  alert("Não foi possivel logar");
}

if (nomes.includes("Guilherme")) {
  console.log("Login Encontrado");
}
