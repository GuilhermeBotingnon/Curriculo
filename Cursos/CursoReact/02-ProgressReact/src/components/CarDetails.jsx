const CarDetails = ({ brand, color, km, newCar }) => {
  CarDetails.propTypes;
  return (
    <div>
      <h2>Car details</h2>
      <ul>
        <li>Brand: {brand}</li>
        <li>Color: {color}</li>
        <li>KM: {km}</li>
      </ul>
      {newCar && <p>This car is New</p>}
    </div>
  );
};

export default CarDetails;
