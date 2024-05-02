import { useState } from "react";
import "./App.css";

import City from "./assets/city.jpg";
import ConditionalRender from "./components/ConditionalRender";
import ListRender from "./components/ListRender";
import ManageData from "./components/ManageData";
import ShowUserName from "./components/ShowUserName";
import CarDetails from "./components/CarDetails";
import Fragment from "./components/Fragment";
import Container from "./components/Container";
import ExecuteFunction from "./components/ExecuteFunction";
import Message from "./components/Message";
import ChangeMessageState from "./components/ChangeMessageState";
import UserDetails from "./components/UserDetails";

function App() {
  //const name = "Joaquin";
  const [UserName] = useState("Maria");

  const cars = [
    { id: 1, brand: "Ferrari", color: "Amarelo", newCar: true, km: 0 },
    { id: 2, brand: "KIA", color: "Branco", newCar: false, km: 1200 },
    { id: 3, brand: "Renault", color: "Azul", newCar: false, km: 234 },
  ];

  function showMessage() {
    console.log("Evento do componente pai");
  }

  const [message, setMessage] = useState("");

  const handleMessage = (msg) => {
    setMessage(msg);
  };

  return (
    <div className="App">
      <h1>Avançando em React</h1>
      {/* Imagem Em Public */}
      <div>
        <img src="/img1.jpg" alt="Paisagem" />
      </div>
      {/* Imagem em Asset */}
      <div>
        <img src={City} alt="Cidade" />
      </div>
      <ManageData />
      <ListRender />
      <ConditionalRender />
      {/* Props */}
      <ShowUserName name={UserName} />
      {/* Destructring */}
      <CarDetails brand="VW" km={100000} color="Azul" newCar={false} />
      {/* Reaproveitando */}
      <CarDetails brand="Ford" km={0} color="Vermelho" newCar={true} />
      <CarDetails brand="Fiat" km={100000} color="Branco" newCar={false} />
      {/* Loop em array de objetos */}
      {cars.map((car) => (
        <CarDetails
          key={car.id}
          brand={car.brand}
          color={car.color}
          km={car.km}
          newCar={car.newCar}
        />
      ))}
      {/* Fragment */}
      <Fragment propFragment="Teste" />
      {/* children */}
      <Container myValue="Testing">
        <p>Este é o conteudo</p>
      </Container>
      <Container myValue="Testing2">
        <h5>Testando o container</h5>
      </Container>
      {/* Executar Função */}
      <ExecuteFunction myFunction={showMessage} />
      {/* State lift */}
      <Message msg={message} />
      <ChangeMessageState handleMessage={handleMessage} />
      {/* Tarefa */}
      <UserDetails />
    </div>
  );
}

export default App;
