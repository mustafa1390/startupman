@component('admin.layouts.content',[
    'title'=>'مدیریت متنهای پیش فرض',
    'tabTitle'=>'مدیریت متنهای پیش فرض ',
    'breadcrumb'=>[
            ['title'=>'مدیریت متنهای پیش فرض','class' => 'active']
    ]])



@slot('style')
@template('tx')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endtemplate

@template('arzicoin')
<link rel="stylesheet" href="{{ asset('datatables/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('datatables/dataTables.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('datatables/responsive.bootstrap5.css') }}">
 @endtemplate

@endslot



<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">مدیریت متنهای پیش فرض  </h6>
          <div class="table-responsive">

@if($notification_types)
            <table
@template('tx') id="dataTableExample" class="table" @endtemplate
@template('arzicoin') id="example" class="table table-striped nowrap"  @endtemplate
>
              <thead>
                <tr>
                    <th>ردیف</th>
                    <th>اطلاع رسانی</th>
                    <th>  مشاهده </th>
                </tr>
              </thead>
              <tbody>


@foreach($notification_types as $key => $admin)
<tr>
<td>{{ $key + 1 }}</td>
<td>
{{$admin->name}}
 </td>

<td>
    <a href="{{ route('admin.notification.list.type', $admin) }}">
    <span class="btn btn-success" >  <i data-feather="edit"></i></span>
    </a>
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
