function limiteTexto(x) {
  if (x.length > 10) {
    alert("Texto Muito Longo");
  } else {
    alert("Texto Regular, dentro dos limites");
  }
}

limiteTexto("Olá Sou o Guilherme");
limiteTexto("Guilherme");
