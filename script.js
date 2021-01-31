console.log("Start");
let cells = document.querySelectorAll(".square");
let status = document.getElementById("game_status");
let step = 0;
let count =0;
let turn = "Player A";
for (let cell of cells) {
  cell.addEventListener("click", function () {
  console.log(this);
  event.stopPropagation();
  let symbol = document.createElement("div");
  step = step + 1;
  if(step % 2 == "0") {
    symbol.textContent = "0";
} else {
    symbol.textContent = "X";
}
  cell.append(symbol);
  let place = symbol.textContent;
  count++;
  symbol.setAttribute("data-value", count);
  console.log(place);
  localStorage.setItem("cell["+ step +"]", place);
  localStorage.setItem("data-value", count);

  if (turn === "Player A "){
    turn = "Player B ";
    symbol.textContent = "0";
  }else{
    turn = "Player A ";
    symbol.textContent = "X";
  }
  renderGame();
  this.removeEventListener('click', arguments.callee);
});
}

function renderGame(){
status.textContent =  (turn) + "goes now";
}
// let move = new Game(".square", function (square) {
//   localStorage.setItem("steps", JSON.stringify(square));
//   let steps = JSON.parse(result.data);
//   $.ajax({
//     method: 'post',
//     url: action,
//     data: {
//       action: 'update',
//       todos: task_list
//     }
//   }).done(function (msg) {
//       console.log(msg);
//   });

// });
