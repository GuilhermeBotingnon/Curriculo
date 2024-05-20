console.log(typeof (2 + 3));
console.log(typeof (5 - 12));
console.log(typeof (4 * 4));
console.log(typeof (5 / 3));
console.log(typeof (20 % 2));
console.log(typeof (21 % 2));

const a = 10;
const b = 30;

const d = a + b;

const c = undefined;

if (d == 40) {
  const c = d;
  console.log("Valor de C é de ", c);
} else {
  const c = 30;
  console.log("Valor de C é ", c);
}
