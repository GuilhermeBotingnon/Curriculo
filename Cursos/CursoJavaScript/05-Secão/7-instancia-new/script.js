function Cachorro(raca, patas, cor) {
  this.raca = raca;
  this.patas = patas;
  this.cor = cor;
  this.uivar = function () {
    console.log("Au Au");
  };
}

let husky = new Cachorro("husky", 4, "preto");

console.log(husky);

husky.uivar();
