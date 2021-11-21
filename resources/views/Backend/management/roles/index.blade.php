@extends("Backend.layouts.app")

@section("title", "Management - Roles")

@section("content")

<!-- start::Page Header -->
@component('Backend.management.components.management-nav')
    @slot('pageTitle')
        Roles
    @endslot
@endcomponent
<!-- end::Page Header -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="info-card card-box">
                <div class="media">
                    <div class="info-icon align-self-center">
                        <i class="fi flaticon-monitor"></i>
                    </div>
                    <div class="media-body align-self-center mr-3">
                        <h5 class="my-0">Administrator</h5>
                        <small>Administrator means everything</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-card card-box">
                <div class="media">
                    <div class="info-icon align-self-center">
                        <i class="fi flaticon-networking"></i>
                    </div>
                    <div class="media-body align-self-center mr-3">
                        <h5 class="my-0">Support</h5>
                        <small>Operation Management Team.</small>
                        <a href="javascript:void(0)" tabindex="0" class="fi flaticon-information"
                            data-toggle="popover"
                            data-trigger="focus" title="Support"
                            data-content="Request and manage user IDs for your company. Assign the appropriate authorizations, and specify which customer or installation numbers they have access to. You will require the authorizations Edit User Data and Edit Authorizations.">
                        </a>
                    </div>
                    <div class="">
                        <a href="javascript:void(0);" class="top-action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fi flaticon-menu"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(42px, 51px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a href="javascript:void(0)" class="dropdown-item">Edit</a>
                            <a href="javascript:void(0)" class="dropdown-item">View User</a>
                            <a href="javascript:void(0)" class="dropdown-item">Add New User</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-card card-box action-info">
                <a href="#!" data-toggle="modal" data-target="#modalRole">
                    <div class="media">
                        <div class="media-body align-self-center">
                            <i class="fi flaticon-shapes-and-symbols"></i>
                            <h6>Add New Role</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-12 text-center">
            <div class="no-data d-none">
                <img src="{{ asset('Backend/images/template/empty3.png') }}" alt="">
                <h4>No Role created</h4>
                <p>This is starting point where you can unlock the power of Team Management</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#cityModal">
                    <i class="fi flaticon-shapes-and-symbols"></i>
                    Add Role
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Role Modal --}}
<div class="modal fade" data-backdrop="static" id="modalRole" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lgF" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add new role</h5>
            </div>
            <div class="modal-body">
                <form action="" method="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mt-form-group">
                                <label for="roleName" class="mt-label">Role Name</label>
                                <input type="text" class="form-control mt-input is-invalid" id="roleName" name="role_name" value="">
                                <div class="invalid-feedback">
                                    Enter valid role name
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-form-group">
                                <select class="form-control" title="Select Role Icon" name="role_icon" data-live-search="true">
                                    <option value="fi flaticon-monitor" data-icon="fi flaticon-monitor">Monitor</option>
                                    <option value="fi flaticon-home" data-icon="fi flaticon-home">Analytics</option>
                                    <option value="fi flaticon-technical-support" data-icon="fi flaticon-technical-support">Technical</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-form-group">
                                <label for="roleDescription" class="mt-label">Desctiption</label>
                                <textarea class="form-control mt-input" id="roleDescription" name="role_description"></textarea>
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
