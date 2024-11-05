@extends($activeTemplate . 'layouts.master')
@section('content')
  <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
        }

        .wa-index-top-bottom {
            width: 92%;
            overflow: hidden;
            margin: 1rem auto 0
        }

        .wa-index-top-bottom ul {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .wa-index-top-bottom ul li {
            text-align: center;
        }

        .wa-index-top-bottom ul li h2 {
            font-size: 1.2rem;
            color: #fc5f2e;
            margin-bottom: 5px;
        }

        .wa-index-top-bottom ul li span {
            font-size: 12px;
            color: #666
        }

        .wa-index-center-rech {
            width: 92%;
            margin: 1rem auto 0;
            overflow: hidden;
            background: #04070e;
            border-radius: 5px;
        }

        .wa-index-center-rech h2 {
            width: 100%;
            padding: 0 4%;
            overflow: hidden;
            font-size: 16px;
            color: #fff;
            margin-top: 0.8rem
        }

        .wa-index-center-rech ul {
            width: 92%;
            overflow: hidden;
            margin: 1rem auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .wa-index-center-rech ul li {
            width: 45%;
            text-align: center;
        }

        .wa-index-center-rech ul li img {
            width: 40px;
            height: 40px;
        }

        .wa-index-center-rech ul li span {
            color: #fff;
            font-size: 14px;
            display: block;
            width: 100%;
            text-align: center;
        }

        .wa-index-center-rech-link {
            display: block;
            width: 100%;
        }

        .wa-index-center-rech-link img {
            width: 100%;
            height: auto;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        .level{
            width: 60px!important;
            height: 18px!important;
            float: none!important;
            margin-bottom:-3px;
        }
        .position {
            width: auto!important;
            height: 45px!important;
            float: none!important;
            margin-bottom:-3px;

        }
        .pname{
            background-color: #FF6300;
            font-size: 14px;
            color: #FFFFFF;
            border-radius: 16px;
            font-weight: bold;
            position:relative;
            top:-4px;
            padding: 2px 10px;
        }
    </style>
</head>
<body style="background: #090F1B;">
<div class="wa-index-top">
    <div class="wa-index-top-center">
        <div class="wa-index-userxx">
            <p class="wa-index-user-nc">
            
         {{ auth()->user()->username }}
                                    </p>
            <!--<p class="wa-index-user-sj">ID：83626<span><img class="level" src="/static/home/img/VIP1.gif" /></span></p>-->
                        <p class="wa-index-user-sj">ID：83626</p>
        </div>
        <!--<a href="https://www.eosvip.site/user/modify">-->
        <!--    <img src="/static/image/avatar.png"/>-->
        <!--</a>-->
    </div>
    <div class="wa-index-top-bottom">
        <ul>
<li>
    <a href="{{route ('user.withdraw')}}">
        <h2>{{ $general->cur_text }} {{ showAmount(auth()->user()->interest_wallet) }}</h2>
        <span>Current Balance</span>
    </a>
</li>

@php
  $authUser = Auth::user();
  $userCount = App\Models\User::where('ref_by', $authUser->id)->count();
    $referralCommission = App\Models\Transaction::where('user_id', $authUser->id)
                                    ->where('remark', 'referral_commission')
                                    ->sum('amount');
@endphp
<li>
    
    <a href="javascript:void(0);" onclick="">
        <h2 class="promotionIncome">{{ $userCount }}</h2>
        <span>Total People</span>
    </a>
</li>
<li>
    <a  href="javascript:void(0);" onclick="">
        <h2 class="deviceIncome">{{ $general->cur_text }} {{ showAmount(auth()->user()->deposit_wallet) }}</h2>
        <span>Total Recharge</span>
    </a>
</li>

        </ul>
    </div>
</div>

<div class="wa-index-center-rech">
    <h2>Recharge and Withdraw</h2>
    <ul>
        <li>
            <a href="{{route ('user.deposit.index')}}">
                <img src="{{asset ('core/img/icon_01.png')}}" alt="">
                <span>Recharge</span>
            </a>
        </li>
        <li>
            <a href="{{route ('user.withdraw')}}">
                <img src="{{asset ('core/img/icon_02.png')}}" alt="">
                <span>Withdrawal</span>
            </a>
        </li>
    </ul>
    <!--<a href="#" class="wa-index-center-rech-link">-->
    <!--    <img src="/uploads/image/20231125/419f99656b1c018c332e32bc3504923e.png" alt="agridevelop"/>-->
    <!--</a>-->
</div>

<div class="wa-index-center-lb">
    <ul>
 <li>
    <a href="{{ route('ticket.index') }}">
        <img src="{{asset ('core/img/email.png')}}"/>
        <p>Message</p>
        <img class="wa-index-center-fr" src="{{asset ('core/img/jr.png')}}"/>
            </a>
</li>

<li>
    <a href="{{ route('user.invest.log') }}">
        <img src="{{asset ('core/img/p6.png')}}"/>
        <p>Balance Record</p>
        <img class="wa-index-center-fr" src="{{asset ('core/img/jr.png')}}"/>
    </a>
</li>
<!--<li>-->
<!--    <a href="https://www.eosvip.site/treasure/index">-->
<!--        <img src="/static/home/img/p20.png"/>-->
<!--        <p>Dig Treasure</p>-->
<!--        <img class="wa-index-center-fr" src="/static/home/img/jr.png"/>-->
<!--    </a>-->
<!--</li>-->
<li>
    <a href="{{ route('user.deposit.history') }}">
        <img src="{{asset ('core/img/p11.png')}}"/>
        <p>Recharge Record</p>
        <img class="wa-index-center-fr" src="{{asset ('core/img/jr.png')}}"/>
    </a>
</li>
<li>
    <a href="{{ route('user.withdraw.history') }}">
        <img src="{{asset ('core/img/p10.png')}}"/>
        <p>Withdrawal Record</p>
        <img class="wa-index-center-fr" src="{{asset ('core/img/jr.png')}}"/>
    </a>
</li>
<!-- <li>
    <a href="https://www.eosvip.site/user/income">
        <img src="/static/home/img/p1.png"/>
        <p>messages.MyUnsettlementIncome</p>
        <img class="wa-index-center-fr" src="/static/home/img/jr.png"/>
    </a>
</li> -->
<li>
    <a href="{{ route('user.referrals') }}">
        <img src="{{asset ('core/img/p14.png')}}"/>
        <p>My Team</p>
        <img class="wa-index-center-fr" src="{{asset ('core/img/jr.png')}}"/>
    </a>
</li>

<li>
    <a href="{{route ('user.logout')}}">
        <img src="{{asset ('core/img/p13.png')}}"/>
        <p>Logout</p>
        <img class="wa-index-center-fr" src="{{asset ('core/img/jr.png')}}"/>
    </a>
</li>

    </ul>
</div>
<style>
    .game1
    {
        border-radius: 50%;
        animation: rotate1 2s linear infinite;
    }
    @keyframes  rotate1{
	0%{
		transform: rotateZ(0deg);
	}
	100%{
		transform: rotateZ(360deg);
	}
}
</style>


@endsection


