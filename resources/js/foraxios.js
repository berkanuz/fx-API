//require('./bootstrap');
//import axios from 'axios'


const axios = require('axios');

async function makeRequest() {
	const param = {
		access_key:'8f361b088f0c11f8d2821b6f69ae2d8d',
		currencies:'AUD,EUR,GBP,PLN'
	};

	let res = await axios.get('http://api.currencylayer.com/live', {
	  params: param
	});
	let source = res.data.source

  var HTML = "";

	for (const [key, value] of Object.entries(res.data.quotes)) {
	
	  //console.log(source, key.replace(source, ''), value);
	  HTML += "<tr><td>"+source+"</td><td>"+ key.replace(source, '')+"</th><td>"+value+"</td></tr>";

  }
  
  try{
	  const tablo = document.getElementById('table-body');
	  tablo.innerHTML = HTML;
  }
  catch{

  }
}

makeRequest();








