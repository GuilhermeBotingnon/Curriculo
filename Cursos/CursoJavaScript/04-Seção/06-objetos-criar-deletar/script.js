let pessoa = {
  nome: "Guilherme",
  idade: 18,
  hobbie: function () {
    let hobbie = prompt("Digite seu Hobbie");
    alert(`O seu Hobbie é ${hobbie}`);
  },
};

console.log(pessoa.nome);
console.log(pessoa.idade);

pessoa.hobbie();

delete pessoa.nome;

console.log(pessoa);

pessoa.nome = prompt("Digite seu Nome");

console.log(pessoa.nome);
