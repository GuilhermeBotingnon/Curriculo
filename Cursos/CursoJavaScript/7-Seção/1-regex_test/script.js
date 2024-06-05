const reg1 = new RegExp("bola");

console.log(reg1.test("Tem bola?"));
console.log(reg1.test("Não tem"));

const reg2 = /bola/;

let text = "tem bola na cesta";

console.log(reg2.test("Tem bola?"));
console.log(reg2.test("Não tem"));
console.log(reg2.test(text));

console.log(/quadrado/.test("Onde tem um quadrado"));
console.log(/quadrado/.test("321321321321321Onde tem um quadrado321321321321"));
