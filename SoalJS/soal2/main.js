function cekSuhu() {
  let suhu = parseFloat(prompt("Masukkan Suhu : "));

  if (suhu < 20) {
    console.log(`Suhu ${suhu} derajat celsius dingin`);
  } else if (suhu > 20) {
    console.log(`Suhu ${suhu} derajat celsius panas`);
  }
}
cekSuhu();
