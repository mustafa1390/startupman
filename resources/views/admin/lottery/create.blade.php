@component('admin.layouts.content', [
    'title' => 'ایجاد قرعه کشی جدید',
    'tabTitle' => 'ایجاد  قرعه کشی جدید',
    'breadcrumb' => [['title' => 'لیست برندگان قرعه کشی', 'url' => route('admin.dashboard')], ['title' => 'ایجاد قرعه کشی جدید', 'class'
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

                            <div class="card-header card-header-border-bottom">
                                <h4> ایجاد قرعه کشی جدید </h4>
                            </div>

                            <br>


                            @include('admin.layouts.errors')


                            <form class="forms-sample" method="POST" action="{{ route('admin.lottery.store') }}"
                                enctype="multipart/form-data" onsubmit="return Validate(this);">
@csrf
                                <div class="row">




                                    <div class="col-sm-12">




                                        <div class="alert alert-primary alert-dismissible" role="alert">
                                            <span>تعداد شرکت کنندگان در همایش پیاده روی <b>{{ $count_user }}</b> نفر می باشد</span>

                                        </div>

                                        <div class="form-group">
                                            <label for="number">تعداد برندگان قرعه کشی</label>
                                            <input type="number" class="form-control" id="number" required
                                                autocomplete="off" placeholder="تعداد برندگان قرعه کشی"
                                                 name="number"
                                                value="{{ old('number') }}"  >
                                        </div>








@method('POST')

                                        <div class="card-footer">
                                            {{-- <a href="{{ route('admin.user.index') }}" class="btn btn-danger">بازگشت</a> --}}
                                            <button type="submit" class="btn btn-primary btn-lg btn-block float-right">انجام قرعه کشی آنلاین</button>
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
