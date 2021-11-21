@extends("Backend.layouts.app")

@section("title", "Management - Permission")

@section("content")

<!-- start::Page Header -->
@component('Backend.management.components.management-nav')
    @slot('pageTitle')
        Permissions
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
                                    <div class="col-md-4">
                                        <input type="text" class="form-control dark" placeholder="Search City" name="" value="">
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="#!" class="btn btn-primary" data-toggle="modal" data-target="#localityModal">
                                <i class="fi flaticon-shapes-and-symbols"></i>
                                Add City
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
                                <th scope="col">City</th>
                                <th scope="col">Alias</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="no-data-row">
                                <td colspan="5">
                                    <div class="no-data">
                                        <img src="{{ asset('Backend/images/template/empty3.png') }}" alt="">
                                        <h4>You don't have any city</h4>
                                        <p>Search different location or add new one.</p>
                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#cityModal">
                                            <i class="fi flaticon-shapes-and-symbols"></i>
                                            Add New City
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
