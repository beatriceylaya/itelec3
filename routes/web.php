<?php

use App\Supplier;
use App\Product;
use App\User;
use App\ProductCategory;
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

	$server->register(
		    // method name:
		    'getAllProductCategory',
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

	function getAllSuppliers($_token){

		$exists = User::where("api_token",$_token)->get();
		if(count($exists) > 0)
		{
		$xml = new SimpleXMLElement('<xml/>');
		$suppliers = Supplier::where('status','active')->get();
		$xml->addChild('message','Successfully retrieved all suppliers');
		$xml->addChild('status','Successful');
		foreach($suppliers as $supplier)
		{
			$track = $xml->addChild('supplier');
			$track->addChild('id',$supplier->id);
			$track->addChild('supplier_name',$supplier->supplier_name);
			$track->addChild('supplier_email',$supplier->email);
			$track->addChild('contact_person', $supplier->contact_person);
			$track->addChild('address', $supplier->address);
		}
 		Header('Content-type: text/xml');
		return $xml->asXML();
		}
		else {
		$xml = new SimpleXMLElement('<xml/>');
		$xml->addChild("supplier",null);
		$xml->addChild('message','Invalid api token');
		$xml->addChild('status','Error');
		Header('Content-type: text/xml');
		return $xml->asXML();	
		}
 	}

 	function getAllProducts($_token){

 		$exists = User::where("api_token",$_token)->get();
		if(count($exists) > 0)
		{
		$xml = new SimpleXMLElement('<xml/>');
		$xml->addChild('message','Successfully retrieved all products');
		$xml->addChild('status','Successful');
		$products = Product::all();
		foreach($products as $product)
		{
			$track = $xml->addChild('product');
			$track->addChild('id',$product->id);
			$track->addChild('product_name',$product->prod_name);
			$track->addChild('product_description', $product->prod_desc);
			$track->addChild('unit_price',$product->unit_price);
			$track->addChild('reorder_qty',$product->reorder_qty);
			$productCat = $product->category;
			$track2 = $track->addChild('category');
			$track2->addChild('id',$productCat->id);
			$track2->addChild('category_name',$productCat->category_name);
		}
 		Header('Content-type: text/xml');
		return $xml->asXML();
		}
		else {
		$xml = new SimpleXMLElement('<xml/>');
		$xml->addChild("supplier",null);
		$xml->addChild('message','Invalid api token');
		$xml->addChild('status','Error');
		Header('Content-type: text/xml');
		return $xml->asXML();	
		}

 	}

        function getAllProductCategory($_token) 
        {
        $exists = User::where("api_token",$_token)->get();
        if(count($exists) > 0)
        {
        $xml = new SimpleXMLElement('<xml/>');
		$xml->addChild('message','Successfully retrieved all product categories');
		$xml->addChild('status','Successful');
		$prodCats = ProductCategory::all(); 
        foreach($prodCats  as $prodCat)
        {
                $track = $xml->addChild('category');
                $track->addChild('id',$prodCat->id);
                $track->addChild('category_name',$prodCat->category_name);

        }
        Header('Content-type: text/xml');
		return $xml->asXML();
        }
        else
        {
        Header('Content-type: text/xml');
		return $xml->asXML();
		}
        }
        
	    $rawPostData = file_get_contents("php://input");
	    return \Response::make($server->service($rawPostData), 200, array('Content-Type' => 'text/xml; charset=ISO-8859-1'));
 	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
