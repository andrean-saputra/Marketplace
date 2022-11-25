@extends('main.main')

@section('content')

<div class="marketplace-header d-flex"
    style="background-image: linear-gradient(#6241F54D, #E2DCFDDF, #FFFFFF); padding: 150px 3% 40px; height: 600px;">
    <div class="container">
        <div class="left-wrapper">
            <div style="color: #2B2B2B; font-size: 50px; font-weight: 600; line-height: 1.2;">Welcome to <br>the Alumio
                Marketplace</div>
            <div class="subtitle-text"
                style="margin-top: 10px; margin-bottom: 10px;color: #2B2B2B; font-weight: 600; font-size: 20px;">
                Integrate software and applications with the Alumio iPaaS.</div>
            <div class="description" style="color: #2B2B2B;">Click and select which software you want to connect, or
                request a <br>demo to get a hands-on experience of the top-notch Alumio <br>integration solution.</div>
        </div>
    </div>
</div>
<div class="marketplace-section">
    <div class="container d-flex">
        <div class="accordion" id="accordionExample">
            <div class="search" style="margin: 20px 0;">
                <div class="sidebar-title" style="font-weight: 500; margin: 10px 0;">All Softwares</div>
                <form action="">
                    <input class="search-bar" style="padding-left: 40px" type="search">
                </form>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <a class="accordion-button accordion-1 collapsed" data-bs-target="#collapseOne"
                        aria-expanded="false" aria-controls="collapseOne" href="#popular">
                        Popular
                    </a>
                </h2>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed accordion-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Categories
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed accordion-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Industry
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed accordion-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Business Processes
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>
            </div>
        </div>
        <div class="marketplace-item" style="padding-left: 3%; width: 78%">
            <div class="container" style="padding: 0;">
                <div class="dropdown-wrapper">
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle sort-button"
                            data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" style="padding: 0;">
                            Sort
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="marketplace-title" style="margin-left: 26px">Retail</div>
                <div class="row mt-5 mb-5">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6087ff2869998db9fb8434ad_60129a597c5b606ffe30d2d9_Logo_Magento%2520New-141.png"
                                class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d0f502933e4/6005ea4c5ffe7dd544293773_shopware-seeklogo.com.svg"
                                class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d0f502933e4/602f6b75abdf727a555d8ad3_SAP.svg"
                                class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d0f502933e4/625e79057d807a730dc0aeaf_Shopify%20-%20Logo.svg"
                                class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7d71c82942d4_5ff79691c4cb9553e4df7b63_Integration_logo-18.svg"
                                class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7d01272942d7_5ff79691c4cb95800bdf7b64_Integration_logo-16.svg"
                                class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/608ac6fb5db42f9d7cbfd436_Logo_Pimcore-192.svg"
                                class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6087ff2fcab821d63a747dd5_601d1aa1aaa5367af4d0fc5b_Logo_MD%2520365.png"
                                class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7d55102943ec_5ff79691c4cb957e9bdf7b74_LOGO_Visma.png"
                                class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7d3eca2942d8_5ff79691c4cb957729df7b5f_Integration_logo-01.svg"
                                class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7d33a92943e2_5ff79691c4cb9517a0df7b7c_LOGO_Akeneo.png"
                                class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7d1ed32942aa_5ff79691c4cb95aa2ddf7b5c_Integration_logo-05.svg"
                                class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popular-section" id="popular">
    <div class="container">
        <div class="popular-title mt-4 mb-4">Popular integrations from various industries</div>
        <div class="filter-wrapper" id="btn-filter-wrapper">
            <button type="button" class="btn-filter active">Finance</button>
            <button type="button" class="btn-filter">Human Resources</button>
            <button type="button" class="btn-filter">IT</button>
            <button type="button" class="btn-filter">Marketing</button>
            <button type="button" class="btn-filter">Analytics</button>
            <button type="button" class="btn-filter">Sales</button>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7d572c294433_5ff79691c4cb953916df7bd1_Logo_Amazon%2520S3.png"
                        class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7d0412294460_5ff79691c4cb9541dfdf7bd7_Logo_Slack.png"
                        class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7d3eca2942d8_5ff79691c4cb957729df7b5f_Integration_logo-01.svg"
                        class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d0f502933e4/602f6b75abdf727a555d8ad3_SAP.svg"
                        class="card-img-top" alt="...">
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7d3cf3294458_5ff79691c4cb9585badf7b89_LOGO_PowerBI.png"
                        class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7d004d294464_5ff79691c4cb95d8c9df7b87_LOGO_Tableau.png"
                        class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7d3d5c29444a_5ff79691c4cb950ffadf7b8b_LOGO_Klipfolio.png"
                        class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7d893829445b_5ff79691c4cb951e96df7b88_LOGO_QlikView.png"
                        class="card-img-top" alt="...">
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7d070e294452_5ff79691c4cb95a2f5df7b8a_LOGO_Omnia.png"
                        class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7d5697294339_5ff79691c4cb95cb21df7bbd_logo_Hubspot.svg"
                        class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d59bb2933e3/6005ea4c5ffe7dad60294432_5ff79691c4cb9507a9df7b85_LOGO_Amazon.png"
                        class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="partner-section">
    <div class="container row" style="padding: 16vh 0;">
        <div class="col-5 wrapper-left">
            <div class="partner-title"
                style="font-size: 46px; font-weight: 600; letter-spacing: 0.02em; line-height: 1.2">Need help
                <br>setting up your <br>integrations ?</div>
            <div class="partner-subtitle mt-5">
                Get in touch with one of our global partners for <br>local assistance
            </div>
        </div>
        <div class="col-7 wrapper-right">
            <div class="row mb-5">
                <div class="col-4 partner-picture">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d0f502933e4/62626fbccad5022e711d5735_Memo%20ICT.webp"
                        alt="" srcset="">
                </div>
                <div class="col-4 partner-picture">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d0f502933e4/62626fbccad5024e5d1d572f_Youwe.webp"
                        alt="" srcset="">
                </div>
                <div class="col-4 partner-picture">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d0f502933e4/62626fbccad502e8571d5733_Experius.webp"
                        alt="" srcset="">
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-4 partner-picture">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d0f502933e4/62626fbccad50274541d5737_ShopWorks.webp"
                        alt="" srcset="">
                </div>
                <div class="col-4 partner-picture">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d0f502933e4/62626fbccad50204bf1d5739_Space48.webp"
                        alt="" srcset="">
                </div>
                <div class="col-4 partner-picture">
                    <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d0f502933e4/62626fbccad50279ce1d5731_Meteor.webp"
                        alt="" srcset="">
                </div>
            </div>
            <div class="all-partner-wrapper" style="text-align:center;">
                <a href="#" style="color: #6241F5; font-size: 25px; font-weight: 600;margin-right: 20px">Click here for
                    all partners</a>
                <img src="https://uploads-ssl.webflow.com/6005ea4c5ffe7d0f502933e4/625e6fa48fbf5435f272cb02_Icon%20awesome-arrow-circle-right.svg"
                    alt="" srcset="">
            </div>
        </div>
    </div>
</div>


@endsection
