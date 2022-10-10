@extends('layouts.master')

@section('title') {{'إنشاء مستخدم'}} @endsection

@section('content')

    @component('components.breadcrumb')
<<<<<<< Updated upstream
        @slot('li_1') مشاريع @endslot
        @slot('title') إنشاء مشروع @endslot
=======
        @slot('li_1') المستخدمين @endslot
        @slot('title') إنشاء مستخدم @endslot
>>>>>>> Stashed changes
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
<<<<<<< Updated upstream
                    <h4 class="card-title mb-4">قم بإدخال البيانات  </h4>

                    <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data">
=======
                    <h4 class="card-title mb-4">قم بإدخال بيانات المستخدم</h4>

                    <form action="{{ route('projects.store') }}" method="POST">
>>>>>>> Stashed changes
                        @csrf
                        <div class="row">

                            <div class="col-md-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="name" class="form-label">الإسم</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="name" placeholder="قم بإدخال الاسم">
=======
                                    <label for="formrow-name-input" class="form-label">الإسم</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="formrow-name-input" placeholder="قم بإدخال الاسم">
>>>>>>> Stashed changes
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                     </span>
                                    @enderror
                                </div>
                            </div>

<<<<<<< Updated upstream
       
  
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="country" class="form-label">country </label>
                                    <input type="text" name="country"  class="form-control @error('country')" value="{{old('country')}}" is-invalid @enderror" id="country" placeholder="قم بإدخال  ">
=======
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="formrow-idea-input" class="form-label">idea </label>
                                    <input type="text" name="idea" class="form-control @error('idea') is-invalid @enderror" value="{{old('idea')}}" id="formrow-idea-input" placeholder="قم بإدخال  ">
                                    @error('idea')
                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="formrow-country-input" class="form-label">country </label>
                                    <input type="text" name="country"  class="form-control @error('country')" value="{{old('country')}}" is-invalid @enderror" id="formrow-country-input" placeholder="قم بإدخال  ">
>>>>>>> Stashed changes
                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="city" class="form-label">city </label>
=======
                                    <label for="formrow-city-input" class="form-label">city </label>
>>>>>>> Stashed changes
                                    <input type="text" name="city"  class="form-control @error('city')" value="{{old('city')}}" is-invalid @enderror" id="formrow-city-input" placeholder="قم بإدخال  ">
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="vat" class="form-label">vat </label>
=======
                                    <label for="formrow-vat-input" class="form-label">vat </label>
>>>>>>> Stashed changes
                                    <input type="number" name="vat"  class="form-control @error('vat')" value="{{old('vat')}}" is-invalid @enderror" id="formrow-vat-input" placeholder="قم بإدخال  ">
                                    @error('vat')
                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="currency" class="form-label">currency</label>
=======
                                    <label for="formrow-currency-input" class="form-label">currency</label>
>>>>>>> Stashed changes
                                    <input type="text" name="currency" class="form-control @error('currency') is-invalid @enderror" value="{{old('currency')}}" id="currency" placeholder="قم بإدخال ">
                                    @error('currency')
                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                    @enderror
                                </div>
                            </div>

<<<<<<< Updated upstream
                                     
                         <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="formrow-logo-input" class="form-label"> صورة المشروع  </label>
                                <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" id="formrow-logo-input" value="{{ old('logo') }}" >
                                @error('logo')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                                @enderror
                            </div>
                        </div>

=======
>>>>>>> Stashed changes
                        </div>

                        <div class="row">

                         

                         

                            <div class="col-lg-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="development_duration" class="form-label">development_duration</label>
                                    <input type="number" name="development_duration" class="form-control" id="development_duration" value="{{old('development_duration')}}" >
=======
                                    <label for="formrow-development_duration-input" class="form-label">development_duration</label>
                                    <input type="number" name="development_duration" class="form-control" id="formrow-development_duration-input" value="{{old('development_duration')}}" >
>>>>>>> Stashed changes
                                    @error('development_duration')
                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="number_days_year" class="form-label">number_days_year</label>
                                    <input type="number" name="number_days_year" class="form-control" id="number_days_year" value="{{old('number_days_year')}}" >
=======
                                    <label for="formrow-number_days_year-input" class="form-label">number_days_year</label>
                                    <input type="number" name="number_days_year" class="form-control" id="formrow-number_days_year-input" value="{{old('number_days_year')}}" >
>>>>>>> Stashed changes
                                    @error('number_days_year')
                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="start_date" class="form-label">start_date </label>
                                    <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{ old('start_date') }}"
=======
                                    <label for="formrow-start_date-input" class="form-label">start_date </label>
                                    <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="formrow-start_date-input" name="start_date"
>>>>>>> Stashed changes
                                          required>
                                    @error('start_date')
                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">

                               

                                <div class="col-lg-4">
                                    <div class="mb-3">
<<<<<<< Updated upstream
                                        <label for="study_duration" class="form-label">study_duration</label>
                                        <!-- All countries -->
                                        <select id="study_duration" class="form-select" name="study_duration">
=======
                                        <label for="formrow-study_duration-input" class="form-label">study_duration</label>
                                        <!-- All countries -->
                                        <select id="formrow-study_duration-input" class="form-select" name="study_duration">
>>>>>>> Stashed changes
                                            <option selected disabled hidden>-- إختر --</option>
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>

                                  

                            <div class="col-lg-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="project_type_id" class="form-label">project_type_id</label>
                                    <!-- All countries -->
                                    <select id="project_type_id" class="form-select" name="project_type_id">
=======
                                    <label for="formrow-project_type_id-input" class="form-label">project_type_id</label>
                                    <!-- All countries -->
                                    <select id="formrow-project_type_id-input" class="form-select" name="project_type_id">
>>>>>>> Stashed changes
                                        <option selected disabled hidden>-- إختر --</option>
                                        @foreach ($protype as  $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-3">
<<<<<<< Updated upstream
                                    <label for="owner_id" class="form-label">owner_id</label>
                                    <!-- All countries -->
                                    <select id="owner_id" class="form-select" name="owner_id">
=======
                                    <label for="formrow-owner_id-input" class="form-label">owner_id</label>
                                    <!-- All countries -->
                                    <select id="formrow-owner_id-input" class="form-select" name="owner_id">
>>>>>>> Stashed changes
                                        <option selected disabled hidden>-- إختر --</option>
                                        @foreach ($user as $item)
                                        <option value="{{ $item->id }}"> {{ $item->name }}</option>    
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            </div>

                      
                           
                        </div>

                      <div class="row">
<<<<<<< Updated upstream
                  
      
                  

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="idea" class="form-label">idea </label>
                                <textarea id="elm1" name="idea" class="form-control @error('idea') is-invalid @enderror" >{{old('idea')}}</textarea>

                                {{-- <input type="text" name="idea" class="form-control @error('idea') is-invalid @enderror" value="{{old('idea')}}" id="idea" placeholder="قم بإدخال  "> --}}
                                @error('idea')
                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
=======
                          {{-- <div class="col-lg-2">
                              <div class="mb-3">
                                  <div class="form-check">
                                      <label class="form-label" for="gridCheck">الجنس :</label>
                                      <div class="btn-group-horizontal" role="group" aria-label="Horizontal radio toggle button group">
                                          <input type="radio" class="btn-check" name="gender" value="male" id="gender-radio1">
                                          <label class="btn btn-outline-primary" for="gender-radio1">ذكر</label>
                                          <input type="radio" class="btn-check" name="gender" value="female" id="gender-radio2">
                                          <label class="btn btn-outline-secondary" for="gender-radio2">أنثى</label>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-lg-2">
                              <div class="mb-3">
                                  <div class="form-check">
                                      <label class="form-label" for="gridCheck">الحالة :</label>
                                      <div class="btn-group-horizontal" role="group" aria-label="Horizontal radio toggle button group">
                                          <input type="radio" class="btn-check" name="status" value="active" id="active-radio1" required>
                                          <label class="btn btn-outline-success" for="active-radio1">نشط</label>
                                          <input type="radio" class="btn-check" name="status" value="inactive" id="active-radio2" required>
                                          <label class="btn btn-outline-danger" for="active-radio2">غير نشط</label>
                                      </div>
                                  </div>
                              </div>
                          </div> --}}
                          
                         <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="formrow-logo-input" class="form-label"> صورة المشروع  </label>
                                <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" id="formrow-logo-input" value="{{ old('logo') }}">
                                @error('logo')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
>>>>>>> Stashed changes
                                @enderror
                            </div>
                        </div>
                      </div>

                        <div class="text-center">
                            <button type="submit" value="submit" class="btn btn-success w-lg">حفظ</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>
@endsection



<<<<<<< Updated upstream
      
@section('script')
<!--tinymce js-->
<script src="{{asset('assets/libs/tinymce/tinymce.min.js')}}"></script>

<!-- init js -->
<script src="{{asset('assets/js/pages/form-editor.init.js')}}"></script>
@endsection            
=======
                  
>>>>>>> Stashed changes
                    
                                   

                    


              

<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
