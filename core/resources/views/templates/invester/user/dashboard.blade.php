
 @extends($activeTemplate . 'layouts.master')
@section('content')
   


<body class="uni-body pages-home-home"><noscript><strong>Please enable JavaScript to continue.</strong></noscript>
    <uni-app class="uni-app--maxwidth">
        <uni-page data-page="pages/home/home">
            <!---->
            <uni-page-refresh>
                <div class="uni-page-refresh" style="margin-top: 0px;">
                    <div class="uni-page-refresh-inner"><svg fill="#333333" width="24" height="24" viewBox="0 0 24 24" class="uni-page-refresh__icon"><path d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg>
                        <svg
                            width="24" height="24" viewBox="25 25 50 50" class="uni-page-refresh__spinner">
                            <circle stroke="#333333" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10" class="uni-page-refresh__path"></circle>
                            </svg>
                    </div>
                </div>
            </uni-page-refresh>
            <uni-page-wrapper>
                <uni-page-body>
                    <uni-view data-v-df4f8c2a="" class="container">
                        <uni-view data-v-c4b04b80="" data-v-7edaee84="" data-v-df4f8c2a="" class="u-navbar" z-index="100" title="Home">
                            <uni-view data-v-c4b04b80="" class="u-navbar__placeholder" style="height: 44px;"></uni-view>
                            <uni-view data-v-c4b04b80="" class="u-navbar--fixed">
                                <uni-view data-v-ba701168="" data-v-c4b04b80="" class="u-status-bar" style="height: 0px; background-color: rgb(255, 255, 255);"></uni-view>
                                <uni-view data-v-c4b04b80="" class="u-navbar__content" style="height: 44px; background-color: rgb(255, 255, 255);">
                                    <uni-view data-v-c4b04b80="" class="u-navbar__content__left">
                                        <uni-view data-v-7edaee84="" class="navi-left">
                                            <uni-view data-v-7edaee84="" class="info">
                                                <uni-image data-v-7edaee84="" class="info-icon">
                                                    <div style="background-image: url({{asset ('img/avatar.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                    <!----><img src="/static/img/avatar.png" draggable="false"></uni-image>
                                                <uni-text data-v-7edaee84="" class="info-title"><span>My</span></uni-text>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                    <uni-text data-v-c4b04b80="" class="u-line-1 u-navbar__content__title" style="width: 200px;"><span>Home</span></uni-text>
                                    <uni-view data-v-c4b04b80="" class="u-navbar__content__right">
                                        <uni-view data-v-7edaee84="" class="navi-right">
                                            <uni-image data-v-df4f8c2a="" class="navi-img">
                                                <div style="background-image: url({{asset ('img/language.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                <!----><img src="/static/language.png" draggable="false"></uni-image>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
                            </uni-view>
                        </uni-view>
                        <uni-view data-v-33022c13="" data-v-df4f8c2a="" id="uwYhuuhFiThTJU4dBKSRHIb139bxM89N" class="u-sticky" style="background-color: rgb(255, 255, 255); position: sticky; z-index: 10; top: 44px;">
                            <uni-view data-v-33022c13="" class="u-sticky__content" style="">
                                <uni-view data-v-df4f8c2a="" class="notice">
                                    <uni-view data-v-37682317="" data-v-df4f8c2a="" class="u-notice-bar notice__info" style="background-color: rgb(255, 255, 255);">
                                        <uni-view data-v-50290fe5="" data-v-37682317="" class="u-notice">
                                            <uni-view data-v-50290fe5="" class="u-notice__left-icon">
                                                <uni-view data-v-729c0bcb="" data-v-50290fe5="" class="u-icon u-icon--right">
                                                    <uni-text data-v-729c0bcb="" hover-class="" class="u-icon__icon uicon-volume" style="font-size: 19px; line-height: 19px; font-weight: normal; top: 0px; color: rgb(51, 51, 51);"><span></span></uni-text>
                                                    <!---->
                                                </uni-view>
                                            </uni-view>
                                            <uni-swiper data-v-50290fe5="" class="u-notice__swiper">
                                                <div class="uni-swiper-wrapper">
                                                    <div class="uni-swiper-slides">
                                                        <div class="uni-swiper-slide-frame" style="width: 100%; height: 100%; transform: translate(0px, 0%) translateZ(0px);">
                                                            <uni-swiper-item data-v-50290fe5="" class="u-notice__swiper__item" style="position: absolute; width: 100%; height: 100%; transform: translate(0px, 0%) translateZ(0px);">
                                                                <uni-text data-v-50290fe5="" class="u-notice__swiper__item__text u-line-1" style="color: rgb(51, 51, 51); font-size: 14px;"><span><marquee>HELLO  !</marquee></span></uni-text>
                                                            </uni-swiper-item>
                                                        </div>
                                                    </div>
                                                </div>
                                            </uni-swiper>
                                            <!---->
                                        </uni-view>
                                    </uni-view>
                                    <uni-view data-v-df4f8c2a="" class="notice__more">
                                        <uni-text data-v-df4f8c2a="" class="title"><span>More</span></uni-text>
                                        <uni-image data-v-df4f8c2a="" class="img">
                                            <div style="background-image: url({{asset ('img/white_next_small@2x.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                            <!----><img src="/static/img/home/white_next_small@2x.png" draggable="false"></uni-image>
                                    </uni-view>
                                </uni-view>
                            </uni-view>
                        </uni-view>
                        <uni-view data-v-df4f8c2a="" class="func">
                            <uni-view data-v-df4f8c2a=""    onclick="window.location.href='{{route ('user.deposit.index')}}'"   class="func__item">
                                <uni-image data-v-df4f8c2a="" class="img">
                                    <div style="background-image: url({{asset ('img/company@2x.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                    <!----><img src="/static/img/home/company@2x.png" draggable="false"></uni-image>
                                <uni-text data-v-df4f8c2a="" class="title u-line-1"><span>Recharge</span></uni-text>
                            </uni-view>
                            <uni-view data-v-df4f8c2a="" class="func__item"   onclick="window.location.href='{{route ('user.withdraw')}}'"     >
                                <uni-image data-v-df4f8c2a="" class="img">
                                    <div style="background-image: url({{asset ('img/product@2x.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                    <!----><img src="/static/img/home/product@2x.png" draggable="false"></uni-image>
                                <uni-text data-v-df4f8c2a="" class="title u-line-1"><span>Withdraw</span></uni-text>
                            </uni-view>
                            <uni-view data-v-df4f8c2a="" class="func__item"   onclick="window.location.href='{{route ('user.invest.log')}}'"  >
                                <uni-image data-v-df4f8c2a="" class="img">
                                    <div style="background-image: url({{asset ('img/video@2x.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                    <!----><img src="/static/img/home/video@2x.png" draggable="false"></uni-image>
                                <uni-text data-v-df4f8c2a="" class="title u-line-1"><span>Device</span></uni-text>
                            </uni-view>
                            <uni-view data-v-df4f8c2a="" class="func__item" onclick="window.location.href='{{route ('plan')}}'"  >
                                <uni-image data-v-df4f8c2a="" class="img">
                                    <div style="background-image: url({{asset ('img/screen@2x.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                    <!----><img src="/static/img/home/screen@2x.png" draggable="false"></uni-image>
                                <uni-text data-v-df4f8c2a="" class="title u-line-1"><span>Product</span></uni-text>
                            </uni-view>
                            <uni-view data-v-df4f8c2a="" class="func__item"  onclick="window.location.href='{{route ('ticket.index')}}'"  >
                                <uni-image data-v-df4f8c2a="" class="img">
                                    <div style="background-image: url({{asset ('img/preference.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                    <!----><img src="/static/img/home/preference.png" draggable="false"></uni-image>
                                <uni-text data-v-df4f8c2a="" class="title u-line-1"><span>Support</span></uni-text>
                            </uni-view>
                        </uni-view>
                        <uni-view data-v-df4f8c2a="" class="header">
                            <uni-view data-v-04f9a63b="" data-v-df4f8c2a="" class="u-swiper" width="710rpx" style="background-color: rgb(243, 244, 246); height: 177px; border-radius: 10px;">
                                <uni-swiper data-v-04f9a63b="" easingfunction="default" class="u-swiper__wrapper" style="height: 177px;">
                                    <div class="uni-swiper-wrapper">
                                        <div class="uni-swiper-slides" style="inset: 0px;">
                                            <div class="uni-swiper-slide-frame" style="width: 100%; height: 100%; transform: translate(0%, 0px) translateZ(0px);">

                                     
                                            </div>
                                        </div>
                                    </div>
                                </uni-swiper>
                                
                                
                                <html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

          
          
          
      <div class="swiper-slide"><img src="{{asset ('img/1723200460396.png')}}">  </div>
          <div class="swiper-slide"><img src="{{asset ('img/1723891524542.png')}}">  </div>
          <div class="swiper-slide"><img src="{{asset ('img/1723200821049.png')}}">  </div>
    
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
</body>

</html>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <uni-view data-v-04f9a63b="" class="u-swiper__indicator" style="bottom: 15px;">
                                    <uni-view data-v-20a7f6ea="" data-v-04f9a63b="" class="u-swiper-indicator">
                                        <!---->
                                        <uni-view data-v-20a7f6ea="" class="u-swiper-indicator__wrapper">
                                            <uni-view data-v-20a7f6ea="" class="u-swiper-indicator__wrapper__dot u-swiper-indicator__wrapper__dot--active" style="background-color: rgb(255, 255, 255);"></uni-view>
                                            <uni-view data-v-20a7f6ea="" class="u-swiper-indicator__wrapper__dot" style="background-color: rgba(255, 255, 255, 0.35);"></uni-view>
                                            <uni-view data-v-20a7f6ea="" class="u-swiper-indicator__wrapper__dot" style="background-color: rgba(255, 255, 255, 0.35);"></uni-view>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
                            </uni-view>
                        </uni-view>
                        
                        
                     
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <uni-view data-v-df4f8c2a="" class="intro">
                            <uni-image data-v-df4f8c2a="" class="intro__img">
                                <div style="background-image: url({{asset ('img/shuju@2x.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                <!----><img src="/static/img/home/shuju@2x.png" draggable="false"></uni-image>
                            <uni-image data-v-df4f8c2a="" class="intro__img">
                                <div style="background-image: url({{asset ('img/rank@2x.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                <!----><img src="/static/img/home/rank@2x.png" draggable="false"></uni-image>
                            <uni-image data-v-df4f8c2a="" class="intro__img">
                                <div style="background-image: url({{asset ('img/ai@2x.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                <!----><img src="/static/img/home/ai@2x.png" draggable="false"></uni-image>
                        </uni-view>
                        <uni-view data-v-df4f8c2a="" class="intro">
                            <uni-view data-v-df4f8c2a="" class="intro__item">
                                <uni-image data-v-df4f8c2a="" class="icon">
                                    <div style="background-image: url({{asset ('img/1722851316306.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                    <!----><img src="https://zhixin-india.oss-accelerate.aliyuncs.com/image/1722851316306.png" draggable="false"></uni-image>
                                <uni-view data-v-df4f8c2a="" class="info">
                                    <uni-text data-v-df4f8c2a="" class="info__title"><span>COMPANY</span></uni-text>
                                    <uni-view data-v-df4f8c2a="" class="info__content">
                                        <uni-view data-v-35fac40f="" data-v-df4f8c2a="" id="_root" class="u-line-4 _select _root" container-style="padding: 0px 0px;">
                                            <uni-view data-v-2cf1dc4d="" data-v-35fac40f="" class="_undefined undefined">
                                                <!---->
                                                <uni-rich-text data-v-2cf1dc4d="">
                                                    <div style="position: relative;">
                                                        <p data-v-2cf1dc4d="" style="color:#333;line-height:24px;font-size:14px"><span data-v-2cf1dc4d="" style="color:#000000;line-height:24px;font-size:14px">Z-Sing AI Tech International established in Singapore in 2018, our core business is big data and AI related technology. Facing the dramatically uprising market trend and need of short-form videos, we launched our fourth generation of AI digital human this May. We strongly believe that if we could ever be able to create a perfect combination of short-form video and AI digital human, we could trigger a huge need in the market, hence we developed our fourth generation of digital human. Our fourth generation of digital human equipped with our latest processing unit, simply key in script before live streaming starts, our AI digital human will conduct 24/7 live streaming by itself, totally free from human labor.</span></p>
                                                        <uni-resize-sensor>
                                                            <div>
                                                                <div></div>
                                                            </div>
                                                            <div>
                                                                <div></div>
                                                            </div>
                                                        </uni-resize-sensor>
                                                    </div>
                                                </uni-rich-text>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
                                <!---->
                            </uni-view>
                            <uni-view data-v-df4f8c2a="" class="intro__item">
                                <!---->
                                <uni-view data-v-df4f8c2a="" class="info">
                                    <uni-text data-v-df4f8c2a="" class="info__title"><span>PRODUCT</span></uni-text>
                                    <uni-view data-v-df4f8c2a="" class="info__content">
                                        <uni-view data-v-35fac40f="" data-v-df4f8c2a="" id="_root" class="u-line-4 _select _root" container-style="padding: 0px 0px;">
                                            <uni-view data-v-2cf1dc4d="" data-v-35fac40f="" class="_undefined undefined">
                                                <!---->
                                                <uni-rich-text data-v-2cf1dc4d="">
                                                    <div style="position: relative;">
                                                        <p data-v-2cf1dc4d="" style="color:#333;line-height:24px;font-size:14px"><span data-v-2cf1dc4d="" style="color:#000000;line-height:24px;font-size:14px">The fourth generation AI digital human developed by Zsing can understand viewer’s needs precisely, generate digital human in batches, working 24/7 to save money and increase productivity</span></p>
                                                        <uni-resize-sensor>
                                                            <div>
                                                                <div></div>
                                                            </div>
                                                            <div>
                                                                <div></div>
                                                            </div>
                                                        </uni-resize-sensor>
                                                    </div>
                                                </uni-rich-text>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
                                <uni-image data-v-df4f8c2a="" class="icon">
                                    <div style="background-image: url({{asset ('img/1722851290288.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                    <!----><img src="https://zhixin-india.oss-accelerate.aliyuncs.com/image/1722851290288.png" draggable="false"></uni-image>
                            </uni-view>
                            <uni-view data-v-df4f8c2a="" class="intro__item">
                                <uni-image data-v-df4f8c2a="" class="icon">
                                    <div style="background-image: url({{asset ('img/1722851350531.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                    <!----><img src="https://zhixin-india.oss-accelerate.aliyuncs.com/image/1722851350531.png" draggable="false"></uni-image>
                                <uni-view data-v-df4f8c2a="" class="info">
                                    <uni-text data-v-df4f8c2a="" class="info__title"><span>COMPUTER ROOM</span></uni-text>
                                    <uni-view data-v-df4f8c2a="" class="info__content">
                                        <uni-view data-v-35fac40f="" data-v-df4f8c2a="" id="_root" class="u-line-4 _select _root" container-style="padding: 0px 0px;">
                                            <uni-view data-v-2cf1dc4d="" data-v-35fac40f="" class="_undefined undefined">
                                                <!---->
                                                <uni-rich-text data-v-2cf1dc4d="">
                                                    <div style="position: relative;">
                                                        <p data-v-2cf1dc4d="" style="color:#333;line-height:24px;font-size:14px"><span data-v-2cf1dc4d="" style="color:#000000;line-height:24px;font-size:14px">Our server rooms are equipped with world-class ventilation and energy system to avoid power fluctuations while maintain an ideal temperature level. Professional fire precaution and emergency response, our support team provide 24/7 service to guarantee the stable operation of our digital human</span></p>
                                                        <uni-resize-sensor>
                                                            <div>
                                                                <div></div>
                                                            </div>
                                                            <div>
                                                                <div></div>
                                                            </div>
                                                        </uni-resize-sensor>
                                                    </div>
                                                </uni-rich-text>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
                                <!---->
                            </uni-view>
                        </uni-view>
                        <uni-view data-v-df4f8c2a="" style="width: 100%; height: 60px;"></uni-view>
                        <uni-view data-v-c0ac66b0="" data-v-68bc644f="" data-v-3542979d="" data-v-df4f8c2a="" class="u-popup">
                            <!---->
                            <!---->
                        </uni-view>
                        <uni-view data-v-c0ac66b0="" data-v-68bc644f="" data-v-395d9e2c="" data-v-df4f8c2a="" class="u-popup">
                            <!---->
                            <!---->
                        </uni-view>
                        <uni-view data-v-c0ac66b0="" data-v-68bc644f="" data-v-7679427e="" data-v-df4f8c2a="" class="u-popup">
                            <!---->
                            <!---->
                        </uni-view>
                        <uni-view data-v-c0ac66b0="" data-v-68bc644f="" data-v-ba5104ea="" data-v-df4f8c2a="" class="u-popup">
                            <!---->
                            <!---->
                        </uni-view>
                        <uni-view data-v-c0ac66b0="" data-v-df4f8c2a="" class="u-popup" borderradius="30rpx">
                            <!---->
                            <!---->
                        </uni-view>
@endsection