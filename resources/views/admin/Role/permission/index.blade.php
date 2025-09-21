@component('admin.layouts.content',[
    'title'=>' مدیریت نقش ها  ',
    'tabTitle'=>'مدیریت نقش ها  ',
    'breadcrumb'=>[
            ['title'=>'مدیریت نقش ها  ','class' => 'active']
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
          <h6 class="card-title">لیست نقش های مدیریت</h6>
          <div class="table-responsive">

@if($roles)
            <table
@template('tx') id="dataTableExample" class="table" @endtemplate
@template('arzicoin') id="example" class="table table-striped nowrap"  @endtemplate
>
              <thead>
                <tr>
                    <th>ردیف</th>
                    <th>  نقش     </th>
                    {{-- <th>سطح دسترسی</th> --}}
                    <th>ویرایش</th>
                    <th>انتصاب نقش به مدیر</th>
                    <th> مدیران منتصب </th>
                    <th>کپی نقش</th>
                    <th> حذف  </th>
                </tr>
              </thead>
              <tbody>


@foreach($roles as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{$item->name}}</td>


<td>
    <a href="{{ route('admin.permission.edit', $item) }}">
    <span class="btn btn-success btn-sm">
        <i class="fa fa-fw fa-edit"></i> مشاهده
        </span>
    </a>
</td>

<td>
    <a href="{{ route('admin.permission.appointment', $item) }}">
    <span class="btn btn-primary btn-sm">
        <i class="fa fa-fw fa-plus"></i> انتصاب
        </span>
    </a>
</td>

<td>
    @if($item->id)
    @foreach ($users as $user   )
    @if($user->role_id==$item->id)
     <b>{{ $user->name }}</b><br>
     @endif
    @endforeach
    @endif
</td>


<td>
    <a href="{{route('admin.permission.duplicate',['id'=>$item->id  ])}}" class="btn bg-gradient-primary btn-sm">
        <i class="nav-icon fas fa-copy"></i>
    </a>
</td>

 <td>
@include('admin.layouts.table.modal', ['admin'=>$item ,'route' => route('admin.permission.destroy', $item) , 'myname' => 'نقش '.$item->name  ])

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

  @template('tx')
      <script src="{{ asset('template/assets/vendors/datatables.net/jquery.dataTables-ltr.js') }}"></script>
      <script src="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4-ltr.js') }}"></script>
      <script src="{{ asset('template/assets/js/data-table-ltr.js') }}"></script>
  @endtemplate

  @template('arzicoin')

      <script>
      new DataTable('#example', {
      responsive: true
      });
      </script>

      <style>
          #example_paginate #example_previous {display: none!important;}
          #example_paginate #example_next {display: none!important;}
      </style>
  @endtemplate


       @endslot
@endcomponent
