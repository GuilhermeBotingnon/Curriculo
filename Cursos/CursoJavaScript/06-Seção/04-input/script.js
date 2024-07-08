function checarNumero(num) {
  let number = Number(num);
  if (Number.isNaN(number)) {
    alert("Por favor! passe apenas numeros para o programa");
  } else {
    alert("Numero checado e avaliado");
    return number;
  }
}

checarNumero(5);
checarNumero("Sada");

let number = prompt("Digite um numero");

checarNumero(number);
