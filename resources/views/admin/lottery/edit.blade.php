  @component('admin.layouts.content', [
      'title' => 'پروفایل کاربر ',
      'tabTitle' => ' پروفایل کاربر',
      'breadcrumb' => [['title' => 'مشاهده کاربران', 'url' => route('admin.user.index')], ['title' => 'پروفایل کاربر ',
      'class' => 'active']],
      ])



<div class="profile-page tx-13">



      <div class="row profile-body">
          <!-- left wrapper start -->
          <div class="col-md-2 col-xl-2 left-wrapper">

          </div>


          <div class="col-md-8  col-xl-8  ">



            <div class="aside-body">
                <ul class="list-group">



                 <li class="list-group-item"> <i data-feather="user"></i> نام و نام خانوادگی   :  {{$admin->fname}} </li>
                 <li class="list-group-item"> <i data-feather="user"></i>نام پدر   :  {{$admin->father}} </li>
                 <li class="list-group-item"> <i data-feather="edit"></i>  کدملی   :  {{$admin->codmelli}} </li>
                 <li class="list-group-item"> <i data-feather="phone"></i>  شماره همراه   :  {{$admin->tell}} </li>

                 <li class="list-group-item"> <i data-feather="calendar"></i>  تاریخ ثبت نام :    {{ date_frmat($admin->created_at) }}</li>

                </ul>
            </div>
      </div>
      <div class="col-md-2 col-xl-2 left-wrapper">

      </div>
      </div>
  </div>








@php
Session::forget('errus')
@endphp

@endcomponent
