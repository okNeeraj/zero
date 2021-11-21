@extends("Backend.layouts.app")

@section("title", "Location Management")

@section("content")

<!-- start::Page Header -->
<div class="page-header page-nav">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-secondary">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Locations Management</li>
                    </ol>
                </nav>
                <ul class="nav nav-tabs justify-content-end" id="myTab" role="tablist">
                    <li class="nav-item mr-auto nav-heading">
                        <h1 class="heading">Locations Management</h1>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="country">Country</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="state">State</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="city">City</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="locality">Locality</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end::Page Header -->

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 d-noneF">
            <div class="card-box card table-card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                            <form action="" method="">
                                <div class="row no-gutters-half">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control dark" placeholder="Search Country" name="" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="#" class="btn btn-primary"><i class="fi flaticon-shapes-and-symbols mr-2"></i>Add Country</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th class="single-action" scope="col">
                                    #
                                </th>
                                <th scope="col">Name</th>
                                <th scope="col">Alias</th>
                                <th scope="col">Dialing Code</th>
                                <th scope="col">ISO Alpha 2</th>
                                <th scope="col">ISO Alpha 3</th>
                                <th scope="col">Currency Code</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-uid="1">
                                <th class="single-action" scope="row">
                                    1
                                </th>
                                <td>India</td>
                                <td>india</td>
                                <td>+91</td>
                                <td>IN</td>
                                <td>IND</td>
                                <td>#7676</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <div class="table-action">
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalStatus">
                                            <i class="icon fi flaticon-visibility-1"data-toggle="tooltip" title="Inactive country"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalEdit">
                                            <i class="icon fi flaticon-pencil" data-toggle="tooltip" title="Edit country"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr data-uid="2" class="inactive">
                                <th class="single-action" scope="row">
                                    2
                                </th>
                                <td>United States of America</td>
                                <td>usa</td>
                                <td>+1</td>
                                <td>US</td>
                                <td>USA</td>
                                <td>#2239</td>
                                <td><span class="badge badge-danger">Inactive</span></td>
                                <td>
                                    <div class="table-action">
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalStatus">
                                            <i class="icon fi flaticon-visibility"data-toggle="tooltip" title="Active country"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalEdit">
                                            <i class="icon fi flaticon-pencil" data-toggle="tooltip" title="Edit country"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr data-uid="3" class="inactive">
                                <th class="single-action" scope="row">
                                    3
                                </th>
                                <td>China</td>
                                <td>china</td>
                                <td>+86</86td>
                                <td>CH</td>
                                <td>CHN</td>
                                <td>#886</td>
                                <td><span class="badge badge-danger">Inactive</span></td>
                                <td>
                                    <div class="table-action">
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalStatus">
                                            <i class="icon fi flaticon-visibility"data-toggle="tooltip" title="Active country"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalEdit">
                                            <i class="icon fi flaticon-pencil" data-toggle="tooltip" title="Edit country"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr data-uid="4" class="inactive">
                                <th class="single-action" scope="row">
                                    4
                                </th>
                                <td>Russian Federation</td>
                                <td>russia</td>
                                <td>+7</td>
                                <td>RS</td>
                                <td>RUS</td>
                                <td>#9964</td>
                                <td><span class="badge badge-danger">Inactive</span></td>
                                <td>
                                    <div class="table-action">
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalStatus">
                                            <i class="icon fi flaticon-visibility"data-toggle="tooltip" title="Active country"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalEdit">
                                            <i class="icon fi flaticon-pencil" data-toggle="tooltip" title="Edit country"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- No Data --}}
        <div class="col-sm-12 d-none">
            <div class="card-box card">
                <div class="card-body">
                    <div class="no-data">
                        <img src="{{ asset('Backend/images/template/empty.png') }}" alt="">
                        <h4>You don't have any Locations</h4>
                        <p>Tip on how to <a href="#!">add data</a></p>
                        <a href="#" class="btn btn-primary">
                            <i class="fi flaticon-shapes-and-symbols"></i>
                            Add New User
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end::Page Container -->

@endsection()

@push('pageScripts')
<script src="{{ asset('Backend/js/bootstrap-select.js') }}"></script>

<script>
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>
@endpush
