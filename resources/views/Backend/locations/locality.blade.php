@extends("Backend.layouts.app")

@section("title", "Location Management")

@section("content")

@push('pageStyle')
    <link rel="stylesheet" src="{{ asset('testing.css') }}"></script>
@endpush

{{-- start::Page Header --}}
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
                        <a class="nav-link" href="state">State</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="city">City</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="locality">Locality</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
{{-- end::Page Header --}}

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
                                    <div class="col-md-3">
                                        <select class="form-control mr-2" title="Select State" name="state" data-live-search="true">
                                            <option value="Uttarakhand" selected>Uttarakhand</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Haryana">Haryana</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control mr-2" multiple title="Select City" name="city" title="Select City" data-live-search="true">
                                            <option value="Dehradun" selected>Dehradun</option>
                                            <option value="Nainital">Nainital</option>
                                            <option value="Pithoragarh">Pithoragarh</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control dark" placeholder="Search Locality or ZIP Code" name="" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="#!" class="btn btn-primary" data-toggle="modal" data-target="#modalLocality">
                                <i class="fi flaticon-shapes-and-symbols"></i>
                                Add Locality
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
                                <th scope="col">Locality</th>
                                <th scope="col">Alias</th>
                                <th scope="col">Zip Code</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="no-data-row d-none">
                                <td colspan="6">
                                    <div class="no-data">
                                        <img src="{{ asset('Backend/images/template/empty3.png') }}" alt="">
                                        <h4>You don't have any locality</h4>
                                        <p>Search different location or add new one.</p>
                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#localityModal">
                                            <i class="fi flaticon-shapes-and-symbols"></i>
                                            Add New Locality
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="inactive" data-uid="1">
                                <th class="single-action" scope="row">
                                    01
                                </th>
                                <td>Karanpur</td>
                                <td>karanpur</td>
                                <td>248001</td>
                                <td><span class="badge badge-danger">Inactive</span></td>
                                <td>
                                    <div class="table-action">
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalStatus">
                                            <i class="icon fi flaticon-visibility"data-toggle="tooltip" title="Active locality"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalEdit">
                                            <i class="icon fi flaticon-pencil" data-toggle="tooltip" title="Edit locality"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr data-uid="2">
                                <th class="single-action" scope="row">
                                    02
                                </th>
                                <td>Karanpur</td>
                                <td>karanpur</td>
                                <td>248001</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <div class="table-action">
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalStatus">
                                            <i class="icon fi flaticon-visibility-1"data-toggle="tooltip" title="Inactive locality"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalEdit">
                                            <i class="icon fi flaticon-pencil" data-toggle="tooltip" title="Edit locality"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr data-uid="3">
                                <th class="single-action" scope="row">
                                    03
                                </th>
                                <td>Karanpur</td>
                                <td>karanpur</td>
                                <td>248001</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <div class="table-action">
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalStatus">
                                            <i class="icon fi flaticon-visibility-1"data-toggle="tooltip" title="Inactive locality"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalEdit">
                                            <i class="icon fi flaticon-pencil" data-toggle="tooltip" title="Edit locality"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr data-uid="3">
                                <th class="single-action" scope="row">
                                    05
                                </th>
                                <td>Karanpur</td>
                                <td>karanpur</td>
                                <td>248001</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <div class="table-action">
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalStatus">
                                            <i class="icon fi flaticon-visibility-1"data-toggle="tooltip" title="Inactive locality"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalEdit">
                                            <i class="icon fi flaticon-pencil" data-toggle="tooltip" title="Edit locality"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr data-uid="3">
                                <th class="single-action" scope="row">
                                    03
                                </th>
                                <td>Karanpur</td>
                                <td>karanpur</td>
                                <td>248001</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <div class="table-action">
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalStatus">
                                            <i class="icon fi flaticon-visibility-1"data-toggle="tooltip" title="Inactive locality"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalEdit">
                                            <i class="icon fi flaticon-pencil" data-toggle="tooltip" title="Edit locality"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="text-center">
                        <button type="button" name="button" class="btn btn-default w-25 mb-4">Load More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Status Modal --}}
<div class="modal fade" id="modalStatus" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="modal-body">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio doloremque deleniti sint accusamus necessitatibus maxime ratione
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio doloremque deleniti sint accusamus necessitatibus maxime ratione
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio doloremque deleniti sint accusamus necessitatibus maxime ratione
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

{{-- Locality Modal --}}
<div class="modal fade" data-backdrop="static" id="modalLocality" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add new locality</h5>
            </div>
            <div class="modal-body">
                <form action="" method="">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mt-form-group">
                                <label for="addLocality" class="mt-label">Locality</label>
                                <input type="text" class="form-control mt-input" id="addLocality" name="" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-form-group">
                                <label for="addZipCode" class="mt-label">ZIP Code</label>
                                <input type="text" class="form-control mt-input is-invalid" id="addZipCode" name="zip_code" value="">
                                <div class="invalid-feedback">
                                    Enter valid 6 digit ZIP Code
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-form-group">
                                <label for="addAlias" class="mt-label">Alias</label>
                                <input type="text" class="form-control mt-input" disabled id="addAlias" name="alias" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mt-form-group">
                                <select class="form-control" title="Select Country" name="state" data-live-search="true">
                                    <option value="India" selected>India</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="USA">USA</option>
                                    <option value="China">China</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-form-group">
                                <select class="form-control is-invalid" title="Select State" name="state" data-live-search="true">
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Haryana">Haryana</option>
                                </select>
                                <div class="invalid-feedback">
                                    Select state
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-form-group">
                                <select class="form-control" title="Select City" name="city" title="Select City" data-live-search="true">
                                    <option value="Dehradun">Dehradun</option>
                                    <option value="Nainital">Nainital</option>
                                    <option value="Pithoragarh">Pithoragarh</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 text-right">
                            <div class="form-group mt-form-group">
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </form>
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
