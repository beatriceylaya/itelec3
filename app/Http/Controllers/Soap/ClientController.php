<?php

namespace App\Http\Controllers\Soap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HelloWorld;
use \SoapClient;
use App\User;
use \stdClass;
use \SoapServer;
use WSDL\XML\Styles\DocumentLiteralWrapped;
use WSDL\XML\Styles\RpcEncoded;
use nusoap_client;

class ClientController extends Controller
{
    public function __construct() {

    }
    public function client() {
    	
    	$client = new nusoap_client("http://localhost/itelec3/public/index.php?wsdl", true);
        $client->encode_utf8 = false;
        $client->decode_utf8 = false;           
        $client->soap_defencoding = 'utf-8';
        $result = $client->call("getAccount", array("id" => '123'));

        $error = $client->getError();
        if($error)
        {
            return $error;
            
        }
        else
        {
        return $result;
        }
    }

    public function getSuppliers() {
		$client = new nusoap_client("http://localhost/itelec3/public/index.php?wsdl", true);
        $client->encode_utf8 = false;
        $client->decode_utf8 = false;           
        $client->soap_defencoding = 'utf-8';
        $result = $client->call("getAllSuppliers");

        $error = $client->getError();
        if($error)
        {
            return $error;
            
        }
        else
        {
        return $result;
        }
    }
    public function getProducts() {
		$client = new nusoap_client("http://localhost/itelec3/public/index.php?wsdl", true);
        $client->encode_utf8 = false;
        $client->decode_utf8 = false;           
        $client->soap_defencoding = 'utf-8';
        $result = $client->call("getAllProducts");

        $error = $client->getError();
        if($error)
        {
            return $error;
            
        }
        else
        {
        return $result;
        }
    }
}
