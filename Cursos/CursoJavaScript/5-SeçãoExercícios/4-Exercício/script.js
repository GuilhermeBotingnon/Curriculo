class Car {
  constructor(brand, color, leftGas) {
    this.brand = brand;
    this.color = color;
    this.leftGas = leftGas;
  }

  drive() {
    for (let i = 0; i <= this.leftGas; i++) {
      var gas = this.leftGas - i;
      console.log(gas);
    }
    this.leftGas = gas;
    console.log("No gas");
  }

  gasUp() {
    if (this.leftGas != 0) {
      console.log("Still some gas in");
    } else {
      return (this.leftGas += 5);
    }
  }
}

const personCar = new Car("Ford", "Blue", 20);

console.log(personCar);

personCar.gasUp();

personCar.drive();

personCar.gasUp();

personCar.drive();
