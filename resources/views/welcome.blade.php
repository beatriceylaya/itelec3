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
                                </div><!--//section-block-->
                            </section><!--//doc-section-->
                            
                            <section id="code-section" class="doc-section">
                                <h2 class="section-title">Code</h2>
                                <div class="section-block">
                                    <p>
                                        <a href="http://prismjs.com/" target="_blank">PrismJS</a> is used as the syntax highlighter here. You can <a href="http://prismjs.com/download.html" target="_blank">build your own version</a> via their website should you need to.
                                    </p>
                                    <div class="callout-block callout-success">
                                        <div class="icon-holder">
                                            <i class="fa fa-thumbs-up"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Useful Tip:</h4>
                                            <p>You can use this online <a href="https://mothereff.in/html-entities" target="_blank">HTML entity encoder/decoder</a> to generate your code examples.</p>
                                        </div><!--//content-->
                                    </div>
                                </div><!--//section-block-->
                                <div id="php" class="section-block">
                                    <div class="code-block">
                                        <h6>PHP Code Example</h6>
                                        <pre><code class="language-php">&lt;?php 
                                            $txt = &quot;Hello world!&quot;; 
                                            $x = 5; 
                                            $y = 10.5; 

                                            echo $txt; 
                                            echo &quot;&lt;br&gt;&quot;; 
                                            echo $x; 
                                            echo &quot;&lt;br&gt;&quot;; 
                                            echo $y; 
                                            ?&gt;</code></pre>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                <div id="handlebars" class="section-block">
                                    <div class="code-block">
                                        <h6>Handlebars Code Example</h6>
                                        <pre><code class="language-handlebars">Handlebars.registerHelper('list', function(items, options) { 
                                          var out = &quot;&lt;ul&gt;&quot;; 
                                          
                                          for(var i=0, l=items.length; i&lt;l; i++) { 
                                            out = out + &quot;&lt;li&gt;&quot; + options.fn(items[i]) + &quot;&lt;/li&gt;&quot;; 
                                          } 
                                          
                                          return out + &quot;&lt;/ul&gt;&quot;; 
                                        });</code></pre>
                                    </div><!--//code-block-->
                                    <div class="code-block">
                                        <h6>Git Code Example</h6>
                                        <pre><code class="language-git">$ git add Documentation.txt</code></pre>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                            </section><!--//doc-section-->
                            <section id="tables-section" class="doc-section">
                                <h2 class="section-title">Tables</h2>
                                <div class="section-block">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.
                                    </p>
                                </div>
                                <div class="section-block">
                                    <h6>Basic Table</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->
                                    <h6>Bordered Table</h6>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->
                                    <h6>Striped Table</h6>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->
                                </div><!--//section-block-->
                            </section><!--//doc-section-->
                            <section id="buttons-section" class="doc-section">
                                <h2 class="section-title">Buttons</h2>
                                <div class="section-block">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et dapibus feugiat <a href="#">link example</a> aenean purus leo, faucibus at elit vel, aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet, imperdiet odio. Aenean sem erat, hendrerit  eu gravida id, dignissim ut ante. Nam consequat porttitor libero euismod congue. 
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6>Basic Buttons</h6>
                                            <ul class="list list-unstyled">
                                                <li><a href="#" class="btn btn-primary">Primary Button</a></li>
                                                <li><a href="#" class="btn btn-green">Green Button</a></li>
                                                <li><a href="#" class="btn btn-blue">Blue Button</a></li>
                                                <li><a href="#" class="btn btn-orange">Orange Button</a></li>
                                                <li><a href="#" class="btn btn-red">Red Button</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6>CTA Buttons</h6>
                                            <ul class="list list-unstyled">
                                                <li><a href="#" class="btn btn-primary btn-cta"><i class="fa fa-download"></i> Download Now</a></li>
                                                <li><a href="#" class="btn btn-green btn-cta"><i class="fa fa-code-fork"></i> Fork Now</a></li>
                                                <li><a href="#" class="btn btn-blue btn-cta"><i class="fa fa-play-circle"></i> Find Out Now</a></li>
                                                <li><a href="#" class="btn btn-orange btn-cta"><i class="fa fa-bug"></i> Report Bugs</a></li>
                                                <li><a href="#" class="btn btn-red btn-cta"><i class="fa fa-exclamation-circle"></i> Submit Issues</a></li>
                                            </ul>
                                        </div>
                                    </div><!--//row-->
                                </div><!--//section-block-->
                            </section><!--//doc-section-->
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
                                <li>
                                    <a class="scrollto" href="#code-section">Code</a>
                                    <ul class="nav doc-sub-menu">
                                        <li><a class="scrollto" href="#php">PHP</a></li>
                                        <li><a class="scrollto" href="#handlebars">Handlebars</a></li>
                                    </ul><!--//nav-->
                                </li>
                                <li><a class="scrollto" href="#tables-section">Tables</a></li>
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
