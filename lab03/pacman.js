function createGame(n) {
   const gameBoard = new Array(n).fill('.');
   const pacmanIndex = Math.floor(Math.random() * n);
   let ghostIndex;
   do {
       ghostIndex = Math.floor(Math.random() * n);
   } while (ghostIndex === pacmanIndex);

   let fruitIndex;
   do {
       fruitIndex = Math.floor(Math.random() * n);
   } while (fruitIndex === pacmanIndex || fruitIndex === ghostIndex);

   gameBoard[pacmanIndex] = 'C';
   gameBoard[ghostIndex] = '^';
   gameBoard[fruitIndex] = '@';

   return gameBoard;
}

function moveLeft(game) {
   const pacmanIndex = game.indexOf("C");
   if (pacmanIndex > 0) {
      game[pacmanIndex] = "";
      game[pacmanIndex - 1] = "C";
   } else {
      game[pacmanIndex] = "";
      game[game.length - 1] = "C";
   }
   return game;
}

function moveRight(game) {
   const pacmanIndex = game.indexOf("C");
   if (pacmanIndex < game.length - 1) {
      game[pacmanIndex] = "";
      game[pacmanIndex + 1] = "C";
   } else {
      game[pacmanIndex] = "";
      game[0] = "C";
   }
   return game;
}
let gameSession = createGame(10);
console.log(gameSession);
console.log(moveRight(gameSession));
console.log(moveLeft(gameSession));
