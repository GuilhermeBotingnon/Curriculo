const Container = ({ children, myValue }) => {
  Container.propTypes;
  return (
    <div>
      <h2>This is the Container Tittle</h2>
      {children}
      <p>the value is {myValue}</p>
    </div>
  );
};

export default Container;
