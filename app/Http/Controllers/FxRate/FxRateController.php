<?php

namespace App\Http\Controllers\Fxrate;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class FxRateController extends Controller
{

public function getFxRate(Request $request)
    {
	$baseURL = 'http://api.currencylayer.com/live';
		

			$client = new Client;
		$request = $client->request('GET', $baseURL ,
			[
				'query' => [

					'access_key' => '8f361b088f0c11f8d2821b6f69ae2d8d',
      				'currencies' => 'AUD,EUR,GBP,PLN' ,
					

				]
			]);

			$response = json_decode($request->getBody(), true);
		$data = $response;
		return response()->json($data,200);


	
	}
}
