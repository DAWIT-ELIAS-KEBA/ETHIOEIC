@include('layout.link')

<body>

    @include('layout.switcher')

    @include('layout.header')


    @include('layout.sidebar')


        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Create Invoice</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Invoice</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create Invoice</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-9">
                        <div class="card custom-card">
                            <div class="card-header d-md-flex d-block">
                                <div class="h5 mb-0 d-sm-flex d-block align-items-center">
                                    <div> <img src="../assets/images/brand-logos/toggle-" alt=""> </div>
                                    <div class="ms-sm-2 ms-0 mt-sm-0 mt-2"> <input type="text"
                                            class="form-control form-control-light form-control-sm"
                                            placeholder="Invoice Title" value="INV TITLE"> </div>
                                    <div class="mx-2">:</div>
                                    <div class="mt-sm-0 mt-2"> <input type="text"
                                            class="form-control form-control-light form-control-sm"
                                            placeholder="Invoice ID" value="INV ID"> </div>
                                </div>
                                <div class="ms-auto mt-md-0 mt-2"> <button class="btn btn-sm btn-primary me-2">Save As
                                        PDF<i class="ri-file-pdf-line ms-1 align-middle d-inline-block"></i></button>
                                    <button class="btn btn-sm btn-icon btn-secondary-light me-2"><i
                                            class="bi bi-plus-lg"></i></button> <button
                                        class="btn btn-sm btn-icon btn-success-light me-2"><i
                                            class="bi bi-download"></i></button> </div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                                <p class="dw-semibold mb-2"> Billing From : </p>
                                                <div class="row gy-2">
                                                    <div class="col-xl-12"> <input type="text"
                                                            class="form-control form-control-light" id="Company-Name"
                                                            placeholder="Company Name" value="">
                                                    </div>
                                                    <div class="col-xl-12"> <textarea
                                                            class="form-control form-control-light" id="company-address"
                                                            placeholder="Enter Address" rows="3"></textarea> </div>
                                                    <div class="col-xl-12"> <input type="text"
                                                            class="form-control form-control-light" id="company-mail"
                                                            placeholder="Company Email" value=""> </div>
                                                    <div class="col-xl-12"> <input type="text"
                                                            class="form-control form-control-light" id="company-phone"
                                                            placeholder="Phone Number" value=""> </div>
                                                    <div class="col-xl-12"> <textarea
                                                            class="form-control form-control-light" id="invoice-subject"
                                                            placeholder="Subject" rows="4"></textarea> </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ms-auto mt-sm-0 mt-3">
                                                <p class="dw-semibold mb-2"> Billing To : </p>
                                                <div class="row gy-2">
                                                    <div class="col-xl-12"> <input type="text"
                                                            class="form-control form-control-light" id="customer-Name"
                                                            placeholder="Customer Name" value="Json Taylor"> </div>
                                                    <div class="col-xl-12"> <textarea
                                                            class="form-control form-control-light"
                                                            id="customer-address" placeholder="Enter Address"
                                                            rows="3"></textarea> </div>
                                                    <div class="col-xl-12"> <input type="text"
                                                            class="form-control form-control-light" id="customer-mail"
                                                            placeholder="Customer Email" value=""> </div>
                                                    <div class="col-xl-12"> <input type="text"
                                                            class="form-control form-control-light" id="customer-phone"
                                                            placeholder="Phone Number" value=""> </div>
                                                    <div class="col-xl-12"> <input type="text"
                                                            class="form-control form-control-light" id="zip-code"
                                                            placeholder="Zip Code" value=""> </div>
                                                    <div class="col-xl-12 choices-control">
                                                        <p class="dw-semibold mb-2 mt-2"> Currency : </p><select
                                                            class="form-control" data-trigger name="invoice-currency"
                                                            id="invoice-currency">
                                                            <option value="">Select Currency</option>
                                                            <option value="Armani">USD - (United States Dollar)</option>
                                                            <option value="Lacoste">BHD - (Bahraini Dinar)</option>
                                                            <option value="Puma">KWD - (Kuwaiti Dinar)</option>
                                                            <option value="Spykar">CHF - (Swiss Franc)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3"> <label for="invoice-number" class="form-label">Invoice
                                            ID</label> <input type="text" class="form-control form-control-light"
                                            id="invoice-number" placeholder="Inv No" value="#SPK120219890"> </div>
                                    <div class="col-xl-3"> <label for="invoice-date-issued" class="form-label">Date
                                            Issued</label> <input type="text" class="form-control form-control-light"
                                            id="invoice-date-issued" placeholder="Choose date"> </div>
                                    <div class="col-xl-3"> <label for="invoice-date-due" class="form-label">Due
                                            Date</label> <input type="text" class="form-control form-control-light"
                                            id="invoice-date-due" placeholder="Choose date"> </div>
                                    <div class="col-xl-3"> <label for="invoice-due-amount" class="form-label">Due
                                            Amount</label> <input type="text" class="form-control form-control-light"
                                            id="invoice-due-amount" placeholder="Enter Amount" value="$12,983.78">
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="table-responsive">
                                            <table class="table nowrap text-nowrap border mt-3">
                                                <thead>
                                                    <tr>
                                                        <th>PRODUCT NAME</th>
                                                        <th>DESCRIPTION</th>
                                                        <th>QUANTITY</th>
                                                        <th>PRICE PER UNIT</th>
                                                        <th>TOTAL</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td> <input type="text" class="form-control form-control-light"
                                                                placeholder="Enter Product Name"> </td>
                                                        <td> <textarea rows="1" class="form-control form-control-light"
                                                                placeholder="Enter Description"></textarea> </td>
                                                        <td class="invoice-quantity-container">
                                                            <div class="input-group border rounded flex-nowrap"> <button
                                                                    class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-minus"><i
                                                                        class="ri-subtract-line"></i></button> <input
                                                                    type="text"
                                                                    class="form-control form-control-sm border-0 text-center w-100"
                                                                    aria-label="quantity" id="product-quantity4"
                                                                    value="1"> <button
                                                                    class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-plus"><i
                                                                        class="ri-add-line"></i></button> </div>
                                                        </td>
                                                        <td><input class="form-control form-control-light"
                                                                placeholder="" type="text" value="$60.00"></td>
                                                        <td><input class="form-control form-control-light"
                                                                placeholder="" type="text" value="$120.00"></td>
                                                        <td> <button class="btn btn-sm btn-icon btn-danger-light"><i
                                                                    class="ri-delete-bin-5-line"></i></button> </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="text" class="form-control form-control-light"
                                                                placeholder="Enter Product Name"> </td>
                                                        <td> <textarea rows="1" class="form-control form-control-light"
                                                                placeholder="Enter Description"></textarea> </td>
                                                        <td class="invoice-quantity-container">
                                                            <div class="input-group border rounded flex-nowrap"> <button
                                                                    class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-minus"><i
                                                                        class="ri-subtract-line"></i></button> <input
                                                                    type="text"
                                                                    class="form-control form-control-sm border-0 text-center w-100"
                                                                    aria-label="quantity" id="product-quantity5"
                                                                    value="1"> <button
                                                                    class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-plus"><i
                                                                        class="ri-add-line"></i></button> </div>
                                                        </td>
                                                        <td><input class="form-control form-control-light"
                                                                placeholder="Enter Amount" type="text"></td>
                                                        <td><input class="form-control form-control-light"
                                                                placeholder="Enter Amount" type="text"></td>
                                                        <td> <button class="btn btn-sm btn-icon btn-danger-light"><i
                                                                    class="ri-delete-bin-5-line"></i></button> </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="border-bottom-0"><a class="btn btn-light"
                                                                href="javascript:void(0);"><i class="bi bi-plus-lg"></i>
                                                                Add Product</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4"></td>
                                                        <td colspan="2">
                                                            <table
                                                                class="table table-sm text-nowrap mb-0 table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <div class="fw-semibold">Sub Total :</div>
                                                                        </th>
                                                                        <td> <input type="text"
                                                                                class="form-control form-control-light invoice-amount-input"
                                                                                placeholder="Enter Amount"
                                                                                value="$1209.89"> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <div class="fw-semibold">Avail Discount :
                                                                            </div>
                                                                        </th>
                                                                        <td> <input type="text"
                                                                                class="form-control form-control-light invoice-amount-input"
                                                                                placeholder="Enter Amount"
                                                                                value="$29.98"> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <div class="fw-semibold">Coupon Discount
                                                                                <span class="text-success">(10%)</span>
                                                                                :</div>
                                                                        </th>
                                                                        <td> <input type="text"
                                                                                class="form-control form-control-light invoice-amount-input"
                                                                                placeholder="Enter Amount"
                                                                                value="$129.00"> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <div class="fw-semibold">Vat <span
                                                                                    class="text-danger">(20%)</span> :
                                                                            </div>
                                                                        </th>
                                                                        <td> <input type="text"
                                                                                class="form-control form-control-light invoice-amount-input"
                                                                                placeholder="Enter Amount"
                                                                                value="$258.00"> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <div class="fw-semibold">Due Till Date :
                                                                            </div>
                                                                        </th>
                                                                        <td> <input type="text"
                                                                                class="form-control form-control-light invoice-amount-input"
                                                                                placeholder="Enter Amount"
                                                                                value="$0.00"> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <div class="fs-14 fw-semibold">Total :</div>
                                                                        </th>
                                                                        <td> <input type="text"
                                                                                class="form-control form-control-light invoice-amount-input"
                                                                                placeholder="Enter Amount"
                                                                                value="$1,071.89"> </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div> <label for="invoice-note" class="form-label">Note:</label> <textarea
                                                class="form-control form-control-light" id="invoice-note"
                                                rows="3">Once the invoice has been verified by the accounts payable team and recorded, the only task left is to send it for approval before releasing the payment</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end"> <button class="btn btn-light me-1"><i
                                        class="ri-eye-line me-1 align-middle d-inline-block"></i>Preview</button>
                                <button class="btn btn-primary">Send Invoice <i
                                        class="ri-send-plane-2-line ms-1 align-middle d-inline-block"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title"> Mode Of Payment </div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <div class="btn-group" role="group"
                                            aria-label="Basic radio toggle button group"> <input type="radio"
                                                class="btn-check" name="btnradio" id="btnradio2"> <label
                                                class="btn btn-outline-light mt-sm-0 mt-1" for="btnradio2">UPI</label>
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3"
                                                checked=""> <label class="btn btn-outline-light mt-sm-0 mt-1"
                                                for="btnradio3">Credit/Debit Card</label> </div>
                                    </div>
                                    <div class="col-xl-12"> <input type="text" class="form-control form-control-light"
                                            placeholder="Card Holder Name"> </div>
                                    <div class="col-xl-12"> <input type="text" class="form-control form-control-light"
                                            id="invoice-payment-cardname" placeholder="Card Number"
                                            value="1234 5678 9087 XXXX"> <label for="invoice-payment-cardname"
                                            class="form-label mb-0"><a class="text-danger fs-11"
                                                href="javascript:void(0);">Enter valid card number*</a></label> </div>
                                    <div class="col-xl-12"> <input type="text"
                                            class="form-control form-control-light mb-2" placeholder="Enter OTP"> </div>
                                    <div class="col-xl-12">
                                        <div class="alert alert-success" role="alert"> Please Make sure to pay the
                                            invoice bill within 30 days. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
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