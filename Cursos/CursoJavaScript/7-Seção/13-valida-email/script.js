const emailValidation = /\w+@\w+\.\w+/;

console.log(emailValidation.test("Guilherme@gmail.com"));
console.log(emailValidation.test("Guilherme@gmail"));
console.log(emailValidation.test("@gmail.com"));
