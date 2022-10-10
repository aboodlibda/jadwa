@extends('layouts.master')

@section('title') {{'إنشاء خدمة'}} @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') خدمة @endslot
        @slot('title') إنشاء خدمة @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    {{-- <h4 class="card-title mb-4">قم بإدخال البيانات  </h4> --}}

                    <form action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">الإسم</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" id="title" placeholder="قم بإدخال الاسم">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                     </span>
                                    @enderror
                                </div>
                            </div>

                           <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="price" class="form-label">السعر </label>
                                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" id="price" placeholder="قم بإدخال  ">
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                    @enderror
                                </div>
                            </div>
  
                          


                        </div>

             

              
                      
                           
                     

                      <div class="row">
                  
                     
                           
                         <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="formrow-logo-input" class="form-label"> صورة الخدمة  </label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="formrow-image-input" value="{{ old('image') }}" >
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
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



                  
                    
                                   

                    


              

