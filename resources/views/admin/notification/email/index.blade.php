@component('admin.layouts.content', [
    'title' => 'تنظیمات ایمیل مدیر  ',
    'tabTitle' => 'تنظیمات ایمیل مدیر  ',
    'breadcrumb' => [['title' => 'تنظیمات ایمیل مدیر  ', 'class' => 'active']],
    ])




    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">


                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <div class="card-header card-header-border-bottom">
                                <h4>تنظیمات ایمیل مدیر   </h4>
                            </div>

                            <br>


                            @include('admin.layouts.errors')


                            <form class="forms-sample" method="POST"
                                action="{{ route('admin.notification.email.email_index_update') }}" enctype="multipart/form-data"
                                onsubmit="return Validate(this);">
                                @csrf


                                <div class="row">

                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">



                                        <div class="form-group">
                                            <h4 class="card-title"> ایمیل مدیریت سایت </h4>
                                            <input type="text" class="form-control" id="email_notification"
                                                autocomplete="off" placeholder="ایمیل مدیریت سایت " name="email_notification"
                                                value="{{ $setting->email_notification }}" required>
                                        </div>





                                        @method('PUT')

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary float-right">ویرایش</button>
                                        </div>


                                    </div>


                                    <div class="col-sm-2"></div>
                                </div>

                            </form>



                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>













    @slot('script')




    @endslot
@endcomponent
