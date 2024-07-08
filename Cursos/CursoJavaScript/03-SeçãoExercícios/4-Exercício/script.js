function numeroAleatorio(max) {
  return Math.floor(Math.random() * max) + 1;
}

let Num1 = parseInt(prompt("Digite o numero teto para aleatorizar"));

console.log(numeroAleatorio(Num1));
