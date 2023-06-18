@extends('layouts.main')

@section('title', 'Procure to Pay Details')

@section('container')

    @php
        $chart = Illuminate\Support\Facades\Cookie::get('chart');
        if ($chart == '') {
            $chart = ['#017EB8', '#28B3AC', '#F7AD1A', '#9FE7F5', '#E86340', '#063F5C'];
        } else {
            $chart = explode(',', preg_replace("/['|[|]| |]/", '', $chart));
        }
    @endphp

    <!--Begin :: Customer Menu-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack justify-content-beetwen">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <div class="d-flex flex-row justify-content-beetwen">
                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">PTP-00001</h1>
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->

                <div class="action">
                    <button class="btn btn-success btn-sm me-2" form="form-1">Save</button>
                    <a href="/job-order" class="btn btn-sm btn-secondary">Cencel</a>
                </div>

            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->

        <div class="col-xl-15 mb-8 mx-6">
            <div class="card card-flush h-lg-100" id="kt_contacts_main">
                <div class="card-body pt-auto" style="background-color:#f1f1f1; border:1px solid #e6e6e6;">
                    <div id="stage-button" class="stage-list">
                        <a href="#" data-bs-toggle="modal" data-bs-target=""
                            class="stage-button stage-action color-is-default stage-is-done"
                            style="outline: 0px; cursor: pointer; pointer-events: none;">
                            New</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target=""
                            class="stage-button stage-action color-is-default stage-is-done"
                            style="outline: 0px; cursor: pointer; pointer-events: none;">
                            In Progress</a>
                        {{-- <a href="#" data-bs-toggle="modal" data-bs-target="" class="stage-button stage-action color-is-default stage-is-done" style="outline: 0px; cursor: pointer; pointer-events: none;">
                    Complete</a> --}}
                        <a href="#" data-bs-toggle="dropdown" role="button"
                            class="stage-button d-flex align-items-center stage-is-done color-is-default"
                            style="outline: 0px; cursor: pointer; ">
                            <span>Delivered</span>
                            <i class="bi bi-caret-down-fill text-white ms-3"></i>
                        </a>
                        <ul class="dropdown-menu" id="cancel" aria-labelledby="cancel">
                            <li><a class="dropdown-item" href="#">Delivered</a></li>
                            <li><a class="dropdown-item" href="#">Cancel</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <!--begin::Content-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-fluid">
                <div class="row g-7">
                    <!--Begin::Content Kanan-->
                    <div class="col-lg-6 col-xl-3">
                        <div class="row">
                            <div id="content" class="mt-1 px-5">
                                <div class="card card-flush">
                                    <div class="card-body pt-9 pb-4">
                                        <form action="/contact/detail/update" method="post" id="form-1"
                                            onsubmit="return validateInputs(this)">
                                            @csrf
                                            <input type="hidden" name="id-contact" value="">

                                            <!--begin::Input group Website-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold form-label mt-3 required">
                                                    <span>No. Procure to Pay<i class="bi bi-lock-fill"></i></span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" id="no-job-order" name="no-job-order"
                                                    class="form-control form-control-solid" value="PTP-00001"
                                                    placeholder="No. Job Order" readonly />
                                                @error('no-job-order')
                                                    <h6 class="text-danger fw-normal">{{ $message }}</h6>
                                                @enderror
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group Website-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold form-label mt-3 required">
                                                    <span>Created Date</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="date" id="date" name="date"
                                                    class="form-control form-control-solid" value="2023-06-12"
                                                    placeholder="Date" />
                                                @error('date')
                                                    <h6 class="text-danger fw-normal">{{ $message }}</h6>
                                                @enderror
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group Website-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold form-label mt-3 required">
                                                    <span>Customer/Vendor</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="type" id="unit" class="form-select form-select-solid"
                                                    data-hide-search="true" data-placeholder="Select Type">
                                                    <option value="Ferbyansah">Ferbyansah</option>
                                                </select>
                                                @error('Customer')
                                                    <h6 class="text-danger fw-normal">{{ $message }}</h6>
                                                @enderror
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group Website-->
                                            <div class="fv-row mb-6">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>PIC<i class="bi bi-lock-fill"></i></span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid"
                                                    id="customer-number" name="customer-number" value="Admin"
                                                    placeholder="Customer Number" readOnly />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            
                                            <!--begin::Input group Website-->
                                            <div class="fv-row mb-6">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Payment Terms<i class="bi bi-lock-fill"></i></span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="number" class="form-control form-control-solid"
                                                    id="customer-number" name="customer-number" value="5"
                                                    placeholder="" readonly />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            
                                            <!--begin::Input group Website-->
                                            <div class="fv-row mb-6">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Attachment</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="file" class="form-control form-control-solid"
                                                    id="customer-number" name="customer-number" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row mt-3">
                                <div id="content" class="mt-1 px-5">
                                    <div class="card card-flush">
                                        <div class="card-body pt-9 pb-7">
                                            <h5>Company</h5>
                                            <a href="/company#modal" class="">
                                                <p class="fs-6 fw-bold form-label mt-5 p-0 mb-0 btn btn-secondary p-2"> New Company </p>
                                            </a>
                                            <br>
                                            <div id="select-account" style="display:none">
                                                <label class="fs-6 fw-bold form-label mt-2">Search</label>
                                                <div id="search">
                                                    <select name="account-id" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-placeholder="Search Account">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                    </div>
                    <!--End::Content Kanan-->

                    <!--Begin::Content Kiri-->
                    <div class="col-xl-9">
                        <div class="card card-flush h-lg-100" id="kt_contacts_main">
                            <!--begin::Card-->
                            <div class="card-body pt-5">
                                <!--begin:::Tabs-->
                                <ul
                                    class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                                    <!--begin:::Tab Overview-->
                                    <!-- <li class="nav-item">
                                            <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_contact_overview"
                                                style="font-size:12px;">OVERVIEW</a>
                                        </li> -->
                                    <!--end:::Tab Overview-->

                                    <!--begin:::Tab item Informasi Perusahaan-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                            href="#kt_contact_information" style="font-size:12px;">GENERAL
                                            INFORMATION</a>
                                    </li>
                                    <!--end:::Tab item Informasi Perusahaan-->


                                    {{-- <!--begin:::Tab item History-->
                                <!-- <li class="nav-item">
                                    <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_flight"
                                        style="font-size:12px;">FLIGHT INFO</a>
                                </li> -->
                                <!--end:::Tab item History--> --}}

                                    <!--begin:::Tab item History-->
                                    <!-- <li class="nav-item">
                                            <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_contact_history"
                                                style="font-size:12px;">HISTORY</a>
                                        </li> -->
                                    <!--end:::Tab item History-->

                                </ul>
                                <!--end:::Tabs-->

                                <!--Begin::Tab Panel-->
                                <div class="tab-content">

                                    <!--Begin::Tab Contact Information-->
                                    <div class="tab-pane fade show active" id="kt_contact_information" role="tabpanel"
                                        aria-labelledby="info-tab" tabindex="0">
                                        <div class="row fv-row">
                                            <div class="container">
                                                <!--Begin::Row-->
                                                <div class="row fv-row mb-7">
                                                    <!-- <div class="col-6">
                                                                <label class="fs-6 fw-bold form-label mt-3">Title</label>
                                                                <div id="title">
                                                                    <select name="title" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Title">
                                                                        <option value=""></option>
                                                                            <option value="#N/A">#N/A</option>
                                                                            <option value="Bapak">Bapak</option>
                                                                            <option value="Ibu">Ibu</option>
                                                                            <option value="Miss.">Mrs.</option>
                                                                            <option value="Mr.">Mr.</option>
                                                                    </select>
                                                                </div>
                                                            </div> -->
                                                    <!-- <div class="col-6">
                                                                <label class="fs-6 fw-bold form-label mt-3">Manufactured Qty.<i class="bi bi-lock-fill"></i></label>
                                                                <input id="manufactur"  type="text" class="form-control" value="" placeholder="" id="full-name" name="full-name" readonly>
                                                            </div> -->
                                                </div>
                                                <!--End::Row-->
                                            </div>
                                            <hr>
                                            <!--Begin::Row-->
                                            <div class="container">
                                                <table id="example" class="table table-striped" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Item Code</th>
                                                            <th>Item Name</th>
                                                            <th>Quantity</th>
                                                            <th>Price</th>
                                                            <th>Tax</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="BOM">
                                                        <tr>
                                                            <td><select name="type" id="code-item"
                                                                    onchange="read(this)" class="form-select"
                                                                    data-hide-search="true" data-placeholder="Select Type"
                                                                    value="RAW-001">
                                                                    
                                                                    <option value="RAW-001">RAW-001</option>
                                                                    <option value="FG-001">FG-001</option>
                                                                </select>
                                                            </td>

                                                            <td><input type="text" id="nama-item" name="nama-item"
                                                                    class="form-control" value="PLASTIC">
                                                            </td>

                                                            <td><input id="quantity" oninput="rumus(this)"
                                                                    type="number" name="" class="form-control"
                                                                    value="500">
                                                            </td>

                                                            <td><input id="price"
                                                                    type="number" name="" class="form-control"
                                                                    value="5000">
                                                            </td>
                                                            
                                                            <td><input id="tax"
                                                                    type="text" name="" class="form-control"
                                                                    value="11%">
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td><select name="type" id="code-item"
                                                                onchange="read(this)" class="form-select"
                                                                data-hide-search="true" data-placeholder="Select Type"
                                                                value="FG-001">
                                                                <option value=""></option>
                                                                <option value="FG-001">FG-001</option>
                                                                <option value="RAW-001">RAW-001</option>
                                                            </select>
                                                            </td>

                                                            <td><input type="text" id="nama-item" name="nama-item"
                                                                    class="form-control" value="">
                                                            </td>

                                                            <td><input id="quantity" oninput="rumus(this)"
                                                                    type="number" name="" class="form-control"
                                                                    value="">
                                                            </td>

                                                            <td><input id="price"
                                                                    type="number" name="" class="form-control"
                                                                    value="">
                                                            </td>
                                                            
                                                            <td><input id="tax"
                                                                    type="number" name="" class="form-control"
                                                                    value="">
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td><select name="type" id="code-item"
                                                                onchange="read(this)" class="form-select"
                                                                data-hide-search="true" data-placeholder="Select Type"
                                                                value="FG-001">
                                                                <option value=""></option>
                                                                <option value="FG-001">FG-001</option>
                                                                <option value="RAW-001">RAW-001</option>
                                                            </select>
                                                            </td>

                                                            <td><input type="text" id="nama-item" name="nama-item"
                                                                    class="form-control" value="">
                                                            </td>

                                                            <td><input id="quantity" oninput="rumus(this)"
                                                                    type="number" name="" class="form-control"
                                                                    value="">
                                                            </td>

                                                            <td><input id="price"
                                                                    type="number" name="" class="form-control"
                                                                    value="">
                                                            </td>
                                                            
                                                            <td><input id="tax"
                                                                    type="number" name="" class="form-control"
                                                                    value="">
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td><select name="type" id="code-item"
                                                                onchange="read(this)" class="form-select"
                                                                data-hide-search="true" data-placeholder="Select Type"
                                                                value="FG-001">
                                                                <option value=""></option>
                                                                <option value="FG-001">FG-001</option>
                                                                <option value="RAW-001">RAW-001</option>
                                                            </select>
                                                            </td>

                                                            <td><input type="text" id="nama-item" name="nama-item"
                                                                    class="form-control" value="">
                                                            </td>

                                                            <td><input id="quantity" oninput="rumus(this)"
                                                                    type="number" name="" class="form-control"
                                                                    value="">
                                                            </td>

                                                            <td><input id="price"
                                                                    type="number" name="" class="form-control"
                                                                    value="">
                                                            </td>
                                                            
                                                            <td><input id="tax"
                                                                    type="number" name="" class="form-control"
                                                                    value="">
                                                            </td>
                                                        </tr>


                                                    </tbody>

                                                    <button type="button" class="btn btn-sm btn-secondary"
                                                        onclick="myFunction()">Add +</button>
                                                    

                                                    <script>
                                                        function myFunction() {
                                                            var table = document.getElementById("BOM");
                                                            var trlen = table.getElementsByTagName("tr").length;
                                                            console.log(trlen);
                                                            let html =
                                                                `<td><select name="type" id="code-item"
                                                                onchange="read(this)" class="form-select"
                                                                data-hide-search="true" data-placeholder="Select Type"
                                                                value="FG-001">
                                                                <option value=""></option>
                                                                <option value="FG-001">FG-001</option>
                                                                <option value="RAW-001">RAW-001</option>
                                                            </select>
                                                            </td>

                                                            <td><input type="text" id="nama-item" name="nama-item"
                                                                    class="form-control" value="">
                                                            </td>

                                                            <td><input id="quantity" oninput="rumus(this)"
                                                                    type="number" name="" class="form-control"
                                                                    value="">
                                                            </td>

                                                            <td><input id="price"
                                                                    type="number" name="" class="form-control"
                                                                    value="">
                                                            </td>
                                                            
                                                            <td><input id="tax"
                                                                    type="number" name="" class="form-control"
                                                                    value="">
                                                            </td>`;
                                                            var row = table.insertRow(Number(trlen));
                                                            row.innerHTML = html;
                                                        }
                                                    </script>


                                                    <script>
                                                        function read(e) {
                                                            let code = document.getElementById("code-item").value;
                                                            let nama = document.getElementById("nama-item");

                                                            if (code == "FG-001") {
                                                                nama.value = "Finish Goods Polybag";
                                                            } else {
                                                                (code == "RW-001")
                                                                nama.value = "PLASTIC";
                                                            }


                                                        }
                                                    </script>

                                                    <script>
                                                        function rumus(e) {
                                                            let quantity = document.getElementById("quantity").value;
                                                            let unit = document.getElementById("unit").value;
                                                            let manufactur = document.getElementById("manufactur");

                                                            if (unit == "KG") {
                                                                manufactur.value = quantity / 1000;
                                                            } else if (unit == "TONS") {
                                                                manufactur.value = quantity / 1;
                                                            }

                                                        }
                                                    </script>

                                                </table>
                                                <!--begin::Input group Website-->
                                                <div class="fv-row mb-6">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <span>Total<i class="bi bi-lock-fill"></i></span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid"
                                                    id="customer-number" name="customer-number" value="2.775.000"
                                                    placeholder="" readonly />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            </div>
                                            <!--End::Row-->
                                        </div>
                                        </form>
                                    </div>
                                    <!--End::Tab Contact Information-->

                                    {{-- <!--Begin::Tab Flight Information-->
                                <div class="tab-pane fade" id="kt_user_view_flight" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
                                    <div class="row fv-row">
                                        <div class="container">

                                            <!--Begin::Flight With Equal Email-->
                                            <div class="row mt-3">
                                                <div id="collaps-1" class="mb-7 mt-5">
                                                    <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Flight With Equal Email
                                                        <a href="#" Id="Plus" style="display:" class="Plus10" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_flight_email"><i class="bi bi-plus-lg ms-2"></i></a>&nbsp;
                                                        <i onclick="hideColumn(this, '#FlightEmail')" id="hide-button" class="bi bi-arrows-collapse"></i>
                                                        <i onclick="showColumn(this, '#FlightEmail')" id="show-button" class="bi bi-arrows-expand" style="display: none"></i>
                                                    </h2>
            
                                                    <div id="FlightEmail" class="m-2 my-6" style="display:">
                                                        <table class="table align-middle table-row-dashed fs-6 gy-2" id="table">
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th class="min-w-auto text-align-center">No</th>
                                                                    <th class="min-w-50">Contact Name</th>
                                                                    <th class="min-w-auto">Voucher</th>
                                                                    <th class="min-w-auto">Created on</th>
                                                                    <th class="min-w-auto">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Alexander Pierto</td>
                                                                    <td>Flight Voucher Free</td>
                                                                    <td>{{date('d F Y')}}</td>
                                                                    <td><small class="badge badge-light-success">Active</small></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End::Flight With Equal Email-->

                                            <!--Begin::Voucher Detail-->
                                            <div class="row mt-3">
                                                <div id="collaps-1" class="mb-7 mt-5">
                                                    <h2 class="fw-bolder m-0" id="HeadDetail" style="font-size:14px;">Voucher Detail
                                                        <a href="#" Id="Plus" style="display:" class="Plus10" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_voucher"><i class="bi bi-plus-lg ms-2"></i></a>&nbsp;
                                                        <i onclick="hideColumn(this, '#VoucherDetail')" id="hide-button" class="bi bi-arrows-collapse"></i>
                                                        <i onclick="showColumn(this, '#VoucherDetail')" id="show-button" class="bi bi-arrows-expand" style="display: none"></i>
                                                    </h2>
            
                                                    <div id="VoucherDetail" class="m-2 my-6" style="display:">
                                                        <table class="table align-middle table-row-dashed fs-6 gy-2" id="table">
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th class="min-w-auto text-align-center">No</th>
                                                                    <th class="min-w-50">Contact Name</th>
                                                                    <th class="min-w-auto">Voucher</th>
                                                                    <th class="min-w-auto">Created on</th>
                                                                    <th class="min-w-auto">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Alexander Pierto</td>
                                                                    <td>Flight Voucher Free</td>
                                                                    <td>{{date('d F Y')}}</td>
                                                                    <td><small class="badge badge-light-success">Active</small></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End::Voucher Detail-->
                                        </div>
                                    </div>
                                </div>
                                <!--End::Tab Flight Information--> --}}

                                    <!--Begin::Tab Flight Information-->
                                    <div class="tab-pane fade" id="kt_contact_history" role="tabpanel"
                                        aria-labelledby="info-tab" tabindex="0">
                                        <div class="row fv-row">
                                            <div class="container">

                                                <!--Begin::Cases-->
                                                <div class="row mt-7">
                                                    <div id="collaps-1" class="mt-5">
                                                        <h2 class="fw-bolder m-0" id="HeadDetail"
                                                            style="font-size:14px;">Cases
                                                            <a href="/cases#modal" Id="Plus" style="display:"
                                                                class="Plus10" type="button"><i
                                                                    class="bi bi-plus-lg ms-2"></i></a>&nbsp;
                                                            <i onclick="hideColumn(this, '#Cases')" id="hide-button"
                                                                class="bi bi-arrows-collapse"></i>
                                                            <i onclick="showColumn(this, '#Cases')" id="show-button"
                                                                class="bi bi-arrows-expand" style="display: none"></i>
                                                        </h2>

                                                        <div id="Cases" class="m-2 my-6" style="display:">
                                                            <table class="table align-middle table-row-dashed fs-6"
                                                                id="table-cases">
                                                                <thead>
                                                                    <tr
                                                                        class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                        <th class="min-w-50">Number</th>
                                                                        <th class="min-w-auto">Subject</th>
                                                                        <th class="min-w-auto">Registration Date</th>
                                                                        <th class="min-w-auto">Status</th>
                                                                        <th class="min-w-auto">Closed on</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    {{-- <tr>
                                                                    <td>
                                                                        <a href="/">RSV4814112</a>
                                                                    </td>
                                                                    <td>Mohon Untuk Mengirimkan E-Ticket</td>
                                                                    <td>{{date('d F Y')}}</td>
                                                                    <td><small class="badge badge-light-success">Resolved</small></td>
                                                                    <td>{{date('d F Y')}}</td>
                                                                </tr> --}}
                                                                    {{-- @dd($contact->cases_management) --}}

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End::Cases-->

                                                <!--Begin::Leads-->
                                                <div class="row mt-7">
                                                    <div id="collaps-1" class="mt-5">
                                                        <h2 class="fw-bolder m-0" id="HeadDetail"
                                                            style="font-size:14px;">Leads
                                                            <a href="#" Id="Plus" style="display:"
                                                                class="Plus10" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_leads"><i
                                                                    class="bi bi-plus-lg ms-2"></i></a>&nbsp;
                                                            <i onclick="hideColumn(this, '#Leads')" id="hide-button"
                                                                class="bi bi-arrows-collapse"></i>
                                                            <i onclick="showColumn(this, '#Leads')" id="show-button"
                                                                class="bi bi-arrows-expand" style="display: none"></i>
                                                        </h2>

                                                        <div id="Leads" class="m-2 my-6" style="display:">
                                                            <table class="table align-middle table-row-dashed fs-6"
                                                                id="table-leads">
                                                                <thead>
                                                                    <tr
                                                                        class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                        <th class="min-w-50">Lead</th>
                                                                        <th class="min-w-auto">Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End::Leads-->

                                                <!--Begin::Opportunity-->
                                                <div class="row mt-7">
                                                    <div id="collaps-1" class="mt-5">
                                                        <h2 class="fw-bolder m-0" id="HeadDetail"
                                                            style="font-size:14px;">Opportunity
                                                            <a href="#" Id="Plus" style="display:"
                                                                class="Plus10" data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_opportunity"><i
                                                                    class="bi bi-plus-lg ms-2"></i></a>&nbsp;
                                                            <i onclick="hideColumn(this, '#Opportunity')" id="hide-button"
                                                                class="bi bi-arrows-collapse"></i>
                                                            <i onclick="showColumn(this, '#Opportunity')" id="show-button"
                                                                class="bi bi-arrows-expand" style="display: none"></i>
                                                        </h2>

                                                        <div id="Opportunity" class="m-2 my-6" style="display:">
                                                            <table class="table align-middle table-row-dashed fs-6"
                                                                id="table-opportunity">
                                                                <thead>
                                                                    <tr
                                                                        class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                        <th class="min-w-50">Name</th>
                                                                        <th class="min-w-auto">Stage</th>
                                                                        <th class="min-w-auto">Customer Need</th>
                                                                        <th class="min-w-auto">Budget</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End::Opportunity-->

                                            </div>
                                        </div>
                                    </div>
                                    <!--End::Tab Flight Information-->


                                </div>
                                <!--End::Tab Panel-->
                            </div>
                            <!--end::Card-->
                        </div>
                    </div>
                    <!--End::Content Kiri-->
                </div>


                <!--begin::Modal Leads-->
                <form action="/contact/leads/create" method="post" enctype="multipart/form-data" id="form"
                    onsubmit="return validateInputs(this)">
                    @csrf

                    <!--begin::Modal - Create Customer-->
                    <div class="modal fade" id="kt_modal_leads" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-500px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2>Add Leads</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <i class="bi bi-x-lg"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->

                                <!--begin::Modal body-->
                                <div class="modal-body py-lg-6 px-lg-6 mx-5">

                                    <!--Begin::Row-->
                                    <div class="row fv-row mb-7">
                                        <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0 required">
                                            <span class="">Customer Need</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select id="customer-need" name="customer-need"
                                            class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="false" data-dropdown-parent="#kt_modal_leads"
                                            data-placeholder="Select Customer Need">
                                            <option value=""></option>
                                        </select>
                                        <!--end::Input-->
                                        <!--end::Input Contact Name-->
                                    </div>
                                    <!--End::Row-->

                                    <!--Begin::Row-->
                                    <div class="row fv-row mb-7">
                                        <!--begin::Input Voucher-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0 required">
                                            <span class="">Contact</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" id="contact" name="contact-name"
                                            class="form-control form-control-solid" placeholder="Input Contact" disabled>
                                        <input type="hidden" id="contact-id" name="contact-id"
                                            class="form-control form-control-solid" placeholder="Input Contact">
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input Voucher is invalid
                                        </div>
                                        <!--end::Input-->
                                        <!--end::Input Voucher-->
                                    </div>
                                    <!--End::Row-->

                                    <!--Begin::Row-->
                                    <div class="row fv-row mb-7">
                                        <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0">
                                            <span class="">Account</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div id="account-id">
                                            <select name="account-id" id="account-id"
                                                class="form-select form-select-solid" data-control="select2"
                                                data-hide-search="false" data-dropdown-parent="#kt_modal_leads"
                                                data-placeholder="Select Account">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input created on is invalid
                                        </div>
                                        <!--end::Input-->
                                        <!--end::Input Contact Name-->
                                    </div>
                                    <!--End::Row-->

                                    <!--Begin::Row-->
                                    <div class="row fv-row mb-7">
                                        <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0">
                                            <span class="">Email</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <input type="email" id="email" name="email"
                                            class="form-control form-control-solid" placeholder="Input Email">
                                        <!--end::Options-->
                                        <!--end::Input Contact Name-->
                                    </div>
                                    <!--End::Row-->

                                    <!--Begin::Row-->
                                    <div class="row fv-row mb-7">
                                        <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0">
                                            <span class="">Mobile Phone</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <input type="number" id="mobile-phone" name="mobile-phone" value=""
                                            class="form-control form-control-solid" placeholder="Input Mobile Phone">
                                        <!--end::Options-->
                                        <!--end::Input Contact Name-->
                                    </div>
                                    <!--End::Row-->

                                    <div class="modal-footer">
                                        <button type="submit"
                                            class="btn btn-sm btn-light btn-active-primary text-white btn-success"
                                            id="proyek_new_save">Save</button>
                                    </div>
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - Create App-->
                </form>
                <!--end::Modal Leads-->

                <!--begin::Modal Leads-->
                <form action="/contact/opportunity/create" method="post" enctype="multipart/form-data" id="form"
                    onsubmit="return validateInputs(this)">
                    @csrf

                    <!--begin::Modal - Create Customer-->
                    <div class="modal fade" id="kt_modal_opportunity" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-500px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                    <!--begin::Modal title-->
                                    <h2>Add Opportunity</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <i class="bi bi-x-lg"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->

                                <!--begin::Modal body-->
                                <div class="modal-body py-lg-6 px-lg-6 mx-5">

                                    <!--Begin::Row-->
                                    <div class="row fv-row mb-7">
                                        <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0 required">
                                            <span class="">Customer</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" id="contact" name="contact-id"
                                            class="form-control form-control-solid" placeholder="Input Name" disabled>
                                        <input type="hidden" id="contact-id" name="contact-id"
                                            class="form-control form-control-solid" placeholder="Input Name">
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input contact name is invalid
                                        </div>
                                        <!--end::Input-->
                                        <!--end::Input Contact Name-->
                                    </div>
                                    <!--End::Row-->

                                    <!--Begin::Row-->
                                    <div class="row fv-row mb-7">
                                        <!--begin::Input Voucher-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0 required">
                                            <span class="">Name</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" id="contact-name" name="contact-name" value=""
                                            class="form-control form-control-solid" placeholder="Input Name">
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input Voucher is invalid
                                        </div>
                                        <!--end::Input-->
                                        <!--end::Input Voucher-->
                                    </div>
                                    <!--End::Row-->

                                    <!--Begin::Row-->
                                    <div class="row fv-row mb-7">
                                        <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0">
                                            <span class="">Customer Need</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="customer-need" id="customer-needs"
                                            class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="false" data-dropdown-parent="#kt_modal_opportunity"
                                            data-placeholder="Select Customer Need">
                                            <option value=""></option>
                                        </select>
                                        <!--end::Input-->
                                        <!--end::Input Contact Name-->
                                    </div>
                                    <!--End::Row-->

                                    <!--Begin::Row-->
                                    <div class="row fv-row mb-7">
                                        <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0 required">
                                            <span class="">Stage</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="stage" id="stage" class="form-select form-select-solid"
                                            data-control="select2" data-hide-search="false"
                                            data-dropdown-parent="#kt_modal_opportunity" data-placeholder="Select Stage">
                                            <option value=""></option>
                                        </select>
                                        <div class="invalid-feedback m-0" id="message2" style="visibility: hidden">
                                            Input created on is invalid
                                        </div>
                                        <!--end::Input-->
                                        <!--end::Input Contact Name-->
                                    </div>
                                    <!--End::Row-->

                                    <!--Begin::Row-->
                                    <div class="row fv-row mb-7">
                                        <!--begin::Input Contact Name-->
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3 p-0">
                                            <span class="">Budget</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <input type="text" id="budget" name="budget" value=""
                                            class="form-control form-control-solid reformat" placeholder="Input Budget">
                                        <!--end::Options-->
                                        <!--end::Input Contact Name-->
                                    </div>
                                    <!--End::Row-->

                                    <div class="modal-footer">
                                        <button type="submit"
                                            class="btn btn-sm btn-light btn-active-primary text-white btn-success"
                                            id="proyek_new_save">Save</button>
                                    </div>
                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - Create App-->
                </form>
                <!--end::Modal Leads-->

            </div>
            <!--end::Container-->
        </div>
        <!--end::Content-->

    </div>
    <!--end::Customer Menu-->
@endsection

@section('js-script')

    <!--Begin:: Get Age-->
    <script>
        function getAge(e) {
            let age = new Date(e.value);
            let monthDiff = Date.now() - age.getTime();
            let age_dt = new Date(monthDiff);
            let year = age_dt.getUTCFullYear();
            let ageNow = Math.abs(year - 1970);
            document.getElementById("age").setAttribute("value", ageNow);
        }
    </script>
    <!--End:: Get Age-->

    <!--Begin:: Get Budget-->
    <script>
        function selectAccount(val) {
            if (val == "Employee") {
                document.getElementById("select-account").style.display = ""
            } else {
                document.getElementById("select-account").style.display = "none";
            }
        }
    </script>

    <script>
        $("#customer-needs").select2({
            dropdownParent: "#modal-container"
        });
    </script>

    <script>
        Highcharts.setOptions({
            chart: {
                style: {
                    fontFamily: 'Poppins'
                }
            },
            // colors: chart,
            colors: ["#017EB8", "#28B3AC", "#F7AD1A", "#9FE7F5", "#E86340", "#063F5C"],
            // colors: ["#239DB5", "#71B383", "#EE8E52", "#EBC44F", "#8D5690", "#E85170",  "#4282A6"],
            // colors: ["#009EF7", "#50CD89", "#F1416C", "#FFC700", "#7239EA", "#43CED7", "#FA8B28"],
        });
    </script>

    <!--begin::Highchart Line-->
    <script>
        Highcharts.chart('chart-line', {
            title: {
                text: 'Dashboard',
                style: {
                    fontWeight: 'bold',
                    fontSize: '25px'
                }
            },

            subtitle: {
                // text: ''
            },

            yAxis: {
                title: {
                    text: ''
                }
            },

            xAxis: {
                accessibility: {
                    // rangeDescription: 'Range: 2010 to 2020'
                },
                categories: [
                    "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                    "Oktober", "November", "Desember",
                ],
            },

            tooltip: {
                headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
                pointFormat: '<tr><td style="padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>&nbsp;{point.y:.0f}</b></td></tr>',
                footerFormat: '</table>',
                // shared: true,
                useHTML: true
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    // pointStart: 1
                }
            },

            credits: {
                enabled: false
            },
            exporting: {
                showTable: false,
                allowHTML: true
            },

            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                format: '<b>{point.key}</b><br>',
                itemStyle: {
                    fontSize: '20px',
                },
            },

            series: [{
                name: '2020',
                data: [11908, 5548, 8105, 11248, 8989, 11816, 28274,
                    27300, 39053, 42906, 65073, 60940
                ]
            }, {
                name: '2021',
                data: [13934, 22234, 24657, 31827, 42143, 60087,
                    64878, 65174, 68646, 79546, 88546, 90000
                ]
            }, {
                name: '2022',
                data: [23934, 28656, 35165, 41827, 52143, 62383,
                    71533, 75174, 95157, 91454, 94610, 100000
                ]
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        }, );
    </script>
    <!--end::Highchart Line-->

@endsection
