  @component('admin.layouts.content', [
      'title' => 'انتصاب مدیر به نقش ',
      'tabTitle' => 'انتصاب مدیر به نقش ',
      'breadcrumb' => [['title' => 'لیست صفحات سایت', 'url' => '#'], ['title' => 'ویرایش صفحه  ',
      'class' => 'active']],
      ])




      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4> انتصاب مدیر به نقش {{$role->name}}   </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{route('admin.permission.appointment.put' , $role->id)}}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">



                                          <div class="form-group">
                                              <label for="name">نام نقش </label>
                                              <input type="text" class="form-control" id="name" autocomplete="off"
                                                  placeholder=" نام  نقش  " name="name" disabled value="{{$role->name}}">
                                          </div>


  @include('admin.layouts.table.selectbox', [ 'allforeachs' => $users ,  'input_name' => 'name'  ,
  'name_select' => 'مدیر' ,  'value' =>   old('admin_id')  ,
   'required'=>'required'  , 'index_id'=>'admin_id' , 'onchange'=>'' ])


   @include('card.permission.tab_accesses'  )






                                          @method('PUT')

                                          <div class="card-footer">
                                              <a href="{{ route('admin.permission.index') }}" class="btn btn-danger">بازگشت</a>
                                              <button type="submit" class="btn btn-primary float-right">ویرایش نقش کاربری</button>
                                          </div>


                                      </div>


                                  </div>

                              </form>



                          </div>
                      </div>
                  </div>




              </div>
          </div>
      </div>













      @slot('script')


    <script src="{{ asset('template/assets/vendors/core/core.js') }}"></script>
    <script src="{{ asset('template/assets/vendors/tinymce-rtl/tinymce.min.js') }}"></script>
      <script src="{{ asset('template/assets/vendors/simplemde/simplemde.min.js') }}"></script>
      <script src="{{ asset('template/assets/vendors/ace-builds/src-min/ace.js') }}"></script>
      <script src="{{ asset('template/assets/vendors/ace-builds/src-min/theme-chaos.js') }}"></script>

      <script src="{{ asset('template/assets/vendors/feather-icons/feather.min.js') }}"></script>
      <script src="{{ asset('template/assets/js/template.js') }}"></script>
      <script src="{{ asset('template/assets/js/tinymce.js') }}"></script>
      <script src="{{ asset('template/assets/js/tinymce.js') }}"></script>
      <script src="{{ asset('template/assets/js/ace.js') }}"></script>




      @endslot
  @endcomponent
