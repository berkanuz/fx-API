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

	console.log(res.request);
	console.log(res.data);
}

makeRequest();



/*
axios.get('http://api.currencylayer.com/live').then(resp => {

    console.log(resp.data);
});
*/






