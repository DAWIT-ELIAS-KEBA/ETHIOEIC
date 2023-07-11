
@include('layout.link')



<body>
    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5> <button type="button"
                class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist"> <button
                        class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home"
                        aria-selected="true">Theme Styles</button> <button class="nav-link" id="switcher-profile-tab"
                        data-bs-toggle="tab" data-bs-target="#switcher-profile" type="button" role="tab"
                        aria-controls="switcher-profile" aria-selected="false">Theme Colors</button> </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel"
                    aria-labelledby="switcher-home-tab" tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-light-theme"> Light </label> <input class="form-check-input"
                                        type="radio" name="theme-style" id="switcher-light-theme" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-dark-theme"> Dark </label> <input class="form-check-input"
                                        type="radio" name="theme-style" id="switcher-dark-theme"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-ltr"> LTR </label> <input class="form-check-input" type="radio"
                                        name="direction" id="switcher-ltr" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-rtl"> RTL </label> <input class="form-check-input" type="radio"
                                        name="direction" id="switcher-rtl"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-vertical"> Vertical </label> <input class="form-check-input"
                                        type="radio" name="navigation-style" id="switcher-vertical" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-horizontal"> Horizontal </label> <input class="form-check-input"
                                        type="radio" name="navigation-style" id="switcher-horizontal"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-click"> Menu Click </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-menu-click"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-hover"> Menu Hover </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-menu-hover"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icon-click"> Icon Click </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-icon-click"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icon-hover"> Icon Hover </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-icon-hover"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-default-menu"> Default Menu </label> <input
                                        class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-closed-menu"> Closed Menu </label> <input class="form-check-input"
                                        type="radio" name="sidemenu-layout-styles" id="switcher-closed-menu"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icontext-menu"> Icon Text </label> <input class="form-check-input"
                                        type="radio" name="sidemenu-layout-styles" id="switcher-icontext-menu"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icon-overlay"> Icon Overlay </label> <input
                                        class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-detached"> Detached </label> <input class="form-check-input"
                                        type="radio" name="sidemenu-layout-styles" id="switcher-detached"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-double-menu"> Double Menu </label> <input class="form-check-input"
                                        type="radio" name="sidemenu-layout-styles" id="switcher-double-menu"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-regular"> Regular </label> <input class="form-check-input"
                                        type="radio" name="page-styles" id="switcher-regular" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-classic"> Classic </label> <input class="form-check-input"
                                        type="radio" name="page-styles" id="switcher-classic"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-modern"> Modern </label> <input class="form-check-input"
                                        type="radio" name="page-styles" id="switcher-modern"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-full-width"> Full Width </label> <input class="form-check-input"
                                        type="radio" name="layout-width" id="switcher-full-width" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-boxed"> Boxed </label> <input class="form-check-input"
                                        type="radio" name="layout-width" id="switcher-boxed"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-fixed"> Fixed </label> <input class="form-check-input"
                                        type="radio" name="menu-positions" id="switcher-menu-fixed" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-scroll"> Scrollable </label> <input class="form-check-input"
                                        type="radio" name="menu-positions" id="switcher-menu-scroll"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-header-fixed"> Fixed </label> <input class="form-check-input"
                                        type="radio" name="header-positions" id="switcher-header-fixed" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-header-scroll"> Scrollable </label> <input
                                        class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel"
                    aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark" checked> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Transparent Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-transparent"> </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                        id="switcher-header-light" checked> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                        id="switcher-header-dark"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                        id="switcher-header-primary"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Header" type="radio"
                                        name="header-colors" id="switcher-header-gradient"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Transparent Header" type="radio"
                                        name="header-colors" id="switcher-header-transparent"> </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-3" type="radio"
                                        name="theme-primary" id="switcher-primary2"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-4" type="radio"
                                        name="theme-primary" id="switcher-primary3"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-5" type="radio"
                                        name="theme-primary" id="switcher-primary4"> </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-3" type="radio"
                                        name="theme-background" id="switcher-background2"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4"> </div>
                                <div
                                    class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img3" type="radio"
                                        name="theme-background" id="switcher-bg-img2"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between canvas-footer flex-wrap"> <a
                        href="https://themeforest.net/item/ynex-bootstrap-admin-dashboard-template/45551445"
                        class="btn btn-primary m-1">Buy Now</a> <a href="https://themeforest.net/user/spruko/portfolio"
                        class="btn btn-secondary m-1">Our Portfolio</a> <a href="javascript:void(0);" id="reset-all"
                        class="btn btn-danger m-1">Reset</a> </div>
            </div>
        </div>
    </div> <!-- End Switcher -->
    <div class="page">
        <!-- app-header -->
       


        
@include('layout.header')






      
        @include('layout.sidebar')



        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Checkout</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <div class="container">
                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="card custom-card">
                                <div class="card-body p-0 product-checkout">
                                    <ul class="nav nav-tabs tab-style-2 d-sm-flex d-block border-bottom border-block-end-dashed"
                                        id="myTab1" role="tablist">
                                        <li class="nav-item" role="presentation"> <button class="nav-link active"
                                                id="order-tab" data-bs-toggle="tab" data-bs-target="#order-tab-pane"
                                                type="button" role="tab" aria-controls="order-tab"
                                                aria-selected="true"><i
                                                    class="ri-truck-line me-2 align-middle"></i>Shipping</button> </li>
                                        <li class="nav-item" role="presentation"> <button class="nav-link"
                                                id="confirmed-tab" data-bs-toggle="tab"
                                                data-bs-target="#confirm-tab-pane" type="button" role="tab"
                                                aria-controls="confirmed-tab" aria-selected="false"><i
                                                    class="ri-user-3-line me-2 align-middle"></i>Personal
                                                Details</button> </li>
                                        <li class="nav-item" role="presentation"> <button class="nav-link"
                                                id="shipped-tab" data-bs-toggle="tab" data-bs-target="#shipped-tab-pane"
                                                type="button" role="tab" aria-controls="shipped-tab"
                                                aria-selected="false"><i
                                                    class="ri-bank-card-line me-2 align-middle"></i>Payment</button>
                                        </li>
                                        <li class="nav-item" role="presentation"> <button class="nav-link"
                                                id="delivered-tab" data-bs-toggle="tab"
                                                data-bs-target="#delivery-tab-pane" type="button" role="tab"
                                                aria-controls="delivered-tab" aria-selected="false"><i
                                                    class="ri-checkbox-circle-line me-2 align-middle"></i>Confirmation</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active border-0 p-0" id="order-tab-pane"
                                            role="tabpanel" aria-labelledby="order-tab-pane" tabindex="0">
                                            <div class="p-4">
                                                <p class="mb-1 fw-semibold text-muted op-5 fs-20">01</p>
                                                <div
                                                    class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                                    <div>Shipping Address :</div>
                                                    <div class="mt-sm-0 mt-2"> <button type="button"
                                                            class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#modal-new-address"><i
                                                                class="ri-add-line me-1 align-middle fs-14 fw-semibold d-inline-block"></i>Add
                                                            New Address</button>
                                                        <div class="modal fade" id="modal-new-address" tabindex="-1"
                                                            aria-labelledby="modal-new-address" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title"
                                                                            id="staticBackdropLabel">New Address </h6>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row gy-3">
                                                                            <div class="col-xl-6"> <label
                                                                                    for="fullname-new"
                                                                                    class="form-label">Full Name</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="fullname-new"
                                                                                    placeholder="Full Name"> </div>
                                                                            <div class="col-xl-6"> <label
                                                                                    for="email-new"
                                                                                    class="form-label">Email</label>
                                                                                <input type="email" class="form-control"
                                                                                    id="email-new" placeholder="email">
                                                                            </div>
                                                                            <div class="col-xl-6"> <label
                                                                                    for="phonenumber-new"
                                                                                    class="form-label">Phone
                                                                                    Number</label> <input type="number"
                                                                                    class="form-control"
                                                                                    id="phonenumber-new"
                                                                                    placeholder="Phone"> </div>
                                                                            <div class="col-xl-6"> <label
                                                                                    for="address-new"
                                                                                    class="form-label">Address</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="address-new"
                                                                                    placeholder="Address"> </div>
                                                                            <div class="col-xl-12">
                                                                                <div class="row">
                                                                                    <div class="col-xl-3"> <label
                                                                                            for="pincode-new"
                                                                                            class="form-label">Pincode</label>
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            id="pincode-new"
                                                                                            placeholder="Pinicode">
                                                                                    </div>
                                                                                    <div class="col-xl-3"> <label
                                                                                            for="city-new"
                                                                                            class="form-label">City</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="city-new"
                                                                                            placeholder="City"> </div>
                                                                                    <div class="col-xl-3"> <label
                                                                                            for="state-new"
                                                                                            class="form-label">State</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="state-new"
                                                                                            placeholder="State"> </div>
                                                                                    <div class="col-xl-3"> <label
                                                                                            for="country-new"
                                                                                            class="form-label">Country</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="country-new"
                                                                                            placeholder="Country">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer"> <button type="button"
                                                                            class="btn btn-light"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="button"
                                                                            class="btn btn-success">Save
                                                                            Address</button> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gy-4 mb-4">
                                                    <div class="col-xl-6">
                                                        <div class="form-floating"> <input type="text"
                                                                class="form-control" id="fullname-add"
                                                                value="Json Taylor" placeholder="Name"> <label
                                                                for="fullname-add">Full Name</label> </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-floating"> <input type="email"
                                                                class="form-control" id="email-add"
                                                                value="jsontaylor2413@gmail.com"
                                                                placeholder="name@example.com"> <label
                                                                for="email-add">Email</label> </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-floating"> <input type="email"
                                                                class="form-control is-valid" id="phoneno-add"
                                                                value="(555) 555-1234" placeholder="1234-XX-XXXX">
                                                            <label for="phoneno-add">Phone No</label> </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-floating"> <textarea class="form-control"
                                                                placeholder="Address Here"
                                                                id="address-add">MIG-1-11,Monroe Street,Washington D.C,USA</textarea>
                                                            <label for="address-add">Address</label> </div>
                                                        <div class="form-check mt-1"> <input
                                                                class="form-check-input form-checked-outline form-checked-success"
                                                                type="checkbox" value="" id="invalidCheck" required
                                                                checked> <label class="form-check-label text-success"
                                                                for="invalidCheck"> Same as Billing Address ? </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="row gy-2">
                                                            <div class="col-xl-3">
                                                                <div class="form-floating"> <input type="text"
                                                                        class="form-control is-valid" id="pincode-add"
                                                                        value="20071" placeholder="Name"> <label
                                                                        for="pincode-add">Pin Code</label> </div>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="form-floating"> <input type="text"
                                                                        class="form-control" id="city-add"
                                                                        value="Georgetown" placeholder="Name"> <label
                                                                        for="city-add">City</label> </div>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="form-floating"> <input type="text"
                                                                        class="form-control" id="state-add"
                                                                        value="Washington, D.C" placeholder="Name">
                                                                    <label for="state-add">State</label> </div>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="form-floating"> <input type="text"
                                                                        class="form-control" id="country-add"
                                                                        value="USA" placeholder="Name"> <label
                                                                        for="country-add">Country</label> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gy-3">
                                                    <p class="fs-15 fw-semibold mb-1">Shipping Methods :</p>
                                                    <div class="col-xl-6">
                                                        <div class="form-check shipping-method-container mb-0"> <input
                                                                id="shipping-method1" name="shipping-methods"
                                                                type="radio" class="form-check-input" checked>
                                                            <div class="form-check-label">
                                                                <div
                                                                    class="d-sm-flex align-items-center justify-content-between">
                                                                    <div class="me-2"> <span class="avatar avatar-md">
                                                                            <img src="../assets/images/ecommerce/png/28.png"
                                                                                alt=""> </span> </div>
                                                                    <div class="shipping-partner-details me-sm-5 me-0">
                                                                        <p class="mb-0 fw-semibold">UPS</p>
                                                                        <p class="text-muted fs-11 mb-0">Delivered By
                                                                            24,Nov 2022</p>
                                                                    </div>
                                                                    <div class="fw-semibold me-sm-5 me-0"> $9.99 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-check shipping-method-container mb-0"> <input
                                                                id="shipping-method2" name="shipping-methods"
                                                                type="radio" class="form-check-input">
                                                            <div class="form-check-label">
                                                                <div
                                                                    class="d-sm-flex align-items-center justify-content-between">
                                                                    <div class="me-2"> <span class="avatar avatar-md">
                                                                            <img src="../assets/images/ecommerce/png/31.png"
                                                                                alt=""> </span> </div>
                                                                    <div class="shipping-partner-details me-sm-5 me-0">
                                                                        <p class="mb-0 fw-semibold">USPS</p>
                                                                        <p class="text-muted fs-11 mb-0">Delivered By
                                                                            22,Nov 2022</p>
                                                                    </div>
                                                                    <div class="fw-semibold me-sm-5 me-0"> $10.49 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-check shipping-method-container mb-0"> <input
                                                                id="shipping-method3" name="shipping-methods"
                                                                type="radio" class="form-check-input">
                                                            <div class="form-check-label">
                                                                <div
                                                                    class="d-sm-flex align-items-center justify-content-between">
                                                                    <div class="me-2"> <span class="avatar avatar-md">
                                                                            <img src="../assets/images/ecommerce/png/29.png"
                                                                                alt=""> </span> </div>
                                                                    <div class="shipping-partner-details me-sm-5 me-0">
                                                                        <p class="mb-0 fw-semibold">FedEx</p>
                                                                        <p class="text-muted fs-11 mb-0">Delivered
                                                                            Tomorrow</p>
                                                                    </div>
                                                                    <div class="fw-semibold me-sm-5 me-0"> $12.29 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-check shipping-method-container mb-0"> <input
                                                                id="shipping-method4" name="shipping-methods"
                                                                type="radio" class="form-check-input">
                                                            <div class="form-check-label">
                                                                <div
                                                                    class="d-sm-flex align-items-center justify-content-between">
                                                                    <div class="me-2"> <span class="avatar avatar-md">
                                                                            <img src="../assets/images/ecommerce/png/30.png"
                                                                                alt=""> </span> </div>
                                                                    <div class="shipping-partner-details me-sm-5 me-0">
                                                                        <p class="mb-0 fw-semibold">DHL</p>
                                                                        <p class="text-muted fs-11 mb-0">Delivered Today
                                                                        </p>
                                                                    </div>
                                                                    <div class="fw-semibold me-sm-5 me-0"> $18.99 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                                <button type="button" class="btn btn-success-light"
                                                    id="personal-details-trigger">Personal Details<i
                                                        class="ri-user-3-line ms-2 align-middle d-inline-block"></i></button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade border-0 p-0" id="confirm-tab-pane" role="tabpanel"
                                            aria-labelledby="confirm-tab-pane" tabindex="0">
                                            <div class="p-4">
                                                <p class="mb-1 fw-semibold text-muted op-5 fs-20">02</p>
                                                <div
                                                    class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                                    <div>Personal Details :</div>
                                                </div>
                                                <div class="row gy-4">
                                                    <div class="col-xl-6"> <label for="firstname-personal"
                                                            class="form-label">First Name</label> <input type="text"
                                                            class="form-control" id="firstname-personal"
                                                            placeholder="First Name" value="Json"> </div>
                                                    <div class="col-xl-6"> <label for="lastname-personal"
                                                            class="form-label">Last Name</label> <input type="text"
                                                            class="form-control" id="lastname-personal"
                                                            placeholder="Last Name" value="Taylor"> </div>
                                                    <div class="col-xl-6"> <label for="email-personal"
                                                            class="form-label">Email</label> <input type="email"
                                                            class="form-control" id="email-personal"
                                                            placeholder="xyz@example.com" value=""> </div>
                                                    <div class="col-xl-6"> <label for="phoneno-personal"
                                                            class="form-label">Phone no</label> <input type="text"
                                                            class="form-control" id="phoneno-personal"
                                                            placeholder="(555)-555-1234" value=""> </div>
                                                    <div class="col-xxl-2"> <label for="pincode-personal"
                                                            class="form-label">Pincode</label> <input type="text"
                                                            class="form-control" id="pincode-personal"
                                                            placeholder="200017" value=""> </div>
                                                    <div class="col-xxl-4"> <label for="choices-single-default"
                                                            class="form-label">City</label> <select class="form-control"
                                                            data-trigger name="choices-single-default"
                                                            id="choices-single-default">
                                                            <option value="Choice 1">Georgetown</option>
                                                            <option value="Choice 2">Alexandria</option>
                                                            <option value="Choice 3">Rockville</option>
                                                            <option value="Choice 4">Frederick</option>
                                                        </select> </div>
                                                    <div class="col-xxl-4"> <label for="choices-single-default1"
                                                            class="form-label">State</label> <select
                                                            class="form-control" data-trigger
                                                            id="choices-single-default1">
                                                            <option value="Choice 1">Washington,D.C</option>
                                                            <option value="Choice 2">California</option>
                                                            <option value="Choice 3">Texas</option>
                                                            <option value="Choice 4">Alaska</option>
                                                        </select> </div>
                                                    <div class="col-xxl-2"> <label for="country-personal"
                                                            class="form-label">Country</label> <input type="text"
                                                            class="form-control" id="country-personal"
                                                            placeholder="Country" value="USA"> </div>
                                                    <div class="col-xl-12"> <label for="text-area"
                                                            class="form-label">Address</label> <textarea
                                                            class="form-control" id="text-area" rows="4"></textarea>
                                                        <div class="form-check mt-1"> <input
                                                                class="form-check-input form-checked-outline form-checked-success"
                                                                type="checkbox" value="" id="invalidCheck1" required
                                                                checked> <label
                                                                class="form-check-label text-success fs-12"
                                                                for="invalidCheck1"> Same as Shipping Address Address ?
                                                            </label> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                                <button type="button" class="btn btn-danger-light m-1"
                                                    id="back-shipping-trigger"><i
                                                        class="ri-truck-line me-2 align-middle d-inline-block"></i>Back
                                                    To Shipping</button> <button type="button"
                                                    class="btn btn-success-light m-1" id="payment-trigger">Continue To
                                                    Payment<i
                                                        class="bi bi-credit-card-2-front align-middle ms-2 d-inline-block"></i></button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade border-0 p-0" id="shipped-tab-pane" role="tabpanel"
                                            aria-labelledby="shipped-tab-pane" tabindex="0">
                                            <div class="p-4">
                                                <p class="mb-1 fw-semibold text-muted op-5 fs-20">03</p>
                                                <div
                                                    class="fs-15 fw-semibold d-sm-flex d-block align-items-center justify-content-between mb-3">
                                                    <div>Payment Details :</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="mb-3"> <label class="form-label">Delivery
                                                                Address</label>
                                                            <div class="input-group"> <input type="text"
                                                                    class="form-control" placeholder="Address"
                                                                    aria-label="address"
                                                                    aria-describedby="payment-address"
                                                                    value="MIG-1-11,Monroe Street,Washington D.C,USA">
                                                                <button type="button"
                                                                    class="btn btn-info-light input-group-text"
                                                                    id="payment-address">Change</button> </div>
                                                        </div>
                                                        <div class="card custom-card border shadow-none mb-3">
                                                            <div class="card-header">
                                                                <div class="card-title"> Payment Methods </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="btn-group mb-3 d-sm-flex d-block"
                                                                    role="group"
                                                                    aria-label="Basic radio toggle button group"> <input
                                                                        type="radio" class="btn-check" name="btnradio"
                                                                        id="btnradio1"> <label
                                                                        class="btn btn-outline-light text-default"
                                                                        for="btnradio1">C.O.D(Cash on delivery)</label>
                                                                    <input type="radio" class="btn-check"
                                                                        name="btnradio" id="btnradio2"> <label
                                                                        class="btn btn-outline-light text-default mt-sm-0 mt-1"
                                                                        for="btnradio2">UPI</label> <input type="radio"
                                                                        class="btn-check" name="btnradio" id="btnradio3"
                                                                        checked> <label
                                                                        class="btn btn-outline-light text-default mt-sm-0 mt-1"
                                                                        for="btnradio3">Credit/Debit Card</label> </div>
                                                                <div class="row gy-3">
                                                                    <div class="col-xl-12"> <label
                                                                            for="payment-card-number"
                                                                            class="form-label">Card Number</label>
                                                                        <input type="text" class="form-control"
                                                                            id="payment-card-number"
                                                                            placeholder="Card Number"
                                                                            value="1245 - 5447 - 8934 - XXXX"> </div>
                                                                    <div class="col-xl-12"> <label
                                                                            for="payment-card-name"
                                                                            class="form-label">Name On Card</label>
                                                                        <input type="text" class="form-control"
                                                                            id="payment-card-name"
                                                                            placeholder="Name On Card"
                                                                            value="JSON TAYLOR"> </div>
                                                                    <div class="col-xl-4"> <label
                                                                            for="payment-cardexpiry-date"
                                                                            class="form-label">Expiration Date</label>
                                                                        <input type="text" class="form-control"
                                                                            id="payment-cardexpiry-date"
                                                                            placeholder="MM/YY" value="08/2024"> </div>
                                                                    <div class="col-xl-4"> <label for="payment-cvv"
                                                                            class="form-label">CVV</label> <input
                                                                            type="text" class="form-control"
                                                                            id="payment-cvv" placeholder="XXX"
                                                                            value="341"> </div>
                                                                    <div class="col-xl-4"> <label for="payment-security"
                                                                            class="form-label">O.T.P</label> <input
                                                                            type="text" class="form-control"
                                                                            id="payment-security" placeholder="XXXXXX"
                                                                            value="183467"> <label
                                                                            for="payment-security"
                                                                            class="form-label mt-1 text-success fs-11"><sup><i
                                                                                    class="ri-star-s-fill"></i></sup>Do
                                                                            not share O.T.P with anyone</label> </div>
                                                                    <div class="col-xl-12">
                                                                        <div class="form-check"> <input
                                                                                class="form-check-input form-checked-success"
                                                                                type="checkbox" value=""
                                                                                id="payment-card-save" checked> <label
                                                                                class="form-check-label"
                                                                                for="payment-card-save"> Save this card
                                                                            </label> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer">
                                                                <div class="row gy-3">
                                                                    <p class="fs-15 fw-semibold mb-1">Saved Cards :</p>
                                                                    <div class="col-xl-6">
                                                                        <div
                                                                            class="form-check payment-card-container mb-0 lh-1">
                                                                            <input id="payment-card1"
                                                                                name="payment-cards" type="radio"
                                                                                class="form-check-input" checked>
                                                                            <div class="form-check-label">
                                                                                <div
                                                                                    class="d-sm-flex d-block align-items-center justify-content-between">
                                                                                    <div class="me-2 lh-1"> <span
                                                                                            class="avatar avatar-md">
                                                                                            <img src="../assets/images/ecommerce/png/26.png"
                                                                                                alt=""> </span> </div>
                                                                                    <div class="saved-card-details">
                                                                                        <p class="mb-0 fw-semibold">XXXX
                                                                                            - XXXX - XXXX - 7646</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div
                                                                            class="form-check payment-card-container mb-0 lh-1">
                                                                            <input id="payment-card2"
                                                                                name="payment-cards" type="radio"
                                                                                class="form-check-input">
                                                                            <div class="form-check-label">
                                                                                <div
                                                                                    class="d-sm-flex d-block align-items-center justify-content-between">
                                                                                    <div class="me-2 lh-1"> <span
                                                                                            class="avatar avatar-md">
                                                                                            <img src="../assets/images/ecommerce/png/27.png"
                                                                                                alt=""> </span> </div>
                                                                                    <div class="saved-card-details">
                                                                                        <p class="mb-0 fw-semibold">XXXX
                                                                                            - XXXX - XXXX - 9556</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-between">
                                                <button type="button" class="btn btn-danger-light m-1"
                                                    id="back-personal-trigger"><i
                                                        class="ri-user-3-line me-2 align-middle d-inline-block"></i>Back
                                                    To Personal Info</button> <button type="button"
                                                    class="btn btn-success-light m-1"
                                                    id="continue-payment-trigger">Continue Payment<i
                                                        class="bi bi-credit-card-2-front align-middle ms-2 d-inline-block"></i></button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade border-0 p-0" id="delivery-tab-pane" role="tabpanel"
                                            aria-labelledby="delivery-tab-pane" tabindex="0">
                                            <div class="p-5 checkout-payment-success my-3">
                                                <div class="mb-5">
                                                    <h5 class="text-success fw-semibold">Payment Successful...🤝</h5>
                                                </div>
                                                <div class="mb-5"> <img src="../assets/images/ecommerce/png/24.png"
                                                        alt="" class="img-fluid"> </div>
                                                <div class="mb-4">
                                                    <p class="mb-1 fs-14">You can track your order with Order Id
                                                        <b>SPK#1FR</b> from <a class="link-success"
                                                            href="javascript:void(0);"><u>Track Order</u></a></p>
                                                    <p class="text-muted">Thankyou for shopping with us.</p>
                                                </div> <a href="products.html" class="btn btn-success">Continue
                                                    Shopping<i class="bi bi-cart ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title me-1">Order Summary</div><span
                                        class="badge bg-primary-transparent rounded-pill">02</span>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group mb-0 border-0 rounded-0">
                                        <li class="list-group-item border-top-0 border-start-0 border-end-0">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-2"> <span class="avatar avatar-lg bg-light"> <img
                                                            src="../assets/images/ecommerce/png/1.png" alt=""> </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-semibold">Blue sweatshirt</p>
                                                    <p class="mb-0 text-muted fs-12">Quantity : 2 <span
                                                            class="badge bg-success-transparent ms-3">30% Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end"> <a aria-label="anchor"
                                                            href="javascript:void(0)"> <i
                                                                class="ri-close-line fs-16 text-muted"></i> </a> </p>
                                                    <p class="mb-0 fs-14 fw-semibold">$189<span
                                                            class="ms-1 text-muted fs-11"><s>$329</s></span></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item  border-bottom border-block-end-dashed border-start-0 border-end-0">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="me-2"> <span class="avatar avatar-lg bg-light"> <img
                                                            src="../assets/images/ecommerce/png/7.png" alt=""> </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="mb-0 fw-semibold">Denim Jacket</p>
                                                    <p class="mb-0 text-muted fs-12">Quantity : 1 <span
                                                            class="badge bg-success-transparent ms-3">10% Off</span></p>
                                                </div>
                                                <div>
                                                    <p class="mb-0 text-end"> <a aria-label="anchor"
                                                            href="javascript:void(0)"> <i
                                                                class="ri-close-line fs-16 text-muted"></i> </a> </p>
                                                    <p class="mb-0 fs-14 fw-semibold">$129<span
                                                            class="ms-1 text-muted fs-11"><s>$139</s></span></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="p-3 border-bottom border-block-end-dashed">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="fs-12 fw-semibold bg-primary-transparent p-1 rounded">SPRUKO25
                                            </div>
                                            <div class="text-success">COUPON APPLIED</div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom border-block-end-dashed">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="text-muted op-7">Sub Total</div>
                                            <div class="fw-semibold fs-14">$318</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="text-muted op-7">Discount</div>
                                            <div class="fw-semibold fs-14 text-success">10% - $31.8</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="text-muted op-7">Delivery Charges</div>
                                            <div class="fw-semibold fs-14 text-danger">- $29</div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="text-muted op-7">Service Tax (18%)</div>
                                            <div class="fw-semibold fs-14">- $45.29</div>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="fs-15">Total :</div>
                                            <div class="fw-semibold fs-16 text-dark"> $1,387</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->
                </div>
            </div>
        </div> <!-- End::app-content -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="input-group"> <a href="javascript:void(0);" class="input-group-text"
                                id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a> <input
                                type="search" class="form-control border-0 px-2" placeholder="Search"
                                aria-label="Username"> <a href="javascript:void(0);" class="input-group-text"
                                id="voice-search"><i class="fe fe-mic header-link-icon"></i></a> <a
                                href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown"
                                aria-expanded="false"> <i class="fe fe-more-vertical"></i> </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="mt-4">
                            <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p><span
                                class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)"
                                    class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i
                                    class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)"
                                    class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i
                                    class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)"
                                    class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i
                                    class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i
                                        class="fe fe-x"></i></a></span>
                        </div>
                        <div class="my-4">
                            <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a
                                    href="notifications.html"><span>Notifications</span></a> <a class="ms-auto lh-1"
                                    href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                        class="fe fe-x text-muted"></i></a> </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a
                                    href="alerts.html"><span>Alerts</span></a> <a class="ms-auto lh-1"
                                    href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                        class="fe fe-x text-muted"></i></a> </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert"> <a
                                    href="mail.html"><span>Mail</span></a> <a class="ms-auto lh-1"
                                    href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                        class="fe fe-x text-muted"></i></a> </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group ms-auto"> <button class="btn btn-sm btn-primary-light">Search</button>
                            <button class="btn btn-sm btn-primary">Clear Recents</button> </div>
                    </div>
                </div>
            </div>
        </div> <!-- Footer Start -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container"> <span class="text-muted"> Copyright © <span id="year"></span> <a
                        href="javascript:void(0);" class="text-dark fw-semibold">Ynex</a>. Designed with <span
                        class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);"> <span
                            class="fw-semibold text-primary text-decoration-underline">Spruko</span> </a> All rights
                    reserved </span> </div>
        </footer> <!-- Footer End -->
    </div>
    <div class="scrollToTop"> <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span> </div>
    <div id="responsive-overlay"></div> <!-- Popper JS -->
    <script src="../assets/libs/%40popperjs/core/umd/popper.min.js"></script> <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- Defaultmenu JS -->
    <script src="../assets/js/defaultmenu.min.js"></script> <!-- Node Waves JS-->
    <script src="../assets/libs/node-waves/waves.min.js"></script> <!-- Sticky JS -->
    <script src="../assets/js/sticky.js"></script> <!-- Simplebar JS -->
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/simplebar.js"></script> <!-- Color Picker JS -->
    <script src="../assets/libs/%40simonwep/pickr/pickr.es5.min.js"></script> <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script> <!-- Internal Checkout JS -->
    <script src="../assets/js/checkout.js"></script> <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>
</body>
<!-- Mirrored from spruko.com/demo/ynex/dist/html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jun 2023 07:34:36 GMT -->

</html>