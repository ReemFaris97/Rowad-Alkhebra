@extends('admin.layout.master')
@section('title', 'إدارة الاخبار')

@section('content')

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">

            <div class="btn-group pull-right m-t-15">
                <a href="{{ route('admin.news.create') }}" class="btn btn-custom dropdown-toggle waves-effect waves-light">
                    إضافة خبر جديد
                    <span class="m-l-5"><i class="fa fa-plus"></i></span>
                </a>
            </div>

            <h4 class="page-title">الاخبار</h4>
        </div>
    </div>
    <!--End Page-Title -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">

                <h4 class="header-title m-t-0 m-b-30">كل الاخبار</h4>


                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>العنوان</th>
                            <th>الكاتب</th>
                            <th> الصوره</th>
                            <th style="width: 250px;">العمليات المتاحة</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->ar_title }}</td>
                                <td>{{ $row->ar_writer }}</td>
                                <td>
                                    @if (in_array(pathinfo($row->image)['extension'], ['mp4', '3gp', 'mkv', 'mpeg', 'avi']))
                                        <a href="{{ $row->image }}" target="_blank" rel="noopener noreferrer">
                                            عرض الفيديو
                                        </a>
                                    @else
                                        <div class="form-group col-xs-12 col-md-6 form-float">
                                            <img src="{{ $row->image }}" style="width:100px; height:100px">
                                        </div>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('admin.news.edit', $row->id) }}" class="label label-warning">تعديل</a>
                                    <a href="#" onclick="Delete({{ $row->id }})"
                                        class="label label-danger">حذف</a>
                                    {!! Form::open([
                                        'route' => ['admin.news.destroy', $row->id],
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
                    text: "هل تريد حذف هذا الخبر ؟",
                    icon: "warning",
                    buttons: ["الغاء", "موافق"],
                    dangerMode: true,

                }).then(function(isConfirm) {
                    if (isConfirm) {
                        document.getElementById('delete-form' + item_id).submit();
                    } else {
                        swal("تم االإلفاء", "حذف  الخبر تم الغاؤه", 'info', {
                            buttons: 'موافق'
                        });
                    }
                });
            }
        </script>

    @endsection
