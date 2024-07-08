const day = /\d\d/;

console.log(day.test("2019") && "2019".length == 2);
console.log(day.test("asd"));
console.log(day.test("05") && "05".length == 2);
console.log(day.test("asd12"));

const wordThreeLetters = /\w\w\w/;

console.log(wordThreeLetters.test("asd"));
console.log(wordThreeLetters.test("asdd"));
console.log(wordThreeLetters.test("as"));
