// Logika 1
// function totalbayar() {
//   var hargaTiket = parseFloat(document.getElementById("harga_tiket").value);
//   var jumlahTiket = parseFloat(document.getElementById("jumlah_tiket").value);
//   var isMember = document.getElementById("member").checked;

//   if (isNaN(hargaTiket) || isNaN(jumlahTiket)) {
//     alert("Masukkan Jumlah Tiket");
//     return;
//   }

//   var subTotal = hargaTiket * jumlahTiket;
//   let diskon = 0;

//   if (isMember) {
//     diskon = subTotal * 0.1; //Diskon 10%
//   }

//   var bayar = subTotal - diskon;

//   document.getElementById("sub_total").value = subTotal.toFixed(2);
//   document.getElementById("diskon").value = diskon.toFixed(2);
//   document.getElementById("total_bayar").value = bayar.toFixed(2);
// }

// function ulang() {
//   document.getElementById("nama").value = "";
//   document.getElementById("tujuan").value = "Jakarta, Solo, Surabaya";
//   document.getElementById("kelas").value = "Eksekutif, Bisnis, Ekonomi";
//   document.getElementById("jumlah_tiket").value = "";
//   document.getElementById("harga_tiket").value = "";
//   document.getElementById("sub_total").value = "";
//   document.getElementById("diskon").value = "";
//   document.getElementById("total_bayar").value = "";
//   document.getElementById("member").checked = false;
// }

function totalbayar() {
  //   var nama = document.getElementById("nama").value;
  var tujuan = document.getElementById("tujuan").value;
  var kelas = document.getElementById("kelas").value;
  var jumlahTiket =
    parseInt(document.getElementById("jumlah_tiket").value) || 0;

  var harga_tiket = 0.0;
  var sub_total = 0.0;
  var diskon = 0.0;
  var total = 0.0;

  if (tujuan == "Jakarta" && kelas == "Eksekutif") {
    harga_tiket = 700000;
  } else if (tujuan == "Jakarta" && kelas == "Bisnis") {
    harga_tiket = 400000;
  } else if (tujuan == "Jakarta" && kelas == "Ekonomi") {
    harga_tiket = 100000;
  } else if (tujuan == "Solo" && kelas == "Eksekutif") {
    harga_tiket = 800000;
  } else if (tujuan == "Solo" && kelas == "Bisnis") {
    harga_tiket = 500000;
  } else if (tujuan == "Solo" && kelas == "Ekonomi") {
    harga_tiket = 200000;
  } else if (tujuan == "Surabaya" && kelas == "Eksekutif") {
    harga_tiket = 900000;
  } else if (tujuan == "Surabaya" && kelas == "Bisnis") {
    harga_tiket = 600000;
  } else if (tujuan == "Surabaya" && kelas == "Ekonomi") {
    harga_tiket = 300000;
  } else {
    harga_tiket = 200000;
  }

  sub_total = jumlahTiket * harga_tiket;

  if (document.getElementById("member").checked == true) {
    diskon = 0.1 * sub_total;
  } else {
    diskon = 0.0;
  }

  total = sub_total - diskon;

  document.getElementById("harga_tiket").value = harga_tiket;
  document.getElementById("sub_total").value = sub_total;
  document.getElementById("diskon").value = diskon;
  document.getElementById("total_bayar").value = total;
}
