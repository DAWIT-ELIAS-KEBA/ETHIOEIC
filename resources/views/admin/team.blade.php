@include('layout.link')

<body>

    @include('layout.switcher')

    @include('layout.header')


    @include('layout.sidebar')


        <div class="main-content app-content">
            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-xl-9">
                        <div class="team-members" id="team-members">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="team-header">
                                                <div
                                                    class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="h5 fw-semibold mb-0">Team Ui</div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="input-group"> <input type="text"
                                                                class="form-control bg-light border-0"
                                                                placeholder="Search Person Name"
                                                                aria-describedby="search-team-member"> <button
                                                                class="btn btn-light" type="button"
                                                                id="search-team-member"><i
                                                                    class="ri-search-line text-muted"></i></button>
                                                        </div>
                                                        <div class="dropdown ms-2"> <button
                                                                class="btn btn-icon btn-light btn-wave" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                                    class="ti ti-dots-vertical"></i> </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Delete Team</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Add Member</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card team-member-card">
                                        <div class="teammember-cover-image"> <img
                                                src="../assets/images/media/team-covers/1.jpg" class="card-img-top"
                                                alt="..."> <span class="avatar avatar-xl avatar-rounded"> <img
                                                    src="../assets/images/faces/11.jpg" alt=""> </span> <a
                                                href="javascript:void(0);" class="team-member-star text-warning"> <i
                                                    class="ri-star-fill fs-16"></i> </a> </div>
                                        <div class="card-body p-0">
                                            <div
                                                class="d-flex flex-wrap align-item-center mt-sm-0 mt-5 justify-content-between border-bottom border-block-end-dashed p-3">
                                                <div class="team-member-details flex-fill">
                                                    <p class="mb-0 fw-semibold fs-16 text-truncate"> <a
                                                            href="javascript:void(0);">Alexander Smith</a> </p>
                                                    <p class="mb-0 fs-12 text-muted text-truncate">
                                                        alexandersmith2135@gmail.com</p>
                                                </div>
                                                <div class="dropdown"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                            class="ti ti-dots-vertical"></i> </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Move To</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="team-member-stats d-sm-flex align-items-center justify-content-evenly">
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Member Since</p><span
                                                        class="text-muted fs-12">16 Months</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Projects</p><span
                                                        class="text-muted fs-12">45</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Position</p><span
                                                        class="text-muted fs-12">Member</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-block-start-dashed text-center">
                                            <div class="btn-list">
                                                <div class="btn-list"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light">
                                                        <i class="ri-facebook-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                        <i class="ri-twitter-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                                        <i class="ri-instagram-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                        <i class="ri-github-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                                                        <i class="ri-youtube-line fw-bold"></i> </button> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card team-member-card">
                                        <div class="teammember-cover-image"> <img
                                                src="../assets/images/media/team-covers/2.jpg" class="card-img-top"
                                                alt="..."> <span class="avatar avatar-xl avatar-rounded"> <img
                                                    src="../assets/images/faces/2.jpg" alt=""> </span> <a
                                                href="javascript:void(0);" class="team-member-star text-fixed-white"> <i
                                                    class="ri-star-fill fs-16"></i> </a> </div>
                                        <div class="card-body p-0">
                                            <div
                                                class="d-flex flex-wrap align-item-center mt-sm-0 mt-5 justify-content-between border-bottom border-block-end-dashed p-3">
                                                <div class="team-member-details flex-fill">
                                                    <p class="mb-0 fw-semibold fs-16 text-truncate"> <a
                                                            href="javsscript:void(0);">Alicia Sierra</a> </p>
                                                    <p class="mb-0 fs-12 text-muted text-truncate">
                                                        aliciasierra1645@gmail.com</p>
                                                </div>
                                                <div class="dropdown"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                            class="ti ti-dots-vertical"></i> </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Move To</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="team-member-stats d-sm-flex align-items-center justify-content-evenly">
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Member Since</p><span
                                                        class="text-muted fs-12">2 Years</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Projects</p><span
                                                        class="text-muted fs-12">78</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Position</p><span
                                                        class="text-muted fs-12">Associate</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-block-start-dashed text-center">
                                            <div class="btn-list">
                                                <div class="btn-list"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light">
                                                        <i class="ri-facebook-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                        <i class="ri-twitter-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                                        <i class="ri-instagram-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                        <i class="ri-github-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                                                        <i class="ri-youtube-line fw-bold"></i> </button> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card team-member-card">
                                        <div class="teammember-cover-image"> <img
                                                src="../assets/images/media/team-covers/3.jpg" class="card-img-top"
                                                alt="..."> <span class="avatar avatar-xl avatar-rounded"> <img
                                                    src="../assets/images/faces/4.jpg" alt=""> </span> <a
                                                href="javascript:void(0);" class="team-member-star text-fixed-white"> <i
                                                    class="ri-star-fill fs-16"></i> </a> </div>
                                        <div class="card-body p-0">
                                            <div
                                                class="d-flex flex-wrap align-item-center mt-sm-0 mt-5 justify-content-between border-bottom border-block-end-dashed p-3">
                                                <div class="team-member-details flex-fill">
                                                    <p class="mb-0 fw-semibold fs-16 text-truncate"> <a
                                                            href="javascript:void(0);">Angelica Hose</a> </p>
                                                    <p class="mb-0 fs-12 text-muted text-truncate">angelica143@gmail.com
                                                    </p>
                                                </div>
                                                <div class="dropdown"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                            class="ti ti-dots-vertical"></i> </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Move To</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="team-member-stats d-sm-flex align-items-center justify-content-evenly">
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Member Since</p><span
                                                        class="text-muted fs-12">12 Months</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Projects</p><span
                                                        class="text-muted fs-12">35</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Position</p><span
                                                        class="text-muted fs-12">Member</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-block-start-dashed text-center">
                                            <div class="btn-list">
                                                <div class="btn-list"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light">
                                                        <i class="ri-facebook-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                        <i class="ri-twitter-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                                        <i class="ri-instagram-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                        <i class="ri-github-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                                                        <i class="ri-youtube-line fw-bold"></i> </button> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card team-member-card">
                                        <div class="teammember-cover-image"> <img
                                                src="../assets/images/media/team-covers/4.jpg" class="card-img-top"
                                                alt="..."> <span class="avatar avatar-xl avatar-rounded"> <img
                                                    src="../assets/images/faces/10.jpg" alt=""> </span> <a
                                                href="javascript:void(0);" class="team-member-star text-fixed-white"> <i
                                                    class="ri-star-fill fs-16"></i> </a> </div>
                                        <div class="card-body p-0">
                                            <div
                                                class="d-flex flex-wrap align-item-center mt-sm-0 mt-5 justify-content-between border-bottom border-block-end-dashed p-3">
                                                <div class="team-member-details flex-fill">
                                                    <p class="mb-0 fw-semibold fs-16 text-truncate"> <a
                                                            href="javascript:void(0);">Jhope Joseph</a> </p>
                                                    <p class="mb-0 fs-12 text-muted text-truncate">
                                                        jhope.joseph@gmail.com</p>
                                                </div>
                                                <div class="dropdown"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                            class="ti ti-dots-vertical"></i> </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Move To</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="team-member-stats d-sm-flex align-items-center justify-content-evenly">
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Member Since</p><span
                                                        class="text-muted fs-12">3 Years</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Projects</p><span
                                                        class="text-muted fs-12">126</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Position</p><span
                                                        class="text-muted fs-12">Team Lead</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-block-start-dashed text-center">
                                            <div class="btn-list">
                                                <div class="btn-list"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light">
                                                        <i class="ri-facebook-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                        <i class="ri-twitter-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                                        <i class="ri-instagram-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                        <i class="ri-github-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                                                        <i class="ri-youtube-line fw-bold"></i> </button> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card team-member-card">
                                        <div class="teammember-cover-image"> <img
                                                src="../assets/images/media/team-covers/5.jpg" class="card-img-top"
                                                alt="..."> <span class="avatar avatar-xl avatar-rounded"> <img
                                                    src="../assets/images/faces/13.jpg" alt=""> </span> <a
                                                href="javascript:void(0);" class="team-member-star text-warning"> <i
                                                    class="ri-star-fill fs-16"></i> </a> </div>
                                        <div class="card-body p-0">
                                            <div
                                                class="d-flex flex-wrap align-item-center mt-sm-0 mt-5 justify-content-between border-bottom border-block-end-dashed p-3">
                                                <div class="team-member-details flex-fill">
                                                    <p class="mb-0 fw-semibold fs-16 text-truncate"> <a
                                                            href="javascript:void(0);">King Martin</a> </p>
                                                    <p class="mb-0 fs-12 text-muted text-truncate">
                                                        martinking1998@gmail.com</p>
                                                </div>
                                                <div class="dropdown"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                            class="ti ti-dots-vertical"></i> </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Move To</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="team-member-stats d-sm-flex align-items-center justify-content-evenly">
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Member Since</p><span
                                                        class="text-muted fs-12">28 Months</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Projects</p><span
                                                        class="text-muted fs-12">114</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Position</p><span
                                                        class="text-muted fs-12">Member</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-block-start-dashed text-center">
                                            <div class="btn-list">
                                                <div class="btn-list"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light">
                                                        <i class="ri-facebook-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                        <i class="ri-twitter-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                                        <i class="ri-instagram-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                        <i class="ri-github-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                                                        <i class="ri-youtube-line fw-bold"></i> </button> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card team-member-card">
                                        <div class="teammember-cover-image"> <img
                                                src="../assets/images/media/team-covers/6.jpg" class="card-img-top"
                                                alt="..."> <span class="avatar avatar-xl avatar-rounded"> <img
                                                    src="../assets/images/faces/5.jpg" alt=""> </span> <a
                                                href="javascript:void(0);" class="team-member-star text-fixed-white"> <i
                                                    class="ri-star-fill fs-16"></i> </a> </div>
                                        <div class="card-body p-0">
                                            <div
                                                class="d-flex flex-wrap align-item-center mt-sm-0 mt-5 justify-content-between border-bottom border-block-end-dashed p-3">
                                                <div class="team-member-details flex-fill">
                                                    <p class="mb-0 fw-semibold fs-16 text-truncate"> <a
                                                            href="javascript:void(0);">Susan Sane</a> </p>
                                                    <p class="mb-0 fs-12 text-muted text-truncate">susanasane@gmail.com
                                                    </p>
                                                </div>
                                                <div class="dropdown"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                            class="ti ti-dots-vertical"></i> </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Move To</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="team-member-stats d-sm-flex align-items-center justify-content-evenly">
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Member Since</p><span
                                                        class="text-muted fs-12">18 Months</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Projects</p><span
                                                        class="text-muted fs-12">74</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Position</p><span
                                                        class="text-muted fs-12">Member</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-block-start-dashed text-center">
                                            <div class="btn-list">
                                                <div class="btn-list"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light">
                                                        <i class="ri-facebook-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                        <i class="ri-twitter-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                                        <i class="ri-instagram-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                        <i class="ri-github-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                                                        <i class="ri-youtube-line fw-bold"></i> </button> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card team-member-card">
                                        <div class="teammember-cover-image"> <img
                                                src="../assets/images/media/team-covers/7.jpg" class="card-img-top"
                                                alt="..."> <span class="avatar avatar-xl avatar-rounded"> <img
                                                    src="../assets/images/faces/8.jpg" alt=""> </span> <a
                                                href="javascript:void(0);" class="team-member-star text-fixed-white"> <i
                                                    class="ri-star-fill fs-16"></i> </a> </div>
                                        <div class="card-body p-0">
                                            <div
                                                class="d-flex flex-wrap align-item-center mt-sm-0 mt-5 justify-content-between border-bottom border-block-end-dashed p-3">
                                                <div class="team-member-details flex-fill">
                                                    <p class="mb-0 fw-semibold fs-16 text-truncate"> <a
                                                            href="javascript:void(0);">Brenda Hops</a> </p>
                                                    <p class="mb-0 fs-12 text-muted text-truncate">
                                                        brrendahops245@gmail.com</p>
                                                </div>
                                                <div class="dropdown"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                            class="ti ti-dots-vertical"></i> </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Move To</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="team-member-stats d-sm-flex align-items-center justify-content-evenly">
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Member Since</p><span
                                                        class="text-muted fs-12">16 Months</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Projects</p><span
                                                        class="text-muted fs-12">64</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Position</p><span
                                                        class="text-muted fs-12">Member</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-block-start-dashed text-center">
                                            <div class="btn-list">
                                                <div class="btn-list"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light">
                                                        <i class="ri-facebook-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                        <i class="ri-twitter-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                                        <i class="ri-instagram-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                        <i class="ri-github-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                                                        <i class="ri-youtube-line fw-bold"></i> </button> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card team-member-card">
                                        <div class="teammember-cover-image"> <img
                                                src="../assets/images/media/team-covers/8.jpg" class="card-img-top"
                                                alt="..."> <span class="avatar avatar-xl avatar-rounded"> <img
                                                    src="../assets/images/faces/14.jpg" alt=""> </span> <a
                                                href="javascript:void(0);" class="team-member-star text-fixed-white"> <i
                                                    class="ri-star-fill fs-16"></i> </a> </div>
                                        <div class="card-body p-0">
                                            <div
                                                class="d-flex flex-wrap align-item-center mt-sm-0 mt-5 justify-content-between border-bottom border-block-end-dashed p-3">
                                                <div class="team-member-details flex-fill">
                                                    <p class="mb-0 fw-semibold fs-16 text-truncate"> <a
                                                            href="javascript:void(0);">Paul Rudd</a> </p>
                                                    <p class="mb-0 fs-12 text-muted text-truncate">paulrudd143@gmail.com
                                                    </p>
                                                </div>
                                                <div class="dropdown"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                            class="ti ti-dots-vertical"></i> </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Move To</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="team-member-stats d-sm-flex align-items-center justify-content-evenly">
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Member Since</p><span
                                                        class="text-muted fs-12">7 Months</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Projects</p><span
                                                        class="text-muted fs-12">17</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Position</p><span
                                                        class="text-muted fs-12">Member</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-block-start-dashed text-center">
                                            <div class="btn-list">
                                                <div class="btn-list"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light">
                                                        <i class="ri-facebook-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                        <i class="ri-twitter-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                                        <i class="ri-instagram-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                        <i class="ri-github-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                                                        <i class="ri-youtube-line fw-bold"></i> </button> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="card custom-card team-member-card">
                                        <div class="teammember-cover-image"> <img
                                                src="../assets/images/media/team-covers/9.jpg" class="card-img-top"
                                                alt="..."> <span class="avatar avatar-xl avatar-rounded"> <img
                                                    src="../assets/images/faces/15.jpg" alt=""> </span> <a
                                                href="javascript:void(0);" class="team-member-star text-fixed-white"> <i
                                                    class="ri-star-fill fs-16"></i> </a> </div>
                                        <div class="card-body p-0">
                                            <div
                                                class="d-flex flex-wrap align-item-center mt-sm-0 mt-5 justify-content-between border-bottom border-block-end-dashed p-3">
                                                <div class="team-member-details flex-fill">
                                                    <p class="mb-0 fw-semibold fs-16 text-truncate"> <a
                                                            href="javascript:void(0);">Elisha Jin</a> </p>
                                                    <p class="mb-0 fs-12 text-muted text-truncate">elishajin@gmail.com
                                                    </p>
                                                </div>
                                                <div class="dropdown"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                            class="ti ti-dots-vertical"></i> </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Move To</a></li>
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="team-member-stats d-sm-flex align-items-center justify-content-evenly">
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Member Since</p><span
                                                        class="text-muted fs-12">4 Years</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Projects</p><span
                                                        class="text-muted fs-12">321</span>
                                                </div>
                                                <div class="text-center p-3">
                                                    <p class="fw-semibold mb-0">Position</p><span
                                                        class="text-muted fs-12">Manager</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-block-start-dashed text-center">
                                            <div class="btn-list">
                                                <div class="btn-list"> <button
                                                        class="btn btn-sm btn-icon btn-light btn-wave waves-effect waves-light">
                                                        <i class="ri-facebook-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                        <i class="ri-twitter-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                                        <i class="ri-instagram-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                        <i class="ri-github-line fw-bold"></i> </button> <button
                                                        class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                                                        <i class="ri-youtube-line fw-bold"></i> </button> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled"> <span class="page-link">Previous</span> </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page"> <span
                                                class="page-link">2</span> </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="team-groups">
                            <div class="card custom-card">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h6 class="fw-semibold mb-0">All Teams</h6>
                                    <div> <button class="btn btn-sm btn-primary-light" data-bs-toggle="modal"
                                            data-bs-target="#create-team">Create Team<i
                                                class="ri-add-line ms-1 align-middle"></i></button>
                                        <div class="modal fade" id="create-team" tabindex="-1"
                                            aria-labelledby="create-teamLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title" id="create-teamLabel">Create Team</h6>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body px-4">
                                                        <div class="row gy-3">
                                                            <div class="col-xl-12"> <label for="team-name"
                                                                    class="form-label">Team Name</label> <input
                                                                    type="text" class="form-control" id="team-name"
                                                                    placeholder="Enter Name"> </div>
                                                            <div class="col-xl-12"> <label class="form-label">Maximum
                                                                    Team Limit</label> <select class="form-control"
                                                                    data-trigger name="choices-single-default"
                                                                    id="choices-single-default">
                                                                    <option value="10" selected>10</option>
                                                                    <option value="20">20</option>
                                                                    <option value="30">30</option>
                                                                </select> </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer"> <button type="button"
                                                            class="btn btn-sm btn-light"
                                                            data-bs-dismiss="modal">Cancel</button> <button
                                                            type="button" class="btn btn-sm btn-primary">Create</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="teams-nav" id="teams-nav">
                                        <ul class="list-unstyled mb-0 mt-2">
                                            <li class="pb-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="fs-10 fw-semibold mb-2 text-muted">TEAM UI</div>
                                                    <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Add Member"> <button
                                                            class="btn btn-icon btn-sm btn-success-light btn-wave"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#create-teamui-mem"><i
                                                                class="ri-add-line"></i></button> </div>
                                                </div>
                                            </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded online"> <img
                                                                    src="../assets/images/faces/3.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Angelica Hale</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> </span> </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded offline"> <img
                                                                    src="../assets/images/faces/5.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Mona Magore</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> 8 min </span>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded online"> <img
                                                                    src="../assets/images/faces/15.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Mark Wains</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> </span> </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded online"> <img
                                                                    src="../assets/images/faces/12.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Alex Carey</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> </span> </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded offline"> <img
                                                                    src="../assets/images/faces/7.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Monika Karen</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> 24 mins
                                                            </span> </div>
                                                    </div>
                                                </a> </li>
                                            <li class="pb-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="fs-10 fw-semibold mb-2 text-muted">TEAM REACT</div>
                                                    <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Add Member"> <button
                                                            class="btn btn-icon btn-sm btn-success-light btn-wave"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#create-teamreact-mem"><i
                                                                class="ri-add-line"></i></button> </div>
                                                </div>
                                            </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded online"> <img
                                                                    src="../assets/images/faces/10.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Matthew Ray</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> </span> </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded online"> <img
                                                                    src="../assets/images/faces/8.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Melissa Blue</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> </span> </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded online"> <img
                                                                    src="../assets/images/faces/2.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Brenda Sams</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> </span> </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded offline"> <img
                                                                    src="../assets/images/faces/14.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Muhammed Kher</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> 13 mins
                                                            </span> </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded online"> <img
                                                                    src="../assets/images/faces/4.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Dorga Boavan</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> </span> </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded offline"> <img
                                                                    src="../assets/images/faces/13.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Yashna Polana</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> 19 mins
                                                            </span> </div>
                                                    </div>
                                                </a> </li>
                                            <li class="pb-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="fs-10 fw-semibold mb-2 text-muted">TEAM TESTING</div>
                                                    <div data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Add Member"> <button
                                                            class="btn btn-icon btn-sm btn-success-light btn-wave"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#create-teamtesting-mem"><i
                                                                class="ri-add-line"></i></button> </div>
                                                </div>
                                            </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded online"> <img
                                                                    src="../assets/images/faces/11.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Jason Smith</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> </span> </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded offline"> <img
                                                                    src="../assets/images/faces/6.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Sasha Hops</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> 21 mins
                                                            </span> </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded online"> <img
                                                                    src="../assets/images/faces/9.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Mark Zaker</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> 38 mins
                                                            </span> </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded online"> <img
                                                                    src="../assets/images/faces/16.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Suarez Adam</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> </span> </div>
                                                    </div>
                                                </a> </li>
                                            <li> <a href="javascript:void(0);">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 d-flex align-items-center"> <span
                                                                class="avatar avatar-sm avatar-rounded offline"> <img
                                                                    src="../assets/images/faces/1.jpg" alt=""> </span>
                                                        </div>
                                                        <div class="flex-fill"> <span>Kiara Advensh</span> </div>
                                                        <div> <span class="fs-10 fw-semibold text-muted"> 1 hr </span>
                                                        </div>
                                                    </div>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
        

        
        @include('layout.footer')