@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Register') 2
@endsection

@section('css')
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.css') }}">
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"
        type="text/css">
@endsection

@section('body')

    <body class="auth-body-bg">
    @endsection

    @section('content')
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">

                    <div class="col-xl-3">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text">
                                        <a href="index" class="d-block auth-logo">
                                            <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt=""
                                                height="18" class="auth-logo-dark">
                                            <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt=""
                                                height="18" class="auth-logo-light">
                                        </a>
                                    </div>
                                    <div class="my-auto">

                                        <div>
                                            <h5 class="text colors">   حساب جديد</h5>
                                            <p class="text-muted text"> احصل على حساب جدوى كلاود المجاني الان</p>
                                        </div>

                                        <div class="mt-4">
                                            <form method="POST" class="form-horizontal" action="{{ route('register') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label colors fon">البريد
                                                        الالكتروني</label>
                                                    <input type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="useremail" value="{{ old('email') }}" name="email"
                                                        placeholder="ادخل البريد الالكتروني" autofocus required>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="phone" class="form-label colors fon">الهاتف</label>
                                                    <input type="text"
                                                        class="form-control @error('phone') is-invalid @enderror"
                                                        value="{{ old('phone') }}" id="phone" name="phone" autofocus
                                                        required placeholder="ادخل رقم الهاتف">
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="userpassword" class="form-label colors fon">كلمة
                                                        المرور</label>
                                                    <input type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        id="userpassword" name="password" placeholder="ادخل كلمة المرور"
                                                        autofocus required>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="confirmpassword" class="form-label colors fon">تاكيد كلمة
                                                        المرور </label>
                                                    <input type="password"
                                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                                        id="confirmpassword" name="password_confirmation"
                                                        placeholder="تاكيد كلمة المرور" autofocus required>
                                                    @error('password_confirmation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>


                                                <div class="mt-4 d-grid">
                                                    <button class="btn btn-primary waves-effect waves-light log"
                                                        type="submit">تسجيل </button>
                                                </div>

                                                {{-- <div class="mt-4 text-center">
                                                    <h5 class="font-size-14 mb-3">Sign up using</h5>

                                                </div> --}}

                                                {{-- <div class="mt-4 text-center">
                                                    <p class="mb-0">By registering you agree to the Skote <a href="#"
                                                            class="text-primary">Terms of Use</a></p>
                                                </div> --}}
                                            </form>

                                            <div class="mt-3 text-center yell">
                                                <p>هل لديك حساب ؟ <a href="{{ url('login') }}" class="fw-medium  yell">
                                                        تسجيل دخول</a> </p>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- <div class="mt-4 mt-md-3 text-center">
                                        <p class="mb-0">© <script>
                                                document.write(new Date().getFullYear())

                                            </script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                            Themesbrand</p>
                                    </div> --}}
                                </div>


                            </div>
                        </div>
                    </div>
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
                                                        <div class="owl-carousel owl-theme auth-review-carousel"
                                                            id="auth-review-carousel">
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

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
    @endsection
    @section('script')
        <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
        <!-- auth-2-carousel init -->
        <script src="{{ URL::asset('/assets/js/pages/auth-2-carousel.init.js') }}"></script>
    @endsection
