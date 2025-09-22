  @component('admin.layouts.content', [
      'title' => 'پروفایل کاربر ',
      'tabTitle' => ' پروفایل کاربر',
      'breadcrumb' => [['title' => 'مشاهده کاربران', 'url' => route('admin.user.index')], ['title' => 'پروفایل کاربر ',
      'class' => 'active']],
      ])



<div class="profile-page tx-13">


    {{-- @include('card.profile.header', [ 'guard' => 'admin'  ,  $admin ]) --}}



      <div class="row profile-body">

          <div class="col-md-4 col-xl-3 left-wrapper">
            @include('card.profile.sidebar', [ 'guard' => 'admin'  ,  $admin ])
          </div>


          <div class="col-md-8  col-xl-9  ">




              <div class="card card-default">
                  <div class="card-header card-header-border-bottom">
                      <h4>پروفایل کاربر </h4>
                  </div>
                  <div class="card-body">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link  @if(($tab_active=='profile')||($tab_active==Null))   active @endif" id="icon-home-tab" data-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="@if (empty(Session::get('err')))  true @else false  @endif"> <i data-feather="edit-2"></i>ویرایش
                                  پروفایل </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link @if (Session::get('err') == '1')  active @endif " id="icon-secret-tab" data-toggle="tab" href="#icon-secret" role="tab" aria-controls="icon-secret" aria-selected="@if (Session::get('err') == '1')   true @else false  @endif"> <i data-feather="lock"></i> تنظیمات
                                  رمزعبور</a>
                          </li>





    <li class="nav-item">
    <a class="nav-link @if($tab_active=='document')  active @endif " id="icon-document-tab" data-toggle="tab" href="#icon-document" role="tab" aria-controls="icon-document" aria-selected="@if(Session::get('err')=='document')   true @else false  @endif"> <i data-feather="file-text"></i> مدارک هویتی</a>
    </li>
 



                        <li class="nav-item">
                            <a class="nav-link @if (Session::get('err') == '9')  active @endif " id="icon-histore-tab" data-toggle="tab" href="#icon-histore" role="tab" aria-controls="icon-histore" aria-selected="@if (Session::get('err') == '1')   true @else false  @endif"> <i data-feather="clock"></i>
                                 تاریخچه ورود</a>
                        </li>

                      </ul>


                      <div class="tab-content" id="myTabContent2">

                          <div class="tab-pane pt-3 fade   @if(($tab_active=='profile')||($tab_active==Null))  show active @endif" id="icon-home" role="tabpanel"
                              aria-labelledby="icon-home-tab">

                              @include('card.profile.profile', [ 'guard' => 'admin'  ,  $admin  , 'route' => route('admin.user.update', $admin) ])


                          </div>

                          <div class="tab-pane pt-3 fade  @if (Session::get('err') == '1') show active @endif" id="icon-secret" role="tabpanel"
                              aria-labelledby="icon-secret-tab">

                              @include('card.profile.secret', [ 'guard' => 'admin'  ,  $admin  , 'route' => route('admin.user.secret', $admin) ])

                          </div>








  <div class="tab-pane pt-3 fade  @if($tab_active=='document') show active @endif" id="icon-document" role="tabpanel" aria-labelledby="icon-document-tab">


@include('card.authentication.verify_file', [  'authentication' =>  $admin->authentication  ,  'guard' => 'admin' ,
$myname = 'مدارک هویتی'  , 'file_verify' => $admin->authentication->document_verify ,
'file' => $admin->authentication->document , 'type' => 'document' ])


  </div>







                      <div class="tab-pane pt-3 fade  @if (Session::get('err') == '9') show active @endif" id="icon-histore" role="tabpanel"
                      aria-labelledby="icon-histore-tab">

                      @include('card.profile.loginhistory', [ 'guard' => 'admin'  ,  $admin ])

                  </div>






                  </div>
              </div>
          </div>

      </div>

  </div>








@php
Session::forget('errus')
@endphp

@endcomponent
