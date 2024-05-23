function calcular() {
  let velocidade = document.getElementById("velocidade").value;

  if (velocidade >= 80) {
    let resultado = (document.getElementById("resultado").innerHTML =
      "Multado");
    console.log(resultado);
  } else {
    let resultado = (document.getElementById("resultado").innerHTML =
      "Não Foi Multado");
    console.log(resultado);
  }
}
