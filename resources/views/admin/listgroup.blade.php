@include('layout.link')

<body>

    @include('layout.switcher')

    @include('layout.header')


    @include('layout.sidebar')



        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Listgroup</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Ui Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Listgroup</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Basic List </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center"> <span class="avatar avatar-sm"> <img
                                                    src="../assets/images/faces/1.jpg" alt="img"> </span>
                                            <div class="ms-2 fw-semibold"> Alicia Sierra </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center"> <span class="avatar avatar-sm"> <img
                                                    src="../assets/images/faces/3.jpg" alt="img"> </span>
                                            <div class="ms-2 fw-semibold"> Samantha Mery </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center"> <span class="avatar avatar-sm"> <img
                                                    src="../assets/images/faces/6.jpg" alt="img"> </span>
                                            <div class="ms-2 fw-semibold"> Juliana Pena </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center"> <span class="avatar avatar-sm"> <img
                                                    src="../assets/images/faces/15.jpg" alt="img"> </span>
                                            <div class="ms-2 fw-semibold"> Adam Smith </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center"> <span class="avatar avatar-sm"> <img
                                                    src="../assets/images/faces/13.jpg" alt="img"> </span>
                                            <div class="ms-2 fw-semibold"> Farhaan Amhed </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;span class="avatar avatar-sm"&gt;
                &lt;img src="../assets/images/faces/1.jpg" alt="img"&gt;
            &lt;/span&gt;
            &lt;div class="ms-2 fw-semibold"&gt;
                Alicia Sierra
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;span class="avatar avatar-sm"&gt;
                &lt;img src="../assets/images/faces/3.jpg" alt="img"&gt;
            &lt;/span&gt;
            &lt;div class="ms-2 fw-semibold"&gt;
                Samantha Mery
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;span class="avatar avatar-sm"&gt;
                &lt;img src="../assets/images/faces/6.jpg" alt="img"&gt;
            &lt;/span&gt;
            &lt;div class="ms-2 fw-semibold"&gt;
                Juliana Pena
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;span class="avatar avatar-sm"&gt;
                &lt;img src="../assets/images/faces/15.jpg" alt="img"&gt;
            &lt;/span&gt;
            &lt;div class="ms-2 fw-semibold"&gt;
                Adam Smith
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;span class="avatar avatar-sm"&gt;
                &lt;img src="../assets/images/faces/13.jpg" alt="img"&gt;
            &lt;/span&gt;
            &lt;div class="ms-2 fw-semibold"&gt;
                Farhaan Amhed
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Active items </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item active" aria-current="true">
                                        <div class="d-flex align-items-center">
                                            <div> <span class="fs-15"> <i class="bi bi-house-door"></i> </span> </div>
                                            <div class="ms-2"> Home </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div> <span class="fs-15"> <i class="bi bi-bell"></i> </span> </div>
                                            <div class="ms-2"> Notifications </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div> <span class="fs-15"> <i class="bi bi-gift"></i> </span> </div>
                                            <div class="ms-2"> Sent Messages </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div> <span class="fs-15"> <i class="bi bi-person"></i> </span> </div>
                                            <div class="ms-2"> New Requests </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div> <span class="fs-15"> <i class="bi bi-trash3"></i> </span> </div>
                                            <div class="ms-2"> Deleted Messages </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item active" aria-current="true"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="fs-15"&gt;
                    &lt;i class="bi bi-house-door"&gt;&lt;/i&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;
                Home
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="fs-15"&gt;
                    &lt;i class="bi bi-bell"&gt;&lt;/i&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;
                Notifications
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="fs-15"&gt;
                    &lt;i class="bi bi-gift"&gt;&lt;/i&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;
                Sent Messages
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="fs-15"&gt;
                    &lt;i class="bi bi-person"&gt;&lt;/i&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;
                New Requests
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="fs-15"&gt;
                    &lt;i class="bi bi-trash3"&gt;&lt;/i&gt;
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;
                Deleted Messages
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Disabled items </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item disabled" aria-disabled="true">A disabled item meant to
                                        be disabled </li>
                                    <li class="list-group-item">Simply dummy text of the printing</li>
                                    <li class="list-group-item">There are many variations of passages</li>
                                    <li class="list-group-item">All the Lorem Ipsum generators</li>
                                    <li class="list-group-item">Written in 45 BC. This book is a treatise on the theory
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item disabled" aria-disabled="true"&gt;A disabled item meant to be disabled
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;Simply dummy text of the printing&lt;/li&gt;
    &lt;li class="list-group-item"&gt;There are many variations of passages&lt;/li&gt;
    &lt;li class="list-group-item"&gt;All the Lorem Ipsum generators&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Written in 45 BC. This book is a treatise on the theory&lt;/li&gt;
&lt;/ul&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-1 -->
                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Flush </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item fw-semibold"><i
                                            class="bi bi-envelope align-middle me-2 text-muted"></i>Asish Trivedhi<span
                                            class="ms-1 text-muted fw-normal d-inline-block">(+1023-84534)</span></li>
                                    <li class="list-group-item fw-semibold"><i
                                            class="bi bi-tiktok align-middle me-2 text-muted"></i>Alezander Russo<span
                                            class="ms-1 text-muted fw-normal d-inline-block">(+7546-12342)</span></li>
                                    <li class="list-group-item fw-semibold"><i
                                            class="bi bi-whatsapp align-middle me-2 text-muted"></i>Karem Smith<span
                                            class="ms-1 text-muted fw-normal d-inline-block">(+9944-56632)</span></li>
                                    <li class="list-group-item fw-semibold"><i
                                            class="bi bi-facebook align-middle me-2 text-muted"></i>Melissa Brien<span
                                            class="ms-1 text-muted fw-normal d-inline-block">(+1023-34323)</span></li>
                                    <li class="list-group-item fw-semibold"><i
                                            class="bi bi-instagram align-middle me-2 text-muted"></i>Kamala Harris<span
                                            class="ms-1 text-muted fw-normal d-inline-block">(+91-63421)</span></li>
                                </ul>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;ul class="list-group list-group-flush"&gt;
    &lt;li class="list-group-item fw-semibold"&gt;&lt;i class="bi bi-envelope align-middle me-2 text-muted"&gt;&lt;/i&gt;Asish Trivedhi&lt;span class="ms-1 text-muted fw-normal d-inline-block"&gt;(+1023-84534)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="list-group-item fw-semibold"&gt;&lt;i class="bi bi-tiktok align-middle me-2 text-muted"&gt;&lt;/i&gt;Alezander Russo&lt;span class="ms-1 text-muted fw-normal d-inline-block"&gt;(+7546-12342)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="list-group-item fw-semibold"&gt;&lt;i class="bi bi-whatsapp align-middle me-2 text-muted"&gt;&lt;/i&gt;Karem Smith&lt;span class="ms-1 text-muted fw-normal d-inline-block"&gt;(+9944-56632)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="list-group-item fw-semibold"&gt;&lt;i class="bi bi-facebook align-middle me-2 text-muted"&gt;&lt;/i&gt;Melissa Brien&lt;span class="ms-1 text-muted fw-normal d-inline-block"&gt;(+1023-34323)&lt;/span&gt;&lt;/li&gt;
    &lt;li class="list-group-item fw-semibold"&gt;&lt;i class="bi bi-instagram align-middle me-2 text-muted"&gt;&lt;/i&gt;Kamala Harris&lt;span class="ms-1 text-muted fw-normal d-inline-block"&gt;(+91-63421)&lt;/span&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Links </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="list-group"> <a href="#"
                                        class="list-group-item list-group-item-action active" aria-current="true">
                                        <div class="d-flex align-items-center">
                                            <div> <span class="avatar avatar-xs bg-white text-default avatar-rounded"> C
                                                </span> </div>
                                            <div class="ms-2">California</div>
                                        </div>
                                    </a> <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center">
                                            <div> <span class="avatar avatar-xs bg-secondary avatar-rounded"> N </span>
                                            </div>
                                            <div class="ms-2">New Jersey</div>
                                        </div>
                                    </a> <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center">
                                            <div> <span class="avatar avatar-xs bg-info avatar-rounded"> L </span>
                                            </div>
                                            <div class="ms-2">Los Angeles</div>
                                        </div>
                                    </a> <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center">
                                            <div> <span class="avatar avatar-xs bg-warning avatar-rounded"> M </span>
                                            </div>
                                            <div class="ms-2">Miami Florida</div>
                                        </div>
                                    </a> <a class="list-group-item list-group-item-action disabled">
                                        <div class="d-flex align-items-center">
                                            <div> <span class="avatar avatar-xs bg-success avatar-rounded"> W </span>
                                            </div>
                                            <div class="ms-2">Washington D.C</div>
                                        </div>
                                    </a> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="list-group"&gt;
    &lt;a href="#" class="list-group-item list-group-item-action active"
        aria-current="true"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-white text-default avatar-rounded"&gt;
                    C
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;California&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a href="#" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-secondary avatar-rounded"&gt;
                    N
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;New Jersey&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a href="#" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-info avatar-rounded"&gt;
                    L
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;Los Angeles&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a href="#" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-warning avatar-rounded"&gt;
                    M
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;Miami Florida&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;a class="list-group-item list-group-item-action disabled"&gt;
        &lt;div class="d-flex align-items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-success avatar-rounded"&gt;
                    W
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;Washington D.C&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> buttons </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="list-group"> <button type="button"
                                        class="list-group-item list-group-item-action active" aria-current="true">Simply
                                        dummy text of the printing<span
                                            class="badge float-end bg-primary">243</span></button> <button type="button"
                                        class="list-group-item list-group-item-action">There are many variations of
                                        passages<span
                                            class="badge float-end bg-secondary-transparent">35</span></button> <button
                                        type="button" class="list-group-item list-group-item-action">All the Lorem Ipsum
                                        generators<span class="badge float-end bg-info-transparent">132</span></button>
                                    <button type="button" class="list-group-item list-group-item-action">All the Lorem
                                        Ipsum generators<span
                                            class="badge float-end bg-success-transparent">2525</span></button> <button
                                        type="button" class="list-group-item list-group-item-action" disabled>A disabled
                                        item meant to be disabled<span
                                            class="badge float-end bg-danger-transparent">21</span></button> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="list-group"&gt;
    &lt;button type="button" class="list-group-item list-group-item-action active" aria-current="true"&gt;Simply dummy text of the printing&lt;span class="badge float-end bg-primary"&gt;243&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="list-group-item list-group-item-action"&gt;There are many variations of passages&lt;span class="badge float-end bg-secondary-transparent"&gt;35&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="list-group-item list-group-item-action"&gt;All the Lorem Ipsum generators&lt;span class="badge float-end bg-info-transparent"&gt;132&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="list-group-item list-group-item-action"&gt;All the Lorem Ipsum generators&lt;span class="badge float-end bg-success-transparent"&gt;2525&lt;/span&gt;&lt;/button&gt;
    &lt;button type="button" class="list-group-item list-group-item-action" disabled&gt;A disabled item meant to be disabled&lt;span class="badge float-end bg-danger-transparent"&gt;21&lt;/span&gt;&lt;/button&gt;
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
                                <div class="card-title"> Contextual classes </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">A simple default list group item</li>
                                    <li class="list-group-item list-group-item-primary">A simple primary list group item
                                    </li>
                                    <li class="list-group-item list-group-item-secondary">A simple secondary list group
                                        item</li>
                                    <li class="list-group-item list-group-item-success">A simple success list group item
                                    </li>
                                    <li class="list-group-item list-group-item-danger">A simple danger list group item
                                    </li>
                                    <li class="list-group-item list-group-item-warning">A simple warning list group item
                                    </li>
                                    <li class="list-group-item list-group-item-info">A simple info list group item </li>
                                    <li class="list-group-item list-group-item-light">A simple light list group item
                                    </li>
                                    <li class="list-group-item list-group-item-dark">A simple dark list group item </li>
                                </ul>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item"&gt;A simple default list group item&lt;/li&gt;

    &lt;li class="list-group-item list-group-item-primary"&gt;A simple primary list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-secondary"&gt;A simple secondary
        list
        group item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-success"&gt;A simple success list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-danger"&gt;A simple danger list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-warning"&gt;A simple warning list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-group-item-info"&gt;A simple info list group
        item
    &lt;/li&gt;
    &lt;li class="list-group-item list-group-item-light"&gt;A simple light list group
        item
    &lt;/li&gt;
    &lt;li class="list-group-item list-group-item-dark"&gt;A simple dark list group
        item
    &lt;/li&gt;
&lt;/ul&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Contextual classes with hover styles </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="list-group"> <a href="#" class="list-group-item list-group-item-action">A
                                        simple default list group item</a> <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-primary">A simple
                                        primary list group item</a> <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-secondary">A
                                        simple secondary list group item</a> <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-success">A simple
                                        success list group item</a> <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-danger">A simple
                                        danger list group item</a> <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-warning">A simple
                                        warning list group item</a> <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-info">A simple
                                        info list group item</a> <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-light">A simple
                                        light list group item</a> <a href="#"
                                        class="list-group-item list-group-item-action list-group-item-dark">A simple
                                        dark list group item</a> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="list-group"&gt;
    &lt;a href="#" class="list-group-item list-group-item-action"&gt;A simple default
        list
        group item&lt;/a&gt;

    &lt;a href="#"
        class="list-group-item list-group-item-action list-group-item-primary"&gt;A
        simple primary list group item&lt;/a&gt;
    &lt;a href="#"
        class="list-group-item list-group-item-action list-group-item-secondary"&gt;A
        simple secondary list group item&lt;/a&gt;
    &lt;a href="#"
        class="list-group-item list-group-item-action list-group-item-success"&gt;A
        simple success list group item&lt;/a&gt;
    &lt;a href="#"
        class="list-group-item list-group-item-action list-group-item-danger"&gt;A
        simple danger list group item&lt;/a&gt;
    &lt;a href="#"
        class="list-group-item list-group-item-action list-group-item-warning"&gt;A
        simple warning list group item&lt;/a&gt;
    &lt;a href="#"
        class="list-group-item list-group-item-action list-group-item-info"&gt;A
        simple
        info list group item&lt;/a&gt;
    &lt;a href="#"
        class="list-group-item list-group-item-action list-group-item-light"&gt;A
        simple light list group item&lt;/a&gt;
    &lt;a href="#"
        class="list-group-item list-group-item-action list-group-item-dark"&gt;A
        simple
        dark list group item&lt;/a&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-3 -->
                <!-- Start:: row-4 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Solid Colored Lists </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">A simple default list group item</li>
                                    <li class="list-group-item list-item-solid-primary">A simple primary list group item
                                    </li>
                                    <li class="list-group-item list-item-solid-secondary">A simple secondary list group
                                        item</li>
                                    <li class="list-group-item list-item-solid-success">A simple success list group item
                                    </li>
                                    <li class="list-group-item list-item-solid-danger">A simple danger list group item
                                    </li>
                                    <li class="list-group-item list-item-solid-warning">A simple warning list group item
                                    </li>
                                    <li class="list-group-item list-item-solid-info">A simple info list group item </li>
                                    <li class="list-group-item list-item-solid-light">A simple light list group item
                                    </li>
                                    <li class="list-group-item list-item-solid-dark text-white">A simple dark list group
                                        item </li>
                                </ul>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item"&gt;A simple default list group item&lt;/li&gt;

    &lt;li class="list-group-item list-item-solid-primary"&gt;A simple primary list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-secondary"&gt;A simple secondary
        list
        group item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-success"&gt;A simple success list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-danger"&gt;A simple danger list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-warning"&gt;A simple warning list
        group
        item&lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-info"&gt;A simple info list group
        item
    &lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-light"&gt;A simple light list group
        item
    &lt;/li&gt;
    &lt;li class="list-group-item list-item-solid-dark text-white"&gt;A simple dark list group
        item
    &lt;/li&gt;
&lt;/ul&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Custom content </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="list-group"> <a href="#"
                                        class="list-group-item list-group-item-action active" aria-current="true">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1 fw-semibold">Web page editors now use Lorem Ipsum?</h6>
                                            <small>3 days ago</small>
                                        </div>
                                        <p class="mb-1">There are many variations of passages of Lorem Ipsum available,
                                            but the majority have suffered alteration in some form, by injected humour.
                                        </p><small>24,Nov 2022.</small>
                                    </a> <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1 fw-semibold">Richard McClintock, a Latin professor?</h6>
                                            <small class="text-muted">4 hrs ago</small>
                                        </div>
                                        <p class="mb-1">Contrary to popular belief, Lorem Ipsum is not simply random
                                            text. It has roots in a piece of classical Latin literature.</p><small
                                            class="text-muted">30,Nov 2022.</small>
                                    </a> <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1 fw-semibold">It uses a dictionary of over 200 Latin words?
                                            </h6> <small class="text-muted">15 hrs ago</small>
                                        </div>
                                        <p class="mb-1">Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s.</p><small class="text-muted">4,Nov 2022.</small>
                                    </a> <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1 fw-semibold">The standard Lorem Ipsum used since the 1500s?
                                            </h6> <small class="text-muted">45 mins ago</small>
                                        </div>
                                        <p class="mb-1">All the Lorem Ipsum generators on the Internet tend to repeat
                                            predefined chunks as necessary, making this the first true generator on the
                                            Internet.</p><small class="text-muted">28,Oct 2022.</small>
                                    </a> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="list-group"&gt;
    &lt;a href="#" class="list-group-item list-group-item-action active"
        aria-current="true"&gt;
        &lt;div class="d-flex w-100 justify-content-between"&gt;
            &lt;h6 class="mb-1 fw-semibold"&gt;Web page editors now use Lorem Ipsum?&lt;/h6&gt;
            &lt;small&gt;3 days ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.&lt;/p&gt;
        &lt;small&gt;24,Nov 2022.&lt;/small&gt;
    &lt;/a&gt;
    &lt;a href="#" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex w-100 justify-content-between"&gt;
            &lt;h6 class="mb-1 fw-semibold"&gt;Richard McClintock, a Latin professor?&lt;/h6&gt;
            &lt;small class="text-muted"&gt;4 hrs ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.&lt;/p&gt;
        &lt;small class="text-muted"&gt;30,Nov 2022.&lt;/small&gt;
    &lt;/a&gt;
    &lt;a href="#" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex w-100 justify-content-between"&gt;
            &lt;h6 class="mb-1 fw-semibold"&gt;It uses a dictionary of over 200 Latin words?&lt;/h6&gt;
            &lt;small class="text-muted"&gt;15 hrs ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.&lt;/p&gt;
        &lt;small class="text-muted"&gt;4,Nov 2022.&lt;/small&gt;
    &lt;/a&gt;
    &lt;a href="#" class="list-group-item list-group-item-action"&gt;
        &lt;div class="d-flex w-100 justify-content-between"&gt;
            &lt;h6 class="mb-1 fw-semibold"&gt;The standard Lorem Ipsum used since the 1500s?&lt;/h6&gt;
            &lt;small class="text-muted"&gt;45 mins ago&lt;/small&gt;
        &lt;/div&gt;
        &lt;p class="mb-1"&gt;All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.&lt;/p&gt;
        &lt;small class="text-muted"&gt;28,Oct 2022.&lt;/small&gt;
    &lt;/a&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-4 -->
                <!-- Start:: row-5 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Sub headings </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto text-muted">
                                            <div class="fw-semibold fs-14 text-default">What Happened?</div> Many
                                            experts have recently suggested may exist.
                                        </div> <span class="badge bg-primary-transparent">32 Views</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto text-muted">
                                            <div class="fw-semibold fs-14 text-default">It Was Amazing!</div> His idea
                                            involved taking red.
                                        </div> <span class="badge bg-secondary-transparent">52 Views</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto text-muted">
                                            <div class="fw-semibold fs-14 text-default">News Is A Great Weapon.</div>
                                            News can influence in many ways.
                                        </div> <span class="badge bg-success-transparent">1,204 Views</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto text-muted">
                                            <div class="fw-semibold fs-14 text-default">majority have suffered.</div> If
                                            you are going to use a passage of Lorem Ipsum, you need to be sure there
                                            isn't anything.
                                        </div> <span class="badge bg-danger-transparent">14 Views</span>
                                    </li>
                                </ol>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;ol class="list-group list-group-numbered"&gt;
    &lt;li class="list-group-item d-flex justify-content-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-muted"&gt;
            &lt;div class="fw-semibold fs-14 text-default"&gt;What Happened?&lt;/div&gt;
            Many experts have recently suggested may exist.
        &lt;/div&gt;
        &lt;span class="badge bg-primary-transparent"&gt;32 Views&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item d-flex justify-content-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-muted"&gt;
            &lt;div class="fw-semibold fs-14 text-default"&gt;It Was Amazing!&lt;/div&gt;
            His idea involved taking red.
        &lt;/div&gt;
        &lt;span class="badge bg-secondary-transparent"&gt;52 Views&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item d-flex justify-content-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-muted"&gt;
            &lt;div class="fw-semibold fs-14 text-default"&gt;News Is A Great Weapon.&lt;/div&gt;
            News can influence in many ways.
        &lt;/div&gt;
        &lt;span class="badge bg-success-transparent"&gt;1,204 Views&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item d-flex justify-content-between align-items-start"&gt;
        &lt;div class="ms-2 me-auto text-muted"&gt;
            &lt;div class="fw-semibold fs-14 text-default"&gt;majority have suffered.&lt;/div&gt;
            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.
        &lt;/div&gt;
        &lt;span class="badge bg-danger-transparent"&gt;14 Views&lt;/span&gt;
    &lt;/li&gt;
&lt;/ol&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Numbered Lists </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">Simply dummy text of the printing.</li>
                                    <li class="list-group-item">There are many variations of passages.</li>
                                    <li class="list-group-item">All the Lorem Ipsum generators.</li>
                                    <li class="list-group-item">Written in 45 BC. This book is a treatise on the theory.
                                    </li>
                                    <li class="list-group-item">Randomised words which don't look.</li>
                                    <li class="list-group-item">Always free from repetition, injected humour.</li>
                                </ol>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;ol class="list-group list-group-numbered"&gt;
    &lt;li class="list-group-item"&gt;Simply dummy text of the printing.&lt;/li&gt;
    &lt;li class="list-group-item"&gt;There are many variations of passages.&lt;/li&gt;
    &lt;li class="list-group-item"&gt;All the Lorem Ipsum generators.&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Written in 45 BC. This book is a treatise on the theory.&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Randomised words which don't look.&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Always free from repetition, injected humour.&lt;/li&gt;
&lt;/ol&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> List With Checkboxes </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item"> <input class="form-check-input me-1 fw-semibold"
                                            type="checkbox" value="" aria-label="..." checked> Accurate information at
                                        any given point. </li>
                                    <li class="list-group-item"> <input class="form-check-input me-1 fw-semibold"
                                            type="checkbox" value="" aria-label="..."> Hearing the information and
                                        responding. </li>
                                    <li class="list-group-item"> <input class="form-check-input me-1 fw-semibold"
                                            type="checkbox" value="" aria-label="..." checked> Setting up and
                                        customizing your own sales. </li>
                                    <li class="list-group-item"> <input class="form-check-input me-1 fw-semibold"
                                            type="checkbox" value="" aria-label="..." checked> New Admin Launched. </li>
                                    <li class="list-group-item"> <input class="form-check-input me-1 fw-semibold"
                                            type="checkbox" value="" aria-label="..."> To maximize profits and improve
                                        productivity. </li>
                                    <li class="list-group-item"> <input class="form-check-input me-1 fw-semibold"
                                            type="checkbox" value="" aria-label="..."> To have a complete 360° overview
                                        of sales information, having. </li>
                                </ul>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-semibold" type="checkbox" value=""
            aria-label="..." checked&gt;
            Accurate information at any given point.
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-semibold" type="checkbox" value=""
            aria-label="..."&gt;
            Hearing the information and responding.
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-semibold" type="checkbox" value=""
            aria-label="..." checked&gt;
            Setting up and customizing your own sales.
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-semibold" type="checkbox" value=""
            aria-label="..." checked&gt;
            New Admin Launched.
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-semibold" type="checkbox" value=""
            aria-label="..."&gt;
            To maximize profits and improve productivity.
    &lt;/li&gt;
    &lt;li class="list-group-item"&gt;
        &lt;input class="form-check-input me-1 fw-semibold" type="checkbox" value=""
            aria-label="..."&gt;
            To have a complete 360° overview of sales information, having.
    &lt;/li&gt;
&lt;/ul&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> List With Radios </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="list-group"> <label class="list-group-item"> <input
                                            class="form-check-input me-1" type="radio" value="" name="list-radio"
                                            checked> Accurate information at any given point. </label> <label
                                        class="list-group-item"> <input class="form-check-input me-1" type="radio"
                                            value="" name="list-radio" checked> Hearing the information and responding.
                                    </label> <label class="list-group-item"> <input class="form-check-input me-1"
                                            type="radio" value="" name="list-radio" checked> Setting up and customizing
                                        your own sales. </label> <label class="list-group-item"> <input
                                            class="form-check-input me-1" type="radio" value="" name="list-radio"> New
                                        Admin Launched. </label> <label class="list-group-item"> <input
                                            class="form-check-input me-1" type="radio" value="" name="list-radio"> To
                                        maximize profits and improve productivity. </label> <label
                                        class="list-group-item"> <input class="form-check-input me-1" type="radio"
                                            value="" name="list-radio"> To have a complete 360° overview of sales
                                        information, having. </label> </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="list-group"&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio" checked&gt;
            Accurate information at any given point.
    &lt;/label&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio" checked&gt;
            Hearing the information and responding.
    &lt;/label&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio" checked&gt;
            Setting up and customizing your own sales.
    &lt;/label&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio"&gt;
            New Admin Launched.
    &lt;/label&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio"&gt;
            To maximize profits and improve productivity.
    &lt;/label&gt;
    &lt;label class="list-group-item"&gt;
        &lt;input class="form-check-input me-1" type="radio" value=""
            name="list-radio"&gt;
            To have a complete 360° overview of sales information, having.
    &lt;/label&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> List With badges </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                                        Grocies <span class="badge bg-primary">Available</span> </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                                        Furniture <span class="badge bg-secondary">Buy</span> </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                                        Beauty <span class="badge bg-danger rounded-pill">32</span> </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                                        Books <span class="badge bg-light text-default">New</span> </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                                        Toys <span class="badge bg-info-gradient">Hot</span> </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                                        Mobiles <span class="badge bg-warning">Sold Out</span> </li>
                                </ul>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;ul class="list-group"&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-semibold"&gt;
        Grocies
        &lt;span class="badge bg-primary"&gt;Available&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-semibold"&gt;
        Furniture
        &lt;span class="badge bg-secondary"&gt;Buy&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-semibold"&gt;
        Beauty
        &lt;span class="badge bg-danger rounded-pill"&gt;32&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-semibold"&gt;
        Books
        &lt;span class="badge bg-light text-default"&gt;New&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-semibold"&gt;
        Toys
        &lt;span class="badge bg-info-gradient"&gt;Hot&lt;/span&gt;
    &lt;/li&gt;
    &lt;li
        class="list-group-item d-flex justify-content-between align-items-center fw-semibold"&gt;
        Mobiles
        &lt;span class="badge bg-warning"&gt;Sold Out&lt;/span&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Horizontal </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>
                                <ul class="list-group list-group-horizontal-sm">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>
                                <ul class="list-group list-group-horizontal-md">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>
                                <ul class="list-group list-group-horizontal-lg">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>
                                <ul class="list-group list-group-horizontal-xl">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>
                                <ul class="list-group list-group-horizontal-xxl">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                </ul>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;ul class="list-group list-group-horizontal"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="list-group list-group-horizontal-sm"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="list-group list-group-horizontal-md"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="list-group list-group-horizontal-lg"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="list-group list-group-horizontal-xl"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;
&lt;ul class="list-group list-group-horizontal-xxl"&gt;
    &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
    &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
&lt;/ul&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-5 -->
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