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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Delivery To Promise / DP-00001
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
                            class="stage-button d-flex align-items-center color-is-default"
                            style="outline: 0px; cursor: pointer; ">
                            <span>Complete</span>
                            <i class="bi bi-caret-down-fill text-white ms-3"></i>
                        </a>
                        <ul class="dropdown-menu" id="cancel" aria-labelledby="cancel">
                            <li><a class="dropdown-item" href="#">Complete</a></li>
                            <li><a class="dropdown-item" href="#">Cancel</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

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
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_finish_goods" style="font-size:12px;">Promised</a>
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
                                        <label for="" class="mb-3 required">Customer</label>
                                        <select name="type" id="code-item" onchange="read(this)" class="form-select" data-hide-search="true" data-placeholder="Select Type" value="FG-001">
                                        <option value="Ferbyansah">Ferbyansah</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="row">                                    
                                    <div class="col-6 mb-3">
                                        <label for="" class="mb-3 required">Product</label>
                                        <select name="" id="product" class="form-select form-select-solid" onchange="productSelect()">
                                            <option value="Finish Polybag">Finish Polybag</option>
                                            @forelse ($data->where("category", "=", "Finish Goods") as $item)
                                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                                            @empty
                                            <option value=""></option>
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="" class="mb-3 required">Quantity</label>
                                        <input type="number" value="100000" name="total-want" id="total-want" oninput="calculate()" class="form-control form-control-solid" placeholder="0" disabled>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-success">Calculate</button>
                                </div>
                                <div class="row mb-3 mt-7">
                                    <h3>Result</h3>
                                </div>
                                <div class="row">
                                    <!-- <div class="col-4 mb-3">
                                        <label for="" class="mb-3">
                                            <span>Materials<i class="bi bi-lock-fill"></i></span>
                                        </label>
                                        <input type="number" name="material" id="material" value="" class="form-control form-control-solid" placeholder="0" style="cursor:auto" readonly>
                                    </div> -->
                                    <div class="col-4 mb-3">
                                        <label for="" class="mb-3">
                                            <span>Estimate (day)<i class="bi bi-lock-fill"></i></span>
                                        </label>
                                        <input type="text" name="time" id="time" value="10" class="form-control form-control-solid" placeholder="0" style="cursor:auto" readonly>
                                    </div>
                                    <!-- <div class="col-4 mb-3">
                                        <label for="" class="mb-3">
                                            <span>Inventory Difference<i class="bi bi-lock-fill"></i></span>
                                        </label>
                                        <input type="text" name="inventory-difference" id="inventory-difference" value="" min="0" class="form-control form-control-solid" placeholder="0" style="cursor:auto" readonly>
                                    </div> -->
                                    
                                </div>
                            </div>
                            
                        </div>
                        <hr>
                        <!--Begin::Row-->
                        <div class="container">
                                                <table id="example" class="table table-striped" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Item Code</th>
                                                            <th>Item Name</th>
                                                            <th>Unit</th>
                                                            <th>Quantity Needs</th>
                                                            <th>In stock</th>
                                                            <th>Inventory Difference</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="BOM">
                                                            <tr>
                                                                <td><input type="text" id="code-item" name="code-item" class="form-control" value="RAW-001"></td>

                                                                <td><input type="text" id="nama-item" name="nama-item" class="form-control" value="PLASTIC"></td>

                                                                <td><input type="text" id="nama-item" name="nama-item" class="form-control" value="KG"></td>

                                                                <td><input type="number" id="quantity" name="quantity" class="form-control" value="2000"></td>

                                                                <td><input id="quantity" oninput="rumus(this)" type="number" name="" class="form-control" value="100"></td>

                                                                <td><input type="number" id="quantity" name="quantity" class="form-control" value="-1.900"></td>
                                                                 
                                                                <td><a href="/procure-to-pay" class="btn btn-sm btn-secondary">Order</a></td>
                                                            </tr>

                                                            <tr>
                                                                <td><input type="text" id="code-item" name="code-item" class="form-control" value="RAW-002"></td>

                                                                <td><input type="text" id="nama-item" name="nama-item" class="form-control" value="Serabut"></td>
                                                                
                                                                <td><input type="text" id="nama-item" name="nama-item" class="form-control" value="KG"></td>

                                                                <td><input type="number" id="quantity" name="quantity" class="form-control" value="8000"></td>

                                                                <td><input id="quantity" oninput="rumus(this)" type="number" name="" class="form-control" value="500"></td>

                                                                <td><input type="number" id="quantity" name="quantity" class="form-control" value="-7.500"></td>
                                                                                                                                
                                                                <td><a href="/procure-to-pay" class="btn btn-sm btn-secondary">Order</a></td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td><input type="text" id="code-item" name="code-item" class="form-control" value="RAW-005"></td>

                                                                <td><input type="text" id="nama-item" name="nama-item" class="form-control" value="Jerami"></td>

                                                                <td><input type="text" id="nama-item" name="nama-item" class="form-control" value="KG"></td>

                                                                <td><input type="number" id="quantity" name="quantity" class="form-control" value="2000"></td>

                                                                <td><input id="quantity" oninput="rumus(this)" type="number" name="" class="form-control" value="500"></td>

                                                                <td><input type="number" id="quantity" name="quantity" class="form-control" value="-1.500"></td>

                                                                <td><a href="/procure-to-pay" class="btn btn-sm btn-secondary">Order</a></td>
                                                                                                                                    
                                                            </tr>

                                                            <tr>
                                                                <td><input type="text" id="code-item" name="code-item" class="form-control" value=""></td>

                                                                <td><input type="text" id="nama-item" name="nama-item" class="form-control" value=""></td>

                                                                <td><input type="text" id="nama-item" name="nama-item" class="form-control" value=""></td>

                                                                <td><input type="number" id="quantity" name="quantity" class="form-control" value=""></td>

                                                                <td><input id="quantity" oninput="rumus(this)" type="number" name="" class="form-control" value=""></td>

                                                                <td><input type="number" id="quantity" name="quantity" class="form-control" value=""></td>
                                                                
                                                                                                                                    
                                                            </tr>
                                                            

                                            
                                                    </tbody>

                                                    <button type="button" class="btn btn-sm btn-secondary" onclick="myFunction()">Add +</button>

                                                    <script>
                                                    function myFunction() {
                                                    var table = document.getElementById("BOM");
                                                    var trlen = table.getElementsByTagName("tr").length;
                                                    console.log(trlen);
                                                    let html = `<td><select name="type" id="code-item" onchange="read(this)" class="form-select" data-hide-search="true" data-placeholder="Select Type">
                                                                    <option value=""></option>
                                                                    <option value="FG-001">FG-001</option>
                                                                    <option value="RAW-001">RAW-001</option></select>
                                                                </td>

                                                                <td><input type="text" id="nama-item" name="nama-item" class="form-control" value=""></td>

                                                                <td><select name="type" id="unit" class="form-select" data-hide-search="true" data-placeholder="Select Type" value="">
                                                                    <option value=""></option>
                                                                    <option value="Production">Production</option>
                                                                    </select>
                                                                </td>

                                                                <td><input id="quantity" oninput="rumus(this)" type="number" name="" class="form-control" value=""></td>`;
                                                    var row = table.insertRow(Number(trlen));
                                                    row.innerHTML = html;
                                                                                                        }
                                                    </script>


                                                    <script>
                                                        function read(e){
                                                            let code = document.getElementById("code-item").value;
                                                            let nama = document.getElementById("nama-item");
                                                        
                                                            if (code == "FG-001") {
                                                                nama.value = "Finish Goods Polybag"; 
                                                            } else { (code == "RW-001")
                                                                nama.value = "PLASTIC"; 
                                                            }
                                                            
                                                        
                                                        }
                                                    </script>

                                                    <script>
                                                        function rumus(e){
                                                            let quantity = document.getElementById("quantity").value;
                                                            let unit = document.getElementById("unit").value;
                                                            let manufactur = document.getElementById("manufactur");

                                                            if (unit == "KG") {
                                                                manufactur.value = quantity/1000; 
                                                            } else if (unit == "TONS") {
                                                                manufactur.value = quantity/1; 
                                                            }

                                                        }
                                                    </script>
                                                    
                                                </table>
                                            </div>
                                            <!--End::Row-->
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
            const Oneday = 10000;
            const inventroy = 3000;
            
            let material_need =  product_want/roll;
            let Estimate_need =  product_want/Oneday;
            let Inventory_need =  inventroy-product_want;

            document.getElementById('material').value = material_need;
            document.getElementById('time').value = Estimate_need;
            document.getElementById('inventory-difference').value = Inventory_need;
            
        }
    </script>
@endsection
