<div class="card rounded">
    <div class="card-body">

        <div class="d-flex align-items-center justify-content-between mb-2">

            <h6 class="card-title mb-0">اطلاعات پروفایل</h6>

            <div class="dropdown">
                <button class="btn p-0" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                        class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i> </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                            class="icon-sm ml-2"></i> <span class="">ویرایش
                            پروفایل</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                            data-feather="git-branch" class="icon-sm ml-2"></i> <span
                            class="">به روز رسانی</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                            class="icon-sm ml-2"></i> <span class="">مشاهده همه</span></a>
                </div>
            </div>
        </div>




        <div>
            @include('admin.layouts.table.avatar', [$admin , 'avatarimage' => $admin->image , 'class'=>'profile-pic' , 'style' => 'height: 100px;width: 100px;  border-radius:50%;'  ])
            <span class="profile-name">{{ $admin->name }}</span>
            </div>

        <div class="mt-3">
            <label class="tx-11 font-weight-bold mb-0 text-uppercase">نقش کاربری : </label>
            <p class="text-muted">
            <h4>
                <span class="badge badge-pill  badge-primary"><i data-feather="user"></i>


@if ($guard=='admin')
&nbsp;&nbsp;  کاربر  معمولی &nbsp;&nbsp;
@endif
@if ($guard=='user')
&nbsp;&nbsp; کاربر  معمولی &nbsp;&nbsp;
@endif


                </span>
            </h4>
            </p>
        </div>


        <div class="mt-3">
            <label class="tx-11 font-weight-bold mb-0 text-uppercase">نام و نام خانوادگی : </label>
            <p class="text-muted">

                <span class="badge badge-success"><i data-feather="check-circle"></i> &nbsp;
                        {{ $admin->name }} </span>


            </p>
        </div>

        <div class="mt-3">
            <label class="tx-11 font-weight-bold mb-0 text-uppercase">کدملی : </label>
            <p class="text-muted">

                <span class="badge badge-success"><i data-feather="check-circle"></i> &nbsp;
                        {{ $admin->codemeli }} </span>


            </p>
        </div>



        <div class="mt-3">
            <label class="tx-11 font-weight-bold mb-0 text-uppercase">ایمیل : </label>
            <p class="text-muted">

@if ($guard=='admin')

<span class="badge badge-success"><i data-feather="check-circle"></i> &nbsp;
    {{ $admin->email }} </span>
@endif
@if ($guard=='user')

<span class="badge badge-success"><i data-feather="check-circle"></i> &nbsp;
    {{ $admin->email }} </span>
 
@endif



            </p>
        </div>

        <div class="mt-3">
            <label class="tx-11 font-weight-bold mb-0 text-uppercase">تلفن : </label>
            <p class="text-muted">
                @if ($admin->tell)
                    <span class="badge badge-success"><i data-feather="check-circle"></i> &nbsp;
                        {{ $admin->tell }} </span>
                @else
                    <span class="badge badge-warning"><i data-feather="x-circle"></i> &nbsp;
                        {{ $admin->tell }} </span>
                @endif
            </p>
        </div>


        <div class="mt-3">
            <label class="tx-11 font-weight-bold mb-0 text-uppercase">آدرس : </label>
            <p class="text-muted">{{ $admin->address }}</p>
        </div>


        @if ($guard=='user')
        @if ($inviteds)
            <hr>
            <div class="mt-3">
                <label class="tx-11 font-weight-bold mb-0 text-uppercase">کاربر دعوت کننده : </label>
                <span class="badge badge-success"> &nbsp; {{ $inviteds->username }} </span>
            </div>
            <hr>
        @endif
        @endif


        <div class="mt-3">
            <label class="tx-11 font-weight-bold mb-0 text-uppercase">تاریخ ثبت نام : </label>
            <p class="text-muted">
                {{ date_frmat($admin->created_at) }}</p>
        </div>



        @if ($guard=='user')
        <div class="mt-3">
            <label class="tx-11 font-weight-bold mb-0 text-uppercase">تاریخ آخرین ورود : </label>

            @if ($loginhistories)
                <p class="text-muted"> {{ date_frmat(update_lastlogin($admin->id,'login'))  }}</p>
            @else
                <p class="text-muted">ورود کاربر انجام نشده است! </p>
            @endif
        </div>

        <div class="mt-3">
            <label class="tx-11 font-weight-bold mb-0 text-uppercase">آی پی : </label>

            @if ($loginhistories)
                <p class="text-muted"> {{ update_lastlogin($admin->id,'ip')  }}</p>
            @else
                <p class="text-muted">ورود کاربر انجام نشده است! </p>
            @endif

        </div>

        @endif



    </div>
</div>
