const oneOrMoreNumbers = /\d+/;

console.log(oneOrMoreNumbers.test("1231321"));
console.log(oneOrMoreNumbers.test(""));
console.log(oneOrMoreNumbers.test("asdasda"));
console.log(oneOrMoreNumbers.test("1"));
console.log(oneOrMoreNumbers.test("123012302103210321032103210329139213921"));
