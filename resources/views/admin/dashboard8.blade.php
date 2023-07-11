

@include('layout.link')


<body>
    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5> <button type="button"
                class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          
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
                    <!-- Start::header-element -->
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
                    <h1 class="page-title fw-semibold fs-18 mb-0">HRM</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">HRM</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-5 col-xl-12">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card hrm-main-card primary">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top">
                                            <div class="me-3"> <span class="avatar bg-primary"> <i
                                                        class="ri-team-line fs-18"></i> </span> </div>
                                            <div class="flex-fill"> <span
                                                    class="fw-semibold text-muted d-block mb-2">Total Employees</span>
                                                <h5 class="fw-semibold mb-2">22,124</h5>
                                                <p class="mb-0"> <span class="badge bg-primary-transparent">This
                                                        Month</span> </p>
                                            </div>
                                            <div> <span class="fs-14 fw-semibold text-success">+1.03%</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card hrm-main-card secondary">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top">
                                            <div class="me-3"> <span class="avatar bg-secondary"> <i
                                                        class="ri-user-unfollow-line fs-18"></i> </span> </div>
                                            <div class="flex-fill"> <span
                                                    class="fw-semibold text-muted d-block mb-2">Employees In
                                                    Leave</span>
                                                <h5 class="fw-semibold mb-2">528</h5>
                                                <p class="mb-0"> <span class="badge bg-secondary-transparent">This
                                                        Month</span> </p>
                                            </div>
                                            <div> <span class="fs-14 fw-semibold text-success">+0.36%</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card  hrm-main-card warning">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top">
                                            <div class="me-3"> <span class="avatar bg-warning"> <i
                                                        class="ri-service-line fs-18"></i> </span> </div>
                                            <div class="flex-fill"> <span
                                                    class="fw-semibold text-muted d-block mb-2">Total Clients</span>
                                                <h5 class="fw-semibold mb-2">8,289</h5>
                                                <p class="mb-0"> <span class="badge bg-warning-transparent">This
                                                        Month</span> </p>
                                            </div>
                                            <div> <span class="fs-14 fw-semibold text-danger">-1.28%</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card  hrm-main-card danger">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top">
                                            <div class="me-3"> <span class="avatar bg-danger"> <i
                                                        class="ri-contacts-line fs-18"></i> </span> </div>
                                            <div class="flex-fill"> <span
                                                    class="fw-semibold text-muted d-block mb-2">New Leads</span>
                                                <h5 class="fw-semibold mb-2">1,453</h5>
                                                <p class="mb-0"> <span class="badge bg-danger-transparent">This
                                                        Month</span> </p>
                                            </div>
                                            <div> <span class="fs-14 fw-semibold text-success">+4.25%</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Applicants Summary</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row gy-md-0 gy-3">
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3"> <span
                                                            class="avatar avatar-rounded bg-light text-primary"> <i
                                                                class="ti ti-files fs-18"></i> </span> </div>
                                                    <div> <span class="d-block mb-1 text-muted">New Applicants</span>
                                                        <h6 class="fw-semibold mb-0">2,981</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3"> <span
                                                            class="avatar avatar-rounded bg-light text-secondary"> <i
                                                                class="ti ti-file-check fs-18"></i> </span> </div>
                                                    <div> <span class="d-block mb-1 text-muted">Selected
                                                            Candidates</span>
                                                        <h6 class="fw-semibold mb-0">2,981</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="d-flex align-items-top">
                                                    <div class="me-3"> <span
                                                            class="avatar avatar-rounded bg-light text-warning"> <i
                                                                class="ti ti-file-dislike fs-18"></i> </span> </div>
                                                    <div> <span class="d-block mb-1 text-muted">Rejected
                                                            Candidates</span>
                                                        <h6 class="fw-semibold mb-0">2,981</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between align-items-center d-sm-flex d-block">
                                <div class="card-title mb-sm-0 mb-2"> Performance By Category </div>
                                <div class="btn-group" role="group" aria-label="Basic example"> <button type="button"
                                        class="btn btn-primary-light btn-sm btn-wave">1W</button> <button type="button"
                                        class="btn btn-primary-light btn-sm btn-wave">1M</button> <button type="button"
                                        class="btn btn-primary-light btn-sm btn-wave">6M</button> <button type="button"
                                        class="btn btn-primary btn-sm btn-wave">1Y</button> </div>
                            </div>
                            <div class="card-body">
                                <div id="performanceReport"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
                <!-- Start::row-2 -->
                <div class="row">
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Jobs Summary </div>
                            </div>
                            <div class="card-body p-4">
                                <div id="jobs-summary"></div>
                            </div>
                            <div class="card-footer p-4 my-2">
                                <div class="row row-cols-12">
                                    <div class="col p-0">
                                        <div class="text-center"> <span
                                                class="text-muted fs-12 mb-1 hrm-jobs-legend published d-inline-block ms-2">Published
                                            </span>
                                            <div><span class="fs-16 fw-semibold">1,624</span> </div>
                                        </div>
                                    </div>
                                    <div class="col p-0">
                                        <div class="text-center"> <span
                                                class="text-muted fs-12 mb-1 hrm-jobs-legend private d-inline-block ms-2">Private
                                            </span>
                                            <div><span class="fs-16 fw-semibold">1,267</span></div>
                                        </div>
                                    </div>
                                    <div class="col p-0">
                                        <div class="text-center"> <span
                                                class="text-muted fs-12 mb-1 hrm-jobs-legend closed d-inline-block ms-2">Closed
                                            </span>
                                            <div><span class="fs-16 fw-semibold">1,153</span> </div>
                                        </div>
                                    </div>
                                    <div class="col p-0">
                                        <div class="text-center"> <span
                                                class="text-muted fs-12 mb-1 hrm-jobs-legend onhold d-inline-block ms-2">On
                                                Hold </span>
                                            <div><span class="fs-16 fw-semibold">1,153</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Upcoming Events</div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled timeline-widget mb-0 my-3">
                                    <li class="timeline-widget-list">
                                        <div class="d-flex align-items-top">
                                            <div class="me-5 text-center"> <span
                                                    class="d-block fs-20 fw-semibold text-primary">02</span> <span
                                                    class="d-block fs-12 text-muted">Mon</span> </div>
                                            <div
                                                class="d-flex flex-wrap flex-fill align-items-top justify-content-between">
                                                <div>
                                                    <p class="mb-1 text-truncate timeline-widget-content text-wrap">You
                                                        have an announcement - Ipsum Est Diam Eirmod</p>
                                                    <p class="mb-0 fs-12 lh-1 text-muted">10:00AM<span
                                                            class="badge bg-primary-transparent ms-2">Announcement</span>
                                                    </p>
                                                </div>
                                                <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                                        class="p-2 fs-16 text-muted" data-bs-toggle="dropdown"> <i
                                                            class="fe fe-more-vertical"></i> </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="javascript:void(0);">Action</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Another
                                                                action</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="javascript:void(0);">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-widget-list">
                                        <div class="d-flex align-items-top">
                                            <div class="me-5 text-center"> <span
                                                    class="d-block fs-20 fw-semibold text-primary">15</span> <span
                                                    class="d-block fs-12 text-muted">Sun</span> </div>
                                            <div
                                                class="d-flex flex-wrap flex-fill align-items-top justify-content-between">
                                                <div>
                                                    <p class="mb-1 text-truncate timeline-widget-content text-wrap">
                                                        National holiday - Vero Jayanti</p>
                                                    <p class="mb-0 fs-12 lh-1 text-muted"><span
                                                            class="badge bg-warning-transparent">Holiday</span></p>
                                                </div>
                                                <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                                        class="p-2 fs-16 text-muted" data-bs-toggle="dropdown"> <i
                                                            class="fe fe-more-vertical"></i> </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="javascript:void(0);">Action</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Another
                                                                action</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="javascript:void(0);">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-widget-list">
                                        <div class="d-flex align-items-top">
                                            <div class="me-5 text-center"> <span
                                                    class="d-block fs-20 fw-semibold text-primary">23</span> <span
                                                    class="d-block fs-12 text-muted">Mon</span> </div>
                                            <div
                                                class="d-flex flex-wrap flex-fill align-items-top justify-content-between">
                                                <div>
                                                    <p class="mb-1 text-truncate timeline-widget-content text-wrap">John
                                                        pup birthday - Team Member</p>
                                                    <p class="mb-4 fs-12 lh-1 text-muted">09:00AM<span
                                                            class="badge bg-success-transparent ms-2">Birthday</span>
                                                    </p>
                                                    <p class="mb-1 text-truncate timeline-widget-content text-wrap">Amet
                                                        sed no dolor kasd - Et Dolores Tempor Erat</p>
                                                    <p class="mb-0 fs-12 lh-1 text-muted">04:00PM<span
                                                            class="badge bg-primary-transparent ms-2">Announcement</span>
                                                    </p>
                                                </div>
                                                <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                                        class="p-2 fs-16 text-muted" data-bs-toggle="dropdown"> <i
                                                            class="fe fe-more-vertical"></i> </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="javascript:void(0);">Action</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Another
                                                                action</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="javascript:void(0);">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-widget-list">
                                        <div class="d-flex align-items-top">
                                            <div class="me-5 text-center"> <span
                                                    class="d-block fs-20 fw-semibold text-primary">31</span> <span
                                                    class="d-block fs-12 text-muted">Tue</span> </div>
                                            <div
                                                class="d-flex flex-wrap flex-fill align-items-top justify-content-between">
                                                <div>
                                                    <p class="mb-1 text-truncate timeline-widget-content text-wrap">
                                                        National Holiday - Dolore Ipsum</p>
                                                    <p class="mb-0 fs-12 lh-1 text-muted"><span
                                                            class="badge bg-warning-transparent">Holiday</span></p>
                                                </div>
                                                <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                                        class="p-2 fs-16 text-muted" data-bs-toggle="dropdown"> <i
                                                            class="fe fe-more-vertical"></i> </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="javascript:void(0);">Action</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Another
                                                                action</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="javascript:void(0);">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Clients</div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Client</th>
                                                <th scope="col">Mail</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-3"> <span class="avatar avatar-rounded"> <img
                                                                    src="../assets/images/faces/2.jpg" alt=""> </span>
                                                        </div>
                                                        <div> <span class="d-block fw-semibold mb-1">Diana Aise</span>
                                                            <span class="d-block text-muted fs-12">C.E.O</span> </div>
                                                    </div>
                                                </th>
                                                <td>diana.1116@demo.com</td>
                                                <td> <select class="form-select" aria-label="Default select example">
                                                        <option value="1">Active</option>
                                                        <option value="2">In Active</option>
                                                    </select> </td>
                                                <td>
                                                    <div class="btn-list"> <button aria-label="button" type="button"
                                                            class="btn btn-sm btn-primary-light btn-icon"><i
                                                                class="ri-pencil-line"></i></button> <button
                                                            aria-label="button" type="button"
                                                            class="btn btn-sm btn-success-light btn-icon"><i
                                                                class="ri-delete-bin-line"></i></button> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-3"> <span class="avatar avatar-rounded"> <img
                                                                    src="../assets/images/faces/8.jpg" alt=""> </span>
                                                        </div>
                                                        <div> <span class="d-block fw-semibold mb-1">Rose Mary</span>
                                                            <span class="d-block text-muted fs-12">C.E.O</span> </div>
                                                    </div>
                                                </th>
                                                <td>rose756@demo.com</td>
                                                <td> <select class="form-select" aria-label="Default select example">
                                                        <option value="1">Active</option>
                                                        <option value="2">In Active</option>
                                                    </select> </td>
                                                <td>
                                                    <div class="btn-list"> <button aria-label="button" type="button"
                                                            class="btn btn-sm btn-primary-light btn-icon"><i
                                                                class="ri-pencil-line"></i></button> <button
                                                            aria-label="button" type="button"
                                                            class="btn btn-sm btn-success-light btn-icon"><i
                                                                class="ri-delete-bin-line"></i></button> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-3"> <span class="avatar avatar-rounded"> <img
                                                                    src="../assets/images/faces/13.jpg" alt=""> </span>
                                                        </div>
                                                        <div> <span class="d-block fw-semibold mb-1">Gretchen Iox</span>
                                                            <span class="d-block text-muted fs-12">Manager</span> </div>
                                                    </div>
                                                </th>
                                                <td>gretchen.1.25@demo.com</td>
                                                <td> <select class="form-select" aria-label="Default select example">
                                                        <option value="1">Active</option>
                                                        <option value="2">In Active</option>
                                                    </select> </td>
                                                <td>
                                                    <div class="btn-list"> <button aria-label="button" type="button"
                                                            class="btn btn-sm btn-primary-light btn-icon"><i
                                                                class="ri-pencil-line"></i></button> <button
                                                            aria-label="button" type="button"
                                                            class="btn btn-sm btn-success-light btn-icon"><i
                                                                class="ri-delete-bin-line"></i></button> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-3"> <span class="avatar avatar-rounded"> <img
                                                                    src="../assets/images/faces/11.jpg" alt=""> </span>
                                                        </div>
                                                        <div> <span class="d-block fw-semibold mb-1">Gray Noal</span>
                                                            <span class="d-block text-muted fs-12">Manager</span> </div>
                                                    </div>
                                                </th>
                                                <td>gray12gray@demo.com</td>
                                                <td> <select class="form-select" aria-label="Default select example">
                                                        <option value="1">Active</option>
                                                        <option value="2">In Active</option>
                                                    </select> </td>
                                                <td>
                                                    <div class="btn-list"> <button aria-label="button" type="button"
                                                            class="btn btn-sm btn-primary-light btn-icon"><i
                                                                class="ri-pencil-line"></i></button> <button
                                                            aria-label="button" type="button"
                                                            class="btn btn-sm btn-success-light btn-icon"><i
                                                                class="ri-delete-bin-line"></i></button> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="border-bottom-0">
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-3"> <span class="avatar avatar-rounded"> <img
                                                                    src="../assets/images/faces/5.jpg" alt=""> </span>
                                                        </div>
                                                        <div> <span class="d-block fw-semibold mb-1">Isa Bella</span>
                                                            <span class="d-block text-muted fs-12">C.E.O</span> </div>
                                                    </div>
                                                </th>
                                                <td class="border-bottom-0">isa158@demo.com</td>
                                                <td class="border-bottom-0"> <select class="form-select"
                                                        aria-label="Default select example">
                                                        <option value="1">Active</option>
                                                        <option value="2">In Active</option>
                                                    </select> </td>
                                                <td class="border-bottom-0">
                                                    <div class="btn-list"> <button aria-label="button" type="button"
                                                            class="btn btn-sm btn-primary-light btn-icon"><i
                                                                class="ri-pencil-line"></i></button> <button
                                                            aria-label="button" type="button"
                                                            class="btn btn-sm btn-success-light btn-icon"><i
                                                                class="ri-delete-bin-line"></i></button> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End::row-2 -->
                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between flex-wrap">
                                <div class="card-title"> Bills Summary </div>
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
                                    <table class="table table-hover text-nowrap table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Invoice ID</th>
                                                <th scope="col">Client</th>
                                                <th scope="col">Due Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>#INV111611</td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2"> <span
                                                                class="avatar avatar-md avatar-rounded"> <img
                                                                    src="../assets/images/faces/1.jpg" alt=""> </span>
                                                        </div>
                                                        <div> <span class="d-block fw-semibold mb-1">Rena Mark</span>
                                                            <span class="text-muted fs-12">renamark123@demo</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> 14-05-2023 </td>
                                                <td> <span class="badge bg-success">Paid</span> </td>
                                                <td> $9,523 </td>
                                                <td>
                                                    <div class="btn-list"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-sm btn-icon btn-info-light"><i
                                                                class="ri-pencil-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-light"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>#INV111611</td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2"> <span
                                                                class="avatar avatar-md avatar-rounded"> <img
                                                                    src="../assets/images/faces/4.jpg" alt=""> </span>
                                                        </div>
                                                        <div> <span class="d-block fw-semibold mb-1">Xong Yun</span>
                                                            <span class="text-muted fs-12">xongyun2134@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> 14-05-2023 </td>
                                                <td> <span class="badge bg-warning">Pending</span> </td>
                                                <td> $8,243 </td>
                                                <td>
                                                    <div class="btn-list"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-sm btn-icon btn-info-light"><i
                                                                class="ri-pencil-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-light"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>#INV147852</td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2"> <span
                                                                class="avatar avatar-md avatar-rounded"> <img
                                                                    src="../assets/images/faces/6.jpg" alt=""> </span>
                                                        </div>
                                                        <div> <span class="d-block fw-semibold mb-1">Kane William</span>
                                                            <span class="text-muted fs-12">william154@demo</span> </div>
                                                    </div>
                                                </td>
                                                <td> 16-05-2023 </td>
                                                <td> <span class="badge bg-primary">Overdue</span> </td>
                                                <td> $5,234 </td>
                                                <td>
                                                    <div class="btn-list"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-sm btn-icon btn-info-light"><i
                                                                class="ri-pencil-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-light"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>#INV753159</td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2"> <span
                                                                class="avatar avatar-md avatar-rounded"> <img
                                                                    src="../assets/images/faces/12.jpg" alt=""> </span>
                                                        </div>
                                                        <div> <span class="d-block fw-semibold mb-1">Stewart Rem</span>
                                                            <span class="text-muted fs-12">remstew092@demo</span> </div>
                                                    </div>
                                                </td>
                                                <td> 21-05-2023 </td>
                                                <td> <span class="badge bg-success">Paid</span> </td>
                                                <td> $7,546 </td>
                                                <td>
                                                    <div class="btn-list"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-sm btn-icon btn-info-light"><i
                                                                class="ri-pencil-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-light"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>#INV369874</td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2"> <span
                                                                class="avatar avatar-md avatar-rounded"> <img
                                                                    src="../assets/images/faces/3.jpg" alt=""> </span>
                                                        </div>
                                                        <div> <span class="d-block fw-semibold mb-1">Elliot Yun</span>
                                                            <span class="text-muted fs-12">eiiliot000@demo</span> </div>
                                                    </div>
                                                </td>
                                                <td> 18-05-2023 </td>
                                                <td> <span class="badge bg-primary">Overdue</span> </td>
                                                <td> $7,541 </td>
                                                <td>
                                                    <div class="btn-list"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-sm btn-icon btn-info-light"><i
                                                                class="ri-pencil-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-light"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>#INV123456</td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2"> <span
                                                                class="avatar avatar-md avatar-rounded"> <img
                                                                    src="../assets/images/faces/5.jpg" alt=""> </span>
                                                        </div>
                                                        <div> <span class="d-block fw-semibold mb-1">Gretchen Xio</span>
                                                            <span class="text-muted fs-12">gretchenxio999@demo</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> 20-05-2023 </td>
                                                <td> <span class="badge bg-warning">Pending</span> </td>
                                                <td> $2,541 </td>
                                                <td>
                                                    <div class="btn-list"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-sm btn-icon btn-info-light"><i
                                                                class="ri-pencil-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-light"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
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
    <script src="../assets/libs/apexcharts/apexcharts.min.js"></script> <!-- HRM Dashboard JS -->
    <script src="../assets/js/hrm-dashboard.js"></script> <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script> <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>
</body>
<!-- Mirrored from spruko.com/demo/ynex/dist/html/index-8.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jun 2023 07:35:22 GMT -->

</html>