const padrao = /Abacax?i/;

console.log(padrao.test("abacaxi"));
console.log(padrao.test("abacaci"));

const padrão2 = /\d+\w?/;

console.log(padrao2.test("123"));
console.log(padrao2.test("123a"));
console.log(padrao2.test("123 "));
