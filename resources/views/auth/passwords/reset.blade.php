@extends('layouts.master-without-nav')

@section('title')
@lang('translation.Recover_Password') 2
@endsection

@section('css')
<!-- owl.carousel css -->
<link rel="stylesheet" href="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.css') }}">
@endsection

@section('body')

<body class="auth-body-bg">
    @endsection

    @section('content')

    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">

                <div class="col-xl-9">
                    <div class="auth-full-bg pt-lg-5 p-4">
                        <div class="w-100">
                            <div class="bg-overlay"></div>
                            <div class="d-flex h-100 flex-column">

                                <div class="p-4 mt-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="text-center">


                                                <div dir="ltr">
                                                    <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                        @foreach ($slider as $item)
                                                                
                                                      
                                                        <div class="item">
                                                            <div class="py-3">
                                                                <p class="font-size-18 mb-4">{{ $item->title }}</p>
                                                                <div>
                                                                    <h4 class="font-size-16">{{ $item->description }} </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach

                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">

                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 text">
                                    <a href="index" class="d-block auth-logo">
                                        <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="18" class="auth-logo-dark">
                                        <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="18" class="auth-logo-light">
                                    </a>
                                </div>
                                <div class="my-auto" style="padding-bottom: 180px;">

                                    <div>
                                        <h5 class="text colors">اعادة تعيين كلمة المرور </h5>
                                    </div>

                                    <div class="mt-4">
                                        <form class="form-horizontal" method="POST" action="{{ route('password.update') }}">
                                            @csrf
                                            <input type="hidden" name="token" value="{{ $token }}">


                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label colors fon">كلمة المرور الجديدة </label>
                                                <div class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="userpassword" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                    <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label colors fon">تاكيد كلمة المرور</label>

                                                <div class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                                    <input type="password" name="password-confirm" class="form-control  @error('password-confirm') is-invalid @enderror" id="password-confirm" placeholder="Enter password" aria-label="password-confirm" aria-describedby="password-addon">
                                                    <button class="btn btn-light " type="button" name="password_confirmation" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mt-3 d-grid">
                                                <button class="btn btn-primary w-md waves-effect waves-light send"
                                                    type="submit">اعادة تعيين</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>

    @endsection
    @section('script')
    <!-- owl.carousel js -->
    <script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
    <!-- auth-2-carousel init -->
    <script src="{{ URL::asset('/assets/js/pages/auth-2-carousel.init.js') }}"></script>
    @endsection
