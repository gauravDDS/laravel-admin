@extends('layouts.admin.app')
@push('page_css')
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')                
<div class="container-fluid">    
    <h1 class="h3 mb-0 text-gray-800">Users</h1>    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>            
            <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
    </nav>
    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive" >
                <table class="table table-hover dataTable" id="user-list" style="width:99.6% !important; table-layout:fixed">
                    <thead class="thead-light">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th class="text-center">Action</th>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@push('page_script')
    <script> var user_route = "{{ route('users.index') }}";</script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>    
    <script src="{{ asset('assets/scripts/user.js') }}"></script>    
@endpush
@endsection
