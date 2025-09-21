
<div class="dlabnav follow-info">
	<div class="feature-box">
		<div class="wallet-box">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<rect x="0" y="0" width="24" height="24"></rect>
					<circle fill="#fff" opacity="0.3" cx="20.5" cy="12.5" r="1.5"></circle>
					<rect fill="#fff" opacity="0.3" transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) " x="3" y="3" width="18" height="7" rx="1"></rect>
					<path d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z" fill="#fff"></path>
				</g>
			</svg>
			<div class="ms-3">
				<h4 class="text-white mb-0 d-block">$2353.25</h4>
				<small>  موجودی قابل برداشت</small>
			</div>
		</div>
		<div class="d-flex justify-content-center align-items-center">
			<div class="item-1">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="40px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24"></polygon>
						<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#fff" fill-rule="nonzero" opacity="0.3"></path>
						<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#fff" fill-rule="nonzero"></path>
					</g>
				</svg>
				<h4 class="mb-0 text-white"><span class="counter">15</span> </h4>
				<small>کاربران آنلاین</small>
			</div>
			<div class="item-1">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="40px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24"></polygon>
						<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#fff" fill-rule="nonzero" opacity="0.3"></path>
						<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#fff" fill-rule="nonzero"></path>
					</g>
				</svg>
				<h4 class="mb-0 text-white"><span class="counter">2024</span>k</h4>
				<small>کل کاربران</small>
			</div>
		</div>
	</div>
	{{-- <span class="main-menu">Main Menu</span> --}}
	<div class="menu-scroll">
		<div class="dlabnav-scroll mm-active">
			<ul class="metismenu mm-show" id="menu">



        <li class="{{ isMmActive(['admin.dashboard']) }}">
					<a href="{{ route('admin.dashboard') }}" class="" aria-expanded="false">
						<i class="material-symbols-outlined">dashboard</i>
						<span class="nav-text">داشبورد</span>
					</a>
		</li>

{{--
        <li class=" {{ isMmActive(['admin.admin.create' , 'admin.admin.index','admin.admin.edit'])}} "  id="myli_admin"  onclick="setActive('admin')">
					<a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="material-symbols-outlined">apps_outage</i>
						<span class="nav-text">مدیریت ادمین ها</span>
					</a>
					<ul aria-expanded="false" id="myul_admin"  class="mm-collapse {{ isMmShow(['admin.admin.create' , 'admin.admin.index','admin.admin.edit'])}}"   onclick="setActive('admin')">
						<li><a href="{{ route('admin.admin.create') }}" class=" {{ isMmActive(['admin.admin.create' ])}} "   >ثبت ادمین</a></li>
						<li><a href="{{ route('admin.admin.index') }}"  class=" {{ isMmShow(['admin.admin.index','admin.admin.edit'])}}" >مشاهده ادمینها</a></li>
 					</ul>
		</li>

        <li class=" {{ isMmActive(['admin.permission.create' , 'admin.permission.index',
        'admin.permission.edit' ,    'admin.permission.appointment' , ])}} "  id="myli_permission"  onclick="setActive('permission')">
					<a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="material-symbols-outlined">apps_outage</i>
						<span class="nav-text">سطوح دسترسی </span>
					</a>
					<ul aria-expanded="false" id="myul_permission"  class="mm-collapse {{ isMmShow(['admin.permission.create' , 'admin.permission.index',
        'admin.permission.edit' ,    'admin.permission.appointment' , ])}}"   onclick="setActive('permission')">
						<li><a href="{{route('admin.permission.index')}}" class=" {{ isMmActive(['admin.permission.index','admin.permission.edit',    'admin.permission.appointment' , ])}} " >مدیریت نقش ها  </a></li>
  					</ul>
		</li> --}}




        @permission('foorm')




        <li class="  {{ isActive(['admin.user.create' , 'admin.user.index'])}} "  id="myli_user"  onclick="setActive('user')">
            <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">apps_outage</i>
                <span class="nav-text">مدیریت کاربران</span>
            </a>
            <ul aria-expanded="false" id="myul_user"  class="mm-collapse {{ isMmShow(['admin.user.create' , 'admin.user.index'])}}"   onclick="setActive('user')">
                <li><a href="{{ route('admin.user.create') }}" class=" {{ isMmActive(['admin.user.create' ])}} " >ثبت کاربر </a></li>
                <li><a href="{{ route('admin.user.index') }}"  class=" {{ isMmShow(['admin.user.index','admin.user.edit'])}}" >مشاهده کاربران</a></li>
             </ul>
        </li>


        <li class=" {{ isMmActive(['admin.faq.create' , 'admin.faq.index','admin.faq.edit'])}} "  id="myli_faq"  onclick="setActive('faq')">
            <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">apps_outage</i>
                <span class="nav-text">سوالات متداول</span>
            </a>
            <ul aria-expanded="false" id="myul_faq"  class="mm-collapse {{ isMmShow(['admin.faq.create' , 'admin.faq.index','admin.faq.edit'])}}"   onclick="setActive('faq')">
                <li><a href="{{ route('admin.faq.create') }}" class="{{ isMmActive(['admin.faq.create']) }}  ">ایجاد سوال</a></li>
                <li><a href="{{ route('admin.faq.index') }}" class="{{ isMmActive(['admin.faq.index']) }}  ">مشاهده سوالات متداول</a></li>
            </ul>
        </li>





        <li class=" {{ isMmActive(['admin.setting.logo_management' , 'admin.setting.all_management' ,
        'admin.setting.txtdes_management' , 'admin.setting.finical', 'admin.setting.laws', 'admin.setting.getway_payment'
        , 'admin.setting.api'])}} "  id="myli_setting"  onclick="setActive('setting')">
            <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">apps_outage</i>
                <span class="nav-text">تنظیمات سایت</span>
            </a>
            <ul aria-expanded="false" id="myul_setting"  class="mm-collapse {{ isMmShow(['admin.setting.logo_management' , 'admin.setting.all_management' ,
        'admin.setting.txtdes_management' , 'admin.setting.finical', 'admin.setting.laws', 'admin.setting.getway_payment'
        , 'admin.setting.api'])}}"   onclick="setActive('setting')">
                <li><a href="{{ route('admin.setting.logo_management') }}" class="{{ isMmActive(['admin.setting.logo_management']) }}  ">مدیریت لوگو و هدر</a></li>
                <li><a href="{{ route('admin.setting.all_management') }}" class="{{ isMmActive(['admin.setting.all_management']) }}  ">تنظیمات سایت</a></li>
                <li><a href="{{ route('admin.setting.txtdes_management') }}" class="{{ isMmActive(['admin.setting.txtdes_management']) }}  ">متن های پیش فرض</a></li>
                <li><a href="{{ route('admin.setting.finical') }}" class="{{ isMmActive(['admin.setting.finical']) }}  ">تنظیمات مالی</a></li>
                <li><a href="{{ route('admin.setting.laws') }}" class="{{ isMmActive(['admin.setting.laws']) }}  ">قوانین سایت</a></li>
                <li><a href="{{ route('admin.setting.getway_payment') }}" class="{{ isMmActive(['admin.setting.getway_payment']) }}  ">تنظیمات درگاه پرداخت</a></li>
                <li><a href="{{ route('admin.setting.api') }}" class="{{ isMmActive(['admin.setting.api']) }}  ">تنظیمات API</a></li>
            </ul>
        </li>




        <li class=" {{ isMmActive(['admin.manegement.spotlites' , 'admin.manegement.comid_index' , 'admin.manegement.comid_edit'])}} "  id="myli_manegement"  onclick="setActive('manegement')">
            <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">apps_outage</i>
                <span class="nav-text">مدیریت ایندکس   </span>
            </a>
            <ul aria-expanded="false" id="myul_manegement"
             class="mm-collapse {{ isMmShow(['admin.manegement.spotlites' , 'admin.manegement.comid_index' , 'admin.manegement.comid_edit'])}}"   onclick="setActive('manegement')">
             <li><a href="{{ route('admin.manegement.spotlites') }}" class="{{ isMmActive(['admin.manegement.spotlites']) }}  ">مدیریت اسپوتلایتها</a></li>
                <li><a href="{{ route('admin.manegement.comid_index' , ['first' ]) }}" class="{{ isMmActive(['admin.manegement.comid_edit' , ['status'=>'first' , 'id'] ]) }}  ">امکانات اول</a></li>
                <li><a href="{{ route('admin.manegement.comid_index' , ['second' ]) }}" class="{{ isMmActive(['admin.manegement.comid_edit' , ['status'=>'second' , 'id'] ]) }}  ">امکانات دوم</a></li>
                <li><a href="{{ route('admin.manegement.comid_index' , ['coment' ]) }}" class="{{ isMmActive(['admin.manegement.comid_edit' , ['status'=>'coment' , 'id'] ]) }}  ">کامنت مشتریان</a></li>
                <li><a href="{{ route('admin.manegement.comid_index' , ['mnglogos' ]) }}" class="{{ isMmActive(['admin.manegement.comid_edit' , ['status'=>'mnglogos' , 'id'] ]) }}  ">مدیریت لوگو مشتریان</a></li>
            </ul>
        </li>



{{--
        <li class=" {{ isMmActive(['admin.task.index' , 'admin.task.index','admin.task.edit'])}} "  id="myli_task"  onclick="setActive('task')">
            <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">apps_outage</i>
                <span class="nav-text">مدیریت رویدادها</span>
            </a>
            <ul aria-expanded="false" id="myul_task"  class="mm-collapse {{ isMmShow(['admin.task.index' , 'admin.task.index','admin.task.edit'])}}"   onclick="setActive('task')">
                <li><a href="{{ route('admin.task.index') }}" class="{{ isMmActive(['admin.task.index']) }}  ">همه رویدادها</a></li>
                <li><a href="{{ route('admin.task.index' , 'unread') }}" class="{{ isMmActive(['admin.task.index']) }}  ">بررسی نشده ها</a></li>
            </ul>
        </li>
 --}}







{{--
        <li class=" {{ isMmActive(['admin.notification.settingsms.index' , 'admin.notification.list.index'])}} "  id="myli_notification"  onclick="setActive('notification')">
            <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">apps_outage</i>
                <span class="nav-text">اطلاع رسانی</span>
            </a>
            <ul aria-expanded="false" id="myul_notification"  class="mm-collapse {{ isMmShow(['admin.notification.settingsms.index' , 'admin.notification.list.index'])}}"   onclick="setActive('notification')">
                <li><a href="{{ route('admin.notification.settingsms.index') }}" class="{{ isMmActive(['admin.notification.settingsms.index']) }}  ">تنظیمات اطلاع رسانی</a></li>
                <li><a href="{{ route('admin.notification.list.index') }}" class="{{ isMmActive(['admin.notification.list.index']) }}  ">مدیریت متنهای پیش فرض</a></li>
            </ul>
        </li>
 --}}




{{--
                <li class=" {{ isMmActive(['admin.demoo.create' , 'admin.demoo.index','admin.demoo.edit'])}} "  id="myli_demoo"  onclick="setActive('demoo')">
                    <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <i class="material-symbols-outlined">apps_outage</i>
                        <span class="nav-text">EEEEE</span>
                    </a>
                    <ul aria-expanded="false" id="myul_demoo"  class="mm-collapse {{ isMmShow(['admin.demoo.create' , 'admin.demoo.index','admin.demoo.edit'])}}"   onclick="setActive('demoo')">
                        <li><a href="{{ route('admin.demoo.create') }}" class="{{ isMmActive(['admin.demoo.create']) }}  ">BBBB</a></li>
                        <li><a href="{{ route('admin.demoo.index') }}" class="{{ isMmActive(['admin.demoo.index']) }}  ">GGGGG</a></li>
                    </ul>
                </li> --}}








        @endpermission


        @permission('content')

        <li class=" {{ isMmActive(['admin.blogsub.create' , 'admin.blogsub.index','admin.blogsub.edit'])}} "  id="myli_blogsub"  onclick="setActive('blogsub')">
            <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">apps_outage</i>
                <span class="nav-text">دسته بندی بلاگ </span>
            </a>
            <ul aria-expanded="false" id="myul_blogsub"  class="mm-collapse {{ isMmShow(['admin.blogsub.create' , 'admin.blogsub.index','admin.blogsub.edit'])}}"   onclick="setActive('blogsub')">
                <li><a href="{{ route('admin.blogsub.create') }}" class="{{ isMmActive(['admin.blogsub.create']) }}  ">ثبت دسته بندی بلاگ  </a></li>
                <li><a href="{{ route('admin.blogsub.index') }}" class="{{ isMmActive(['admin.blogsub.index']) }}  ">مشاهده دسته بندی بلاگ</a></li>
            </ul>
        </li>

        <li class=" {{ isMmActive(['admin.blog.create' , 'admin.blog.index','admin.blog.edit'])}} "  id="myli_blog"  onclick="setActive('blog')">
            <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">apps_outage</i>
                <span class="nav-text">  بلاگ </span>
            </a>
            <ul aria-expanded="false" id="myul_blog"  class="mm-collapse {{ isMmShow(['admin.blog.create' , 'admin.blog.index','admin.blog.edit'])}}"   onclick="setActive('blog')">
                <li><a href="{{ route('admin.blog.create') }}" class="{{ isMmActive(['admin.blog.create']) }}  ">ثبت بلاگ  </a></li>
                <li><a href="{{ route('admin.blog.index') }}" class="{{ isMmActive(['admin.blog.index']) }}  ">مشاهده بلاگ</a></li>
            </ul>
        </li>



        <li class=" {{ isMmActive(['admin.page.create' , 'admin.page.index','admin.page.edit'])}} "  id="myli_page"  onclick="setActive('page')">
            <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">apps_outage</i>
                <span class="nav-text">مدیریت صفحات</span>
            </a>
            <ul aria-expanded="false" id="myul_page"  class="mm-collapse {{ isMmShow(['admin.page.create' , 'admin.page.index','admin.page.edit'])}}"   onclick="setActive('page')">
                <li><a href="{{ route('admin.page.create') }}" class="{{ isMmActive(['admin.page.create']) }}  ">ایجاد صفحه</a></li>
                <li><a href="{{ route('admin.page.index') }}" class="{{ isMmActive(['admin.page.index']) }}  ">مشاهده صفحات سایت</a></li>
            </ul>
        </li>


        @endpermission


        @permission('fiinical')

        <li class=" {{ isMmActive(['admin.wallet.create' , 'admin.wallet.index','admin.wallet.edit'])}} "  id="myli_wallet"  onclick="setActive('wallet')">
            <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">apps_outage</i>
                <span class="nav-text">مدیریت تراکنشها</span>
            </a>
            <ul aria-expanded="false" id="myul_wallet"  class="mm-collapse {{ isMmShow(['admin.wallet.create' , 'admin.wallet.index','admin.wallet.edit'])}}"   onclick="setActive('wallet')">
                {{-- <li><a href="{{ route('admin.wallet.create') }}" class="{{ isMmActive(['admin.wallet.create']) }}  ">مشاهده تراکنش ها </a></li> --}}
                <li><a href="{{ route('admin.wallet.index') }}" class="{{ isMmActive(['admin.wallet.index']) }}  "> تراکنش کیف پول کاربران </a></li>
                <li><a href="{{ route('admin.currency_transaction.index') }}" class="{{ isMmActive(['admin.wallet.index']) }}  "> تراکنش  معاملات ارزی </a></li>
            </ul>
        </li>

        @endpermission

        @permission('support')

{{--
        <li class=" {{ isMmActive(['admin.ticket.index' , 'admin.ticket.index','admin.ticket.edit'])}} "  id="myli_ticket"  onclick="setActive('ticket')">
            <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">apps_outage</i>
                <span class="nav-text">مدیریت تیکتها</span>
            </a>
            <ul aria-expanded="false" id="myul_ticket"  class="mm-collapse {{ isMmShow(['admin.ticket.index' , 'admin.ticket.index','admin.ticket.edit'])}}"   onclick="setActive('ticket')">
                <li><a href="{{ route('admin.ticket.index') }}" class="{{ isMmActive(['admin.ticket.index']) }}  "> مشاهده تیکت ها
                    @include('admin.layouts.table.origin_getstatus', [ 'route' => ''  ,'type_name' => 'count_read_ticket'   ,'number' => $count_ticket_unread_admin   ])    </a></li>
            </ul>
        </li>

 --}}

        @endpermission




        {{-- @include('admin.Eform.layouts.sidebar' ) --}}





            <script>
            function  setActive(n){
            var myli = document.getElementById("myli_"+n);
            myli.classList.toggle('mm-active');
            const items = document.querySelectorAll('#myli_'+n+' ul');
            if(myli.classList!=null){
                items.forEach(item => item.classList.toggle('mm-show'));
            }
            }
            </script>



{{-- <li class="mm-active">
    <a class="has-arrow " href="javascript:void(0);" aria-expanded="true">
        <i class="material-symbols-outlined">apps_outage</i>
        <span class="nav-text">Apps</span>
    </a>
    <ul aria-expanded="false" class="mm-collapse mm-show">
        <li><a href="/Jiade/AppProfile">Profile</a></li>
        <li><a href="/Jiade/EditProfile">Edit Profile</a></li>
        <li><a href="/Jiade/PostDetails">Post Details</a></li>
        <li>
            <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Email</a>
            <ul aria-expanded="false" class="mm-collapse">
                <li><a href="/Jiade/EmailCompose">Compose</a></li>
                <li><a href="/Jiade/EmailInbox">Inbox</a></li>
                <li><a href="/Jiade/EmailRead">Read</a></li>
            </ul>
        </li>
        <li><a href="/Jiade/AppCalender">Calendar</a></li>
        <li>
            <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Shop</a>
            <ul aria-expanded="false" class="mm-collapse">
                <li><a href="/Jiade/EcomProductGrid">Product Grid</a></li>
                <li><a href="/Jiade/EcomProductList">Product List</a></li>
                <li><a href="/Jiade/EcomProductDetail">Product Details</a></li>
                <li><a href="/Jiade/EcomProductOrder">Order</a></li>
                <li><a href="/Jiade/EcomCheckout">Checkout</a></li>
                <li><a href="/Jiade/EcomInvoice">Invoice</a></li>
                <li><a href="/Jiade/EcomCustomers">Customers</a></li>
            </ul>
        </li>
    </ul>
</li>





                <li>
					<a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
						<i class="material-symbols-outlined">monitoring</i>
						<span class="nav-text">Trading</span>
					</a>
					<ul aria-expanded="false" class="mm-collapse">
						<li><a href="/Jiade/TradingMarket">Market</a></li>
						<li><a href="/Jiade/ICOListing">Ico Listing</a></li>
						<li><a href="/Jiade/P2P">P2P</a></li>
						<li><a href="/Jiade/Future">Future</a></li>
					</ul>
				</li> --}}

			</ul>
			<div class="support-box">
				<div class="media">
					<span>
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="46" viewBox="0 0 40 46">
							<image id="headphones_1_" data-name="headphones (1)" width="40" height="46" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAuCAYAAABap1twAAAD90lEQVRYhdWZa4hVVRTHf3fUbOjJkGaSHzITShSitJjsTRQZZga9MSGoDxYmfesBamBp9GWo+VDSe7KXlRWEhUVRNllQiCVMhGXJaAk1Fo1G8pc9rBOL3b7nPs493ukPG9Z+rf2/a5+91tr7ViRRABOAM4DpwFTgRFP1K7ADGAC2A4PNLjG2yXnXANcD3cCUGmMDuX7gNSt/N7RSsGCd5UhJKyTtVPPYLWmNpOPqXbfeLV4ErAYmJfrCdm4Bvgf2ht8MdAGnArOBkxJzfgPuB3qLWnCcpHUJe30r6R5JJ9RhhWMlLZH0VULP29ZfdX6e4kmStkUKv5N0ixszxRbvk7RZ0nYr/ZJelrRM0jQ3foGkrZHOH6IxdRGcIGkwUtTj+hcbkXqxQ9Kdbv7D0bw/JE1thOBApGCR67s3h9RBK9XQF1nTY4+kzphLR+KzfBM4zdUvB55z9U4nBxfypLmd4A8nWzkduBp4Atjlxp8crXOOq08E3q91SG6IftXNCeuOkfSgpKUm1zokHZLuktQrqSvRf2W05tK8LR52A3sb8JFFy8qIZGeK4H1uwK7DSC4r/tA9liLorXddGwheHFlxnCfoT9RgG8ilrHi73Cm+zZ2bnprhpzw86jSH8DoSi4+3ONplHTOBbW0iGNzQTyYfAKYFC17gyO1vI7mAn4EfTR4PXNhhmUWGDe3j9i8+cHIlS7dCJDgTWAP82V5+Iyldj2Xjy4um/KUjFYtHFbI7yY3AKY7YMPAF8MlhIns2cB5wlGsLicjTwTnenZMerZc0tmTn/EzO+g+ELZ6b88sWAhtLtFwfcGtO/6zYzWwGHgHWubZLgEtLIDcLuMnV37C1fU44FN+LXwQeN3kfcIfJ84BNLSY4z8mvA9eavAC4LOuIT/FEJ3/j5DJO+5gqa032g/IWPsbJ/7SOV1Ln0U6u+EGj3g+ORoL/Pwse4ere5fzu5GZfwfLgdQ5V4TBCcL+re6ft76xlY3YVDiN3kvlReHlJ0gtR21UlhLg5ibAah7212eCNOfHw8xLj8Fs56wY8lR2SK4D3Etv4qYW6shCeR97N0a04Yb3IvoFA/LPkW0l1zLT5Ye5HwNcNzA33ovOB3cAyYIa1r2zVVvUltufVJvSE1G6f09HdCnKv5HxD7zSgp1vSkJu7SQ28UVfDWcCXrm+t3WeXuLaQQu2JkoMMBy2LDnrmu3bZ5emXotZ7yLsE176qxunMwwFJ52a6ioY6Hw2GnfxXk/rW20Nof9ZQdIvDyfvY1Vcb0eWu7Xn7e6KSmF+xT2KneYyB/wwoSDDgQ3MvKWwpGjJbkc2E9DyQjBHuN9WI141WviyE21n47y4gWO7Zwpk4cAiPK9af4ZZaXAAAAABJRU5ErkJggg=="></image>
						</svg>
					</span>

				</div>
				<div class="info">
					<p>Jiade Crypto Trading UI Template</p>
					<a href="javascript:void(0);" class="btn bg-white text-black w-75 btn-sm">Supports</a>
				</div>
			</div>
			<div class="copyright">
				<p><strong>Jiade Crypto Trading UI Template</strong> © <span class="current-year">2024</span> All Rights Reserved</p>
				<p class="fs-12">Made with <span class="heart"></span> by DexignLab</p>
			</div>
		</div>
	</div>
</div>
 