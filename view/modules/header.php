<html class="no-js hydrated" dir="ltr" lang="tr" prefix="og: http://ogp.me/ns#" style="--windowHeight: 782px;">
   <!--<![endif]-->
   <head>
      <style>body {transition: opacity ease-in 0.2s; } 
         body[unresolved] {opacity: 0; display: block; overflow: hidden; position: relative; } 
      </style>
      <meta charset="utf-8">
      <style data-styles="">casino-play-random-game{visibility:hidden}.hydrated{visibility:inherit}</style>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <meta name="Application-Name" content="jojoBET">
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet" type="text/css">
      <link rel="preload" href="/static/css/common-d84be9782d9443a05473.css" as="style">
      <link rel="preload" href="/static/css/bundle-5b37b4300406a4abfdca.css" as="style">
      <script src="/assets/js/script.js"></script>
      <script src="/assets/js/app.js"></script>
      <script src="/assets/js/payment.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
            <!-- Slick CSS -->
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

      <!-- jQuery (slick için gereklidir) -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- Slick JS -->
      <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

      <script>
        let logged = <?= $us['id'] ? 'true' : 'false' ?>;
        let locate = <?= intval($main['location']) ?>;
        let phone_status = <?= intval($main['phone_status']) ?>;
        let passport_status = <?= intval($main['passport_status']) ?>;
    </script>
     
      <script>
       
         $(document).ready(function(){
    setTimeout(function(){
      $("#PageSpinner").addClass("Hide");
    }, 2000);
  });
  $(function() {
  $("img.lazy").lazyload({
    effect: "fadeIn",
    threshold: 200
  });
});


      </script>
      <link rel="stylesheet" type="text/css" href="/static/css/common-d84be9782d9443a05473.css">
      <link rel="stylesheet" type="text/css" href="/static/css/bundle-5b37b4300406a4abfdca.css">
      
      <meta name="author" content="Pusulabet">
      <meta name="apple-mobile-web-app-title" content="<?=$title?>">
      <meta name="HandheldFriendly" content="true">
      <meta name="Robots" content="index, follow">
      <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,maximum-scale=1,user-scalable=no,viewport-fit=cover">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <link rel="search" type="application/opensearchdescription+xml" href="/static/xml/opensearch.xml" title="Search the Operator">
      <style type="text/css">
            body,html {
                font-size: 10px
            }

            #PageSpinner {
                position: fixed;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100vh;
                background: var(--PageSpinner-background);
                z-index: 9999999;
                visibility: visible;
                opacity: 1
            }

            #PageSpinner.Hide {
                visibility: hidden;
                opacity: 0;
                transition: visibility .3s linear,opacity .3s linear
            }

            #PageSpinner .MainIcon {
                display: block;
                animation: slideMainIcon 2s infinite;
                width: 150px
            }

            @keyframes slideMainIcon {
                from {
                    transform: translateY(-15px)
                }

                50% {
                    transform: translateY(5px)
                }

                to {
                    transform: translateY(-15px)
                }
            }

            #PageSpinner .LoadingScreen {
                position: relative;
                width: 250px;
                height: 250px;
                border-radius: 50%;
                background: linear-gradient(var(--LoadingScreen-color-from),var(--LoadingScreen-color-to));
                animation: animateLoadingScreen 1.2s linear infinite
            }

            @keyframes animateLoadingScreen {
                0% {
                    transform: rotate(0deg)
                }

                100% {
                    transform: rotate(360deg)
                }
            }

            #PageSpinner .LoadingScreen span {
                position: absolute;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                background: linear-gradient(var(--LoadingScreen-color-from),var(--LoadingScreen-color-to))
            }

            #PageSpinner .LoadingScreen span:nth-child(1) {
                filter: blur(5px)
            }

            #PageSpinner .LoadingScreen span:nth-child(2) {
                filter: blur(10px)
            }

            #PageSpinner .LoadingScreen span:nth-child(3) {
                filter: blur(25px)
            }

            #PageSpinner .LoadingScreen span:nth-child(4) {
                filter: blur(100px)
            }

            #PageSpinner .LoadingScreen:after {
                content: "";
                position: absolute;
                top: 10px;
                left: 10px;
                right: 10px;
                bottom: 10px;
                background: var(--Circle-background);
                border-radius: 50%;
                opacity: .9
            }

            #PageSpinner .Logo {
                z-index: 1;
                position: absolute
            }

            @keyframes animateCircleSpin {
                from {
                    stroke-dashoffset: 2512
                }

                to {
                    stroke-dashoffset: 0
                }
            }

            #PageSpinner .Circle {
                position: absolute;
                top: 50%;
                left: 50%;
                overflow: visible!important;
                transform: translate3d(-50%,-50%,0) rotate(-90deg);
                transform-origin: center
            }

            #PageSpinner .Circle circle {
                fill: #fff0;
                stroke-width: 4;
                stroke-dasharray: 1256
            }

            #PageSpinner .Circle circle:first-of-type {
                stroke: rgb(255 255 255 / .1)
            }

            #PageSpinner .Circle circle:nth-of-type(2) {
                stroke: var(--Circle-color);
                animation: animateCircleSpin infinite cubic-bezier(.39,.575,.565,1) 4s
            }

            .MRIExpand {
                width: 100%;
                max-height: calc(100vh - env(safe-area-inset-top) - 3rem);
                overflow: auto;
                position: fixed;
                top: 0;
                padding-top: calc(env(safe-area-inset-top) + 3rem);
                background-color: #fff;
                z-index: 9999
            }

            .MRIExpand.Hidden {
                display: none
            }

            .MRIExpand table {
                width: 100%
            }

            .MRIExpand table tr:nth-child(odd) {
                background-color: #dedede
            }

            .MRIExpand table tr:nth-child(even) {
                background-color: #ccc
            }

            .MRIExpand table td,.MRIExpand table th {
                padding: .1rem .5rem;
                border-collapse: collapse;
                border: 1px solid #b3b3b3
            }

            .MRIExpand .MRIClose {
                position: absolute;
                right: 0;
                background: 0 0;
                font-size: 18px;
                border-radius: 5rem;
                width: 3rem;
                height: 3rem;
                line-height: 14px;
                top: calc(env(safe-area-inset-top) + 0px);
                padding: 0
            }

            .RootContent {
                position: relative;
                min-height: 100vh
            }

            .AppVersion {
                position: absolute;
                bottom: .5rem;
                left: 50%;
                transform: translateX(-50%);
                font-size: 10px;
                color: #fff;
                text-shadow: 1px 1px 1px #000;
                z-index: 5
            }

            .LoadingScreen .AppVersion {
                position: fixed
            }

            .BrowserUpgrade {
                display: block;
                padding: 1rem;
                background: #fff;
                color: #000;
                border: 1px solid #f33
            }
        </style>
        <style type="text/css">
            :root {
                --PageSpinner-background: #161a2a;
                --Circle-background: #161a2a;
                --LoadingScreen-color-from: #ffac2c;
                --LoadingScreen-color-to: #FFF;
                --Circle-color: rgba(255, 172, 44, 1);
            }
        </style>
      
      <title><?=$title?></title>
      <meta name="description" content="<?=$title?>Jojobet Türkiye'nin en iyi spor bahisleri ve casino sitesidir.">
      <meta name="keywords" content="jojobet, <?=$guncel?>, Yüksek Bahis Oranları, Canlı Bahisler, Casino Oyunları">
      <link rel="shortcut icon" sizes="32x32" href="/static/img/favicon-32x32.png" type="image/png">
      <link rel="icon" sizes="16x16" href="/static/img/favicon-16x16.png" type="image/png">
      <link rel="apple-touch-icon" sizes="180x180" href="/static/img/apple-touch-icon.png">
      <link rel="icon" type="image/png" href="/static/img/android-chrome-192x192.png">
      <link rel="mask-icon" href="/static/img/safari-pinned-tab.svg" color="#000000">
      <link rel="icon" href="/static/img/favicon.ico">
      <meta name="msapplication-TileImage" content="/static/img/mstile-150x150.png">
      <meta name="msapplication-TileColor" content="#294c0b">
      <meta name="theme-color" content="#294c0b">
      <link rel="manifest" href="/static/xml/site.webmanifest">
      <style data-emotion=""></style>
      <meta name="msApplicationTileColor" content="#294c0b">
   </head>
   <body itemscope="" itemtype="http://schema.org/WebPage" dir="ltr" class="Page-Sports Page-Home Page-Casino Page-SportsSource Body HasMobileBottomNavigation IsScrolled" data-reactroot="">
      <a class="Hidden SkipLink" href="#content">Sayfa içeriğine ilerle</a>
      <div class="">
         <!--[if lt IE 8]>
         <p class="BrowserUpgrade">Kullandığınız tarayıcının güncellemesi mevcuttur. Kullanıcızı güncellemek için lütfen <a href="http://browsehappy.com/">buraya</a> tıklayın ve sitemizdeki deneyiminizi geliştirin.</p>
         <![endif]-->
      </div>
      <div id="PageSpinner" class="">
         <div class="Logo">
            <svg class="Circle" width="220" height="220">
               <circle cx="110" cy="110" r="110"></circle>
               <circle cx="110" cy="110" r="110"></circle>
               <circle cx="110" cy="110" r="110"></circle>
            </svg>
            <span class="SvgIcon MainIcon">
               <!--?xml version="1.0" encoding="UTF-8"?-->
               <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 573 100">
                  <image width="573" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAj0AAABkCAYAAABtj4EXAAAACXBIWXMAAAsTAAALEwEAmpwYAAAF1mlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNy4yLWMwMDAgNzkuMWI2NWE3OSwgMjAyMi8wNi8xMy0xNzo0NjoxNCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6YmY5YjVhYmEtZDBiOS00ZDAyLWI2NDYtZDM3MThhNTQ3NTJkIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjU3RDBGNjg0Mjk5MDExRURBODhDRURFQTdDRjk5Mjk5IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjQ2OTcwN2I2LWY2ZTAtNjc0Ni1hNjZjLWQ1MWM0MTNmZDY5YyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNCAoTWFjaW50b3No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"></image>
               </svg>
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="katman_1" x="0" y="0" viewBox="0 0 1000 1000" style="enable-background:new 0 0 1000 1000" xml:space="preserve">
                  <style>.st1{fill:#fff}.st2{fill:#cc801b}.st3{fill:#17192d}.st4{fill:#e9ead6}.st5{fill:#ffb139}.st6{fill:#143848}.st7{fill:none}</style>
                  <path class="st1" d="M810.55 530.76c-21.77 123.87-121.03 221.38-245.8 240.44v4.37c127.16-19.14 228.32-118.56 250.18-244.81h-4.38zM228.93 431.62c20.26-123.44 117.34-221.34 240.4-242.74v-4.39C343.88 205.98 244.9 305.8 224.55 431.62h4.38zM229 527.88h-4.38c20.81 127.64 122.57 228.45 250.72 247.71v-4.37C349.57 752.03 249.73 653.13 229 527.88zM567.39 184.01v4.38c123.65 20.06 221.79 117.17 243.26 240.34h4.39c-21.56-125.56-121.61-224.58-247.65-244.72z"></path>
                  <path class="st2" d="M439.03 283.75c.71 11.85-11.17 26.62-11.17 26.62l19.01-8 19.01-8s-19.91-1.73-26.85-10.62z"></path>
                  <path class="st2" d="M427.86 312.26c-.58 0-1.14-.26-1.5-.75-.52-.69-.5-1.64.03-2.31.11-.14 11.42-14.35 10.76-25.33-.05-.82.44-1.58 1.21-1.87.77-.29 1.64-.05 2.15.6 6.36 8.15 25.34 9.89 25.53 9.9.86.07 1.56.73 1.69 1.58.13.85-.33 1.69-1.13 2.02l-38.02 16.01c-.23.1-.48.15-.72.15zM440.7 288c-.96 6.7-4.62 13.53-7.53 18.11l25.82-10.87c-5.47-1.09-13.09-3.22-18.29-7.24zM600.96 283.75c-.71 11.85 11.17 26.62 11.17 26.62l-19.01-8-19.01-8c.01 0 19.92-1.73 26.85-10.62z"></path>
                  <path class="st2" d="M612.13 312.26c-.24 0-.49-.05-.73-.15l-38.02-16.01c-.8-.34-1.26-1.17-1.13-2.02.13-.85.83-1.51 1.69-1.58.19-.02 19.18-1.77 25.53-9.9a1.882 1.882 0 0 1 3.36 1.27c-.66 10.98 10.65 25.19 10.76 25.33.54.67.55 1.62.03 2.31-.35.48-.91.75-1.49.75zm-31.12-17.02 25.82 10.87c-2.92-4.58-6.58-11.41-7.53-18.11-5.21 4.02-12.83 6.15-18.29 7.24zM714.04 394.02c-8.74 8.04-10.43 26.92-10.43 26.92l-8.13-18.95-8.13-18.95c-.01-.01 15.53 12.57 26.69 10.98z"></path>
                  <path class="st2" d="M703.61 422.82c-.74 0-1.43-.44-1.73-1.14l-16.27-37.91a1.88 1.88 0 0 1 2.91-2.2c.15.12 15.04 12.04 25.25 10.59.81-.12 1.61.31 1.96 1.06.35.74.18 1.63-.43 2.19-8.11 7.46-9.82 25.53-9.84 25.71a1.89 1.89 0 0 1-1.58 1.69c-.08.01-.18.01-.27.01zm-11.9-34.38 11.05 25.74c1.08-5.32 3.19-12.78 7.14-18.27-6.55-.71-13.51-4.46-18.19-7.47zM325.69 394.02c8.73 8.04 10.43 26.92 10.43 26.92l8.13-18.95 8.13-18.95c.01-.01-15.52 12.57-26.69 10.98z"></path>
                  <path class="st2" d="M336.13 422.82c-.1 0-.2-.01-.3-.02a1.88 1.88 0 0 1-1.58-1.69c-.02-.18-1.74-18.26-9.84-25.71a1.88 1.88 0 0 1 1.53-3.25c10.22 1.46 25.1-10.47 25.25-10.59.67-.54 1.63-.56 2.32-.04s.93 1.44.59 2.24l-16.27 37.91c-.28.71-.96 1.15-1.7 1.15zm-6.29-26.9c3.96 5.49 6.07 12.95 7.14 18.27l11.05-25.74c-4.69 3-11.65 6.75-18.19 7.47zM439.03 675.35c.71-11.85-11.17-26.62-11.17-26.62l19.01 8 19.01 8s-19.91 1.73-26.85 10.62z"></path>
                  <path class="st2" d="M439.03 677.23a1.877 1.877 0 0 1-1.87-1.99c.66-10.98-10.64-25.19-10.76-25.33a1.883 1.883 0 0 1 2.2-2.91l38 16c.8.34 1.26 1.17 1.13 2.02a1.87 1.87 0 0 1-1.69 1.58c-.19.02-19.18 1.77-25.53 9.9-.37.47-.92.73-1.48.73zM433.16 653c2.92 4.58 6.58 11.41 7.53 18.11 5.2-4.02 12.82-6.16 18.28-7.24L433.16 653zM600.96 675.35c-.71-11.85 11.17-26.62 11.17-26.62l-19.01 8-19.01 8c.01 0 19.92 1.73 26.85 10.62z"></path>
                  <path class="st2" d="M600.97 677.23c-.57 0-1.12-.26-1.48-.72-6.36-8.15-25.34-9.89-25.53-9.9a1.87 1.87 0 0 1-1.69-1.58c-.13-.85.33-1.69 1.13-2.02L611.42 647a1.883 1.883 0 0 1 2.2 2.91c-.11.14-11.42 14.35-10.76 25.33.05.82-.44 1.58-1.21 1.87-.24.08-.46.12-.68.12zm-19.96-13.37c5.46 1.08 13.08 3.22 18.28 7.24.96-6.69 4.62-13.53 7.53-18.11l-25.81 10.87zM714.04 565.08c-8.74-8.04-10.43-26.92-10.43-26.92l-8.13 18.95-8.13 18.95c-.01 0 15.53-12.57 26.69-10.98z"></path>
                  <path class="st2" d="M687.34 577.94a1.876 1.876 0 0 1-1.72-2.62l16.27-37.91c.34-.79 1.17-1.25 2.02-1.11.85.13 1.5.83 1.58 1.69.02.18 1.74 18.26 9.84 25.71.6.56.78 1.44.43 2.19-.35.74-1.15 1.17-1.96 1.06-10.21-1.46-25.11 10.47-25.25 10.59-.37.26-.79.4-1.21.4zm15.41-33.02-11.05 25.74c4.68-3.01 11.65-6.76 18.19-7.48-3.95-5.48-6.06-12.95-7.14-18.26zM325.69 565.08c8.73-8.04 10.43-26.92 10.43-26.92l8.13 18.95 8.13 18.95c.01 0-15.52-12.57-26.69-10.98z"></path>
                  <path class="st2" d="M352.39 577.94c-.42 0-.84-.14-1.18-.42-.15-.12-15.04-12.04-25.25-10.59-.82.11-1.61-.31-1.96-1.06-.35-.74-.18-1.63.43-2.19 8.11-7.46 9.82-25.52 9.83-25.71a1.88 1.88 0 0 1 3.6-.58l16.27 37.91c.34.8.1 1.72-.59 2.24-.35.28-.75.4-1.15.4zm-22.55-14.76c6.54.72 13.5 4.46 18.19 7.48l-11.05-25.74c-1.07 5.31-3.18 12.78-7.14 18.26z"></path>
                  <circle transform="rotate(-45.001 519.993 479.568)" class="st3" cx="520" cy="479.56" r="193.58"></circle>
                  <path class="st3" d="M520 675.02c-107.78 0-195.46-87.68-195.46-195.46S412.22 284.1 520 284.1s195.46 87.68 195.46 195.46S627.77 675.02 520 675.02zm0-387.16c-105.71 0-191.7 86-191.7 191.7 0 105.71 86 191.7 191.7 191.7 105.71 0 191.7-86 191.7-191.7 0-105.71-86-191.7-191.7-191.7z"></path>
                  <path class="st1" d="m702.64 469.3-21.59 1.11c-4.75-84.84-75.04-152.17-161.06-152.17-87.08 0-158.05 69-161.21 155.32l-21.43-4.45c5.41-96.17 85.11-172.49 182.64-172.49 97.6 0 177.34 76.42 182.65 172.68zM516.1 647.41c-14.3-1.27-28.32-4.33-41.62-9.09 13.81 2.95 27.88 4.08 41.75 3.46l-.13 5.63zM565.4 638.35c-11.69 4.29-23.98 7.28-36.54 8.88l-.29-5.63c12.24.31 24.62-.76 36.83-3.25z"></path>
                  <path class="st1" d="M516.15 652.01c-17.31-1.33-34.26-5.36-50.04-11.84 16.4 4.71 33.41 6.77 50.17 6.21l-.13 5.63zM573.77 640.2c-14.24 5.94-29.45 9.88-45.04 11.62l-.29-5.63c15.16.16 30.48-1.82 45.33-5.99z"></path>
                  <path class="st1" d="M515.56 656.59c-20.09-1.45-39.77-6.42-57.83-14.58 18.75 6.42 38.49 9.39 57.97 8.95l-.14 5.63zM582.14 642.05c-16.93 7.7-35.29 12.61-54.12 14.41l-.26-5.63c18.3.1 36.76-2.83 54.38-8.78z"></path>
                  <path class="st1" d="M514.98 661.17c-22.88-1.56-45.29-7.49-65.62-17.32 21.08 8.11 43.55 12.02 65.77 11.69l-.15 5.63zM590.52 643.9c-19.41 9.41-40.72 15.28-62.55 17.17l-.24-5.63c21.22.02 42.63-3.85 62.79-11.54zM352.14 475.66c1.27-14.3 4.33-28.32 9.09-41.62a164.867 164.867 0 0 0-3.46 41.75l-5.63-.13zM361.2 524.96c-4.29-11.69-7.28-23.98-8.88-36.54l5.63-.29c-.3 12.24.77 24.63 3.25 36.83z"></path>
                  <path class="st1" d="M347.55 475.72c1.33-17.31 5.36-34.26 11.84-50.04-4.71 16.4-6.77 33.41-6.21 50.17l-5.63-.13zM359.35 533.34c-5.94-14.24-9.88-29.45-11.62-45.04l5.63-.29c-.16 15.16 1.83 30.47 5.99 45.33z"></path>
                  <path class="st1" d="M342.97 475.13c1.45-20.09 6.42-39.77 14.58-57.83-6.42 18.75-9.39 38.49-8.95 57.97l-5.63-.14zM357.51 541.71c-7.7-16.93-12.61-35.29-14.41-54.12l5.63-.26c-.11 18.29 2.83 36.76 8.78 54.38z"></path>
                  <path class="st1" d="M338.38 474.54c1.56-22.89 7.49-45.29 17.32-65.62-8.11 21.08-12.02 43.55-11.69 65.77l-5.63-.15zM355.66 550.08c-9.41-19.41-15.28-40.72-17.17-62.55l5.63-.24c-.02 21.22 3.85 42.63 11.54 62.79z"></path>
                  <path class="st4" d="M682.18 474.56c.53-13.46-.59-27.11-3.42-40.52 4.64 12.89 7.7 26.48 9.06 40.35l-5.64.17zM678.79 524.96c2.54-12.41 3.62-25 3.28-37.45l5.63.27c-1.56 12.79-4.56 25.29-8.91 37.18z"></path>
                  <path class="st4" d="M686.78 474.63c.45-16.36-1.6-32.94-6.17-48.95 6.35 15.4 10.36 31.91 11.81 48.79l-5.64.16zM680.64 533.34a161.83 161.83 0 0 0 6.02-45.93l5.63.27c-1.69 15.8-5.65 31.23-11.65 45.66z"></path>
                  <path class="st4" d="M691.37 474.67c.38-19.28-2.59-38.81-8.93-57.37 8.09 17.87 13.05 37.32 14.57 57.21l-5.64.16zM682.49 541.71c5.95-17.62 8.88-36.09 8.78-54.37l5.63.26c-1.8 18.81-6.72 37.18-14.41 54.11z"></path>
                  <path class="st4" d="M695.97 474.7c.34-22.22-3.58-44.69-11.69-65.77 9.83 20.33 15.76 42.73 17.32 65.62l-5.63.15zM684.33 550.08a176.201 176.201 0 0 0 11.54-62.79l5.63.24c-1.88 21.83-7.75 43.14-17.17 62.55z"></path>
                  <path class="st5" d="M520 642.76c-89.99 0-163.2-73.21-163.2-163.2s73.21-163.2 163.2-163.2 163.2 73.21 163.2 163.2-73.22 163.2-163.2 163.2zm0-322.64c-87.92 0-159.44 71.52-159.44 159.44C360.56 567.47 432.08 639 520 639s159.44-71.53 159.44-159.44c0-87.92-71.53-159.44-159.44-159.44z"></path>
                  <path class="st5" d="M520 664.37c-101.91 0-184.81-82.91-184.81-184.81S418.09 294.75 520 294.75s184.81 82.91 184.81 184.81S621.9 664.37 520 664.37zm0-365.86c-99.83 0-181.05 81.22-181.05 181.05 0 99.83 81.22 181.05 181.05 181.05 99.83 0 181.05-81.22 181.05-181.05 0-99.83-81.22-181.05-181.05-181.05z"></path>
                  <path class="st5" d="m562.85 522.42 224.97-42.86-224.97-42.85L520 211.74l-42.86 224.97-224.97 42.85 224.97 42.86L520 747.38z"></path>
                  <path class="st5" d="M520 749.26c-.9 0-1.68-.64-1.85-1.53l-42.61-223.71-223.71-42.61a1.885 1.885 0 0 1 0-3.7l223.71-42.62 42.61-223.71a1.885 1.885 0 0 1 3.7 0l42.62 223.71 223.71 42.62a1.885 1.885 0 0 1 0 3.7l-223.71 42.61-42.62 223.71c-.18.89-.95 1.53-1.85 1.53zm-257.78-269.7 215.27 41.01c.76.14 1.35.74 1.5 1.49L520 737.34l41-215.28c.14-.76.74-1.35 1.49-1.49l215.27-41.01-215.26-41.01c-.76-.14-1.35-.74-1.49-1.49L520 221.78l-41.01 215.27c-.14.76-.74 1.35-1.5 1.49l-215.27 41.02z"></path>
                  <path class="st2" d="m520 479.56 43.33-40.33L520 211.74zM520 479.56l43.33 40.33L520 747.38z"></path>
                  <path class="st2" d="m520 479.56 40.33 43.34 227.49-43.34zM520 479.56l-40.33 43.34-227.5-43.34z"></path>
                  <path class="st4" d="M523.57 245.33c2.19 10.66 4.1 21.36 5.91 32.08.93 5.35 1.77 10.72 2.64 16.09l2.49 16.11 2.34 16.13c.73 5.39 1.51 10.76 2.18 16.16 1.4 10.78 2.71 21.57 3.74 32.41-2.19-10.66-4.1-21.36-5.91-32.08-.93-5.35-1.76-10.72-2.64-16.09l-2.48-16.11-2.33-16.13c-.73-5.39-1.5-10.76-2.18-16.16-1.43-10.78-2.73-21.57-3.76-32.41zM580.77 512.05c12.57-2.76 25.16-5.34 37.79-7.75 6.31-1.24 12.63-2.38 18.95-3.57l18.98-3.41 19-3.26c6.34-1.03 12.68-2.12 19.03-3.1 12.69-2.04 25.42-3.9 38.17-5.59-12.57 2.76-25.16 5.35-37.79 7.75-6.31 1.24-12.63 2.38-18.95 3.57l-18.98 3.41-19.01 3.26c-6.34 1.04-12.68 2.12-19.03 3.1-12.69 2.05-25.41 3.91-38.16 5.59zM285.85 481.91c14.18 1.71 28.34 3.6 42.46 5.67 7.07 1 14.12 2.09 21.18 3.14l21.16 3.3 21.13 3.45c7.04 1.2 14.08 2.35 21.11 3.61 14.07 2.43 28.11 5.05 42.11 7.84-14.18-1.71-28.34-3.6-42.46-5.67-7.07-1-14.12-2.1-21.18-3.15l-21.15-3.3-21.13-3.45c-7.04-1.2-14.08-2.36-21.11-3.61-14.07-2.43-28.11-5.04-42.12-7.83zM554.77 540.64c-2 14.11-4.17 28.2-6.52 42.25-1.14 7.03-2.38 14.05-3.57 21.07L540.96 625l-3.87 21.01c-1.34 7-2.63 14-4.03 20.99a1661.31 1661.31 0 0 1-8.68 41.86c1.99-14.12 4.16-28.2 6.51-42.25 1.14-7.03 2.38-14.05 3.57-21.07l3.72-21.04 3.87-21.01c1.34-7 2.64-14 4.03-20.98 2.73-13.99 5.62-27.95 8.69-41.87z"></path>
                  <path class="st5" d="m420.23 578.23 82.98-117.16 36.11 36.98z"></path>
                  <path class="st5" d="M420.23 580.11c-.49 0-.98-.19-1.34-.57-.63-.65-.71-1.66-.19-2.4l82.98-117.16a1.883 1.883 0 0 1 2.88-.23l36.11 36.98c.39.4.58.95.53 1.5a1.89 1.89 0 0 1-.82 1.37l-119.09 80.18c-.33.23-.7.33-1.06.33zM503.44 464 427.7 570.94l108.7-73.19L503.44 464z"></path>
                  <path class="st5" d="M621.79 578.23 502.7 498.05l36.11-36.98z"></path>
                  <path class="st5" d="M621.79 580.11c-.36 0-.73-.11-1.05-.32l-119.09-80.18a1.89 1.89 0 0 1-.82-1.37c-.06-.55.14-1.11.53-1.5l36.11-36.98c.39-.4.94-.6 1.49-.56.56.04 1.06.33 1.39.79l82.98 117.16c.53.74.44 1.75-.19 2.4-.37.37-.86.56-1.35.56zm-116.17-82.36 108.7 73.19L538.58 464l-32.96 33.75z"></path>
                  <path class="st5" d="m621.79 382.18-82.98 117.16-36.11-36.98z"></path>
                  <path class="st5" d="M538.81 501.22c-.5 0-.99-.2-1.34-.57l-36.11-36.98c-.39-.4-.58-.95-.53-1.51.06-.56.36-1.06.82-1.37l119.09-80.18c.75-.51 1.76-.4 2.39.25.63.65.71 1.66.19 2.4l-82.98 117.16c-.32.46-.83.74-1.39.79-.04 0-.09.01-.14.01zm-33.19-38.56 32.96 33.75 75.74-106.94-108.7 73.19z"></path>
                  <path class="st5" d="m420.23 382.18 119.09 80.18-36.11 36.98z"></path>
                  <path class="st5" d="M503.21 501.22c-.05 0-.1 0-.15-.01a1.87 1.87 0 0 1-1.39-.79l-82.98-117.16c-.52-.74-.44-1.75.19-2.4.63-.65 1.64-.75 2.39-.25l119.09 80.18c.46.31.76.81.82 1.37.06.55-.14 1.11-.53 1.51l-36.11 36.98c-.34.36-.83.57-1.33.57zM427.7 389.47l75.74 106.94 32.96-33.75-108.7-73.19z"></path>
                  <path class="st5" d="m420.23 382.18 101.66 98.02-18.68 19.14zM621.79 382.18l-99.9 98.02 16.92 19.14z"></path>
                  <path class="st5" d="m621.79 578.23-99.9-98.03-18.68 19.14z"></path>
                  <path class="st5" d="m420.23 578.23 101.66-98.03 17.43 17.85z"></path>
                  <g>
                     <path class="st5" d="M495.48 523.65c-3.11 2.63-6.58 4.78-9.94 7.07l-10.14 6.81c-6.78 4.51-13.57 9.01-20.4 13.46 6.2-5.29 12.43-10.53 18.68-15.75l9.4-7.8c3.15-2.58 6.19-5.3 9.59-7.54l2.81 3.75z"></path>
                  </g>
                  <g>
                     <path class="st5" d="M549.76 519.89c3.4 2.24 6.44 4.96 9.59 7.54l9.4 7.8c6.25 5.22 12.48 10.47 18.68 15.75-6.83-4.45-13.62-8.94-20.4-13.46l-10.14-6.81c-3.36-2.29-6.84-4.44-9.94-7.07l2.81-3.75z"></path>
                  </g>
                  <g>
                     <path class="st5" d="m436.05 400.62 37.43 44.45-2.96 2.33z"></path>
                  </g>
                  <g>
                     <path class="st5" d="m606.29 400.86-34.82 46.55-2.94-2.35z"></path>
                  </g>
                  <g>
                     <path class="st5" d="m396.47 330.61-33.72-8.3 7.67 34.35 39.94 14.52z"></path>
                     <path class="st5" d="M410.36 373.06c-.22 0-.43-.04-.64-.11l-39.94-14.52c-.6-.22-1.05-.73-1.19-1.36l-7.67-34.35c-.14-.63.06-1.3.52-1.75.47-.46 1.13-.64 1.76-.48l33.72 8.3c.62.15 1.12.61 1.33 1.22l13.89 40.56c.24.69.06 1.44-.46 1.95-.36.35-.83.54-1.32.54zm-38.33-17.81 35.28 12.82-12.29-35.88-29.78-7.33 6.79 30.39z"></path>
                     <path class="st5" d="m362.75 322.31 7.67 34.35 39.94 14.52z"></path>
                     <g>
                        <path class="st5" d="M374.3 354.69c2.43.81 4.82 1.72 7.2 2.63 2.39.91 4.74 1.89 7.1 2.87 2.35 1 4.7 2 7.02 3.07l3.48 1.6c1.15.57 2.3 1.1 3.44 1.7-1.22-.4-2.41-.85-3.62-1.27l-3.58-1.36c-2.39-.91-4.74-1.89-7.1-2.87-2.35-1-4.7-2-7.02-3.07-2.33-1.06-4.64-2.13-6.92-3.3z"></path>
                     </g>
                  </g>
                  <g>
                     <path class="st5" d="m643.99 330.61 33.72-8.3-7.67 34.35-39.94 14.52z"></path>
                     <path class="st5" d="M630.1 373.06c-.48 0-.96-.19-1.32-.54-.52-.51-.7-1.27-.46-1.95L642.21 330c.21-.61.71-1.06 1.33-1.22l33.72-8.3c.63-.16 1.3.03 1.76.48.47.46.66 1.12.52 1.75l-7.67 34.35c-.14.63-.59 1.14-1.19 1.36l-39.94 14.52c-.21.08-.42.12-.64.12zm15.34-40.87-12.29 35.88 35.28-12.82 6.79-30.38-29.78 7.32z"></path>
                     <path class="st5" d="m677.71 322.31-7.67 34.35-39.94 14.52z"></path>
                     <g>
                        <path class="st5" d="M666.16 354.69c-2.28 1.17-4.6 2.24-6.92 3.3-2.32 1.07-4.67 2.07-7.02 3.07-2.36.98-4.71 1.96-7.1 2.87l-3.58 1.36c-1.21.42-2.4.87-3.62 1.27 1.14-.59 2.29-1.13 3.44-1.7l3.48-1.6c2.32-1.07 4.67-2.07 7.02-3.07 2.36-.98 4.71-1.96 7.1-2.87 2.39-.91 4.77-1.82 7.2-2.63z"></path>
                     </g>
                  </g>
                  <g>
                     <path class="st5" d="m396.47 626.66-33.72 8.3 7.67-34.34 39.94-14.52z"></path>
                     <path class="st5" d="M362.75 636.84c-.49 0-.96-.19-1.31-.53-.46-.46-.66-1.12-.52-1.75l7.67-34.35c.14-.63.59-1.14 1.19-1.36l39.94-14.52a1.89 1.89 0 0 1 1.96.42c.52.51.7 1.27.46 1.95l-13.89 40.56c-.21.61-.71 1.06-1.33 1.22l-33.72 8.3c-.15.04-.3.06-.45.06zm9.28-34.81-6.79 30.38 29.78-7.33 12.29-35.88-35.28 12.83z"></path>
                     <g>
                        <path class="st5" d="m410.36 586.1-47.61 48.86 33.72-8.3z"></path>
                     </g>
                  </g>
                  <g>
                     <path class="st5" d="m643.99 626.66 33.72 8.3-7.67-34.34-39.94-14.52z"></path>
                     <path class="st5" d="M677.71 636.84c-.15 0-.3-.02-.45-.05l-33.72-8.3c-.62-.15-1.12-.61-1.33-1.22l-13.89-40.56a1.86 1.86 0 0 1 .46-1.95 1.87 1.87 0 0 1 1.96-.42l39.94 14.52c.6.22 1.05.73 1.19 1.36l7.67 34.35c.14.64-.05 1.3-.52 1.75-.35.33-.82.52-1.31.52zm-32.27-11.76 29.78 7.33-6.79-30.38-35.28-12.82 12.29 35.87z"></path>
                     <g>
                        <path class="st5" d="m630.1 586.1 47.61 48.86-33.72-8.3z"></path>
                     </g>
                  </g>
                  <g>
                     <path class="st6" d="m444.31 337.19 30.23 67.19-36.1-64.23z"></path>
                  </g>
                  <g>
                     <path class="st1" d="m444.31 337.19 30.23 67.19-36.1-64.23z"></path>
                  </g>
                  <g>
                     <path class="st1" d="m601.55 340.15-36.09 64.23 30.22-67.19z"></path>
                  </g>
                  <g>
                     <path class="st1" d="m375.53 407.17 60.52 27.89-62.98-21.79z"></path>
                  </g>
                  <g>
                     <path class="st1" d="m666.92 413.27-62.98 21.79 60.53-27.89z"></path>
                  </g>
                  <g>
                     <path class="st1" d="m438.44 618.97 36.1-64.23-30.23 67.19z"></path>
                  </g>
                  <g>
                     <path class="st1" d="m595.68 621.93-30.22-67.19 36.09 64.23z"></path>
                  </g>
                  <g>
                     <path class="st1" d="m373.07 545.85 62.98-21.79-60.52 27.89z"></path>
                  </g>
                  <g>
                     <path class="st1" d="m664.47 551.95-60.53-27.89 62.98 21.79z"></path>
                  </g>
                  <g>
                     <path class="st4" d="M411.3 335.94c5.41-3.99 10.94-7.81 16.69-11.32a179.97 179.97 0 0 1 17.76-9.63c6.11-2.85 12.39-5.34 18.82-7.38 6.41-2.07 12.96-3.67 19.57-4.88-6.44 1.92-12.81 3.99-19.1 6.27-6.27 2.3-12.45 4.84-18.49 7.69-6.05 2.81-11.97 5.93-17.81 9.19-5.85 3.28-11.63 6.68-17.44 10.06zM421.32 335.96c4.07-3.02 8.26-5.85 12.61-8.47 4.33-2.63 8.81-5.02 13.4-7.19 4.6-2.14 9.31-4.05 14.13-5.63 4.81-1.61 9.71-2.9 14.69-3.87-4.76 1.69-9.49 3.41-14.18 5.24-4.67 1.85-9.3 3.81-13.84 5.96-4.56 2.11-9.03 4.41-13.48 6.77-4.45 2.37-8.86 4.81-13.33 7.19zM431.34 335.98c2.72-2.05 5.59-3.9 8.53-5.61 2.93-1.73 5.96-3.29 9.04-4.75 3.09-1.43 6.23-2.75 9.44-3.89 3.21-1.14 6.47-2.14 9.8-2.86-3.08 1.46-6.17 2.83-9.25 4.22-3.07 1.4-6.15 2.78-9.2 4.23-3.06 1.41-6.1 2.89-9.15 4.34-3.04 1.46-6.09 2.94-9.21 4.32z"></path>
                  </g>
                  <g>
                     <path class="st4" d="M553.2 304.61c6.06.91 12.08 2.14 18.01 3.76a145.89 145.89 0 0 1 17.48 5.88c5.69 2.36 11.24 5.08 16.49 8.29 5.27 3.19 10.23 6.88 14.73 11.04-4.97-3.6-10.14-6.84-15.47-9.77-5.34-2.92-10.84-5.53-16.47-7.83-11.24-4.65-22.95-8.11-34.77-11.37z"></path>
                  </g>
                  <g>
                     <path class="st4" d="M564 313c3.69.6 7.33 1.47 10.92 2.52 3.59 1.04 7.13 2.29 10.6 3.68 3.46 1.43 6.87 3 10.15 4.81 3.28 1.8 6.46 3.79 9.43 6.08-3.37-1.62-6.71-3.24-10.09-4.77-3.38-1.52-6.77-3-10.2-4.38-3.42-1.41-6.88-2.72-10.35-4.03-3.48-1.3-6.97-2.56-10.46-3.91z"></path>
                  </g>
                  <g>
                     <path class="st5" d="M583.59 481.91c0 32.7-26.51 59.2-59.2 59.2-32.7 0-59.2-26.51-59.2-59.2 0-32.7 26.51-59.2 59.2-59.2s59.2 26.5 59.2 59.2z"></path>
                     <path class="st5" d="M524.38 542.99c-33.68 0-61.08-27.4-61.08-61.08s27.4-61.08 61.08-61.08 61.08 27.4 61.08 61.08c.01 33.68-27.39 61.08-61.08 61.08zm0-118.4c-31.61 0-57.32 25.71-57.32 57.32s25.71 57.32 57.32 57.32 57.32-25.72 57.32-57.32c.01-31.61-25.71-57.32-57.32-57.32z"></path>
                  </g>
                  <g>
                     <path class="st6" d="M524.38 521.38c-21.76 0-39.47-17.71-39.47-39.47 0-21.76 17.71-39.47 39.47-39.47 21.76 0 39.47 17.7 39.47 39.47 0 21.76-17.7 39.47-39.47 39.47zm0-75.18c-19.69 0-35.71 16.02-35.71 35.71s16.02 35.71 35.71 35.71 35.71-16.02 35.71-35.71-16.02-35.71-35.71-35.71z"></path>
                  </g>
                  <g>
                     <path class="st3" d="M524.39 498.2c-5.32 0-10.32-2.61-13.36-6.97-1.92-2.73-2.93-5.95-2.93-9.32 0-8.98 7.31-16.29 16.29-16.29s16.29 7.31 16.29 16.29c0 .46-.02.92-.06 1.37-.68 8.35-7.81 14.92-16.23 14.92zm0-28.82c-6.91 0-12.54 5.62-12.54 12.53 0 2.59.78 5.06 2.25 7.16a12.55 12.55 0 0 0 10.28 5.36c6.48 0 11.96-5.05 12.48-11.49.04-.36.05-.7.05-1.03 0-6.91-5.62-12.53-12.52-12.53z"></path>
                  </g>
                  <g>
                     <path class="st1" d="M516.99 514.01c-4.08-.14-8.16-1.28-11.91-3.21a31.62 31.62 0 0 1-9.9-7.99 32.822 32.822 0 0 1-6.14-11.42c-1.28-4.2-1.67-8.65-1.27-13.02.14-1.09.33-2.17.5-3.26.2-1.08.53-2.13.8-3.2.67-2.09 1.47-4.14 2.53-6.06 2.08-3.85 4.9-7.28 8.25-10 3.35-2.72 7.22-4.75 11.28-5.89 4.07-1.12 8.29-1.46 12.32-.79-4.01.66-7.79 1.9-11.21 3.65-3.42 1.74-6.49 3.99-9.09 6.67-5.21 5.32-8.43 12.26-9.17 19.49-.35 3.62-.12 7.3.75 10.85s2.36 6.96 4.38 10.08c4.05 6.25 10.27 11.25 17.88 14.1z"></path>
                     <path class="st1" d="M498.15 500.72a29.353 29.353 0 0 1-5.49-10.06c-.17-.52-.31-1.05-.45-1.59-.27-1.07-.48-2.16-.62-3.26-.14-1.1-.24-2.21-.26-3.32-.02-1.11 0-2.22.09-3.33.11-.98.26-1.97.4-2.95.16-.97.44-1.92.67-2.88.57-1.88 1.27-3.73 2.18-5.47 1.81-3.48 4.29-6.59 7.25-9.07 1.01-.85 2.08-1.62 3.19-2.32 2.14-1.35 4.44-2.4 6.83-3.12 1.38-.41 2.79-.71 4.2-.9 2.29-.31 4.59-.32 6.83.02-1 .22-1.98.54-2.92.96-2 .59-3.91 1.34-5.71 2.24-3.09 1.55-5.85 3.53-8.2 5.89-.9.9-1.73 1.85-2.5 2.84-3.28 4.24-5.34 9.28-5.94 14.51-.08.72-.13 1.45-.16 2.17-.09 2.53.13 5.07.7 7.54.73 3.18 2.02 6.25 3.8 9.07.11.18.23.35.34.53 3.54 5.38 8.88 9.72 15.47 12.36-3.66-.07-7.35-1.04-10.73-2.75-3.39-1.68-6.48-4.12-8.97-7.11z"></path>
                     <path class="st1" d="M501.12 498.63c-2.14-2.52-3.79-5.5-4.84-8.69-.15-.45-.28-.91-.41-1.37-.24-.93-.44-1.87-.58-2.82-.13-.95-.24-1.91-.28-2.88-.03-.96-.03-1.93.03-2.89.08-.88.19-1.76.3-2.64.13-.86.35-1.71.55-2.56.47-1.68 1.06-3.32 1.84-4.88a26.32 26.32 0 0 1 6.25-8.14c.88-.76 1.8-1.47 2.77-2.1 1.87-1.23 3.89-2.21 5.98-2.88 1.21-.38 2.45-.68 3.69-.87 2.02-.31 4.06-.36 6.04-.1-.34.17-.67.44-1 .8-1.78.52-3.47 1.18-5.06 1.96-2.76 1.35-5.22 3.08-7.31 5.12-.81.78-1.56 1.61-2.25 2.47-2.98 3.72-4.86 8.14-5.46 12.73-.08.64-.14 1.28-.18 1.92-.12 2.23.05 4.48.51 6.67.6 2.81 1.68 5.54 3.21 8.06.1.16.19.32.3.48 3.03 4.76 7.63 8.69 13.44 11.19-3.25.01-6.53-.81-9.55-2.3a24.76 24.76 0 0 1-7.99-6.28z"></path>
                     <path class="st1" d="M504.09 496.54a22.455 22.455 0 0 1-4.18-7.32c-.13-.38-.25-.77-.36-1.16-.21-.79-.4-1.58-.53-2.39-.11-.81-.23-1.62-.29-2.43-.03-.81-.07-1.63-.03-2.45.06-.78.12-1.55.19-2.32.1-.75.25-1.5.42-2.24.36-1.47.86-2.92 1.5-4.29a23 23 0 0 1 5.26-7.22c.74-.68 1.53-1.31 2.35-1.88 1.6-1.12 3.33-2.01 5.14-2.64 1.04-.36 2.11-.64 3.18-.84 1.76-.32 3.53-.4 5.26-.22.32.12.63.33.93.65-1.55.45-3.02 1.01-4.41 1.67-2.43 1.16-4.58 2.62-6.41 4.34-.71.67-1.38 1.37-1.99 2.11-2.67 3.19-4.38 6.99-4.99 10.95-.08.55-.15 1.11-.19 1.66-.14 1.93-.04 3.88.32 5.8a22.21 22.21 0 0 0 2.88 7.48c2.51 4.15 6.39 7.65 11.41 10.03-2.83.08-5.71-.58-8.37-1.85a21.246 21.246 0 0 1-7.09-5.44z"></path>
                     <path class="st1" d="M520.4 500.44c-2.41.16-4.89-.35-7.19-1.39-2.3-1.04-4.43-2.62-6.14-4.6a19.131 19.131 0 0 1-3.85-6.9c-.18-.64-.36-1.29-.49-1.95-.1-.66-.23-1.32-.3-1.99-.04-.67-.1-1.34-.08-2.01.03-.67.05-1.34.09-2.01.54-5.38 3.44-10.44 7.64-13.57 2.08-1.58 4.5-2.68 6.97-3.21 2.47-.53 5.01-.5 7.33.16-4.62 1.33-8.33 3.65-11.02 6.7-2.69 3.04-4.31 6.74-4.72 10.58-.4 3.86.36 7.82 2.38 11.35 2 3.52 5.14 6.59 9.38 8.84z"></path>
                  </g>
                  <g>
                     <path class="st1" d="M535.86 480.74c-.36 2.53-3.12 4.82-5.11 4.05-2-.76-2.65-4.4 0-6.99-9.81-3.46-17.55 3.35-18.18 12.36 2.6 3.73 6.93 6.16 11.82 6.16 7.57 0 13.76-5.82 14.35-13.22l-2.88-2.36zm-12.61 10.72c-.42.79-2.09.71-3.73-.17-1.64-.88-2.63-2.23-2.21-3.02.42-.79 2.09-.71 3.74.17 1.63.88 2.62 2.23 2.2 3.02z"></path>
                  </g>
                  <g>
                     <path class="st3" d="M538.74 443.36c6.58 1.57 12.82 5.18 17.61 10.25 2.42 2.51 4.52 5.36 6.18 8.45 1.64 3.1 2.92 6.4 3.81 9.81.83 3.43 1.25 6.94 1.28 10.47l-.1 2.64-.05 1.32-.18 1.31-.37 2.63c-.14.87-.41 1.72-.61 2.58-.8 3.46-2.23 6.72-3.82 9.88l-1.37 2.28-.69 1.14-.78 1.07-1.58 2.13c-.56.69-1.17 1.33-1.76 1.99-1.14 1.37-2.52 2.48-3.83 3.68-.64.62-1.4 1.08-2.1 1.63-.72.51-1.4 1.09-2.16 1.54-1.53.89-2.99 1.9-4.63 2.6-.8.38-1.59.77-2.4 1.13l-2.5.9c-6.68 2.4-13.95 2.82-20.89 1.74-6.94-1.16-13.61-4.03-19.06-8.41-5.4-4.42-9.57-10.31-11.59-16.79 3.74 5.66 8.27 10.46 13.58 14.15 5.32 3.64 11.36 6.16 17.69 7.06 12.66 1.8 26-2.89 34.49-12.36.53-.59 1.09-1.15 1.59-1.76l1.43-1.9.71-.95.62-1.01 1.25-2.03c1.44-2.82 2.77-5.73 3.5-8.82.18-.77.44-1.53.57-2.31l.39-2.35.19-1.18.07-1.19.15-2.38c.05-3.19-.25-6.38-.93-9.5-1.46-6.22-4.38-12.09-8.48-17.08-4.05-5.07-9.29-9.13-15.23-12.36z"></path>
                     <path class="st3" d="M540.41 440.38c6.9 1.95 13.39 5.8 18.57 11.09 5.21 5.26 9.06 11.96 11.11 19.22 4.24 14.53.4 31.31-9.84 42.75l-1.94 2.12c-.68.67-1.41 1.29-2.11 1.94-1.37 1.34-2.97 2.41-4.49 3.56-.75.6-1.62 1.02-2.43 1.53-.83.48-1.63 1-2.48 1.43l-2.59 1.22-1.3.6-1.35.47-2.7.93c-.91.28-1.85.47-2.77.7l-1.39.33-.69.16-.71.1-2.83.36c-.47.05-.94.14-1.41.16l-1.42.04-2.84.07c-1.89-.07-3.78-.19-5.65-.49-3.73-.56-7.4-1.52-10.85-2.98-3.46-1.45-6.69-3.36-9.64-5.59-5.85-4.53-10.53-10.45-13.26-17.09 4.01 5.94 9.14 10.92 15.08 14.42 5.88 3.59 12.55 5.61 19.24 6.13 6.71.5 13.46-.61 19.6-3.08 6.18-2.42 11.65-6.46 16.02-11.39 4.45-4.9 7.53-10.95 9.24-17.34.53-1.58.68-3.24 1-4.87.19-.82.17-1.65.25-2.48l.2-2.5c.03-3.34-.24-6.69-.87-9.99-.66-3.3-1.82-6.49-3.2-9.59-1.38-3.11-3.23-6.02-5.35-8.72-4.22-5.51-9.84-9.91-16.2-13.22z"></path>
                     <path class="st3" d="M542.09 437.41c7.27 2.18 14.08 6.32 19.52 11.93 5.48 5.58 9.53 12.65 11.7 20.31 2.17 7.66 2.5 15.91.73 23.77-1.73 7.85-5.34 15.34-10.56 21.5-5.25 6.12-11.93 11.02-19.39 14.06-7.49 2.96-15.66 4.05-23.57 3.24-7.94-.8-15.56-3.73-21.98-8.17-6.4-4.49-11.64-10.5-14.9-17.37 4.5 6.1 10.16 11.15 16.6 14.62 3.2 1.76 6.58 3.15 10.06 4.1 3.48.95 7.03 1.59 10.61 1.69 1.79.04 3.58.06 5.35-.15l2.66-.2 2.62-.46c3.5-.58 6.87-1.74 10.13-3.06.8-.37 1.58-.79 2.37-1.18.78-.41 1.6-.74 2.33-1.24 1.48-.95 3.03-1.8 4.39-2.94.7-.54 1.41-1.05 2.1-1.6l1.95-1.79.97-.89c.32-.3.6-.65.9-.97l1.77-1.96c.61-.64 1.08-1.39 1.62-2.08.51-.71 1.1-1.38 1.55-2.13l1.38-2.25c.22-.38.47-.74.68-1.13l.58-1.19 1.18-2.37c.36-.8.63-1.64.96-2.46l.47-1.24.24-.62.17-.64.7-2.55c.11-.43.26-.85.33-1.28l.22-1.31.45-2.62c.12-.88.13-1.76.22-2.65.05-.89.17-1.77.17-2.66l-.04-2.67c-.01-.89-.15-1.77-.2-2.66l-.11-1.33-.21-1.32c-.16-.87-.23-1.77-.46-2.64-.69-3.52-1.97-6.89-3.45-10.18-.4-.81-.74-1.65-1.2-2.43l-1.35-2.36c-1-1.51-1.99-3.05-3.15-4.46-2.24-2.88-4.8-5.57-7.7-7.89a58.685 58.685 0 0 0-9.41-6.12z"></path>
                     <path class="st3" d="M543.77 434.43c3.82 1.21 7.5 2.92 10.97 5.05l2.55 1.68 2.42 1.88c.83.6 1.54 1.34 2.32 2.01l1.14 1.03 1.07 1.11c1.47 1.45 2.72 3.09 4.03 4.7 1.18 1.7 2.4 3.38 3.41 5.2 2.07 3.6 3.75 7.47 4.86 11.51 1.11 4.03 1.9 8.2 1.99 12.42.1 1.05 0 2.1-.01 3.16l-.11 3.16c-.12 1.05-.28 2.09-.42 3.14l-.22 1.57-.11.79-.18.77-.75 3.09c-.13.51-.24 1.03-.4 1.54l-.53 1.5-1.07 3c-.38.99-.88 1.93-1.31 2.89-1.74 3.88-4.18 7.39-6.75 10.75-5.39 6.56-12.36 11.78-20.11 15.17-7.74 3.46-16.36 4.69-24.69 4.12-4.17-.34-8.31-1.11-12.26-2.44-3.94-1.33-7.71-3.1-11.2-5.3-6.93-4.45-12.73-10.52-16.53-17.59 5.01 6.24 11.18 11.35 18.13 14.78 6.9 3.5 14.52 5.29 22.09 5.42 7.57-.05 15.15-1.39 21.9-4.69 1.66-.87 3.39-1.6 4.94-2.66l2.38-1.49 2.23-1.7c1.55-1.06 2.84-2.42 4.24-3.66l.52-.47.47-.52.94-1.04c.62-.7 1.27-1.37 1.86-2.09a50.872 50.872 0 0 0 9.83-19.94c1.79-7.28 1.74-15.01.18-22.41-.74-3.73-2.11-7.3-3.7-10.77-.77-1.76-1.76-3.4-2.71-5.07l-1.61-2.4c-.51-.82-1.17-1.53-1.74-2.32-2.38-3.04-5.08-5.89-8.14-8.36-3.06-2.47-6.38-4.64-9.92-6.52z"></path>
                     <path class="st3" d="M545.45 431.45c4.16.95 8.22 2.56 12.01 4.71.93.56 1.88 1.11 2.81 1.7.9.63 1.77 1.29 2.66 1.94.91.63 1.72 1.37 2.56 2.1l1.24 1.1c.4.38.78.78 1.17 1.18 6.34 6.24 10.87 14.35 13.33 23.03 1.25 4.34 2.01 8.85 2.07 13.38.17 4.52-.19 9.08-1.17 13.51-1.91 8.87-5.87 17.3-11.54 24.36a59.797 59.797 0 0 1-21.03 16.86c-4.1 1.95-8.42 3.44-12.86 4.42-4.45.94-9.01 1.3-13.54 1.17-9.07-.22-18.06-2.81-25.79-7.36l-2.83-1.81c-.92-.64-1.79-1.34-2.67-2.03l-2.51-2.2-2.3-2.4c-2.94-3.3-5.38-7.02-6.91-11.12.76.75 1.5 1.49 2.22 2.25l2.29 2.14c.81.66 1.57 1.37 2.35 2.05l2.43 1.92 2.53 1.77 2.57 1.67c.88.51 1.78 1 2.65 1.53l2.71 1.4c3.66 1.76 7.47 3.19 11.41 4.1 3.94.93 7.97 1.36 11.99 1.43 4.03.06 8.06-.32 11.99-1.2a53.29 53.29 0 0 0 11.4-3.83c3.65-1.69 7.07-3.87 10.22-6.35 3.16-2.49 6.02-5.35 8.51-8.52 5.02-6.29 8.51-13.77 10.18-21.64 1.65-7.87 1.52-16.12-.35-23.97-.88-3.94-2.34-7.75-4.15-11.38-.84-1.85-1.91-3.58-2.94-5.34l-1.73-2.53c-.56-.85-1.25-1.61-1.87-2.42-2.62-3.12-5.41-6.19-8.67-8.75-.78-.69-1.66-1.24-2.48-1.88-.42-.31-.82-.64-1.25-.94l-1.31-.85c-1.72-1.17-3.58-2.13-5.4-3.2z"></path>
                  </g>
                  <g>
                     <path class="st1" d="M469.53 162.44C331.96 184.02 223.1 293.25 202.06 431h11.75c20.84-131.34 124.56-235.44 255.72-256.81v-11.75z"></path>
                  </g>
                  <g>
                     <path class="st1" d="M567.32 162.16v11.8c131.49 20.51 235.85 124 257.51 255.11h11.78c-21.87-137.54-131.37-246.21-269.29-266.91z"></path>
                  </g>
                  <g>
                     <path class="st1" d="M475.34 786.02C341.59 766.84 235.16 661.87 213.86 528.8h-11.78c21.5 139.49 133.09 249.59 273.26 268.94v-11.72z"></path>
                  </g>
                  <g>
                     <path class="st1" d="M824.76 530.74C802.81 662.45 697.38 766.17 564.9 785.76v11.76c138.9-19.77 249.48-128.66 271.64-266.79h-11.78z"></path>
                  </g>
                  <path id="SVGID_x5F_1_x5F_" class="st7" d="M280.77 448.61s26.74-158.74 193.6-207.24"></path>
                  <text>
                     <textPath xlink:href="#SVGID_x5F_1_x5F_" startOffset="27.734%">
                        <tspan class="st1" style="font-family:'Raleway-Bold';font-size:38.5393px">PUSULABET</tspan>
                     </textPath>
                  </text>
                  <path id="SVGID_x5F_00000110462973804814089070000011049505691852538779_x5F_" class="st7" d="M559.5 242.09s158.74 26.74 207.24 193.6"></path>
                  <text>
                     <textPath xlink:href="#SVGID_x5F_00000110462973804814089070000011049505691852538779_x5F_" startOffset="27.734%">
                        <tspan class="st1" style="font-family:'Raleway-Bold';font-size:38.5393px">PUSULABET</tspan>
                     </textPath>
                  </text>
                  <path id="SVGID_x5F_00000165934281845329088970000010767103740272020902_x5F_" class="st7" d="M756.35 506.91s-26.74 158.74-193.6 207.24"></path>
                  <text>
                     <textPath xlink:href="#SVGID_x5F_00000165934281845329088970000010767103740272020902_x5F_" startOffset="27.734%">
                        <tspan class="st1" style="font-family:'Raleway-Bold';font-size:38.5393px">PUSULABET</tspan>
                     </textPath>
                  </text>
                  <path id="SVGID_x5F_00000172430852231201315550000006319651634309982114_x5F_" class="st7" d="M477.62 713.42s-158.74-26.74-207.24-193.6"></path>
                  <text>
                     <textPath xlink:href="#SVGID_x5F_00000172430852231201315550000006319651634309982114_x5F_" startOffset="27.734%">
                        <tspan class="st1" style="font-family:'Raleway-Bold';font-size:38.5393px">PUSULABET</tspan>
                     </textPath>
                  </text>
                  <g>
                     <path class="st5" d="M482.07 153.62v28.58c0 .79.64 1.44 1.44 1.44h20.6c.79 0 1.44-.64 1.44-1.44v-28.58c0-.79-.64-1.44-1.44-1.44h-20.6c-.79.01-1.44.65-1.44 1.44zm20.63 6.53c-1.21 2.27-6.6 11.07-6.6 20.5h-8.01c0-10.21 6.22-17.9 6.99-19.12h-4.22v3.01h-5.95v-9.36h17.78v4.97zM507.21 153.62v28.58c0 .79.64 1.44 1.44 1.44h20.6c.79 0 1.44-.64 1.44-1.44v-28.58c0-.79-.64-1.44-1.44-1.44h-20.6c-.8.01-1.44.65-1.44 1.44zm20.62 6.53c-1.21 2.27-6.6 11.07-6.6 20.5h-8.01c0-10.21 6.22-17.9 6.99-19.12H516v3.01h-5.95v-9.36h17.78v4.97zM532.34 153.62v28.58c0 .79.64 1.44 1.44 1.44h20.6c.79 0 1.44-.64 1.44-1.44v-28.58c0-.79-.64-1.44-1.44-1.44h-20.6c-.8.01-1.44.65-1.44 1.44zm20.63 6.53c-1.21 2.27-6.6 11.07-6.6 20.5h-8.01c0-10.21 6.22-17.9 6.99-19.12h-4.22v3.01h-5.95v-9.36h17.78v4.97z"></path>
                     <path class="st5" d="M555.79 187.86h-73.71c-2.57 0-4.66-2.09-4.66-4.66v-30.59c0-2.57 2.09-4.66 4.66-4.66h73.71c2.57 0 4.66 2.09 4.66 4.66v30.59c0 2.57-2.09 4.66-4.66 4.66zm-73.71-37.52c-1.25 0-2.27 1.02-2.27 2.27v30.59c0 1.25 1.02 2.27 2.27 2.27h73.71c1.25 0 2.27-1.02 2.27-2.27v-30.59c0-1.25-1.02-2.27-2.27-2.27h-73.71z"></path>
                  </g>
                  <path class="st7" d="M443.03 92h151.83v151.83H443.03z"></path>
                  <path class="st5" d="M551.49 817.84h-.76c-.17-.03-.34-.08-.52-.1-.44-.04-.86-.17-1.27-.34a10.7 10.7 0 0 1-1.61-.84c-.75-.47-1.46-.99-2.15-1.54-1.42-1.14-2.74-2.37-4.03-3.66a97.956 97.956 0 0 1-5.26-5.71c-.22-.26-.47-.5-.75-.7a5.48 5.48 0 0 0-1.55-.77 4.95 4.95 0 0 0-1.48-.21c-.52 0-1.04.01-1.56.01-7.52 0-15.04.01-22.56.01h-.18c-.15.01-.3 0-.44.03-1.21.21-2.25.72-3.06 1.66a92.099 92.099 0 0 1-3.74 4.15c-1.39 1.45-2.81 2.87-4.33 4.19-.88.77-1.79 1.5-2.75 2.16-.59.4-1.2.77-1.86 1.07-.55.25-1.11.44-1.71.51-.12.01-.23.05-.34.07h-.88c-.18-.09-.38-.09-.57-.11a6.58 6.58 0 0 1-1.99-.57c-1.11-.53-1.97-1.33-2.65-2.35-.47-.72-.82-1.49-1.09-2.3-.22-.65-.36-1.32-.49-1.99-.18-.91-.34-1.83-.45-2.75-.07-.59-.13-1.19-.19-1.78-.08-.8-.14-1.6-.16-2.4-.01-.29-.03-.59-.04-.88 0-.08-.01-.16-.03-.23-.01-.05-.05-.08-.1-.09v-2.53c.1-.06.11-.15.12-.25l.06-.85c.03-.57.04-1.14.09-1.7.05-.7.12-1.41.21-2.11a49.692 49.692 0 0 1 1.48-7.88c1.14-4.2 2.81-8.19 5.07-11.92.75-1.25 1.58-2.43 2.53-3.54 1.09-1.26 2.29-2.39 3.68-3.32 1.46-.98 3.04-1.7 4.75-2.12.86-.21 1.73-.35 2.61-.38.06 0 .14.02.19-.06h1.47c.08.09.18.06.27.06.7.05 1.41.12 2.1.26 1.41.27 2.78.68 4.1 1.22 1.6.66 3.12 1.46 4.53 2.47.5.36 1.03.64 1.6.86.86.32 1.75.5 2.67.49 1.12-.02 2.23-.01 3.35 0 .75 0 1.48-.11 2.2-.34.68-.22 1.34-.49 1.93-.92.63-.46 1.28-.87 1.96-1.24 2.78-1.55 5.72-2.58 8.93-2.79.04 0 .09-.04.13-.05h1.71c.05.06.12.06.19.06.5.02.99.09 1.49.17 1.63.27 3.16.82 4.6 1.62 1.54.85 2.89 1.95 4.1 3.22 1.19 1.25 2.2 2.63 3.1 4.09 2.5 4.08 4.3 8.46 5.46 13.1.54 2.15.94 4.32 1.19 6.53.14 1.19.27 2.38.29 3.57 0 .14.03.27.05.4v4.94c-.02.14-.05.29-.05.43-.02.37 0 .75-.03 1.12a48.479 48.479 0 0 1-.86 6.2c-.21.99-.52 1.95-.99 2.85-.5.96-1.14 1.8-2.01 2.46-.92.7-1.96 1.1-3.1 1.24-.21.01-.41.06-.62.1zm-50.64-39.3v4.63c0 .14 0 .28-.03.41-.04.24-.2.37-.45.39-.09.01-.18 0-.26 0h-4.38c-.12 0-.23-.02-.34.03-.72 1.24-.69 3.33.07 4.42.09 0 .2.01.31.01h4.12c.1 0 .2 0 .29.01.29.03.46.21.47.5.01.1 0 .2 0 .29v4.42c.07.06.14.12.21.17.25.17.53.3.82.38 1.15.3 2.25.14 3.3-.41.03-.02.06-.05.1-.08v-4.41c0-.18.01-.35.05-.53.04-.21.2-.33.42-.35.1-.01.2 0 .29 0h4.38c.11 0 .21 0 .32-.01.04-.07.08-.13.11-.19.21-.45.38-.92.48-1.42.05-.27.08-.54.06-.82-.03-.6-.23-1.15-.52-1.67-.24-.42-.16-.35-.58-.35h-4.35c-.28-.02-.43-.16-.46-.43-.01-.11-.02-.22-.02-.32 0-.51.01-1.02.01-1.53.01-.95.01-1.9.02-2.85 0-.07-.01-.13-.02-.19-1.39-.63-3.16-.66-4.42-.1zm33.7 13.46c-.01-1.33-1.08-2.52-2.54-2.51-1.33.01-2.5 1.05-2.5 2.51 0 1.46 1.16 2.53 2.52 2.53 1.47-.01 2.52-1.2 2.52-2.53zm-2.52-12.47c-1.22-.02-2.52.95-2.53 2.52 0 1.43 1.13 2.53 2.53 2.52 1.52-.01 2.51-1.24 2.51-2.51a2.516 2.516 0 0 0-2.51-2.53zm7.44 2.49a2.5 2.5 0 0 0 2.5 2.55c1.52.01 2.52-1.22 2.54-2.48a2.53 2.53 0 0 0-2.49-2.56c-1.4-.02-2.56 1.14-2.55 2.49zm5.03 10a2.523 2.523 0 0 0-2.51-2.54c-1.49 0-2.53 1.23-2.53 2.52 0 1.24.98 2.51 2.5 2.52 1.49.02 2.54-1.2 2.54-2.5z"></path>
                  <g>
                     <path class="st5" d="M202.08 441.81c-21.2 0-38.39 17.19-38.39 38.39s17.19 38.39 38.39 38.39 38.39-17.19 38.39-38.39-17.19-38.39-38.39-38.39zm27.98 55.8-11.61 2.67-4.82-4.75 3.17 5.99-5.49 9.92-9.23.49 9.92.53 1.72.95c-3.64 1.28-7.56 1.97-11.64 1.97s-7.99-.7-11.64-1.97l2.67-1.48-5.77-10.41 3.17-5.99-4.82 4.75-11.05-2.54-3.08-8.17 2.29 9.07-.45 1.98a35.002 35.002 0 0 1-6.52-20.41c0-.31 0-.62.01-.94l2.04 1.91 8.13-8.71 6.92 1.3-6.25-3.24-.99-11.28 6.47-5.39-7.54 4.9-1.6.14a35.235 35.235 0 0 1 16.97-12.11l-.87 1.95 10.88 4.85 1.02 7.42 1.02-7.42 10.36-4.62 7.47 4.89-7.39-6.11-.43-.97a35.235 35.235 0 0 1 16.97 12.11l-2.62-.23-1.05 11.87-6.25 3.24 6.92-1.3 7.74 8.29-2.24 8.81 3.42-9.13 1.26-1.17c.01.31.01.62.01.94 0 7.61-2.42 14.65-6.52 20.41l-.68-3.01z"></path>
                     <path class="st5" d="m188.03 475.16 5.37 16.51h17.36l5.36-16.51-14.04-10.2z"></path>
                  </g>
                  <g>
                     <path class="st5" d="M870.38 472.22c-.13-.49-.27-.98-.41-1.47a38.68 38.68 0 0 0-8.82-15.28l-.01-.01c-.36-.4-.74-.78-1.13-1.16a38.877 38.877 0 0 0-16.76-9.71c-.49-.13-.98-.26-1.48-.38a38.724 38.724 0 0 0-19.22.38 38.714 38.714 0 0 0-16.77 9.71c-.39.38-.77.76-1.13 1.16a38.7 38.7 0 0 0-8.83 15.28c-.15.49-.29.98-.42 1.47-.8 3.1-1.23 6.34-1.23 9.69 0 3.35.42 6.59 1.23 9.69.13.49.27.98.42 1.47a38.68 38.68 0 0 0 8.82 15.28l.01.01a38.854 38.854 0 0 0 17.9 10.87c.49.13.98.26 1.48.38a38.724 38.724 0 0 0 19.22-.38 38.622 38.622 0 0 0 16.76-9.71c.39-.38.77-.77 1.13-1.16l.01-.01a38.68 38.68 0 0 0 8.82-15.28c.15-.49.29-.97.41-1.47.8-3.1 1.23-6.34 1.23-9.69 0-3.34-.43-6.58-1.23-9.68zm-27.62-25.62a36.544 36.544 0 0 1 15.75 9.12l-8.33 7.9c-2.83-2.68-6.27-4.7-10.09-5.84l2.67-11.18zm-19.75 0 2.68 11.17a25.164 25.164 0 0 0-10.09 5.84l-8.33-7.9c4.34-4.24 9.73-7.43 15.74-9.11zm-25.64 44.41a36.42 36.42 0 0 1-1.14-9.1c0-3.14.4-6.19 1.14-9.1l11.02 3.27a24.94 24.94 0 0 0-.68 5.83c0 2.01.24 3.96.68 5.83l-11.02 3.27zm25.64 26.21a36.544 36.544 0 0 1-15.75-9.12l8.33-7.9c2.83 2.68 6.27 4.7 10.09 5.84l-2.67 11.18zm-13.25-35.31c0-12.75 10.38-23.13 23.13-23.13 12.75 0 23.13 10.38 23.13 23.13 0 12.75-10.38 23.13-23.13 23.13-12.75 0-23.13-10.38-23.13-23.13zm33 35.31-2.68-11.17c3.82-1.14 7.27-3.17 10.09-5.84l8.33 7.9a36.475 36.475 0 0 1-15.74 9.11zm25.65-26.21-11.02-3.27c.45-1.87.68-3.83.68-5.83 0-2.01-.24-3.96-.68-5.83l11.02-3.27c.75 2.91 1.15 5.96 1.15 9.1-.01 3.14-.41 6.19-1.15 9.1z"></path>
                  </g>
                  <path class="st5" d="M837.29 493.05s-1.23-.65-2.28-2.07c-1.05-1.41-1.05-3.7-1.05-3.7s2.92 2.58 6.12 1.26c3.3-1.36 3.23-4.25 2.79-5.64-.59-1.86-1.69-2.77-4.29-5.18-3.34-3.1-5.69-6.95-5.69-6.95s-2.35 3.85-5.69 6.95c-2.6 2.41-3.7 3.32-4.29 5.18-.44 1.39-.5 4.28 2.79 5.64 3.2 1.32 6.12-1.26 6.12-1.26s0 2.28-1.05 3.7-2.28 2.07-2.28 2.07h8.8z"></path>
               </svg>
            </span>
         </div>
         <div class="LoadingScreen"><span></span><span></span><span></span><span></span></div>
         <div class="">
            <div class="AppVersion" onclick="openMri()">1.0.590</div>
         </div>
      </div>
      <div id="AppContainer" class="AppContainer">
         <div class="RootContent BaseSwipe">
            <header class="SectionHeader" id="HeaderElement">
               <div class="OperatorMaxwidth ComponentLayout Layout HeaderContainer" style="bottom: 0 !important;">
                  <div class="OperatorMobileNavMock"></div>
                     <div class="OperatorLogo">
                        <a class="ComponentAnchor OperatorLogoLink Anchor" href="/tr">
                           <span class="ComponentIcon Icon">
                              <span class="SvgIcon MainIcon">
                                 <!--?xml version="1.0" encoding="UTF-8"?-->
                                 <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 573 100">
                                    <image width="573" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAj0AAABkCAYAAABtj4EXAAAACXBIWXMAAAsTAAALEwEAmpwYAAAF1mlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNy4yLWMwMDAgNzkuMWI2NWE3OSwgMjAyMi8wNi8xMy0xNzo0NjoxNCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6YmY5YjVhYmEtZDBiOS00ZDAyLWI2NDYtZDM3MThhNTQ3NTJkIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjU3RDBGNjg0Mjk5MDExRURBODhDRURFQTdDRjk5Mjk5IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjQ2OTcwN2I2LWY2ZTAtNjc0Ni1hNjZjLWQ1MWM0MTNmZDY5YyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNCAoTWFjaW50b3No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"></image>
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="katman_1" x="0" y="0" viewBox="0 0 1000 1000" style="enable-background:new 0 0 1000 1000" xml:space="preserve">
                                    <style>.st1{fill:#fff}.st2{fill:#cc801b}.st3{fill:#17192d}.st4{fill:#e9ead6}.st5{fill:#ffb139}.st6{fill:#143848}.st7{fill:none}</style>
                                    <path class="st1" d="M810.55 530.76c-21.77 123.87-121.03 221.38-245.8 240.44v4.37c127.16-19.14 228.32-118.56 250.18-244.81h-4.38zM228.93 431.62c20.26-123.44 117.34-221.34 240.4-242.74v-4.39C343.88 205.98 244.9 305.8 224.55 431.62h4.38zM229 527.88h-4.38c20.81 127.64 122.57 228.45 250.72 247.71v-4.37C349.57 752.03 249.73 653.13 229 527.88zM567.39 184.01v4.38c123.65 20.06 221.79 117.17 243.26 240.34h4.39c-21.56-125.56-121.61-224.58-247.65-244.72z"></path>
                                    <path class="st2" d="M439.03 283.75c.71 11.85-11.17 26.62-11.17 26.62l19.01-8 19.01-8s-19.91-1.73-26.85-10.62z"></path>
                                    <path class="st2" d="M427.86 312.26c-.58 0-1.14-.26-1.5-.75-.52-.69-.5-1.64.03-2.31.11-.14 11.42-14.35 10.76-25.33-.05-.82.44-1.58 1.21-1.87.77-.29 1.64-.05 2.15.6 6.36 8.15 25.34 9.89 25.53 9.9.86.07 1.56.73 1.69 1.58.13.85-.33 1.69-1.13 2.02l-38.02 16.01c-.23.1-.48.15-.72.15zM440.7 288c-.96 6.7-4.62 13.53-7.53 18.11l25.82-10.87c-5.47-1.09-13.09-3.22-18.29-7.24zM600.96 283.75c-.71 11.85 11.17 26.62 11.17 26.62l-19.01-8-19.01-8c.01 0 19.92-1.73 26.85-10.62z"></path>
                                    <path class="st2" d="M612.13 312.26c-.24 0-.49-.05-.73-.15l-38.02-16.01c-.8-.34-1.26-1.17-1.13-2.02.13-.85.83-1.51 1.69-1.58.19-.02 19.18-1.77 25.53-9.9a1.882 1.882 0 0 1 3.36 1.27c-.66 10.98 10.65 25.19 10.76 25.33.54.67.55 1.62.03 2.31-.35.48-.91.75-1.49.75zm-31.12-17.02 25.82 10.87c-2.92-4.58-6.58-11.41-7.53-18.11-5.21 4.02-12.83 6.15-18.29 7.24zM714.04 394.02c-8.74 8.04-10.43 26.92-10.43 26.92l-8.13-18.95-8.13-18.95c-.01-.01 15.53 12.57 26.69 10.98z"></path>
                                    <path class="st2" d="M703.61 422.82c-.74 0-1.43-.44-1.73-1.14l-16.27-37.91a1.88 1.88 0 0 1 2.91-2.2c.15.12 15.04 12.04 25.25 10.59.81-.12 1.61.31 1.96 1.06.35.74.18 1.63-.43 2.19-8.11 7.46-9.82 25.53-9.84 25.71a1.89 1.89 0 0 1-1.58 1.69c-.08.01-.18.01-.27.01zm-11.9-34.38 11.05 25.74c1.08-5.32 3.19-12.78 7.14-18.27-6.55-.71-13.51-4.46-18.19-7.47zM325.69 394.02c8.73 8.04 10.43 26.92 10.43 26.92l8.13-18.95 8.13-18.95c.01-.01-15.52 12.57-26.69 10.98z"></path>
                                    <path class="st2" d="M336.13 422.82c-.1 0-.2-.01-.3-.02a1.88 1.88 0 0 1-1.58-1.69c-.02-.18-1.74-18.26-9.84-25.71a1.88 1.88 0 0 1 1.53-3.25c10.22 1.46 25.1-10.47 25.25-10.59.67-.54 1.63-.56 2.32-.04s.93 1.44.59 2.24l-16.27 37.91c-.28.71-.96 1.15-1.7 1.15zm-6.29-26.9c3.96 5.49 6.07 12.95 7.14 18.27l11.05-25.74c-4.69 3-11.65 6.75-18.19 7.47zM439.03 675.35c.71-11.85-11.17-26.62-11.17-26.62l19.01 8 19.01 8s-19.91 1.73-26.85 10.62z"></path>
                                    <path class="st2" d="M439.03 677.23a1.877 1.877 0 0 1-1.87-1.99c.66-10.98-10.64-25.19-10.76-25.33a1.883 1.883 0 0 1 2.2-2.91l38 16c.8.34 1.26 1.17 1.13 2.02a1.87 1.87 0 0 1-1.69 1.58c-.19.02-19.18 1.77-25.53 9.9-.37.47-.92.73-1.48.73zM433.16 653c2.92 4.58 6.58 11.41 7.53 18.11 5.2-4.02 12.82-6.16 18.28-7.24L433.16 653zM600.96 675.35c-.71-11.85 11.17-26.62 11.17-26.62l-19.01 8-19.01 8c.01 0 19.92 1.73 26.85 10.62z"></path>
                                    <path class="st2" d="M600.97 677.23c-.57 0-1.12-.26-1.48-.72-6.36-8.15-25.34-9.89-25.53-9.9a1.87 1.87 0 0 1-1.69-1.58c-.13-.85.33-1.69 1.13-2.02L611.42 647a1.883 1.883 0 0 1 2.2 2.91c-.11.14-11.42 14.35-10.76 25.33.05.82-.44 1.58-1.21 1.87-.24.08-.46.12-.68.12zm-19.96-13.37c5.46 1.08 13.08 3.22 18.28 7.24.96-6.69 4.62-13.53 7.53-18.11l-25.81 10.87zM714.04 565.08c-8.74-8.04-10.43-26.92-10.43-26.92l-8.13 18.95-8.13 18.95c-.01 0 15.53-12.57 26.69-10.98z"></path>
                                    <path class="st2" d="M687.34 577.94a1.876 1.876 0 0 1-1.72-2.62l16.27-37.91c.34-.79 1.17-1.25 2.02-1.11.85.13 1.5.83 1.58 1.69.02.18 1.74 18.26 9.84 25.71.6.56.78 1.44.43 2.19-.35.74-1.15 1.17-1.96 1.06-10.21-1.46-25.11 10.47-25.25 10.59-.37.26-.79.4-1.21.4zm15.41-33.02-11.05 25.74c4.68-3.01 11.65-6.76 18.19-7.48-3.95-5.48-6.06-12.95-7.14-18.26zM325.69 565.08c8.73-8.04 10.43-26.92 10.43-26.92l8.13 18.95 8.13 18.95c.01 0-15.52-12.57-26.69-10.98z"></path>
                                    <path class="st2" d="M352.39 577.94c-.42 0-.84-.14-1.18-.42-.15-.12-15.04-12.04-25.25-10.59-.82.11-1.61-.31-1.96-1.06-.35-.74-.18-1.63.43-2.19 8.11-7.46 9.82-25.52 9.83-25.71a1.88 1.88 0 0 1 3.6-.58l16.27 37.91c.34.8.1 1.72-.59 2.24-.35.28-.75.4-1.15.4zm-22.55-14.76c6.54.72 13.5 4.46 18.19 7.48l-11.05-25.74c-1.07 5.31-3.18 12.78-7.14 18.26z"></path>
                                    <circle transform="rotate(-45.001 519.993 479.568)" class="st3" cx="520" cy="479.56" r="193.58"></circle>
                                    <path class="st3" d="M520 675.02c-107.78 0-195.46-87.68-195.46-195.46S412.22 284.1 520 284.1s195.46 87.68 195.46 195.46S627.77 675.02 520 675.02zm0-387.16c-105.71 0-191.7 86-191.7 191.7 0 105.71 86 191.7 191.7 191.7 105.71 0 191.7-86 191.7-191.7 0-105.71-86-191.7-191.7-191.7z"></path>
                                    <path class="st1" d="m702.64 469.3-21.59 1.11c-4.75-84.84-75.04-152.17-161.06-152.17-87.08 0-158.05 69-161.21 155.32l-21.43-4.45c5.41-96.17 85.11-172.49 182.64-172.49 97.6 0 177.34 76.42 182.65 172.68zM516.1 647.41c-14.3-1.27-28.32-4.33-41.62-9.09 13.81 2.95 27.88 4.08 41.75 3.46l-.13 5.63zM565.4 638.35c-11.69 4.29-23.98 7.28-36.54 8.88l-.29-5.63c12.24.31 24.62-.76 36.83-3.25z"></path>
                                    <path class="st1" d="M516.15 652.01c-17.31-1.33-34.26-5.36-50.04-11.84 16.4 4.71 33.41 6.77 50.17 6.21l-.13 5.63zM573.77 640.2c-14.24 5.94-29.45 9.88-45.04 11.62l-.29-5.63c15.16.16 30.48-1.82 45.33-5.99z"></path>
                                    <path class="st1" d="M515.56 656.59c-20.09-1.45-39.77-6.42-57.83-14.58 18.75 6.42 38.49 9.39 57.97 8.95l-.14 5.63zM582.14 642.05c-16.93 7.7-35.29 12.61-54.12 14.41l-.26-5.63c18.3.1 36.76-2.83 54.38-8.78z"></path>
                                    <path class="st1" d="M514.98 661.17c-22.88-1.56-45.29-7.49-65.62-17.32 21.08 8.11 43.55 12.02 65.77 11.69l-.15 5.63zM590.52 643.9c-19.41 9.41-40.72 15.28-62.55 17.17l-.24-5.63c21.22.02 42.63-3.85 62.79-11.54zM352.14 475.66c1.27-14.3 4.33-28.32 9.09-41.62a164.867 164.867 0 0 0-3.46 41.75l-5.63-.13zM361.2 524.96c-4.29-11.69-7.28-23.98-8.88-36.54l5.63-.29c-.3 12.24.77 24.63 3.25 36.83z"></path>
                                    <path class="st1" d="M347.55 475.72c1.33-17.31 5.36-34.26 11.84-50.04-4.71 16.4-6.77 33.41-6.21 50.17l-5.63-.13zM359.35 533.34c-5.94-14.24-9.88-29.45-11.62-45.04l5.63-.29c-.16 15.16 1.83 30.47 5.99 45.33z"></path>
                                    <path class="st1" d="M342.97 475.13c1.45-20.09 6.42-39.77 14.58-57.83-6.42 18.75-9.39 38.49-8.95 57.97l-5.63-.14zM357.51 541.71c-7.7-16.93-12.61-35.29-14.41-54.12l5.63-.26c-.11 18.29 2.83 36.76 8.78 54.38z"></path>
                                    <path class="st1" d="M338.38 474.54c1.56-22.89 7.49-45.29 17.32-65.62-8.11 21.08-12.02 43.55-11.69 65.77l-5.63-.15zM355.66 550.08c-9.41-19.41-15.28-40.72-17.17-62.55l5.63-.24c-.02 21.22 3.85 42.63 11.54 62.79z"></path>
                                    <path class="st4" d="M682.18 474.56c.53-13.46-.59-27.11-3.42-40.52 4.64 12.89 7.7 26.48 9.06 40.35l-5.64.17zM678.79 524.96c2.54-12.41 3.62-25 3.28-37.45l5.63.27c-1.56 12.79-4.56 25.29-8.91 37.18z"></path>
                                    <path class="st4" d="M686.78 474.63c.45-16.36-1.6-32.94-6.17-48.95 6.35 15.4 10.36 31.91 11.81 48.79l-5.64.16zM680.64 533.34a161.83 161.83 0 0 0 6.02-45.93l5.63.27c-1.69 15.8-5.65 31.23-11.65 45.66z"></path>
                                    <path class="st4" d="M691.37 474.67c.38-19.28-2.59-38.81-8.93-57.37 8.09 17.87 13.05 37.32 14.57 57.21l-5.64.16zM682.49 541.71c5.95-17.62 8.88-36.09 8.78-54.37l5.63.26c-1.8 18.81-6.72 37.18-14.41 54.11z"></path>
                                    <path class="st4" d="M695.97 474.7c.34-22.22-3.58-44.69-11.69-65.77 9.83 20.33 15.76 42.73 17.32 65.62l-5.63.15zM684.33 550.08a176.201 176.201 0 0 0 11.54-62.79l5.63.24c-1.88 21.83-7.75 43.14-17.17 62.55z"></path>
                                    <path class="st5" d="M520 642.76c-89.99 0-163.2-73.21-163.2-163.2s73.21-163.2 163.2-163.2 163.2 73.21 163.2 163.2-73.22 163.2-163.2 163.2zm0-322.64c-87.92 0-159.44 71.52-159.44 159.44C360.56 567.47 432.08 639 520 639s159.44-71.53 159.44-159.44c0-87.92-71.53-159.44-159.44-159.44z"></path>
                                    <path class="st5" d="M520 664.37c-101.91 0-184.81-82.91-184.81-184.81S418.09 294.75 520 294.75s184.81 82.91 184.81 184.81S621.9 664.37 520 664.37zm0-365.86c-99.83 0-181.05 81.22-181.05 181.05 0 99.83 81.22 181.05 181.05 181.05 99.83 0 181.05-81.22 181.05-181.05 0-99.83-81.22-181.05-181.05-181.05z"></path>
                                    <path class="st5" d="m562.85 522.42 224.97-42.86-224.97-42.85L520 211.74l-42.86 224.97-224.97 42.85 224.97 42.86L520 747.38z"></path>
                                    <path class="st5" d="M520 749.26c-.9 0-1.68-.64-1.85-1.53l-42.61-223.71-223.71-42.61a1.885 1.885 0 0 1 0-3.7l223.71-42.62 42.61-223.71a1.885 1.885 0 0 1 3.7 0l42.62 223.71 223.71 42.62a1.885 1.885 0 0 1 0 3.7l-223.71 42.61-42.62 223.71c-.18.89-.95 1.53-1.85 1.53zm-257.78-269.7 215.27 41.01c.76.14 1.35.74 1.5 1.49L520 737.34l41-215.28c.14-.76.74-1.35 1.49-1.49l215.27-41.01-215.26-41.01c-.76-.14-1.35-.74-1.49-1.49L520 221.78l-41.01 215.27c-.14.76-.74 1.35-1.5 1.49l-215.27 41.02z"></path>
                                    <path class="st2" d="m520 479.56 43.33-40.33L520 211.74zM520 479.56l43.33 40.33L520 747.38z"></path>
                                    <path class="st2" d="m520 479.56 40.33 43.34 227.49-43.34zM520 479.56l-40.33 43.34-227.5-43.34z"></path>
                                    <path class="st4" d="M523.57 245.33c2.19 10.66 4.1 21.36 5.91 32.08.93 5.35 1.77 10.72 2.64 16.09l2.49 16.11 2.34 16.13c.73 5.39 1.51 10.76 2.18 16.16 1.4 10.78 2.71 21.57 3.74 32.41-2.19-10.66-4.1-21.36-5.91-32.08-.93-5.35-1.76-10.72-2.64-16.09l-2.48-16.11-2.33-16.13c-.73-5.39-1.5-10.76-2.18-16.16-1.43-10.78-2.73-21.57-3.76-32.41zM580.77 512.05c12.57-2.76 25.16-5.34 37.79-7.75 6.31-1.24 12.63-2.38 18.95-3.57l18.98-3.41 19-3.26c6.34-1.03 12.68-2.12 19.03-3.1 12.69-2.04 25.42-3.9 38.17-5.59-12.57 2.76-25.16 5.35-37.79 7.75-6.31 1.24-12.63 2.38-18.95 3.57l-18.98 3.41-19.01 3.26c-6.34 1.04-12.68 2.12-19.03 3.1-12.69 2.05-25.41 3.91-38.16 5.59zM285.85 481.91c14.18 1.71 28.34 3.6 42.46 5.67 7.07 1 14.12 2.09 21.18 3.14l21.16 3.3 21.13 3.45c7.04 1.2 14.08 2.35 21.11 3.61 14.07 2.43 28.11 5.05 42.11 7.84-14.18-1.71-28.34-3.6-42.46-5.67-7.07-1-14.12-2.1-21.18-3.15l-21.15-3.3-21.13-3.45c-7.04-1.2-14.08-2.36-21.11-3.61-14.07-2.43-28.11-5.04-42.12-7.83zM554.77 540.64c-2 14.11-4.17 28.2-6.52 42.25-1.14 7.03-2.38 14.05-3.57 21.07L540.96 625l-3.87 21.01c-1.34 7-2.63 14-4.03 20.99a1661.31 1661.31 0 0 1-8.68 41.86c1.99-14.12 4.16-28.2 6.51-42.25 1.14-7.03 2.38-14.05 3.57-21.07l3.72-21.04 3.87-21.01c1.34-7 2.64-14 4.03-20.98 2.73-13.99 5.62-27.95 8.69-41.87z"></path>
                                    <path class="st5" d="m420.23 578.23 82.98-117.16 36.11 36.98z"></path>
                                    <path class="st5" d="M420.23 580.11c-.49 0-.98-.19-1.34-.57-.63-.65-.71-1.66-.19-2.4l82.98-117.16a1.883 1.883 0 0 1 2.88-.23l36.11 36.98c.39.4.58.95.53 1.5a1.89 1.89 0 0 1-.82 1.37l-119.09 80.18c-.33.23-.7.33-1.06.33zM503.44 464 427.7 570.94l108.7-73.19L503.44 464z"></path>
                                    <path class="st5" d="M621.79 578.23 502.7 498.05l36.11-36.98z"></path>
                                    <path class="st5" d="M621.79 580.11c-.36 0-.73-.11-1.05-.32l-119.09-80.18a1.89 1.89 0 0 1-.82-1.37c-.06-.55.14-1.11.53-1.5l36.11-36.98c.39-.4.94-.6 1.49-.56.56.04 1.06.33 1.39.79l82.98 117.16c.53.74.44 1.75-.19 2.4-.37.37-.86.56-1.35.56zm-116.17-82.36 108.7 73.19L538.58 464l-32.96 33.75z"></path>
                                    <path class="st5" d="m621.79 382.18-82.98 117.16-36.11-36.98z"></path>
                                    <path class="st5" d="M538.81 501.22c-.5 0-.99-.2-1.34-.57l-36.11-36.98c-.39-.4-.58-.95-.53-1.51.06-.56.36-1.06.82-1.37l119.09-80.18c.75-.51 1.76-.4 2.39.25.63.65.71 1.66.19 2.4l-82.98 117.16c-.32.46-.83.74-1.39.79-.04 0-.09.01-.14.01zm-33.19-38.56 32.96 33.75 75.74-106.94-108.7 73.19z"></path>
                                    <path class="st5" d="m420.23 382.18 119.09 80.18-36.11 36.98z"></path>
                                    <path class="st5" d="M503.21 501.22c-.05 0-.1 0-.15-.01a1.87 1.87 0 0 1-1.39-.79l-82.98-117.16c-.52-.74-.44-1.75.19-2.4.63-.65 1.64-.75 2.39-.25l119.09 80.18c.46.31.76.81.82 1.37.06.55-.14 1.11-.53 1.51l-36.11 36.98c-.34.36-.83.57-1.33.57zM427.7 389.47l75.74 106.94 32.96-33.75-108.7-73.19z"></path>
                                    <path class="st5" d="m420.23 382.18 101.66 98.02-18.68 19.14zM621.79 382.18l-99.9 98.02 16.92 19.14z"></path>
                                    <path class="st5" d="m621.79 578.23-99.9-98.03-18.68 19.14z"></path>
                                    <path class="st5" d="m420.23 578.23 101.66-98.03 17.43 17.85z"></path>
                                    <g>
                                       <path class="st5" d="M495.48 523.65c-3.11 2.63-6.58 4.78-9.94 7.07l-10.14 6.81c-6.78 4.51-13.57 9.01-20.4 13.46 6.2-5.29 12.43-10.53 18.68-15.75l9.4-7.8c3.15-2.58 6.19-5.3 9.59-7.54l2.81 3.75z"></path>
                                    </g>
                                    <g>
                                       <path class="st5" d="M549.76 519.89c3.4 2.24 6.44 4.96 9.59 7.54l9.4 7.8c6.25 5.22 12.48 10.47 18.68 15.75-6.83-4.45-13.62-8.94-20.4-13.46l-10.14-6.81c-3.36-2.29-6.84-4.44-9.94-7.07l2.81-3.75z"></path>
                                    </g>
                                    <g>
                                       <path class="st5" d="m436.05 400.62 37.43 44.45-2.96 2.33z"></path>
                                    </g>
                                    <g>
                                       <path class="st5" d="m606.29 400.86-34.82 46.55-2.94-2.35z"></path>
                                    </g>
                                    <g>
                                       <path class="st5" d="m396.47 330.61-33.72-8.3 7.67 34.35 39.94 14.52z"></path>
                                       <path class="st5" d="M410.36 373.06c-.22 0-.43-.04-.64-.11l-39.94-14.52c-.6-.22-1.05-.73-1.19-1.36l-7.67-34.35c-.14-.63.06-1.3.52-1.75.47-.46 1.13-.64 1.76-.48l33.72 8.3c.62.15 1.12.61 1.33 1.22l13.89 40.56c.24.69.06 1.44-.46 1.95-.36.35-.83.54-1.32.54zm-38.33-17.81 35.28 12.82-12.29-35.88-29.78-7.33 6.79 30.39z"></path>
                                       <path class="st5" d="m362.75 322.31 7.67 34.35 39.94 14.52z"></path>
                                       <g>
                                          <path class="st5" d="M374.3 354.69c2.43.81 4.82 1.72 7.2 2.63 2.39.91 4.74 1.89 7.1 2.87 2.35 1 4.7 2 7.02 3.07l3.48 1.6c1.15.57 2.3 1.1 3.44 1.7-1.22-.4-2.41-.85-3.62-1.27l-3.58-1.36c-2.39-.91-4.74-1.89-7.1-2.87-2.35-1-4.7-2-7.02-3.07-2.33-1.06-4.64-2.13-6.92-3.3z"></path>
                                       </g>
                                    </g>
                                    <g>
                                       <path class="st5" d="m643.99 330.61 33.72-8.3-7.67 34.35-39.94 14.52z"></path>
                                       <path class="st5" d="M630.1 373.06c-.48 0-.96-.19-1.32-.54-.52-.51-.7-1.27-.46-1.95L642.21 330c.21-.61.71-1.06 1.33-1.22l33.72-8.3c.63-.16 1.3.03 1.76.48.47.46.66 1.12.52 1.75l-7.67 34.35c-.14.63-.59 1.14-1.19 1.36l-39.94 14.52c-.21.08-.42.12-.64.12zm15.34-40.87-12.29 35.88 35.28-12.82 6.79-30.38-29.78 7.32z"></path>
                                       <path class="st5" d="m677.71 322.31-7.67 34.35-39.94 14.52z"></path>
                                       <g>
                                          <path class="st5" d="M666.16 354.69c-2.28 1.17-4.6 2.24-6.92 3.3-2.32 1.07-4.67 2.07-7.02 3.07-2.36.98-4.71 1.96-7.1 2.87l-3.58 1.36c-1.21.42-2.4.87-3.62 1.27 1.14-.59 2.29-1.13 3.44-1.7l3.48-1.6c2.32-1.07 4.67-2.07 7.02-3.07 2.36-.98 4.71-1.96 7.1-2.87 2.39-.91 4.77-1.82 7.2-2.63z"></path>
                                       </g>
                                    </g>
                                    <g>
                                       <path class="st5" d="m396.47 626.66-33.72 8.3 7.67-34.34 39.94-14.52z"></path>
                                       <path class="st5" d="M362.75 636.84c-.49 0-.96-.19-1.31-.53-.46-.46-.66-1.12-.52-1.75l7.67-34.35c.14-.63.59-1.14 1.19-1.36l39.94-14.52a1.89 1.89 0 0 1 1.96.42c.52.51.7 1.27.46 1.95l-13.89 40.56c-.21.61-.71 1.06-1.33 1.22l-33.72 8.3c-.15.04-.3.06-.45.06zm9.28-34.81-6.79 30.38 29.78-7.33 12.29-35.88-35.28 12.83z"></path>
                                       <g>
                                          <path class="st5" d="m410.36 586.1-47.61 48.86 33.72-8.3z"></path>
                                       </g>
                                    </g>
                                    <g>
                                       <path class="st5" d="m643.99 626.66 33.72 8.3-7.67-34.34-39.94-14.52z"></path>
                                       <path class="st5" d="M677.71 636.84c-.15 0-.3-.02-.45-.05l-33.72-8.3c-.62-.15-1.12-.61-1.33-1.22l-13.89-40.56a1.86 1.86 0 0 1 .46-1.95 1.87 1.87 0 0 1 1.96-.42l39.94 14.52c.6.22 1.05.73 1.19 1.36l7.67 34.35c.14.64-.05 1.3-.52 1.75-.35.33-.82.52-1.31.52zm-32.27-11.76 29.78 7.33-6.79-30.38-35.28-12.82 12.29 35.87z"></path>
                                       <g>
                                          <path class="st5" d="m630.1 586.1 47.61 48.86-33.72-8.3z"></path>
                                       </g>
                                    </g>
                                    <g>
                                       <path class="st6" d="m444.31 337.19 30.23 67.19-36.1-64.23z"></path>
                                    </g>
                                    <g>
                                       <path class="st1" d="m444.31 337.19 30.23 67.19-36.1-64.23z"></path>
                                    </g>
                                    <g>
                                       <path class="st1" d="m601.55 340.15-36.09 64.23 30.22-67.19z"></path>
                                    </g>
                                    <g>
                                       <path class="st1" d="m375.53 407.17 60.52 27.89-62.98-21.79z"></path>
                                    </g>
                                    <g>
                                       <path class="st1" d="m666.92 413.27-62.98 21.79 60.53-27.89z"></path>
                                    </g>
                                    <g>
                                       <path class="st1" d="m438.44 618.97 36.1-64.23-30.23 67.19z"></path>
                                    </g>
                                    <g>
                                       <path class="st1" d="m595.68 621.93-30.22-67.19 36.09 64.23z"></path>
                                    </g>
                                    <g>
                                       <path class="st1" d="m373.07 545.85 62.98-21.79-60.52 27.89z"></path>
                                    </g>
                                    <g>
                                       <path class="st1" d="m664.47 551.95-60.53-27.89 62.98 21.79z"></path>
                                    </g>
                                    <g>
                                       <path class="st4" d="M411.3 335.94c5.41-3.99 10.94-7.81 16.69-11.32a179.97 179.97 0 0 1 17.76-9.63c6.11-2.85 12.39-5.34 18.82-7.38 6.41-2.07 12.96-3.67 19.57-4.88-6.44 1.92-12.81 3.99-19.1 6.27-6.27 2.3-12.45 4.84-18.49 7.69-6.05 2.81-11.97 5.93-17.81 9.19-5.85 3.28-11.63 6.68-17.44 10.06zM421.32 335.96c4.07-3.02 8.26-5.85 12.61-8.47 4.33-2.63 8.81-5.02 13.4-7.19 4.6-2.14 9.31-4.05 14.13-5.63 4.81-1.61 9.71-2.9 14.69-3.87-4.76 1.69-9.49 3.41-14.18 5.24-4.67 1.85-9.3 3.81-13.84 5.96-4.56 2.11-9.03 4.41-13.48 6.77-4.45 2.37-8.86 4.81-13.33 7.19zM431.34 335.98c2.72-2.05 5.59-3.9 8.53-5.61 2.93-1.73 5.96-3.29 9.04-4.75 3.09-1.43 6.23-2.75 9.44-3.89 3.21-1.14 6.47-2.14 9.8-2.86-3.08 1.46-6.17 2.83-9.25 4.22-3.07 1.4-6.15 2.78-9.2 4.23-3.06 1.41-6.1 2.89-9.15 4.34-3.04 1.46-6.09 2.94-9.21 4.32z"></path>
                                    </g>
                                    <g>
                                       <path class="st4" d="M553.2 304.61c6.06.91 12.08 2.14 18.01 3.76a145.89 145.89 0 0 1 17.48 5.88c5.69 2.36 11.24 5.08 16.49 8.29 5.27 3.19 10.23 6.88 14.73 11.04-4.97-3.6-10.14-6.84-15.47-9.77-5.34-2.92-10.84-5.53-16.47-7.83-11.24-4.65-22.95-8.11-34.77-11.37z"></path>
                                    </g>
                                    <g>
                                       <path class="st4" d="M564 313c3.69.6 7.33 1.47 10.92 2.52 3.59 1.04 7.13 2.29 10.6 3.68 3.46 1.43 6.87 3 10.15 4.81 3.28 1.8 6.46 3.79 9.43 6.08-3.37-1.62-6.71-3.24-10.09-4.77-3.38-1.52-6.77-3-10.2-4.38-3.42-1.41-6.88-2.72-10.35-4.03-3.48-1.3-6.97-2.56-10.46-3.91z"></path>
                                    </g>
                                    <g>
                                       <path class="st5" d="M583.59 481.91c0 32.7-26.51 59.2-59.2 59.2-32.7 0-59.2-26.51-59.2-59.2 0-32.7 26.51-59.2 59.2-59.2s59.2 26.5 59.2 59.2z"></path>
                                       <path class="st5" d="M524.38 542.99c-33.68 0-61.08-27.4-61.08-61.08s27.4-61.08 61.08-61.08 61.08 27.4 61.08 61.08c.01 33.68-27.39 61.08-61.08 61.08zm0-118.4c-31.61 0-57.32 25.71-57.32 57.32s25.71 57.32 57.32 57.32 57.32-25.72 57.32-57.32c.01-31.61-25.71-57.32-57.32-57.32z"></path>
                                    </g>
                                    <g>
                                       <path class="st6" d="M524.38 521.38c-21.76 0-39.47-17.71-39.47-39.47 0-21.76 17.71-39.47 39.47-39.47 21.76 0 39.47 17.7 39.47 39.47 0 21.76-17.7 39.47-39.47 39.47zm0-75.18c-19.69 0-35.71 16.02-35.71 35.71s16.02 35.71 35.71 35.71 35.71-16.02 35.71-35.71-16.02-35.71-35.71-35.71z"></path>
                                    </g>
                                    <g>
                                       <path class="st3" d="M524.39 498.2c-5.32 0-10.32-2.61-13.36-6.97-1.92-2.73-2.93-5.95-2.93-9.32 0-8.98 7.31-16.29 16.29-16.29s16.29 7.31 16.29 16.29c0 .46-.02.92-.06 1.37-.68 8.35-7.81 14.92-16.23 14.92zm0-28.82c-6.91 0-12.54 5.62-12.54 12.53 0 2.59.78 5.06 2.25 7.16a12.55 12.55 0 0 0 10.28 5.36c6.48 0 11.96-5.05 12.48-11.49.04-.36.05-.7.05-1.03 0-6.91-5.62-12.53-12.52-12.53z"></path>
                                    </g>
                                    <g>
                                       <path class="st1" d="M516.99 514.01c-4.08-.14-8.16-1.28-11.91-3.21a31.62 31.62 0 0 1-9.9-7.99 32.822 32.822 0 0 1-6.14-11.42c-1.28-4.2-1.67-8.65-1.27-13.02.14-1.09.33-2.17.5-3.26.2-1.08.53-2.13.8-3.2.67-2.09 1.47-4.14 2.53-6.06 2.08-3.85 4.9-7.28 8.25-10 3.35-2.72 7.22-4.75 11.28-5.89 4.07-1.12 8.29-1.46 12.32-.79-4.01.66-7.79 1.9-11.21 3.65-3.42 1.74-6.49 3.99-9.09 6.67-5.21 5.32-8.43 12.26-9.17 19.49-.35 3.62-.12 7.3.75 10.85s2.36 6.96 4.38 10.08c4.05 6.25 10.27 11.25 17.88 14.1z"></path>
                                       <path class="st1" d="M498.15 500.72a29.353 29.353 0 0 1-5.49-10.06c-.17-.52-.31-1.05-.45-1.59-.27-1.07-.48-2.16-.62-3.26-.14-1.1-.24-2.21-.26-3.32-.02-1.11 0-2.22.09-3.33.11-.98.26-1.97.4-2.95.16-.97.44-1.92.67-2.88.57-1.88 1.27-3.73 2.18-5.47 1.81-3.48 4.29-6.59 7.25-9.07 1.01-.85 2.08-1.62 3.19-2.32 2.14-1.35 4.44-2.4 6.83-3.12 1.38-.41 2.79-.71 4.2-.9 2.29-.31 4.59-.32 6.83.02-1 .22-1.98.54-2.92.96-2 .59-3.91 1.34-5.71 2.24-3.09 1.55-5.85 3.53-8.2 5.89-.9.9-1.73 1.85-2.5 2.84-3.28 4.24-5.34 9.28-5.94 14.51-.08.72-.13 1.45-.16 2.17-.09 2.53.13 5.07.7 7.54.73 3.18 2.02 6.25 3.8 9.07.11.18.23.35.34.53 3.54 5.38 8.88 9.72 15.47 12.36-3.66-.07-7.35-1.04-10.73-2.75-3.39-1.68-6.48-4.12-8.97-7.11z"></path>
                                       <path class="st1" d="M501.12 498.63c-2.14-2.52-3.79-5.5-4.84-8.69-.15-.45-.28-.91-.41-1.37-.24-.93-.44-1.87-.58-2.82-.13-.95-.24-1.91-.28-2.88-.03-.96-.03-1.93.03-2.89.08-.88.19-1.76.3-2.64.13-.86.35-1.71.55-2.56.47-1.68 1.06-3.32 1.84-4.88a26.32 26.32 0 0 1 6.25-8.14c.88-.76 1.8-1.47 2.77-2.1 1.87-1.23 3.89-2.21 5.98-2.88 1.21-.38 2.45-.68 3.69-.87 2.02-.31 4.06-.36 6.04-.1-.34.17-.67.44-1 .8-1.78.52-3.47 1.18-5.06 1.96-2.76 1.35-5.22 3.08-7.31 5.12-.81.78-1.56 1.61-2.25 2.47-2.98 3.72-4.86 8.14-5.46 12.73-.08.64-.14 1.28-.18 1.92-.12 2.23.05 4.48.51 6.67.6 2.81 1.68 5.54 3.21 8.06.1.16.19.32.3.48 3.03 4.76 7.63 8.69 13.44 11.19-3.25.01-6.53-.81-9.55-2.3a24.76 24.76 0 0 1-7.99-6.28z"></path>
                                       <path class="st1" d="M504.09 496.54a22.455 22.455 0 0 1-4.18-7.32c-.13-.38-.25-.77-.36-1.16-.21-.79-.4-1.58-.53-2.39-.11-.81-.23-1.62-.29-2.43-.03-.81-.07-1.63-.03-2.45.06-.78.12-1.55.19-2.32.1-.75.25-1.5.42-2.24.36-1.47.86-2.92 1.5-4.29a23 23 0 0 1 5.26-7.22c.74-.68 1.53-1.31 2.35-1.88 1.6-1.12 3.33-2.01 5.14-2.64 1.04-.36 2.11-.64 3.18-.84 1.76-.32 3.53-.4 5.26-.22.32.12.63.33.93.65-1.55.45-3.02 1.01-4.41 1.67-2.43 1.16-4.58 2.62-6.41 4.34-.71.67-1.38 1.37-1.99 2.11-2.67 3.19-4.38 6.99-4.99 10.95-.08.55-.15 1.11-.19 1.66-.14 1.93-.04 3.88.32 5.8a22.21 22.21 0 0 0 2.88 7.48c2.51 4.15 6.39 7.65 11.41 10.03-2.83.08-5.71-.58-8.37-1.85a21.246 21.246 0 0 1-7.09-5.44z"></path>
                                       <path class="st1" d="M520.4 500.44c-2.41.16-4.89-.35-7.19-1.39-2.3-1.04-4.43-2.62-6.14-4.6a19.131 19.131 0 0 1-3.85-6.9c-.18-.64-.36-1.29-.49-1.95-.1-.66-.23-1.32-.3-1.99-.04-.67-.1-1.34-.08-2.01.03-.67.05-1.34.09-2.01.54-5.38 3.44-10.44 7.64-13.57 2.08-1.58 4.5-2.68 6.97-3.21 2.47-.53 5.01-.5 7.33.16-4.62 1.33-8.33 3.65-11.02 6.7-2.69 3.04-4.31 6.74-4.72 10.58-.4 3.86.36 7.82 2.38 11.35 2 3.52 5.14 6.59 9.38 8.84z"></path>
                                    </g>
                                    <g>
                                       <path class="st1" d="M535.86 480.74c-.36 2.53-3.12 4.82-5.11 4.05-2-.76-2.65-4.4 0-6.99-9.81-3.46-17.55 3.35-18.18 12.36 2.6 3.73 6.93 6.16 11.82 6.16 7.57 0 13.76-5.82 14.35-13.22l-2.88-2.36zm-12.61 10.72c-.42.79-2.09.71-3.73-.17-1.64-.88-2.63-2.23-2.21-3.02.42-.79 2.09-.71 3.74.17 1.63.88 2.62 2.23 2.2 3.02z"></path>
                                    </g>
                                    <g>
                                       <path class="st3" d="M538.74 443.36c6.58 1.57 12.82 5.18 17.61 10.25 2.42 2.51 4.52 5.36 6.18 8.45 1.64 3.1 2.92 6.4 3.81 9.81.83 3.43 1.25 6.94 1.28 10.47l-.1 2.64-.05 1.32-.18 1.31-.37 2.63c-.14.87-.41 1.72-.61 2.58-.8 3.46-2.23 6.72-3.82 9.88l-1.37 2.28-.69 1.14-.78 1.07-1.58 2.13c-.56.69-1.17 1.33-1.76 1.99-1.14 1.37-2.52 2.48-3.83 3.68-.64.62-1.4 1.08-2.1 1.63-.72.51-1.4 1.09-2.16 1.54-1.53.89-2.99 1.9-4.63 2.6-.8.38-1.59.77-2.4 1.13l-2.5.9c-6.68 2.4-13.95 2.82-20.89 1.74-6.94-1.16-13.61-4.03-19.06-8.41-5.4-4.42-9.57-10.31-11.59-16.79 3.74 5.66 8.27 10.46 13.58 14.15 5.32 3.64 11.36 6.16 17.69 7.06 12.66 1.8 26-2.89 34.49-12.36.53-.59 1.09-1.15 1.59-1.76l1.43-1.9.71-.95.62-1.01 1.25-2.03c1.44-2.82 2.77-5.73 3.5-8.82.18-.77.44-1.53.57-2.31l.39-2.35.19-1.18.07-1.19.15-2.38c.05-3.19-.25-6.38-.93-9.5-1.46-6.22-4.38-12.09-8.48-17.08-4.05-5.07-9.29-9.13-15.23-12.36z"></path>
                                       <path class="st3" d="M540.41 440.38c6.9 1.95 13.39 5.8 18.57 11.09 5.21 5.26 9.06 11.96 11.11 19.22 4.24 14.53.4 31.31-9.84 42.75l-1.94 2.12c-.68.67-1.41 1.29-2.11 1.94-1.37 1.34-2.97 2.41-4.49 3.56-.75.6-1.62 1.02-2.43 1.53-.83.48-1.63 1-2.48 1.43l-2.59 1.22-1.3.6-1.35.47-2.7.93c-.91.28-1.85.47-2.77.7l-1.39.33-.69.16-.71.1-2.83.36c-.47.05-.94.14-1.41.16l-1.42.04-2.84.07c-1.89-.07-3.78-.19-5.65-.49-3.73-.56-7.4-1.52-10.85-2.98-3.46-1.45-6.69-3.36-9.64-5.59-5.85-4.53-10.53-10.45-13.26-17.09 4.01 5.94 9.14 10.92 15.08 14.42 5.88 3.59 12.55 5.61 19.24 6.13 6.71.5 13.46-.61 19.6-3.08 6.18-2.42 11.65-6.46 16.02-11.39 4.45-4.9 7.53-10.95 9.24-17.34.53-1.58.68-3.24 1-4.87.19-.82.17-1.65.25-2.48l.2-2.5c.03-3.34-.24-6.69-.87-9.99-.66-3.3-1.82-6.49-3.2-9.59-1.38-3.11-3.23-6.02-5.35-8.72-4.22-5.51-9.84-9.91-16.2-13.22z"></path>
                                       <path class="st3" d="M542.09 437.41c7.27 2.18 14.08 6.32 19.52 11.93 5.48 5.58 9.53 12.65 11.7 20.31 2.17 7.66 2.5 15.91.73 23.77-1.73 7.85-5.34 15.34-10.56 21.5-5.25 6.12-11.93 11.02-19.39 14.06-7.49 2.96-15.66 4.05-23.57 3.24-7.94-.8-15.56-3.73-21.98-8.17-6.4-4.49-11.64-10.5-14.9-17.37 4.5 6.1 10.16 11.15 16.6 14.62 3.2 1.76 6.58 3.15 10.06 4.1 3.48.95 7.03 1.59 10.61 1.69 1.79.04 3.58.06 5.35-.15l2.66-.2 2.62-.46c3.5-.58 6.87-1.74 10.13-3.06.8-.37 1.58-.79 2.37-1.18.78-.41 1.6-.74 2.33-1.24 1.48-.95 3.03-1.8 4.39-2.94.7-.54 1.41-1.05 2.1-1.6l1.95-1.79.97-.89c.32-.3.6-.65.9-.97l1.77-1.96c.61-.64 1.08-1.39 1.62-2.08.51-.71 1.1-1.38 1.55-2.13l1.38-2.25c.22-.38.47-.74.68-1.13l.58-1.19 1.18-2.37c.36-.8.63-1.64.96-2.46l.47-1.24.24-.62.17-.64.7-2.55c.11-.43.26-.85.33-1.28l.22-1.31.45-2.62c.12-.88.13-1.76.22-2.65.05-.89.17-1.77.17-2.66l-.04-2.67c-.01-.89-.15-1.77-.2-2.66l-.11-1.33-.21-1.32c-.16-.87-.23-1.77-.46-2.64-.69-3.52-1.97-6.89-3.45-10.18-.4-.81-.74-1.65-1.2-2.43l-1.35-2.36c-1-1.51-1.99-3.05-3.15-4.46-2.24-2.88-4.8-5.57-7.7-7.89a58.685 58.685 0 0 0-9.41-6.12z"></path>
                                       <path class="st3" d="M543.77 434.43c3.82 1.21 7.5 2.92 10.97 5.05l2.55 1.68 2.42 1.88c.83.6 1.54 1.34 2.32 2.01l1.14 1.03 1.07 1.11c1.47 1.45 2.72 3.09 4.03 4.7 1.18 1.7 2.4 3.38 3.41 5.2 2.07 3.6 3.75 7.47 4.86 11.51 1.11 4.03 1.9 8.2 1.99 12.42.1 1.05 0 2.1-.01 3.16l-.11 3.16c-.12 1.05-.28 2.09-.42 3.14l-.22 1.57-.11.79-.18.77-.75 3.09c-.13.51-.24 1.03-.4 1.54l-.53 1.5-1.07 3c-.38.99-.88 1.93-1.31 2.89-1.74 3.88-4.18 7.39-6.75 10.75-5.39 6.56-12.36 11.78-20.11 15.17-7.74 3.46-16.36 4.69-24.69 4.12-4.17-.34-8.31-1.11-12.26-2.44-3.94-1.33-7.71-3.1-11.2-5.3-6.93-4.45-12.73-10.52-16.53-17.59 5.01 6.24 11.18 11.35 18.13 14.78 6.9 3.5 14.52 5.29 22.09 5.42 7.57-.05 15.15-1.39 21.9-4.69 1.66-.87 3.39-1.6 4.94-2.66l2.38-1.49 2.23-1.7c1.55-1.06 2.84-2.42 4.24-3.66l.52-.47.47-.52.94-1.04c.62-.7 1.27-1.37 1.86-2.09a50.872 50.872 0 0 0 9.83-19.94c1.79-7.28 1.74-15.01.18-22.41-.74-3.73-2.11-7.3-3.7-10.77-.77-1.76-1.76-3.4-2.71-5.07l-1.61-2.4c-.51-.82-1.17-1.53-1.74-2.32-2.38-3.04-5.08-5.89-8.14-8.36-3.06-2.47-6.38-4.64-9.92-6.52z"></path>
                                       <path class="st3" d="M545.45 431.45c4.16.95 8.22 2.56 12.01 4.71.93.56 1.88 1.11 2.81 1.7.9.63 1.77 1.29 2.66 1.94.91.63 1.72 1.37 2.56 2.1l1.24 1.1c.4.38.78.78 1.17 1.18 6.34 6.24 10.87 14.35 13.33 23.03 1.25 4.34 2.01 8.85 2.07 13.38.17 4.52-.19 9.08-1.17 13.51-1.91 8.87-5.87 17.3-11.54 24.36a59.797 59.797 0 0 1-21.03 16.86c-4.1 1.95-8.42 3.44-12.86 4.42-4.45.94-9.01 1.3-13.54 1.17-9.07-.22-18.06-2.81-25.79-7.36l-2.83-1.81c-.92-.64-1.79-1.34-2.67-2.03l-2.51-2.2-2.3-2.4c-2.94-3.3-5.38-7.02-6.91-11.12.76.75 1.5 1.49 2.22 2.25l2.29 2.14c.81.66 1.57 1.37 2.35 2.05l2.43 1.92 2.53 1.77 2.57 1.67c.88.51 1.78 1 2.65 1.53l2.71 1.4c3.66 1.76 7.47 3.19 11.41 4.1 3.94.93 7.97 1.36 11.99 1.43 4.03.06 8.06-.32 11.99-1.2a53.29 53.29 0 0 0 11.4-3.83c3.65-1.69 7.07-3.87 10.22-6.35 3.16-2.49 6.02-5.35 8.51-8.52 5.02-6.29 8.51-13.77 10.18-21.64 1.65-7.87 1.52-16.12-.35-23.97-.88-3.94-2.34-7.75-4.15-11.38-.84-1.85-1.91-3.58-2.94-5.34l-1.73-2.53c-.56-.85-1.25-1.61-1.87-2.42-2.62-3.12-5.41-6.19-8.67-8.75-.78-.69-1.66-1.24-2.48-1.88-.42-.31-.82-.64-1.25-.94l-1.31-.85c-1.72-1.17-3.58-2.13-5.4-3.2z"></path>
                                    </g>
                                    <g>
                                       <path class="st1" d="M469.53 162.44C331.96 184.02 223.1 293.25 202.06 431h11.75c20.84-131.34 124.56-235.44 255.72-256.81v-11.75z"></path>
                                    </g>
                                    <g>
                                       <path class="st1" d="M567.32 162.16v11.8c131.49 20.51 235.85 124 257.51 255.11h11.78c-21.87-137.54-131.37-246.21-269.29-266.91z"></path>
                                    </g>
                                    <g>
                                       <path class="st1" d="M475.34 786.02C341.59 766.84 235.16 661.87 213.86 528.8h-11.78c21.5 139.49 133.09 249.59 273.26 268.94v-11.72z"></path>
                                    </g>
                                    <g>
                                       <path class="st1" d="M824.76 530.74C802.81 662.45 697.38 766.17 564.9 785.76v11.76c138.9-19.77 249.48-128.66 271.64-266.79h-11.78z"></path>
                                    </g>
                                    <path id="SVGID_x5F_1_x5F_" class="st7" d="M280.77 448.61s26.74-158.74 193.6-207.24"></path>
                                    <text>
                                       <textPath xlink:href="#SVGID_x5F_1_x5F_" startOffset="27.734%">
                                          <tspan class="st1" style="font-family:'Raleway-Bold';font-size:38.5393px">PUSULABET</tspan>
                                       </textPath>
                                    </text>
                                    <path id="SVGID_x5F_00000110462973804814089070000011049505691852538779_x5F_" class="st7" d="M559.5 242.09s158.74 26.74 207.24 193.6"></path>
                                    <text>
                                       <textPath xlink:href="#SVGID_x5F_00000110462973804814089070000011049505691852538779_x5F_" startOffset="27.734%">
                                          <tspan class="st1" style="font-family:'Raleway-Bold';font-size:38.5393px">PUSULABET</tspan>
                                       </textPath>
                                    </text>
                                    <path id="SVGID_x5F_00000165934281845329088970000010767103740272020902_x5F_" class="st7" d="M756.35 506.91s-26.74 158.74-193.6 207.24"></path>
                                    <text>
                                       <textPath xlink:href="#SVGID_x5F_00000165934281845329088970000010767103740272020902_x5F_" startOffset="27.734%">
                                          <tspan class="st1" style="font-family:'Raleway-Bold';font-size:38.5393px">PUSULABET</tspan>
                                       </textPath>
                                    </text>
                                    <path id="SVGID_x5F_00000172430852231201315550000006319651634309982114_x5F_" class="st7" d="M477.62 713.42s-158.74-26.74-207.24-193.6"></path>
                                    <text>
                                       <textPath xlink:href="#SVGID_x5F_00000172430852231201315550000006319651634309982114_x5F_" startOffset="27.734%">
                                          <tspan class="st1" style="font-family:'Raleway-Bold';font-size:38.5393px">PUSULABET</tspan>
                                       </textPath>
                                    </text>
                                    <g>
                                       <path class="st5" d="M482.07 153.62v28.58c0 .79.64 1.44 1.44 1.44h20.6c.79 0 1.44-.64 1.44-1.44v-28.58c0-.79-.64-1.44-1.44-1.44h-20.6c-.79.01-1.44.65-1.44 1.44zm20.63 6.53c-1.21 2.27-6.6 11.07-6.6 20.5h-8.01c0-10.21 6.22-17.9 6.99-19.12h-4.22v3.01h-5.95v-9.36h17.78v4.97zM507.21 153.62v28.58c0 .79.64 1.44 1.44 1.44h20.6c.79 0 1.44-.64 1.44-1.44v-28.58c0-.79-.64-1.44-1.44-1.44h-20.6c-.8.01-1.44.65-1.44 1.44zm20.62 6.53c-1.21 2.27-6.6 11.07-6.6 20.5h-8.01c0-10.21 6.22-17.9 6.99-19.12H516v3.01h-5.95v-9.36h17.78v4.97zM532.34 153.62v28.58c0 .79.64 1.44 1.44 1.44h20.6c.79 0 1.44-.64 1.44-1.44v-28.58c0-.79-.64-1.44-1.44-1.44h-20.6c-.8.01-1.44.65-1.44 1.44zm20.63 6.53c-1.21 2.27-6.6 11.07-6.6 20.5h-8.01c0-10.21 6.22-17.9 6.99-19.12h-4.22v3.01h-5.95v-9.36h17.78v4.97z"></path>
                                       <path class="st5" d="M555.79 187.86h-73.71c-2.57 0-4.66-2.09-4.66-4.66v-30.59c0-2.57 2.09-4.66 4.66-4.66h73.71c2.57 0 4.66 2.09 4.66 4.66v30.59c0 2.57-2.09 4.66-4.66 4.66zm-73.71-37.52c-1.25 0-2.27 1.02-2.27 2.27v30.59c0 1.25 1.02 2.27 2.27 2.27h73.71c1.25 0 2.27-1.02 2.27-2.27v-30.59c0-1.25-1.02-2.27-2.27-2.27h-73.71z"></path>
                                    </g>
                                    <path class="st7" d="M443.03 92h151.83v151.83H443.03z"></path>
                                    <path class="st5" d="M551.49 817.84h-.76c-.17-.03-.34-.08-.52-.1-.44-.04-.86-.17-1.27-.34a10.7 10.7 0 0 1-1.61-.84c-.75-.47-1.46-.99-2.15-1.54-1.42-1.14-2.74-2.37-4.03-3.66a97.956 97.956 0 0 1-5.26-5.71c-.22-.26-.47-.5-.75-.7a5.48 5.48 0 0 0-1.55-.77 4.95 4.95 0 0 0-1.48-.21c-.52 0-1.04.01-1.56.01-7.52 0-15.04.01-22.56.01h-.18c-.15.01-.3 0-.44.03-1.21.21-2.25.72-3.06 1.66a92.099 92.099 0 0 1-3.74 4.15c-1.39 1.45-2.81 2.87-4.33 4.19-.88.77-1.79 1.5-2.75 2.16-.59.4-1.2.77-1.86 1.07-.55.25-1.11.44-1.71.51-.12.01-.23.05-.34.07h-.88c-.18-.09-.38-.09-.57-.11a6.58 6.58 0 0 1-1.99-.57c-1.11-.53-1.97-1.33-2.65-2.35-.47-.72-.82-1.49-1.09-2.3-.22-.65-.36-1.32-.49-1.99-.18-.91-.34-1.83-.45-2.75-.07-.59-.13-1.19-.19-1.78-.08-.8-.14-1.6-.16-2.4-.01-.29-.03-.59-.04-.88 0-.08-.01-.16-.03-.23-.01-.05-.05-.08-.1-.09v-2.53c.1-.06.11-.15.12-.25l.06-.85c.03-.57.04-1.14.09-1.7.05-.7.12-1.41.21-2.11a49.692 49.692 0 0 1 1.48-7.88c1.14-4.2 2.81-8.19 5.07-11.92.75-1.25 1.58-2.43 2.53-3.54 1.09-1.26 2.29-2.39 3.68-3.32 1.46-.98 3.04-1.7 4.75-2.12.86-.21 1.73-.35 2.61-.38.06 0 .14.02.19-.06h1.47c.08.09.18.06.27.06.7.05 1.41.12 2.1.26 1.41.27 2.78.68 4.1 1.22 1.6.66 3.12 1.46 4.53 2.47.5.36 1.03.64 1.6.86.86.32 1.75.5 2.67.49 1.12-.02 2.23-.01 3.35 0 .75 0 1.48-.11 2.2-.34.68-.22 1.34-.49 1.93-.92.63-.46 1.28-.87 1.96-1.24 2.78-1.55 5.72-2.58 8.93-2.79.04 0 .09-.04.13-.05h1.71c.05.06.12.06.19.06.5.02.99.09 1.49.17 1.63.27 3.16.82 4.6 1.62 1.54.85 2.89 1.95 4.1 3.22 1.19 1.25 2.2 2.63 3.1 4.09 2.5 4.08 4.3 8.46 5.46 13.1.54 2.15.94 4.32 1.19 6.53.14 1.19.27 2.38.29 3.57 0 .14.03.27.05.4v4.94c-.02.14-.05.29-.05.43-.02.37 0 .75-.03 1.12a48.479 48.479 0 0 1-.86 6.2c-.21.99-.52 1.95-.99 2.85-.5.96-1.14 1.8-2.01 2.46-.92.7-1.96 1.1-3.1 1.24-.21.01-.41.06-.62.1zm-50.64-39.3v4.63c0 .14 0 .28-.03.41-.04.24-.2.37-.45.39-.09.01-.18 0-.26 0h-4.38c-.12 0-.23-.02-.34.03-.72 1.24-.69 3.33.07 4.42.09 0 .2.01.31.01h4.12c.1 0 .2 0 .29.01.29.03.46.21.47.5.01.1 0 .2 0 .29v4.42c.07.06.14.12.21.17.25.17.53.3.82.38 1.15.3 2.25.14 3.3-.41.03-.02.06-.05.1-.08v-4.41c0-.18.01-.35.05-.53.04-.21.2-.33.42-.35.1-.01.2 0 .29 0h4.38c.11 0 .21 0 .32-.01.04-.07.08-.13.11-.19.21-.45.38-.92.48-1.42.05-.27.08-.54.06-.82-.03-.6-.23-1.15-.52-1.67-.24-.42-.16-.35-.58-.35h-4.35c-.28-.02-.43-.16-.46-.43-.01-.11-.02-.22-.02-.32 0-.51.01-1.02.01-1.53.01-.95.01-1.9.02-2.85 0-.07-.01-.13-.02-.19-1.39-.63-3.16-.66-4.42-.1zm33.7 13.46c-.01-1.33-1.08-2.52-2.54-2.51-1.33.01-2.5 1.05-2.5 2.51 0 1.46 1.16 2.53 2.52 2.53 1.47-.01 2.52-1.2 2.52-2.53zm-2.52-12.47c-1.22-.02-2.52.95-2.53 2.52 0 1.43 1.13 2.53 2.53 2.52 1.52-.01 2.51-1.24 2.51-2.51a2.516 2.516 0 0 0-2.51-2.53zm7.44 2.49a2.5 2.5 0 0 0 2.5 2.55c1.52.01 2.52-1.22 2.54-2.48a2.53 2.53 0 0 0-2.49-2.56c-1.4-.02-2.56 1.14-2.55 2.49zm5.03 10a2.523 2.523 0 0 0-2.51-2.54c-1.49 0-2.53 1.23-2.53 2.52 0 1.24.98 2.51 2.5 2.52 1.49.02 2.54-1.2 2.54-2.5z"></path>
                                    <g>
                                       <path class="st5" d="M202.08 441.81c-21.2 0-38.39 17.19-38.39 38.39s17.19 38.39 38.39 38.39 38.39-17.19 38.39-38.39-17.19-38.39-38.39-38.39zm27.98 55.8-11.61 2.67-4.82-4.75 3.17 5.99-5.49 9.92-9.23.49 9.92.53 1.72.95c-3.64 1.28-7.56 1.97-11.64 1.97s-7.99-.7-11.64-1.97l2.67-1.48-5.77-10.41 3.17-5.99-4.82 4.75-11.05-2.54-3.08-8.17 2.29 9.07-.45 1.98a35.002 35.002 0 0 1-6.52-20.41c0-.31 0-.62.01-.94l2.04 1.91 8.13-8.71 6.92 1.3-6.25-3.24-.99-11.28 6.47-5.39-7.54 4.9-1.6.14a35.235 35.235 0 0 1 16.97-12.11l-.87 1.95 10.88 4.85 1.02 7.42 1.02-7.42 10.36-4.62 7.47 4.89-7.39-6.11-.43-.97a35.235 35.235 0 0 1 16.97 12.11l-2.62-.23-1.05 11.87-6.25 3.24 6.92-1.3 7.74 8.29-2.24 8.81 3.42-9.13 1.26-1.17c.01.31.01.62.01.94 0 7.61-2.42 14.65-6.52 20.41l-.68-3.01z"></path>
                                       <path class="st5" d="m188.03 475.16 5.37 16.51h17.36l5.36-16.51-14.04-10.2z"></path>
                                    </g>
                                    <g>
                                       <path class="st5" d="M870.38 472.22c-.13-.49-.27-.98-.41-1.47a38.68 38.68 0 0 0-8.82-15.28l-.01-.01c-.36-.4-.74-.78-1.13-1.16a38.877 38.877 0 0 0-16.76-9.71c-.49-.13-.98-.26-1.48-.38a38.724 38.724 0 0 0-19.22.38 38.714 38.714 0 0 0-16.77 9.71c-.39.38-.77.76-1.13 1.16a38.7 38.7 0 0 0-8.83 15.28c-.15.49-.29.98-.42 1.47-.8 3.1-1.23 6.34-1.23 9.69 0 3.35.42 6.59 1.23 9.69.13.49.27.98.42 1.47a38.68 38.68 0 0 0 8.82 15.28l.01.01a38.854 38.854 0 0 0 17.9 10.87c.49.13.98.26 1.48.38a38.724 38.724 0 0 0 19.22-.38 38.622 38.622 0 0 0 16.76-9.71c.39-.38.77-.77 1.13-1.16l.01-.01a38.68 38.68 0 0 0 8.82-15.28c.15-.49.29-.97.41-1.47.8-3.1 1.23-6.34 1.23-9.69 0-3.34-.43-6.58-1.23-9.68zm-27.62-25.62a36.544 36.544 0 0 1 15.75 9.12l-8.33 7.9c-2.83-2.68-6.27-4.7-10.09-5.84l2.67-11.18zm-19.75 0 2.68 11.17a25.164 25.164 0 0 0-10.09 5.84l-8.33-7.9c4.34-4.24 9.73-7.43 15.74-9.11zm-25.64 44.41a36.42 36.42 0 0 1-1.14-9.1c0-3.14.4-6.19 1.14-9.1l11.02 3.27a24.94 24.94 0 0 0-.68 5.83c0 2.01.24 3.96.68 5.83l-11.02 3.27zm25.64 26.21a36.544 36.544 0 0 1-15.75-9.12l8.33-7.9c2.83 2.68 6.27 4.7 10.09 5.84l-2.67 11.18zm-13.25-35.31c0-12.75 10.38-23.13 23.13-23.13 12.75 0 23.13 10.38 23.13 23.13 0 12.75-10.38 23.13-23.13 23.13-12.75 0-23.13-10.38-23.13-23.13zm33 35.31-2.68-11.17c3.82-1.14 7.27-3.17 10.09-5.84l8.33 7.9a36.475 36.475 0 0 1-15.74 9.11zm25.65-26.21-11.02-3.27c.45-1.87.68-3.83.68-5.83 0-2.01-.24-3.96-.68-5.83l11.02-3.27c.75 2.91 1.15 5.96 1.15 9.1-.01 3.14-.41 6.19-1.15 9.1z"></path>
                                    </g>
                                    <path class="st5" d="M837.29 493.05s-1.23-.65-2.28-2.07c-1.05-1.41-1.05-3.7-1.05-3.7s2.92 2.58 6.12 1.26c3.3-1.36 3.23-4.25 2.79-5.64-.59-1.86-1.69-2.77-4.29-5.18-3.34-3.1-5.69-6.95-5.69-6.95s-2.35 3.85-5.69 6.95c-2.6 2.41-3.7 3.32-4.29 5.18-.44 1.39-.5 4.28 2.79 5.64 3.2 1.32 6.12-1.26 6.12-1.26s0 2.28-1.05 3.7-2.28 2.07-2.28 2.07h8.8z"></path>
                                 </svg>
                              </span>
                           </span>
                        </a>
                     </div>
                  <div class="OperatorHeaderContainer">
                  <?php if(isset($us['id'])){ ?>
                  <div class="OperatorAccountContainer ComponentLayout InstanceOperatorHeaderAccountContainer Layout">
                  <div class="GamificationDropdownContainer">
                     <button class="GamificationDropdownButton" onclick="carddap()" type="button" title="0">
                        0 XP
                        <span class="">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                              <path d="M23 7.769l-11 11-11-11L3.538 5.23 12 13.692l8.462-8.46"></path>
                           </svg>
                        </span>
                     </button>
                     <div class="GamificationDropdown GamificationProgressCard dnone" id="cardda">
                        <player-elevate-loyaltycard player-name="" endpoint="https://pusulabet-com.nwacdn.com" session="cd5873f2-c041-47fd-bd70-105ce551fbd4" language="tr" client-styling-url="/static/css/widgets/gamification-card/style-1.0.590.css" theme="Dark" date-format="yyyy-MM-dd" client-styling="" translation-url="" class="hydrated">
                           <div class="ElevateCardWrapper Dark">
                              <div class="LoyaltyCard Outer" style="background-image: url(&quot;/static/static/card-ground.svg&quot;);">
                                 <general-styling-wrapper class="hydrated">
                                    <style hidden="">:host{height:unset!important}.ElevateCardWrapper,.Inner{min-height:unset!important}.ElevateCardWrapper .Inner .PlayerImg{display:none}.ElevateCardWrapper .Inner .Content{padding:3.6rem}.ElevateCardWrapper .PointsCard .Inner .SPPoints{padding:0!important}.ElevateCardWrapper .PointsCard .Inner .SPPoints .PointsInfo .Points{font-size:3.6rem}.ElevateCardWrapper .PointsCard .Inner .SPPoints .PointsInfo .Points .XP{font-size:1.4rem;vertical-align:baseline;font-weight:400}.ElevateCardWrapper .LoyaltyCard .Inner .LevelInfo .ElevateLevel .LevelName{color:#fff;font-size:3.6rem}.ElevateCardWrapper .LoyaltyCard .Inner .LevelInfo .PointsInfo{font-size:2rem;padding-top:3rem}.ElevateCardWrapper .LoyaltyCard .Inner .LevelInfo .PointsInfo .XP{font-size:1.4rem;vertical-align:baseline;font-weight:400}.ElevateCardWrapper .LoyaltyCard .Inner .LevelInfo .NextLevelTip{color:#cacaca;text-align:left;font-weight:400}</style>
                                    <!---->
                                    <div class="StyleShell"></div>
                                 </general-styling-wrapper>
                                 <player-elevate-card-data class="hydrated"></player-elevate-card-data>
                                 <div class="OuterCover Inner" style="background-image: url(&quot;/static/static/card-ground-over.svg&quot;);">
                                    <div class="Content Row">
                                       <div class="PlayerImg">
                                          <div class="PlayerAvatar"><img class="Badge" src="/static.glastcoper.com/bonus/img/2331/pusula-vipclub.png"></div>
                                       </div>
                                       <div class="LevelInfo Başlangıç">
                                          <div class="CardCell ElevateLevel"><span class="LevelName" title="Başlangıç">Başlangıç</span></div>
                                          <div class="PointsInfo">0</div>
                                          <span class="LevelProgress" id="LevelProgress">
                                             <svg width="100%" height="28" style="opacity: 1;" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect y="12" x="2" width="100%" id="total_level" height="5" rx="2.5" fill="white" fill-opacity="0.5" viewbox="0 0 0 28"></rect>
                                                <rect y="12" x="2" id="current_level" width="0" height="5" rx="2.5" fill="white"></rect>
                                                <g filter="url(#filter_current_level)">
                                                   <circle id="circle_current_level" cx="6.5" cy="14.5" r="6.5" fill="white"></circle>
                                                </g>
                                                <g filter="url(#filter_heart_ball)">
                                                   <g filter="url(#filter_ball)">
                                                      <circle cx="278" cy="14" r="10" id="lock" fill="url(#paint0_linear_ball)"></circle>
                                                   </g>
                                                   <g filter="url(#filter_heart)">
                                                      <svg x="272" y="4" id="lock_box">
                                                         <path d="M10.217 6.42442c-0.713,-0.574,-1.304,-1.083,-1.928,-1.622c-0.348,-0.299,-0.707,-0.611,-1.101,-0.943l-0.013,-0.01c0,0,-0.023,-0.017,-0.04,-0.027l-0.167,-0.095l-0.15,0.12c0,0,-0.015,0.012,-0.024,0.02c-0.391,0.33,-0.749,0.64,-1.094,0.939c-0.622,0.539,-1.211,1.048,-1.924,1.624c-1.816,1.463,-3.598,3.263,-3.033,5.506c0.404,1.601,2.104,2.905,3.789,2.905c0.211,0,0.423,-0.02,0.626,-0.061c0.286,-0.058,0.572,-0.145,0.864,-0.265c-0.079,0.962,-0.413,1.864,-0.881,2.369l-0.423,0.459h0.633c0.633,0,1.018,-0.007,1.356,-0.013c0.248,-0.004,0.462,-0.008,0.72,-0.008c0.335,0,0.709,0.006,1.215,0.021l0.686,0.02l-0.474,-0.483c-0.504,-0.514,-0.847,-1.403,-0.923,-2.385c0.311,0.132,0.616,0.227,0.916,0.287c0.204,0.039,0.411,0.059,0.623,0.059c1.687,0,3.386,-1.304,3.789,-2.909c0.56,-2.243,-1.224,-4.041,-3.042,-5.504v-0.004z" fill="#933CBF"></path>
                                                         <path d="M9.727,6.98459c-1.004,-0.83,-1.741,-1.515,-2.723,-2.365c-0.002,0,-0.004,-0.004,-0.007,-0.006c-0.002,0,-0.004,0.004,-0.006,0.006c-0.98,0.85,-1.715,1.537,-2.721,2.367c-1.455,1.202,-3.126,2.821,-2.638,4.81c0.37,1.511,2.091,2.751,3.665,2.43c0.389,-0.08,0.75,-0.224,1.094,-0.402c0,0.116,-0.004,0.233,-0.012,0.353c-0.064,0.991,-0.398,1.892,-0.86,2.401c1.481,0,1.481,-0.043,2.961,0c-0.481,-0.503,-0.834,-1.382,-0.9,-2.401c-0.008,-0.127,-0.012,-0.253,-0.012,-0.378c0.357,0.19,0.733,0.342,1.14,0.425c1.574,0.319,3.292,-0.922,3.661,-2.433c0.486,-1.992,-1.189,-3.609,-2.644,
                                                            -4.809l0.002,0.002z" fill="url(#paint1_linear_lock)"></path>
                                                         <path d="M9.255,7.551c-0.844,-0.716,-1.462,-1.309,-2.286,-2.045c-0.002,0,-0.004,-0.004,-0.006,-0.006c0,0,-0.004,0.004,-0.006,0.006c-0.824,0.736,-1.44,1.329,-2.284,2.047c-0.919,0.782,-1.94,1.769,-2.214,2.943c-0.115,0.021,-0.914,0.044,-0.914,0.044l0.887,0.083c-0.039,0.206,-0.055,0.418,-0.041,0.638c0.087,-1.371,1.25,-2.507,2.282,-3.384c0.844,-0.718,1.462,-1.313,2.284,-2.047c0.002,-0.002,0.004,-0.004,0.006,-0.006c0.002,0,0.004,0.004,0.006,0.004c0.824,0.734,1.442,1.329,2.286,2.045c1.034,0.879,2.198,2.013,2.286,3.386c0.093,-1.517,-1.173,-2.761,-2.286,-3.708z" fill="#9040C9"></path>
                                                      </svg>
                                                   </g>
                                                </g>
                                                <g filter="url(#filter_lock)">
                                                   <svg x="272" y="9" id="heart_box">
                                                      <path d="M7,6c-0.19,-0.002,-0.377,0.052,-0.534,0.154c-0.158,0.103,-0.278,0.25,-0.346,0.42c-0.069,0.171,-0.081,0.357,-0.035,0.535c0.046,0.177,0.147,0.337,0.29,0.457v0.834c0,0.159,0.066,0.312,0.183,0.424c0.117,0.113,0.276,0.176,0.442,0.176c0.166,0,0.325,-0.063,0.442,-0.176c0.117,-0.112,0.183,-0.265,0.183,-0.424v-0.834c0.143,-0.12,0.244,-0.28,0.29,-0.457c0.046,-0.178,0.034,-0.364,-0.035,-0.535c-0.068,-0.17,-0.188,-0.317,-0.346,-0.42c-0.157,-0.102,-0.344,-0.156,-0.534,-0.154zm3.125,-2.4v-1.2c0,-0.796,-0.329,-1.559,-0.915,-2.121c-0.586,-0.563,-1.381,-0.879,-2.21,-0.879c-0.829,0,-1.624,0.316,-2.21,0.879c-0.586,0.562,-0.915,1.325,-0.915,2.121v1.2c-0.497,0,-0.974,0.19,-1.326,0.527c-0.351,0.338,-0.549,0.796,-0.549,1.273v4.2c0,0.477,0.198,0.935,0.549,1.273c0.352,0.337,0.829,0.527,1.326,0.527h6.25c0.497,0,0.974,-0.19,1.326,-0.527c0.351,-0.338,0.549,-0.796,0.549,-1.273v-4.2c0,-0.477,-0.198,-0.935,-0.549,-1.273c-0.352,-0.337,-0.829,-0.527,-1.326,-0.527zm-5,-1.2c0,-0.477,0.198,-0.935,0.549,-1.273c0.352,-0.337,0.829,-0.527,1.326,-0.527c0.497,0,0.974,0.19,1.326,0.527c0.351,0.338,0.549,0.796,0.549,1.273v1.2h-3.75v-1.2zm5.625,7.2c0,0.159,-0.066,0.312,-0.183,0.424c-0.117,0.113,-0.276,0.176,-0.442,0.176h-6.25c-0.166,0,-0.325,-0.063,-0.442,-0.176c-0.117,-0.112,-0.183,-0.265,-0.183,-0.424v-4.2c0,-0.159,0.066,-0.312,0.183,-0.424c0.117,-0.113,0.276,-0.176,0.442,-0.176h6.25c0.166,0,0.325,0.063,0.442,0.176c0.117,0.112,0.183,0.265,0.183,0.424v4.2z" fill="white"></path>
                                                   </svg>
                                                </g>
                                                <defs>
                                                   <filter id="filter_current_level" x="-8" y="4" width="21" height="21" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                                      <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_305_23"></feGaussianBlur>
                                                   </filter>
                                                   <filter id="filter_heart_ball" x="264" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                      <feOffset></feOffset>
                                                      <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                                      <feComposite in2="hardAlpha" operator="out"></feComposite>
                                                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_305_23"></feBlend>
                                                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_305_23" result="shape"></feBlend>
                                                   </filter>
                                                   <filter id="filter_ball" x="268" y="4" width="20" height="21" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                      <feOffset dy="1"></feOffset>
                                                      <feGaussianBlur stdDeviation="1"></feGaussianBlur>
                                                      <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.55 0"></feColorMatrix>
                                                      <feBlend mode="normal" in2="shape" result="effect1_innerShadow_305_23"></feBlend>
                                                   </filter>
                                                   <filter id="filter_heart" x="270" y="5.72727" width="14.7271" height="15.6364" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                      <feOffset></feOffset>
                                                      <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                                      <feComposite in2="hardAlpha" operator="out"></feComposite>
                                                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_305_23"></feBlend>
                                                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_305_23" result="shape"></feBlend>
                                                   </filter>
                                                   <filter id="filter_lock" x="272" y="7" width="12" height="14" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                      <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                                      <feOffset></feOffset>
                                                      <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                                      <feComposite in2="hardAlpha" operator="out"></feComposite>
                                                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_305_23"></feBlend>
                                                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_305_23" result="shape"></feBlend>
                                                   </filter>
                                                   <linearGradient id="paint0_linear_ball" x1="272" y1="6" x2="283.2" y2="22.6" gradientUnits="userSpaceOnUse">
                                                      <stop stop-color="#946AD7"></stop>
                                                      <stop offset="1" stop-color="#EFABEB"></stop>
                                                   </linearGradient>
                                                   <linearGradient id="paint1_linear_lock" x1="278" y1="18.4056" x2="278" y2="10.2845" gradientUnits="userSpaceOnUse">
                                                      <stop stop-color="#814FD6"></stop>
                                                      <stop offset="1" stop-color="#D679D8"></stop>
                                                   </linearGradient>
                                                </defs>
                                             </svg>
                                          </span>
                                          <div class="Row NextLevelTip">Need 25000.00 to reach Bronz</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <style>:host {
                           display: block;
                           width: 360px;
                           height: 230px;
                           }

                           .ElevateCardWrapper {
                           contain: layout inline-size;
                           width: 100%;
                           height: fit-content;
                           min-height: 218px;
                           }

                           .Outer {
                           container-type: inline-size;
                           font-size: 12px;
                           background-size: cover;
                           background-repeat: no-repeat;
                           line-height: initial;
                           width: 100%;
                           height: 100%;
                           }

                           .Dark {
                           color: var(--emfe-w-color-gray150, #efefef);
                           }

                           .Light {
                           color: var(--emfe-w-color-black, #0e0e0e);
                           }

                           @container (min-width: 381px) {
                           .Outer {
                              background-size: cover;
                           }
                           .Outer .OuterCover {
                              min-height: 190px;
                           }
                           }
                           @container (min-width: 260px) {
                           .Outer {
                              background-size: contain;
                           }
                           }
                           .OuterCover {
                           width: 100%;
                           height: 100%;
                           content: "";
                           background-repeat: no-repeat;
                           background-size: cover;
                           border-radius: 15px;
                           }

                           .Inner {
                           display: flex;
                           flex-direction: column;
                           min-height: 158px;
                           }
                           .Inner .Content {
                           padding: 15px;
                           flex-wrap: wrap;
                           gap: 8px;
                           }
                           .Inner .Row {
                           display: flex;
                           flex-direction: row;
                           }
                           .Inner .CardCell {
                           display: flex;
                           }
                           .Inner .LevelProgress svg {
                           transition: opacity 0.4s;
                           }
                           .Inner .LevelInfo {
                           display: flex;
                           flex-direction: column;
                           }
                           .Inner .LevelInfo .ElevateLevel .LevelName {
                           height: 28px;
                           border-radius: 5px;
                           line-height: 28px;
                           overflow: hidden;
                           text-overflow: ellipsis;
                           white-space: nowrap;
                           }
                           .Inner .LevelInfo.Level0 .ElevateLevel .LevelName {
                           box-shadow: -2px -2px 7px 0px var(--emfe-w-elevate-color-level0button-shadow, rgba(191, 84, 6, 0.75));
                           background: linear-gradient(180deg, var(--emfe-w-elevate-color-level0-bg0, #E2792C) 0%, var(--emfe-w-elevate-color-level0-bg1, rgba(242, 151, 99, 0)) 100%);
                           }
                           .Inner .LevelInfo.Level1 .ElevateLevel .LevelName {
                           box-shadow: -2px -2px 7px 0px var(--emfe-w-elevate-color-level1button-shadow, rgba(151, 151, 151, 0.75));
                           background: linear-gradient(180deg, var(--emfe-w-elevate-color-level1-bg0, #BEBFED) 0%, var(--emfe-w-elevate-color-level1-bg1, rgba(216, 217, 233, 0)) 100%);
                           }
                           .Inner .LevelInfo.Level2 .ElevateLevel .LevelName {
                           box-shadow: -2px -2px 7px 0px var(--emfe-w-elevate-color-level2button-shadow, rgba(191, 120, 6, 0.75));
                           background: linear-gradient(180deg, var(--emfe-w-elevate-color-level2-bg0, #FCC410) 0%, var(--emfe-w-elevate-color-level2-bg1, rgba(255, 189, 43, 0)) 100%);
                           }
                           .Inner .LevelInfo.Level3 .ElevateLevel .LevelName {
                           box-shadow: -2px -2px 7px 0px var(--emfe-w-elevate-color-level3button-shadow, rgba(65, 6, 191, 0.75));
                           background: linear-gradient(180deg, var(--emfe-w-elevate-color-level3-bg0, #B1A2DB) 0%, var(--emfe-w-elevate-color-level3-bg1, rgba(203, 202, 245, 0)) 100%);
                           }
                           .Inner .LevelInfo.Level4 .ElevateLevel .LevelName {
                           box-shadow: -2px -2px 7px 0px var(--emfe-w-elevate-color-level4button-shadow, rgba(65, 6, 191, 0.75));
                           background: linear-gradient(180deg, var(--emfe-w-elevate-color-level4-bg0, #B1A2DB) 0%, var(--emfe-w-elevate-color-level4-bg1, rgba(203, 202, 245, 0)) 100%);
                           }
                           .Inner .LevelInfo .ElevateLevel {
                           display: flex;
                           }
                           .Inner .LevelInfo {
                           flex: 1;
                           flex-grow: 1;
                           min-width: 150px;
                           }
                           .Inner .PlayerImg {
                           width: 29%;
                           margin: auto;
                           max-width: 100px;
                           min-width: 30px;
                           order: 0;
                           }
                           .Inner .PlayerAvatar {
                           max-width: 100px;
                           flex-basis: 100px;
                           height: auto;
                           margin: auto;
                           padding-top: 10px;
                           }
                           .Inner .PlayerAvatar .Avatar, .Inner .PlayerAvatar .Badge {
                           width: 100%;
                           height: 100%;
                           }
                           .Inner .PlayerAvatar .Avatar {
                           border-radius: 50%;
                           background-size: contain;
                           background-repeat: no-repeat;
                           }
                           .Inner .ElevateLevel .ExpirationDate {
                           max-width: 138px;
                           min-width: 118px;
                           }
                           .Inner .PlayerName, .Inner .RedeemButton, .Inner .ElevateLevel {
                           text-transform: capitalize;
                           width: 100%;
                           }
                           .Inner .PlayerName {
                           font-size: 16px;
                           }
                           .Inner .Row .PointsInfo {
                           display: table;
                           font-weight: 600;
                           }
                           .Inner .Row .Redeem {
                           justify-content: flex-end;
                           margin-left: auto;
                           }
                           .Inner .Row .Redeem:hover {
                           color: var(--emfe-w-elevate-color-redeem-hover, #00ABA4);
                           cursor: pointer;
                           }
                           .Inner .Row .RedeemButton:hover span {
                           color: var(emfe-w-elevate-color-redeem-text-hover, #f1f1f1);
                           font-weight: bold;
                           }
                           .Inner .Row .RedeemButton {
                           width: 95px;
                           height: 35px;
                           display: flex;
                           align-items: center;
                           border-radius: 10px;
                           background: var(--emfe-w-elevate-color-redeem-bg, linear-gradient(0deg, #26CC37, #26CC37)), linear-gradient(117.99deg, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0) 33.89%), linear-gradient(283.85deg, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0) 33.47%), linear-gradient(268.18deg, rgba(255, 255, 255, 0.6) -17.36%, rgba(239, 239, 239, 0) 15.78%);
                           box-shadow: 0px 4px 4px 0px #00000040;
                           }
                           .Inner .Row .RedeemButton span {
                           color: var(--emfe-w-color-white, #fff);
                           line-height: 18px;
                           font-size: 15px;
                           text-align: center;
                           width: 100%;
                           }
                           .Inner .Row .Points {
                           font-size: large;
                           vertical-align: middle;
                           }
                           .Inner .Row .Points .XP {
                           font-size: x-small;
                           }
                           .Inner .Row .ExpirationPoints {
                           font-size: small;
                           text-align: right;
                           font-weight: bold;
                           color: var(--emfe-w-color-red, #9e595f);
                           }</style>
                        </player-elevate-loyaltycard>
                     </div>
                  </div>  
                  <a class="ComponentAnchor CTASecondary OperatorHeaderDeposit DepositBtn ComponentButton InstanceDeposit Button OperatorTransferModal InstanceOperatorTransferModalTrigger   Anchor" href="/deposit">
                        <div class="TotalBalanceWrapper">
                           <p class="ComponentText InstanceOperatorCasinoBalance Text">Toplam Bakiyeniz</p>
                           <span class="Currency"><span class="FormattedAmount"><?=$us['balance']?></span><span class="CurrencyPlaceholder"> ₺</span></span>
                        </div>
                        <span class="PlusIcon">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                              <g transform="translate(0 -952.362)">
                                 <path d="M50 952.4c-3.6 0-6.6 2.9-6.6 6.6v36.8H6.6c-3.6 0-6.6 2.9-6.6 6.6 0 3.6 2.9 6.6 6.6 6.6h36.8v36.8c0 3.6 2.9 6.6 6.6 6.6s6.6-2.9 6.6-6.6V1009h36.8c3.6 0 6.6-2.9 6.6-6.6 0-3.6-2.9-6.6-6.6-6.6H56.6V959c0-3.7-3-6.6-6.6-6.6z"></path>
                              </g>
                           </svg>
                        </span>
                     </a>
                     <a class="ComponentAnchor IosAppPageLinkWrapper Anchor" href="/ios-app">
                        <span class="IosAppPageLinkIcon">
                           <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 814 1000" height="36" width="28">
                              <path d="M788.1 340.9c-5.8 4.5-108.2 62.2-108.2 190.5 0 148.4 130.3 200.9 134.2 202.2-.6 3.2-20.7 71.9-68.7 141.9-42.8 61.6-87.5 123.1-155.5 123.1s-85.5-39.5-164-39.5c-76.5 0-103.7 40.8-165.9 40.8s-105.6-57-155.5-127C46.7 790.7 0 663 0 541.8c0-194.4 126.4-297.5 250.8-297.5 66.1 0 121.2 43.4 162.7 43.4 39.5 0 101.1-46 176.3-46 28.5 0 130.9 2.6 198.3 99.2zm-234-181.5c31.1-36.9 53.1-88.1 53.1-139.3 0-7.1-.6-14.3-1.9-20.1-50.6 1.9-110.8 33.7-147.1 75.8-28.5 32.4-55.1 83.6-55.1 135.5 0 7.8 1.3 15.6 1.9 18.1 3.2.6 8.4 1.3 13.6 1.3 45.4 0 102.5-30.4 135.5-71.3z" fill="currentColor"></path>
                           </svg>
                        </span>
                     </a>
                     <a class="ComponentAnchor WhatsappIconWrapper Anchor" href="https://storage.googleapis.com/stateless-jojobet/2024/12/073fe9f3-jojobet-release-1.0.5.apk">
                        <span class="CallIcon">
                           <svg fill="currentColor" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 299.679 299.679" xml:space="preserve">
                              <g id="XMLID_197_">
                                 <path id="XMLID_221_" d="M181.122,299.679c10.02,0,18.758-8.738,18.758-18.758v-43.808h12.525c7.516,0,12.525-5.011,12.525-12.525 V99.466H74.749v125.123c0,7.515,5.01,12.525,12.525,12.525H99.8v43.808c0,10.02,8.736,18.758,18.758,18.758 c10.019,0,18.756-8.738,18.756-18.758v-43.808h25.051v43.808C162.364,290.941,171.102,299.679,181.122,299.679z"></path>
                                 <path id="XMLID_222_" d="M256.214,224.589c10.02,0,18.756-8.737,18.756-18.758v-87.615c0-9.967-8.736-18.75-18.756-18.75 c-10.021,0-18.758,8.783-18.758,18.75v87.615C237.456,215.851,246.192,224.589,256.214,224.589z"></path>
                                 <path id="XMLID_223_" d="M43.466,224.589c10.021,0,18.758-8.737,18.758-18.758v-87.615c0-9.967-8.736-18.75-18.758-18.75 c-10.02,0-18.756,8.783-18.756,18.75v87.615C24.71,215.851,33.446,224.589,43.466,224.589z"></path>
                                 <path id="XMLID_224_" d="M209.899,1.89c-2.504-2.52-6.232-2.52-8.736,0l-16.799,16.743l-0.775,0.774 c-9.961-4.988-21.129-7.479-33.566-7.503c-0.061,0-0.121-0.002-0.182-0.002h-0.002c-0.063,0-0.121,0.002-0.184,0.002 c-12.436,0.024-23.604,2.515-33.564,7.503l-0.777-0.774L98.516,1.89c-2.506-2.52-6.232-2.52-8.736,0 c-2.506,2.506-2.506,6.225,0,8.729l16.25,16.253c-5.236,3.496-9.984,7.774-14.113,12.667C82.032,51.256,75.727,66.505,74.86,83.027 c-0.008,0.172-0.025,0.342-0.033,0.514c-0.053,1.125-0.078,2.256-0.078,3.391H224.93c0-1.135-0.027-2.266-0.078-3.391 c-0.008-0.172-0.025-0.342-0.035-0.514c-0.865-16.522-7.172-31.772-17.057-43.487c-4.127-4.893-8.877-9.171-14.113-12.667 l16.252-16.253C212.405,8.115,212.405,4.396,209.899,1.89z M118.534,65.063c-5.182,0-9.383-4.201-9.383-9.383 c0-5.182,4.201-9.383,9.383-9.383c5.182,0,9.383,4.201,9.383,9.383C127.917,60.862,123.716,65.063,118.534,65.063z M181.145,65.063 c-5.182,0-9.383-4.201-9.383-9.383c0-5.182,4.201-9.383,9.383-9.383c5.182,0,9.383,4.201,9.383,9.383 C190.528,60.862,186.327,65.063,181.145,65.063z"></path>
                              </g>
                           </svg>
                        </span>
                     </a>
                     <div class="ContentTriggerContainer">
                        <div class="InstanceToggleMenu ContentTriggerWrapper ComponentContentTrigger Prerender">
                           <button class="ToggleUserMenu ComponentButton InstanceOperatorShowusermenuButton ContentTrigger Button" onclick="openUserMenu()" type="button">
                              <span class="ComponentIcon InstanceUserIcon ButtonIconStart Icon">
                                 <span class="SvgIcon MainIcon CustomHtml">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path d="M8.57 14.098A6.83 6.83 0 1118.63 8.08a6.83 6.83 0 01-3.47 5.946c5.084.87 8.03 3.96 8.03 8.25h-1.5c0-4.195-3.43-6.998-9.63-6.998-6.2 0-9.628 2.803-9.628 6.998h-1.5c0-4.18 2.795-7.218 7.64-8.178zm3.23-.69a5.33 5.33 0 100-10.66 5.33 5.33 0 000 10.66z"></path>
                                    </svg>
                                 </span>
                              </span>
                           </button>
                           <div class="ContentTriggerContentWrapper">
                              <div class="ContentTriggerContainer">
                                 <div class="MyAccountMenuWrapper">
                                    <div class="MyAccount TopWrapper">
                                       <div class="MyAccount TopInnerWrapper">
                                          <div class="MyAccountMenu UserContainer">
                                             <div class="MyAccountMenuUsername"><?=$us['login']?></div>
                                          </div>
                                          <div class="MyAccountMenu SmsSecurityContainer">
                                             <div class="Info">SMS GÜVENLİĞİ</div>
                                             <div class="toggle-switch"><input type="checkbox" class="toggle-switch-checkbox" id="switch"><label class="toggle-switch-label" for="switch" tabindex="1"><span class="toggle-switch-inner" data-yes="AÇIK" data-no="KAPALI" tabindex="-1"></span><span class="toggle-switch-switch" tabindex="-1"></span></label></div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="MyAccountMenu BalanceContainer">
                                       <div class="BalanceContainerItem">
                                          <div class="BalanceWrapper">
                                             <p class="GameChips ComponentText InstanceOperatorMenuCasinochips Text">Bakiyeniz</p>
                                             <span class="Currency"><span class="FormattedAmount"><?=$us['balance']?></span><span class="CurrencyPlaceholder"> ₺</span></span>
                                          </div>
                                       </div>
                                       <div class="BalanceContainerItem">
                                          <div class="TotalBonusesWrapper">
                                             <p class="ComponentText InstanceOperatorTotalBonuses Text">Bonus Bakiyeniz</p>
                                             <span class="Currency"><span class="FormattedAmount">0,00</span><span class="CurrencyPlaceholder"> ₺</span></span>
                                          </div>
                                       </div>
                                       <div class="BalanceContainerItem">
                                          <div class="TotalBalanceWrapper">
                                             <p class="ComponentText InstanceOperatorCasinoBalance Text">Toplam Bakiyeniz</p>
                                             <span class="Currency"><span class="FormattedAmount"><?=$us['balance']?></span><span class="CurrencyPlaceholder"> ₺</span></span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="MyAccountMenu GamificationControls">
                                       <a class="ComponentAnchor GamificationButton Anchor" href="/level">
                                          <span class="SvgIcon">
                                             <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 19.1662L4.5145 21.8575C4.18522 22.0551 3.7719 22.0467 3.45096 21.8358C3.13002 21.625 2.95815 21.249 3.00871 20.8684L3.84201 14.5945L3.65067 14.1326C3.5976 14.0042 3.49529 13.902 3.36713 13.8486L2.05905 13.3067C1.44075 13.0506 0.949461 12.5595 0.693155 11.9413C0.43685 11.323 0.436757 10.6277 0.692444 10.0093L1.23401 8.70177C1.28698 8.57332 1.28683 8.42908 1.23358 8.30074L0.692143 6.9898C0.565342 6.68366 0.500053 6.35554 0.5 6.02417C0.499947 5.69251 0.565242 5.3641 0.692158 5.05768C0.819073 4.75127 1.00512 4.47287 1.23967 4.23839C1.47414 4.00398 1.75279 3.81793 2.05912 3.69111L3.36735 3.1492C3.49556 3.09619 3.59776 2.99401 3.65119 2.86597L4.19275 1.55847C4.44896 0.939895 4.9404 0.448431 5.55897 0.192203C6.17754 -0.0640268 6.87256 -0.0640268 7.49113 0.192203L8.09848 0.443785L8.7985 0.732504L8.80048 0.733324C8.86572 0.760395 8.93506 0.773742 9.00435 0.773362C9.07073 0.772626 9.13701 0.759293 9.19952 0.733354L9.2015 0.732534L9.86728 0.457937L10.5089 0.192172C11.1274 -0.0640574 11.8225 -0.0640574 12.441 0.192172C13.0596 0.448401 13.551 0.939865 13.8072 1.55844L14.3488 2.86594C14.4022 2.99398 14.5044 3.09616 14.6326 3.14917L15.9409 3.69108C16.2472 3.8179 16.5259 4.00395 16.7603 4.23836C16.9949 4.47284 17.1809 4.75124 17.3078 5.05765C17.4348 5.36407 17.5001 5.69248 17.5 6.02413C17.4999 6.35551 17.4347 6.68363 17.3079 6.98977L16.7664 8.30071C16.7132 8.42905 16.713 8.57329 16.766 8.70174L17.3076 10.0092C17.5632 10.6277 17.5632 11.323 17.3068 11.9412C17.0505 12.5594 16.5592 13.0506 15.9409 13.3067L14.6329 13.8486C14.5047 13.9019 14.4024 14.0042 14.3493 14.1325L14.158 14.5945L14.9913 20.8683C15.0419 21.249 14.87 21.625 14.549 21.8358C14.2281 22.0466 13.8148 22.0551 13.4855 21.8575L9 19.1662ZM9.02619 2.77325C8.68932 2.77694 8.35189 2.71322 8.0345 2.58208L6.72574 2.03995C6.59724 1.98672 6.45286 1.98672 6.32436 2.03995C6.19586 2.09318 6.09376 2.19528 6.04052 2.32381L5.49777 3.63417C5.24099 4.25141 4.74988 4.74159 4.13217 4.99719L2.82422 5.53898C2.76056 5.56533 2.70241 5.60409 2.65368 5.6528C2.60495 5.70152 2.5663 5.75936 2.53993 5.82303C2.51356 5.88669 2.49999 5.95493 2.5 6.02384C2.50001 6.09276 2.5136 6.161 2.53999 6.22465L2.5405 6.22588L3.08087 7.53425C3.33702 8.15223 3.33778 8.8475 3.08232 9.4658L2.54047 10.774C2.48742 10.9025 2.48744 11.0469 2.54067 11.1753C2.59392 11.3038 2.696 11.4058 2.82444 11.459L4.13333 12.0012C4.75128 12.2578 5.24287 12.7496 5.49867 13.3678L5.78595 14.0614C5.79078 14.0725 5.79542 14.0837 5.79985 14.0949L6.04076 14.6766C6.09405 14.8048 6.19615 14.907 6.32447 14.9601C6.45283 15.0133 6.59704 15.0133 6.72544 14.9603L8 14.4331L8.03516 14.4178C8.3561 14.2852 8.6977 14.2216 9.03848 14.2269C9.3536 14.2316 9.66806 14.2952 9.96484 14.4179L11.2746 14.9602C11.403 15.0133 11.5472 15.0132 11.6755 14.9601C11.8038 14.9069 11.9059 14.8048 11.9592 14.6765L12.2001 14.0949C12.2046 14.0836 12.2092 14.0724 12.2141 14.0613L12.5013 13.3678C12.7571 12.7495 13.2487 12.2578 13.8667 12.0011L15.1756 11.459C15.304 11.4058 15.4061 11.3037 15.4593 11.1753C15.5126 11.0469 15.5126 10.9024 15.4595 10.774L14.9177 9.46577C14.6622 8.84747 14.663 8.1522 14.9191 7.53421L15.46 6.22462C15.4864 6.16096 15.5 6.09273 15.5 6.02381C15.5 5.9549 15.4864 5.88666 15.4601 5.823C15.4337 5.75933 15.395 5.70149 15.3463 5.65277C15.2976 5.60406 15.2394 5.5653 15.1758 5.53895L13.8678 4.99716C13.2501 4.74156 12.759 4.25138 12.5022 3.63414L11.9595 2.32378C11.9062 2.19525 11.8041 2.09315 11.6756 2.03992C11.5471 1.98669 11.4028 1.98669 11.2743 2.03992L9.9655 2.58205C9.66456 2.70639 9.3456 2.77012 9.02619 2.77325ZM9.00959 16.2267C8.93832 16.2255 8.86686 16.2388 8.79983 16.2666L7.4899 16.8084C6.87373 17.0632 6.18177 17.0639 5.56525 16.8104L5.26444 19.0752L8.07391 17.3895L8.10297 17.3718C8.2083 17.3072 8.42671 17.1732 8.67827 17.118C8.89023 17.0715 9.10977 17.0715 9.32173 17.118C9.57329 17.1732 9.7917 17.3072 9.89703 17.3718L9.92609 17.3895L12.7356 19.0751L12.4347 16.8104C11.8182 17.0638 11.1263 17.0632 10.5101 16.8084L9.20017 16.2665C9.13916 16.2412 9.07447 16.2279 9.00959 16.2267Z"></path>
                                             </svg>
                                          </span>
                                          My Level
                                       </a>
                                       <a class="ComponentAnchor GamificationButton Anchor" href="/shop">
                                          <span class="SvgIcon">
                                             <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.46429 2.19354C7.21442 2.19354 6.97106 2.2977 6.78878 2.48928C6.6059 2.6815 6.50001 2.94609 6.50001 3.2258C6.50001 3.50552 6.6059 3.77011 6.78878 3.96232C6.97106 4.15391 7.21442 4.25806 7.46429 4.25806H9.63425C9.56187 4.08118 9.47857 3.89797 9.38356 3.7164C8.89769 2.78793 8.27398 2.19354 7.46429 2.19354ZM10 6.32258V9.41935L2.60001 9.41935C2.30348 9.41935 2.14122 9.41855 2.02464 9.40871C2.02 9.40832 2.0156 9.40793 2.01145 9.40753C2.01107 9.40325 2.01069 9.39871 2.01031 9.39392C2.00078 9.27358 2.00001 9.10609 2.00001 8.8V6.94193C2.00001 6.63584 2.00078 6.46835 2.01031 6.348C2.01069 6.34321 2.01107 6.33868 2.01145 6.33439C2.0156 6.334 2.02 6.3336 2.02464 6.33321C2.14122 6.32338 2.30348 6.32258 2.60001 6.32258H10ZM4.66953 4.25806C4.55822 3.92911 4.50001 3.58027 4.50001 3.2258C4.50001 2.41043 4.80802 1.62479 5.36188 1.04266C5.91635 0.459899 6.67224 0.129028 7.46429 0.129028C9.259 0.129028 10.3725 1.38679 11 2.47456C11.6275 1.38679 12.741 0.129028 14.5357 0.129028C15.3278 0.129028 16.0837 0.459899 16.6381 1.04266C17.192 1.62479 17.5 2.41043 17.5 3.2258C17.5 3.58027 17.4418 3.92911 17.3305 4.25806L19.4319 4.25806C19.6843 4.25803 19.9301 4.258 20.1382 4.27555C20.3668 4.29483 20.6366 4.34032 20.908 4.48308C21.2843 4.68101 21.5903 4.99684 21.782 5.38531C21.9203 5.66549 21.9644 5.94392 21.9831 6.17989C22.0001 6.39476 22 6.64847 22 6.90899V8.83294C22 9.09346 22.0001 9.34717 21.9831 9.56204C21.9644 9.79801 21.9203 10.0764 21.782 10.3566C21.5903 10.7451 21.2843 11.0609 20.908 11.2588C20.6366 11.4016 20.3668 11.4471 20.1382 11.4664C20.0938 11.4701 20.0476 11.4731 20 11.4754V18.543C20 19.0872 20 19.5566 19.9694 19.9433C19.9371 20.3513 19.8658 20.7573 19.673 21.1478C19.3854 21.7305 18.9265 22.2043 18.362 22.5012C17.9836 22.7002 17.5904 22.7738 17.195 22.8071C16.8205 22.8387 16.3657 22.8387 15.8386 22.8387H11.0014C11.0009 22.8387 11.0005 22.8387 11 22.8387C10.9995 22.8387 10.9991 22.8387 10.9986 22.8387H6.16144C5.6343 22.8387 5.17954 22.8387 4.80498 22.8071C4.40963 22.7738 4.01641 22.7002 3.63803 22.5012C3.07355 22.2043 2.6146 21.7305 2.32699 21.1478C2.13419 20.7572 2.06288 20.3513 2.03057 19.9432C1.99997 19.5566 1.99999 19.0872 2 18.543L2.00001 11.4754C1.95241 11.4731 1.90624 11.4701 1.86178 11.4664C1.63318 11.4471 1.36345 11.4016 1.09202 11.2588C0.715701 11.0609 0.409739 10.7451 0.217992 10.3566C0.0796947 10.0764 0.0356271 9.79801 0.0169504 9.56204C-5.6861e-05 9.34717 -2.74161e-05 9.09345 2.50544e-06 8.83292L5.24726e-06 6.94193C5.24726e-06 6.93095 3.93595e-06 6.91997 2.62465e-06 6.909C-2.72969e-05 6.64848 -5.67418e-05 6.39476 0.0169505 6.17989C0.0356274 5.94392 0.079695 5.66549 0.217992 5.38531C0.409739 4.99684 0.7157 4.68101 1.09202 4.48308C1.36345 4.34032 1.63318 4.29483 1.86178 4.27555C2.06993 4.258 2.31573 4.25803 2.56811 4.25806C2.57873 4.25806 2.58936 4.25806 2.60001 4.25806H4.66953ZM4.00001 11.4839V18.5032C4.00001 19.0984 4.00078 19.4827 4.02393 19.7751C4.04613 20.0556 4.08381 20.1595 4.109 20.2106C4.20487 20.4048 4.35785 20.5627 4.54601 20.6617C4.59546 20.6877 4.69618 20.7266 4.96784 20.7495C5.25118 20.7734 5.62345 20.7742 6.20001 20.7742H10V11.4839H4.00001ZM12 11.4839V20.7742H15.8C16.3766 20.7742 16.7488 20.7734 17.0322 20.7495C17.3038 20.7266 17.4046 20.6877 17.454 20.6617C17.6422 20.5627 17.7951 20.4048 17.891 20.2106C17.9162 20.1595 17.9539 20.0556 17.9761 19.7751C17.9992 19.4827 18 19.0984 18 18.5032V11.4839H12ZM19.4 9.41935C19.6965 9.41935 19.8588 9.41855 19.9754 9.40871C19.98 9.40832 19.9844 9.40792 19.9886 9.40752C19.9889 9.40324 19.9893 9.39871 19.9897 9.39392C19.9992 9.27358 20 9.10609 20 8.8V6.94193C20 6.63584 19.9992 6.46835 19.9897 6.34801C19.9893 6.34322 19.9889 6.33868 19.9885 6.33439C19.9844 6.334 19.98 6.3336 19.9754 6.33321C19.8588 6.32338 19.6965 6.32258 19.4 6.32258H12V9.41935H19.4ZM14.5357 4.25806C14.7856 4.25806 15.0289 4.15391 15.2112 3.96232C15.3941 3.77011 15.5 3.50552 15.5 3.2258C15.5 2.94609 15.3941 2.6815 15.2112 2.48928C15.0289 2.2977 14.7856 2.19354 14.5357 2.19354C13.726 2.19354 13.1023 2.78793 12.6165 3.7164C12.5214 3.89797 12.4381 4.08118 12.3658 4.25806H14.5357Z"></path>
                                             </svg>
                                          </span>
                                          Shop
                                       </a>
                                       <a class="ComponentAnchor GamificationButton Anchor" href="/loyalty-history">
                                          <span class="SvgIcon">
                                             <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.2413 4.11648e-07H5.7587C4.95374 -1.19522e-05 4.28937 -2.2158e-05 3.74818 0.0441949C3.18608 0.0901201 2.66937 0.188684 2.18404 0.435975C1.43139 0.819469 0.819469 1.43139 0.435975 2.18404C0.188684 2.66937 0.0901201 3.18608 0.0441949 3.74818C-2.21543e-05 4.28937 -1.19522e-05 4.95372 4.11648e-07 5.75869V16.2413C-1.19522e-05 17.0463 -2.2158e-05 17.7106 0.0441949 18.2518C0.0901201 18.8139 0.188684 19.3306 0.435975 19.816C0.819469 20.5686 1.43139 21.1805 2.18404 21.564C2.66937 21.8113 3.18608 21.9099 3.74818 21.9558C4.28937 22 4.95372 22 5.75868 22H8.5C9.05229 22 9.5 21.5523 9.5 21C9.5 20.4477 9.05229 20 8.5 20H5.8C4.94342 20 4.36113 19.9992 3.91104 19.9624C3.47262 19.9266 3.24842 19.8617 3.09202 19.782C2.7157 19.5903 2.40973 19.2843 2.21799 18.908C2.1383 18.7516 2.07337 18.5274 2.03755 18.089C2.00078 17.6389 2 17.0566 2 16.2V5.8C2 4.94342 2.00078 4.36113 2.03755 3.91104C2.07337 3.47262 2.1383 3.24842 2.21799 3.09202C2.40973 2.7157 2.7157 2.40973 3.09202 2.21799C3.24842 2.1383 3.47262 2.07337 3.91104 2.03755C4.36113 2.00078 4.94342 2 5.8 2H12.2C13.0566 2 13.6389 2.00078 14.089 2.03755C14.5274 2.07337 14.7516 2.1383 14.908 2.21799C15.2843 2.40973 15.5903 2.7157 15.782 3.09202C15.8617 3.24842 15.9266 3.47262 15.9624 3.91104C15.9992 4.36113 16 4.94342 16 5.8V9.5C16 10.0523 16.4477 10.5 17 10.5C17.5523 10.5 18 10.0523 18 9.5V5.75868C18 4.95372 18 4.28937 17.9558 3.74818C17.9099 3.18608 17.8113 2.66937 17.564 2.18404C17.1805 1.43139 16.5686 0.819469 15.816 0.435975C15.3306 0.188684 14.8139 0.0901201 14.2518 0.0441949C13.7106 -2.21543e-05 13.0463 -1.19522e-05 12.2413 4.11648e-07Z"></path>
                                                <path d="M5 5C4.44772 5 4 5.44772 4 6C4 6.55229 4.44772 7 5 7H13C13.5523 7 14 6.55229 14 6C14 5.44772 13.5523 5 13 5H5Z"></path>
                                                <path d="M5 9C4.44772 9 4 9.44772 4 10C4 10.5523 4.44772 11 5 11H11C11.5523 11 12 10.5523 12 10C12 9.44772 11.5523 9 11 9H5Z"></path>
                                                <path d="M5 13C4.44772 13 4 13.4477 4 14C4 14.5523 4.44772 15 5 15H7C7.55229 15 8 14.5523 8 14C8 13.4477 7.55229 13 7 13H5Z"></path>
                                                <path d="M16.8333 15.9333C16.8333 15.381 16.3856 14.9333 15.8333 14.9333C15.281 14.9333 14.8333 15.381 14.8333 15.9333V17.8333C14.8333 18.2121 15.0473 18.5584 15.3861 18.7278L17.3194 19.6944C17.8134 19.9414 18.4141 19.7412 18.6611 19.2472C18.9081 18.7532 18.7079 18.1526 18.2139 17.9056L16.8333 17.2153V15.9333Z"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8333 12C12.6117 12 10 14.6117 10 17.8333C10 21.055 12.6117 23.6667 15.8333 23.6667C19.055 23.6667 21.6667 21.055 21.6667 17.8333C21.6667 14.6117 19.055 12 15.8333 12ZM12 17.8333C12 15.7162 13.7162 14 15.8333 14C17.9504 14 19.6667 15.7162 19.6667 17.8333C19.6667 19.9504 17.9504 21.6667 15.8333 21.6667C13.7162 21.6667 12 19.9504 12 17.8333Z"></path>
                                             </svg>
                                          </span>
                                          Loyalty History
                                       </a>
                                    </div>
                                    <ul class="MyAccountMenu LinksContainer">
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="/deposit">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" alt="">
                                                   <defs>
                                                      <style>.cls-1{fill:#fff;}.cls-2{fill:none;stroke:#234209;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style>
                                                   </defs>
                                                   <title>Para Yatir</title>
                                                   <g data-name="Layer 2">
                                                      <rect class="cls-1" width="100" height="100"></rect>
                                                   </g>
                                                   <g id="Para_Yatır" data-name="Para Yatır">
                                                      <path class="cls-2" d="M69.42,28.4H54.35c-5.18,0-7.69,2.88-10.05,5S25.58,50.18,25.58,50.18" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M44.3,68.6l5-5c5.59,0,10.5-.44,15.08-5,1.74-1.74,6.17-6.26,6.17-6.26" transform="translate(0 0)"></path>
                                                      <rect class="cls-2" x="21.95" y="46.63" width="15.57" height="38.92" transform="translate(-38.02 40.38) rotate(-45)"></rect>
                                                      <line class="cls-2" x1="21.48" y1="56.74" x2="25.15" y2="60.41"></line>
                                                      <polyline class="cls-2" points="81.15 60.23 81.15 65.25 89.53 65.25 89.53 15 81.15 15 81.15 20.02"></polyline>
                                                      <path class="cls-2" d="M52.67,38.45H71.1c3.52,0,5,1,5,3.35,0,4.19-4.34,6.7-8.37,6.7H63.19a3.38,3.38,0,0,0-3,1.8,12.4,12.4,0,0,1-10.91,6.58H46" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M64.49,38.45a15.07,15.07,0,0,1,25-9.56" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M89.53,51.36A15.08,15.08,0,0,1,66.94,48.5" transform="translate(0 0)"></path>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">PARA YATIR</span>
                                          </a>
                                       </li>
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="/withdraw">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" alt="">
                                                   <defs>
                                                      <style>.cls-1{fill:#fff;}.cls-2{fill:none;stroke:#234209;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}.cls-3{fill:#234209;}</style>
                                                   </defs>
                                                   <title>Para Çek</title>
                                                   <g data-name="Layer 2">
                                                      <rect class="cls-1" width="100" height="100"></rect>
                                                   </g>
                                                   <g id="Para_Çek" data-name="Para Çek">
                                                      <polygon class="cls-2" points="45.67 71.1 11 71.1 36.55 32 71.22 32 45.67 71.1"></polygon>
                                                      <polyline class="cls-2" points="74.86 39.45 49.32 78.55 12.82 78.55"></polyline>
                                                      <polyline class="cls-2" points="78.51 46.9 52.97 86 18.3 86"></polyline>
                                                      <path class="cls-2" d="M80.93,39.38a12.71,12.71,0,0,0-4.65-24.55H23.72a12.71,12.71,0,0,0-4.25,24.7" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M35.75,48.3,50.6,43.2l-1.91,3-14.92,5.1Zm-3.32,5.1,15-5.1-1.91,3.05-15,5.1ZM43.81,39.45H47L31.66,63.38H28.37ZM30.91,60.18h6.8a7.92,7.92,0,0,0,3.75-.83,6.73,6.73,0,0,0,2.63-2.49L45.86,54h3.23l-1.75,2.85a13.75,13.75,0,0,1-4.9,4.9,13.34,13.34,0,0,1-6.65,1.62H28.85Z" transform="translate(0 0)"></path>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">PARA ÇEK</span>
                                          </a>
                                       </li>
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="/active-bonuses">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" alt="">
                                                   <defs>
                                                      <style>.cls-1{fill:#fff;}.cls-2{fill:none;stroke:#234209;stroke-miterlimit:10;stroke-width:2px;}</style>
                                                   </defs>
                                                   <title>Aktif Bonuslar</title>
                                                   <g data-name="Layer 2">
                                                      <rect class="cls-1" width="100" height="100"></rect>
                                                   </g>
                                                   <g id="Aktif_Bonuslar" data-name="Aktif Bonuslar">
                                                      <path class="cls-2" d="M50,37.5s1-13.89,7.73-19.77A10.16,10.16,0,0,1,72,18.22c3.44,3.75,2.8,9.08-1.83,13.09C63.4,37.19,50,37.5,50,37.5Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M50,37.5s-.35-12-6.29-16.8a9.38,9.38,0,0,0-12.52.39c-3,3.06-2.46,7.41,1.6,10.7C38.73,36.59,45.72,37.38,50,37.5Z" transform="translate(0 0)"></path>
                                                      <polyline class="cls-2" points="55.18 85.86 84.55 85.86 84.55 51.32"></polyline>
                                                      <polyline class="cls-2" points="15.46 51.32 15.46 85.86 44.82 85.86"></polyline>
                                                      <polyline class="cls-2" points="55.18 51.32 88 51.32 88 37.5 12 37.5 12 51.32 44.82 51.32"></polyline>
                                                      <rect class="cls-2" x="44.82" y="37.5" width="10.36" height="48.36"></rect>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">AKTİF BONUSLAR</span>
                                          </a>
                                       </li>
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="/bonus-history">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" alt="">
                                                   <defs>
                                                      <style>.cls-1{fill:#fff;}.cls-2{fill:none;stroke:#234209;stroke-miterlimit:10;stroke-width:2px;}</style>
                                                   </defs>
                                                   <title>Gecmis Bonuslar</title>
                                                   <g data-name="Layer 2">
                                                      <rect class="cls-1" width="100" height="100"></rect>
                                                   </g>
                                                   <g id="Gecmis_Bonuslar" data-name="Gecmis Bonuslar">
                                                      <path class="cls-2" d="M33.82,82.91h3.09c2.63,0,2.5,3.09,6.19,3.09H55.46c1.81,0,4.21-1.06,4.64-3.09l1.14-10.77A4.17,4.17,0,0,0,57,67.45H53.92" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M44.08,78c3.89-1.45,6.75-5.14,6.75-9V65.49a23,23,0,0,0,.53-4.38,6.93,6.93,0,0,0-1.77-5.17c-1.16-1.51-3.4-1.23-3.4.22v1.17c0,3.24-3,6.43-4,7.34s-2.87,2.78-5.29,2.78H33.82" transform="translate(0 0)"></path>
                                                      <rect class="cls-2" x="27.64" y="65.9" width="6.18" height="18.55"></rect>
                                                      <path class="cls-2" d="M50.83,30.35s-.3-5.68-3.15-8.22A3.93,3.93,0,1,0,42.46,28C45.3,30.53,50.83,30.35,50.83,30.35Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M50.83,30.35s.71-5.68,3.56-8.22A3.93,3.93,0,1,1,59.61,28C56.77,30.53,50.83,30.35,50.83,30.35Z" transform="translate(0 0)"></path>
                                                      <polyline class="cls-2" points="38.46 38.08 38.46 50.44 63.19 50.44 63.19 38.08"></polyline>
                                                      <polyline class="cls-2" points="53.92 38.08 64.74 38.08 64.74 30.35 36.91 30.35 36.91 38.08 47.73 38.08"></polyline>
                                                      <line class="cls-2" x1="53.92" y1="30.35" x2="53.92" y2="50.44"></line>
                                                      <line class="cls-2" x1="47.73" y1="50.44" x2="47.73" y2="30.35"></line>
                                                      <path class="cls-2" d="M40,59.72H26.09A3.09,3.09,0,0,1,23,56.62V18a3.09,3.09,0,0,1,3.09-3.09H75.56A3.09,3.09,0,0,1,78.65,18V56.62a3.09,3.09,0,0,1-3.09,3.1H70.92V65.9a1.55,1.55,0,0,1-2.78.93l-6.49-7.11H55.46" transform="translate(0 0)"></path>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">GEÇMİŞ BONUSLARIM</span>
                                          </a>
                                       </li>
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="/">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" alt="">
                                                   <defs>
                                                      <style>.cls-1{fill:#fff;}.cls-2,.cls-3{fill:#2a421c;}.cls-2{fill-rule:evenodd;}</style>
                                                   </defs>
                                                   <title>Spor Geçmişim</title>
                                                   <g data-name="Layer 2">
                                                      <rect class="cls-1" width="100" height="100"></rect>
                                                   </g>
                                                   <g id="Spor_Geçmişim" data-name="Spor Geçmişim">
                                                      <path class="cls-2" d="M36.71,40.35a.91.91,0,0,0,.22-.33c.06-.19-.12-.48-.16-.55l-.15-.24a.65.65,0,0,1,0-.51,1.17,1.17,0,0,1,.74-.63c.25-.09.5-.17.74-.28A3.27,3.27,0,0,0,39.14,37a11.62,11.62,0,0,0,1.54-2.55,8.78,8.78,0,0,0,.55-1.48,5.06,5.06,0,0,0,.09-1.78A8.08,8.08,0,0,0,41,29.46a.79.79,0,0,0-1-.57l-.87.17c-.28.06-.56.1-.83.18a1.53,1.53,0,0,0-.94.84c-.23.47-.44,1-.68,1.42L36,32.86c-.25.44-.52.87-.76,1.32a1.52,1.52,0,0,0-.22.68,2.07,2.07,0,0,0,.14.78c.18.54.34,1.07.49,1.62a7,7,0,0,0,.23.78,2.53,2.53,0,0,0,.2.36,1,1,0,0,1,0,1.06,3.08,3.08,0,0,1-1.1.82c-.48.3-.94.63-1.42.92s-1,.57-1.55.82-1,.4-1.28.81a1.57,1.57,0,0,0-.05.3,1.33,1.33,0,0,1,0,.28c-.07.34-.55.47-.82.52h0a4.93,4.93,0,0,1-1.07.1c-.8,0-1.44-.12-2.19-.15a8.12,8.12,0,0,1-1.06-.11,12.64,12.64,0,0,1-1.86-.47,2.06,2.06,0,0,1-.77-.39.36.36,0,0,1,.16-.59,1.84,1.84,0,0,1,.72.16,15.52,15.52,0,0,0,2.16.53,9.07,9.07,0,0,0,1.59.2,7.13,7.13,0,0,0,.85,0,.72.72,0,0,0,.61-.48c.06-.21-.18-.41-.34-.55a2.06,2.06,0,0,0-.5-.28,13.72,13.72,0,0,1-2-1.1A4.28,4.28,0,0,0,25,40.25a5.63,5.63,0,0,0-1.42-.15,16.24,16.24,0,0,1-2.73-.43,1.1,1.1,0,0,0-.67,0,.51.51,0,0,0-.31.68,2,2,0,0,0,.35.44c.08.1.34.34.3.51a.43.43,0,0,1-.44.38,1.71,1.71,0,0,1-.53-.25,12,12,0,0,1-2.83-2.57,15.71,15.71,0,0,1-3.51-11.68,15.19,15.19,0,0,1,.56-2.53,14.94,14.94,0,0,1,5-7.32,14.29,14.29,0,0,1,6.28-3A20.35,20.35,0,0,1,27.81,14,14.76,14.76,0,0,1,38,17.72a15.77,15.77,0,0,1,3.16,3.81,7.85,7.85,0,0,1,.58,1.16,1.22,1.22,0,0,1,.11.71c-.1.46-.45.75-.46,1.29a10,10,0,0,0,.12,1.19,2.18,2.18,0,0,0,.05.38c.06.23.3.33.45.42s.06.07.1.08.12-.05.17-.05a.63.63,0,0,1,.45.18.79.79,0,0,1,.26.57,14.11,14.11,0,0,1,.1,1.56,15.24,15.24,0,0,1-1.06,5.61,15.16,15.16,0,0,1-7.79,8,2,2,0,0,1-.6.22.33.33,0,0,1-.36-.37c0-.19.22-.34.38-.42s.37-.18.53-.25a16.32,16.32,0,0,0,2-1.16l.48-.34ZM34.89,17.29c0,.13.19.29.28.39A7,7,0,0,0,36.57,19a8.47,8.47,0,0,0,.84.5.85.85,0,0,0,.54.12.43.43,0,0,0,.24-.33c0-.13-.17-.29-.27-.39a12,12,0,0,0-1.8-1.48,2.91,2.91,0,0,0-.81-.45.4.4,0,0,0-.19,0,.4.4,0,0,0-.23.33ZM24.2,16.23c0-.16-.23-.25-.38-.24a3.15,3.15,0,0,0-1.16.33c-.36.16-.7.34-1.05.53a12.22,12.22,0,0,0-3.54,2.72A11,11,0,0,0,17,20.88a.71.71,0,0,0-.14.42c0,.14.27.32.4.36a1.37,1.37,0,0,0,1-.22c.33-.2.63-.44,1-.66a23.85,23.85,0,0,1,2-1.28l.54-.28A3.34,3.34,0,0,0,23,18.14c.22-.34.4-.69.62-1,.11-.17.23-.33.34-.49a1,1,0,0,0,.2-.4Zm3.5-.14a6.63,6.63,0,0,0-1.09.14,2.38,2.38,0,0,0-1.31,1l-.53.72a4.35,4.35,0,0,0-.46.74.76.76,0,0,0,.06.73,3.28,3.28,0,0,0,.54.64c.44.42.88.83,1.3,1.27a3.5,3.5,0,0,0,1.29,1.07,1.93,1.93,0,0,0,.6,0,9.55,9.55,0,0,1,1.07,0,13.61,13.61,0,0,1,1.66.1.5.5,0,0,1,.41.62c-.1.48-.82.38-1.2.39a8,8,0,0,0-2.38.5,3.55,3.55,0,0,0-.73.77c-.43.7-.8,1.43-1.19,2.15a13.39,13.39,0,0,0-.81,1.66,1.92,1.92,0,0,1-.79,1.18,1.39,1.39,0,0,1-.9.07c-.49-.09-1-.12-1.49-.17l-1.53-.14a4.56,4.56,0,0,0-1.42-.06,1.51,1.51,0,0,0-.71.7,11.47,11.47,0,0,0-.51,1.13c-.16.4-.31.8-.44,1.21A2.66,2.66,0,0,0,17,33.82a4.51,4.51,0,0,0,.49,1.1,18,18,0,0,0,1.27,2,3.67,3.67,0,0,0,1.68,1.46,8.42,8.42,0,0,0,1.32.3c.48.09,1,.16,1.46.21a2.55,2.55,0,0,0,1.29-.1A4.31,4.31,0,0,0,25.8,37c.18-.38.37-.75.54-1.13a1.46,1.46,0,0,0,.09-1.14c-.15-.36-.28-.69-.47-1.08-.46-.92-.75-1.28-1.25-2.18a1.75,1.75,0,0,1-.27-.71c0-.43.33-.53.65-.24a1.23,1.23,0,0,1,.26.34c.29.45.42.6.71,1.06s.61,1,1,1.6a2.21,2.21,0,0,0,1.1.68,5.36,5.36,0,0,0,1.7.08c.61,0,1.22,0,1.83-.07l.9-.06a2.73,2.73,0,0,0,.7-.15,1.92,1.92,0,0,0,.88-.79A12.78,12.78,0,0,0,34.89,32c.22-.42.43-.84.63-1.27s.42-.85.58-1.29a2.08,2.08,0,0,0,.14-.7,1.85,1.85,0,0,0-.14-.69,8.84,8.84,0,0,0-.64-1.22c-.23-.4-.46-.8-.7-1.19A10.78,10.78,0,0,0,34,24.54c-.17-.22-.38-.39-.56-.6s-.81-.41-.9-.57a.6.6,0,0,1,0-.55c.07-.19.65-.36.91-.67a5.12,5.12,0,0,0,.4-.52c.26-.38.46-.8.68-1.2a1.79,1.79,0,0,0,.37-1.25,2.45,2.45,0,0,0-.72-1,10.64,10.64,0,0,0-2.06-1.66,3.71,3.71,0,0,0-1.34-.44,11.17,11.17,0,0,0-1.83,0c-.4,0-.82,0-1.22.05Zm7.91,4.51c-.33.51-.59,1-.89,1.58a1.58,1.58,0,0,0-.27.84,2,2,0,0,0,.45,1,30.51,30.51,0,0,1,1.86,3,3.64,3.64,0,0,0,.28.47,1.3,1.3,0,0,0,.75.59,1.89,1.89,0,0,0,.62-.06c.44-.08.89-.19,1.33-.28s.88-.3.93-.83a6.69,6.69,0,0,0-.06-1.34c0-.43-.11-.85-.2-1.27a5.18,5.18,0,0,0-.75-2,10.47,10.47,0,0,0-2.39-1.95,1.33,1.33,0,0,0-.93-.33.34.34,0,0,0-.2.06,1.85,1.85,0,0,0-.53.55ZM16.06,23a1.73,1.73,0,0,0-.6.76A11.41,11.41,0,0,0,14.4,27.4a13.59,13.59,0,0,0,0,3,4.1,4.1,0,0,0,.26,1.24,1.35,1.35,0,0,0,.62.71c.27.13.5-.19.6-.41s.23-.61.35-.91a16.32,16.32,0,0,1,.83-1.8,2.35,2.35,0,0,0,.31-.85,5.13,5.13,0,0,0-.11-1.1c-.12-.8-.14-1.62-.18-2.43a5.61,5.61,0,0,1,0-.58,2.25,2.25,0,0,0-.06-.82.87.87,0,0,0-.75-.52.76.76,0,0,0-.2.06Zm-.95,11a1.05,1.05,0,0,0,.08.34c.05.13.1.26.16.39a14.62,14.62,0,0,0,2.74,4.08c.08.09.35.37.48.37s.19-.14.2-.2a1.51,1.51,0,0,0-.1-.3,6.8,6.8,0,0,0-.67-1,22.79,22.79,0,0,1-1.35-2.15c-.14-.25-.26-.5-.4-.75a3.9,3.9,0,0,0-.46-.61c-.08-.08-.35-.37-.48-.35A.34.34,0,0,0,15.11,34Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M37.88,87.19V85.93H84a.78.78,0,0,0,.78-.78V48.23H37.09V85.15a.78.78,0,0,0,.79.78v1.26a2.06,2.06,0,0,1-2.05-2V47.6a.64.64,0,0,1,.19-.45.67.67,0,0,1,.44-.18H85.37a.64.64,0,0,1,.45.19.63.63,0,0,1,.18.44V85.15a2,2,0,0,1-2,2Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M70.73,39.66V34.08a3.43,3.43,0,1,1,6.84,0v5.58a3.43,3.43,0,1,1-6.84,0ZM72,34.08v5.58a2.18,2.18,0,1,0,4.32,0V34.08a2.18,2.18,0,1,0-4.32,0Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M44.27,39.66V34.08a3.43,3.43,0,1,1,6.83,0v5.58a3.43,3.43,0,1,1-6.83,0Zm1.25,0a2.18,2.18,0,1,0,4.32,0V34.08a2.18,2.18,0,1,0-4.32,0Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M53.51,60.72a1.45,1.45,0,0,1-1.44-1.44V54.71a1.45,1.45,0,0,1,1.44-1.44h4.56a1.45,1.45,0,0,1,1.44,1.44v4.57a1.45,1.45,0,0,1-1.44,1.44Zm-.18-6v4.57a.18.18,0,0,0,.18.18h4.56a.2.2,0,0,0,.19-.18V54.71a.2.2,0,0,0-.19-.18H53.51A.19.19,0,0,0,53.33,54.71Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M63.76,60.72a1.45,1.45,0,0,1-1.44-1.44V54.72a1.43,1.43,0,0,1,1.44-1.44h4.56a1.43,1.43,0,0,1,1.44,1.44v4.56a1.45,1.45,0,0,1-1.44,1.44Zm-.18-6v4.56a.18.18,0,0,0,.18.18h4.56a.2.2,0,0,0,.19-.18V54.72a.2.2,0,0,0-.19-.19H63.76A.19.19,0,0,0,63.58,54.72Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M74,60.72a1.45,1.45,0,0,1-1.44-1.44V54.71A1.43,1.43,0,0,1,74,53.28h4.56A1.43,1.43,0,0,1,80,54.71v4.57a1.45,1.45,0,0,1-1.44,1.44Zm-.18-6v4.57a.18.18,0,0,0,.18.18h4.56a.19.19,0,0,0,.19-.18V54.71a.2.2,0,0,0-.19-.18H74A.19.19,0,0,0,73.83,54.71Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M53.51,70.57a1.43,1.43,0,0,1-1.44-1.44V64.57a1.44,1.44,0,0,1,1.44-1.44h4.56a1.43,1.43,0,0,1,1.44,1.44v4.56a1.43,1.43,0,0,1-1.44,1.44Zm-.18-6v4.56a.19.19,0,0,0,.18.19h4.56a.2.2,0,0,0,.19-.19V64.57a.19.19,0,0,0-.19-.18H53.51A.18.18,0,0,0,53.33,64.57Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M74,70.57a1.43,1.43,0,0,1-1.44-1.44V64.57A1.44,1.44,0,0,1,74,63.13h4.56A1.44,1.44,0,0,1,80,64.57v4.56a1.43,1.43,0,0,1-1.44,1.44Zm-.18-6v4.56a.19.19,0,0,0,.18.19h4.56a.2.2,0,0,0,.19-.19V64.57a.19.19,0,0,0-.19-.18H74A.18.18,0,0,0,73.83,64.57Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M63.76,70.57a1.44,1.44,0,0,1-1.44-1.44V64.57a1.45,1.45,0,0,1,1.44-1.44h4.56a1.44,1.44,0,0,1,1.44,1.44v4.56a1.43,1.43,0,0,1-1.44,1.44Zm-.18-6v4.56a.19.19,0,0,0,.18.19h4.56a.2.2,0,0,0,.19-.19V64.57a.19.19,0,0,0-.19-.18H63.76A.18.18,0,0,0,63.58,64.57Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M53.51,80.43A1.45,1.45,0,0,1,52.07,79V74.43A1.43,1.43,0,0,1,53.51,73h4.56a1.43,1.43,0,0,1,1.44,1.44V79a1.45,1.45,0,0,1-1.44,1.44Zm-.18-6V79a.18.18,0,0,0,.18.18h4.56a.19.19,0,0,0,.19-.18V74.43a.2.2,0,0,0-.19-.19H53.51A.19.19,0,0,0,53.33,74.43Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M63.76,80.43A1.45,1.45,0,0,1,62.32,79V74.43A1.43,1.43,0,0,1,63.76,73h4.56a1.43,1.43,0,0,1,1.44,1.44V79a1.45,1.45,0,0,1-1.44,1.44Zm-.18-6V79a.18.18,0,0,0,.18.18h4.56a.2.2,0,0,0,.19-.18V74.43a.2.2,0,0,0-.19-.19H63.76A.19.19,0,0,0,63.58,74.43Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M43.26,70.57a1.44,1.44,0,0,1-1.44-1.44V64.57a1.44,1.44,0,0,1,1.44-1.44h4.56a1.43,1.43,0,0,1,1.44,1.44v4.56a1.43,1.43,0,0,1-1.44,1.44Zm-.18-6v4.56a.2.2,0,0,0,.18.19h4.56a.2.2,0,0,0,.19-.19V64.57a.19.19,0,0,0-.19-.18H43.26A.19.19,0,0,0,43.08,64.57Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M43.26,80.43A1.45,1.45,0,0,1,41.82,79V74.43A1.45,1.45,0,0,1,43.26,73h4.56a1.43,1.43,0,0,1,1.44,1.44V79a1.45,1.45,0,0,1-1.44,1.44Zm-.18-6V79a.19.19,0,0,0,.18.18h4.56A.19.19,0,0,0,48,79V74.43a.2.2,0,0,0-.19-.19H43.26A.19.19,0,0,0,43.08,74.43Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M50.47,37.5a.63.63,0,0,1,0-1.26H71.36a.63.63,0,1,1,0,1.26Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M43.13,37.5h1.76a.63.63,0,0,0,0-1.26H43.13Z" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M84,36.24h-7a.63.63,0,0,0,0,1.26h7a.78.78,0,0,1,.78.78V47H37.09V44.14H35.83V47.6A.61.61,0,0,0,36,48a.63.63,0,0,0,.44.19H85.37a.64.64,0,0,0,.45-.19A.65.65,0,0,0,86,47.6V38.28A2,2,0,0,0,84,36.24Z" transform="translate(0 0)"></path>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">SPOR GEÇMİŞİM</span>
                                          </a>
                                       </li>
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="/gaming-history">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" alt="">
                                                   <defs>
                                                      <style>.cls-1{fill:#fff;}.cls-2{fill:#2a421c;}.cls-3{fill:none;stroke:#2a421c;stroke-miterlimit:10;stroke-width:1.5px;}</style>
                                                   </defs>
                                                   <title>Oyun Geçmişim</title>
                                                   <g data-name="Layer 2">
                                                      <rect class="cls-1" width="100" height="100"></rect>
                                                   </g>
                                                   <g id="Oyun_Geçmişim" data-name="Oyun Geçmişim">
                                                      <path class="cls-2" d="M38.37,87V85.75h46a.79.79,0,0,0,.78-.79V48.09H37.58V85a.8.8,0,0,0,.79.79V87a2,2,0,0,1-2-2V47.47a.62.62,0,0,1,.63-.63H85.8a.67.67,0,0,1,.44.18.64.64,0,0,1,.19.45V85a2,2,0,0,1-2,2Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M71.18,39.54V34A3.43,3.43,0,1,1,78,34v5.57a3.43,3.43,0,1,1-6.83,0ZM72.44,34v5.57a2.18,2.18,0,1,0,4.31,0V34a2.18,2.18,0,1,0-4.31,0Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M44.75,39.54V34a3.42,3.42,0,1,1,6.82,0v5.57a3.42,3.42,0,1,1-6.82,0Zm1.25,0a2.18,2.18,0,1,0,4.32,0V34A2.18,2.18,0,1,0,46,34Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M54,60.57a1.46,1.46,0,0,1-1.44-1.44V54.57A1.44,1.44,0,0,1,54,53.14h4.56A1.43,1.43,0,0,1,60,54.57v4.56a1.44,1.44,0,0,1-1.43,1.44Zm-.18-6v4.56a.19.19,0,0,0,.18.18h4.56a.19.19,0,0,0,.18-.18V54.57a.19.19,0,0,0-.18-.18H54A.19.19,0,0,0,53.8,54.57Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M64.22,60.57a1.45,1.45,0,0,1-1.44-1.44V54.57a1.43,1.43,0,0,1,1.44-1.43h4.55a1.43,1.43,0,0,1,1.44,1.43v4.56a1.45,1.45,0,0,1-1.44,1.44Zm-.18-6v4.56a.18.18,0,0,0,.18.18h4.55a.19.19,0,0,0,.19-.18V54.57a.2.2,0,0,0-.19-.18H64.22A.19.19,0,0,0,64,54.57Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M74.45,60.57A1.46,1.46,0,0,1,73,59.13V54.57a1.44,1.44,0,0,1,1.44-1.43H79a1.44,1.44,0,0,1,1.44,1.43v4.56A1.46,1.46,0,0,1,79,60.57Zm-.18-6v4.56a.18.18,0,0,0,.18.18H79a.18.18,0,0,0,.18-.18V54.57a.19.19,0,0,0-.18-.18H74.45A.19.19,0,0,0,74.27,54.57Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M54,70.41A1.45,1.45,0,0,1,52.54,69V64.41A1.44,1.44,0,0,1,54,63h4.56A1.44,1.44,0,0,1,60,64.41V69a1.45,1.45,0,0,1-1.44,1.44Zm-.18-6V69a.18.18,0,0,0,.18.18h4.56a.19.19,0,0,0,.18-.18V64.41a.19.19,0,0,0-.18-.18H54A.19.19,0,0,0,53.8,64.41Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M74.45,70.41A1.45,1.45,0,0,1,73,69V64.42A1.45,1.45,0,0,1,74.45,63H79a1.45,1.45,0,0,1,1.44,1.44V69A1.45,1.45,0,0,1,79,70.41Zm-.18-6V69a.18.18,0,0,0,.18.18H79a.18.18,0,0,0,.18-.18V64.42a.19.19,0,0,0-.18-.19H74.45A.19.19,0,0,0,74.27,64.42Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M64.22,70.41A1.44,1.44,0,0,1,62.78,69V64.41A1.43,1.43,0,0,1,64.22,63h4.55a1.43,1.43,0,0,1,1.44,1.43V69a1.44,1.44,0,0,1-1.44,1.44Zm-.18-6V69a.18.18,0,0,0,.18.18h4.55A.19.19,0,0,0,69,69V64.41a.2.2,0,0,0-.19-.18H64.22A.19.19,0,0,0,64,64.41Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M54,80.25a1.45,1.45,0,0,1-1.44-1.44V74.26A1.45,1.45,0,0,1,54,72.82h4.56A1.45,1.45,0,0,1,60,74.26v4.55a1.45,1.45,0,0,1-1.44,1.44Zm-.18-6v4.55A.19.19,0,0,0,54,79h4.56a.2.2,0,0,0,.18-.19V74.26a.2.2,0,0,0-.18-.19H54A.19.19,0,0,0,53.8,74.26Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M64.22,80.25a1.43,1.43,0,0,1-1.44-1.44V74.26a1.43,1.43,0,0,1,1.44-1.44h4.55a1.43,1.43,0,0,1,1.44,1.44v4.55a1.43,1.43,0,0,1-1.44,1.44Zm-.18-6v4.55a.2.2,0,0,0,.19.19h4.55a.2.2,0,0,0,.19-.19V74.26a.2.2,0,0,0-.19-.19H64.22A.19.19,0,0,0,64,74.26Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M43.75,70.41A1.43,1.43,0,0,1,42.31,69V64.41A1.43,1.43,0,0,1,43.75,63H48.3a1.43,1.43,0,0,1,1.44,1.43V69a1.43,1.43,0,0,1-1.44,1.44Zm-.19-6V69a.19.19,0,0,0,.19.18H48.3a.19.19,0,0,0,.19-.18V64.41a.2.2,0,0,0-.19-.18H43.75A.2.2,0,0,0,43.56,64.41Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M43.75,80.25a1.43,1.43,0,0,1-1.44-1.44V74.26a1.43,1.43,0,0,1,1.44-1.44H48.3a1.43,1.43,0,0,1,1.44,1.44v4.55a1.43,1.43,0,0,1-1.44,1.44Zm-.19-6v4.55a.2.2,0,0,0,.19.19H48.3a.2.2,0,0,0,.19-.19V74.26a.2.2,0,0,0-.19-.19H43.75A.2.2,0,0,0,43.56,74.26Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M51,37.38a.63.63,0,1,1,0-1.25H71.81a.63.63,0,0,1,0,1.25Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M43.62,37.38h1.76a.63.63,0,0,0,0-1.25H43.62Z" transform="translate(0 0)"></path>
                                                      <path class="cls-2" d="M84.39,36.13h-7a.63.63,0,1,0,0,1.25h7a.78.78,0,0,1,.78.78v8.68H37.58V44H36.33v3.46a.67.67,0,0,0,.18.44.64.64,0,0,0,.45.19H85.8a.61.61,0,0,0,.44-.19.6.6,0,0,0,.18-.44V38.16A2,2,0,0,0,84.39,36.13Z" transform="translate(0 0)"></path>
                                                      <rect class="cls-3" x="27.12" y="17.26" width="17.16" height="22.39" rx="0.75" transform="translate(57.14 68.75) rotate(-156.56)"></rect>
                                                      <path class="cls-3" d="M20.92,22.09l-7,1.74a.75.75,0,0,0-.51.93l5.68,20.1a.75.75,0,0,0,.92.52l16.13-4.29" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M30.73,17.08l-8.95-.2a.75.75,0,0,0-.76.73L20.55,38.5a.74.74,0,0,0,.73.77l11.93.27" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M35.33,34a8.75,8.75,0,0,0-1.58-1,8.88,8.88,0,0,0-1.84-.44" transform="translate(0 0)"></path>
                                                      <path class="cls-3" d="M34.75,30.64a3.14,3.14,0,0,1-2.64-.84,2.31,2.31,0,0,1-.35-2.59c.82-1.87,4.74-1.74,5.72-2.87-.15,1.49,2.63,4.26,1.81,6.14A2.27,2.27,0,0,1,37.17,32,3.11,3.11,0,0,1,34.75,30.64Z" transform="translate(0 0)"></path>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">OYUN GEÇMİŞİM</span>
                                          </a>
                                       </li>
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="/payment-history">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" alt="">
                                                   <defs>
                                                      <style>.cls-1{fill:#fff;}.cls-2{fill:none;stroke:#2a421c;stroke-linejoin:round;stroke-width:2px;}</style>
                                                   </defs>
                                                   <title>Hesap Özetim</title>
                                                   <g data-name="Layer 2">
                                                      <rect class="cls-1" width="100" height="100"></rect>
                                                   </g>
                                                   <g id="Hesap_Özetim" data-name="Hesap Özetim">
                                                      <polyline class="cls-2" points="41.74 22.72 75.7 22.72 75.7 86 26.3 86 26.3 22.72 38.65 22.72"></polyline>
                                                      <path class="cls-2" d="M46.37,32H66.43A1.54,1.54,0,0,1,68,33.52V55.13a1.54,1.54,0,0,1-1.55,1.54H35.57A1.54,1.54,0,0,1,34,55.13V39.7" transform="translate(0 0)"></path>
                                                      <line class="cls-2" x1="35.57" y1="70.57" x2="66.43" y2="70.57"></line>
                                                      <line class="cls-2" x1="35.57" y1="64.39" x2="66.43" y2="64.39"></line>
                                                      <line class="cls-2" x1="35.57" y1="76.74" x2="51" y2="76.74"></line>
                                                      <path class="cls-2" d="M44.83,53.59a6.17,6.17,0,1,1,12.34,0" transform="translate(0 0)"></path>
                                                      <circle class="cls-2" cx="51" cy="42.78" r="4.63"></circle>
                                                      <path class="cls-2" d="M34,27.35V32a3.09,3.09,0,0,0,3.09,3.09h1.54A3.09,3.09,0,0,0,41.74,32V18.09A3.09,3.09,0,0,0,38.65,15H35.57a3.09,3.09,0,0,0-3.09,3.09v4.63" transform="translate(0 0)"></path>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">HESAP ÖZETİM</span>
                                          </a>
                                       </li>
                                       <li class="MenuItem ListItem">
                                          <a class="ComponentAnchor MyAccountMenuLink Anchor" href="/">
                                             <span class="MenuItemImg">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100.4 100" alt="">
                                                   <defs>
                                                      <style>.cls-1{fill:#fff;}.cls-2{fill:none;stroke:#2a421c;stroke-miterlimit:10;stroke-width:3px;}</style>
                                                   </defs>
                                                   <title>Bahis Kurallari</title>
                                                   <g data-name="Layer 2">
                                                      <rect class="cls-1" width="100" height="100"></rect>
                                                   </g>
                                                   <g id="Bahis_Kurallari" data-name="Bahis Kurallari">
                                                      <polyline class="cls-2" points="85.95 63.14 85.95 84 12 84 12 15.74 85.95 15.74 85.95 40.39"></polyline>
                                                      <line class="cls-2" x1="12" y1="27.12" x2="85.95" y2="27.12"></line>
                                                      <line class="cls-2" x1="17.69" y1="21.43" x2="21.48" y2="21.43"></line>
                                                      <line class="cls-2" x1="23.38" y1="21.43" x2="27.17" y2="21.43"></line>
                                                      <rect class="cls-2" x="19.58" y="34.7" width="20.86" height="22.75"></rect>
                                                      <line class="cls-2" x1="17.69" y1="66.93" x2="42.34" y2="66.93"></line>
                                                      <line class="cls-2" x1="17.69" y1="74.52" x2="42.34" y2="74.52"></line>
                                                      <line class="cls-2" x1="48.03" y1="74.52" x2="68.88" y2="74.52"></line>
                                                      <line class="cls-2" x1="48.03" y1="66.93" x2="68.88" y2="66.93"></line>
                                                      <line class="cls-2" x1="48.03" y1="36.6" x2="68.88" y2="36.6"></line>
                                                      <line class="cls-2" x1="48.03" y1="44.18" x2="61.3" y2="44.18"></line>
                                                      <polyline class="cls-2" points="66.99 49.87 78.36 61.25 99.22 34.7"></polyline>
                                                   </g>
                                                </svg>
                                             </span>
                                             <span class="AnchorText">BAHİS KURALLARI</span>
                                          </a>
                                       </li>
                                    </ul>
                                    <div class="MyAccountMenu TornamentsRankContainer">
                                       <casino-tournaments-player-rank lang="tr" currency="TRY" >
                                       <style id="svelte-tx5qze">*,*::before,*::after{margin:0;padding:0;list-style:none;text-decoration:none;outline:none;box-sizing:border-box}.TournamentContentDetails{display:flex;flex-direction:column;gap:20px}.Thumbnail{display:flex;gap:20px}.CardImg{border-radius:5px;background:url("");background-repeat:no-repeat;background-position:center;background-size:auto;width:85px;height:60px}.CardImg.CardImgFinished{filter:grayscale(1)}.CardImg.Mobile{width:85px;height:60px;display:inline-block;margin-bottom:10px;margin-right:10px;font-size:12px;line-height:15px}
                                       .Thumbnail{cursor:pointer}.PrizeSec,.RankSec{background-color:#f9c408}.PrizeIcon svg path,.UserIcon svg path{fill:#294c0b}
                                       </style>
                                       <div class="TournamentsPage"><div class="TournamentContentDetails"><div class="Thumbnail"><img class="Mobile CardImg " src="/static.glastcoper.com/bonus/img/2331/1M-slot-tur-760x420.png" width="65px" height="40px" title="24-31 Mart 1.500.000 TL Ödüllü Slot Turnuvası"> <div class="MobileRight"><div class="Title">Pusulabet <?php
// Türkçe yerel ayarları kullanmak için:
setlocale(LC_TIME, 'tr_TR.UTF-8');

// Bir gün öncesi için zaman damgası oluşturuyoruz
$yesterday = strtotime("-1 day");
$oneweeklater = strtotime("+6 day");


// Tarihi "gün ay" formatında yazdırıyoruz
echo strftime("%d %B", $yesterday);
echo '-';
echo strftime("%d %B", $oneweeklater);
echo ' ';
?>
 1.500.000 TL Ödüllü Slot Turnuvası</div> <div>Başlangıç <?=date("d/m/Y")?> 00:00 Bitiş <?=date("d/m/Y", strtotime("+1 week"))?> 23:59</div></div></div> <casino-tournaments-rank translationurl=""></casino-tournaments-rank></div><style>.Thumbnail{cursor:pointer}.PrizeSec,.RankSec{background-color:#f9c408}.PrizeIcon svg path,.UserIcon svg path{fill:#294c0b}</style></div>
                                       </casino-tournaments-player-rank>
                                    </div>
                                    <div class="MyAccountMenu LastLoginDateContainer"><span><b class="LastLoginDateLabel">Son Giriş: </b><?php echo date("j.m.Y, g:i:s a");?></span></div>
                                    <div class="MyAccountMenu FooterContainer">
                                       <div class="LogOutButtonContainer"><button class="LogOutButton ComponentLogoutButton InstanceOperatorButtonLogout E2E-logout-button Button MyAccountLogoutButton" onclick="logOut()" title="Çıkış Yap" type="button"><span class="ButtonText">Çıkış Yap</span></button></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="DropDownBackground ComponentLayout Layout Prerender"></div>
                        </div>
                     </div>
                     <div class="ComponentSiteLanguageSelector LanguageSelectorContainer CustomSelect OperatorTopLanguage">
                        <div class="CustomSelectTrigger">
                           <div class="LanguageSelectorSVGFlag">
                              <span class="Icon">
                                 <span class="SvgIcon MainIcon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 87.51">
                                       <defs>
                                          <clipPath id="clip-path">
                                             <path class="cls-1" d="M0 0h150v87.51H0z"></path>
                                          </clipPath>
                                          <style>#tr-layer .cls-1{fill:none}#tr-layer .cls-2{clip-path:url(#clip-path)}#tr-layer .cls-3{fill:#d00027}#tr-layer .cls-4{fill:#fff}</style>
                                       </defs>
                                       <g id="tr-layer" data-name="Layer 2">
                                          <g class="cls-2" id="Layer_1-2" data-name="Layer 1">
                                             <path class="cls-3" d="M0 0h150v87.51H0z"></path>
                                             <g class="cls-2">
                                                <path class="cls-4" d="M43.78 21.86a21.87 21.87 0 11-21.87 21.87 21.86 21.86 0 0121.87-21.87"></path>
                                                <path class="cls-3" d="M49.22 26a17.71 17.71 0 11-17.44 17.73A17.51 17.51 0 0149.22 26"></path>
                                                <path class="cls-4" d="M62.23 43.73l10.45 3.68 1.81-5.23-12.26 1.55z"></path>
                                                <path class="cls-4" d="M62.23 43.73l10.45-3.1 1.81 5.18-12.26-2.08z"></path>
                                                <path class="cls-4" d="M69.8 33.33v10.93h5.44L69.8 33.33z"></path>
                                                <path class="cls-4" d="M69.8 33.33l6.5 8.85-4.42 3.15-2.08-12z"></path>
                                                <path class="cls-4" d="M69.8 54.18l6.5-8.85-4.42-3.15-2.08 12z"></path>
                                                <path class="cls-4" d="M69.8 54.18V43.25h5.44L69.8 54.18z"></path>
                                                <path class="cls-4" d="M82.01 37.49l-10.4 3.14 1.81 5.18 8.59-8.32z"></path>
                                                <path class="cls-4" d="M82.01 37.49l-6.24 8.85-4.69-3.09 10.93-5.76z"></path>
                                                <path class="cls-4" d="M82.01 49.97l-6.24-8.86-4.69 3.68 10.93 5.18z"></path>
                                                <path class="cls-4" d="M82.01 49.97l-10.4-3.1 1.81-5.22 8.59 8.32z"></path>
                                             </g>
                                          </g>
                                       </g>
                                    </svg>
                                 </span>
                              </span>
                              <span class="LanguageSelectorSelectedText">Türkçe</span><span class="LanguageSelectorSelectedCode">tr</span>
                           </div>
                        </div>
                        <ul class="CustomListContainer List ListUnordered HeaderLanguageSelector">
                           <li class="CustomSelectOption ListItem" title="English">
                              <div class="LanguageSelectorSVGFlag">
                                 <span class="Icon">
                                    <span class="SvgIcon MainIcon">
                                       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 21">
                                          <image width="40" height="21" xlink:href="data:image/png;base64,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"></image>
                                       </svg>
                                    </span>
                                 </span>
                                 <span class="LanguageSelectorSelectedText">English</span><span class="LanguageSelectorSelectedCode">en</span>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <?php }else{?>
                     <div class="OperatorAccountContainer ComponentLayout Layout">
                        <a class="ComponentAnchor Button ButtonRegister ComponentAnchor Anchor  Anchor" id="RegisterButton-Header" href="/register"><span class="AnchorText" id="RegisterButton-Header-Text">Kayıt Ol</span></a><button type="button" onclick="openLoginModal()" class="Button ButtonLogin InstanceOperatorLoginLink" id="Header" data-disable-click="false"><span class="AnchorText" id="Header-Text">Giriş</span></button>
                        <a class="ComponentAnchor IosAppPageLinkWrapper Anchor" href="/ios-app">
                           <span class="IosAppPageLinkIcon">
                              <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 814 1000" height="36" width="28">
                                 <path d="M788.1 340.9c-5.8 4.5-108.2 62.2-108.2 190.5 0 148.4 130.3 200.9 134.2 202.2-.6 3.2-20.7 71.9-68.7 141.9-42.8 61.6-87.5 123.1-155.5 123.1s-85.5-39.5-164-39.5c-76.5 0-103.7 40.8-165.9 40.8s-105.6-57-155.5-127C46.7 790.7 0 663 0 541.8c0-194.4 126.4-297.5 250.8-297.5 66.1 0 121.2 43.4 162.7 43.4 39.5 0 101.1-46 176.3-46 28.5 0 130.9 2.6 198.3 99.2zm-234-181.5c31.1-36.9 53.1-88.1 53.1-139.3 0-7.1-.6-14.3-1.9-20.1-50.6 1.9-110.8 33.7-147.1 75.8-28.5 32.4-55.1 83.6-55.1 135.5 0 7.8 1.3 15.6 1.9 18.1 3.2.6 8.4 1.3 13.6 1.3 45.4 0 102.5-30.4 135.5-71.3z" fill="currentColor"></path>
                              </svg>
                           </span>
                        </a>
                        <a class="ComponentAnchor WhatsappIconWrapper Anchor" href="/">
                           <span class="CallIcon">
                              <svg fill="currentColor" height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 299.679 299.679" xml:space="preserve">
                                 <g id="XMLID_197_">
                                    <path id="XMLID_221_" d="M181.122,299.679c10.02,0,18.758-8.738,18.758-18.758v-43.808h12.525c7.516,0,12.525-5.011,12.525-12.525 V99.466H74.749v125.123c0,7.515,5.01,12.525,12.525,12.525H99.8v43.808c0,10.02,8.736,18.758,18.758,18.758 c10.019,0,18.756-8.738,18.756-18.758v-43.808h25.051v43.808C162.364,290.941,171.102,299.679,181.122,299.679z"></path>
                                    <path id="XMLID_222_" d="M256.214,224.589c10.02,0,18.756-8.737,18.756-18.758v-87.615c0-9.967-8.736-18.75-18.756-18.75 c-10.021,0-18.758,8.783-18.758,18.75v87.615C237.456,215.851,246.192,224.589,256.214,224.589z"></path>
                                    <path id="XMLID_223_" d="M43.466,224.589c10.021,0,18.758-8.737,18.758-18.758v-87.615c0-9.967-8.736-18.75-18.758-18.75 c-10.02,0-18.756,8.783-18.756,18.75v87.615C24.71,215.851,33.446,224.589,43.466,224.589z"></path>
                                    <path id="XMLID_224_" d="M209.899,1.89c-2.504-2.52-6.232-2.52-8.736,0l-16.799,16.743l-0.775,0.774 c-9.961-4.988-21.129-7.479-33.566-7.503c-0.061,0-0.121-0.002-0.182-0.002h-0.002c-0.063,0-0.121,0.002-0.184,0.002 c-12.436,0.024-23.604,2.515-33.564,7.503l-0.777-0.774L98.516,1.89c-2.506-2.52-6.232-2.52-8.736,0 c-2.506,2.506-2.506,6.225,0,8.729l16.25,16.253c-5.236,3.496-9.984,7.774-14.113,12.667C82.032,51.256,75.727,66.505,74.86,83.027 c-0.008,0.172-0.025,0.342-0.033,0.514c-0.053,1.125-0.078,2.256-0.078,3.391H224.93c0-1.135-0.027-2.266-0.078-3.391 c-0.008-0.172-0.025-0.342-0.035-0.514c-0.865-16.522-7.172-31.772-17.057-43.487c-4.127-4.893-8.877-9.171-14.113-12.667 l16.252-16.253C212.405,8.115,212.405,4.396,209.899,1.89z M118.534,65.063c-5.182,0-9.383-4.201-9.383-9.383 c0-5.182,4.201-9.383,9.383-9.383c5.182,0,9.383,4.201,9.383,9.383C127.917,60.862,123.716,65.063,118.534,65.063z M181.145,65.063 c-5.182,0-9.383-4.201-9.383-9.383c0-5.182,4.201-9.383,9.383-9.383c5.182,0,9.383,4.201,9.383,9.383 C190.528,60.862,186.327,65.063,181.145,65.063z"></path>
                                 </g>
                              </svg>
                           </span>
                        </a>
                        <div class="ComponentSiteLanguageSelector LanguageSelectorContainer CustomSelect OperatorTopLanguage">
                           <div class="CustomSelectTrigger">
                              <div class="LanguageSelectorSVGFlag">
                                 <span class="Icon">
                                    <span class="SvgIcon MainIcon">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 87.51">
                                          <defs>
                                             <clipPath id="clip-path">
                                                <path class="cls-1" d="M0 0h150v87.51H0z"></path>
                                             </clipPath>
                                             <style>#tr-layer .cls-1{fill:none}#tr-layer .cls-2{clip-path:url(#clip-path)}#tr-layer .cls-3{fill:#d00027}#tr-layer .cls-4{fill:#fff}</style>
                                          </defs>
                                          <g id="tr-layer" data-name="Layer 2">
                                             <g class="cls-2" id="Layer_1-2" data-name="Layer 1">
                                                <path class="cls-3" d="M0 0h150v87.51H0z"></path>
                                                <g class="cls-2">
                                                   <path class="cls-4" d="M43.78 21.86a21.87 21.87 0 11-21.87 21.87 21.86 21.86 0 0121.87-21.87"></path>
                                                   <path class="cls-3" d="M49.22 26a17.71 17.71 0 11-17.44 17.73A17.51 17.51 0 0149.22 26"></path>
                                                   <path class="cls-4" d="M62.23 43.73l10.45 3.68 1.81-5.23-12.26 1.55z"></path>
                                                   <path class="cls-4" d="M62.23 43.73l10.45-3.1 1.81 5.18-12.26-2.08z"></path>
                                                   <path class="cls-4" d="M69.8 33.33v10.93h5.44L69.8 33.33z"></path>
                                                   <path class="cls-4" d="M69.8 33.33l6.5 8.85-4.42 3.15-2.08-12z"></path>
                                                   <path class="cls-4" d="M69.8 54.18l6.5-8.85-4.42-3.15-2.08 12z"></path>
                                                   <path class="cls-4" d="M69.8 54.18V43.25h5.44L69.8 54.18z"></path>
                                                   <path class="cls-4" d="M82.01 37.49l-10.4 3.14 1.81 5.18 8.59-8.32z"></path>
                                                   <path class="cls-4" d="M82.01 37.49l-6.24 8.85-4.69-3.09 10.93-5.76z"></path>
                                                   <path class="cls-4" d="M82.01 49.97l-6.24-8.86-4.69 3.68 10.93 5.18z"></path>
                                                   <path class="cls-4" d="M82.01 49.97l-10.4-3.1 1.81-5.22 8.59 8.32z"></path>
                                                </g>
                                             </g>
                                          </g>
                                       </svg>
                                    </span>
                                 </span>
                                 <span class="LanguageSelectorSelectedText">Türkçe</span><span class="LanguageSelectorSelectedCode">tr</span>
                              </div>
                           </div>
                           <ul class="CustomListContainer List ListUnordered HeaderLanguageSelector">
                              <li class="CustomSelectOption ListItem" title="English">
                                 <div class="LanguageSelectorSVGFlag">
                                    <span class="Icon">
                                       <span class="SvgIcon MainIcon">
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 21">
                                             <image width="40" height="21" xlink:href="data:image/png;base64,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"></image>
                                          </svg>
                                       </span>
                                    </span>
                                    <span class="LanguageSelectorSelectedText">English</span><span class="LanguageSelectorSelectedCode">en</span>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <?php }?>
                     <nav class="OperatorMainMenu ComponentMenu NavMenu">
                        <ul class="Menu Vertical List ListUnordered">
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/level" href="/level"><span class="AnchorText" id="DesktopNavButton-/level-Text">Pusula Plus</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/casino" href="/casino"><span class="AnchorText" id="DesktopNavButton-/casino-Text">Casino</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/live-casino" href="/livecasino"><span class="AnchorText" id="DesktopNavButton-/live-casino-Text">Canlı Casino</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/tournaments/ongoing" href="/tournaments"><span class="AnchorText" id="DesktopNavButton-/tournaments/ongoing-Text">Özel Turnuvalar</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/casino/games/spribe:aviator-32430/?prevRoute=%2Fcasino" href="/aviator"><span class="AnchorText" id="DesktopNavButton-/casino/games/spribe:aviator-32430/?prevRoute=%2Fcasino-Text">Aviator</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/sports/i" href="/"><span class="AnchorText" id="DesktopNavButton-/sports/i-Text">Bahis</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/live-sports/i" href="#canlibahis"><span class="AnchorText" id="DesktopNavButton-/live-sports/i-Text">Canlı Bahis</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/sports/i/spor/yüksek-oran/101/dünya/240/lokasyon" href="#yuksekoran"><span class="AnchorText" id="DesktopNavButton-/sports/i/spor/yüksek-oran/101/dünya/240/lokasyon-Text">Özel Oranlar</span></a></li>
                           <li class="MenuItem ListItem"><a target="_blank" class="ComponentAnchor  Anchor" href="#bonus" id="DesktopNavButton/"><span class="AnchorText" id="DesktopNavButton-https://pusulabonus11.com/-Text">Discount Talep Et</span></a></li>
                           <li class="MenuItem ListItem"><a target="_blank" class="ComponentAnchor  Anchor" href="#mobil" id="DesktopNavButton-https://cutt.ly/mobiluygulama"><span class="AnchorText" id="DesktopNavButton-https://cutt.ly/mobiluygulama-Text">PusulaApp</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/promotions" href="/promotions"><span class="AnchorText" id="DesktopNavButton-/promotions-Text">Bonuslar</span></a></li>
                           <li class="MenuItem ListItem"><a class="ComponentAnchor  Anchor" id="DesktopNavButton-/pusula-win" href="/pusula-win"><span class="AnchorText" id="DesktopNavButton-/pusula-win-Text">Takvim</span></a></li>
                           <li class="MenuItem ListItem"><a target="_blank" class="ComponentAnchor  Anchor" href="#partners" id="DesktopNavButton-/"><span class="AnchorText" id="DesktopNavButton-https://pusulapartners8.com/-Text">Affiliates</span></a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </header>