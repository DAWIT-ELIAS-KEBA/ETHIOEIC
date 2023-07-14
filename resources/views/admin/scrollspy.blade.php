@include('layout.link')

<body>

    @include('layout.switcher')

    @include('layout.header')


    @include('layout.sidebar')



        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Scrollspy</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Advanced Ui</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Scrollspy</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Example in navbar </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <nav id="navbar-example2" class="navbar navbar-light bg-light px-3 mb-3">
                                    <ul class="nav nav-pills d-sm-flex d-block">
                                        <li class="nav-item"> <a class="nav-link" href="#scrollspyHeading1">First</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link" href="#scrollspyHeading2">Second</a>
                                        </li>
                                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle"
                                                data-bs-toggle="dropdown" href="#" role="button"
                                                aria-expanded="false">Dropdown</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a> </li>
                                                <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a> </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0"
                                    class="scrollspy-example bg-light p-3 rounded-2" data-bs-root-margin="0px 0px -40%"
                                    data-bs-smooth-scroll="true" tabindex="0">
                                    <h6 class="fw-semibold" id="scrollspyHeading1">First heading</h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Quidem culpa alias, illum vero cupiditate fugiat, placeat nemo assumenda
                                        distinctio magni, reprehenderit sit deleniti excepturi! Tempore magni adipisci
                                        iusto sit illum vero veniam harum quas sunt!Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Quidem culpa alias, illum vero cupiditate fugiat,
                                        placeat nemo assumenda distinctio magni, reprehenderit sit deleniti excepturi!
                                        Tempore magni adipisci iusto sit illum vero veniam harum quas suntLorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Quidem culpa alias, illum vero
                                        cupiditate fugiat, placeat nemo assumenda distinctio magni,Lorem ipsum dolor sit
                                        amet consectetur adipisicing elit. Quidem culpa alias, illum vero cupiditate
                                        fugiat, placeat nemo assumenda distinctio magni, reprehenderit sit deleniti
                                        excepturi! Tempore magni adipisci iusto sit illum vero veniam harum quas
                                        sunt!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem culpa
                                        alias, illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
                                        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit illum
                                        vero veniam harum quas suntLorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Quidem culpa alias, illum vero cupiditate fugiat, placeat nemo assumenda
                                        distinctio magni,Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem
                                        culpa alias, illum vero cupiditate fugiat, placeat nemo assumenda distinctio
                                        magni, reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
                                        illum vero veniam harum quas sunt!Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Quidem culpa alias, illum vero cupiditate fugiat, placeat nemo
                                        assumenda distinctio magni, reprehenderit sit deleniti excepturi! Tempore magni
                                        adipisci iusto sit illum vero veniam harum quas suntLorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Quidem culpa alias, illum vero cupiditate fugiat,
                                        placeat nemo assumenda distinctio magni,Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Quidem culpa alias, illum vero cupiditate fugiat, placeat nemo
                                        assumenda distinctio magni, reprehenderit sit deleniti excepturi! Tempore magni
                                        adipisci iusto sit illum vero veniam harum quas sunt!Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Quidem culpa alias, illum vero cupiditate fugiat,
                                        placeat nemo assumenda distinctio magni, reprehenderit sit deleniti excepturi!
                                        Tempore magni adipisci iusto sit illum vero veniam harum quas suntLorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Quidem culpa alias, illum vero
                                        cupiditate fugiat, placeat nemo assumenda distinctio magni,Lorem ipsum dolor sit
                                        amet consectetur adipisicing elit. Quidem culpa alias, illum vero cupiditate
                                        fugiat, placeat nemo assumenda distinctio magni, reprehenderit sit deleniti
                                        excepturi! Tempore magni adipisci iusto sit illum vero veniam harum quas
                                        sunt!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem culpa
                                        alias, illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
                                        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit illum
                                        vero veniam harum quas suntLorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Quidem culpa alias, illum vero cupiditate fugiat, placeat nemo assumenda
                                        distinctio magni,Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem
                                        culpa alias, illum vero cupiditate fugiat, placeat nemo assumenda distinctio
                                        magni, reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
                                        illum vero veniam harum quas sunt!Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Quidem culpa alias, illum vero cupiditate fugiat, placeat nemo
                                        assumenda distinctio magni, reprehenderit sit deleniti excepturi! Tempore magni
                                        adipisci iusto sit illum vero veniam harum quas suntLorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Quidem culpa alias, illum vero cupiditate fugiat,
                                        placeat nemo assumenda distinctio magni,Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Quidem culpa alias, illum vero cupiditate fugiat, placeat nemo
                                        assumenda distinctio magni, reprehenderit sit deleniti excepturi! Tempore magni
                                        adipisci iusto sit illum vero veniam harum quas sunt!Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Quidem culpa alias, illum vero cupiditate fugiat,
                                        placeat nemo assumenda distinctio magni, reprehenderit sit deleniti excepturi!
                                        Tempore magni adipisci iusto sit illum vero veniam harum quas suntLorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Quidem culpa alias, illum vero
                                        cupiditate fugiat, placeat nemo assumenda distinctio magni, </p>
                                    <h6 class="fw-semibold" id="scrollspyHeading2">Second heading</h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Aliquam veniam ullam perspiciatis ut fugit atque iure, quae animi ex tempore.
                                        Ducimus illum fugit sapiente quisquam!Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Quidem culpa alias,Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Aliquam veniam ullam perspiciatis ut fugit atque iure, quae
                                        animi ex tempore. Ducimus illum fugit sapiente quisquam!Lorem ipsum dolor sit
                                        amet consectetur adipisicing elit. Quidem culpa alias,Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Aliquam veniam ullam perspiciatis ut fugit atque
                                        iure, quae animi ex tempore. Ducimus illum fugit sapiente quisquam!Lorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Quidem culpa alias,Lorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Aliquam veniam ullam perspiciatis
                                        ut fugit atque iure, quae animi ex tempore. Ducimus illum fugit sapiente
                                        quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem culpa
                                        alias, illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni
                                    </p>
                                    <h6 class="fw-semibold" id="scrollspyHeading3">Third heading</h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Eveniet nobis et quaerat asperiores fugit dignissimos rerum qui minus vitae
                                        nesciunt nisi aspernatur aperiam quidem magnam, cumque repudiandae quod aliquid
                                        quo? </p>
                                    <h6 class="fw-semibold" id="scrollspyHeading4">Fourth heading</h6>
                                    <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Maiores tempora pariatur modi corporis aspernatur eveniet?</p>
                                    <h6 class="fw-semibold" id="scrollspyHeading5">Fifth heading</h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
                                        voluptates consequuntur ipsum eos, magni vitae tempore suscipit excepturi
                                        blanditiis! </p>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;nav id="navbar-example2" class="navbar navbar-light bg-light px-3 mb-3"&gt;
    &lt;ul class="nav nav-pills d-sm-flex d-block"&gt;
        &lt;li class="nav-item"&gt;
            &lt;a class="nav-link" href="#scrollspyHeading1"&gt;First&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="nav-item"&gt;
            &lt;a class="nav-link" href="#scrollspyHeading2"&gt;Second&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="nav-item dropdown"&gt;
            &lt;a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                role="button" aria-expanded="false"&gt;Dropdown&lt;/a&gt;
            &lt;ul class="dropdown-menu"&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="#scrollspyHeading3"&gt;Third&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="#scrollspyHeading4"&gt;Fourth&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;
                    &lt;hr class="dropdown-divider"&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="dropdown-item" href="#scrollspyHeading5"&gt;Fifth&lt;/a&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0"
    class="scrollspy-example bg-light p-3 rounded-2"
    data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0"&gt;
    &lt;h6 class="fw-semibold" id="scrollspyHeading1"&gt;First heading&lt;/h6&gt;
    &lt;p class="text-muted"&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem culpa
        alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
        illum
        vero veniam harum quas sunt!Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
        illum
        vero veniam harum quas suntLorem ipsum dolor sit amet consectetur
        adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio
        magni,Lorem
        ipsum dolor sit amet consectetur adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
        illum
        vero veniam harum quas sunt!Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
        illum
        vero veniam harum quas suntLorem ipsum dolor sit amet consectetur
        adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio
        magni,Lorem
        ipsum dolor sit amet consectetur adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
        illum
        vero veniam harum quas sunt!Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
        illum
        vero veniam harum quas suntLorem ipsum dolor sit amet consectetur
        adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio
        magni,Lorem
        ipsum dolor sit amet consectetur adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
        illum
        vero veniam harum quas sunt!Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
        illum
        vero veniam harum quas suntLorem ipsum dolor sit amet consectetur
        adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio
        magni,Lorem
        ipsum dolor sit amet consectetur adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
        illum
        vero veniam harum quas sunt!Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
        illum
        vero veniam harum quas suntLorem ipsum dolor sit amet consectetur
        adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio
        magni,Lorem
        ipsum dolor sit amet consectetur adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
        illum
        vero veniam harum quas sunt!Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
        illum
        vero veniam harum quas suntLorem ipsum dolor sit amet consectetur
        adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio
        magni,Lorem
        ipsum dolor sit amet consectetur adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
        illum
        vero veniam harum quas sunt!Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
        reprehenderit sit deleniti excepturi! Tempore magni adipisci iusto sit
        illum
        vero veniam harum quas suntLorem ipsum dolor sit amet consectetur
        adipisicing elit. Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni,
    &lt;/p&gt;
    &lt;h6 class="fw-semibold" id="scrollspyHeading2"&gt;Second heading&lt;/h6&gt;
    &lt;p class="text-muted"&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veniam
        ullam
        perspiciatis ut fugit atque iure, quae animi ex tempore. Ducimus illum
        fugit
        sapiente quisquam!Lorem ipsum dolor sit amet consectetur adipisicing
        elit.
        Quidem culpa alias,Lorem ipsum dolor sit amet consectetur adipisicing
        elit.
        Aliquam veniam ullam
        perspiciatis ut fugit atque iure, quae animi ex tempore. Ducimus illum
        fugit
        sapiente quisquam!Lorem ipsum dolor sit amet consectetur adipisicing
        elit.
        Quidem culpa alias,Lorem ipsum dolor sit amet consectetur adipisicing
        elit.
        Aliquam veniam ullam
        perspiciatis ut fugit atque iure, quae animi ex tempore. Ducimus illum
        fugit
        sapiente quisquam!Lorem ipsum dolor sit amet consectetur adipisicing
        elit.
        Quidem culpa alias,Lorem ipsum dolor sit amet consectetur adipisicing
        elit.
        Aliquam veniam ullam
        perspiciatis ut fugit atque iure, quae animi ex tempore. Ducimus illum
        fugit
        sapiente quisquam!Lorem ipsum dolor sit amet consectetur adipisicing
        elit.
        Quidem culpa alias,
        illum vero cupiditate fugiat, placeat nemo assumenda distinctio magni
    &lt;/p&gt;
    &lt;h6 class="fw-semibold" id="scrollspyHeading3"&gt;Third heading&lt;/h6&gt;
    &lt;p class="text-muted"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet nobis
        et
        quaerat asperiores fugit dignissimos rerum qui minus vitae nesciunt nisi
        aspernatur aperiam quidem magnam, cumque repudiandae quod aliquid quo?
    &lt;/p&gt;
    &lt;h6 class="fw-semibold" id="scrollspyHeading4"&gt;Fourth heading&lt;/h6&gt;
    &lt;p class="text-muted"&gt;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores tempora
        pariatur modi corporis aspernatur eveniet?&lt;/p&gt;
    &lt;h6 class="fw-semibold" id="scrollspyHeading5"&gt;Fifth heading&lt;/h6&gt;
    &lt;p class="text-muted"&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam voluptates
        consequuntur ipsum eos, magni vitae tempore suscipit excepturi
        blanditiis!
    &lt;/p&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-1 -->
                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Nested nav </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-4">
                                        <nav id="navbar-example3"
                                            class="navbar bg-light flex-column align-items-stretch p-3">
                                            <nav class="nav nav-pills flex-column"> <a class="nav-link"
                                                    href="#item-1">Item 1</a>
                                                <nav class="nav nav-pills flex-column"> <a class="nav-link ms-3 my-1"
                                                        href="#item-1-1">Item 1-1</a> <a class="nav-link ms-3 my-1"
                                                        href="#item-1-2">Item 1-2</a> </nav> <a class="nav-link"
                                                    href="#item-2">Item 2</a> <a class="nav-link" href="#item-3">Item
                                                    3</a>
                                                <nav class="nav nav-pills flex-column"> <a class="nav-link ms-3 my-1"
                                                        href="#item-3-1">Item 3-1</a> <a class="nav-link ms-3 my-1"
                                                        href="#item-3-2">Item 3-2</a> </nav>
                                            </nav>
                                        </nav>
                                    </div>
                                    <div class="col-md-9 col-sm-8">
                                        <div data-bs-spy="scroll" data-bs-target="#navbar-example3"
                                            data-bs-smooth-scroll="true" tabindex="0" class="scrollspy-example-2">
                                            <div id="item-1">
                                                <h6 class="fw-semibold">Item 1</h6>
                                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Asperiores explicabo in delectus nostrum aut ab quasi placeat
                                                    facilis? Laborum corporis eaque ipsum laboriosam animi possimus.</p>
                                            </div>
                                            <div id="item-1-1">
                                                <h6 class="fw-semibold">Item 1-1</h6>
                                                <p class="text-muted">Lorem ipsum dolor, sit amet consectetur
                                                    adipisicing elit. Placeat minus distinctio itaque odit magnam
                                                    voluptate quos ipsam ab provident! Facere minus aperiam non
                                                    architecto sequi, temporibus aspernatur harum consequatur,
                                                    laboriosam nam ratione adipisci? Doloremque sed ducimus aliquid
                                                    dicta beatae! Quasi voluptas aliquam aliquid error reiciendis enim!
                                                    Iure obcaecati consequatur harum suscipit delectus. </p>
                                            </div>
                                            <div id="item-1-2">
                                                <h6 class="fw-semibold">Item 1-2</h6>
                                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Tempore eius consectetur quae modi iste voluptatibus a quidem
                                                    amet ea corporis neque non quasi nesciunt sunt numquam minima
                                                    maiores eveniet ratione soluta temporibus, quam harum nostrum.
                                                    Laudantium repellat, dolores blanditiis iusto tempora corrupti.
                                                    Distinctio, nesciunt. Tenetur sapiente cumque, totam veniam repellat
                                                    alias quasi, beatae eveniet quas eos, ea aperiam! </p>
                                            </div>
                                            <div id="item-2">
                                                <h6 class="fw-semibold">Item 2</h6>
                                                <p class="text-muted">Lorem ipsum dolor sit, amet consectetur
                                                    adipisicing elit. Eius, itaque debitis. Numquam facere sunt adipisci
                                                    dolores ratione quo magni. Non, officiis minima deserunt
                                                    consequatur, repellendus nihil laudantium aperiam laborum eaque
                                                    animi maxime porro saepe nisi quos. Corporis hic tempore illo
                                                    reiciendis autem, necessitatibus debitis sed molestias.</p>
                                            </div>
                                            <div id="item-3">
                                                <h6 class="fw-semibold">Item 3</h6>
                                                <p class="text-muted">Lorem ipsum dolor sit, amet consectetur
                                                    adipisicing elit. Fuga voluptate sequi exercitationem voluptatem,
                                                    commodi dicta nostrum atque, praesentium consequatur eos at vero
                                                    animi neque deleniti ipsa. Aliquid facere saepe pariatur porro nihil
                                                    blanditiis recusandae dolor fuga? Iusto et omnis neque doloremque,
                                                    cum modi officia facilis placeat repellendus obcaecati mollitia! Id
                                                    aperiam officiis vitae. Fugit quo id veritatis commodi maiores
                                                    numquam nostrum necessitatibus eaque, quia exercitationem distinctio
                                                    ipsa eum, nihil atque perferendis dicta, mollitia sed dignissimos
                                                    incidunt voluptas ab tempore laborum? Fugiat, deserunt. Harum,
                                                    repellat praesentium! Fuga!</p>
                                            </div>
                                            <div id="item-3-1">
                                                <h6 class="fw-semibold">Item 3-1</h6>
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Numquam non deleniti saepe voluptate, est
                                                    praesentium ducimus sapiente aut dignissimos voluptas blanditiis
                                                    reiciendis earum accusantium id ex!</p>
                                            </div>
                                            <div id="item-3-2">
                                                <h6 class="fw-semibold">Item 3-2</h6>
                                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Quo, est. Blanditiis cupiditate voluptate obcaecati eligendi
                                                    iusto amet. Cupiditate laborum, itaque laboriosam culpa sunt
                                                    eligendi. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="row"&gt;
    &lt;div class="col-md-3 col-sm-4"&gt;
        &lt;nav id="navbar-example3"
            class="navbar bg-light flex-column align-items-stretch p-3"&gt;
            &lt;nav class="nav nav-pills flex-column"&gt;
                &lt;a class="nav-link" href="#item-1"&gt;Item 1&lt;/a&gt;
                &lt;nav class="nav nav-pills flex-column"&gt;
                    &lt;a class="nav-link ms-3 my-1" href="#item-1-1"&gt;Item 1-1&lt;/a&gt;
                    &lt;a class="nav-link ms-3 my-1" href="#item-1-2"&gt;Item 1-2&lt;/a&gt;
                &lt;/nav&gt;
                &lt;a class="nav-link" href="#item-2"&gt;Item 2&lt;/a&gt;
                &lt;a class="nav-link" href="#item-3"&gt;Item 3&lt;/a&gt;
                &lt;nav class="nav nav-pills flex-column"&gt;
                    &lt;a class="nav-link ms-3 my-1" href="#item-3-1"&gt;Item 3-1&lt;/a&gt;
                    &lt;a class="nav-link ms-3 my-1" href="#item-3-2"&gt;Item 3-2&lt;/a&gt;
                &lt;/nav&gt;
            &lt;/nav&gt;
        &lt;/nav&gt;
    &lt;/div&gt;
    &lt;div class="col-md-9 col-sm-8"&gt;
        &lt;div data-bs-spy="scroll" data-bs-target="#navbar-example3"
            data-bs-smooth-scroll="true" tabindex="0" class="scrollspy-example-2"&gt;
            &lt;div id="item-1"&gt;
                &lt;h6 class="fw-semibold"&gt;Item 1&lt;/h6&gt;
                &lt;p class="text-muted"&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Asperiores
                    explicabo in delectus nostrum aut ab quasi placeat facilis?
                    Laborum
                    corporis eaque ipsum laboriosam animi possimus.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div id="item-1-1"&gt;
                &lt;h6 class="fw-semibold"&gt;Item 1-1&lt;/h6&gt;
                &lt;p class="text-muted"&gt;Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Placeat
                    minus
                    distinctio itaque odit magnam voluptate quos ipsam ab
                    provident!
                    Facere
                    minus aperiam non architecto sequi, temporibus aspernatur
                    harum
                    consequatur, laboriosam nam ratione adipisci? Doloremque sed
                    ducimus
                    aliquid dicta beatae! Quasi voluptas aliquam aliquid error
                    reiciendis
                    enim! Iure obcaecati consequatur harum suscipit delectus.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div id="item-1-2"&gt;
                &lt;h6 class="fw-semibold"&gt;Item 1-2&lt;/h6&gt;
                &lt;p class="text-muted"&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Tempore
                    eius
                    consectetur quae modi iste voluptatibus a quidem amet ea
                    corporis neque
                    non quasi nesciunt sunt numquam minima maiores eveniet
                    ratione
                    soluta
                    temporibus, quam harum nostrum. Laudantium repellat, dolores
                    blanditiis
                    iusto tempora corrupti. Distinctio, nesciunt. Tenetur
                    sapiente
                    cumque,
                    totam veniam repellat alias quasi, beatae eveniet quas eos,
                    ea
                    aperiam!
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div id="item-2"&gt;
                &lt;h6 class="fw-semibold"&gt;Item 2&lt;/h6&gt;
                &lt;p class="text-muted"&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Eius,
                    itaque
                    debitis. Numquam facere sunt adipisci dolores ratione quo
                    magni.
                    Non,
                    officiis minima deserunt consequatur, repellendus nihil
                    laudantium
                    aperiam laborum eaque animi maxime porro saepe nisi quos.
                    Corporis hic
                    tempore illo reiciendis autem, necessitatibus debitis sed
                    molestias.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div id="item-3"&gt;
                &lt;h6 class="fw-semibold"&gt;Item 3&lt;/h6&gt;
                &lt;p class="text-muted"&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Fuga
                    voluptate
                    sequi exercitationem voluptatem, commodi dicta nostrum
                    atque,
                    praesentium consequatur eos at vero animi neque deleniti
                    ipsa.
                    Aliquid
                    facere saepe pariatur porro nihil blanditiis recusandae
                    dolor
                    fuga?
                    Iusto et omnis neque doloremque, cum modi officia facilis
                    placeat
                    repellendus obcaecati mollitia! Id aperiam officiis vitae.
                    Fugit
                    quo id
                    veritatis commodi maiores numquam nostrum necessitatibus
                    eaque,
                    quia
                    exercitationem distinctio ipsa eum, nihil atque perferendis
                    dicta,
                    mollitia sed dignissimos incidunt voluptas ab tempore
                    laborum?
                    Fugiat,
                    deserunt. Harum, repellat praesentium! Fuga!&lt;/p&gt;
            &lt;/div&gt;
            &lt;div id="item-3-1"&gt;
                &lt;h6 class="fw-semibold"&gt;Item 3-1&lt;/h6&gt;
                &lt;p class="text-muted"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Numquam
                    non
                    deleniti saepe voluptate, est praesentium ducimus sapiente
                    aut
                    dignissimos voluptas blanditiis reiciendis earum accusantium
                    id
                    ex!&lt;/p&gt;
            &lt;/div&gt;
            &lt;div id="item-3-2"&gt;
                &lt;h6 class="fw-semibold"&gt;Item 3-2&lt;/h6&gt;
                &lt;p class="text-muted"&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo,
                    est.
                    Blanditiis cupiditate voluptate obcaecati eligendi iusto
                    amet.
                    Cupiditate laborum, itaque laboriosam culpa sunt eligendi.
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-2 -->
                <!-- Start:: row-3 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> List group </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="bd-example">
                                    <div class="row">
                                        <div class="col-md-2 col-12">
                                            <div id="list-example" class="list-group"> <a
                                                    class="list-group-item list-group-item-action"
                                                    href="#list-item-01">Item 1</a> <a
                                                    class="list-group-item list-group-item-action"
                                                    href="#list-item-02">Item 2</a> <a
                                                    class="list-group-item list-group-item-action"
                                                    href="#list-item-03">Item 3</a> <a
                                                    class="list-group-item list-group-item-action"
                                                    href="#list-item-04">Item 4</a> </div>
                                        </div>
                                        <div class="col-md-10 col-12">
                                            <div data-bs-spy="scroll" data-bs-target="#list-example"
                                                data-bs-smooth-scroll="true" class="scrollspy-example-3" tabindex="0">
                                                <h6 class="fw-semibold" id="list-item-01">Item 1</h6>
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Vel, laborum reiciendis sunt officia doloribus,
                                                    soluta ratione id reprehenderit autem temporibus cupiditate
                                                    necessitatibus atque similique quam ex minus, sint ipsum deleniti
                                                    sed assumenda fugiat numquam saepe incidunt perferendis. Aliquid,
                                                    quas.</p>
                                                <h6 class="fw-semibold" id="list-item-02">Item 2</h6>
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Vel, laborum reiciendis sunt officia doloribus,
                                                    soluta ratione id reprehenderit autem temporibus cupiditate
                                                    necessitatibus atque similique quam ex minus, sint ipsum deleniti
                                                    sed assumenda fugiat numquam saepe incidunt perferendis. Aliquid,
                                                    quas.</p>
                                                <h6 class="fw-semibold" id="list-item-03">Item 3</h6>
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Vel, laborum reiciendis sunt officia doloribus,
                                                    soluta ratione id reprehenderit autem temporibus cupiditate
                                                    necessitatibus atque similique quam ex minus, sint ipsum deleniti
                                                    sed assumenda fugiat numquam saepe incidunt perferendis. Aliquid,
                                                    quas.</p>
                                                <h6 class="fw-semibold" id="list-item-04">Item 4</h6>
                                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Vel, laborum reiciendis sunt officia doloribus,
                                                    soluta ratione id reprehenderit autem temporibus cupiditate
                                                    necessitatibus atque similique quam ex minus, sint ipsum deleniti
                                                    sed assumenda fugiat numquam saepe incidunt perferendis. Aliquid,
                                                    quas.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="bd-example"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-md-2 col-12"&gt;
            &lt;div id="list-example" class="list-group"&gt;
                &lt;a class="list-group-item list-group-item-action"
                    href="#list-item-01"&gt;Item 1&lt;/a&gt;
                &lt;a class="list-group-item list-group-item-action"
                    href="#list-item-02"&gt;Item
                    2&lt;/a&gt;
                &lt;a class="list-group-item list-group-item-action"
                    href="#list-item-03"&gt;Item
                    3&lt;/a&gt;
                &lt;a class="list-group-item list-group-item-action"
                    href="#list-item-04"&gt;Item
                    4&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-md-10 col-12"&gt;
            &lt;div data-bs-spy="scroll" data-bs-target="#list-example"
                data-bs-smooth-scroll="true" class="scrollspy-example-3"
                tabindex="0"&gt;
                &lt;h6 class="fw-semibold" id="list-item-01"&gt;Item 1&lt;/h6&gt;
                &lt;p class="text-muted"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Vel,
                    laborum
                    reiciendis sunt officia doloribus, soluta ratione id
                    reprehenderit
                    autem
                    temporibus cupiditate necessitatibus atque similique quam ex
                    minus,
                    sint
                    ipsum deleniti sed assumenda fugiat numquam saepe incidunt
                    perferendis.
                    Aliquid, quas.&lt;/p&gt;
                &lt;h6 class="fw-semibold" id="list-item-02"&gt;Item 2&lt;/h6&gt;
                &lt;p class="text-muted"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Vel,
                    laborum
                    reiciendis sunt officia doloribus, soluta ratione id
                    reprehenderit
                    autem
                    temporibus cupiditate necessitatibus atque similique quam ex
                    minus,
                    sint
                    ipsum deleniti sed assumenda fugiat numquam saepe incidunt
                    perferendis.
                    Aliquid, quas.&lt;/p&gt;
                &lt;h6 class="fw-semibold" id="list-item-03"&gt;Item 3&lt;/h6&gt;
                &lt;p class="text-muted"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Vel,
                    laborum
                    reiciendis sunt officia doloribus, soluta ratione id
                    reprehenderit
                    autem
                    temporibus cupiditate necessitatibus atque similique quam ex
                    minus,
                    sint
                    ipsum deleniti sed assumenda fugiat numquam saepe incidunt
                    perferendis.
                    Aliquid, quas.&lt;/p&gt;
                &lt;h6 class="fw-semibold" id="list-item-04"&gt;Item 4&lt;/h6&gt;
                &lt;p class="text-muted"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Vel,
                    laborum
                    reiciendis sunt officia doloribus, soluta ratione id
                    reprehenderit
                    autem
                    temporibus cupiditate necessitatibus atque similique quam ex
                    minus,
                    sint
                    ipsum deleniti sed assumenda fugiat numquam saepe incidunt
                    perferendis.
                    Aliquid, quas.&lt;/p&gt;
            &lt;/div&gt;
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
                                <div class="card-title"> Simple anchors </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="bd-example">
                                    <div class="row">
                                        <div class="col-md-2 col-12">
                                            <div id="simple-list-example"
                                                class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
                                                <a class="p-2 rounded" href="#simple-list-item-1">Item 1</a> <a
                                                    class="p-2 rounded" href="#simple-list-item-2">Item 2</a> <a
                                                    class="p-2 rounded" href="#simple-list-item-3">Item 3</a> <a
                                                    class="p-2 rounded" href="#simple-list-item-4">Item 4</a> <a
                                                    class="p-2 rounded" href="#simple-list-item-5">Item 5</a> </div>
                                        </div>
                                        <div class="col-md-10 col-12">
                                            <div data-bs-spy="scroll" data-bs-target="#simple-list-example"
                                                data-bs-offset="0" data-bs-smooth-scroll="true"
                                                class="scrollspy-example-4" tabindex="0">
                                                <h6 class="fw-semibold" id="simple-list-item-1">Item 1</h6>
                                                <p class="text-muted">This is some placeholder content for the scrollspy
                                                    page. Note that as you scroll down the page, the appropriate
                                                    navigation link is highlighted. It's repeated throughout the
                                                    component example. We keep adding some more example copy here to
                                                    emphasize the scrolling and highlighting.</p>
                                                <h6 class="fw-semibold" id="simple-list-item-2">Item 2</h6>
                                                <p class="text-muted">This is some placeholder content for the scrollspy
                                                    page. Note that as you scroll down the page, the appropriate
                                                    navigation link is highlighted. It's repeated throughout the
                                                    component example. We keep adding some more example copy here to
                                                    emphasize the scrolling and highlighting.</p>
                                                <h6 class="fw-semibold" id="simple-list-item-3">Item 3</h6>
                                                <p class="text-muted">This is some placeholder content for the scrollspy
                                                    page. Note that as you scroll down the page, the appropriate
                                                    navigation link is highlighted. It's repeated throughout the
                                                    component example. We keep adding some more example copy here to
                                                    emphasize the scrolling and highlighting.</p>
                                                <h6 class="fw-semibold" id="simple-list-item-4">Item 4</h6>
                                                <p class="text-muted">This is some placeholder content for the scrollspy
                                                    page. Note that as you scroll down the page, the appropriate
                                                    navigation link is highlighted. It's repeated throughout the
                                                    component example. We keep adding some more example copy here to
                                                    emphasize the scrolling and highlighting.</p>
                                                <h6 class="fw-semibold" id="simple-list-item-5">Item 5</h6>
                                                <p class="text-muted">This is some placeholder content for the scrollspy
                                                    page. Note that as you scroll down the page, the appropriate
                                                    navigation link is highlighted. It's repeated throughout the
                                                    component example. We keep adding some more example copy here to
                                                    emphasize the scrolling and highlighting.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="bd-example"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-md-2 col-12"&gt;
            &lt;div id="simple-list-example"
                class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center"&gt;
                &lt;a class="p-2 rounded" href="#simple-list-item-1"&gt;Item 1&lt;/a&gt;
                &lt;a class="p-2 rounded" href="#simple-list-item-2"&gt;Item 2&lt;/a&gt;
                &lt;a class="p-2 rounded" href="#simple-list-item-3"&gt;Item 3&lt;/a&gt;
                &lt;a class="p-2 rounded" href="#simple-list-item-4"&gt;Item 4&lt;/a&gt;
                &lt;a class="p-2 rounded" href="#simple-list-item-5"&gt;Item 5&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-md-10 col-12"&gt;
            &lt;div data-bs-spy="scroll" data-bs-target="#simple-list-example"
                data-bs-offset="0" data-bs-smooth-scroll="true"
                class="scrollspy-example-4" tabindex="0"&gt;
                &lt;h6 class="fw-semibold" id="simple-list-item-1"&gt;Item 1&lt;/h6&gt;
                &lt;p class="text-muted"&gt;This is some placeholder content for the scrollspy page. Note
                    that as you scroll down the page, the appropriate navigation
                    link is highlighted. It's repeated throughout the component
                    example. We keep adding some more example copy here to
                    emphasize
                    the scrolling and highlighting.&lt;/p&gt;
                &lt;h6 class="fw-semibold" id="simple-list-item-2"&gt;Item 2&lt;/h6&gt;
                &lt;p class="text-muted"&gt;This is some placeholder content for the scrollspy page. Note
                    that as you scroll down the page, the appropriate navigation
                    link is highlighted. It's repeated throughout the component
                    example. We keep adding some more example copy here to
                    emphasize
                    the scrolling and highlighting.&lt;/p&gt;
                &lt;h6 class="fw-semibold" id="simple-list-item-3"&gt;Item 3&lt;/h6&gt;
                &lt;p class="text-muted"&gt;This is some placeholder content for the scrollspy page. Note
                    that as you scroll down the page, the appropriate navigation
                    link is highlighted. It's repeated throughout the component
                    example. We keep adding some more example copy here to
                    emphasize
                    the scrolling and highlighting.&lt;/p&gt;
                &lt;h6 class="fw-semibold" id="simple-list-item-4"&gt;Item 4&lt;/h6&gt;
                &lt;p class="text-muted"&gt;This is some placeholder content for the scrollspy page. Note
                    that as you scroll down the page, the appropriate navigation
                    link is highlighted. It's repeated throughout the component
                    example. We keep adding some more example copy here to
                    emphasize
                    the scrolling and highlighting.&lt;/p&gt;
                &lt;h6 class="fw-semibold" id="simple-list-item-5"&gt;Item 5&lt;/h6&gt;
                &lt;p class="text-muted"&gt;This is some placeholder content for the scrollspy page. Note
                    that as you scroll down the page, the appropriate navigation
                    link is highlighted. It's repeated throughout the component
                    example. We keep adding some more example copy here to
                    emphasize
                    the scrolling and highlighting.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-4 -->
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