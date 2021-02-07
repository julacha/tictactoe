console.log("Start");

  let squares = document.querySelectorAll(".square");
  let status = document.getElementById("game_status");
  let step = 0;
  let count =0;
  let turn = "Player A";
  for (let i = 0; i < squares.length; i++) {
    const sq = squares[i];
    sq.addEventListener("click", function (event) {
      event.preventDefault();
    console.log(sq);
    //let symbol = document.createElement("div");
    //console.log(div);
    step = step + 1;
    if (sq.innerHTML == ""){
    if(step % 2 == "0") {
      sq.innerHTML = "0";
      turn = "Player B ";
      } else {
      sq.innerHTML = "X";
      turn = "Player A ";
      }
    //cell.append(symbol);
    result = document.getElementById("result").innerHTML;
    // cell.innerHTML;
    //let place = symbol.textContent;
    count++;
    // symbol.setAttribute("data-value", count);
    // console.log(place);
    // localStorage.setItem(("["+ count +"]"), place);//"turn"nestradā!
    // localStorage.setItem("data-value", JSON.stringify(count));
}
    renderGame();
    this.removeEventListener('click', arguments.callee);
  });
  }

  function renderGame(){
  status.textContent =  (turn) + "goes now";
  }

// let cells = document.querySelectorAll(".square");
// for (let cell of cells) {
//   cell.addEventListener("click", function () {
//     let div = this;
//     //console.log(this);
//     $.ajax({
//       method: div.getAttribute('method'),
//       url: div.getAttribute('action'),
//       data: $(div).serialize()
//   }).done(function (msg) {
//       console.log(msg);
//   });
// });
// }