@extends('layouts.main')

@section('title', 'Wasted Order')

@section('container')

<!--End :: Customer Menu-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Wasted Order
                    <!--begin::Separator-->
                    {{-- <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span> --}}
                    <!--end::Separator-->
                    <!--begin::Description-->
                    {{-- <small class="text-muted fs-7 fw-bold my-1 ms-1">#XRS-45670</small> --}}
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">
                <!--begin::Wrapper-->
                <div class="me-4">
                    <!--begin::Menu-->
                    <a href="#"
                        class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter
                    </a>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                        data-kt-menu="true" id="kt_menu_6155ac804a1c2">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" id="status" name="status"
                                        data-kt-select2="true" data-placeholder="Select option"
                                        data-dropdown-parent="#kt_menu_6155ac804a1c2"
                                        data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="3">In Process</option>
                                        <option value="4">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label
                                        class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox"
                                            value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label
                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox"
                                            value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div
                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value=""
                                        name="notifications" checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset"
                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-success"
                                    data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Button-->
                @if (auth()->user()->Role->is_supervisor)
                <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal"
                data-bs-target="#kt_modal_create_customer" id="kt_toolbar_primary_button">Create</a>
                @endif
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Content-->
    <div id="content" class="mt-0 px-5">
        <div class="card">
            
        <div class="card-body pt-6">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th style="text-align: center">No</th>
                        <th>No. Wasted Order</th>
                        <th>Customer/Vendor</th>
                        <th>PIC</th>
                        <th>Location Out</th>
                        <th>Payment Terms</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no=1;
                    @endphp
                        <tr>
                            <td style="text-align:center">{{ $no++ }}</td>
                            <td><a href="/view-wasted-order">WO-00001</a></td>
                            <td><a href="#">{{ Faker\Factory::create()->company() }}</a></td>
                            <td>Admin</td>
                            <td>Main Warehouse</td>
                            <td>2</td>
                            <td>{{ Faker\Factory::create()->date() }}</td>
                            <td><a href="/download/PTP">Print</a></td>
                        </tr>
                        
                        <tr>
                            <td style="text-align:center">{{ $no++ }}</td>
                            <td><a href="/view-wasted-order">WO-00002</a></td>
                            <td><a href="#">{{ Faker\Factory::create()->company() }}</a></td>
                            <td>Admin</td>
                            <td>Production</td>
                            <td>3</td>
                            <td>{{ Faker\Factory::create()->date() }}</td>
                            <td><a href="/download/PTP">Print</a></td>
                        </tr> 

                        <tr>
                            <td style="text-align:center">{{ $no++ }}</td>
                            <td><a href="/view-wasted-order">WO-00003</a></td>
                            <td><a href="#">{{ Faker\Factory::create()->company() }}</a></td>
                            <td>Admin</td>
                            <td>Production</td>
                            <td>1</td>
                            <td>{{ Faker\Factory::create()->date() }}</td>
                            <td><a href="/download/PTP">Print</a></td>
                        </tr> 
                </tbody>
                
            </table>
        </div>
        </div>
    </div>
    <!--end::Content-->

</div>
<!--End :: Customer Menu-->

<!--begin::Modal New Customer-->
<form action="/contact/create" method="post" enctype="multipart/form-data" onsubmit="return validateInputs(this)">
    @csrf
    <!--begin::Modal - Create Customer-->
    <div class="modal fade" id="kt_modal_create_customer" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-600px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>New Wasted Order</h2>
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
                <div class="modal-body py-lg-6 px-lg-6">

                    <!--begin::Input group Website-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mt-3 required">
                            <span>No. Procure to Pay</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" id="no-job-order" name="no-job-order" class="form-control form-control-solid" 
                        value="{{ old('no-job-order') }}" placeholder="No. Procure to Pay" />
                        @error('no-job-order')
                        <h6 class="text-danger fw-normal">{{ $message }}</h6>
                        @enderror
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <div class="row fv-row">
                        <div class="col-6">
                            <!--begin::Input group Website-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mt-3 required">
                                    <span>Create Date</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="date" id="date" name="date" class="form-control form-control-solid" 
                                value="" placeholder="Date" />
                                @error('date')
                                <h6 class="text-danger fw-normal">{{ $message }}</h6>
                                @enderror
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-6">
                            <!--begin::Input group Website-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label mt-3 required">
                                    <span>Customer/Vendor</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="type" id="unit" class="form-select form-select-solid" data-hide-search="true" data-placeholder="Select Customer/Vendor">
                                <option value="Ferbyansah">Ferbyansah</option>
                                </select>
                                @error('Customer')
                                <h6 class="text-danger fw-normal">{{ $message }}</h6>
                                @enderror
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>

                    <div class="row fv-row">
                        <div class="col-4">
                            <!--begin::Input group Website-->
                            <div class="fv-row mb-6">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                    <span>PIC</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" 
                                id="customer-number" name="customer-number" value="Admin" placeholder="Customer Number" readOnly/>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-4">
                            <!--begin::Input group Website-->
                            <div class="fv-row mb-6">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                    <span>Location Out</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="location-out" id="location-out" class="form-select form-select-solid" data-hide-search="true" placeholder="Select Location Out">
                                    <option value="">Production</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-4">
                            <!--begin::Input group Website-->
                            <div class="fv-row mb-6">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                    <span>Payment Terms</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" name="payment-terms" id="payment-terms" class="form-control form-control-solid">
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    
                    <!--begin::Input group Website-->
                    <div class="fv-row mb-6">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mt-3">
                            <span>Attachment</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="file" class="form-control form-control-solid" 
                        id="customer-number" name="customer-number" value="Admin" placeholder="Customer Number" readOnly/>
                        <!--end::Input-->
                    </div>
                <!--end::Input group-->
                    


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-light btn-active-primary text-white btn-success" id="proyek_new_save">Save</button>
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
<!--end::Modal New Customer-->


@endsection

@section('js-script')  
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function(){
        if(window.location.href.indexOf('#modal') > -1)
            $('#kt_modal_create_customer').modal('show');
    });
</script>



@endsection