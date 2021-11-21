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
                        <li class="breadcrumb-item active" aria-current="page">Editor</li>
                    </ol>
                </nav>
                <h1 class="heading">Editor</h1>
                {{-- <small class="text-muted">Provide better communication with your customers</small> --}}
            </div>
        </div>
    </div>
</div>
{{-- end::Page Header --}}

{{-- start::Page Container --}}
<div class="container-fluid">
    <div class="row">
        {{-- TinyMCE Editor --}}
        <div class="col-sm-12">
            <div class="card-box card full-screen" data-screen="screen1">
                <div class="card-header">
                    <h3 class="card-heading float-left">TinyMCE Editor</h3>
                    {{-- <a href="javascript:void();" data-target="screen1" class="float-right text-secondary fullScreenTrigger"><i class="ti ti-fullscreen"></i></a> --}}
                </div>
                <div class="card-body">
                    <form method="post">
                        <textarea id="tinymceEditor">Hello, World!</textarea>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end::Page Container --}}

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: '#tinymceEditor'
    });
</script>

@endsection()
