
@extends('layouts.master')

@section('title') أنواع المشاريع  @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') المشاريع @endslot
        @slot('title')  أنواع المشاريع @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">

                        </div>

                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                {{-- <a href="{{ route('projectype.create') }}"
                                   class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"> إضافة  جديد <i
                                        class="mdi mdi-plus me-1"></i></a> --}}

                                        <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">اضافة جديد</button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">اضافة جديد </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('projectype.store') }}">
                                                            @csrf
                                                          
                                                            <div class="mb-3">
                                                                <label for="title" class="col-form-label">العنوان</label>
                                                                <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                                                            </div>

                                                            <div class="mb-3">
                                                              
                                                                <div class="form-check">
                                                                    <label class="form-label" for="gridCheck">الحالة :</label>
                                                                    <div class="btn-group-horizontal" role="group" aria-label="Horizontal radio toggle button group">
                                                                        <input type="radio" class="btn-check" name="status" value="active" id="active-radio1" required>
                                                                        <label class="btn btn-outline-success" for="active-radio1">نشط</label>
                                                                        <input type="radio" class="btn-check" name="status" value="inactive" id="active-radio2" required>
                                                                        <label class="btn btn-outline-danger" for="active-radio2">غير نشط</label>
                                                                    </div>
                                                                </div>                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary" >اضافة</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div><!-- end col-->
                    </div>
                    @if (isset($projType))
                    @if($projType->count() > 0)

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-check">
                            <thead class="orange">
                            <tr>

                                <th style="width: 20px;" class="align-middle">#</th>
                                <th class="align-middle">نوع المشروع   </th>
                                <th class="align-middle"> الحالة  </th>
                                <th class="align-middle">العمليات</th>
                            </tr>
                            </thead>
                            @foreach($projType as $key => $item)
                                <tbody>
                                <tr>
                                    <td>{{$key+1}}</td>
                                   
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->status }}</td>

                                    <td>
                                        <div class="d-flex gap-3">

                                            {{--editing user--}}
                                            {{-- <a  title="تعديل" class="text-success"  data-bs-toggle="modal" data-bs-target="#editModal"   data-id="{{ $item->id }}">
                                                <i
                                                    class="mdi mdi-pencil font-size-24"></i></a> --}}
                                                    <a  title="تعديل"  class="text-success"  data-bs-toggle="modal" data-id="{{ $item->id }}" 
                                                        data-status="{{ $item->status }}"      data-title="{{ $item->title }}"          
                                            
                                               data-bs-target="#editModal"> <i
                                               class="mdi mdi-pencil font-size-24"></i></a>
                                              
                                             {{--deleting projecttype--}}
                                         <a  title="حذف" style="cursor: pointer"  data-id="{{ $item->id }}"  class="text-danger delete">
                                            <i
                                                class="mdi mdi-delete font-size-18"></i></a>

                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel"> تعديل </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                               <div class="modal-body">
                                   <form method="POST" action="projectype/{projectype}" id="editModal">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" id="id" name="id">
                                
                     
                                         <div class="mb-3">
                                            <label for="title" class="col-form-label">العنوان</label>
                                            <input type="text" name="title" class="form-control" id="title" value="{{ $item->title }}">
                                        </div>  
                
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <label class="form-label" for="gridCheck">الحالة :</label>
                                                <div class="btn-group-horizontal" role="group" aria-label="Horizontal radio toggle button group">
                                                    <input type="radio" class="btn-check" name="status" value="active" {{$item->status == 'active' ? 'checked' : ''}} id="active-radio1">
                                                    <label class="btn btn-outline-success" for="active-radio1">نشط</label>
                                                    <input type="radio" class="btn-check" name="status" value="inactive" {{$item->status == 'inactive' ? 'checked' : ''}} id="inactive-radio2">
                                                    <label class="btn btn-outline-danger" for="inactive-radio2">غير نشط</label>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" >تعديل</button>
                                        </div>
                                    </form> 
                                </div>  
                                
                            </div>
                        </div>
                    </div>
                @endif
@endif


                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
 

 @section('script-bottom')
    <script>
        $('#editModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var title = button.data('title')
            var status = button.data('status')
            
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #title').val(title);
            modal.find('.modal-body #status').val(status);
            

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
                            url: '{{ url('projectype/{projectype}') }}',
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
@endsection 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
@endsection






