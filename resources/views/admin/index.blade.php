@component('admin.layouts.content', [
    'title' => 'داشبورد',
    'tabTitle' => 'داشبورد',
    'breadcrumb' => [['title' => 'داشبورد', 'url' => route('admin.dashboard')]],
])


@slot('style')
<link rel="stylesheet" href="{{ asset('tem_jid_rtl/myrtl_files/step.css') }}">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        canvas {
            max-width: 600px;
            max-height: 400px;
        }
    </style>
@endslot


    <style>
        .img-w-h {
            width: 30px;
            height: 30px;
        }

        .prs-w-30 {
            width: 30%;
        }

        .hei60 {
            height: 60px;
        }

        .dropdown-menu {
            z-index: 100 !important;
        }

        .img-w-h-cur {
    width: 45px;
    height: 45px;
    border-radius: 50%;
}

.img-w-h-cur-35 {
    width: 35px;
    height: 35px;
    border-radius: 50%;
}
.img-w-h-cur_i {
    width: 70px;
    height: 70px;
    border-radius: 50%;
}
    </style>

{{--
<div class="row">
		<div class="col-md-8"></div>
		<div class="col-md-4">
            <div class="card">
            <div class="card-header">
                <h4 class="card-title"> موجودی کیف پول </h4>
            </div>
            <div class="card-body tab-content pt-0 pb-sm-0 pb-3 ">

                <div class="tab-pane fade show active" id="pills-Yesterday" role="tabpanel" aria-labelledby="pills-yesterday-tab">
                    <div class="table-responsive">
                        <table class="table portfolio-table">
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="font-w600 text-dark">  ارز  </span>
                                    </td>
                                    <td>
                                        <span class="font-w600  text-dark">تتر
                                            <img  src="/upload/images/currencies/17362546126001566.png" class="img-w-h-cur-35" />
                                        </span>
                                    </td>
                                 </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600 text-dark">مقدار کل موجودی</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-primary btn-md font-w600  text-light">+$5,553</span>
                                    </td>
                                 </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600 text-dark">مقدار در سفارش</span>
                                    </td>
                                    <td>
                                        <span class="font-w600  text-success">+$5,553</span>
                                    </td>
                                 </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600 text-dark"> مقدار در دسترس </span>
                                    </td>
                                    <td>
                                        <span class="font-w600  text-success">+$5,553</span>
                                    </td>
                                 </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600 text-dark"> ارزش فعلی     </span>
                                    </td>
                                    <td>
                                        <span class="font-w600  text-success">+$5,553</span>
                                    </td>
                                 </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600 text-dark">عملیات</span>
                                    </td>
                                    <td>
                                        <span class="font-w600  text-success">+$5,553</span>
                                    </td>
                                 </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        </div>
		<div class="col-md-12">



			<div class="panel panel-transparent">
				<div class="panel-heading">
					<span class="panel-title">خرید آدرس مشتری در چه مرحله ای است!</span>
				</div>
				<div class="panel-body">

	<ul class="list-unstyled multi-steps">

<li  class="is-actived"   >در انتظار خرید آدرس پستی</li>
<li  class="is-active"   >آدرس پستی باموفقیت خریداری شد</li>
<li  class="is-actived"   >در انتظار خرید آدرس پستی</li>
<li  class="is-actived"   >آدرس پستی باموفقیت خریداری شد</li>





											</ul>


				</div>
			</div>


		</div>
</div>





    <div class="row">
    <div class="col-xl-12">
						<div class="coin-warpper d-flex align-items-center justify-content-between flex-wrap">
							<div>
								<ul class="nav nav-pills" role="tablist">
									<li class=" nav-item" role="presentation">
										<button class="nav-link bitcoin ms-0 active" id="nav-bitcoin-tab" data-bs-toggle="tab" data-bs-target="#nav-bitcoin" type="button" aria-selected="true" role="tab"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M16 9.50011C15.9993 8.67201 15.328 8.00092 14.5001 8H10V11H14.5001C15.328 10.9993 15.9993 10.328 16 9.50011Z" fill="#FFAB2D"></path>
												<path d="M10 16H14.5001C15.3285 16 16 15.3285 16 14.5001C16 13.6715 15.3285 13 14.5001 13H10V16Z" fill="#FFAB2D"></path>
												<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM18.0001 14.5713C17.9978 16.4641 16.4641 17.9978 14.5716 17.9999V18.8571C14.5716 19.3305 14.1876 19.7143 13.7144 19.7143C13.2409 19.7143 12.8572 19.3305 12.8572 18.8571V17.9999H11.1431V18.8571C11.1431 19.3305 10.7591 19.7143 10.2859 19.7143C9.8124 19.7143 9.42866 19.3305 9.42866 18.8571V17.9999H6.85733C6.38387 17.9999 6.00013 17.6161 6.00013 17.1429C6.00013 16.6695 6.38387 16.2857 6.85733 16.2857H7.71427V7.71427H6.85733C6.38387 7.71427 6.00013 7.33053 6.00013 6.85707C6.00013 6.38361 6.38387 5.99987 6.85733 5.99987H9.42866V5.14293C9.42866 4.66947 9.8124 4.28573 10.2859 4.28573C10.7593 4.28573 11.1431 4.66947 11.1431 5.14293V5.99987H12.8572V5.14293C12.8572 4.66947 13.2409 4.28573 13.7144 4.28573C14.1879 4.28573 14.5716 4.66947 14.5716 5.14293V5.99987C16.4571 5.99202 17.992 7.5139 18.0001 9.39937C18.0043 10.3978 17.5714 11.3481 16.8152 12C17.5643 12.6445 17.9967 13.5828 18.0001 14.5713Z" fill="#FFAB2D"></path>
											</svg>
											Bitcoin
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link etherum" id="nav-etherum-tab" data-bs-toggle="tab" data-bs-target="#nav-etherum" type="button" aria-selected="false" role="tab" tabindex="-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12.3801 13.8734C12.136 13.9546 11.864 13.9546 11.6199 13.8734L9 13L12 18L15 13L12.3801 13.8734Z" fill="#00ADA3"></path>
												<path d="M12 12L15 10.8001L12 6L9 10.8001L12 12Z" fill="#00ADA3"></path>
												<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9927 5.37574 18.6243 0.00732425 12 0ZM17.0524 11.5263L12.7667 20.0977C12.5551 20.5212 12.04 20.6928 11.6168 20.4812C11.4507 20.3983 11.3162 20.2638 11.2333 20.0977L6.94757 11.5263C6.81443 11.2589 6.8296 10.9416 6.9876 10.6882L11.2733 3.83111C11.5582 3.42984 12.114 3.33515 12.5153 3.62001C12.5972 3.67808 12.6686 3.74923 12.7267 3.83111L17.0121 10.6882C17.1704 10.9416 17.1856 11.2589 17.0524 11.5263Z" fill="#00ADA3"></path>
											</svg>
											Ethereum
										</button>

									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link dash" id="nav-dash-tab" data-bs-toggle="tab" data-bs-target="#nav-dash" type="button" aria-selected="false" role="tab" tabindex="-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9927 5.37574 18.6243 0.00732425 12 0V0ZM7.04462 11.1428H10.4732C10.9466 11.1428 11.3304 11.5265 11.3304 12C11.3304 12.4735 10.9466 12.8572 10.4732 12.8572H7.04462C6.57116 12.8572 6.18742 12.4735 6.18742 12C6.18742 11.5265 6.57142 11.1428 7.04462 11.1428ZM17.7624 9.92331L16.7315 15.0812C16.4887 16.2784 15.4374 17.1401 14.2158 17.1429H7.04462C6.57116 17.1429 6.18742 16.7592 6.18742 16.2857C6.18742 15.8123 6.57142 15.4285 7.04462 15.4285H14.2158C14.621 15.4275 14.9697 15.1418 15.0503 14.7448L16.0814 9.58692C16.173 9.12654 15.8743 8.67924 15.4141 8.58768C15.3595 8.57696 15.304 8.57147 15.2486 8.57147H8.75902C8.28556 8.57147 7.90182 8.18773 7.90182 7.71427C7.90182 7.24081 8.28556 6.85707 8.75902 6.85707H15.2486C16.6648 6.85759 17.8123 8.00567 17.8121 9.42186C17.8121 9.59006 17.7953 9.75799 17.7624 9.92331V9.92331Z" fill="#3693FF"></path>
											</svg>
											Dash
										</button>

									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link litcoin" id="nav-litcoin-tab" data-bs-toggle="tab" data-bs-target="#nav-litcoin" type="button" aria-selected="false" role="tab" tabindex="-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM16.2857 18.0001H9.42866C8.9552 18.0001 8.57147 17.6164 8.57147 17.1429C8.57147 17.1024 8.57434 17.0618 8.5801 17.0216L9.22515 12.5054L7.92222 12.8313C7.85421 12.8486 7.78437 12.8572 7.71427 12.8572C7.24081 12.8567 6.85759 12.4727 6.85785 11.9992C6.85838 11.6063 7.12571 11.2642 7.50683 11.1684L9.48674 10.6735L10.2942 5.0213C10.3612 4.55254 10.7954 4.22714 11.2642 4.2941C11.7329 4.36107 12.0583 4.79529 11.9914 5.26404L11.2825 10.2247L14.3636 9.4543C14.8222 9.33737 15.2886 9.61439 15.4053 10.0729C15.5222 10.5315 15.2452 10.9979 14.7866 11.1148C14.784 11.1153 14.7814 11.1161 14.7788 11.1166L11.0204 12.0562L10.4164 16.2857H16.2857C16.7592 16.2857 17.1429 16.6695 17.1429 17.1429C17.1429 17.6161 16.7592 18.0001 16.2857 18.0001Z" fill="#374C98"></path>
											</svg>
											Litecoin
										</button>

									</li>
									<li class="nav-ite">
										<button type="button" class="nav-link litcoin mt-0" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-selected="false" tabindex="-1" role="tab">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" fill="var(--text-dark)"></path>
												<path d="M4 14C5.10456 14 5.99999 13.1046 5.99999 12C5.99999 10.8954 5.10456 10 4 10C2.89543 10 2 10.8954 2 12C2 13.1046 2.89543 14 4 14Z" fill="var(--text-dark)"></path>
												<path d="M20 14C21.1046 14 22 13.1046 22 12C22 10.8954 21.1046 10 20 10C18.8954 10 18 10.8954 18 12C18 13.1046 18.8954 14 20 14Z" fill="var(--text-dark)"></path>
											</svg>
											More Crypto
										  </button>
									</li>

								</ul>
							</div>

						</div>
					</div>
                    <div class="row">
							<div class="col-xl-8 col-lg-8">
								<div class="card">

									<div class="card-body pt-0 px-0">
										<div class="previews-info-list">
											<div class="pre-icon">
												<div class="ms-2">
													<h6 class="mb-0">  ارزش کل موجودی‌ها  </h6>
													<span>March</span>
												</div>
											</div>
											<div class="pre-icon">
												<div class="ms-2">
													<h6 class="mb-0">    موجودی در دسترس </h6>
													<span>March</span>
												</div>
											</div>
											<div class="pre-icon">
												<div class="ms-2">
													<h6 class="mb-0">موجودی در سفارش</h6>
													<span>March</span>
												</div>
											</div>
										</div>


                                <div class="table-responsive">
                                    <table class="table table-hover   table table-bordered verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ارز</th>
                                                <th>مقدار کل موجودی</th>
                                                <th>مقدار در سفارش</th>
                                                <th>مقدار در دسترس</th>
                                                <th>ارزش فعلی</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>Kolor Tea Shirt For Man</td>
                                                <td><span class="badge badge-primary">Sale</span>
                                                </td>
                                                <td>January 22</td>
                                                <td>January 22</td>
                                                <td class="color-primary">$21.56</td>
                                                <td>

                    <div class="row">
                        <div class="col-6 px-sm-3 px-2">
                            <a href="javascript:void(0);"
                                class="btn d-flex  btn-success justify-content-between align-items-center w-100">
                                BUY
                                <svg width="16" height="16" viewBox="0 0 21 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.9638 11.5104L16.9721 14.9391L3.78954 1.7565C3.22815 1.19511 2.31799 1.19511 1.75661 1.7565C1.19522 2.31789 1.19522 3.22805 1.75661 3.78943L14.9392 16.972L11.5105 16.9637L11.5105 16.9637C10.7166 16.9619 10.0715 17.6039 10.0696 18.3978C10.0677 19.1919 10.7099 19.8369 11.5036 19.8388L11.5049 19.3388L11.5036 19.8388L18.3976 19.8554L18.4146 19.8555L18.4159 19.8555C18.418 19.8555 18.42 19.8555 18.422 19.8555C19.2131 19.8533 19.8528 19.2114 19.8555 18.4231C19.8556 18.4196 19.8556 18.4158 19.8556 18.4117L19.8389 11.5035L19.8389 11.5035C19.8369 10.7097 19.1919 10.0676 18.3979 10.0695C17.604 10.0713 16.9619 10.7164 16.9638 11.5103L16.9638 11.5104Z"
                                        fill="white" stroke="white"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="col-6 px-sm-3 px-2">
                            <a href="javascript:void(0);"
                                class="btn d-flex  btn-danger align-items-center justify-content-between w-100">
                                SELL
                                <svg class="scale3" width="16" height="16" viewBox="0 0 29 29" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.35182 13.4965L5.35182 13.4965L5.33512 6.58823C5.33508 6.5844 5.3351 6.58084 5.33514 6.57759M5.35182 13.4965L5.83514 6.58306L5.33514 6.58221C5.33517 6.56908 5.33572 6.55882 5.33597 6.5545L5.33606 6.55298C5.33585 6.55628 5.33533 6.56514 5.33516 6.57648C5.33515 6.57684 5.33514 6.57721 5.33514 6.57759M5.35182 13.4965C5.35375 14.2903 5.99878 14.9324 6.79278 14.9305C7.58669 14.9287 8.22874 14.2836 8.22686 13.4897L8.22686 13.4896L8.21853 10.0609M5.35182 13.4965L8.21853 10.0609M5.33514 6.57759C5.33752 5.789 5.97736 5.14667 6.76872 5.14454C6.77041 5.14452 6.77217 5.14451 6.77397 5.14451L6.77603 5.1445L6.79319 5.14456L13.687 5.16121L13.6858 5.66121L13.687 5.16121C14.4807 5.16314 15.123 5.80809 15.1211 6.6022C15.1192 7.3961 14.4741 8.03814 13.6802 8.03626L13.6802 8.03626L10.2515 8.02798L23.4341 21.2106C23.9955 21.772 23.9955 22.6821 23.4341 23.2435C22.8727 23.8049 21.9625 23.8049 21.4011 23.2435L8.21853 10.0609M5.33514 6.57759C5.33513 6.57959 5.33514 6.58159 5.33514 6.5836L8.21853 10.0609M6.77407 5.14454C6.77472 5.14454 6.77537 5.14454 6.77603 5.14454L6.77407 5.14454Z"
                                        fill="white" stroke="white"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

									</div>
								</div>
							</div>

                            <div class="col-xl-4 col-lg-4">

                            <div class="card">

<div class="card-body pt-0 px-0">

                            <canvas id="myChart"></canvas>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple'],
                datasets: [{
                    label: 'Dataset',
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>

                                    </div>
                                    </div>
                                    </div>

						</div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table Hover</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover   table table-bordered verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ارز</th>
                                                <th>مقدار کل موجودی</th>
                                                <th>مقدار در سفارش</th>
                                                <th>مقدار در دسترس</th>
                                                <th>ارزش فعلی</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>Kolor Tea Shirt For Man</td>
                                                <td><span class="badge badge-primary">Sale</span>
                                                </td>
                                                <td>January 22</td>
                                                <td>January 22</td>
                                                <td class="color-primary">$21.56</td>
                                                <td>

                    <div class="row">
                        <div class="col-6 px-sm-3 px-2">
                            <a href="javascript:void(0);"
                                class="btn d-flex  btn-success justify-content-between align-items-center w-100">
                                BUY
                                <svg width="16" height="16" viewBox="0 0 21 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.9638 11.5104L16.9721 14.9391L3.78954 1.7565C3.22815 1.19511 2.31799 1.19511 1.75661 1.7565C1.19522 2.31789 1.19522 3.22805 1.75661 3.78943L14.9392 16.972L11.5105 16.9637L11.5105 16.9637C10.7166 16.9619 10.0715 17.6039 10.0696 18.3978C10.0677 19.1919 10.7099 19.8369 11.5036 19.8388L11.5049 19.3388L11.5036 19.8388L18.3976 19.8554L18.4146 19.8555L18.4159 19.8555C18.418 19.8555 18.42 19.8555 18.422 19.8555C19.2131 19.8533 19.8528 19.2114 19.8555 18.4231C19.8556 18.4196 19.8556 18.4158 19.8556 18.4117L19.8389 11.5035L19.8389 11.5035C19.8369 10.7097 19.1919 10.0676 18.3979 10.0695C17.604 10.0713 16.9619 10.7164 16.9638 11.5103L16.9638 11.5104Z"
                                        fill="white" stroke="white"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="col-6 px-sm-3 px-2">
                            <a href="javascript:void(0);"
                                class="btn d-flex  btn-danger align-items-center justify-content-between w-100">
                                SELL
                                <svg class="scale3" width="16" height="16" viewBox="0 0 29 29" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.35182 13.4965L5.35182 13.4965L5.33512 6.58823C5.33508 6.5844 5.3351 6.58084 5.33514 6.57759M5.35182 13.4965L5.83514 6.58306L5.33514 6.58221C5.33517 6.56908 5.33572 6.55882 5.33597 6.5545L5.33606 6.55298C5.33585 6.55628 5.33533 6.56514 5.33516 6.57648C5.33515 6.57684 5.33514 6.57721 5.33514 6.57759M5.35182 13.4965C5.35375 14.2903 5.99878 14.9324 6.79278 14.9305C7.58669 14.9287 8.22874 14.2836 8.22686 13.4897L8.22686 13.4896L8.21853 10.0609M5.35182 13.4965L8.21853 10.0609M5.33514 6.57759C5.33752 5.789 5.97736 5.14667 6.76872 5.14454C6.77041 5.14452 6.77217 5.14451 6.77397 5.14451L6.77603 5.1445L6.79319 5.14456L13.687 5.16121L13.6858 5.66121L13.687 5.16121C14.4807 5.16314 15.123 5.80809 15.1211 6.6022C15.1192 7.3961 14.4741 8.03814 13.6802 8.03626L13.6802 8.03626L10.2515 8.02798L23.4341 21.2106C23.9955 21.772 23.9955 22.6821 23.4341 23.2435C22.8727 23.8049 21.9625 23.8049 21.4011 23.2435L8.21853 10.0609M5.33514 6.57759C5.33513 6.57959 5.33514 6.58159 5.33514 6.5836L8.21853 10.0609M6.77407 5.14454C6.77472 5.14454 6.77537 5.14454 6.77603 5.14454L6.77407 5.14454Z"
                                        fill="white" stroke="white"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>

    <div class="row">


        <div class="col-xl-6 col-sm-12">
            <div class="card">

                <div class="card-header border-0 pb-3 flex-wrap">
                    <ul class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                        <li class="nav-link " id="nav-order-tab" data-bs-toggle="tab" data-bs-target="#nav-order"
                            type="button" role="tab" aria-selected="false" tabindex="-1">خرید</button>
                        <li class="nav-link active" id="nav-histroy-tab" data-bs-toggle="tab" data-bs-target="#nav-history"
                            type="button" role="tab" aria-selected="true">فروش</button>
                    </ul>
                </div>

                <div class="card-body pt-0">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="nav-order" role="tabpanel" aria-labelledby="nav-order-tab">



                            <div class="basic-form">
                                <form class="form-wrapper trade-form">
                                    <div class="input-group mb-3 ">
                                        <input class="form-control form-control text-end" type="text"
                                            placeholder="0,000000">

                                        <span class="">

                                            <div
                                                class="dropdown bootstrap-select form-control custom-image-select-1 image-select mt-3 mt-sm-0 bitcoin-border dropup">
                                                <select
                                                    class="form-control custom-image-select-1 image-select mt-3 mt-sm-0 bitcoin-border"
                                                    tabindex="null">
                                                    <option data-thumbnail="/tem_jid_rtl/myrtl_files/image/svg/dash.svg"
                                                        data-content="<img src='/tem_jid_rtl/myrtl_files/image/svg/dash.svg'/> 45,662.05 DASH">
                                                        45,662.05 DASH</option>
                                                    <option data-thumbnail="/tem_jid_rtl/myrtl_files/image/svg/btc.svg"
                                                        data-content="<img src='/tem_jid_rtl/myrtl_files/image/svg/btc.svg'/> 345,455 DASH">
                                                        345,455 DASH</option>
                                                    <option data-thumbnail="/tem_jid_rtl/myrtl_files/image/svg/eth.svg"
                                                        data-content="<img src='/tem_jid_rtl/myrtl_files/image/svg/eth.svg'/> 789,123 DASH">
                                                        789,123 DASH</option>
                                                </select><button type="button" tabindex="-1"
                                                    class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown"
                                                    role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox"
                                                    aria-expanded="false" title="345,455 DASH">
                                                    <div class="filter-option">
                                                        <div class="filter-option-inner">
                                                            <div class="filter-option-inner-inner"><img
                                                                    src="/tem_jid_rtl/myrtl_files/image/svg/btc.svg">
                                                                345,455 DASH</div>
                                                        </div>
                                                    </div>
                                                </button>
                                                <div class="dropdown-menu"
                                                    style="max-height: 236.133px; overflow: hidden; min-height: 0px;">
                                                    <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"
                                                        style="max-height: 222.133px; overflow-y: auto; min-height: 0px;"
                                                        aria-activedescendant="bs-select-1-1">
                                                        <ul class="dropdown-menu inner show" role="presentation"
                                                            style="margin-top: 0px; margin-bottom: 0px;">
                                                            <li class=""><a role="option" class="dropdown-item"
                                                                    id="bs-select-1-0" tabindex="0" aria-setsize="3"
                                                                    aria-posinset="1"><span class="text"><img
                                                                            src="/tem_jid_rtl/myrtl_files/image/svg/dash.svg">
                                                                        45,662.05 DASH</span></a></li>
                                                            <li class="selected active"><a role="option"
                                                                    class="dropdown-item active selected" id="bs-select-1-1"
                                                                    tabindex="0" aria-setsize="3" aria-posinset="2"
                                                                    aria-selected="true"><span class="text"><img
                                                                            src="/tem_jid_rtl/myrtl_files/image/svg/btc.svg">
                                                                        345,455 DASH</span></a></li>
                                                            <li class=""><a role="option" class="dropdown-item"
                                                                    id="bs-select-1-2" tabindex="0" aria-setsize="3"
                                                                    aria-posinset="3"><span class="text"><img
                                                                            src="/tem_jid_rtl/myrtl_files/image/svg/eth.svg">
                                                                        789,123 DASH</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </span>
                                    </div>
                                </form>
                            </div>














                        </div>
                        <div class="tab-pane fade active show" id="nav-history" role="tabpanel"
                            aria-labelledby="nav-histroy-tab">




                            <div class="mb-3 mt-4">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control hei60" placeholder="Take Profit">
                                    <button
                                        class="btn btn-primary btn-primary btn-outline-primary dropdown-toggle prs-w-30"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        لاری گرجستان <img src="/tem_jid_rtl/myrtl_files/image/svg/lari.png"
                                            class="img-w-h" /></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"> <img
                                                    src="/tem_jid_rtl/myrtl_files/image/svg/usa.png"
                                                    class="img-w-h" />دلار آمریکا</a></li>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="/tem_jid_rtl/myrtl_files/image/svg/iran.png"
                                                    class="img-w-h" />ریال ایران </a></li>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="/tem_jid_rtl/myrtl_files/image/svg/japan.png"
                                                    class="img-w-h" />ین ژاپن </a></li>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="/tem_jid_rtl/myrtl_files/image/svg/uae.png"
                                                    class="img-w-h" />درهم امارات </a></li>
                                        <li><a class="dropdown-item" href="#"> <img
                                                    src="/tem_jid_rtl/myrtl_files/image/svg/lari.png"
                                                    class="img-w-h" />لاری گرجستان </a></li>
                                    </ul>
                                </div>
                            </div>


                            <style>
                                .flex {
  display: flex !important;
}
.scale-\[1\.02\], .transform {
  transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.-translate-y-1\/2 {
  --tw-translate-y: -50%;
}
.-translate-x-1\/2, .-translate-y-1\/2 {
  transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.-translate-x-1\/2 {
  --tw-translate-x: -50%;
}
.flex {
  display: flex;
}
.m-auto {
  margin: auto;
}
.z-20 {
  z-index: 20;
}

.top-1\/2 {
  bottom: 54%;
}
.left-1\/2 {
  left: 50%;
}
.absolute {
  position: absolute;
}

.inline-flex {
  display: inline-flex !important;
}
.p-4 {
  padding: 1rem;
}
.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255/var(--tw-bg-opacity));
}
.border-gray-250 {
  --tw-border-opacity: 1;
  border-color: rgb(232 233 234/var(--tw-border-opacity));
}
.border-solid {
  border-style: solid;
}
.border {
  border-width: 1px;
}
.rounded-full {
  border-radius: 9999px;
}
.inline-flex {
  display: inline-flex;
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
  appearance: button;
  cursor: pointer;
}
button, input, select, textarea {
  font: inherit;
}
[role="button"], button {
  cursor: pointer;
}
button, input:where([type="button"]), input:where([type="reset"]), input:where([type="submit"]) {
  -webkit-appearance: button;
  background-color: transparent;
  background-image: none;
}
button, select {
  text-transform: none;
}
button, input, optgroup, select, textarea {
  font-family: inherit;
  font-feature-settings: inherit;
  font-variation-settings: inherit;
  font-size: 100%;
  font-weight: inherit;
  line-height: inherit;
  letter-spacing: inherit;
  color: inherit;
  margin: 0;
  padding: 0;
}


  .md\:rotate-0 {
    --tw-rotate: 0deg;
    transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }
.text-greyblue-400 {
  --tw-text-opacity: 1;
  color: rgb(49 63 91/var(--tw-text-opacity));
}
.rotate-90, .rotate-\[45deg\] {
  transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.rotate-90 {
  --tw-rotate: 90deg;
}
                            </style>
                            <div
                                class="absolute left-1/2 top-1/2 z-20 m-auto flex -translate-x-1/2 -translate-y-1/2 transform">
                                <button
                                    class="inline-flex rounded-full border border-solid border-gray-250 bg-white p-4 hover:bg-gray-150"
                                    aria-label="Swap currencies" type="button">
                               <img src="/tem_jid_rtl/myrtl_files/image/svg/1148842.png" class="img-w-h" />
                                </button></div>

                            <div class="mb-3 mt-4">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control hei60" placeholder="Take Profit">
                                    <button
                                        class="btn btn-primary btn-primary btn-outline-primary dropdown-toggle prs-w-30"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        دلار آمریکا <img src="/tem_jid_rtl/myrtl_files/image/svg/usa.png"
                                            class="img-w-h" /></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"> <img
                                                    src="/tem_jid_rtl/myrtl_files/image/svg/usa.png"
                                                    class="img-w-h" />دلار آمریکا</a></li>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="/tem_jid_rtl/myrtl_files/image/svg/iran.png"
                                                    class="img-w-h" />ریال ایران </a></li>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="/tem_jid_rtl/myrtl_files/image/svg/japan.png"
                                                    class="img-w-h" />ین ژاپن </a></li>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="/tem_jid_rtl/myrtl_files/image/svg/uae.png"
                                                    class="img-w-h" />درهم امارات </a></li>
                                        <li><a class="dropdown-item" href="#"> <img
                                                    src="/tem_jid_rtl/myrtl_files/image/svg/lari.png"
                                                    class="img-w-h" />لاری گرجستان </a></li>
                                    </ul>
                                </div>
                            </div>


                            <span>
                                <b>7,705,000,001</b>

                                ≈
                                1

                                <b>BTC</b>
                            </span>
                            <br>

                            <button class="btn  btn-danger btn-block hei60">
                                فروش
                                <svg class="scale3" width="16" height="16" viewBox="0 0 29 29" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.35182 13.4965L5.35182 13.4965L5.33512 6.58823C5.33508 6.5844 5.3351 6.58084 5.33514 6.57759M5.35182 13.4965L5.83514 6.58306L5.33514 6.58221C5.33517 6.56908 5.33572 6.55882 5.33597 6.5545L5.33606 6.55298C5.33585 6.55628 5.33533 6.56514 5.33516 6.57648C5.33515 6.57684 5.33514 6.57721 5.33514 6.57759M5.35182 13.4965C5.35375 14.2903 5.99878 14.9324 6.79278 14.9305C7.58669 14.9287 8.22874 14.2836 8.22686 13.4897L8.22686 13.4896L8.21853 10.0609M5.35182 13.4965L8.21853 10.0609M5.33514 6.57759C5.33752 5.789 5.97736 5.14667 6.76872 5.14454C6.77041 5.14452 6.77217 5.14451 6.77397 5.14451L6.77603 5.1445L6.79319 5.14456L13.687 5.16121L13.6858 5.66121L13.687 5.16121C14.4807 5.16314 15.123 5.80809 15.1211 6.6022C15.1192 7.3961 14.4741 8.03814 13.6802 8.03626L13.6802 8.03626L10.2515 8.02798L23.4341 21.2106C23.9955 21.772 23.9955 22.6821 23.4341 23.2435C22.8727 23.8049 21.9625 23.8049 21.4011 23.2435L8.21853 10.0609M5.33514 6.57759C5.33513 6.57959 5.33514 6.58159 5.33514 6.5836L8.21853 10.0609M6.77407 5.14454C6.77472 5.14454 6.77537 5.14454 6.77603 5.14454L6.77407 5.14454Z"
                                        fill="white" stroke="white"></path>
                                </svg>
                            </button>

                        </div>
                    </div>
                </div>


            </div>


        </div>




        <div class="col-xl-6 col-sm-12">
            <div class="card quick-trade">
                <div class="card-header pb-0 border-0 flex-wrap">
                    <div>
                        <h4 class="card-title">Quick Trade</h4>
                        <p class="mb-xl-0 mb-3 fs-12">Lorem ipsum dolor sit amet, consectetur</p>
                    </div>

                    <div
                        class="dropdown bootstrap-select form-control custom-image-select-1 image-select mt-3 mt-sm-0 bitcoin-border dropup">
                        <select class="form-control custom-image-select-1 image-select mt-3 mt-sm-0 bitcoin-border"
                            tabindex="null">
                            <option data-thumbnail="/tem_jid_rtl/myrtl_files/image/svg/dash.svg"
                                data-content="<img src='/tem_jid_rtl/myrtl_files/image/svg/dash.svg'/> 45,662.05 DASH">
                                45,662.05 DASH</option>
                            <option data-thumbnail="/tem_jid_rtl/myrtl_files/image/svg/btc.svg"
                                data-content="<img src='/tem_jid_rtl/myrtl_files/image/svg/btc.svg'/> 345,455 DASH">345,455
                                DASH</option>
                            <option data-thumbnail="/tem_jid_rtl/myrtl_files/image/svg/eth.svg"
                                data-content="<img src='/tem_jid_rtl/myrtl_files/image/svg/eth.svg'/> 789,123 DASH">789,123
                                DASH</option>
                        </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                            data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox"
                            aria-expanded="false" title="345,455 DASH">
                            <div class="filter-option">
                                <div class="filter-option-inner">
                                    <div class="filter-option-inner-inner"><img
                                            src="/tem_jid_rtl/myrtl_files/image/svg/btc.svg"> 345,455 DASH</div>
                                </div>
                            </div>
                        </button>
                        <div class="dropdown-menu" style="max-height: 236.133px; overflow: hidden; min-height: 0px;">
                            <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"
                                style="max-height: 222.133px; overflow-y: auto; min-height: 0px;"
                                aria-activedescendant="bs-select-1-1">
                                <ul class="dropdown-menu inner show" role="presentation"
                                    style="margin-top: 0px; margin-bottom: 0px;">
                                    <li class=""><a role="option" class="dropdown-item" id="bs-select-1-0"
                                            tabindex="0" aria-setsize="3" aria-posinset="1"><span class="text"><img
                                                    src="/tem_jid_rtl/myrtl_files/image/svg/dash.svg"> 45,662.05
                                                DASH</span></a></li>
                                    <li class="selected active"><a role="option" class="dropdown-item active selected"
                                            id="bs-select-1-1" tabindex="0" aria-setsize="3" aria-posinset="2"
                                            aria-selected="true"><span class="text"><img
                                                    src="/tem_jid_rtl/myrtl_files/image/svg/btc.svg"> 345,455
                                                DASH</span></a></li>
                                    <li class=""><a role="option" class="dropdown-item" id="bs-select-1-2"
                                            tabindex="0" aria-setsize="3" aria-posinset="3"><span class="text"><img
                                                    src="/tem_jid_rtl/myrtl_files/image/svg/eth.svg"> 789,123
                                                DASH</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div class="basic-form">
                        <form class="form-wrapper trade-form">
                            <div class="input-group mb-3 ">
                                <input class="form-control form-control text-end" type="text" placeholder="0,000000">

                                <span class="">

                                    <div
                                        class="dropdown bootstrap-select form-control custom-image-select-1 image-select mt-3 mt-sm-0 bitcoin-border dropup">
                                        <select
                                            class="form-control custom-image-select-1 image-select mt-3 mt-sm-0 bitcoin-border"
                                            tabindex="null">
                                            <option data-thumbnail="/tem_jid_rtl/myrtl_files/image/svg/dash.svg"
                                                data-content="<img src='/tem_jid_rtl/myrtl_files/image/svg/dash.svg'/> 45,662.05 DASH">
                                                45,662.05 DASH</option>
                                            <option data-thumbnail="/tem_jid_rtl/myrtl_files/image/svg/btc.svg"
                                                data-content="<img src='/tem_jid_rtl/myrtl_files/image/svg/btc.svg'/> 345,455 DASH">
                                                345,455 DASH</option>
                                            <option data-thumbnail="/tem_jid_rtl/myrtl_files/image/svg/eth.svg"
                                                data-content="<img src='/tem_jid_rtl/myrtl_files/image/svg/eth.svg'/> 789,123 DASH">
                                                789,123 DASH</option>
                                        </select><button type="button" tabindex="-1"
                                            class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown"
                                            role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox"
                                            aria-expanded="false" title="345,455 DASH">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner"><img
                                                            src="/tem_jid_rtl/myrtl_files/image/svg/btc.svg"> 345,455 DASH
                                                    </div>
                                                </div>
                                            </div>
                                        </button>
                                        <div class="dropdown-menu"
                                            style="max-height: 236.133px; overflow: hidden; min-height: 0px;">
                                            <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"
                                                style="max-height: 222.133px; overflow-y: auto; min-height: 0px;"
                                                aria-activedescendant="bs-select-1-1">
                                                <ul class="dropdown-menu inner show" role="presentation"
                                                    style="margin-top: 0px; margin-bottom: 0px;">
                                                    <li class=""><a role="option" class="dropdown-item"
                                                            id="bs-select-1-0" tabindex="0" aria-setsize="3"
                                                            aria-posinset="1"><span class="text"><img
                                                                    src="/tem_jid_rtl/myrtl_files/image/svg/dash.svg">
                                                                45,662.05 DASH</span></a></li>
                                                    <li class="selected active"><a role="option"
                                                            class="dropdown-item active selected" id="bs-select-1-1"
                                                            tabindex="0" aria-setsize="3" aria-posinset="2"
                                                            aria-selected="true"><span class="text"><img
                                                                    src="/tem_jid_rtl/myrtl_files/image/svg/btc.svg">
                                                                345,455 DASH</span></a></li>
                                                    <li class=""><a role="option" class="dropdown-item"
                                                            id="bs-select-1-2" tabindex="0" aria-setsize="3"
                                                            aria-posinset="3"><span class="text"><img
                                                                    src="/tem_jid_rtl/myrtl_files/image/svg/eth.svg">
                                                                789,123 DASH</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </span>
                            </div>
                            <div class="input-group mb-3 ">
                                <span class="input-group-text">Price BPL</span>
                                <input class="form-control form-control text-end" type="text" placeholder="0,000000">
                            </div>
                            <div class="input-group mb-3 ">
                                <span class="input-group-text">Fee (1%)</span>
                                <input class="form-control form-control text-end" type="text" placeholder="0,000000">
                            </div>
                            <div class="input-group mb-3 ">
                                <span class="input-group-text">Total BPL</span>
                                <input class="form-control form-control text-end" type="text" placeholder="0,000000">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-footer border-0">
                    <div class="row">
                        <div class="col-6 px-sm-3 px-2">
                            <a href="javascript:void(0);"
                                class="btn d-flex  btn-success justify-content-between align-items-center w-100">
                                BUY
                                <svg width="16" height="16" viewBox="0 0 21 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.9638 11.5104L16.9721 14.9391L3.78954 1.7565C3.22815 1.19511 2.31799 1.19511 1.75661 1.7565C1.19522 2.31789 1.19522 3.22805 1.75661 3.78943L14.9392 16.972L11.5105 16.9637L11.5105 16.9637C10.7166 16.9619 10.0715 17.6039 10.0696 18.3978C10.0677 19.1919 10.7099 19.8369 11.5036 19.8388L11.5049 19.3388L11.5036 19.8388L18.3976 19.8554L18.4146 19.8555L18.4159 19.8555C18.418 19.8555 18.42 19.8555 18.422 19.8555C19.2131 19.8533 19.8528 19.2114 19.8555 18.4231C19.8556 18.4196 19.8556 18.4158 19.8556 18.4117L19.8389 11.5035L19.8389 11.5035C19.8369 10.7097 19.1919 10.0676 18.3979 10.0695C17.604 10.0713 16.9619 10.7164 16.9638 11.5103L16.9638 11.5104Z"
                                        fill="white" stroke="white"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="col-6 px-sm-3 px-2">
                            <a href="javascript:void(0);"
                                class="btn d-flex  btn-danger align-items-center justify-content-between w-100">
                                SELL
                                <svg class="scale3" width="16" height="16" viewBox="0 0 29 29" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.35182 13.4965L5.35182 13.4965L5.33512 6.58823C5.33508 6.5844 5.3351 6.58084 5.33514 6.57759M5.35182 13.4965L5.83514 6.58306L5.33514 6.58221C5.33517 6.56908 5.33572 6.55882 5.33597 6.5545L5.33606 6.55298C5.33585 6.55628 5.33533 6.56514 5.33516 6.57648C5.33515 6.57684 5.33514 6.57721 5.33514 6.57759M5.35182 13.4965C5.35375 14.2903 5.99878 14.9324 6.79278 14.9305C7.58669 14.9287 8.22874 14.2836 8.22686 13.4897L8.22686 13.4896L8.21853 10.0609M5.35182 13.4965L8.21853 10.0609M5.33514 6.57759C5.33752 5.789 5.97736 5.14667 6.76872 5.14454C6.77041 5.14452 6.77217 5.14451 6.77397 5.14451L6.77603 5.1445L6.79319 5.14456L13.687 5.16121L13.6858 5.66121L13.687 5.16121C14.4807 5.16314 15.123 5.80809 15.1211 6.6022C15.1192 7.3961 14.4741 8.03814 13.6802 8.03626L13.6802 8.03626L10.2515 8.02798L23.4341 21.2106C23.9955 21.772 23.9955 22.6821 23.4341 23.2435C22.8727 23.8049 21.9625 23.8049 21.4011 23.2435L8.21853 10.0609M5.33514 6.57759C5.33513 6.57959 5.33514 6.58159 5.33514 6.5836L8.21853 10.0609M6.77407 5.14454C6.77472 5.14454 6.77537 5.14454 6.77603 5.14454L6.77407 5.14454Z"
                                        fill="white" stroke="white"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex mt-3 align-items-center">
                        <div class="form-check custom-checkbox">
                            <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                            <label class="form-check-label fs-14 font-w400 mt-1" for="customCheckBox1">Lorem ipsum dolor
                                sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</label>
                        </div>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">

                {{-- @include('admin.java.loading_sample2', [ 'guard' =>  'admin'   ]) --}}

{{--
                <div class="col-md-4 grid-margin stretch-card">
                    @include('user.dashboard.card', [
                        'icon_card' => 'file',
                        'count_card' => count_dashboard('all', 'order'),
                        'title_card' => 'سفارش های جدید',
                        'desc_card' => 'سفارش',
                        'route_create' => '',
                        'route_index' => route('admin.form.form_data_list.index'),
                        'new_card' => count_dashboard('all', 'new_order'),
                    ])
                </div>


                <div class="col-md-4 grid-margin stretch-card">
                    @include('user.dashboard.card', [
                        'icon_card' => 'lock',
                        'count_card' => count_dashboard('all', 'timeline_auth_all'),
                        'title_card' => 'درخواستهای احرازهویت',
                        'desc_card' => 'درخواست',
                        'route_create' => '',
                        'route_index' => route('admin.task.index_activition', ['activition' => 'document']),
                        'new_card' => count_dashboard('all', 'new_timeline_auth_all') . ' درخواست جدید',
                    ])
                </div>

                <div class="col-md-4 grid-margin stretch-card">
                    @include('user.dashboard.card', [
                        'icon_card' => 'user',
                        'count_card' => count_dashboard('all', 'user'),
                        'title_card' => 'کاربران',
                        'desc_card' => 'کاربر',
                        'route_create' => route('admin.user.create'),
                        'route_index' => route('admin.user.index'),
                        'new_card' => '',
                    ])
                </div> --}}






{{-- 
                <div class="col-md-4 grid-margin stretch-card">
                    @include('user.dashboard.card', [
                        'icon_card' => 'mail',
                        'count_card' => count_dashboard('all', 'ticket'),
                        'title_card' => 'تیکت های کاربران',
                        'desc_card' => 'تیکت',
                        'route_create' => '',
                        'route_index' => route('admin.ticket.index'),
                        'new_card' => count_dashboard('all', 'new_ticket_admin') . ' تیکت جدید',
                    ])
                </div>


 --}}




            </div>
        </div>
    </div>


    @slot('script')
        <script src="{{ asset('template/assets/js/dashboard.js') }}"></script>
    @endslot
@endcomponent
