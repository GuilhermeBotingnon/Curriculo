const ipValidation = /\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/;

const ip = "122.18.102.150";

console.log(ipValidation.test(ip));
