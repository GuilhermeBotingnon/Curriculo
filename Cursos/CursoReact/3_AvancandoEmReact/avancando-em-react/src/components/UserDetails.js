import { useState } from "react";

const UserDetails = () => {
  const [users] = useState([
    { id: 1, name: "Matheus", age: 17, profissao: "Gerente" },
    { id: 2, name: "João", age: 22, profissao: "Professor" },
    { id: 3, name: "Pedro", age: 19, profissão: "Programador" },
  ]);

  return (
    <div>
      <ul>
        {users.map((user) => (
          <li key={user.id}>
            Nome: <strong>{user.name}</strong>, Profissão: {user.profissao},
            Idade: {user.age}
            {/* Verificação */}
            {user.age >= 18 ? (
              <div>
                <p>
                  O <strong>{user.name}</strong> pode tirar carteira de
                  Habilitação
                </p>
              </div>
            ) : (
              <div>
                <p>O {user.name} não pode tirar carteira de Habilitação</p>
              </div>
            )}
          </li>
        ))}
      </ul>
    </div>
  );
};

export default UserDetails;
