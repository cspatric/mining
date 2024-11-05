@extends($activeTemplate.'layouts.app')
@section('panel')

    

    
<html lang="zh-CN" style="--status-bar-height: 0px; --top-window-height: 0px; --window-left: 0px; --window-right: 0px; --window-margin: 0px; --window-top: calc(var(--top-window-height) + 0px); --window-bottom: 0px;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/static/favicon.ico">
    <title></title>
    <script>
        var coverSupport = 'CSS' in window && typeof CSS.supports === 'function' && (CSS.supports('top: env(a)') || CSS.supports('top: constant(a)'))
        document.write('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0' + (coverSupport ? ', viewport-fit=cover' : '') + '" />')
    </script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover">
    <link rel="stylesheet" href="{{asset ('css/login/login.css')}}">
       <link rel="stylesheet" href="{{asset ('core/css/home.css')}}">
</head>
    
@yield('content')





                        <!---->
                        <uni-view data-v-0fb526cb="" data-v-fa2b2b42="" data-v-df4f8c2a="" class="u-tabbar">
                            <uni-view data-v-0fb526cb="" class="u-tabbar__content u-border-top u-tabbar--fixed" style="z-index: 1;">
                                <uni-view data-v-0fb526cb="" class="u-tabbar__content__item-wrapper">
                                    <uni-view data-v-739c4cc8="" data-v-fa2b2b42="" class="u-tabbar-item"    onclick="window.location.href='{{route ('user.home')}}'"   >
                                        <uni-view data-v-739c4cc8="" class="u-tabbar-item__icon">
                                            <uni-image data-v-fa2b2b42="" class="tabbar-icon">
                                                <div style="background-image: url({{asset ('img/home_s@2x.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                <!----><img src="/static/img/tabbar1/home_s@2x.png" draggable="false"></uni-image>
                                            <!---->
                                        </uni-view>
                                        <uni-text data-v-739c4cc8="" class="u-tabbar-item__text" style="color: rgb(25, 117, 255);"><span>Home</span></uni-text>
                                    </uni-view>
                                    <uni-view data-v-739c4cc8="" data-v-fa2b2b42="" class="u-tabbar-item"  onclick="window.location.href='{{route ('user.invest.log')}}'"    >
                                        <uni-view data-v-739c4cc8="" class="u-tabbar-item__icon">
                                            <uni-image data-v-fa2b2b42="" class="tabbar-icon">
                                                <div style="background-image: url({{asset ('img/mall_d@2x.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                <!----><img src="/static/img/tabbar1/mall_d@2x.png" draggable="false"></uni-image>
                                            <!---->
                                        </uni-view>
                                        <uni-text data-v-739c4cc8="" class="u-tabbar-item__text" style="color: rgb(44, 48, 69);"><span>Device</span></uni-text>
                                    </uni-view>
                                    <uni-view data-v-739c4cc8="" data-v-fa2b2b42="" class="u-tabbar-item"   onclick="window.location.href='{{route ('plan')}}'">
                                        <uni-view data-v-739c4cc8="" class="u-tabbar-item__icon">
                                            <uni-image data-v-fa2b2b42="" class="tabbar-icon">
                                                <div style="background-image: url({{asset ('img/AI.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                <!----><img src="/static/img/tabbar1/AI.png" draggable="false"></uni-image>
                                            <!---->
                                        </uni-view>
                                        <uni-text data-v-739c4cc8="" class="u-tabbar-item__text" style="color: rgb(44, 48, 69);"><span>Tap</span></uni-text>
                                    </uni-view>
                                    <uni-view data-v-739c4cc8="" data-v-fa2b2b42="" class="u-tabbar-item"  onclick="window.location.href='{{ route('user.transactions') }}'"    >
                                        <uni-view data-v-739c4cc8="" class="u-tabbar-item__icon">
                                            <uni-image data-v-fa2b2b42="" class="tabbar-icon">
                                                <div style="background-image: url({{asset ('img/info_d@2x.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                <!----><img src="/static/img/tabbar1/info_d@2x.png" draggable="false"></uni-image>
                                            <!---->
                                        </uni-view>
                                        <uni-text data-v-739c4cc8="" class="u-tabbar-item__text" style="color: rgb(44, 48, 69);"><span>Share Option</span></uni-text>
                                    </uni-view>
                                    <uni-view data-v-739c4cc8="" data-v-fa2b2b42="" class="u-tabbar-item" onclick="window.location.href='{{route ('user.referrals')}}'"   >
                                        <uni-view data-v-739c4cc8="" class="u-tabbar-item__icon">
                                            <uni-image data-v-fa2b2b42="" class="tabbar-icon">
                                                <div style="background-image: url({{asset ('img/profit_d@2x.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                <!----><img src="/static/img/tabbar1/profit_d@2x.png" draggable="false"></uni-image>
                                            <!---->
                                        </uni-view>
                                        <uni-text data-v-739c4cc8="" class="u-tabbar-item__text" style="color: rgb(44, 48, 69);"><span>Team</span></uni-text>
                                    </uni-view>
                                </uni-view>
                                <!---->
                            </uni-view>
                            <!---->
                        </uni-view>
                    </uni-view>
                </uni-page-body>
            </uni-page-wrapper>
        </uni-page>
        <uni-tabbar class="uni-tabbar-bottom" style="display: none;">
            <div class="uni-tabbar" style="background-color: rgb(255, 255, 255); backdrop-filter: none;">
                <div class="uni-tabbar-border" style="background-color: rgba(0, 0, 0, 0.33);"></div>
                <div class="uni-tabbar__item">
                    <!---->
                    <div class="uni-tabbar__bd" style="height: 50px;">
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
                <div class="uni-tabbar__item">
                    <!---->
                    <div class="uni-tabbar__bd" style="height: 50px;">
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
                <div class="uni-tabbar__item">
                    <!---->
                    <div class="uni-tabbar__bd" style="height: 50px;">
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
                <div class="uni-tabbar__item">
                    <!---->
                    <div class="uni-tabbar__bd" style="height: 50px;">
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
                <div class="uni-tabbar__item">
                    <!---->
                    <div class="uni-tabbar__bd" style="height: 50px;">
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
            </div>
            <div class="uni-placeholder" style="height: 50px;"></div>
        </uni-tabbar>
        <!---->
        <uni-actionsheet>
            <div class="uni-mask uni-actionsheet__mask" style="display: none;"></div>
            <div class="uni-actionsheet">
                <div class="uni-actionsheet__menu">
                    <!---->
                    <!---->
                    <div style="max-height: 260px; overflow: hidden;">
                        <div style="transform: translateY(0px) translateZ(0px);"></div>
                    </div>
                </div>
                <div class="uni-actionsheet__action">
                    <div class="uni-actionsheet__cell" style="color: rgb(0, 0, 0);"> Cancel </div>
                </div>
                <div></div>
            </div>
            <!---->
        </uni-actionsheet>
        <uni-modal style="display: none;">
            <div class="uni-mask"></div>
            <div class="uni-modal">
                <!---->
                <div class="uni-modal__bd"></div>
                <div class="uni-modal__ft">
                    <div class="uni-modal__btn uni-modal__btn_default" style="color: rgb(0, 0, 0);"> Cancel </div>
                    <div class="uni-modal__btn uni-modal__btn_primary" style="color: rgb(0, 122, 255);"> OK </div>
                </div>
            </div>
            <!---->
        </uni-modal>
        <!---->
        <!---->
    </uni-app>
    <script src="https://web.zsingtech.com/static/js/chunk-vendors.124f9b16.js"></script>
    <script src="https://web.zsingtech.com/static/js/index.20179e77.js"></script>
    <div style="position: absolute; left: 0px; top: 0px; width: 0px; height: 0px; z-index: -1; overflow: hidden; visibility: hidden;">
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-top);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 400px; height: 400px;"></div>
        </div>
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-top);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 250%; height: 250%;"></div>
        </div>
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-left);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 400px; height: 400px;"></div>
        </div>
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-left);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 250%; height: 250%;"></div>
        </div>
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-right);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 400px; height: 400px;"></div>
        </div>
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-right);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 250%; height: 250%;"></div>
        </div>
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-bottom);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 400px; height: 400px;"></div>
        </div>
        <div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-bottom);">
            <div style="transition: all; animation: auto ease 0s 1 normal none running none; width: 250%; height: 250%;"></div>
        </div>
    </div>
</body>

</html>







@endsection
