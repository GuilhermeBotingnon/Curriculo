const ChangeMessageState = ({ handleMessage }) => {
  ChangeMessageState.propTypes;
  const textMessage = () => {
    let userMessage = document.getElementById("text").value;
    event.preventDefault();
    handleMessage(userMessage);
    document.getElementById("text").value = "";
  };
  return (
    <div>
      <p>
        The previous Message was: <span id="prevMessage"></span>
      </p>
      <form>
        <input type="text" placeholder="Insert a Message" id="text" />
        <br />
        <button onClick={textMessage}>Insert</button>
        <br />
      </form>
    </div>
  );
};

export default ChangeMessageState;
