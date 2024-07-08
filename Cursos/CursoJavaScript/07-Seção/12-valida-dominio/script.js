const domainValidation = /[?www.]\w+\.com.br|.com/;

console.log(domainValidation.test("www.google.com"));
console.log(domainValidation.test("www.horadecodar.com.br"));
console.log(domainValidation.test("www.horadecodar"));
console.log(domainValidation.test("horadecodar.com.br"));
