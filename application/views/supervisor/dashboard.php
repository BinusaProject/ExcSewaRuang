<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Ruang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

         <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap");

        :root {
            --main-color: #4F709C;
            --main-color-opacity: 126, 86, 255;
            --main-gradient: linear-gradient(to right, #2878EB, #F129C9);
            --heading-color: #002147;
        }

        body {
            font-family: "DM Sans", sans-serif;
            font-size: 17px;
            background-color: #f1f1f1;
        }
        .content-text {
            font-family:"DM Sans", sans-serif ;
            font-size: 17px;
        }

        @media (min-width: 1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl,
            .container-xxl {
                max-width: 1170px;
            }
        }

        /***default-btn-area***/
        .btn {
            height: 50px;
            line-height: 50px;
            padding: 0 32px;
            overflow: hidden;
            position: relative;
            border: 0;
            transition: all 0.5s ease 0s;
            font-weight: 700;
            display: inline-block;
            transform: perspective(1px) translateZ(0);
            border-radius: 5px;
        }

        .btn:focus,
        .btn:active {
            outline: 0;
            box-shadow: none;
        }

        .btn:after {
            content: "";
            background: var(--main-color);
            position: absolute;
            transition: all 0.9s ease 0s;
            z-index: -1;
            height: 100%;
            left: -35%;
            top: 0;
            transform: skew(30deg);
            transform-origin: top left;
            width: 0;
        }

        .btn:hover {
            color: #fff;
        }

        .btn:hover:after {
            height: 100%;
            width: 135%;
        }

        .btn-base {
            color: var(--heading-color);
            border: 0;
            background: var(--main-color);
        }

        .btn-base:after {
            background: #fff;
        }

        .btn-base:hover::after {
            background: var(--main-color);
        }

        .btn-border {
            color: var(--main-color);
            border: 1px solid var(--main-color);
            background: transparent;
        }

        .btn-border:hover {
            color: #fff;
        }

        .btn-border-white {
            color: #fff;
            border: 1px solid #fff;
            background: transparent;
        }

        .btn-border-white:hover {
            background: #fff;
            opacity: 1;
            color: var(--heading-color);
        }

        .btn-border-white:hover::after {
            background: #fff;
        }

        .btn-white {
            color: var(--heading-color);
            border: 0;
            background: #fff;
            font-size: 14px;
            transition: all 0.3s ease 0s;
        }

        .btn-white:hover {
            color: var(--heading-color);
        }

        .btn-white:hover:after {
            background: #fff;
        }

        .btn-area {
            margin-top: 25px;
        }

        .btn-area .btn {
            margin-right: 7px;
        }

   
        /***banner-area***/
        .banner-area {
            background: var(--main-gradient);
            padding: 320px 0px 220px;
            background-size: cover !important;
            position: relative;
            z-index: 1;
            background-position: center !important;
        }

        .banner-area:after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 33, 71, 0.9);
        }

        .banner-area .banner-inner {
            z-index: 4;
            position: relative;
        }

        .banner-inner h1 {
            color: #fff;
            line-height: 66px;
            font-weight: 700;
            font-size: 75px;
            margin-bottom: 25px;
        }

        .banner-inner h1 span {
            color: #ffd934;
            display: block;
        }

        .banner-inner p {
            color: #fff;
            margin-bottom: 25px;
            font-size: 40px;
            line-height: 58px;
            letter-spacing: -1px;
        }

        .banner-inner p span {
            font-weight: 700;
            font-size: 46px;
        }

        .banner-area .btn-area {
            position: relative;
            z-index: 4;
        }



        /********* single-counter-inner *********/
        .counter-area-inner {
            padding: 20px 0 0 0;
            position: relative;
            z-index: 4;
        }

        .single-counter-inner {
            margin-bottom: 40px;
        }

        .single-counter-inner h2 {
            font-size: 42px;
            font-weight: 700;
            color: #fff;
        }

        .single-counter-inner p {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 0;
            color: #fff;
        }




        /***inner-item***/
        .inner-item {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .inner-item:hover img {
            transform: translateY(-8px);
        }

        .inner-item a {
            display: block;
            font-size: 22px;
            font-weight: 500;
            color: #1d1d1d;
            text-decoration: none;
            position: relative;
        }

        .inner-item a .thumb {
            overflow: hidden;
            display: block;
            position: relative;
            border-radius: 5px;
            margin-bottom: 10px;
            box-shadow: 0px 5px 50px 0px rgb(0 0 0 / 20%);
            min-height: 350px;
        }

        .inner-item a .thumb:after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.8);
            visibility: hidden;
            opacity: 0;
            transition: 0.4s;
        }

        .inner-item a img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            transform: scale(1) translateY(1);
            transition: transform 12s;
            display: block;
            width: 100%;
            height: initial;
        }

        .inner-item:hover a .thumb:after {
            visibility: visible;
            opacity: 1;
        }

        .inner-item a:hover .thumb img {
            transform: scale(1) translateY(-50px);
            transition: transform 12s;
        }

        .widget-section .inner-item {
            margin-bottom: 20px;
        }

        .inner-item.style-large a .thumb {
            min-height: 550px;
        }

        .inner-item.style-large a:hover .thumb img {
            transform: scale(1) translateY(-1280px);
        }

        .inner-item.coming-soon a .thumb img {
            filter: blur(12px);
        }

        .inner-item.inner-page-item a img {
            transition: transform 2s;
            transform: scale(1.02) translateY(1.02);
        }

        .inner-item.inner-page-item a:hover .thumb img {
            transform: scale(1.02) translateY(-160px);
            transition: transform 2s;
        }

        .inner-item.style-none a:hover .thumb img {
            transform: scale(1) translateY(0);
        }

        .header-item {
            display: block;
        }

        .header-item .thumb {
            position: relative;
            display: block;
        }

        .header-item .thumb:after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            visibility: hidden;
            opacity: 0;
            transition: 0.4s;
            border-radius: 5px;
        }

        .header-item .thumb img {
            transition: 0.4s;
            border-radius: 5px;
        }

        .header-item:hover .thumb img {
            transform: scale(1.05);
        }

        .header-item:hover .thumb:after {
            visibility: visible;
            opacity: 1;
            transform: scale(1.05);
        }


        .cm-soon-title {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .inner-item:hover .cm-soon-title {
            color: #fff;
        }

        .inner-item .btn {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 16px;
            color: #fff;
            margin-top: -22px;
            visibility: hidden;
            opacity: 0;
            transition: 0.4s;
            color: var(--heading-color);
        }

        .inner-item:hover .btn {
            visibility: visible;
            opacity: 1;
        }


        /***section-title***/
        .section-title {
            margin-bottom: 60px;
        }

        .section-title h5 {
            font-weight: 600;
            color: var(--main-color);
            margin-bottom: 6px;
        }

        .section-title h2 {
            font-size: 42px;
            font-weight: 700;
            color: var(--heading-color);
        }

        .section-title p {
            font-size: 22px;
            font-weight: 500;
            color: rgba(0, 0, 0, 0.4);
        }

        /***default-padding***/
        .pd-top-100 {
            padding-top: 100px;
        }

        .pd-top-47 {
            padding-top: 47px;
        }

        .pd-top-70 {
            padding-top: 70px;
        }

        .pd-top-87 {
            padding-top: 87px;
        }

        .pd-top-110 {
            padding-top: 110px;
        }

        .pd-top-120 {
            padding-top: 120px;
        }

        .pd-top-135 {
            padding-top: 135px;
        }

        .pd-top-130 {
            padding-top: 130px;
        }

        .pd-top-140 {
            padding-top: 140px;
        }

        .pd-top-150 {
            padding-top: 150px;
        }

        .pd-bottom-100 {
            padding-bottom: 100px;
        }

        .pd-bottom-97 {
            padding-bottom: 97px;
        }

        .pd-bottom-65 {
            padding-bottom: 65px;
        }

        .pd-bottom-105 {
            padding-bottom: 105px;
        }

        .pd-bottom-110 {
            padding-bottom: 110px;
        }

        .pd-bottom-120 {
            padding-bottom: 120px;
        }

        .pd-bottom-130 {
            padding-bottom: 130px;
        }

        .pd-bottom-140 {
            padding-bottom: 140px;
        }

        .pd-bottom-150 {
            padding-bottom: 150px;
        }

        .typed::after {
            content: "|";
            display: inline;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
        }

        /*Removes cursor that comes with typed.js*/
        .typed-cursor {
            opacity: 0;
            display: none !important;
        }

        /*Custom cursor animation*/
        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-moz-keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @media all and (max-width: 1199px) {
            .banner-area .bg-image {
                opacity: 0.2;
                z-index: 0;
            }

            .banner-inner p {
                margin: 0 20px !important;
            }

            .btn {
                height: 50px;
                line-height: 50px;
            }

            .pd-top-140 {
                padding-top: 100px;
            }

            .pd-bottom-97 {
                padding-bottom: 57px;
            }

            .pd-top-87 {
                padding-top: 47px;
            }

            .banner-area {
                padding: 228px 0px 218px;
            }
        }

        @media all and (max-width: 991px) {
            .nav-right-part-mobile {
                display: block;
            }

            .banner-inner h1 {
                font-size: 70px;
            }
        }

        @media all and (max-width: 575px) {
            .nav-right-part-desktop {
                margin-left: 10px;
            }

            .section-title h5 {
                font-size: 18px;
            }

            .counter-area {
                transform: translateY(0);
                margin-top: 140px;
            }

            .single-counter-inner h2 {
                font-size: 30px;
            }
        }

        @media all and (max-width: 767px) {
            .nav-right-part ul li .btn {
                display: none;
            }

            .nav-right-part-mobile ul li .cart {
                display: block;
            }

            .nav-right-part-desktop {
                margin-left: 0px;
            }

            .banner-inner h1 {
                line-height: 46px;
                font-size: 33px;
                margin-bottom: 15px;
            }

            .banner-inner p {
                font-size: 18px;
                line-height: inherit;
                letter-spacing: 0;
            }

            .banner-inner p span {
                font-size: 20px;
            }

            .banner-area {
                padding: 180px 0px 100px;
            }

            .section-title h2 {
                font-size: 30px;
            }

            .btn-area {
                margin-top: 45px;
            }

            .btn {
                padding: 0 21px;
            }

            /* .footer-widget.pd-bottom-100 {
                padding-bottom: 70px;
            }

            .footer-widget h5 {
                font-size: 16px;
            } */

            .main-logo img {
                width: 160px;
            }
        }

        @media all and (max-width: 320px) {
            .main-logo img {
                width: 110px;
            }

            .nav-right-part ul li {
                font-size: 15px;
            }

            .nav-right-part ul li a {
                padding: 0 7px;
            }
        }

        .featured-item {
            box-shadow: 0 0 40px rgb(82 85 90 / 10%);
            text-align: center;
            margin-bottom: 30px;
            padding: 40px 20px 35px 20px;
            background: #fff;
            border-radius: 5px;
            color: #1d1d1d;
            font-size: 22px;
        }

        .featured-item img {
            display: block;
            margin: 0 auto 20px;
            box-shadow: 0 0 40px rgb(82 85 90 / 20%);
            border-radius: 5px;
        }

        /* .footer-bottom {
            border-top: 1px solid rgba(0, 33, 71, 0.15);
            padding: 25px 0;
            position: relative;
            z-index: 2;
        }

        .footer-bottom p {
            margin-bottom: 0;
            color: #fff;
        } */

        /*--------------------------------------------------
    ##Footer
---------------------------------------------------*/
        .footer-area {
            position: relative;
            padding-top: 90px;
            background-color: #CFD2CF;
        }

        .footer-area .widget {
            position: relative;
            z-index: 2;
            margin-bottom: 70px;
        }

        .footer-area .widget-title {
            margin-bottom: 27px;
            position: relative;
            padding-left: 18px;
        }

        .footer-area .widget-title:after {
            content: "";
            position: absolute;
            height: 19px;
            width: 6px;
            left: 0;
            top: 6px;
            border-radius: 6px;
            background: var(--main-color);
        }

        .footer-area .widget_about {
            background: #fff;
            padding: 40px 20px;
            border-top: 6px solid var(--main-color);
            margin-top: -150px;
        }

        .footer-area .widget_about a {
            margin-bottom: 20px;
            display: block;
        }

        .footer-area .widget_about p {
            font-size: 15px;
            margin-bottom: 21px;
        }

        .footer-area .widget_contact ul {
            padding: 0;
        }

        .footer-area .widget_contact ul li {
            margin-bottom: 15px;
            position: relative;
            padding-left: 25px;
            list-style: none;
        }

        .footer-area .widget_contact ul li i {
            margin-right: 14px;
            color: var(--main-color);
            position: absolute;
            left: 0;
            top: 6px;
        }

        .footer-area .widget_contact ul li:last-child {
            margin-bottom: 0;
        }

        .footer-area .widget_contact ul li .time {
            font-size: 12px;
            margin-top: 3px;
        }

        .footer-area .widget_blog_list ul {
            padding: 0;
        }

        .footer-area .widget_blog_list ul li {
            list-style: none;
            margin-bottom: 15px;
            position: relative;
            padding-left: 15px;
        }

        .footer-area .widget_blog_list ul li:after {
            content: "";
            position: absolute;
            left: 0;
            top: 7px;
            height: 6px;
            width: 6px;
            background: var(--main-color);
        }

        .footer-area .widget_blog_list ul li h6 {
            font-weight: 500;
            font-size: 17px;
            margin-bottom: 0;
        }

        .footer-area .widget_blog_list ul li span {
            font-size: 12px;
        }

        .footer-area .widget_blog_list ul li span i {
            font-size: 13px;
            margin-right: 6px;
        }

        .footer-area .widget_nav_menu ul {
            margin: 0;
            padding: 0;
        }

        .footer-area .widget_nav_menu ul li {
            list-style: none;
            margin-bottom: 8px;
            position: relative;
            padding-left: 15px;
        }

        .footer-area .widget_nav_menu ul li:after {
            content: "";
            position: absolute;
            left: 0;
            top: 12px;
            height: 6px;
            width: 6px;
            background: var(--main-color);
        }

        .footer-subscribe {
            padding-bottom: 75px;
        }

        .footer-subscribe .footer-subscribe-inner {
            background: #fff;
            padding: 30px 50px 10px 50px;
            border-radius: 7px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(0, 33, 71, 0.15);
            padding: 25px 0;
            position: relative;
            z-index: 2;
        }

        .footer-bottom p {
            margin-bottom: 0;
        }

        .footer-bottom .widget_nav_menu ul li {
            display: inline-block;
            padding-left: 0;
            padding-right: 20px;
            margin-bottom: 0;
        }

        .footer-bottom .widget_nav_menu ul li:last-child {
            margin-right: 0;
        }

        .footer-bottom .widget_nav_menu ul li:after {
            display: none;
        }

        .footer-area-2 {
            margin-top: 60px;
        }

        .footer-area-2 .footer-bottom {
            background: var(--main-color);
            border-top: 0;
        }

        .footer-area-2 .footer-bottom p {
            color: var(--heading-color);
        }

        .footer-area-2 .footer-bottom .widget_nav_menu ul li a {
            color: var(--heading-color);
        }

        .footer-area-2 .footer-bottom .widget_nav_menu ul li a:hover {
            color: #fff;
        }




        h1 {
            font-size: 62px;
            line-height: 1.2333333333;
        }

        h2 {
            font-size: 46px;
            line-height: 1.3380952381;
        }

        h3 {
            font-size: 30px;
            line-height: 1.3833333333;
        }

        h4 {
            font-size: 24px;
            line-height: 1.3380952381;
        }

        h5 {
            font-size: 20px;
            line-height: 1.3380952381;
        }

        h6 {
            font-size: 16px;
            line-height: 1.3830952381;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--heading-color);
            font-weight: 700;
        }

        p {
            color: var(--paragraph-color);
            -webkit-hyphens: auto;
            hyphens: auto;
            margin-bottom: 10px;
        }

        a {
            color: inherit;
            text-decoration: none;
            transition: 0.4s;
        }

        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
            color: inherit;
        }

        a:hover {
            color: var(--main-color);
        }

        pre {
            word-break: break-word;
        }

        a i {
            padding: 0 2px;
        }

        img {
            max-width: 100%;
        }

        ol {
            counter-reset: counter;
            padding-left: 0;
        }

        ol li {
            list-style: none;
            margin-bottom: 1rem;
        }

        ol li:before {
            counter-increment: counter;
            content: counter(counter);
            font-weight: 500;
            margin-right: 10px;
        }

        button:hover,
        button:active,
        button:focus {
            outline: 0;
        }

        /*input and button type focus outline disable*/
        input[type=text]:focus,
        input[type=email]:focus,
        input[type=url]:focus,
        input[type=password]:focus,
        input[type=search]:focus,
        input[type=tel]:focus,
        input[type=number]:focus,
        textarea:focus,
        input[type=button]:focus,
        input[type=reset]:focus,
        input[type=submit]:focus,
        select:focus {
            outline: none;
            box-shadow: none;
            border: 1px solid #ddd;
        }

        .no-gutter.row,
        .no-gutter.container,
        .no-gutter.container-fluid {
            margin-left: 0;
            margin-right: 0;
            padding-left: 0;
            padding-right: 0;
        }

        .no-gutter>[class^=col-] {
            padding-left: 0;
            padding-right: 0;
        }

        .no-gutter[class^=col-] {
            padding-left: 0;
            padding-right: 0;
        }

        .h-100vh {
            height: 100vh;
        }

        code {
            color: #faa603;
        }

        .check-list {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .check-list li {
            display: block;
            padding-left: 20px;
            position: relative;
            z-index: 0;
        }

        .check-list li:after {
            position: absolute;
            left: 0;
            top: 0;
            font-family: "fontawesome";
            content: "";
            color: var(--main-color);
        }

        .site-main .comment-navigation,
        .site-main .posts-navigation,
        .site-main .post-navigation {
            clear: both;
        }

        .comment-navigation .nav-previous,
        .posts-navigation .nav-previous,
        .post-navigation .nav-previous {
            float: left;
            width: 50%;
        }

        .comment-navigation .nav-next,
        .posts-navigation .nav-next,
        .post-navigation .nav-next {
            float: right;
            text-align: right;
            width: 50%;
        }

        .comment-navigation .nav-previous>a,
        .posts-navigation .nav-previous>a,
        .post-navigation .nav-previous>a,
        .comment-navigation .nav-next>a,
        .posts-navigation .nav-next>a,
        .post-navigation .nav-next>a {
            transition: 0.3s ease-in;
        }

        .comment-navigation .nav-previous:hover>a,
        .posts-navigation .nav-previous:hover>a,
        .post-navigation .nav-previous:hover>a,
        .comment-navigation .nav-next:hover>a,
        .posts-navigation .nav-next:hover>a,
        .post-navigation .nav-next:hover>a {
            color: var(--main-color);
        }

        .comment-list li {
            list-style: none;
        }

        .h-100vh {
            height: 100vh;
        }

        .position-relative {
            position: relative;
        }

        /*--------------------------------------------------------------
# Accessibility
--------------------------------------------------------------*/
        /* Text meant only for screen readers. */
        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute !important;
            width: 1px;
            word-wrap: normal !important;
            /* Many screen reader and browser combinations announce broken words as they would appear visually. */
        }

        .screen-reader-text:focus {
            background-color: #f1f1f1;
            border-radius: 3px;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
            clip: auto !important;
            -webkit-clip-path: none;
            clip-path: none;
            color: #21759b;
            display: block;
            font-size: 15px;
            font-size: 0.875rem;
            font-weight: bold;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000;
            /* Above WP toolbar. */
        }

        /* Do not show the outline on the skip link target. */
        #content[tabindex="-1"]:focus {
            outline: 0;
        }

        /*--------------------------------------------------------------
# Alignments
--------------------------------------------------------------*/
        .alignleft {
            float: left;
            clear: both;
            margin-right: 20px;
        }

        .alignright {
            float: right;
            clear: both;
            margin-left: 20px;
        }

        .aligncenter {
            clear: both;
            display: block;
            margin: 0 auto 1.75em;
        }

        .alignfull {
            margin: 1.5em 0;
            max-width: 100%;
        }

        .alignwide {
            max-width: 1100px;
        }

        /*--------------------------------------------------------------
# Clearings
--------------------------------------------------------------*/
        .clear:before,
        .clear:after,
        .entry-content:before,
        .entry-content:after,
        .comment-content:before,
        .comment-content:after,
        .site-header:before,
        .site-header:after,
        .site-content:before,
        .site-content:after,
        .site-footer:before,
        .site-footer:after {
            content: "";
            display: table;
            table-layout: fixed;
        }

        .clear:after,
        .entry-content:after,
        .comment-content:after,
        .site-header:after,
        .site-content:after,
        .site-footer:after {
            clear: both;
        }

        /*--------------------------------------------------------------
## Posts and pages
--------------------------------------------------------------*/
        .sticky {
            display: block;
        }

        .updated:not(.published) {
            display: none;
        }

        /*--------------------------------------------------------------
# Media
--------------------------------------------------------------*/
        .page-content .wp-smiley,
        .entry-content .wp-smiley,
        .comment-content .wp-smiley {
            border: none;
            margin-bottom: 0;
            margin-top: 0;
            padding: 0;
        }

        /* Make sure embeds and iframes fit their containers. */
        embed,
        iframe,
        object {
            max-width: 100%;
        }

        /* Make sure logo link wraps around logo image. */
        .custom-logo-link {
            display: inline-block;
        }

        /*--------------------------------------------------------------
## Captions
--------------------------------------------------------------*/
        .wp-caption {
            margin-bottom: 1.5em;
            max-width: 100%;
            clear: both;
        }

        .wp-caption img[class*=wp-image-] {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .wp-caption .wp-caption-text {
            margin: 0.8075em 0;
        }

        .wp-caption-text {
            text-align: center;
        }

        /*----------------------------------------
    # Unit test
------------------------------------------*/
        .wp-link-pages a {
            margin: 0 5px;
            transition: 0.3s ease-in;
        }

        .wp-link-pages {
            margin-bottom: 30px;
            margin-top: 25px;
        }

        .wp-link-pages span,
        .wp-link-pages a {
            border: 1px solid #e2e2e2;
            padding: 5px 15px;
            display: inline-block;
        }

        .wp-link-pages .current,
        .wp-link-pages a:hover {
            background-color: var(--main-color);
            color: #fff;
            border-color: var(--main-color);
        }

        .wp-link-pages span:first-child {
            margin-right: 5px;
        }

        dl,
        ol,
        ul {
            padding-left: 15px;
        }

        .post-password-form input {
            display: block;
            border: 1px solid #e2e2e2;
            height: 50px;
            border-radius: 3px;
            padding: 0 20px;
        }

        .post-password-form label {
            font-weight: 600;
            color: #333;
        }

        .post-password-form input[type=submit] {
            width: 100px;
            height: 50px;
            background-color: var(--main-color);
            color: #fff;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 1px;
            border: none;
            cursor: pointer;
            transition: 0.3s ease-in;
        }

        .post-password-form input[type=submit]:hover {
            background-color: #121A2F;
        }

        .footer-widget .table td,
        .footer-widget .table th {
            padding: 0.5rem !important;
        }

        /*---------------------------------------
    ## Button
---------------------------------------*/
        .btn {
            height: 55px;
            line-height: 55px;
            padding: 0 36px;
            border-radius: 0;
            overflow: hidden;
            position: relative;
            border: 0;
            font-size: 15px;
            transition: all 0.5s ease;
            font-weight: 500;
            border-radius: 4px;
            z-index: 0;
        }

        .btn:focus,
        .btn:active {
            outline: 0;
            box-shadow: none;
        }

        .btn:after {
            content: "";
            background: #EEBD05;
            position: absolute;
            transition: all 0.3s ease-in;
            z-index: -1;
            height: 100%;
            left: -35%;
            top: 0;
            transform: skew(30deg);
            transition-duration: 0.6s;
            transform-origin: top left;
            width: 0;
        }

        .btn:hover:after {
            height: 100%;
            width: 135%;
        }

        .btn-radius {
            border-radius: 30px;
        }

        .btn-base {
            color: var(--heading-color);
            background: var(--main-color);
        }

        .btn-base:hover {
            color: var(--heading-color);
        }

        .btn-border-white {
            color: #fff;
            border: 2px solid rgba(255, 255, 255, 0.2);
            line-height: 52px;
        }

        .btn-border-white:hover,
        .btn-border-white:focus {
            color: #fff;
            background: var(--main-color);
            border: 2px solid var(--main-color);
        }

        .btn-border-black {
            color: var(--heading-color);
            border: 2px solid rgba(0, 33, 71, 0.2);
            line-height: 52px;
        }

        .btn-border-black:hover,
        .btn-border-black:focus {
            color: var(--heading-color);
            background: var(--main-color);
            border: 2px solid var(--main-color);
        }

        .btn-black {
            color: #fff;
            background: var(--heading-color);
        }

        .btn-black:hover {
            color: #fff;
        }

        .btn-counter {
            display: inline-flex;
            padding: 15px 30px;
            border-radius: 4px;
        }

        .btn-counter .left-val {
            margin-bottom: 0;
        }

        .btn-counter .right-val {
            line-height: 1.2;
            font-size: 15px;
            font-weight: 500;
            color: var(--heading-color);
            margin-left: 12px;
        }

        /*------------------------------------------------
    ## Section title
------------------------------------------------*/
        .section-title {
            margin-bottom: 45px;
            position: relative;
        }

        .section-title .sub-title {
            font-weight: 500;
            position: relative;
            display: inline-block;
            margin-bottom: 0;
        }

        .section-title .sub-title.left-line:before {
            content: "";
            position: absolute;
            left: -50px;
            top: 9px;
            height: 1px;
            width: 40px;
            background: var(--heading-color);
        }

        .section-title .sub-title.right-line:after {
            content: "";
            position: absolute;
            right: -50px;
            top: 9px;
            height: 1px;
            width: 40px;
            background: var(--heading-color);
        }

        .section-title .sub-title.double-line:before {
            content: "";
            position: absolute;
            left: -50px;
            top: 10px;
            height: 1px;
            width: 40px;
            background: var(--heading-color);
        }

        .section-title .sub-title.double-line:after {
            content: "";
            position: absolute;
            right: -50px;
            top: 10px;
            height: 1px;
            width: 40px;
            background: var(--heading-color);
        }

        .section-title .sub-title.style-btn {
            height: 36px;
            line-height: 36px;
            background: rgba(29, 194, 149, 0.1);
            border-radius: 30px;
            padding: 0 25px;
            color: var(--main-color);
            margin-bottom: 6px;
        }

        .section-title .title {
            margin-bottom: 0;
            margin-top: 3px;
        }

        .section-title .content {
            margin-top: 17px;
            margin-bottom: 0;
        }

        .section-title .single-list-wrap {
            margin-top: 35px;
        }

        .section-title .btn {
            margin-top: 40px;
        }

        /*------------------------------------------------
    ## Back Top
------------------------------------------------*/
        .back-to-top {
            position: fixed;
            right: 30px;
            bottom: 30px;
            width: 44px;
            height: 44px;
            color: #fff;
            background-color: var(--main-color);
            text-align: center;
            line-height: 44px;
            z-index: 99;
            font-size: 25px;
            cursor: pointer;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            display: none;
            animation: backto-top-bounce 4s infinite ease-in-out;
        }

        @keyframes backto-top-bounce {
            0% {
                transform: translateY(-5px);
            }

            50% {
                transform: translateY(10px);
            }

            100% {
                transform: translateY(-5px);
            }
        }

        /*-----------------------------------------
    ## Preloader Css
-------------------------------------------*/
        .pre-wrap {
            position: fixed;
            content: "";
            transform: translate(-100%, -240%);
            font-size: 62px;
        }

        .preloader-inner {
            position: fixed;
            left: 0;
            top: 0;
            z-index: 999999999999;
            background-color: #030724;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .preloader-inner .cancel-preloader {
            position: absolute;
            bottom: 30px;
            right: 30px;
        }

        .preloader-inner .cancel-preloader a {
            background-color: #fff;
            font-weight: 600;
            text-transform: capitalize;
            color: var(--main-color);
            width: 200px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            border-radius: 30px;
            display: block;
            transition: all 0.4s ease;
        }

        .preloader-inner .cancel-preloader a:hover {
            background-color: var(--heading-color);
            color: #fff;
        }

        .spinner {
            margin: 120px auto;
            width: 60px;
            height: 60px;
            position: relative;
            text-align: center;
            animation: sk-rotate 2s infinite linear;
        }

        .dot1,
        .dot2 {
            width: 60%;
            height: 60%;
            display: inline-block;
            position: absolute;
            top: 0;
            background-color: var(--main-color);
            border-radius: 100%;
            animation: sk-bounce 2s infinite ease-in-out;
        }

        .dot2 {
            top: auto;
            bottom: 0;
            animation-delay: -1s;
        }

        @keyframes sk-rotate {
            100% {
                transform: rotate(360deg);
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes sk-bounce {

            0%,
            100% {
                transform: scale(0);
                -webkit-transform: scale(0);
            }

            50% {
                transform: scale(1);
                -webkit-transform: scale(1);
            }
        }

        /*-----------------------------------------
    ## Breadcumb 
------------------------------------------*/
        .video-play-btn {
            border-radius: 50%;
            background: #f7f7f7;
            width: 90px;
            height: 90px;
            display: inline-block;
            line-height: 100px;
            position: relative;
            z-index: 0;
            text-align: center;
            animation: ripple-white3 2.5s linear infinite;
        }

        .video-play-btn:after {
            z-index: -1;
            content: "";
            position: absolute;
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: rgba(247, 247, 247, 0.4);
            top: -10px;
            left: -10px;
        }

        .video-play-btn i {
            color: #585858;
            margin-left: 6px;
            font-size: 28px;
        }

        .video-play-btn.video-play-border {
            background: transparent;
            border: 2px solid #fff;
            height: 60px;
            width: 60px;
            line-height: 60px;
        }

        .video-play-btn.video-play-border:hover {
            background: #fff;
        }

        .video-play-btn.video-play-border:hover i {
            color: var(--main-color);
        }

        .video-play-btn.video-play-border i {
            color: #fff;
            font-size: 20px;
            margin-left: 3px;
        }

        .video-play-btn.video-play-border:after {
            display: none;
        }

        /*-----------------------------------------
    ## Breadcumb 
------------------------------------------*/
        .breadcrumb-area {
            padding: 282px 0 125px;
            background-size: cover;
            position: relative;
            background-repeat: no-repeat;
            background-position: center;
        }

        .breadcrumb-area .breadcrumb-inner {
            position: relative;
            z-index: 2;
        }

        .breadcrumb-area .page-title {
            font-size: 45px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #fff;
        }

        .breadcrumb-area .page-list {
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .breadcrumb-area .page-list li {
            font-size: 18px;
            font-weight: 200;
            list-style: none;
            display: inline-block;
            position: relative;
            padding-left: 8px;
        }

        .breadcrumb-area .page-list li:after {
            position: absolute;
            left: 0;
            top: 1px;
            content: "/";
            font-family: "fontawesome";
        }

        .breadcrumb-area .page-list li:first-child {
            padding-left: 0;
        }

        .breadcrumb-area .page-list li:first-child:after {
            display: none;
        }

        /********* social-media *********/
        .social-media {
            padding: 0;
            margin: 0;
            position: relative;
            z-index: 2;
        }

        .social-media li {
            display: inline-block;
            margin: 0 3px;
        }

        .social-media li a {
            height: 38px;
            width: 38px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            font-size: 14px;
            display: inline-block;
            border: 1px solid #CFCFCF;
        }

        .social-media li a:hover {
            background: var(--main-color);
            border: 1px solid var(--main-color);
            color: var(--heading-color);
        }

        .social-media li:first-child {
            margin-left: 0;
        }

        .social-media li:last-child {
            margin-right: 0;
        }

        /********* slider-control *********/
        .slider-control-round .owl-nav button {
            height: 40px;
            width: 40px;
            line-height: 40px;
            margin: 0 8px;
            border-radius: 50%;
            border: 1px solid var(--main-color);
            transition: 0.4s;
            box-shadow: none;
            color: var(--main-color);
            background: transparent;
            padding: 0;
            cursor: pointer;
        }

        .slider-control-round .owl-nav button:hover {
            background: var(--main-color);
            color: #fff;
        }

        .slider-control-round .owl-nav .owl-prev {
            margin-left: 0;
        }

        .slider-control-round .owl-nav .owl-next {
            margin-left: 0;
        }

        .slider-control-square .owl-nav button {
            height: 45px;
            width: 60px;
            line-height: 46px;
            margin: 0 8px;
            border-radius: 0;
            border: 1px solid var(--main-color);
            transition: 0.4s;
            box-shadow: none;
            color: var(--main-color);
            background: transparent;
            font-size: 20px;
            padding: 0;
            cursor: pointer;
        }

        .slider-control-square .owl-nav button:hover {
            background: var(--main-color);
            color: #fff;
        }

        .slider-control-square .owl-nav .owl-prev {
            margin-left: 0;
        }

        .slider-control-square .owl-nav .owl-next {
            margin-left: 0;
        }

        /*--------------------------------------------------------------
# Globals
--------------------------------------------------------------*/
        .b-radius-5 {
            border-radius: 5px;
        }

        .ratting-inner {
            color: #FFC107;
        }

        .bg-base {
            background: var(--main-color);
        }

        .bg-yellow {
            background: #fdc800;
        }

        .bg-green {
            background: #1DC295;
        }

        .bg-deep-green {
            background: #238e1c;
        }

        .bg-blue {
            background: #2878EB;
        }

        .bg-white {
            background: #fff;
        }

        .bg-red {
            background: #F14D5D;
        }

        .bg-gray {
            background: #F0F4F9;
        }

        .bg-black {
            background: var(--heading-color);
        }

        .bg-relative {
            position: relative;
        }

        .bg-cover {
            background-size: cover !important;
            background-repeat: no-repeat !important;
        }

        .bg-overlay {
            position: relative;
            background-size: cover !important;
        }

        .bg-overlay:after {
            content: "";
            position: absolute;
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
            background: rgba(0, 33, 71, 0.9);
        }

        .bg-overlay .container {
            position: relative;
            z-index: 2;
        }

        .bg-light-green {
            background: rgba(29, 194, 149, 0.1);
        }

        .pd-top-60 {
            padding-top: 60px;
        }

        .pd-top-80 {
            padding-top: 80px;
        }

        .pd-top-90 {
            padding-top: 90px;
        }

        .pd-top-100 {
            padding-top: 100px;
        }

        .pd-top-110 {
            padding-top: 110px;
        }

        .pd-top-120 {
            padding-top: 120px;
        }

        .pd-top-135 {
            padding-top: 135px;
        }

        .pd-top-140 {
            padding-top: 140px;
        }

        .pd-top-150 {
            padding-top: 150px;
        }

        .pd-top-280 {
            padding-top: 280px;
        }

        .mg-top-120 {
            margin-top: 120px;
        }

        .mg-top-160 {
            margin-top: 160px;
        }

        .mt-200 {
            margin-top: 200px;
        }

        .mt-mn-200 {
            margin-top: -200px;
        }

        .pd-bottom-70 {
            padding-bottom: 70px;
        }

        .pd-bottom-90 {
            padding-bottom: 90px;
        }

        .pd-bottom-100 {
            padding-bottom: 100px;
        }

        .pd-bottom-110 {
            padding-bottom: 110px;
        }

        .pd-bottom-120 {
            padding-bottom: 120px;
        }

        .pd-bottom-150 {
            padding-bottom: 150px;
        }

        .mg-top--170 {
            margin-top: -170px;
        }

        .mg-top--50 {
            margin-top: -50px;
        }

        /************ animate style ************/
        .top_image_bounce {
            animation: top-image-bounce 3s infinite ease-in-out;
        }

        .left_image_bounce {
            animation: left-image-bounce 3s infinite ease-in-out;
        }

        .right_image_bounce {
            animation: right-image-bounce 3s infinite ease-in-out;
        }

        .spin_image {
            animation: spin 3s infinite ease-in-out;
        }

        @keyframes top-image-bounce {
            0% {
                transform: translateY(-8px);
            }

            50% {
                transform: translateY(12px);
            }

            100% {
                transform: translateY(-8px);
            }
        }

        @keyframes left-image-bounce {
            0% {
                transform: translateX(-5px);
            }

            50% {
                transform: translateX(10px);
            }

            100% {
                transform: translateX(-5px);
            }
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
                transform-origin: 50%;
            }
        }

        @keyframes ripple-white3 {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.1), 0 0 0 10px rgba(255, 255, 255, 0.1), 0 0 0 20px rgba(255, 255, 255, 0.1);
            }

            100% {
                box-shadow: 0 0 0 10px rgba(255, 255, 255, 0.1), 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 100px rgba(255, 255, 255, 0);
            }
        }

        /*---------------------------------------------------
    widget styles
----------------------------------------------------*/
        .td-sidebar .widget {
            margin-bottom: 34px;
        }

        .td-sidebar .widget .widget-title {
            margin-bottom: 23px;
            font-size: 22px;
            position: relative;
        }

        .widget_search {
            padding: 0 !important;
        }

        .widget_search .search-form {
            position: relative;
            background: #fff;
            border-radius: 0px;
            overflow: hidden;
        }

        .widget_search .search-form .form-group {
            margin-bottom: 0;
        }

        .widget_search .search-form input {
            width: 100%;
            border: 0;
            height: 70px;
            background: transparent;
            padding: 0 82px 0 22px;
            border: 2px solid #EAEAEA !important;
        }

        .widget_search .search-form input:focus {
            border: 0;
            outline: 0;
        }

        .widget_search .search-form button {
            position: absolute;
            right: 0;
            border: 0;
            background: var(--main-color);
            cursor: pointer;
            width: 75px;
            top: 0;
            height: 70px;
        }

        .widget_search .search-form button i {
            color: var(--heading-color);
        }

        .widget_search .search-form button:active,
        .widget_search .search-form button:focus {
            box-shadow: none;
            outline: 0;
        }

        .widget-recent-post ul {
            list-style: none;
            padding-left: 0;
            margin-bottom: 10px;
            padding-bottom: 0;
        }

        .widget-recent-post ul li .media {
            margin-bottom: 15px;
            align-items: center;
            border: 1px solid #E3E3E3;
            border-radius: 5px;
            padding: 15px;
        }

        .widget-recent-post ul li .media .media-left {
            margin-right: 15px;
        }

        .widget-recent-post ul li .media .media-left img {
            border-radius: 5px;
        }

        .widget-recent-post ul li .media .media-body .title {
            margin-bottom: 10px;
            font-size: 15px;
        }

        .widget-recent-post ul li .media .media-body .post-info {
            font-weight: 400;
            font-size: 12px;
            color: var(--heading-color);
        }

        .widget-recent-post ul li .media .media-body .post-info i,
        .widget-recent-post ul li .media .media-body .post-info svg {
            margin-right: 5px;
        }

        .widget-recent-post ul li .media .media-body .post-info a {
            color: var(--main-color);
            font-weight: 500;
        }

        .widget-recent-post ul li:last-child {
            border-bottom: 0 !important;
        }

        .widget_catagory ul {
            padding-left: 0;
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .widget_catagory ul li {
            list-style: none;
            transition: all 0.4s ease;
            margin-bottom: 15px;
            border: 1px solid #E3E3E3;
            border-radius: 5px;
            padding: 11px 12px 11px 0;
            position: relative;
        }

        .widget_catagory ul li a {
            position: relative;
            display: block;
            font-size: 16px;
            font-weight: 500;
            color: var(--heading-color);
            padding-left: 20px;
        }

        .widget_catagory ul li a:hover {
            color: var(--heading-color);
        }

        .widget_catagory ul li a i {
            padding-right: 10px;
            font-size: 16px;
            color: var(--heading-color);
            position: absolute;
            right: 0;
            top: 6px;
        }

        .widget_catagory ul li:hover {
            border: 1px solid var(--main-color);
        }

        .widget_catagory ul li:last-child {
            margin-bottom: 0;
        }

        .widget_twitter ul {
            padding-left: 0;
        }

        .widget_twitter ul li {
            list-style: none;
            transition: all 0.4s ease;
            margin-bottom: 6px;
            display: flex;
            border-bottom: 1px solid #d2d0d0;
            padding-bottom: 25px;
            margin-bottom: 25px;
        }

        .widget_twitter ul li a {
            position: relative;
            padding-left: 25px;
        }

        .widget_twitter ul li a i {
            padding-right: 10px;
            position: absolute;
            left: 0;
            top: 7px;
        }

        .widget_twitter ul li:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: 0;
        }

        .widget_tags .tagcloud a {
            border: 1px solid #E3E3E3;
            height: 40px;
            line-height: 40px;
            padding: 0 20px;
            border-radius: 4px;
            display: inline-block;
            margin: 0 10px 15px 0;
            font-family: "Lato", sans-serif;
            font-weight: 400;
            font-size: 14px;
            color: #808080;
        }

        .widget_tags .tagcloud a:hover {
            background: var(--main-color);
            color: #ffffff;
            border-color: var(--main-color);
        }

        /*********** widget_checkbox_list ************/
        .widget_checkbox_list .single-checkbox:last-child {
            margin-bottom: 0;
            border-bottom: 0;
            padding-bottom: 0;
        }

        .single-checkbox {
            display: block;
            position: relative;
            padding-left: 25px;
            margin-bottom: 7px;
            padding-bottom: 7px;
            cursor: pointer;
            font-size: 16px;
            color: var(--heading-color);
            -webkit-user-select: none;
            user-select: none;
            border-bottom: 1px solid #E3E3E3;
        }

        .single-checkbox:hover input~.checkmark {
            background-color: #ccc;
        }

        .single-checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .single-checkbox input:checked~.checkmark {
            background-color: var(--main-color);
        }

        .single-checkbox input:checked~.checkmark:after {
            display: block;
        }

        .single-checkbox .checkmark {
            position: absolute;
            top: 6px;
            left: 0;
            height: 15px;
            width: 15px;
            background-color: #eee;
        }

        .single-checkbox .checkmark:after {
            content: "";
            position: absolute;
            display: none;
            left: 5px;
            top: 2px;
            width: 5px;
            height: 10px;
            border: solid var(--heading-color);
            border-width: 0 1px 1px 0;
            transform: rotate(45deg);
        }

        .widget-g-map iframe {
            height: 350px;
            width: 100%;
            border: 0;
            line-height: 1 !important;
        }

        .widget_event {
            border-radius: 5px;
            padding: 30px 25px;
            background: var(--heading-color);
        }

        .widget_event ul {
            padding: 0;
            margin: 0;
        }

        .widget_event li {
            color: #fff;
            margin-bottom: 9px;
            font-size: 16px;
            list-style: none;
        }

        .widget_event li:last-child {
            margin-bottom: 0;
        }

        .widget_event li i {
            color: var(--main-color);
            margin-right: 8px;
        }

        .widget_feature {
            border: 1px solid #CBD6E2;
        }

        .widget_feature .widget-title {
            padding: 18px 25px;
            border-bottom: 1px solid #F0F4F9;
            margin-bottom: 18px !important;
        }

        .widget_feature ul {
            padding: 0 25px 20px;
        }

        .widget_feature ul li {
            color: var(--heading-color);
            font-size: 16px;
            margin-bottom: 9px;
            list-style: none;
        }

        .widget_feature ul li span {
            font-weight: 500;
            margin-right: 5px;
        }

        .widget_feature ul li i {
            margin-right: 8px;
        }

        .widget_feature .price-wrap {
            background-color: #F0F4F9;
            padding: 34px 23px 40px;
        }

        .widget_feature .price-wrap h5 {
            font-size: 22px;
            margin-bottom: 28px;
        }

        .widget_feature .price-wrap h5 span {
            font-weight: 400;
            margin-left: 5px;
        }

        .widget_feature .price-wrap .btn {
            width: 100%;
        }

        /*----------------------------------------------
    # Nav bar 
----------------------------------------------*/
        .navbar-top {
            padding: 13px 0 4px 0;
            background: var(--main-color);
        }

        .navbar-top ul {
            margin: 0;
            padding: 0;
            line-height: initial;
        }

        .navbar-top ul li {
            display: inline-block;
            list-style: none;
            margin-right: 20px;
            padding-bottom: 10px;
        }

        .navbar-top ul li:last-child {
            margin-right: 0;
        }

        .navbar-top ul li p,
        .navbar-top ul li a {
            margin: 0;
            font-size: 14px;
            color: var(--heading-color);
            font-weight: 500;
        }

        .navbar-top ul li p img,
        .navbar-top ul li a img {
            margin-right: 5px;
        }

        .navbar-top ul li p i,
        .navbar-top ul li a i {
            margin-right: 5px;
        }

        .navbar-top ul li a:hover {
            color: #1DC295;
        }

        .navbar-top .topbar-right a {
            margin: 0 7px;
        }

        .navbar-top .topbar-right li a i {
            margin-right: 0;
        }

        .navbar-top .topbar-right li a:last-child {
            margin-right: 0;
        }

        .navbar-top .topbar-right li:first-child {
            margin: 0;
            padding-right: 17px;
        }

        .navbar-top .topbar-right li:last-child {
            border-right: 0;
            padding-right: 0;
        }

        .navbar-area {
            position: absolute;
            width: 100%;
            z-index: 99;
        }

        .navbar-area .nav-container {
            background-color: transparent;
            padding: 12px 15px;
            transition: all 0.4s;
        }

        .navbar-area .nav-container .logo a {
            font-weight: 700;
            font-size: 24px;
            color: #fff;
        }

        .navbar-area .nav-container .logo a img {
            height: auto;
        }

        .navbar-area .nav-container .btn-transparent {
            font-size: 13px;
            font-weight: 700;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav {
            display: block;
            width: 100%;
            padding-left: 80px;
            text-align: left;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li {
            display: inline-block;
            font-weight: 500;
            line-height: 50px;
            text-transform: capitalize;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li a {
            color: var(--heading-color);
            font-weight: 500;
            font-size: 17px;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li:hover a {
            color: var(--main-color);
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li+li {
            margin-left: 15px;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children {
            position: relative;
            z-index: 0;
            padding-right: 14px;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children:before {
            content: "";
            position: absolute;
            right: 3px;
            top: 50%;
            height: 10px;
            width: 2px;
            background: var(--heading-color);
            transform: translateY(-50%);
            transition: all 0.3s ease-in;
            margin-top: 0px;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children:after {
            content: "";
            position: absolute;
            right: -1px;
            top: 25px;
            height: 2px;
            width: 10px;
            background: var(--heading-color);
            transform: translateY(-50%);
            transition: all 0.3s ease-in;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children:hover {
            transition: all 0.4s ease;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children:hover:before {
            opacity: 0;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children:hover:after {
            background: var(--main-color);
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children:hover>.sub-menu {
            visibility: visible;
            opacity: 1;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu {
            position: absolute;
            text-align: left;
            min-width: 210px;
            margin: 0;
            padding: 0;
            list-style: none;
            left: 0;
            top: 100%;
            box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.05);
            background-color: #fff;
            z-index: 9;
            overflow: hidden;
            visibility: hidden;
            opacity: 0;
            transition: all 0.4s ease;
            border-radius: 0;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu.border-bt0 {
            border-bottom: 0px !important;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li {
            display: block;
            margin-left: 0;
            line-height: 22px;
            font-size: 15px;
            transition: all 0.4s ease;
            border-bottom: 1px solid #f5f5f5;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li a {
            display: block;
            padding: 10px 20px;
            white-space: nowrap;
            transition: all 0.3s;
            color: #050a30;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.4s ease;
            position: relative;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li a:before {
            position: absolute;
            left: 17px;
            top: 50%;
            content: "";
            font-family: "fontawesome";
            /* IE 9 */
            /* Chrome, Safari, Opera */
            transform: translateY(-50%);
            visibility: hidden;
            opacity: 0;
            transition: 0.4s;
            color: #fff;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li:hover {
            background: #061539;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li:hover a {
            color: #fff;
            padding: 10px 20px 10px 30px;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li:hover a:before {
            visibility: visible;
            opacity: 1;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li:last-child {
            border-bottom: 0;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu .menu-item-has-children {
            position: relative;
            z-index: 0;
            padding-right: 0px;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu .menu-item-has-children:before {
            position: absolute;
            right: 15px;
            top: 50%;
            content: "";
            font-family: "fontawesome";
            /* IE 9 */
            /* Chrome, Safari, Opera */
            transform: translateY(-50%);
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu .menu-item-has-children>.sub-menu {
            left: 100%;
            top: 20px;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu .menu-item-has-children>.sub-menu .sub-menu .sub-menu {
            left: auto;
            right: 100%;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu .menu-item-has-children:hover>.sub-menu {
            visibility: visible;
            opacity: 1;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu .menu-item-has-children:hover>.sub-menu li:hover:before {
            color: #fff;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav>li {
            margin-right: 12px;
        }

        .sticky-active {
            animation: 300ms ease-in-out 0s normal none 1 running fadeInDown;
            left: 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999;
            box-shadow: 0 10px 20px 0 rgba(46, 56, 220, 0.05);
        }

        .navbar-area-1.sticky-active {
            background: #fff;
        }

        .navbar-area-2 {
            background: rgba(0, 33, 71, 0.4);
        }

        .navbar-area-2 .nav-container .navbar-collapse .navbar-nav>li>a {
            color: #fff;
        }

        .navbar-area-2 .nav-container .navbar-collapse .navbar-nav>li.menu-item-has-children:before {
            background: #fff;
        }

        .navbar-area-2 .nav-container .navbar-collapse .navbar-nav>li.menu-item-has-children:after {
            background: #fff;
        }

        .navbar-area-2.sticky-active {
            background: var(--heading-color);
        }

        .navbar-area-3 {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .navbar-area-3 .nav-container .navbar-collapse .navbar-nav>li>a {
            color: #fff;
        }

        .navbar-area-3 .nav-container .navbar-collapse .navbar-nav>li.menu-item-has-children:before {
            background: #fff;
        }

        .navbar-area-3 .nav-container .navbar-collapse .navbar-nav>li.menu-item-has-children:after {
            background: #fff;
        }

        .navbar-area-3.sticky-active {
            background: var(--heading-color);
            border-bottom: 0;
        }

        .navbar-nav {
            opacity: 0;
            margin-right: -30px;
            visibility: hidden;
            transition: all 0.3s ease 0s;
        }

        .menu-open {
            opacity: 1;
            margin-right: 0;
            visibility: visible;
        }

        .bar1 {
            width: 32px;
            height: 2px;
            margin-bottom: 5px;
            position: absolute;
            background: #fff;
            z-index: 9999;
            top: 10px;
            right: -5px;
        }

        .bar2 {
            width: 24px;
            height: 2px;
            margin-bottom: 5px;
            position: absolute;
            background: #fff;
            z-index: 9999;
            top: 17px;
            right: -5px;
        }

        .bar3 {
            width: 18px;
            height: 2px;
            margin-bottom: 5px;
            position: absolute;
            background: #fff;
            z-index: 9999;
            top: 24px;
            right: -5px;
        }

        .responsive-mobile-menu button:focus {
            outline: none;
            border: none;
        }

        /**************** nav-right-part *************/
        .nav-right-part .btn {
            height: 45px;
            line-height: 45px;
            padding: 0 25px;
        }

        .nav-right-part a {
            margin-left: 20px;
            color: var(--heading-color);
        }

        .nav-right-part .search-bar {
            border: 1px solid rgba(0, 33, 71, 0.2);
            display: inline-block;
            height: 45px;
            width: 45px;
            line-height: 43px;
            text-align: center;
        }

        .nav-right-part .search-bar:hover {
            background: var(--main-color);
            border: 1px solid var(--main-color);
        }

        .nav-right-part .emt-phone-wrap {
            display: inline-block;
        }

        .nav-right-part .emt-phone-wrap .emt-phone {
            display: flex;
        }

        .nav-right-part .emt-phone-wrap .emt-phone i {
            font-size: 22px;
            display: inline-block;
            border: 1px solid var(--main-color);
            height: 45px;
            width: 45px;
            line-height: 45px;
            border-radius: 50%;
            text-align: center;
            color: #fff;
            margin-right: 10px;
        }

        .nav-right-part .emt-phone-wrap .emt-phone .phone-number {
            line-height: 1.4;
            font-size: 15px;
            color: #fff;
        }

        .nav-right-part .emt-phone-wrap .emt-phone .phone-number span {
            font-weight: 500;
        }

        .nav-right-part.style-black a {
            color: #fff;
        }

        .nav-right-part.style-black .btn {
            color: var(--heading-color);
        }

        .nav-right-part.style-black .search-bar {
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .nav-right-part.style-black .search-bar:hover {
            border: 1px solid var(--main-color);
        }

        .nav-right-part-desktop {
            margin-left: 20px;
        }

        .nav-right-part-mobile {
            display: none;
        }



        @media only screen and (max-width: 991px) {
            .navbar-area-2 .nav-container .navbar-collapse .navbar-nav>li.menu-item-has-children:before {
                background: var(--heading-color);
            }

            .navbar-area-2 .nav-container .navbar-collapse .navbar-nav>li.menu-item-has-children:after {
                background: var(--heading-color);
            }

            .navbar-area-3 .nav-container .navbar-collapse .navbar-nav>li.menu-item-has-children:before {
                background: var(--heading-color);
            }

            .navbar-area-3 .nav-container .navbar-collapse .navbar-nav>li.menu-item-has-children:after {
                background: var(--heading-color);
            }

            .navbar-area .nav-container {
                padding: 10px 15px;
            }

            .nav-right-part {
                margin-right: 50px;
            }

            .nav-right-part .btn .right {
                padding-left: 5px;
                font-size: 13px;
            }

            .navbar-area .nav-container {
                position: relative;
                z-index: 0;
            }

            .navbar-area .nav-container .navbar-toggler {
                padding: 0px;
            }

            .navbar-area .nav-container .navbar-collapse {
                margin-top: 13px;
                padding-right: 0;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav {
                display: block;
                margin-top: 20px;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li {
                display: block;
                text-align: left;
                line-height: 30px;
                padding: 10px 0;
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li a {
                display: block;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li:last-child {
                border-bottom: none;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li+li {
                margin-left: 0;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children:before {
                top: 25px;
                right: 3px !important;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu {
                position: initial;
                display: block;
                width: 100%;
                border-top: none;
                box-shadow: none;
                margin-left: 0;
                padding-bottom: 0;
                height: auto;
                overflow: hidden;
                max-height: 250px;
                overflow-y: scroll;
                background-color: transparent;
                border-radius: 10px;
                padding: 0px;
                border-bottom: none;
                display: none;
                transition: none;
                visibility: visible;
                opacity: 1;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu .sub-menu .menu-item-has-children:before {
                content: "";
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li {
                padding: 0;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li.menu-item-has-children:hover:before {
                top: 30px;
                color: #fff;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li+li {
                border-top: none;
            }
        }

        .sopen {
            display: block;
        }

        .toggle-btn {
            left: auto;
            right: -10px;
            position: absolute;
            top: 12px;
            width: 40px;
            height: 40px;
            transition-duration: 0.5s;
            border: 0;
            background: transparent;
        }

        .toggle-btn .icon-left {
            transition-duration: 0.5s;
            position: absolute;
            height: 2px;
            width: 11px;
            top: 18px;
            background-color: #fff;
            left: 7px;
        }

        .toggle-btn .icon-left:before {
            transition-duration: 0.5s;
            position: absolute;
            width: 11px;
            height: 2px;
            background-color: #fff;
            content: "";
            top: -7px;
            left: 0;
        }

        .toggle-btn .icon-left:after {
            transition-duration: 0.5s;
            position: absolute;
            width: 11px;
            height: 2px;
            background-color: #fff;
            content: "";
            top: 7px;
            left: 0;
        }

        .toggle-btn .icon-left:hover {
            cursor: pointer;
        }

        .toggle-btn .icon-right {
            transition-duration: 0.5s;
            position: absolute;
            height: 2px;
            width: 11px;
            top: 18px;
            background-color: #fff;
            left: 18px;
        }

        .toggle-btn .icon-right:before {
            transition-duration: 0.5s;
            position: absolute;
            width: 11px;
            height: 2px;
            background-color: #fff;
            content: "";
            top: -7px;
            left: 0;
        }

        .toggle-btn .icon-right:after {
            transition-duration: 0.5s;
            position: absolute;
            width: 11px;
            height: 2px;
            background-color: #fff;
            content: "";
            top: 7px;
            left: 0;
        }

        .toggle-btn .icon-right:hover {
            cursor: pointer;
        }

        .toggle-btn.open .icon-left {
            transition-duration: 0.5s;
            background: transparent;
        }

        .toggle-btn.open .icon-left:before {
            transform: rotateZ(45deg) scaleX(1.4) translate(2px, 1px);
        }

        .toggle-btn.open .icon-left:after {
            transform: rotateZ(-45deg) scaleX(1.4) translate(2px, -1px);
        }

        .toggle-btn.open .icon-right {
            transition-duration: 0.5s;
            background: transparent;
        }

        .toggle-btn.open .icon-right:before {
            transform: rotateZ(-45deg) scaleX(1.4) translate(-2px, 1px);
        }

        .toggle-btn.open .icon-right:after {
            transform: rotateZ(45deg) scaleX(1.4) translate(-2px, -1px);
        }

        .toggle-btn:hover {
            cursor: pointer;
        }

        .navbar-area-1 .toggle-btn .icon-left {
            background-color: var(--main-color);
        }

        .navbar-area-1 .toggle-btn .icon-left:before {
            background-color: var(--main-color);
        }

        .navbar-area-1 .toggle-btn .icon-left:after {
            background-color: var(--main-color);
        }

        .navbar-area-1 .toggle-btn .icon-right {
            background-color: var(--main-color);
        }

        .navbar-area-1 .toggle-btn .icon-right:before {
            background-color: var(--main-color);
        }

        .navbar-area-1 .toggle-btn .icon-right:after {
            background-color: var(--main-color);
        }

        .navbar-area-1 .toggle-btn.open .icon-left {
            background-color: transparent;
        }

        .navbar-area-1 .toggle-btn.open .icon-right {
            background-color: transparent;
        }

        @media only screen and (min-width: 992px) and (max-width: 1199px) {
            .navbar-area .nav-container .navbar-collapse .navbar-nav li {
                font-size: 16px;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li+li {
                margin-left: 5px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .responsive-mobile-menu {
                display: block;
                width: 100%;
                position: relative;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li {
                font-size: 14px;
            }
        }

        @media only screen and (max-width: 1199px) {
            .margin-xlt-80 {
                margin-top: 0px;
            }

            .contact-widget .contact_info_list li.single-info-item .details {
                padding-left: 25px;
            }
        }

        @media only screen and (max-width: 991px) {
            .navbar-area .nav-container .navbar-collapse .navbar-nav {
                padding-left: 0;
                padding: 0 20px;
            }

            .navbar-area .logo {
                padding-top: 0px !important;
            }

            .navbar-collapse {
                background: #fff;
                margin-top: 0px;
                width: 100%;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children:before {
                right: 20px;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav {
                margin-bottom: 20px;
            }

            .navbar-area {
                padding-bottom: 0px;
            }

            .navbar-expand-lg .navbar-collapse {
                margin-top: 0px;
            }

            .contact-widget .contact_info_list li.single-info-item .details {
                padding-left: 25px;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu {
                padding: 0 0 0 20px;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li a {
                padding: 12px 0;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li:last-child a {
                padding-bottom: 3px;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li a:hover i {
                opacity: 0;
                margin-right: -18px;
            }

            .nav-right-part-mobile {
                display: block;
            }

            .nav-right-part-desktop {
                display: none;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li.menu-item-has-children .sub-menu li:hover {
                background: none;
            }

            .navbar-area .nav-container .navbar-collapse .navbar-nav li a {
                color: var(--heading-color);
            }
        }

        /* Tablet Layout wide: 767px. */
        @media only screen and (max-width: 767px) {
            .logo-wrapper.mobile-logo {
                display: block;
                width: 100%;
            }

            .responsive-mobile-menu {
                display: block;
                width: 100%;
                position: relative;
            }

            .responsive-mobile-menu .navbar-toggler {
                position: absolute;
                left: calc(100% - 130px);
                top: 10px;
            }

            .table-responsive {
                display: block !important;
            }

            .btn-custom-default,
            .btn-custom-white {
                font-size: 14PX;
                line-height: 33px;
                padding: 6px 20px;
            }

            .navbar-area .logo {
                padding-top: 0px !important;
            }
        }

        /* medium tablet layout 599px */
        @media only screen and (max-width: 575px) {
            .navbar-area .nav-container {
                margin: 0px 0px;
            }

            .navbar-area .logo {
                padding-top: 10px;
            }

            .widget.footer-widget .subscribe-form.subscribe-form-style2 .form-control {
                padding: 15px 20px;
            }

            .widget.footer-widget .subscribe-form.subscribe-form-style2 .btn {
                padding: 15px 20px;
            }

            .search-popup .search-form {
                min-width: 350px;
            }
        }

        @media only screen and (max-width: 375px) {

            .btn-custom-default,
            .btn-custom-white {
                padding: 5px 18px;
            }

            .search-popup .search-form .form-group .form-control,
            .search-popup .search-form .submit-btn {
                height: 45px;
            }

            .search-popup .search-form {
                min-width: 300px;
            }
        }

        @media only screen and (max-width: 320px) {
            .search-popup .search-form {
                min-width: 265px;
            }

            .responsive-mobile-menu .navbar-toggler {
                left: calc(100% - 95px);
            }
        }

        /*----------------------------------------
  ## Search Popup
----------------------------------------*/
        .td-search-popup.active .search-form {
            visibility: visible;
            opacity: 1;
            width: 40%;
        }

        .td-search-popup .search-form {
            width: 35%;
            position: absolute;
            position: fixed;
            top: 50%;
            left: 50%;
            transition: all 0.4s ease;
            visibility: hidden;
            opacity: 0;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }

        .td-search-popup .search-form .form-group .form-control {
            border: none;
            border-top-right-radius: 6px;
            border-bottom-right-radius: 6px;
            height: 54px;
            padding: 0 75px 0 25px;
            background: #f7f9fb;
        }

        .td-search-popup .search-form .form-group .form-control:hover,
        .td-search-popup .search-form .form-group .form-control:focus,
        .td-search-popup .search-form .form-group .form-control:active {
            outline: 0;
            box-shadow: none;
        }

        .td-search-popup .search-form .submit-btn {
            position: absolute;
            right: 0;
            top: 0;
            width: 60px;
            height: 54px;
            border: 0;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            color: #ffffff;
            transition: all 0.4s ease;
            padding: 0;
            text-align: center;
            cursor: pointer;
        }

        .td-search-popup .search-form .submit-btn:focus,
        .td-search-popup .search-form .submit-btn:active {
            outline: 0;
            box-shadow: none;
        }

        .body-overlay {
            position: fixed;
            width: 100%;
            height: 100%;
            display: block;
            background: rgba(0, 0, 0, 0.95);
            z-index: 999;
            content: "";
            left: 0;
            top: 0;
            visibility: hidden;
            opacity: 0;
            transition: all 0.4s ease;
            cursor: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVBAMAAABbObilAAAAMFBMVEVMaXH////////////////////////////////////////////////////////////6w4mEAAAAD3RSTlMAlAX+BKLcA5+b6hJ7foD4ZP1OAAAAkUlEQVR4XkWPoQ3CUBQAL4SktoKAbCUjgAKLJZ2ABYosngTJCHSD6joUI6BZgqSoB/+Shqde7sS9x3OGk81fdO+texMtRVTia+TsQtHEUJLdohJfgNNPJHyEJPZTsWLoxShqsWITazEwqePAn69Sw2TUxk1+euPis3EwaXy8RMHSZBIlRcKKnC5hRctjMf57/wJbBlAIs9k1BAAAAABJRU5ErkJggg==), progress;
        }

        .body-overlay.active {
            visibility: visible;
            opacity: 0.97;
        }

        .mfp-zoom-in {
            /* animate in */
            /* animate out */
        }

        .mfp-zoom-in .mfp-content {
            opacity: 0;
            transition: all 0.4s ease;
            transform: scale(0.7);
        }

        .mfp-zoom-in.mfp-bg {
            opacity: 0;
            transition: all 0.4s ease;
        }

        .mfp-zoom-in.mfp-ready .mfp-content {
            opacity: 1;
            transform: scale(1);
        }

        .mfp-zoom-in.mfp-ready.mfp-bg {
            opacity: 0.7;
        }

        .mfp-zoom-in.mfp-removing .mfp-content {
            transform: scale(0.7);
            opacity: 0;
        }

        .mfp-zoom-in.mfp-removing.mfp-bg {
            opacity: 0;
        }

        /************ single-inpur-inner ************/
        .single-input-inner {
            margin-bottom: 20px;
        }

        .single-input-inner input {
            width: 100%;
            border: 2px solid rgba(8, 76, 148, 0.2) !important;
            height: 58px;
            border-radius: 4px;
            padding: 0 18px;
        }

        .single-input-inner input::placeholder {
            color: #bbbbbb;
        }

        .single-input-inner textarea {
            width: 100%;
            border: 2px solid rgba(8, 76, 148, 0.2) !important;
            height: 140px;
            border-radius: 5px;
            padding: 14px 18px;
        }

        .single-input-inner textarea::placeholder {
            color: #bbbbbb;
        }

        .single-input-inner.style-checkbox {
            color: var(--heading-color);
        }

        .single-input-inner.style-checkbox input {
            height: 24px;
            width: 24px;
            float: left;
            margin-top: 2px;
            margin-right: 8px;
        }

        .single-input-inner.style-border-bottom input {
            border: 0 !important;
            border-bottom: 1px solid rgba(8, 76, 148, 0.2) !important;
            border-radius: 0;
            background: transparent;
            padding: 0;
        }

        .single-input-inner.style-right-icon {
            position: relative;
        }

        .single-input-inner.style-right-icon img {
            position: absolute;
            right: 15px;
            top: 23px;
        }

        .single-checkbox-inner {
            margin-bottom: 20px;
        }

        /*----------------------------------------------
    ## Banner
----------------------------------------------*/
        .banner-inner {
            position: relative;
            z-index: 2;
        }

        .banner-inner .banner-btn {
            height: 35px;
            background: rgba(255, 255, 255, 0.2);
            display: inline-block;
            border-radius: 35px;
            line-height: 35px;
            padding: 0 30px;
            font-size: 14px;
            font-weight: 400;
            color: #fff;
            margin-bottom: 20px;
        }

        .banner-inner .sub-title {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }

        .banner-inner .sub-title:after {
            position: absolute;
            content: "";
            right: -60px;
            top: 9px;
            background: var(--heading-color);
            height: 1px;
            width: 30px;
        }

        .banner-inner .title {
            margin-bottom: 32px;
        }

        .banner-inner.style-white .sub-title {
            color: #fff;
        }

        .banner-inner.style-white .sub-title:after {
            background: #fff;
        }

        .banner-inner.style-white .title {
            color: #fff;
        }

        .banner-inner .b-animate-1 {
            animation: 1.5s 0.2s fadeInLeft both;
        }

        .banner-inner .b-animate-2 {
            animation: 1.5s 0.4s fadeInLeft both;
        }

        .banner-inner .b-animate-3 {
            animation: 1.5s 0.6s fadeInLeft both;
        }

        .b-animate-thumb {
            animation: 1.5s 0.4s fadeInRight both;
        }

        .banner-area {
            position: relative;
        }

        .banner-area-1 {
            padding: 205px 0;
        }

        .banner-area-2 {
            background-size: cover !important;
            padding: 270px 0 200px;
        }

        .banner-area-2:after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 33, 71, 0.9);
        }

        .banner-area-3 {
            padding: 270px 0 200px;
        }

        /*----------------------------------------------
    ## All section style
----------------------------------------------*/
        .intro-title {
            padding: 30px;
        }

        .intro-title h3 {
            color: #fff;
        }

        .intro-title p {
            color: #fff;
            margin-bottom: 20px;
        }

        .intro-title ul {
            padding: 0;
            margin: 0;
        }

        .intro-title ul li {
            list-style: none;
            color: #fff;
            margin-bottom: 5px;
        }

        .intro-title ul li i {
            margin-right: 5px;
        }

        .intro-title ul li:last-child {
            margin-bottom: 0;
        }

        .single-intro-inner {
            padding: 20px;
            border-radius: 7px;
            transition: 0.4s;
        }

        .single-intro-inner .thumb {
            margin-bottom: 2px;
        }

        .single-intro-inner .thumb img {
            width: auto !important;
            display: inline-block;
        }

        .single-intro-inner .details h5 {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 6px;
        }

        .single-intro-inner .details p {
            margin-bottom: 0;
        }

        .single-intro-inner .details .read-more {
            height: 48px;
            width: 48px;
            line-height: 48px;
            color: #fff;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            display: inline-block;
            margin-top: 24px;
        }

        .single-intro-inner .details .read-more-text {
            margin-top: 10px;
            display: inline-block;
            font-weight: 500;
            color: var(--heading-color);
        }

        .single-intro-inner .details .read-more-text i {
            margin-left: 3px;
        }

        .single-intro-inner .details .read-more-text:hover {
            color: var(--main-color);
        }

        .single-intro-inner.style-white h5 {
            color: #fff;
        }

        .single-intro-inner.style-white p {
            color: #fff;
        }

        .single-intro-inner.style-icon-bg {
            padding: 40px 15px 30px 15px;
            border: 3px solid #F0F4F9;
            margin-bottom: 30px;
        }

        .single-intro-inner.style-icon-bg .thumb {
            height: 90px;
            width: 90px;
            line-height: 90px;
            text-align: center;
            display: inline-block;
            background: var(--main-color);
            border-radius: 5px;
            position: relative;
            margin-bottom: 22px;
        }

        .single-intro-inner.style-icon-bg .thumb .intro-count {
            height: 34px;
            width: 34px;
            border-radius: 50%;
            line-height: 34px;
            text-align: center;
            background: var(--heading-color);
            color: #fff;
            position: absolute;
            right: -17px;
            top: -17px;
        }

        .single-intro-inner.style-icon-bg .details h5 {
            margin-bottom: 12px;
        }

        .single-intro-inner.style-icon-bg:hover {
            border: 3px solid var(--main-color);
        }

        .single-intro-inner.style-thumb {
            margin-bottom: 50px;
        }

        .single-intro-inner.style-thumb .thumb {
            margin-bottom: 30px;
        }

        .intro-area-inner {
            border-radius: 8px;
            overflow: hidden;
        }

        .intro-area-inner ul {
            margin: 0;
            padding: 0;
        }

        .intro-area-inner ul li {
            list-style: none;
        }

        .intro-area-inner ul li .single-intro-inner {
            position: relative;
        }

        .intro-area-inner ul li .single-intro-inner:after {
            content: "";
            position: absolute;
            left: 0;
            top: -50%;
            height: 200%;
            width: 1px;
            background: rgba(255, 255, 255, 0.1);
        }

        .intro-area-inner-2 {
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
            background: #fff;
            padding: 50px 0 0 0;
            border-radius: 8px;
        }

        .intro-area-inner-2 .intro-footer {
            padding: 30px 30px 10px 30px;
            border-radius: 0 0 7px 7px;
        }

        .intro-area--top {
            margin-top: -70px;
            position: relative;
            z-index: 2;
        }

        .intro-slider .owl-nav {
            display: none;
        }

        /************* single-list-box *************/
        .single-list-wrap {
            margin: 0;
            padding: 0;
        }

        .single-list-wrap li {
            list-style: none;
        }

        .single-list-wrap li:last-child {
            margin-bottom: 0;
        }

        .single-list-inner {
            margin-bottom: 20px;
        }

        .single-list-inner.style-white p,
        .single-list-inner.style-white h5 {
            color: #fff;
        }

        .single-list-inner .media .media-left {
            margin-right: 14px;
        }

        .single-list-inner .media .media-body p {
            margin-bottom: 0;
        }

        .single-list-inner.style-check i {
            margin-right: 9px;
            color: var(--main-color);
        }

        .single-list-inner.style-check p {
            display: inline-block;
        }

        .single-list-inner.style-check-box i {
            height: 28px;
            width: 28px;
            line-height: 28px;
            border-radius: 50%;
            background: var(--main-color);
            text-align: center;
            font-size: 15px;
            display: inline-block;
            margin-right: 9px;
            color: var(--heading-color);
        }

        .single-list-inner.style-check-box p {
            display: inline-block;
        }

        .single-list-inner.style-check-box-grid {
            margin-bottom: 26px;
        }

        .single-list-inner.style-check-box-grid .media .media-left {
            height: 60px;
            width: 60px;
            line-height: 60px;
            border-radius: 7px;
            background: var(--main-color);
            text-align: center;
            font-size: 20px;
            display: inline-block;
            color: var(--heading-color);
        }

        .single-list-inner.style-check-box-grid-2 {
            margin-bottom: 26px;
        }

        .single-list-inner.style-check-box-grid-2 .media .media-left {
            height: 80px;
            width: 80px;
            line-height: 80px;
            border-radius: 7px;
            background: var(--main-color);
            text-align: center;
            font-size: 20px;
            display: inline-block;
            color: var(--heading-color);
        }

        .single-list-inner.style-check-box-grid-2 .media .media-body p {
            font-size: 15px;
        }

        .single-list-inner.style-box .media .media-left {
            height: 70px;
            width: 70px;
            line-height: 70px;
            border-radius: 7px;
            background: var(--main-color);
            text-align: center;
            font-size: 20px;
            display: inline-block;
            color: var(--heading-color);
        }

        .single-list-inner.style-box .media .media-body h5 {
            margin-bottom: 0;
        }

        .single-list-inner.style-box .media .media-body p {
            color: var(--heading-color);
            font-size: 15px;
        }

        .single-list-inner.style-box-2 .media .media-left {
            height: 100px;
            width: 82px;
            line-height: 100px;
            border-radius: 7px;
            background: rgba(29, 194, 149, 0.1);
            text-align: center;
            font-size: 20px;
            display: inline-block;
            color: var(--heading-color);
        }

        .single-list-inner.style-box-2 .media .media-body h5 {
            margin-bottom: 0;
        }

        .single-list-inner.style-box-2 .media .media-body p {
            font-size: 15px;
        }

        .single-list-inner.style-box-bg {
            background: #fff;
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
            padding: 10px;
            border-radius: 7px;
        }

        .single-list-inner.style-box-bg .media .media-left {
            height: 70px;
            width: 70px;
            line-height: 70px;
            border-radius: 7px;
            background: var(--main-color);
            text-align: center;
            font-size: 20px;
            display: inline-block;
            color: var(--heading-color);
        }

        .single-list-inner.style-box-bg .media .media-body h5 {
            margin-bottom: 0;
        }

        .single-list-inner.style-box-bg .media .media-body p {
            color: var(--heading-color);
        }

        /************** about-thumb-wrap ***************/
        .about-thumb-wrap {
            height: 100%;
            min-height: 350px;
            position: relative;
            background-size: cover !important;
            background-position: center center !important;
            border-radius: 7px;
        }

        .about-thumb-wrap.style-two {
            background-size: 100% 100% !important;
        }

        .about-thumb-wrap.after-shape {
            margin-right: 30px;
        }

        .about-thumb-wrap.after-shape:after {
            content: "";
            position: absolute;
            right: -30px;
            width: 154px;
            height: 80%;
            top: 50%;
            border-radius: 10px;
            background: var(--main-color);
            z-index: -1;
            transform: translateY(-50%);
        }

        .about-thumb-wrap.left-icon {
            margin-left: 20px;
            height: 86%;
            background-size: cover !important;
        }

        .about-thumb-wrap.left-icon .about-icon {
            position: absolute;
            left: -20px;
            top: -20px;
        }

        .about-thumb-wrap.left-icon .about-icon img {
            border-radius: 7px;
        }

        .about-thumb-wrap.left-icon .bottom-content {
            color: var(--heading-color);
            padding: 30px;
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
            background: #FFF;
            position: absolute;
            bottom: -14%;
            margin: 0 40px;
            border-radius: 7px;
            content: "";
        }

        .about-thumb-wrap.left-icon .bottom-content:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 5%;
            height: 4px;
            width: 90%;
            background: var(--main-color);
        }

        .about-inner-wrap {
            padding: 20px 0;
        }

        /************** single-testimonial-inner **************/
        .single-testimonial-inner {
            padding: 50px;
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
            margin: 9px;
        }

        .single-testimonial-inner .testimonial-quote {
            font-size: 50px;
            position: absolute;
            top: 25px;
            left: 50px;
            z-index: -1;
            color: rgba(255, 255, 255, 0.15);
        }

        .single-testimonial-inner p {
            color: var(--heading-color);
        }

        .single-testimonial-inner .testimonial-author .media-left {
            margin-right: 15px;
            height: 70px;
            width: 70px;
            position: relative;
        }

        .single-testimonial-inner .testimonial-author .media-left img {
            border-radius: 50%;
        }

        .single-testimonial-inner .testimonial-author .media-left i {
            height: 30px;
            width: 30px;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
            background: #2878EB;
            font-size: 14px;
            color: #fff;
            position: absolute;
            right: -2px;
            bottom: -2px;
        }

        .single-testimonial-inner .testimonial-author .media-body h6 {
            margin-bottom: 10px;
        }

        .single-testimonial-inner .testimonial-author .media-body p {
            margin-bottom: 0;
            font-size: 15px;
            line-height: 1;
        }

        .single-testimonial-inner.style-white {
            box-shadow: none;
        }

        .single-testimonial-inner.style-white p {
            color: #fff;
        }

        .single-testimonial-inner.style-white .testimonial-author .media-left i {
            display: none;
        }

        .single-testimonial-inner.style-white .testimonial-author .media-body h6 {
            color: #fff;
        }

        .single-testimonial-inner.style-white .testimonial-author .media-body p {
            color: #fff;
        }

        .testimonial-area-inner {
            border-radius: 7px;
            position: relative;
            margin-top: 40px;

        }

        .testimonial-area-inner .testimonial-right-img {
            position: absolute;
            right: 20px;
            bottom: 0;
            height: 350px;
        }

        .testimonial-slider {
            padding-right: 40%;
        }

        .testimonial-slider .owl-nav {
            display: inline-block;
            background: var(--main-color);
            position: absolute;
            right: 0;
            bottom: 0;
            border-radius: 7px 0 7px 0;
        }

        .testimonial-slider .owl-nav button {
            background: transparent;
            border: 0;
            padding: 4px 16px;
            color: var(--heading-color);
            font-size: 22px;
            cursor: pointer;
        }

        .testimonial-slider-2 .owl-nav {
            display: none;
        }

        .testimonial-slider-2 .single-testimonial-inner {
            margin: 0;
            padding: 13px 0 0 0;
            box-shadow: none;
        }

        .testimonial-slider-2 .single-testimonial-inner .testimonial-quote {
            color: var(--main-color);
            top: -20px;
            left: auto;
            right: 30px;
            z-index: 1;
        }

        .testimonial-slider-2 .single-testimonial-inner>p {
            background-color: #fff;
            font-size: 16px;
            padding: 38px 30px;
            position: relative;
            border-radius: 5px;
            margin-bottom: 32px;
        }

        .testimonial-slider-2 .single-testimonial-inner>p:after {
            content: "";
            position: absolute;
            width: 30px;
            height: 18px;
            bottom: -18px;
            left: 50px;
            border-top: solid 18px #fff;
            border-left: solid 18px transparent;
            border-right: solid 18px transparent;
        }

        .testimonial-slider-2 .single-testimonial-inner .testimonial-author {
            margin-left: 30px;
        }

        .testimonial-slider-2 .single-testimonial-inner .testimonial-author img {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.07);
        }

        .testimonial-slider-2 .single-testimonial-inner .testimonial-author .media-left {
            border-radius: 50%;
            width: 80px;
            height: 80px;
        }

        .testimonial-slider-3 .owl-nav {
            display: none;
        }

        /************** single-team-inner **************/
        .single-team-inner {
            margin-bottom: 30px;
        }

        .single-team-inner .thumb {
            border-radius: 7px;
            overflow: hidden;
        }

        .single-team-inner .thumb img {
            transition: 0.7s;
            width: auto !important;
            overflow: hidden;
        }

        .single-team-inner .thumb .social-wrap {
            position: absolute;
            right: 30px;
            top: 28px;
        }

        .single-team-inner .thumb .social-wrap .social-share {
            height: 48px;
            width: 48px;
            line-height: 48px;
            background: var(--main-color);
            border-radius: 4px;
            text-align: center;
            color: var(--heading-color);
            display: inline-block;
            position: relative;
            z-index: 3;
        }

        .single-team-inner .details {
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
            padding: 20px 30px;
            margin: 0 35px;
            margin-top: -55px;
            position: relative;
            z-index: 2;
            background: #fff;
            border-radius: 7px;
        }

        .single-team-inner .details h4 {
            margin-bottom: 5px;
        }

        .single-team-inner:hover .thumb img {
            transform: scale(1.1);
        }

        .team-slider .owl-nav {
            display: none;
        }

        .social-wrap-inner ul {
            margin: 0;
            padding: 0;
            height: 0;
            overflow: hidden;
            transition: 0.6s;
        }

        .social-wrap-inner ul li {
            list-style: none;
        }

        .social-wrap-inner ul li a {
            height: 48px;
            width: 48px;
            line-height: 48px;
            background: var(--main-color);
            border-radius: 4px;
            text-align: center;
            color: var(--heading-color);
            display: inline-block;
            position: relative;
            z-index: 3;
            margin-top: 5px;
        }

        .social-wrap-inner:hover ul {
            height: 300px;
        }

        /***spaciality-area***/
        .spaciality-area {
            transform: translateY(50%);
        }

        .spaciality-area .testimonial-area-inner {
            background-position: center;
            margin-top: 0;
        }

        .spaciality-area .single-testimonial-inner {
            width: 62%;
            margin: 0;
            padding: 43px 0 36px 35px;
            overflow: hidden;
        }

        .spaciality-area .single-testimonial-inner h4 {
            font-size: 25px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .spaciality-area .single-testimonial-inner p {
            font-size: 16px;
        }

        .spaciality-area .single-testimonial-inner .single-list-wrap .single-list-inner {
            color: #fff;
            font-size: 16px;
            margin-bottom: 9px;
        }

        .spaciality-area .single-testimonial-inner .single-list-wrap .single-list-inner i {
            background: transparent;
            color: #fff;
            width: auto;
        }

        /*********** single-gallery-inner ************/
        .single-gallery-inner {
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            border-radius: 7px;
        }

        .single-gallery-inner .thumb {
            position: relative;
            overflow: hidden;
        }

        .single-gallery-inner .thumb:after {
            content: "";
            position: absolute;
            background-image: linear-gradient(to top, #022334 11%, rgba(255, 255, 255, 0));
            height: 85%;
            width: 100%;
            left: 0;
            bottom: 0;
            z-index: 2;
        }

        .single-gallery-inner .thumb img {
            transition: 0.7s;
        }

        .single-gallery-inner .details {
            position: absolute;
            bottom: 0;
            padding: 25px 30px;
            z-index: 3;
        }

        .single-gallery-inner .details h4 {
            color: #fff;
            margin-bottom: 0;
        }

        .single-gallery-inner .details span {
            color: #fff;
            display: block;
            margin-bottom: 5px;
        }

        .single-gallery-inner:hover .thumb img {
            transform: scale(1.1);
        }

        /*----------------------------------------------
    ## Course section style
----------------------------------------------*/
        .edmt-nav-tab {
            margin-bottom: 42px;
        }

        .edmt-nav-tab ul {
            text-align: center;
            border: 0;
            display: inline-block;
        }

        .edmt-nav-tab ul li {
            display: inline-block;
        }

        .edmt-nav-tab ul li a {
            border: 0 !important;
            color: var(--heading-color);
            font-size: 15px;
            font-weight: 500;
            height: 38px;
            line-height: 38px;
            border-radius: 40px !important;
            padding: 0 25px !important;
        }

        .edmt-nav-tab ul li a.active {
            background-color: var(--main-color) !important;
            color: var(--heading-color) !important;
        }

        .edmt-nav-tab ul li:last-child {
            margin-right: 0;
        }

        .single-course-inner {
            border-radius: 7px;
            border: 1px solid #F1F1F1;
            margin-bottom: 30px;
            position: relative;
            transition: 0.4s;
        }

        .single-course-inner .thumb {
            position: relative;
            overflow: hidden;
            border-radius: 7px 7px 0 0;
        }

        .single-course-inner .thumb img {
            transform: scale(1);
            transition: 0.9s;
        }

        .single-course-inner .details .details-inner {
            padding: 20px 20px 16px;
        }

        .single-course-inner .details .details-inner h6 {
            font-weight: 500;
        }

        .single-course-inner .details .emt-user {
            margin-bottom: 13px;
        }

        .single-course-inner .details .emt-user .u-thumb,
        .single-course-inner .details .emt-user .u-thumb img {
            height: 30px;
            width: 30px;
            border-radius: 50%;
            background: rgba(253, 200, 0, 0.2);
            display: inline-block;
            margin-right: 7px;
            box-shadow: 0px 1px 10px #c1bfbf;
        }

        .single-course-inner .details .emt-user .u-thumb img {
            border-radius: 50%;
        }

        .single-course-inner .details .emt-user span {
            font-size: 14px;
            color: var(--heading-color);
            font-weight: 500;
        }

        .single-course-inner .emt-course-meta {
            border-top: 1px solid #F1F1F1;
            padding: 14px 20px;
            font-weight: 500;
        }

        .single-course-inner .emt-course-meta .rating {
            color: var(--main-color);
        }

        .single-course-inner .emt-course-meta .rating span {
            font-size: 15px;
            color: rgba(13, 16, 52, 0.5);
        }

        .single-course-inner .emt-course-meta .price {
            color: rgba(13, 16, 52, 0.5);
        }

        .single-course-inner .emt-course-meta .price span {
            color: var(--heading-color);
        }

        .single-course-inner.style-bottom-thumb .thumb {
            margin: 0 15px 15px;
            border-radius: 7px;
        }

        .single-course-inner.style-bottom-thumb .thumb img {
            transform: scale(1.05);
        }

        .single-course-inner.style-bottom-thumb .details .details-inner {
            padding: 15px;
        }

        .single-course-inner.style-bottom-thumb .details .details-inner h6 {
            font-weight: 400;
            margin-bottom: 0;
        }

        .single-course-inner.style-bottom-thumb .emt-course-meta {
            padding: 15px;
        }

        .single-course-inner.style-bottom-thumb .emt-course-meta .price {
            height: 30px;
            line-height: 31px;
            font-size: 13px;
            font-weight: 500;
            padding: 0 15px;
            border-radius: 30px;
            background: var(--main-color);
            display: inline-block;
            color: #fff;
        }

        .single-course-inner.style-two {
            margin-top: 45px;
        }

        .single-course-inner.style-two .emt-thumb-icon {
            height: 90px;
            width: 90px;
            line-height: 90px;
            text-align: center;
            border-radius: 5px;
            background: var(--main-color);
            position: absolute;
            left: 20px;
            top: -45px;
            z-index: 2;
        }

        .single-course-inner.style-two .details h6 {
            font-size: 20px;
            margin-bottom: 0;
        }

        .single-course-inner.style-two:hover {
            background: var(--heading-color);
        }

        .single-course-inner.style-two:hover .details h6 {
            color: #fff;
        }

        .single-course-inner.style-two:hover .details .arrow-right img {
            filter: invert(100);
        }

        .single-course-inner:hover {
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
        }

        .single-course-inner:hover .thumb img {
            transform: scale(1.1);
        }

        .course-course-detaila-inner .emt-user .u-thumb {
            height: 30px;
            width: 30px;
            border-radius: 50%;
            background: rgba(253, 200, 0, 0.2);
            display: inline-block;
            margin-right: 7px;
            box-shadow: 0px 1px 10px #c1bfbf;
        }

        .course-course-detaila-inner .emt-user .u-thumb img {
            border-radius: 50%;
        }

        .course-course-detaila-inner .emt-user span {
            font-size: 14px;
            color: var(--heading-color);
            font-weight: 500;
        }

        .course-course-detaila-inner .title {
            margin-bottom: 20px;
        }

        .course-course-detaila-inner .thumb {
            margin-bottom: 30px;
        }

        .course-course-detaila-inner .thumb img {
            border-radius: 7px;
        }

        .course-details-nav-tab {
            background: transparent;
            margin-bottom: 44px;
            border: 1px solid #CBD6E2;
        }

        .course-details-nav-tab ul {
            margin: 0;
            padding: 0;
            border: 0 !important;
        }

        .course-details-nav-tab ul li {
            margin-bottom: 0 !important;
            width: 25%;
        }

        .course-details-nav-tab ul li a {
            border: 0 !important;
            border-right: 1px solid #CBD6E2 !important;
            padding: 10px 16px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 0 !important;
            color: var(--heading-color) !important;
        }

        .course-details-nav-tab ul li a.active {
            background: var(--main-color) !important;
        }

        .course-details-nav-tab ul li:last-child a {
            border-right: 0 !important;
        }

        /*------------------------------------------------
    blog style
------------------------------------------------*/
        .single-blog-inner {
            margin-bottom: 30px;
            overflow: hidden;
            border-radius: 7px;
            transition: 0.4s;
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
        }

        .single-blog-inner .thumb {
            position: relative;
        }

        .single-blog-inner .thumb .date {
            font-size: 14px;
            font-weight: 500;
            height: 35px;
            line-height: 35px;
            padding: 0 20px;
            color: var(--heading-color);
            background: var(--main-color);
            display: inline-block;
            border-radius: 30px;
            position: absolute;
            bottom: -17px;
            left: 30px;
        }

        .single-blog-inner .details {
            padding: 25px 30px 25px 30px;
        }

        .single-blog-inner .details .blog-meta {
            margin: 0;
            padding: 0;
            margin-bottom: 13px;
        }

        .single-blog-inner .details .blog-meta li {
            display: inline-block;
            margin-right: 12px;
            font-size: 12px;
            color: var(--heading-color);
        }

        .single-blog-inner .details .blog-meta li i {
            margin-right: 4px;
        }

        .single-blog-inner .details .blog-meta li:last-child {
            margin-right: 0;
        }

        .single-blog-inner .details h5 {
            margin-bottom: 16px;
        }

        .single-blog-inner .details .title {
            margin-bottom: 16px;
        }

        .single-blog-inner .details p {
            margin-bottom: 16px;
        }

        .single-blog-inner .details .read-more-text {
            font-size: 14px;
            color: var(--heading-color);
            font-weight: 500;
            transition: 0.4s;
        }

        .single-blog-inner .details .read-more-text i {
            margin-left: 3px;
        }

        .single-blog-inner .details .read-more-text:hover {
            color: var(--main-color);
        }

        .single-blog-inner.style-border {
            margin-bottom: 50px;
            border: 2px solid #E4EAF1;
            box-shadow: none;
        }

        .single-blog-inner:hover {
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.08);
        }

        .single-blog-list-inner {
            margin-bottom: 25px;
        }

        .single-blog-list-inner .date {
            font-size: 23px;
            font-weight: 500;
            width: 60px;
            height: 60px;
            line-height: 1;
            color: var(--heading-color);
            background: var(--main-color);
            display: inline-block;
            border-radius: 7px;
            text-align: center;
            padding-top: 5px;
            margin-right: 14px;
        }

        .single-blog-list-inner .date span {
            font-size: 14px;
        }

        .single-blog-list-inner .details .blog-meta {
            margin: 0;
            padding: 0;
            margin-bottom: 10px;
            line-height: 1;
        }

        .single-blog-list-inner .details .blog-meta li {
            display: inline-block;
            margin-right: 12px;
            font-size: 12px;
            color: var(--heading-color);
        }

        .single-blog-list-inner .details .blog-meta li i {
            margin-right: 4px;
        }

        .single-blog-list-inner .details .blog-meta li:last-child {
            margin-right: 0;
        }

        .single-blog-list-inner .details h5 {
            margin-bottom: 0;
        }

        .single-blog-list-wrap {
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
            padding: 0;
            margin: 0;
            padding: 38px 30px;
            border-radius: 7px;
        }

        .single-blog-list-wrap>li {
            list-style: none;
            border-bottom: 1px solid #e8e6e6;
            margin-bottom: 30px;
        }

        .single-blog-list-wrap>li:last-child {
            margin-bottom: 0;
            border: 0;
        }

        .single-blog-list-wrap>li:last-child .single-blog-list-inner {
            margin-bottom: 0;
        }

        .single-blog-list-wrap.style-white>li {
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .single-blog-list-wrap.style-white>li:last-child {
            margin-bottom: 0;
            border: 0;
        }

        .single-blog-list-wrap.style-white>li:last-child .single-blog-list-inner {
            margin-bottom: 0;
        }

        .single-blog-list-wrap.style-white .details .blog-meta li {
            color: #fff;
        }

        .single-blog-list-wrap.style-white .details h5 {
            color: #fff;
        }

        /************ page navigation ************/
        .td-page-navigation .pagination {
            display: inline-flex;
            margin: 10px 0 0 0;
        }

        .td-page-navigation .pagination .pagination-arrow a {
            border: 0;
            transition: all 0.4s ease;
        }

        .td-page-navigation .pagination .pagination-arrow a:hover {
            border: 0;
        }

        .td-page-navigation .pagination li a {
            height: 55px;
            width: 55px;
            margin-right: 15px;
            border: 0;
            border-radius: 5px;
            background-color: #F0F4F9;
            line-height: 57px;
            text-align: center;
            text-decoration: none;
            transition: all 0.4s ease;
            display: block;
            color: var(--heading-color);
            font-size: 18px;
        }

        .td-page-navigation .pagination li a:active,
        .td-page-navigation .pagination li a:focus,
        .td-page-navigation .pagination li a:hover {
            background: var(--main-color);
        }

        .td-page-navigation .pagination li a.active {
            background: var(--main-color);
        }

        .contact-form-inner.style-shadow {
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
            background: #fff;
            padding: 33px 40px 40px;
            border-top: 5px solid var(--main-color);
        }

        /*********** event **********/
        .single-event-inner {
            margin-bottom: 25px;
            border: 3px solid #F0F4F9;
            transition: 0.4s;
            padding: 40px 30px 35px 30px;
            border-radius: 7px;
        }

        .single-event-inner .date {
            font-size: 33px;
            font-weight: 500;
            width: 88px;
            height: 88px;
            line-height: 1.1;
            color: var(--heading-color);
            background: var(--main-color);
            display: inline-block;
            border-radius: 7px;
            text-align: center;
            padding-top: 5px;
            margin-right: 25px;
        }

        .single-event-inner .date span {
            font-size: 22px;
        }

        .single-event-inner .details .blog-meta {
            margin: 0;
            padding: 0;
            margin-bottom: 10px;
            line-height: 1;
        }

        .single-event-inner .details .blog-meta li {
            display: inline-block;
            margin-right: 12px;
            font-size: 12px;
            color: var(--heading-color);
        }

        .single-event-inner .details .blog-meta li i {
            margin-right: 4px;
        }

        .single-event-inner .details .blog-meta li:last-child {
            margin-right: 0;
        }

        .single-event-inner .details p {
            margin-bottom: 0;
        }

        .single-event-inner:hover {
            background: #F0F4F9;
        }

        /******* team-details-page *********/
        .team-details-page h3 {
            font-size: 40px;
            margin-bottom: 0;
        }

        .team-details-page span {
            display: block;
        }

        .team-details-page .designation {
            color: var(--heading-color);
            margin-bottom: 20px;
            font-size: 20px;
            font-weight: 500;
        }

        /******** blog-details-page-content ***********/
        .blog-details-page-content .single-blog-inner {
            box-shadow: none !important;
        }

        .blog-details-page-content .single-blog-inner .details {
            padding: 0;
            padding-top: 30px;
        }

        .blog-details-page-content blockquote {
            background: #F0F4F9;
            padding: 30px 40px;
            border-left: 5px solid var(--main-color);
            font-weight: 500;
            margin-top: 30px;
            margin-bottom: 30px;
            border-radius: 7px;
        }

        /*********** tag-and-share ************/
        .tag-and-share {
            border-top: 1px solid #e9eaea;
            border-bottom: 1px solid #e9eaea;
            padding-bottom: 14px;
            padding-top: 17px;
            margin-top: 70px;
        }

        .tag-and-share .blog-share ul {
            margin: 0;
            padding: 0;
        }

        .tag-and-share .blog-share ul li {
            display: inline-block;
            list-style: none;
            margin-right: 15px;
            color: #7e8699;
        }

        .tag-and-share .blog-share ul li:last-child {
            margin-right: 0;
        }

        /******* blog-comment *******/
        .blog-comment {
            margin-top: 62px;
        }

        .blog-comment .media {
            margin-bottom: 35px;
            padding-bottom: 28px;
            border-bottom: 1px solid #e9eaea;
        }

        .blog-comment .media a img {
            border-radius: 50%;
            height: 100px;
            width: 100px;
        }

        .blog-comment .media.nesting {
            margin-left: 60px;
        }

        .blog-comment .media .media-body {
            margin-left: 30px;
        }

        .blog-comment .media .media-body h5 {
            position: relative;
        }

        .blog-comment .media .media-body h5 a {
            font-size: 20px;
            color: #14212b;
        }

        .blog-comment .media .media-body .date {
            font-size: 12px;
            color: #5a6378;
            font-weight: 400;
            position: absolute;
            right: 5px;
            top: 5px;
        }

        .blog-comment .media .media-body p {
            font-size: 16px;
            color: #5a6378;
        }

        .blog-comment .media .media-body a {
            font-size: 14px;
            font-weight: 500;
            color: var(--heading-color);
        }

        .blog-comment .media .media-body a:hover {
            color: var(--main-color);
        }

        .blog-comment-form {
            border: 1px solid #E2EEFF;
            padding: 40px 40px 50px 40px;
            border-radius: 7px;
        }

     
    </style>

    <!-- style table -->
    <style>
        
       /*Form fields*/
       .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4F709C;
            padding-left: 1rem;
            padding-right: 1rem;
            padding-top: .5rem;
            padding-bottom: .5rem;
            line-height: 1.25;
            border-width: 2px;
            border-radius: .25rem;
            border-color: #fff;
            background-color: #fff;
            margin: 10px 0;
        }

        .dataTables_wrapper .dataTables_filter input {
            margin-left: 9px;
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            border-radius: .25rem;
            border: 1px solid transparent;
            height: 37px;
            padding-top: 5px;
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: white !important;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            font-weight: 700;
            border-radius: .25rem;
            background: #4F709C !important;
            border: 1px solid transparent;
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: white !important;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            font-weight: 700;
            border-radius: .25rem;
            background: #4F709C !important;
            border: 1px solid transparent;
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #4F709C !important;
        }

        /* code responsive table */
        @media (max-width: 600px) {


            table {
                width: 100%;
            }

            tbody {
                text-align: left;
            }

            .option-select {
                font-size: 12px;
            }

            .td {
                padding-right: none;
                display: flex;
                justify-content: left;
            }

            .responsive-3 {
                width: 100%;
            }

            th {
                display: none;
            }

            td {
                display: grid;
                gap: 0.5rem;
                grid-template-columns: 15ch auto;
                padding: 0.75em 1rem;
            }

            td:first-child {
                padding-top: 2rem;
            }

            td::before {
                content: attr(data-cell) "  : ";
                font-weight: bold;
            }
        }

        .container-table {
            box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            padding: 20px 10px 10px 10px;
        }

        @media (max-width: 600px) {


            tbody {
                text-align: left;
            }

            .option-select {
                font-size: 12px;
            }

            .td {
                padding-right: none;
                display: flex;
                justify-content: left;
            }

            .responsive-3 {
                width: 100%;
            }

            th {
                display: none;
            }

            td {
                display: grid;
                gap: 0.5rem;
                grid-template-columns: 15ch auto;
                padding: 0.75em 1rem;
            }

            td:first-child {
                padding-top: 2rem;
            }

            td::before {
                content: attr(data-cell) "  : ";
                font-weight: bold;
            }
        }




        .scroll {
            overflow-y: auto;
            background: #f9fcff;
        }


        /* ---------- Data Length Code ---------- */

        .container {
            max-width: 1400px;
            margin: auto;

            &.two .card::after {
                content: '';
                width: 80px;
                height: 80px;
                background: #4F709C;
                position: absolute;
                top: -30px;
                border-radius: 35%;
                left: -20px;
            }

            .grid-cards {
                display: flex;
                justify-content: center;
                flex: 1;
                max-width: 700px;
                margin: 1rem auto;

                @media (max-width: 922px) and (min-width: 601px) {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                }

                @media (max-width: 600px) {
                    flex-direction: column;
                }

                .card {
                    position: relative;
                    flex: 1;
                    background: #fff;
                    padding: 1rem 1rem 1.5rem;
                    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
                    border-radius: 1rem;
                    min-height: 170px;
                    margin: 15px;
                    transition: all ease 0.3s;
                    overflow: hidden;
                    animation: fadeInLeft 1.5s backwards;

                    &:nth-child(2) {
                        animation-delay: 0.15s;
                    }

                    &:nth-child(3) {
                        animation-delay: 0.2s;
                    }

                    &:nth-child(4) {
                        animation-delay: 0.3s;
                    }

                    &:hover {
                        transform: translateY(-6px);
                        -webkit-transform: translateY(-6px);
                    }

                    img {
                        //Google SEO - CLS optimize
                        aspect-ratio: 500 / 320;

                        width: 100%;
                        border-radius: 12px;
                        margin-bottom: 15px;
                        position: relative;
                        max-height: 320px;
                        object-fit: cover;
                        box-shadow: 0 6px 16px -7px #aaa;
                    }

                    .card-body {
                        color: #676767;
                        width: 100%;
                        margin-bottom: 40px;
                        padding: 0 0.8rem;
                        position: relative;

                        .icon {
                            display: flex;
                            width: 100%;
                            text-align: left;
                            padding: 15px 0;

                            i {
                                position: relative;
                                font-size: 25px;
                                transition: 0.5s;
                                line-height: 0;
                                top: -7px;
                                left: -12px;
                                z-index: 2;

                                &::before {
                                    background: #FFD854;
                                    background-clip: border-box;
                                    -webkit-background-clip: text;
                                    -webkit-text-fill-color: transparent;
                                }
                            }

                            h3 {
                                margin: -9px 0 0 20px;
                            }
                        }

                        .title-card {
                            text-align: center;
                            padding-bottom: 10px;
                          
                        }

                        p {
                            font-size: 14px;
                            line-height: 22px;
                            font-weight: 300;
                        }
                    }

                    .card-footer {
                        display: flex;
                        justify-content: flex-end;
                        position: absolute;
                        bottom: 0;
                        width: calc(100% - 1rem);

                        a {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            background: #FFD854;
                            color: #fff;
                            text-shadow: 0px 1px 5px rgba(0, 0, 0, 0.08);
                            font-size: 1rem;
                            font-weight: 700;
                            text-decoration: none;
                            width: 56%;
                            height: 40px;
                            border-top-left-radius: 1rem;
                            border-bottom-right-radius: 1rem;

                            &:hover {
                                filter: brightness(0.98);
                            }
                        }
                    }
                }
            }
        }

        @keyframes fadeInLeft {
            0% {
                transform: translate(-100%, 0);
            }

            100% {
                opacity: 1;
                transform: none;
            }
        }
    </style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    

    <!-- Navigation -->
    <?php $this->load->view('sidebar'); ?>


<section>
    <div class="scroll">
      
        <div class="container two">
  <div class="grid-cards">
    <div class="card">
      <div class="card-body text-center">
        <div class="section-title mb-0">
          <!-- <i class="fas fa-id-card"></i> -->
          <h2 class="title mt-4">233</h2>
        </div>
        <p>Data Operator
        </p>
      </div>
      <div class="card-footer">
        <a href="<?php echo base_url("supervisor/data_operator") ?>">Klik disini</a>
      </div>
    </div>
    <div class="card">
      <div class="card-body text-center">
        <div class="section-title mb-0">
          <!-- <i class="fas fa-list"></i> -->
          <h2 class="title mt-4">532</h2>
        </div>
        <p>Approve List
        </p>
      </div>
      <div class="card-footer">
        <a href="<?php echo base_url("supervisor/approve") ?>">Klik disini</a>
      </div>
    </div>
   
    </div>
    </section>

      <!-- about area start -->
      <section  id="about" class="inner-section  p-5">
    <div class="about-area " style="background-image: url('">
        <div class="container">
            <div class="about-area-inner">
                <div class="row">
                    <div class="col-lg-6 order-lg-12 align-self-center">
                        <img src="https://ifcjakarta.co.id/blog/uploads/berita/20230816153735_bg_ruang_meeting_kantor_(1).jpg">
                    </div>
                    <div class="col-lg-6 order-lg-1 align-self-center mt-4 mt-lg-0">
                        <div class="about-inner-wrap">  
                            <div class="section-title mb-0">
                                <h2 class="title">Mengenal ruang yang kami sewakan</h2>
                                <br>
                                
                            </div>
                            <p class="content-text">Ruangan yang nyaman serta memiliki fasilitas yang lengkap merupakan salah satu kunci kesuksesan acara anda. di Sewa Ruang ini terdapat berbagai ruangan. Seperti ruang meeting untuk meeting bisnis anda , ada ruang acara yang tersedia berbagai fasilitas di dalamnya.</p>

                            <p class="content-text">Banyak ruang yang dapat anda pilih berdasarkan corak interior, lokasi yang strategis,harga sesuai budget ataupun disesuaikan dengan kebutuhan klien.</p>

                            <p class="content-text">Sewa ruang ini akan mempermudah meeting anda dan membuat klien puas dengan meet yang anda buat.</p>

                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</section>
    
    <!-- Data Operator -->
    <section id="widget" class=" widget-section p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <h2 class="title">Data Operator</h2>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
              
                <div class="col-lg-12">
                    <div class="header-item">
                        <div class="relative">

                            <table style="min-width: 22rem;" id="example_data_operator"
                                class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th data-priority="1" scope="col" class="text-center w-14 px-3 py-3">
                                            No
                                        </th>
                                        <th data-priority="2" scope="col" class="text-center px-3 py-3">
                                            Username 
                                        </th>
                                        <th data-priority="3" scope="col" class="text-center px-3 py-3">
                                            Email
                                        </th>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td data-cell="Username  " scope="row"
                                            class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                          1
                                        </td>
                                        <td data-cell="Email " class="text-center px-6 py-4">
                                        Muh Hatta Hanafi 
                                        </td>
                                        <td data-cell="Email " class="text-center px-6 py-4">
                                            Hanafi@gmail.com
                                        </td>
                                    </tr>
                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- Laporan Penyewa -->
    <section id="widget" class=" widget-section p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <h2 class="title">Laporan Penyewa</h2>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="header-item">
                        <div class="relative">
                            <table style="min-width: 22rem;" id="example_laporan_penyewa"
                                class="bak w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th data-priority="1" scope="col" class="text-center w-14 px-3 py-3">
                                            No
                                        </th>
                                        <th data-priority="2" scope="col" class="text-center px-3 py-3">
                                            Nama Penyewa
                                        </th>
                                        <th data-priority="3" scope="col" class="text-center px-3 py-3">
                                            No Ruang
                                        </th>
                                        <th data-priority="4" scope="col" class="text-center px-3 py-3">
                                            Kapasitas
                                        </th>
                                        <th data-priority="5" scope="col" class="text-center px-3 py-3">
                                            Jam Penggunaan
                                        </th>
                                        <th data-priority="6" scope="col" class="text-center px-3 py-3">
                                            Extra Waktu
                                        </th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td data-cell="Nama Penyewa " scope="row"
                                            class="text-center px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            1
                                        </td>
                                        <td data-cell="No Ruang " class="text-center px-3 py-4">
                                        Ahmad Sony
                                        </td>
                                        <td data-cell="No Ruang " class="text-center px-3 py-4">
                                            R.303
                                        </td>
                                        <td data-cell="Kapasitas " class="text-center px-3 py-4">
                                            AC 3 PK
                                        </td>
                                        <td data-cell="Jam Penggunaan " class="text-center px-3 py-4">
                                            12.00 - 13.30
                                        </td>
                                        <td data-cell="Exstra Waktu " class="text-center px-3 py-4">
                                            -
                                        </td>
                                      
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
  
    <!-- Approve -->
    <section id="widget" class=" widget-section p-5 pb-24 pd-bottom-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <h2 class="title">Approve</h2>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
              
                <div class="col-lg-12">
                    <div class="header-item">
                        <div class="relative">

                            <table style="min-width: 22rem;" id="example_approve"
                                class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th data-priority="1" scope="col" class="text-center w-14 px-3 py-3">
                                           No
                                        </th>
                                        <th data-priority="2" scope="col" class="text-center px-3 py-3">
                                            Nama Penyewa
                                        </th>
                                        <th data-priority="3" scope="col" class="text-center px-3 py-3">
                                            No Ruang
                                        </th>
                                        <th data-priority="4" scope="col" class="text-center px-3 py-3">
                                            Kapasitas
                                        </th>
                                        <th data-priority="5" scope="col" class="text-center px-3 py-3">
                                            Jam Penggunaan
                                        </th>
                                        <th data-priority="6" scope="col" class="text-center px-3 py-3">
                                            Extra Waktu
                                        </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td data-cell="Nama Penyewa " scope="row"
                                            class="text-center px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            1
                                        </td>
                                        <td data-cell="No Ruang " class="text-center px-3 py-4">
                                        Ahmad Sony
                                        </td>
                                        <td data-cell="No Ruang " class="text-center px-3 py-4">
                                            R.303
                                        </td>
                                        <td data-cell="Kapasitas " class="text-center px-3 py-4">
                                            AC 3 PK
                                        </td>
                                        <td data-cell="Jam Penggunaan " class="text-center px-3 py-4">
                                            12.00 - 13.30
                                        </td>
                                        <td data-cell="Exstra Waktu " class="text-center px-3 py-4">
                                            -
                                        </td>
                                       
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
   
  

     


    <!-- footer area start -->
    <div class="footer-2 bg-gray-800 pt-6 md:pt-12">
  <!-- <div class="container px-4 mx-auto"> -->

    <!-- <div class="md:flex md:flex-wrap md:-mx-4 py-6 md:pb-12">

      <div class="footer-info lg:w-1/3 md:px-4">
        <h4 class="text-white text-2xl mb-4">19K users are using FWR blocks and making their life easy.</h4>
        <p class="text-gray-400">We have carefully crafted the blocks to suit to everyone's need.</p>
        <div class="mt-4">
          <button class="bg-facebook py-2 px-4 text-white rounded mt-2 transition-colors duration-300">
            <span class="fab fa-facebook-f mr-2"></span> Follow
          </button>
          <button class="bg-twitter py-2 px-4 text-white rounded ml-2 mt-2 transition-colors duration-300">
            <span class="fab fa-twitter mr-2"></span> Follow @freeweb19
          </button>
        </div>
      </div>

      <div class="md:w-2/3 lg:w-1/3 md:px-4 xl:pl-16 mt-12 lg:mt-0">
        <div class="sm:flex">
          <div class="sm:flex-1">
            <h6 class="text-base font-medium text-white uppercase mb-2">About</h6>
            <div>
              <a href="#" class="text-gray-400 py-1 block hover:underline">Company</a>
              <a href="#" class="text-gray-400 py-1 block hover:underline">Culture</a>
              <a href="#" class="text-gray-400 py-1 block hover:underline">Team</a>
              <a href="#" class="text-gray-400 py-1 block hover:underline">Careers</a>
            </div>
          </div>
          <div class="sm:flex-1 mt-4 sm:mt-0">
            <h6 class="text-base font-medium text-white uppercase mb-2">What we offer</h6>
            <div>
              <a href="#" class="text-gray-400 py-1 block hover:underline">Blocks</a>
              <a href="#" class="text-gray-400 py-1 block hover:underline">Resources</a>
              <a href="#" class="text-gray-400 py-1 block hover:underline">Tools</a>
              <a href="#" class="text-gray-400 py-1 block hover:underline">Tutorials</a>
            </div>
          </div>
        </div>
      </div>

      <div class="md:w-1/3 md:px-4 md:text-center mt-12 lg:mt-0">
        <h5 class="text-lg text-white font-medium mb-4">Explore our site</h5>
        <button class="bg-indigo-600 text-white hover:bg-indigo-700 rounded py-2 px-6 md:px-12 transition-colors duration-300">Explore</button>
      </div>

    </div> -->

  <!-- </div> -->

  <div class="border-t border-solid border-gray-900 mt-4 py-4">
    <div class="container px-4 mx-auto">

      <div class="md:flex md:-mx-4 md:items-center">
        <div class="md:flex-1 md:px-4 text-center md:text-left">
          <!-- <p class="text-white">&copy; <strong>FWR</strong></p> -->
        </div>
        <div class="md:flex-1 md:px-4 text-center md:text-right">
          <a href="#" class="py-2 px-4 text-white inline-block hover:underline">© 2023 Sewaruang. All rights reserved.</a>
        </div>
      </div>

    </div>
  </div>

</div>
    <!-- footer area end -->

    <!-- back-to-top end -->
    <a id="back-to-top"></a>

    
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function () {

            var table = $('#example_data_operator').DataTable({
                // responsive: true
            })
                .columns.adjust()
                .responsive.recalc();
        });

        $(document).ready(function () {

            var table = $('#example_laporan_penyewa').DataTable({
                responsive: true
            })
                .columns.adjust()
                .responsive.recalc();
        });

        $(document).ready(function () {

            var table = $('#example_approve').DataTable({
                responsive: true
            })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

  


</body>

</html>