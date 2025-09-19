// // opsi 1
// function hitungSaldoAkhir(saldoAwal, bunga, waktu) {
//   //   Menghitung bunga total
//   let bungaTotal = saldoAwal * (bunga / 100) * waktu;

//   // Menghitung saldo akhir
//   let saldoAkhir = saldoAwal + bungaTotal;

//   return saldoAkhir;
// }

// // Input
// let saldo = 100000;
// let bunga = 10;
// let waktu = 3;

// // Hitung Saldo Akhir
// let saldoAkhir = hitungSaldoAkhir(saldo, bunga, waktu);

// // Menampilkan Hasil Hitung Akhir
// console.log("Saldo Akhir : " + saldoAkhir);

// Opsi 2
// function hitungSaldoAkhir(saldoAwal, bunga, waktu) {
//   let saldoAkhir = saldoAwal;
//   let tahun = 0;

//   while (tahun < waktu) {
//     let bungaTahunIni = saldoAkhir * (bunga / 100);
//     saldoAkhir += bungaTahunIni;
//     tahun++;
//   }
//   return saldoAkhir;
// }

// let saldo = 100000;
// let bunga = 10 / 100;
// let waktu = 3;

// let saldoAkhir = hitungSaldoAkhir(saldo, bunga, waktu);
// for (let x = 0; x < waktu; x++) {
//   saldo = saldo + saldo * bunga;
//   console.log("Saldo : " + saldo);
// }

// Opsi 3 dengan tabel HTML CSS
function hitungBunga() {
  const saldoAwal = parseFloat(document.getElementById("saldo").value);
  const bunga = parseFloat(document.getElementById("bunga").value) / 100;
  const waktu = parseInt(document.getElementById("waktu").value);
  let hasil = "";
  let saldo = saldoAwal;

  for (let i = 1; i <= waktu; i++) {
    saldo += saldo * bunga;
    hasil += `Saldo Bulan ${i} = Rp.${saldo.toFixed(0)}\n`;
  }

  document.getElementById("hasil").value = hasil;
}

function resetForm() {
  document.getElementById("saldo").value = "";
  document.getElementById("bunga").value = "";
  document.getElementById("waktu").value = "";
  document.getElementById("hasil").value = "";
}
