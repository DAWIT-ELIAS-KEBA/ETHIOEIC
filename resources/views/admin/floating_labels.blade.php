@include('layout.link')
<body>
    @include('layout.switcher')
    @include('layout.header')
    @include('layout.sidebar')





        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Floating labels</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Floating labels</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Basic Examples </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="form-floating mb-3"> <input type="email" class="form-control"
                                        id="floatingInput" placeholder="name@example.com"> <label
                                        for="floatingInput">Email address</label> </div>
                                <div class="form-floating"> <input type="password" class="form-control"
                                        id="floatingPassword" placeholder="Password"> <label
                                        for="floatingPassword">Password</label> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="form-floating mb-3"&gt;
    &lt;input type="email" class="form-control" id="floatingInput"
        placeholder="name@example.com"&gt;
    &lt;label for="floatingInput"&gt;Email address&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-floating"&gt;
    &lt;input type="password" class="form-control" id="floatingPassword"
        placeholder="Password"&gt;
    &lt;label for="floatingPassword"&gt;Password&lt;/label&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Readonly plain text </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="form-floating mb-3"> <input type="email" readonly
                                        class="form-control-plaintext" id="floatingEmptyPlaintextInput"
                                        placeholder="name@example.com"> <label for="floatingEmptyPlaintextInput">Empty
                                        input</label> </div>
                                <div class="form-floating"> <input type="email" readonly class="form-control-plaintext"
                                        id="floatingPlaintextInput" placeholder="name@example.com"
                                        value="name@example.com"> <label for="floatingPlaintextInput">Input with
                                        value</label> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="form-floating mb-3"&gt;
    &lt;input type="email" readonly class="form-control-plaintext"
        id="floatingEmptyPlaintextInput" placeholder="name@example.com"&gt;
    &lt;label for="floatingEmptyPlaintextInput"&gt;Empty input&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-floating"&gt;
    &lt;input type="email" readonly class="form-control-plaintext"
        id="floatingPlaintextInput" placeholder="name@example.com"
        value="name@example.com"&gt;
    &lt;label for="floatingPlaintextInput"&gt;Input with value&lt;/label&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-1 -->
                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Floating Labels With Pre Defined Values </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <form class="form-floating my-3"> <input type="email" class="form-control"
                                        id="floatingInputValue" placeholder="name@example.com" value="test@example.com">
                                    <label for="floatingInputValue">Input with value</label> </form>
                                <form class="form-floatin"> <input type="email" class="form-control is-invalid"
                                        id="floatingInputInvalid" placeholder="name@example.com"
                                        value="test@example.com"> <label for="floatingInputInvalid">Invalid
                                        input</label> </form>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;form class="form-floating my-3"&gt;
    &lt;input type="email" class="form-control" id="floatingInputValue"
        placeholder="name@example.com" value="test@example.com"&gt;
    &lt;label for="floatingInputValue"&gt;Input with value&lt;/label&gt;
&lt;/form&gt;
&lt;form class="form-floatin"&gt;
    &lt;input type="email" class="form-control is-invalid"
        id="floatingInputInvalid" placeholder="name@example.com"
        value="test@example.com"&gt;
    &lt;label for="floatingInputInvalid"&gt;Invalid input&lt;/label&gt;
&lt;/form&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Textareas </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="form-floating mb-4"> <textarea class="form-control"
                                        placeholder="Leave a comment here" id="floatingTextarea"></textarea> <label
                                        for="floatingTextarea">Description</label> </div>
                                <div class="form-floating"> <textarea class="form-control"
                                        placeholder="Leave a comment here" id="floatingTextarea2" rows="1"
                                        disabled=""></textarea> <label for="floatingTextarea2">Disabled</label> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="form-floating mb-4"&gt;
    &lt;textarea class="form-control" placeholder="Leave a comment here"
        id="floatingTextarea"&gt;&lt;/textarea&gt;
    &lt;label for="floatingTextarea"&gt;Description&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-floating"&gt;
    &lt;textarea class="form-control" placeholder="Leave a comment here"
        id="floatingTextarea2" rows="1" disabled=""&gt;&lt;/textarea&gt;
    &lt;label for="floatingTextarea2"&gt;Disabled&lt;/label&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-2 -->
                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Floating Labels In Select </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="form-floating"> <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select> <label for="floatingSelect">Works with selects</label> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="form-floating"&gt;
    &lt;select class="form-select" id="floatingSelect"
        aria-label="Floating label select example"&gt;
        &lt;option selected&gt;Open this select menu&lt;/option&gt;
        &lt;option value="1"&gt;One&lt;/option&gt;
        &lt;option value="2"&gt;Two&lt;/option&gt;
        &lt;option value="3"&gt;Three&lt;/option&gt;
    &lt;/select&gt;
    &lt;label for="floatingSelect"&gt;Works with selects&lt;/label&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Floating Labels With Layouts </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-floating"> <input type="email" class="form-control"
                                                id="floatingInputGrid" placeholder="name@example.com"
                                                value="mdo@example.com"> <label for="floatingInputGrid">Email
                                                address</label> </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating"> <select class="form-select" id="floatingSelectGrid">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select> <label for="floatingSelectGrid">Works with selects</label> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="row g-2"&gt;
    &lt;div class="col-md"&gt;
        &lt;div class="form-floating"&gt;
            &lt;input type="email" class="form-control" id="floatingInputGrid"
                placeholder="name@example.com" value="mdo@example.com"&gt;
            &lt;label for="floatingInputGrid"&gt;Email address&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-md"&gt;
        &lt;div class="form-floating"&gt;
            &lt;select class="form-select" id="floatingSelectGrid"&gt;
                &lt;option selected&gt;Open this select menu&lt;/option&gt;
                &lt;option value="1"&gt;One&lt;/option&gt;
                &lt;option value="2"&gt;Two&lt;/option&gt;
                &lt;option value="3"&gt;Three&lt;/option&gt;
            &lt;/select&gt;
            &lt;label for="floatingSelectGrid"&gt;Works with selects&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-3 -->
                <!-- Start:: row-4 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-titlte"> Floating Label Colors </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-4">
                                    <div class="col-xl-4">
                                        <div class="form-floating mb-4 floating-primary"> <input type="email"
                                                class="form-control" id="floatingInputprimary"
                                                placeholder="name@example.com"> <label
                                                for="floatingInputprimary">primary</label> </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-floating mb-4 floating-secondary"> <input type="email"
                                                class="form-control" id="floatingInputsecondary"
                                                placeholder="name@example.com"> <label
                                                for="floatingInputsecondary">secondary</label> </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-floating mb-4 floating-warning"> <input type="email"
                                                class="form-control" id="floatingInputwarning"
                                                placeholder="name@example.com"> <label
                                                for="floatingInputwarning">warning</label> </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-floating mb-4 floating-info"> <input type="email"
                                                class="form-control" id="floatingInputinfo"
                                                placeholder="name@example.com"> <label
                                                for="floatingInputinfo">info</label> </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-floating mb-4 floating-success"> <input type="email"
                                                class="form-control" id="floatingInputsuccess"
                                                placeholder="name@example.com"> <label
                                                for="floatingInputsuccess">success</label> </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-floating mb-4 floating-danger"> <input type="email"
                                                class="form-control" id="floatingInputdanger"
                                                placeholder="name@example.com"> <label
                                                for="floatingInputdanger">danger</label> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="row gy-4"&gt;
    &lt;div class="col-xl-4"&gt;
        &lt;div class="form-floating mb-4 floating-primary"&gt;
            &lt;input type="email" class="form-control" id="floatingInputprimary" placeholder="name@example.com"&gt;
            &lt;label for="floatingInputprimary"&gt;primary&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4"&gt;
        &lt;div class="form-floating mb-4 floating-secondary"&gt;
            &lt;input type="email" class="form-control" id="floatingInputsecondary" placeholder="name@example.com"&gt;
            &lt;label for="floatingInputsecondary"&gt;secondary&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4"&gt;
        &lt;div class="form-floating mb-4 floating-warning"&gt;
            &lt;input type="email" class="form-control" id="floatingInputwarning" placeholder="name@example.com"&gt;
            &lt;label for="floatingInputwarning"&gt;warning&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4"&gt;
        &lt;div class="form-floating mb-4 floating-info"&gt;
            &lt;input type="email" class="form-control" id="floatingInputinfo" placeholder="name@example.com"&gt;
            &lt;label for="floatingInputinfo"&gt;info&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4"&gt;
        &lt;div class="form-floating mb-4 floating-success"&gt;
            &lt;input type="email" class="form-control" id="floatingInputsuccess" placeholder="name@example.com"&gt;
            &lt;label for="floatingInputsuccess"&gt;success&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4"&gt;
        &lt;div class="form-floating mb-4 floating-danger"&gt;
            &lt;input type="email" class="form-control" id="floatingInputdanger" placeholder="name@example.com"&gt;
            &lt;label for="floatingInputdanger"&gt;danger&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- Start:: row-4 -->
            </div>
        </div>
        <!--APP-CONTENT CLOSE-->
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
