class Carrinho {
  itens = [];
  total = 0;

  constructor() {}

  adicionarItem(item) {
    const index = this.itens.findIndex((el) => el.id === item.id);
    if (index > -1) {
      const qntdAnterior = this.itens[index].qntd;
      this.removerItem(this.itens[index]);
      item.qntd += qntdAnterior;
    }

    this.itens.push(item);
    this.total += item.valor * item.qntd;
  }

  removerItem(item) {
    const index = this.itens.findIndex((el) => el.id === item.id);
    if (index != -1) {
      this.total -= this.itens[index].valor * item.qntd;
      this.itens.splice(index, 1);
      console.log("Removeu", item.qntd);
    }
  }

  getTotal() {
    return this.total;
  }
  getTotalItens() {
    return this.itens.length;
  }
}

const carrinho = new Carrinho();
carrinho.adicionarItem({
  id: 1,
  nome: "Camiseta",
  qntd: 3,
  valor: 50,
});

console.log(carrinho.getTotal());

carrinho.adicionarItem({
  id: 3,
  nome: "Sapatilha",
  qntd: 2,
  valor: 40,
});

console.log(carrinho.getTotal());
console.log(carrinho.getTotalItens());
