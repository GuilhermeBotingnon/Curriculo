const idade = 18;
const cnh = true;

if (idade >= 18 && cnh == false) {
  console.log("Você está apto para tirar a CNH");
} else if (idade >= 18 && cnh == true) {
  console.log("Parabéns você Possui direito de dirigir um carro!");
} else {
  console.log("Idade insuficiente para tirar CNH");
}
