@extends($activeTemplate . 'layouts.master')
@section('content')


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
    <link rel="stylesheet" href="/static/index.2da1efab.css">
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
            background: url(/static/img/sign/sign.png) no-repeat;
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
    <script charset="utf-8" src="/static/js/pages-AI-account~pages-home-home~pages-me-me~pages-news-news~pages-profit-profit~pages-shop-shop~pag~35e80d45.516bca5a.js"></script>
    <script charset="utf-8" src="/static/js/pages-home-home~pages-newDetail-newDetail~pages-news-news~pages-phome-phome~pages-pnews-pnews.b999b59e.js"></script>
    <script charset="utf-8" src="/static/js/pages-home-home~pages-newDetail-newDetail~pages-shop-shop.00d1e649.js"></script>
    <script charset="utf-8" src="/static/js/pages-home-home~pages-phome-phome.8844e6d4.js"></script>
    <script charset="utf-8" src="/static/js/pages-home-home.ebc0a613.js"></script>
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

        a[data-v-33022c13] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-33022c13] {
            color: #5462de
        }

        a.link[data-v-33022c13] {
            color: #5462de
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

        a[data-v-50290fe5] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-50290fe5] {
            color: #5462de
        }

        a.link[data-v-50290fe5] {
            color: #5462de
        }

        uni-view[data-v-50290fe5],
        uni-scroll-view[data-v-50290fe5],
        uni-swiper-item[data-v-50290fe5] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-notice[data-v-50290fe5] {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between
        }

        .u-notice__left-icon[data-v-50290fe5] {
            align-items: center;
            margin-right: 5px
        }

        .u-notice__right-icon[data-v-50290fe5] {
            margin-left: 5px;
            align-items: center
        }

        .u-notice__swiper[data-v-50290fe5] {
            height: 16px;
            display: flex;
            flex-direction: row;
            align-items: center;
            flex: 1
        }

        .u-notice__swiper__item[data-v-50290fe5] {
            display: flex;
            flex-direction: row;
            align-items: center;
            overflow: hidden
        }

        .u-notice__swiper__item__text[data-v-50290fe5] {
            font-size: 14px;
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

        a[data-v-4e6c8838] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-4e6c8838] {
            color: #5462de
        }

        a.link[data-v-4e6c8838] {
            color: #5462de
        }

        uni-view[data-v-4e6c8838],
        uni-scroll-view[data-v-4e6c8838],
        uni-swiper-item[data-v-4e6c8838] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-notice[data-v-4e6c8838] {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between
        }

        .u-notice__left-icon[data-v-4e6c8838] {
            align-items: center;
            margin-right: 5px
        }

        .u-notice__right-icon[data-v-4e6c8838] {
            margin-left: 5px;
            align-items: center
        }

        .u-notice__content[data-v-4e6c8838] {
            text-align: right;
            flex: 1;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            overflow: hidden
        }

        .u-notice__content__text[data-v-4e6c8838] {
            font-size: 14px;
            color: #f9ae3d;
            padding-left: 100%;
            word-break: keep-all;
            white-space: nowrap;
            -webkit-animation: u-loop-animation-data-v-4e6c8838 10s linear infinite both;
            animation: u-loop-animation-data-v-4e6c8838 10s linear infinite both;
            display: flex;
            flex-direction: row
        }

        @-webkit-keyframes u-loop-animation-data-v-4e6c8838 {
            0% {
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
            100% {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }
        }

        @keyframes u-loop-animation-data-v-4e6c8838 {
            0% {
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }
            100% {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
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

        a[data-v-37682317] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-37682317] {
            color: #5462de
        }

        a.link[data-v-37682317] {
            color: #5462de
        }

        uni-view[data-v-37682317],
        uni-scroll-view[data-v-37682317],
        uni-swiper-item[data-v-37682317] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-notice-bar[data-v-37682317] {
            overflow: hidden;
            padding: 9px 12px;
            flex: 1
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

        a[data-v-20a7f6ea] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-20a7f6ea] {
            color: #5462de
        }

        a.link[data-v-20a7f6ea] {
            color: #5462de
        }

        uni-view[data-v-20a7f6ea],
        uni-scroll-view[data-v-20a7f6ea],
        uni-swiper-item[data-v-20a7f6ea] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-swiper-indicator__wrapper[data-v-20a7f6ea] {
            display: flex;
            flex-direction: row
        }

        .u-swiper-indicator__wrapper--line[data-v-20a7f6ea] {
            border-radius: 100px;
            height: 4px
        }

        .u-swiper-indicator__wrapper--line__bar[data-v-20a7f6ea] {
            width: 22px;
            height: 4px;
            border-radius: 100px;
            background-color: #fff;
            transition: -webkit-transform .3s;
            transition: transform .3s;
            transition: transform .3s, -webkit-transform .3s
        }

        .u-swiper-indicator__wrapper__dot[data-v-20a7f6ea] {
            width: 5px;
            height: 5px;
            border-radius: 100px;
            margin: 0 4px
        }

        .u-swiper-indicator__wrapper__dot--active[data-v-20a7f6ea] {
            width: 12px
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

        a[data-v-04f9a63b] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-04f9a63b] {
            color: #5462de
        }

        a.link[data-v-04f9a63b] {
            color: #5462de
        }

        uni-view[data-v-04f9a63b],
        uni-scroll-view[data-v-04f9a63b],
        uni-swiper-item[data-v-04f9a63b] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-swiper[data-v-04f9a63b] {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden
        }

        .u-swiper__wrapper[data-v-04f9a63b] {
            flex: 1
        }

        .u-swiper__wrapper__item[data-v-04f9a63b] {
            flex: 1
        }

        .u-swiper__wrapper__item__wrapper[data-v-04f9a63b] {
            display: flex;
            flex-direction: row;
            position: relative;
            overflow: hidden;
            transition: -webkit-transform .3s;
            transition: transform .3s;
            transition: transform .3s, -webkit-transform .3s;
            flex: 1
        }

        .u-swiper__wrapper__item__wrapper__image[data-v-04f9a63b] {
            flex: 1
        }

        .u-swiper__wrapper__item__wrapper__video[data-v-04f9a63b] {
            flex: 1
        }

        .u-swiper__wrapper__item__wrapper__title[data-v-04f9a63b] {
            position: absolute;
            background-color: rgba(0, 0, 0, .3);
            bottom: 0;
            left: 0;
            right: 0;
            font-size: 14px;
            padding: 6px 12px;
            color: #fff;
            flex: 1
        }

        .u-swiper__indicator[data-v-04f9a63b] {
            position: absolute;
            bottom: 10px
        }
    </style>
    <style type="text/css">
        /* a 标签默认效果 */

        ._a[data-v-2cf1dc4d] {
            padding: 1.5px 0 1.5px 0;
            color: #366092;
            word-break: break-all
        }

        /* a 标签点击态效果 */

        ._hover[data-v-2cf1dc4d] {
            text-decoration: underline;
            opacity: .7
        }

        /* 图片默认效果 */

        ._img[data-v-2cf1dc4d] {
            max-width: 100%;
            -webkit-touch-callout: none
        }

        /* 内部样式 */

        ._b[data-v-2cf1dc4d],
        ._strong[data-v-2cf1dc4d] {
            font-weight: 700
        }

        ._code[data-v-2cf1dc4d] {
            font-family: monospace
        }

        ._del[data-v-2cf1dc4d] {
            text-decoration: line-through
        }

        ._em[data-v-2cf1dc4d],
        ._i[data-v-2cf1dc4d] {
            font-style: italic
        }

        ._h1[data-v-2cf1dc4d] {
            font-size: 2em
        }

        ._h2[data-v-2cf1dc4d] {
            font-size: 1.5em
        }

        ._h3[data-v-2cf1dc4d] {
            font-size: 1.17em
        }

        ._h5[data-v-2cf1dc4d] {
            font-size: .83em
        }

        ._h6[data-v-2cf1dc4d] {
            font-size: .67em
        }

        ._h1[data-v-2cf1dc4d],
        ._h2[data-v-2cf1dc4d],
        ._h3[data-v-2cf1dc4d],
        ._h4[data-v-2cf1dc4d],
        ._h5[data-v-2cf1dc4d],
        ._h6[data-v-2cf1dc4d] {
            display: block;
            font-weight: 700
        }

        ._image[data-v-2cf1dc4d] {
            height: 1px
        }

        ._ins[data-v-2cf1dc4d] {
            text-decoration: underline
        }

        ._li[data-v-2cf1dc4d] {
            display: list-item
        }

        ._ol[data-v-2cf1dc4d] {
            list-style-type: decimal
        }

        ._ol[data-v-2cf1dc4d],
        ._ul[data-v-2cf1dc4d] {
            display: block;
            padding-left: 40px;
            margin: 1em 0
        }

        ._q[data-v-2cf1dc4d]::before {
            content: '"'
        }

        ._q[data-v-2cf1dc4d]::after {
            content: '"'
        }

        ._sub[data-v-2cf1dc4d] {
            font-size: smaller;
            vertical-align: sub
        }

        ._sup[data-v-2cf1dc4d] {
            font-size: smaller;
            vertical-align: super
        }

        ._thead[data-v-2cf1dc4d],
        ._tbody[data-v-2cf1dc4d],
        ._tfoot[data-v-2cf1dc4d] {
            display: table-row-group
        }

        ._tr[data-v-2cf1dc4d] {
            display: table-row
        }

        ._td[data-v-2cf1dc4d],
        ._th[data-v-2cf1dc4d] {
            display: table-cell;
            vertical-align: middle
        }

        ._th[data-v-2cf1dc4d] {
            font-weight: 700;
            text-align: center
        }

        ._ul[data-v-2cf1dc4d] {
            list-style-type: disc
        }

        ._ul ._ul[data-v-2cf1dc4d] {
            margin: 0;
            list-style-type: circle
        }

        ._ul ._ul ._ul[data-v-2cf1dc4d] {
            list-style-type: square
        }

        ._abbr[data-v-2cf1dc4d],
        ._b[data-v-2cf1dc4d],
        ._code[data-v-2cf1dc4d],
        ._del[data-v-2cf1dc4d],
        ._em[data-v-2cf1dc4d],
        ._i[data-v-2cf1dc4d],
        ._ins[data-v-2cf1dc4d],
        ._label[data-v-2cf1dc4d],
        ._q[data-v-2cf1dc4d],
        ._span[data-v-2cf1dc4d],
        ._strong[data-v-2cf1dc4d],
        ._sub[data-v-2cf1dc4d],
        ._sup[data-v-2cf1dc4d] {
            display: inline
        }
    </style>
    <style type="text/css">
        /* 根节点样式 */

        ._root[data-v-35fac40f] {
            overflow: auto;
            -webkit-overflow-scrolling: touch
        }

        /* 长按复制 */

        ._select[data-v-35fac40f] {
            -webkit-user-select: text;
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

        a[data-v-0fb526cb] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-0fb526cb] {
            color: #5462de
        }

        a.link[data-v-0fb526cb] {
            color: #5462de
        }

        uni-view[data-v-0fb526cb],
        uni-scroll-view[data-v-0fb526cb],
        uni-swiper-item[data-v-0fb526cb] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-tabbar[data-v-0fb526cb] {
            display: flex;
            flex-direction: column;
            flex: 1;
            justify-content: center
        }

        .u-tabbar__content[data-v-0fb526cb] {
            display: flex;
            flex-direction: column;
            background-color: #fff;
            border: none
        }

        .u-tabbar__content__item-wrapper[data-v-0fb526cb] {
            height: 54px;
            display: flex;
            flex-direction: row
        }

        .u-tabbar--fixed[data-v-0fb526cb] {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0
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

        a[data-v-739c4cc8] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-739c4cc8] {
            color: #5462de
        }

        a.link[data-v-739c4cc8] {
            color: #5462de
        }

        uni-view[data-v-739c4cc8],
        uni-scroll-view[data-v-739c4cc8],
        uni-swiper-item[data-v-739c4cc8] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-tabbar-item[data-v-739c4cc8] {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex: 1
        }

        .u-tabbar-item__icon[data-v-739c4cc8] {
            display: flex;
            flex-direction: row;
            position: relative;
            width: 75px;
            justify-content: center
        }

        .u-tabbar-item__text[data-v-739c4cc8] {
            margin-top: 2px;
            font-size: 10px;
            color: #999
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

        a[data-v-fa2b2b42] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-fa2b2b42] {
            color: #5462de
        }

        a.link[data-v-fa2b2b42] {
            color: #5462de
        }

        .tabbar-icon[data-v-fa2b2b42] {
            height: 21px;
            width: 21px
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

        a[data-v-12c673f2] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-12c673f2] {
            color: #5462de
        }

        a.link[data-v-12c673f2] {
            color: #5462de
        }

        .overlay-wrap[data-v-12c673f2] {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            flex: 1
        }

        .corner[data-v-12c673f2] {
            margin: 5px 0px;
            margin-right: 2px;
            background: #fff;
            box-shadow: 0 1px 10px 0 rgba(0, 0, 0, .05);
            border-radius: 10px;
            padding: 15px 0px;
            position: relative
        }

        .corner__item[data-v-12c673f2] {
            display: flex;
            align-items: center;
            color: #333;
            font-size: 12px;
            padding: 8px 10px;
            min-width: 150px;
            border-top: solid 1px #f2f2f2
        }

        .corner__item--right[data-v-12c673f2] {
            display: flex;
            flex-direction: column;
            width: 100%;
            text-align: left
        }

        .corner__item--right uni-text[data-v-12c673f2]:first-child {
            font-size: 13px
        }

        .corner__item--right uni-text[data-v-12c673f2]:last-child {
            font-size: 11px;
            color: #999
        }

        .corner__item.active[data-v-12c673f2] {
            background-color: #f1f1f1
        }

        .corner__item[data-v-12c673f2]:last-child {
            border-bottom: solid 1px #f2f2f2
        }

        .corner__arrow[data-v-12c673f2],
        .corner__arrow[data-v-12c673f2]::after {
            position: absolute;
            display: block;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            border-width: 6px
        }

        .corner__arrow[data-v-12c673f2] {
            -webkit-filter: drop-shadow(0 2px 12px rgba(0, 0, 0, .03));
            filter: drop-shadow(0 2px 12px rgba(0, 0, 0, .03));
            top: -6px;
            right: 8%;
            margin-right: 3px;
            border-top-width: 0;
            border-bottom-color: #ebeef5
        }

        .corner__arrow[data-v-12c673f2]::after {
            content: " ";
            top: 1px;
            margin-left: -6px;
            border-top-width: 0;
            border-bottom-color: #fff
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

        a[data-v-395d9e2c] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-395d9e2c] {
            color: #5462de
        }

        a.link[data-v-395d9e2c] {
            color: #5462de
        }

        .panel[data-v-395d9e2c] {
            width: 100%;
            color: #333;
            font-size: 14px;
            line-height: 18px;
            display: flex;
            flex-direction: column
        }

        .panel__t[data-v-395d9e2c] {
            padding-top: 15px;
            height: 25px
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

        a[data-v-7edaee84] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-7edaee84] {
            color: #5462de
        }

        a.link[data-v-7edaee84] {
            color: #5462de
        }

        .navi-left-img[data-v-7edaee84] {
            width: 27px;
            height: 27px
        }

        .info[data-v-7edaee84] {
            display: flex;
            align-items: center;
            font-size: 15px;
            color: #333
        }

        .info-icon[data-v-7edaee84] {
            width: 27px;
            height: 27px;
            border-radius: 50px;
            margin-right: 7px
        }

        .navi-right .img[data-v-7edaee84] {
            width: 16px;
            height: 19px
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

        a[data-v-0d4aa658] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-0d4aa658] {
            color: #5462de
        }

        a.link[data-v-0d4aa658] {
            color: #5462de
        }

        .item[data-v-0d4aa658] {
            width: 172px;
            margin-top: 10px;
            margin-left: 10px;
            display: flex;
            flex-direction: column;
            background-color: #fff
        }

        .item.pc[data-v-0d4aa658] {
            box-sizing: border-box;
            width: 312px;
            margin-left: 0px;
            margin-top: 25px;
            box-shadow: 0 0 23px 0 rgba(0, 0, 0, .1);
            border-radius: 15px;
            overflow: hidden;
            padding: 7px
        }

        .item.pc[data-v-0d4aa658]:not(:nth-of-type(4n+1)) {
            margin-left: 17px
        }

        .img[data-v-0d4aa658] {
            width: 172px;
            height: 172px
        }

        .img.pc[data-v-0d4aa658] {
            width: 300px;
            height: 300px;
            border-radius: 15px
        }

        .title[data-v-0d4aa658] {
            font-size: 14px;
            padding: 0px 10px;
            padding-top: 8px;
            color: #333
        }

        .title.pc[data-v-0d4aa658] {
            font-size: 15px
        }

        .title.ding[data-v-0d4aa658] {
            margin-bottom: 10px
        }

        .info[data-v-0d4aa658] {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 10px 10px;
            padding-top: 6px
        }

        .info .price[data-v-0d4aa658] {
            color: #333;
            font-size: 15px
        }

        .info .left[data-v-0d4aa658] {
            color: #97a1a9;
            font-size: 12px
        }

        .info.pc .price[data-v-0d4aa658] {
            font-size: 17px
        }

        .info.pc .left[data-v-0d4aa658] {
            font-size: 13px
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

        a[data-v-df4f8c2a] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-df4f8c2a] {
            color: #5462de
        }

        a.link[data-v-df4f8c2a] {
            color: #5462de
        }

        .container[data-v-df4f8c2a] {
            display: flex;
            flex-direction: column
        }

        .navi-img[data-v-df4f8c2a] {
            width: 20px;
            height: 20px
        }

        .header[data-v-df4f8c2a] {
            padding: 0px 10px;
            padding-bottom: 10px;
            background-color: #fff
        }

        .notice[data-v-df4f8c2a] {
            padding: 5px 0px;
            padding-right: 15px;
            display: flex;
            flex-direction: row;
            align-items: center;
            background-color: #fff
        }

        .notice__info[data-v-df4f8c2a] {
            flex: 1
        }

        .notice__more[data-v-df4f8c2a] {
            height: 27px;
            padding: 0px 7px;
            border-radius: 100px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            background-color: #1975ff
        }

        .notice__more .title[data-v-df4f8c2a] {
            font-size: 10px;
            color: #fff
        }

        .notice__more .img[data-v-df4f8c2a] {
            width: 5px;
            height: 9px;
            margin-left: 3px
        }

        .intro[data-v-df4f8c2a] {
            margin-top: 10px;
            padding: 10px 10px;
            background-color: #fff
        }

        .intro__img[data-v-df4f8c2a] {
            width: 355px;
            height: 189px
        }

        .intro__img+.intro__img[data-v-df4f8c2a] {
            margin-top: 10px
        }

        .intro__item[data-v-df4f8c2a] {
            display: flex;
            flex-direction: row;
            justify-content: space-between
        }

        .intro__item .icon[data-v-df4f8c2a] {
            width: 160px;
            height: 111px
        }

        .intro__item .info[data-v-df4f8c2a] {
            width: 185px
        }

        .intro__item .info__title[data-v-df4f8c2a] {
            color: #000;
            font-size: 15px;
            font-weight: 600
        }

        .intro__item .info__content[data-v-df4f8c2a] {
            height: 90px;
            overflow: hidden
        }

        .intro__item+.intro__item[data-v-df4f8c2a] {
            margin-top: 20px
        }

        .func[data-v-df4f8c2a] {
            margin-top: 10px;
            display: flex;
            flex-direction: row;
            align-items: center;
            background: #fff;
            padding: 10px 10px
        }

        .func__item[data-v-df4f8c2a] {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .func__item .title[data-v-df4f8c2a] {
            margin-top: 4px;
            font-size: 12px;
            font-weight: 500;
            color: #000
        }

        .func__item .img[data-v-df4f8c2a] {
            width: 30px;
            height: 30px
        }

        .func__item+.func__item[data-v-df4f8c2a] {
            margin-left: 10px
        }

        .list[data-v-df4f8c2a] {
            margin-top: 10px;
            padding: 20px 10px;
            display: flex;
            flex-direction: column;
            background-color: #fff
        }

        .list__title[data-v-df4f8c2a] {
            display: flex;
            flex-direction: row;
            align-items: center
        }

        .list__title .line[data-v-df4f8c2a] {
            width: 4px;
            height: 14px;
            background: #1975ff;
            border-radius: 2px
        }

        .list__title .title[data-v-df4f8c2a] {
            margin-left: 5px;
            color: #000;
            font-size: 16px;
            font-weight: 600
        }

        .list__info[data-v-df4f8c2a] {
            margin-top: 12px
        }

        .list__info .banner__img[data-v-df4f8c2a] {
            width: 355px;
            height: 200px
        }

        .list__info .content[data-v-df4f8c2a] {
            margin-top: 10px;
            font-size: 14px;
            line-height: 17px
        }

        .items[data-v-df4f8c2a] {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap
        }

        .model_title[data-v-df4f8c2a] {
            text-align: center;
            padding: 20px 0;
            font-size: 16px;
            font-weight: 700
        }

        .modelContent[data-v-df4f8c2a] {
            width: 335px;
            box-sizing: border-box;
            padding: 10px 30px;
            padding-bottom: 20px;
            background-color: #fff;
            border-radius: 10px
        }

        .modelContent .info[data-v-df4f8c2a] {
            text-align: left;
            color: #333;
            font-size: 14px;
            margin: 30px 0
        }

        .modelContent .btn-box[data-v-df4f8c2a] {
            width: 100px;
            max-width: 100px;
            margin-left: 90px
        }
    </style>
    <script charset="utf-8" src="/static/js/pages-profit-profit.3b009c24.js"></script>
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

        a[data-v-88022230] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-88022230] {
            color: #5462de
        }

        a.link[data-v-88022230] {
            color: #5462de
        }

        uni-view[data-v-88022230],
        uni-scroll-view[data-v-88022230],
        uni-swiper-item[data-v-88022230] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-loadmore[data-v-88022230] {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            flex: 1
        }

        .u-loadmore__content[data-v-88022230] {
            margin: 0 15px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center
        }

        .u-loadmore__content__icon-wrap[data-v-88022230] {
            margin-right: 8px
        }

        .u-loadmore__content__text[data-v-88022230] {
            font-size: 14px;
            color: #606266
        }

        .u-loadmore__content__dot-text[data-v-88022230] {
            font-size: 15px;
            color: #909193
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

        a[data-v-9ab2daa2] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-9ab2daa2] {
            color: #5462de
        }

        a.link[data-v-9ab2daa2] {
            color: #5462de
        }

        .desc-theme[data-v-9ab2daa2] {
            color: #313131 !important
        }

        .header[data-v-9ab2daa2] {
            background-color: #fff;
            padding: 15px 10px
        }

        .header-info[data-v-9ab2daa2] {
            color: #000;
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .header-info-desc[data-v-9ab2daa2] {
            font-size: 16px
        }

        .header-info-val[data-v-9ab2daa2] {
            font-size: 29px
        }

        .header-info-tip[data-v-9ab2daa2] {
            font-size: 14px
        }

        .header-dtl[data-v-9ab2daa2] {
            padding-top: 16px;
            display: flex;
            align-items: center
        }

        .header-item[data-v-9ab2daa2] {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center
        }

        .header-item-val[data-v-9ab2daa2] {
            font-size: 18px
        }

        .header-item-desc[data-v-9ab2daa2] {
            font-size: 14px
        }

        .asset[data-v-9ab2daa2] {
            margin: 10px 12px;
            width: 351px;
            padding: 15px 12px;
            box-sizing: border-box;
            background: url(/static/img/me/profit_bg.png) no-repeat;
            background-size: 100% 100%;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .asset-my[data-v-9ab2daa2] {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 14px
        }

        .asset-rate[data-v-9ab2daa2] {
            padding-top: 5px;
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .asset-rate-val[data-v-9ab2daa2] {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .asset-rate-val .big[data-v-9ab2daa2] {
            font-size: 27px
        }

        .asset-rate-val .small[data-v-9ab2daa2] {
            margin-left: 5px;
            font-size: 14px
        }

        .asset-rate-desc[data-v-9ab2daa2] {
            display: flex;
            align-items: center;
            font-size: 14px
        }

        .asset-tip[data-v-9ab2daa2] {
            font-size: 12px
        }

        .record[data-v-9ab2daa2] {
            margin: 10px 12px
        }

        .record-title[data-v-9ab2daa2] {
            font-size: 15px
        }

        .record-item[data-v-9ab2daa2] {
            margin-top: 10px;
            background-color: #fff;
            padding: 10px 10px;
            border-radius: 7px;
            font-size: 14px
        }

        .record-item-l[data-v-9ab2daa2] {
            display: flex;
            align-items: center;
            justify-content: space-between
        }
    </style>
    <script charset="utf-8" src="/static/js/pages-preference-detail~pages-screen-screen~pages-stock-stock.ac5410ec.js"></script>
    <script charset="utf-8" src="/static/js/pages-stock-stock.a934c1bb.js"></script>
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
    <style type="text/css">
        .lime-echart[data-v-8fb67bc2] {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .lime-echart__canvas[data-v-8fb67bc2] {
            width: 100%;
            height: 100%;
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

        a[data-v-696bb61f] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-696bb61f] {
            color: #5462de
        }

        a.link[data-v-696bb61f] {
            color: #5462de
        }

        *[data-v-696bb61f] {
            box-sizing: border-box
        }

        .container[data-v-696bb61f] {
            width: 100%;
            overflow: hidden;
            background-color: #eaf4ff
        }

        .container-card[data-v-696bb61f] {
            box-sizing: border-box;
            position: relative;
            width: 100%;
            height: auto;
            background-color: #fff;
            margin-top: 10px;
            padding: 16px
        }

        .container-card .price[data-v-696bb61f] {
            position: absolute;
            z-index: 10;
            top: 18px;
            left: 25px;
            width: 100%;
            padding-left: 5px;
            font-size: 14px;
            display: flex;
            align-items: center
        }

        .container-card .price-chg[data-v-696bb61f] {
            margin-left: 30px;
            color: #08ac00
        }

        .container-card-chart[data-v-696bb61f] {
            min-height: 300px
        }

        .container-card-label[data-v-696bb61f] {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center
        }

        .container-card-label-left[data-v-696bb61f] {
            font-weight: 600;
            font-size: 14px;
            color: #000
        }

        .container-card-label-right[data-v-696bb61f] {
            display: flex;
            flex-direction: row;
            justify-content: end;
            align-items: center
        }

        .container-card-label-right .desc[data-v-696bb61f] {
            margin-left: 2px;
            font-size: 14px;
            color: #999
        }

        .container-card-label-right-text[data-v-696bb61f] {
            font-weight: 600;
            font-size: 14px;
            color: #000;
            margin-left: 10px
        }

        .container-card-label-right-img[data-v-696bb61f] {
            min-width: 5px;
            height: 24px
        }

        .container-card-input[data-v-696bb61f] {
            height: 49px;
            background-color: #eeeff5;
            border-radius: 24px;
            box-sizing: border-box;
            padding-right: 20px !important;
            margin: 15px 0 24px
        }

        .container-card-input-img[data-v-696bb61f] {
            min-width: 5px;
            height: 31px
        }

        .container-card-input-text[data-v-696bb61f] {
            font-weight: 400;
            font-size: 15px;
            color: #333;
            margin-left: 5px
        }

        .container-card-input[data-v-696bb61f] .uni-input-placeholder,
        .container-card-input[data-v-696bb61f] .uni-input-input {
            text-align: right;
            color: #333 !important
        }

        .container-card-btn[data-v-696bb61f] {
            width: 100%;
            height: 50px;
            background-color: #2379fb;
            border-radius: 25px;
            text-align: center;
            font-weight: 600;
            font-size: 18px;
            color: #fff;
            line-height: 50px;
            margin-top: 16px
        }
    </style>
    <script charset="utf-8" src="/static/js/pages-AI-account.b8ab3fee.js"></script>
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

        a[data-v-75e514e4] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-75e514e4] {
            color: #5462de
        }

        a.link[data-v-75e514e4] {
            color: #5462de
        }

        uni-view[data-v-75e514e4],
        uni-scroll-view[data-v-75e514e4],
        uni-swiper-item[data-v-75e514e4] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-scroll-list[data-v-75e514e4] {
            padding-bottom: 10px
        }

        .u-scroll-list__scroll-view[data-v-75e514e4] {
            display: flex;
            flex-direction: row
        }

        .u-scroll-list__scroll-view__content[data-v-75e514e4] {
            display: flex;
            flex-direction: row
        }

        .u-scroll-list__indicator[data-v-75e514e4] {
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-top: 15px
        }

        .u-scroll-list__indicator__line[data-v-75e514e4] {
            width: 60px;
            height: 4px;
            border-radius: 100px;
            overflow: hidden
        }

        .u-scroll-list__indicator__line__bar[data-v-75e514e4] {
            width: 20px;
            height: 4px;
            border-radius: 100px
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

        a[data-v-00e298e6] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-00e298e6] {
            color: #5462de
        }

        a.link[data-v-00e298e6] {
            color: #5462de
        }

        uni-view[data-v-00e298e6],
        uni-scroll-view[data-v-00e298e6],
        uni-swiper-item[data-v-00e298e6] {
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            flex-basis: auto;
            align-items: stretch;
            align-content: flex-start
        }

        .u-image[data-v-00e298e6] {
            position: relative;
            transition: opacity .5s ease-in-out
        }

        .u-image__image[data-v-00e298e6] {
            width: 100%;
            height: 100%
        }

        .u-image__loading[data-v-00e298e6],
        .u-image__error[data-v-00e298e6] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            background-color: #f3f4f6;
            color: #909193;
            font-size: 23px
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

        a[data-v-42305694] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-42305694] {
            color: #5462de
        }

        a.link[data-v-42305694] {
            color: #5462de
        }

        .scroll-list[data-v-42305694] {
            width: 1920px
        }

        .list[data-v-42305694] {
            display: flex;
            padding-left: 16px;
            gap: 0px 5px;
            height: 150px
        }

        .treasure[data-v-42305694] {
            text-align: center
        }

        .treasure-img[data-v-42305694] {
            min-width: 5px;
            height: 109px
        }

        .treasure-img-wait[data-v-42305694] {
            margin-top: -10px;
            margin-bottom: 7px
        }

        .treasure-img-has[data-v-42305694] {
            margin-bottom: -2px
        }

        .treasure-time[data-v-42305694],
        .treasure-text[data-v-42305694] {
            font-weight: 600;
            font-size: 12px;
            color: #000
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

        a[data-v-f8b809ca] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-f8b809ca] {
            color: #5462de
        }

        a.link[data-v-f8b809ca] {
            color: #5462de
        }

        .panel[data-v-f8b809ca] {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px 20px;
            border-radius: 20px;
            width: 300px;
            box-sizing: border-box
        }

        .panel-img[data-v-f8b809ca] {
            margin-top: 10px;
            width: 150px;
            height: 91px
        }

        .panel-title[data-v-f8b809ca] {
            padding-top: 15px;
            font-size: 20px;
            color: #000;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .panel-title-amt[data-v-f8b809ca] {
            font-weight: 700;
            color: #fea032;
            font-size: 21px;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .panel-title-amt .coin[data-v-f8b809ca] {
            width: 22px;
            height: 22px
        }

        .panel-title-amt .val[data-v-f8b809ca] {
            margin-left: 5px
        }

        .panel-btn[data-v-f8b809ca] {
            margin: 20px 0px;
            margin-bottom: 10px;
            max-width: 200px
        }

        .panel-tip[data-v-f8b809ca] {
            width: 100%;
            font-size: 12px;
            line-height: 17px;
            text-align: left;
            color: #999
        }

        .panel-tip.title[data-v-f8b809ca] {
            color: #999;
            font-size: 13px
        }

        .panel-tip.desc[data-v-f8b809ca] {
            margin-top: 5px
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

        a[data-v-1cbeb3c8] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-1cbeb3c8] {
            color: #5462de
        }

        a.link[data-v-1cbeb3c8] {
            color: #5462de
        }

        .container[data-v-1cbeb3c8] {
            overflow: hidden;
            height: calc(100%);
            background-color: #eaf4ff
        }

        .container-body[data-v-1cbeb3c8] {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .container-body-row[data-v-1cbeb3c8] {
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            margin-top: 12px
        }

        .container-body-row-title[data-v-1cbeb3c8] {
            font-weight: 600;
            font-size: 16px;
            color: #000
        }

        .container-body-row-treasure[data-v-1cbeb3c8] {
            text-align: center
        }

        .container-body-row-treasure-img[data-v-1cbeb3c8] {
            min-width: 5px;
            height: 109px
        }

        .container-body-row-treasure-time[data-v-1cbeb3c8],
        .container-body-row-treasure-text[data-v-1cbeb3c8] {
            font-weight: 600;
            font-size: 12px;
            color: #000
        }

        .container-body-rank[data-v-1cbeb3c8] {
            display: flex;
            flex-direction: row;
            align-items: center
        }

        .container-body-rank-img[data-v-1cbeb3c8] {
            min-width: 5px;
            height: 19px;
            margin-left: 10px
        }

        .container-body-rank-text[data-v-1cbeb3c8] {
            font-weight: 400;
            font-size: 16px;
            color: #000;
            padding: 0 0 0 5px
        }

        .container-body-label[data-v-1cbeb3c8] {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-top: 16px
        }

        .container-body-label-text[data-v-1cbeb3c8] {
            font-weight: 600;
            font-size: 16px;
            color: #000;
            margin-left: 10px
        }

        .container-body-balance[data-v-1cbeb3c8] {
            font-weight: 600;
            font-size: 35px;
            color: #000;
            margin-top: 12px;
            display: flex;
            flex-direction: row;
            align-items: center
        }

        .container-body-balance-img[data-v-1cbeb3c8] {
            min-width: 5px;
            height: 40px;
            margin-right: 10px
        }

        .container-body-level[data-v-1cbeb3c8] {
            position: relative;
            width: 69px;
            height: 23px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: end
        }

        .container-body-level-img[data-v-1cbeb3c8] {
            min-width: 5px;
            height: 23px
        }

        .container-body-level-text[data-v-1cbeb3c8] {
            position: absolute;
            top: 0;
            right: 2px;
            width: 45px;
            height: 23px;
            font-weight: 600;
            font-size: 13px;
            color: #fff;
            font-style: italic;
            line-height: 23px;
            text-align: center
        }

        .container-body-bg[data-v-1cbeb3c8] {
            position: relative;
            width: 100%;
            margin-top: 52px
        }

        .container-body-bg-img[data-v-1cbeb3c8] {
            display: block;
            width: 180px;
            margin: auto;
            z-index: 1
        }

        .container-body-progress[data-v-1cbeb3c8] {
            margin-top: 12px;
            display: flex;
            flex-direction: row;
            align-items: center;
            font-weight: 700
        }

        .container-body-progress-img[data-v-1cbeb3c8] {
            min-width: 5px;
            height: 24px
        }

        .container-body-progress-value[data-v-1cbeb3c8] {
            font-size: 21px;
            color: #000;
            margin-left: 10px
        }

        .container-body-progress-label[data-v-1cbeb3c8] {
            font-size: 16px;
            color: #000
        }

        .container-body-progress-btn[data-v-1cbeb3c8] {
            font-size: 12px;
            margin-left: 10px;
            font-weight: 600;
            color: #2379fb
        }

        .container-body[data-v-1cbeb3c8] .u-line-progress,
        .container-body[data-v-1cbeb3c8] .u-line-progress__background,
        .container-body[data-v-1cbeb3c8] .u-line-progress__line {
            border-radius: unset !important
        }

        .container-body-btn[data-v-1cbeb3c8] {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            margin-top: 30px;
            box-sizing: border-box
        }

        .container-body-btn-item[data-v-1cbeb3c8] {
            flex: 1;
            text-align: center
        }

        .container-body-btn-item-img[data-v-1cbeb3c8] {
            min-width: 5px;
            height: 42px
        }

        .container-body-btn-item-text[data-v-1cbeb3c8],
        .container-body-btn-item-grade[data-v-1cbeb3c8] {
            font-weight: 400;
            font-size: 10px;
            color: #2c2c2c
        }

        .animation[data-v-1cbeb3c8] {
            position: fixed;
            font-weight: 700;
            font-size: 32px;
            color: #6c56f9;
            -webkit-animation: floatUpRight-data-v-1cbeb3c8 1s ease-out forwards;
            animation: floatUpRight-data-v-1cbeb3c8 1s ease-out forwards;
            z-index: 2;
            margin-top: -30px;
            margin-left: -13px
        }

        @-webkit-keyframes floatUpRight-data-v-1cbeb3c8 {
            0% {
                opacity: 1;
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(-150px);
                transform: translateY(-150px)
            }
        }

        @keyframes floatUpRight-data-v-1cbeb3c8 {
            0% {
                opacity: 1;
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(-150px);
                transform: translateY(-150px)
            }
        }

        .ripple[data-v-1cbeb3c8] {
            position: fixed;
            border-radius: 50%;
            background: rgba(108, 86, 249, .3);
            -webkit-transform: scale(0);
            transform: scale(0);
            -webkit-animation: ripple-animation-data-v-1cbeb3c8 .6s linear;
            animation: ripple-animation-data-v-1cbeb3c8 .6s linear;
            pointer-events: none;
            width: 32px;
            /* Adjust as needed */
            height: 32px;
            /* Adjust as needed */
            margin-top: -16px;
            margin-left: -16px
        }

        @-webkit-keyframes ripple-animation-data-v-1cbeb3c8 {
            to {
                -webkit-transform: scale(3);
                transform: scale(3);
                opacity: 0
            }
        }

        @keyframes ripple-animation-data-v-1cbeb3c8 {
            to {
                -webkit-transform: scale(3);
                transform: scale(3);
                opacity: 0
            }
        }

        .img-clicked[data-v-1cbeb3c8] {
            -webkit-animation: clickEffect-data-v-1cbeb3c8 .3s ease;
            animation: clickEffect-data-v-1cbeb3c8 .3s ease
        }

        @-webkit-keyframes clickEffect-data-v-1cbeb3c8 {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            50% {
                -webkit-transform: scale(.99);
                transform: scale(.99)
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes clickEffect-data-v-1cbeb3c8 {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
            50% {
                -webkit-transform: scale(.99);
                transform: scale(.99)
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        .modal-body[data-v-1cbeb3c8] {
            position: relative;
            height: auto;
            padding: 24px
        }

        .modal-body-row[data-v-1cbeb3c8] {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-top: 12px
        }

        .modal-body-row-gold[data-v-1cbeb3c8] {
            min-height: 5px;
            width: 79px
        }

        .modal-body-row-title[data-v-1cbeb3c8] {
            font-weight: 600;
            font-size: 18px;
            color: #000
        }

        .modal-body-row-text[data-v-1cbeb3c8] {
            font-weight: 400;
            font-size: 16px;
            color: #2c3044;
            line-height: 20px;
            text-align: center
        }

        .modal-body-row-small-gold[data-v-1cbeb3c8] {
            min-width: 5px;
            height: 16px;
            margin-right: 10px
        }

        .modal-body-row-btn[data-v-1cbeb3c8] {
            width: 100%;
            height: 52px;
            background: #000;
            border-radius: 4px;
            font-weight: 600;
            font-size: 18px;
            color: #e7efec;
            line-height: 52px;
            text-align: center
        }

        [data-v-1cbeb3c8] .u-popup__content {
            background-color: #eaf4ff
        }

        .red-envelope[data-v-1cbeb3c8] .u-popup__content {
            background-color: unset
        }

        .red-envelope-img[data-v-1cbeb3c8] {
            width: 170px;
            height: auto
        }
    </style>
    <script charset="utf-8" src="/static/js/pages-preference-list.2e38d35a.js"></script>
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

        a[data-v-47bdc721] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-47bdc721] {
            color: #5462de
        }

        a.link[data-v-47bdc721] {
            color: #5462de
        }

        .header-box[data-v-47bdc721] {
            position: fixed;
            width: 100%;
            height: 38px;
            background-color: #fff;
            display: flex;
            justify-content: space-between;
            padding: 12px;
            z-index: 99;
            box-sizing: border-box
        }

        .header-box .header-item[data-v-47bdc721] {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 14px;
            font-weight: 600;
            overflow: hidden
        }

        .header-box .header-item .header-item-text[data-v-47bdc721] {
            display: inline-block;
            max-width: 73px;
            padding: 0 4px 0 0;
            line-height: 16px;
            word-break: break-all;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            box-sizing: border-box;
            text-align: right
        }

        .header-popup[data-v-47bdc721] {
            position: absolute;
            background-color: rgba(0, 0, 0, .5019607843137255);
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 98;
            box-sizing: border-box
        }

        .header-popup .header-popup-body[data-v-47bdc721] {
            padding: 12px;
            background-color: #fff;
            border-top: 1px solid rgba(0, 0, 0, .3137254901960784);
            display: flex;
            flex-direction: row;
            flex-wrap: wrap
        }

        .header-popup .header-popup-body .header-popup-body-item[data-v-47bdc721] {
            height: 30px;
            border: 1px solid #f5f6f8;
            border-radius: 6px;
            display: flex;
            align-items: center;
            cursor: pointer;
            background-color: #fff;
            padding: 0 8px;
            margin: 0 8px 8px;
            font-size: 12px
        }

        .header-popup .header-popup-body .header-popup-body-item-active[data-v-47bdc721] {
            color: #1975ff;
            border: 1px solid #1975ff;
            background-color: rgba(25, 117, 255, .27058823529411763)
        }

        .header-popup .header-popup-body .header-popup-body-item[data-v-47bdc721]:hover {
            color: #1975ff;
            border: 1px solid #1975ff;
            background-color: rgba(25, 117, 255, .27058823529411763)
        }

        .goods-list-box[data-v-47bdc721] {
            margin-top: 50px;
            z-index: 97
        }

        .goods-list-box .goods-list-item[data-v-47bdc721] {
            padding: 12px;
            background-color: #fff;
            border-bottom: 1px solid #999;
            display: flex
        }

        .goods-list-box .goods-list-item .goods-img-box[data-v-47bdc721] {
            width: 110px;
            height: 110px;
            border-radius: 8px;
            overflow: hidden;
            position: relative
        }

        .goods-list-box .goods-list-item .goods-img-box .goods-img[data-v-47bdc721] {
            width: 100%;
            height: 100%
        }

        .goods-list-box .goods-list-item .goods-img-box .goods-tag[data-v-47bdc721] {
            position: absolute;
            display: inline-block;
            color: #000;
            top: 0;
            left: 0;
            height: 20px;
            border-bottom-right-radius: 8px;
            padding: 0 2px
        }

        .goods-list-box .goods-list-item .goods-img-box .goods-tag1[data-v-47bdc721] {
            background-color: #f8b100
        }

        .goods-list-box .goods-list-item .goods-img-box .goods-tag2[data-v-47bdc721] {
            background-color: #c2c2c2
        }

        .goods-list-box .goods-list-item .goods-img-box .goods-tag3[data-v-47bdc721] {
            background-color: #e2b894
        }

        .goods-list-box .goods-list-item .goods-text-box[data-v-47bdc721] {
            flex: 1;
            box-sizing: border-box;
            padding-left: 12px;
            font-size: 12px
        }

        .goods-list-box .goods-list-item .goods-text-box .goods-text-title-box[data-v-47bdc721] {
            height: 20px;
            overflow: hidden
        }

        .goods-list-box .goods-list-item .goods-text-box .goods-text-title-box .goods-text-title-tag[data-v-47bdc721] {
            display: inline-block;
            background-color: #f89408;
            color: #fff;
            height: 20px;
            box-sizing: border-box;
            padding: 0 4px;
            font-size: 12px;
            border-radius: 4px
        }

        .goods-list-box .goods-list-item .goods-text-box .goods-text-title-box .goods-text-title[data-v-47bdc721] {
            height: 20px;
            font-size: 14px;
            padding-left: 12px;
            font-weight: 600
        }

        .goods-list-box .goods-list-item .goods-text-box .goods-text-num-box[data-v-47bdc721] {
            display: flex;
            height: 30px;
            line-height: 30px
        }

        .goods-list-box .goods-list-item .goods-text-box .goods-text-num-box .goods-text-num-item[data-v-47bdc721] {
            flex: 1;
            color: #999
        }

        .goods-list-box .goods-list-item .goods-text-box .goods-text-category[data-v-47bdc721] {
            display: inline-block;
            height: 20px;
            line-height: 20px;
            padding: 0 4px;
            border: 1px solid #999;
            margin: 6px 0
        }

        .list-body-row[data-v-47bdc721] {
            background-color: #fff
        }

        .list-body-row .list-body-row-item-detail-box[data-v-47bdc721] {
            padding: 12px;
            display: flex
        }

        .list-body-row .list-body-row-item-detail-box .detail-img-box[data-v-47bdc721] {
            width: 110px;
            height: 110px;
            border-radius: 8px;
            overflow: hidden;
            position: relative
        }

        .list-body-row .list-body-row-item-detail-box .detail-img-box .detail-img[data-v-47bdc721] {
            width: 100%;
            height: 100%
        }

        .list-body-row .list-body-row-item-detail-box .detail-text-box[data-v-47bdc721] {
            flex: 1;
            box-sizing: border-box;
            padding-left: 12px;
            font-size: 12px
        }

        .list-body-row .list-body-row-item-detail-box .detail-text-box .detail-text-title[data-v-47bdc721] {
            height: 20px;
            overflow: hidden
        }

        .list-body-row .list-body-row-item-detail-box .detail-text-box .detail-text-title .detail-text-title-tag[data-v-47bdc721] {
            display: inline-block;
            background-color: #f89408;
            color: #fff;
            height: 20px;
            line-height: 20px;
            padding: 0 4px;
            border-radius: 4px
        }

        .list-body-row .list-body-row-item-detail-box .detail-text-box .detail-text-title .detail-text-title-name[data-v-47bdc721] {
            height: 20px;
            font-size: 14px;
            padding-left: 12px;
            font-weight: 600
        }

        .list-body-row .list-body-row-item-detail-box .detail-text-box .detail-text-category[data-v-47bdc721] {
            display: inline-block;
            height: 20px;
            line-height: 20px;
            padding: 0 4px;
            border: 1px solid #999;
            margin: 6px 0
        }

        .list-body-row .list-body-row-item-detail-box .detail-text-box .detail-text-price[data-v-47bdc721] {
            display: flex;
            font-size: 18px;
            height: 30px;
            line-height: 30px;
            color: #f04664;
            justify-content: space-between
        }

        .list-body-row .detail-text-lebal[data-v-47bdc721] {
            padding: 12px;
            display: flex
        }

        .list-body-row .detail-text-lebal .detail-text-static[data-v-47bdc721] {
            width: 24%;
            font-size: 12px
        }

        .list-body-row .detail-text-lebal .detail-text-static .detail-text-static-title[data-v-47bdc721] {
            color: #999
        }

        .list-body-row .detail-text-lebal .detail-text-static .detail-text-static-num[data-v-47bdc721] {
            line-height: 30px;
            font-weight: 600;
            font-size: 16px
        }

        .list-body-row .list-body-row-item-header[data-v-47bdc721] {
            position: relative;
            width: 100%;
            height: 50px;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            flex-direction: row;
            align-items: center;
            font-size: 16px
        }

        .list-body-row .list-body-row-item-header .list-body-row-item-header-item[data-v-47bdc721] {
            position: relative;
            margin: 0 19px;
            cursor: pointer;
            font-size: 14px;
            height: 100%;
            line-height: 50px
        }

        .list-body-row .list-body-row-item-header .list-body-row-item-header-item .list-body-row-item-header-item-line[data-v-47bdc721] {
            position: absolute;
            width: 100%;
            height: 4px;
            left: 0;
            bottom: 0
        }

        .list-body-row .analyze-header[data-v-47bdc721] {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 50px;
            padding: 10px 20px
        }

        .list-body-row .analyze-header .analyze-header-item[data-v-47bdc721] {
            font-size: 14px;
            font-weight: 600
        }

        .list-body-row .analyze-header .filter-btn-box[data-v-47bdc721] {
            display: flex
        }

        .list-body-row .analyze-header .filter-btn-box .filter-btn[data-v-47bdc721] {
            display: inline-block;
            border-width: 1px 0 1px 1px;
            border-style: solid;
            border-color: #ddd;
            border-image: initial;
            padding-left: 8px;
            padding-right: 8px;
            flex-shrink: 0;
            height: 36px;
            line-height: 36px;
            font-size: 14px;
            font-weight: 500;
            color: #dcdcdc
        }

        .list-body-row .analyze-header .filter-btn-box .filter-btn[data-v-47bdc721]:nth-child(1) {
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px
        }

        .list-body-row .analyze-header .filter-btn-box .filter-btn[data-v-47bdc721]:nth-child(5) {
            border-right-width: 1px;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px
        }

        .list-body-row .analyze-header .filter-btn-box .filter-btn-color[data-v-47bdc721] {
            border: 1px solid #0661fb;
            background: rgba(6, 97, 251, .05);
            color: #0661fb
        }

        .list-body-row .analyze-header .filter-btn-box .filter-btn-color2[data-v-47bdc721] {
            color: #f17751;
            background: rgba(241, 119, 81, .1);
            border: 1px solid #f17751
        }

        .list-body-row .analyze-header .filter-btn-box .filter-btn-color3[data-v-47bdc721] {
            color: #43c8a0;
            background: rgba(67, 200, 160, .1);
            border: 1px solid #43c8a0
        }

        .list-body-row .analyze-header.mobile[data-v-47bdc721] {
            height: 40px;
            padding: 0px 20px
        }

        .video-table-row[data-v-47bdc721] {
            padding: 12px
        }

        .video-table-row .video-table-video-box[data-v-47bdc721] {
            display: flex;
            line-height: 22px;
            border-bottom: 1px solid #999;
            padding-bottom: 12px
        }

        .video-table-row .video-table-video-box .video-table-video-img[data-v-47bdc721] {
            width: 75px;
            height: 100px
        }

        .video-table-row .video-table-video-box .video-table-video-text[data-v-47bdc721] {
            flex: 1;
            padding-left: 12px
        }

        .video-table-row .video-table-video-box .video-table-video-text .video-table-video-text-title[data-v-47bdc721] {
            font-size: 14px;
            word-break: break-all;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            max-height: 44px
        }

        .video-table-row .video-table-video-box .video-table-video-text .video-table-video-tag[data-v-47bdc721] {
            display: inline-block;
            background-color: #f89408;
            color: #fff;
            height: 20px;
            font-size: 12px;
            line-height: 20px;
            padding: 0 4px;
            border-radius: 4px;
            margin-top: 12px
        }
    </style>
    <script charset="utf-8" src="/static/js/pages-preference-detail.07a9801c.js"></script>
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
    <style type="text/css">
        .chart-e[data-v-40852a47] {
            height: 430px;
            padding: 0 20px
        }

        .chart-e.mobile[data-v-40852a47] {
            height: 240px;
            padding: 0px;
            padding-left: 10px
        }
    </style>
    <style type="text/css">
        .chart-e[data-v-00a978eb] {
            height: 430px;
            padding: 0 20px
        }

        .chart-e.mobile[data-v-00a978eb] {
            height: 240px;
            padding: 0px;
            padding-left: 10px
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

        a[data-v-7d081557] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-7d081557] {
            color: #5462de
        }

        a.link[data-v-7d081557] {
            color: #5462de
        }

        .header-box[data-v-7d081557] {
            position: fixed;
            width: 100%;
            height: 38px;
            background-color: #fff;
            display: flex;
            justify-content: space-between;
            padding: 12px;
            z-index: 99;
            box-sizing: border-box
        }

        .header-box .header-item[data-v-7d081557] {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 14px;
            font-weight: 600;
            overflow: hidden
        }

        .header-box .header-item .header-item-text[data-v-7d081557] {
            display: inline-block;
            max-width: 73px;
            padding: 0 4px 0 0;
            line-height: 16px;
            word-break: break-all;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            box-sizing: border-box;
            text-align: right
        }

        .header-popup[data-v-7d081557] {
            position: absolute;
            background-color: rgba(0, 0, 0, .5019607843137255);
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 98;
            box-sizing: border-box
        }

        .header-popup .header-popup-body[data-v-7d081557] {
            padding: 12px;
            background-color: #fff;
            border-top: 1px solid rgba(0, 0, 0, .3137254901960784);
            display: flex;
            flex-direction: row;
            flex-wrap: wrap
        }

        .header-popup .header-popup-body .header-popup-body-item[data-v-7d081557] {
            height: 30px;
            border: 1px solid #f5f6f8;
            border-radius: 6px;
            display: flex;
            align-items: center;
            cursor: pointer;
            background-color: #fff;
            padding: 0 8px;
            margin: 0 8px 8px;
            font-size: 12px
        }

        .header-popup .header-popup-body .header-popup-body-item-active[data-v-7d081557] {
            color: #1975ff;
            border: 1px solid #1975ff;
            background-color: rgba(25, 117, 255, .27058823529411763)
        }

        .header-popup .header-popup-body .header-popup-body-item[data-v-7d081557]:hover {
            color: #1975ff;
            border: 1px solid #1975ff;
            background-color: rgba(25, 117, 255, .27058823529411763)
        }

        .goods-list-box[data-v-7d081557] {
            margin-top: 50px;
            z-index: 97
        }

        .goods-list-box .goods-list-item[data-v-7d081557] {
            padding: 12px;
            background-color: #fff;
            border-bottom: 1px solid #999;
            display: flex
        }

        .goods-list-box .goods-list-item .goods-img-box[data-v-7d081557] {
            width: 110px;
            height: 110px;
            border-radius: 8px;
            overflow: hidden;
            position: relative
        }

        .goods-list-box .goods-list-item .goods-img-box .goods-img[data-v-7d081557] {
            width: 100%;
            height: 100%
        }

        .goods-list-box .goods-list-item .goods-img-box .goods-tag[data-v-7d081557] {
            position: absolute;
            display: inline-block;
            color: #000;
            top: 0;
            left: 0;
            height: 20px;
            border-bottom-right-radius: 8px;
            padding: 0 2px
        }

        .goods-list-box .goods-list-item .goods-img-box .goods-tag1[data-v-7d081557] {
            background-color: #f8b100
        }

        .goods-list-box .goods-list-item .goods-img-box .goods-tag2[data-v-7d081557] {
            background-color: #c2c2c2
        }

        .goods-list-box .goods-list-item .goods-img-box .goods-tag3[data-v-7d081557] {
            background-color: #e2b894
        }

        .goods-list-box .goods-list-item .goods-text-box[data-v-7d081557] {
            flex: 1;
            box-sizing: border-box;
            padding-left: 12px;
            font-size: 12px
        }

        .goods-list-box .goods-list-item .goods-text-box .goods-text-title-box[data-v-7d081557] {
            height: 20px;
            overflow: hidden
        }

        .goods-list-box .goods-list-item .goods-text-box .goods-text-title-box .goods-text-title-tag[data-v-7d081557] {
            display: inline-block;
            background-color: #f89408;
            color: #fff;
            height: 20px;
            box-sizing: border-box;
            padding: 0 4px;
            font-size: 12px;
            border-radius: 4px
        }

        .goods-list-box .goods-list-item .goods-text-box .goods-text-title-box .goods-text-title[data-v-7d081557] {
            height: 20px;
            font-size: 14px;
            padding-left: 12px;
            font-weight: 600
        }

        .goods-list-box .goods-list-item .goods-text-box .goods-text-num-box[data-v-7d081557] {
            display: flex;
            height: 30px;
            line-height: 30px
        }

        .goods-list-box .goods-list-item .goods-text-box .goods-text-num-box .goods-text-num-item[data-v-7d081557] {
            flex: 1;
            color: #999
        }

        .goods-list-box .goods-list-item .goods-text-box .goods-text-category[data-v-7d081557] {
            display: inline-block;
            height: 20px;
            line-height: 20px;
            padding: 0 4px;
            border: 1px solid #999;
            margin: 6px 0
        }

        .list-body-row[data-v-7d081557] {
            background-color: #fff
        }

        .list-body-row .list-body-row-item-detail-box[data-v-7d081557] {
            padding: 12px;
            display: flex
        }

        .list-body-row .list-body-row-item-detail-box .detail-img-box[data-v-7d081557] {
            width: 110px;
            height: 110px;
            border-radius: 8px;
            overflow: hidden;
            position: relative
        }

        .list-body-row .list-body-row-item-detail-box .detail-img-box .detail-img[data-v-7d081557] {
            width: 100%;
            height: 100%
        }

        .list-body-row .list-body-row-item-detail-box .detail-text-box[data-v-7d081557] {
            flex: 1;
            box-sizing: border-box;
            padding-left: 12px;
            font-size: 12px
        }

        .list-body-row .list-body-row-item-detail-box .detail-text-box .detail-text-title[data-v-7d081557] {
            height: 20px;
            overflow: hidden
        }

        .list-body-row .list-body-row-item-detail-box .detail-text-box .detail-text-title .detail-text-title-tag[data-v-7d081557] {
            display: inline-block;
            background-color: #f89408;
            color: #fff;
            height: 20px;
            line-height: 20px;
            padding: 0 4px;
            border-radius: 4px
        }

        .list-body-row .list-body-row-item-detail-box .detail-text-box .detail-text-title .detail-text-title-name[data-v-7d081557] {
            height: 20px;
            font-size: 14px;
            padding-left: 12px;
            font-weight: 600
        }

        .list-body-row .list-body-row-item-detail-box .detail-text-box .detail-text-category[data-v-7d081557] {
            display: inline-block;
            height: 20px;
            line-height: 20px;
            padding: 0 4px;
            border: 1px solid #999;
            margin: 6px 0
        }

        .list-body-row .list-body-row-item-detail-box .detail-text-box .detail-text-price[data-v-7d081557] {
            display: flex;
            font-size: 18px;
            height: 30px;
            line-height: 30px;
            color: #f04664;
            justify-content: space-between
        }

        .list-body-row .detail-text-lebal[data-v-7d081557] {
            padding: 12px;
            display: flex
        }

        .list-body-row .detail-text-lebal .detail-text-static[data-v-7d081557] {
            width: 24%;
            font-size: 12px
        }

        .list-body-row .detail-text-lebal .detail-text-static .detail-text-static-title[data-v-7d081557] {
            color: #999
        }

        .list-body-row .detail-text-lebal .detail-text-static .detail-text-static-num[data-v-7d081557] {
            line-height: 30px;
            font-weight: 600;
            font-size: 16px
        }

        .list-body-row .list-body-row-item-header[data-v-7d081557] {
            position: relative;
            width: 100%;
            height: 50px;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            flex-direction: row;
            align-items: center;
            font-size: 16px
        }

        .list-body-row .list-body-row-item-header .list-body-row-item-header-item[data-v-7d081557] {
            position: relative;
            margin: 0 19px;
            cursor: pointer;
            font-size: 14px;
            height: 100%;
            line-height: 50px
        }

        .list-body-row .list-body-row-item-header .list-body-row-item-header-item .list-body-row-item-header-item-line[data-v-7d081557] {
            position: absolute;
            width: 100%;
            height: 4px;
            left: 0;
            bottom: 0
        }

        .list-body-row .analyze-header[data-v-7d081557] {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 50px;
            padding: 10px 20px
        }

        .list-body-row .analyze-header .analyze-header-item[data-v-7d081557] {
            font-size: 14px;
            font-weight: 600
        }

        .list-body-row .analyze-header .filter-btn-box[data-v-7d081557] {
            display: flex
        }

        .list-body-row .analyze-header .filter-btn-box .filter-btn[data-v-7d081557] {
            display: inline-block;
            border-width: 1px 0 1px 1px;
            border-style: solid;
            border-color: #ddd;
            border-image: initial;
            padding-left: 8px;
            padding-right: 8px;
            flex-shrink: 0;
            height: 36px;
            line-height: 36px;
            font-size: 14px;
            font-weight: 500;
            color: #dcdcdc
        }

        .list-body-row .analyze-header .filter-btn-box .filter-btn[data-v-7d081557]:nth-child(1) {
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px
        }

        .list-body-row .analyze-header .filter-btn-box .filter-btn[data-v-7d081557]:nth-child(5) {
            border-right-width: 1px;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px
        }

        .list-body-row .analyze-header .filter-btn-box .filter-btn-color[data-v-7d081557] {
            border: 1px solid #0661fb;
            background: rgba(6, 97, 251, .05);
            color: #0661fb
        }

        .list-body-row .analyze-header .filter-btn-box .filter-btn-color2[data-v-7d081557] {
            color: #f17751;
            background: rgba(241, 119, 81, .1);
            border: 1px solid #f17751
        }

        .list-body-row .analyze-header .filter-btn-box .filter-btn-color3[data-v-7d081557] {
            color: #43c8a0;
            background: rgba(67, 200, 160, .1);
            border: 1px solid #43c8a0
        }

        .list-body-row .analyze-header.mobile[data-v-7d081557] {
            height: 40px;
            padding: 0px 20px
        }

        .video-table-row[data-v-7d081557] {
            padding: 12px
        }

        .video-table-row .video-table-video-box[data-v-7d081557] {
            display: flex;
            line-height: 22px;
            border-bottom: 1px solid #999;
            padding-bottom: 12px
        }

        .video-table-row .video-table-video-box .video-table-video-img[data-v-7d081557] {
            width: 75px;
            height: 100px
        }

        .video-table-row .video-table-video-box .video-table-video-text[data-v-7d081557] {
            flex: 1;
            padding-left: 12px
        }

        .video-table-row .video-table-video-box .video-table-video-text .video-table-video-text-title[data-v-7d081557] {
            font-size: 14px;
            word-break: break-all;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            max-height: 44px
        }

        .video-table-row .video-table-video-box .video-table-video-text .video-table-video-tag[data-v-7d081557] {
            display: inline-block;
            background-color: #f89408;
            color: #fff;
            height: 20px;
            font-size: 12px;
            line-height: 20px;
            padding: 0 4px;
            border-radius: 4px;
            margin-top: 12px
        }

        .analyze-data-box[data-v-7d081557] {
            display: flex;
            flex-flow: row wrap;
            padding: 10px 20px;
            margin: 10px 0px
        }

        .analyze-data-box .analyze-data-item[data-v-7d081557] {
            background-color: #f6f7f9;
            border-radius: 8px;
            padding: 10px 10px;
            width: 30%;
            box-sizing: border-box
        }

        .analyze-data-box .analyze-data-item .analyze-data-item-title[data-v-7d081557] {
            font-size: 12px;
            color: #a9b0b7
        }

        .analyze-data-box .analyze-data-item .analyze-data-item-num[data-v-7d081557] {
            font-size: 14px;
            font-weight: 600;
            line-height: 30px
        }

        .analyze-data-box .analyze-data-item[data-v-7d081557]:not(:nth-of-type(3n+1)) {
            margin-left: 3%
        }

        .analyze-data-box .analyze-data-item[data-v-7d081557]:nth-of-type(n+4) {
            margin-top: 10px
        }
    </style>
    <script charset="utf-8" src="/static/js/pages-screen-screen.632958e2.js"></script>
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

        a[data-v-2179732c] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-2179732c] {
            color: #5462de
        }

        a.link[data-v-2179732c] {
            color: #5462de
        }

        .progressBox[data-v-2179732c] {
            position: relative;
            margin: 0 auto;
            display: inline-block
        }

        .centerTxt[data-v-2179732c] {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            z-index: 99;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center
        }

        .centerTxt .num[data-v-2179732c] {
            font-size: 26px;
            color: #fff
        }

        .centerTxt .txt[data-v-2179732c] {
            font-size: 14px;
            color: #fff
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

        a[data-v-286b400c] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-286b400c] {
            color: #5462de
        }

        a.link[data-v-286b400c] {
            color: #5462de
        }

        .container[data-v-286b400c] {
            background-color: #fff;
            padding: 12px
        }

        .container .screen-time[data-v-286b400c] {
            font-size: 10px;
            color: #000;
            line-height: 10px;
            margin-bottom: 12px
        }

        .container .screen-item[data-v-286b400c] {
            position: relative;
            background-color: #fff;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 16px;
            box-sizing: border-box
        }

        .container .screen-item .screen-item-title[data-v-286b400c] {
            font-size: 14px;
            color: #000
        }

        .container .screen-item .swiper-btn[data-v-286b400c] {
            position: absolute;
            width: 14px;
            height: 25px;
            line-height: 25px;
            border-radius: 6px;
            padding: 0;
            bottom: 20px;
            color: #fff
        }

        .container .screen-item span[data-v-286b400c] {
            color: #fff
        }

        .container .GMV-box[data-v-286b400c] {
            padding: 8px 16px;
            background: linear-gradient(90deg, #6446ff, #7611ef);
            color: #fff
        }

        .container .GMV-box .GMV-box-header[data-v-286b400c] {
            text-align: center;
            margin-top: 16px
        }

        .container .GMV-box .GMV-box-header .GMV-box-header-item[data-v-286b400c] {
            display: inline-block
        }

        .container .GMV-box .GMV-box-header .GMV-box-header-item .GMV-text[data-v-286b400c] {
            font-size: 14px;
            font-weight: 600;
            text-align: center
        }

        .container .GMV-box .GMV-box-header .GMV-box-header-item .GMV-icon[data-v-286b400c] {
            width: 40px;
            height: 25px;
            background-color: #fff;
            color: #6446ff;
            font-size: 20px;
            font-weight: 600;
            line-height: 25px;
            text-align: center;
            border-radius: 3px
        }

        .container .GMV-box .GMV-box-header .GMV-box-header-item[data-v-286b400c]:nth-child(1) {
            width: 40px
        }

        .container .GMV-box .GMV-box-header .GMV-box-header-item[data-v-286b400c]:nth-child(2) {
            padding-left: 10px;
            font-size: 40px;
            font-weight: 600
        }

        .container .GMV-box .GMV-box-footer[data-v-286b400c] {
            display: flex;
            justify-content: space-around;
            margin: 20px 0 16px
        }

        .container .GMV-box .GMV-box-footer .GMV-item[data-v-286b400c] {
            text-align: center;
            font-weight: 600
        }

        .container .GMV-box .GMV-box-footer .GMV-item .GMV-item-value[data-v-286b400c] {
            font-size: 20px
        }

        .container .GMV-box .GMV-box-footer .GMV-item .GMV-item-label[data-v-286b400c] {
            margin-top: 8px;
            font-size: 12px
        }

        uni-swiper[data-v-286b400c] {
            height: 280px
        }

        .swiper-item .swiper-item-title[data-v-286b400c] {
            font-size: 22px;
            line-height: 30px;
            color: #000;
            margin-top: 10px
        }

        .swiper-item .swiper-item-body[data-v-286b400c] {
            position: relative;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding-bottom: 40px
        }

        .swiper-item .swiper-item-body .swiper-item-body-item[data-v-286b400c] {
            flex: 1;
            position: relative
        }

        .swiper-item .circle[data-v-286b400c] {
            fill: none;
            stroke: #38364b;
            stroke-width: 10;
            stroke-linecap: round;
            -webkit-animation: circle-data-v-286b400c 3s infinite;
            animation: circle-data-v-286b400c 3s infinite;
            -webkit-transform: rotate(120deg);
            transform: rotate(120deg);
            -webkit-transform-origin: center;
            transform-origin: center;
            transform-box: fill-box
        }

        .swiper-item .circle-one-active[data-v-286b400c] {
            stroke: #5c51f6
        }

        .swiper-item .circle-two-active[data-v-286b400c] {
            stroke: #e9269e
        }

        .swiper-item .circle-text-box[data-v-286b400c] {
            width: 60px;
            height: 60px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -30px;
            margin-left: -30px;
            text-align: center;
            color: #000
        }

        .swiper-item .circle-text-box .circle-text-p[data-v-286b400c] {
            margin-top: 10px;
            font-size: 26px
        }

        .swiper-item .circle-text-box .circle-text-t[data-v-286b400c] {
            font-size: 12px
        }

        .swiper-item .percent[data-v-286b400c] {
            font-size: 10px
        }

        @-webkit-keyframes circle-data-v-286b400c {
            100% {
                stroke-dashoffset: 0
            }
        }

        @keyframes circle-data-v-286b400c {
            100% {
                stroke-dashoffset: 0
            }
        }

        .hot-list-row[data-v-286b400c] {
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            font-size: 10px;
            height: 40px;
            line-height: 40px;
            margin-top: 16px;
            color: #000;
            font-weight: 600
        }

        .hot-list-row-item-img[data-v-286b400c] {
            margin-top: 5px;
            width: 30px;
            height: 30px
        }

        .hot-list-row-item[data-v-286b400c]:nth-child(1) {
            width: 60px;
            text-align: center
        }

        .hot-list-row-item[data-v-286b400c]:nth-child(2) {
            flex: 1
        }

        .hot-list-row-item[data-v-286b400c]:nth-child(3) {
            width: 60px
        }

        .hot-list-row-item[data-v-286b400c]:nth-child(4) {
            width: 60px;
            text-align: right
        }

        .hot-list-row-title[data-v-286b400c] {
            color: #a5a6ae;
            height: 20px;
            line-height: 20px
        }

        .goods-box[data-v-286b400c] {
            display: flex
        }

        .goods-box .goods-img-box[data-v-286b400c] {
            width: 40px;
            height: 40px;
            background-color: #555369;
            border-radius: 4px;
            overflow: hidden
        }

        .goods-box .goods-text-box[data-v-286b400c] {
            flex: 1
        }

        .goods-box .goods-text-box .goods-text[data-v-286b400c] {
            display: block;
            width: 100%;
            height: 40px;
            color: #000;
            word-break: break-all;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            box-sizing: border-box;
            padding: 0 8px;
            line-height: 20px
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

        a[data-v-04c498ca] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-04c498ca] {
            color: #5462de
        }

        a.link[data-v-04c498ca] {
            color: #5462de
        }

        .container[data-v-04c498ca] {
            background-color: #fff;
            padding: 12px
        }

        .container .screen-time[data-v-04c498ca] {
            font-size: 10px;
            color: #000;
            line-height: 10px;
            margin-bottom: 12px
        }

        .container .screen-item[data-v-04c498ca] {
            position: relative;
            background-color: #fff;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 16px;
            box-sizing: border-box
        }

        .container .screen-item .screen-item-title[data-v-04c498ca] {
            font-size: 14px;
            color: #000
        }

        .container .screen-item .swiper-btn[data-v-04c498ca] {
            position: absolute;
            width: 14px;
            height: 25px;
            line-height: 25px;
            border-radius: 6px;
            padding: 0;
            bottom: 20px;
            color: #fff
        }

        .container .screen-item span[data-v-04c498ca] {
            color: #fff
        }

        .container .GMV-box[data-v-04c498ca] {
            padding: 8px 16px;
            background: linear-gradient(90deg, #6446ff, #7611ef);
            color: #fff
        }

        .container .GMV-box .GMV-box-header[data-v-04c498ca] {
            text-align: center;
            margin-top: 16px
        }

        .container .GMV-box .GMV-box-header .GMV-box-header-item[data-v-04c498ca] {
            display: inline-block
        }

        .container .GMV-box .GMV-box-header .GMV-box-header-item .GMV-text[data-v-04c498ca] {
            font-size: 14px;
            font-weight: 600;
            text-align: center
        }

        .container .GMV-box .GMV-box-header .GMV-box-header-item .GMV-icon[data-v-04c498ca] {
            width: 40px;
            height: 25px;
            background-color: #fff;
            color: #6446ff;
            font-size: 20px;
            font-weight: 600;
            line-height: 25px;
            text-align: center;
            border-radius: 3px
        }

        .container .GMV-box .GMV-box-header .GMV-box-header-item[data-v-04c498ca]:nth-child(1) {
            width: 40px
        }

        .container .GMV-box .GMV-box-header .GMV-box-header-item[data-v-04c498ca]:nth-child(2) {
            padding-left: 10px;
            font-size: 40px;
            font-weight: 600
        }

        .container .GMV-box .GMV-box-footer[data-v-04c498ca] {
            display: flex;
            justify-content: space-around;
            margin: 20px 0 16px
        }

        .container .GMV-box .GMV-box-footer .GMV-item[data-v-04c498ca] {
            text-align: center;
            font-weight: 600
        }

        .container .GMV-box .GMV-box-footer .GMV-item .GMV-item-value[data-v-04c498ca] {
            font-size: 20px
        }

        .container .GMV-box .GMV-box-footer .GMV-item .GMV-item-label[data-v-04c498ca] {
            margin-top: 8px;
            font-size: 12px
        }

        uni-swiper[data-v-04c498ca] {
            height: 280px
        }

        .swiper-item .swiper-item-title[data-v-04c498ca] {
            font-size: 22px;
            line-height: 30px;
            color: #000;
            margin-top: 10px
        }

        .swiper-item .swiper-item-body[data-v-04c498ca] {
            position: relative;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding-bottom: 40px
        }

        .swiper-item .swiper-item-body .swiper-item-body-item[data-v-04c498ca] {
            flex: 1;
            position: relative
        }

        .swiper-item .circle[data-v-04c498ca] {
            fill: none;
            stroke: #38364b;
            stroke-width: 10;
            stroke-linecap: round;
            -webkit-animation: circle-data-v-04c498ca 3s infinite;
            animation: circle-data-v-04c498ca 3s infinite;
            -webkit-transform: rotate(120deg);
            transform: rotate(120deg);
            -webkit-transform-origin: center;
            transform-origin: center;
            transform-box: fill-box
        }

        .swiper-item .circle-one-active[data-v-04c498ca] {
            stroke: #5c51f6
        }

        .swiper-item .circle-two-active[data-v-04c498ca] {
            stroke: #e9269e
        }

        .swiper-item .circle-text-box[data-v-04c498ca] {
            width: 60px;
            height: 60px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -30px;
            margin-left: -30px;
            text-align: center;
            color: #000
        }

        .swiper-item .circle-text-box .circle-text-p[data-v-04c498ca] {
            margin-top: 10px;
            font-size: 26px
        }

        .swiper-item .circle-text-box .circle-text-t[data-v-04c498ca] {
            font-size: 12px
        }

        .swiper-item .percent[data-v-04c498ca] {
            font-size: 10px
        }

        @-webkit-keyframes circle-data-v-04c498ca {
            100% {
                stroke-dashoffset: 0
            }
        }

        @keyframes circle-data-v-04c498ca {
            100% {
                stroke-dashoffset: 0
            }
        }

        .hot-list-row[data-v-04c498ca] {
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            font-size: 10px;
            height: 40px;
            line-height: 40px;
            margin-top: 16px;
            color: #000;
            font-weight: 600
        }

        .hot-list-row-item-img[data-v-04c498ca] {
            margin-top: 5px;
            width: 30px;
            height: 30px
        }

        .hot-list-row-item[data-v-04c498ca]:nth-child(1) {
            width: 60px;
            text-align: center
        }

        .hot-list-row-item[data-v-04c498ca]:nth-child(2) {
            flex: 1
        }

        .hot-list-row-item[data-v-04c498ca]:nth-child(3) {
            width: 60px
        }

        .hot-list-row-item[data-v-04c498ca]:nth-child(4) {
            width: 60px;
            text-align: right
        }

        .hot-list-row-title[data-v-04c498ca] {
            color: #a5a6ae;
            height: 20px;
            line-height: 20px
        }

        .goods-box[data-v-04c498ca] {
            display: flex
        }

        .goods-box .goods-img-box[data-v-04c498ca] {
            width: 40px;
            height: 40px;
            background-color: #555369;
            border-radius: 4px;
            overflow: hidden
        }

        .goods-box .goods-text-box[data-v-04c498ca] {
            flex: 1
        }

        .goods-box .goods-text-box .goods-text[data-v-04c498ca] {
            display: block;
            width: 100%;
            height: 40px;
            color: #000;
            word-break: break-all;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            box-sizing: border-box;
            padding: 0 8px;
            line-height: 20px
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

        a[data-v-65ded5c6] {
            color: #fff;
            text-decoration: none
        }

        a.active[data-v-65ded5c6] {
            color: #5462de
        }

        a.link[data-v-65ded5c6] {
            color: #5462de
        }

        .container[data-v-65ded5c6] {
            background-color: #fff;
            padding: 12px
        }

        .container .screen-time[data-v-65ded5c6] {
            font-size: 10px;
            color: #000;
            line-height: 10px;
            margin-bottom: 12px
        }

        .container .screen-item[data-v-65ded5c6] {
            position: relative;
            background-color: #fff;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 16px;
            box-sizing: border-box
        }

        .container .screen-item .screen-item-title[data-v-65ded5c6] {
            font-size: 14px;
            color: #000
        }

        .container .screen-item .swiper-btn[data-v-65ded5c6] {
            position: absolute;
            width: 14px;
            height: 25px;
            line-height: 25px;
            border-radius: 6px;
            padding: 0;
            bottom: 20px;
            color: #fff
        }

        .container .screen-item span[data-v-65ded5c6] {
            color: #fff
        }

        .container .GMV-box[data-v-65ded5c6] {
            padding: 8px 16px;
            background: linear-gradient(90deg, #6446ff, #7611ef);
            color: #fff
        }

        .container .GMV-box .GMV-box-header[data-v-65ded5c6] {
            text-align: center;
            margin-top: 16px
        }

        .container .GMV-box .GMV-box-header .GMV-box-header-item[data-v-65ded5c6] {
            display: inline-block
        }

        .container .GMV-box .GMV-box-header .GMV-box-header-item .GMV-text[data-v-65ded5c6] {
            font-size: 14px;
            font-weight: 600;
            text-align: center
        }

        .container .GMV-box .GMV-box-header .GMV-box-header-item .GMV-icon[data-v-65ded5c6] {
            width: 40px;
            height: 25px;
            background-color: #fff;
            color: #6446ff;
            font-size: 20px;
            font-weight: 600;
            line-height: 25px;
            text-align: center;
            border-radius: 3px
        }

        .container .GMV-box .GMV-box-header .GMV-box-header-item[data-v-65ded5c6]:nth-child(1) {
            width: 40px
        }

        .container .GMV-box .GMV-box-header .GMV-box-header-item[data-v-65ded5c6]:nth-child(2) {
            padding-left: 10px;
            font-size: 40px;
            font-weight: 600
        }

        .container .GMV-box .GMV-box-footer[data-v-65ded5c6] {
            display: flex;
            justify-content: space-around;
            margin: 20px 0 16px
        }

        .container .GMV-box .GMV-box-footer .GMV-item[data-v-65ded5c6] {
            text-align: center;
            font-weight: 600
        }

        .container .GMV-box .GMV-box-footer .GMV-item .GMV-item-value[data-v-65ded5c6] {
            font-size: 20px
        }

        .container .GMV-box .GMV-box-footer .GMV-item .GMV-item-label[data-v-65ded5c6] {
            margin-top: 8px;
            font-size: 12px
        }

        uni-swiper[data-v-65ded5c6] {
            height: 280px
        }

        .swiper-item .swiper-item-title[data-v-65ded5c6] {
            font-size: 22px;
            line-height: 30px;
            color: #000;
            margin-top: 10px
        }

        .swiper-item .swiper-item-body[data-v-65ded5c6] {
            position: relative;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding-bottom: 40px
        }

        .swiper-item .swiper-item-body .swiper-item-body-item[data-v-65ded5c6] {
            flex: 1;
            position: relative
        }

        .swiper-item .circle[data-v-65ded5c6] {
            fill: none;
            stroke: #38364b;
            stroke-width: 10;
            stroke-linecap: round;
            -webkit-animation: circle-data-v-65ded5c6 3s infinite;
            animation: circle-data-v-65ded5c6 3s infinite;
            -webkit-transform: rotate(120deg);
            transform: rotate(120deg);
            -webkit-transform-origin: center;
            transform-origin: center;
            transform-box: fill-box
        }

        .swiper-item .circle-one-active[data-v-65ded5c6] {
            stroke: #5c51f6
        }

        .swiper-item .circle-two-active[data-v-65ded5c6] {
            stroke: #e9269e
        }

        .swiper-item .circle-text-box[data-v-65ded5c6] {
            width: 60px;
            height: 60px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -30px;
            margin-left: -30px;
            text-align: center;
            color: #000
        }

        .swiper-item .circle-text-box .circle-text-p[data-v-65ded5c6] {
            margin-top: 10px;
            font-size: 26px
        }

        .swiper-item .circle-text-box .circle-text-t[data-v-65ded5c6] {
            font-size: 12px
        }

        .swiper-item .percent[data-v-65ded5c6] {
            font-size: 10px
        }

        @-webkit-keyframes circle-data-v-65ded5c6 {
            100% {
                stroke-dashoffset: 0
            }
        }

        @keyframes circle-data-v-65ded5c6 {
            100% {
                stroke-dashoffset: 0
            }
        }

        .hot-list-row[data-v-65ded5c6] {
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            font-size: 10px;
            height: 40px;
            line-height: 40px;
            margin-top: 16px;
            color: #000;
            font-weight: 600
        }

        .hot-list-row-item-img[data-v-65ded5c6] {
            margin-top: 5px;
            width: 30px;
            height: 30px
        }

        .hot-list-row-item[data-v-65ded5c6]:nth-child(1) {
            width: 60px;
            text-align: center
        }

        .hot-list-row-item[data-v-65ded5c6]:nth-child(2) {
            flex: 1
        }

        .hot-list-row-item[data-v-65ded5c6]:nth-child(3) {
            width: 60px
        }

        .hot-list-row-item[data-v-65ded5c6]:nth-child(4) {
            width: 60px;
            text-align: right
        }

        .hot-list-row-title[data-v-65ded5c6] {
            color: #a5a6ae;
            height: 20px;
            line-height: 20px
        }

        .goods-box[data-v-65ded5c6] {
            display: flex
        }

        .goods-box .goods-img-box[data-v-65ded5c6] {
            width: 40px;
            height: 40px;
            background-color: #555369;
            border-radius: 4px;
            overflow: hidden
        }

        .goods-box .goods-text-box[data-v-65ded5c6] {
            flex: 1
        }

        .goods-box .goods-text-box .goods-text[data-v-65ded5c6] {
            display: block;
            width: 100%;
            height: 40px;
            color: #000;
            word-break: break-all;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            box-sizing: border-box;
            padding: 0 8px;
            line-height: 20px
        }
    </style>
</head>

<body class="uni-body pages-screen-screen"><noscript><strong>Please enable JavaScript to continue.</strong></noscript>
    <uni-app class="uni-app--maxwidth">
        <uni-page data-page="pages/screen/screen">
            <!---->
            <!---->
            <uni-page-wrapper>
                <uni-page-body>
                    <uni-view data-v-65ded5c6="" class="container">
                        <uni-view data-v-c4b04b80="" data-v-65ded5c6="" class="u-navbar">
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
                                    <uni-text data-v-c4b04b80="" class="u-line-1 u-navbar__content__title" style="width: 200px;"><span>Recharge History</span></uni-text>
                                    <!---->
                                </uni-view>
                            </uni-view>
                        </uni-view>
                 
                        
                        
                        
                        
                        
                        
                        
                        
                        
                         @forelse($deposits as $deposit)
                        
                        <uni-view data-v-65ded5c6="" class="screen-item GMV-box">
                            <uni-view data-v-65ded5c6="" class="GMV-box-header">
                                <uni-view data-v-65ded5c6="" class="GMV-box-header-item">
                               
                                    <uni-view data-v-65ded5c6="" class="GMV-icon"> {{ $general->cur_text }}</uni-view>
                                </uni-view>
                                <uni-view data-v-65ded5c6="" class="GMV-box-header-item">{{ showAmount($deposit->amount) }}</uni-view>
                            </uni-view>
                            <uni-view data-v-65ded5c6="" class="GMV-box-footer">
                                <uni-view data-v-65ded5c6="" class="GMV-item">
                                    <uni-view data-v-65ded5c6="" class="GMV-item-value"> Status</uni-view>
                                    <uni-view data-v-65ded5c6="" class="GMV-item-label">@php echo $deposit->statusBadge @endphp</uni-view>
                                </uni-view>
                                <uni-view data-v-65ded5c6="" class="GMV-item">
                                    <uni-view data-v-65ded5c6="" class="GMV-item-value">Date</uni-view>
                                    <uni-view data-v-65ded5c6="" class="GMV-item-label">{{ showDateTime($deposit->created_at, 'M d Y y:i:a') }}</uni-view>
                                </uni-view>
                      
                        
                            </uni-view>
                        </uni-view>
 
 
 
 
 
   @empty
            
            
            <div class="dropload-noData zhibo-index-bot-ts">No more data</div>
              @endforelse
 
 
 
 
 
 
 
 
 
                    </uni-view>
                </uni-page-body>
            </uni-page-wrapper>
        </uni-page>




            
                
            
            
            
        </div>
    </div>
    
    
    <div style="height: 60px;"></div>
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
</div>
</body>
