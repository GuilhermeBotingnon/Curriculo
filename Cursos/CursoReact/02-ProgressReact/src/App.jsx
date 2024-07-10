import { useState } from "react";
import "./App.css";

import city from "./assets/city.jpg";
import ConditionalRender from "./components/ConditionalRender";
import ListRender from "./components/ListRender";
import ManageData from "./components/ManageData";
import ShowUsername from "./components/ShowUsername";
import CarDetails from "./components/CarDetails";
import Fragment from "./components/Fragment";
import Container from "./components/Container";
import ExecuteFunction from "./components/ExecuteFunction";
import Message from "./components/Message";
import ChangeMessageState from "./components/ChangeMessageState";

function App() {
  const [userName] = useState("Maria");

  const cars = [
    { id: 1, brand: "Ferrari", color: "Yellow", newCar: true, km: 0 },
    { id: 2, brand: "Ford", color: "Red", newCar: false, km: 12030 },
    { id: 3, brand: "Fiat", color: "Black", newCar: false, km: 3002 },
  ];

  function showMessage() {
    console.log("Father Event");
  }

  const [message, setMessage] = useState("");

  const handleMessage = (msg) => {
    setMessage(msg);
  };

  return (
    <>
      <h1>Progressing in React</h1>
      {/* Image in public */}
      <div>
        <img src="/img1.jpg" alt="Paisage" />
      </div>
      {/* Image in asset */}
      <div>
        <img src={city} alt="City" />
      </div>
      <ManageData />
      <ListRender />
      <ConditionalRender />
      {/* Props */}
      <ShowUsername name={userName} />
      {/* Destructuring */}
      <CarDetails brand="VW" color="Blue" km={10000} newCar={false} />
      {/* Reusing */}
      <CarDetails brand="Ford" color="Red" km={0} newCar={true} />
      <CarDetails brand="Fiat" color="White" km={4500} newCar={false} />
      {/* Loop in objects array */}
      {cars.map((car) => (
        <CarDetails
          brand={car.brand}
          color={car.color}
          km={car.km}
          newCar={car.newCar}
          key={car.id}
        />
      ))}
      {/* Fragment */}
      <Fragment propFragment="Test" />
      {/* Children */}
      <Container myValue="testing">
        <p>This is the content</p>
      </Container>
      <Container myValue="testing 2">
        <p>testing the container</p>
      </Container>
      {/* Execute Funciton */}
      <ExecuteFunction myFunction={showMessage} />
      {/* State lift */}
      <Message msg={message} />
      <ChangeMessageState handleMessage={handleMessage} />
    </>
  );
}

export default App;
