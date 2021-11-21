@extends("Template.layouts.app")

@section("title", "Page Header - NikkAdmin")

@section("content")

<!-- start:: 02 - Page Header (With Tabs) -->
<div class="page-header page-nav">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-secondary">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Header with Tabs</li>
                    </ol>
                </nav>
                <ul class="nav nav-tabs justify-content-end" id="myTab" role="tablist">
                    <li class="nav-item mr-auto nav-heading">
                        <h1 class="heading">Header with Tabs</h1>
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

<!-- start:: 01 - Page Header (Basic) -->
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-secondary">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Basic Header</li>
                    </ol>
                </nav>
                <h1 class="heading">Basic Header</h1>
                <!-- <small class="text-muted">Provide better communication with your customers</small> -->
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box card">
                <div class="card-header">
                    <h3 class="card-heading">Empty</h3>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end::Page Container -->


@endsection()
