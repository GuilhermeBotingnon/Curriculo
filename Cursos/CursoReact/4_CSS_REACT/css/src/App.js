import "./App.css";
import MyComponent from "./components/MyComponent";
import { useState } from "react";
import Title from "./components/Title";

function App() {
  const n = 15;

  const [name] = useState("Matheus");

  const redTitle = false;

  return (
    <div className="App">
      {/* Css Global */}
      <h1>React com CSS</h1>
      {/* Css de Componente */}
      <MyComponent />
      <p>Este parágrafo é do App.js</p>
      {/* Inline CSS */}
      <p
        style={{
          color: "Magenta",
          padding: "25px",
          borderTop: "2px solid red",
        }}
      >
        Este elemento foi estilizado em forma inline
      </p>
      <p
        style={{
          color: "Magenta",
          padding: "25px",
          borderTop: "2px solid red",
        }}
      >
        Este elemento foi estilizado em forma inline
      </p>
      {/* CSS Inline Dinâmico */}
      <h2 style={n < 10 ? { color: "Purple" } : { color: "Pink" }}>
        CSS Dinâmico
      </h2>
      <h2 style={n > 10 ? { color: "Purple" } : { color: "Pink" }}>
        CSS Dinâmico
      </h2>
      <h2
        style={
          name === "A" ? { color: "green", backgroundColor: "#000" } : null
        }
      >
        CSS Dinâmico
      </h2>
      {/* Classe Dinâmica */}
      <h2 className={redTitle ? "red-title" : "title"}>
        Este título vai ter classe dinâmica
      </h2>
      {/* CSS Modules */}
      <Title />
      <h2 className="My_title"> Oi </h2>
    </div>
  );
}

export default App;
