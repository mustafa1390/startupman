@component('admin.layouts.content',[
    'title'=>' مشاهده کاربران ',
    'tabTitle'=>'مشاهده کاربران ',
    'breadcrumb'=>[
            ['title'=>'مشاهده کاربران','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endslot



@slot('style')

<script>
    function fetch_myselect_4(vall){
        var vall = document.getElementById("form_category_id").value;$.ajax({
            type: 'get',
            url: '../../../../admin/fetch/form_subcategory/'+vall+'',
        data: {get_option:vall},
        success: function (response) {
            document.getElementById("form_subcategory_id").innerHTML=response;
        }
    });
        }
</script>

@endslot



{{-- @if(explode_url('2')=='search') --}}
<div class="row">



    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">





@include('ui.openSearch')


            <div class="row">
                <div class="col-md-3 ">

            <div class="form-group" >
                {{-- <label for="form_category_id"> جستجو برا اساس </label> --}}
                    <select  class="js-example-basic-single w-100"     name="form_category_id"   style="font-size: 18px;"
  id="form_category_id"  onchange="fetch_myselect_4(this.value);"
                       >
                    <option value="v"> انتخاب فیلد جستجو</option>
                    <option value="codemeli"   > کدملی</option>
                    <option value="name"   > نام و نام خانوادگی</option>
                    <option value="email"   >ایمیل </option>
                    <option value="tell"   >موبایل </option>
                </select>
                </div>
                </div>
                <div class="col-md-9  ">

                <div id="form_subcategory_id">

                </div>

                </div>
                </div>




                <div id="form_subcategory_id">

                </div>



        </div>
      </div>
    </div>

</div>
{{-- @endif --}}



{{-- @if(explode_url('2')=='index') --}}

<div class="row">



    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست کاربران</h6>
          <div class="table-responsive">

@if($users)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>ردیف</th>
                  <th>نام و نام خانوادگی</th>
                  <th>نام کاربری</th>
                  <th>تاریخ ایجاد</th>
                  <th>وضعیت</th>
                  <th>حذف</th>
                  <th>ورود</th>
                </tr>
              </thead>
              <tbody>


@foreach($users as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->username}}</td>
{{-- <td>{{ date_frmat($admin->created_at) }}</td> --}}
<td>{{ date_frmat_ymd($admin->created_at) }}</td>
<td><a href="{{ route('admin.user.edit', $admin) }}">
    @include('admin.layouts.table.getstatus', [$admin   ])
</a></td>

<td>
@include('admin.layouts.table.modal', [$admin ,'route' => route('admin.user.destroy', $admin) , 'myname' => $admin->name ])
</td>


<td><a href="{{ route('admin.user.login', $admin) }}" target="_blank" ><span class="badge badge-primary">&nbsp; ورود <i data-feather="user"></i> </span></a></td>

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


{{-- @endif --}}




    @slot('script')
    <script src="{{ asset('template/assets/vendors/datatables.net/jquery.dataTables-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/js/data-table-ltr.js') }}"></script>
    @endslot
@endcomponent
