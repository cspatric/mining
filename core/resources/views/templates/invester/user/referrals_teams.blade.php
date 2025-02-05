 @extends($activeTemplate . 'layouts.master')
@section('content')
   
    <style>
        .team-wrap-content .team-card[data-v-443cda42] {
            margin: var(--mg) auto 0;
            box-sizing: border-box;
            line-height: 24px;
            width: 100%;
            border-radius: var(--radius);
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
        }

        .team-wrap-content .team-card .team-item[data-v-443cda42]:nth-child(1) {
            background-image: linear-gradient(-225deg, #231557 0%, #44107A 29%, #FF1361 67%, #FFF800 100%);
        }

        .team-wrap-content .team-card .level-content[data-v-443cda42] {
            background: rgba(0, 0, 0, .1);
            backdrop-filter: blur(10px);
            padding-top: 10px;
            border-radius: 5px;
            width: 100%;
        }

        .team-wrap-content .team-card .team-item[data-v-443cda42] {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 12px;
            border-radius: 10px;
            padding: 12px;
            box-sizing: border-box;
            min-width: 0;
        }

        .team-wrap-content .team-card .team-item .level-name[data-v-443cda42] {
            padding-top: 5px;
            width: 100%;
            text-align: center;
            white-space: nowrap;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .team-wrap-content .team-card .team-item .level-name .img-level1[data-v-443cda42] {
            background: url(/assets/level1-c1364879.png) center center no-repeat;
            background-size: 30px 26px;
            width: 30px;
            height: 40px;
        }

        .team-wrap[data-v-f4d9a1a6] {
            margin: 0 calc(0px - var(--mg))
        }

        .team-wrap-content[data-v-f4d9a1a6] {
            position: relative
        }

        .team-wrap-content .share-card[data-v-f4d9a1a6] {
            padding: var(--mg);
            color: var(--btn-text);
            background: var(--bg-card);
            position: relative;
            overflow: hidden;
            box-sizing: border-box;
            margin: 0 auto;
            border-radius: var(--card-radius);
            border: 1px solid var(--btn-text);
            border-left: 0;
            border-right: 0
        }

        .team-wrap-content .share-card .btn[data-v-f4d9a1a6] {
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--primary);
            color: var(--btn-text);
            display: inline-block;
            padding: 0 14px;
            height: 24px;
            line-height: 24px;
            font-size: 12px;
            border: 1px solid var(--btn-text)
        }

        .team-wrap-content .share-card .link[data-v-f4d9a1a6] {
            max-width: 70%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .team-wrap-content .share-card .icon-decor[data-v-f4d9a1a6] {
            position: absolute;
            bottom: 50px;
            right: 16px
        }

        .team-wrap-content .share-card .icon-decor img[data-v-f4d9a1a6] {
            width: 80px
        }

        .team-wrap-content .team-info[data-v-f4d9a1a6] {
            box-sizing: border-box;
            line-height: 24px;
            background: transparent;
            margin-top: -1px;
            border-radius: var(--card-radius);
            position: relative;
            overflow: hidden;
            background: var(--bg);
            padding: 12px;
            border-left: 0;
            border-right: 0
        }

        .team-wrap-content .team-info .other-num[data-v-f4d9a1a6] {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-bottom: 12px;
            z-index: 1
        }

        .team-wrap-content .team-info .other-num[data-v-f4d9a1a6]:last-child {
            margin-bottom: 0
        }

        .team-wrap-content .team-info .other-num .item[data-v-f4d9a1a6] {
            width: 33.3%
        }

        .team-wrap-content .team-info .other-num .item .text-df[data-v-f4d9a1a6] {
            line-height: 14px;
            font-size: 13px;
            color: var(--text-gray6);
            margin-bottom: 5px
        }

        .team-wrap-content .team-info .other-num .item .text-xl[data-v-f4d9a1a6] {
            color: var(--btn-text)
        }

        .team-wrap-content .team-card[data-v-f4d9a1a6] {
            box-sizing: border-box;
            line-height: 24px;
            width: 100%;
            border-radius: var(--radius)
        }

        .team-wrap-content .team-card .team-item[data-v-f4d9a1a6] {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            border-radius: var(--card-radius);
            padding: 12px 24px;
            box-sizing: border-box;
            border-bottom: 1px solid var(--btn-text)
        }

        .team-wrap-content .team-card .team-item .icon[data-v-f4d9a1a6] {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 5px
        }

        .team-wrap-content .team-card .team-item .icon img[data-v-f4d9a1a6] {
            width: 25px
        }

        .team-wrap-content .team-card .team-item[data-v-f4d9a1a6]:nth-child(1) {
            background: var(--btn-bg)
        }

        .team-wrap-content .team-card .team-item[data-v-f4d9a1a6]:nth-child(2) {
            background: var(--primary)
        }

        .team-wrap-content .team-card .team-item[data-v-f4d9a1a6]:nth-child(3) {
            background: var(--btn-bg2)
        }

        .team-wrap-content .team-card .team-item .level-name[data-v-f4d9a1a6] {
            text-align: center;
            font-weight: 500;
            border-radius: 30px;
            color: var(--text-gray);
            font-size: 14px;
            font-weight: 700;
            white-space: nowrap;
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .team-wrap-content .team-card .team-item .level-name .level-num[data-v-f4d9a1a6] {
            font-weight: 700;
            font-size: 16px;
            color: var(--btn-text)
        }

        .team-wrap-content .team-card .team-item .level-name .level[data-v-f4d9a1a6] {
            margin-top: 10px;
            background: linear-gradient(-45deg, #1b0a25, #090514);
            display: inline-block;
            padding: 2px 5px;
            font-size: 12px;
            line-height: 14px;
            border-radius: 10px;
            color: var(--btn-text)
        }

        .team-wrap-content .team-card .team-item .level-count[data-v-f4d9a1a6] {
            text-align: center;
            color: var(--btn-text)
        }

        .team-wrap-content .team-card .team-item .level-count .text-sm[data-v-f4d9a1a6] {
            line-height: 16px;
            margin-bottom: 5px
        }

        .team-wrap-content .team-card .team-item .level-count .text-df[data-v-f4d9a1a6] {
            font-size: 16px
        }

        .team-wrap-content .team-card .team-item .btn[data-v-f4d9a1a6] {
            flex-shrink: 0;
            display: inline-block;
            padding: 4px 10px;
            min-width: 60px;
            text-align: center;
            line-height: 17px;
            color: var(--btn-text);
            font-size: 12px;
            font-weight: 700;
            background: var(--primary);
            border: 1px solid var(--btn-text)
        }

        .team-wrap-content[data-v-bebaf1cf] {
            position: relative
        }

        .team-wrap-content .share-card[data-v-bebaf1cf] {
            padding: var(--mg);
            color: var(--text-black);
            background: var(--golden-gradient);
            position: relative;
            overflow: hidden;
            box-sizing: border-box;
            margin: 0 auto;
            border-radius: var(--card-radius)
        }

        .team-wrap-content .share-card[data-v-bebaf1cf]:after {
            content: "";
            position: absolute;
            right: 0;
            bottom: 0;
            width: 140px;
            height: 140px;
            opacity: .4;
            background: url(/assets/team-4b11edf1.png) center no-repeat;
            background-size: 100% 100%
        }

        .team-wrap-content .share-card .btn[data-v-bebaf1cf] {
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--text-black);
            color: var(--text-white);
            display: inline-block;
            padding: 0 14px;
            height: 24px;
            line-height: 24px;
            border-radius: 5px;
            font-size: 12px
        }

        .team-wrap-content .share-card .link[data-v-bebaf1cf] {
            max-width: 70%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .team-wrap-content .share-card .icon-decor[data-v-bebaf1cf] {
            position: absolute;
            bottom: 50px;
            right: 16px
        }

        .team-wrap-content .share-card .icon-decor img[data-v-bebaf1cf] {
            width: 80px
        }

        .team-wrap-content .team-info[data-v-bebaf1cf] {
            box-sizing: border-box;
            line-height: 24px;
            margin: 15px auto 0;
            border-radius: var(--card-radius);
            position: relative;
            overflow: hidden;
            background: transparent;
            border: 1px solid var(--primary);
            padding: 12px
        }

        .team-wrap-content .team-info-content[data-v-bebaf1cf] {
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 1
        }

        .team-wrap-content .team-info[data-v-bebaf1cf]:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            background: var(--primary);
            width: 100%;
            height: 100%;
            opacity: .6;
            filter: blur(10px)
        }

        .team-wrap-content .team-info .other-num[data-v-bebaf1cf] {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-bottom: 12px;
            z-index: 1;
            position: relative
        }

        .team-wrap-content .team-info .other-num[data-v-bebaf1cf]:last-child {
            margin-bottom: 0
        }

        .team-wrap-content .team-info .other-num .item[data-v-bebaf1cf] {
            width: 33.3%;
            color: var(--text-white)
        }

        .team-wrap-content .team-info .other-num .item .text-df[data-v-bebaf1cf] {
            line-height: 14px;
            font-size: 13px;
            color: var(--text-white);
            margin-bottom: 5px;
            word-break: break-all
        }

        .team-wrap-content .team-card[data-v-bebaf1cf] {
            margin: 12px auto 0;
            box-sizing: border-box;
            line-height: 24px;
            width: 100%;
            border-radius: var(--radius);
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px
        }

        .team-wrap-content .team-card .level-content[data-v-bebaf1cf] {
            background: rgba(255, 255, 255, .1);
            backdrop-filter: blur(10px);
            margin-top: 10px;
            padding-top: 10px;
            border-radius: 5px;
            width: 100%;
            margin-bottom: 10px
        }

        .team-wrap-content .team-card .team-item[data-v-bebaf1cf] {
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 12px;
            border-radius: 10px;
            padding: 12px 5px;
            box-sizing: border-box;
            min-width: 0
        }

        .team-wrap-content .team-card .team-item[data-v-bebaf1cf]:nth-child(1) {
            background-image: linear-gradient(109.6deg, rgb(247, 253, 166) 11.2%, rgb(128, 255, 221) 57.8%, rgb(255, 128, 249) 85.9%)
        }

        .team-wrap-content .team-card .team-item[data-v-bebaf1cf]:nth-child(2) {
            background-image: linear-gradient(103.3deg, rgb(252, 225, 208) 30%, rgb(255, 173, 214) 55.7%, rgb(162, 186, 245) 81.8%)
        }

        .team-wrap-content .team-card .team-item[data-v-bebaf1cf]:nth-child(3) {
            background-image: linear-gradient(69.7deg, rgb(244, 37, 243) 1.4%, rgb(244, 87, 1) 36.2%, rgb(255, 204, 37) 72.2%, rgb(20, 196, 6) 113%)
        }

        .team-wrap-content .team-card .team-item .level-name[data-v-bebaf1cf] {
            width: 100%;
            text-align: center;
            white-space: nowrap;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px
        }

        .team-wrap-content .team-card .team-item .level-name .level-num[data-v-bebaf1cf] {
            position: relative;
            z-index: 1;
            color: var(--text-black);
            font-weight: 700;
            font-size: 16px
        }

        .team-wrap-content .team-card .team-item .level-name img[data-v-bebaf1cf] {
            height: 64px;
            display: block
        }

        .team-wrap-content .team-card .team-item .level-count[data-v-bebaf1cf] {
            text-align: center;
            color: var(--text-black);
            margin-bottom: 10px
        }

        .team-wrap-content .team-card .team-item .level-count .text-sm[data-v-bebaf1cf] {
            line-height: 16px;
            font-size: 13px;
            margin-bottom: 5px;
            color: #333
        }

        .team-wrap-content .team-card .team-item .level-count .text-df[data-v-bebaf1cf] {
            font-size: 18px;
            font-weight: 700
        }

        .team-wrap-content .team-card .team-item .btn[data-v-bebaf1cf] {
            display: inline-block;
            padding: 6px 12px;
            min-width: 100%;
            text-align: center;
            border-radius: var(--btn-radius);
            line-height: 17px;
            color: var(--text-black);
            font-size: 12px;
            font-weight: 700;
            background: linear-gradient(220.55deg, #fadd76 0%, #9f3311 100%)
        }

        .team-wrap-content[data-v-56bb8bf4] {
            position: relative
        }

        .team-wrap-content .share-card[data-v-56bb8bf4] {
            padding: var(--mg);
            color: var(--btn-text);
            background: var(--bg-card);
            position: relative;
            overflow: hidden;
            box-sizing: border-box;
            margin: 0 auto;
            border-radius: var(--card-radius)
        }

        .team-wrap-content .share-card[data-v-56bb8bf4]:after {
            content: "";
            position: absolute;
            right: -70px;
            top: -47px;
            width: 307px;
            height: 208px;
            opacity: .6;
            background: url(/assets/coin-d1a44311.png) center no-repeat;
            background-size: 100% 100%;
            transform: scale(.5)
        }

        .team-wrap-content .share-card .btn[data-v-56bb8bf4] {
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--text-black);
            color: var(--text-white);
            display: inline-block;
            padding: 0 14px;
            height: 24px;
            line-height: 24px;
            border-radius: 5px;
            font-size: 12px
        }

        .team-wrap-content .share-card .link[data-v-56bb8bf4] {
            max-width: 70%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .team-wrap-content .share-card .icon-decor[data-v-56bb8bf4] {
            position: absolute;
            bottom: 50px;
            right: 16px
        }

        .team-wrap-content .share-card .icon-decor img[data-v-56bb8bf4] {
            width: 80px
        }

        .team-wrap-content .team-info[data-v-56bb8bf4] {
            box-sizing: border-box;
            line-height: 24px;
            background: transparent;
            margin: 15px auto 0;
            border-radius: var(--card-radius);
            position: relative;
            overflow: hidden;
            background: var(--bg-card);
            padding: 12px
        }

        .team-wrap-content .team-info .other-num[data-v-56bb8bf4] {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-bottom: 12px;
            z-index: 1
        }

        .team-wrap-content .team-info .other-num[data-v-56bb8bf4]:last-child {
            margin-bottom: 0
        }

        .team-wrap-content .team-info .other-num .item[data-v-56bb8bf4] {
            width: 33.3%
        }

        .team-wrap-content .team-info .other-num .item .text-df[data-v-56bb8bf4] {
            line-height: 14px;
            font-size: 13px;
            color: var(--text-gray6);
            margin-bottom: 5px
        }

        .team-wrap-content .team-card[data-v-56bb8bf4] {
            margin: 15px auto 0;
            box-sizing: border-box;
            line-height: 24px;
            width: 100%;
            border-radius: var(--radius)
        }

        .team-wrap-content .team-card .team-item[data-v-56bb8bf4] {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
            width: 100%;
            border-radius: var(--card-radius);
            padding: 12px 10px;
            box-sizing: border-box
        }

        .team-wrap-content .team-card .team-item .icon[data-v-56bb8bf4] {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--bg);
            margin-right: 5px
        }

        .team-wrap-content .team-card .team-item[data-v-56bb8bf4]:nth-child(1) {
            background: var(--btn-bg)
        }

        .team-wrap-content .team-card .team-item[data-v-56bb8bf4]:nth-child(2) {
            background: var(--primary)
        }

        .team-wrap-content .team-card .team-item[data-v-56bb8bf4]:nth-child(3) {
            background: var(--btn-bg2)
        }

        .team-wrap-content .team-card .team-item .level-name[data-v-56bb8bf4] {
            text-align: center;
            font-weight: 500;
            border-radius: 30px;
            color: var(--text-gray);
            font-size: 14px;
            font-weight: 700;
            white-space: nowrap;
            display: flex;
            align-items: center
        }

        .team-wrap-content .team-card .team-item .level-name .level-num[data-v-56bb8bf4] {
            font-weight: 700;
            font-size: 16px;
            color: var(--btn-text)
        }

        .team-wrap-content .team-card .team-item .level-name img[data-v-56bb8bf4] {
            width: 40px;
            display: block
        }

        .team-wrap-content .team-card .team-item .level-name .level[data-v-56bb8bf4] {
            margin-top: 10px;
            background: linear-gradient(-45deg, #1b0a25, #090514);
            display: inline-block;
            padding: 2px 5px;
            font-size: 12px;
            line-height: 14px;
            border-radius: 10px;
            color: var(--btn-text)
        }

        .team-wrap-content .team-card .team-item .level-count[data-v-56bb8bf4] {
            text-align: center;
            color: var(--btn-text)
        }

        .team-wrap-content .team-card .team-item .level-count .text-sm[data-v-56bb8bf4] {
            line-height: 16px;
            margin-bottom: 5px
        }

        .team-wrap-content .team-card .team-item .level-count .text-df[data-v-56bb8bf4] {
            font-size: 16px
        }

        .team-wrap-content .team-card .team-item .btn[data-v-56bb8bf4] {
            display: inline-block;
            padding: 4px 10px;
            min-width: 50px;
            text-align: center;
            border-radius: var(--btn-border-radius);
            line-height: 17px;
            color: var(--bg-card);
            font-size: 12px;
            font-weight: 700;
            background: var(--btn-text);
            border-radius: 5px
        }

        .team-wrap-content[data-v-2059eacb] {
            position: relative
        }

        .team-wrap-content .share-card[data-v-2059eacb] {
            padding: var(--mg);
            color: var(--btn-text);
            background: var(--bg-card);
            position: relative;
            overflow: hidden;
            box-sizing: border-box;
            margin: 0 auto;
            border-radius: var(--card-radius)
        }

        .team-wrap-content .share-card[data-v-2059eacb]:before {
            content: "";
            background: var(--bg);
            width: 300px;
            height: 300px;
            border-radius: 50%;
            position: absolute;
            top: -150px;
            right: -150px;
            opacity: .4
        }

        .team-wrap-content .share-card[data-v-2059eacb]:after {
            content: "";
            background: var(--bg);
            width: 300px;
            height: 300px;
            border-radius: 50%;
            position: absolute;
            bottom: -200px;
            left: -200px;
            opacity: .4
        }

        .team-wrap-content .share-card .btn[data-v-2059eacb] {
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--text-black);
            color: var(--text-white);
            display: inline-block;
            padding: 0 14px;
            height: 24px;
            line-height: 24px;
            border-radius: 28px;
            font-size: 12px
        }

        .team-wrap-content .share-card .link[data-v-2059eacb] {
            max-width: 70%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .team-wrap-content .share-card .icon-decor[data-v-2059eacb] {
            position: absolute;
            bottom: 50px;
            right: 16px
        }

        .team-wrap-content .share-card .icon-decor img[data-v-2059eacb] {
            width: 80px
        }

        .team-wrap-content .team-info[data-v-2059eacb] {
            box-sizing: border-box;
            line-height: 24px;
            background: transparent;
            margin: 15px auto 0;
            border-radius: var(--card-radius);
            position: relative;
            overflow: hidden;
            background: var(--bg-card)
        }

        .team-wrap-content .team-info .other-num[data-v-2059eacb] {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-bottom: 12px;
            z-index: 1
        }

        .team-wrap-content .team-info .other-num[data-v-2059eacb]:last-child {
            margin-bottom: 0
        }

        .team-wrap-content .team-info .other-num .item[data-v-2059eacb] {
            width: 33.3%
        }

        .team-wrap-content .team-info .other-num .item .text-df[data-v-2059eacb] {
            line-height: 14px;
            font-size: 13px;
            color: var(--text-gray);
            margin-bottom: 5px
        }

        .team-wrap-content .team-card[data-v-2059eacb] {
            margin: 15px auto 0;
            box-sizing: border-box;
            line-height: 24px;
            border-radius: var(--card-radius)
        }

        .team-wrap-content .team-card .team-item[data-v-2059eacb] {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
            width: 100%;
            border-radius: var(--card-radius);
            padding: 10px;
            box-sizing: border-box
        }

        .team-wrap-content .team-card .team-item .icon[data-v-2059eacb] {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--bg);
            margin-right: 5px
        }

        .team-wrap-content .team-card .team-item[data-v-2059eacb]:nth-child(1) {
            background-image: linear-gradient(-60deg, #16a085 0%, #f4d03f 100%)
        }

        .team-wrap-content .team-card .team-item[data-v-2059eacb]:nth-child(2) {
            background-image: linear-gradient(to top, #f77062 0%, #fe5196 100%)
        }

        .team-wrap-content .team-card .team-item[data-v-2059eacb]:nth-child(3) {
            background-image: linear-gradient(60deg, #64b3f4 0%, #c2e59c 100%)
        }

        .team-wrap-content .team-card .team-item .level-name[data-v-2059eacb] {
            text-align: center;
            font-weight: 500;
            border-radius: 30px;
            color: var(--text-white);
            font-size: 14px;
            white-space: nowrap;
            display: flex;
            align-items: center
        }

        .team-wrap-content .team-card .team-item .level-name .level-num[data-v-2059eacb] {
            margin-left: 5px;
            font-size: 16px;
            color: var(--text-white)
        }

        .team-wrap-content .team-card .team-item .level-name img[data-v-2059eacb] {
            width: 40px;
            display: block
        }

        .team-wrap-content .team-card .team-item .level-name .level[data-v-2059eacb] {
            margin-top: 10px;
            background: linear-gradient(-45deg, #1b0a25, #090514);
            display: inline-block;
            padding: 2px 10px;
            font-size: 12px;
            line-height: 14px;
            border-radius: 10px;
            color: var(--text-white)
        }

        .team-wrap-content .team-card .team-item .level-count[data-v-2059eacb] {
            text-align: center;
            color: var(--text-white)
        }

        .team-wrap-content .team-card .team-item .level-count .text-sm[data-v-2059eacb] {
            line-height: 16px;
            margin-bottom: 5px
        }

        .team-wrap-content .team-card .team-item .level-count .text-df[data-v-2059eacb] {
            font-size: 16px
        }

        .team-wrap-content .team-card .team-item .btn[data-v-2059eacb] {
            display: inline-block;
            padding: 4px 10px;
            min-width: 50px;
            text-align: center;
            border-radius: var(--btn-radius);
            line-height: 17px;
            color: var(--text-white);
            font-size: 12px;
            background: var(--text-black);
            flex-shrink: 0
        }

        .team-wrap[data-v-31d8126d] {
            position: relative;
            z-index: 1
        }

        .team-wrap-content[data-v-31d8126d] {
            position: relative;
            margin-right: -16px;
            padding-right: 16px;
            margin-left: -16px;
            padding-left: 16px;
            overflow-x: hidden
        }

        .team-wrap-content .share-card[data-v-31d8126d] {
            padding: 12px;
            position: relative;
            color: var(--text-white);
            background: var(--bg-card);
            border-radius: var(--radius);
            backdrop-filter: blur(10px)
        }

        .team-wrap-content .share-card[data-v-31d8126d]:before {
            content: "";
            position: absolute;
            top: -13px;
            right: -146px;
            background: url(/assets/6-team-money-5be19214.png) center no-repeat;
            background-size: 100% 100%;
            width: 375px;
            height: 326px;
            transform: scale(.4);
            opacity: .6
        }

        .team-wrap-content .share-card .invite-card[data-v-31d8126d] {
            margin: 0 auto;
            background: url(data:image/png;base64,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) center no-repeat;
            background-size: 269px 111px;
            width: 269px;
            height: 111px;
            color: var(--text-gray);
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            transform: scale(.82)
        }

        .team-wrap-content .share-card .btn[data-v-31d8126d] {
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--text-black);
            color: var(--text-white);
            display: inline-block;
            padding: 0 14px;
            height: 24px;
            line-height: 24px;
            border-radius: 28px;
            font-size: 12px;
            cursor: pointer
        }

        .team-wrap-content .share-card .share-link[data-v-31d8126d] {
            color: var(--text-gray6)
        }

        .team-wrap-content .share-card .link[data-v-31d8126d] {
            color: var(--btn-text2);
            max-width: 70%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .team-wrap-content .container-card[data-v-31d8126d] {
            background: var(--bg-card)
        }

        .team-wrap-content .team-info[data-v-31d8126d] {
            margin-top: var(--mg);
            box-shadow: none
        }

        .team-wrap-content .team-info .other-num[data-v-31d8126d] {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-bottom: 12px;
            z-index: 1
        }

        .team-wrap-content .team-info .other-num[data-v-31d8126d]:last-child {
            margin-bottom: 0
        }

        .team-wrap-content .team-info .other-num .item[data-v-31d8126d] {
            width: 33.3%
        }

        .team-wrap-content .team-info .other-num .item .text-df[data-v-31d8126d] {
            line-height: 14px;
            font-size: 13px;
            color: var(--text-gray6);
            margin-bottom: 5px
        }

        .team-wrap-content .team-info .other-num .item .txtBlue[data-v-31d8126d] {
            color: var(--btn-text2)
        }

        .team-wrap-content .team-card[data-v-31d8126d] {
            margin: var(--mg) auto 0;
            box-sizing: border-box;
            line-height: 24px;
            width: 100%;
            border-radius: var(--radius);
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px
        }

        .team-wrap-content .team-card .level-content[data-v-31d8126d] {
            width: 100%
        }

        .team-wrap-content .team-card .team-item[data-v-31d8126d] {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 12px;
            border-radius: 10px;
            padding: 12px;
            box-sizing: border-box;
            min-width: 0
        }

        .team-wrap-content .team-card .team-item[data-v-31d8126d]:nth-child(1) {
            background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%)
        }

        .team-wrap-content .team-card .team-item[data-v-31d8126d]:nth-child(2) {
            background-image: linear-gradient(to top, #0250c5 0%, #d43f8d 100%)
        }

        .team-wrap-content .team-card .team-item[data-v-31d8126d]:nth-child(3) {
            background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%)
        }

        .team-wrap-content .team-card .team-item .level-name[data-v-31d8126d] {
            margin-bottom: 10px;
            width: 100%;
            text-align: center;
            white-space: nowrap;
            display: flex;
            align-items: center;
            justify-content: flex-end
        }

        .team-wrap-content .team-card .team-item .level-name .icon[data-v-31d8126d] {
            position: absolute;
            left: -56px;
            top: -70px;
            transform: scale(.25)
        }

        .team-wrap-content .team-card .team-item .level-name .img-level1[data-v-31d8126d] {
            background: url(/assets/level-1-4c23b40d.png) center center no-repeat;
            background-size: 130px 161px;
            width: 130px;
            height: 161px
        }

        .team-wrap-content .team-card .team-item .level-name .img-level2[data-v-31d8126d] {
            background: url(/assets/level-2-cdbf2edb.png) center center no-repeat;
            background-size: 129px 161px;
            width: 129px;
            height: 161px
        }

        .team-wrap-content .team-card .team-item .level-name .img-level3[data-v-31d8126d] {
            background: url(/assets/level-3-709ed5d5.png) center center no-repeat;
            background-size: 142px 178px;
            width: 142px;
            height: 178px;
            top: -80px
        }

        .team-wrap-content .team-card .team-item .level-name .level-num[data-v-31d8126d] {
            font-size: 18px;
            color: var(--text-white);
            font-weight: 700
        }

        .team-wrap-content .team-card .team-item .level-name img[data-v-31d8126d] {
            width: 35px
        }

        .team-wrap-content .team-card .team-item .level-count[data-v-31d8126d] {
            border-radius: 5px;
            text-align: center;
            color: var(--text-white);
            margin-bottom: 10px;
            background: rgba(0, 0, 0, .1);
            padding: 5px 0
        }

        .team-wrap-content .team-card .team-item .level-count[data-v-31d8126d]:last-child {
            margin-bottom: 0
        }

        .team-wrap-content .team-card .team-item .level-count .text-sm[data-v-31d8126d] {
            line-height: 16px;
            font-size: 13px;
            margin-bottom: 5px;
            color: #eee
        }

        .team-wrap-content .team-card .team-item .level-count .text-df[data-v-31d8126d] {
            font-size: 18px;
            font-weight: 700
        }

        .team-wrap-content .team-card .team-item .btn[data-v-31d8126d] {
            margin-top: 10px;
            display: inline-block;
            padding: 6px 12px;
            min-width: 100%;
            text-align: center;
            border-radius: var(--btn-radius);
            line-height: 17px;
            color: var(--text-white);
            font-size: 12px;
            font-weight: 700;
            background: var(--text-black)
        }

        .team-wrap-content[data-v-345135b4] {
            position: relative
        }

        .team-wrap-content .share-card[data-v-345135b4] {
            padding: var(--mg);
            position: relative;
            color: var(--text-white);
            border-radius: var(--card-radius);
            z-index: 3;
            background: rgba(0, 0, 0, .1)
        }

        .team-wrap-content .share-card[data-v-345135b4]:before {
            content: "";
            position: absolute;
            right: -84px;
            bottom: -72px;
            background: url(/assets/share-ce466c2e.png) no-repeat;
            background-size: 100% 100%;
            width: 304px;
            height: 263px;
            border-radius: 0 0 var(--btn-radius) 0;
            transform: scale(.45);
            opacity: .85
        }

        .team-wrap-content .share-card .btn[data-v-345135b4] {
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--btn-bg5);
            color: var(--btn-text2);
            display: inline-block;
            padding: 0 14px;
            height: 24px;
            line-height: 24px;
            border-radius: 28px;
            font-size: 12px
        }

        .team-wrap-content .share-card .link[data-v-345135b4] {
            max-width: 70%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .team-wrap-content .container-content .container-card[data-v-345135b4] {
            background: var(--bg-card)
        }

        .team-wrap-content .team-info[data-v-345135b4] {
            margin-top: 10px;
            position: relative;
            box-shadow: var(--box-shadow);
            color: var(--btn-text);
            background: var(--bg-card)
        }

        .team-wrap-content .team-info .other-num[data-v-345135b4] {
            position: relative;
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-bottom: 12px;
            z-index: 1
        }

        .team-wrap-content .team-info .other-num[data-v-345135b4]:last-child {
            margin-bottom: 0
        }

        .team-wrap-content .team-info .other-num .item[data-v-345135b4] {
            width: 33.3%
        }

        .team-wrap-content .team-info .other-num .item .text-df[data-v-345135b4] {
            line-height: 14px;
            font-size: 13px;
            color: var(--text-gray6);
            margin-bottom: 5px
        }

        .team-wrap-content .main-t[data-v-345135b4] {
            position: relative
        }

        .team-wrap-content .main-t[data-v-345135b4]:before {
            content: "";
            position: absolute;
            top: -61px;
            left: -16px;
            width: calc(100% + 32px);
            height: 100%;
            background: var(--primary);
            border-radius: 0 0 50% 50%/2%
        }

        .team-wrap-content .team-card[data-v-345135b4] {
            margin: 12px auto 0;
            box-sizing: border-box;
            line-height: 24px;
            width: 100%;
            border-radius: var(--radius);
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px
        }

        .team-wrap-content .team-card .level-content[data-v-345135b4] {
            background: rgba(255, 255, 255, .1);
            backdrop-filter: blur(10px);
            margin-top: 10px;
            padding-top: 10px;
            border-radius: 5px;
            width: 100%;
            margin-bottom: 10px
        }

        .team-wrap-content .team-card .team-item[data-v-345135b4] {
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 12px;
            border-radius: 10px;
            padding: 55px 12px 12px;
            box-sizing: border-box;
            min-width: 0
        }

        .team-wrap-content .team-card .team-item[data-v-345135b4]:nth-child(1) {
            background-image: linear-gradient(to bottom, #061927 30%, #330867 100%)
        }

        .team-wrap-content .team-card .team-item[data-v-345135b4]:nth-child(2) {
            background-image: linear-gradient(to bottom, #061927 30%, #6713d2 100%)
        }

        .team-wrap-content .team-card .team-item[data-v-345135b4]:nth-child(3) {
            background-image: linear-gradient(to bottom, #061927 30%, #5d4157 100%)
        }

        .team-wrap-content .team-card .team-item .level-name[data-v-345135b4] {
            width: 100%;
            text-align: center;
            white-space: nowrap;
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .team-wrap-content .team-card .team-item .level-name.sp img[data-v-345135b4] {
            width: 60px;
            height: 70px;
            top: -5px;
            margin-left: -29px
        }

        .team-wrap-content .team-card .team-item .level-name .level-num[data-v-345135b4] {
            position: relative;
            z-index: 1;
            margin: 0 -12px;
            width: calc(100% + 24px);
            background-image: linear-gradient(-20deg, #2b5876 0%, #4e4376 100%);
            color: var(--text-white);
            font-weight: 700
        }

        .team-wrap-content .team-card .team-item .level-name img[data-v-345135b4] {
            position: absolute;
            left: 50%;
            top: 5px;
            margin-left: -25px;
            width: 50px
        }

        .team-wrap-content .team-card .team-item .level-count[data-v-345135b4] {
            text-align: center;
            color: var(--text-white);
            margin-bottom: 10px
        }

        .team-wrap-content .team-card .team-item .level-count .text-sm[data-v-345135b4] {
            line-height: 16px;
            font-size: 13px;
            margin-bottom: 5px;
            color: #ccc
        }

        .team-wrap-content .team-card .team-item .level-count .text-df[data-v-345135b4] {
            font-size: 18px;
            font-weight: 700
        }

        .team-wrap-content .team-card .team-item .btn[data-v-345135b4] {
            display: inline-block;
            padding: 6px 12px;
            min-width: 100%;
            text-align: center;
            border-radius: 28px;
            line-height: 17px;
            color: var(--text-black);
            font-size: 12px;
            font-weight: 700;
            background: var(--golden-gradient);
            box-shadow: var(--shadow)
        }

        .team-wrap-content[data-v-0a442381] {
            position: relative
        }

        .team-wrap-content .share-card[data-v-0a442381] {
            padding: 12px 12px 36px;
            position: relative;
            color: var(--text-white);
            border-radius: 16px;
            backdrop-filter: blur(10px);
            border: 1px solid #FFF;
            background: rgba(255, 255, 255, .1);
            margin: -8px var(--mg) 0;
            backdrop-filter: blur(7.5px);
            z-index: 3
        }

        .team-wrap-content .share-card .btn[data-v-0a442381] {
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--btn-bg3);
            color: var(--btn-text2);
            display: inline-block;
            padding: 0 14px;
            height: 24px;
            line-height: 24px;
            border-radius: 28px;
            font-size: 12px
        }

        .team-wrap-content .share-card .link[data-v-0a442381] {
            max-width: 70%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .team-wrap-content .container-content[data-v-0a442381] {
            margin-top: -20px
        }

        .team-wrap-content .team-info[data-v-0a442381] {
            position: relative;
            box-shadow: none;
            color: var(--btn-text);
            background: var(--bg-radio)
        }

        .team-wrap-content .team-info .other-num[data-v-0a442381] {
            position: relative;
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-bottom: 12px;
            z-index: 1
        }

        .team-wrap-content .team-info .other-num[data-v-0a442381]:last-child {
            margin-bottom: 0
        }

        .team-wrap-content .team-info .other-num .item[data-v-0a442381] {
            width: 33.3%
        }

        .team-wrap-content .team-info .other-num .item .text-df[data-v-0a442381] {
            line-height: 14px;
            font-size: 13px;
            color: var(--text-gray6);
            margin-bottom: 5px
        }

        .team-wrap-content .team-card[data-v-0a442381] {
            margin: 12px auto 0;
            box-sizing: border-box;
            line-height: 24px;
            width: 100%;
            border-radius: var(--radius);
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px
        }

        .team-wrap-content .team-card .level-content[data-v-0a442381] {
            background: rgba(0, 0, 0, .1);
            backdrop-filter: blur(10px);
            margin-top: 10px;
            padding-top: 10px;
            border-radius: 5px;
            width: 100%;
            margin-bottom: 10px
        }

        .team-wrap-content .team-card .team-item[data-v-0a442381] {
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 12px;
            border-radius: 10px;
            padding: 12px;
            box-sizing: border-box;
            min-width: 0
        }

        .team-wrap-content .team-card .team-item[data-v-0a442381]:nth-child(1) {
            background-image: linear-gradient(to top, #5f72bd 0%, #9b23ea 100%)
        }

        .team-wrap-content .team-card .team-item[data-v-0a442381]:nth-child(2) {
            background-image: linear-gradient(-20deg, #d558c8 0%, #24d292 100%)
        }

        .team-wrap-content .team-card .team-item[data-v-0a442381]:nth-child(3) {
            background-image: linear-gradient(-225deg, #231557 0%, #44107A 29%, #FF1361 67%, #FFF800 100%)
        }

        .team-wrap-content .team-card .team-item .level-name[data-v-0a442381] {
            width: 100%;
            text-align: center;
            white-space: nowrap;
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .team-wrap-content .team-card .team-item .level-name .img-level1[data-v-0a442381] {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAABOCAMAAABYH8V+AAACl1BMVEUAAAAkGRA+HgVZRikrFQQeEQhYKw2mTQNdMAddRypyMQRYKQYkFAuAQQYbDAVaUkVGIwWFPwRcTjLKagLz3auNUA8LAwVoMwMkDQJBIxAIBAWkTwcUCgojDwYdDgH/49KJOwSvUwcqFAg/JQ2GUhBTKAh0Ogi2gj2lWAgRAwHObghrOAeIbEV7XEEDAAark3Wpfwq1ZQOfdzmRUQZmTCyVgVxkLgB7Y0H30ZX3yIb9153ut2nrnzf204/zzpDyu2n81JX1xX/zw3bomjDoqEj6zYrcnknwrEj98OHxtV7vvW/tqlf/47r/3bbsqDzPXwP+6sD93KnwwX3so0XtmyrkmyfrlCXkiyLehRX05NDtrmHqs1rpoT7gjyzKVgP99er469vxzYj2u3ThnDnUhimoNQDv28X53LT94q7wsVTekUHlfQXUZwSlVwP+5cb43cLu0LL8z47jtIvhoVXmrE7pskz0t0PKfCMDAgX+6rXxoT/loTPWjC/Qdhq/YgTASwTXdAPeagL+8c7+0479vk/7qj7olz3ahzLahCPLhSHVfiHajB/LdAnDZwnXXAK5YAH9+/b96dLtzKP8xHT0pVjsoFbkmkzUlUDdlznHaRhCGwetYQS5PwD51qz+4qTpwaTtxoL8rVT2pUrkokXvqDTNiDL8mCjIfxjTexPgdQOTQALis3fjqXP2w2n9zGj6umLTiWLlqGHquVn3s07+sj7utDXSdy7AciDrixnCdg1yLwS/WQLjjgHFgQGwWAHmxJr6x5X945Tsu5LquXu+oXjhr2T7oTvNkDW5bAvbfQfHXwaqUAX4gQS4VQLvmQD+9tqngVLvsAbmXwP9ngDYv6H/03/4vQr71Qd2QQftbwPPp2yhZzXbrwb++Lg1AAAAOHRSTlMAFkBpJQz+slZ3dGVGoXtqN/2G/vz7yIxlyrSmj1D++9fUrI+Ge2T48ubZxZrf19HOx76ooPKejHiLeSgAAAeaSURBVFjD5Zb1UxtREIDTFCtWKFJ3d29Pkovdxd2bEAJJCoQQ3N2Ku1NKKS51d3d37x/Tlyq1AJ3+1m9u7k1m7pvdt3l3uyTnTHIl/QWTSP8nkz7fXCdSNO8t0yZPnjxlKmDK52XyJ5xK07p37eredXy+tL5zV8/B+bHzkV2AE2an0pTDVoFVoN8RERHPEVwHSwNHoNdbk5xLjTQAP2zHjjgeDQZLIM0B6jy9IgYMMIaF1TMZEDcsLM7xm5A7lxA6AhXR67hcLpEgM3KN9UUIvQiBxpAwCEoAkpELE7I6ozEWhhIIOuxcIuQMOQM2crlhID2wxDH3wQxYPlYhUBrK59aHzUdpMNhTJA9FURM6Rsl1Op0AdVQvWXcdLPECne6oTudc4jXjeHPzjoi4eHbzfrA0tHBamnC2U2lyZkkbu5cdER8f31ZyNC4i4nJJq5ltdi55UEqyDaXREZcbuiqzk+Ibuq5r2qLbKBVOJRefFWWasrKuxGuJQ9ro+GtdB4a0mmqfpSTnkBf7V9m6EhMTA/ItLxK7DuTbVy8d+zvhc3/3myPXEvfnxpy6nJj4/tzMgumkMZl+KX3e7nPLDwRITh0IctsdHPzMa2zJsyA4PT1995tLuSNu89KDfX3fksfxwm98bl/p0ICSvm5R7oPZpPFArnrgHzxr1rpZs2bZH2wmjRfPC49Wz5njO/J2oQtpAvg8fxRU8JBMmhiuG2xzSRNmg9Zjwg75tW3VhDvGh9dVAe4TdJa8elV1vtprQo7306dP712qvec3/gxdvC8+unDh4Z77eSPe3q7jaxzkGUGHoMBIBGMeiHbznTsejbx4/Y66Om5snFAoEkqlnU9mzvUeazNLbxgfF3KNj4XS2MhYkUwklUpvzJzh9DTN2Pq4UFpYaKyrj4MIBBGCaCKRMANof3YWvyiMjeVyO3kqjUqtYlGyBHIgRgql8X+2FjVIhYX1MEtbabCUl1ssluwWgYCPfArm5vuHOJ3CWKmIra2sSCtvTbp58ya7tXww+ygKB0aKojLc5vzOmXNZKhLSK7Vlg7fRK/RPQPD+1qpWVI7IkKi9u38Ta8YNaZSIUakZur0/gQ5Rw6kOICqEZqfpdAmRCALP+6WGLmszokRXKg2DbBg8CVobhGF0CEugQlfYZ5u6QSmvPln5s+Qri5J1GjRpbJiaACwMotLpGBAJKJw4errnFpSAXAXb+jlQZFRvZUU0TKViELBAJIRKJGAQARMMdtotK2is71b+eKLmIsJIuFLTvw8EATty3FEGHcMwGMbCw039pQMwtejnWkwDVSgxpN0EYTAQKRyjQgGDCAGHw/A+BoOpOz1wiw69fLLoB2l9VBRiMfQzwiEM5AcT4YGWixfZsKMByxlMJrO/TE1Qi/YF//B+BcpkptLyowQGQ1g4aM3Y9Vr22TtMB3wmn09LPq3mUeGri0Z/ofwyZLKkkjR5OAwycqSEdJwtVJSfZfJpDkCzPq1WQo2HtniPbptAio7OljPAAECAdOiWWjQWjcjtdTzP4/H0aH/ZGeLQoU2j/9/tGQgSHd3GBHsAF5+J3i+Pq+fWNdyh0fT6Y1Zrir4tR8s8XLx8dM3XRCFQSzSbaQI7ANfLjlwqIkKNLbX9PJ41Beekcsxp2oPHi2+TRkt7EQJIfJMJbBpltD5MKpLFNskFVXaOFU/BxWKO+ZSWVvyzRIea2WwTyj8GRhaTfRCJLCQUTU3NtR2Hk8V9fWKclaNFTxQv/2Ho2IsggqS2T9tGmXdy4Si6On/4THNTaUc5RwzoA5EaT6RuGi15ZdARgc5C04NKmdiXkmS9+TZb/vCwpqf9fo84K0vcl225QJwoXjJaWr0XoXejacBJOca/dPb4XZvNdveuraAg/0ztnePiPkrIKbOqse+E1yiHbJcjkKnbkmS18g6fPl+7cxQP7dkhFHFIu5infPTca9QxWmFvRZCEW8rSZI7gGK7XC3R6fUpycgqejAPMmRRKWakStl3I9/T8PjpU2+1FBLVnIAdP4SRzOJwUYDQJcIVYQQECIKSdc1JgG17g6e739eOdm9sRlETjNw6o03BOD44LQnAF3qvIzAJPU1SULHNmRelJakxMwbkl7l8HhIXVHXb/oG7clKmsKOXgCgWIEKLoDQmhsByolBRDu/VgS03NiNuC2RuXfXKWXewI8vc/lxZibhwYyMnmKCgUhTkEKMDJorCUrCxDbkrqlZoaiZvbOQ/3Va7Acb24YsGCkRF/f4PGwFercyyZjrSULOColGqWSkXRnlecjIyRPPPx8vRc5rFkFZA8PD2WTp++bbqXj0ZrOHaGVZVDoWSxvqACXk4ox+EUuJM9yH5+fi5+Lj8MHA/yNegZ9VB1hZqiUrFUaqVSabhbm3P8ZKdE8mwh6fdsHo4ZQs1q1mB1wFCZRqPR5gecb8dTDzbck0j+5IBYwzExbFOJMrOkIqe9urqqwpCaeijwSGhojbNRzKMgRnIviXEQF3NSi1NTU4uvxh/Zkxca4+m8S88ukJzPaz+yH8ao2LXEI3lAkbi7jNmo3WNqQkPz8vYA8vJAZt9OjvNoHu6hNZJQCbhC3ZeNf/xwdSF7eHmRXUn/kI84VMxdNkk9eAAAAABJRU5ErkJggg==) center center no-repeat;
            background-size: 25px 39px;
            width: 25px;
            height: 39px
        }

        .team-wrap-content .team-card .team-item .level-name .img-level2[data-v-0a442381] {
            background: url(data:image/png;base64,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) center center no-repeat;
            background-size: 25px 39px;
            width: 25px;
            height: 39px
        }

        .team-wrap-content .team-card .team-item .level-name .img-level3[data-v-0a442381] {
            background: url(data:image/png;base64,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) center center no-repeat;
            background-size: 25px 39px;
            width: 25px;
            height: 39px
        }

        .team-wrap-content .team-card .team-item .level-name .level-num[data-v-0a442381] {
            position: absolute;
            transform: rotate(45deg);
            padding: 2px 40px;
            right: -36px;
            top: 8px;
            background-image: linear-gradient(to top, #1e3c72 0%, #1e3c72 1%, #2a5298 100%);
            color: var(--text-white);
            font-weight: 700
        }

        .team-wrap-content .team-card .team-item .level-name img[data-v-0a442381] {
            width: 35px
        }

        .team-wrap-content .team-card .team-item .level-count[data-v-0a442381] {
            text-align: center;
            color: var(--text-white);
            margin-bottom: 10px
        }

        .team-wrap-content .team-card .team-item .level-count .text-sm[data-v-0a442381] {
            line-height: 16px;
            font-size: 13px;
            margin-bottom: 5px;
            color: #eee
        }

        .team-wrap-content .team-card .team-item .level-count .text-df[data-v-0a442381] {
            font-size: 18px;
            font-weight: 700
        }

        .team-wrap-content .team-card .team-item .btn[data-v-0a442381] {
            display: inline-block;
            padding: 6px 12px;
            min-width: 100%;
            text-align: center;
            border-radius: 28px;
            line-height: 17px;
            color: var(--btn-text2);
            font-size: 12px;
            font-weight: 700;
            background: var(--btn-bg3);
            box-shadow: var(--shadow)
        }

        .team-wrap-content[data-v-b0580757] {
            position: relative
        }

        .team-wrap-content .share-card[data-v-b0580757] {
            margin-top: var(--mg);
            padding: 16px 14px;
            position: relative;
            color: var(--text-white);
            width: 100%;
            border-radius: var(--radius);
            overflow: hidden;
            background: #011553
        }

        .team-wrap-content .share-card[data-v-b0580757]:before {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            background: url(/assets/team-3f191994.png) center no-repeat;
            background-size: 362px 181px;
            width: 362px;
            height: 181px
        }

        .team-wrap-content .share-card .btn[data-v-b0580757] {
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(90deg, var(--btn-bg3), var(--btn-bg));
            color: var(--btn-text2);
            display: inline-block;
            padding: 0 14px;
            height: 24px;
            line-height: 24px;
            border-radius: 28px;
            font-size: 12px
        }

        .team-wrap-content .share-card .link[data-v-b0580757] {
            max-width: 70%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .team-wrap-content .share-card .icon-decor[data-v-b0580757] {
            position: absolute;
            bottom: 50px;
            right: 16px
        }

        .team-wrap-content .share-card .icon-decor img[data-v-b0580757] {
            width: 80px
        }

        .team-wrap-content .team-info[data-v-b0580757] {
            margin-top: var(--mg);
            box-shadow: none;
            background: var(--bg-input)
        }

        .team-wrap-content .team-info .other-num[data-v-b0580757] {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-bottom: 12px;
            z-index: 1
        }

        .team-wrap-content .team-info .other-num[data-v-b0580757]:last-child {
            margin-bottom: 0
        }

        .team-wrap-content .team-info .other-num .item[data-v-b0580757] {
            width: 33.3%
        }

        .team-wrap-content .team-info .other-num .item .text-df[data-v-b0580757] {
            line-height: 14px;
            font-size: 13px;
            color: var(--text-gray6);
            margin-bottom: 5px
        }

        .team-wrap-content .team-card[data-v-b0580757] {
            margin: var(--mg) auto 0;
            box-sizing: border-box;
            line-height: 24px;
            width: 100%;
            border-radius: var(--radius)
        }

        .team-wrap-content .team-card .level-content[data-v-b0580757] {
            background: rgba(0, 0, 0, .1);
            backdrop-filter: blur(10px);
            padding: 10px 5px 0;
            border-radius: 5px;
            width: 100%;
            display: flex;
            justify-content: space-between
        }

        .team-wrap-content .team-card .level-content .level-count[data-v-b0580757] {
            width: calc(50% - 5px);
            text-align: center;
            color: var(--text-white);
            margin-bottom: 5px
        }

        .team-wrap-content .team-card .level-content .level-count .text-sm[data-v-b0580757] {
            line-height: 16px;
            font-size: 13px;
            margin-bottom: 5px;
            color: #eee
        }

        .team-wrap-content .team-card .level-content .level-count .text-df[data-v-b0580757] {
            font-size: 18px;
            font-weight: 700
        }

        .team-wrap-content .team-card .team-item[data-v-b0580757] {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 12px;
            border-radius: var(--card-radius);
            padding: 12px;
            box-sizing: border-box;
            min-width: 0;
            position: relative
        }

        .team-wrap-content .team-card .team-item .icon-img[data-v-b0580757] {
            position: absolute;
            top: -16px;
            left: -10px
        }

        .team-wrap-content .team-card .team-item .img-level1[data-v-b0580757] {
            background: url(/assets/level2-a3e323a8.png) left top no-repeat;
            background-size: 45.4px 40.3px;
            width: 45.4px;
            height: 40.3px
        }

        .team-wrap-content .team-card .team-item .img-level2[data-v-b0580757] {
            background: url(/assets/level1-d65c3fa6.png) center center no-repeat;
            background-size: 41.1px 48.9px;
            width: 41.1px;
            height: 48.9px
        }

        .team-wrap-content .team-card .team-item .img-level3[data-v-b0580757] {
            background: url(/assets/level3-60db746e.png) center center no-repeat;
            background-size: 44.7px 48px;
            width: 44.7px;
            height: 48px
        }

        .team-wrap-content .team-card .team-item[data-v-b0580757]:nth-child(1) {
            background-image: linear-gradient(to right, #b8cbb8 0%, #b8cbb8 0%, #b465da 0%, #cf6cc9 33%, #ee609c 66%, #ee609c 100%)
        }

        .team-wrap-content .team-card .team-item[data-v-b0580757]:nth-child(2) {
            background-image: linear-gradient(to top, #0ba360 0%, #3cba92 100%)
        }

        .team-wrap-content .team-card .team-item[data-v-b0580757]:nth-child(3) {
            background-image: linear-gradient(to top, #09203f 0%, #537895 100%)
        }

        .team-wrap-content .team-card .team-item .level-name[data-v-b0580757] {
            text-align: right;
            white-space: nowrap;
            width: 100%;
            margin-bottom: -10px
        }

        .team-wrap-content .team-card .team-item .level-name .level-num[data-v-b0580757] {
            font-size: 18px;
            color: var(--text-white);
            font-weight: 700
        }

        .team-wrap-content .team-card .team-item .level-name img[data-v-b0580757] {
            width: 35px
        }

        .team-wrap-content .team-card .team-item .tools[data-v-b0580757] {
            width: 100%;
            margin-top: 10px
        }

        .team-wrap-content .team-card .team-item .btn[data-v-b0580757] {
            padding: 6px 12px;
            flex-shrink: 0;
            margin-left: 10px;
            text-align: center;
            border-radius: 28px;
            line-height: 17px;
            color: var(--btn-text2);
            font-size: 12px;
            font-weight: 700;
            background: var(--btn-bg5);
            display: inline-flex;
            align-items: center;
            margin-top: 12px
        }

        .team-wrap-content[data-v-443cda42] {
            position: relative
        }

        .team-wrap-content .share-card[data-v-443cda42] {
            padding: 12px;
            position: relative;
            color: var(--text-white);
            background: rgba(0, 0, 0, .1);
            border-radius: var(--radius);
            backdrop-filter: blur(10px)
        }

        .team-wrap-content .share-card[data-v-443cda42]:before {
            content: "";
            position: absolute;
            bottom: 30px;
            right: 15px;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAABLBAMAAACik+XhAAAAFVBMVEUAAAD///////////////////////9Iz20EAAAAB3RSTlMADBAFCRMXmHWySQAAAsFJREFUWMPll0122zAMhOPIybpS6eyl99S1arle+0ftAfQefQPy/kcohLEM+Icp4S6jpewvgxkCYPzyJZ596Y7/Q5flMHRP0ouyZL5/Di/rmvHh+EwBy4Zo4P0T/GvD6o74vrcbWDcEn+WPdr5qUL0jfNP3RgMF0RWrs3tr/Yu2EfOM97bktPxEF52h/l+EV2Ut2dncr0bi5eRZvsjH/TgVX52jh7wheO8bekppHCo+3/zrjKP6DYovspPzns3X2ny+99/e+zn74Wy+y+dbxqVxNjCfn5xvW5bXfddlyi8IH0el3h/Ze6b828nTM+Gz/MbS9lsfJHo34aa2XREtJ4/sDUcX44SP4DF0BnoZ2Tumxj50r6QekH0l2WXj2xgu1ZeC5yb/B96l75xp351iDOFGfcjGixiv5d1cfW5yEdnrfXmXXJFq2QmXxpHqOw2XLnF3vsco5uua+Vv1In15b6OYV+pH/eXD2VEKD0EfHYrX1/dcUpdSD5Id41pqzd38+DjeGYd33fZKiDzRa2mm24PTR1ff4cXImWCSivu2kexEfRB8MfIaTMzxCdXDPPblnr6qrgHgDua7hHlpey5UXwP81jkyn6ye1cW8wlteo/zyEb9Gdqx+WRk7+fPoR65eaM2fJLu5erG4ZJwTSezA5Q+d3Q3+NmfiZBJv/R8kO5jX14AX86kVuPFBn/x3+eQjzNXzFuv6x1tnFZT5b6ov6D08uU+X2E8186plOVWof77EipZxmg+nZyJo88CTBcD87qopT3Ly//iHeVlNvLveB5dIZWUkDeyJ7q7xiBPFKAJPP/hc44Hx8yyk8eQmDjgRqFtg3AOXLWzHF5H5y8qw/laEup/N74z4B3lHeE/90Fxgl+AO2DNulpe2t//ERPUwb01OzzLhxuRkljHzRusyy8TLFjI/B257ETcbqJq6e/lCz1/XNz1gWwO7LAAAAABJRU5ErkJggg==) no-repeat;
            background-size: 100% 100%;
            width: 123px;
            height: 75px
        }

        .team-wrap-content .share-card .btn[data-v-443cda42] {
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--btn-bg3);
            color: var(--btn-text2);
            display: inline-block;
            padding: 0 14px;
            height: 24px;
            line-height: 24px;
            border-radius: 28px;
            font-size: 12px
        }

        .team-wrap-content .share-card .link[data-v-443cda42] {
            max-width: 70%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .team-wrap-content .team-info[data-v-443cda42] {
            margin-top: var(--mg);
            box-shadow: none
        }

        .team-wrap-content .team-info .other-num[data-v-443cda42] {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-bottom: 12px;
            z-index: 1
        }

        .team-wrap-content .team-info .other-num[data-v-443cda42]:last-child {
            margin-bottom: 0
        }

        .team-wrap-content .team-info .other-num .item[data-v-443cda42] {
            width: 33.3%
        }

        .team-wrap-content .team-info .other-num .item .text-df[data-v-443cda42] {
            line-height: 14px;
            font-size: 13px;
            color: var(--text-gray6);
            margin-bottom: 5px
        }

        .team-wrap-content .team-card[data-v-443cda42] {
            margin: var(--mg) auto 0;
            box-sizing: border-box;
            line-height: 24px;
            width: 100%;
            border-radius: var(--radius);
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px
        }

        .team-wrap-content .team-card .level-content[data-v-443cda42] {
            background: rgba(0, 0, 0, .1);
            backdrop-filter: blur(10px);
            padding-top: 10px;
            border-radius: 5px;
            width: 100%
        }

        .team-wrap-content .team-card .team-item[data-v-443cda42] {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 12px;
            border-radius: 10px;
            padding: 12px;
            box-sizing: border-box;
            min-width: 0
        }

        .team-wrap-content .team-card .team-item[data-v-443cda42]:nth-child(1) {
            background-image: linear-gradient(-225deg, #231557 0%, #44107A 29%, #FF1361 67%, #FFF800 100%)
        }

        .team-wrap-content .team-card .team-item[data-v-443cda42]:nth-child(2) {
            background-image: linear-gradient(to right, #00dbde 0%, #fc00ff 100%)
        }

        .team-wrap-content .team-card .team-item[data-v-443cda42]:nth-child(3) {
            background-image: linear-gradient(to right, #3ab5b0 0%, #3d99be 31%, #56317a 100%)
        }

        .team-wrap-content .team-card .team-item .level-name[data-v-443cda42] {
            padding-top: 5px;
            width: 100%;
            text-align: center;
            white-space: nowrap;
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .team-wrap-content .team-card .team-item .level-name .img-level1[data-v-443cda42] {
            background: url(/assets/level1-c1364879.png) center center no-repeat;
            background-size: 30px 26px;
            width: 30px;
            height: 40px
        }

        .team-wrap-content .team-card .team-item .level-name .img-level2[data-v-443cda42] {
            background: url(/assets/level2-db5150af.png) center center no-repeat;
            background-size: 30px 26.1px;
            width: 30px;
            height: 40px
        }

        .team-wrap-content .team-card .team-item .level-name .img-level3[data-v-443cda42] {
            background: url(/assets/level3-2c547b48.png) center center no-repeat;
            background-size: 30px 26.4px;
            width: 30px;
            height: 40px
        }

        .team-wrap-content .team-card .team-item .level-name .level-num[data-v-443cda42] {
            font-size: 18px;
            color: var(--text-white);
            font-weight: 700
        }

        .team-wrap-content .team-card .team-item .level-name img[data-v-443cda42] {
            width: 35px
        }

        .team-wrap-content .team-card .team-item .level-count[data-v-443cda42] {
            text-align: center;
            color: var(--text-white);
            margin-bottom: 10px
        }

        .team-wrap-content .team-card .team-item .level-count .text-sm[data-v-443cda42] {
            line-height: 16px;
            font-size: 13px;
            margin-bottom: 5px;
            color: #eee
        }

        .team-wrap-content .team-card .team-item .level-count .text-df[data-v-443cda42] {
            font-size: 18px;
            font-weight: 700
        }

        .team-wrap-content .team-card .team-item .btn[data-v-443cda42] {
            display: inline-block;
            padding: 6px 12px;
            min-width: 100%;
            text-align: center;
            border-radius: 28px;
            line-height: 17px;
            color: var(--btn-text2);
            font-size: 12px;
            font-weight: 700;
            background: var(--btn-bg3);
            box-shadow: var(--shadow)
        }

        .team-wrap-content[data-v-a83af3d4] {
            position: relative
        }

        .team-wrap-content .share-card[data-v-a83af3d4] {
            position: relative;
            padding-bottom: 35px
        }

        .team-wrap-content .share-card[data-v-a83af3d4]:after {
            content: "";
            position: absolute;
            width: calc(100% + var(--mg) * 2);
            height: calc(100% + 45px + var(--mg));
            background: var(--primary);
            top: calc(-45px - var(--mg));
            left: calc(0px - var(--mg))
        }

        .team-wrap-content .share-card[data-v-a83af3d4]:before {
            opacity: .8;
            content: "";
            position: absolute;
            right: 0;
            bottom: 20px;
            background: url(/assets/money-0be137d4.png) no-repeat;
            background-size: 100% 100%;
            width: 155px;
            height: 134px;
            z-index: 1
        }

        .team-wrap-content .share-card .btn[data-v-a83af3d4] {
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--btn-bg3);
            color: var(--btn-text);
            display: inline-block;
            padding: 0 14px;
            height: 24px;
            line-height: 24px;
            border-radius: var(--btn-radius);
            cursor: pointer
        }

        .team-wrap-content .share-card .link[data-v-a83af3d4] {
            max-width: 70%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .team-wrap-content .team-info[data-v-a83af3d4] {
            margin-top: -18px;
            backdrop-filter: blur(10px)
        }

        .team-wrap-content .team-info .other-num[data-v-a83af3d4] {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-bottom: 12px;
            z-index: 1
        }

        .team-wrap-content .team-info .other-num[data-v-a83af3d4]:last-child {
            margin-bottom: 0
        }

        .team-wrap-content .team-info .other-num .item[data-v-a83af3d4] {
            width: 33.3%
        }

        .team-wrap-content .team-info .other-num .item .text-df[data-v-a83af3d4] {
            line-height: 14px;
            font-size: 13px;
            color: var(--text-gray6);
            margin-bottom: 5px
        }

        .team-wrap-content .team-card[data-v-a83af3d4] {
            margin: var(--mg) auto 0;
            box-sizing: border-box;
            line-height: 24px;
            width: 100%;
            border-radius: var(--border-radius)
        }

        .team-wrap-content .team-card .team-item[data-v-a83af3d4] {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 12px;
            width: 100%;
            border-radius: 10px;
            padding: 12px var(--mg);
            box-sizing: border-box
        }

        .team-wrap-content .team-card .team-item .icon[data-v-a83af3d4] {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--bg);
            margin-right: 5px
        }

        .team-wrap-content .team-card .team-item[data-v-a83af3d4]:nth-child(1) {
            background-image: linear-gradient(to right, #243949 0%, #517fa4 100%)
        }

        .team-wrap-content .team-card .team-item[data-v-a83af3d4]:nth-child(2) {
            background-image: linear-gradient(60deg, #3d3393 0%, #2b76b9 37%, #2cacd1 65%, #35eb93 100%)
        }

        .team-wrap-content .team-card .team-item[data-v-a83af3d4]:nth-child(3) {
            background-image: linear-gradient(-225deg, #AC32E4 0%, #7918F2 48%, #4801FF 100%)
        }

        .team-wrap-content .team-card .team-item .level-name[data-v-a83af3d4] {
            text-align: center;
            font-weight: 500;
            border-radius: 30px;
            color: var(--text-white);
            font-size: 14px;
            white-space: nowrap;
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .team-wrap-content .team-card .team-item .level-name .level-num[data-v-a83af3d4] {
            font-size: 16px;
            color: var(--text-white);
            font-weight: 700
        }

        .team-wrap-content .team-card .team-item .level-name img[data-v-a83af3d4] {
            width: 45px;
            display: block
        }

        .team-wrap-content .team-card .team-item .level-count[data-v-a83af3d4] {
            text-align: center;
            color: var(--text-white)
        }

        .team-wrap-content .team-card .team-item .level-count .text-sm[data-v-a83af3d4] {
            line-height: 16px;
            font-size: 13px;
            margin-bottom: 5px
        }

        .team-wrap-content .team-card .team-item .level-count .text-df[data-v-a83af3d4] {
            font-size: 18px;
            font-weight: 700
        }

        .team-wrap-content .team-card .team-item .btn[data-v-a83af3d4] {
            flex-shrink: 0;
            display: inline-block;
            padding: 6px 12px;
            min-width: 50px;
            text-align: center;
            border-radius: var(--btn-radius);
            line-height: 17px;
            color: var(--btn-text);
            font-size: 12px;
            font-weight: 700;
            background: var(--btn-bg3);
            box-shadow: var(--shadow);
            cursor: pointer !important;
        }

        .team-wrap-content .share-card .btn[data-v-0b24035f] {
            cursor: pointer !important;
        }
    </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="">

            <div data-v-0b24035f="" class="team-wrap">

                <div data-v-0b24035f="" class="team-wrap-content">

                    {{showUserLevel($user->id, $level)}}

                    {{-- <div class="card my-2" style="border-radius: 15px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    Account: test@gmail.com
                                </div>
                                <div class="col-12">
                                    Recharge Amount: 0.00
                                </div>
                                <div class="col-12">
                                    Join Time: 23-12-2022 05:53:00
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div data-v-0b24035f=""
                        class=":uno: container-card relative rd-$card-radius p-$mg c-$btn-text team-info">
                        <div data-v-0b24035f="" class="other-num">
                            <div data-v-0b24035f="" class="item">
                                <div data-v-0b24035f="" class="text-df">Team size</div>
                                <div data-v-0b24035f="" class="txtBlue text-xl">
                                    {{ refTotalCount($user->id) }}
                                </div>
                            </div>
                            <div data-v-0b24035f="" class="item">
                                <div data-v-0b24035f="" class="text-df">Team recharge</div>
                                <div data-v-0b24035f="" class="txtBlue text-xl">
                                    {{ $general->cur_sym }}{{ showAmount(refTotalDeposit($user->id)) }}
                                </div>
                            </div>
                            <div data-v-0b24035f="" class="item">
                                <div data-v-0b24035f="" class="text-df">Team Withdrawal</div>
                                <div data-v-0b24035f="" class="txtBlue text-xl">
                                    {{ $general->cur_sym }}{{ showAmount(refTotalWithdraw($user->id)) }}
                                </div>
                            </div>
                        </div>
                        <div data-v-0b24035f="" class="other-num">
                            <div data-v-0b24035f="" class="item">
                                <div data-v-0b24035f="" class="text-df">New team</div>
                                <div data-v-0b24035f="" class="txtBlue text-xl">{{ refTodayCount($user->id) }}</div>
                            </div>
                            <div data-v-0b24035f="" class="item">
                                <div data-v-0b24035f="" class="text-df">First time recharge</div>
                                <div data-v-0b24035f="" class="txtBlue text-xl">
                                    {{ $general->cur_sym }}{{ showAmount(refTodayDeposit($user->id)) }}</div>
                            </div>
                            <div data-v-0b24035f="" class="item">
                                <div data-v-0b24035f="" class="text-df">First withdrawal</div>
                                <div data-v-0b24035f="" class="txtBlue text-xl">
                                    {{ $general->cur_sym }}{{ showAmount(refTodayWithdraw($user->id)) }}</div>
                            </div>
                        </div>
                    </div> --}}



                <div>
                    <div class="van-overlay" role="button" tabindex="0" style="z-index: 2003; display: none;">
                        <!---->
                    </div>
                    <div role="dialog" tabindex="0"
                        class="van-popup van-popup--round van-popup--center van-safe-area-bottom van-popup-customer"
                        style="z-index: 2003; width: 95%; max-width: 620px; display: none;">
                        <div data-v-95293013="" class="announce-wrap a-t-2">
                            <div data-v-95293013="" class="container-card email-box p-0!">
                                <div data-v-95293013=""
                                    class="mb-12px pt-12px text-center text-20px font-bold text-$btn-text">Announcement
                                </div>
                                <div data-v-95293013="" class="mx-auto h-10px w-95% rounded-full bg-$primary"></div>
                                <div data-v-95293013=""
                                    class="content absolute left-50% top-60px h-310px w-90% translate-x-[-50%] overflow-y-auto p-5px text-black shadow bg-white!">
                                    <p>Reima operation introduction:</p>
                                    <p>1:<br>It will be officially launched on October 11, 2023. The minimum deposit
                                        amount is 10 USDT. Minimum withdrawal 2USDT<br><br>Telegram channel:
                                        https://t.me/Eco_Wave_Power</p>
                                    <p>2:<br>Everyone can invest and earn daily profits.<br>Unlimited daily withdrawals:
                                        You can withdraw money immediately by upgrading VIP and resetting new
                                        tasks.<br>Withdrawals arrive within 1-3 minutes</p>
                                    <p>3:<br>Investment and Return:<br>VIP1 recharges 10USDT and earns 2USDT every
                                        day<br>VIP2 recharges 80USDT and earns 20USDT every day<br>VIP3 recharges 260
                                        USDT and earns 65 USDT every day<br>VIP4 recharges 760 USDT and earns 190 USDT
                                        every day<br>VIP5 recharges 2160 USDT and earns 540 USDT every day<br>VIP6
                                        recharges 5210 USDT and earns 1490 USDT every day<br>VIP7 recharges 9999 USDT
                                        and earns 2880 USDT every day<br>VIP8 recharges 15990 USDT and earns 5399 USDT
                                        every day<br>VIP9 recharges 28888 USDT and earns 9699 USDT every day</p>
                                    <p>4:<br>Rewards for inviting friends:<br>When a team uses your invitation code to
                                        register and recharge, the A, B, and C level commission ratios are as
                                        follows:<br>Member A 10%. For example, if member A deposits 100 USDT, you will
                                        receive 10 USDT.<br>Member B 5%. For example, if member B deposits 100 USDT, you
                                        will receive 5 USDT.<br>Member C 2%. For example, if member C deposits 100 USDT,
                                        you will receive 2 USDT.</p>
                                    <p>5:<br>Daily accumulated recharge reward policy for inviting friends:<br>The total
                                        team deposit within 24 hours is 500 USDT, and the reward is 20 USDT<br>Within 24
                                        hours, the team deposited a total of 1,000 USDT and received a reward of 38
                                        USDT.<br>Within 24 hours, the team deposited a total of 5,000 USDT and received
                                        a reward of 188 USDT.<br>Within 24 hours, the team deposited a total of 10,000
                                        USDT and received a reward of 358 USDT.<br>Within 24 hours, the team deposited a
                                        total of 30,000 USDT and received a reward of 1368 USDT.<br>Within 24 hours, the
                                        team deposited a total of 80,000 USDT and received a reward of 6888 USDT.</p>
                                    <p>Note: If you are eligible, please contact customer service within 24 hours to
                                        claim your rewards. Once the period expires,<br>It will be considered invalid
                                        and your team will need to recalculate it within 24 hours.</p>
                                    <p>Disclaimer<br>1. In order to facilitate the recharge and withdrawal needs of
                                        users in different countries,<br>The platform uses USDT as the only channel for
                                        deposits and withdrawals.<br>2. VIP is valid for 20 days. After the VIP expires,
                                        the investment amount will be returned to your account</p>
                                </div>
                                <div data-v-95293013="" class="mt-320px w-full">
                                    <div data-v-95293013="" class="ml-50% mt-10px inline-block translate-x-[-50%]">I
                                        know</div>
                                </div>
                            </div>
                        </div><!---->
                    </div><!----><!---->
                </div><!---->
            </div><svg id="__svg__icons__dom__" xmlns="http://www.w3.org/2000/svg"
                xmlns:link="http://www.w3.org/1999/xlink" style="position: absolute; width: 0px; height: 0px;">
                <symbol fill="none" viewBox="0 0 12 12" id="icon-1-arrow">
                    <circle cx="6" cy="6" r="6" fill="#fff" fill-opacity=".3"></circle>
                    <path d="m5 8 3-2-3-2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </symbol>
                <symbol fill="none" viewBox="0 0 10 6" id="icon-1-arrow2">
                    <path d="m1 1 4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 14 7" id="icon-1-arrow3">
                    <path d="M1 6h6.5l-3-5M10.5 6h2l-3-5" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 14 14" id="icon-1-email">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.154 1.455c0-.268.24-.485.538-.485h8.615c.298 0 .539.217.539.485v3.372l.139-.05c.326-.118.667-.08.938.06V1.455C12.923.65 12.2 0 11.307 0H2.692C1.8 0 1.077.651 1.077 1.455v3.383c.271-.142.611-.179.938-.061l.139.05V1.455Z"
                        fill="#fff"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.785 4.777C12.845 4.345 14 5.141 14 6.303v6.053c0 .908-.723 1.644-1.615 1.644H1.615C.723 14 0 13.264 0 12.356V6.303c0-1.162 1.154-1.958 2.215-1.526L6.8 6.643a.53.53 0 0 0 .4 0l4.585-1.866Zm1.138 1.526a.54.54 0 0 0-.738-.508L7.6 7.66a1.59 1.59 0 0 1-1.2 0L1.815 5.795a.54.54 0 0 0-.738.508v6.053c0 .303.241.548.538.548h10.77a.543.543 0 0 0 .538-.548V6.303ZM4.012 3.544c0-.302.24-.547.538-.547h4.9c.297 0 .538.245.538.547a.543.543 0 0 1-.539.548H4.55a.543.543 0 0 1-.538-.548Z"
                        fill="#fff"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 18 18" id="icon-1-help">
                    <path
                        d="M16.292 7.942a7.325 7.325 0 0 0-14.571 0 2.18 2.18 0 1 0 1.323-.054 6.025 6.025 0 0 1 5.963-5.222c3.046 0 5.573 2.282 5.962 5.225a2.18 2.18 0 0 0-.765 3.818A6.026 6.026 0 0 1 10.08 14.6a1.307 1.307 0 0 0-2.394.73 1.307 1.307 0 0 0 2.477.586 7.327 7.327 0 0 0 5.283-3.746 2.18 2.18 0 0 0 .846-4.228ZM3.34 9.992a.874.874 0 1 1-1.748-.001.874.874 0 0 1 1.748.001Zm5.663 5.337-.007.007-.004-.011.011.004Zm6.548-4.464a.874.874 0 1 1 .001-1.747.874.874 0 0 1-.001 1.747Z"
                        fill="#fff"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 18 18" id="icon-1-lang">
                    <g stroke="currentColor" stroke-width="1.167" stroke-linecap="round" stroke-linejoin="round">
                        <path clip-rule="evenodd" d="M9 17A8 8 0 1 0 9 1a8 8 0 0 0 0 16Z"></path>
                        <path d="M1 9h16"></path>
                        <path clip-rule="evenodd"
                            d="M9 17c1.767 0 3.2-3.582 3.2-8S10.767 1 9 1C7.233 1 5.8 4.582 5.8 9s1.433 8 3.2 8Z">
                        </path>
                        <path
                            d="M3.343 3.457A7.975 7.975 0 0 0 9 5.8c2.21 0 4.21-.895 5.657-2.343M14.657 14.543A7.975 7.975 0 0 0 9 12.2c-2.21 0-4.21.896-5.657 2.343">
                        </path>
                    </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-1-notice">
                    <path
                        d="M13.465 8.026c-.01-2.356-1.747-3.44-3.299-1.667A4.035 4.035 0 0 1 7.15 7.737l-1.542.007a2.14 2.14 0 0 0-2.13 2.15l.015 3.285a2.012 2.012 0 0 0 2.02 2.003l1.57-.007a3.966 3.966 0 0 1 3.148 1.53c1.458 1.874 3.279.829 3.268-1.546l-.033-7.133Zm-4.41-2.64c2.448-2.795 5.87-1.082 5.887 2.634l.033 7.133c.017 3.784-3.587 5.446-5.91 2.459a2.489 2.489 0 0 0-1.976-.96l-1.57.007a3.489 3.489 0 0 1-3.504-3.473L2 9.9a3.617 3.617 0 0 1 3.6-3.633l1.542-.007a2.558 2.558 0 0 0 1.913-.873ZM16.63 9.83a.738.738 0 0 1 .902-1.17l-.447.588.447-.587h.002l.001.002.003.002.008.006.019.016.055.046c.043.039.1.092.165.16.13.136.295.334.459.598.329.533.642 1.323.646 2.386.005 1.064-.3 1.856-.625 2.392-.16.265-.324.465-.453.602a2.725 2.725 0 0 1-.218.209l-.02.016-.006.005-.003.003-.002.001-.454-.582.453.583a.738.738 0 0 1-.906-1.166l-.002.001-.002.002-.003.002.011-.01a2.17 2.17 0 0 0 .342-.431c.199-.328.415-.857.411-1.62-.003-.763-.224-1.29-.426-1.616a2.174 2.174 0 0 0-.357-.438Zm2.619-1.603-.004-.004.002.002.03.027c.03.028.077.075.136.142.12.133.288.345.459.64.34.587.7 1.514.706 2.835.006 1.321-.346 2.252-.68 2.841-.168.297-.334.51-.453.645a2.312 2.312 0 0 1-.164.17l-.003.002.004-.003-.001.001-.002.001v.001a.738.738 0 0 0 .945 1.134l-.47-.569.47.569h.002l.001-.002.004-.003.008-.007.023-.02a3.119 3.119 0 0 0 .293-.299c.176-.201.403-.496.627-.89.45-.794.88-1.976.873-3.578-.007-1.601-.448-2.78-.905-3.569a5.343 5.343 0 0 0-.636-.885 3.882 3.882 0 0 0-.296-.295l-.023-.02-.009-.008-.003-.002-.001-.002s-.002 0-.467.572l.465-.573a.738.738 0 0 0-.935 1.143h.001l.001.002h.002v.002Z"
                        fill="currentColor"></path>
                </symbol>
                <symbol class="icon" viewBox="0 0 1024 1024" id="icon-2-android">
                    <path
                        d="M512 703.3c-41.8 0-75.6-34-75.6-75.6V396.3c0-41.6 33.8-75.6 75.6-75.6 20.2 0 39.1 7.8 53.5 22.1 14.3 14.3 22.1 33.3 22.1 53.5v231.5c0 20.2-7.8 39.1-22.1 53.5-14.4 14-33.3 22-53.5 22"
                        fill="#FFF"></path>
                    <path
                        d="M243.1 496c-30.6 0-55.2 24.8-55.2 55.2v231.5c0 30.6 24.8 55.2 55.2 55.4 30.6 0 55.2-24.8 55.2-55.4V551.1c0-30.3-24.8-55.1-55.2-55.1m593 11.4H297.3V487c0-83.4 45.5-160.9 119.9-206.9l-28.9-52.5c-3.6-6.1-4.4-14.1-2.4-21.2 2.2-7.1 7.1-13.4 13.6-16.8 4.1-2.4 8.8-3.6 13.4-3.6 10.2 0 19.7 5.6 24.6 14.6l30.4 55.2c31.4-11.4 64.4-17.3 98.7-17.3 34.8 0 68.1 5.8 99.4 17.5l30.1-55.4c4.9-9 14.3-14.6 24.6-14.6 4.6 0 9.2 1.2 13.4 3.4 6.8 3.6 11.7 9.7 13.6 17 2.2 7.3 1.2 14.8-2.4 21.4l-28.9 52.8c74.4 46 119.9 123.5 119.9 206.9v19.9h-.2z"
                        fill="#FFF"></path>
                    <path
                        d="m633.8 453.3 38.7-70.5c1.9-3.6.7-8.5-2.9-10.5-3.9-1.9-8.5-.7-10.5 3.2l-38.9 71.2c-32.8-14.6-69.5-22.9-108.2-22.6-38.7 0-75.4 8-107.9 22.6l-38.9-71c-1.9-3.6-6.8-5.1-10.5-3.2s-5.1 6.8-3.2 10.5l38.7 70.5C314.3 492.6 263 567 263 652.6h498c-.3-85.8-51.3-160.2-127.2-199.3M398.5 562.2c-11.4 0-20.9-9.2-20.9-20.9 0-11.4 9.2-20.9 20.9-20.9 11.4 0 20.9 9.5 20.9 20.9s-9.3 20.9-20.9 20.9m226.8 0c-11.4 0-20.9-9.2-20.9-20.9 0-11.4 9.2-20.9 20.9-20.9 11.4 0 20.9 9.5 20.9 20.9s-9.5 20.9-20.9 20.9"
                        fill="#FFF"></path>
                    <path
                        d="M419.3 830c-41.6 0-75.6-33.8-75.6-75.6V652.3h-19.9c-21.2 0-41.1-8.3-56.2-23.1-15.1-15.1-23.3-34.8-23.1-56.2V194h535.1v379c0 43.8-35.5 79.3-79.3 79.3h-19.9v102.1c0 41.6-33.8 75.6-75.6 75.6-20.2 0-39.1-7.8-53.5-22.1-14.3-14.3-22.1-33.3-22.1-53.5V652.3h-34v102.1c-.3 41.6-34.4 75.6-75.9 75.6"
                        fill="#FFF"></path>
                    <path
                        d="M189 588.3c0 32.6 26.3 59.1 59.1 59.1h40.1V770c0 30.4 24.8 55.2 55.2 55.2 30.6 0 55.2-24.8 55.2-55.4V647.2h74.6v122.5c0 30.4 24.8 55.2 55.2 55.2 30.6 0 55.2-24.8 55.2-55.2V647.2H624c32.6 0 59.1-26.5 59.1-59.1V229.2H188.8l.2 359.1zm570.6-6.8c-41.6 0-75.6-33.8-75.6-75.6V274.5c0-41.8 33.8-75.6 75.6-75.6s75.6 33.8 75.6 75.6V506c0 41.7-33.8 75.5-75.6 75.5"
                        fill="#FFF"></path>
                    <path
                        d="M512 341.1c-30.6 0-55.2 24.8-55.2 55.2v231.5c0 30.6 24.8 55.2 55.2 55.2 30.6 0 55.2-24.8 55.2-55.2V396.3c0-30.4-24.6-55.2-55.2-55.2"
                        fill="#FFF"></path>
                    <path
                        d="M188.2 353.8c-30.6 0-55.2 24.8-55.2 55.2v231.5c0 30.6 24.8 55.2 55.2 55.2 30.6 0 55.2-24.8 55.2-55.2V409c-.1-30.4-24.9-55.2-55.2-55.2m445.6-207.9 38.7-70.5c1.9-3.6.7-8.3-2.9-10.5-3.6-1.9-8.5-.7-10.5 3.2l-38.9 71.2c-32.8-14.6-69.5-22.9-108.4-22.9-38.7 0-75.4 8-107.9 22.6L365 68c-1.9-3.6-6.8-5.1-10.5-3.2-3.6 1.9-5.1 6.8-3.2 10.5l38.7 70.5c-75.9 39.1-127.2 113.5-127.2 199.1h497.9c0-85.4-51-159.8-126.9-199m-235.3 109c-11.4 0-20.9-9.2-20.9-20.9 0-11.4 9.2-20.9 20.9-20.9 11.4 0 20.9 9.5 20.9 20.9 0 11.4-9.3 20.9-20.9 20.9m226.8 0c-11.4 0-20.9-9.2-20.9-20.9 0-11.4 9.2-20.9 20.9-20.9 11.4 0 20.9 9.5 20.9 20.9 0 11.4-9.5 20.9-20.9 20.9M264.7 364.3v358.9c0 32.6 26.3 59.1 59.1 59.1h40.1v122.5c0 30.4 24.8 55.2 55.2 55.2 30.6 0 55.2-24.8 55.2-55.4V782H549v122.5c0 30.4 24.8 55.2 55.2 55.2 30.6 0 55.2-24.8 55.2-55.2V782h40.4c32.6 0 59.1-26.3 59.1-59.1V364l-494.2.3zM891 409c0-30.6-24.8-55.2-55.2-55.2-30.6 0-55.2 24.8-55.2 55.2v231.5c0 30.6 24.8 55.2 55.2 55.2 30.6 0 55.2-24.8 55.2-55.2V409z"
                        fill="#A4C439"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 64 66" id="icon-2-deposit">
                    <g filter="url(#icon-2-deposit_a)">
                        <rect x="32" width="45.255" height="45.255" rx="16" transform="rotate(45 32 0)"
                            fill="url(#icon-2-deposit_b)"></rect>
                        <rect x="32" y=".707" width="44.255" height="44.255" rx="15.5"
                            transform="rotate(45 32 .707)" stroke="url(#icon-2-deposit_c)"></rect>
                    </g>
                    <path
                        d="M43.5 33.765c.011-.052-.133-2.621-.133-2.621 1.273.009.14-1.006-3.75-1.006-5.31 0-7.04 1.831-7.04 3.104v7.465h.002c.055 1.257 3 .816 6.854.816 1.664 0 2.777-.912 2.777-.912l1.31-1.26-.02-5.586Z"
                        fill="#fff" fill-opacity=".5"></path>
                    <path
                        d="M35.269 41.744c-1.63 0-2.675-.152-2.82-.891h-.016l-.003-.146v-7.465c0-1.207 1.514-3.25 7.187-3.25 2.511 0 4.12.44 4.357.854.048.084.05.175.006.25-.065.111-.215.173-.459.19.112 1.99.126 2.387.125 2.479l.02 5.647-1.354 1.304c-.056.047-1.183.953-2.88.953-.858 0-1.687.022-2.418.042-.635.017-1.22.033-1.745.033Zm-2.547-1.082.002.038c.038.833 1.817.785 4.282.719.733-.02 1.564-.042 2.427-.042 1.588 0 2.674-.87 2.685-.879l1.255-1.21-.018-5.537v-.004c0-.152-.08-1.624-.134-2.595l-.008-.155h.155c.176 0 .28-.019.329-.036-.191-.19-1.37-.677-4.08-.677-5.454 0-6.895 1.935-6.895 2.958v7.42Z"
                        fill="#fff" fill-opacity=".5"></path>
                    <path
                        d="M30.195 23.26c-3.89 0-7.041 1.02-7.041 2.279l.023 12.108 6.286-.169-.027-5.885 5.115-2.285v-3.526c0-1.258-.467-2.522-4.356-2.522Z"
                        fill="#fff" fill-opacity=".5"></path>
                    <path
                        d="M23.031 37.797v-.15l-.024-12.109c0-1.359 3.157-2.424 7.188-2.424 3.967 0 4.502 1.349 4.502 2.668v3.62l-5.115 2.285.027 5.933-6.578.177Zm7.164-14.39c-4.125 0-6.896 1.102-6.896 2.131 0 .21.02 10.585.024 11.959l5.993-.16-.027-5.839 5.116-2.285v-3.431c0-1.234-.51-2.376-4.21-2.376Z"
                        fill="#fff" fill-opacity=".5"></path>
                    <path d="M29.815 38.566s-.907-1.042-.352-1.088l-6.31.169c0 1.258 2.773.919 6.662.919Z"
                        fill="#fff" fill-opacity=".5"></path>
                    <path
                        d="M26.182 38.754c-1.49 0-2.494-.09-2.936-.525a.788.788 0 0 1-.239-.582v-.142l6.452-.173.015.292a.11.11 0 0 0-.046.01c-.036.09.204.499.497.836l.21.242h-.32c-.73 0-1.421.012-2.062.023-.571.01-1.095.019-1.57.019Zm-2.866-.965a.483.483 0 0 0 .135.232c.496.488 2.173.458 4.297.422.552-.01 1.142-.02 1.761-.023-.18-.238-.376-.553-.37-.787l-5.823.156Z"
                        fill="#fff" fill-opacity=".5"></path>
                    <path
                        d="M27.51 27.749c-3.743 0-7.772-.909-7.772-2.903s4.03-2.902 7.772-2.902c3.743 0 7.771.908 7.771 2.902 0 1.994-4.028 2.903-7.771 2.903Zm0-4.345c-4.127 0-6.215 1.05-6.312 1.45.097.384 2.186 1.435 6.312 1.435 4.1 0 6.188-1.038 6.31-1.443-.121-.405-2.21-1.442-6.31-1.442Zm0 7.72c-3.743 0-7.772-.908-7.772-2.902h1.46c.097.391 2.185 1.442 6.312 1.442 3.24 0 5.63-.69 6.234-1.339.057-.06.075-.1.078-.11l1.46.007c0 .271-.082.682-.47 1.098-1.02 1.096-3.886 1.804-7.302 1.804Zm8.994 7.25c-3.743 0-7.771-.908-7.771-2.902h1.46c.096.392 2.184 1.442 6.311 1.442 4.12 0 6.18-1.05 6.267-1.448l1.46.006c0 1.994-4.006 2.902-7.727 2.902Zm-8.994-3.048c-3.743 0-7.772-.908-7.772-2.902h1.46c.097.391 2.185 1.442 6.312 1.442.548 0 1.094-.02 1.624-.06l.11 1.456c-.567.043-1.15.064-1.734.064Zm0 3.969c-3.743 0-7.772-.909-7.772-2.903h1.46c.097.392 2.185 1.443 6.312 1.443.566 0 1.13-.022 1.677-.064l.112 1.455c-.584.046-1.186.069-1.79.069Zm8.967 2.958c-3.743 0-7.771-.909-7.771-2.902h1.46c.097.391 2.185 1.442 6.311 1.442 4.127 0 6.215-1.05 6.312-1.45l1.46.008c0 1.994-4.029 2.902-7.772 2.902Z"
                        fill="#fff"></path>
                    <path
                        d="M36.477 34.495c-3.743 0-7.771-.908-7.771-2.902 0-1.994 4.028-2.902 7.771-2.902 3.743 0 7.772.908 7.772 2.902 0 1.994-4.029 2.902-7.772 2.902Zm0-4.344c-4.126 0-6.214 1.05-6.312 1.45.097.384 2.185 1.434 6.312 1.434 4.1 0 6.189-1.037 6.31-1.442-.122-.405-2.21-1.442-6.31-1.442ZM19.74 24.846h1.46v11.591h-1.46v-11.59Z"
                        fill="#fff"></path>
                    <path
                        d="M33.821 24.846h1.46v4.794h-1.46v-4.794Zm-5.115 6.747h1.46v7.802h-1.46v-7.802Zm14.083 0h1.46v7.802h-1.46v-7.802Z"
                        fill="#fff"></path>
                    <defs>
                        <linearGradient id="icon-2-deposit_b" x1="42.409" y1="4.073" x2="67.751"
                            y2="39.372" gradientUnits="userSpaceOnUse">
                            <stop stop-color="var(--btn-bg)"></stop>
                            <stop offset="1" stop-color="var(--btn-bg2)"></stop>
                        </linearGradient>
                        <linearGradient id="icon-2-deposit_c" x1="41.051" y1="1.358" x2="51.912"
                            y2="23.985" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#fff"></stop>
                            <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                        </linearGradient>
                        <filter id="icon-2-deposit_a" x="2.627" y="6.627" width="58.745" height="58.745"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                result="hardAlpha"></feColorMatrix>
                            <feOffset dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="out"></feComposite>
                            <feColorMatrix values="0 0 0 0 0.145098 0 0 0 0 0.286275 0 0 0 0 1 0 0 0 0.2 0">
                            </feColorMatrix>
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_358_3"></feBlend>
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_358_3" result="shape"></feBlend>
                        </filter>
                    </defs>
                </symbol>
                <symbol fill="none" viewBox="0 0 65 66" id="icon-2-download">
                    <g filter="url(#icon-2-download_a)">
                        <rect x="32.092" width="45.385" height="45.385" rx="16"
                            transform="rotate(45 32.092 0)" fill="url(#icon-2-download_b)"></rect>
                        <rect x="32.092" y=".707" width="44.385" height="44.385" rx="15.5"
                            transform="rotate(45 32.092 .707)" stroke="url(#icon-2-download_c)"></rect>
                    </g>
                    <path
                        d="M40.572 42H23.428C21.535 42 20 40.486 20 38.619v-4.227c0-.467.384-.846.857-.846h1.715c.473 0 .857.379.857.846v2.536c0 .934.767 1.69 1.714 1.69h13.714c.947 0 1.715-.756 1.715-1.69v-2.536c0-.467.383-.846.857-.846h1.714c.473 0 .857.379.857.846v4.227C44 40.486 42.465 42 40.572 42Zm-15.54-16.585a.897.897 0 0 1 1.256 0l3.998 3.943v-8.512c0-.467.384-.846.857-.846h1.714c.474 0 .858.379.858.846v8.512l3.997-3.944a.897.897 0 0 1 1.256 0l1.257 1.24a.868.868 0 0 1 0 1.239l-7.08 6.982c-.03.03-.581.362-1.135.362-.56 0-1.124-.332-1.155-.362l-7.08-6.982a.868.868 0 0 1 0-1.24l1.257-1.238Z"
                        fill="url(#icon-2-download_d)"></path>
                    <defs>
                        <linearGradient id="icon-2-download_b" x1="42.53" y1="4.085" x2="67.946"
                            y2="39.485" gradientUnits="userSpaceOnUse">
                            <stop stop-color="var(--btn-bg)"></stop>
                            <stop offset="1" stop-color="var(--btn-bg2)"></stop>
                        </linearGradient>
                        <linearGradient id="icon-2-download_c" x1="41.169" y1="1.362" x2="52.061"
                            y2="24.054" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#fff"></stop>
                            <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                        </linearGradient>
                        <linearGradient id="icon-2-download_d" x1="24.235" y1="20" x2="28.802"
                            y2="42.907" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#fff"></stop>
                            <stop offset=".495" stop-color="#fff" stop-opacity=".7"></stop>
                            <stop offset="1" stop-color="#fff"></stop>
                        </linearGradient>
                        <filter id="icon-2-download_a" x="2.627" y="6.627" width="58.929" height="58.929"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                result="hardAlpha"></feColorMatrix>
                            <feOffset dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="out"></feComposite>
                            <feColorMatrix values="0 0 0 0 0.145098 0 0 0 0 0.286275 0 0 0 0 1 0 0 0 0.2 0">
                            </feColorMatrix>
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_358_5"></feBlend>
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_358_5" result="shape"></feBlend>
                        </filter>
                    </defs>
                </symbol>
                <symbol fill="none" viewBox="0 0 66 67" id="icon-2-exit">
                    <g filter="url(#icon-2-exit_a)">
                        <rect x="32.527" width="46" height="46" rx="16"
                            transform="rotate(45 32.527 0)" fill="url(#icon-2-exit_b)"></rect>
                        <rect x="32.527" y=".707" width="45" height="45" rx="15.5"
                            transform="rotate(45 32.527 .707)" stroke="url(#icon-2-exit_c)"></rect>
                    </g>
                    <path
                        d="M44 31.497c0 .448-.14.752-.41 1.047l-2.75 2.998c-.28.304-.55.448-.961.448-.829 0-1.379-.6-1.379-1.503 0-.448.14-.752.41-1.047l.419-.448H35.75c-.829 0-1.379-.6-1.379-1.503 0-.903.55-1.503 1.379-1.503h3.579l-.411-.448c-.279-.303-.41-.6-.41-1.047 0-.903.55-1.503 1.378-1.503.41 0 .69.152.96.448l2.75 2.998c.265.311.404.607.404 1.063Zm-4.121-7.499h-11.55l2.61 1.647c.411.304.69.751.69 1.351v11.992h8.25c.828 0 1.378.6 1.378 1.503 0 .903-.55 1.503-1.378 1.503h-8.25v1.503c0 .903-.55 1.503-1.379 1.503-.279 0-.55-.152-.69-.304l-6.87-4.509-.411-.447v-.152c-.14-.152-.279-.296-.279-.6V22.503c0-.6.41-1.2.829-1.351.132-.152.41-.152.55-.152h16.5c.828 0 1.378.6 1.378 1.503 0 .903-.557 1.495-1.378 1.495Z"
                        fill="url(#icon-2-exit_d)"></path>
                    <defs>
                        <linearGradient id="icon-2-exit_b" x1="43.107" y1="4.14" x2="68.867"
                            y2="40.02" gradientUnits="userSpaceOnUse">
                            <stop stop-color="var(--btn-bg)"></stop>
                            <stop offset="1" stop-color="var(--btn-bg2)"></stop>
                        </linearGradient>
                        <linearGradient id="icon-2-exit_c" x1="41.727" y1="1.38" x2="52.767"
                            y2="24.38" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#fff"></stop>
                            <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                        </linearGradient>
                        <linearGradient id="icon-2-exit_d" x1="25.882" y1="21" x2="31.718"
                            y2="45.598" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#fff"></stop>
                            <stop offset=".495" stop-color="#fff" stop-opacity=".7"></stop>
                            <stop offset="1" stop-color="#fff"></stop>
                        </linearGradient>
                        <filter id="icon-2-exit_a" x="2.627" y="6.627" width="59.799" height="59.799"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                result="hardAlpha"></feColorMatrix>
                            <feOffset dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="out"></feComposite>
                            <feColorMatrix values="0 0 0 0 0.145098 0 0 0 0 0.286275 0 0 0 0 1 0 0 0 0.2 0">
                            </feColorMatrix>
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_358_4"></feBlend>
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_358_4" result="shape"></feBlend>
                        </filter>
                    </defs>
                </symbol>
                <symbol fill="none" viewBox="0 0 40 20" id="icon-2-home-arrow-disable">
                    <path d="M0 4a4 4 0 0 1 4-4h24c6.627 0 12 5.373 12 12v4a4 4 0 0 1-4 4H12C5.373 20 0 14.627 0 8V4Z"
                        fill="var(--primary)" fill-opacity=".5"></path>
                    <g stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 12h6.5l-3-5M23.5 12h2l-3-5"></path>
                    </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 40 20" id="icon-2-home-arrow">
                    <path d="M0 4a4 4 0 0 1 4-4h24c6.627 0 12 5.373 12 12v4a4 4 0 0 1-4 4H12C5.373 20 0 14.627 0 8V4Z"
                        fill="var(--primary)"></path>
                    <g stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 12h6.5l-3-5M23.5 12h2l-3-5"></path>
                    </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 16 16" id="icon-2-home1">
                    <circle cx="8" cy="8" r="8" fill="url(#icon-2-home1_a)"></circle>
                    <g clip-path="url(#icon-2-home1_b)">
                        <path
                            d="M12.125 5.563v5.312C12.062 12.063 10.25 13 8.062 13c-2.25 0-4-.938-4.062-2.125V5.25C3.875 4 5.688 3 8 3c2.313 0 4.125 1 4.125 2.25v.313ZM8 3.75c-2 0-3.5.813-3.5 1.563S6 6.875 8 6.875s3.5-.813 3.5-1.563S10 3.75 8 3.75Zm3.5 2.813c-.75.625-2.063 1-3.563 1-1.437 0-2.812-.375-3.5-1v.375C4.625 7.75 6.25 8.374 8 8.374c1.75 0 3.375-.688 3.563-1.438v-.375H11.5ZM11.5 8c-.688.625-2.063 1-3.563 1-1.437 0-2.75-.438-3.5-1v.313c.188.812 1.813 1.437 3.5 1.437 1.75 0 3.375-.688 3.563-1.438V8Zm0 1.313c-.688.624-2.063 1-3.563 1-1.437 0-2.812-.376-3.5-1v.312c.188.813 1.813 1.438 3.5 1.438 1.75 0 3.375-.688 3.563-1.438v-.313Zm0 1.562v-.188c-.688.626-2.063 1-3.563 1-1.437 0-2.812-.374-3.5-1v.188c.125.813 1.75 1.5 3.563 1.5 1.75 0 3.438-.688 3.5-1.5ZM8.75 5.25c.188.063.313.25.313.375 0 .25-.126.375-.376.5-.187.063-.374.125-.562.125v.25h-.188v-.25c-.25 0-.5-.063-.625-.125-.25-.125-.375-.25-.375-.5H7.5c0 .125.063.188.063.25A.477.477 0 0 0 7.875 6v-.625l-.125-.063c-.25 0-.438-.062-.563-.187A.344.344 0 0 1 7 4.812c0-.062 0-.187.063-.25l.187-.187c.125-.063.188-.063.313-.125h.375v-.188h.187v.188c.188 0 .375.063.5.125.25.125.375.25.375.438h-.563c0-.063-.062-.125-.062-.188-.063-.063-.125-.063-.25-.063v.5c.313.063.563.125.625.188Zm-.625.688c.125 0 .188 0 .25-.063.063-.063.125-.125.125-.188 0-.062-.063-.125-.125-.187-.063 0-.125-.063-.25-.063v.5Zm-.188-1.375c-.125 0-.187 0-.25.062-.125 0-.125.063-.125.125 0 .063.063.125.125.188.063 0 .125.062.25.062v-.438Z"
                            fill="currentColor"></path>
                    </g>
                    <defs>
                        <linearGradient id="icon-2-home1_a" x1="8" y1="0" x2="8"
                            y2="16" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#fff"></stop>
                            <stop offset="1" stop-color="#fff" stop-opacity=".8"></stop>
                        </linearGradient>
                        <clipPath id="icon-2-home1_b">
                            <path fill="#fff" transform="translate(3 3)" d="M0 0h10v10H0z"></path>
                        </clipPath>
                    </defs>
                </symbol>
                <symbol fill="none" viewBox="0 0 16 16" id="icon-2-home2">
                    <circle cx="8" cy="8" r="8" fill="url(#icon-2-home2_a)"></circle>
                    <g clip-path="url(#icon-2-home2_b)" fill="currentColor">
                        <path
                            d="M7.995 12.2a4.2 4.2 0 0 1-2.74-7.383l.394.483A3.569 3.569 0 0 0 4.419 8a3.577 3.577 0 1 0 3.8-3.57v1.065a.292.292 0 0 1-.584 0V4.092a.292.292 0 0 1 .35-.287v-.006h.01a4.2 4.2 0 0 1 0 8.402Zm.344-3.627a.39.39 0 0 1-.55 0c-.153-.152-1.304-1.55-1.152-1.702.152-.152 1.55.999 1.702 1.151a.39.39 0 0 1 0 .551Z">
                        </path>
                        <path
                            d="M8.213 8.658a.39.39 0 0 0 .126-.636c-.152-.152-1.55-1.303-1.702-1.151-.152.152.999 1.55 1.151 1.702a.39.39 0 0 0 .425.085Z">
                        </path>
                    </g>
                    <defs>
                        <linearGradient id="icon-2-home2_a" x1="8" y1="0" x2="8"
                            y2="16" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#fff"></stop>
                            <stop offset="1" stop-color="#fff" stop-opacity=".8"></stop>
                        </linearGradient>
                        <clipPath id="icon-2-home2_b">
                            <path fill="#fff" transform="translate(3 3)" d="M0 0h10v10H0z"></path>
                        </clipPath>
                    </defs>
                </symbol>
                <symbol fill="none" viewBox="0 0 66 66" id="icon-2-intro">
                    <g filter="url(#icon-2-intro_a)">
                        <rect x="33" width="45.385" height="45.385" rx="16" transform="rotate(45 33 0)"
                            fill="url(#icon-2-intro_b)"></rect>
                        <rect x="33" y=".707" width="44.385" height="44.385" rx="15.5"
                            transform="rotate(45 33 .707)" stroke="url(#icon-2-intro_c)"></rect>
                    </g>
                    <path
                        d="M42.913 39.435h-.682v-9.82c0-.595-.487-1.077-1.088-1.077h-4.87v-6.461c0-.595-.487-1.077-1.087-1.077H24.42c-.6 0-1.087.482-1.087 1.077v17.358h-.247c-.6 0-1.087.482-1.087 1.077v1.411c0 .595.487 1.077 1.087 1.077h19.826c.6 0 1.087-.482 1.087-1.077v-1.411c0-.595-.487-1.077-1.087-1.077Zm-9.757-3.933c0 .594-.487 1.076-1.087 1.076h-4.53c-.601 0-1.088-.482-1.088-1.076v-.323c0-.595.487-1.077 1.087-1.077h4.53c.601 0 1.088.482 1.088 1.077v.323Zm0-4.703c0 .595-.487 1.077-1.087 1.077h-4.53c-.601 0-1.088-.482-1.088-1.077v-.323c0-.594.487-1.076 1.087-1.076h4.53c.601 0 1.088.482 1.088 1.076v.323Zm0-5.06c0 .594-.487 1.076-1.087 1.076h-4.53c-.601 0-1.088-.482-1.088-1.077v-.323c0-.595.487-1.077 1.087-1.077h4.53c.601 0 1.088.482 1.088 1.077v.323Zm6.936 11.683h-2.9a.902.902 0 0 1-.906-.897c0-.496.406-.898.907-.898h2.9c.5 0 .905.402.905.898a.902.902 0 0 1-.906.897Zm0-3.625h-2.9a.902.902 0 0 1-.906-.898c0-.495.406-.897.907-.897h2.9c.5 0 .905.402.905.897a.902.902 0 0 1-.906.898Z"
                        fill="url(#icon-2-intro_d)"></path>
                    <defs>
                        <linearGradient id="icon-2-intro_b" x1="43.438" y1="4.085" x2="68.854"
                            y2="39.485" gradientUnits="userSpaceOnUse">
                            <stop stop-color="var(--btn-bg)"></stop>
                            <stop offset="1" stop-color="var(--btn-bg2)"></stop>
                        </linearGradient>
                        <linearGradient id="icon-2-intro_c" x1="42.077" y1="1.362" x2="52.969"
                            y2="24.054" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#fff"></stop>
                            <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                        </linearGradient>
                        <linearGradient id="icon-2-intro_d" x1="25.882" y1="21" x2="30.828"
                            y2="43.742" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#fff"></stop>
                            <stop offset=".495" stop-color="#fff" stop-opacity=".7"></stop>
                            <stop offset="1" stop-color="#fff"></stop>
                        </linearGradient>
                        <filter id="icon-2-intro_a" x="3.536" y="6.627" width="58.929" height="58.929"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                result="hardAlpha"></feColorMatrix>
                            <feOffset dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="out"></feComposite>
                            <feColorMatrix values="0 0 0 0 0.145098 0 0 0 0 0.286275 0 0 0 0 1 0 0 0 0.2 0">
                            </feColorMatrix>
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_358_6"></feBlend>
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_358_6" result="shape"></feBlend>
                        </filter>
                    </defs>
                </symbol>
                <symbol fill="none" viewBox="0 0 81 80" id="icon-2-lock">
                    <path
                        d="M45.91 36.125V32.42c0-2.873-2.42-5.2-5.41-5.2-2.989 0-5.41 2.331-5.41 5.204v3.705h10.82v-.004Zm-15 .042-.004-.117v-4.07c0-2.256.933-4.42 2.593-6.017 1.661-1.597 3.91-2.493 6.26-2.493h1.485c4.89 0 8.85 3.81 8.85 8.506v4.19c2.28.306 3.976 2.18 3.976 4.395v9.725c0 2.451-2.064 4.436-4.615 4.436h-17.91c-2.55 0-4.615-1.985-4.615-4.436v-9.722c0-2.214 1.696-4.089 3.98-4.397Zm8.524 10.015v2.9c0 .564.478 1.023 1.066 1.023.588 0 1.066-.459 1.066-1.024v-2.899c1.312-.493 2.076-1.815 1.813-3.144-.262-1.333-1.469-2.297-2.879-2.297s-2.62.964-2.88 2.297c-.262 1.33.502 2.65 1.815 3.144Z"
                        fill="#fff"></path>
                    <path
                        d="m58.86 57.847 21.552 21.095M.588.813l24.745 24.22M57.263 23.47 80.413.813M.588 78.942 22.14 57.847"
                        stroke="currentColor" stroke-opacity=".3"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 48 46" id="icon-3-deposit">
                    <g filter="url(#icon-3-deposit_a)">
                        <path
                            d="M23.018 14.726a3.506 3.506 0 0 0-1.809 1.262 3.493 3.493 0 0 0-.694 2.09c0 1.902 1.24 3.15 3.326 3.48l.044.007c1.173.159 1.637.63 1.637 1.508a1.496 1.496 0 0 1-1.502 1.498 1.504 1.504 0 0 1-1.503-1.498.998.998 0 0 0-1.001-.999 1.003 1.003 0 0 0-1.001 1 3.493 3.493 0 0 0 2.503 3.35v.58a.998.998 0 0 0 1.002 1 1.003 1.003 0 0 0 1-1v-.58a3.507 3.507 0 0 0 1.81-1.262 3.492 3.492 0 0 0 .694-2.09c0-1.923-1.24-3.191-3.347-3.483l-.003-.001c-1.184-.184-1.657-.656-1.657-1.51a1.496 1.496 0 0 1 1.503-1.499 1.504 1.504 0 0 1 1.502 1.499.997.997 0 0 0 1.001.999 1.002 1.002 0 0 0 1.001-1c0-.752-.243-1.485-.694-2.089a3.507 3.507 0 0 0-1.81-1.261v-.708a.998.998 0 0 0-1-.999 1.003 1.003 0 0 0-1.002 1v.707ZM16.806 9.85l.49.063c2.293.294 4.535.44 6.724.44 2.29 0 4.54-.16 6.75-.483l.472-.069c.108.245.255.502.443.78.273.399.62.824 1.126 1.395.125.14 1.136 1.252 1.447 1.606C36.769 16.444 38 18.907 38 22.3c0 6.47-4.663 9.7-13.913 9.7C14.757 32 10 28.79 10 22.301c0-3.406 1.245-5.873 3.782-8.73.315-.354 1.336-1.463 1.447-1.586.51-.565.858-.984 1.133-1.38.17-.239.318-.493.445-.757Z"
                            fill="#fff"></path>
                    </g>
                    <path
                        d="M16.984 7.845c-.188-.665-.581-1.32-1.208-2.108-.14-.176-.619-.759-.655-.803a8.891 8.891 0 0 1-.61-.826c-.483-.759-.656-1.474-.378-2.225.053-.143.12-.282.205-.415.933-1.49 2.103-1.418 4.163-.562l.112.046c.841.352 1.185.462 1.454.462.417 0 .751-.132 1.555-.579C22.718.224 23.288 0 24.14 0c.865 0 1.435.229 2.51.838l.093.053c.698.395 1.027.523 1.39.523.223 0 .546-.116 1.445-.519.166-.074.278-.124.394-.174 1.935-.83 3.283-.82 4.137.815.475.911.335 1.761-.278 2.544-.26.333-1.38 1.409-1.382 1.41-.693.72-1.118 1.416-1.292 2.304l-.723.105a44.071 44.071 0 0 1-6.361.457c-2.071 0-4.198-.14-6.382-.42l-.707-.09Z"
                        fill="#fff" fill-opacity=".7"></path>
                    <defs>
                        <filter id="icon-3-deposit_a" x="0" y="3.8" width="48" height="42.2"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                result="hardAlpha"></feColorMatrix>
                            <feOffset dy="4"></feOffset>
                            <feGaussianBlur stdDeviation="5"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="out"></feComposite>
                            <feColorMatrix values="0 0 0 0 0.14902 0 0 0 0 0.298039 0 0 0 0 1 0 0 0 0.45 0">
                            </feColorMatrix>
                            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_146_462"></feBlend>
                            <feBlend in="SourceGraphic" in2="effect1_dropShadow_146_462" result="shape"></feBlend>
                        </filter>
                    </defs>
                </symbol>
                <symbol fill="none" viewBox="0 0 30 30" id="icon-3-download">
                    <g fill="#fff">
                        <path
                            d="m8.4 12.42 4.84 5.3.562.614a1 1 0 0 0 1.476 0l.562-.614 4.84-5.3.898-.987c.584-.642.129-1.673-.74-1.673H18.54a1 1 0 0 1-1-1V1a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v7.76a1 1 0 0 1-1 1H8.242c-.869 0-1.324 1.03-.74 1.673l.898.987Z"
                            fill-opacity=".71"></path>
                        <path
                            d="M18.018 18a1 1 0 0 0-.735.323l-2.008 2.179a1 1 0 0 1-1.47 0l-2.008-2.18a1 1 0 0 0-.735-.322H1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h28a1 1 0 0 0 1-1V19a1 1 0 0 0-1-1H18.018ZM22 26.7a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2Zm6 0a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2Z">
                        </path>
                    </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 32 32" id="icon-3-exit">
                    <path opacity=".01" d="M0 0h32v32H0V0Z" fill="#20C7F1"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13.524 4.639c-.335.41-.524.964-.524 1.543v19.636c0 .579.188 1.134.524 1.543.336.41.79.639 1.266.639h12.526c.712 0 1.394-.345 1.898-.959.503-.613.786-1.446.786-2.314V7.273c0-.868-.283-1.7-.786-2.314C28.71 4.345 28.028 4 27.316 4H14.79c-.475 0-.93.23-1.266.639Zm7.304 4.588a.523.523 0 0 0-.096.303v3.856h-2.683a.54.54 0 0 0-.38.155c-.1.099-.157.233-.157.373v3.172c0 .14.057.274.157.373.1.1.237.155.38.155h2.683v3.856a.523.523 0 0 0 .35.497.545.545 0 0 0 .594-.152l5.195-5.972a.524.524 0 0 0 0-.687l-5.195-5.971a.538.538 0 0 0-.594-.152.536.536 0 0 0-.255.194Z"
                        fill="#fff" fill-opacity=".7"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.523 4.182A1.9 1.9 0 0 0 2 5.467v20.064c0 .466.183.918.522 1.287.34.37.815.636 1.354.759l10.517 2.386c.188.043.386.049.578.017a1.41 1.41 0 0 0 .528-.197 1.13 1.13 0 0 0 .369-.372.917.917 0 0 0 .132-.47V2.062a.916.916 0 0 0-.131-.47 1.128 1.128 0 0 0-.368-.373 1.408 1.408 0 0 0-.53-.198 1.523 1.523 0 0 0-.579.017L3.877 3.424a2.618 2.618 0 0 0-1.353.758ZM10.5 12A1.5 1.5 0 0 0 9 13.5v3a1.5 1.5 0 0 0 3 0v-3a1.5 1.5 0 0 0-1.5-1.5Z"
                        fill="#fff"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 30 32" id="icon-3-introduce">
                    <g fill-rule="evenodd" clip-rule="evenodd" fill="#fff">
                        <path
                            d="M19 32V9.643c0-1.578 1.742-2.534 3.074-1.687l7 4.455A2 2 0 0 1 30 14.098V30a2 2 0 0 1-2 2h-9Zm3-12a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2h-5Z"
                            fill-opacity=".7"></path>
                        <path
                            d="M18 4.522V32H4a4 4 0 0 1-4-4V9.607a4 4 0 0 1 2.187-3.565l10-5.086C14.847-.397 18 1.536 18 4.522ZM6 23a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm1-8a1 1 0 1 0 0 2h5a1 1 0 1 0 0-2H7Z">
                        </path>
                    </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 28 18" id="icon-3-radio">
                    <g fill="currentColor">
                        <path
                            d="M13.1 14.792a.23.23 0 0 1-.081.153.198.198 0 0 1-.149.055h-1.686c-.117 0-.194-.046-.23-.139l-2.713-5.75a49.605 49.605 0 0 1-.93-2.106 108.25 108.25 0 0 1-.352 2.868l-.674 4.92a.23.23 0 0 1-.081.152.198.198 0 0 1-.149.055H4.287a.198.198 0 0 1-.148-.055c-.027-.037-.036-.088-.027-.153L5.704 3.208a.264.264 0 0 1 .068-.153A.247.247 0 0 1 5.934 3h1.781c.108 0 .18.046.216.139l2.767 5.736c.315.665.589 1.289.823 1.871.099-.933.211-1.838.337-2.716l.662-4.822a.264.264 0 0 1 .067-.153A.247.247 0 0 1 12.75 3h1.768c.063 0 .108.018.135.055.036.037.05.088.04.153L13.1 14.792ZM18.072 6.94c-.354-.25-.42-.713-.148-1.038.275-.327.79-.39 1.152-.141l-.498.592.498-.592h.001l.002.002.003.002.008.006.022.016.061.047c.048.039.111.092.184.161.144.137.329.337.51.603.366.538.714 1.334.72 2.407.005 1.072-.334 1.872-.696 2.412-.179.268-.361.469-.504.607a2.866 2.866 0 0 1-.243.21l-.021.016-.008.006-.004.003h-.001s-.002.002-.505-.587l.503.589c-.358.252-.875.193-1.152-.132-.276-.322-.214-.785.136-1.039l.008-.005-.002.001-.002.002-.004.002.013-.01a2.212 2.212 0 0 0 .38-.435c.222-.331.462-.864.458-1.633-.004-.77-.25-1.3-.474-1.63a2.227 2.227 0 0 0-.397-.442Zm2.914-1.617-.005-.004.003.003.033.027c.032.028.085.075.152.142.133.135.32.349.51.647.378.59.78 1.526.786 2.858.007 1.333-.385 2.271-.757 2.866-.188.299-.372.514-.504.65a2.499 2.499 0 0 1-.183.171l-.003.002.005-.003-.002.001-.002.002a.698.698 0 0 0-.104 1.045.881.881 0 0 0 1.156.1l-.523-.575.523.574h.002l.002-.002.003-.003.01-.007.025-.02.08-.067a4.03 4.03 0 0 0 .246-.235c.196-.202.449-.5.698-.898.501-.8.98-1.992.971-3.608-.008-1.615-.498-2.803-1.007-3.599a5.444 5.444 0 0 0-.708-.892 4.102 4.102 0 0 0-.328-.299l-.027-.02-.009-.007-.004-.003-.001-.001s-.002-.001-.52.577l.518-.578a.88.88 0 0 0-1.155.108.698.698 0 0 0 .114 1.044h.002l.001.003h.001v.001Z">
                        </path>
                        <path
                            d="M18.072 6.94c-.354-.25-.42-.713-.148-1.038.275-.327.79-.39 1.152-.141h.001l.002.002.003.002.008.006.022.016.061.047c.048.039.111.092.184.161.144.137.329.337.51.603.366.538.714 1.334.72 2.407.005 1.072-.334 1.872-.696 2.412-.179.268-.361.469-.504.607a2.866 2.866 0 0 1-.243.21l-.021.016-.008.006-.004.003h-.001s-.002.002-.504-.585l.502.587c-.358.252-.875.193-1.152-.132-.276-.322-.214-.785.136-1.039l.013-.01a2.212 2.212 0 0 0 .38-.435c.222-.331.462-.864.458-1.633-.004-.77-.25-1.3-.474-1.63a2.227 2.227 0 0 0-.397-.442ZM20.985 5.322l.032.027c.032.028.085.075.152.142.133.135.32.349.51.647.378.59.78 1.526.786 2.858.007 1.333-.385 2.271-.757 2.866-.188.299-.372.514-.504.65a2.499 2.499 0 0 1-.183.171l-.002.002.002-.002.033-.027c.032-.028.084-.076.15-.144.132-.136.316-.351.504-.65.372-.595.764-1.533.757-2.866-.007-1.332-.408-2.267-.786-2.858a3.965 3.965 0 0 0-.51-.647 2.418 2.418 0 0 0-.152-.142l-.032-.027-.004-.003h.002l.001.003h.001Z">
                        </path>
                    </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 44 44" id="icon-4-deposit">
                    <g fill-rule="evenodd" clip-rule="evenodd" fill="#fff">
                        <path
                            d="M29.489 5.363h-19.31c-4.319 0-6.479 2.16-6.479 6.48v20.312c0 4.32 2.16 6.479 6.48 6.479h19.309c4.32 0 6.479-2.16 6.479-6.48V30H23.496a7.499 7.499 0 0 1-5.3-2.194A7.489 7.489 0 0 1 16 22.509v-1.016a7.486 7.486 0 0 1 4.627-6.923 7.5 7.5 0 0 1 2.87-.57h12.47v-2.158c0-4.32-2.159-6.479-6.478-6.479Z"
                            fill-opacity=".7"></path>
                        <path
                            d="M36.382 16H24.297c-.827 0-1.646.145-2.41.428a6.395 6.395 0 0 0-2.043 1.218 5.621 5.621 0 0 0-1.365 1.823A5.097 5.097 0 0 0 18 21.62v.762c0 1.49.663 2.919 1.844 3.972C21.025 27.408 22.627 28 24.297 28h12.087c.694 0 1.36-.246 1.85-.684.49-.438.766-1.031.766-1.65v-7.332c0-.306-.068-.61-.2-.893a2.337 2.337 0 0 0-.567-.758 2.657 2.657 0 0 0-.85-.506A2.893 2.893 0 0 0 36.383 16Zm-14.796 7.414a2 2 0 1 1 2.828-2.828 2 2 0 0 1-2.828 2.828Z">
                        </path>
                    </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 44 44" id="icon-4-download">
                    <g clip-path="url(#icon-4-download_a)">
                        <path opacity=".01" d="M0 0h44v44H0V0Z" fill="#202425"></path>
                        <path
                            d="m19.926 41.926-6.94-6.94a.732.732 0 0 1 .518-1.253h16.992a.733.733 0 0 1 .52 1.253l-6.942 6.94a2.933 2.933 0 0 1-4.148 0Z"
                            fill="#fff"></path>
                        <path
                            d="M22 1.467c-5.573 0-10.237 3.885-11.436 9.093a1.804 1.804 0 0 1-1.412 1.352A9.533 9.533 0 0 0 11 30.8h5.133a1.466 1.466 0 0 0 1.467-1.466v-8.8a2.933 2.933 0 0 1 2.933-2.934h2.934a2.933 2.933 0 0 1 2.933 2.933v8.8a1.466 1.466 0 0 0 1.467 1.467H33a9.533 9.533 0 0 0 1.848-18.888 1.806 1.806 0 0 1-1.412-1.352A11.738 11.738 0 0 0 22 1.467Z"
                            fill="#fff" fill-opacity=".7"></path>
                    </g>
                    <defs>
                        <clipPath id="icon-4-download_a">
                            <path fill="#fff" d="M0 0h44v44H0z"></path>
                        </clipPath>
                    </defs>
                </symbol>
                <symbol fill="none" viewBox="0 0 44 44" id="icon-4-exit">
                    <g fill="#fff">
                        <path
                            d="M22 24c2.2 0 4-1.833 4-4.074V6.074C26 3.834 24.2 2 22 2s-4 1.833-4 4.074v13.852C18 22.187 19.8 24 22 24Z">
                        </path>
                        <path
                            d="M30.72 4.118c-.8-.379-1.72.2-1.72 1.077v15.112c0 3.848-3.14 6.978-7 6.978s-7-3.13-7-6.978V5.195c0-.877-.92-1.456-1.72-1.077C6.56 7.368 1.96 14.246 2 22.181c.06 10.805 8.88 19.657 19.72 19.817C32.9 42.158 42 33.166 42 22.06c0-7.895-4.6-14.713-11.28-17.943ZM22 37.532c-1.32 0-2.4-1.076-2.4-2.392a2.403 2.403 0 0 1 2.4-2.393c1.32 0 2.4 1.077 2.4 2.393a2.403 2.403 0 0 1-2.4 2.392Z"
                            fill-opacity=".7"></path>
                    </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 44 44" id="icon-4-introduce">
                    <g fill="#fff">
                        <path
                            d="M36.617 11.39h-4.77V7.85a2.855 2.855 0 0 0-2.851-2.851H15.301a2.855 2.855 0 0 0-2.851 2.85v3.54H7.68a3.445 3.445 0 0 0-3.445 3.446v4.133h35.827v-4.133a3.445 3.445 0 0 0-3.445-3.446ZM15.598 8.146h13.101v3.245H15.598V8.147Z">
                        </path>
                        <path
                            d="M26.11 25.456h-7.923v-3.73H4.235v12.76A3.445 3.445 0 0 0 7.68 37.93H36.62a3.445 3.445 0 0 0 3.445-3.445v-12.76H26.112v3.731h-.002Z"
                            fill-opacity=".71"></path>
                    </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-4-radio">
                    <g clip-path="url(#icon-4-radio_a)">
                        <path
                            d="m18.027 10.143-3.109-2.05a.271.271 0 0 1-.082-.087l-1.847-3.191a4.521 4.521 0 0 0-5.056-2.11 2.167 2.167 0 0 0-3.756 2.16 4.524 4.524 0 0 0-.721 5.466l1.847 3.191c.02.035.032.073.034.115l.22 3.712a1.463 1.463 0 0 0 2.194 1.178l10.203-5.9a1.459 1.459 0 0 0 .073-2.484Zm-6.553 6.955a.259.259 0 0 0 .037.466c.75.292 1.622.253 2.373-.18a2.747 2.747 0 0 0 1.345-1.97.257.257 0 0 0-.383-.262l-3.372 1.946Z"
                            fill="url(#icon-4-radio_b)"></path>
                    </g>
                    <defs>
                        <linearGradient id="icon-4-radio_b" x1="4.963" y1="1.917" x2="12.5"
                            y2="17.5" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#1B5BFF"></stop>
                            <stop offset=".709" stop-color="#1B5BFF" stop-opacity=".97"></stop>
                            <stop offset="1" stop-color="#1B5BFF" stop-opacity=".29"></stop>
                        </linearGradient>
                        <clipPath id="icon-4-radio_a">
                            <path fill="#fff" d="M0 0h20v20H0z"></path>
                        </clipPath>
                    </defs>
                </symbol>
                <symbol fill="none" viewBox="0 0 9 8" id="icon-5-arrow-disable">
                    <g stroke="currentColor" stroke-opacity=".5" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m1 7 3-3-3-3M5 7l3-3-3-3"></path>
                    </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 9 8" id="icon-5-arrow">
                    <g stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m1 7 3-3-3-3M5 7l3-3-3-3"></path>
                    </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 22 30" id="icon-5-deposit">
                    <path
                        d="M7.045 7.131h7.729s.584-1.749 4.224-4.509c-.697-.368-1.7.201-2.112-.138-.442-.363-.36-1.656-1.438-1.794-1.079-.138-2.202 1.38-2.202 1.38s-.988.92-1.438-.506C11.359.138 9.697 0 9.158 0c-.54 0-1.876.414-2.112 2.174-.101.552-.674.76-1.146.483-.472-.275-1.112-.483-2.09-.38 1.147 1.289 4.045 4.118 3.236 4.854Zm13.472 16.725s.045-6.488 0-6.948c-.157-3.312-5.406-7.73-5.406-7.73h-7.93c-2.854 1.657-5.182 5.315-5.563 7.8-.034.129-.27 5.475-.36 7.292C1.168 26.087 0 27.79 0 27.79s1.699 2.139 11.292 2.208c9.593.07 9.742-1.702 10.708-2.277-1.303.045-1.483-3.865-1.483-3.865Zm-5.574-1.182c-.13.856-.595 2.727-3.112 2.913v1.639h-1.778V25.6c-1.063-.153-2.042-.434-3.049-.78l.533-2.14c.798.32 1.85.661 2.775.771 1.257.15 2.102-.115 2.181-1.047.18-1.633-5.415-1.92-5.362-4.867-.076-2.165 1.457-3.108 2.985-3.238v-1.704h1.779v1.626c1.01.012 1.809.236 2.587.584l-.493 2.016c-.782-.301-1.582-.585-2.54-.585-.62 0-1.921.003-1.966.877 0 1.506 2.463 1.584 3.28 1.94.596.26 1.01.513 1.435.937.741.741.895 1.696.745 2.684Z"
                        fill="currentColor"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 34 25" id="icon-5-download">
                    <path
                        d="M26.824 9.308c.01-.168.014-.337.014-.508 0-4.86-3.884-8.8-8.677-8.8-4.792 0-8.676 3.94-8.676 8.8v.077a7.961 7.961 0 0 0-1.47-.137C3.59 8.74 0 12.38 0 16.87S3.589 25 8.016 25c.111 0 .221-.003.331-.008.096.005.192.008.29.008H26.29c.107 0 .212-.003.317-.01C30.723 24.795 34 21.356 34 17.144c0-4.139-3.163-7.53-7.176-7.835Zm-5.502 6.54-3.432 3.589a.996.996 0 0 1-.632.412.993.993 0 0 1-1.024-.404l-3.532-3.457a1.022 1.022 0 0 1-.024-1.433.994.994 0 0 1 1.418-.024l1.703 1.667v-.007l-.092-5.603a1.228 1.228 0 0 1 1.199-1.255 1.226 1.226 0 0 1 1.24 1.214l.091 5.603v.007l1.644-1.72a.994.994 0 0 1 1.418-.023c.397.389.408 1.03.023 1.433Z"
                        fill="currentColor"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-5-email">
                    <path
                        d="M19.557 5.003H4.55a2.136 2.136 0 0 0-2.133 2.133v9.915c0 1.176.957 2.133 2.133 2.133h15.008a2.136 2.136 0 0 0 2.134-2.133V7.136a2.136 2.136 0 0 0-2.134-2.133Zm.854 12.048c0 .47-.384.853-.854.853H4.55a.856.856 0 0 1-.853-.853V7.136c0-.47.384-.853.853-.853h15.008c.47 0 .854.384.854.853v9.915Z"
                        fill="currentColor"></path>
                    <path
                        d="m18.44 8.392-6.387 4.029-6.386-4.03a.64.64 0 1 0-.683 1.083l6.72 4.24a.64.64 0 0 0 .341.099h.022a.64.64 0 0 0 .34-.099l6.72-4.24a.64.64 0 0 0 .2-.882.645.645 0 0 0-.887-.2Z"
                        fill="currentColor"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 28 24" id="icon-5-exit">
                    <g fill="currentColor">
                        <path
                            d="m27.386 10.619-9.084-9.443c-.566-.585-1.241-.76-1.94-.489-.715.28-1.125.945-1.126 1.829v4.265h-1.778l-5.103.002c-1.071.004-1.819.776-1.822 1.882-.004 2.227-.004 4.452 0 6.677.003 1.071.76 1.855 1.799 1.866l6.904.001-.002.826c-.004 1.158-.007 2.312.016 3.469.007.452.178.945.444 1.283.326.416.772.646 1.257.646.48 0 .962-.228 1.36-.639 3.03-3.145 6.058-6.292 9.085-9.44.809-.839.805-1.888-.01-2.735Z">
                        </path>
                        <path
                            d="M10.598 20.342h-.002l-1.984.004-2.84-.002c-1.435 0-2.26-.856-2.26-2.349V5.99c0-1.489.825-2.343 2.263-2.343l1.881-.002 2.067.002 1.15-.002c.822 0 1.272-.429 1.337-1.272a9.27 9.27 0 0 0 .007-.991c-.021-.89-.5-1.38-1.346-1.382H8.783C7.665 0 6.547 0 5.43.007a4.954 4.954 0 0 0-1.046.12C1.862.685.02 3.034.007 5.712a714.57 714.57 0 0 0-.003 4.33l.001 1.922-.003 2.017C0 15.43-.003 16.877.009 18.328c.024 3.061 2.427 5.598 5.357 5.654.72.014 1.443.018 2.164.018l3.429-.007c.677 0 1.151-.427 1.235-1.115.03-.25.033-.507.035-.763v-.128c.004-.378.007-.896-.343-1.263-.338-.351-.824-.382-1.288-.382Z">
                        </path>
                    </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 44 44" id="icon-5-icon-help">
                    <path d="M16.163 17.657a6.277 6.277 0 1 0 12.554 0 6.277 6.277 0 0 0-12.554 0Z"
                        fill="currentColor"></path>
                    <path
                        d="M13.889 21.857a.516.516 0 0 0 .517-.517v-3.749c.037-4.41 3.634-7.986 8.052-7.986 4.166 0 7.603 3.181 8.012 7.24v4.495c0 .286.231.517.517.517h.334a.538.538 0 0 0 .146-.02 2.742 2.742 0 0 0 .976-4.745c-.292-5.256-4.661-9.443-9.988-9.443-5.317 0-9.677 4.17-9.985 9.41a2.736 2.736 0 0 0-1.037 2.145c0 1.247.834 2.297 1.972 2.631.046.013.096.02.145.02h.339v.002ZM33.66 32.156a11.174 11.174 0 0 0-6.07-8.288 8.178 8.178 0 0 1-5.15 1.817 8.182 8.182 0 0 1-5.15-1.817 11.174 11.174 0 0 0-6.07 8.288 1.48 1.48 0 0 0 1.46 1.711h19.521a1.48 1.48 0 0 0 1.459-1.711Zm-7.341-.713h-7.76a.977.977 0 0 1 0-1.954h7.757a.977.977 0 0 1 .003 1.954Z"
                        fill="currentColor"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 25 25" id="icon-5-intro">
                    <path
                        d="M0 2.5V25h16.25V2.5L12.5 0 0 2.5Zm9.375 19.75h-7.5V20l7.5-.125v2.375Zm0-5-7.5.125v-2.25l7.5-.5v2.625Zm0-5.375-7.5.5v-2.25l7.5-.875v2.625Zm0-5.5-7.5 1V5l7.5-1.5v2.875ZM22.5 22.5v-20L18.75 0h-1.875l1.875 1.25V25H25v-2.5h-2.5Z"
                        fill="currentColor"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-5-password">
                    <path
                        d="M19.232 8.72H5.368a1.6 1.6 0 0 0-1.6 1.6v9.252a1.6 1.6 0 0 0 1.6 1.6h13.864a1.6 1.6 0 0 0 1.6-1.6V10.32c0-.88-.716-1.6-1.6-1.6Zm0 10.852H5.368V10.32h13.864v9.252ZM9.34 6.724a2.767 2.767 0 0 1 2.764-2.764h.396a2.767 2.767 0 0 1 2.764 2.764v.4h1.6v-.4A4.367 4.367 0 0 0 12.5 2.36h-.396A4.367 4.367 0 0 0 7.74 6.724v1.88h1.6v-1.88Z"
                        fill="currentColor"></path>
                    <path
                        d="M12.304 12.664a1.395 1.395 0 0 0-.508 2.692v1.424c0 .228.184.412.412.412h.192a.411.411 0 0 0 .412-.412v-1.42a1.395 1.395 0 0 0-.508-2.696Z"
                        fill="currentColor"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 14 16" id="icon-5-radio">
                    <path
                        d="M13.3 14H.7a.706.706 0 0 1-.625-.367.639.639 0 0 1 .063-.696l1.566-2.018V7c0-2.758 2.377-5 5.296-5 2.92 0 5.296 2.242 5.296 5v3.92l1.566 2.017a.639.639 0 0 1 .063.696.706.706 0 0 1-.626.367ZM2.087 12.667h9.822l-.878-1.13a.648.648 0 0 1-.137-.397V7c0-2.021-1.749-3.667-3.897-3.667C4.85 3.333 3.103 4.979 3.103 7v4.139c0 .142-.048.28-.137.396l-.878 1.132ZM8.75 16h-3.5c-.386 0-.701-.298-.701-.667 0-.37.313-.668.7-.668h3.5c.385 0 .7.299.7.668 0 .369-.313.667-.699.667ZM7.35 1.333h-.701c-.386 0-.7-.298-.7-.668 0-.369.314-.665.702-.665h.7c.386 0 .7.298.7.667 0 .37-.314.666-.702.666Z"
                        fill="#fff"></path>
                </symbol>
            </svg>




            <div data-v-app=""></div><!---->
            <div role="dialog" tabindex="0"
                class="van-popup van-popup--center van-toast van-toast--middle van-toast--loading"
                style="z-index: 2004; display: none;">
                <div class="van-loading van-loading--circular van-toast__loading" aria-live="polite"
                    aria-busy="true"><span class="van-loading__spinner van-loading__spinner--circular"><svg
                            class="van-loading__circular" viewBox="25 25 50 50">
                            <circle cx="50" cy="50" r="20" fill="none"></circle>
                        </svg></span><!----></div><!----><!---->
            </div><!----><!----><!----><!---->
</body>

</html>
