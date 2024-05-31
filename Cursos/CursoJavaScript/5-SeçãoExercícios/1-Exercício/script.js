class ContaBancaria {
  constructor(saldo) {
    this.saldo = saldo;
  }

  deposito(valorDeposito) {
    let valorSaldo = this.saldo + valorDeposito;

    return (this.saldo = valorSaldo);
  }

  saque(valorSacado) {
    let valorSaldo = this.saldo - valorSacado;

    return (this.saldo = valorSaldo);
  }
}

let contaA = new ContaBancaria(3000);

console.log(contaA.saque(300));

console.log(contaA.deposito(800));
