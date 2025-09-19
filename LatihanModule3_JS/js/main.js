const form = document.getElementById("form-mahasiswa");
const tabelMahasiswa = document
  .getElementById("tabel-mahasiswa")
  .getElementsByTagName("tbody")[0];

form.addEventListener("submit", function (event) {
  event.preventDefault();

  const nama = document.getElementById("nama").value;
  const nim = document.getElementById("nim").value;
  const jenisKelamin = document.getElementById("jenis-kelamin").value;
  const agama = document.getElementById("agama").value;
  const status = document.getElementById("status").value;
  const jurusan = document.getElementById("jurusan").value;
  const komentar = document.getElementById("komentar").value;

  if (nama && nim && jenisKelamin && agama && status && jurusan && komentar) {
    const row = tabelMahasiswa.insertRow();
    const cell1 = row.insertCell(0);
    const cell2 = row.insertCell(1);
    const cell3 = row.insertCell(2);
    const cell4 = row.insertCell(3);
    const cell5 = row.insertCell(4);
    const cell6 = row.insertCell(5);
    const cell7 = row.insertCell(6);
    const cell8 = row.insertCell(7);

    cell1.textContent = tabelMahasiswa.rows.length; // No
    cell2.textContent = nama;
    cell3.textContent = nim;
    cell4.textContent = jenisKelamin;
    cell5.textContent = agama;
    cell6.textContent = status;
    cell7.textContent = jurusan;
    cell8.textContent = komentar;

    // Clear input fields after submitting
    form.reset();
  }
});
