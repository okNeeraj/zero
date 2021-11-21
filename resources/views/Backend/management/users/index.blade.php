@extends("Backend.layouts.app")

@section("title", "Management - Users")

@section("content")

<!-- start::Page Header -->
@component('Backend.management.components.management-nav')
    @slot('pageTitle')
        Users
    @endslot
@endcomponent
<!-- end::Page Header -->

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 d-noneF">
            <div class="card-box card table-card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="float-left action-button">
                                <i class="fi flaticon-technical-support"></i>
                            </div>
                            <form action="" method="">
                                <div class="row no-gutters-half">
                                    <div class="col-md-3">
                                        <select class="form-control mr-2" title="Select Role" name="state">
                                            <option value="India">Administrator</option>
                                            <option value="Delhi">Support</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control dark" placeholder="Search User By Name or Email" name="" value="">
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="#!" class="btn btn-primary" data-toggle="modal" data-target="#localityModal">
                                <i class="fi flaticon-shapes-and-symbols"></i>
                                Add User
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th class="single-action" scope="col">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="data-prefix-all" name="dataPrefixall" class="custom-control-input js-selectAll" data-group="data-prefix">
                                        <label class="custom-control-label" for="data-prefix-all"></label>
                                    </div>
                                </th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone No.</th>
                                <th scope="col">Join Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="single-action" scope="row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" data-group="data-prefix" id="data-prefix-1" name="dataPrefix1" class="custom-control-input">
                                        <label class="custom-control-label" for="data-prefix-1"></label>
                                    </div>
                                </th>
                                <td>Neeraj Gusain</td>
                                <td>nikkrobo</td>
                                <td>nikkrobo@icloud.com</td>
                                <td>7409116740</td>
                                <td>01 March 2020</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td>
                                    <div class="table-action">
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalStatus">
                                            <i class="icon fi flaticon-visibility-1" data-toggle="tooltip" title="" data-original-title="Inactive User"></i>
                                        </a>
                                        <a href="#" class="action-icon">
                                            <i class="icon fi flaticon-pencil" data-toggle="tooltip" title="" data-original-title="Edit Profile"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="action-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon fi flaticon-menu" data-toggle="tooltip" title="" data-original-title="More Action"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(42px, 51px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a href="javascript:void(0)" class="dropdown-item">Edit</a>
                                            <a href="javascript:void(0)" class="dropdown-item">View User</a>
                                            <a href="javascript:void(0)" class="dropdown-item">Add New User</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="single-action" scope="row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" data-group="data-prefix" id="data-prefix-1" name="dataPrefix1" class="custom-control-input">
                                        <label class="custom-control-label" for="data-prefix-1"></label>
                                    </div>
                                </th>
                                <td>Neeraj Gusain</td>
                                <td>nikkrobo</td>
                                <td>nikkrobo@icloud.com</td>
                                <td>7409116740</td>
                                <td>01 March 2020</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td>
                                    <div class="table-action">
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalStatus">
                                            <i class="icon fi flaticon-visibility-1" data-toggle="tooltip" title="" data-original-title="Inactive User"></i>
                                        </a>
                                        <a href="#" class="action-icon">
                                            <i class="icon fi flaticon-pencil" data-toggle="tooltip" title="" data-original-title="Edit Profile"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="action-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon fi flaticon-menu" data-toggle="tooltip" title="" data-original-title="More Action"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(42px, 51px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a href="javascript:void(0)" class="dropdown-item">Edit</a>
                                            <a href="javascript:void(0)" class="dropdown-item">View User</a>
                                            <a href="javascript:void(0)" class="dropdown-item">Add New User</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="single-action" scope="row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" data-group="data-prefix" id="data-prefix-1" name="dataPrefix1" class="custom-control-input">
                                        <label class="custom-control-label" for="data-prefix-1"></label>
                                    </div>
                                </th>
                                <td>Neeraj Gusain</td>
                                <td>nikkrobo</td>
                                <td>nikkrobo@icloud.com</td>
                                <td>7409116740</td>
                                <td>01 March 2020</td>
                                <td>
                                    <span class="badge badge-danger">Inactive</span>
                                </td>
                                <td>
                                    <div class="table-action">
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalStatus">
                                            <i class="icon fi flaticon-visibility" data-toggle="tooltip" title="" data-original-title="Active User"></i>
                                        </a>
                                        <a href="#" class="action-icon">
                                            <i class="icon fi flaticon-pencil" data-toggle="tooltip" title="" data-original-title="Edit Profile"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="action-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon fi flaticon-menu" data-toggle="tooltip" title="" data-original-title="More Action"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(42px, 51px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a href="javascript:void(0)" class="dropdown-item">Edit</a>
                                            <a href="javascript:void(0)" class="dropdown-item">View User</a>
                                            <a href="javascript:void(0)" class="dropdown-item">Add New User</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="single-action" scope="row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" data-group="data-prefix" id="data-prefix-1" name="dataPrefix1" class="custom-control-input">
                                        <label class="custom-control-label" for="data-prefix-1"></label>
                                    </div>
                                </th>
                                <td>Neeraj Gusain</td>
                                <td>nikkrobo</td>
                                <td>nikkrobo@icloud.com</td>
                                <td>7409116740</td>
                                <td>01 March 2020</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td>
                                    <div class="table-action">
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalStatus">
                                            <i class="icon fi flaticon-visibility-1" data-toggle="tooltip" title="" data-original-title="Inactive User"></i>
                                        </a>
                                        <a href="#" class="action-icon">
                                            <i class="icon fi flaticon-pencil" data-toggle="tooltip" title="" data-original-title="Edit Profile"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="action-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon fi flaticon-menu" data-toggle="tooltip" title="" data-original-title="More Action"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(42px, 51px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a href="javascript:void(0)" class="dropdown-item">Edit</a>
                                            <a href="javascript:void(0)" class="dropdown-item">View User</a>
                                            <a href="javascript:void(0)" class="dropdown-item">Add New User</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="single-action" scope="row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" data-group="data-prefix" id="data-prefix-1" name="dataPrefix1" class="custom-control-input">
                                        <label class="custom-control-label" for="data-prefix-1"></label>
                                    </div>
                                </th>
                                <td>Neeraj Gusain</td>
                                <td>nikkrobo</td>
                                <td>nikkrobo@icloud.com</td>
                                <td>7409116740</td>
                                <td>01 March 2020</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td>
                                    <div class="table-action">
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalStatus">
                                            <i class="icon fi flaticon-visibility-1" data-toggle="tooltip" title="" data-original-title="Inactive User"></i>
                                        </a>
                                        <a href="#" class="action-icon">
                                            <i class="icon fi flaticon-pencil" data-toggle="tooltip" title="" data-original-title="Edit Profile"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="action-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon fi flaticon-menu" data-toggle="tooltip" title="" data-original-title="More Action"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(42px, 51px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a href="javascript:void(0)" class="dropdown-item">Edit</a>
                                            <a href="javascript:void(0)" class="dropdown-item">View User</a>
                                            <a href="javascript:void(0)" class="dropdown-item">Add New User</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="single-action" scope="row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" data-group="data-prefix" id="data-prefix-1" name="dataPrefix1" class="custom-control-input">
                                        <label class="custom-control-label" for="data-prefix-1"></label>
                                    </div>
                                </th>
                                <td>Neeraj Gusain</td>
                                <td>nikkrobo</td>
                                <td>nikkrobo@icloud.com</td>
                                <td>7409116740</td>
                                <td>01 March 2020</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td>
                                    <div class="table-action">
                                        <a href="javascript:void(0)" class="action-icon" data-toggle="modal" data-target="#modalStatus">
                                            <i class="icon fi flaticon-visibility-1" data-toggle="tooltip" title="" data-original-title="Inactive User"></i>
                                        </a>
                                        <a href="#" class="action-icon">
                                            <i class="icon fi flaticon-pencil" data-toggle="tooltip" title="" data-original-title="Edit Profile"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="action-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon fi flaticon-menu" data-toggle="tooltip" title="" data-original-title="More Action"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(42px, 51px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a href="javascript:void(0)" class="dropdown-item">Edit</a>
                                            <a href="javascript:void(0)" class="dropdown-item">View User</a>
                                            <a href="javascript:void(0)" class="dropdown-item">Add New User</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="no-data-row d-none">
                                <td colspan="5">
                                    <div class="no-data">
                                        <img src="{{ asset('Backend/images/template/empty3.png') }}" alt="">
                                        <h4>You don't have any user</h4>
                                        <p>You can add new user and assign role/permission.</p>
                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#cityModal">
                                            <i class="fi flaticon-shapes-and-symbols"></i>
                                            Add New User
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
