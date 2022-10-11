
@extends('layouts.master')

@section('title') معلومات التواصل @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') التواصل @endslot
        @slot('title') قائمة التواصل @endslot
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
                                {{-- <a href="{{ route('contacts.create') }}"
                                   class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"> إضافة  جديد <i
                                        class="mdi mdi-plus me-1"></i></a> --}}

                                        <button type="button" class="btn btn-success  waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">اضافة جديد</button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">اضافة جديد </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('contacts.store') }}">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="type" class="col-form-label">النوع</label>
                                                                <select id="type" class="form-select" name="type">
                                                                    <option selected disabled hidden>-- إختر النوع --</option>
                                                                    <option value="FaceBook">FaceBook</option>
                                                                    <option value="TWitter">TWitter</option>
                                                                    <option value="Instagram">Instagram</option>
                                                                    <option value="Tiktok">Tiktok</option>
                                                                    <option value="Snapchat">Snapchat</option>
                                                                    <option value="WhatsApp">WhatsApp</option>
                                                                    <option value="YouTube">YouTube</option>
                                                                    <option value="Email">Email</option>
                                                                    <option value="Phone">Phone</option>

                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="title" class="col-form-label">العنوان</label>
                                                                <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="value" class="col-form-label">المحتوى</label>
                                                                <textarea class="form-control" name="value" id="value">{{ old('value') }}</textarea>
                                                            </div>
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
                    @if (isset($contact))
                    @if($contact->count() > 0)

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-check">
                            <thead class="orange">
                            <tr>

                                <th style="width: 20px;" class="align-middle">#</th>
                                <th class="align-middle">نوع التواصل  </th>
                                <th class="align-middle"> العنوان  </th>
                                <th class="align-middle">المحتوى </th>
                                <th class="align-middle">العمليات</th>
                            </tr>
                            </thead>
                            @foreach($contact as $key => $contact)
                                <tbody>
                                <tr>
                                    <td>{{$key+1}}</td>
                                   <td>{{$contact->type}}</td>
                                    <td>{{$contact->title}}</td>
                                    <td>{{$contact->value }}</td>

                                    <td>
                                        <div class="d-flex gap-3">

                                        
                                            {{-- <a  title="تعديل" class="text-success"  data-bs-toggle="modal" data-bs-target="#editModal"   data-id="{{ $item->id }}"><i
                                                    class="mdi mdi-pencil font-size-24"></i></a> --}}
                                                    <a  title="تعديل" class="text-success"  data-bs-toggle="modal" data-id="{{ $contact->id }}" 
                                            data-type="{{ $contact->type }}"      data-title="{{ $contact->title }}"          
                                             data-value="{{ $contact->value }}"    
                                               data-bs-target="#editModal"><i
                                               class="mdi mdi-pencil font-size-24"></i> </a>
                                              
                                           {{--deleting page--}}

                                         <a  title="حذف" style="cursor: pointer"  data-id="{{ $contact->id }}"  class="text-danger delete">
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
                                   <form method="POST" action="contacts/{contact}" id="editModal">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" id="id" name="id">
                                
                                     

                                     <div class="mb-3">
                                            <label for="type" class="col-form-label">النوع</label>
                                            <select id="type" class="form-select" name="type" >
                                                <option  selected disabled hidden value="{{ $contact->type }}">{{ $contact->type }}</option>
                                                <option value="FaceBook">FaceBook</option>
                                                <option value="TWitter">TWitter</option>
                                                <option value="Instagram">Instagram</option>
                                                <option value="Tiktok">Tiktok</option>
                                                <option value="Snapchat">Snapchat</option>
                                                <option value="WhatsApp">WhatsApp</option>
                                                <option value="YouTube">YouTube</option>
                                                <option value="Email">Email</option>
                                                <option value="Phone">Phone</option>
                
                                            </select>
                                        </div> 
                                      

                                         <div class="mb-3">
                                            <label for="title" class="col-form-label">العنوان</label>
                                            <input type="text" name="title" class="form-control" id="title" value="{{ $contact->title }}">
                                        </div>  
                
                                        <div class="mb-3">
                                            <label for="value" class="col-form-label">المحتوى</label>
                                            <input type="text" name="value" class="form-control" id="value" value="{{ $contact->value }}">
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
 
@endsection
 @section('script-bottom')
    <script>
        $('#editModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var type = button.data('type')
            var title = button.data('title')
            var value = button.data('value')
            

            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #type').val(type);
            modal.find('.modal-body #title').val(title);
            modal.find('.modal-body #value').val(value);
            

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
                            url: '{{ url('contacts/{contact}') }}',
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
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>

@endsection





