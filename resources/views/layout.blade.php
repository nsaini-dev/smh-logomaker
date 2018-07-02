<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name='csrf-token' content={{ csrf_token() }}>

    <title>LogoMaker</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Belleza|Contrail+One|Galada|Gugi|Istok+Web:400,700|Kaushan+Script|Lobster|Lobster+Two:400,700|Nova+Oval|Oleo+Script:400,700|Pacifico|Plaster|Playball|Rancho|Roboto+Condensed:400,700|Roboto:300,400,500,700|Rubik:400,500,700|Sonsie+One|Uncial+Antiqua" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/spectrum.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    <div class="page-header">
        <div class="container">
            <div class="page-title">
                Logo Maker
            </div>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>