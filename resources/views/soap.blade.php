@extends('layouts.master')
@section('content')
        <div class="flex-center position-ref full-height pull-right">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div>

            <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Documentation</h1>
                    <div class="meta"><i class="fa fa-clock-o"></i>Updated: October 2017</div>
                </div><!--//doc-header-->
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                            <section id="download-section" class="doc-section">
                                <h2 class="section-title">Getting Started</h2>
                                <div class="section-block">
                                    <p>This API comprises of a supermarket functionality. It is JSON and XML based.
                                    </p>
                                    @if(Auth::check())
                                    Your API KEY: 
                                    <h1> {{$userToken}}</h1>
                                    @endif
                                    <a href="{{route('login')}}" class="btn btn-blue">GET API KEY</a>
                                    <br><br>
                                    <p>Click the link to view the documented wsdl file.</p>
                                    <a href="http://localhost/itelec3/public/">http://localhost/itelec3/public/</a>
                                    
                                </div>
                            </section><!--//doc-section-->
                            <section id="installation-section" class="doc-section">
                                <h2 class="section-title">Features</h2>
                                <div id="step1"  class="section-block">
                                    <h3 class="block-title">Get all Products</h3>
                                    <p>Get all products using soap request using php nusoap client`.
                                    </p>
                                    <div class="code-block">
                                        <h6>Example Request</h6><p><code>
                                        $client = new nusoap_client("http://localhost/itelec3/public/index.php?wsdl", true);<br>
                                        $client->encode_utf8 = false;<br>
                                        $client->decode_utf8 = false;<br>       
                                        $client->soap_defencoding = 'utf-8';<br>
                                    $result = $client->call("getAllProducts",array('_token' =>      api_key));
                                        </code></p>
                                    </div><!--//code-block-->
                                    
                                   <div class="code-block">
                                        <h6>Below is a sample product response</h6>
                                        <pre><code class="language-php">
                                        &lt?xml version="1.0"?>
&ltxml>
    &ltmessage>Successfully retrieved all products</message>
    &ltstatus>Successful</status>
    &ltproduct>
        &ltid>1</id>
        &ltproduct_name>Nestle Fresh Milk</product_name>
        &ltproduct_description>1 L</product_description>
        &ltunit_price>83.5</unit_price>
        &ltreorder_qty>4</reorder_qty>
        &ltcategory>
            &ltid>2</id>
            &ltcategory_name>Dairy</category_name>
        &lt/category>
    &lt/product>
    &ltproduct>
        &ltid>2</id>
        &ltproduct_name>Summit Mineral Water</product_name>
        &ltproduct_description>1 L</product_description>
        &ltunit_price>21.5</unit_price>
        &ltreorder_qty>8</reorder_qty>
        &ltcategory>
            &ltid>1</id>
            &ltcategory_name>Beverages</category_name>
        &lt/category>
    &lt/product>
&lt/xml>

                                        </code></pre>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                <div id="step2"  class="section-block">
                                    <h3 class="block-title">Get Suppliers</h3>
                                    <p>Get all suppliers using a soap request.
                                    </p>
                                    <div class="code-block">
                                        <h6>Example Request</h6>
                                        <p><code>
                                        $client = new nusoap_client("http://localhost/itelec3/public/index.php?wsdl", true);<br>
                                        $client->encode_utf8 = false;<br>
                                        $client->decode_utf8 = false;<br>
                                        $client->soap_defencoding = 'utf-8';<br>
                                        $result = $client->call("getAllSuppliers",array('_token' => api_key));
                                        </code></p>
                                            </div><!--//code-block-->
                                            <div class="code-block">
                                        <h6>Below is a sample product response</h6>
                                        <pre><code class="language-php">
&lt?xml version="1.0"?>
&ltxml>
    &ltmessage>Successfully retrieved all suppliers</message>
    &ltstatus>Successful</status>
    &ltsupplier>
        &ltid>1</id>
        &ltsupplier_name>Nestl&#xE9; Philippines</supplier_name>
        &ltsupplier_email/>
        &ltcontact_person>Cedrik Beltran</contact_person>
        &ltaddress>Naga, Cebu City</address>
    &lt/supplier>
    &ltsupplier>
        &ltid>2</id>
        &ltsupplier_name>Magnolia Philippines</supplier_name>
        &ltsupplier_email/>
        &ltcontact_person>Issa Fernandez</contact_person>
        &ltaddress>Talamban, Cebu City</address>
    &lt/supplier>
    &ltsupplier>
        &ltid>3</id>
        &ltsupplier_name>Summit Water</supplier_name>
        &ltsupplier_email/>
        &ltcontact_person>Meredith Grey</contact_person>
        &ltaddress>Mandaue, Cebu City</address>
    &lt/supplier>
&lt/xml>
                                        </code></pre>
                                </div><!--//section-block-->
                                </div>
                                <div id="step3"  class="section-block">
                                    <h3 class="block-title">Get Supplier Products</h3>
                                    <p>Get all products from a supplier id using soap request.
                                    </p>
                                <div class="code-block">
                                        <h6>Example Request</h6>
                                        <p><code>
                                        $client = new nusoap_client("http://localhost/itelec3/public/index.php?wsdl", true);<br>
                                        $client->encode_utf8 = false;<br>
                                        $client->decode_utf8 = false;<br>
                                        $client->soap_defencoding = 'utf-8';<br>
                                        $result = $client->call("getProductFromSupplier",array('_token' => api_key
                                        ,
                                        'supplier' => supplier_id));
                                        
                                        </code></p>
                                            </div><!--//code-block-->
                                            <div class="code-block">
                                        <h6>Below is a sample product response</h6>
                                        <pre><code class="language-php">
&lt?xml version="1.0"?>
&ltxml>
    &ltmessage>Successfully retrieved all product given the supplier id</message>
    &ltstatus>Successful</status>
    &ltsupplier>
        &ltid>1</id>
        &ltsupplier_name>Nestl&#xE9; Philippines</supplier_name>
    &lt/supplier>
    &ltproduct>
        &ltid>1</id>
        &ltproduct_name>Nestle Fresh Milk</product_name>
        &ltproduct_description>1 L</product_description>
        &ltunit_price>83.5</unit_price>
        &ltreorder_qty>4</reorder_qty>
    &lt/product>
&lt/xml>
                                        </code></pre>
                                </div><!--//section-block-->
                                </div><!--//section-block-->
                            </section><!--//doc-section-->
                            



                            <!--//doc-section-->
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    <div class="doc-sidebar hidden-xs">
                        <nav id="doc-nav">
                            <ul id="doc-menu" class="nav doc-menu" data-spy="affix">
                                <li><a class="scrollto" href="#download-section">Getting Started</a></li>
                                <li>
                                    <a class="scrollto" href="#installation-section">Features</a>
                                    <ul class="nav doc-sub-menu">
                                        <li><a class="scrollto" href="#step1">Products</a></li>
                                        <li><a class="scrollto" href="#step2">Suppliers</a></li>
                                        <li><a class="scrollto" href="#step3">Suppliers Products</a></li>
                                    </ul><!--//nav-->
                                </li>
        
                            </ul><!--//doc-menu-->
                        </nav>
                    </div><!--//doc-sidebar-->
                </div><!--//doc-body-->              
            </div><!--//container-->
        </div><!--//doc-wrapper-->

@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('assets/plugins/jquery-1.12.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/prism/prism.js')}}"></script>    
<script type="text/javascript" src="{{asset('assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js')}}"></script>                                                                
<script type="text/javascript" src="{{asset('assets/plugins/jquery-match-height/jquery.matchHeight-min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
@endsection
