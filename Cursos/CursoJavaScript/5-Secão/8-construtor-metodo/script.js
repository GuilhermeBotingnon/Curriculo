function Cachorro(raca, patas, cor) {
  this.raca = raca;
  this.patas = patas;
  this.cor = cor;
}

Cachorro.prototype.uivar = function () {
  console.log("Auuuu");
};

let husky = new Cachorro("husky", 4, "preto");

husky.uivar();
