@extends('layouts.master')

<<<<<<< Updated upstream
@section('title') المشاريع@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') المشاريع @endslot
@slot('title') قائمة المشاريع @endslot
@endcomponent

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-4">
                        <img src="{{ url('public/logo/'.$project->logo) }}" alt=""  width="50" height="50" class="avatar-sm">
                    </div>

                    <div class="flex-grow-1 overflow-hidden" style="
                    padding-top: 15px;">
                        <h5 class="text-truncate font-size-17">{{ $project->name }}</h5>
                    </div>
                </div>

                <h5 class="font-size-15 mt-4 font-weight-700">تفاصيل المشروع </h5>

                <p class="font-size-17">{!! $project->idea !!}</p>

               

                <div class="row task-dates">

                    <div class="col-sm-3 col-3">
                        <div class="mt-4">
                            <h5 class="font-size-14 orange"><i class="bx bx-calendar me-1 orange"></i> نوع المشروع </h5>
                            <p class="text-muted mb-0 gray">{{ $project->projectType->title }}</p>
                        </div>
                    </div>

                    <div class="col-sm-3 col-3">
                        <div class="mt-4">
                            <h5 class="font-size-14 orange"><i class="bx bx-calendar me-1  orange"></i> الدولة , المدينة</h5>
                            <p class="text-muted mb-0 gray">{{ $project->city }} ,{{ $project->country }} </p>
                        </div>
                    </div>

                    <div class="col-sm-3 col-3">
                        <div class="mt-4">
                            <h5 class="font-size-14 orange"><i class="bx bx-calendar me-1 orange"></i> مدة المشروع </h5>
                            <p class="text-muted mb-0 gray">{{ $project->study_duration }} أشهر</p>
                        </div>
                    </div>

                    <div class="col-sm-3 col-3">
                        <div class="mt-4">
                            <h5 class="font-size-14 orange"><i class="bx bx-calendar-check me-1 orange"></i> تاريخ البداية </h5>
                            <p class="text-muted mb-0 gray">{{ $project->start_date }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table align-middle table-nowrap">
                        <tbody>
                            <tr>
                                <td>
                                    <h5 class="font-size-13 m-0">   <i class="bx bx-calendar me-1 orange"></i> 
                                        <a href="javascript: void(0);" class="orange">فترة التأسيس </a></h5>
                                </td>
                                <td>
                                    <div>
                                    <p class="text-black mb-0 gray">{{ $project->development_duration }}شهر </p>                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-size-13 m-0"> <i class="bx bx-calendar me-1 orange"></i> 
                                        <a href="javascript: void(0);" class="orange">تاريخ بداية التشغيل </a></h5>
                                </td>
                                <td>
                                    <div>
                                        <p class="text-black mb-0 gray">{{ $dateStartOper}}</p>                                    </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                               
                                <td>
                                    <h5 class="font-size-13 m-0">    <i class="bx bx-calendar me-1 orange"></i> 
                                        <a href="javascript: void(0);" class="orange">سنة بداية التشغيل </a></h5>
                                </td>
                                <td>
                                    <div>
                                        <p class="text-black mb-0 gray">{{ $year }}</p>                                    </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-size-13 m-0">   <i class="bx bx-calendar me-1 orange"></i> 
                                        <a href="javascript: void(0);" class="orange">عدد ايام السنة </a></h5>
                                </td>
                                <td>
                                    <div>
                                        <p class="text-black mb-0 gray">365 يوم</p>                                    </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                
                                <td>
                                    <h5 class="font-size-13 m-0">    <i class="bx bx-calendar me-1 orange"></i> 
                                        <a href="javascript: void(0);" class="orange">عدد ايام السنة المتبقية </a></h5>
                                </td>
                                <td>
                                    <div>
                                        <p class="text-black mb-0 gray">{{ $numofday }}</p>                                    </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                               
                                <td>
                                    <h5 class="font-size-13 m-0">   <i class="bx bx-calendar me-1 orange"></i> 
                                        <a href="javascript: void(0);" class="orange">   الأشهر المتبقة لنهاية السنة </a></h5>
                                </td>
                                <td>
                                    <div>
                                        <p class="text-black mb-0 gray">{{ $numofmonth }}</p>                                    </div>
                                    </div>
                                </td>
                            </tr>

                             <tr>
                               
                                <td>
                                    <h5 class="font-size-13 m-0"> <i class="bx bx-calendar me-1 orange"></i> 
                                        <a href="javascript: void(0);" class="orange"> ضريبة القيمة المضافة</a></h5>
                                </td>
                                <td>
                                    <div>
                                        <p class="text-black mb-0 gray">{{ $project->vat }}%</p>                                    </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <h5 class="font-size-15 mt-5 font-weight-700 pb-10"> الخدمات المتوفرة </h5>

        @foreach ($services as $services)
            
        <div class="col-lg-4">
            <!-- Simple card -->
        <div class="card">
            <img class="card-img-top img-fluid" src="{{ url('public/image/'.$services->image) }}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title mt-0 "style="display: -webkit-inline-box;">{{ $services->title }} <p class="orange" style=" padding-right: 105px;
                ">{{ $services->price }}ر.س</p></h4>

                <a href="#" class="btn   waves-effect border-ora" style="
                width: -webkit-fill-available;
            ">ابدا الان</a>
            </div>
        </div>
         </div>
    <!-- end col -->
        @endforeach
   


</div>
<!-- end row -->

@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- project-overview init -->
<script src="{{ URL::asset('/assets/js/pages/project-overview.init.js') }}"></script>
@endsection
=======
@section('title')
    المستخدمين
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            المشاريع
        @endslot
        @slot('title')
            قائمة المشاريع
        @endslot
        @slot('title')
        اسم المشروع
    @endslot
    @endcomponent

   
    <!-- end row -->

    <div class="modal fade" tabindex="-1" id="kt_modal_2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">حذف المشروع</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-danger ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <form action="projects/destroy" method="POST">.
                    @method('DELETE')
                    @csrf
                    <div class="modal-body">
                        <p>هل أنت متأكد من عملية الحذف ؟</p>
                        <input type="hidden" id="id" name="id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">إلغاء</button>
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

   

  
@endsection

@section('script-bottom')
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />
    <script type="text/javascript">
        var table;
        var data = $('table').serializeArray();
        $(document).ready(function() {
            drawTable(data);

            function drawTable(data) {
                table = $('#table').DataTable({
                    processing: true,
                    serverside: true,
                    searching: false,
                    paging:false,
                    order: [
                        [0, "asc"]
                    ],
                    
                    ajax: "{{ route('get_projects') }}",
                    columns: [{
                        data: 'id',
                        name: 'id',
                    }, {
                        data: 'name',
                        name: 'name',
                    }, {
                        data: 'country',
                        name: 'country',
                    }, {
                        data: 'project_type_id',
                        name: 'project_type_id',
                    }, {
                        data: 'start_date',
                        name: 'start_date',
                    }, {
                        data: 'action',
                        name: 'action',
                    }], "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
            }
                })
            };
            
        });
    </script>
    <script>
        $('#kt_modal_1').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })

        $('#kt_modal_2').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })

        $('#kt_modal_3').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })

        $('#kt_modal_4').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })
    </script>
@endsection
>>>>>>> Stashed changes
