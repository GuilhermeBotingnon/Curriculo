let pessoa = {
  "Nome": "matheus",
  "idade": 28,
  "profissao" : "programador",
  "hobbies": ["video game", "Dormir"]
};

let pessoaTexto = JSON.stringify(pessoa);

console.log(pessoaTexto);

let pessoaJSON = JSON.parse(pessoaTexto);

console.log(pessoaJSON.hobbies[1]);
