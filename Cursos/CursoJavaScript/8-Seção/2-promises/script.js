let p = Promise.resolve(5);

console.log("Another Codes");

console.log(p);

p.then((value) => {
  return value + 5;
}).then((value) => {
  console.log(value);
});
