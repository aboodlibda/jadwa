@extends('layouts.master')

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
                                        <input type="text" name="query" class="form-control"
                                            placeholder="الاسم,المنطقة,البريد,رقم الجوال">
                                        <i class="bx bx-search-alt search-icon"></i>

                                    </div>

                                </div>
                                <button type="submit" class="btn btn-secondary btn-rounded waves-effect waves-light"> بحث
                                    <i class="bx bx-search-alt search-icon me-1"></i></button>
                            </form>
                        </div>

                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <a href="{{ route('projects.create') }}"
                                    class="btn btn-warning btn-rounded waves-effect waves-light mb-2 me-2"> إضافة مشروع
                                    جديد <i class="mdi mdi-plus me-1"></i></a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th style="text-align: right">#</th>
                                    <th style="text-align: right">اسم المشروع</th>
                                    <th style="text-align: right">نوع المشروع </th>
                                    <th style="text-align: right">الموقع</th>
                                    <th style="text-align: right">تاريخ البداية</th>
                                    <th style="text-align: right">العمليات</th>
                                </tr>
                            </thead>

                        </table>
                    </div>

                    {{-- <ul class="pagination pagination-rounded justify-content-center mb-2">
                        {{ $users->links() }}
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
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

                <form action="users/destroy" method="POST">.
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
