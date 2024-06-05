const validationBrand = /Marca: (Nike|Adidas|Puma|Asics)/;

console.log(validationBrand.test("Marca: Nike"));
console.log(validationBrand.test("Marca: nike"));
console.log(validationBrand.test("Marca: ike"));
console.log(validationBrand.test("Marca: "));
