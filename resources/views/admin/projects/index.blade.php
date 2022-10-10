@extends('layouts.master')

@section('title') المشاريع @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') المشاريع @endslot
        @slot('title') قائمة المشاريع @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <form action="{{ route('search_user') }}" method="post">
                            <div class="search-box me-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                        @csrf
                                        @method('POST')
<<<<<<< Updated upstream
                                        <input type="text" name="query" class="form-control" placeholder=" ابحث عن المشروع">
=======
                                        <input type="text" name="query" class="form-control"
                                            placeholder="ابحث عن مشروع">
>>>>>>> Stashed changes
                                        <i class="bx bx-search-alt search-icon"></i>

                                </div>
<<<<<<< Updated upstream

                            </div>
                        
=======
                                {{-- <button type="submit" class="btn btn-secondary btn-rounded waves-effect waves-light"> بحث
                                    <i class="bx bx-search-alt search-icon me-1"></i></button> --}}
>>>>>>> Stashed changes
                            </form>
                        </div>

                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <a href="{{ route('projects.create') }}"
                                        class="btn btn-success  waves-effect waves-light mb-2 me-2"> إضافة مشروع جديد <i
                                        class="mdi mdi-plus me-1"></i></a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-check">
                            <thead class="table-light">
                            <tr>

                                <th style="width: 20px;" class="align-middle">#</th>
                                <th class="align-middle">الشعار</th>
                                <th class="align-middle"> اسم المشروع</th>
                                <th class="align-middle">نوع المشروع </th>
                                <th class="align-middle">الموقع</th>
                                <th class="align-middle">تاريخ البداية</th>
                                <th class="align-middle">العمليات</th>
                            </tr>
                            </thead>
                            @foreach($projects as $key => $project)
                                <tbody>
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><img src="{{ url('public/logo/'.$project->logo) }}" width="50" height="50"></td>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->projectType->title}}</td>
                                    <td>{{$project->country .' | ' . $project->city}}</td>
                                    <td>{{$project->start_date }}</td>

                                    <td>
                                        <div class="d-flex gap-3">

                               {{--show project--}}
                            <a href="{{ route('projects.show', $project->id) }}" title="عرض" class="text-success"><i
                              class="far fa-folder-open
                          font-size-18"></i></a>
                                            {{--editing project--}}
                                            <a href="{{ route('projects.edit', $project->id) }}" title="تعديل" class="text-success"><i
                                                    class="mdi mdi-pencil font-size-18"></i></a>
                                          

                                         {{--deleting project--}}
                                         <a  title="حذف" style="cursor: pointer"  data-id="{{ $project->id }}"  class="text-danger delete">
                                            <i
                                                class="mdi mdi-delete font-size-18"></i></a>
                            {{-- <button class="btn btn-danger delete" data-id="{{  $project->id }}">Delete</button> --}}
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                      
                    </div>
                    <ul class="pagination pagination-rounded justify-content-end mb-2">
                        {{ $projects->links() }}
                    </ul>
              
                </div>
              
            </div>
        </div>
    </div>
    <!-- end row -->
    
{{-- 
 <div class="modal fade" tabindex="-1" id="kt_modal_2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">حذف مشروع</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

<<<<<<< Updated upstream
                <form id="del_event" action="{{ route('projects.destroy', $project) }}" method="post"style="display: inline;">
                    {!! method_field('delete') !!}
                    {{ csrf_field() }}
=======
                <form action="projects/destroy" method="POST">.
                    @method('DELETE')
                    @csrf
>>>>>>> Stashed changes
                    <div class="modal-body">
                        <p>هل أنت متأكد من عملية الحذف ؟</p>
                        <input type="hidden" id="id" name="id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">إلغاء</button>
                        <button class="btn btn-danger" type="submit" id="del_id">delete</button>
                                        </div>
                </form>
            </div>
        </div>
    </div>  --}}

@endsection

@section('script-bottom')
    <script>
        $('#kt_modal_1').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })

    //     $('#kt_modal_2').on('show.bs.modal', function(event) {
    //         var button = $(event.relatedTarget)
    //         var id = button.data('id')
    //         var modal = $(this)
    //         modal.find('.modal-body #id').val(id);
            
  	// });

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




    $('.table-responsive').on('click', '.delete', function() {
                let id = $(this).data('id');
                swal.fire({
                    text: 'هل انت متاكد من الحذف',
                    icon: "error",
                    confirmButtonText: "نعم",
                    cancelButtonText: "لا",
                    showCancelButton: true,
                    customClass: {
                        confirmButtonText: "btn font-weight-bold btn-light",
                        cancelButtonText: "btn font-weight-bold btn-light",
                    }
                }).then(function(status) {
                    if (status.value) {
                        $.ajax({
                            url: '{{ route('proj.del') }}',
                            type: 'Delete',
                            data: {
                                'id': id,
                                '_token': '{{ csrf_token() }}',
                            },
                            success: function(e) {
                                location.reload();
                               // table.destroy();
                                //drawTable($('table')).serializeArray();
                            }
                        })
                    }
                })
            });
     </script>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>

@endsection
