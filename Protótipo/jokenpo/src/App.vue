<script setup>
import { ref, onMounted } from 'vue';

import Rock from "@/assets/rock.png";
import Scissor from "@/assets/scissor.png";
import Paper from "@/assets/paper.png";

const gameAssets = {
  rock: {
    win: 'scissor',
    lose: 'paper',
    img: Rock
  },
  scissor: {
    win: 'paper',
    lose: 'rock',
    img: Scissor
  },
  paper: {
    win: 'rock',
    lose: 'scissor',
    img: Paper
  },
}

// started | win | lose | draw
const gameState = ref('started')
const playerAction = ref({});
const botAction = ref({});
const gameMessage = ref('');

onMounted(() => {
  initState()
})

const initState = () => {
  gameState.value = 'started'
  playerAction.value = {}
  botAction.value = {}
  gameMessage.value = 'Choose an option'
}

const actionStart = (asset) => {
  playerAction.value = asset;

  const keys = Object.keys(gameAssets);
  botAction.value = gameAssets[keys[ keys.length * Math.random() << 0]];

  if (playerAction.value.lose === botAction.value.win) {
    gameMessage.value = 'You win!';
    gameState.value = 'win';
  } else if (playerAction.value === botAction.value) {
    gameMessage.value = 'Draw';
    gameState.value = 'draw';
  } else{
    gameMessage.value = 'You lose!';
    gameState.value = 'lose';
  }
}

const reloadGame = () => {
  initState()
}
</script>

<template>
  <div class="game">
    <div class="display">
      <span
          class="message"
          :class="{
            '-win': gameState === 'win',
            '-lose': gameState === 'lose',
            '-draw': gameState === 'draw',
          }"
      >
        {{ gameMessage }}
      </span>

      <template v-if="playerAction.img">
        <img :src="playerAction.img">
        <span>VS</span>
        <img :src="botAction.img">
      </template>
    </div>

    <div class="actions">
      <template v-if="gameState === 'started'">
        <img @click="actionStart(gameAssets.paper)" :src="gameAssets.paper.img" alt="paper">
        <span class="divider"></span>
        <img @click="actionStart(gameAssets.rock)" :src="gameAssets.rock.img" alt="rock">
        <span class="divider"></span>
        <img @click="actionStart(gameAssets.scissor)" :src="gameAssets.scissor.img" alt="scissor">
      </template>
      <button v-else @click="reloadGame()">Rematch</button>
    </div>

  </div>
</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

html {
  font-size: 30px;
  font-family: "Poppins", sans-serif;
  font-weight: 600;
}

body {
  display: grid;
  height: 100vh;
  place-items: center;
  background: #f4e59d77;
  padding: 0;
  margin: 0;
}

.game {
  background: #fff;
  border-radius: .25rem;
  width: 18rem;
  box-shadow: 0 2px 5px -2px #000;

  > .display {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(2, 1fr);
    align-items: center;
    justify-items: center;
    padding: 1rem;
    border-bottom: 1px solid #f2f2f2;
    height: 5rem;

    > .message {
      grid-column: 3 span;

      &.-lose {
        color: darkred;
      }

      &.-win {
        color: green;
      }

      &.-draw {
        color: blue;
      }
    }

    > img {
      max-height: 4rem;
    }
  }

  > .actions {
    display: flex;
    justify-content: center;
    padding: 1rem;
    gap: 1rem;
    height: 3.5rem;

    > .divider {
      width: .10rem;
      background: #f2f2f2;
    }

    > img {
      max-height: 3.5rem;
      padding: .5rem;
      border-radius: .25rem;
      transition: background .3s;
      cursor: pointer;

      &:hover {
        background: #f2f2f2;
      }
    }

    > button {
      border: none;
      flex-grow: 1;
      background: #ff0080;
      color: #fff;
      font-size: 1.5rem;
      border-radius: .25rem;
      transition: all .3s;
      cursor: pointer ;

      &:hover {
        color: whitesmoke;
        background: blueviolet;
        scale: 1.010;
        box-shadow: 0 3px 5px -2px #5a1793;
      }
    }
  }
}
</style>