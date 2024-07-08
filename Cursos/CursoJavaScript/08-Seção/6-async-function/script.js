async function sum(a, b) {
  return a + b;
}

console.log(sum(2, 4));

sum(2, 4).then((value) => console.log(value));
