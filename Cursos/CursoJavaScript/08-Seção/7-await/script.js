function delayedSum(a, b) {
  return new Promise((resolve) => {
    setTimeout(function () {
      resolve(a + b);
    }, 4000);
  });
}

async function resSum(a, b, c) {
  let x = delayedSum(a, b);
  let y = c;

  return (await x) + y;
}

resSum(1, 2, 3).then((value) => console.log(value));
