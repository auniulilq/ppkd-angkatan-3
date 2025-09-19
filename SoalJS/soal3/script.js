function predikat() {
  let nilai = parseFloat(prompt("Masukkan Nilai (0-100) : "));

  if (isNaN(nilai) || nilai < 0 || nilai > 100) {
    console.log("Nilai tidak valid, Silahkan masukan kembali");
    return;
  }

  let predikat;
  if (nilai >= 85) {
    predikat = "A";
  } else if (nilai >= 70) {
    predikat = "B";
  } else if (nilai >= 50) {
    predikat = "C";
  } else {
    predikat = "D";
  }

  console.log(`Nilai :  ${nilai}, Predikat : ${predikat}`);
}

predikat();
