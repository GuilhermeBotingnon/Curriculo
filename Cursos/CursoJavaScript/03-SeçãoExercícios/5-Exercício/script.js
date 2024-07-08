function verificaIdade(nome, x) {
  // Verifica idade
  if (x >= 18) {
    alert(
      `Olá ${nome}, Verificamos sua idade você está apto para realizar a primeira cnh`
    );
  } else {
    alert(
      `Olá ${nome}, Verificamos sua idade e é nescessario 18 anos para realizar a primeira cnh`
    );
  }
}

let nome = prompt("Digite seu nome");
let idade = parseInt(prompt("Digite a sua idade"));

verificaIdade(nome, idade);
