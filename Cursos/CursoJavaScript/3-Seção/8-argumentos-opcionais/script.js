function soma(a, b) {
  if (a === undefined || b === undefined) {
    console.log("Esta função precisa ter os dois argumentos");
  } else {
    return a + b;
  }
}
console.log(soma(10));

console.log(soma(10, 20));

function saudacao(nome, idade) {
  if (idade === undefined) {
    console.log(`Olá ${nome} Seja Bem-Vindo`);
  } else {
    console.log(
      `Olá ${nome} Identificamos que a sua idade é ${idade}, Seja Bem-Vindo`
    );
  }
}

saudacao("Guilherme", 18);

saudacao("Pedro");
