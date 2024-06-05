const validateUserName = /^(?=.{3,16}$)[a-z0-9-_]/;

let userName = "bot";

console.log(validateUserName.test(userName));
