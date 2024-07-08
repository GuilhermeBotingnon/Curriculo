let nomes = ["Guilherme", "Rafael", "Maria", "pedro", "gabriela"];

let idades = [18, 19, 20, 22];

function verificaQuantidade(qntd, qntd2) {
  if (qntd == undefined || qntd2 == undefined) {
    console.log("Elementos não suficientes");
  } else {
    if (qntd < qntd2) {
      console.log("Poucos elementos");
    } else {
      console.log("Muitos elementos");
    }
  }
}

verificaQuantidade(idades.length, nomes.length);

verificaQuantidade(nomes.length, idades, length);
