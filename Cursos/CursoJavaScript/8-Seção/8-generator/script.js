function* idGenerator() {
  let id = 0;
  while (true) {
    yield id++;
  }
}

let createId = idGenerator();

console.log(createId.next().value);
console.log(createId.next().value);
console.log(createId.next().value);
console.log(createId.next().value);
console.log(createId.next().value);
console.log(createId.next().value);
console.log(createId.next().value);

console.log(createId.next());
