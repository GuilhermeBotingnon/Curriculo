const TemplateExpressions = () => {
  const name = "Guilherme";
  const data = {
    age: 18,
    job: "Programmer",
  };

  return (
    <div>
      <h1>Hi {name}, how are you?</h1>
      <p>You work as {data.job}!</p>
      <p>{4 + 4}</p>
    </div>
  );
};

export default TemplateExpressions;
