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

/*function login() {
	 let email = document.getElementById('email').value
	 let password = document.getElementById('password').value
	//console.log();
	axios({
	  method: 'post',
	  url: 'http://localhost/laravel/fx-API/public/api/login',
	  data: {
	    email: email,
	    password: password
	  }
	})
	.then(function (response) {
	    console.log(response.data.token);
	    let token= response.data.token;
	    //Session::put('api-token',$token);
	    
	    
	    /*var username ='<%= Session["token"] %>';
	        console.log(username);*/
	     /*   sessionStorage.Token=token;
	        console.log(sessionStorage.getItem('Token'));
	        var test = "<?php echo Session::put('api-token', "+token+"); ?>";
	        window.location.replace("http://localhost/laravel/fx-API/public/");
	    
	});
} 



*/







