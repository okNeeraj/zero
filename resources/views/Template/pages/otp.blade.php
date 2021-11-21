@extends("Template.layouts.default")

@section("title", "Verify OTP - NikkAdmin")

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
                    <p class="mb-0">Trust because you are willing to accept the risk, <br> not because it's safe or certain.</p>
                    <footer class="blockquote-footer">Anonymous<cite title="Source Title"></cite></footer>
                </blockquote>
            </div>
        </div>
        <div class="col-md-6 h-100-vh p-5 align-self-center">
            <div class="login-card text-center">

                <h4>Verify, It's you!</h4>
                <p class="small text-muted">We have send OTP on <strong>youremail@mail.com</strong></p>

                <form autocomplete="off">
                    <div class="form-group mt-form-group">
                        {{-- <label for="otp" class="mt-label active">OTP</label> --}}
                        <div class="partition-input">
                            <div class="partition-inner">
                                <input type="text" name="" id="otp" pattern="^[0-9]*$" maxlength="4" onKeyPress="if(this.value.length==4) return false;">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <span class="small text-muted">Didn't receive OTP ?</span>
                        <a href="#">Resend</a>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg btn-block">Verify</button>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection()
