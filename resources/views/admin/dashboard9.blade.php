
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
                    <h1 class="page-title fw-semibold fs-18 mb-0">Stocks</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Stocks</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-md-flex d-block flex-wrap align-items-center justify-content-between">
                                    <div class="flex-fill">
                                        <ul class="nav nav-pills nav-style-3" role="tablist">
                                            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                                    role="tab" aria-current="page" href="#stocks-portfolio"
                                                    aria-selected="true">Portfolio</a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" role="tab"
                                                    aria-current="page" href="#stocks-market"
                                                    aria-selected="true">Market</a> </li>
                                        </ul>
                                    </div>
                                    <div
                                        class="d-flex flex-wrap align-items-center mt-md-0 mt-3 justify-content-evenly gap-4">
                                        <div class="text-md-end"> <span class="d-block fw-semibold">Total Value</span>
                                            <span class="text-primary">$8.89k</span> </div>
                                        <div class="text-md-end"> <span class="d-block fw-semibold">Market Value</span>
                                            <span class="text-warning">$15.9k</span> </div>
                                        <div class="text-md-end"> <span class="d-block fw-semibold">Yield</span> <span
                                                class="text-danger">3.4%</span> </div>
                                        <div class="text-md-end"> <span class="d-block fw-semibold">Dividend</span>
                                            <span class="text-info">$1.3k</span> </div>
                                        <div class="text-md-end"> <span class="d-block fw-semibold">Gain</span> <span
                                                class="text-success">$116</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
                <!-- Start::row-2 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tab-content">
                            <div class="tab-pane show active p-0 border-0" id="stocks-portfolio" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex gap-3 flex-wrap align-items-top justify-content-between">
                                                    <div class="flex-fill d-flex align-items-top mb-4 mb-sm-0">
                                                        <div class="me-3"> <span
                                                                class="avatar avatar-rounded bg-primary"> <i
                                                                    class="ti ti-wallet fs-16"></i> </span> </div>
                                                        <div> <span class="d-block text-muted">Total amount
                                                                Invested</span> <span
                                                                class="fs-16 fw-semibold">$23,8998.99</span> </div>
                                                    </div>
                                                    <div>
                                                        <div id="total-invested"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex gap-3 flex-wrap align-items-top justify-content-between">
                                                    <div class="flex-fill d-flex align-items-top mb-4 mb-sm-0">
                                                        <div class="me-3"> <span
                                                                class="avatar avatar-rounded bg-secondary"> <i
                                                                    class="ti ti-arrow-big-up-line fs-16"></i> </span>
                                                        </div>
                                                        <div> <span class="d-block text-muted">No Of Investments</span>
                                                            <span class="fs-16 fw-semibold">116</span> </div>
                                                    </div>
                                                    <div>
                                                        <div id="total-investments"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex gap-3 flex-wrap align-items-top justify-content-between">
                                                    <div class="flex-fill d-flex align-items-top mb-4 mb-sm-0">
                                                        <div class="me-3"> <span
                                                                class="avatar avatar-rounded bg-warning"> <i
                                                                    class="ti ti-wallet fs-16"></i> </span> </div>
                                                        <div> <span class="d-block text-muted">Portfolio Value</span>
                                                            <span class="fs-16 fw-semibold">$12,920.20<i
                                                                    class="ti ti-arrow-narrow-up ms-1 text-success"></i></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div id="portfolio-value"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex gap-3 flex-wrap align-items-top justify-content-between">
                                                    <div class="flex-fill d-flex align-items-top mb-4 mb-sm-0">
                                                        <div class="me-3"> <span
                                                                class="avatar avatar-rounded bg-success"> <i
                                                                    class="ti ti-wallet fs-16"></i> </span> </div>
                                                        <div> <span class="d-block text-muted">Returns Rate</span> <span
                                                                class="fs-16 fw-semibold">+12.08%<i
                                                                    class="ti ti-arrow-narrow-up ms-1 text-success"></i></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div id="returns-rate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-8">
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="card-title mb-2 mb-sm-0"> Total Investments </div>
                                                <div class="btn-group" role="group" aria-label="Basic example"> <button
                                                        type="button"
                                                        class="btn btn-primary btn-sm btn-wave waves-effect waves-light">1D</button>
                                                    <button type="button"
                                                        class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1W</button>
                                                    <button type="button"
                                                        class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1M</button>
                                                    <button type="button"
                                                        class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">3M</button>
                                                    <button type="button"
                                                        class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">6M</button>
                                                    <button type="button"
                                                        class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1Y</button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div
                                                    class="d-flex alilgn-items-center justify-content-between gap-3 flex-wrap">
                                                    <div class="d-flex flex-wrap flex-fill gap-3 ms-sm-5 ms-0">
                                                        <div> <span class="d-block text-muted mb-1">Invested
                                                                Value</span> <span
                                                                class="d-block fw-semibold">$1,290.94<span
                                                                    class="text-success ms-1 fs-12"><i
                                                                        class="ti ti-chevron-up"></i>1.22%</span></span>
                                                        </div>
                                                        <div> <span class="d-block text-muted mb-1">Total Returns</span>
                                                            <span class="d-block fw-semibold">$25,458.20<span
                                                                    class="text-success ms-1 fs-12"><i
                                                                        class="ti ti-chevron-up"></i>10.14%</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-wrap gap-3 text-end">
                                                        <div> <span class="d-block text-muted mb-1">Today Change</span>
                                                            <span class="d-block fw-semibold">$112.09</span> </div>
                                                        <div> <span class="d-block text-muted mb-1">Change In %</span>
                                                            <span class="d-block fw-semibold">+0.01%<span
                                                                    class="text-success ms-1 fs-12"><i
                                                                        class="ti ti-chevron-up"></i>0.21%</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="totalInvestmentsStats"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="card-title"> My Stocks </div>
                                                <div class="d-flex flex-wrap gap-2">
                                                    <div class="mb-2 mb-sm-0"> <input
                                                            class="form-control form-control-sm" type="text"
                                                            placeholder="Search Any Stock"
                                                            aria-label=".form-control-sm example"> </div>
                                                    <div class="dropdown"> <a href="javascript:void(0);"
                                                            class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light"
                                                            data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i
                                                                class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                        </a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">New</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Popular</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Relevant</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <ul class="list-unstyled my-stocks-ul mb-0">
                                                    <li>
                                                        <div class="d-flex align-items-center flex-fill lh-1">
                                                            <div class="me-2"> <span
                                                                    class="avatar avatar-rounded bg-light p-2"> <i
                                                                        class="bi bi-github text-dark fs-18"></i>
                                                                </span> </div>
                                                            <div class="lh-1 flex-fill"> <span
                                                                    class="fw-semibold d-block mb-2">GTHB (Gituhb, Demo
                                                                    Inc.)</span> <span
                                                                    class="d-block text-muted fs-12">16 Shares</span>
                                                            </div>
                                                            <div class="text-end me-3"> <span
                                                                    class="d-block fw-semibold mb-1"> $12,390.02 </span>
                                                                <span class="d-block text-success"><i
                                                                        class="ti ti-arrow-narrow-up"></i>0.14%</span>
                                                            </div>
                                                            <div> <span class="fs-14"> <i
                                                                        class="bi bi-star-fill text-muted op-5"></i>
                                                                </span> </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center flex-fill lh-1">
                                                            <div class="me-2"> <span
                                                                    class="avatar avatar-rounded bg-light p-2"> <i
                                                                        class="bi bi-twitter text-info fs-18"></i>
                                                                </span> </div>
                                                            <div class="lh-1 flex-fill"> <span
                                                                    class="fw-semibold d-block mb-2">TTR (Twiter.com,
                                                                    Inc.)</span> <span
                                                                    class="d-block text-muted fs-12">289 Shares</span>
                                                            </div>
                                                            <div class="text-end me-3"> <span
                                                                    class="d-block fw-semibold mb-1"> $15,526.01 </span>
                                                                <span class="d-block text-success"><i
                                                                        class="ti ti-arrow-narrow-up"></i>2.14%</span>
                                                            </div>
                                                            <div> <span class="fs-14"> <i
                                                                        class="bi bi-star text-muted op-5"></i> </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center flex-fill lh-1">
                                                            <div class="me-2"> <span
                                                                    class="avatar avatar-rounded bg-light p-2"> <i
                                                                        class="bi bi-bootstrap-fill text-primary fs-18"></i>
                                                                </span> </div>
                                                            <div class="lh-1 flex-fill"> <span
                                                                    class="fw-semibold d-block mb-2">BS (Boostrap,
                                                                    Inc.)</span> <span
                                                                    class="d-block text-muted fs-12">325 shares</span>
                                                            </div>
                                                            <div class="text-end me-3"> <span
                                                                    class="d-block fw-semibold mb-1"> $30,500.15 </span>
                                                                <span class="d-block text-danger"><i
                                                                        class="ti ti-arrow-narrow-down"></i>2.73%</span>
                                                            </div>
                                                            <div> <span class="fs-14"> <i
                                                                        class="bi bi-star-fill text-muted op-5"></i>
                                                                </span> </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center flex-fill lh-1">
                                                            <div class="me-2"> <span
                                                                    class="avatar avatar-rounded bg-light p-2"> <i
                                                                        class="bi bi-windows text-success fs-18"></i>
                                                                </span> </div>
                                                            <div class="lh-1 flex-fill"> <span
                                                                    class="fw-semibold d-block mb-2">MS (Micorsoft,
                                                                    Inc.)</span> <span
                                                                    class="d-block text-muted fs-12">1,523 shares</span>
                                                            </div>
                                                            <div class="text-end me-3"> <span
                                                                    class="d-block fw-semibold mb-1"> $1,80,520.02
                                                                </span> <span class="d-block text-success"><i
                                                                        class="ti ti-arrow-narrow-up"></i>8.63%</span>
                                                            </div>
                                                            <div> <span class="fs-14"> <i
                                                                        class="bi bi-star text-muted op-5"></i> </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center flex-fill lh-1">
                                                            <div class="me-2"> <span
                                                                    class="avatar avatar-rounded bg-light p-2"> <i
                                                                        class="bi bi-apple text-warning fs-18"></i>
                                                                </span> </div>
                                                            <div class="lh-1 flex-fill"> <span
                                                                    class="fw-semibold d-block mb-2">AAPL (Appil,
                                                                    Inc.)</span> <span
                                                                    class="d-block text-muted fs-12">30 shares</span>
                                                            </div>
                                                            <div class="text-end me-3"> <span
                                                                    class="d-block fw-semibold mb-1"> $21,093.20 </span>
                                                                <span class="d-block text-danger"><i
                                                                        class="ti ti-arrow-narrow-down"></i>4.10%</span>
                                                            </div>
                                                            <div> <span class="fs-14"> <i
                                                                        class="bi bi-star-fill text-muted op-5"></i>
                                                                </span> </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center flex-fill lh-1">
                                                            <div class="me-2"> <span
                                                                    class="avatar avatar-rounded bg-light p-2"> <i
                                                                        class="bi bi-currency-bitcoin text-danger fs-18"></i>
                                                                </span> </div>
                                                            <div class="lh-1 flex-fill"> <span
                                                                    class="fw-semibold d-block mb-2">Bitcoin (Bioset
                                                                    Coin, Inc.)</span> <span
                                                                    class="d-block text-muted fs-12">118 shares</span>
                                                            </div>
                                                            <div class="text-end me-3"> <span
                                                                    class="d-block fw-semibold mb-1"> $14,245.23 </span>
                                                                <span class="d-block text-success"><i
                                                                        class="ti ti-arrow-narrow-up"></i>0.79%</span>
                                                            </div>
                                                            <div> <span class="fs-14"> <i
                                                                        class="bi bi-star-fill text-muted op-5"></i>
                                                                </span> </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h6 class="fw-semibold mb-3"> Trending Stocks : </h6>
                                        <div class="row">
                                            <div class="col-xxl-2 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="p-3 card custom-card border bg-white rounded">
                                                    <div
                                                        class="d-flex gap-2 flex-wrap align-items-center justify-content-between mb-3">
                                                        <div class="d-flex flex-fill align-items-center">
                                                            <div class="me-2"> <span
                                                                    class="avatar avatar-rounded bg-light p-2"> <i
                                                                        class="bi bi-apple text-muted fs-18"></i>
                                                                </span> </div>
                                                            <div class="lh-1"> <span
                                                                    class="fw-semibold d-block mb-2 text-default">Apple</span>
                                                                <span class="d-block text-muted fs-12">$12,289.44</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-success fs-12 text-end"> <span
                                                                class="d-block">0.14%<i
                                                                    class="ti ti-arrow-bear-right"></i></span> <span
                                                                class="d-block">+$1,780.80</span> </div>
                                                    </div>
                                                    <div class="d-flex gap-2"> <button type="button"
                                                            class="btn btn-sm btn-light flex-fill">Short</button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-primary-light flex-fill">Buy</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="p-3 card custom-card border bg-white rounded">
                                                    <div
                                                        class="d-flex gap-2 flex-wrap align-items-center justify-content-between mb-3">
                                                        <div class="d-flex flex-fill align-items-center">
                                                            <div class="me-2"> <span
                                                                    class="avatar avatar-rounded bg-light p-2"> <i
                                                                        class="bi bi-currency-bitcoin text-warning fs-18"></i>
                                                                </span> </div>
                                                            <div class="lh-1"> <span
                                                                    class="fw-semibold d-block mb-2 text-default">Bitcoin</span>
                                                                <span class="d-block text-muted fs-12">$58,151.02</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-success fs-12 text-end"> <span
                                                                class="d-block">2.14%<i
                                                                    class="ti ti-arrow-bear-right"></i></span> <span
                                                                class="d-block">+$5,745.62</span> </div>
                                                    </div>
                                                    <div class="d-flex gap-2"> <button type="button"
                                                            class="btn btn-sm btn-light flex-fill">Short</button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-primary-light flex-fill">Buy</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="p-3 card custom-card border bg-white rounded">
                                                    <div
                                                        class="d-flex gap-2 flex-wrap align-items-center justify-content-between mb-3">
                                                        <div class="d-flex flex-fill align-items-center">
                                                            <div class="me-2"> <span
                                                                    class="avatar avatar-rounded bg-light p-2"> <i
                                                                        class="bi bi-card-list text-success fs-18"></i>
                                                                </span> </div>
                                                            <div class="lh-1"> <span
                                                                    class="fw-semibold d-block mb-2 text-default">Tesla</span>
                                                                <span class="d-block text-muted fs-12">$14,452.36</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-success fs-12 text-end"> <span
                                                                class="d-block">4.02%<i
                                                                    class="ti ti-arrow-bear-right"></i></span> <span
                                                                class="d-block">+$4,125.63</span> </div>
                                                    </div>
                                                    <div class="d-flex gap-2"> <button type="button"
                                                            class="btn btn-sm btn-light flex-fill">Short</button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-primary-light flex-fill">Buy</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="p-3 card custom-card border bg-white rounded">
                                                    <div
                                                        class="d-flex gap-2 flex-wrap align-items-center justify-content-between mb-3">
                                                        <div class="d-flex flex-fill align-items-center">
                                                            <div class="me-2"> <span
                                                                    class="avatar avatar-rounded bg-light p-2"> <i
                                                                        class="bi bi-gift text-primary fs-18"></i>
                                                                </span> </div>
                                                            <div class="lh-1"> <span
                                                                    class="fw-semibold d-block mb-2 text-default">Amazon</span>
                                                                <span class="d-block text-muted fs-12">$63,251.11</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-success fs-12 text-end"> <span
                                                                class="d-block">5.14%<i
                                                                    class="ti ti-arrow-bear-right"></i></span> <span
                                                                class="d-block">+$936.30</span> </div>
                                                    </div>
                                                    <div class="d-flex gap-2"> <button type="button"
                                                            class="btn btn-sm btn-light flex-fill">Short</button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-primary-light flex-fill">Buy</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="p-3 card custom-card border bg-white rounded">
                                                    <div
                                                        class="d-flex flex-wrap align-items-center justify-content-between mb-3">
                                                        <div class="d-flex flex-fill align-items-center">
                                                            <div class="me-2"> <span
                                                                    class="avatar avatar-rounded bg-light p-2"> <i
                                                                        class="bi bi-truck text-danger fs-18"></i>
                                                                </span> </div>
                                                            <div class="lh-1"> <span
                                                                    class="fw-semibold d-block mb-2 text-default">Aliexpress</span>
                                                                <span class="d-block text-muted fs-12">$5,401.50</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-success fs-12 text-end"> <span
                                                                class="d-block">3.32%<i
                                                                    class="ti ti-arrow-bear-right"></i></span> <span
                                                                class="d-block">+$4,360.65</span> </div>
                                                    </div>
                                                    <div class="d-flex gap-2"> <button type="button"
                                                            class="btn btn-sm btn-light flex-fill">Short</button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-primary-light flex-fill">Buy</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="p-3 card custom-card border bg-white rounded">
                                                    <div
                                                        class="d-flex flex-wrap align-items-center justify-content-between mb-3">
                                                        <div class="d-flex flex-fill align-items-center">
                                                            <div class="me-2"> <span
                                                                    class="avatar avatar-rounded bg-light p-2"> <i
                                                                        class="bi bi-phone text-secondary fs-18"></i>
                                                                </span> </div>
                                                            <div class="lh-1"> <span
                                                                    class="fw-semibold d-block mb-2 text-default">Samsung</span>
                                                                <span class="d-block text-muted fs-12">$10,732.12</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-success fs-12 text-end"> <span
                                                                class="d-block">1.24%<i
                                                                    class="ti ti-arrow-bear-right"></i></span> <span
                                                                class="d-block">+$3,221.29</span> </div>
                                                    </div>
                                                    <div class="d-flex gap-2"> <button type="button"
                                                            class="btn btn-sm btn-light flex-fill">Short</button>
                                                        <button type="button"
                                                            class="btn btn-sm btn-primary-light flex-fill">Buy</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="card-title"> Transaction History </div>
                                                <div class="dropdown"> <a href="javascript:void(0);"
                                                        class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light"
                                                        data-bs-toggle="dropdown" aria-expanded="false"> All<i
                                                            class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Buy</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Sell</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table text-nowrap table-bordered border-primary">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Symbol</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Type</th>
                                                                <th scope="col">Amount</th>
                                                                <th scope="col">Shares</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row"> EPA:THI </th>
                                                                <td> 12-06-2023 </td>
                                                                <td> <span class="badge bg-primary">Buy</span> </td>
                                                                <td> <span class="text-danger">-$1,290</span> </td>
                                                                <td> <span class="text-success">+20</span> </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"> EPA:SCB </th>
                                                                <td> 11-06-2023 </td>
                                                                <td> <span class="badge bg-primary">Buy</span> </td>
                                                                <td> <span class="text-danger">-$2,150</span> </td>
                                                                <td> <span class="text-success">+15</span> </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"> EPA:CGIO </th>
                                                                <td> 11-06-2023 </td>
                                                                <td> <span class="badge bg-warning">Sell</span> </td>
                                                                <td> <span class="text-success">+$22,625</span> </td>
                                                                <td> <span class="text-danger">-12</span> </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"> EPA:NTIX </th>
                                                                <td> 05-06-2023 </td>
                                                                <td> <span class="badge bg-primary">Buy</span> </td>
                                                                <td> <span class="text-danger">-$3,680</span> </td>
                                                                <td> <span class="text-success">+36</span> </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"> EPA:MOD </th>
                                                                <td> 20-05-2023 </td>
                                                                <td> <span class="badge bg-warning">Sell</span> </td>
                                                                <td> <span class="text-success">+$30,750</span> </td>
                                                                <td> <span class="text-danger">-25</span> </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="card-title"> Market Movers </div>
                                                <div class="d-flex flex-wrap gap-2">
                                                    <div class="me-2"> <input class="form-control form-control-sm"
                                                            type="text" placeholder="Search Any Stock"
                                                            aria-label=".form-control-sm example"> </div>
                                                    <div class="dropdown"> <a href="javascript:void(0);"
                                                            class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light"
                                                            data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i
                                                                class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                        </a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">New</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Popular</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Relevant</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table text-nowrap table-bordered border-primary">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Symbol</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Price</th>
                                                                <th scope="col">1D Change</th>
                                                                <th scope="col">1D Return %</th>
                                                                <th scope="col">Volume</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row"> APPL </th>
                                                                <td> App1e Inc.<span
                                                                        class="fw-normal text-primary fs-10 ms-1">NASDAQ</span>
                                                                </td>
                                                                <td> <span>$1,116.90</span> </td>
                                                                <td> <span class="text-success">$28.9<i
                                                                            class="ti ti-arrow-bear-right"></i></span>
                                                                </td>
                                                                <td> <span class="text-success">6.8%</span> </td>
                                                                <td> 12,389.30 </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"> TTR </th>
                                                                <td> Twiter.com Inc.<span
                                                                        class="fw-normal text-primary fs-10 ms-1">NYSE</span>
                                                                </td>
                                                                <td> <span>$993.21</span> </td>
                                                                <td> <span class="text-success">$11.6<i
                                                                            class="ti ti-arrow-bear-right"></i></span>
                                                                </td>
                                                                <td> <span class="text-success">10.25%</span> </td>
                                                                <td> 32,125.03 </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"> BS </th>
                                                                <td> Boostrap.com.<span
                                                                        class="fw-normal text-primary fs-10 ms-1">NSE</span>
                                                                </td>
                                                                <td> <span>$11.00</span> </td>
                                                                <td> <span class="text-danger">$16.0<i
                                                                            class="ti ti-arrow-narrow-down"></i></span>
                                                                </td>
                                                                <td> <span class="text-danger">9.0%</span> </td>
                                                                <td> 27,911.16 </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"> NFLX </th>
                                                                <td> Netfilx.com Inc.<span
                                                                        class="fw-normal text-primary fs-10 ms-1">LSE</span>
                                                                </td>
                                                                <td> <span>$161.72</span> </td>
                                                                <td> <span class="text-danger">$9.8<i
                                                                            class="ti ti-arrow-narrow-down"></i></span>
                                                                </td>
                                                                <td> <span class="text-danger">17.8%</span> </td>
                                                                <td> 27,161.89 </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"> ION </th>
                                                                <td> Ion.com Corp.<span
                                                                        class="fw-normal text-primary fs-10 ms-1">FSX</span>
                                                                </td>
                                                                <td> <span>$52.65</span> </td>
                                                                <td> <span class="text-success">$14.2<i
                                                                            class="ti ti-arrow-bear-right"></i></span>
                                                                </td>
                                                                <td> <span class="text-success">30.2%</span> </td>
                                                                <td> 65,785.01 </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane p-0 border-0" id="stocks-market" role="tabpanel">
                                <div class="row">
                                    <div class="col-xxl-2 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"> <span class="avatar bg-danger-transparent">
                                                                <i class="ti ti-trending-down fs-18"></i> </span> </div>
                                                        <div> <span class="d-block fw-semibold">Nifty 50</span> <span
                                                                class="d-block">$12,289.44</span> </div>
                                                    </div>
                                                    <div class="text-end text-danger fs-12"> <span
                                                            class="d-block">-0.14%</span> <span
                                                            class="d-block">-$1,780.80</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"> <span class="avatar bg-danger-transparent">
                                                                <i class="ti ti-trending-down fs-18"></i> </span> </div>
                                                        <div> <span class="d-block fw-semibold">SENSEX</span> <span
                                                                class="d-block">$12,289.44</span> </div>
                                                    </div>
                                                    <div class="text-end text-danger fs-12"> <span
                                                            class="d-block">-0.14%</span> <span
                                                            class="d-block">-$1,780.80</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"> <span class="avatar bg-success-transparent">
                                                                <i class="ti ti-trending-up fs-18"></i> </span> </div>
                                                        <div> <span class="d-block fw-semibold">DJIA</span> <span
                                                                class="d-block">$12,289.44</span> </div>
                                                    </div>
                                                    <div class="text-end text-danger fs-12"> <span
                                                            class="d-block">-0.14%</span> <span
                                                            class="d-block">-$1,780.80</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"> <span class="avatar bg-danger-transparent">
                                                                <i class="ti ti-trending-up fs-18"></i> </span> </div>
                                                        <div> <span class="d-block fw-semibold">S&amp;P 500</span> <span
                                                                class="d-block">$12,289.44</span> </div>
                                                    </div>
                                                    <div class="text-end text-danger fs-12"> <span
                                                            class="d-block">-0.14%</span> <span
                                                            class="d-block">-$1,780.80</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"> <span class="avatar bg-success-transparent">
                                                                <i class="ti ti-trending-up fs-18"></i> </span> </div>
                                                        <div> <span class="d-block fw-semibold">NASDAQ</span> <span
                                                                class="d-block">$12,289.44</span> </div>
                                                    </div>
                                                    <div class="text-end text-danger fs-12"> <span
                                                            class="d-block">-0.14%</span> <span
                                                            class="d-block">-$1,780.80</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <div class="card custom-card">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"> <span class="avatar bg-success-transparent">
                                                                <i class="ti ti-trending-up fs-18"></i> </span> </div>
                                                        <div> <span class="d-block fw-semibold">NIFTY IT</span> <span
                                                                class="d-block">$12,289.44</span> </div>
                                                    </div>
                                                    <div class="text-end text-danger fs-12"> <span
                                                            class="d-block">-0.14%</span> <span
                                                            class="d-block">-$1,780.80</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="card-title"> Market Cap </div>
                                                <div> <input class="form-control form-control-sm" type="text"
                                                        placeholder="Search Any Stock Here"
                                                        aria-label=".form-control-sm example"> </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-xl-7 border-end">
                                                        <div class="p-3">
                                                            <div
                                                                class="d-flex flex-wrap alilgn-items-center justify-content-between">
                                                                <div class="d-flex flex-fill gap-3 ms-5">
                                                                    <div>
                                                                        <h5 class="fw-semibold text-primary">
                                                                            $12,390.02<span
                                                                                class="fs-12 ms-1 text-danger">0.14%<i
                                                                                    class="ti ti-trending-down ms-1"></i></span>
                                                                        </h5> <span
                                                                            class="d-block text-muted mb-1 fs-12"><span
                                                                                class="text-danger me-1">-89.75</span>.
                                                                            Today</span> <span
                                                                            class="d-block text-muted fs-11">Jun 17,
                                                                            2023 11:25 AM UTC +5:30</span>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex text-end">
                                                                    <div>
                                                                        <h6 class="fw-semibold">GITUHB</h6> <span
                                                                            class="d-block text-muted fs-11 mb-1">GTHB
                                                                            INDEXNSE</span> <span class="d-block"><a
                                                                                href="javascript:void(0);"
                                                                                class="text-primary fw-semibold">+
                                                                                Compare</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="stocks-marketcap"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5">
                                                        <div class="p-3">
                                                            <div class="table-responsive mb-5">
                                                                <table
                                                                    class="table text-nowrap table-borderless table-sm text-muted">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Open</th>
                                                                            <td>125.80</td>
                                                                            <td>Volume</td>
                                                                            <td>1,253.20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">High</th>
                                                                            <td>352.15</td>
                                                                            <td>Avg. Volume</td>
                                                                            <td>1.05M</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Low</th>
                                                                            <td>120.13</td>
                                                                            <td>52 Week High</td>
                                                                            <td>2569.25</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Dividend Yield</th>
                                                                            <td>3.5%</td>
                                                                            <td>52 Week Low</td>
                                                                            <td>1586.20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">P/E Ratio</th>
                                                                            <td>25%</td>
                                                                            <td>Market Cap</td>
                                                                            <td>2.15Cr</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div>
                                                                <h6 class="fw-semibold mb-2"> Market Depth: </h6>
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table text-nowrap table-sm text-center table-borderless text-muted">
                                                                                <thead class="text-default bg-light">
                                                                                    <tr>
                                                                                        <th scope="col">Qty</th>
                                                                                        <th scope="col">Orders</th>
                                                                                        <th scope="col">Bid</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row"> <span
                                                                                                class="text-success">20</span>
                                                                                        </th>
                                                                                        <td>2</td>
                                                                                        <td>$12,908</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row"> <span
                                                                                                class="text-success">12</span>
                                                                                        </th>
                                                                                        <td>1</td>
                                                                                        <td>$20,632</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row"> <span
                                                                                                class="text-success">36</span>
                                                                                        </th>
                                                                                        <td>1</td>
                                                                                        <td>$19,102</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row"> <span
                                                                                                class="text-success">10</span>
                                                                                        </th>
                                                                                        <td>3</td>
                                                                                        <td>$16,650</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row"> <span
                                                                                                class="text-success">15</span>
                                                                                        </th>
                                                                                        <td>2</td>
                                                                                        <td>$18,850</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="table-responsive mb-3">
                                                                            <table
                                                                                class="table text-nowrap table-sm text-center table-borderless text-muted">
                                                                                <thead class="text-default bg-light">
                                                                                    <tr>
                                                                                        <th scope="col">Qty</th>
                                                                                        <th scope="col">Orders</th>
                                                                                        <th scope="col">Bid</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row"> <span
                                                                                                class="text-danger">20</span>
                                                                                        </th>
                                                                                        <td>2</td>
                                                                                        <td>$12,908</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row"> <span
                                                                                                class="text-danger">12</span>
                                                                                        </th>
                                                                                        <td>1</td>
                                                                                        <td>$20,632</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row"> <span
                                                                                                class="text-danger">36</span>
                                                                                        </th>
                                                                                        <td>1</td>
                                                                                        <td>$19,102</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row"> <span
                                                                                                class="text-danger">10</span>
                                                                                        </th>
                                                                                        <td>3</td>
                                                                                        <td>$16,650</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row"> <span
                                                                                                class="text-danger">15</span>
                                                                                        </th>
                                                                                        <td>2</td>
                                                                                        <td>$18,850</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="d-flex gap-3"> <button type="button"
                                                                                class="flex-fill btn btn-sm btn-primary btn-wave">Buy</button>
                                                                            <button type="button"
                                                                                class="flex-fill btn btn-sm btn-secondary btn-wave">Sell</button>
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
                            </div>
                        </div>
                    </div>
                </div> <!-- End::row-2 -->
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
    <script src="../assets/js/stocks-dashboard.js"></script> <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script> <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>
</body>
<!-- Mirrored from spruko.com/demo/ynex/dist/html/index-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jun 2023 07:35:22 GMT -->

</html>