// const siswa [
//     {nama =  "Budi", sudahBayar: true},
//     {nama =  "Angel", sudahBayar: true},
//     {nama =  "Joko", sudahBayar: false},
//     {nama =  "Bowo", sudahBayar: false},
//     {nama =  "Mega", sudahBayar: false},

// ];
// let siswa = {};

// function statusUjian(siswa) {
//   siswa.foreach((s) => {
//     if (s.sudahBayar) {
//       console.log(` ${s.nama} Sudah Membayar`);
//     } else {
//       console.log(` ${s.nama} Belum Membayar`);
//     }
//   });
// }

// statusUjian(siswa);

// let namaSiswa = prompt("Nama Siswa : ");
// let statusBayar = prompt(
//   "Apakah siswa tersebut sudah membayar uang sekolah? (ya/tidak) "
// );

// if (statusBayar.toUpperCase() === "Ya") {
//   console.log(namaSiswa + " Sudah Membayar");
// } else {
//   statusBayar.toLowerCase() === "Tidak";
//   console.log(namaSiswa + " Belum Membayar");
// }

var input = prompt("Apakah Sudah Membayar? (Ya/Tidak)");
if (input == "Ya") {
  console.log("Boleh Ikut Ujian");
} else {
  console.log("KELUAR LO SANA !!!!");
}
