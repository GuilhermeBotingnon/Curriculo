const notab = /[^ab]/;

console.log(notab.test("a"));
console.log(notab.test("Aqui tem a"));

const notToaz = /[^a-z]/;

console.log(notToaz.test("123 as"));
console.log(notToaz.test("asdkdsakdsalasda"));

const az = /[a-z]/;

console.log(notToaz.test("12312kfdkk"));
