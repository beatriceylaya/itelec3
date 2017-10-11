<?php

use App\Supplier;
use App\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/', function() {

	$server = new nusoap_server();
    $server->soap_defencoding = 'utf-8';
	$server->encode_utf8 = false;
	$server->decode_utf8 = false;
	$server->configureWSDL('TestService',url('/'),url('/'));
    	

	$server->register(
            // method name:
            'HelloWorld',
            // parameter list:
            array('name'=>'xsd:string'),
            // return value(s):
            array('return'=>'xsd:string'),
            // namespace:
            url('/'),
            // soapaction: (use default)
            false,
            // style: rpc or document
            'rpc',
            // use: encoded or literal
            'encoded',
            // description: documentation for the method
            'Simple Hello World Method'
    );
 
	//Create a complex type
	$server->wsdl->addComplexType('MyComplexType','complexType','struct','all','',
        array( 'contact' => array('name' => 'contact','type' => 'xsd:string'),
               'email' => array('name' => 'email','type' => 'xsd:string')));
 
	//Register our method using the complex type
	$server->register(
		    // method name:
		    'HelloComplexWorld',
		    // parameter list:
		    array(),
		    // return value(s):
		    array('return'=>'tns:MyComplexType'),
		    // namespace:
		    url('/'),
		    // soapaction: (use default)
		    false,
		    // style: rpc or document
		    'rpc',
		    // use: encoded or literal
		    'encoded',
		    //description sa imohang function
		    'Complex Hello World Method');

	$server->register(
			'getAccount',
			array("id" => "xsd:string"),
			array("result" => "xsd:string"),
			url('/')
	);



	$server->register(
			'getAccount',
			array("id" => "xsd:string"),
			array("result" => "xsd:string"),
			url('/')
	);		


	$server->register(
		    // method name:
		    'getAllSuppliers',
		    // parameter list:
		    array('_token' => 'xsd:string'),
		    // return value(s):
		    array('result'=>'xsd:string'),
		    // namespace:
		    url('/'),
		    // soapaction: (use default)
		    false,
		    // style: rpc or document
		    'rpc',
		    // use: encoded or literal
		    'encoded',
		    'Get all Suppliers'
    );

	$server->register(
		    // method name:
		    'getAllProducts',
		    // parameter list:
		    array('_token' => 'xsd:string'),
		    // return value(s):
		    array('result'=>'xsd:string'),
		    // namespace:
		    url('/'),
		    // soapaction: (use default)
		    false,
		    // style: rpc or document
		    'rpc',
		    // use: encoded or literal
		    'encoded',
		    'Get all Suppliers'
    );

	function getAccount($id)
	{
		$xml = new SimpleXMLElement('<xml/>');

		for ($i = 1; $i <= 8; ++$i) 
		{
	    $track = $xml->addChild('track');
	    $track->addChild('path', "song$i.mp3");
	    $track->addChild('title', "Track $i - Track Title");
		}

	Header('Content-type: text/xml');
	return $xml->asXML();
	}
	 
	//Our complex method
	function HelloComplexWorld()
	{
	    //return $mycomplextype;
	    $result = array();
	    $result[] = array( 'contact' => 'Manoj', 'email' => 'manoj@gmail.com');
	    $result[] = array( 'contact' => 'munna', 'email' => 'munna@gmail.com');
	 
	    return $result;
	}

	function getAllSuppliers(){

		$xml = new SimpleXMLElement('<xml/>');
		$suppliers = Supplier::all();
		foreach($suppliers as $supplier)
		{
			$track = $xml->addChild('supplier');
			$track->addChild('id',$supplier->id);
			$track->addChild('supplier_name',$supplier->supplier_name);
		}
 		Header('Content-type: text/xml');
		return $xml->asXML();
 	}

 	function getAllProducts(){
		$xml = new SimpleXMLElement('<xml/>');
		$products = Product::all();
		foreach($products as $product)
		{
			$track = $xml->addChild('product');
			$track->addChild('id',$product->id);
			$track->addChild('supplier_name',$product->prod_name);
		}
 		Header('Content-type: text/xml');
		return $xml->asXML();
 	}


	    $rawPostData = file_get_contents("php://input");
	    return \Response::make($server->service($rawPostData), 200, array('Content-Type' => 'text/xml; charset=ISO-8859-1'));
 	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
