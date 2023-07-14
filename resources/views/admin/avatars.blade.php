

@include('layout.link')

<body>

    @include('layout.switcher')

    @include('layout.header')


    @include('layout.sidebar')

        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Avatars</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Utilities</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Avatars</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Avatars </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body py-4"> <span class="avatar me-2 avatar-radius-0"> <img
                                        src="../assets/images/faces/1.jpg" alt="img"> </span> <span class="avatar me-2">
                                    <img src="../assets/images/faces/2.jpg" alt="img"> </span> <span
                                    class="avatar me-2 avatar-rounded"> <img src="../assets/images/faces/3.jpg"
                                        alt="img"> </span> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;span class="avatar me-2 avatar-radius-0"&gt;
    &lt;img src="../assets/images/faces/1.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar me-2"&gt;
    &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar me-2 avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/3.jpg" alt="img"&gt;
&lt;/span&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Avatar Sizes <p class="subtitle text-muted fs-12 fw-normal">
                                        Avatars of different sizes </p>
                                </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <span class="avatar avatar-xs me-2"> <img
                                        src="../assets/images/faces/4.jpg" alt="img"> </span> <span
                                    class="avatar avatar-sm me-2"> <img src="../assets/images/faces/5.jpg" alt="img">
                                </span> <span class="avatar avatar-md me-2"> <img src="../assets/images/faces/6.jpg"
                                        alt="img"> </span> <span class="avatar avatar-lg me-2"> <img
                                        src="../assets/images/faces/7.jpg" alt="img"> </span> <span
                                    class="avatar avatar-xl me-2"> <img src="../assets/images/faces/8.jpg" alt="img">
                                </span> <span class="avatar avatar-xxl me-2"> <img src="../assets/images/faces/9.jpg"
                                        alt="img"> </span> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2"&gt;
    &lt;img src="../assets/images/faces/4.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-sm me-2"&gt;
    &lt;img src="../assets/images/faces/5.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-md me-2"&gt;
    &lt;img src="../assets/images/faces/6.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-lg me-2"&gt;
    &lt;img src="../assets/images/faces/7.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xl me-2"&gt;
    &lt;img src="../assets/images/faces/8.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xxl me-2"&gt;
    &lt;img src="../assets/images/faces/9.jpg" alt="img"&gt;
&lt;/span&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Avatar With Icons <p
                                        class="subtitle text-muted fs-12 fw-normal"> Avatar contains icons to perform
                                        respective action. </p>
                                </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <span class="avatar avatar-xs me-2 avatar-rounded"> <img
                                        src="../assets/images/faces/2.jpg" alt="img"> <a href="javascript:void(0);"
                                        class="badge bg-success rounded-pill avatar-badge"><i
                                            class="fe fe-camera"></i></a> </span> <span
                                    class="avatar avatar-sm me-2 avatar-rounded"> <img
                                        src="../assets/images/faces/3.jpg" alt="img"> <a href="javascript:void(0);"
                                        class="badge rounded-pill bg-secondary avatar-badge"><i
                                            class="fe fe-edit"></i></a> </span> <span
                                    class="avatar avatar-md me-2 avatar-rounded"> <img
                                        src="../assets/images/faces/14.jpg" alt="img"> <a href="javascript:void(0);"
                                        class="badge rounded-pill bg-warning avatar-badge"><i
                                            class="fe fe-plus"></i></a> </span> <span
                                    class="avatar avatar-lg me-2 avatar-rounded"> <img
                                        src="../assets/images/faces/13.jpg" alt="img"> <a href="javascript:void(0);"
                                        class="badge rounded-pill bg-info avatar-badge"><i class="fe fe-edit"></i></a>
                                </span> <span class="avatar avatar-xl me-2 avatar-rounded"> <img
                                        src="../assets/images/faces/15.jpg" alt="img"> <a href="javascript:void(0);"
                                        class="badge rounded-pill bg-success avatar-badge"><i
                                            class="fe fe-camera"></i></a> </span> <span
                                    class="avatar avatar-xxl me-2 avatar-rounded"> <img
                                        src="../assets/images/faces/9.jpg" alt="img"> <a href="javascript:void(0);"
                                        class="badge rounded-pill bg-danger avatar-badge"><i class="fe fe-plus"></i></a>
                                </span> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2 avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
    &lt;a href="javascript:void(0);" class="badge bg-success rounded-pill avatar-badge"&gt;&lt;i class="fe fe-camera"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-sm me-2 avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/3.jpg" alt="img"&gt;
    &lt;a href="javascript:void(0);" class="badge rounded-pill bg-secondary avatar-badge"&gt;&lt;i class="fe fe-edit"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-md me-2 avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/14.jpg" alt="img"&gt;
    &lt;a href="javascript:void(0);" class="badge rounded-pill bg-warning avatar-badge"&gt;&lt;i class="fe fe-plus"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-lg me-2 avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/13.jpg" alt="img"&gt;
    &lt;a href="javascript:void(0);" class="badge rounded-pill bg-info avatar-badge"&gt;&lt;i class="fe fe-edit"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xl me-2 avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/15.jpg" alt="img"&gt;
    &lt;a href="javascript:void(0);" class="badge rounded-pill bg-success avatar-badge"&gt;&lt;i class="fe fe-camera"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xxl me-2 avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/9.jpg" alt="img"&gt;
    &lt;a href="javascript:void(0);" class="badge rounded-pill bg-danger avatar-badge"&gt;&lt;i class="fe fe-plus"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/span&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End::row-1 -->
                <!-- Start::row-2 -->
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Avatar With Online Status Indicators <p
                                        class="subtitle text-muted fs-12 fw-normal"> avatars having online status
                                        indicator. </p>
                                </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <span class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                        src="../assets/images/faces/8.jpg" alt="img"> </span> <span
                                    class="avatar avatar-sm online me-2 avatar-rounded"> <img
                                        src="../assets/images/faces/10.jpg" alt="img"> </span> <span
                                    class="avatar avatar-md me-2 online avatar-rounded"> <img
                                        src="../assets/images/faces/12.jpg" alt="img"> </span> <span
                                    class="avatar avatar-lg me-2 online avatar-rounded"> <img
                                        src="../assets/images/faces/13.jpg" alt="img"> </span> <span
                                    class="avatar avatar-xl me-2 online avatar-rounded"> <img
                                        src="../assets/images/faces/14.jpg" alt="img"> </span> <span
                                    class="avatar avatar-xxl me-2 online avatar-rounded"> <img
                                        src="../assets/images/faces/15.jpg" alt="img"> </span> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/8.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-sm online me-2 avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/10.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-md me-2 online avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/12.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-lg me-2 online avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/13.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xl me-2 online avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/14.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xxl me-2 online avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/15.jpg" alt="img"&gt;
&lt;/span&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Avatar With Ofline Status Indicators <p
                                        class="subtitle text-muted fs-12 fw-normal"> avatars having a offline status
                                        indicator. </p>
                                </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <span class="avatar avatar-xs me-2 offline avatar-rounded"> <img
                                        src="../assets/images/faces/2.jpg" alt="img"> </span> <span
                                    class="avatar avatar-sm offline me-2 avatar-rounded"> <img
                                        src="../assets/images/faces/3.jpg" alt="img"> </span> <span
                                    class="avatar avatar-md me-2 offline avatar-rounded"> <img
                                        src="../assets/images/faces/4.jpg" alt="img"> </span> <span
                                    class="avatar avatar-lg me-2 offline avatar-rounded"> <img
                                        src="../assets/images/faces/5.jpg" alt="img"> </span> <span
                                    class="avatar avatar-xl me-2 offline avatar-rounded"> <img
                                        src="../assets/images/faces/6.jpg" alt="img"> </span> <span
                                    class="avatar avatar-xxl me-2 offline avatar-rounded"> <img
                                        src="../assets/images/faces/7.jpg" alt="img"> </span> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2 offline avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-sm offline me-2 avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/3.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-md me-2 offline avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/4.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-lg me-2 offline avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/5.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xl me-2 offline avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/6.jpg" alt="img"&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xxl me-2 offline avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/7.jpg" alt="img"&gt;
&lt;/span&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Avatars With Number Badges <p
                                        class="subtitle text-muted fs-12 fw-normal"> Avatar numbers indicates the no. of
                                        unread notififactions/messages. </p>
                                </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <span class="avatar avatar-xs me-2 avatar-rounded"> <img
                                        src="../assets/images/faces/2.jpg" alt="img"> <span
                                        class="badge rounded-pill bg-primary avatar-badge">2</span> </span> <span
                                    class="avatar avatar-sm me-2 avatar-rounded"> <img
                                        src="../assets/images/faces/3.jpg" alt="img"> <span
                                        class="badge rounded-pill bg-secondary avatar-badge">5</span> </span> <span
                                    class="avatar avatar-md me-2 avatar-rounded"> <img
                                        src="../assets/images/faces/14.jpg" alt="img"> <span
                                        class="badge rounded-pill bg-warning avatar-badge">1</span> </span> <span
                                    class="avatar avatar-lg me-2 avatar-rounded"> <img
                                        src="../assets/images/faces/13.jpg" alt="img"> <span
                                        class="badge rounded-pill bg-info avatar-badge">7</span> </span> <span
                                    class="avatar avatar-xl me-2 avatar-rounded"> <img
                                        src="../assets/images/faces/15.jpg" alt="img"> <span
                                        class="badge rounded-pill bg-success avatar-badge">3</span> </span> <span
                                    class="avatar avatar-xxl me-2 avatar-rounded"> <img
                                        src="../assets/images/faces/9.jpg" alt="img"> <span
                                        class="badge rounded-pill bg-danger avatar-badge">9</span> </span> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2 avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
    &lt;span class="badge rounded-pill bg-primary avatar-badge"&gt;2&lt;/span&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-sm me-2 avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/3.jpg" alt="img"&gt;
    &lt;span class="badge rounded-pill bg-secondary avatar-badge"&gt;5&lt;/span&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-md me-2 avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/14.jpg" alt="img"&gt;
    &lt;span class="badge rounded-pill bg-warning avatar-badge"&gt;1&lt;/span&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-lg me-2 avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/13.jpg" alt="img"&gt;
    &lt;span class="badge rounded-pill bg-info avatar-badge"&gt;7&lt;/span&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xl me-2 avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/15.jpg" alt="img"&gt;
    &lt;span class="badge rounded-pill bg-success avatar-badge"&gt;3&lt;/span&gt;
&lt;/span&gt;
&lt;span class="avatar avatar-xxl me-2 avatar-rounded"&gt;
    &lt;img src="../assets/images/faces/9.jpg" alt="img"&gt;
    &lt;span class="badge rounded-pill bg-danger avatar-badge"&gt;9&lt;/span&gt;
&lt;/span&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End::row-2 -->
                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Avatar With Initials <p
                                        class="subtitle text-muted fs-12 fw-normal"> Avatar contains intials when user
                                        profile doesn't exist. </p>
                                </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body"> <span class="avatar avatar-xs m-2 bg-primary"> xs </span> <span
                                    class="avatar avatar-sm m-2 bg-secondary"> SM </span> <span
                                    class="avatar avatar-md m-2 bg-warning"> MD </span> <span
                                    class="avatar avatar-lg m-2 bg-danger"> LG </span> <span
                                    class="avatar avatar-xl m-2 bg-success"> XL </span> <span
                                    class="avatar avatar-xxl m-2 bg-info"> XXL </span> </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;span class="avatar avatar-xs me-2 bg-primary"&gt;
    xs
&lt;/span&gt;
&lt;span class="avatar avatar-sm me-2 bg-secondary"&gt;
    SM
&lt;/span&gt;
&lt;span class="avatar avatar-md me-2 bg-warning"&gt;
    MD
&lt;/span&gt;
&lt;span class="avatar avatar-lg me-2 bg-danger"&gt;
    LG
&lt;/span&gt;
&lt;span class="avatar avatar-xl me-2 bg-success"&gt;
    XL
&lt;/span&gt;
&lt;span class="avatar avatar-xxl me-2 bg-info"&gt;
    XXL
&lt;/span&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Stacked Avatars <p class="subtitle text-muted fs-12 fw-normal">
                                        Group of avatars stacked together. </p>
                                </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="avatar-list-stacked"> <span class="avatar"> <img
                                            src="../assets/images/faces/2.jpg" alt="img"> </span> <span class="avatar">
                                        <img src="../assets/images/faces/8.jpg" alt="img"> </span> <span class="avatar">
                                        <img src="../assets/images/faces/2.jpg" alt="img"> </span> <span class="avatar">
                                        <img src="../assets/images/faces/10.jpg" alt="img"> </span> <span
                                        class="avatar"> <img src="../assets/images/faces/4.jpg" alt="img"> </span> <span
                                        class="avatar"> <img src="../assets/images/faces/13.jpg" alt="img"> </span> <a
                                        class="avatar bg-primary text-fixed-white" href="javascript:void(0);"> +8 </a>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="avatar-list-stacked"&gt;
    &lt;span class="avatar"&gt;
        &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar"&gt;
        &lt;img src="../assets/images/faces/8.jpg" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar"&gt;
        &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar"&gt;
        &lt;img src="../assets/images/faces/10.jpg" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar"&gt;
        &lt;img src="../assets/images/faces/4.jpg" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar"&gt;
        &lt;img src="../assets/images/faces/13.jpg" alt="img"&gt;
    &lt;/span&gt;
    &lt;a class="avatar bg-primary text-fixed-white" href="javascript:void(0);"&gt;
        +8
    &lt;/a&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Rounded Stacked Avatars <p
                                        class="subtitle text-muted fs-12 fw-normal"> Group of avatars stacked together.
                                    </p>
                                </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="avatar-list-stacked"> <span class="avatar avatar-rounded"> <img
                                            src="../assets/images/faces/2.jpg" alt="img"> </span> <span
                                        class="avatar avatar-rounded"> <img src="../assets/images/faces/8.jpg"
                                            alt="img"> </span> <span class="avatar avatar-rounded"> <img
                                            src="../assets/images/faces/2.jpg" alt="img"> </span> <span
                                        class="avatar avatar-rounded"> <img src="../assets/images/faces/10.jpg"
                                            alt="img"> </span> <span class="avatar avatar-rounded"> <img
                                            src="../assets/images/faces/4.jpg" alt="img"> </span> <span
                                        class="avatar avatar-rounded"> <img src="../assets/images/faces/13.jpg"
                                            alt="img"> </span> <a
                                        class="avatar bg-primary avatar-rounded text-fixed-white"
                                        href="javascript:void(0);"> +8 </a> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="avatar-list-stacked"&gt;
    &lt;span class="avatar avatar-rounded"&gt;
        &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-rounded"&gt;
        &lt;img src="../assets/images/faces/8.jpg" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-rounded"&gt;
        &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-rounded"&gt;
        &lt;img src="../assets/images/faces/10.jpg" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-rounded"&gt;
        &lt;img src="../assets/images/faces/4.jpg" alt="img"&gt;
    &lt;/span&gt;
    &lt;span class="avatar avatar-rounded"&gt;
        &lt;img src="../assets/images/faces/13.jpg" alt="img"&gt;
    &lt;/span&gt;
    &lt;a class="avatar bg-primary avatar-rounded text-fixed-white" href="javascript:void(0);"&gt;
        +8
    &lt;/a&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
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
        </div> 
        
        
        @include('layout.footer')
        