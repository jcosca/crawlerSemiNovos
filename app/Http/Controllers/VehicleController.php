<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class VehicleController extends Controller
{
	public function search(Request $request, $type)
    {
		// return json_encode(['value']);

    	$tipo_veiculo = $type;

    	$marca = $request->marca;
    	$modelo = $request->modelo;
    	$ano_de = $request->ano_de;
    	$ano_ate = $request->ano_ate;
    	$preco_de = $request->preco_de;
    	$preco_ate = $request->preco_ate;
    	$particular = $request->particular;
    	$revenda = $request->revenda;
    	$novo = $request->novo;
    	$semi_novo = $request->semi_novo;

    	$url = 'https://seminovos.com.br/'.$tipo_veiculo;

    	if($marca) $url .= '/'.$marca;
    	if($modelo) $url .= '/'.$modelo;
    	if($ano_de || $ano_ate) $url .= '/ano-'.$ano_de.'-'.$ano_ate;
    	if($preco_de || $preco_ate) $url .= '/preco-'.$preco_de.'-'.$preco_ate;
    	if($particular) $url .= '/'.$particular;
    	if($revenda) $url .= '/'.$revenda;
    	if($novo) $url .= '/'.$novo;
    	if($semi_novo) $url .= '/'.$semi_novo;


    	$client = new Client();

    	$crawler = $client->request('GET', $url);
    	$cars = [];
    	$crawler->filter('[itemprop=itemOffered]')->each(function($node) use (&$cars)
    	{
			$car = new \stdClass();
			$node->filter('[itemprop=itemOffered] [itemprop]')->each(function($prop) use ($car){
				$car->{$prop->extract(['itemprop'])[0]} = ($prop->extract(['content'])[0])?:($prop->extract(['src'])[0])?:$prop->text();
			});
			array_push($cars, $car);
    	});

    	return json_encode($cars);
    }
}