const reg = /\w+: (Matheus|João|Maria)/;

console.log(reg.test("Nome: Matheus"));
console.log(reg.test("Nome: José"));
console.log(reg.test("Nome: Maria"));
