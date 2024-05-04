import styles from "./MeuComponente.module.css";
import { useState } from "react";

const MeuComponente = () => {
  const [Carros] = useState([
    { id: 1, marca: "Ford", cor: "Vermelho", km: 0 },
    { id: 2, marca: "Ferrari", cor: "Bege", km: 1200 },
    { id: 3, marca: "Fiat", cor: "Amarelo", km: 400 },
    { id: 4, marca: "Volkswagen", cor: "Ciano", km: 120 },
  ]);

  return (
    <div>
      <h1 className={styles.lista}>Lista de Carros</h1>
      <ul>
        {Carros.map((carro) => (
          <li key={carro.id}>
            <strong>Marca:</strong> {carro.marca} <br /> <strong>Cor:</strong>
            {carro.cor} <br /> <strong>Km:</strong> {carro.km}
            {carro.km === 0 ? (
              <div>
                <h1 className={styles.Titulo_Carro}> O carro é Novo! </h1>
              </div>
            ) : null}
          </li>
        ))}
      </ul>
    </div>
  );
};

export default MeuComponente;
