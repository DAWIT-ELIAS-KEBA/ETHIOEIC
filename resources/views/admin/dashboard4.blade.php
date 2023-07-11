

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
        <header class="app-header">
            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">
                <!-- Start::header-content-left -->
                <div class="header-content-left">
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo"> <a href="index.html" class="header-logo"> <img
                                    src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo"
                                    class="desktop-dark"> <img src="../assets/images/brand-logos/toggle-dark.png"
                                    alt="logo" class="toggle-dark"> </a> </div>
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link --> <a aria-label="Hide Sidebar"
                            class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                            data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div> <!-- End::header-element -->
                </div> <!-- End::header-content-left -->
                <!-- Start::header-content-right -->
                <div class="header-content-right">
                    <!-- Start::header-element -->
                    <div class="header-element header-search">
                        <!-- Start::header-link --> <a href="javascript:void(0);" class="header-link"
                            data-bs-toggle="modal" data-bs-target="#searchModal"> <i
                                class="bx bx-search-alt-2 header-link-icon"></i> </a> <!-- End::header-link -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element country-selector">
                        <!-- Start::header-link|dropdown-toggle --> <a href="javascript:void(0);"
                            class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <img src="../assets/images/flags/us_flag.jpg" alt="img" class="rounded-circle"> </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                        class="avatar avatar-xs lh-1 me-2"> <img
                                            src="../assets/images/flags/us_flag.jpg" alt="img"> </span> English </a>
                            </li>
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                        class="avatar avatar-xs lh-1 me-2"> <img
                                            src="../assets/images/flags/spain_flag.jpg" alt="img"> </span> Spanish </a>
                            </li>
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                        class="avatar avatar-xs lh-1 me-2"> <img
                                            src="../assets/images/flags/french_flag.jpg" alt="img"> </span> French </a>
                            </li>
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                        class="avatar avatar-xs lh-1 me-2"> <img
                                            src="../assets/images/flags/germany_flag.jpg" alt="img"> </span> German </a>
                            </li>
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                        class="avatar avatar-xs lh-1 me-2"> <img
                                            src="../assets/images/flags/italy_flag.jpg" alt="img"> </span> Italian </a>
                            </li>
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span
                                        class="avatar avatar-xs lh-1 me-2"> <img
                                            src="../assets/images/flags/russia_flag.jpg" alt="img"> </span> Russian </a>
                            </li>
                        </ul>
                    </div> <!-- End::header-element -->
                  


                    <div class="header-element header-theme-mode">
                        <!-- Start::header-link|layout-setting --> <a href="javascript:void(0);"
                            class="header-link layout-setting"> <span class="light-layout">
                                <!-- Start::header-link-icon --> <i class="bx bx-moon header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span> <span class="dark-layout">
                                <!-- Start::header-link-icon --> <i class="bx bx-sun header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span> </a> <!-- End::header-link|layout-setting -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element cart-dropdown">
                        <!-- Start::header-link|dropdown-toggle --> <a href="javascript:void(0);"
                            class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <i class="bx bx-cart header-link-icon"></i> <span
                                class="badge bg-primary rounded-pill header-icon-badge" id="cart-icon-badge">5</span>
                        </a> <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Cart Items</p><span
                                        class="badge bg-success-transparent" id="cart-data">5 Items</span>
                                </div>
                            </div>
                            <div>
                                <hr class="dropdown-divider">
                            </div>
                            <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item"> <img
                                            src="../assets/images/ecommerce/jpg/1.jpg" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold"> <a
                                                        href="cart.html">SomeThing Phone</a> </div>
                                                <div> <span class="text-black mb-1">$1,299.00</span> <a
                                                        href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a> </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Metallic Blue</li>
                                                    <li>6gb Ram</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item"> <img
                                            src="../assets/images/ecommerce/jpg/3.jpg" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold"> <a href="cart.html">Stop
                                                        Watch</a> </div>
                                                <div> <span class="text-black mb-1">$179.29</span> <a
                                                        href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a> </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item">
                                                    <li>Analog</li>
                                                    <li><span class="badge bg-pink-transparent fs-10">Free
                                                            shipping</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item"> <img
                                            src="../assets/images/ecommerce/jpg/5.jpg" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold"> <a href="cart.html">Photo
                                                        Frame</a> </div>
                                                <div> <span class="text-black mb-1">$29.00</span> <a
                                                        href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a> </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Decorative</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item"> <img
                                            src="../assets/images/ecommerce/jpg/4.jpg" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold"> <a href="cart.html">Kikon
                                                        Camera</a> </div>
                                                <div> <span class="text-black mb-1">$4,999.00</span> <a
                                                        href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a> </div>
                                            </div>
                                            <div
                                                class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Black</li>
                                                    <li>50MM</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item"> <img
                                            src="../assets/images/ecommerce/jpg/6.jpg" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold"> <a
                                                        href="cart.html">Canvas Shoes</a> </div>
                                                <div> <span class="text-black mb-1">$129.00</span> <a
                                                        href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a> </div>
                                            </div>
                                            <div class="d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Gray</li>
                                                    <li>Sports</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item border-top">
                                <div class="d-grid"> <a href="checkout.html" class="btn btn-primary">Proceed to
                                        checkout</a> </div>
                            </div>
                            <div class="p-5 empty-item d-none">
                                <div class="text-center"> <span
                                        class="avatar avatar-xl avatar-rounded bg-warning-transparent"> <i
                                            class="ri-shopping-cart-2-line fs-2"></i> </span>
                                    <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6> <span
                                        class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
                                    <a href="products.html" class="btn btn-primary btn-wave btn-sm m-1"
                                        data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div> <!-- End::main-header-dropdown -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element notifications-dropdown">
                        <!-- Start::header-link|dropdown-toggle --> <a href="javascript:void(0);"
                            class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            id="messageDropdown" aria-expanded="false"> <i class="bx bx-bell header-link-icon"></i>
                            <span class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary"
                                id="notification-icon-badge">5</span> </a> <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Notifications</p><span
                                        class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2"> <span
                                                class="avatar avatar-md bg-primary-transparent avatar-rounded"><i
                                                    class="ti ti-gift fs-18"></i></span> </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Your Order Has
                                                        Been Shipped</a></p><span
                                                    class="text-muted fw-normal fs-12 header-notification-text">Order
                                                    No: 123456 Has Shipped To Your Delivery Address</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a> </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2"> <span
                                                class="avatar avatar-md bg-secondary-transparent avatar-rounded"><i
                                                    class="ti ti-discount-2 fs-18"></i></span> </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Discount
                                                        Available</a></p><span
                                                    class="text-muted fw-normal fs-12 header-notification-text">Discount
                                                    Available On Selected Products</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a> </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2"> <span
                                                class="avatar avatar-md bg-pink-transparent avatar-rounded"><i
                                                    class="ti ti-user-check fs-18"></i></span> </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Account Has
                                                        Been Verified</a></p><span
                                                    class="text-muted fw-normal fs-12 header-notification-text">Your
                                                    Account Has Been Verified Sucessfully</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a> </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2"> <span
                                                class="avatar avatar-md bg-warning-transparent avatar-rounded"><i
                                                    class="ti ti-circle-check fs-18"></i></span> </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Order Placed
                                                        <span class="text-warning">ID: #1116773</span></a></p><span
                                                    class="text-muted fw-normal fs-12 header-notification-text">Order
                                                    Placed Successfully</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a> </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2"> <span
                                                class="avatar avatar-md bg-success-transparent avatar-rounded"><i
                                                    class="ti ti-clock fs-18"></i></span> </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Order Delayed
                                                        <span class="text-success">ID: 7731116</span></a></p><span
                                                    class="text-muted fw-normal fs-12 header-notification-text">Order
                                                    Delayed Unfortunately</span>
                                            </div>
                                            <div> <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                        class="ti ti-x fs-16"></i></a> </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item1 border-top">
                                <div class="d-grid"> <a href="notifications.html" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item1 d-none">
                                <div class="text-center"> <span
                                        class="avatar avatar-xl avatar-rounded bg-secondary-transparent"> <i
                                            class="ri-notification-off-line fs-2"></i> </span>
                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                </div>
                            </div>
                        </div> <!-- End::main-header-dropdown -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element header-shortcuts-dropdown">
                        <!-- Start::header-link|dropdown-toggle --> <a href="javascript:void(0);"
                            class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            id="notificationDropdown" aria-expanded="false"> <i
                                class="bx bx-grid-alt header-link-icon"></i> </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end"
                            aria-labelledby="notificationDropdown">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Related Apps</p>
                                </div>
                            </div>
                            <div class="dropdown-divider mb-0"></div>
                            <div class="main-header-shortcuts p-2" id="header-shortcut-scroll">
                                <div class="row g-2">
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/figma.png" alt=""> </span> <span
                                                    class="d-block fs-12">Figma</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/microsoft-powerpoint.png" alt="">
                                                </span> <span class="d-block fs-12">Power Point</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/microsoft-word.png" alt=""> </span>
                                                <span class="d-block fs-12">MS Word</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/calender.png" alt=""> </span> <span
                                                    class="d-block fs-12">Calendar</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/sketch.png" alt=""> </span> <span
                                                    class="d-block fs-12">Sketch</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/google-docs.png" alt=""> </span>
                                                <span class="d-block fs-12">Docs</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/google.png" alt=""> </span> <span
                                                    class="d-block fs-12">Google</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/translate.png" alt=""> </span> <span
                                                    class="d-block fs-12">Translate</span> </div>
                                        </a> </div>
                                    <div class="col-4"> <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span
                                                    class="avatar avatar-sm avatar-rounded"> <img
                                                        src="../assets/images/apps/google-sheets.png" alt=""> </span>
                                                <span class="d-block fs-12">Sheets</span> </div>
                                        </a> </div>
                                </div>
                            </div>
                            <div class="p-3 border-top">
                                <div class="d-grid"> <a href="javascript:void(0);" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                        </div> <!-- End::main-header-dropdown -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element header-fullscreen">
                        <!-- Start::header-link --> <a onclick="openFullscreen();" href="#" class="header-link"> <i
                                class="bx bx-fullscreen full-screen-open header-link-icon"></i> <i
                                class="bx bx-exit-fullscreen full-screen-close header-link-icon d-none"></i> </a>
                        <!-- End::header-link -->
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|dropdown-toggle --> <a href="#" class="header-link dropdown-toggle"
                            id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="me-sm-2 me-0"> <img src="../assets/images/faces/9.jpg" alt="img" width="32"
                                        height="32" class="rounded-circle"> </div>
                                <div class="d-sm-block d-none">
                                    <p class="fw-semibold mb-0 lh-1">Json Taylor</p><span
                                        class="op-7 fw-normal d-block fs-11">Web Designer</span>
                                </div>
                            </div>
                        </a> <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                            aria-labelledby="mainHeaderProfile">
                            <li><a class="dropdown-item d-flex" href="profile.html"><i
                                        class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                            <li><a class="dropdown-item d-flex" href="mail.html"><i
                                        class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox <span
                                        class="badge bg-success-transparent ms-auto">25</span></a></li>
                            <li><a class="dropdown-item d-flex border-block-end" href="to-do-list.html"><i
                                        class="ti ti-clipboard-check fs-18 me-2 op-7"></i>Task Manager</a></li>
                            <li><a class="dropdown-item d-flex" href="mail-settings.html"><i
                                        class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a></li>
                            <li><a class="dropdown-item d-flex border-block-end" href="javascript:void(0);"><i
                                        class="ti ti-wallet fs-18 me-2 op-7"></i>Bal: $7,12,950</a></li>
                            <li><a class="dropdown-item d-flex" href="chat.html"><i
                                        class="ti ti-headset fs-18 me-2 op-7"></i>Support</a></li>
                            <li><a class="dropdown-item d-flex" href="sign-in-cover.html"><i
                                        class="ti ti-logout fs-18 me-2 op-7"></i>Log Out</a></li>
                        </ul>
                    </div> <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|switcher-icon --> <a href="#" class="header-link switcher-icon"
                            data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas"> <i
                                class="bx bx-cog header-link-icon"></i> </a> <!-- End::header-link|switcher-icon -->
                    </div> <!-- End::header-element -->
                </div> <!-- End::header-content-right -->
            </div> <!-- End::main-header-container -->
        </header> <!-- /app-header -->
        <!-- Start::app-sidebar -->
        


        @include('layout.sidebar')


        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Jobs</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Jobs</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-6 col-xl-12">
                        <div class="row row-cols-12">
                            <div class="col">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top">
                                            <div class="me-3"> <span class="avatar avatar-md p-2 bg-primary"> <svg
                                                        class="svg-white" xmlns="http://www.w3.org/2000/svg"
                                                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z" />
                                                    </svg> </span> </div>
                                            <div class="flex-fill">
                                                <div class="d-flex mb-1 align-items-top justify-content-between">
                                                    <h5 class="fw-semibold mb-0 lh-1">256</h5>
                                                    <div class="text-danger fw-semibold"><i
                                                            class="ri-arrow-down-s-fill me-1 align-middle"></i>-1.05%
                                                    </div>
                                                </div>
                                                <p class="mb-0 fs-10 op-7 text-muted fw-semibold">TOTAL EMPLOYERS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top">
                                            <div class="me-3"> <span class="avatar avatar-md p-2 bg-secondary"> <svg
                                                        class="svg-white" xmlns="http://www.w3.org/2000/svg"
                                                        enable-background="new 0 0 24 24" height="24px"
                                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <rect fill="none" height="24" width="24" />
                                                        <g>
                                                            <path
                                                                d="M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1C4.76,14.04,4.39,14,4,14 c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2 c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85C21.93,14.21,20.99,14,20,14 c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M16.24,13.65c-1.17-0.52-2.61-0.9-4.24-0.9 c-1.63,0-3.07,0.39-4.24,0.9C6.68,14.13,6,15.21,6,16.39V18h12v-1.61C18,15.21,17.32,14.13,16.24,13.65z M8.07,16 c0.09-0.23,0.13-0.39,0.91-0.69c0.97-0.38,1.99-0.56,3.02-0.56s2.05,0.18,3.02,0.56c0.77,0.3,0.81,0.46,0.91,0.69H8.07z M12,8 c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1S11.45,8,12,8 M12,6c-1.66,0-3,1.34-3,3c0,1.66,1.34,3,3,3s3-1.34,3-3 C15,7.34,13.66,6,12,6L12,6z" />
                                                        </g>
                                                    </svg> </span> </div>
                                            <div class="flex-fill">
                                                <div class="d-flex mb-1 align-items-top justify-content-between">
                                                    <h5 class="fw-semibold mb-0 lh-1">4,026</h5>
                                                    <div class="text-success fw-semibold"><i
                                                            class="ri-arrow-up-s-fill me-1 align-middle"></i>+0.40%
                                                    </div>
                                                </div>
                                                <p class="mb-0 fs-10 op-7 text-muted fw-semibold">TOTAL CANDIDATES</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top">
                                            <div class="me-3"> <span class="avatar avatar-md p-2 bg-warning"> <svg
                                                        class="svg-white" xmlns="http://www.w3.org/2000/svg"
                                                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM4 12c0-.61.08-1.21.21-1.78L8.99 15v1c0 1.1.9 2 2 2v1.93C7.06 19.43 4 16.07 4 12zm13.89 5.4c-.26-.81-1-1.4-1.9-1.4h-1v-3c0-.55-.45-1-1-1h-6v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41C17.92 5.77 20 8.65 20 12c0 2.08-.81 3.98-2.11 5.4z" />
                                                    </svg> </span> </div>
                                            <div class="flex-fill">
                                                <div class="d-flex mb-1 align-items-top justify-content-between">
                                                    <h5 class="fw-semibold mb-0 lh-1">48</h5>
                                                    <div class="text-success fw-semibold"><i
                                                            class="ri-arrow-up-s-fill me-1 align-middle"></i>+0.82%
                                                    </div>
                                                </div>
                                                <p class="mb-0 fs-10 op-7 text-muted fw-semibold">TOTAL LOCATIONS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top">
                                            <div class="me-3"> <span class="avatar avatar-md p-2 bg-success"> <svg
                                                        class="svg-white" xmlns="http://www.w3.org/2000/svg"
                                                        enable-background="new 0 0 24 24" height="24px"
                                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <g>
                                                            <rect fill="none" height="24" width="24" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path
                                                                    d="M9,14c1.65,0,3-1.35,3-3s-1.35-3-3-3s-3,1.35-3,3S7.35,14,9,14z M9,10c0.54,0,1,0.46,1,1s-0.46,1-1,1s-1-0.46-1-1 S8.46,10,9,10z" />
                                                                <path
                                                                    d="M22,3H2C0.9,3,0,3.9,0,5v14c0,1.1,0.9,2,2,2h20c1.1,0,1.99-0.9,1.99-2L24,5C24,3.9,23.1,3,22,3z M4.54,19 c1.1-1.22,2.69-2,4.46-2s3.36,0.78,4.46,2H4.54z M22,19h-6.08c-1.38-2.39-3.96-4-6.92-4s-5.54,1.61-6.92,4H2V5h20V19z" />
                                                                <polygon
                                                                    points="15.78,11.15 17.25,10.3 17.25,12 18.75,12 18.75,10.3 20.22,11.15 20.97,9.85 19.5,9 20.97,8.15 20.22,6.85 18.75,7.7 18.75,6 17.25,6 17.25,7.7 15.78,6.85 15.03,8.15 16.5,9 15.03,9.85" />
                                                            </g>
                                                        </g>
                                                    </svg> </span> </div>
                                            <div class="flex-fill">
                                                <div class="d-flex mb-1 align-items-top justify-content-between">
                                                    <h5 class="fw-semibold mb-0 lh-1">1,116</h5>
                                                    <div class="text-success fw-semibold"><i
                                                            class="ri-arrow-up-s-fill me-1 align-middle"></i>+0.21%
                                                    </div>
                                                </div>
                                                <p class="mb-0 fs-10 op-7 text-muted fw-semibold">TOTAL RECRUITERS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top">
                                            <div class="me-3"> <span class="avatar avatar-md p-2 bg-pink"> <svg
                                                        class="svg-white" xmlns="http://www.w3.org/2000/svg"
                                                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z" />
                                                    </svg> </span> </div>
                                            <div class="flex-fill">
                                                <div class="d-flex mb-1 align-items-top justify-content-between">
                                                    <h5 class="fw-semibold mb-0 lh-1">1,468</h5>
                                                    <div class="text-danger fw-semibold"><i
                                                            class="ri-arrow-down-s-fill me-1 align-middle"></i>-0.153%
                                                    </div>
                                                </div>
                                                <p class="mb-0 fs-10 op-7 text-muted fw-semibold">TOTAL SUBSCRIPTIONS
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top">
                                            <div class="me-3"> <span class="avatar avatar-md p-2 bg-teal"> <svg
                                                        class="svg-white" xmlns="http://www.w3.org/2000/svg"
                                                        enable-background="new 0 0 24 24" height="24px"
                                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <g>
                                                            <rect fill="none" height="24" width="24" />
                                                            <g>
                                                                <path
                                                                    d="M19,5v14H5V5H19 M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3L19,3z" />
                                                            </g>
                                                            <path
                                                                d="M14,17H7v-2h7V17z M17,13H7v-2h10V13z M17,9H7V7h10V9z" />
                                                        </g>
                                                    </svg> </span> </div>
                                            <div class="flex-fill">
                                                <div class="d-flex mb-1 align-items-top justify-content-between">
                                                    <h5 class="fw-semibold mb-0 lh-1">34%</h5>
                                                    <div class="text-success fw-semibold"><i
                                                            class="ri-arrow-up-s-fill me-1 align-middle"></i>+0.165%
                                                    </div>
                                                </div>
                                                <p class="mb-0 fs-10 op-7 text-muted fw-semibold">RESSUME UPLOAD RATIO
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Subscriptions Overview</div>
                                        <div class="dropdown"> <a href="javascript:void(0);"
                                                class="p-2 fs-12 text-muted" data-bs-toggle="dropdown"
                                                aria-expanded="false"> View All<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="row border-bottom border-block-end-dashed">
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                <div
                                                    class="p-3 border-sm-end border-inline-end-dashed text-sm-start text-center">
                                                    <p class="fs-20 fw-semibold mb-0">1,117</p>
                                                    <p class="mb-0 text-muted">Total Subscriptions</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                <div
                                                    class="p-3 border-sm-end border-inline-end-dashed text-sm-start text-center">
                                                    <p class="fs-20 fw-semibold mb-0"><span
                                                            class="basic-subscription">742</span></p>
                                                    <p class="mb-0 text-muted">Basic Subscriptions</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                <div class="p-3 text-sm-start text-center">
                                                    <p class="fs-20 fw-semibold mb-0"><span
                                                            class="pro-subscription">259</span></p>
                                                    <p class="mb-0 text-muted">Pro Subscriptions</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="subscriptionOverview" class="px-3 mt-sm-0 mt-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-12">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Recent Jobs </div>
                                        <div class="dropdown"> <a href="javascript:void(0);"
                                                class="p-2 fs-12 text-muted" data-bs-toggle="dropdown"
                                                aria-expanded="false"> View All<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush" id="recent-jobs">
                                            <li class="list-group-item border-top-0 border-start-0 border-end-0"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span
                                                                class="avatar avatar-md avatar-rounded bg-primary-transparent">
                                                                AC </span> </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-semibold">Ui Developer</p>
                                                            <p class="fs-12 text-muted mb-0">Achies - 12 hrs ago</p>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 fs-12">Full Time</p><span
                                                                class="badge bg-success-transparent">Fresher</span>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li class="list-group-item border-start-0 border-end-0"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span
                                                                class="avatar avatar-md avatar-rounded bg-secondary-transparent">
                                                                SI </span> </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-semibold">AWS Engineer</p>
                                                            <p class="fs-12 text-muted mb-0">Siachles - 2 hrs ago</p>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 fs-12">Part Time</p><span
                                                                class="badge bg-info-transparent">+1 yrs -
                                                                Experience</span>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li class="list-group-item border-start-0 border-end-0"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span
                                                                class="avatar avatar-md avatar-rounded bg-success"> LS
                                                            </span> </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-semibold">React Developer</p>
                                                            <p class="fs-12 text-muted mb-0">LifeSpace - 6 hrs ago</p>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 fs-12 text-primary fw-semibold">Freelancer
                                                            </p><span
                                                                class="badge bg-success-transparent">Fresher</span>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li class="list-group-item border-start-0 border-end-0"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span
                                                                class="avatar avatar-md avatar-rounded bg-warning-transparent">
                                                                MS </span> </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-semibold">Angular Developer</p>
                                                            <p class="fs-12 text-muted mb-0">MegaSoft - 14 hrs ago</p>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 fs-12">Full Time</p><span
                                                                class="badge bg-info-transparent">+2 yrs -
                                                                Experience</span>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li class="list-group-item border-start-0 border-end-0"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span
                                                                class="avatar avatar-md avatar-rounded bg-danger-transparent">
                                                                J </span> </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-semibold">UI Tester</p>
                                                            <p class="fs-12 text-muted mb-0">Joggle - 2 days ago</p>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 fs-12">Full Time</p><span
                                                                class="badge bg-info-transparent">+3 yrs -
                                                                Experience</span>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li class="list-group-item border-start-0 border-end-0 border-bottom-0"> <a
                                                    href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span
                                                                class="avatar avatar-md avatar-rounded bg-info-transparent">
                                                                NL </span> </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fw-semibold">Php - Laravel Develope</p>
                                                            <p class="fs-12 text-muted mb-0">Nirlog - 2 days ago</p>
                                                        </div>
                                                        <div class="text-end">
                                                            <p class="mb-0 fs-12">Part Time Time</p><span
                                                                class="badge bg-success-transparent">Fresher</span>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Candidates</div>
                                        <div class="dropdown"> <a href="javascript:void(0);"
                                                class="p-2 fs-12 text-muted" data-bs-toggle="dropdown"
                                                aria-expanded="false"> View All<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div id="candidates-chart" class="p-3"></div>
                                        <div class="row row-cols-12 border-top border-block-start-dashed">
                                            <div class="col">
                                                <div class="p-3 border-end border-inline-end-dashed">
                                                    <div class="text-muted fs-12 text-center mb-1">Male Candidates
                                                    </div>
                                                    <div class="d-flex justify-content-center align-items-center"> <span
                                                            class="me-3 fs-26 fw-semibold">1,234</span> <span
                                                            class="text-success fw-semibold"><i
                                                                class="ri-arrow-up-s-fill align-middle me-1"></i>0.23%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-3">
                                                    <div class="text-muted fs-12 text-center mb-1">Female Candidates
                                                    </div>
                                                    <div class="d-flex justify-content-center align-items-center"> <span
                                                            class="me-3 fs-26 fw-semibold">1,754</span> <span
                                                            class="text-danger fw-semibold"><i
                                                                class="ri-arrow-down-s-fill align-middle me-1"></i>0.11%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Recent Recruiter Registrations </div>
                                        <div class="dropdown"> <a href="javascript:void(0);"
                                                class="p-2 fs-12 text-muted" data-bs-toggle="dropdown"
                                                aria-expanded="false"> View All<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 recruiter">
                                        <div class="row row-cols-12">
                                            <div class="col">
                                                <div class="p-3 border-md-end border-inline-end-dashed">
                                                    <div class="d-flex align-items-top mb-4">
                                                        <div class="me-2 lh-1"> <span
                                                                class="avatar avatar-md avatar-rounded"> <img
                                                                    src="../assets/images/faces/4.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <div class="recent-recruiter"> <a href="javascript:void(0);"
                                                                    class="fw-semibold mb-0 text-truncate">Hr@Spruko</a>
                                                                <p class="mb-0 fs-12 text-muted text-truncate">
                                                                    hr.spruko@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <div> <button aria-label="button" type="button"
                                                                class="btn btn-icon btn-sm btn-light btn-wave"> <i
                                                                    class="ri-arrow-right-s-line"></i> </button> </div>
                                                    </div>
                                                    <div class="d-flex align-items-top justify-content-between mb-2">
                                                        <div class="text-muted fs-12"> Vacancies </div>
                                                        <div class="fw-semibold"> 07 </div>
                                                    </div>
                                                    <div class="d-flex align-items-top justify-content-between mb-0">
                                                        <div class="text-muted fs-12"> Position </div>
                                                        <div> <span class="badge bg-info-transparent">Aws
                                                                Engineer</span> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-3 border-md-end border-inline-end-dashed">
                                                    <div class="d-flex align-items-top mb-4">
                                                        <div class="me-2 lh-1"> <span
                                                                class="avatar avatar-md avatar-rounded"> <img
                                                                    src="../assets/images/faces/21.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <div class="recent-recruiter"> <a href="javascript:void(0);"
                                                                    class="fw-semibold mb-0 text-truncate">Hr@Nicero</a>
                                                                <p class="mb-0 fs-12 text-muted text-truncate">
                                                                    nicero.help@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <div> <button type="button" aria-label="button"
                                                                class="btn btn-icon btn-sm btn-light btn-wave"> <i
                                                                    class="ri-arrow-right-s-line"></i> </button> </div>
                                                    </div>
                                                    <div class="d-flex align-items-top justify-content-between mb-2">
                                                        <div class="text-muted fs-12"> Vacancies </div>
                                                        <div class="fw-semibold"> 16 </div>
                                                    </div>
                                                    <div class="d-flex align-items-top justify-content-between mb-0">
                                                        <div class="text-muted fs-12"> Position </div>
                                                        <div> <span class="badge bg-warning-transparent">React
                                                                Developer</span> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-3">
                                                    <div class="d-flex align-items-top mb-4">
                                                        <div class="me-2 lh-1"> <span
                                                                class="avatar avatar-md avatar-rounded"> <img
                                                                    src="../assets/images/faces/15.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <div class="recent-recruiter"> <a href="javascript:void(0);"
                                                                    class="fw-semibold mb-0 text-truncate">JosephSmith</a>
                                                                <p class="mb-0 fs-12 text-muted text-truncate">
                                                                    josephsmith@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <div> <button type="button" aria-label="button"
                                                                class="btn btn-icon btn-sm btn-light btn-wave"> <i
                                                                    class="ri-arrow-right-s-line"></i> </button> </div>
                                                    </div>
                                                    <div class="d-flex align-items-top justify-content-between mb-2">
                                                        <div class="text-muted fs-12"> Vacancies </div>
                                                        <div class="fw-semibold"> 32 </div>
                                                    </div>
                                                    <div class="d-flex align-items-top justify-content-between mb-0">
                                                        <div class="text-muted fs-12"> Position </div>
                                                        <div> <span class="badge bg-primary-transparent">UI
                                                                Developer</span> </div>
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
                <!--End::row-1 -->
                <!-- Start::row-2 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header">
                                <div class="card-title"> Registers By Country </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Country</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Total Registers</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span
                                                                class="avatar avatar-xs avatar-rounded"> <img
                                                                    src="../assets/images/flags/us_flag.jpg" alt="">
                                                            </span> </div>
                                                        <div> <span class="fw-semibold"> U.S.A </span> </div>
                                                    </div>
                                                </th>
                                                <td>21,Dec 2022</td>
                                                <td>782</td>
                                                <td> <button type="button"
                                                        class="btn btn-success-light btn-wave btn-sm">View</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span
                                                                class="avatar avatar-xs avatar-rounded"> <img
                                                                    src="../assets/images/flags/french_flag.jpg" alt="">
                                                            </span> </div>
                                                        <div> <span class="fw-semibold"> France </span> </div>
                                                    </div>
                                                </th>
                                                <td>29,April 2023</td>
                                                <td>53</td>
                                                <td> <button type="button"
                                                        class="btn btn-success-light btn-wave btn-sm">View</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span
                                                                class="avatar avatar-xs avatar-rounded"> <img
                                                                    src="../assets/images/flags/uae_flag.jpg" alt="">
                                                            </span> </div>
                                                        <div> <span class="fw-semibold"> U.A.E </span> </div>
                                                    </div>
                                                </th>
                                                <td>30,Nov 2023</td>
                                                <td>15</td>
                                                <td> <button type="button"
                                                        class="btn btn-success-light btn-wave btn-sm">View</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span
                                                                class="avatar avatar-xs avatar-rounded"> <img
                                                                    src="../assets/images/flags/germany_flag.jpg"
                                                                    alt=""> </span> </div>
                                                        <div> <span class="fw-semibold"> Germany </span> </div>
                                                    </div>
                                                </th>
                                                <td>18,Mar 2023</td>
                                                <td>19</td>
                                                <td> <button type="button"
                                                        class="btn btn-success-light btn-wave btn-sm">View</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 lh-1"> <span
                                                                class="avatar avatar-xs avatar-rounded"> <img
                                                                    src="../assets/images/flags/argentina_flag.jpg"
                                                                    alt=""> </span> </div>
                                                        <div> <span class="fw-semibold"> Argentina </span> </div>
                                                    </div>
                                                </th>
                                                <td>25,Apr 2023</td>
                                                <td>92</td>
                                                <td> <button type="button"
                                                        class="btn btn-success-light btn-wave btn-sm">View</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Top Companies </div>
                                <div class="dropdown"> <a href="javascript:void(0);" class="p-2 fs-12 text-muted"
                                        data-bs-toggle="dropdown" aria-expanded="false"> View All<i
                                            class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Subscription</th>
                                                <th scope="col">Total Employees</th>
                                                <th scope="col">Recruiter Since</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"> <span
                                                                class="avatar avatar-md p-1 bg-light avatar-rounded">
                                                                <img src="../assets/images/company-logos/4.png" alt="">
                                                            </span> </div>
                                                        <div>
                                                            <p class="fw-semibold mb-0">Obligation Pvt.Ltd</p>
                                                            <p class="fs-12 text-muted mb-0">Remote/Onsite</p>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td> <span class="badge bg-primary-transparent">Basic</span> </td>
                                                <td>547</td>
                                                <td>24,Nov 2021</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"> <span
                                                                class="avatar avatar-md p-1 bg-light avatar-rounded">
                                                                <img src="../assets/images/company-logos/10.png" alt="">
                                                            </span> </div>
                                                        <div>
                                                            <p class="fw-semibold mb-0">Voluptatem Pvt.Ltd</p>
                                                            <p class="fs-12 text-muted mb-0">Remote/Onsite</p>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td> <span class="badge bg-secondary-transparent">Pro</span> </td>
                                                <td>223</td>
                                                <td>13,Jan 2020</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"> <span
                                                                class="avatar avatar-md p-1 bg-light avatar-rounded">
                                                                <img src="../assets/images/company-logos/8.png" alt="">
                                                            </span> </div>
                                                        <div>
                                                            <p class="fw-semibold mb-0">BloomTech.Inc</p>
                                                            <p class="fs-12 text-muted mb-0">Remote/Onsite</p>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td> <span class="badge bg-primary-transparent">Basic</span> </td>
                                                <td>189</td>
                                                <td>06,Sep 2020</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"> <span
                                                                class="avatar avatar-md p-1 bg-light avatar-rounded">
                                                                <img src="../assets/images/company-logos/1.png" alt="">
                                                            </span> </div>
                                                        <div>
                                                            <p class="fw-semibold mb-0">Beatae Industries</p>
                                                            <p class="fs-12 text-muted mb-0">Remote/Onsite</p>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td> <span class="badge bg-primary-transparent">Basic</span> </td>
                                                <td>106</td>
                                                <td>19,Mar 2020</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Acquisitions </div>
                            </div>
                            <div class="card-body">
                                <div class="progress progress-lg mb-4">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 52%"
                                        aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">52%</div>
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 12%"
                                        aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">12%</div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 16%"
                                        aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">16%</div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 12%"
                                        aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">12%</div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 8%"
                                        aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">8%</div>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item"> Total Applications <span
                                            class="badge float-end bg-primary-transparent">1,982</span> </li>
                                    <li class="list-group-item"> Recruited <span
                                            class="badge float-end bg-secondary-transparent">214</span> </li>
                                    <li class="list-group-item"> Short Listed <span
                                            class="badge float-end bg-success-transparent">262</span> </li>
                                    <li class="list-group-item"> Rejected <span
                                            class="badge float-end bg-warning-transparent">395</span> </li>
                                    <li class="list-group-item"> Blocked <span
                                            class="badge float-end bg-danger-transparent">79</span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- End::row-2 -->
                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Recent Employers </div>
                                <div class="d-flex">
                                    <div class="me-3"> <input class="form-control form-control-sm" type="text"
                                            placeholder="Search Here" aria-label=".form-control-sm example"> </div>
                                    <div class="dropdown"> <a href="javascript:void(0);"
                                            class="btn btn-primary btn-sm btn-wave waves-effect waves-light"
                                            data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i
                                                class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-hover border table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="row" class="ps-4"><input class="form-check-input"
                                                        type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                                </th>
                                                <th scope="col">Employer</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Mail</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="ps-4"><input class="form-check-input"
                                                        type="checkbox" id="checkboxNoLabel12" value=""
                                                        aria-label="..."></th>
                                                <td>
                                                    <div class="d-flex align-items-center fw-semibold"> <span
                                                            class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="../assets/images/faces/4.jpg" alt="img">
                                                        </span>Mayor Kelly </div>
                                                </td>
                                                <td>Manufacture</td>
                                                <td><span class="badge bg-primary-transparent">Team Lead</span></td>
                                                <td>mayorkelly@gmail.com</td>
                                                <td>
                                                    <div class="d-inline-flex align-items-center"> <i
                                                            class="ri-map-pin-fill text-muted fs-10"></i> <span
                                                            class="ms-1">Germany</span> </div>
                                                </td>
                                                <td>Sep 15 - Oct 12, 2023</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="ps-4"><input class="form-check-input"
                                                        type="checkbox" id="checkboxNoLabel22" value="" aria-label="..."
                                                        checked></th>
                                                <td>
                                                    <div class="d-flex align-items-center fw-semibold"> <span
                                                            class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="../assets/images/faces/15.jpg" alt="img">
                                                        </span>Andrew Garfield </div>
                                                </td>
                                                <td>Development</td>
                                                <td><span class="badge bg-secondary-transparent">Director</span></td>
                                                <td>andrewgarfield@gmail.com</td>
                                                <td>
                                                    <div class="d-inline-flex align-items-center"> <i
                                                            class="ri-map-pin-fill text-muted fs-10"></i> <span
                                                            class="ms-1">Canada</span> </div>
                                                </td>
                                                <td>Apr 10 - Dec 12, 2023</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="ps-4"><input class="form-check-input"
                                                        type="checkbox" id="checkboxNoLabel3" value="" aria-label="...">
                                                </th>
                                                <td>
                                                    <div class="d-flex align-items-center fw-semibold"> <span
                                                            class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="../assets/images/faces/11.jpg" alt="img">
                                                        </span>Simon Cowel </div>
                                                </td>
                                                <td>Service</td>
                                                <td><span class="badge bg-success-transparent">Manager</span></td>
                                                <td>simoncowel234@gmail.com</td>
                                                <td>
                                                    <div class="d-inline-flex align-items-center"> <i
                                                            class="ri-map-pin-fill text-muted fs-10"></i> <span
                                                            class="ms-1">Europe</span> </div>
                                                </td>
                                                <td>Sep 15 - Oct 12, 2023</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="ps-4"><input class="form-check-input"
                                                        type="checkbox" id="checkboxNoLabel13" value="" aria-label="..."
                                                        checked></th>
                                                <td>
                                                    <div class="d-flex align-items-center fw-semibold"> <span
                                                            class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="../assets/images/faces/8.jpg" alt="img">
                                                        </span>Mirinda Hers </div>
                                                </td>
                                                <td>Marketing</td>
                                                <td><span class="badge bg-danger-transparent">Employee</span></td>
                                                <td>mirindahers@gmail.com</td>
                                                <td>
                                                    <div class="d-inline-flex align-items-center"> <i
                                                            class="ri-map-pin-fill text-muted fs-10"></i> <span
                                                            class="ms-1">USA</span> </div>
                                                </td>
                                                <td>Apr 10 - Dec 12, 2023</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="ps-4"><input class="form-check-input"
                                                        type="checkbox" id="checkboxNoLabel2" value="" aria-label="..."
                                                        checked></th>
                                                <td>
                                                    <div class="d-flex align-items-center fw-semibold"> <span
                                                            class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="../assets/images/faces/16.jpg" alt="img">
                                                        </span>Andrew Garfield </div>
                                                </td>
                                                <td>Development</td>
                                                <td><span class="badge bg-warning-transparent">Director</span></td>
                                                <td>andrewgarfield@gmail.com</td>
                                                <td>
                                                    <div class="d-inline-flex align-items-center"> <i
                                                            class="ri-map-pin-fill text-muted fs-10"></i> <span
                                                            class="ms-1">London</span> </div>
                                                </td>
                                                <td>Jun 10 - Dec 12, 2022</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            aria-label="anchor" href="javascript:void(0);"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center">
                                    <div> Showing 6 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                                    <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled"> <a class="page-link"
                                                        href="javascript:void(0);"> Prev </a> </li>
                                                <li class="page-item active"><a class="page-link"
                                                        href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link"
                                                        href="javascript:void(0);">2</a></li>
                                                <li class="page-item"> <a class="page-link text-primary"
                                                        href="javascript:void(0);"> next </a> </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End::row-3 -->
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
    <script src="../assets/libs/%40simonwep/pickr/pickr.es5.min.js"></script> <!-- Apex Charts JS -->
    <script src="../assets/libs/apexcharts/apexcharts.min.js"></script> <!-- Jobs-Dashboard -->
    <script src="../assets/js/jobs-dashboard.js"></script> <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script> <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>
</body>
<!-- Mirrored from spruko.com/demo/ynex/dist/html/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jun 2023 07:35:07 GMT -->

</html>