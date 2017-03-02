<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sk" lang="sk">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        @hasSection('metatitle')
            @yield('metatitle')
        @else
            <title>{{ $general->meta_title }}</title>
            <meta property="og:title" content="{{ $general->meta_title }}" />
        @endif

        @hasSection('metadesc')
            @yield('metadesc')
        @else
            <meta name="description" content="{{ $general->meta_desc }}" >
            <meta property="og:description" content="{{ $general->meta_desc }}" />
        @endif

        @hasSection('metakeys')
            @yield('metakeys')
        @else
            <meta name="keywords" content="{{ $general->meta_keywords }}">
        @endif        


        <meta name="rights" content="{{ $general->address_name }}">
        <meta name="og:image" content="{{ asset('images/share.png') }}">
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ Request::fullUrl() }}" />

        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('favicon.ico') }}" />

        <link rel="profile" href="http://microformats.org/profile/hcard" />

        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('images/favicons/icoapple-touch-icon-57x57.png') }}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('images/favicons/apple-touch-icon-114x114.png') }}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('images/favicons/apple-touch-icon-72x72.png') }}" />
        <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('images/favicons/apple-touch-icon-144x144.png') }}" />
        <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('images/favicons/apple-touch-icon-60x60.png') }}" />
        <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('images/favicons/apple-touch-icon-120x120.png') }}" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('images/favicons/apple-touch-icon-76x76.png') }}" />
        <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('images/favicons/apple-touch-icon-152x152.png') }}" />
        <link rel="icon" type="image/png" href="{{ URL::asset('images/favicons/favicon-196x196.png') }}" sizes="196x196" />
        <link rel="icon" type="image/png" href="{{ URL::asset('images/favicons/favicon-96x96.png') }}" sizes="96x96" />
        <link rel="icon" type="image/png" href="{{ URL::asset('images/favicons/favicon-32x32.png') }}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ URL::asset('images/favicons/favicon-16x16.png') }}" sizes="16x16" />
        <link rel="icon" type="image/png" href="{{ URL::asset('images/favicons/favicon-128.png') }}" sizes="128x128" />
        <meta name="application-name" content="The AV Advisory Group"/>
        <meta name="msapplication-TileColor" content="#333" />
        <meta name="msapplication-TileImage" content="{{ URL::asset('images/favicons/mstile-144x144.png') }}" />
        <meta name="msapplication-square70x70logo" content="{{ URL::asset('images/favicons/mstile-70x70.png') }}" />
        <meta name="msapplication-square150x150logo" content="{{ URL::asset('images/favicons/mstile-150x150.png') }}" />
        <meta name="msapplication-wide310x150logo" content="{{ URL::asset('images/favicons/mstile-310x150.png') }}" />
        <meta name="msapplication-square310x310logo" content="{{ URL::asset('images/favicons/mstile-310x310.png') }}" />

    </head>

    @hasSection('identifier')
        @yield('identifier')
    @else
    <body>
    @endif
        <div class="wrapper">
            <header>
                <nav class="navbar top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="logo" href="{{ url('/') }}">{{ $general->address_name }}</a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li >
                                    <a {{{ (Request::is('o-nas*') ? 'class=active' : '') }}} href="{{ url('o-nas') }}" class="" id="">O nás</a>
                                </li>
                                <li>
                                    <a {{{ (Request::is('references*') ? 'class=active' : '') }}} href="{{ url('references') }}" class="references" id="referencesLink">Prihlásenie</a>
                                </li>
                                <li>
                                    <a {{{ (Request::is('about-us*') ? 'class=active' : '') }}} href="{{ url('about-us') }}" class="about" id="aboutLink">Košík</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <nav class="navbar bottom">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li >
                                    <a {{{ (Request::is('services*') ? 'class=active' : '') }}} href="{{ url('services') }}" class="services" id="servicesLink">Všetky produkty</a>
                                </li>
                                <li>
                                    <a {{{ (Request::is('references*') ? 'class=active' : '') }}} href="{{ url('references') }}" class="references" id="referencesLink">Predsieň</a>
                                </li>
                                <li>
                                    <a {{{ (Request::is('about-us*') ? 'class=active' : '') }}} href="{{ url('about-us') }}" class="about" id="aboutLink">Obývačka a spálňa</a>
                                </li>
                                <li>
                                    <a {{{ (Request::is('contact-us*') ? 'class=active' : '') }}} href="{{ url('contact-us') }}" class="contact" id="contactLink">Kuchynka</a>
                                </li>
                                <li>
                                    <a {{{ (Request::is('contact-us*') ? 'class=active' : '') }}} href="{{ url('contact-us') }}" class="contact" id="contactLink">Detská izbička</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <section class="topSection">       
                <div class="flex-center position-ref full-height">

                   @yield('content')

                </div>

            </section>
            <footer>
                <div class="upper sectionFullWidth" id="contact">
                    <div class="inner">
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                                    <div class="logo ">
                                        <a class="logo" href="{{ url('/') }}"></a>
                                    </div>
                                    <div class="tagline">
                                        Hand-made redizajnovaný nábytok a doplnky
                                    </div>
                                    <div class="address">
                                        <ul class="contactLinks">
                                            <li>
                                                <a href="mailto:info@sovurkovo.sk" class="btn white">
                                                    <span itemprop="email">
                                                        info@sovurkovo.sk
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.facebook.com" class="btn white facebook">
                                                    Sovurkovo na Facebooku
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="newsletter">
                                        <h3>Prihláste sa na odber nášho newslettra</h3>
                                        <form class="form">
                                            <div class="formElement">
                                                <input type="text" />
                                                <a class="btn white">Potvrdiť</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower">
                    <div class="container-fluid">
                        <div class="row-fluid">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="row-fluid">
                                    <div class="footerMenu col-sm-4 col-xs-12">
                                        <h3>
                                            Naša ponuka
                                        </h3>
                                        <ul>
                                            <li >
                                                <a {{{ (Request::is('services*') ? 'class=active' : '') }}} href="{{ url('services') }}">Services</a>
                                            </li>
                                            <li>
                                                <a {{{ (Request::is('references*') ? 'class=active' : '') }}} href="{{ url('references') }}">References</a>
                                            </li>
                                            <li>
                                                <a {{{ (Request::is('about-us*') ? 'class=active' : '') }}} href="{{ url('about-us') }}">About us</a>
                                            </li>
                                            <li>
                                                <a {{{ (Request::is('contact-us*') ? 'class=active' : '') }}} href="{{ url('contact-us') }}">Contact us</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footerMenu col-sm-4 col-xs-12">
                                        <h3>
                                            O nákupe
                                        </h3>
                                        <ul>
                                            <li >
                                                <a {{{ (Request::is('services*') ? 'class=active' : '') }}} href="{{ url('services') }}">Services</a>
                                            </li>
                                            <li>
                                                <a {{{ (Request::is('references*') ? 'class=active' : '') }}} href="{{ url('references') }}">References</a>
                                            </li>
                                            <li>
                                                <a {{{ (Request::is('about-us*') ? 'class=active' : '') }}} href="{{ url('about-us') }}">About us</a>
                                            </li>
                                            <li>
                                                <a {{{ (Request::is('contact-us*') ? 'class=active' : '') }}} href="{{ url('contact-us') }}">Contact us</a>
                                            </li>
                                        </ul>
                                    </div> 
                                    <div class="footerMenu col-sm-4 col-xs-12">
                                        <h3>
                                            O nás
                                        </h3>
                                        <ul>
                                            <li >
                                                <a {{{ (Request::is('services*') ? 'class=active' : '') }}} href="{{ url('services') }}">Services</a>
                                            </li>
                                            <li>
                                                <a {{{ (Request::is('references*') ? 'class=active' : '') }}} href="{{ url('references') }}">References</a>
                                            </li>
                                            <li>
                                                <a {{{ (Request::is('about-us*') ? 'class=active' : '') }}} href="{{ url('about-us') }}">About us</a>
                                            </li>
                                            <li>
                                                <a {{{ (Request::is('contact-us*') ? 'class=active' : '') }}} href="{{ url('contact-us') }}">Contact us</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footerContact col-sm-12" itemscope itemtype="http://schema.org/LocalBusiness">
                                        <div class="row-fluid">             
                                            <div class="address">
                                                <div>
                                                    <span itemprop="name">{{ $general->address_name }}</span>
                                                </div>
                                                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                                    <span itemprop="streetAddress">
                                                        Adresa
                                                    </span>
                                                    <span itemprop="addressLocality">
                                                        {{ $general->address_city }}
                                                    </span>
                                                    {{ $general->address_zip }}
                                                </div>
                                                <div>
                                                    IČO: {{ $general->company_id }}
                                                    DIČ: {{ $general->company_vat }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid copyright">
                    <div class="row-fluid">
                        <p>
                            © <?php echo date('Y');?> {{ $general->address_name }}. All rights reserved. <br>
                            <a href="http://www.riant.sk/sluzby/tvorba-web-stranok" target="_blank">Web design by</a> <a href="http://www.riant.sk" target="_blank" style="color:#00afef">Riant</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
        
        <script type="text/javascript" src="{{ asset('js/fastclick.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
        
<!--
        <script defer="defer" type="text/javascript">
            window.onload=function(){

                var mycode1=document.createElement("script");
                mycode1.type="text/javascript";
                mycode1.src="{{ asset('js/fastclick.js') }}";
                document.getElementsByTagName("head")[0].appendChild(mycode1);

                var mycode2=document.createElement("script");
                mycode2.type="text/javascript";
                mycode2.src="{{ asset('js/app.js') }}";
                document.getElementsByTagName("head")[0].appendChild(mycode2);

            }
        </script>-->

        <link rel="stylesheet" href="{{ URL::asset('css/slick.css') }}">

        <script type="application/ld+json">
        {
          "@context" : "http://schema.org",
          "@type" : "Organization",
          "name" : "{{ $general->address_name }}",
          "url" : "http://avadvisorygroup.com/"
        }
        </script>

    </body>
</html>
