// Ojek jadi json
// let mahasiswa = {
//   nama: "Fadhlu Ibnu 'Abbad",
//   nis: "310312079",
//   email: "fahluibnu@gmail.com",
// };
// console.log(JSON.stringify(mahasiswa));

// ajax
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//   if (xhr.readyState == 4 && xhr.status == 200) {
//     let mahasiswa = this.responseText;
//     console.log(mahasiswa);
//   }
// };
// xhr.open("GET", "coba.json", true);
// xhr.send();

// Jquery
$.getJSON("coba.json", function (data) {
  console.log(data);
});
