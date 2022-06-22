const BASE_URL = 'http://localhost/nidaweb/';

const hitungBtn = document.getElementById('count');
const inputJenisKelamin = document.getElementById('jenis_kelamin');
const jenis_kelamin = document.getElementById('jenis_kelamin');
const umur = document.getElementById('umur');
const tinggi = document.getElementById('tinggi');
const berat = document.getElementById('berat');
const formEl = document.getElementById('form');
const tingkatAktivitas = document.getElementsByName('tingkatAktivitas');
const resultEl = document.getElementById('result');

formEl.addEventListener('submit', (e) => {
	resultEl.innerHTML = ``;
	e.preventDefault();
	let bmr = 0;
	let kelaminValue = jenis_kelamin.value; 
	let umurValue = umur.value;
	let tinggiValue = tinggi.value;
	let beratValue = berat.value;
	let tingkatAktivitasValue = 0;

	for (let i = 0; i < tingkatAktivitas.length; i++) {
		if(tingkatAktivitas[i].checked) {
			tingkatAktivitasValue = tingkatAktivitas[i].value;
		}
	}

	if(kelaminValue == 'laki_laki') {
		bmr = 66 + (13.7 * beratValue) + (5 * tinggiValue) - (6.8 * umurValue);
	}else if(kelaminValue == 'perempuan'){
		bmr = 655 + (9.6 * beratValue) + (1.8 * tinggiValue) - (4.7 * umurValue);
	}
	
	const result = bmr * parseFloat(tingkatAktivitasValue);

	const resultChild = document.createElement('ul');
	resultChild.className = 'list-group list-group-flush mb-3 border border-primary';

	if( kelaminValue == 0|| umurValue == 0 || tinggiValue == 0 || beratValue == 0 || tingkatAktivitasValue == 0) {
		resultChild.innerHTML = `
			<h1 class="text-center">Opps!</h1>
			<h6 class="text-center mt-2 bg-danger text-white">Sepertinya ada input yang bernilai <span class="text-warnig">( 0 ) atau ada aktifitas yang belum di checklist. </span> mohon isi dengan lengkap</h6>
		`;
	}else {
		resultChild.innerHTML = `
		<h6 class="text-center mt-2">Hasil perhitungan kalori yang dibutuhkan</h6>
	 	<li class="list-group-item">Jenis Kelamin 	: ${kelaminValue}</li>
	 	<li class="list-group-item">Umur 			: ${umurValue}</li>
	 	<li class="list-group-item">tinggi 			: ${tinggiValue}</li>
	 	<li class="list-group-item">berat 			: ${beratValue}</li>
	 	<li class="list-group-item">kebutuhan Kalori 			: ${result}</li>
	`;
	}

	resultEl.appendChild(resultChild);

})
