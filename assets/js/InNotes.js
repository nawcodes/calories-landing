getCalories();


document.querySelectorAll('input#check-input').forEach(item => {
	item.addEventListener('change', function (e) {

		if(this.checked) {
			let data = { 
				'id' : e.target.getAttribute('is-id'),
				'food' : e.target.getAttribute('is-food'),
				'kalori' :  e.target.getAttribute('is-kalori')
			};

			saveCalories(data);

			countCalories();
			
		} else {
			removeCalories(e.target.getAttribute('is-id'));

			countCalories();
		}
	})
});


function saveCalories(data) {
	const getData = getCalories();
	localStorage.setItem('calories' , JSON.stringify(
		[...getData, data]
	));
}

function getCalories() {
	const data = JSON.parse(localStorage.getItem('calories'));
	return data === null ? [] : data;
}

function removeCalories(id) {
	const getData = getCalories();
	const newData = getData.filter(item => item.id !== id);
	localStorage.setItem('calories' , JSON.stringify(newData));
}


function countCalories() {
	const getData = getCalories();
	let total = 0;
	getData.forEach(item => {
		total += parseInt(item.kalori);
	}
	);
	document.querySelector('#total-calories').innerHTML = total;
}


















