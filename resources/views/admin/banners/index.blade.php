@extends('admin.layout.master')
@section('title', 'إدارة البنرات')

@section('content')

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">

            <div class="btn-group pull-right m-t-15">
                <a href="{{ route('admin.banners.create') }}" class="btn btn-custom dropdown-toggle waves-effect waves-light">
                    إضافة بنر جديد
                    <span class="m-l-5"><i class="fa fa-plus"></i></span>
                </a>
            </div>

            <h4 class="page-title">البنرات</h4>
        </div>
    </div>
    <!--End Page-Title -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">

                <h4 class="header-title m-t-0 m-b-30">كل البنرات</h4>


                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>

                            <th> الصوره</th>

                            <th style="width: 250px;">العمليات المتاحة</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach ($banners as $row)
                            <tr>
                                <td>{{ $i++ }}</td>

                                <td>
                                    @if (in_array(pathinfo(getimg($row->image))['extension'], ['mp4', '3gp', 'mkv', 'mpeg', 'avi']))
                                        <a href="{{ getimg($row->image) }}" target="_blank" rel="noopener noreferrer">عرض
                                            الفيديو</a>
                                    @else
                                        <div class="form-group col-xs-12 col-md-6 form-float">
                                            <label>الصورة: </label>
                                            <img src="{{ getimg($row->image) }}" style="width:100px; height:100px">
                                        </div>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('admin.banners.edit', $row->id) }}"
                                        class="label label-warning">تعديل</a>
                                    <a href="#" onclick="Delete({{ $row->id }})"
                                        class="label label-danger">حذف</a>
                                    {!! Form::open([
                                        'route' => ['admin.banners.destroy', $row->id],
                                        'id' => 'delete-form' . $row->id,
                                        'method' => 'Delete',
                                    ]) !!}
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>



            </div>
        </div>
    @endsection

    @section('scripts')

        <!-- DataTables -->

        <script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css') }}">
        </script>
        <script src="{{ asset('admin/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css') }}">
        </script>
        <script
            src="{{ asset('admin/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css') }}">
        </script>
        <script
            src="{{ asset('admin/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css') }}">
        </script>
        <script
            src="{{ asset('admin/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css') }}">
        </script>


        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script>
            function Delete(id) {
                var item_id = id;
                console.log(item_id);
                swal({
                    title: "هل أنت متأكد ",
                    text: "هل تريد حذف هذا المستخدم ؟",
                    icon: "warning",
                    buttons: ["الغاء", "موافق"],
                    dangerMode: true,

                }).then(function(isConfirm) {
                    if (isConfirm) {
                        document.getElementById('delete-form' + item_id).submit();
                    } else {
                        swal("تم االإلفاء", "حذف  المستخدم تم الغاؤه", 'info', {
                            buttons: 'موافق'
                        });
                    }
                });
            }
        </script>

        <script>
            $('body').on('click', '.statusWithReason', function() {
                var id = $(this).attr('data-id');
                var url = $(this).attr('data-url');
                var $tr = $(this).closest($('#elementRow' + id).parent().parent());
                var action = $(this).attr('data-action');
                var text = '';
                var type = '';
                var confirmButtonClass = '';
                var redirectionRoute = '';

                //  Modal data ....
                if (action === 'suspend') {
                    text = 'هل تريد حظر المستخدم فعلا ؟';
                    type = 'error';
                    confirmButtonClass = 'btn-danger waves-effect waves-light';


                }
                if (action === 'activate') {
                    text = 'هل تريد تفعيل المستخدم فعلا ؟';
                    type = 'success';
                    confirmButtonClass = 'btn-success waves-effect waves-light';

                }

                swal({
                        title: "هل انت متأكد؟",
                        text: text,
                        type: type,
                        showCancelButton: true,
                        confirmButtonColor: "#27dd24",
                        confirmButtonText: "موافق",
                        cancelButtonText: "إلغاء",
                        confirmButtonClass: confirmButtonClass,
                        closeOnConfirm: true,
                        closeOnCancel: true,
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            if (action === 'activate') {
                                $('#myModal_active').modal('show');

                                $("#activeButton").click(function(e) {

                                    var reason = $('#activate_reason').val();

                                    $.ajax({
                                        type: 'post',
                                        url: url,
                                        data: {
                                            id: id,
                                            action: action,
                                            reason: reason
                                        },
                                        dataType: 'json',
                                        success: function(data) {
                                            if (data.status == true) {
                                                var title = data.title;
                                                var msg = data.message;
                                                toastr.options = {
                                                    positionClass: 'toast-top-left',
                                                    onclick: null
                                                };

                                                $('.modal').modal('hide');
                                                var $toast = toastr['success'](msg, title);
                                                $toastlast = $toast;

                                                function pageRedirect() {
                                                    location.reload();
                                                }
                                                setTimeout(pageRedirect(), 2500);
                                            } else {
                                                var title = data.title;
                                                var msg = data.message;
                                                toastr.options = {
                                                    positionClass: 'toast-top-left',
                                                    onclick: null
                                                };

                                                var $toast = toastr['error'](msg, title);
                                                $toastlast = $toast
                                            }
                                        }
                                    });
                                });
                            }
                            if (action === 'suspend') {
                                $('#myModal_suspend').modal('show');

                                $("#suspendButton").click(function(e) {

                                    var reason = $('#suspend_reason').val();

                                    $.ajax({
                                        type: 'post',
                                        url: url,
                                        data: {
                                            id: id,
                                            action: action,
                                            reason: reason
                                        },
                                        dataType: 'json',
                                        success: function(data) {
                                            if (data.status == true) {
                                                var title = data.title;
                                                var msg = data.message;
                                                toastr.options = {
                                                    positionClass: 'toast-top-left',
                                                    onclick: null
                                                };

                                                $('.modal').modal('hide');
                                                var $toast = toastr['success'](msg, title);
                                                $toastlast = $toast;

                                                //                                            $tr.find('td').fadeOut(100,function () {
                                                //                                                $tr.remove();
                                                //                                            });

                                                function pageRedirect() {
                                                    location.reload();
                                                }
                                                setTimeout(pageRedirect(), 2500);
                                            } else {
                                                var title = data.title;
                                                var msg = data.message;
                                                toastr.options = {
                                                    positionClass: 'toast-top-left',
                                                    onclick: null
                                                };

                                                var $toast = toastr['error'](msg, title);
                                                $toastlast = $toast
                                            }
                                        }
                                    });
                                });
                            }

                        }

                    }
                );
            })
        </script>

    @endsection
