// object Jadi JSON
// let mahasiswa = {
// 	nama: "Muhamad Luffi",
// 	nim: "160511052",
// 	jurusan: "Teknik Informatika"
// }

// console.log(JSON.stringify(mahasiswa));



// JSON menggunakan vanila javascript(manual)
// JSON ke Object

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function(){
// 	if (xhr.readyState == 4 && xhr.status == 200){
// 		let mahasiswa = JSON.parse(this.responseText);
// 		console.log(mahasiswa);
// 	}
// }
// xhr.open('GET', 'coba.json', true);
// xhr.send();



// JSON menggunakan jquery
$.getJSON('coba.json', function(data){
	console.log(data);
})