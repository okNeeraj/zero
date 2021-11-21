@extends("Template.layouts.app")

@section("title", "Data Table - NikkAdmin")

@section("content")

<!-- start::Page Header -->
<div class="page-header page-nav">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-secondary">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                    </ol>
                </nav>
                {{-- <h1 class="heading">Data Table</h1> --}}
                <ul class="nav nav-tabs justify-content-end" id="myTab" role="tablist">
                    <li class="nav-item mr-auto nav-heading">
                        <h1 class="heading">Data Table</h1>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active show" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
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
                        <div class="col-md-4">
                            <div class="float-left action-button">
                                <i class="ti ti-settings"></i>
                            </div>
                            <form action="" method="" class="float-left">
                                <input type="text" class="form-control" placeholder="Search User" name="" value="">
                            </form>
                        </div>
                        <div class="col-md-8 text-right">
                            <a href="#" class="btn btn-primary">Add New User</a>
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
                                <td>Neeraj</td>
                                <td>nikkrobo</td>
                                <td>nikkrobo
                                    @icloud.com</td>
                                <td>6498374567</td>
                                <td>01 Feb 2020</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#!" class="dropdown-toggleF" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-more-alt"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="single-action" scope="row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" data-group="data-prefix" id="data-prefix2" name="dataPrefi2" class="custom-control-input">
                                        <label class="custom-control-label" for="data-prefix2"></label>
                                    </div>
                                </th>
                                <td>Neeraj</td>
                                <td>nikkrobo</td>
                                <td>nikkrobo
                                    @icloud.com</td>
                                <td>6498374567</td>
                                <td>01 Feb 2020</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#!" class="dropdown-toggleF" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-more-alt"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="single-action" scope="row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="data-prefix-3" name="dataPrefix3" class="custom-control-input">
                                        <label class="custom-control-label" for="data-prefix-3"></label>
                                    </div>
                                </th>
                                <td>Neeraj</td>
                                <td>nikkrobo</td>
                                <td>nikkrobo
                                    @icloud.com</td>
                                <td>6498374567</td>
                                <td>01 Feb 2020</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#!" class="dropdown-toggleF" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-more-alt"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="single-action" scope="row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="data-prefix-4" name="dataPrefix4" class="custom-control-input">
                                        <label class="custom-control-label" for="data-prefix-4"></label>
                                    </div>
                                </th>
                                <td>Neeraj</td>
                                <td>nikkrobo</td>
                                <td>nikkrobo
                                    @icloud.com</td>
                                <td>6498374567</td>
                                <td>01 Feb 2020</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#!" class="dropdown-toggleF" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-more-alt"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="single-action" scope="row">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="data-prefix-5" name="dataPrefix5" class="custom-control-input">
                                        <label class="custom-control-label" for="data-prefix-5"></label>
                                    </div>
                                </th>
                                <td>Neeraj</td>
                                <td>nikkrobo</td>
                                <td>nikkrobo
                                    @icloud.com</td>
                                <td>6498374567</td>
                                <td>01 Feb 2020</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#!" class="dropdown-toggleF" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-more-alt"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">View</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- No Data --}}
        <div class="col-sm-12">
            <div class="card-box card">
                <div class="card-body">
                    <div class="no-data">
                        <img src="{{ asset('Backend/images/template/empty.png') }}" alt="">
                        <h4>You don't have any data</h4>
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
