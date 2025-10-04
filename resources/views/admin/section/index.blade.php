@component('admin.layouts.content',[
    'title'=>'بخشهای صفحه ورود',
    'tabTitle'=>'بخشهای صفحه ورود',
    'breadcrumb'=>[
            ['title'=>'بخشهای صفحه ورود','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">


@endslot



<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title"  >لیست بخشهای صفحه ورود</h6>
          <div class="table-responsive">


@if($sections)




<table id="dataTableExample" class="table"
>


              <thead>
                <tr>
                  <th>ردیف</th>
                  <th>  نام بخش </th>
                  <th>تاریخ ثبت</th>
                </tr>
              </thead>
              <tbody>


@foreach($sections as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td><a href="{{ route('admin.busines_groups.edit', $admin->id) }}">
                        {{$admin->name}}</a></td>
<td>{{ date_frmat($admin->created_at) }}</td>
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
