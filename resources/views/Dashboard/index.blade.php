
@extends('errors.layout.master')

    @section('content')

    <!--begin::Wrapper-->
    <div class="pt-lg-10 mb-10">
        <!--begin::Logo-->
        <h1 class="fw-bolder fs-2qx text-gray-800 mb-7">Verify Your Email</h1>
        <!--end::Logo-->
        <!--begin::Message-->
        <div class="fs-3 fw-bold text-muted mb-10">Only Account with this Email
        <a href="#" class="link-primary fw-bolder">{{ auth()->user()->email ?? request('email') }}</a>
        <br />can access this page.</div>
        <!--end::Message-->
        <!--begin::Action-->
        <div class="text-center mb-10">
            <a href="javascript:void(0);" onclick="return notifyUsers()" class="btn btn-lg btn-primary fw-bolder">Notify Users</a>
        </div>
        <!--end::Action-->
        <!--begin::Action-->
        <div class="fs-5">
            <span class="fw-bold text-gray-700">Return to login page?</span>
            <a href="javascript:void(0);" onclick="return AnimateAndRedirect(route('logout'))" class="link-primary fw-bolder">Logout</a>
        </div>
        <!--end::Action-->
    </div>
    <!--end::Wrapper-->
    <!--begin::Illustration-->
    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(dashboard/media/illustrations/sigma-1/17.png"></div>
    <!--end::Illustration-->


@endsection
