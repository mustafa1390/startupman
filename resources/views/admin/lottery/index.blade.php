@component('admin.layouts.content',[
    'title'=>' مشاهده برندگان قرعه کشی آنلاین ',
    'tabTitle'=>' مشاهده برندگان قرعه کشی آنلاین ',
    'breadcrumb'=>[
            ['title'=>' مشاهده برندگان قرعه کشی آنلاین ','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">


@endslot



<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title"  >لیست برندگان</h6>
          <div class="table-responsive">

@if($lottery_users)



<table id="dataTableExample" class="table"
>


              <thead>
                <tr>
                  <th>ردیف</th>
                  <th>نام و نام خانوادگی</th>
                  <th>  شماره همراه</th>
                  <th>تاریخ قرعه کشی</th>
                  <th>کد قرعه کشی</th>
                </tr>
              </thead>
              <tbody>


@foreach($lottery_users as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td><a href="{{ route('admin.user.edit', $admin->user->id) }}">{{$admin->user->fname}}</a></td>
                    <td>{{$admin->user->tell}}</td>
<td>{{ date_frmat($admin->created_at) }}</td>
<td>{{$admin->user->id}}</td>
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
