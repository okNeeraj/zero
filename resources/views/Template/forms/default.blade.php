@extends("Template.layouts.app")

@section("title", "Dashboard")

@section("content")

{{-- start::Page Header --}}
<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-secondary">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-secondary">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Default Form</li>
                    </ol>
                </nav>
                <h1 class="heading">Default Form</h1>
                {{-- <small class="text-muted">Provide better communication with your customers</small> --}}
            </div>
        </div>
    </div>
</div>
{{-- end::Page Header --}}

{{-- start::Page Container --}}
<div class="container-fluid">
    <div class="row">
        {{-- Full width form --}}
        <div class="col-sm-12">
            <div class="card-box card full-screen" data-screen="screen1">
                <div class="card-header">
                    <h3 class="card-heading float-left">Full Width Form</h3>
                    <a href="javascript:void();" data-target="screen1" class="float-right text-secondary fullScreenTrigger"><i class="ti ti-fullscreen"></i></a>
                </div>
                <div class="card-body">

                    <form autocomplete="off">
                        <div class="form-group mt-form-group">
                            <label for="fullname" class="mt-label">Your first name</label>
                            <input type="text" class="form-control mt-input" value="Neeraj" id="fullname" autocomplete="nope" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group mt-form-group">
                            <label class="mt-label">Your last name</label>
                            <input type="text" class="form-control mt-input" autocomplete="nope">
                        </div>
                        <div class="form-group mt-form-group">
                            <label for="exampleInputEmail1" class="mt-label">Email address</label>
                            <input type="email" class="form-control mt-input" id="exampleInputEmail1" autocomplete="nope" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group mt-form-group">
                            <label for="exampleInputPassword1" class="mt-label">Password</label>
                            <input type="password" class="form-control mt-input" id="exampleInputPassword1">
                        </div>

                        <div class="form-group">
                            <label class="d-block">Gender</label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="male" checked name="gender" class="custom-control-input">
                                <label class="custom-control-label" for="male">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="female" name="gender" class="custom-control-input">
                                <label class="custom-control-label" for="female">Female</label>
                            </div>
                        </div>
                        <div class="form-group mt-form-group">
                            <label class="mt-label">Write about your...</label>
                            <textarea class="form-control mt-input"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign up</button>
                        <button type="submit" class="btn btn-outline-primary">Login</button>
                    </form>

                </div>
            </div>
        </div>

        {{-- Horizontal form --}}
        <div class="col-sm-12">
            <div class="card-box card full-screen" data-screen="screen1">
                <div class="card-header">
                    <h3 class="card-heading float-left">Horizontal Form</h3>
                    <a href="javascript:void();" data-target="screen1" class="float-right text-secondary fullScreenTrigger"><i class="ti ti-fullscreen"></i></a>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row mt-form-group">
                            <label class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control mt-input no-float" placeholder="Your first name">
                            </div>
                        </div>
                        <div class="form-group row mt-form-group">
                            <label class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control mt-input no-float" placeholder="Your last name">
                            </div>
                        </div>
                        <div class="form-group row mt-form-group">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" disabled class="form-control mt-input no-float" value="email@example.com">
                            </div>
                        </div>
                        <div class="form-group row mt-form-group">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control mt-input no-float" id="inputPassword" placeholder="Choose a strong password">
                            </div>
                        </div>
                        <div class="form-group row mt-form-group">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Bio</label>
                            <div class="col-sm-10">
                                <textarea class="form-control mt-input no-float" placeholder="Write about your..."></textarea>
                            </div>
                        </div>
                        <div class="form-group row mt-form-group">
                            <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Sign up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end::Page Container --}}

@endsection()
