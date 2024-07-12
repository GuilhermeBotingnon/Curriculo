import "./App.css";
import MyForm from "./components/MyForm";

function App() {
  return (
    <>
      <h2>Forms</h2>
      <MyForm
        user={{
          name: "Guilherme",
          email: "Guilherme@gmail.com",
          bio: "i'm a laywer",
          role: "admin",
        }}
      />
    </>
  );
}

export default App;
