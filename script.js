console.log("Start");

let cells = document.querySelectorAll(".square");
let step = 0;
for (let cell of cells) {
  cell.addEventListener("click", function () {
  let symbol = document.createElement("div");
  step = step + 1;
  if(step % 2 == "0") {
    symbol.textContent = "0";
} else {
    symbol.textContent = "x";
}
  cell.append(symbol);
});
}


