@component('admin.layouts.content', [
    'title' => 'ویرایش دسته بندی ',
    'tabTitle' => 'ویرایش دسته بندی ',
    'breadcrumb' => [['title' => 'لیست دسته بندی ها ', 'url' => route('admin.dashboard')], ['title' => 'ویرایش دسته بندی ', 'class'
    => 'active']],
    ])





    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">


                <div class="col-md-3 grid-margin stretch-card">
                </div>




                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">


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



                            <div class="card-header card-header-border-bottom">
                                <h4> ویرایش دسته بندی  </h4>
                            </div>

                            <br>


                            @include('admin.layouts.errors')


                            <form class="forms-sample" method="POST" action="{{ route('admin.busines_groups.store') }}"
                                enctype="multipart/form-data" onsubmit="return Validate(this);">
@csrf
                                <div class="row">




                                    <div class="col-sm-12">






                                        <div class="form-group">
                                            <label for="name">  نام گروه  </label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                placeholder="نام گروه" name="name" value="{{ $busenes_group->name}}"  >
                                        </div>




                                        <input type="hidden" name="icon" value="{{ $busenes_group->name}}" />







@method('PUT')

                                        <div class="card-footer">
                                            <a href="{{ route('admin.busines_groups.index') }}" class="btn btn-danger">بازگشت</a>
                                            <button type="submit" class="btn btn-primary float-right">ثبت</button>
                                        </div>




                                    </div>




                                </div>

                            </form>








                        </div>
                    </div>
                </div>



                <div class="col-md-3 grid-margin stretch-card">
                </div>



            </div>
        </div>
    </div>













    @slot('script')
    @endslot
@endcomponent
