const cep = /\d{5}-\d{3}/;

console.log(cep.test("11705-300"));
console.log(cep.test("asdas-300"));
console.log(cep.test("881-60"));
console.log(cep.test("99999-999"));

const celphone = /\(\d{2}\)\d{4,5}-\d{4}/;

console.log(celphone.test("(13)99757-1641"));
console.log(celphone.test("(13)5555-1641"));
