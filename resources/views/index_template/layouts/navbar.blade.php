                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="site-header-inner">
                                <div class="wrap-box flex">
                                    <div id="site-logo">
                                        <div id="site-logo-inner">
                                            <a href="index.html" rel="home" class="main-logo">
                                                <img id="logo_header" src="{{ asset('index_template/index/assets/images/logo/logo.png')}}"
                                                data-retina="{{ asset('index_template/index/assets/images/logo/logo@2x.png')}}" >
                                            </a>
                                        </div>
                                    </div><!-- logo -->
                                    <div class="mobile-button">
                                        <span></span>
                                    </div><!-- /.mobile-button -->

                                    <nav id="main-nav" class="main-nav">
                                        <ul id="menu-primary-menu" class="menu">
                                            <li class="menu-item menu-item-has-children current-menu-item">
                                                <a>{{ __('message.home') }}</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item current-item"><a href="index.html">Home 1</a></li>
                                                    <li class="menu-item"><a href="home-2.html">Home 2</a></li>
                                                    <li class="menu-item"><a href="home-3.html">Home 3</a></li>
                                                    <li class="menu-item"><a href="home-4.html">Home 4</a></li>
                                                    <li class="menu-item"><a href="home-5.html">Home 5</a></li>
                                                    <li class="menu-item"><a href="home-6.html">Home 6</a></li>
                                                    <li class="menu-item"><a href="home-7.html">Home 7</a></li>
                                                    <li class="menu-item has-item">
                                                        <a href="#">Home Slider Style</a>
                                                        <ul class="nav-sub-menu">
                                                            <li class="nav-menu-item"><a href="slider-3d.html">Slider 3d</a></li>
                                                            <li class="nav-menu-item"><a href="slider-scroll.html">Slider Scroll</a></li>
                                                            <li class="nav-menu-item"><a href="slider-animation.html">Slider Animation</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="about-us.html">{{ __('message.about') }}</a>
                                            </li>


                                            <li class="menu-item menu-item-has-children">
                                                <a>{{ __('message.blog') }}</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item has-item">
                                                        <a href="market.html">Market</a>
                                                        <ul class="nav-sub-menu">
                                                            <li class="nav-menu-item"><a href="market-create.html">Create</a></li>
                                                            <li class="nav-menu-item"><a href="market.html">Market</a></li>
                                                            <li class="nav-menu-item"><a href="market-active-bid.html">Active Bid</a></li>
                                                            <li class="nav-menu-item"><a href="market-explore.html">Explore</a></li>
                                                            <li class="nav-menu-item"><a href="market-collection.html">My collection</a></li>
                                                            <li class="nav-menu-item"><a href="market-favorite.html">My favorite</a></li>
                                                            <li class="nav-menu-item"><a href="market-wallet.html">Wallet</a></li>
                                                            <li class="nav-menu-item"><a href="market-history.html">History</a></li>
                                                            <li class="nav-menu-item"><a href="market.html">Settings</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item"><a href="author-1.html">Authors Style 1</a></li>
                                                    <li class="menu-item"><a href="author-2.html">Authors Style 2</a></li>
                                                    <li class="menu-item"><a href="terms-condition.html">Terms & Condition</a></li>
                                                    <li class="menu-item"><a href="no-result.html">No Result</a></li>
                                                    <li class="menu-item"><a href="faq.html">FAQs</a></li>
                                                    <li class="menu-item"><a href="coming-soon.html">Coming Soon</a></li>
                                                    <li class="menu-item"><a href="maintenance.html">Maintenance</a></li>
                                                    <li class="menu-item"><a href="404.html">404</a></li>
                                                    <li class="menu-item"><a href="login.html">Login</a></li>
                                                    <li class="menu-item"><a href="sign-up.html">Sign up</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a>Blog</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li class="menu-item"><a href="blog-grid-1.html">Blog Grid 1</a></li>
                                                    <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                                                    <li class="menu-item"><a href="blog-list-1.html">Blog List 1</a></li>
                                                    <li class="menu-item"><a href="blog-detail.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item">
                                                <a href="contact-us.html">Contact</a>
                                            </li>



                                        </ul>


                                    </nav><!-- /#main-nav -->
                                    <div class="flat-wallet flex">
                                        <div class="" id="wallet-header">
                                            {{-- <a  href="market-wallet.html" id="connectbtn" class="tf-button style-1">
                                                <span>Wallet connect</span>
                                                <i class="icon-wa"></i>
                                            </a> --}}





                                    <div class="tf-soft">
                                    <div class="soft-left">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                <span class="f_iransans">{{ __('message.Deflan') }}    </span>

                                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ui-svg-inline">

                                                    <path d="M21.41,8.64s0,0,0-.05a10,10,0,0,0-18.78,0s0,0,0,.05a9.86,9.86,0,0,0,0,6.72s0,0,0,.05a10,10,0,0,0,18.78,0s0,0,0-.05a9.86,9.86,0,0,0,0-6.72ZM4.26,14a7.82,7.82,0,0,1,0-4H6.12a16.73,16.73,0,0,0,0,4Zm.82,2h1.4a12.15,12.15,0,0,0,1,2.57A8,8,0,0,1,5.08,16Zm1.4-8H5.08A8,8,0,0,1,7.45,5.43,12.15,12.15,0,0,0,6.48,8ZM11,19.7A6.34,6.34,0,0,1,8.57,16H11ZM11,14H8.14a14.36,14.36,0,0,1,0-4H11Zm0-6H8.57A6.34,6.34,0,0,1,11,4.3Zm7.92,0h-1.4a12.15,12.15,0,0,0-1-2.57A8,8,0,0,1,18.92,8ZM13,4.3A6.34,6.34,0,0,1,15.43,8H13Zm0,15.4V16h2.43A6.34,6.34,0,0,1,13,19.7ZM15.86,14H13V10h2.86a14.36,14.36,0,0,1,0,4Zm.69,4.57a12.15,12.15,0,0,0,1-2.57h1.4A8,8,0,0,1,16.55,18.57ZM19.74,14H17.88A16.16,16.16,0,0,0,18,12a16.28,16.28,0,0,0-.12-2h1.86a7.82,7.82,0,0,1,0,4Z">

                                                    </path>

                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="will-change: transform;">
                                                <span class="pl12" >{{ __('message.Selectlan') }}</span>



                                                <a href="{{ route('select_lang', ['lang_id' => 'fa']) }}" class="dropdown-item">
                                                    <div class="sort-filter @if (__('message.dir') == 'rtl') active @endif" href="#">
                                                        <span>{{ __('message.persian') }}</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                                <a href="{{ route('select_lang', ['lang_id' => 'en']) }}" class="dropdown-item">
                                                    <div class="sort-filter @if (__('message.dir') == 'ltr') active @endif" href="#">
                                                        <span>{{ __('message.english') }}</span>
                                                        <span class="icon-tick"><span class="path2"></span></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>


                     @if (auth()->guard('user')->user())

                                        <a   href="{{ route('panel.user',[ 'lang'=>__('message.AppLangi') , 'any'=>'dashboard' ]) }}"   id="connectbtn"
                                            class="tf-button style-1" target="_blank">
                                            <span class="f_iransans"> {{auth()->guard('user')->user()->name}}</span>
                                                <i class="icon-wa"></i>
                                         </a>



                     @else

                     <a   href="{{ route('vuepanel',[ 'lang'=>__('message.AppLangi') , 'any'=>'auth/login' ]) }}"   id="connectbtn"
                                            class="tf-button style-1 w80" target="_blank">
                                            <span class="f_iransans"> {{__('message.login')}}</span>

                                        </a>
                     <a   href="{{ route('vuepanel',[ 'lang'=>__('message.AppLangi') , 'any'=>'auth/register' ]) }}"   id="connectbtn"
                                            class="tf-button style-1 w110" target="_blank">
                                            <span class="f_iransans">{{__('message.signup')}}</span>

                                        </a>


                     @endif

                                    </div>
                                </div>


                                        </div>
                                        <div class="header-search relative">
                                            <a href="#" class="show-search">
                                                <i class="icon-search"></i>
                                            </a>
                                            <div class="top-search">
                                                <form action="#" method="get" role="search" class="search-form relative">
                                                    <input type="search" id="search" class="search-field style-1" placeholder="Search..." value="" name="s" title="Search for" required="">
                                                    <button class="search search-submit" type="submit" title="Search">
                                                        <i class="icon-search"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="canvas">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
