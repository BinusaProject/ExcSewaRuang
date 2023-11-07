<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Ruang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">


    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <!--Replace with your tailwind.css once created-->

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

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
            font-family: "DM Sans", sans-serif;
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

        /*------------------------------------------------
    ## Back Top
------------------------------------------------*/
        #back-to-top {
            display: inline-block;
            background-color: var(--main-color);
            width: 40px;
            height: 40px;
            text-align: center;
            border-radius: 4px;
            position: fixed;
            bottom: 30px;
            right: 30px;
            transition: background-color 0.3s, opacity 0.5s, visibility 0.5s;
            opacity: 0;
            animation: backto-top-bounce 4s infinite ease-in-out;
            visibility: hidden;
            z-index: 1000;
        }

        #back-to-top::after {
            content: "";
            position: absolute;
            background: #fff;
            top: 50%;
            margin-top: -2.5px;
            height: 3px;
            width: 14px;
            line-height: 50px;
            transform: rotate(-43deg);
            left: 8.5px;
        }

        #back-to-top::before {
            content: "";
            position: absolute;
            background: #fff;
            top: 50%;
            margin-top: -2.5px;
            height: 3px;
            width: 14px;
            line-height: 50px;
            transform: rotate(43deg);
            right: 8.5px;
        }

        #back-to-top:hover {
            cursor: pointer;
            background-color: #333;
        }

        #back-to-top:active {
            background-color: #555;
        }

        #back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        /* .back-to-top {
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
  font-size: 20px;
  cursor: pointer;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  display: none;
  animation: backto-top-bounce 4s infinite ease-in-out;
  border-radius: 4px;
} */
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

        /***navbar-area***/
        .navbar-area {
            background: transparent;
            padding: 0;
            top: 0;
            position: fixed;
            z-index: 98;
            width: 100% !important;
            transition: all 0.4s;
            background: transparent;
        }

        .navbar {
            background: #0C356A;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1;
            transition: all 0.3s linear;
        }

        .top-nav-collapse {
            box-shadow: 0px 4px 6px 0px rgb(12 0 46 / 5%);
            top: 0;
            padding: 0;
            -webkit-backdrop-filter: blur(8px);
            backdrop-filter: blur(8px);
            background: rgba(0, 33, 71, 1);
        }

        .navbar-area .nav-container {
            transition: all 0.4s;
            padding: 16px 12px;
        }

        .top-nav-collapse .nav-container {
            background-color: transparent;
            padding: 16px 12px;
            transition: all 0.4s;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li {
            margin-top: 0;
            display: inline-block;
            font-weight: 400;
            line-height: 50px;
            text-transform: capitalize;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li a {
            color: #fff;
            font-size: 16px;
            text-decoration: none;
        }

        .navbar-area .nav-container .navbar-collapse .navbar-nav li+li {
            margin-left: 20px;
        }

        .nav-right-part-desktop {
            margin-left: 30px;
        }

        .nav-right-part ul {
            padding: 0;
            margin: 0;
            display: inline-flex;
        }

        .nav-right-part ul li {
            list-style: none;
            align-self: center;
        }

        .nav-right-part-mobile {
            display: none;
        }

        .nav-right-part-mobile ul li a {
            text-decoration: none;
            color: #fff;
            padding: 0 10px;
        }

        .nav-right-part-mobile ul li .cart {
            display: none;
        }

        .nav-right-part-mobile ul li .cart img {
            height: 20px;
            width: 20px;
            filter: invert(1);
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

        /* 
        .footer-area {
            background: rgba(0, 33, 71, 0.9);
        } */


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

        .responsive-mobile-menu button:focus {
            outline: none;
            border: none;
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

     


        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4F709C;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: white !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #4F709C !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: white !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #4F709C !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #4F709C !important;
            /*bg-indigo-500*/
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
    </style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <?php include("navbar.php") ?>

    <section id="widget" class=" widget-section pd-top-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        <h2 class="title">Approve</h2>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- <a href="tambah_user_operator"
                        class="bg-green-500 hover:bg-green-700 ml-auto w-36 text-white font-bold py-2 px-4 rounded">
                        <span class="pe-2">
                            <i class="fas fa-plus"></i>
                        </span>
                        Tambah
                    </a> -->
                <div class="col-lg-12">
                    <div class="header-item">
                        <div class="relative">

                            <table style="min-width: 22rem;" id="example_data"
                                class="bak w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th data-priority="1" scope="col" class="px-3 py-3">
                                            Nama Penyewa
                                        </th>
                                        <th data-priority="2" scope="col" class="px-3 py-3">
                                            No Ruang
                                        </th>
                                        <th data-priority="3" scope="col" class="px-3 py-3">
                                            Kapasitas
                                        </th>
                                        <th data-priority="4" scope="col" class="px-3 py-3">
                                            Jam Penggunaan
                                        </th>
                                        <th data-priority="5" scope="col" class="px-3 py-3">
                                            Extra Waktu
                                        </th>
                                        <th data-priority="5" scope="col" class="px-3 py-3">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td data-cell="Nama Penyewa " scope="row"
                                            class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Ahmad Sony
                                        </td>
                                        <td data-cell="No Ruang " class="px-3 py-4">
                                            R.303
                                        </td>
                                        <td data-cell="Kapasitas " class="px-3 py-4">
                                            AC 3 PK
                                        </td>
                                        <td data-cell="Jam Penggunaan " class="px-3 py-4">
                                            12.00 - 13.30
                                        </td>
                                        <td data-cell="Exstra Waktu " class="px-3 py-4">
                                            -
                                        </td>
                                        <td data-cell="Aksi" class="px-3 py-4 flex">

                                            <a href="supervisor/edit_user_operator"
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-3 rounded">
                                                <span class="pe-2">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                Setuju
                                            </a>
                                            <button onclick=""
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded ml-3">
                                                <span class="pe-2">
                                                    <i class="fas fa-trash-alt"></i>
                                                </span>
                                                Hapus
                                            </button>
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


    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function () {

            var table = $('#example_data').DataTable({
                responsive: true
            })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

</body>

</html>