const Events = () => {
  const handleMyEvent = () => {
    console.log("Activated the event");
  };

  const renderSomething = (x) => {
    if (x) {
      return <h1>I can render THIS</h1>;
    } else {
      return <h1>Same as i can render THIS</h1>;
    }
  };

  return (
    <div>
      <div>
        <button onClick={handleMyEvent}>Click on ME!</button>
      </div>
      <div>
        <button onClick={() => console.log("Activated the event 2")}>
          Click on ME 2
        </button>
      </div>
      {renderSomething(true)}
      {renderSomething(false)}
    </div>
  );
};

export default Events;
