

<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
         مدیریت<span> سایت</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">اصلی</li>


        <li class="nav-item {{ isActive(['admin.dashboard']) }}">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">داشبورد  </span>
          </a>
        </li>



          <li class="nav-item nav-category">مدیریت اطلاع رسانی </li>

          <li class="nav-item  {{ isActive([  'admin.notification.list.index', 'admin.notification.list.edit' , 'admin.notification.list.type' , 'admin.notification.email.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#notification" role="button" aria-expanded="false" aria-controls="notification">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">اطلاع رسانی   </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow([  'admin.notification.list.index' , 'admin.notification.list.edit' , 'admin.notification.list.type' ,'admin.notification.email.index'])}}   "  id="notification">
              <ul class="nav sub-menu">

                <li class="nav-item">
 <a href="{{ route('admin.notification.list.index') }}" class="nav-link   {{ isActive(['admin.notification.list.index' , 'admin.notification.list.edit' , 'admin.notification.list.type' ]) }}  "> مدیریت متنهای پیش فرض </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.notification.email.index') }}" class="nav-link   {{ isActive(['admin.notification.email.index' ]) }}  ">   تنظیمات ایمیل مدیر </a>
                </li>
              </ul>
            </div>
          </li>



        <li class="nav-item  {{ isActive(['admin.admin.create' , 'admin.admin.index','admin.admin.edit'])}}   ">
            <a class="nav-link" data-toggle="collapse" href="#admin" role="button" aria-expanded="false" aria-controls="admin">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت ادمین ها</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.admin.create' , 'admin.admin.index','admin.admin.edit'])}}     "  id="admin">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.admin.create') }}" class="nav-link   {{ isActive(['admin.admin.create']) }}  ">ثبت ادمین </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.admin.index') }}" class="nav-link   {{ isActive(['admin.admin.index','admin.admin.edit']) }}  ">مشاهده ادمین ها</a>
                </li>
              </ul>
            </div>
          </li>


<li class="nav-item  {{ isActive(['admin.permission.create' , 'admin.permission.index',
          'admin.permission.edit' ,    'admin.permission.appointment' , ])}}">
            <a class="nav-link" data-toggle="collapse" href="#permission" role="button" aria-expanded="false" aria-controls="permission">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">سطوح دسترسی  </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.permission.create' , 'admin.permission.index',
            'admin.permission.edit' ,    'admin.permission.appointment' , ])}}     "  id="permission">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{route('admin.permission.create')}}" class="nav-link  {{ isActive(['admin.permission.create' ])}} "> ایجاد نقش جدید</a>
                </li>
                <li class="nav-item">
 <a href="{{route('admin.permission.index')}}" class="nav-link  {{ isActive(['admin.permission.index','admin.permission.edit',    'admin.permission.appointment' , ])}} ">مدیریت نقش ها  </a>
                </li>


              </ul>
            </div>
          </li>


        @permission('content')
                  <li class="nav-item nav-category">پشتیبانی Test</li>
        @endpermission


        <li class="nav-item  {{ isActive(['admin.user.create' , 'admin.user.index'])}}   ">
            <a class="nav-link" data-toggle="collapse" href="#user" role="button" aria-expanded="false" aria-controls="user">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت کاربران</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.user.create' , 'admin.user.index'])}}     "  id="user">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.user.create') }}" class="nav-link   {{ isActive(['admin.user.create']) }}  ">ثبت کاربر </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.user.index') }}" class="nav-link   {{ isActive(['admin.user.index','admin.user.edit']) }}  ">مشاهده کاربران</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item  {{ isActive(['admin.busines_groups.create' ,'admin.busines_groups.create.sub' , 'admin.busines_groups.index',
           'admin.section.index'])}}   ">
            <a class="nav-link" data-toggle="collapse" href="#busines_groups" role="button" aria-expanded="false" aria-controls="busines_groups">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">  دسته بندی بیزینس </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.busines_groups.create' ,'admin.busines_groups.create.sub' , 'admin.busines_groups.index',
             'admin.section.index'])}}     "  id="busines_groups">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.busines_groups.create') }}" class="nav-link   {{ isActive(['admin.busines_groups.create']) }}  ">ثبت گروه </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.busines_groups.create.sub') }}" class="nav-link   {{ isActive(['admin.busines_groups.create.sub']) }}  ">ثبت زیرگروه </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.busines_groups.index') }}" class="nav-link   {{ isActive(['admin.busines_groups.index','admin.busines_groups.edit']) }}  ">مشاهده گروهها</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.section.index') }}" class="nav-link   {{ isActive(['admin.section.index','admin.busines_groups.edit']) }}  ">مشاهده بخشها</a>
                </li>
              </ul>
            </div>
          </li>
{{--

        <li class="nav-item  {{ isActive(['admin.lottery.create' , 'admin.lottery.index'])}}   ">
            <a class="nav-link" data-toggle="collapse" href="#lottery" role="button" aria-expanded="false" aria-controls="lottery">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">  قرعه کشی آنلاین</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.lottery.create' , 'admin.lottery.index'])}}     "  id="lottery">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.lottery.create') }}" class="nav-link   {{ isActive(['admin.lottery.create']) }}  ">ایجاد قرعه کشی آنلاین   </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.lottery.index') }}" class="nav-link   {{ isActive(['admin.lottery.index','admin.lottery.edit']) }}  ">مشاهده برندگان قبلی</a>
                </li>
              </ul>
            </div>
          </li> --}}


        {{-- <li class="nav-item  {{ isActive(['admin.admin.create' , 'admin.admin.index','admin.admin.edit'])}}   ">
            <a class="nav-link" data-toggle="collapse" href="#admin" role="button" aria-expanded="false" aria-controls="admin">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت ادمین ها</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.admin.create' , 'admin.admin.index','admin.admin.edit'])}}     "  id="admin">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.admin.create') }}" class="nav-link   {{ isActive(['admin.admin.create']) }}  ">ثبت ادمین </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.admin.index') }}" class="nav-link   {{ isActive(['admin.admin.index','admin.admin.edit']) }}  ">مشاهده ادمین ها</a>
                </li>
              </ul>
            </div>
          </li> --}}
{{--

          <li class="nav-item  {{ isActive(['admin.permission.create' , 'admin.permission.index',
          'admin.permission.edit' ,    'admin.permission.appointment' , ])}}">
            <a class="nav-link" data-toggle="collapse" href="#permission" role="button" aria-expanded="false" aria-controls="permission">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">سطوح دسترسی </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.permission.create' , 'admin.permission.index',
            'admin.permission.edit' ,    'admin.permission.appointment' , ])}}     "  id="permission">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{route('admin.permission.index')}}" class="nav-link  {{ isActive(['admin.permission.index','admin.permission.edit',    'admin.permission.appointment' , ])}} ">مدیریت نقش ها  </a>
                </li>
              </ul>
            </div>
          </li>



          @permission('foorm')





          <li class="nav-item  {{ isActive(['admin.faq.create' , 'admin.faq.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#faq" role="button" aria-expanded="false" aria-controls="faq">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">سوالات متداول</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.faq.create' , 'admin.faq.index'])}}   "  id="faq">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.faq.create') }}" class="nav-link   {{ isActive(['admin.faq.create']) }}  ">ایجاد سوال</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.faq.index') }}" class="nav-link   {{ isActive(['admin.faq.index']) }}  ">مشاهده سوالات متداول</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item  {{ isActive(['admin.blogsub.create' , 'admin.blogsub.index','admin.blogsub.edit'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#blogsub" role="button" aria-expanded="false" aria-controls="blogsub">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">  دسته بندی بلاگ </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.blogsub.create' , 'admin.blogsub.index','admin.blogsub.edit'])}}   "  id="blogsub">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.blogsub.create') }}" class="nav-link   {{ isActive(['admin.blogsub.create']) }}  ">ثبت دسته بندی بلاگ  </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.blogsub.index') }}" class="nav-link   {{ isActive(['admin.blogsub.index']) }}  ">مشاهده دسته بندی بلاگ</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item  {{ isActive(['admin.blog.create' , 'admin.blog.index','admin.blog.edit'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#blog" role="button" aria-expanded="false" aria-controls="blog">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">  دسته بندی بلاگ </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.blog.create' , 'admin.blog.index','admin.blog.edit'])}}   "  id="blog">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.blog.create') }}" class="nav-link   {{ isActive(['admin.blog.create']) }}  ">ثبت بلاگ  </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.blog.index') }}" class="nav-link   {{ isActive(['admin.blog.index']) }}  ">مشاهده بلاگ</a>
                </li>
              </ul>
            </div>
          </li>




          <li class="nav-item  {{ isActive(['admin.page.create' , 'admin.page.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#page" role="button" aria-expanded="false" aria-controls="page">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">صفحات سایت </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.page.create' , 'admin.page.index'])}}   "  id="page">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.page.create') }}" class="nav-link   {{ isActive(['admin.page.create']) }}  ">ایجاد صفحه</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.page.index') }}" class="nav-link   {{ isActive(['admin.page.index']) }}  ">مشاهده صفحات سایت</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item  {{ isActive(['admin.setting.logo_management' , 'admin.setting.all_management' ,
           'admin.setting.txtdes_management' , 'admin.setting.finical', 'admin.setting.laws', 'admin.setting.getway_payment'
           , 'admin.setting.api'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#setting" role="button" aria-expanded="false" aria-controls="setting">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">تنظیمات سایت </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.setting.logo_management' , 'admin.setting.all_management'  , 'admin.setting.txtdes_management' ,
               'admin.setting.finical' , 'admin.setting.laws' , 'admin.setting.getway_payment'
               , 'admin.setting.api'])}}   "  id="setting">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.setting.logo_management') }}" class="nav-link   {{ isActive(['admin.setting.logo_management']) }}  ">مدیریت لوگو و هدر </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.all_management') }}" class="nav-link   {{ isActive(['admin.setting.all_management']) }}  "> تنظیمات سایت</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.txtdes_management') }}" class="nav-link   {{ isActive(['admin.setting.txtdes_management']) }}  ">   متن های پیش فرض </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.finical') }}" class="nav-link   {{ isActive(['admin.setting.finical']) }}  ">تنظیمات مالی</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.laws') }}" class="nav-link   {{ isActive(['admin.setting.laws']) }}  ">قوانین سایت</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.getway_payment') }}" class="nav-link   {{ isActive(['admin.setting.getway_payment']) }}  ">تنظیمات درگاه پرداخت</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.api') }}" class="nav-link   {{ isActive(['admin.setting.api']) }}  ">تنظیمات Api </a>
                </li>

              </ul>
            </div>
          </li>




          <li class="nav-item  {{ isActive(['admin.manegement.spotlites' , 'admin.manegement.comid_index' , 'admin.manegement.comid_edit'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#manegement" role="button" aria-expanded="false" aria-controls="manegement">
                <i class="link-icon" data-feather="list"></i>
                <span class="link-title">مدیریت ایندکس   </span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.manegement.spotlites' , 'admin.manegement.comid_index' , 'admin.manegement.comid_edit'])}}   "  id="manegement">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.manegement.spotlites') }}" class="nav-link   {{ isActive(['admin.manegement.spotlites']) }}  ">مدیریت اسپوتلایتها</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.manegement.comid_index' , ['first' ]) }}" class="nav-link   {{ isActive(['admin.manegement.comid_edit' , ['status'=>'first' , 'id'] ]) }}  "> امکانات اول </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.manegement.comid_index' , 'second') }}" class="nav-link   {{ isActive([ 'admin.manegement.comid_edit' , ['status'=>'second' , 'id'] ]) }}  "> امکانات دوم </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.manegement.comid_index' , 'coment') }}" class="nav-link   {{ isActive(['admin.manegement.comid_edit' , ['status'=>'coment' , 'id'] ]) }}  "> کامنت مشتریان  </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.manegement.comid_index' , 'mnglogos') }}" class="nav-link   {{ isActive(['admin.manegement.comid_edit' , ['status'=>'coment' , 'id'] ]) }}  "> مدیریت لوگو مشتریان  </a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item  {{ isActive(['admin.task.index' , 'admin.task.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#task" role="button" aria-expanded="false" aria-controls="task">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت رویدادها     </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.task.index' , 'admin.task.index'])}}   "  id="task">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.task.index') }}" class="nav-link   {{ isActive(['admin.task.index']) }}  ">  همه رویدادها    </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.task.index' , 'unread') }}" class="nav-link   {{ isActive(['admin.task.index']) }}  ">  بررسی نشده ها   </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item  {{ isActive(['admin.notification.settingsms.index' , 'admin.notification.list.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#notification" role="button" aria-expanded="false" aria-controls="notification">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">اطلاع رسانی   </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.notification.settingsms.index' , 'admin.notification.list.index'])}}   "  id="notification">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.notification.settingsms.index') }}" class="nav-link   {{ isActive(['admin.notification.settingsms.index']) }}  ">تنظیمات اطلاع رسانی</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.notification.list.index') }}" class="nav-link   {{ isActive(['admin.notification.list.index']) }}  "> مدیریت متنهای پیش فرض </a>
                </li>
              </ul>
            </div>
          </li>


          @endpermission

@include('admin.Eform.layouts.sidebar' )



@permission('fiinical')

          <li class="nav-item nav-category">مدیریت مالی  </li>

          <li class="nav-item  {{ isActive(['admin.wallet.index' , 'admin.wallet.create'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#wallet" role="button" aria-expanded="false" aria-controls="wallet">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت تراکنشهای کاربران</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.wallet.index' , 'admin.wallet.create'])}}   "  id="wallet">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.wallet.index') }}" class="nav-link   {{ isActive(['admin.wallet.index']) }}  ">مشاهده تراکنش های کاربران</a>
                </li>

                <li class="nav-item">
 <a href="{{ route('admin.wallet.create') }}" class="nav-link   {{ isActive(['admin.wallet.create']) }}  ">شارژ حساب کاربران</a>
                </li>
              </ul>
            </div>
          </li>

          @endpermission


          @permission('support')

          <li class="nav-item nav-category">پشتیبانی سیستم</li>


          <li class="nav-item  {{ isActive(['user.ticket.create' , 'user.ticket.index'])}}   ">
            <a class="nav-link" data-toggle="collapse" href="#ticket" role="button" aria-expanded="false" aria-controls="ticket">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت تیکتها   </span>
              @include('admin.layouts.table.origin_getstatus', [ 'route' => ''  ,'type_name' => 'count_read_ticket'   ,'number' => $count_ticket_unread_admin   ])
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['user.ticket.create' , 'user.ticket.index'])}}     "  id="ticket">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.ticket.index') }}" class="nav-link   {{ isActive(['user.ticket.index']) }}  "> مشاهده تیکت ها
    @include('admin.layouts.table.origin_getstatus', [ 'route' => ''  ,'type_name' => 'count_read_ticket'   ,'number' => $count_ticket_unread_admin   ])  </a>
</li>
              </ul>
            </div>
          </li>

          @endpermission
 --}}




      </ul>
    </div>
  </nav>

