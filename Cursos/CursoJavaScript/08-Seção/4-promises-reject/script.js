const verifyNumber = (num) => {
  return new Promise((resolve, reject) => {
    if (num == 2) {
      resolve(console.log(`the number is ${num}`));
    } else {
      reject(new Error("Falhou"));
    }
  });
};

verifyNumber(2);

verifyNumber(4);
