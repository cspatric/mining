
@extends($activeTemplate.'layouts.master')
@section('content')
</head>

<body class="uni-body pages-shop-shop"><noscript><strong>Please enable JavaScript to continue.</strong></noscript>
    <uni-app class="uni-app--maxwidth">
        <uni-page data-page="pages/shop/shop">
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
                    <uni-view data-v-c30e5f1a="" class="container">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <uni-view data-v-c30e5f1a="" class="product">
                       
                        
                        
               
                        
                        
                        
             
                        
                          @foreach ($plans as $plan)
                        

                       
                    

                                            
                                              
                                   
                               
               
                             
                                
             
                         <uni-view data-v-ff6c7d42="" data-v-c30e5f1a="" class="panel">
                                
                            
                                <uni-text data-v-ff6c7d42="" class="panel-title"><span>{{ __($plan->name) }}</span></uni-text>
                                <uni-view data-v-ff6c7d42="" class="panel-desc hidden">
                         
                                    </uni-view>
                                
                                <img src="https://zhixin-india.oss-accelerate.aliyuncs.com/image/1723110497586.png" draggable="false">
                                
                    
                           
                                <uni-view data-v-ff6c7d42="" class="panel-white">
                                    <uni-view data-v-ff6c7d42="" class="spec">
                                        <uni-view data-v-ff6c7d42="" class="panel-spec pad">
                                            <uni-text data-v-ff6c7d42="" class="panel-spec-val"><span>@if ($plan->lifetime == 0)
                                @if ($plan->capital_back == 1)
                                    @lang('capital') +
                                @endif
                                {{ __($plan->interest * $plan->repeat_time) }}{{ $plan->interest_type == 1 ? '%' : ' ' . __($general->cur_text) }}
                            @else
                                @lang('Unlimited')
                            @endif</span></uni-text>
                                            <uni-text data-v-ff6c7d42="" class="panel-spec-desc"><span>Total Profit</span></uni-text>
                                        </uni-view>
                                        <uni-view data-v-ff6c7d42="" class="panel-spec pad">
                                            <uni-text data-v-ff6c7d42="" class="panel-spec-val"><span>{{ $plan->interest_type != 1 ? $general->cur_sym : '' }}{{ showAmount($plan->interest) }}{{ $plan->interest_type == 1 ? '%' : '' }}</span></uni-text>
                                            <uni-text data-v-ff6c7d42="" class="panel-spec-desc"><span>Daily Profit</span></uni-text>
                                        </uni-view>
                                        
                                        
                                        <uni-view data-v-ff6c7d42="" class="panel-spec pad">
                                            <uni-text data-v-ff6c7d42="" class="panel-spec-val"><span>{{ $plan->interest_type != 1 ? $general->cur_sym : '' }}{{ showAmount($plan->interest) }}{{ $plan->interest_type == 1 ? '%' : '' }}</span></uni-text>
                                            <uni-text data-v-ff6c7d42="" class="panel-spec-desc"><span>Daily Profit</span></uni-text>
                                        </uni-view>
                                        
                                        
                                        
                                        
                                    </uni-view>
                                    <uni-view data-v-ff6c7d42="" class="panel-btn-all">
                                        <uni-button data-v-50bed489="" data-v-ff6c7d42="" class="u-button u-reset-button panel-btn u-button--circle u-button--normal" app-parameter="" send-message-title="" send-message-path="" lang="en" data-name="" session-from=""
                                            send-message-img="" style="color: white; border-width: 0px; background-image: linear-gradient(90deg, rgb(93, 153, 255) 0%, rgb(173, 118, 255) 100%);">
                                            <!---->
                                            <uni-text data-v-50bed489="" class="u-button__text" style="font-size: 14px;"><span>{{ __($general->cur_text) }} {{ showAmount($plan->fixed_amount) }} </span></uni-text>
                                        </uni-button>
                                    </uni-view>
                                    
                                  
                                    
                                    
                                    
                                    
                                    
                                    <uni-view data-v-ff6c7d42="" class="panel-btn-all">
                                        <center>
                                            
                                                 <form action="{{ route('user.invest.submit') }}" method="post">
                                       @csrf
                                       <input type="hidden" name="plan_id" value="{{ __($plan->id) }}">
                                       <input type="hidden" name="wallet_type" value="deposit_wallet">
                                       <input type="hidden" name="amount" value="{{ getAmount($plan->fixed_amount,0) }}">
                                            
                                        <button data-v-50bed489="" data-v-ff6c7d42="" class="u-button u-reset-button panel-btn-line u-button--circle u-button--normal u-button--plain u-button--hairline" app-parameter="" send-message-title="" send-message-path=""
                                            lang="en" data-name="" session-from="" send-message-img="" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0); border-width: 1px; border-style: solid;">
                                            <!---->
                                            <uni-image data-v-ff6c7d42="" style="height: 14px; margin-right: 12px; width: 18px;">
                                                <div style="background-image: url(data:image/png;base64,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); background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                <uni-resize-sensor>
                                                    <div>
                                                        <div></div>
                                                    </div>
                                                    <div>
                                                        <div></div>
                                                    </div>
                                                </uni-resize-sensor><img src="data:image/png;base64,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" draggable="false"></uni-image>Deposit</button>
                                                </center>
                                                </form>
                                                
                                                
                                                
                                    </uni-view>
                                </uni-view>
                                <uni-view data-v-c0ac66b0="" data-v-68bc644f="" data-v-ff6c7d42="" class="u-popup">
                                    <!---->
                                    <!---->
                                </uni-view>
                            </uni-view>
                        </uni-view>
                        
                        @endforeach
                        
                        
                            </uni-view>
                            <!---->
                        </uni-view>
                    </uni-view>
                </uni-page-body>
            </uni-page-wrapper>
        </uni-page>


</html>
@endsection