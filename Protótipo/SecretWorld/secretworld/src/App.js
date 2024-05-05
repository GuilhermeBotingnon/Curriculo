// CSS
import "./App.css";

// React
import { useCallBack, useEffect, useState } from "react";

// Data
import { wordsList } from "./data/words";

// Components
import StartScreen from "./components/StartScreen";
import Game from "./components/Game";
import GameOver from "./components/GameOver";

const stages = [
  { id: 1, name: "start" },
  { id: 2, name: "game" },
  { id: 3, name: "end" },
];

function App() {
  // Funçoes de Fases & data
  const [gameStage, setgameStage] = useState(stages[0].name);
  const [words] = useState(wordsList);

  const [pickedWord, setpickedWord] = useState("");
  const [pickedCategory, setpickedCategory] = useState("");
  const [letters, setLetters] = useState([]);

  const [guessedLetters, setGuessedLetters] = useState([]);
  const [wrongLetters, setWrongLetters] = useState([]);
  const [guesses, setGuesses] = useState(3);
  const [score, setScore] = useState(0);

  // Função escolher categoria e palavra
  const pickWordAndCategory = () => {
    // Pegar uma categoria aleatoria
    const categories = Object.keys(words);
    const category =
      categories[Math.floor(Math.random() * Object.keys(categories).length)];

    console.log(category);

    // Pegar uma palavra aleatoria
    const word =
      words[category][[Math.floor(Math.random() * words[category].length)]];

    console.log(word);

    return { word, category };
  };

  // Botão de começar o jogo!
  const startGame = () => {
    // Selecione uma palavra e uma categoria
    const { word, category } = pickWordAndCategory();

    // fazer uma array de letras (palavra) & transformando em lowerCase
    let wordLetters = word.split("");

    wordLetters = wordLetters.map((l) => l.toLowerCase());

    console.log(word, category);
    console.log(wordLetters);

    // fill states
    setpickedWord(word);
    setpickedCategory(category);
    setLetters(wordLetters);

    setgameStage(stages[1].name);
  };

  // Processa a letra digitada
  const verifyLetter = (letter) => {
    const normalizedLetter = letter.toLowerCase();

    // Checar se a letra ja foi utilizada
    if (
      guessedLetters.includes(normalizedLetter) ||
      wrongLetters.includes(normalizedLetter)
    ) {
      return;
    }

    // Trazer a letra escolhida ou remover lá
    if (letters.includes(normalizedLetter)) {
      setGuessedLetters((actualGuessedLetters) => [
        ...actualGuessedLetters,
        normalizedLetter,
      ]);
    } else {
      setWrongLetters((actualWrongLetters) => [
        ...actualWrongLetters,
        normalizedLetter,
      ]);
    }

    console.log(actualGuessedLetters);
    console.log(wrongLetters);
  };

  // Reiniciar o jogo
  const retry = () => {
    setgameStage(stages[0].name);
  };

  return (
    <div className="App">
      {gameStage === "start" && <StartScreen startGame={startGame} />}
      {gameStage === "game" && (
        <Game
          verifyLetter={verifyLetter}
          pickedWord={pickedWord}
          pickedCategory={pickedCategory}
          letters={letters}
          guessedLetters={guessedLetters}
          wrongLetters={wrongLetters}
          guesses={guesses}
          score={score}
        />
      )}
      {gameStage === "end" && <GameOver retry={retry} />}
    </div>
  );
}

export default App;
