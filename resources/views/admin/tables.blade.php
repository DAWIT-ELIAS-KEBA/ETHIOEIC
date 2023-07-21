@include('layout.link')
<body>

    @include('layout.switcher')
    @include('layout.header')
    @include('layout.sidebar')



        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Tables</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tables</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Basic Tables </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Created On</th>
                                                <th scope="col">Number</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Mark</th>
                                                <td>21,Dec 2021</td>
                                                <td>+1234-12340</td>
                                                <td><span class="badge bg-outline-primary">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Monika</th>
                                                <td>29,April 2022</td>
                                                <td>+1523-12459</td>
                                                <td><span class="badge bg-outline-warning">Failed</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Madina</th>
                                                <td>30,Nov 2022</td>
                                                <td>+1982-16234</td>
                                                <td><span class="badge bg-outline-success">Successful</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Bhamako</th>
                                                <td>18,Mar 2022</td>
                                                <td>+1526-10729</td>
                                                <td><span class="badge bg-outline-secondary">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Name&lt;/th&gt;
                &lt;th scope="col"&gt;Created On&lt;/th&gt;
                &lt;th scope="col"&gt;Number&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Mark&lt;/th&gt;
                &lt;td&gt;21,Dec 2021&lt;/td&gt;
                &lt;td&gt;+1234-12340&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-outline-primary"&gt;Completed&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Monika&lt;/th&gt;
                &lt;td&gt;29,April 2022&lt;/td&gt;
                &lt;td&gt;+1523-12459&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-outline-warning"&gt;Failed&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Madina&lt;/th&gt;
                &lt;td&gt;30,Nov 2022&lt;/td&gt;
                &lt;td&gt;+1982-16234&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-outline-success"&gt;Successful&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Bhamako&lt;/th&gt;
                &lt;td&gt;18,Mar 2022&lt;/td&gt;
                &lt;td&gt;+1526-10729&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-outline-secondary"&gt;Pending&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Bordered Tables </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>



                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">User</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/13.jpg" alt="img">
                                                        </span>Sukuro Kim </div>
                                                </th>
                                                <td><span class="badge bg-success-transparent">Active</span></td>
                                                <td>kimosukuro@gmail.com</td>
                                                <td>
                                                    <div class="hstack gap-2 flex-wrap"> <a href="javascript:void(0);"
                                                            class="text-info fs-14 lh-1"><i
                                                                class="ri-edit-line"></i></a> <a
                                                            href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                                                class="ri-delete-bin-5-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 offline avatar-rounded"> <img
                                                                src="../assets/images/faces/6.jpg" alt="img">
                                                        </span>Hasimna </div>
                                                </th>
                                                <td><span class="badge bg-light text-dark">Inactive</span></td>
                                                <td>hasimna2132@gmail.com</td>
                                                <td>
                                                    <div class="hstack gap-2 flex-wrap"> <a href="javascript:void(0);"
                                                            class="text-info fs-14 lh-1"><i
                                                                class="ri-edit-line"></i></a> <a
                                                            href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                                                class="ri-delete-bin-5-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/15.jpg" alt="img">
                                                        </span>Azimo Khan </div>
                                                </th>
                                                <td><span class="badge bg-success-transparent">Active</span></td>
                                                <td>azimokhan421@gmail.com</td>
                                                <td>
                                                    <div class="hstack gap-2 flex-wrap"> <a href="javascript:void(0);"
                                                            class="text-info fs-14 lh-1"><i
                                                                class="ri-edit-line"></i></a> <a
                                                            href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                                                class="ri-delete-bin-5-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/5.jpg" alt="img">
                                                        </span>Samantha Julia </div>
                                                </th>
                                                <td><span class="badge bg-success-transparent">Active</span></td>
                                                <td>julianasams143@gmail.com</td>
                                                <td>
                                                    <div class="hstack gap-2 flex-wrap"> <a href="javascript:void(0);"
                                                            class="text-info fs-14 lh-1"><i
                                                                class="ri-edit-line"></i></a> <a
                                                            href="javascript:void(0);" class="text-danger fs-14 lh-1"><i
                                                                class="ri-delete-bin-5-line"></i></a> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-bordered"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
                &lt;th scope="col"&gt;Email&lt;/th&gt;
                &lt;th scope="col"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/13.jpg" alt="img"&gt;
                        &lt;/span&gt;Sukuro Kim
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Active&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;kimosukuro@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 flex-wrap"&gt;
                        &lt;a href="javascript:void(0);" class="text-info fs-14 lh-1"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="text-danger fs-14 lh-1"&gt;&lt;i
                                class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 offline avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/6.jpg" alt="img"&gt;
                        &lt;/span&gt;Hasimna
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;&lt;span class="badge bg-light text-dark"&gt;Inactive&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;hasimna2132@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 flex-wrap"&gt;
                        &lt;a href="javascript:void(0);" class="text-info fs-14 lh-1"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="text-danger fs-14 lh-1"&gt;&lt;i
                                class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/15.jpg" alt="img"&gt;
                        &lt;/span&gt;Azimo Khan
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Active&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;azimokhan421@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 flex-wrap"&gt;
                        &lt;a href="javascript:void(0);" class="text-info fs-14 lh-1"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="text-danger fs-14 lh-1"&gt;&lt;i
                                class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/5.jpg" alt="img"&gt;
                        &lt;/span&gt;Samantha Julia
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Active&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;julianasams143@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 flex-wrap"&gt;
                        &lt;a href="javascript:void(0);" class="text-info fs-14 lh-1"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="text-danger fs-14 lh-1"&gt;&lt;i
                                class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-1 -->
                <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Bordered Primary </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered border-primary">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"> #0007 </th>
                                                <td> <span class="badge bg-light text-dark">26-04-2022</span> </td>
                                                <td>
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/3.jpg" alt="img">
                                                        </span>Mayor Kelly </div>
                                                </td>
                                                <td><span class="badge bg-primary-transparent">Booked</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> #0008 </th>
                                                <td> <span class="badge bg-light text-dark">15-02-2022</span> </td>
                                                <td>
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/6.jpg" alt="img">
                                                        </span>Wicky Kross </div>
                                                </td>
                                                <td><span class="badge bg-primary-transparent">Booked</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> #0009 </th>
                                                <td> <span class="badge bg-light text-dark">23-05-2022</span> </td>
                                                <td>
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/1.jpg" alt="img">
                                                        </span>Julia Cam </div>
                                                </td>
                                                <td><span class="badge bg-primary-transparent">Booked</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-bordered border-primary"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Order&lt;/th&gt;
                &lt;th scope="col"&gt;Date&lt;/th&gt;
                &lt;th scope="col"&gt;Customer&lt;/th&gt;
                &lt;th scope="col"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0007
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;26-04-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/3.jpg" alt="img"&gt;
                        &lt;/span&gt;Mayor Kelly
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary-transparent"&gt;Booked&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0008
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;15-02-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/6.jpg" alt="img"&gt;
                        &lt;/span&gt;Wicky Kross
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary-transparent"&gt;Booked&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0009
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;23-05-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/1.jpg" alt="img"&gt;
                        &lt;/span&gt;Julia Cam
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary-transparent"&gt;Booked&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;

        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Bordered Success </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered border-success">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"> #0011 </th>
                                                <td> <span class="badge bg-light text-dark">07-01-2022</span> </td>
                                                <td>
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/10.jpg" alt="img">
                                                        </span>Helsenky </div>
                                                </td>
                                                <td><span class="badge bg-success-transparent">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> #0012 </th>
                                                <td> <span class="badge bg-light text-dark">18-05-2022</span> </td>
                                                <td>
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/14.jpg" alt="img">
                                                        </span>Brodus </div>
                                                </td>
                                                <td><span class="badge bg-success-transparent">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> #0013 </th>
                                                <td> <span class="badge bg-light text-dark">19-03-2022</span> </td>
                                                <td>
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/12.jpg" alt="img">
                                                        </span>Chikka Alen </div>
                                                </td>
                                                <td><span class="badge bg-success-transparent">Delivered</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-bordered border-success"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Order&lt;/th&gt;
                &lt;th scope="col"&gt;Date&lt;/th&gt;
                &lt;th scope="col"&gt;Customer&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0011
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;07-01-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/10.jpg" alt="img"&gt;
                        &lt;/span&gt;Helsenky
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Delivered&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0012
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;18-05-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/14.jpg" alt="img"&gt;
                        &lt;/span&gt;Brodus
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Delivered&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0013
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;19-03-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/12.jpg" alt="img"&gt;
                        &lt;/span&gt;Chikka Alen
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Delivered&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Bordered warning </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered border-warning">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"> #0014 </th>
                                                <td> <span class="badge bg-light text-dark">21-02-2022</span> </td>
                                                <td>
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/13.jpg" alt="img">
                                                        </span>Sukuro Kim </div>
                                                </td>
                                                <td><span class="badge bg-warning-transparent">Accepted</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> #0018 </th>
                                                <td> <span class="badge bg-light text-dark">26-03-2022</span> </td>
                                                <td>
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/11.jpg" alt="img">
                                                        </span>Alex Carey </div>
                                                </td>
                                                <td><span class="badge bg-warning-transparent">Accepted</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> #0020 </th>
                                                <td> <span class="badge bg-light text-dark">14-03-2022</span> </td>
                                                <td>
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>Pamila Anderson </div>
                                                </td>
                                                <td><span class="badge bg-warning-transparent">Accepted</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-bordered border-warning"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Order&lt;/th&gt;
                &lt;th scope="col"&gt;Date&lt;/th&gt;
                &lt;th scope="col"&gt;Customer&lt;/th&gt;
                &lt;th scope="col"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0014
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;21-02-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/13.jpg" alt="img"&gt;
                        &lt;/span&gt;Sukuro Kim
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning-transparent"&gt;Accepted&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0018
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;26-03-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/11.jpg" alt="img"&gt;
                        &lt;/span&gt;Alex Carey
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning-transparent"&gt;Accepted&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    #0020
                &lt;/th&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-light text-dark"&gt;14-03-2022&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
                        &lt;/span&gt;Pamila Anderson
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning-transparent"&gt;Accepted&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
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
                                <div class="card-title"> Table Without Borders </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Harshrath</th>
                                                <td>#5182-3467</td>
                                                <td>24 May 2022</td>
                                                <td><span class="badge bg-primary">Fixed</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Zozo Hadid</th>
                                                <td>#5182-3412</td>
                                                <td>02 July 2022</td>
                                                <td><span class="badge bg-warning">In Progress</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Martiana</th>
                                                <td>#5182-3423</td>
                                                <td>15 April 2022</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alex Carey</th>
                                                <td>#5182-3456</td>
                                                <td>17 March 2022</td>
                                                <td><span class="badge bg-danger">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-borderless"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User Name&lt;/th&gt;
                &lt;th scope="col"&gt;Transaction Id&lt;/th&gt;
                &lt;th scope="col"&gt;Created&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Harshrath&lt;/th&gt;
                &lt;td&gt;#5182-3467&lt;/td&gt;
                &lt;td&gt;24 May 2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;Fixed&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Zozo Hadid&lt;/th&gt;
                &lt;td&gt;#5182-3412&lt;/td&gt;
                &lt;td&gt;02 July 2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning"&gt;In Progress&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Martiana&lt;/th&gt;
                &lt;td&gt;#5182-3423&lt;/td&gt;
                &lt;td&gt;15 April 2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success"&gt;Completed&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Alex Carey&lt;/th&gt;
                &lt;td&gt;#5182-3456&lt;/td&gt;
                &lt;td&gt;17 March 2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-danger"&gt;Pending&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Table Group Divideres </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product</th>
                                                <th scope="col">Seller</th>
                                                <th scope="col">Sale Percentage</th>
                                                <th scope="col">Qunatity Sold</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <tr>
                                                <th scope="row">Smart Watch</th>
                                                <td>Slowtrack.inc</td>
                                                <td><a href="#" class="text-success">24.23%<i
                                                            class="ri-arrow-up-fill ms-1"></i></a></td>
                                                <td>250/1786</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">White Sneakers</th>
                                                <td>American & Co.inc</td>
                                                <td><a href="#" class="text-danger">12.45%<i
                                                            class="ri-arrow-down-fill ms-1"></i></a></td>
                                                <td>123/985</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Baseball Bat</th>
                                                <td>Sports Company</td>
                                                <td><a href="#" class="text-success">06.64%<i
                                                            class="ri-arrow-up-fill ms-1"></i></a></td>
                                                <td>124/232</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Black Hoodie</th>
                                                <td>Renonds Fabrics</td>
                                                <td><a href="#" class="text-success">14.42%<i
                                                            class="ri-arrow-up-fill ms-1"></i></a></td>
                                                <td>192/2456</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Product&lt;/th&gt;
                &lt;th scope="col"&gt;Seller&lt;/th&gt;
                &lt;th scope="col"&gt;Sale Percentage&lt;/th&gt;
                &lt;th scope="col"&gt;Qunatity Sold&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody class="table-group-divider"&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Smart Watch&lt;/th&gt;
                &lt;td&gt;Slowtrack.inc&lt;/td&gt;
                &lt;td&gt;&lt;a href="#" class="text-success"&gt;24.23%&lt;i
                            class="ri-arrow-up-fill ms-1"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/td&gt;
                &lt;td&gt;250/1786&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;White Sneakers&lt;/th&gt;
                &lt;td&gt;American & Co.inc&lt;/td&gt;
                &lt;td&gt;&lt;a href="#" class="text-danger"&gt;12.45%&lt;i
                            class="ri-arrow-down-fill ms-1"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/td&gt;
                &lt;td&gt;123/985&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Baseball Bat&lt;/th&gt;
                &lt;td&gt;Sports Company&lt;/td&gt;
                &lt;td&gt;&lt;a href="#" class="text-success"&gt;06.64%&lt;i
                            class="ri-arrow-up-fill ms-1"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/td&gt;
                &lt;td&gt;124/232&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Black Hoodie&lt;/th&gt;
                &lt;td&gt;Renonds Fabrics&lt;/td&gt;
                &lt;td&gt;&lt;a href="#" class="text-success"&gt;14.42%&lt;i
                            class="ri-arrow-up-fill ms-1"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/td&gt;
                &lt;td&gt;192/2456&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
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
                                <div class="card-title"> Striped rows </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">2022R-01</th>
                                                <td>27-010-2022</td>
                                                <td>Moracco</td>
                                                <td> <button class="btn btn-sm btn-success btn-wave"> <i
                                                            class="ri-download-2-line align-middle me-2 d-inline-block"></i>Download
                                                    </button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2022R-02</th>
                                                <td>28-10-2022</td>
                                                <td>Thornton</td>
                                                <td> <button class="btn btn-sm btn-success btn-wave"> <i
                                                            class="ri-download-2-line align-middle me-2 d-inline-block"></i>Download
                                                    </button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2022R-03</th>
                                                <td>22-10-2022</td>
                                                <td>Larry Bird</td>
                                                <td> <button class="btn btn-sm btn-success btn-wave"> <i
                                                            class="ri-download-2-line align-middle me-2 d-inline-block"></i>Download
                                                    </button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2022R-04</th>
                                                <td>29-09-2022</td>
                                                <td>Erica Sean</td>
                                                <td> <button class="btn btn-sm btn-success btn-wave"> <i
                                                            class="ri-download-2-line align-middle me-2 d-inline-block"></i>Download
                                                    </button> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-striped"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;ID&lt;/th&gt;
                &lt;th scope="col"&gt;Date&lt;/th&gt;
                &lt;th scope="col"&gt;Customer&lt;/th&gt;
                &lt;th scope="col"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-01&lt;/th&gt;
                &lt;td&gt;27-010-2022&lt;/td&gt;
                &lt;td&gt;Moracco&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success btn-wave"&gt;
                        &lt;i class="ri-download-2-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Download
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-02&lt;/th&gt;
                &lt;td&gt;28-10-2022&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success btn-wave"&gt;
                        &lt;i class="ri-download-2-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Download
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-03&lt;/th&gt;
                &lt;td&gt;22-10-2022&lt;/td&gt;
                &lt;td&gt;Larry Bird&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success btn-wave"&gt;
                        &lt;i class="ri-download-2-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Download
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-04&lt;/th&gt;
                &lt;td&gt;29-09-2022&lt;/td&gt;
                &lt;td&gt;Erica Sean&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success btn-wave"&gt;
                        &lt;i class="ri-download-2-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Download
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Striped columns </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-striped-columns">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">2022R-01</th>
                                                <td>27-010-2022</td>
                                                <td>Moracco</td>
                                                <td> <button class="btn btn-sm btn-danger btn-wave"> <i
                                                            class="ri-delete-bin-line align-middle me-2 d-inline-block"></i>Delete
                                                    </button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2022R-02</th>
                                                <td>28-10-2022</td>
                                                <td>Thornton</td>
                                                <td> <button class="btn btn-sm btn-danger btn-wave"> <i
                                                            class="ri-delete-bin-line align-middle me-2 d-inline-block"></i>Delete
                                                    </button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2022R-03</th>
                                                <td>22-10-2022</td>
                                                <td>Larry Bird</td>
                                                <td> <button class="btn btn-sm btn-danger btn-wave"> <i
                                                            class="ri-delete-bin-line align-middle me-2 d-inline-block"></i>Delete
                                                    </button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2022R-04</th>
                                                <td>29-09-2022</td>
                                                <td>Erica Sean</td>
                                                <td> <button class="btn btn-sm btn-danger btn-wave"> <i
                                                            class="ri-delete-bin-line align-middle me-2 d-inline-block"></i>Delete
                                                    </button> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-striped-columns"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;ID&lt;/th&gt;
                &lt;th scope="col"&gt;Date&lt;/th&gt;
                &lt;th scope="col"&gt;Customer&lt;/th&gt;
                &lt;th scope="col"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-01&lt;/th&gt;
                &lt;td&gt;27-010-2022&lt;/td&gt;
                &lt;td&gt;Moracco&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger btn-wave"&gt;
                        &lt;i class="ri-delete-bin-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Delete
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-02&lt;/th&gt;
                &lt;td&gt;28-10-2022&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger btn-wave"&gt;
                        &lt;i class="ri-delete-bin-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Delete
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-03&lt;/th&gt;
                &lt;td&gt;22-10-2022&lt;/td&gt;
                &lt;td&gt;Larry Bird&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger btn-wave"&gt;
                        &lt;i class="ri-delete-bin-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Delete
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2022R-04&lt;/th&gt;
                &lt;td&gt;29-09-2022&lt;/td&gt;
                &lt;td&gt;Erica Sean&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger btn-wave"&gt;
                        &lt;i class="ri-delete-bin-line align-middle me-2 d-inline-block"&gt;&lt;/i&gt;Delete
                    &lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
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
                                <div class="card-title"> Primary Table </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-primary">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-primary"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;#&lt;/th&gt;
                &lt;th scope="col"&gt;First&lt;/th&gt;
                &lt;th scope="col"&gt;Last&lt;/th&gt;
                &lt;th scope="col"&gt;Handle&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Mark&lt;/td&gt;
                &lt;td&gt;Otto&lt;/td&gt;
                &lt;td&gt;@mdo&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2&lt;/th&gt;
                &lt;td&gt;Jacob&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@fat&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;Larry the Bird&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@twitter&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Secondary Table </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-secondary">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-secondary"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;#&lt;/th&gt;
                &lt;th scope="col"&gt;First&lt;/th&gt;
                &lt;th scope="col"&gt;Last&lt;/th&gt;
                &lt;th scope="col"&gt;Handle&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Mark&lt;/td&gt;
                &lt;td&gt;Otto&lt;/td&gt;
                &lt;td&gt;@mdo&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2&lt;/th&gt;
                &lt;td&gt;Jacob&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@fat&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;Larry the Bird&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@twitter&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Warning Table </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-warning">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-warning"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;#&lt;/th&gt;
                &lt;th scope="col"&gt;First&lt;/th&gt;
                &lt;th scope="col"&gt;Last&lt;/th&gt;
                &lt;th scope="col"&gt;Handle&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Mark&lt;/td&gt;
                &lt;td&gt;Otto&lt;/td&gt;
                &lt;td&gt;@mdo&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2&lt;/th&gt;
                &lt;td&gt;Jacob&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@fat&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;Larry the Bird&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@twitter&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Danger Table </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-danger">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-danger"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;#&lt;/th&gt;
                &lt;th scope="col"&gt;First&lt;/th&gt;
                &lt;th scope="col"&gt;Last&lt;/th&gt;
                &lt;th scope="col"&gt;Handle&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Mark&lt;/td&gt;
                &lt;td&gt;Otto&lt;/td&gt;
                &lt;td&gt;@mdo&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2&lt;/th&gt;
                &lt;td&gt;Jacob&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@fat&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;Larry the Bird&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@twitter&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Dark Table </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-dark"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;#&lt;/th&gt;
                &lt;th scope="col"&gt;First&lt;/th&gt;
                &lt;th scope="col"&gt;Last&lt;/th&gt;
                &lt;th scope="col"&gt;Handle&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Mark&lt;/td&gt;
                &lt;td&gt;Otto&lt;/td&gt;
                &lt;td&gt;@mdo&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2&lt;/th&gt;
                &lt;td&gt;Jacob&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@fat&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;Larry the Bird&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@twitter&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Success Table With Striped Rows </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-success table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td>Thornton</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-success table-striped"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;#&lt;/th&gt;
                &lt;th scope="col"&gt;First&lt;/th&gt;
                &lt;th scope="col"&gt;Last&lt;/th&gt;
                &lt;th scope="col"&gt;Handle&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Mark&lt;/td&gt;
                &lt;td&gt;Otto&lt;/td&gt;
                &lt;td&gt;@mdo&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2&lt;/th&gt;
                &lt;td&gt;Jacob&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@fat&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;Larry the Bird&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@twitter&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-5 -->
                <!-- Start:: row-6 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Hoverable Rows</div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product Manager</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Team</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="../assets/images/faces/10.jpg" alt="img"> </div>
                                                        <div>
                                                            <div class="lh-1"> <span>Joanna Smith</span> </div>
                                                            <div class="lh-1"> <span
                                                                    class="fs-11 text-muted">joannasmith14@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-primary-transparent">Fashion</span></td>
                                                <td>
                                                    <div class="avatar-list-stacked"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/2.jpg" alt="img"> </span>
                                                        <span class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/8.jpg" alt="img"> </span>
                                                        <span class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/2.jpg" alt="img"> </span> <a
                                                            class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                            href="javascript:void(0);"> +5 </a> </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 52%" aria-valuenow="52" aria-valuemin="0"
                                                            aria-valuemax="100"> </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="../assets/images/faces/2.jpg" alt="img"> </div>
                                                        <div>
                                                            <div class="lh-1"> <span>Kara Kova</span> </div>
                                                            <div class="lh-1"> <span
                                                                    class="fs-11 text-muted">milesakara@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-warning-transparent">Clothing</span></td>
                                                <td>
                                                    <div class="avatar-list-stacked"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/4.jpg" alt="img"> </span>
                                                        <span class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/6.jpg" alt="img"> </span> <a
                                                            class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                            href="javascript:void(0);"> +6 </a> </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                            aria-valuemax="100"> </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="../assets/images/faces/16.jpg" alt="img"> </div>
                                                        <div>
                                                            <div class="lh-1"> <span>Donald Trimb</span> </div>
                                                            <div class="lh-1"> <span
                                                                    class="fs-11 text-muted">donaldo21@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-dark-transparent">Electronics</span></td>
                                                <td>
                                                    <div class="avatar-list-stacked"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/1.jpg" alt="img"> </span>
                                                        <span class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/11.jpg" alt="img"> </span>
                                                        <span class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/15.jpg" alt="img"> </span>
                                                        <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                            href="javascript:void(0);"> +2 </a> </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 17%" aria-valuenow="17" aria-valuemin="0"
                                                            aria-valuemax="100"> </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="../assets/images/faces/13.jpg" alt="img"> </div>
                                                        <div>
                                                            <div class="lh-1"> <span>Justin Gaethje</span> </div>
                                                            <div class="lh-1"> <span
                                                                    class="fs-11 text-muted">justingae@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-danger-transparent">Sports</span></td>
                                                <td>
                                                    <div class="avatar-list-stacked"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/4.jpg" alt="img"> </span>
                                                        <span class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/6.jpg" alt="img"> </span> <a
                                                            class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                            href="javascript:void(0);"> +5 </a> </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 72%" aria-valuenow="72" aria-valuemin="0"
                                                            aria-valuemax="100"> </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-hover"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Product Manager&lt;/th&gt;
                &lt;th scope="col"&gt;Category&lt;/th&gt;
                &lt;th scope="col"&gt;Team&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/10.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Joanna Smith&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span
                                    class="fs-11 text-muted"&gt;joannasmith14@gmail.com&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary-transparent"&gt;Fashion&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/8.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                            href="javascript:void(0);"&gt;
                            +5
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar"
                            style="width: 52%" aria-valuenow="52" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Kara Kova&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span
                                    class="fs-11 text-muted"&gt;milesakara@gmail.com&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning-transparent"&gt;Clothing&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/4.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/6.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                            href="javascript:void(0);"&gt;
                            +6
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar"
                            style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/16.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Donald Trimb&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span
                                    class="fs-11 text-muted"&gt;donaldo21@gmail.com&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-dark-transparent"&gt;Electronics&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/1.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/11.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/15.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                            href="javascript:void(0);"&gt;
                            +2
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar"
                            style="width: 17%" aria-valuenow="17" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/13.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Justin Gaethje&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span
                                    class="fs-11 text-muted"&gt;justingae@gmail.com&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-danger-transparent"&gt;Sports&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/4.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/6.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                            href="javascript:void(0);"&gt;
                            +5
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar"
                            style="width: 72%" aria-valuenow="72" aria-valuemin="0"
                            aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Hoverable rows With striped rows </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Invoice</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">IN-2032</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="../assets/images/faces/15.jpg" alt="img"> </div>
                                                        <div>
                                                            <div class="lh-1"> <span>Mark Cruise</span> </div>
                                                            <div class="lh-1"> <span
                                                                    class="fs-11 text-muted">markcruise24@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success-transparent"><i
                                                            class="ri-check-fill align-middle me-1"></i>Paid</span></td>
                                                <td>Jul 26,2022</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">IN-2022</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="../assets/images/faces/12.jpg" alt="img"> </div>
                                                        <div>
                                                            <div class="lh-1"> <span>Charanjeep</span> </div>
                                                            <div class="lh-1"> <span
                                                                    class="fs-11 text-muted">charanjeep@gmail.in</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-success-transparent"><i
                                                            class="ri-check-fill align-middle me-1"></i>Paid</span></td>
                                                <td>Mar 14,2022</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">IN-2014</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="../assets/images/faces/5.jpg" alt="img"> </div>
                                                        <div>
                                                            <div class="lh-1"> <span>Samantha Julie</span> </div>
                                                            <div class="lh-1"> <span
                                                                    class="fs-11 text-muted">julie453@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-danger-transparent"><i
                                                            class="ri-close-fill align-middle me-1"></i>Cancelled</span>
                                                </td>
                                                <td>Feb 1,2022</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">IN-2036</th>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="../assets/images/faces/11.jpg" alt="img"> </div>
                                                        <div>
                                                            <div class="lh-1"> <span>Simon Cohen</span> </div>
                                                            <div class="lh-1"> <span
                                                                    class="fs-11 text-muted">simon@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-light text-dark"><i
                                                            class="ri-reply-line align-middle me-1"></i>Refunded</span>
                                                </td>
                                                <td>Apr 24,2022</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-striped table-hover"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Invoice&lt;/th&gt;
                &lt;th scope="col"&gt;Customer&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
                &lt;th scope="col"&gt;Date&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;IN-2032&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/15.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Mark Cruise&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span
                                    class="fs-11 text-muted"&gt;markcruise24@gmail.com&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;&lt;i
                            class="ri-check-fill align-middle me-1"&gt;&lt;/i&gt;Paid&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;Jul 26,2022&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;IN-2022&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/12.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Charanjeep&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span
                                    class="fs-11 text-muted"&gt;charanjeep@gmail.in&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;&lt;i
                            class="ri-check-fill align-middle me-1"&gt;&lt;/i&gt;Paid&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;Mar 14,2022&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;IN-2014&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/5.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Samantha Julie&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span class="fs-11 text-muted"&gt;julie453@gmail.com&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-danger-transparent"&gt;&lt;i
                            class="ri-close-fill align-middle me-1"&gt;&lt;/i&gt;Cancelled&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Feb 1,2022&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;IN-2036&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/11.jpg" alt="img"&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span&gt;Simon Cohen&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="lh-1"&gt;
                                &lt;span class="fs-11 text-muted"&gt;simon@gmail.com&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-light text-dark"&gt;&lt;i
                            class="ri-reply-line align-middle me-1"&gt;&lt;/i&gt;Refunded&lt;/span&gt;
                &lt;/td&gt;
                &lt;td&gt;Apr 24,2022&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-6 -->
                <!-- Start:: row-7 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Table Head Primary </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Harshrath</th>
                                                <td>#5182-3467</td>
                                                <td>24 May 2022</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                                class="ri-edit-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Zozo Hadid</th>
                                                <td>#5182-3412</td>
                                                <td>02 July 2022</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                                class="ri-edit-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Martiana</th>
                                                <td>#5182-3423</td>
                                                <td>15 April 2022</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                                class="ri-edit-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alex Carey</th>
                                                <td>#5182-3456</td>
                                                <td>17 March 2022</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                                class="ri-edit-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                class="ri-delete-bin-line"></i></a> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-primary"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User Name&lt;/th&gt;
                &lt;th scope="col"&gt;Transaction Id&lt;/th&gt;
                &lt;th scope="col"&gt;Created&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Harshrath&lt;/th&gt;
                &lt;td&gt;#5182-3467&lt;/td&gt;
                &lt;td&gt;24 May 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"&gt;&lt;i
                                class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"&gt;&lt;i
                                class="ri-delete-bin-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Zozo Hadid&lt;/th&gt;
                &lt;td&gt;#5182-3412&lt;/td&gt;
                &lt;td&gt;02 July 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"&gt;&lt;i
                                class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"&gt;&lt;i
                                class="ri-delete-bin-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Martiana&lt;/th&gt;
                &lt;td&gt;#5182-3423&lt;/td&gt;
                &lt;td&gt;15 April 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"&gt;&lt;i
                                class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"&gt;&lt;i
                                class="ri-delete-bin-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Alex Carey&lt;/th&gt;
                &lt;td&gt;#5182-3456&lt;/td&gt;
                &lt;td&gt;17 March 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill"&gt;&lt;i
                                class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"&gt;&lt;i
                                class="ri-delete-bin-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Table Head warning </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="table-warning">
                                            <tr>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Harshrath</th>
                                                <td>#5182-3467</td>
                                                <td>24 May 2022</td>
                                                <td> <button class="btn btn-sm btn-primary-light">Pending</button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Zozo Hadid</th>
                                                <td>#5182-3412</td>
                                                <td>02 July 2022</td>
                                                <td> <button class="btn btn-sm btn-primary-light">Pending</button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Martiana</th>
                                                <td>#5182-3423</td>
                                                <td>15 April 2022</td>
                                                <td> <button class="btn btn-sm btn-danger-light">Rejected</button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alex Carey</th>
                                                <td>#5182-3456</td>
                                                <td>17 March 2022</td>
                                                <td> <button class="btn btn-sm btn-success-light">Processed</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-warning"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User Name&lt;/th&gt;
                &lt;th scope="col"&gt;Transaction Id&lt;/th&gt;
                &lt;th scope="col"&gt;Created&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Harshrath&lt;/th&gt;
                &lt;td&gt;#5182-3467&lt;/td&gt;
                &lt;td&gt;24 May 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Zozo Hadid&lt;/th&gt;
                &lt;td&gt;#5182-3412&lt;/td&gt;
                &lt;td&gt;02 July 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Martiana&lt;/th&gt;
                &lt;td&gt;#5182-3423&lt;/td&gt;
                &lt;td&gt;15 April 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger-light"&gt;Rejected&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Alex Carey&lt;/th&gt;
                &lt;td&gt;#5182-3456&lt;/td&gt;
                &lt;td&gt;17 March 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success-light"&gt;Processed&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Table Head Success </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="table-success">
                                            <tr>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Harshrath</th>
                                                <td>#5182-3467</td>
                                                <td>24 May 2022</td>
                                                <td> <button class="btn btn-sm btn-primary-light">Pending</button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Zozo Hadid</th>
                                                <td>#5182-3412</td>
                                                <td>02 July 2022</td>
                                                <td> <button class="btn btn-sm btn-primary-light">Pending</button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Martiana</th>
                                                <td>#5182-3423</td>
                                                <td>15 April 2022</td>
                                                <td> <button class="btn btn-sm btn-danger-light">Rejected</button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alex Carey</th>
                                                <td>#5182-3456</td>
                                                <td>17 March 2022</td>
                                                <td> <button class="btn btn-sm btn-success-light">Processed</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-success"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User Name&lt;/th&gt;
                &lt;th scope="col"&gt;Transaction Id&lt;/th&gt;
                &lt;th scope="col"&gt;Created&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Harshrath&lt;/th&gt;
                &lt;td&gt;#5182-3467&lt;/td&gt;
                &lt;td&gt;24 May 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Zozo Hadid&lt;/th&gt;
                &lt;td&gt;#5182-3412&lt;/td&gt;
                &lt;td&gt;02 July 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Martiana&lt;/th&gt;
                &lt;td&gt;#5182-3423&lt;/td&gt;
                &lt;td&gt;15 April 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger-light"&gt;Rejected&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Alex Carey&lt;/th&gt;
                &lt;td&gt;#5182-3456&lt;/td&gt;
                &lt;td&gt;17 March 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success-light"&gt;Processed&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Table Head Info </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="table-info">
                                            <tr>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Harshrath</th>
                                                <td>#5182-3467</td>
                                                <td>24 May 2022</td>
                                                <td> <button class="btn btn-sm btn-primary-light">Pending</button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Zozo Hadid</th>
                                                <td>#5182-3412</td>
                                                <td>02 July 2022</td>
                                                <td> <button class="btn btn-sm btn-primary-light">Pending</button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Martiana</th>
                                                <td>#5182-3423</td>
                                                <td>15 April 2022</td>
                                                <td> <button class="btn btn-sm btn-danger-light">Rejected</button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alex Carey</th>
                                                <td>#5182-3456</td>
                                                <td>17 March 2022</td>
                                                <td> <button class="btn btn-sm btn-success-light">Processed</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-info"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User Name&lt;/th&gt;
                &lt;th scope="col"&gt;Transaction Id&lt;/th&gt;
                &lt;th scope="col"&gt;Created&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Harshrath&lt;/th&gt;
                &lt;td&gt;#5182-3467&lt;/td&gt;
                &lt;td&gt;24 May 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Zozo Hadid&lt;/th&gt;
                &lt;td&gt;#5182-3412&lt;/td&gt;
                &lt;td&gt;02 July 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Martiana&lt;/th&gt;
                &lt;td&gt;#5182-3423&lt;/td&gt;
                &lt;td&gt;15 April 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger-light"&gt;Rejected&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Alex Carey&lt;/th&gt;
                &lt;td&gt;#5182-3456&lt;/td&gt;
                &lt;td&gt;17 March 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success-light"&gt;Processed&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Table Head Secondary </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="table-secondary">
                                            <tr>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Harshrath</th>
                                                <td>#5182-3467</td>
                                                <td>24 May 2022</td>
                                                <td> <button class="btn btn-sm btn-primary-light">Pending</button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Zozo Hadid</th>
                                                <td>#5182-3412</td>
                                                <td>02 July 2022</td>
                                                <td> <button class="btn btn-sm btn-primary-light">Pending</button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Martiana</th>
                                                <td>#5182-3423</td>
                                                <td>15 April 2022</td>
                                                <td> <button class="btn btn-sm btn-danger-light">Rejected</button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alex Carey</th>
                                                <td>#5182-3456</td>
                                                <td>17 March 2022</td>
                                                <td> <button class="btn btn-sm btn-success-light">Processed</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-secondary"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User Name&lt;/th&gt;
                &lt;th scope="col"&gt;Transaction Id&lt;/th&gt;
                &lt;th scope="col"&gt;Created&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Harshrath&lt;/th&gt;
                &lt;td&gt;#5182-3467&lt;/td&gt;
                &lt;td&gt;24 May 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Zozo Hadid&lt;/th&gt;
                &lt;td&gt;#5182-3412&lt;/td&gt;
                &lt;td&gt;02 July 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Martiana&lt;/th&gt;
                &lt;td&gt;#5182-3423&lt;/td&gt;
                &lt;td&gt;15 April 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger-light"&gt;Rejected&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Alex Carey&lt;/th&gt;
                &lt;td&gt;#5182-3456&lt;/td&gt;
                &lt;td&gt;17 March 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success-light"&gt;Processed&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Table Head Danger </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="table-danger">
                                            <tr>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Harshrath</th>
                                                <td>#5182-3467</td>
                                                <td>24 May 2022</td>
                                                <td> <button class="btn btn-sm btn-primary-light">Pending</button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Zozo Hadid</th>
                                                <td>#5182-3412</td>
                                                <td>02 July 2022</td>
                                                <td> <button class="btn btn-sm btn-primary-light">Pending</button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Martiana</th>
                                                <td>#5182-3423</td>
                                                <td>15 April 2022</td>
                                                <td> <button class="btn btn-sm btn-danger-light">Rejected</button> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alex Carey</th>
                                                <td>#5182-3456</td>
                                                <td>17 March 2022</td>
                                                <td> <button class="btn btn-sm btn-success-light">Processed</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-danger"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User Name&lt;/th&gt;
                &lt;th scope="col"&gt;Transaction Id&lt;/th&gt;
                &lt;th scope="col"&gt;Created&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Harshrath&lt;/th&gt;
                &lt;td&gt;#5182-3467&lt;/td&gt;
                &lt;td&gt;24 May 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Zozo Hadid&lt;/th&gt;
                &lt;td&gt;#5182-3412&lt;/td&gt;
                &lt;td&gt;02 July 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-primary-light"&gt;Pending&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Martiana&lt;/th&gt;
                &lt;td&gt;#5182-3423&lt;/td&gt;
                &lt;td&gt;15 April 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-danger-light"&gt;Rejected&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Alex Carey&lt;/th&gt;
                &lt;td&gt;#5182-3456&lt;/td&gt;
                &lt;td&gt;17 March 2022&lt;/td&gt;
                &lt;td&gt;
                    &lt;button class="btn btn-sm btn-success-light"&gt;Processed&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-7 -->
                <!-- Start:: row-8 -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Table Foot </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Team</th>
                                                <th scope="col">Matches Won</th>
                                                <th scope="col">Win Ratio</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"> 01 </th>
                                                <td> Manchester </td>
                                                <td> 232 </td>
                                                <td> <span class="badge bg-primary">42%</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> 02 </th>
                                                <td> Barcelona </td>
                                                <td> 175 </td>
                                                <td><span class="badge bg-primary">58%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> 03 </th>
                                                <td> Portugal </td>
                                                <td> 126 </td>
                                                <td><span class="badge bg-primary">32%</span></td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="table-primary">
                                            <tr>
                                                <th scope="row"> Total </th>
                                                <td> United States </td>
                                                <td> 558 </td>
                                                <td><span class="badge bg-primary">56%</span></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-primary"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;S.No&lt;/th&gt;
                &lt;th scope="col"&gt;Team&lt;/th&gt;
                &lt;th scope="col"&gt;Matches Won&lt;/th&gt;
                &lt;th scope="col"&gt;Win Ratio&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    01
                &lt;/th&gt;
                &lt;td&gt;
                    Manchester
                &lt;/td&gt;
                &lt;td&gt;
                    232
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-primary"&gt;42%&lt;/span&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    02
                &lt;/th&gt;
                &lt;td&gt;
                    Barcelona
                &lt;/td&gt;
                &lt;td&gt;
                    175
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;58%&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    03
                &lt;/th&gt;
                &lt;td&gt;
                    Portugal
                &lt;/td&gt;
                &lt;td&gt;
                    126
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;32%&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
        &lt;tfoot class="table-primary"&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    Total
                &lt;/th&gt;
                &lt;td&gt;
                    United States
                &lt;/td&gt;
                &lt;td&gt;
                    558
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;56%&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tfoot&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Table With Caption </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <caption>Top 3 Countries</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Country</th>
                                                <th scope="col">Medals Won</th>
                                                <th scope="col">No Of Athletes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">01</th>
                                                <td>United States</td>
                                                <td>2012<i class="ri-medal-line mx-2"></i></td>
                                                <td>1823</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">02</th>
                                                <td>United Kingdom</td>
                                                <td>1012<i class="ri-medal-line mx-2"></i></td>
                                                <td>992</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">03</th>
                                                <td>Germany</td>
                                                <td>914<i class="ri-medal-line mx-2"></i></td>
                                                <td>875</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead class="table-primary"&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;S.No&lt;/th&gt;
                &lt;th scope="col"&gt;Team&lt;/th&gt;
                &lt;th scope="col"&gt;Matches Won&lt;/th&gt;
                &lt;th scope="col"&gt;Win Ratio&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    01
                &lt;/th&gt;
                &lt;td&gt;
                    Manchester
                &lt;/td&gt;
                &lt;td&gt;
                    232
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;span class="badge bg-primary"&gt;42%&lt;/span&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    02
                &lt;/th&gt;
                &lt;td&gt;
                    Barcelona
                &lt;/td&gt;
                &lt;td&gt;
                    175
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;58%&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    03
                &lt;/th&gt;
                &lt;td&gt;
                    Portugal
                &lt;/td&gt;
                &lt;td&gt;
                    126
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;32%&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
        &lt;tfoot class="table-primary"&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    Total
                &lt;/th&gt;
                &lt;td&gt;
                    United States
                &lt;/td&gt;
                &lt;td&gt;
                    558
                &lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;56%&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tfoot&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Table With Top Caption </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap caption-top">
                                        <caption>Top IT Companies</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Revenue</th>
                                                <th scope="col">Country</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Microsoft</td>
                                                <td>$170 billion</td>
                                                <td>United States</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>HP</td>
                                                <td>$72 billion</td>
                                                <td>United States</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>IBM</td>
                                                <td>$60 billion</td>
                                                <td>United States</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap caption-top"&gt;
        &lt;caption&gt;Top IT Companies&lt;/caption&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;S.No&lt;/th&gt;
                &lt;th scope="col"&gt;Name&lt;/th&gt;
                &lt;th scope="col"&gt;Revenue&lt;/th&gt;
                &lt;th scope="col"&gt;Country&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Microsoft&lt;/td&gt;
                &lt;td&gt;$170 billion&lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;2&lt;/th&gt;
                &lt;td&gt;HP&lt;/td&gt;
                &lt;td&gt;$72 billion&lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;IBM&lt;/td&gt;
                &lt;td&gt;$60 billion&lt;/td&gt;
                &lt;td&gt;United States&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-8 -->
                <!-- Start:: row-9 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Active Tables </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Created On</th>
                                                <th scope="col">Number</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-active">
                                                <th scope="row">Mark</th>
                                                <td>21,Dec 2021</td>
                                                <td>+1234-12340</td>
                                                <td><span class="badge bg-primary">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Monika</th>
                                                <td>29,April 2022</td>
                                                <td>+1523-12459</td>
                                                <td><span class="badge bg-warning">Failed</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Madina</th>
                                                <td>30,Nov 2022</td>
                                                <td class="table-active">+1982-16234</td>
                                                <td><span class="badge bg-success">Successful</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Bhamako</th>
                                                <td>18,Mar 2022</td>
                                                <td>+1526-10729</td>
                                                <td><span class="badge bg-secondary">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Name&lt;/th&gt;
                &lt;th scope="col"&gt;Created On&lt;/th&gt;
                &lt;th scope="col"&gt;Number&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr class="table-active"&gt;
                &lt;th scope="row"&gt;Mark&lt;/th&gt;
                &lt;td&gt;21,Dec 2021&lt;/td&gt;
                &lt;td&gt;+1234-12340&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;Completed&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Monika&lt;/th&gt;
                &lt;td&gt;29,April 2022&lt;/td&gt;
                &lt;td&gt;+1523-12459&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning"&gt;Failed&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Madina&lt;/th&gt;
                &lt;td&gt;30,Nov 2022&lt;/td&gt;
                &lt;td class="table-active"&gt;+1982-16234&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success"&gt;Successful&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Bhamako&lt;/th&gt;
                &lt;td&gt;18,Mar 2022&lt;/td&gt;
                &lt;td&gt;+1526-10729&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-secondary"&gt;Pending&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Small Tables </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Invoice</th>
                                                <th scope="col">Created Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="checkebox-sm" checked="">
                                                        <label class="form-check-label" for="checkebox-sm"> Zelensky
                                                        </label> </div>
                                                </th>
                                                <td>25-Apr-2021</td>
                                                <td><span class="badge bg-success-transparent">Paid</span></td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-light"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-light"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="checkebox-sm1"> <label
                                                            class="form-check-label" for="checkebox-sm1"> Kim Jong
                                                        </label> </div>
                                                </th>
                                                <td>29-April-2022</td>
                                                <td><span class="badge bg-danger-transparent">Pending</span></td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-light"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-light"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="checkebox-sm2"> <label
                                                            class="form-check-label" for="checkebox-sm2"> Obana </label>
                                                    </div>
                                                </th>
                                                <td>30-Nov-2022</td>
                                                <td><span class="badge bg-success-transparent">Paid</span></td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-light"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-light"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="checkebox-sm3"> <label
                                                            class="form-check-label" for="checkebox-sm3"> Sean Paul
                                                        </label> </div>
                                                </th>
                                                <td>01-Jan-2022</td>
                                                <td><span class="badge bg-success-transparent">Paid</span></td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-light"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-light"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="checkebox-sm4"> <label
                                                            class="form-check-label" for="checkebox-sm4"> Karizma
                                                        </label> </div>
                                                </th>
                                                <td>14-Feb-2022</td>
                                                <td><span class="badge bg-danger-transparent">Pending</span></td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-light"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-light"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-sm"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Invoice&lt;/th&gt;
                &lt;th scope="col"&gt;Created Date&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
                &lt;th scope="col"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="form-check"&gt;
                        &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm" checked=""&gt;
                        &lt;label class="form-check-label" for="checkebox-sm"&gt;
                            Zelensky
                        &lt;/label&gt;
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;25-Apr-2021&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Paid&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="form-check"&gt;
                        &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm1"&gt;
                        &lt;label class="form-check-label" for="checkebox-sm1"&gt;
                            Kim Jong
                        &lt;/label&gt;
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;29-April-2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-danger-transparent"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="form-check"&gt;
                        &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm2"&gt;
                        &lt;label class="form-check-label" for="checkebox-sm2"&gt;
                            Obana
                        &lt;/label&gt;
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;30-Nov-2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Paid&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="form-check"&gt;
                        &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm3"&gt;
                        &lt;label class="form-check-label" for="checkebox-sm3"&gt;
                            Sean Paul
                        &lt;/label&gt;
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;01-Jan-2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Paid&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="form-check"&gt;
                        &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm4"&gt;
                        &lt;label class="form-check-label" for="checkebox-sm4"&gt;
                            Karizma
                        &lt;/label&gt;
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;14-Feb-2022&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-danger-transparent"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-9 -->
                <!-- Start:: row-10 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Color variants tables </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Color</th>
                                                <th scope="col">Client</th>
                                                <th scope="col">State</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Default</th>
                                                <td>Rita Book</td>
                                                <td><span class="badge bg-primary-transparent">Processed</span></td>
                                                <td>22</td>
                                                <td>$2,012</td>
                                            </tr>
                                            <tr class="table-primary">
                                                <th scope="row">Primary</th>
                                                <td>Rhoda Report</td>
                                                <td><span class="badge bg-primary">Processed</span></td>
                                                <td>22</td>
                                                <td>$4,254</td>
                                            </tr>
                                            <tr class="table-secondary">
                                                <th scope="row">Secondary</th>
                                                <td>Rita Book</td>
                                                <td><span class="badge bg-secondary">Processed</span></td>
                                                <td>26</td>
                                                <td>$1,234</td>
                                            </tr>
                                            <tr class="table-success">
                                                <th scope="row">Success</th>
                                                <td>Anne Teak</td>
                                                <td><span class="badge bg-success">Processed</span></td>
                                                <td>42</td>
                                                <td>$2,623</td>
                                            </tr>
                                            <tr class="table-danger">
                                                <th scope="row">Danger</th>
                                                <td>Dee End</td>
                                                <td><span class="badge bg-danger">Processed</span></td>
                                                <td>52</td>
                                                <td>$32,132</td>
                                            </tr>
                                            <tr class="table-warning">
                                                <th scope="row">Warning</th>
                                                <td>Lee Nonmi</td>
                                                <td><span class="badge bg-warning">Processed</span></td>
                                                <td>10</td>
                                                <td>$1,434</td>
                                            </tr>
                                            <tr class="table-info">
                                                <th scope="row">Info</th>
                                                <td>Lynne Gwistic</td>
                                                <td><span class="badge bg-info">Processed</span></td>
                                                <td>63</td>
                                                <td>$1,854</td>
                                            </tr>
                                            <tr class="table-light">
                                                <th scope="row">Light</th>
                                                <td>Fran Tick</td>
                                                <td><span class="badge bg-light text-dark">Processed</span></td>
                                                <td>05</td>
                                                <td>$823</td>
                                            </tr>
                                            <tr class="table-dark">
                                                <th scope="row">Dark</th>
                                                <td>Polly Pipe</td>
                                                <td><span class="badge bg-dark text-white">Processed</span></td>
                                                <td>35</td>
                                                <td>$1,832</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Color&lt;/th&gt;
                &lt;th scope="col"&gt;Client&lt;/th&gt;
                &lt;th scope="col"&gt;State&lt;/th&gt;
                &lt;th scope="col"&gt;Quantity&lt;/th&gt;
                &lt;th scope="col"&gt;Total Price&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;Default&lt;/th&gt;
                &lt;td&gt;Rita Book&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary-transparent"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;22&lt;/td&gt;
                &lt;td&gt;$2,012&lt;/td&gt;
            &lt;/tr&gt;

            &lt;tr class="table-primary"&gt;
                &lt;th scope="row"&gt;Primary&lt;/th&gt;
                &lt;td&gt;Rhoda Report&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;22&lt;/td&gt;
                &lt;td&gt;$4,254&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-secondary"&gt;
                &lt;th scope="row"&gt;Secondary&lt;/th&gt;
                &lt;td&gt;Rita Book&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-secondary"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;26&lt;/td&gt;
                &lt;td&gt;$1,234&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-success"&gt;
                &lt;th scope="row"&gt;Success&lt;/th&gt;
                &lt;td&gt;Anne Teak&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;42&lt;/td&gt;
                &lt;td&gt;$2,623&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-danger"&gt;
                &lt;th scope="row"&gt;Danger&lt;/th&gt;
                &lt;td&gt;Dee End&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-danger"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;52&lt;/td&gt;
                &lt;td&gt;$32,132&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-warning"&gt;
                &lt;th scope="row"&gt;Warning&lt;/th&gt;
                &lt;td&gt;Lee Nonmi&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;10&lt;/td&gt;
                &lt;td&gt;$1,434&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-info"&gt;
                &lt;th scope="row"&gt;Info&lt;/th&gt;
                &lt;td&gt;Lynne Gwistic&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-info"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;63&lt;/td&gt;
                &lt;td&gt;$1,854&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-light"&gt;
                &lt;th scope="row"&gt;Light&lt;/th&gt;
                &lt;td&gt;Fran Tick&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-light text-dark"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;05&lt;/td&gt;
                &lt;td&gt;$823&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-dark"&gt;
                &lt;th scope="row"&gt;Dark&lt;/th&gt;
                &lt;td&gt;Polly Pipe&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-dark text-white"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;35&lt;/td&gt;
                &lt;td&gt;$1,832&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Nesting </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <table class="table text-nowrap mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Aplhabets</th>
                                                                <th scope="col">Users</th>
                                                                <th scope="col">Email</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">A</th>
                                                                <td>Dino King</td>
                                                                <td>dinoking231@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">B</th>
                                                                <td>Poppins sams</td>
                                                                <td>pops@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">C</th>
                                                                <td>Brian Shaw</td>
                                                                <td>swanbrian@gmail.com</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Jimmy</td>
                                                <td>the Ostrich</td>
                                                <td>Dummy Text</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Cobra Kai</td>
                                                <td>the Snake</td>
                                                <td>Another Name</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-striped table-bordered"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;#&lt;/th&gt;
                &lt;th scope="col"&gt;First&lt;/th&gt;
                &lt;th scope="col"&gt;Last&lt;/th&gt;
                &lt;th scope="col"&gt;Handle&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;1&lt;/th&gt;
                &lt;td&gt;Mark&lt;/td&gt;
                &lt;td&gt;Otto&lt;/td&gt;
                &lt;td&gt;@mdo&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td colspan="4"&gt;
                    &lt;table class="table text-nowrap mb-0"&gt;
                        &lt;thead&gt;
                            &lt;tr&gt;
                                &lt;th scope="col"&gt;Aplhabets&lt;/th&gt;
                                &lt;th scope="col"&gt;Users&lt;/th&gt;
                                &lt;th scope="col"&gt;Email&lt;/th&gt;
                            &lt;/tr&gt;
                        &lt;/thead&gt;
                        &lt;tbody&gt;
                            &lt;tr&gt;
                                &lt;th scope="row"&gt;A&lt;/th&gt;
                                &lt;td&gt;Dino King&lt;/td&gt;
                                &lt;td&gt;dinoking231@gmail.com&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                                &lt;th scope="row"&gt;B&lt;/th&gt;
                                &lt;td&gt;Poppins sams&lt;/td&gt;
                                &lt;td&gt;pops@gmail.com&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                                &lt;th scope="row"&gt;C&lt;/th&gt;
                                &lt;td&gt;Brian Shaw&lt;/td&gt;
                                &lt;td&gt;swanbrian@gmail.com&lt;/td&gt;
                            &lt;/tr&gt;
                        &lt;/tbody&gt;
                    &lt;/table&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;3&lt;/th&gt;
                &lt;td&gt;Larry&lt;/td&gt;
                &lt;td&gt;the Bird&lt;/td&gt;
                &lt;td&gt;@twitter&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;4&lt;/th&gt;
                &lt;td&gt;Jimmy&lt;/td&gt;
                &lt;td&gt;the Ostrich&lt;/td&gt;
                &lt;td&gt;Dummy Text&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;5&lt;/th&gt;
                &lt;td&gt;Cobra Kai&lt;/td&gt;
                &lt;td&gt;the Snake&lt;/td&gt;
                &lt;td&gt;Another Name&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-10 -->
                <!-- Start:: row-11 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Always responsive </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col"><input class="form-check-input" type="checkbox"
                                                        id="checkboxNoLabel" value="" aria-label="..."></th>
                                                <th scope="col">Team Head</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Gmail</th>
                                                <th scope="col">Team</th>
                                                <th scope="col">Work Progress</th>
                                                <th scope="col">Revenue</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><input class="form-check-input" type="checkbox"
                                                        id="checkboxNoLabel1" value="" aria-label="..."></th>
                                                <td>
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/3.jpg" alt="img">
                                                        </span>Mayor Kelly </div>
                                                </td>
                                                <td>Manufacturer</td>
                                                <td><span class="badge bg-primary-transparent">Team Lead</span></td>
                                                <td>mayorkrlly@gmail.com</td>
                                                <td>
                                                    <div class="avatar-list-stacked"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/2.jpg" alt="img"> </span>
                                                        <span class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/8.jpg" alt="img"> </span>
                                                        <span class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/2.jpg" alt="img"> </span> <a
                                                            class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                            href="javascript:void(0);"> +4 </a> </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 52%" aria-valuenow="52" aria-valuemin="0"
                                                            aria-valuemax="100"> </div>
                                                    </div>
                                                </td>
                                                <td>$10,984.29</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><input class="form-check-input" type="checkbox"
                                                        id="checkboxNoLabel2" value="" aria-label="..."></th>
                                                <td>
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/12.jpg" alt="img">
                                                        </span>Andrew Garfield </div>
                                                </td>
                                                <td>Managing Director</td>
                                                <td><span class="badge bg-warning-transparent">Director</span></td>
                                                <td>andrewgarfield@gmail.com</td>
                                                <td>
                                                    <div class="avatar-list-stacked"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/1.jpg" alt="img"> </span>
                                                        <span class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/5.jpg" alt="img"> </span>
                                                        <span class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/11.jpg" alt="img"> </span>
                                                        <span class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/15.jpg" alt="img"> </span>
                                                        <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                            href="javascript:void(0);"> +4 </a> </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 91%" aria-valuenow="91" aria-valuemin="0"
                                                            aria-valuemax="100"> </div>
                                                    </div>
                                                </td>
                                                <td>$1.4billion</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><input class="form-check-input" type="checkbox"
                                                        id="checkboxNoLabel3" value="" aria-label="..."></th>
                                                <td>
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/14.jpg" alt="img">
                                                        </span>Simon Cowel </div>
                                                </td>
                                                <td>Service Manager</td>
                                                <td><span class="badge bg-success-transparent">Manager</span></td>
                                                <td>simoncowel234@gmail.com</td>
                                                <td>
                                                    <div class="avatar-list-stacked"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/6.jpg" alt="img"> </span>
                                                        <span class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/16.jpg" alt="img"> </span>
                                                        <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                            href="javascript:void(0);"> +10 </a> </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 45%" aria-valuenow="45" aria-valuemin="0"
                                                            aria-valuemax="100"> </div>
                                                    </div>
                                                </td>
                                                <td>$7,123.21</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><input class="form-check-input" type="checkbox"
                                                        id="checkboxNoLabel13" value="" aria-label="..."></th>
                                                <td>
                                                    <div class="d-flex align-items-center"> <span
                                                            class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                                src="../assets/images/faces/5.jpg" alt="img">
                                                        </span>Mirinda Hers </div>
                                                </td>
                                                <td>Recruiter</td>
                                                <td><span class="badge bg-danger-transparent">Employee</span></td>
                                                <td>mirindahers@gmail.com</td>
                                                <td>
                                                    <div class="avatar-list-stacked"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/3.jpg" alt="img"> </span>
                                                        <span class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/10.jpg" alt="img"> </span>
                                                        <span class="avatar avatar-sm avatar-rounded"> <img
                                                                src="../assets/images/faces/14.jpg" alt="img"> </span>
                                                        <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
                                                            href="javascript:void(0);"> +6 </a> </div>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 21%" aria-valuenow="21" aria-valuemin="0"
                                                            aria-valuemax="100"> </div>
                                                    </div>
                                                </td>
                                                <td>$2,325.45</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15"> <a href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-success"><i
                                                                class="ri-download-2-line"></i></a> <a
                                                            href="javascript:void(0);"
                                                            class="btn btn-icon btn-sm btn-info"><i
                                                                class="ri-edit-line"></i></a> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;&lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."&gt;&lt;/th&gt;
                &lt;th scope="col"&gt;Team Head&lt;/th&gt;
                &lt;th scope="col"&gt;Category&lt;/th&gt;
                &lt;th scope="col"&gt;Role&lt;/th&gt;
                &lt;th scope="col"&gt;Gmail&lt;/th&gt;
                &lt;th scope="col"&gt;Team&lt;/th&gt;
                &lt;th scope="col"&gt;Work Progress&lt;/th&gt;
                &lt;th scope="col"&gt;Revenue&lt;/th&gt;
                &lt;th scope="col"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;&lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="..."&gt;&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/3.jpg" alt="img"&gt;
                        &lt;/span&gt;Mayor Kelly
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Manufacturer&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-primary-transparent"&gt;Team Lead&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;mayorkrlly@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/8.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/2.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);"&gt;
                            +4
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;$10,984.29&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;&lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="..."&gt;&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/12.jpg" alt="img"&gt;
                        &lt;/span&gt;Andrew Garfield
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Managing Director&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-warning-transparent"&gt;Director&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;andrewgarfield@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/1.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/5.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/11.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/15.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);"&gt;
                            +4
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;$1.4billion&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;&lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="..."&gt;&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/14.jpg" alt="img"&gt;
                        &lt;/span&gt;Simon Cowel
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Service Manager&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Manager&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;simoncowel234@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/6.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/16.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);"&gt;
                            +10
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;$7,123.21&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;&lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel13" value="" aria-label="..."&gt;&lt;/th&gt;
                &lt;td&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/5.jpg" alt="img"&gt;
                        &lt;/span&gt;Mirinda Hers
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Recruiter&lt;/td&gt;
                &lt;td&gt;&lt;span class="badge bg-danger-transparent"&gt;Employee&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;mirindahers@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="avatar-list-stacked"&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/3.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/10.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/14.jpg" alt="img"&gt;
                        &lt;/span&gt;
                        &lt;a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);"&gt;
                            +6
                        &lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress progress-xs"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 21%" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100"&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;$2,325.45&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 fs-15"&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-11 -->
                <!-- Start:: row-12 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Vertical alignment </div>
                                <div class="prism-toggle"> <button class="btn btn-sm btn-primary-light">Show Code<i
                                            class="ri-code-line ms-2 d-inline-block align-middle"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="w-25">Heading 1</th>
                                                <th scope="col" class="w-25">Heading 2</th>
                                                <th scope="col" class="w-25">Heading 3</th>
                                                <th scope="col" class="w-25">Heading 4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>This cell inherits <code>vertical-align: middle;</code> from the
                                                    table</td>
                                                <td>This cell inherits <code>vertical-align: middle;</code> from the
                                                    table</td>
                                                <td>This cell inherits <code>vertical-align: middle;</code> from the
                                                    table</td>
                                                <td>This here is some placeholder text, intended to take up quite a bit
                                                    of vertical space, to demonstrate how the vertical alignment works
                                                    in the preceding cells.</td>
                                            </tr>
                                            <tr class="align-bottom">
                                                <td>This cell inherits <code>vertical-align: bottom;</code> from the
                                                    table row</td>
                                                <td>This cell inherits <code>vertical-align: bottom;</code> from the
                                                    table row</td>
                                                <td>This cell inherits <code>vertical-align: bottom;</code> from the
                                                    table row</td>
                                                <td>This here is some placeholder text, intended to take up quite a bit
                                                    of vertical space, to demonstrate how the vertical alignment works
                                                    in the preceding cells.</td>
                                            </tr>
                                            <tr>
                                                <td>This cell inherits <code>vertical-align: middle;</code> from the
                                                    table</td>
                                                <td>This cell inherits <code>vertical-align: middle;</code> from the
                                                    table</td>
                                                <td class="align-top">This cell is aligned to the top.</td>
                                                <td>This here is some placeholder text, intended to take up quite a bit
                                                    of vertical space, to demonstrate how the vertical alignment works
                                                    in the preceding cells.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table align-middle"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col" class="w-25"&gt;Heading 1&lt;/th&gt;
                &lt;th scope="col" class="w-25"&gt;Heading 2&lt;/th&gt;
                &lt;th scope="col" class="w-25"&gt;Heading 3&lt;/th&gt;
                &lt;th scope="col" class="w-25"&gt;Heading 4&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from
                    the
                    table&lt;/td&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from
                    the
                    table&lt;/td&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from
                    the
                    table&lt;/td&gt;
                &lt;td&gt;This here is some placeholder text, intended to take up
                    quite a
                    bit of vertical space, to demonstrate how the vertical
                    alignment
                    works in the preceding cells.&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="align-bottom"&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: bottom;&lt;/code&gt; from
                    the
                    table row&lt;/td&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: bottom;&lt;/code&gt; from
                    the
                    table row&lt;/td&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: bottom;&lt;/code&gt; from
                    the
                    table row&lt;/td&gt;
                &lt;td&gt;This here is some placeholder text, intended to take up
                    quite a
                    bit of vertical space, to demonstrate how the vertical
                    alignment
                    works in the preceding cells.&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from
                    the
                    table&lt;/td&gt;
                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from
                    the
                    table&lt;/td&gt;
                &lt;td class="align-top"&gt;This cell is aligned to the top.&lt;/td&gt;
                &lt;td&gt;This here is some placeholder text, intended to take up
                    quite a
                    bit of vertical space, to demonstrate how the vertical
                    alignment
                    works in the preceding cells.&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre> <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End:: row-12 -->
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