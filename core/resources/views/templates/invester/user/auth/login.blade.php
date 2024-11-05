<html lang="zh-CN" style="--status-bar-height: 0px; --top-window-height: 0px; --window-left: 0px; --window-right: 0px; --window-margin: 0px; --window-top: calc(var(--top-window-height) + 0px); --window-bottom: 0px;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/static/favicon.ico">
    <title>Login</title>
    <script>
        var coverSupport = 'CSS' in window && typeof CSS.supports === 'function' && (CSS.supports('top: env(a)') || CSS.supports('top: constant(a)'))
        document.write('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0' + (coverSupport ? ', viewport-fit=cover' : '') + '" />')
    </script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover">
    <link rel="stylesheet" href="{{asset ('css/login/login.css')}}">
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a {
            color: #fff;
            text-decoration: none
        }

        a.active {
            color: #5462de
        }

        a.link {
            color: #5462de
        }

        /*每个页面公共css */

        .u-line-1 {
            display: -webkit-box !important;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-all;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical !important
        }

        .u-line-2 {
            display: -webkit-box !important;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-all;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical !important
        }

        .u-line-3 {
            display: -webkit-box !important;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-all;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical !important
        }

        .u-line-4 {
            display: -webkit-box !important;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-all;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical !important
        }

        .u-line-5 {
            display: -webkit-box !important;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-all;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical !important
        }

        .u-line-6 {
            display: -webkit-box !important;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-all;
            -webkit-line-clamp: 6;
            -webkit-box-orient: vertical !important
        }

        .u-line-7 {
            display: -webkit-box !important;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-all;
            -webkit-line-clamp: 7;
            -webkit-box-orient: vertical !important
        }

        .u-line-8 {
            display: -webkit-box !important;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-all;
            -webkit-line-clamp: 8;
            -webkit-box-orient: vertical !important
        }

        .u-line-9 {
            display: -webkit-box !important;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-all;
            -webkit-line-clamp: 9;
            -webkit-box-orient: vertical !important
        }

        .u-line-10 {
            display: -webkit-box !important;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-all;
            -webkit-line-clamp: 10;
            -webkit-box-orient: vertical !important
        }

        .u-border {
            border-width: .5px !important;
            border-color: #dadbde !important;
            border-style: solid
        }

        .u-border-top {
            border-top-width: .5px !important;
            border-color: #dadbde !important;
            border-top-style: solid
        }

        .u-border-left {
            border-left-width: .5px !important;
            border-color: #dadbde !important;
            border-left-style: solid
        }

        .u-border-right {
            border-right-width: .5px !important;
            border-color: #dadbde !important;
            border-right-style: solid
        }

        .u-border-bottom {
            border-bottom-width: .5px !important;
            border-color: #dadbde !important;
            border-bottom-style: solid
        }

        .u-border-top-bottom {
            border-top-width: .5px !important;
            border-bottom-width: .5px !important;
            border-color: #dadbde !important;
            border-top-style: solid;
            border-bottom-style: solid
        }

        .u-reset-button {
            padding: 0;
            background-color: initial;
            font-size: inherit;
            line-height: inherit;
            color: inherit
        }

        .u-reset-button::after {
            border: none
        }

        .u-hover-class {
            opacity: .7
        }

        .u-primary-light {
            color: #ecf5ff
        }

        .u-warning-light {
            color: #fdf6ec
        }

        .u-success-light {
            color: #f5fff0
        }

        .u-error-light {
            color: #fef0f0
        }

        .u-info-light {
            color: #f4f4f5
        }

        .u-primary-light-bg {
            background-color: #ecf5ff
        }

        .u-warning-light-bg {
            background-color: #fdf6ec
        }

        .u-success-light-bg {
            background-color: #f5fff0
        }

        .u-error-light-bg {
            background-color: #fef0f0
        }

        .u-info-light-bg {
            background-color: #f4f4f5
        }

        .u-primary-dark {
            color: #398ade
        }

        .u-warning-dark {
            color: #f1a532
        }

        .u-success-dark {
            color: #53c21d
        }

        .u-error-dark {
            color: #e45656
        }

        .u-info-dark {
            color: #767a82
        }

        .u-primary-dark-bg {
            background-color: #398ade
        }

        .u-warning-dark-bg {
            background-color: #f1a532
        }

        .u-success-dark-bg {
            background-color: #53c21d
        }

        .u-error-dark-bg {
            background-color: #e45656
        }

        .u-info-dark-bg {
            background-color: #767a82
        }

        .u-primary-disabled {
            color: #9acafc
        }

        .u-warning-disabled {
            color: #f9d39b
        }

        .u-success-disabled {
            color: #a9e08f
        }

        .u-error-disabled {
            color: #f7b2b2
        }

        .u-info-disabled {
            color: #c4c6c9
        }

        .u-primary {
            color: #3c9cff
        }

        .u-warning {
            color: #f9ae3d
        }

        .u-success {
            color: #5ac725
        }

        .u-error {
            color: #f56c6c
        }

        .u-info {
            color: #909399
        }

        .u-primary-bg {
            background-color: #3c9cff
        }

        .u-warning-bg {
            background-color: #f9ae3d
        }

        .u-success-bg {
            background-color: #5ac725
        }

        .u-error-bg {
            background-color: #f56c6c
        }

        .u-info-bg {
            background-color: #909399
        }

        .u-main-color {
            color: #303133
        }

        .u-content-color {
            color: #606266
        }

        .u-tips-color {
            color: #909193
        }

        .u-light-color {
            color: #c0c4cc
        }

        .u-safe-area-inset-top {
            padding-top: 0;
            padding-top: constant(safe-area-inset-top);
            padding-top: env(safe-area-inset-top)
        }

        .u-safe-area-inset-right {
            padding-right: 0;
            padding-right: constant(safe-area-inset-right);
            padding-right: env(safe-area-inset-right)
        }

        .u-safe-area-inset-bottom {
            padding-bottom: 0;
            padding-bottom: constant(safe-area-inset-bottom);
            padding-bottom: env(safe-area-inset-bottom)
        }

        .u-safe-area-inset-left {
            padding-left: 0;
            padding-left: constant(safe-area-inset-left);
            padding-left: env(safe-area-inset-left)
        }

        .u-safe-area-margin-top {
            margin-top: 0;
            margin-top: constant(safe-area-inset-top);
            margin-top: env(safe-area-inset-top)
        }

        .u-safe-area-margin-right {
            margin-right: 0;
            margin-right: constant(safe-area-inset-right);
            margin-right: env(safe-area-inset-right)
        }

        .u-safe-area-margin-bottom {
            margin-bottom: 0;
            margin-bottom: constant(safe-area-inset-bottom);
            margin-bottom: env(safe-area-inset-bottom)
        }

        .u-safe-area-margin-left {
            margin-left: 0;
            margin-left: constant(safe-area-inset-left);
            margin-left: env(safe-area-inset-left)
        }

        uni-toast {
            z-index: 10090
        }

        uni-toast .uni-toast {
            z-index: 10090
        }

        ::-webkit-scrollbar {
            display: none;
            width: 0 !important;
            height: 0 !important;
            -webkit-appearance: none;
            background: transparent
        }

        uni-page-body {
            background: #e5e8f4
        }

        body {
            background: #e5e8f4
        }

        .left-navi {
            display: inline-block;
            padding-left: 5px;
            font-size: 17px;
            font-weight: 700
        }

        .container {
            background: #e5e8f4;
            min-height: 100vh
        }

        .code-v {
            display: flex;
            align-items: center
        }

        .pc-s {
            -webkit-user-select: text;
            -moz-user-select: text;
            -ms-user-select: text;
            user-select: text
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-729c0bcb] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-729c0bcb] {
            color: #5462de
        }

        a.link[data-v-729c0bcb] {
            color: #5462de
        }

        uni-view[data-v-729c0bcb],
        uni-scroll-view[data-v-729c0bcb],
        uni-swiper-item[data-v-729c0bcb] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        @font-face {
            font-family: uicon-iconfont;
            src: url(https://at.alicdn.com/t/font_2225171_8kdcwk4po24.ttf) format("truetype")
        }

        .u-icon[data-v-729c0bcb] {
            display: flex;
            align-items: center
        }

        .u-icon--left[data-v-729c0bcb] {
            flex-direction: row-reverse;
            align-items: center
        }

        .u-icon--right[data-v-729c0bcb] {
            flex-direction: row;
            align-items: center
        }

        .u-icon--top[data-v-729c0bcb] {
            flex-direction: column-reverse;
            justify-content: center
        }

        .u-icon--bottom[data-v-729c0bcb] {
            flex-direction: column;
            justify-content: center
        }

        .u-icon__icon[data-v-729c0bcb] {
            font-family: uicon-iconfont;
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center
        }

        .u-icon__icon--primary[data-v-729c0bcb] {
            color: #3c9cff
        }

        .u-icon__icon--success[data-v-729c0bcb] {
            color: #5ac725
        }

        .u-icon__icon--error[data-v-729c0bcb] {
            color: #f56c6c
        }

        .u-icon__icon--warning[data-v-729c0bcb] {
            color: #f9ae3d
        }

        .u-icon__icon--info[data-v-729c0bcb] {
            color: #909399
        }

        .u-icon__img[data-v-729c0bcb] {
            height: auto;
            will-change: transform
        }

        .u-icon__label[data-v-729c0bcb] {
            line-height: 1
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-061d0d68] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-061d0d68] {
            color: #5462de
        }

        a.link[data-v-061d0d68] {
            color: #5462de
        }

        uni-view[data-v-061d0d68],
        uni-scroll-view[data-v-061d0d68],
        uni-swiper-item[data-v-061d0d68] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-empty[data-v-061d0d68] {
            display: flex;
            flex-direction: row;
            flex-direction: column;
            justify-content: center;
            align-items: center
        }

        .u-empty__text[data-v-061d0d68] {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-top: 10px
        }

        .u-slot-wrap[data-v-061d0d68] {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-top: 10px
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-5c8d6aaa] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-5c8d6aaa] {
            color: #5462de
        }

        a.link[data-v-5c8d6aaa] {
            color: #5462de
        }

        .header-level[data-v-5c8d6aaa] {
            display: inline-block;
            position: relative
        }

        .header-level-bg[data-v-5c8d6aaa] {
            height: 20px;
            width: 61px
        }

        .header-level-bg.normal[data-v-5c8d6aaa] {
            border-radius: 50px;
            background-color: #999
        }

        .header-level-val[data-v-5c8d6aaa] {
            top: 40%;
            left: 62%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            position: absolute;
            width: 100%;
            z-index: 1;
            font-size: 13px;
            line-height: 20px;
            text-align: center;
            color: #fff
        }

        .header-level .normal[data-v-5c8d6aaa] {
            text-align: center;
            top: 50%;
            left: 50%
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-4e6d3b0a] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-4e6d3b0a] {
            color: #5462de
        }

        a.link[data-v-4e6d3b0a] {
            color: #5462de
        }

        .sign-box[data-v-4e6d3b0a] {
            width: 355px;
            margin-left: 10px;
            box-sizing: border-box;
            padding-top: 4px;
            border-radius: 7px;
            height: 80px;
            margin-bottom: 12px;
            background: url({{asset ('css/login/static/img/sign/sign.png')}}) no-repeat;
            background-size: 100% 100%
        }

        .sign-item[data-v-4e6d3b0a] {
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 14px;
            color: #fff;
            padding: 0px 10px
        }

        .sign-item .val[data-v-4e6d3b0a] {
            font-weight: 700
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-6ebb8508] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-6ebb8508] {
            color: #5462de
        }

        a.link[data-v-6ebb8508] {
            color: #5462de
        }

        .nav[data-v-6ebb8508] {
            background: #000;
            height: 65px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-sizing: border-box;
            padding: 7px 30px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            font-size: 13px
        }

        .nav__left[data-v-6ebb8508] {
            display: flex;
            align-items: center
        }

        .nav__logo[data-v-6ebb8508] {
            width: 110px;
            cursor: pointer
        }

        .nav__center[data-v-6ebb8508] {
            margin-left: 260px;
            display: flex;
            align-items: center;
            color: #999
        }

        .nav .item[data-v-6ebb8508] {
            display: flex;
            align-items: center;
            cursor: pointer
        }

        .nav .item+.item[data-v-6ebb8508] {
            margin-left: 40px
        }

        .nav .img[data-v-6ebb8508] {
            width: 20px;
            height: 20px
        }

        .nav .title[data-v-6ebb8508] {
            margin-left: 5px
        }

        .nav .title.hover[data-v-6ebb8508] {
            color: #fff
        }

        .nav__right[data-v-6ebb8508] {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            color: #fff
        }

        .nav__right .setting[data-v-6ebb8508] {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px 10px;
            border: solid 1px #fff;
            border-radius: 50px;
            cursor: pointer
        }

        .nav__right .setting .title[data-v-6ebb8508] {
            margin-right: 6px
        }

        .nav__right .user[data-v-6ebb8508] {
            display: flex;
            align-items: center;
            margin-right: 30px;
            cursor: pointer
        }

        .nav__right .user .img[data-v-6ebb8508] {
            width: 40px;
            height: 40px;
            border-radius: 100px;
            margin-right: 6px
        }

        .nav__right .user__info[data-v-6ebb8508] {
            display: flex;
            flex-direction: column;
            font-size: 14px;
            margin-right: 8px
        }

        .nav__right .user__info-code[data-v-6ebb8508] {
            margin-top: 0px;
            display: flex;
            align-items: center;
            font-size: 10px
        }

        .nav__right .user__info-code uni-image[data-v-6ebb8508] {
            width: 10px;
            height: 10px;
            margin-left: 5px
        }
    </style>
    <style type="text/css">
        .uqrcode[data-v-579d686c] {
            position: relative
        }

        .uqrcode-hide[data-v-579d686c] {
            position: fixed;
            left: 3750px
        }

        .uqrcode-canvas[data-v-579d686c] {
            -webkit-transform-origin: top left;
            transform-origin: top left
        }

        .uqrcode-makeing[data-v-579d686c] {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 10;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .uqrcode-makeing-image[data-v-579d686c] {
            display: block;
            max-width: 120px;
            max-height: 120px
        }

        .uqrcode-error[data-v-579d686c] {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .uqrcode-error-message[data-v-579d686c] {
            font-size: 12px;
            color: #939291
        }

        .uqrcode-h5-save[data-v-579d686c] {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            background-color: rgba(0, 0, 0, .68);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center
        }

        .uqrcode-h5-save-image[data-v-579d686c] {
            width: 256px;
            height: 256px;
            padding: 16px
        }

        .uqrcode-h5-save-text[data-v-579d686c] {
            margin-top: 10px;
            font-size: 16px;
            font-weight: 700;
            color: #fff
        }

        .uqrcode-h5-save-close[data-v-579d686c] {
            position: relative;
            margin-top: 36px;
            width: 20px;
            height: 20px;
            border: 1px solid #fff;
            border-radius: 20px;
            padding: 5px
        }

        .uqrcode-h5-save-close-before[data-v-579d686c] {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%) rotate(45deg);
            transform: translateY(-50%) rotate(45deg);
            width: 20px;
            height: 2px;
            background: #fff
        }

        .uqrcode-h5-save-close-after[data-v-579d686c] {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%) rotate(-45deg);
            transform: translateY(-50%) rotate(-45deg);
            width: 20px;
            height: 2px;
            background: #fff
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-9daf2b94] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-9daf2b94] {
            color: #5462de
        }

        a.link[data-v-9daf2b94] {
            color: #5462de
        }

        .bottom[data-v-9daf2b94] {
            background-color: #000;
            width: 100%;
            color: #fff;
            font-size: 12px
        }

        .bottom .info-t[data-v-9daf2b94] {
            max-width: 1300px;
            width: 1300px;
            margin: 0px auto;
            color: #fff;
            font-size: 13px
        }

        .bottom .info-t__top[data-v-9daf2b94] {
            padding-top: 35px;
            padding-bottom: 50px;
            display: flex;
            justify-content: space-between
        }

        .bottom .info-t .item-t[data-v-9daf2b94] {
            flex: 1;
            cursor: pointer
        }

        .bottom .info-t .item-t__title[data-v-9daf2b94] {
            font-size: 15px;
            font-weight: 700;
            padding-bottom: 5px
        }

        .bottom .info-t .item-t__sub[data-v-9daf2b94] {
            margin-top: 6px;
            color: hsla(0, 0%, 100%, .8);
            width: 100%
        }

        .bottom .info-t .item-t__code[data-v-9daf2b94] {
            margin-top: 6px;
            width: 90px;
            height: 90px;
            border-radius: 5px;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .bottom .info-t .item-t[data-v-9daf2b94]:nth-of-type(1) {
            max-width: 320px;
            margin-top: 25px
        }

        .bottom .info-t .item-t[data-v-9daf2b94]:nth-of-type(2) {
            margin-left: 100px
        }

        .bottom .info-t__bottom[data-v-9daf2b94] {
            width: 100%;
            padding: 8px 0px;
            border-top: solid 1px #333;
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .bottom .info-t__bottom .img[data-v-9daf2b94] {
            width: 120px
        }

        .bottom .info-t__bottom .info-t__bottom-text a[data-v-9daf2b94]:hover {
            color: #00e
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-3130ecf6] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-3130ecf6] {
            color: #5462de
        }

        a.link[data-v-3130ecf6] {
            color: #5462de
        }

        uni-view[data-v-3130ecf6],
        uni-scroll-view[data-v-3130ecf6],
        uni-swiper-item[data-v-3130ecf6] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        /**
 * vue版本动画内置的动画模式有如下：
 * fade：淡入
 * zoom：缩放
 * fade-zoom：缩放淡入
 * fade-up：上滑淡入
 * fade-down：下滑淡入
 * fade-left：左滑淡入
 * fade-right：右滑淡入
 * slide-up：上滑进入
 * slide-down：下滑进入
 * slide-left：左滑进入
 * slide-right：右滑进入
 */

        .u-fade-enter-active[data-v-3130ecf6],
        .u-fade-leave-active[data-v-3130ecf6] {
            transition-property: opacity
        }

        .u-fade-enter[data-v-3130ecf6],
        .u-fade-leave-to[data-v-3130ecf6] {
            opacity: 0
        }

        .u-fade-zoom-enter[data-v-3130ecf6],
        .u-fade-zoom-leave-to[data-v-3130ecf6] {
            -webkit-transform: scale(.95);
            transform: scale(.95);
            opacity: 0
        }

        .u-fade-zoom-enter-active[data-v-3130ecf6],
        .u-fade-zoom-leave-active[data-v-3130ecf6] {
            transition-property: opacity, -webkit-transform;
            transition-property: transform, opacity;
            transition-property: transform, opacity, -webkit-transform
        }

        .u-fade-down-enter-active[data-v-3130ecf6],
        .u-fade-down-leave-active[data-v-3130ecf6],
        .u-fade-left-enter-active[data-v-3130ecf6],
        .u-fade-left-leave-active[data-v-3130ecf6],
        .u-fade-right-enter-active[data-v-3130ecf6],
        .u-fade-right-leave-active[data-v-3130ecf6],
        .u-fade-up-enter-active[data-v-3130ecf6],
        .u-fade-up-leave-active[data-v-3130ecf6] {
            transition-property: opacity, -webkit-transform;
            transition-property: opacity, transform;
            transition-property: opacity, transform, -webkit-transform
        }

        .u-fade-up-enter[data-v-3130ecf6],
        .u-fade-up-leave-to[data-v-3130ecf6] {
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
            opacity: 0
        }

        .u-fade-down-enter[data-v-3130ecf6],
        .u-fade-down-leave-to[data-v-3130ecf6] {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            opacity: 0
        }

        .u-fade-left-enter[data-v-3130ecf6],
        .u-fade-left-leave-to[data-v-3130ecf6] {
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
            opacity: 0
        }

        .u-fade-right-enter[data-v-3130ecf6],
        .u-fade-right-leave-to[data-v-3130ecf6] {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
            opacity: 0
        }

        .u-slide-down-enter-active[data-v-3130ecf6],
        .u-slide-down-leave-active[data-v-3130ecf6],
        .u-slide-left-enter-active[data-v-3130ecf6],
        .u-slide-left-leave-active[data-v-3130ecf6],
        .u-slide-right-enter-active[data-v-3130ecf6],
        .u-slide-right-leave-active[data-v-3130ecf6],
        .u-slide-up-enter-active[data-v-3130ecf6],
        .u-slide-up-leave-active[data-v-3130ecf6] {
            transition-property: -webkit-transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform
        }

        .u-slide-up-enter[data-v-3130ecf6],
        .u-slide-up-leave-to[data-v-3130ecf6] {
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }

        .u-slide-down-enter[data-v-3130ecf6],
        .u-slide-down-leave-to[data-v-3130ecf6] {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0)
        }

        .u-slide-left-enter[data-v-3130ecf6],
        .u-slide-left-leave-to[data-v-3130ecf6] {
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }

        .u-slide-right-enter[data-v-3130ecf6],
        .u-slide-right-leave-to[data-v-3130ecf6] {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }

        .u-zoom-enter-active[data-v-3130ecf6],
        .u-zoom-leave-active[data-v-3130ecf6] {
            transition-property: -webkit-transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform
        }

        .u-zoom-enter[data-v-3130ecf6],
        .u-zoom-leave-to[data-v-3130ecf6] {
            -webkit-transform: scale(.95);
            transform: scale(.95)
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-ed651914] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-ed651914] {
            color: #5462de
        }

        a.link[data-v-ed651914] {
            color: #5462de
        }

        uni-view[data-v-ed651914],
        uni-scroll-view[data-v-ed651914],
        uni-swiper-item[data-v-ed651914] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-overlay[data-v-ed651914] {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .7)
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-ba701168] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-ba701168] {
            color: #5462de
        }

        a.link[data-v-ba701168] {
            color: #5462de
        }

        .u-status-bar[data-v-ba701168] {
            width: 100%
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-e8e7d176] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-e8e7d176] {
            color: #5462de
        }

        a.link[data-v-e8e7d176] {
            color: #5462de
        }

        .u-safe-bottom[data-v-e8e7d176] {
            width: 100%
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-c0ac66b0] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-c0ac66b0] {
            color: #5462de
        }

        a.link[data-v-c0ac66b0] {
            color: #5462de
        }

        uni-view[data-v-c0ac66b0],
        uni-scroll-view[data-v-c0ac66b0],
        uni-swiper-item[data-v-c0ac66b0] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-popup[data-v-c0ac66b0] {
            flex: 1
        }

        .u-popup__content[data-v-c0ac66b0] {
            background-color: #fff;
            position: relative
        }

        .u-popup__content--round-top[data-v-c0ac66b0] {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px
        }

        .u-popup__content--round-left[data-v-c0ac66b0] {
            border-top-left-radius: 0;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 10px
        }

        .u-popup__content--round-right[data-v-c0ac66b0] {
            border-top-left-radius: 10px;
            border-top-right-radius: 0;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 0
        }

        .u-popup__content--round-bottom[data-v-c0ac66b0] {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0
        }

        .u-popup__content--round-center[data-v-c0ac66b0] {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px
        }

        .u-popup__content__close[data-v-c0ac66b0] {
            position: absolute;
            cursor: pointer
        }

        .u-popup__content__close--hover[data-v-c0ac66b0] {
            opacity: .4
        }

        .u-popup__content__close--top-left[data-v-c0ac66b0] {
            top: 15px;
            left: 15px
        }

        .u-popup__content__close--top-right[data-v-c0ac66b0] {
            top: 15px;
            right: 15px
        }

        .u-popup__content__close--bottom-left[data-v-c0ac66b0] {
            bottom: 15px;
            left: 15px
        }

        .u-popup__content__close--bottom-right[data-v-c0ac66b0] {
            right: 15px;
            bottom: 15px
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-26940d0d] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-26940d0d] {
            color: #5462de
        }

        a.link[data-v-26940d0d] {
            color: #5462de
        }

        uni-view[data-v-26940d0d],
        uni-scroll-view[data-v-26940d0d],
        uni-swiper-item[data-v-26940d0d] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-badge[data-v-26940d0d] {
            border-top-right-radius: 100px;
            border-top-left-radius: 100px;
            border-bottom-left-radius: 100px;
            border-bottom-right-radius: 100px;
            display: flex;
            flex-direction: row;
            line-height: 11px;
            text-align: center;
            font-size: 11px;
            color: #fff
        }

        .u-badge--dot[data-v-26940d0d] {
            height: 8px;
            width: 8px
        }

        .u-badge--inverted[data-v-26940d0d] {
            font-size: 13px
        }

        .u-badge--not-dot[data-v-26940d0d] {
            padding: 2px 5px
        }

        .u-badge--horn[data-v-26940d0d] {
            border-bottom-left-radius: 0
        }

        .u-badge--primary[data-v-26940d0d] {
            background-color: #3c9cff
        }

        .u-badge--primary--inverted[data-v-26940d0d] {
            color: #3c9cff
        }

        .u-badge--error[data-v-26940d0d] {
            background-color: #f56c6c
        }

        .u-badge--error--inverted[data-v-26940d0d] {
            color: #f56c6c
        }

        .u-badge--success[data-v-26940d0d] {
            background-color: #5ac725
        }

        .u-badge--success--inverted[data-v-26940d0d] {
            color: #5ac725
        }

        .u-badge--info[data-v-26940d0d] {
            background-color: #909399
        }

        .u-badge--info--inverted[data-v-26940d0d] {
            color: #909399
        }

        .u-badge--warning[data-v-26940d0d] {
            background-color: #f9ae3d
        }

        .u-badge--warning--inverted[data-v-26940d0d] {
            color: #f9ae3d
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-78cf8ead] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-78cf8ead] {
            color: #5462de
        }

        a.link[data-v-78cf8ead] {
            color: #5462de
        }

        uni-view[data-v-78cf8ead],
        uni-scroll-view[data-v-78cf8ead],
        uni-swiper-item[data-v-78cf8ead] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-tabs__wrapper[data-v-78cf8ead] {
            display: flex;
            flex-direction: row;
            align-items: center
        }

        .u-tabs__wrapper__scroll-view-wrapper[data-v-78cf8ead] {
            flex: 1;
            overflow: auto hidden
        }

        .u-tabs__wrapper__scroll-view[data-v-78cf8ead] {
            display: flex;
            flex-direction: row;
            flex: 1;
            max-width: 1920px
        }

        .u-tabs__wrapper__nav[data-v-78cf8ead] {
            display: flex;
            flex-direction: row;
            position: relative
        }

        .u-tabs__wrapper__nav__item[data-v-78cf8ead] {
            cursor: pointer;
            padding: 0 11px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center
        }

        .u-tabs__wrapper__nav__item--disabled[data-v-78cf8ead] {
            cursor: not-allowed
        }

        .u-tabs__wrapper__nav__item__text[data-v-78cf8ead] {
            font-size: 15px;
            color: #606266
        }

        .u-tabs__wrapper__nav__item__text--disabled[data-v-78cf8ead] {
            color: #c8c9cc !important
        }

        .u-tabs__wrapper__nav__line[data-v-78cf8ead] {
            height: 3px;
            background: #3c9cff;
            width: 30px;
            position: absolute;
            bottom: 2px;
            border-radius: 100px;
            transition-property: -webkit-transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform;
            transition-duration: .3s
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-c4b04b80] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-c4b04b80] {
            color: #5462de
        }

        a.link[data-v-c4b04b80] {
            color: #5462de
        }

        uni-view[data-v-c4b04b80],
        uni-scroll-view[data-v-c4b04b80],
        uni-swiper-item[data-v-c4b04b80] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-navbar--fixed[data-v-c4b04b80] {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            z-index: 100
        }

        .u-navbar__content[data-v-c4b04b80] {
            display: flex;
            flex-direction: row;
            align-items: center;
            height: 44px;
            background-color: #9acafc;
            position: relative;
            justify-content: center
        }

        .u-navbar__content__left[data-v-c4b04b80],
        .u-navbar__content__right[data-v-c4b04b80] {
            padding: 0 13px;
            position: absolute;
            top: 0;
            bottom: 0;
            display: flex;
            flex-direction: row;
            align-items: center
        }

        .u-navbar__content__left[data-v-c4b04b80] {
            left: 0
        }

        .u-navbar__content__left--hover[data-v-c4b04b80] {
            opacity: .7
        }

        .u-navbar__content__left__text[data-v-c4b04b80] {
            font-size: 14px;
            margin-left: 3px
        }

        .u-navbar__content__title[data-v-c4b04b80] {
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            color: #000
        }

        .u-navbar__content__right[data-v-c4b04b80] {
            right: 0
        }

        .u-navbar__content__right__text[data-v-c4b04b80] {
            font-size: 14px;
            margin-left: 3px
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-31da562e] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-31da562e] {
            color: #5462de
        }

        a.link[data-v-31da562e] {
            color: #5462de
        }

        uni-view[data-v-31da562e],
        uni-scroll-view[data-v-31da562e],
        uni-swiper-item[data-v-31da562e] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-input[data-v-31da562e] {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            flex: 1
        }

        .u-input--radius[data-v-31da562e],
        .u-input--square[data-v-31da562e] {
            border-radius: 4px
        }

        .u-input--no-radius[data-v-31da562e] {
            border-radius: 0
        }

        .u-input--circle[data-v-31da562e] {
            border-radius: 100px
        }

        .u-input__content[data-v-31da562e] {
            flex: 1;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between
        }

        .u-input__content__field-wrapper[data-v-31da562e] {
            position: relative;
            display: flex;
            flex-direction: row;
            margin: 0;
            flex: 1
        }

        .u-input__content__field-wrapper__field[data-v-31da562e] {
            line-height: 26px;
            text-align: left;
            color: #303133;
            height: 24px;
            font-size: 15px;
            flex: 1
        }

        .u-input__content__clear[data-v-31da562e] {
            width: 20px;
            height: 20px;
            border-radius: 100px;
            background-color: #c6c7cb;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            -webkit-transform: scale(.82);
            transform: scale(.82);
            margin-left: 4px
        }

        .u-input__content__subfix-icon[data-v-31da562e] {
            margin-left: 4px
        }

        .u-input__content__prefix-icon[data-v-31da562e] {
            margin-right: 4px
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-d72351aa] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-d72351aa] {
            color: #5462de
        }

        a.link[data-v-d72351aa] {
            color: #5462de
        }

        @font-face {
            font-family: uniicons;
            src: url(/assets/uni.75745d34.ttf) format("truetype")
        }

        .uni-icons[data-v-d72351aa] {
            font-family: uniicons;
            text-decoration: none;
            text-align: center
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-0132f082] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-0132f082] {
            color: #5462de
        }

        a.link[data-v-0132f082] {
            color: #5462de
        }

        @media screen and (max-width:500px) {
            .hide-on-phone[data-v-0132f082] {
                display: none
            }
        }

        .uni-stat__select[data-v-0132f082] {
            display: flex;
            align-items: center;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box
        }

        .uni-stat-box[data-v-0132f082] {
            width: 100%;
            flex: 1
        }

        .uni-stat__actived[data-v-0132f082] {
            width: 100%;
            flex: 1
        }

        .uni-label-text[data-v-0132f082] {
            font-size: 15px;
            font-weight: 700;
            color: #c0c4cc;
            margin: auto 0;
            margin-right: 5px
        }

        .uni-select[data-v-0132f082] {
            font-size: 15px;
            box-sizing: border-box;
            border-radius: 4px;
            padding: 0 5px;
            padding-left: 10px;
            position: relative;
            display: flex;
            -webkit-user-select: none;
            user-select: none;
            flex-direction: row;
            align-items: center;
            width: 100%;
            flex: 1;
            height: 40px
        }

        .uni-select--disabled[data-v-0132f082] {
            background-color: #f5f7fa;
            cursor: not-allowed
        }

        .uni-select.bottom[data-v-0132f082] {
            border-bottom: .5px solid #f2f2f2
        }

        .uni-select.round[data-v-0132f082] {
            border: .5px solid #f2f2f2
        }

        .uni-select.none[data-v-0132f082] {
            border: none
        }

        .uni-select__label[data-v-0132f082] {
            font-size: 16px;
            height: 35px;
            padding-right: 10px;
            color: #909399
        }

        .uni-select__input-box[data-v-0132f082] {
            height: 35px;
            position: relative;
            display: flex;
            flex: 1;
            flex-direction: row;
            align-items: center
        }

        .uni-select__input-icon[data-v-0132f082] {
            width: 8px;
            height: 6px;
            transition: all .3s
        }

        .uni-select__input-icon.top[data-v-0132f082] {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .uni-select__input-icon.bottom[data-v-0132f082] {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        .uni-select__input[data-v-0132f082] {
            flex: 1;
            font-size: 15px;
            height: 22px;
            line-height: 22px
        }

        .uni-select__input-plac[data-v-0132f082] {
            font-size: 14px;
            color: #909399
        }

        .uni-select__selector[data-v-0132f082] {
            box-sizing: border-box;
            position: absolute;
            top: calc(100% + 12px);
            left: 0;
            width: 100%;
            background-color: #fff;
            border: 1px solid #ebeef5;
            border-radius: 6px;
            box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
            z-index: 3;
            padding: 4px 0
        }

        .uni-select__selector-scroll[data-v-0132f082] {
            max-height: 200px;
            box-sizing: border-box
        }

        .uni-select__selector-empty[data-v-0132f082],
        .uni-select__selector-item[data-v-0132f082] {
            display: flex;
            cursor: pointer;
            font-size: 14px;
            text-align: center;
            /* border-bottom: solid 1px $uni-border-3; */
            padding: 10px 10px
        }

        .uni-select__selector-item[data-v-0132f082]:hover {
            background-color: #f9f9f9
        }

        .uni-select__selector-empty[data-v-0132f082]:last-child,
        .uni-select__selector-item[data-v-0132f082]:last-child {
            border-bottom: none
        }

        .uni-select__selector__disabled[data-v-0132f082] {
            opacity: .4;
            cursor: default
        }

        /* picker 弹出层通用的指示小三角 */

        .uni-popper__arrow[data-v-0132f082],
        .uni-popper__arrow[data-v-0132f082]::after {
            position: absolute;
            display: block;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            border-width: 6px
        }

        .uni-popper__arrow[data-v-0132f082] {
            -webkit-filter: drop-shadow(0 2px 12px rgba(0, 0, 0, .03));
            filter: drop-shadow(0 2px 12px rgba(0, 0, 0, .03));
            top: -6px;
            left: 10%;
            margin-right: 3px;
            border-top-width: 0;
            border-bottom-color: #ebeef5
        }

        .uni-popper__arrow[data-v-0132f082]::after {
            content: " ";
            top: 1px;
            margin-left: -6px;
            border-top-width: 0;
            border-bottom-color: #fff
        }

        .uni-select__input-text[data-v-0132f082] {
            width: 100%;
            color: #333;
            white-space: nowrap;
            text-overflow: ellipsis;
            -o-text-overflow: ellipsis;
            overflow: hidden
        }

        .uni-select__input-placeholder[data-v-0132f082] {
            color: #c0c4cc;
            font-size: 15px
        }

        .uni-select__input-placeholder.pc[data-v-0132f082] {
            color: #333
        }

        .uni-select--mask[data-v-0132f082] {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-75e61097] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-75e61097] {
            color: #5462de
        }

        a.link[data-v-75e61097] {
            color: #5462de
        }

        uni-view[data-v-75e61097],
        uni-scroll-view[data-v-75e61097],
        uni-swiper-item[data-v-75e61097] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-loading-icon[data-v-75e61097] {
            flex-direction: row;
            align-items: center;
            justify-content: center;
            color: #c8c9cc
        }

        .u-loading-icon__text[data-v-75e61097] {
            margin-left: 4px;
            color: #606266;
            font-size: 14px;
            line-height: 20px
        }

        .u-loading-icon__spinner[data-v-75e61097] {
            width: 30px;
            height: 30px;
            position: relative;
            box-sizing: border-box;
            max-width: 100%;
            max-height: 100%;
            -webkit-animation: u-rotate-data-v-75e61097 1s linear infinite;
            animation: u-rotate-data-v-75e61097 1s linear infinite
        }

        .u-loading-icon__spinner--semicircle[data-v-75e61097] {
            border-width: 2px;
            border-color: transparent;
            border-top-right-radius: 100px;
            border-top-left-radius: 100px;
            border-bottom-left-radius: 100px;
            border-bottom-right-radius: 100px;
            border-style: solid
        }

        .u-loading-icon__spinner--circle[data-v-75e61097] {
            border-top-right-radius: 100px;
            border-top-left-radius: 100px;
            border-bottom-left-radius: 100px;
            border-bottom-right-radius: 100px;
            border-width: 2px;
            border-top-color: #e5e5e5;
            border-right-color: #e5e5e5;
            border-bottom-color: #e5e5e5;
            border-left-color: #e5e5e5;
            border-style: solid
        }

        .u-loading-icon--vertical[data-v-75e61097] {
            flex-direction: column
        }

        [data-v-75e61097]:host {
            font-size: 0;
            line-height: 1
        }

        .u-loading-icon__spinner--spinner[data-v-75e61097] {
            -webkit-animation-timing-function: steps(12);
            animation-timing-function: steps(12)
        }

        .u-loading-icon__text[data-v-75e61097]:empty {
            display: none
        }

        .u-loading-icon--vertical .u-loading-icon__text[data-v-75e61097] {
            margin: 6px 0 0;
            color: #606266
        }

        .u-loading-icon__dot[data-v-75e61097] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .u-loading-icon__dot[data-v-75e61097]:before {
            display: block;
            width: 2px;
            height: 25%;
            margin: 0 auto;
            background-color: currentColor;
            border-radius: 40%;
            content: " "
        }

        .u-loading-icon__dot[data-v-75e61097]:nth-of-type(1) {
            -webkit-transform: rotate(30deg);
            transform: rotate(30deg);
            opacity: 1
        }

        .u-loading-icon__dot[data-v-75e61097]:nth-of-type(2) {
            -webkit-transform: rotate(60deg);
            transform: rotate(60deg);
            opacity: .9375
        }

        .u-loading-icon__dot[data-v-75e61097]:nth-of-type(3) {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
            opacity: .875
        }

        .u-loading-icon__dot[data-v-75e61097]:nth-of-type(4) {
            -webkit-transform: rotate(120deg);
            transform: rotate(120deg);
            opacity: .8125
        }

        .u-loading-icon__dot[data-v-75e61097]:nth-of-type(5) {
            -webkit-transform: rotate(150deg);
            transform: rotate(150deg);
            opacity: .75
        }

        .u-loading-icon__dot[data-v-75e61097]:nth-of-type(6) {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
            opacity: .6875
        }

        .u-loading-icon__dot[data-v-75e61097]:nth-of-type(7) {
            -webkit-transform: rotate(210deg);
            transform: rotate(210deg);
            opacity: .625
        }

        .u-loading-icon__dot[data-v-75e61097]:nth-of-type(8) {
            -webkit-transform: rotate(240deg);
            transform: rotate(240deg);
            opacity: .5625
        }

        .u-loading-icon__dot[data-v-75e61097]:nth-of-type(9) {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
            opacity: .5
        }

        .u-loading-icon__dot[data-v-75e61097]:nth-of-type(10) {
            -webkit-transform: rotate(300deg);
            transform: rotate(300deg);
            opacity: .4375
        }

        .u-loading-icon__dot[data-v-75e61097]:nth-of-type(11) {
            -webkit-transform: rotate(330deg);
            transform: rotate(330deg);
            opacity: .375
        }

        .u-loading-icon__dot[data-v-75e61097]:nth-of-type(12) {
            -webkit-transform: rotate(1turn);
            transform: rotate(1turn);
            opacity: .3125
        }

        @-webkit-keyframes u-rotate-data-v-75e61097 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }
            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        @keyframes u-rotate-data-v-75e61097 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }
            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-50bed489] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-50bed489] {
            color: #5462de
        }

        a.link[data-v-50bed489] {
            color: #5462de
        }

        uni-view[data-v-50bed489],
        uni-scroll-view[data-v-50bed489],
        uni-swiper-item[data-v-50bed489] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-button[data-v-50bed489] {
            width: 100%
        }

        .u-button__text[data-v-50bed489] {
            white-space: nowrap;
            line-height: 1
        }

        .u-button[data-v-50bed489]:before {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            border: inherit;
            border-radius: inherit;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            opacity: 0;
            content: " ";
            background-color: #000;
            border-color: #000
        }

        .u-button--active[data-v-50bed489]:before {
            opacity: .15
        }

        .u-button__icon+.u-button__text[data-v-50bed489]:not(:empty),
        .u-button__loading-text[data-v-50bed489] {
            margin-left: 4px
        }

        .u-button--plain.u-button--primary[data-v-50bed489] {
            color: #3c9cff
        }

        .u-button--plain.u-button--info[data-v-50bed489] {
            color: #909399
        }

        .u-button--plain.u-button--success[data-v-50bed489] {
            color: #5ac725
        }

        .u-button--plain.u-button--error[data-v-50bed489] {
            color: #f56c6c
        }

        .u-button--plain.u-button--warning[data-v-50bed489] {
            color: #f56c6c
        }

        .u-button[data-v-50bed489] {
            height: 40px;
            position: relative;
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: row;
            box-sizing: border-box;
            flex-direction: row
        }

        .u-button__text[data-v-50bed489] {
            font-size: 15px
        }

        .u-button__loading-text[data-v-50bed489] {
            font-size: 15px;
            margin-left: 4px
        }

        .u-button--large[data-v-50bed489] {
            width: 100%;
            height: 50px;
            padding: 0 15px
        }

        .u-button--normal[data-v-50bed489] {
            padding: 0 12px;
            font-size: 14px
        }

        .u-button--small[data-v-50bed489] {
            min-width: 60px;
            height: 30px;
            padding: 0 8px;
            font-size: 12px
        }

        .u-button--mini[data-v-50bed489] {
            height: 22px;
            font-size: 10px;
            min-width: 20px;
            padding: 0 8px
        }

        .u-button--disabled[data-v-50bed489] {
            opacity: .5
        }

        .u-button--info[data-v-50bed489] {
            color: #323233;
            background-color: #fff;
            border-color: #ebedf0;
            border-width: 1px;
            border-style: solid
        }

        .u-button--success[data-v-50bed489] {
            color: #fff;
            background-color: #5ac725;
            border-color: #5ac725;
            border-width: 1px;
            border-style: solid
        }

        .u-button--primary[data-v-50bed489] {
            color: #fff;
            background-color: #3c9cff;
            border-color: #3c9cff;
            border-width: 1px;
            border-style: solid
        }

        .u-button--error[data-v-50bed489] {
            color: #fff;
            background-color: #f56c6c;
            border-color: #f56c6c;
            border-width: 1px;
            border-style: solid
        }

        .u-button--warning[data-v-50bed489] {
            color: #fff;
            background-color: #f9ae3d;
            border-color: #f9ae3d;
            border-width: 1px;
            border-style: solid
        }

        .u-button--block[data-v-50bed489] {
            display: flex;
            flex-direction: row;
            width: 100%
        }

        .u-button--circle[data-v-50bed489] {
            border-top-right-radius: 100px;
            border-top-left-radius: 100px;
            border-bottom-left-radius: 100px;
            border-bottom-right-radius: 100px
        }

        .u-button--square[data-v-50bed489] {
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px
        }

        .u-button__icon[data-v-50bed489] {
            min-width: 1em;
            line-height: inherit !important;
            vertical-align: top
        }

        .u-button--plain[data-v-50bed489] {
            background-color: #fff
        }

        .u-button--hairline[data-v-50bed489] {
            border-width: .5px !important
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-294ad62f] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-294ad62f] {
            color: #5462de
        }

        a.link[data-v-294ad62f] {
            color: #5462de
        }

        .header[data-v-294ad62f] {
            position: relative
        }

        .header__bg[data-v-294ad62f] {
            width: 377px;
            height: 292px
        }

        .header__info[data-v-294ad62f] {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%
        }

        .logo[data-v-294ad62f] {
            padding-top: 70px;
            padding-left: 40px;
            display: flex;
            align-items: center
        }

        .logo .img[data-v-294ad62f] {
            width: 36px;
            height: 36px
        }

        .logo .title[data-v-294ad62f] {
            margin-left: 5px;
            height: 36px;
            line-height: 36px;
            font-size: 36px;
            color: #fff
        }

        .desc[data-v-294ad62f] {
            padding-left: 40px;
            padding-top: 20px;
            font-size: 20px;
            color: hsla(0, 0%, 100%, .9)
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-38cc163c] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-38cc163c] {
            color: #5462de
        }

        a.link[data-v-38cc163c] {
            color: #5462de
        }

        .panel[data-v-38cc163c] {
            border-radius: 15px !important;
            overflow: hidden;
            width: 300px;
            box-sizing: border-box;
            padding: 10px 20px;
            padding-top: 0;
            padding-bottom: 25px;
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .panel__title[data-v-38cc163c] {
            color: #333;
            font-size: 18px
        }

        .panel__content[data-v-38cc163c] {
            padding: 20px 0px 30px 0px;
            width: 100%;
            text-align: left;
            font-size: 14px;
            color: #666
        }

        .panel__c-b[data-v-38cc163c] {
            width: 100%;
            display: flex;
            align-items: center
        }

        .panel__c-b .btn+.btn[data-v-38cc163c] {
            margin-left: 30px
        }

        .panel.pc[data-v-38cc163c] {
            width: 380px
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-7fd778c4] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-7fd778c4] {
            color: #5462de
        }

        a.link[data-v-7fd778c4] {
            color: #5462de
        }

        .container[data-v-7fd778c4] {
            background: #fff;
            min-height: 100vh
        }

        .h-return[data-v-7fd778c4] {
            width: 100%;
            background-color: #000;
            color: #fff;
            text-align: left;
            padding: 10px 10px
        }

        .h-return .r-icon[data-v-7fd778c4] {
            width: 12px
        }

        .container.pc[data-v-7fd778c4] {
            min-height: 400px
        }

        .navi-right[data-v-7fd778c4] {
            width: 18px;
            height: 18px
        }

        .fix-bt[data-v-7fd778c4] {
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 335px;
            max-width: 335px
        }

        .panel.mb[data-v-7fd778c4] {
            padding-top: 45px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            margin-top: -50px
        }

        .panel[data-v-7fd778c4] {
            z-index: 1;
            position: relative;
            box-sizing: border-box;
            padding: 5px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff
        }

        .panel__title[data-v-7fd778c4] {
            width: 100%;
            font-size: 14px;
            color: #333;
            padding-top: 20px;
            padding-bottom: 10px
        }

        .panel__input[data-v-7fd778c4] {
            width: 100%;
            box-sizing: border-box;
            border-color: #f2f2f2 !important;
            font-size: 15px !important;
            background-color: #eeeff5;
            padding: 11px 15px !important
        }

        .panel__input.fixed[data-v-7fd778c4] {
            padding: 5px 15px !important
        }

        .panel__input-icon[data-v-7fd778c4] {
            height: 16px;
            width: 16px
        }

        .panel__input-btn[data-v-7fd778c4] {
            color: #fff !important;
            height: 27px;
            max-height: 27px;
            padding: 0px 10px
        }

        .panel__input-holder[data-v-7fd778c4] {
            color: #ccc !important
        }

        .panel__input+.panel__input[data-v-7fd778c4] {
            margin-top: 15px
        }

        .panel__info[data-v-7fd778c4] {
            width: 100%
        }

        .panel__info-item[data-v-7fd778c4] {
            display: flex;
            align-items: center;
            font-size: 13px;
            color: #666;
            position: relative;
            width: 100%
        }

        .panel__info-item uni-text[data-v-7fd778c4]:first-child {
            display: inline-block;
            width: 60px
        }

        .panel__info-item .img[data-v-7fd778c4] {
            position: absolute;
            width: 16px;
            height: 16px;
            top: 0px;
            right: 10px
        }

        .panel__info-item+.panel__info-item[data-v-7fd778c4] {
            margin-top: 6px
        }

        .panel__desc[data-v-7fd778c4] {
            width: 100%;
            text-align: left;
            margin-top: 8px;
            font-size: 13px;
            color: #c2c2c2
        }

        .panel__desc uni-text[data-v-7fd778c4]:not(:first-child) {
            margin-left: 5px;
            color: #5462de
        }

        .panel__forget[data-v-7fd778c4] {
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .panel__btn[data-v-7fd778c4] {
            margin-top: 40px;
            width: 100%;
            max-width: 335px;
            height: 44px;
            min-height: 44px
        }

        .panel__register[data-v-7fd778c4] {
            margin-top: 15px;
            font-size: 14px;
            color: #97a1a9;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            cursor: pointer
        }

        .panel__register .act[data-v-7fd778c4] {
            display: inline-block;
            padding-left: 10px;
            color: #5462de
        }

        .panel__pro[data-v-7fd778c4] {
            width: 100%;
            margin-top: 15px;
            display: flex;
            align-items: center;
            font-size: 12px;
            color: #97a1a9
        }

        .panel__pro .icon[data-v-7fd778c4] {
            display: flex;
            justify-content: center
        }

        .panel__pro .icon uni-image[data-v-7fd778c4] {
            width: 14px;
            height: 14px
        }

        .panel__pro .pro[data-v-7fd778c4] {
            margin-left: 5px
        }

        .panel.pd[data-v-7fd778c4] {
            margin-top: -100px
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-5ffab58c] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-5ffab58c] {
            color: #5462de
        }

        a.link[data-v-5ffab58c] {
            color: #5462de
        }

        uni-view[data-v-5ffab58c],
        uni-scroll-view[data-v-5ffab58c],
        uni-swiper-item[data-v-5ffab58c] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-38434702] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-38434702] {
            color: #5462de
        }

        a.link[data-v-38434702] {
            color: #5462de
        }

        .container[data-v-38434702] {
            background: #fff;
            min-height: 100vh
        }

        .h-return[data-v-38434702] {
            width: 100%;
            background-color: #000;
            color: #fff;
            text-align: left;
            padding: 10px 10px
        }

        .h-return .r-icon[data-v-38434702] {
            width: 12px
        }

        .container.pc[data-v-38434702] {
            min-height: 400px
        }

        .navi-right[data-v-38434702] {
            width: 18px;
            height: 18px
        }

        .fix-bt[data-v-38434702] {
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 335px;
            max-width: 335px
        }

        .panel.mb[data-v-38434702] {
            padding-top: 45px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            margin-top: -50px
        }

        .panel[data-v-38434702] {
            z-index: 1;
            position: relative;
            box-sizing: border-box;
            padding: 5px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff
        }

        .panel__title[data-v-38434702] {
            width: 100%;
            font-size: 14px;
            color: #333;
            padding-top: 20px;
            padding-bottom: 10px
        }

        .panel__input[data-v-38434702] {
            width: 100%;
            box-sizing: border-box;
            border-color: #f2f2f2 !important;
            font-size: 15px !important;
            background-color: #eeeff5;
            padding: 11px 15px !important
        }

        .panel__input.fixed[data-v-38434702] {
            padding: 5px 15px !important
        }

        .panel__input-icon[data-v-38434702] {
            height: 16px;
            width: 16px
        }

        .panel__input-btn[data-v-38434702] {
            color: #fff !important;
            height: 27px;
            max-height: 27px;
            padding: 0px 10px
        }

        .panel__input-holder[data-v-38434702] {
            color: #ccc !important
        }

        .panel__input+.panel__input[data-v-38434702] {
            margin-top: 15px
        }

        .panel__info[data-v-38434702] {
            width: 100%
        }

        .panel__info-item[data-v-38434702] {
            display: flex;
            align-items: center;
            font-size: 13px;
            color: #666;
            position: relative;
            width: 100%
        }

        .panel__info-item uni-text[data-v-38434702]:first-child {
            display: inline-block;
            width: 60px
        }

        .panel__info-item .img[data-v-38434702] {
            position: absolute;
            width: 16px;
            height: 16px;
            top: 0px;
            right: 10px
        }

        .panel__info-item+.panel__info-item[data-v-38434702] {
            margin-top: 6px
        }

        .panel__desc[data-v-38434702] {
            width: 100%;
            text-align: left;
            margin-top: 8px;
            font-size: 13px;
            color: #c2c2c2
        }

        .panel__desc uni-text[data-v-38434702]:not(:first-child) {
            margin-left: 5px;
            color: #5462de
        }

        .panel__forget[data-v-38434702] {
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .panel__btn[data-v-38434702] {
            margin-top: 40px;
            width: 100%;
            max-width: 335px;
            height: 44px;
            min-height: 44px
        }

        .panel__register[data-v-38434702] {
            margin-top: 15px;
            font-size: 14px;
            color: #97a1a9;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            cursor: pointer
        }

        .panel__register .act[data-v-38434702] {
            display: inline-block;
            padding-left: 10px;
            color: #5462de
        }

        .panel__pro[data-v-38434702] {
            width: 100%;
            margin-top: 15px;
            display: flex;
            align-items: center;
            font-size: 12px;
            color: #97a1a9
        }

        .panel__pro .icon[data-v-38434702] {
            display: flex;
            justify-content: center
        }

        .panel__pro .icon uni-image[data-v-38434702] {
            width: 14px;
            height: 14px
        }

        .panel__pro .pro[data-v-38434702] {
            margin-left: 5px
        }

        .panel.pd[data-v-38434702] {
            margin-top: -100px
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-3c3b0c48] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-3c3b0c48] {
            color: #5462de
        }

        a.link[data-v-3c3b0c48] {
            color: #5462de
        }

        .panel[data-v-3c3b0c48] {
            padding-top: 12px;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .08);
            width: 380px
        }

        .panel__seg[data-v-3c3b0c48] {
            padding-bottom: 25px
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-11963148] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-11963148] {
            color: #5462de
        }

        a.link[data-v-11963148] {
            color: #5462de
        }

        uni-view[data-v-11963148],
        uni-scroll-view[data-v-11963148],
        uni-swiper-item[data-v-11963148] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-line[data-v-11963148] {
            vertical-align: middle
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-68bc644f] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-68bc644f] {
            color: #5462de
        }

        a.link[data-v-68bc644f] {
            color: #5462de
        }

        uni-view[data-v-68bc644f],
        uni-scroll-view[data-v-68bc644f],
        uni-swiper-item[data-v-68bc644f] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-modal[data-v-68bc644f] {
            width: 325px;
            border-radius: 20px;
            overflow: hidden
        }

        .u-modal__title[data-v-68bc644f] {
            font-size: 16px;
            font-weight: 700;
            color: #606266;
            text-align: center;
            padding-top: 25px
        }

        .u-modal__content[data-v-68bc644f] {
            padding: 12px 25px 25px 25px;
            display: flex;
            flex-direction: row;
            justify-content: center
        }

        .u-modal__content__text[data-v-68bc644f] {
            font-size: 15px;
            color: #606266;
            flex: 1
        }

        .u-modal__button-group[data-v-68bc644f] {
            display: flex;
            flex-direction: row
        }

        .u-modal__button-group--confirm-button[data-v-68bc644f] {
            flex-direction: column;
            padding: 0 25px 15px 25px
        }

        .u-modal__button-group__wrapper[data-v-68bc644f] {
            flex: 1;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: 48px
        }

        .u-modal__button-group__wrapper--confirm[data-v-68bc644f],
        .u-modal__button-group__wrapper--only-cancel[data-v-68bc644f] {
            border-bottom-right-radius: 20px
        }

        .u-modal__button-group__wrapper--cancel[data-v-68bc644f],
        .u-modal__button-group__wrapper--only-confirm[data-v-68bc644f] {
            border-bottom-left-radius: 20px
        }

        .u-modal__button-group__wrapper--hover[data-v-68bc644f] {
            background-color: #f3f4f6
        }

        .u-modal__button-group__wrapper__text[data-v-68bc644f] {
            color: #606266;
            font-size: 16px;
            text-align: center
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-4005ed71] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-4005ed71] {
            color: #5462de
        }

        a.link[data-v-4005ed71] {
            color: #5462de
        }

        .c-b[data-v-4005ed71] {
            display: flex;
            align-items: center
        }

        .c-b .btn+.btn[data-v-4005ed71] {
            margin-left: 10px
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-3542979d] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-3542979d] {
            color: #5462de
        }

        a.link[data-v-3542979d] {
            color: #5462de
        }

        .c-b[data-v-3542979d] {
            display: flex;
            align-items: center
        }

        .c-b .btn+.btn[data-v-3542979d] {
            margin-left: 10px
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-7679427e] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-7679427e] {
            color: #5462de
        }

        a.link[data-v-7679427e] {
            color: #5462de
        }

        .c-b[data-v-7679427e] {
            display: flex;
            flex-direction: row;
            align-items: center
        }

        .c-b .btn+.btn[data-v-7679427e] {
            margin-left: 10px
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";
        /**
 * 这里是uni-app内置的常用样式变量
 *
 * uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
 * 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
 *
 */

        /**
 * 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
 *
 * 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
 */

        /* 颜色变量 */

        /* 行为相关颜色 */

        /* 文字基本颜色 */

        /* 背景颜色 */

        /* 横线颜色 */

        /* 边框颜色 */

        /* 文字尺寸 */

        /* 图片尺寸 */

        /* Border Radius */

        /* 水平间距 */

        /* 垂直间距 */

        /* 透明度 */

        a[data-v-ba5104ea] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-ba5104ea] {
            color: #5462de
        }

        a.link[data-v-ba5104ea] {
            color: #5462de
        }

        .c-b[data-v-ba5104ea] {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center
        }

        .c-b .btn[data-v-ba5104ea] {
            max-width: 120px
        }
    </style>
    <style type="text/css">
        .uni-app--showtabbar uni-page-wrapper {
            display: block;
            height: calc(100% - 50px);
            height: calc(100% - 50px - constant(safe-area-inset-bottom));
            height: calc(100% - 50px - env(safe-area-inset-bottom));
        }

        .uni-app--showtabbar uni-page-wrapper::after {
            content: "";
            display: block;
            width: 100%;
            height: 50px;
            height: calc(50px + constant(safe-area-inset-bottom));
            height: calc(50px + env(safe-area-inset-bottom));
        }

        .uni-app--showtabbar uni-page-head[uni-page-head-type="default"]~uni-page-wrapper {
            height: calc(100% - 44px - 50px);
            height: calc(100% - 44px - constant(safe-area-inset-top) - 50px - constant(safe-area-inset-bottom));
            height: calc(100% - 44px - env(safe-area-inset-top) - 50px - env(safe-area-inset-bottom));
        }
    </style>
</head>








     <form action="{{route('user.login')}}"  method="post">
         @csrf
<body class="uni-body pages-login-login"><noscript><strong>Please enable JavaScript to continue.</strong></noscript>
    <uni-app class="uni-app--maxwidth">
        <uni-page data-page="pages/login/login">
            <!---->
            <!---->
            <uni-page-wrapper>
                <uni-page-body>
                    <uni-view data-v-7fd778c4="" class="container">
                        <uni-view data-v-c4b04b80="" data-v-7fd778c4="" class="u-navbar">
                            <!---->
                            <uni-view data-v-c4b04b80="" class="u-navbar--fixed">
                                <uni-view data-v-ba701168="" data-v-c4b04b80="" class="u-status-bar" style="height: 0px; background-color: transparent;"></uni-view>
                                <uni-view data-v-c4b04b80="" class="u-navbar__content" style="height: 44px; background-color: transparent;">
                                    <uni-view data-v-c4b04b80="" class="u-navbar__content__left">
                                        <uni-view data-v-729c0bcb="" data-v-c4b04b80="" class="u-icon u-icon--right">
                                            <uni-text data-v-729c0bcb="" hover-class="" class="u-icon__icon uicon-arrow-left" style="font-size: 20px; line-height: 20px; font-weight: normal; top: 0px; color: rgb(255, 255, 255);"><span></span></uni-text>
                                            <!---->
                                        </uni-view>
                                        <!---->
                                    </uni-view>
                                    <uni-text data-v-c4b04b80="" class="u-line-1 u-navbar__content__title" style="width: 200px;"><span></span></uni-text>
                                    <!---->
                                </uni-view>
                            </uni-view>
                        </uni-view>



         
                            
                            
                        <uni-view data-v-294ad62f="" data-v-7fd778c4="" class="header">
                            <uni-image data-v-294ad62f="" class="header__bg">
                                <div style="background-image: url({{asset ('css/login/login_bg.png')}}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                <!----><img src="/static/img/" draggable="false"></uni-image>
                            <uni-view data-v-294ad62f="" class="header__info">
                                <uni-view data-v-294ad62f="" class="logo">
                                    <uni-image data-v-294ad62f="" class="img">
                                        <div style="background-image: url(&quot;/static/img/login/login_logo.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                        <!----><img src="https://web.zsingtech.com/static/img/login/login_logo.png" draggable="false"></uni-image>
                                    <uni-text data-v-294ad62f="" class="title"><span>Sign in</span></uni-text>
                                </uni-view>
                                <uni-view data-v-294ad62f="" class="desc">Welcome, Z-Sing AI Tech</uni-view>
                            </uni-view>
                        </uni-view>


                        <uni-view data-v-7fd778c4="" class="panel mb pd">
                            <uni-view data-v-31da562e="" data-v-7fd778c4="" class="u-input panel__input fixed u-border u-input--radius u-input--circle" style="padding: 6px 9px;">
                                <uni-view data-v-31da562e="" class="u-input__content">
                                    <uni-view data-v-31da562e="" class="u-input__content__prefix-icon">
                                        <uni-view data-v-7fd778c4="" class="code-v">
                                            <uni-image data-v-7fd778c4="" class="panel__input-icon">
                                                <div style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFwAAABiCAYAAADdn7SFAAAAAXNSR0IArs4c6QAADA9JREFUeF7tnQewbEURhn9AESMGFEOJUGLGUgQFwUhSMCsmDIgKBiQoYsAMCgUFmADLLJgxJ8yKWRAKxIiCqCWCIJgDkpzvvdnr3nk9J+z2zNm9ble9oqh7dk7Pf+bMdPi7z1paSFUE1qp6t8XNNMuArytpS0n3k3RXSZtK2kTSDSRdKz67f0v6i6TfSfqppJ9J+pak70u6Yhaf76wBDpA7S9pN0kMlXXtC0P4h6QvhIb1P0kmS/jPhOO4/mxXAbyjpeZL2l3QT51n+UdKbwrhvDuP/2Xns3sMNDTgr+oWSXirpur217/cDVv1hko4M97us30/9rh4S8AdKelvcm/1m1D7SOZL2kvT19kv9rxgC8HUkvSbsqweF//a5/7/C3v6LsPWwRfw9QnE9SRtIun3P/f4qSYeGMV4t6Up/WPMj9pmwh17rS/qopB06DIYF8mlJX5b0DUmszKszv2Met5X0AEk7Snq4pPU63OMrkh4j6a8drnW5pCbgN5X0RUmbt2h+blith0v68BRAYDo+XtKL44NouuUZ0TL6gwuiLYPUAvxGYeV9J4B4pwZ9LpL0omjKeb3mbF9PlnSEpJs13Psnku4r6U+lQa8B+HUkfSlsDds2TOYESftGJ6bEnNnKMA2f2jD49+JW988SCozGrAH48Q0TxSF5lqT3lJzk2NhPk/TWcGDixVqCrlxTTEoDzopiEpZwUD0iHHQnF5udPTAH66diiMC6Yo+SC6Ak4LeSdHbGocHE2y7GPCrjvep2W4cYzdcypiQm5x0lnV9CsZKAfyhaCqne2MAPizGOEnPqOuYukj4jaW3jB1hIT+g6UJ/rSgFOhA/b2RKcHhyOWRD0eFVGkfuHt/Cb3kqWAhyrBAckFcKm96nt3TWAhtn47bjFpJfhcO00D4DfU9KphqJsJcS3cTRmSXDETstsLeh7uqeyJVb420NC4JmGksVNrimAwSzd3fj9OzNzmfhW3oATbsVjxLUeF2IgeJlYLbMoBL9+bgTTyCZt6BnO9QYcu/qTBqJkX8jkzLJ8PpipDzYUfGS021109wYc93kfQ7MnhRDqB1w0LjcIab33G8MfG7NRLnf2BvzHku6SaEYgirQZr+csC9vgpZKwXMblLEl381LcE3DizwR+0jFPyZhdXnPwHAezdSvj/Lm+JFJ0U4sn4KyCMw2N2Gb2m1rTOgO8MUYt07vdXdIPPVTwBHzXsJ18xFBq7xCLPs5D2QpjPFcSe3Yqjw7byic87u8JOIlZQp+pELPAApgHwZKCx5KK26LxBPzAmFlJlSWuAhtqHoSsjxU/eb6kN3hMwBPwV8ZsfKoXrrO1t3vo7z0Ge7UVenALuHkCDmvq9QYCRaJu3kjH8XJRTt5eCERTiyfgzw5u8FsMjR4yA7HvrkBx3nzOuJjziRjR1OIJeM6tJzkMr28eBC8ZMzYVuCsf95iAJ+B4mHiaqbi6xh6TbhjjGElYJKlAl7bm1lsdT8ChFpMPTFNWxJOJK8+DEBffIlGU0ARUDxfKsyfg6GkpTOIB/l9xks2UTxTK9CXGgsHDxHpxEW/Ajwr0tBcYmhWlHrggsToBYfFjmBOUahfxBpx4suVVQknY3kXjcoN8NVI30ju4esregF8z8jkgbqaymSQ4fLMouQOfLeYWki73UtobcPTCKiEIlEoxrocDGDkODUE3y2qZ+JYlAL9zNKHSsclrbjMg2yoHEiys72aKA9zfyhKAMzHymjhCqRBTuZfnKzrxUlv9Q7ZAKB2WFUIxgDWHqW5ZCnC4KWR6rPFdT/2pZr86PnKAMQZvI5mfH0w5/ho/LwU4N8rxU/jb4zLJCu/5NY33WEknZi54t6Snl1CmJOA4O/BQbmwozqmPCYm5OITA3IW6wZaSColkODTwa9ylJOAoC0uWvdASKMusMis65z7RsQGJXpIKzFU5PyrDrXHRqTTgKEmmJJdEJk5BNqVWNJFoIDH7lAoxAhM9iG4WkxqAXyMyl/DYckKC9jnhX6lKMuhq2NQkg3PCFkO5oZuTY92oBuDcl2gbrjM2b04gCr0iJqJdInOxlocaokPCyqawKieYhlRGFy2o4ua1AOdeTJggPgdWk1wQyKBHh/rK906x4lnRT4mBNFzzJqHGCP5gFWZYTcCZNNVj0Ja7lHOwv1MpDLkfUOiHQnWyJbC+8HApmIJET6Vzbp8e/z1V0dRxVmt2UBvw0WRp1YEDlCvfs0DFGflNiG1cnNTaEyi7Tc+3lS2LkCsZnlw5ecuLMdmfhwIcbaHG0U0CV7+msF+T8B6kEmNIwAGZdNwzwn8PlnTzwqhfKAnuDFUNZKEGkaEBH02aPZiMy2tjOs4TDNp9vDxmc6rt1bkJDA04JSoccHD6sNNpIlZCzoseLbxBzFMvs7O3rkMBTmacPOcTM7GW3hPp8QOyODQfe1dwhCDbV5WagLNfE6d4yQzRJiDg0xnos7WslRqAAzS2Li2X7lB1OXW/GSQfDm7s8qJmYmnAqTomeJWSa7pAAakITgh9rugShAfKAZi2S8KDxbPcKByMG8cOQGRwurRgSvWgiQ6BNtdi2PGblAKcIirKN6he6yoATIsmvEvq9ImlT2q+ETADdGz8B0Xvs+sDYIWTPMEx+ltX5bteVwJw4s0o3BbDQEfMNHqXEDehtr2U2UbwDOA5pDlHeCBt8utoqro2OPAEHDedWLNFkUgnhxPCG4ATgqteU3CwoB/zj54uTcJqp7kkDpNLHy4vwJkEB05TXysmBtCESjHJcoGoWuCT8SF0i1PU1n6VrBQH/9StVD0Ah8pL8P6WDUjhaJAhZ7WMmjzWArbtPjSbpN0eHeWagmm/jM4Z/RMnlmkBh0rAQdcU3KcfCfESrI1ZFuhu72hJktCWieT3xFzxaQAnkYDDkEvG0r+bDA49Aye1Nmo/IHwGeCqvy2T00QfTlFAE1OzeMingTU26Rns1ZRpQyOZReHPJTuW2SUCnxJCWH71kEsDJrGAq5Q4a4szQI4p0Res1u+kuxhDgDc45bb+NRgLd+TtLX8BpJ8qrdOvMHSD2YOdWa57beaaTXUhP849FG94ageAXBNXOjQ/6AE6OEC+QvKEltKSj3n6w0OdkmLb+CssFk5e31pIPxk8otA7EBX0AzxEfGYckL57cSgN7BCKgE0vPVXF0Lo3sCjiZcMy/3GtFBW8VmkGnZVTmIux1egZY1GYWGnt9q7nYBXA65TCQtW9DeCRARDb9/0EIBWAUWCU1RBix3ho/Z9MFcDLrexpoYlvTDHIoBuxQD5i3ncIxq4UqyRWazWelDfB7RKvEuo6Afa6N6FBg1Lov3SUIaKVCfIgPPGVN4jbA+RKIZZV0en1qzX6A+xDehd9ifV6BWk/ytaY0AQ6TlFh1KoQpKeWelx4opZ4HZTXkRNOthZAuB6uZoG4CnFXMlpIK9DCrN2Gpic3yuLmmZDhL+CRrSA5wuCJkYFLB9OPzLVANFrK6hwCcF0zGcWGV3y7mYpf9IQd4rh01hySH5UL+h0CuB7lZVGsBzilLsN1a3WTFp856rLCnRRcK8p9pTgByP2yCZQmXnLlHHDsV6A7U4yzExsaqY+KjIyTIlyQFnP//VeR3pMOy8uGHLGRNBCA4WbHxNbrsp4DfO5M0IP5Nd7aF5BEggJdihDdOXH2JmZACzoFobSduXc1W8BMj/EEYJBVqjSCPrpIUcLwnDPpxwcThKRWpzF1BDwDiEy59iil7+NInycb/SMqMpW89hLTF8wrCyXUq1oKFi7PEQhsHN9c+CTrvy1zVWrmDQXKCWJQKhQaYjstWM6BS8pEKlACIPgtpRwBeJYnnVJbaYY+vcGgBJIBTIXFcm//XPrXZvAJHhy0klaVQ9jjgFJ6mHxiFk91EYZvNaQ+rFfSJNDvGYoans2xLIdUPrXdcsC2pQV9IdwSsHAKH6SrDY7TCsVBgE6VSrDNOd/3n7kq+fovtPS5LO8UIcLqX/ciYGmxXanMW0h0BeIkpZniclEheMQIcx+b3hg1OxQA9/RbSHQHL4yRLBun18vFDk+oFutyPhK5sxAZKlYF0n8J8XYmTQ3gbmtxIaGbGZ9+XHZqAT58+Ks8gndNmg75UC+mPAHxD6BJYK/gwfNJgVYHWfwEEu/ZybV0WogAAAABJRU5ErkJggg==); background-position: center center; background-size: contain; background-repeat: no-repeat;"></div>
                                                <!----><img src="" draggable="false"></uni-image>
                                            <uni-view data-v-0132f082="" data-v-7fd778c4="" class="uni-stat__select">
                                                <!---->
                                                <uni-view data-v-0132f082="" class="uni-stat-box uni-stat__actived">
                                                    <uni-view data-v-0132f082="" class="uni-select round">
                                                        <uni-view data-v-0132f082="" class="uni-select__input-box">
                                                            <uni-view data-v-0132f082="" class="uni-select__input-text">+92</uni-view>
                                                            <uni-image data-v-0132f082="" class="uni-select__input-icon bottom">
                                                                <div style="background-image: url(); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                                <!----><img src="/static/triggle_icon.webp" draggable="false"></uni-image>
                                                        </uni-view>
                                                        <!---->
                                                        <!---->
                                                    </uni-view>
                                                </uni-view>
                                            </uni-view>
                                        </uni-view>
                                    </uni-view>
                                    <uni-view data-v-31da562e="" class="u-input__content__field-wrapper">
                                        <uni-input data-v-31da562e="" class="u-input__content__field-wrapper__field" style="color: rgb(51, 51, 51); font-size: 15px; text-align: left;">
                                            <div class="uni-input-wrapper">
                                                <div class="uni-input-placeholder panel__input-holder" data-v-31da562e="" data-v-7fd778c4="" style="color: rgb(192, 196, 204);"></div>
                                                
                                                
                                                <input  name="username" autocomplete="off" type="number" placeholder="Phone"    class="uni-input-input">
                                                <!---->
                                            </div>
                                        </uni-input>
                                    </uni-view>
                                    <!---->
                                    <!---->
                                </uni-view>
                            </uni-view>
                            <uni-view data-v-31da562e="" data-v-7fd778c4="" class="u-input panel__input u-border u-input--radius u-input--circle" style="padding: 6px 9px;">
                                <uni-view data-v-31da562e="" class="u-input__content">
                                    <uni-view data-v-31da562e="" class="u-input__content__prefix-icon">
                                        <uni-image data-v-7fd778c4="" class="panel__input-icon">
                                            <div style="background-image: url(data:image/png;base64,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); background-position: center center; background-size: contain; background-repeat: no-repeat;"></div>
                                            <!----><img src="/static/img/login/password@2x.png" draggable="false"></uni-image>
                                    </uni-view>
                                    <uni-view data-v-31da562e="" class="u-input__content__field-wrapper">
                                        <uni-input data-v-31da562e="" class="u-input__content__field-wrapper__field" style="color: rgb(51, 51, 51); font-size: 15px; text-align: left;">
                                            <div class="uni-input-wrapper">
                                                <div class="uni-input-placeholder panel__input-holder"   data-v-7fd778c4="" style="color: rgb(192, 196, 204);"></div>
                                                <input  name="password" type="password" placeholder="Password"  class="uni-input-input">
                                                <!---->
                                            </div>
                                        </uni-input>
                                    </uni-view>
                                    <!---->
                                    <!---->
                                </uni-view>
                            </uni-view>
                            
                            
                            
                                       
                          

                            
                            
                            
                            
                            
                            
                            
                            <button data-v-50bed489="" type="button" onclick="loginAuth()"   data-v-7fd778c4="" class="u-button u-reset-button panel__btn u-button--circle u-button--normal" app-parameter="" send-message-title="" send-message-path="" lang="en" data-name="" session-from=""
                                send-message-img="" style="color: white; border-width: 0px; background-image: linear-gradient(90deg, rgb(93, 153, 255) 0%, rgb(173, 118, 255) 100%);">
                                <!---->
                                <uni-text data-v-50bed489="" class="u-button__text" style="font-size: 14px;"><span>Sign in</span></uni-text>
                            </button>
                            <uni-view data-v-7fd778c4="" class="panel__register">
                               
                                <uni-view data-v-7fd778c4="" class="reg">No account yet?
                                    <uni-text data-v-7fd778c4=""   onclick="window.location.href='{{route ('user.register')}}'"  class="act" style="color: rgb(25, 117, 255);"><span>Sign up</span></uni-text>
                                </uni-view>
                            </uni-view>
                        </uni-view>
                        <uni-view data-v-c0ac66b0="" data-v-38cc163c="" data-v-7fd778c4="" class="u-popup" borderradius="30rpx">
                            <!---->
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
            
            
            
            
             <script>
        function loginAuth() {
            document.querySelector('.van-overlay').style.display = 'block'
            document.querySelector('form').submit();
        }
    </script>
            
            
            
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
    <script src="css/login/static/js/chunk-vendors.124f9b16.js"></script>
    <script src="css/login/static/js/index.20179e77.js"></script>
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

  <div class="van-overlay" style="background: rgba(0, 0, 0, 0); display: none;">
                <div class="loading-box-h">
                    <div class="van-loading van-loading--spinner van-loading--vertical"><span class="van-loading__spinner van-loading__spinner--spinner" style="width: 30px; height: 30px;"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span><span class="van-loading__text">Loading...</span></div>
                </div>
            </div>

</body>
</html>
@include('partials.notify')