@component('admin.layouts.content',[
    'title'=>' مشاهده مدیران ',
    'tabTitle'=>'مشاهده مدیران ',
    'breadcrumb'=>[
            ['title'=>'مشاهده مدیران','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">

@endslot



<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست مدیران</h6>
          <div class="table-responsive">

@if($users)
<table  id="dataTableExample" class="table"
>
              <thead>
                <tr>
                  <th>ردیف</th>
                  <th>نام و نام خانوادگی</th>
                  <th>نام کاربری</th>
                  <th>تاریخ ایجاد</th>
                  <th>وضعیت</th>
                  <th>حذف</th>
                </tr>
              </thead>
              <tbody>


@foreach($users as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->username}}</td>
<td>{{ date_frmat($admin->created_at) }}</td>
<td><a href="{{ route('admin.admin.edit', $admin) }}">
    @include('admin.layouts.table.getstatus', [$admin   ])
</a></td>

<td>
@include('admin.layouts.table.modal', [$admin ,'route' => route('admin.admin.destroy', $admin) , 'myname' => $admin->name ])
</td>



                </tr>
@endforeach



              </tbody>
            </table>

@endif

          </div>
        </div>
      </div>
    </div>
  </div>







  @slot('script') 
      <script src="{{ asset('template/assets/vendors/datatables.net/jquery.dataTables-ltr.js') }}"></script>
      <script src="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4-ltr.js') }}"></script>
      <script src="{{ asset('template/assets/js/data-table-ltr.js') }}"></script>


       @endslot
@endcomponent
