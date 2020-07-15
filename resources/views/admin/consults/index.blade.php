@extends('admin.layout.master')
@section('title','إدارة طلبات الإستشارة')

@section('content')

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">طلبات الإستشارات </h4>
        </div>
    </div>
    <!--End Page-Title -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">

                <h4 class="header-title m-t-0 m-b-30">كل طلبات الاستشارات</h4>

                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم العميل</th>
                            <th>ايميل العميل</th>
                            <th>الجوال</th>
                            <th>نص الموضوع</th>
                            <th style="width: 250px;" >العمليات المتاحة</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $i = 1; @endphp
                    @foreach($consults as $row)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->phone}}</td>
                            <td>{{$row->subject}}</td>
                            <td>
{{--                                <a href="{{route('admin.contacts.show',['id'=>$row->email])}}"  data-original-title="رد"><i style="margin-left: 10px"  class="fa fa-reply"></i></a>--}}
                                <a href="#"  onclick="Delete({{$row->id}})"  class="label label-danger" >حذف</a>
                                {!!Form::open( ['route' => ['admin.consults.destroy',$row->id] ,'id'=>'delete-form'.$row->id, 'method' => 'Delete']) !!}
                                {!!Form::close() !!}


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

            <script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css')}}"></script>
            <script src="{{asset('admin/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css')}}"></script>
            <script src="{{asset('admin/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css')}}"></script>
            <script src="{{asset('admin/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css')}}"></script>
            <script src="{{asset('admin/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css')}}"></script>
            <script type="text/javascript">
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            </script>
            <script>
                function Delete(id) {
                    var item_id=id;
                    console.log(item_id);
                    swal({
                        title: "هل أنت متأكد ",
                        text: "هل تريد حذف هذا الطلب؟",
                        icon: "warning",
                        buttons: ["الغاء", "موافق"],
                        dangerMode: true,
                    }).then(function(isConfirm){
                        if(isConfirm){
                            document.getElementById('delete-form'+item_id).submit();
                        }
                        else{
                            swal("تم االإلفاء", "حذف  طل الاستشارة تم الغاؤه",'info',{buttons:'موافق'});
                        }
                    });
                }
            </script>

@endsection
