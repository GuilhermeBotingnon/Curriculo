const onlyDigitsID = /\d+ID\b/;

console.log(onlyDigitsID.test("32193219231ID"));
console.log(onlyDigitsID.test("32193219231"));
console.log(onlyDigitsID.test("1321"));
console.log(onlyDigitsID.test("FDSAFDSAFDSAAID"));
