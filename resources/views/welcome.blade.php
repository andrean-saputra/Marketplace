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
                    <input class="search-bar" type="search">
                </form>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <a class="accordion-button accordion-1 collapsed"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" href="#popular">
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
        <div class="marketplace-item">
            <div class="container">
                <div class="dropdown-wrapper">
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle sort-button"
                            data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            Sort
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="marketplace-title">Retail</div>
                <div class="row mt-5 mb-5">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
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
                    <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="{{ URL::asset('/assets/image/integrate.png') }}" class="card-img-top" alt="...">
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


@endsection
