  @component('admin.layouts.content', [
      'title' => 'ایجاد نقش جدید',
      'tabTitle' => 'ایجاد نقش جدید',
      'breadcrumb' => [['title' => 'لیست صفحات سایت', 'url' => route('admin.permission.index')], ['title' => 'ایجاد نقش جدید',
      'class' => 'active']],
      ])


      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">




                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4> ایجاد نقش جدید </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST"  action="{{route('admin.permission.store')}}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">


                                          <div class="form-group">
                                              <label for="name">نام نقش </label>
                                              <input type="text" class="form-control" id="name" autocomplete="off"
                                                  placeholder=" نام نقش  " name="name" value="{{ old('name') }}">
                                          </div>




                    @include('card.permission.tab_create_role'  )



                                          <div class="card-footer">
                                              <a href="{{ route('admin.page.index') }}" class="btn btn-danger">بازگشت</a>
                                              <button type="submit" class="btn btn-primary float-right">ایجاد نقش کاربری جدید</button>
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
