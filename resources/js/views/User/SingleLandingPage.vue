<template>





<div class="flat-title-page">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <!-- <h1 class="heading text-center">Blog list #1</h1> -->
                            <ul class="breadcrumbs flex">
                                <li class="icon-keyboard_arrow_right">
                                    <a href="">{{ $t('dashboard') }}</a>
                                </li>
                                <li>
                                    <a href="#">{{ $t('SingleLandingPage') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tf-section-2 product-detail">
                <div class="themesflat-container">
                    <div class="row">

                        <div  class="col-sm-6 col-md-6  col-lg-12" >
                            <div data-wow-delay="0s" class="wow fadeInRight infor-product animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                                <div class="text">8SIAN Main Collection <span class="icon-tick"><span class="path1"></span><span class="path2"></span></span></div>
                                <div class="menu_card">
                                    <div class="dropdown">
                                        <div class="icon">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icon-link-1"></i>
                                            </a>
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item" href="#"><i class="icon-link"></i>Copy link</a>
                                                <a class="dropdown-item" href="#"><i class="icon-facebook"></i>Share on facebook</a>
                                                <a class="dropdown-item mb-0" href="#"><i class="icon-twitter"></i>Share on twitter</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <div class="icon">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icon-content"></i>
                                            </a>
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item" href="#"><i class="icon-refresh"></i>Refresh metadata</a>
                                                <a class="dropdown-item mb-0" href="#"><i class="icon-report"></i>Report</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2>Themesflat #0270</h2>
                                <div class="author flex items-center mb-30">
                                    <div class="avatar">
                                        <img src="assets/images/avatar/avatar-box-05.jpg" alt="Image">
                                    </div>
                                    <div class="info">
                                        <span>Owned by:</span>
                                        <h6><a href="author-1.html">Marvin McKinney</a> </h6>
                                    </div>
                                </div>
                                <div class="meta mb-20">
                                    <div class="meta-item view">
                                        <i class="icon-show"></i>208 view
                                    </div>
                                    <div class="meta-item rating">
                                        <i class="icon-link-2"></i>Top #2 trending
                                    </div>
                                    <div class="meta-item favorites">
                                        <i class="icon-heart"></i>10 favorites
                                    </div>
                                </div>
                            </div>
                            <div data-wow-delay="0s" class="wow fadeInRight product-item time-sales animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                                <h6><i class="icon-clock"></i>Sale ends May 22 at 9:39</h6>
                                <div class="content">
                                    <div class="text">Current price</div>
                                    <div class="flex justify-between">
                                        <p>0,032 ETH <span>$58,11</span></p>
                                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button style-1 h50 w216">Place a bid<i class="icon-arrow-up-right2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div data-wow-delay="0s" class="wow fadeInRight product-item description animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                                <h6><i class="icon-description"></i>Description</h6>
                                <i  :class="['icon-keyboard_arrow_down', { hiden:  isExpanded[2]  && activeId === 2 }]"     @click="toggleExpand(2)" ></i>
                                <div   :class="['icon-content', { d_none:  isExpanded[2]  && activeId === 2 }]"  >
                                    <p>8,888 NFTs of beautiful, Asian women painstakingly-crafted where even the most intricate details are steeped in historical significance. We envision 8SIAN being a global, inclusive community that brings together members who share admiration for Asian cultures. We want to represent, educate and build a lasting presence in the NFT space.</p>
                                </div>
                            </div>
                            <div data-wow-delay="0s" class="wow fadeInRight product-item history animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                                <h6><i class="icon-description"></i>Price History</h6>
                                <i    :class="['icon-keyboard_arrow_down', { hiden: isExpanded[3] && activeId === 3}]"     @click="toggleExpand(3)" ></i>
                                <div  :class="['icon-content', { d_none:  isExpanded[3]  && activeId === 3 }]" >
                                    <div class="chart">
                                        <canvas id="myChart" style="display: block; box-sizing: border-box; height: 248px; width: 497px;" width="497" height="248"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div data-wow-delay="0s" class="wow fadeInRight product-item details animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                                <h6><i class="icon-description"></i>Details</h6>
                                <i class="icon-keyboard_arrow_down"></i>
                                <div class="content">
                                    <div class="details-item">
                                        <span>Contract Address</span>
                                        <span class="tf-color">0x1984...c38f</span>
                                    </div>
                                    <div class="details-item">
                                        <span>Token ID</span>
                                        <span class="tf-color">0270</span>
                                    </div>
                                    <div class="details-item">
                                        <span>Token Standard</span>
                                        <span class="">ERC-721</span>
                                    </div>
                                    <div class="details-item">
                                        <span>Chain</span>
                                        <span class="">Ethereum</span>
                                    </div>
                                    <div class="details-item">
                                        <span>Last Updated</span>
                                        <span class="">8 months ago</span>
                                    </div>
                                    <div class="details-item mb-0">
                                        <span>Creator Earnings</span>
                                        <span class="">8%</span>
                                    </div>
                                </div>
                            </div>
                            <div data-wow-delay="0s" class="wow fadeInRight product-item traits animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                                <h6><i class="icon-description"></i>Traits</h6>
                                <i class="icon-keyboard_arrow_down"></i>
                                <div class="content">
                                    <div class="trait-item">
                                        <p>Apparel</p>
                                        <div class="title">Bathrobe Red 1%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Background</p>
                                        <div class="title">Orange 5%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Earrings</p>
                                        <div class="title">None 60%</div>
                                        <p>Floor: 0,037 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Apparel</p>
                                        <div class="title">Bathrobe Red 1%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Background</p>
                                        <div class="title">Orange 5%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Earrings</p>
                                        <div class="title">None 60%</div>
                                        <p>Floor: 0,037 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Apparel</p>
                                        <div class="title">Bathrobe Red 1%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Background</p>
                                        <div class="title">Orange 5%</div>
                                        <p>Floor: 0,056 ETH</p>
                                    </div>
                                    <div class="trait-item">
                                        <p>Earrings</p>
                                        <div class="title">None 60%</div>
                                        <p>Floor: 0,037 ETH</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp col-12 animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                            <div class="product-item offers">
                                <h6><i class="icon-description"></i>Offers</h6>
                                <i class="icon-keyboard_arrow_down"></i>
                                <div class="content">
                                    <div class="table-heading">
                                        <div class="column">Price</div>
                                        <div class="column">USD Price</div>
                                        <div class="column">Quantity</div>
                                        <div class="column">Floor Diference</div>
                                        <div class="column">Expiration</div>
                                        <div class="column">Form</div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column"><h6 class="price gem"><i class="icon-gem"></i>0,0034</h6></div>
                                        <div class="column">$6,60</div>
                                        <div class="column">3</div>
                                        <div class="column">90% below</div>
                                        <div class="column">In 26 day</div>
                                        <div class="column"><span class="tf-color">273E40</span></div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column"><h6 class="price gem"><i class="icon-gem"></i>0,0034</h6></div>
                                        <div class="column">$6,60</div>
                                        <div class="column">3</div>
                                        <div class="column">90% below</div>
                                        <div class="column">In 26 day</div>
                                        <div class="column"><span class="tf-color">273E40</span></div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column"><h6 class="price gem"><i class="icon-gem"></i>0,0034</h6></div>
                                        <div class="column">$6,60</div>
                                        <div class="column">3</div>
                                        <div class="column">90% below</div>
                                        <div class="column">In 26 day</div>
                                        <div class="column"><span class="tf-color">273E40</span></div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column"><h6 class="price gem"><i class="icon-gem"></i>0,0034</h6></div>
                                        <div class="column">$6,60</div>
                                        <div class="column">3</div>
                                        <div class="column">90% below</div>
                                        <div class="column">In 26 day</div>
                                        <div class="column"><span class="tf-color">273E40</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInUp col-12 animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                            <div class="product-item item-activity mb-0">
                                <h6><i class="icon-two-arrow rotateZ90"></i>Item activity</h6>
                                <i class="icon-keyboard_arrow_down"></i>
                                <div class="content">
                                    <div class="table-heading">
                                        <div class="column">Event</div>
                                        <div class="column">Price</div>
                                        <div class="column">Form</div>
                                        <div class="column">To</div>
                                        <div class="column">Date</div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column flex items-center"><i class="icon-two-arrow"></i>Transfer</div>
                                        <div class="column">-/-</div>
                                        <div class="column"><span class="tf-color">985DE3</span></div>
                                        <div class="column"><span class="tf-color">Nosyu</span></div>
                                        <div class="column">19h ago</div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column flex items-center"><i class="icon-sale"></i>Sale</div>
                                        <div class="column"><h6 class="price gem"><i class="icon-gem"></i>0,0319</h6></div>
                                        <div class="column"><span class="tf-color">985DE3</span></div>
                                        <div class="column"><span class="tf-color">Nosyu</span></div>
                                        <div class="column">19h ago</div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column flex items-center"><i class="icon-two-arrow"></i>Transfer</div>
                                        <div class="column">-/-</div>
                                        <div class="column"><span class="tf-color">985DE3</span></div>
                                        <div class="column"><span class="tf-color">Nosyu</span></div>
                                        <div class="column">19h ago</div>
                                    </div>
                                    <div class="table-item">
                                        <div class="column flex items-center"><i class="icon-sale"></i>Sale</div>
                                        <div class="column"><h6 class="price gem"><i class="icon-gem"></i>0,0319</h6></div>
                                        <div class="column"><span class="tf-color">985DE3</span></div>
                                        <div class="column"><span class="tf-color">Nosyu</span></div>
                                        <div class="column">19h ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tf-section-2 featured-item style-bottom">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section pb-20">
                                <h2 class="tf-title " style="perspective: 400px;"><div style="display: block; text-align: start; position: relative; transform-origin: 95.7667px 22px 0px; transform: translate3d(0px, 0px, 0px); opacity: 1;">Related artworks</div></h2>
                                <a href="explore-3.html" class="">Discover more <i class="icon-arrow-right2"></i></a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="featured pt-10 swiper-container carousel swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-swiper="{
                                &quot;loop&quot;:false,
                                &quot;slidesPerView&quot;: 1,
                                &quot;observer&quot;: true,
                                &quot;observeParents&quot;: true,
                                &quot;spaceBetween&quot;: 30,
                                &quot;navigation&quot;: {
                                    &quot;clickable&quot;: true,
                                    &quot;nextEl&quot;: &quot;.slider-next&quot;,
                                    &quot;prevEl&quot;: &quot;.slider-prev&quot;
                                },
                                &quot;pagination&quot;: {
                                    &quot;el&quot;: &quot;.swiper-pagination&quot;,
                                    &quot;clickable&quot;: true
                                },
                                &quot;breakpoints&quot;: {
                                    &quot;768&quot;: {
                                        &quot;slidesPerView&quot;: 2,
                                        &quot;spaceBetween&quot;: 30
                                    },
                                    &quot;1024&quot;: {
                                        &quot;slidesPerView&quot;: 3,
                                        &quot;spaceBetween&quot;: 30
                                    },
                                    &quot;1300&quot;: {
                                        &quot;slidesPerView&quot;: 4,
                                        &quot;spaceBetween&quot;: 30
                                    }
                                }
                            }">
                                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);" id="swiper-wrapper-b48367f05c68a645" aria-live="polite">
                                    <div class="swiper-slide swiper-slide-active" style="width: 255px; margin-right: 30px;" role="group" aria-label="1 / 7">
                                        <div class="tf-card-box style-1">
                                            <div class="card-media">
                                                <a href="#">
                                                    <img src="assets/images/box-item/card-item-01.jpg" alt="">
                                                </a>
                                                <span class="wishlist-button icon-heart"></span>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"><div aria-hidden="true" class="countdown__timer"><span class="countdown__item" style="display: none;"><span class="countdown__value countdown__value--0 js-countdown__value--0">0</span><span class="countdown__label">d</span></span><span class="countdown__item"><span class="countdown__value countdown__value--1 js-countdown__value--1">02</span><span class="countdown__label">h</span></span><span class="countdown__item"><span class="countdown__value countdown__value--2 js-countdown__value--2">03</span><span class="countdown__label">m</span></span><span class="countdown__item"><span class="countdown__value countdown__value--3 js-countdown__value--3">58</span><span class="countdown__label">s</span></span></div></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                            <div class="author flex items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar/avatar-box-01.jpg" alt="Image">
                                                </div>
                                                <div class="info">
                                                    <span>Posted by:</span>
                                                    <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Current Bid</span>
                                                <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next" style="width: 255px; margin-right: 30px;" role="group" aria-label="2 / 7">
                                        <div class="tf-card-box style-1">
                                            <div class="card-media">
                                                <a href="#">
                                                    <img src="assets/images/box-item/card-item-02.jpg" alt="">
                                                </a>
                                                <span class="wishlist-button icon-heart"></span>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"><div aria-hidden="true" class="countdown__timer"><span class="countdown__item" style="display: none;"><span class="countdown__value countdown__value--0 js-countdown__value--0">0</span><span class="countdown__label">d</span></span><span class="countdown__item"><span class="countdown__value countdown__value--1 js-countdown__value--1">02</span><span class="countdown__label">h</span></span><span class="countdown__item"><span class="countdown__value countdown__value--2 js-countdown__value--2">03</span><span class="countdown__label">m</span></span><span class="countdown__item"><span class="countdown__value countdown__value--3 js-countdown__value--3">58</span><span class="countdown__label">s</span></span></div></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                            <div class="author flex items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar/avatar-box-02.jpg" alt="Image">
                                                </div>
                                                <div class="info">
                                                    <span>Posted by:</span>
                                                    <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Current Bid</span>
                                                <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 255px; margin-right: 30px;" role="group" aria-label="3 / 7">
                                        <div class="tf-card-box style-1">
                                            <div class="card-media">
                                                <a href="#">
                                                    <img src="assets/images/box-item/card-item-03.jpg" alt="">
                                                </a>
                                                <span class="wishlist-button icon-heart"></span>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"><div aria-hidden="true" class="countdown__timer"><span class="countdown__item" style="display: none;"><span class="countdown__value countdown__value--0 js-countdown__value--0">0</span><span class="countdown__label">d</span></span><span class="countdown__item"><span class="countdown__value countdown__value--1 js-countdown__value--1">02</span><span class="countdown__label">h</span></span><span class="countdown__item"><span class="countdown__value countdown__value--2 js-countdown__value--2">03</span><span class="countdown__label">m</span></span><span class="countdown__item"><span class="countdown__value countdown__value--3 js-countdown__value--3">58</span><span class="countdown__label">s</span></span></div></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                            <div class="author flex items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar/avatar-box-03.jpg" alt="Image">
                                                </div>
                                                <div class="info">
                                                    <span>Posted by:</span>
                                                    <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Current Bid</span>
                                                <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 255px; margin-right: 30px;" role="group" aria-label="4 / 7">
                                        <div class="tf-card-box style-1">
                                            <div class="card-media">
                                                <a href="#">
                                                    <img src="assets/images/box-item/card-item-04.jpg" alt="">
                                                </a>
                                                <span class="wishlist-button icon-heart"></span>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"><div aria-hidden="true" class="countdown__timer"><span class="countdown__item" style="display: none;"><span class="countdown__value countdown__value--0 js-countdown__value--0">0</span><span class="countdown__label">d</span></span><span class="countdown__item"><span class="countdown__value countdown__value--1 js-countdown__value--1">02</span><span class="countdown__label">h</span></span><span class="countdown__item"><span class="countdown__value countdown__value--2 js-countdown__value--2">03</span><span class="countdown__label">m</span></span><span class="countdown__item"><span class="countdown__value countdown__value--3 js-countdown__value--3">58</span><span class="countdown__label">s</span></span></div></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                            <div class="author flex items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar/avatar-box-04.jpg" alt="Image">
                                                </div>
                                                <div class="info">
                                                    <span>Posted by:</span>
                                                    <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Current Bid</span>
                                                <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 255px; margin-right: 30px;" role="group" aria-label="5 / 7">
                                        <div class="tf-card-box style-1">
                                            <div class="card-media">
                                                <a href="#">
                                                    <img src="assets/images/box-item/card-item-01.jpg" alt="">
                                                </a>
                                                <span class="wishlist-button icon-heart"></span>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"><div aria-hidden="true" class="countdown__timer"><span class="countdown__item" style="display: none;"><span class="countdown__value countdown__value--0 js-countdown__value--0">0</span><span class="countdown__label">d</span></span><span class="countdown__item"><span class="countdown__value countdown__value--1 js-countdown__value--1">02</span><span class="countdown__label">h</span></span><span class="countdown__item"><span class="countdown__value countdown__value--2 js-countdown__value--2">03</span><span class="countdown__label">m</span></span><span class="countdown__item"><span class="countdown__value countdown__value--3 js-countdown__value--3">58</span><span class="countdown__label">s</span></span></div></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                            <div class="author flex items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar/avatar-box-05.jpg" alt="Image">
                                                </div>
                                                <div class="info">
                                                    <span>Posted by:</span>
                                                    <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Current Bid</span>
                                                <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 255px; margin-right: 30px;" role="group" aria-label="6 / 7">
                                        <div class="tf-card-box style-1">
                                            <div class="card-media">
                                                <a href="#">
                                                    <img src="assets/images/box-item/card-item-02.jpg" alt="">
                                                </a>
                                                <span class="wishlist-button icon-heart"></span>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"><div aria-hidden="true" class="countdown__timer"><span class="countdown__item" style="display: none;"><span class="countdown__value countdown__value--0 js-countdown__value--0">0</span><span class="countdown__label">d</span></span><span class="countdown__item"><span class="countdown__value countdown__value--1 js-countdown__value--1">02</span><span class="countdown__label">h</span></span><span class="countdown__item"><span class="countdown__value countdown__value--2 js-countdown__value--2">03</span><span class="countdown__label">m</span></span><span class="countdown__item"><span class="countdown__value countdown__value--3 js-countdown__value--3">58</span><span class="countdown__label">s</span></span></div></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                            <div class="author flex items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar/avatar-box-06.jpg" alt="Image">
                                                </div>
                                                <div class="info">
                                                    <span>Posted by:</span>
                                                    <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Current Bid</span>
                                                <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 255px; margin-right: 30px;" role="group" aria-label="7 / 7">
                                        <div class="tf-card-box style-1">
                                            <div class="card-media">
                                                <a href="#">
                                                    <img src="assets/images/box-item/card-item-03.jpg" alt="">
                                                </a>
                                                <span class="wishlist-button icon-heart"></span>
                                                <div class="featured-countdown">
                                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"><div aria-hidden="true" class="countdown__timer"><span class="countdown__item" style="display: none;"><span class="countdown__value countdown__value--0 js-countdown__value--0">0</span><span class="countdown__label">d</span></span><span class="countdown__item"><span class="countdown__value countdown__value--1 js-countdown__value--1">02</span><span class="countdown__label">h</span></span><span class="countdown__item"><span class="countdown__value countdown__value--2 js-countdown__value--2">03</span><span class="countdown__label">m</span></span><span class="countdown__item"><span class="countdown__value countdown__value--3 js-countdown__value--3">58</span><span class="countdown__label">s</span></span></div></span>
                                                </div>
                                                <div class="button-place-bid">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Place Bid</span></a>
                                                </div>
                                            </div>
                                            <h5 class="name"><a href="nft-detail-2.html">Dayco serpentine belt</a></h5>
                                            <div class="author flex items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar/avatar-box-07.jpg" alt="Image">
                                                </div>
                                                <div class="info">
                                                    <span>Posted by:</span>
                                                    <h6><a href="author-2.html">Cody Fisher</a> </h6>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="meta-info flex items-center justify-between">
                                                <span class="text-bid">Current Bid</span>
                                                <h6 class="price gem"><i class="icon-gem"></i>0,34</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                                <div class="slider-next swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-b48367f05c68a645" aria-disabled="false"></div>
                                <div class="slider-prev swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-b48367f05c68a645" aria-disabled="true"></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                    </div>
                </div>
            </div>



</template>

<script>

export default {
  data() {
      return {
        isExpanded: [false, false, false, false ],

        activeId: null,


      };
    },


    methods: {

        toggleExpand(m){
            alert(this.isExpanded[m])
            this.activeId = m;
            this.isExpanded[m] = !this.isExpanded[m];



        }

    }
}
</script>

