@extends('layouts.main')

@section('title', 'Categoires')

@section('container')

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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Promised Delivery
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
                    <!--begin::Button-->
                    @if (auth()->user()->Role->is_supervisor)
                        <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" id="kt_toolbar_primary_button">Create</a>
                    @endif
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="card mx-6" Id="List-vv" style="position: relative; overflow: hidden;">
            <!--begin::Card header-->
            {{-- <div class="card-header py-5">
            <h1>Account</h1>
        </div> --}}
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-6">
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_finish_goods" style="font-size:12px;">Finish Goods</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="kt_finish_goods" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
                        <div class="container">
                            <div class="row fv-row">
                                <div class="row mb-7">
                                    <h3>Calculate Product</h3>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label for="" class="mb-3 required">Product</label>
                                        <select name="" id="product" class="form-select form-select-solid" onchange="productSelect()">
                                            <option value=""></option>
                                            @forelse ($data->where("category", "=", "Finish Goods") as $item)
                                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                                            @empty
                                            <option value=""></option>
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="" class="mb-3 required">How much product you want</label>
                                        <input type="number" name="total-want" id="total-want" oninput="calculate()" class="form-control form-control-solid" placeholder="0" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3 mt-7">
                                    <h3>Result</h3>
                                </div>
                                <div class="row">
                                    <div class="col-4 mb-3">
                                        <label for="" class="mb-3">
                                            <span>Materials<i class="bi bi-lock-fill"></i></span>
                                        </label>
                                        <input type="number" name="material" id="material" value="" class="form-control form-control-solid" placeholder="0" style="cursor:auto" readonly>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="" class="mb-3">
                                            <span>Estimate (day)<i class="bi bi-lock-fill"></i></span>
                                        </label>
                                        <input type="text" name="time" id="time" value="" class="form-control form-control-solid" placeholder="0" style="cursor:auto" readonly>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <label for="" class="mb-3">
                                            <span>Inventory Difference<i class="bi bi-lock-fill"></i></span>
                                        </label>
                                        <input type="text" name="inventory-difference" id="inventory-difference" value="" min="0" class="form-control form-control-solid" placeholder="0" style="cursor:auto" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end::Card body-->
        </div>
        <!--end::Post-->
    </div>


@endsection

@section('js-script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: '<"float-start"f><"#example"t>rtip',
                pageLength: 50,
            });
        });
    </script>

    <script>
        function productSelect(){
            document.getElementById('total-want').disabled = false;
        }
        function calculate() {
            // let product = document.getElementById('product');
            let product = document.getElementById('product').value;
            let product_want = document.getElementById('total-want').value;
            const roll = 500;
            const Oneday = 250;
            const inventroy = 100;
            
            let material_need =  product_want/roll;
            let Estimate_need =  product_want/Oneday;
            let Inventory_need =  inventroy-product_want;

            document.getElementById('material').value = material_need;
            document.getElementById('time').value = Estimate_need;
            document.getElementById('inventory-difference').value = Inventory_need;
            
        }
    </script>
@endsection
