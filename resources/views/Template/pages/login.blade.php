@extends("Template.layouts.default")

@section("title", "Login - NikkAdmin")

@section("content")

<div class="container-fluid p-0">
    <div class="row no-gutters">
        <div class="col-md-6 d-none d-md-flex align-items-center full-height intro-skin" style="background-image: url('{{ asset('Backend/images/template/skin1.jpg') }}')">
            <div class="p-5">
                <div class="text-center mb-5">
                    <h1>NikkAdmin</h1>
                    {{-- <img src="{{ asset('Backend/images/template/logo.png') }}" style="width: 230px;" alt=""> --}}
                </div>
                <blockquote class="blockquote">
                    <p class="mb-0">Good, better, best. Never let it rest. <br> 'Till your good is better and your better is best.</p>
                    <footer class="blockquote-footer">St. Jerome<cite title="Source Title"></cite></footer>
                </blockquote>
            </div>
        </div>
        <div class="col-md-6 h-100-vh p-5 align-self-center">
            <div class="login-card">
                <div class="text-center">
                    <h4>Hello! let's get started</h4>
                    <p class="small text-muted">Enter your details below to proceed.</p>
                </div>

                <form autocomplete="off">
                    <div class="form-group mt-form-group">
                        <label for="emailId" class="mt-label">Email Id</label>
                        <input type="email" class="form-control mt-input" id="emailId" autocomplete="nope" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group mt-form-group">
                        <label for="password" class="mt-label">Password</label>
                        <input type="password" class="form-control mt-input" id="password">
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
                        <a href="#!" class="d-inline-block py-3">Forgot Password ?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection()
