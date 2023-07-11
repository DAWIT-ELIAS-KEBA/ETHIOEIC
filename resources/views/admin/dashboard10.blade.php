
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
                    <h1 class="page-title fw-semibold fs-18 mb-0">Courses</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Courses</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xxl-7 col-xl-7 col-lg-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Top Categories </div>
                                        <div> <button type="button" class="btn btn-light btn-wave btn-sm">View
                                                All</button> </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row gy-xl-0 gy-3">
                                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div> <a href="javascript:void(0);"
                                                        class="category-link primary text-center"> <svg
                                                            xmlns="http://www.w3.org/2000/svg" class="category-svg"
                                                            viewBox="0 0 24 24">
                                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                            <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z"
                                                                opacity=".3"></path>
                                                            <path
                                                                d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z">
                                                            </path>
                                                        </svg>
                                                        <p class="fs-14 mb-1 text-default fw-semibold">UI/UX Design</p>
                                                        <span class="fs-11 text-muted">1000+ Courses</span>
                                                    </a> </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div> <a href="javascript:void(0);"
                                                        class="category-link secondary text-center"> <svg
                                                            xmlns="http://www.w3.org/2000/svg" class="category-svg"
                                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                            <g>
                                                                <rect fill="none" height="24" width="24"></rect>
                                                            </g>
                                                            <g>
                                                                <g opacity=".3">
                                                                    <path
                                                                        d="M6.71,18.71c-0.28,0.28-2.17,0.76-2.17,0.76s0.47-1.88,0.76-2.17C5.47,17.11,5.72,17,6,17c0.55,0,1,0.45,1,1 C7,18.28,6.89,18.53,6.71,18.71z M7.41,10.83L5.5,10.01l1.97-1.97l1.44,0.29C8.34,9.16,7.83,10.03,7.41,10.83z M13.99,18.5 l-0.82-1.91c0.8-0.42,1.67-0.93,2.49-1.5l0.29,1.44L13.99,18.5z M19.99,4.01c0,0-3.55-0.69-8.23,3.99 c-1.32,1.32-2.4,3.38-2.73,4.04l2.93,2.93c0.65-0.32,2.71-1.4,4.04-2.73C20.68,7.56,19.99,4.01,19.99,4.01z M15,11 c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C17,10.1,16.1,11,15,11z">
                                                                    </path>
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="M6,15c-0.83,0-1.58,0.34-2.12,0.88C2.7,17.06,2,22,2,22s4.94-0.7,6.12-1.88C8.66,19.58,9,18.83,9,18C9,16.34,7.66,15,6,15 z M6.71,18.71c-0.28,0.28-2.17,0.76-2.17,0.76s0.47-1.88,0.76-2.17C5.47,17.11,5.72,17,6,17c0.55,0,1,0.45,1,1 C7,18.28,6.89,18.53,6.71,18.71z M17.42,13.65L17.42,13.65c6.36-6.36,4.24-11.31,4.24-11.31s-4.95-2.12-11.31,4.24l-2.49-0.5 C7.21,5.95,6.53,6.16,6.05,6.63L2,10.69l5,2.14L11.17,17l2.14,5l4.05-4.05c0.47-0.47,0.68-1.15,0.55-1.81L17.42,13.65z M7.41,10.83L5.5,10.01l1.97-1.97l1.44,0.29C8.34,9.16,7.83,10.03,7.41,10.83z M13.99,18.5l-0.82-1.91 c0.8-0.42,1.67-0.93,2.49-1.5l0.29,1.44L13.99,18.5z M16,12.24c-1.32,1.32-3.38,2.4-4.04,2.73l-2.93-2.93 c0.32-0.65,1.4-2.71,2.73-4.04c4.68-4.68,8.23-3.99,8.23-3.99S20.68,7.56,16,12.24z M15,11c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2 S13.9,11,15,11z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <p class="fs-14 mb-1 text-default fw-semibold">Digital Marketing
                                                        </p><span class="fs-11 text-muted">90+ Courses</span>
                                                    </a> </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div> <a href="javascript:void(0);"
                                                        class="category-link warning text-center"> <svg
                                                            xmlns="http://www.w3.org/2000/svg" class="category-svg"
                                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24"
                                                            id="swatchbook">
                                                            <path opacity="0.2"
                                                                d="M9 22H5a3.003 3.003 0 0 1-3-3V5a3.003 3.003 0 0 1 3-3h4a3.003 3.003 0 0 1 3 3v14a3.003 3.003 0 0 1-3 3z">
                                                            </path>
                                                            <path opacity="0.4"
                                                                d="m20.293 6.535-2.828-2.828a3.004 3.004 0 0 0-4.243 0l-1.229 1.228c0 .022.007.043.007.065v14c0 .027-.007.052-.008.08l8.301-8.302a3.004 3.004 0 0 0 0-4.243z">
                                                            </path>
                                                            <circle cx="7" cy="17" r="1" opacity="1"></circle>
                                                            <path opacity="1"
                                                                d="m19.065 12.007-7.073 7.072c0-.027.008-.052.008-.079a3.003 3.003 0 0 1-3 3h10a3.003 3.003 0 0 0 3-3v-4a3 3 0 0 0-2.935-2.993z">
                                                            </path>
                                                        </svg>
                                                        <p class="fs-14 mb-1 text-default fw-semibold">Web Development
                                                        </p><span class="fs-11 text-muted">250+ Courses</span>
                                                    </a> </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div> <a href="javascript:void(0);" class="category-link success"> <svg
                                                            xmlns="http://www.w3.org/2000/svg" class="category-svg"
                                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                            <rect fill="none" height="24" width="24"></rect>
                                                            <g opacity=".3">
                                                                <path
                                                                    d="M10,5h4v14h-4V5z M4,11h4v8H4V11z M20,19h-4v-6h4V19z">
                                                                </path>
                                                            </g>
                                                            <g>
                                                                <path
                                                                    d="M16,11V3H8v6H2v12h20V11H16z M10,5h4v14h-4V5z M4,11h4v8H4V11z M20,19h-4v-6h4V19z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <p class="fs-14 mb-1 text-default fw-semibold">Stocks &amp;
                                                            Trading</p><span class="fs-11 text-muted">100+
                                                            Courses</span>
                                                    </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Earnings Report</div>
                                        <div class="btn-group" role="group" aria-label="Basic example"> <button
                                                type="button" class="btn btn-primary btn-sm btn-wave">1M</button>
                                            <button type="button"
                                                class="btn btn-primary-light btn-sm btn-wave">6M</button> <button
                                                type="button" class="btn btn-primary-light btn-sm btn-wave">1Y</button>
                                            <button type="button"
                                                class="btn btn-primary-light btn-sm btn-wave">All</button> </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="courses-earnings"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-12">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-top gap-2">
                                            <div class="me-1"> <span class="avatar avatar-lg bg-primary"> <i
                                                        class="ti ti-wallet fs-20"></i> </span> </div>
                                            <div class="flex-fill">
                                                <h5 class="d-block fw-semibold fs-18 mb-1">$98,312</h5>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="text-muted fs-12">YTD Earnings</div>
                                                    <div class="text-success"><i
                                                            class="ti ti-trending-up fs-16 me-1 align-middle d-inline-flex"></i>+2.02%
                                                    </div>
                                                </div> <a href="javascript:void(0);" class="text-primary fs-12">View
                                                    All<i
                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2 align-items-top">
                                            <div class="me-1"> <span class="avatar avatar-lg bg-secondary"> <i
                                                        class="ti ti-users fs-20"></i> </span> </div>
                                            <div class="flex-fill">
                                                <h5 class="d-block fw-semibold fs-18 mb-1">35,393</h5>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="text-muted fs-12">Total Students</div>
                                                    <div class="text-danger"><i
                                                            class="ti ti-trending-down fs-16 me-1 align-middle d-inline-flex"></i>-0.24%
                                                    </div>
                                                </div> <a href="javascript:void(0);" class="text-secondary fs-12">View
                                                    All<i
                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2 align-items-top">
                                            <div class="me-1"> <span class="avatar avatar-lg bg-warning"> <i
                                                        class="ti ti-id fs-20"></i> </span> </div>
                                            <div class="flex-fill">
                                                <h5 class="d-block fw-semibold fs-18 mb-1">573</h5>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="text-muted fs-12">Total Instructors</div>
                                                    <div class="text-danger"><i
                                                            class="ti ti-trending-down fs-16 me-1 align-middle d-inline-flex"></i>-1.32%
                                                    </div>
                                                </div> <a href="javascript:void(0);" class="text-warning fs-12">View
                                                    All<i
                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2 align-items-top">
                                            <div class="me-1"> <span class="avatar avatar-lg bg-danger"> <i
                                                        class="ti ti-gift fs-20"></i> </span> </div>
                                            <div class="flex-fill">
                                                <h5 class="d-block fw-semibold fs-18 mb-1">2,389</h5>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="text-muted fs-12">Total Courses</div>
                                                    <div class="text-success"><i
                                                            class="ti ti-trending-up fs-16 me-1 align-middle d-inline-flex"></i>+0.89%
                                                    </div>
                                                </div> <a href="javascript:void(0);" class="text-danger fs-12">View
                                                    All<i
                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> My Courses </div>
                                        <div> <button type="button" class="btn btn-light btn-sm">View All</button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Course Title</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Duration</th>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Instructor</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-2"> <span
                                                                        class="align-items-center"></span> </div>
                                                                <div> ui/ux Designing </div>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-xs course-status-progress progress-animate me-2"
                                                                    role="progressbar" aria-valuenow="60"
                                                                    aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar progress-bar-striped bg-primary"
                                                                        style="width: 60%"></div>
                                                                </div>
                                                                <div>60%</div>
                                                            </div>
                                                        </td>
                                                        <td>3 Months</td>
                                                        <td><span class="badge bg-outline-primary">Full Time</span></td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-2"> <span
                                                                        class="avatar avatar-sm avatar-rounded"> <img
                                                                            src="../assets/images/faces/2.jpg" alt="">
                                                                    </span> </div>
                                                                <div class="fw-semibold">Sarah Taylor</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-2"> <span
                                                                        class="align-items-center"></span> </div>
                                                                <div> Project Management </div>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-xs course-status-progress progress-animate me-2"
                                                                    role="progressbar" aria-valuenow="100"
                                                                    aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar progress-bar-striped bg-success"
                                                                        style="width: 100%"></div>
                                                                </div>
                                                                <div>100%</div>
                                                            </div>
                                                        </td>
                                                        <td>45 Days</td>
                                                        <td><span class="badge bg-outline-success">Completed</span></td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-2"> <span
                                                                        class="avatar avatar-sm avatar-rounded"> <img
                                                                            src="../assets/images/faces/11.jpg" alt="">
                                                                    </span> </div>
                                                                <div class="fw-semibold">Jason Smith</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-2"> <span
                                                                        class="align-items-center"></span> </div>
                                                                <div> Python </div>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-xs course-status-progress progress-animate me-2"
                                                                    role="progressbar" aria-valuenow="38"
                                                                    aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar progress-bar-striped bg-warning"
                                                                        style="width: 38%"></div>
                                                                </div>
                                                                <div>38%</div>
                                                            </div>
                                                        </td>
                                                        <td>90 Days</td>
                                                        <td><span class="badge bg-outline-warning">Part Time</span></td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-2"> <span
                                                                        class="avatar avatar-sm avatar-rounded"> <img
                                                                            src="../assets/images/faces/14.jpg" alt="">
                                                                    </span> </div>
                                                                <div class="fw-semibold">Alex Perira</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-2"> <span
                                                                        class="align-items-center"></span> </div>
                                                                <div> Digital Marketing </div>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-xs course-status-progress progress-animate me-2"
                                                                    role="progressbar" aria-valuenow="75"
                                                                    aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar progress-bar-striped bg-info"
                                                                        style="width: 75%"></div>
                                                                </div>
                                                                <div>75%</div>
                                                            </div>
                                                        </td>
                                                        <td>24 Days</td>
                                                        <td><span class="badge bg-outline-info">Week End</span></td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-2"> <span
                                                                        class="avatar avatar-sm avatar-rounded"> <img
                                                                            src="../assets/images/faces/8.jpg" alt="">
                                                                    </span> </div>
                                                                <div class="fw-semibold">Kamala Singh</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-2"> <span
                                                                        class="align-items-center"></span> </div>
                                                                <div> Full Stack Development </div>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-xs course-status-progress progress-animate me-2"
                                                                    role="progressbar" aria-valuenow="55"
                                                                    aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar progress-bar-striped bg-primary"
                                                                        style="width: 55%"></div>
                                                                </div>
                                                                <div>55%</div>
                                                            </div>
                                                        </td>
                                                        <td>6 Months</td>
                                                        <td><span class="badge bg-outline-primary">Full Time</span></td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-2"> <span
                                                                        class="avatar avatar-sm avatar-rounded"> <img
                                                                            src="../assets/images/faces/4.jpg" alt="">
                                                                    </span> </div>
                                                                <div class="fw-semibold">Jessica Leon</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="border-bottom-0">
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-2"> <span
                                                                        class="align-items-center"></span> </div>
                                                                <div> Stocks &amp; Trading </div>
                                                            </div>
                                                        </th>
                                                        <td class="border-bottom-0">
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-xs course-status-progress progress-animate me-2"
                                                                    role="progressbar" aria-valuenow="29"
                                                                    aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar progress-bar-striped bg-danger"
                                                                        style="width: 29%"></div>
                                                                </div>
                                                                <div>29%</div>
                                                            </div>
                                                        </td>
                                                        <td class="border-bottom-0">1 Month</td>
                                                        <td class="border-bottom-0"><span
                                                                class="badge bg-outline-danger">Stopped</span></td>
                                                        <td class="border-bottom-0">
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-2"> <span
                                                                        class="avatar avatar-sm avatar-rounded"> <img
                                                                            src="../assets/images/faces/12.jpg" alt="">
                                                                    </span> </div>
                                                                <div class="fw-semibold">Israel Khan</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Top Instructors</div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled courses-instructors mb-0">
                                    <li>
                                        <div class="d-flex">
                                            <div class="d-flex flex-fill align-items-center">
                                                <div class="me-2"> <span class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/1.jpg" alt=""> </span> </div>
                                                <div> <span class="d-block fw-semibold">John Henry</span> <span
                                                        class="text-muted">M.Tech</span> </div>
                                            </div>
                                            <div class="text-end"> <span class="d-block text-primary fw-semibold">321
                                                    Classes</span> <span class="text-muted">Digital Marketing</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <div class="d-flex flex-fill align-items-center">
                                                <div class="me-2"> <span class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/5.jpg" alt=""> </span> </div>
                                                <div> <span class="d-block fw-semibold">Mortal Yun</span> <span
                                                        class="text-muted">P.H.D</span> </div>
                                            </div>
                                            <div class="text-end"> <span class="d-block text-primary fw-semibold">25
                                                    Classes</span> <span class="text-muted">Stocks &amp; Trading</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <div class="d-flex flex-fill align-items-center">
                                                <div class="me-2"> <span class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/8.jpg" alt=""> </span> </div>
                                                <div> <span class="d-block fw-semibold">Trex Con</span> <span
                                                        class="text-muted">MBBS</span> </div>
                                            </div>
                                            <div class="text-end"> <span class="d-block text-primary fw-semibold">39
                                                    Classes</span> <span class="text-muted">Science</span> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <div class="d-flex flex-fill align-items-center">
                                                <div class="me-2"> <span class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/12.jpg" alt=""> </span> </div>
                                                <div> <span class="d-block fw-semibold">Saiu Sarah</span> <span
                                                        class="text-muted">P.H.D</span> </div>
                                            </div>
                                            <div class="text-end"> <span class="d-block text-primary fw-semibold">11
                                                    Classes</span> <span class="text-muted">Science</span> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <div class="d-flex flex-fill align-items-center">
                                                <div class="me-2"> <span class="avatar avatar-rounded"> <img
                                                            src="../assets/images/faces/15.jpg" alt=""> </span> </div>
                                                <div> <span class="d-block fw-semibold">Ion Hau</span> <span
                                                        class="text-muted">M.Tech</span> </div>
                                            </div>
                                            <div class="text-end"> <span class="d-block text-primary fw-semibold">124
                                                    Classes</span> <span class="text-muted">Web Development</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> New Students </div>
                                <div> <button type="button" class="btn btn-sm btn-light">View All</button> </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="bg-light">
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Courses</th>
                                                <th scope="col">Completed</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"> <span class="avatar avatar-rounded"> <img
                                                                    src="../assets/images/faces/13.jpg" alt=""> </span>
                                                        </div>
                                                        <div> <span class="d-blockfw-semibold">Richard Dom</span> <span
                                                                class="d-block fs-12 text-muted">richarddom1116@demo.com</span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>9</td>
                                                <td>1</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                                class="ri-edit-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"> <span class="avatar avatar-rounded"> <img
                                                                    src="../assets/images/faces/5.jpg" alt=""> </span>
                                                        </div>
                                                        <div> <span class="d-blockfw-semibold">Alicia Keys</span> <span
                                                                class="d-block fs-12 text-muted">aliciakeys89@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>1</td>
                                                <td>0</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                                class="ri-edit-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"> <span class="avatar avatar-rounded"> <img
                                                                    src="../assets/images/faces/10.jpg" alt=""> </span>
                                                        </div>
                                                        <div> <span class="d-blockfw-semibold">Robert Brook</span> <span
                                                                class="d-block fs-12 text-muted">robertbrook95@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>15</td>
                                                <td>0</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                                class="ri-edit-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="border-bottom-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2"> <span class="avatar avatar-rounded"> <img
                                                                    src="../assets/images/faces/9.jpg" alt=""> </span>
                                                        </div>
                                                        <div> <span class="d-blockfw-semibold">Alex Boi</span> <span
                                                                class="d-block fs-12 text-muted">alexboi555@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="border-bottom-0">16</td>
                                                <td class="border-bottom-0">3</td>
                                                <td class="border-bottom-0">
                                                    <div class="hstack gap-2 fs-15"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                                class="ri-edit-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Payouts </div>
                                <div class="btn-group" role="group" aria-label="Basic example"> <button type="button"
                                        class="btn btn-primary btn-sm btn-wave waves-effect waves-light">1M</button>
                                    <button type="button"
                                        class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">6M</button>
                                    <button type="button"
                                        class="btn btn-primary-light btn-sm btn-wave waves-effect waves-light">1Y</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="course-payouts"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End::row-2 -->
                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Course List </div>
                                <div class="d-flex flex-wrap">
                                    <div class="me-3 my-1"> <input class="form-control form-control-sm" type="text"
                                            placeholder="Search Here" aria-label=".form-control-sm example"> </div>
                                    <div class="dropdown m-1"> <a href="javascript:void(0);"
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
                                    <table class="table text-nowrap table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Course</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Classes</th>
                                                <th scope="col">Last Updated</th>
                                                <th scope="col">Instructor</th>
                                                <th scope="col">Students</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 1 </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2"> <span class="avatar avatar-xs"> <img
                                                                    src="../assets/images/nft-images/1.png" alt="">
                                                            </span> </div>
                                                        <div>Ray Optics &amp; Optical Fibre Master Class</div>
                                                    </div>
                                                </td>
                                                <td> Science </td>
                                                <td> 20 </td>
                                                <td> 29-05-2023 </td>
                                                <td> Shin Opran </td>
                                                <td> 25 </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light"><i
                                                                class="ri-edit-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 2 </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2"> <span class="avatar avatar-xs"> <img
                                                                    src="../assets/images/nft-images/2.png" alt="">
                                                            </span> </div>
                                                        <div>Master Linear Alzebra Medium Level</div>
                                                    </div>
                                                </td>
                                                <td> Mathematics </td>
                                                <td> 90 </td>
                                                <td> 11-06-2023 </td>
                                                <td> Arya Neo </td>
                                                <td> 773 </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light"><i
                                                                class="ri-edit-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 3 </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2"> <span class="avatar avatar-xs"> <img
                                                                    src="../assets/images/nft-images/8.png" alt="">
                                                            </span> </div>
                                                        <div>Learn How To Trade And Invest For-Absolute Beginners</div>
                                                    </div>
                                                </td>
                                                <td> Stocks &amp; Trading </td>
                                                <td> 161 </td>
                                                <td> 10-06-2023 </td>
                                                <td> Sia Niu </td>
                                                <td> 51 </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light"><i
                                                                class="ri-edit-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 4 </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2"> <span class="avatar avatar-xs"> <img
                                                                    src="../assets/images/nft-images/7.png" alt="">
                                                            </span> </div>
                                                        <div>Digital Marketing Course from Scratch</div>
                                                    </div>
                                                </td>
                                                <td> Marketing </td>
                                                <td> 115 </td>
                                                <td> 21-06-2023 </td>
                                                <td> Stuart George </td>
                                                <td> 1,189 </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light"><i
                                                                class="ri-edit-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 5 </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2"> <span class="avatar avatar-xs"> <img
                                                                    src="../assets/images/nft-images/5.png" alt="">
                                                            </span> </div>
                                                        <div>Data Structures &amp; Algorithms For Beginners</div>
                                                    </div>
                                                </td>
                                                <td> Programming </td>
                                                <td> 30 </td>
                                                <td> 15-06-2023 </td>
                                                <td> Boran Ray </td>
                                                <td> 3,368 </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light"><i
                                                                class="ri-edit-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> 6 </td>
                                                <td>
                                                    <div class="d-flex align-items-center lh-1">
                                                        <div class="me-2"> <span class="avatar avatar-xs"> <img
                                                                    src="../assets/images/nft-images/6.png" alt="">
                                                            </span> </div>
                                                        <div>Css Zero to Hero Master Class</div>
                                                    </div>
                                                </td>
                                                <td> UI/UX </td>
                                                <td> 51 </td>
                                                <td> 22-06-2023 </td>
                                                <td> Burak Oin </td>
                                                <td> 252 </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-1"> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light"><i
                                                                class="ri-edit-line"></i></a> <a aria-label="anchor"
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex flex-wrap align-items-center">
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
    <script src="../assets/js/courses-dashboard.js"></script> <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script> <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>
</body>
<!-- Mirrored from spruko.com/demo/ynex/dist/html/index-10.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jun 2023 07:35:24 GMT -->

</html>