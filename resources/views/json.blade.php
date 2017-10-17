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
                                </div>
                            </section><!--//doc-section-->
                            <section id="installation-section" class="doc-section">
                                <h2 class="section-title">Features</h2>
                                <div id="step1"  class="section-block">
                                    <h3 class="block-title">Get all Products</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.
                                    </p>
                                    <div class="code-block">
                                        <h6>Example Request</h6>
                                        @if(Auth::check())
                                        <p><code>http://localhost:8000/api/products?api_token=<i>{{$userToken}}</i></code></p>
                                        @else
                                        <p><code>http://localhost:8000/api/products?api_token=<i>YOUR_API_KEY</i></code></p>
                                        @endif
                                    </div><!--//code-block-->
                                    
                                   <div class="code-block">
                                        <h6>Below is a sample product response</h6>
                                        <pre><code class="language-php">
[
    {
        "id": 1,
        "pc_id": 2,
        "prod_name": "Nestle Fresh Milk",
        "prod_desc": "1 L",
        "unit_price": 83.5,
        "reorder_qty": 4,
        "status": "active",
        "created_at": "2017-10-08 09:27:20",
        "updated_at": "2017-10-08 09:27:20"
    }
]
                                        </code></pre>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                <div id="step2"  class="section-block">
                                    <h3 class="block-title">Get Suppliers</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="code-block">
                                                <h6>Example Request</h6>
                                                @if(Auth::check())
                                                <p><code>http://localhost:8000/api/products?api_token=<i>{{$userToken}}</i></code></p>
                                                @else
                                                <p><code>http://localhost:8000/api/products?api_token=<i>YOUR_API_KEY</i></code></p>
                                                @endif
                                            </div><!--//code-block-->
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="section-block">
                                    <div class="code-block">
                                        <h6>Below is a sample product response</h6>
                                        <pre><code class="language-php">
[
    {
        "id": 1,
        "supplier_name": "Nestlé Philippines",
        "supplier_email": "nestle@support.com",
        "contact_person": "Cedrik Beltran",
        "address": "Naga, Cebu City",
        "status": "active",
        "created_at": "2017-10-08 09:07:46",
        "updated_at": "2017-10-08 09:07:46"
    }
]
                                        </code></pre>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                        </div>
                                    </div><!--//row-->
                                </div><!--//section-block-->
                                <div id="step3"  class="section-block">
                                    <h3 class="block-title">Get Supplier Products</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.
                                    </p>
                                <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="code-block">
                                                <h6>Example Request</h6>
                                                @if(Auth::check())
                                                <p><code>http://localhost:8000/api/products?api_token=<i>{{$userToken}}</i></code></p>
                                                @else
                                                <p><code>http://localhost:8000/api/products?api_token=<i>YOUR_API_KEY</i></code></p>
                                                @endif
                                            </div><!--//code-block-->
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="section-block">
                                    <div class="code-block">
                                        <h6>Below is a sample product response</h6>
                                        <pre><code class="language-php">
[
    {
        "id": 1,
        "supplier_name": "Nestlé Philippines",
        "supplier_email": "nestle@support.com",
        "contact_person": "Cedrik Beltran",
        "address": "Naga, Cebu City",
        "status": "active",
        "created_at": "2017-10-08 09:07:46",
        "updated_at": "2017-10-08 09:07:46"
    }
]
                                        </code></pre>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                        </div>
                                    </div>
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
    