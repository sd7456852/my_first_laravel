<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            padding: 0;
            margin: 0;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .header {
            /* background-color: aqua; */
            width: 85%;
            height: 54px;
            position: absolute;
            left: 50%;
            transform: translate(-50%);
            display: flex;
            align-items: center;
            z-index: 1;
        }

        .burger {
            width: 50px;
            height: 50px;
            /* background-color: aqua; */
            border: 1px solid black;
            margin: 2px 2px 2px 2px;
            display: none;
            position: relative;
        }

        .burger-line1,
        .burger-line2,
        .burger-line3 {
            width: 30px;
            border: 1px solid black;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .burger-line1 {
            top: 35%;
        }

        .burger-line3 {
            top: 65%;
        }

        .burger:focus .burger-line1 {
            top: 50%;
            transform: translate(-50%, -50%) rotate(45deg);
        }

        .burger:focus .burger-line2 {
            opacity: 0;
        }

        .burger:focus .burger-line3 {
            top: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
        }

        .burger-menu {
            width: 100%;
            background-color: gray;
            position: absolute;
            top: 54px;
            display: none;
        }

        .burger-menu li {
            padding: 14px 24px 15px 15px;
            justify-content: space-between;
        }

        .burger:focus~.burger-menu {
            display: block;
        }

        .burger-menu>ul .burger-menu-text-li {
            display: none;
        }

        .burger-menu-text:hover .burger-menu-text-li {
            display: block;
        }

        .list-title {
            display: flex;
            justify-content: space-between;
        }

        .header-logo img {
            width: 108px;
            margin-left: 10px;
        }

        .header-ul {
            height: 100%;
            display: flex;
            flex-grow: 1;
            justify-content: space-between;
            align-items: center;
        }

        .ul-1>ul,
        .ul-2>ul {
            display: flex;
        }

        .ul-1 ul {
            margin: 15px;
        }

        .ul-1 ul li {
            margin: 15px;
        }

        .ul-2>ul>li {
            margin: 15px;
        }

        .ul-2 img {
            width: 32px;
            height: 32px;
        }

        .menu {
            width: 1150px;
            height: 392px;
            background-color: aquamarine;
            /* display: none; */
            display: flex;
            justify-content: space-between;
        }

        .dropDownBTN:hover~.menu {
        }

        .dropDownBTN {
            position: relative;
        }

        .menu {
            position: absolute;
            left: 250px;
            top: 50px;
        }

        .ul-2 ul .dropDownBTN .menu {
            display: block;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .main {
            /* background-color: bisque; */
            width: 85%;
            height: 2000px;
            position: absolute;
            top: 54px;
            left: 50%;
            transform: translate(-50%);
        }

        .section1 {
            background-color: grey;
            width: 100%;
            height: 605px;
            background-image: url("/Microsoft圖片檔/RWKHu9.jpeg");
            background-position: center;
            background-size: cover;
        }

        .section1-text {
            width: 440px;
            height: 190px;
            display: flex;
            flex-direction: column;
            padding: 30px 66px;
        }

        .section1-text h2 {
            width: 440px;
            height: 32px;
        }

        .section1-text p {
            width: 440px;
            height: 40px;
        }

        .section1-text a {
            width: 123px;
            height: 40px;
            background-color: black;
            color: white;
            text-align: center;
            line-height: 40px;
        }

        .section2 {
            background-color: pink;
            width: 100%;
            height: 177px;
            display: flex;
            align-items: center;
        }

        .line {
            background-color: rgb(0, 140, 255);
            width: 100%;
            height: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .line-box {
            display: flex;
        }

        .line-box-img1,
        .line-box-img2,
        .line-box-img3 {
            width: 184px;
            display: flex;
            flex-direction: column;
            padding: 12px;
            align-items: center;
        }

        .line-box a {
            text-align: center;
        }

        .line-box-img1 a {
            width: 98px;
        }

        .section3 {
            background-color: whitesmoke;
            width: 100%;
        }

        .section3-box {
            display: flex;
            margin-left: -15px;
            margin-right: -15px;
        }

        .section3-box div {
            width: 25%;
            height: 100%;
            padding-left: 15px;
            padding-right: 15px;
        }

        .section3-box img {
            width: 100%;
            margin-top: 50px;
        }

        .section4 {
            background-color: grey;
            width: 100%;
            height: 605px;
            background-image: url("/Microsoft圖片檔/RE3hFDE.jpeg");
            background-position: center;
            background-size: covaer;
            display: flex;
            align-items: center;
            margin-top: 50px;
        }

        .section4-text {
            width: 440px;
            height: 190px;
            display: flex;
            flex-direction: column;
            padding: 30px 66px;
        }

        .section4-text h2 {
            width: 440px;
            height: 32px;
        }

        .section4-text p {
            width: 440px;
            height: 40px;
        }

        .section4-text a {
            width: 123px;
            height: 40px;
            background-color: black;
            color: white;
            text-align: center;
            line-height: 40px;
        }

        .section5 {
            background-color: firebrick;
            background-color: whitesmoke;
            width: 100%;
        }

        .section5-box {
            display: flex;
            margin-left: -15px;
            margin-right: -15px;
        }

        .section5-box div {
            width: 25%;
            height: 100%;
            padding-left: 15px;
            padding-right: 15px;
        }

        .section5-box img {
            width: 100%;
            margin-top: 50px;
        }

        .section6 {
            width: 100%;
            /* height: 80px; */
            background-color: aqua;
            display: flex;
            align-items: center;
            margin-top: 50px;
        }

        .section7 {
            width: 100%;
            background-color: cadetblue;
            margin-top: 50px;
        }

        .section7-ul {
            display: flex;
        }

        .section7-ul>div {
            width: 16.66%;
        }

        .section7-ul ul {
            padding: 0;

        }

        .section7-bottom-right {
            display: flex;
            justify-content: flex-end;
        }

        .section8 {
            width: 100%;
            height: 72px;
            background-color: aqua;
        }

        .section8-box {
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .section8-box-right {
            margin: 0 15px;
        }

        .section8-box-right a {
            margin: 0 15px;
        }

        @media (max-width : 1400px) {

            .ul-2 a,
            .ul-2 .b {
                /* font-size: 0;
                overflow: hidden; */
                display: none;
            }

            .menu {
                width: 1150px;
                height: 392px;
                background-color: aquamarine;
                display: none;
            }

            .menu {
                position: absolute;
                left: 20px;
                top: 53px;
            }

            @media (max-width : 1084px) {
                .header {
                    /* background-color: aqua; */
                    width: 100%;
                    height: 54px;
                    position: absolute;
                    left: 50%;
                    transform: translate(-50%);
                    display: flex;
                    align-items: center;
                    z-index: 1;
                }

                .main {
                    background-color: bisque;
                    width: 100%;
                    height: 2000px;
                    position: absolute;
                    top: 54px;
                    left: 50%;
                    transform: translate(-50%);
                }

                .section3-box div {
                    width: 50%;
                    height: 100%;
                    padding-left: 15px;
                    padding-right: 15px;

                }

                .section3-box {
                    flex-wrap: wrap;
                }

                .section3 {
                    padding: 0 40px;
                }

                .section5-box div {
                    width: 50%;
                    height: 100%;
                    padding-left: 15px;
                    padding-right: 15px;

                }

                .section5-box {
                    flex-wrap: wrap;
                }

                .section5 {
                    padding: 0 40px;
                }

                .section6 {
                    padding: 0 20px;
                }

                .section7-ul {
                    display: flex;
                    flex-wrap: wrap;
                }

                .section7-ul>div {
                    width: 33.33%;
                    margin-bottom: 30px;
                    padding: 0 20px;
                }
            }

            @media (max-width : 860px) {
                .ul-1 {
                    display: none;
                }

                .header-logo {
                    position: absolute;
                    left: 50%;
                    /* top: 50%; */
                    transform: translate(-50%);
                }

                .ul-2>ul>.c {
                    display: none;
                }

                .burger {
                    display: block;
                }

            }
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="burger" tabindex="1">
            <div class="burger-line1"></div>
            <div class="burger-line2"></div>
            <div class="burger-line3"></div>
        </div>
        <div class="burger-menu">
            <ul>
                <li>Microsoft 365</li>
                <hr size="1px" align="center" width="100%">
                <li>Office</li>
                <hr size="1px" align="center" width="100%">
                <li>Windows</li>
                <hr size="1px" align="center" width="100%">
                <li>Surface</li>
                <hr size="1px" align="center" width="100%">
                <li>Xbox</li>
                <hr size="1px" align="center" width="100%">
                <li>支援</li>
                <hr size="1px" align="center" width="100%">

                <li class="burger-menu-text">
                    <div class="list-title">軟體<i class="fa-solid fa-angle-down"></i></div>
                    <ul>
                        <li class="burger-menu-text-li">
                            <ul>
                                <li>Windows 應用程式</li>
                                <li>OneDrive</li>
                                <li>Outlook</li>
                                <li>Skype</li>
                                <li>OneNote</li>
                                <li>Microsoft Teams</li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <hr size="1px" align="center" width="100%">
                <li class="burger-menu-text">
                    <div class="list-title">個人電腦和設備<i class="fa-solid fa-angle-down"></i></div>
                    <ul>
                        <li class="burger-menu-text-li">
                            <ul>
                                <li>選購 Xbox</li>
                                <li>電腦配件</li>
                            </ul>
                    </ul>
                </li>

                <hr size="1px" align="center" width="100%">
                <li class="burger-menu-text">
                    <div class="list-title">娛樂<i class="fa-solid fa-angle-down"></i></div>
                    <ul>
                        <li class="burger-menu-text-li">
                            <ul>
                                <li>Xbox Game Pass Ultimate</li>
                                <li>Xbox Live Gold</li>
                                <li>Xbox 與遊戲</li>
                                <li>電腦遊戲</li>
                                <li>Windows 遊戲</li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <hr size="1px" align="center" width="100%">
                <li class="burger-menu-text">
                    <div class="list-title">商務適用<i class="fa-solid fa-angle-down"></i></div>
                    <ul>
                        <li class="burger-menu-text-li">
                            <ul>
                                <li>Microsoft Cloud</li>
                                <li>Microsoft Azure</li>
                                <li>Microsoft Dynamics 365</li>
                                <li>Microsoft 365</li>
                                <li>Windows 365</li>
                                <li>Microsoft Industry</li>
                                <li>選購商務版</li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <hr size="1px" align="center" width="100%">
                <li class="burger-menu-text">
                    <div class="list-title">Developer & IT<i class="fa-solid fa-angle-down"></i></div>
                    <ul>
                        <li class="burger-menu-text-li">
                            <ul>
                                <li>.NET</li>
                                <li>Visual Studio</li>
                                <li>Windows Server</li>
                                <li>開發 Windows 應用程式</li>
                                <li>文件</li>
                                <li>Power Platform</li>
                                <li>Power Apps</li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <hr size="1px" align="center" width="100%">
                <li class="burger-menu-text">
                    <div class="list-title">其他<i class="fa-solid fa-angle-down"></i></div>
                    <ul>
                        <li class="burger-menu-text-li">
                            <ul>
                                <li>Microsoft Rewards</li>
                                <li>免費下載與安全性</li>
                                <li>教育</li>
                                <li>禮品卡</li>
                                <li>Licensing</li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <hr size="1px" align="center" width="100%">
                <li>檢視網站地圖</li>
            </ul>

        </div>
        <div class="header-logo">
            <img src="/Microsoft圖片檔/RE1Mu3b.png" alt="">
        </div>
        <div class="header-ul">
            <div class="ul-1">
                <ul>
                    <li><a href="">Microsoft 365</a></li>
                    <li><a href="">Office</a></li>
                    <li><a href="">Windows</a></li>
                    <li><a href="">Surface</a></li>
                    <li><a href="">Xbox</a></li>
                    <li><a href="">支援</a></li>
                </ul>
            </div>
            <div class="ul-2">
                <ul>
                    <li ><span class="dropDownBTN">所有 Microsoft</span ><i class="fa-solid fa-angle-down"></i>
                        <div class="menu">
                            <div class="menu-1">
                                <ul>
                                    <h4>軟體</h4>
                                    <li><a href=""></a>Windows 應用程式</li>
                                    <li><a href=""></a>OneDrive</li>
                                    <li><a href=""></a>Outlook</li>
                                    <li><a href=""></a>Skype</li>
                                    <li><a href=""></a>OneNote</li>
                                    <li><a href=""></a>Microsoft Teams</li>
                                </ul>
                            </div>
                            <div class="menu-2">
                                <ul>
                                    <h4>個人電腦和設備</h4>
                                    <li><a href=""></a>選購 Xbox</li>
                                    <li><a href=""></a>電腦配件</li>
                                </ul>
                            </div>
                            <div class="menu-3">
                                <ul>
                                    <h4>娛樂</h4>
                                    <li><a href=""></a>Xbox Game Pass Ultimate</li>
                                    <li><a href=""></a>Xbox Live Gold</li>
                                    <li><a href=""></a>Xbox 與遊戲</li>
                                    <li><a href=""></a>電腦遊戲</li>
                                    <li><a href=""></a>Windows 遊戲</li>
                                </ul>
                            </div>
                            <div class="menu-4">
                                <ul>
                                    <h4>商務適用</h4>
                                    <li><a href=""></a>Microsoft Cloud</li>
                                    <li><a href=""></a>Microsoft Azure</li>
                                    <li><a href=""></a>Microsoft Dynamics 365</li>
                                    <li><a href=""></a>Microsoft 365</li>
                                    <li><a href=""></a>Windows 365</li>
                                    <li><a href=""></a>Microsoft Industry</li>
                                    <li><a href=""></a>選購商務版</li>
                                </ul>
                            </div>
                            <div class="menu-5">
                                <ul>
                                    <h4>Developer & IT</h4>
                                    <li><a href=""></a>.NET</li>
                                    <li><a href=""></a>Visual Studio</li>
                                    <li><a href=""></a>Windows Server</li>
                                    <li><a href=""></a>開發 Windows 應用程式</li>
                                    <li><a href=""></a>文件</li>
                                    <li><a href=""></a>Power Platform</li>
                                    <li><a href=""></a>Power Apps</li>
                                </ul>
                            </div>
                            <div class="menu-6">
                                <ul>
                                    <h4>其他</h4>
                                    <li><a href=""></a>Microsoft Rewards</li>
                                    <li><a href=""></a>免費下載與安全性</li>
                                    <li><a href=""></a>教育</li>
                                    <li><a href=""></a>禮品卡</li>
                                    <li><a href=""></a>Licensing</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="">搜尋</a><i class="fa-solid fa-magnifying-glass"></i></li>
                    <li><a href="">購物車</a><i class="fa-solid fa-cart-shopping"></i></li>
                    <li class="b">登入</li>
                    <li><img src="/Microsoft圖片檔/mectrl_headerPicture.jpg" alt=""></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="section1">
            <div class="section1-text">
                <H2>Surface Pro 8</H2>
                <P>運用更大的 13 吋觸控螢幕、更快的連線，以及提升的速度，成就更多。現在提供 Windows 11。</P>
                <a href="">
                    <span>
                        深入了解<i class="fa-solid fa-chevron-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="section2">
            <div class="line">
                <div class="line-box">
                    <div class="line-box-img1">
                        <img src="/Microsoft圖片檔/RE4sQDc.png" alt="" width="40" height="40">
                        <a href="">選擇您的Microsoft 365</a>
                    </div>
                    <div class="line-box-img2">
                        <img src="/Microsoft圖片檔/RE4pndL.png" alt="" width="40" height="40">
                        <a href="">選購 Surface 裝置</a>
                    </div>
                    <div class="line-box-img3">
                        <img src="/Microsoft圖片檔/RE4sQDc.png" alt="" width="40" height="40">
                        <a href="">取得 Windows 11</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section3">
            <div class="section3-box">
                <div class="section3-box-img">
                    <img src="/Microsoft圖片檔/RWPGs4.png" alt="">
                    <h3>Microsoft 365</h3>
                    <p>進階版 Office 應用程式、額外的雲端儲存空間、進階安全性等功能，全都在一個方便的訂閱中。</p>
                    <a href="">最多可供 6 人使用<i class="fa-solid fa-chevron-right"></i></a>
                    <a href="">適合 1 人使用<i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="section3-box-img">
                    <img src="/Microsoft圖片檔/RE4FTtq.jpeg" alt="">
                    <h3>Surface Laptop Go</h3>
                    <p>運用時尚和效能兼具、最輕巧的Surface筆記型電腦，善加利用每一天。</p>
                    <a href="">立即選購<i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="section3-box-img">
                    <img src="/Microsoft圖片檔/RWKAPX.jpeg" alt="">
                    <h3>查看更新的內容</h3>
                    <h3>Surface Pro X</h3>
                    <p>隨時隨地以任何角度不間斷工作，而且配備了可拆式鍵盤與內建的 Slim Pen 存放空間和充電功能。現在搭載 Windows 11。</p>
                    <a href="">立即選購<i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="section3-box-img">
                    <img src="/Microsoft圖片檔/RE4P80m.jpeg" alt="">
                    <h3>Xbox Game Pass Ultimate</h3>
                    <p>首月會員資格只要 NT$30。在您擁有的裝置上遊玩。包含 EA Play。此優惠僅適用於新訂閱者。</p>
                    <a href="">立即加入<i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="section4">
            <div class="section4-text">
                <H2>Microsoft OneDrive</H2>
                <P>將檔案和相片儲存到 OneDrive，即可隨時隨地從任何裝置存取</P>
                <a href="">
                    <span>
                        深入了解<i class="fa-solid fa-chevron-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="section5">
            <div class="section5-box">
                <div class="section5-box-img1">
                    <img src="/Microsoft圖片檔/RE4HCqV.jpeg" alt="">
                    <h3>Microsoft 365</h3>
                    <p>適用於商務的 Surface無論從事哪種工作，都有一款有助於成功的 Surface。</p>
                    <a href="">最多可供 6 人使用<i class="fa-solid fa-chevron-right"></i></a>
                    <a href="">適合 1 人使用<i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="section5-box-img2">
                    <img src="/Microsoft圖片檔/RWLJ3u.jpeg" alt="">
                    <h3>Surface Laptop Go</h3>
                    <p>免費取得 Microsoft Teams線上會議、聊天和共用雲端儲存空間，盡在一處。</p>
                    <a href="">立即選購<i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="section5-box-img3">
                    <img src="/Microsoft圖片檔/RWURKU.jpeg" alt="">
                    <h3>查看更新的內容</h3>
                    <h3>Surface Pro X</h3>
                    <p>在混合式環境中蓬勃發展探索工具、資源和策略，協助您的員工在靈活辦公的新環境中取得成功。</p>
                    <a href="">立即選購<i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="section5-box-img4">
                    <img src="/Microsoft圖片檔/RWMGbF.jpeg" alt="">
                    <h3>Xbox Game Pass Ultimate</h3>
                    <p>商務用 Windows 11 登場專為混合式辦公而設計。 為員工帶來實用性。 為 IT 帶來一致性。 為所有人帶來安全性。</p>
                    <a href="">立即加入<i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="section6">
            <div class="section6-bar">
                <span>關注 Microsoft</span>
                <a href=""><img src="/Microsoft圖片檔/Facebook.jpg"></a>
                <a href=""><img src="Microsoft圖片檔/youtube.jpg"></a>
            </div>
        </div>
        <div class="section7">
            <div class="section7-ul">
                <div class="section7-ul-1">
                    <h3>最新動向</h3>
                    <ul>
                        <li><a href="">Microsoft 365</a></li>
                        <li><a href="">Surface Go</a></li>
                        <li><a href="">Surface Book 2</li>
                        <li><a href="">Surface Pro</a></li>
                        <li><a href="">Windows 11 應用程式</a></li>
                    </ul>
                </div>
                <div class="section7-ul-2">
                    <h3>Microsoft Store</h3>
                    <ul>
                        <li><a href="">帳戶設定檔</a></li>
                        <li><a href="">下載中心</a></li>
                        <li><a href="">Microsoft Store 支援</a></li>
                        <li><a href="">退貨/退款</a></li>
                        <li><a href="">訂單追蹤</a></li>
                    </ul>

                </div>
                <div class="section7-ul-3">
                    <h3>教育</h3>
                    <ul>
                        <li><a href="">Microsoft 在教育領域的應用</a></li>
                        <li><a href="">學生適用的 Office</a></li>
                        <li><a href="">學校適用的 Office 365</a></li>
                        <li><a href="">Microsoft Azure 在教育領域的應用</a></li>
                    </ul>
                </div>
                <div class="section7-ul-4">
                    <h3>企業</h3>
                    <ul>
                        <li><a href="">Azure</a></li>
                        <li><a href="">AppSource</a></li>
                        <li><a href="">汽車</a></li>
                        <li><a href="">政府機構</a></li>
                        <li><a href="">醫療保健</a></li>
                        <li><a href="">製造</a></li>
                        <li><a href="">金融服務</a></li>
                        <li><a href="">零售</a></li>
                    </ul>
                </div>
                <div class="section7-ul-5">
                    <h3>開發人員</h3>
                    <ul>
                        <li><a href="">Microsoft Visual Studio</a></li>
                        <li><a href="">Windows 開發人員中心</a></li>
                        <li><a href="">Microsoft 開發人員計畫</a></li>
                        <li><a href="">開發人員計畫</a></li>
                        <li><a href="">Microsoft 開發人員計畫</a></li>
                        <li><a href="">Channel 9</a></li>
                        <li><a href="">Microsoft 365 開發人員中心</a></li>
                        <li><a href="">Microsoft 365 開發人員計畫</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="section7-ul-6">
                    <h3>公司</h3>
                    <ul>
                        <li><a href="">人才招募</a></li>
                        <li><a href="">公司新聞</a></li>
                        <li><a href="">Microsoft 隱私權</a></li>
                        <li><a href="">投資者</a></li>
                        <li><a href="">安全性</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section8">
            <div class="section8-box">
                <div class="section8-box-left">
                    <a class="left" href="">中文(台灣)</a>
                </div>
                <div class="section8-box-right">
                    <a href="">連絡 Microsoft</a>
                    <a href="">隱私權</a>
                    <a href="">使用規定</a>
                    <a href="">商標</a>
                    <a href="">有關我們的廣告訊息</a>
                    © Microsoft 2022
                </div>
            </div>
        </div>
    </div>
</body>

</html>