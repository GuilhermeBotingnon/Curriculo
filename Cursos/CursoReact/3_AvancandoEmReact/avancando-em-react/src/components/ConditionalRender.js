import { useState } from "react";

const ConditionalRender = () => {
  const [x] = useState(false);

  const [name, setName] = useState("Pedro");

  return (
    <div>
      <h1>Isso será exibido?</h1>
      {x && <p> Se x For True, Sim!</p>}
      {!x && <p> Agora X é Falso </p>}
      <h1>If ternário</h1>
      {name === "João" ? (
        <div>
          <p>O nome é João</p>
        </div>
      ) : (
        <div>
          <p>Nome não encontrado</p>
        </div>
      )}
      <div>
        <p>O nome agora é : {name} </p>
      </div>
      <button onClick={() => setName("João")}>Clica aqui!</button>
      <br />
      <button onClick={() => setName("Pedro")}>Trocar Nome!</button>
    </div>
  );
};

export default ConditionalRender;
