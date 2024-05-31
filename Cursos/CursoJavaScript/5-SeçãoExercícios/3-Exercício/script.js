class Address {
  constructor(street, neighborhood, city, state) {
    this.street = street;
    this.neighborhood = neighborhood;
    this.city = city;
    this.state = state;
  }

  updateStreet(street) {
    this.street = street;
    return this.street;
  }

  updateNeighborhood(neighborhood) {
    this.neighborhood = neighborhood;
    return this.neighborhood;
  }

  updateCity(city) {
    this.city = city;
    return this.city;
  }

  updateState(state) {
    this.state = state;
    return this.state;
  }
}

let person = new Address(
  "Rua joão andré quintale",
  "Maracanã",
  "Praia Grande",
  "São Paulo"
);

console.log(person);

person.updateStreet("Rua andré quintale");

console.log(person.street);

person.updateNeighborhood("Esmeralda");

console.log(person.neighborhood);

person.updateCity("Rio de Janeiro");

console.log(person.city);

person.updateState("Paranã");

console.log(person.state);
