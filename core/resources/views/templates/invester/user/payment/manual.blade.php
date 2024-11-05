@extends($activeTemplate.'layouts.master')
@section('content')
   


           
    <form action="{{ route('user.deposit.manual.update') }}" method="POST" enctype="multipart/form-data">
        @csrf       
        
        
        
        
        
           
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
    <link rel="stylesheet" href="{{asset ('core/css/r.css')}}">
  

<body class="uni-body pages-recharge-recharge"><noscript><strong>Please enable JavaScript to continue.</strong></noscript>
    <uni-app class="uni-app--maxwidth">
         <form action="{{ route('user.deposit.insert') }}" method="post">
                            @csrf
                            <input type="hidden" name="currency">
        
        <uni-page data-page="pages/recharge/recharge">
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
                    <uni-view data-v-24d80312="" class="container">
                        <uni-view data-v-c4b04b80="" data-v-24d80312="" class="u-navbar">
                            <uni-view data-v-c4b04b80="" class="u-navbar__placeholder" style="height: 44px;"></uni-view>
                            <uni-view data-v-c4b04b80="" class="u-navbar--fixed">
                                <uni-view data-v-ba701168="" data-v-c4b04b80="" class="u-status-bar" style="height: 0px; background-color: rgb(255, 255, 255);"></uni-view>
                                <uni-view data-v-c4b04b80="" class="u-navbar__content" style="height: 44px; background-color: rgb(255, 255, 255);">
                                    <uni-view data-v-c4b04b80="" class="u-navbar__content__left">
                                        <uni-view data-v-729c0bcb="" data-v-c4b04b80="" class="u-icon u-icon--right">
                                            <uni-text data-v-729c0bcb="" hover-class="" class="u-icon__icon uicon-arrow-left" style="font-size: 20px; line-height: 20px; font-weight: normal; top: 0px; color: rgb(0, 0, 0);"><span></span></uni-text>
                                            <!---->
                                        </uni-view>
                                        <!---->
                                    </uni-view>
                                    <uni-text data-v-c4b04b80="" class="u-line-1 u-navbar__content__title" style="width: 200px;"><span>Deposit</span></uni-text>
                                    <uni-view data-v-c4b04b80="" class="u-navbar__content__right">
                                        <uni-image data-v-24d80312="" class="navi-right">
                                            <div style="background-image: url(&quot;/static/img/me/order@2x.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                            <!----><img src="/static/img/me/order@2x.png" draggable="false"></uni-image>
                                    </uni-view>
                                </uni-view>
                            </uni-view>
                        </uni-view>
                        <uni-view data-v-33022c13="" data-v-24d80312="" id="uct3NhLj5fzkKwm1caRN0rGyJUQqC4lH" class="u-sticky" style="background-color: rgb(255, 255, 255); position: sticky; z-index: 5; top: 44px;">
                            <uni-view data-v-33022c13="" class="u-sticky__content" style="">
                                <uni-view data-v-78cf8ead="" data-v-24d80312="" class="u-tabs">
                                    <uni-view data-v-78cf8ead="" class="u-tabs__wrapper">
                                        <uni-view data-v-78cf8ead="" class="u-tabs__wrapper__scroll-view-wrapper">
                                            <uni-scroll-view data-v-78cf8ead="" class="u-tabs__wrapper__scroll-view">
                                                <div class="uni-scroll-view">
                                                    <div class="uni-scroll-view" style="overflow: hidden;">
                                                        <div class="uni-scroll-view-content">
                                                            <!---->
                                                            <uni-view data-v-78cf8ead="" class="u-tabs__wrapper__nav">
                                                                <uni-view data-v-78cf8ead="" class="u-tabs__wrapper__nav__item u-tabs__wrapper__nav__item-0" style="height: 44px; flex: 1 1 0%;">
                                                                    <uni-text data-v-78cf8ead="" class="u-tabs__wrapper__nav__item__text" style="color: rgb(0, 0, 0); transform: scale(1);"><span>Wallet</span></uni-text>
                                                                    <!---->
                                                                </uni-view>
                                                                <uni-view data-v-78cf8ead="" class="u-tabs__wrapper__nav__item u-tabs__wrapper__nav__item-1" style="height: 44px; flex: 1 1 0%;">
                                                                    <uni-text data-v-78cf8ead="" class="u-tabs__wrapper__nav__item__text" style="color: rgb(35, 121, 251); transform: scale(1.05); font-weight: bold;"><span>Cash</span></uni-text>
                                                                    <!---->
                                                                </uni-view>
                                                                <uni-view data-v-78cf8ead="" class="u-tabs__wrapper__nav__line" style="width: 10px; transform: translate(1435px); transition-duration: 300ms; height: 3px; background:  0% 0% / cover rgb(35, 121, 251);"></uni-view>
                                                            </uni-view>
                                                        </div>
                                                    </div>
                                                </div>
                                            </uni-scroll-view>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
                            </uni-view>
                        </uni-view>
                        <uni-view data-v-24d80312="" class="panel">
                            <uni-view data-v-41f87b2a="" data-v-24d80312="" class="info" style="display: none;">
                                <uni-view data-v-41f87b2a="" class="info__select">
                                    <uni-text data-v-41f87b2a="" class="title"><span>Recharge currency</span></uni-text>
                                    <uni-view data-v-0132f082="" data-v-41f87b2a="" class="uni-stat__select left-c" style="width: 100px;">
                                        <!---->
                                        <uni-view data-v-0132f082="" class="uni-stat-box">
                                            <uni-view data-v-0132f082="" class="uni-select round">
                                                <uni-view data-v-0132f082="" class="uni-select__input-box">
                                                    <uni-view data-v-0132f082="" class="uni-select__input-text uni-select__input-placeholder">Select currency</uni-view>
                                                    <uni-image data-v-0132f082="" class="uni-select__input-icon bottom">
                                                        <div style="background-image: url(&quot;/static/triggle_icon.webp&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                        <!----><img src="/static/triggle_icon.webp" draggable="false"></uni-image>
                                                </uni-view>
                                                <!---->
                                                <!---->
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
                                <uni-view data-v-41f87b2a="" class="info__select">
                                    <uni-text data-v-41f87b2a="" class="title"><span>Exchange Rate</span></uni-text>
                                    <uni-text data-v-41f87b2a="" class="left-c"><span>1null ≈ Rs.undefined</span></uni-text>
                                </uni-view>
                                <!---->
                                <uni-view data-v-41f87b2a="" class="info__code">
                                    <!---->
                                    <uni-view data-v-579d686c="" data-v-41f87b2a="" class="uqrcode" style="width: 0px; height: 0px;"></uni-view>
                                </uni-view>
                                <uni-view data-v-41f87b2a="" class="info__address">
                                    <uni-text data-v-41f87b2a="" class="val"><span></span></uni-text>
                                    <uni-button data-v-50bed489="" data-v-41f87b2a="" class="u-button u-reset-button btn u-button--square u-button--normal" app-parameter="" send-message-title="" send-message-path="" lang="en" data-name=""
                                        session-from="" send-message-img="" style="color: white; border-width: 0px; background-image: linear-gradient(90deg, rgb(93, 153, 255) 0%, rgb(173, 118, 255) 100%);">
                                        <!---->
                                        <uni-text data-v-50bed489="" class="u-button__text" style="font-size: 14px;"><span>Copy</span></uni-text>
                                    </uni-button>
                                </uni-view>
                       
                            </uni-view>
                            <uni-view data-v-18037164="" data-v-24d80312="" class="panel_t" style="">
                                <uni-view data-v-18037164="" class="panel_t__desc">Address</uni-view>
                                
                                                    <h3 data-v-41f87b2a="" class="info__tip">@php echo  $data->gateway->description @endphp</h3>
                                                              <button data-v-50bed489="" data-v-18037164=""    id="myTooltip"      onclick="myFunction()" onmouseout="outFunc()"      class="u-button u-reset-button confirm-btn u-button--circle u-button--normal" app-parameter="" send-message-title="" send-message-path="" lang="en" data-name=""
                                    session-from="" send-message-img="" style="color: white; border-width: 0px; background-image: linear-gradient(90deg, rgb(93, 153, 255) 0%, rgb(173, 118, 255) 100%);">
                                    <!---->
                                    <uni-text data-v-50bed489=""  type="button"  class="u-button__text" style="font-size: 14px;"><span>Copy Adress</span></uni-text>
                                </button>
                                                     <h3 data-v-41f87b2a="" class="info__tip">‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </h3>
                                                    
                                                    <h3>Upload Proof</h3>
                                <style>
.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
</style>
	<div style="display:none;">
<input type="text" value="@php echo  $data->gateway->description @endphp" id="myInput">
</div>



	
	
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied "  ;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy";
}
</script>


                                
                                <uni-view data-v-0132f082="" data-v-18037164="" class="uni-stat__select">
                                    <!---->
                                    <uni-view data-v-0132f082="" class="uni-stat-box">
                                        <uni-view data-v-0132f082="" class="uni-select round">
                                            <uni-view data-v-0132f082="" class="uni-select__input-box">
                                                <uni-view data-v-0132f082="" class="uni-select__input-text uni-select__input-placeholder">
                                                
                               
                                          <x-viser-form identifier="id" identifierValue="{{ $gateway->form_id }}" />
                                                </uni-view>
                                                <uni-image data-v-0132f082="" class="uni-select__input-icon bottom">
                                                    <div style="background-image: url(&quot;/static/triggle_icon.webp&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                    <!----><img src="/static/triggle_icon.webp" draggable="false"></uni-image>
                                            </uni-view>
                                            <!---->
                                            <!---->
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
                                
            
            
            
 
            
        
            
            
            
            
            
            
            
            
            
            

                                
                            </uni-view>
                                
                     
                                
                                    <h3 data-v-41f87b2a="" class="info__tip">‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ </h3>
                                
                
                                <button data-v-50bed489="" data-v-18037164="" class="u-button u-reset-button confirm-btn u-button--circle u-button--normal" app-parameter="" send-message-title="" send-message-path="" lang="en" data-name=""
                                    session-from="" send-message-img="" style="color: white; border-width: 0px; background-image: linear-gradient(90deg, rgb(93, 153, 255) 0%, rgb(173, 118, 255) 100%);">
                                    <!---->
                                    <uni-text data-v-50bed489="" class="u-button__text" style="font-size: 14px;"><span>Confirm</span></uni-text>
                                </button>
                                
                             
                                
                                         
                            
                            
                            
                            
                            
                            
                            
                            
                        </uni-view>
                    </uni-view>
                </uni-page-body>
            </uni-page-wrapper>
        </uni-page>

        















@endsection
@push('script')
<script type="text/javascript">
    (function ($) {
        "use strict";
        $('#copyButton').click(function(){
            var copyText = document.getElementById("address");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
        });
    })(jQuery);
</script>
@endpush
