import { useState } from "react";

const ConditionalRender = () => {
  const [x] = useState(false);

  const [name, setName] = useState("João");

  return (
    <div>
      <h1>is this going to be exhibited?</h1>
      {x && <p> if X is TRUE yes.</p>}
      {!x && <p> if X is False yes.</p>}
      <h1>if ternary</h1>
      {name === "Guilherme" ? (
        <div>
          <p>{name} Is on the system</p>
        </div>
      ) : (
        <div>
          <p>{name} - Not found in system</p>
        </div>
      )}
      <button onClick={() => setName("Guilherme")}>Change the name Here</button>
    </div>
  );
};

export default ConditionalRender;
