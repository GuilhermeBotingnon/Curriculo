let num = 1;
let num1 = 9;
let num2 = 1200;
let num3 = 12;

function imprimirNumeros(...args) {
  for (let i = 0; i < args.length; i++) {
    console.log(args[i]);
  }
}

imprimirNumeros(num, num1, num2, num3);
console.log("pausa");
imprimirNumeros(num2, num3);
console.log("pausa");
imprimirNumeros(2, 6, 7, 8, 9, 5, 3, 2, 5, 6, 2, 4, 5);
console.log("Final");
