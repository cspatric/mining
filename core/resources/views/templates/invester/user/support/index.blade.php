@extends($activeTemplate . 'layouts.master')
@section('content')
<style>
    * {
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
    }

    /*针对不同屏幕设置基数*/
    html {
        font-size: 50px;
        overflow-x: hidden;
    }

    body {
        font-size: 24px
    }

    @media  screen and (min-width: 320px) {
        html {
            font-size: 21.33px
        }

        body {
            font-size: 12px
        }
    }

    @media  screen and (min-width: 360px) {
        html {
            font-size: 24px
        }

        body {
            font-size: 12px
        }
    }

    @media  screen and (min-width: 375px) {
        html {
            font-size: 25px
        }

        body {
            font-size: 12px
        }
    }

    @media  screen and (min-width: 384px) {
        html {
            font-size: 25.6px
        }

        body {
            font-size: 14px
        }
    }

    @media  screen and (min-width: 400px) {
        html {
            font-size: 26.67px
        }

        body {
            font-size: 14px
        }
    }

    @media  screen and (min-width: 414px) {
        html {
            font-size: 27.6px
        }

        body {
            font-size: 14px
        }
    }

    @media  screen and (min-width: 424px) {
        html {
            font-size: 28.27px
        }

        body {
            font-size: 14px
        }
    }

    @media  screen and (min-width: 480px) {
        html {
            font-size: 32px
        }

        body {
            font-size: 15.36px
        }
    }

    @media  screen and (min-width: 540px) {
        html {
            font-size: 36px
        }

        body {
            font-size: 17.28px
        }
    }

    @media  screen and (min-width: 720px) {
        html {
            font-size: 48px
        }

        body {
            font-size: 23.04px
        }
    }

    @media  screen and (min-width: 750px) {
        html {
            font-size: 50px
        }

        body {
            font-size: 24px
        }
    }

    .service-top {
    width: 94%;
    padding: 0 3%;
    height: 3.5rem;
    background-color: #090f1b;
    border-bottom: 1px solid #eee;
    display: flex;
    align-items: center;
    margin-top: 30px;
    color: #fff;
    }

    .service-top-img {
        width: 2rem;
        height: 2rem;
        margin-right: 0.4rem;
    }

    .service-top-img img {
        width: 2rem;
        height: 2rem;
        border-radius: 50%;
    }

    .service-top-dl {
        width: 10rem;
        height: 2rem;
    }

    .service-top-dl dt {
        width: 100%;
        font-size: 0.6rem;
        color: #fff;
        font-weight: 600;
        margin-top: 0.2rem;
    }

    .service-top-dl dd {
        width: 100%;
        font-size: 0.5rem;
        color: #999;
        margin-top: 0.2rem;
    }

    .service-bottom {
        width: 94%;
        overflow: hidden;
        padding: 1rem 3%;
    }

    .service-bottom ul {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .service-bottom ul li {
width: 100%;
    padding: 1rem 1% 0.5rem;
    border-radius: 10px;
    text-align: center;
    margin-bottom: 20px;
    }

    .service-bottom ul li img {
        width: 3.5rem;
        height: 3.5rem;
    }

    .service-bottom ul li span {
        font-size: 0.6rem;
        color: #fff;
        display: block;
        width: 100%;
    }

    .service-bottom ul li p {
        width:90%;
        margin-top: 0.25rem;
        color: #fff;
        font-size: 12px;
        border: 1px solid #fff;
        border-radius:20px;
        padding: 5px 0;
        margin: 10px auto 0 auto;
    }

    .service-bottom ul li:first-child {
        background-color: #2cb742;
    }

    .service-bottom ul li:last-child {
        background-color: #f1c759;
        /*margin-top: 10px;*/
    }
    .page {
    box-sizing: border-box;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 130vh;
    padding-bottom: 20rem;
    background: #090f1b;
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}
</style>
<body style="background: #fff;">
<div class="views">
    <div class="navbar theme-white">
<div class="navbar-inner">
    <div class="left">
        <a href="{{route ('user.home')}}" class="external link">
            <i class="icon iconfont icon-angleleft"></i>Back        </a>
    </div>
    <div class="center" style="left: -24px;">Customer Service</div>
    <div class="right"></div>
</div>

    </div>
<div class="page navbar-fixed">
    <div class="service-top">
        <div class="service-top-img">
            <img src="{{asset ('core/img/7c25441d-d3ad-4830-bd01-7345da9db52b.png')}}" alt="">
        </div>
        <div class="service-top-dl">
            <dl>
                <dt>Hello, I am your exclusive customer service.</dt>
                <dd>Glad to serve you.</dd>
            </dl>
        </div>
    </div>
    <div class="service-bottom">
        <ul>
            <li>
                <a href="https://t.me/">
                    <img src="{{asset ('core/img/WhatsApp1.png')}}" alt="">
                    <span>WhatsApp Service</span>
                    <p>Problem Handling</p>
                </a>
            </li>
            <li style="background: #59d5f1;">
                <a href="https://t.me/">
                    <img src="{{asset ('core/img/groupService1.png')}}" alt="">
                    <span>Telegram Group</span>
                    <p>How to make more money</p>
                </a>
            </li>
            <li>
                <a href="https://t.me/">
                    <img src="{{asset ('core/img/groupService1.png')}}" alt="">
                    <span>Telegram Service</span>
                    <p>Problem Handling</p>
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection