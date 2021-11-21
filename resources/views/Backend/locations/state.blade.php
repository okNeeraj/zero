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
                        <a class="nav-link" href="country">Country</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="state">State</a>
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
                                    <div class="col-md-2">
                                        <select class="form-control mr-2" title="Select State" name="state" data-live-search="true">
                                            <option value="India" selected>India</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="USA">USA</option>
                                            <option value="China">China</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control dark" placeholder="Search State" name="" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="#!" class="btn btn-primary" data-toggle="modal" data-target="#localityModal">
                                <i class="fi flaticon-shapes-and-symbols"></i>
                                Add State
                            </a>
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
                                <th scope="col">State</th>
                                <th scope="col">Alias</th>
                                <th scope="col">State Code</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="no-data-row">
                                <td colspan="6">
                                    <div class="no-data">
                                        <img src="{{ asset('Backend/images/template/empty3.png') }}" alt="">
                                        <h4>You don't have any state</h4>
                                        <p>Search different location or add new one.</p>
                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#cityModal">
                                            <i class="fi flaticon-shapes-and-symbols"></i>
                                            Add New State
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()

@push('pageScripts')
<script src="{{ asset('Backend/js/bootstrap-select.js') }}"></script>

<script>
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>
@endpush
