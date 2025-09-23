@component('admin.layouts.content',[
    'title'=>'مشاهده دسته بندی ها',
    'tabTitle'=>'مشاهده دسته بندی ها',
    'breadcrumb'=>[
            ['title'=>'مشاهده دسته بندی ها','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">


@endslot



<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title"  >لیست دسته بندی ها</h6>
          <div class="table-responsive">

@if($show_busines_group) 
<ul>
@foreach($show_busines_group as $category)
    <li>
        {{ $category->name }}
        @if($category->childrenRecursive->count())
            @include('card.partials.children', ['children' => $category->childrenRecursive])
        @endif
    </li>
@endforeach
</ul>
@endif


@if($busines_groups)




<table id="dataTableExample" class="table"
>


              <thead>
                <tr>
                  <th>ردیف</th>
                  <th>  نام گروه </th>
                  <th>تاریخ ثبت</th>
                </tr>
              </thead>
              <tbody>


@foreach($busines_groups as $key => $admin)
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
