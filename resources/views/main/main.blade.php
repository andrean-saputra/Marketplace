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
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/css/marketplace/marketplace.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/css/marketplace/normalize.css') }}" /> --}}
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
        integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="{{ URL::asset('/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" crossorigin="anonymous">
    <link href="{{ URL::asset('/assets/css/marketplace/main.css') }}" rel="stylesheet" type="text/css"
        crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container container-fluid">
            <a class="navbar-brand" style="width: 140px;" href="#"><img style="display: inline-block"
                    class="navbar-logo"
                    src="https://assets-global.website-files.com/6005ea4c5ffe7d0f502933e4/6005ea4c5ffe7d57342934dc_alumio-logo.svg"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">How it works</a>
                        <div class="dropdown-menu megamenu" role="menu">
                            <div class="row g-4">
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">iPaaS Integration Platform</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="https://www.alumio.com/platform/how-it-works">How it works</a>
                                            </li>
                                            <li><a href="https://www.alumio.com/platform/overview">Solution</a></li>
                                            <li><a href="https://www.alumio.com/platform/features">Features</a></li>
                                            <li><a
                                                    href="https://www.alumio.com/platform/alumio-architecture">Architecture</a>
                                            </li>
                                            <li><a
                                                    href="https://www.alumio.com/crash-course/getting-started-simple-dataroute-from-api-to-api">Crash
                                                    Course Videos</a></li>
                                            <li><a href="https://www.alumio.com/security-compliance/secure">Security &
                                                    Compliancy</a></li>
                                            <li><a href="https://www.alumio.com/performance/insights">Performance</a>
                                            </li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">SAP API plugin</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="https://www.alumio.com/api-plugin/sap-ecc">SAP ECC</a></li>
                                            <li><a href="http://www.alumio.com/api-plugin/sap-ecc">SAP R/3</a></li>
                                            <li><a href="http://www.alumio.com/api-plugin/sap-s4hana">SAP S/4HANA</a>
                                            </li>
                                        </ul>
                                        <h6 class="title">Microsoft API plugin</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="https://www.alumio.com/platforms/microsoft-dynamics-ax">Dynamics
                                                    AX</a></li>
                                            <li><a
                                                    href="https://www.alumio.com/platforms/microsoft-dynamics-365-finance-operations">Dynamics
                                                    365 Finance</a></li>
                                            <li><a
                                                    href="https://www.alumio.com/platforms/microsoft-dynamics-365-finance-operations">Dynamics
                                                    365 Supply Chain</a></li>
                                            <li><a
                                                    href="https://www.alumio.com/platforms/microsoft-dynamics-365-business-central">Dynamics
                                                    365 Business Central</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Who it's for</h6>
                                        <ul class="list-unstyled">
                                            <li><a
                                                    href="https://www.alumio.com/platform/digital-agencies-and-system-integrators">Digital
                                                    Agencies</a></li>
                                            <li><a
                                                    href="https://www.alumio.com/platform/digital-agencies-and-system-integrators">System
                                                    Integrators</a></li>
                                            <li><a
                                                    href="https://www.alumio.com/platform/alumio-for-isv-independent-software-vendors">ISV</a>
                                            </li>
                                            <li><a
                                                    href="https://www.alumio.com/platform/alumio-for-developers">Developers</a>
                                            </li>
                                            <li><a href="https://www.alumio.com/performance/architecture">Architects</a>
                                            </li>
                                            <li><a
                                                    href="https://www.alumio.com/company#integration-services">Consultants</a>
                                            </li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div>
                            </div><!-- end row -->
                        </div> <!-- dropdown-mega-menu.// -->
                    </li>
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Integrations</a>
                        <div class="dropdown-menu megamenu-integrations" role="menu">
                            <div class="row g-4">
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">ERP</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="https://www.alumio.com/integrate/sap-api-plugin">SAP</a></li>
                                            <li><a href="https://www.alumio.com/platforms/sage">SAGE</a></li>
                                            <li><a href="https://www.alumio.com/platforms/microsoft-dynamics-365">Dynamics
                                                    365</a></li>
                                            <li><a href="https://www.alumio.com/platforms/agp">Kerridge</a></li>
                                            <li><a href="https://www.alumio.com/marketplace">More...</a></li>
                                        </ul>
                                        <h6 class="title">Native Connectors</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="https://www.alumio.com/platforms/microsoft-dynamics-ax">Dynamics
                                                    AX</a></li>
                                            <li><a
                                                    href="https://www.alumio.com/platforms/microsoft-dynamics-365-finance-operations">Dynamics
                                                    365 Finance</a></li>
                                            <li><a
                                                    href="https://www.alumio.com/platforms/microsoft-dynamics-365-finance-operations">Dynamics
                                                    365 Supply Chain</a></li>
                                            <li><a
                                                    href="https://www.alumio.com/platforms/microsoft-dynamics-365-business-central">Dynamics
                                                    365</a></li>
                                            <li><a href="https://www.alumio.com/integrate/sap-api-plugin">SAP ECC</a>
                                            </li>
                                            <li><a href="https://www.alumio.com/integrate/sap-api-plugin">SAP R/3</a>
                                            </li>
                                            <li><a href="https://www.alumio.com/integrate/sap-api-plugin">SAP
                                                    S/4HANA</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Ecommerce</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="https://www.alumio.com/platforms/magento">Adobe Magento</a>
                                            </li>
                                            <li><a href="https://www.alumio.com/platforms/shopware">Shopware</a></li>
                                            <li><a href="https://www.alumio.com/platforms/bigcommerce">BigCommerce</a>
                                            </li>
                                            <li><a href="https://www.alumio.com/platforms/woocommerce">Woocommerce</a>
                                            </li>
                                            <li><a href="https://www.alumio.com/marketplace">More...</a></li>
                                        </ul>
                                        <h6 class="title">PIM</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="https://www.alumio.com/platforms/pimcore">Pimcore</a></li>
                                            <li><a href="https://www.alumio.com/platforms/akeneo">Akeneo</a></li>
                                            <li><a href="https://www.alumio.com/platforms/ergonode">Ergonode</a></li>
                                            <li><a href="https://www.alumio.com/platforms/inriver">InRiver</a></li>
                                            <li><a href="https://www.alumio.com/marketplace">More...</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Message broker</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="https://www.alumio.com/platforms/cxml">cXML</a></li>
                                            <li><a href="https://www.alumio.com/platforms/edi-broker">EDI Broker</a>
                                            </li>
                                            <li><a href="https://www.alumio.com/platforms/json">JSON</a></li>
                                        </ul>
                                        <h6 class="title">Marketplace</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="https://www.alumio.com/marketplace">See all integrations</a>
                                            </li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div>
                            </div><!-- end row -->
                        </div> <!-- dropdown-mega-menu.// -->
                    </li>
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Company</a>
                        <div class="dropdown-menu megamenu-company" role="menu">
                            <div class="row g-4">
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">About</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="https://www.alumio.com/company">About Us</a></li>
                                            <li><a href="https://www.alumio.com/contact">Contact</a></li>
                                            <li><a href="https://apply.workable.com/alumio/">Careers</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-4 -->
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Title Menu Two</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-4 -->
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Title Menu Three</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div>
                            </div><!-- end row -->
                        </div> <!-- dropdown-mega-menu.// -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Pricing</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown has-megamenu" style="margin-top: auto">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Docs</a>
                        <div class="dropdown-menu megamenu-docs" role="menu">
                            <div class="row g-4">
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Title Menu One</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">SAP API plugin</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">SAP ECC</a></li>
                                            <li><a href="#">SAP R/3</a></li>
                                            <li><a href="#">SAP S/4HANA</a></li>
                                        </ul>
                                        <h6 class="title">Microsoft API plugin</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Dynamics AX</a></li>
                                            <li><a href="#">Dynamics 365 Finance</a></li>
                                            <li><a href="#">Dynamics 365 Supply Chain</a></li>
                                            <li><a href="#">Dynamics 365 Business Central</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col-lg-4 col-6">
                                    <div class="col-megamenu">
                                        <h6 class="title">Title Menu Three</h6>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div>
                            </div><!-- end row -->
                        </div> <!-- dropdown-mega-menu.// -->
                    </li>
                    <a href="/request-demo" class="demo-btn" style="color: white; margin: auto 20px auto 8px">Demo</a>
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
            </div> <!-- navbar-collapse.// -->
        </div> <!-- container-fluid.// -->
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
        if (history.scrollRestoration) {
            history.scrollRestoration = 'manual';
        } else {
            window.onbeforeunload = function () {
                window.scrollTo(0, 0);
            }
        }

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
