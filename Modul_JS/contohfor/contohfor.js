// FOR
// for (let index = 0; index < 10; index++) {
//   console.log(index);
// }
// let array = ["apel", "mangga", "Nanas", "Jeruk"];
// for (let i = 0; i < array.length; i++) {
//   console.log("Buah ke- " + i + ": " + array[i]);
// }

// // WHILE
// let input;
// while (input !== "exit") {
//   input = prompt("Masukkan Sesuatu ");
//   console.log(" " + input);
// }

let n = parseInt(5);
let faktorial = 1;
let jml = 0;

for (let ind = 1; ind <= n; ind++) {
  faktorial *= ind;
  jml += ind;
}

document.write(faktorial + "<br>");
document.write(jml);
