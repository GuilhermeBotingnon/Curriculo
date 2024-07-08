const birthdayValidation = /[0-31]{2}[/][0-12]{2}[/][1930-2024]{4}/;

console.log(birthdayValidation.test("05/01/2006"));
console.log(birthdayValidation.test("5/2/2006"));
console.log(birthdayValidation.test("05-01-2006"));
console.log(birthdayValidation.test("05/02/26"));
