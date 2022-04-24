@push('title')
    <title>Sign Up</title>
@endpush
@extends('main')
@section('main-section')
<style>
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover{
        background:unset;
        border:none;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button{
        padding:0 !important;
    }
    table.dataTable thead .sorting::after, table.dataTable thead .sorting_asc::after, table.dataTable thead .sorting_desc::after, table.dataTable thead .sorting_asc_disabled::after, table.dataTable thead .sorting_desc_disabled::after,
    table.dataTable thead .sorting::before, table.dataTable thead .sorting_asc::before, table.dataTable thead .sorting_desc::before, table.dataTable thead .sorting_asc_disabled::before, table.dataTable thead .sorting_desc_disabled::before{
        display: none !important; 
    }
</style>

<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Components</a></li>
            <li class="breadcrumb-item active" aria-current="page">Buttons</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Buttons</h1>
            <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
        </div>
        <div>
            <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/buttons/" class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Buttons Docs</a>
        </div>
    </div>
</div>
<div class="card py-4 px-3">
<table class="table-responsive py-4 table table-flush dataTable-table" id="studentTable">
    <thead class="table table-flush dataTable-table">
        <tr>            
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>            
            <th>Action</th>            
        </tr>
    </thead>
    <tbody class="p-4">

    </tbody>
</table>
</div>
<script>
    $(document).ready(function(){
       $('#studentTable').DataTable({
            processing: true,
            serverSide: true,
            orderable: true, 
            searchable: true,
            ajax: "/students",
            columns: [                              
                {data: 'first_name', name: 'first_name'},
                {data: 'last_name', name: 'last_name'},
                {data: 'email', name: 'email'},                            
                {data: 'action', name: 'action'},                            
            ]

        });
    });
</script>
@endsection