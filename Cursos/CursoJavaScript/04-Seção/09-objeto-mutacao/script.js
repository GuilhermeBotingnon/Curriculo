let pessoa = {
  nome: "Guilherme",
};

let pessoa2 = pessoa;

let pessoa3 = {
  nome: "Guilherme",
};
console.log(pessoa.nome);
console.log(pessoa3 == pessoa);
console.log(pessoa == pessoa2);

pessoa2.nome = "pedro";

console.log(pessoa.nome);

pessoa.nome = "Maria";

console.log(pessoa2.nome);
