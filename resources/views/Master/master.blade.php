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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{ $tittle }}
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
            <table id="example" class="table table-striped" style="width:100%">
                <thead >
                    <tr class="fw-bolder">
                        <th style="text-align: center">No</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Category</th>
                        @if (!empty($column_2_name))
                        <th>{{ $column_2_name }}</th>
                        @endif
                        @if (!empty($column_3_name))
                        <th>{{ $column_3_name }}</th>
                        @endif
                        @if (!empty($column_4_name))
                        <th>{{ $column_4_name }}</th>
                        @endif
                        @if (!empty($column_5_name))
                        <th>{{ $column_5_name }}</th>
                        @endif
                        <th>Created On</th>
                        <th>Modified On</th>
                        @if (Auth::user()->Role->is_supervisor)
                        <th class="text-center">Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no=1;
                        // dd($data);
                    @endphp
                    @foreach ($data as $item)
                        <tr>
                            <td style="text-align:center">{{ $no++ }}</td>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->category }}</td>

                            @if (!empty($column_2) && !empty($column_2_relation))
                            <td>{{ $item->$column_2_relation->$column_2 ?? "-" }}</td>
                            @elseif(!empty($column_2))
                            <td>{{ $item->$column_2 ?? "-" }}</td>
                            @endif

                            @if (!empty($column_3) && !empty($column_3_relation))
                            <td>{{ $item->$column_3_relation->$column_3 ?? "-" }}</td>
                            @elseif(!empty($column_3))
                            <td>{{ $item->$column_3 ?? "-" }}</td>
                            @endif

                            @if (!empty($column_4) && !empty($column_4_relation))
                            <td>{{ $item->$column_4_relation->$column_4 ?? "-" }}</td>
                            @elseif(!empty($column_4))
                            <td>{{ $item->$column_4 ?? "-" }}</td>
                            @endif

                            @if (!empty($column_5) && !empty($column_5_relation))
                            <td>{{ $item->$column_5_relation->$column_5 ?? "-" }}</td>
                            @elseif(!empty($column_5))
                            <td>{{ $item->$column_5 ?? "-" }}</td>
                            @endif

                            {{-- @dump($column_2) --}}
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td class="text-center pe-5">
                                @if (Auth::user()->Role->is_supervisor)
                                <a href="#" class="text-hover-primary" data-bs-toggle="modal" data-bs-target="#modal-update{{ $item->uuid }}">&nbsp;<i class="bi bi-pencil-square"></i></a>
                                <a href="#" class="text-hover-danger" data-bs-toggle="modal" data-bs-target="#modal-delete{{ $item->uuid }}">&nbsp;<i class="bi bi-trash"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                   

        
                </tbody>
                
            </table>
        </div>
       
        <!--end::Card body-->
    </div>
    <!--end::Post-->
</div>

 <!-- begin::modal add Category-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add {{ $tittle }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/{{ $tittle }}/new" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="required form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
            </div>
            <div class="mb-3">
                <label for="column" class="required form-label">Code</label>
                <input type="text" name="code" class="form-control" id="code" placeholder="code" required>
            </div>
            <div class="mb-3">
                <label for="column" class="required form-label">Category</label>
                <input type="text" name="category" class="form-control" id="category" placeholder="category" required>
            </div>
            <div class="mb-3">
                <label for="column" class="form-label">Deskripsi</label>
                @if ($tittle != 'Items')
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="deskripsi" required>
                @else
                <select name="deskripsi" class="form-select" data-control="select2" data-hide-search="false" data-placeholder="Satuan">
                    <option value=""></option>
                    <option value="TON">TON</option>
                    <option value="KG">KG</option>
                </select>
                @endif
            </div>
            <p class="text-danger" id="req-field" style="display: none">Mandatori Field Harus Diisi !</p>
          
        </div>
        <!--begin::Options-->
        <!--end::Options-->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
            <p onclick="saveButton(this)" id="save-1" class="btn btn-warning btn-sm">Proccess Create</p>
            <div id="save-2" style="display: none"  class="px-4">
                <span class="spinner-border text-secondary" role="status"></span>
            </div>
            <button id="save-3" style="display: none" class="btn btn-primary btn-sm">Save</button>
        </div>

        <script>
            function saveButton(e) {
                let name = document.getElementById("name").value;
                let code = document.getElementById("code").value;
                let category = document.getElementById("category").value;
                
                if (!name) {
                    document.getElementById("req-field").style.display = "";   
                } else if (!code) {
                    document.getElementById("req-field").style.display = "";   
                } else if (!category) {
                    document.getElementById("req-field").style.display = "";   
                } else {
                    document.getElementById("req-field").style.display = "none";
                    document.getElementById("save-1").style.display = "none";
                    document.getElementById("save-2").style.display = "";
                    setTimeout( function() {
                        document.getElementById("save-2").style.display = "none";
                        document.getElementById("save-3").style.display = "";
                    }, 500);
                }
            }

        </script>
    
      </div>
    </div>
  </div>
</form>
 <!-- end::modal add Category-->

 <!-- begin::modal edit-->
@foreach ($data as $d)
<form action="/{{ $tittle }}/update/{!! $d->uuid !!}" method="post">
    @csrf    
    <div class="modal fade" id="modal-update{{ $d->uuid }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Update {{ $tittle }}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="required form-label">Name</label>
                    <input type="text" value="{{ $d->name }}" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="required form-label">Code</label>
                    <input type="text" value="{{ $d->code }}" name="code" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="category" class="required form-label">Category</label>
                    <input type="text" value="{{ $d->category }}" name="category" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="column" class="required form-label">Deskripsi</label>
                    @if ($tittle != 'Items')
                    <input type="text" value="{{ $d->deskripsi }}" name="deskripsi" class="form-control">
                    @else
                    <select name="deskripsi" class="form-select" data-control="select2" data-hide-search="false" data-placeholder="Satuan">
                        <option value=""></option>
                        <option value="TON" {{ $d->deskripsi == "TON" ? 'selected' : '' }}>TON</option>
                        <option value="KG" {{ $d->deskripsi == "KG" ? 'selected' : '' }}>KG</option>
                    </select>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
            {{-- <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Cancel</button> --}}
            <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
      </div>
    </div>
  </div>
</form>
@endforeach
 <!-- end::modal edit-->

 <!-- begin::modal delete-->
@foreach ($data as $d)
<form action="/{{ $tittle }}/delete/{!! $d->uuid !!}" method="post">
    @method('delete')
    @csrf    
    <div class="modal fade" id="modal-delete{{ $d->uuid }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete {{ $tittle }}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h2>Hapus : {{ $d->name }}</h2>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary btn-sm">Delete</button>
            </div>
      </div>
    </div>
  </div>
</form>
@endforeach
 <!-- end::modal delete-->

@endsection

@section('js-script')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    
        $(document).ready(function () {
            $('#example').DataTable({
                dom: '<"float-start"f><"#example"t>rtip',
                pageLength : 50,
            });
        });

</script>
@endsection