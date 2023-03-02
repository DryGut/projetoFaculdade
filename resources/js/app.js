import './bootstrap';
import '../sass/app.scss';

const htmlTag = {
	searchInput: document.getElementById('estado'),
	searchBtn: document.getElementById('btn')
};

const getFaculdades = async()=>{
	let url = `http://localhost:8000/instituicoes`;
	let response = await fetch(url);
	if(response.status === 200){
		let data = await response.json();
		return data;
	}
}

const createTable = (field, field1, field2)=>{
	let table = document.getElementById('tabela');
	let row = table.insertRow(1);
	row.setAttribute('scope', 'row');
	let cell = row.insertCell(0);
	let cell1 = row.insertCell(1);
	let cell2 = row.insertCell(2);
	cell.innerHTML = field;
	cell1.innerHTML = field1;
	cell2.innerHTML = field2;
}

const showFaculdades = async(field)=>{
	const data = await getFaculdades();
	for(let value in data){
		if(field === data[value].estado){
			createTable(data[value].nome, data[value].estado, data[value].site);
		}
	}
}

htmlTag.searchBtn.addEventListener('click', (event=>{
	event.preventDefault();
	document.getElementById('tabela').style = 'block';
	showFaculdades(htmlTag.searchInput.value);
}));