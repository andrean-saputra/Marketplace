<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://assets.website-files.com/627d84dfa7c4a916c9787ebb/627d84dfa7c4a9897578805c_favicon.png"
        rel="shortcut icon" type="image/x-icon" />
    <link href="https://assets.website-files.com/627d84dfa7c4a916c9787ebb/627d84dfa7c4a96b89788035_alumio-symbol.png"
        rel="apple-touch-icon" />
    <title>Marketplace</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/css/marketplace/component.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/css/marketplace/marketplace.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/css/marketplace/normalize.css') }}" />
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
        integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="{{ URL::asset('/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Montserrat', sans-serif
        }

        body {
            margin: 0;
        }

        .nav-item {
            font-size: 14px;
        }

        .nav-link {
            color: black !important;
        }

        li {
            margin-bottom: 0px !important;
        }

        li.nav-item.dropdown {
            margin-right: 5px;
            margin-left: 5px;
        }

        .demo-btn {
            background-color: #6a35ff;
            padding-top: 9px;
            padding-bottom: 9px;
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 6px;
            font-size: 14px;
            width: auto;
            height: 40px;
            color: white;
            text-decoration: none;
        }

        .marketplace-section {
            padding-bottom: 15vh;
        }

        #navbarSupportedContent {
            justify-content: center;
            align-items: center;
        }

        .contact-btn {
            color: white;
        }

        .search-bar {
            background: #F3F3F4 0% 0% no-repeat padding-box;
            border-radius: 8px;
            height: 40px;
            width: 97%;
            border-width: 0;
            background: #F3F3F4 url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'%3E%3C/path%3E%3C/svg%3E") no-repeat 13px center;

        }

        .accordion-btn.collapsed::after {
            background-image: url("{{asset('assets/image/add.png')}}");
            border: none;
        }

        .accordion-btn:not(.collapsed)::after {
            background-image: url("{{asset('assets/image/minus.png')}}");
            border: none;
        }

        .accordion-btn:not(.collapsed) {
            background-color: #fff;
        }

        a.accordion-1.collapsed::after {
            background-image: none;
        }

        a.accordion-button.collapsed.accordion-1 {
            text-decoration: none;
            color: #2B2B2B;
        }

        a.accordion-1:not(.collapsed)::after {
            background-image: none;
        }

        .accordion-item {
            border: none;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0, 0, 0, .125);
        }
        
        .accordion {
            width: 22%;
            margin: 0;
        }

        .dropdown-wrapper {
            display: flex;
            justify-content: flex-end;
        }

        .marketplace-title {
            font-size: 22px;
            font-weight: 500;
        }

        .sort-button {
            background-color: #fff;
            border: none;
            color: #2B2B2B
        }

        .sort-button {
            background-color: #fff;
            border: none;
            color: #2B2B2B
        }

        .sort-button.show {
            background-color: #fff;
            border: none;
            color: #2B2B2B
        }

        .sort-button:hover {
            background-color: #fff;
            border: none;
            color: #2B2B2B
        }

        .card {
            width: 15.5rem !important;
            height: 9rem;
            box-shadow: 0px 5px 15px #6241F54D;
            border: none;
        }

        .container {
            margin: 0 auto;
            max-width: 1200px
        }

        .popular-section {
            padding: 100px 0;
            background-color: #F0FBF7;
        }

        .popular-title {
            font-size: 36px;
            text-align: center;
            font-weight: 600;
        }

        .filter-wrapper {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin: auto;
        }

        .btn-filter {
            background: none;
            text-align: center;
            height: 58px;
            text-align: center;
            width: 180px;
            margin-right: 16px;
            margin-left: 16px;
        }

        .btn-filter:hover {
            height: 58px;
            width: 180px;
            border-radius: 8px;
            background: #6241F54D 0% 0% no-repeat padding-box;
            color: white;
        }

        .active {
            height: 58px;
            width: 180px;
            border-radius: 8px;
            background: #6241F54D 0% 0% no-repeat padding-box;
            color: white;
        }

    </style>
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg bg-light py-0 px-3" style="min-height: 65px; position: fixed">
        <div class="container-fluid" style="height:55px; max-width: 1200px; margin: 0 auto; padding: 0 15px;">
            <a class="navbar-brand" style="width: 140px;" href="#"><img style="display: inline-block"
                    class="navbar-logo"
                    src="https://assets.website-files.com/627d84dfa7c4a916c9787ebb/627d84dfa7c4a96aa3787f50_alumio-logo.svg"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            How it Works
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Integrations
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Company
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Pricing</a>
                    </li>
                </ul>
                <div class="d-flex justify-center" style="justify-content: center; align-items: center;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown" style="padding-top: 3px;">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Docs
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <a href="/request-demo" class="demo-btn" style="color: white; margin: 0 15px">Demo</a>
                        <a href="https://www.alumio.com/contact" class="contact-btn d-flex"
                            style="text-decoration: none; color: black; justify-content: center; align-items: center;">
                            <div class="btn-icon" style="margin-right: 10px;"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                </svg></div>
                            <div class="text-block" style="font-size: 14px;">Contact</div>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')

    @include('main.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script>
        function toggleIcon(e) {
            $(e.target)
                .prev('.panel-heading')
                .find(".more-less")
                .toggleClass('glyphicon-plus glyphicon-minus');
        }
        $('.panel-group').on('hidden.bs.collapse', toggleIcon);
        $('.panel-group').on('shown.bs.collapse', toggleIcon);

        // Get the container element
        var btnContainer = document.getElementById("btn-filter-wrapper");

        // Get all buttons with class="btn" inside the container
        var btns = btnContainer.getElementsByClassName("btn-filter");

        // Loop through the buttons and add the active class to the current/clicked button
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }

    </script>
</body>

</html>