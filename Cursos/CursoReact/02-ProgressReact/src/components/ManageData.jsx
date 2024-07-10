import { useState } from "react";

const ManageData = () => {
  let someData = 10;

  const [number, setNumber] = useState(15);

  const [Name, setName] = useState([null]);

  const submitForm = () => {
    let getName = document.getElementById("Name").value;
    setName(getName);
    event.preventDefault();
    document.getElementById("Name").value = "";
  };

  return (
    <div>
      <div>
        <p>Value: {someData}</p>
        <button
          onClick={() => {
            someData = 15;
          }}
        >
          Change the value
        </button>
      </div>
      <div>
        <p>Value: {number}</p>
        <button onClick={() => setNumber(25)}>Change the value</button>
      </div>
      <div className="form">
        {Name.length <= 1 ? (
          <h1>Add a name Bellow</h1>
        ) : (
          <ul>
            <li>{Name}</li>
          </ul>
        )}
        <form action="#">
          <label htmlFor="Name">
            <p>Inset a name</p>
          </label>
          <input type="text" name="Name" id="Name" min="2" />
          <br />
          <button onClick={submitForm} id="submitForm">
            Submit
          </button>
        </form>
      </div>
    </div>
  );
};

export default ManageData;
