@extends('Bootstrap template')
@section('title')
@endsection

@section('css')
    <style>
        h1 {
            font-weight: 700;
        }

        nav {
            height: 92px;
            background-color: gray;
        }

        .progress {
            height: 873px;
        }

        .progress-box {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #shooping-step01 .step {
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            font-size: 18px;
        }

        #shooping-step01 .step::before {
            content: attr(data-text);
            position: absolute;
            word-break: keep-all;
            bottom: -35px;
            color: black;
            font-size: 18px;

        }

        .buy-progress-bar {
            width: 180px;
            height: 8px;
            background-color: white;
            border-radius: 5px;
            margin: 0 8px;
        }

        #shooping-step01 .green {
            background-color: rgb(16, 185, 129);
            color: white;
        }

        .progress-25::before {
            content: "";
            display: block;
            width: 35%;
            height: 10px;
            border-radius: 5px;
            background-color: rgb(16, 185, 129);
        }



        .order .items {
            padding-top: 24px;
        }

        .order .items .item-price input {
            width: 32px;
            height: 24px;
        }

        .order .total {
            padding-top: 24px;
        }

        .order .total-item {
            width: 236px;
            height: 28px;
        }

        .order .features {
            padding-top: 20px;
        }

        .order .features button {
            width: 148px;
            height: 48px;
        }

        footer {
            height: 372px;
            background-color: gray;
        }

    </style>
@endsection



<body>
    @section('main')
        <section id="shooping-step01" class="pt-3 pb-3">
            <div class="container-xxl">
                <div class="progress d-flex flex-column p-5">
                    <h1>購物車</h1>
                    <div class="progress-box">
                        <div class="step green  " data-text="確認購物車">1</div>
                        <div class="buy-progress-bar progress-25"></div>
                        <div class="step" data-text="付款與運送方式">2</div>
                        <div class="buy-progress-bar"></div>
                        <div class="step" data-text="填寫資料">3</div>
                        <div class="buy-progress-bar"> </div>
                        <div class="step" data-text="完成訂購">4</div>
                    </div>
                    <div class="order pt-5">
                        <span style="font-size: 24px; color: rgba(55,65,81,1);">訂單明細</span>
                        <div class="items">
                            <div class="item d-flex justify-content-between">
                                <div class="item-span d-flex align-items-center">
                                    <img src={{ asset('./img/EEguU02.jpg') }} alt="" width="60px" height="60px"
                                        style="border-radius: 50%;">
                                    <div class="d-flex flex-column">
                                        <span style="font-size: 16px;">Chicken momo</span>
                                        <span style="color: rgba(156,163,175,1);">#41551</span>
                                    </div>
                                </div>
                                <div class="item-price d-flex align-items-center">
                                    <span>+</span>
                                    <input type="number">
                                    <span>-</span>
                                    <span>$10.50</span>
                                </div>

                            </div>
                            <hr style="filter: alpha(opacity=100,finishopacity=0,style=3)" width="100%"
                                color=rgb(229,231,235) SIZE=3>
                        </div>
                        <div class="items">
                            <div class="item d-flex justify-content-between">
                                <div class="item-span d-flex align-items-center">
                                    <img src={{ asset('./img/Uv2Yqzo.jpg') }} alt="" width="60px" height="60px"
                                        style="border-radius: 50%;">
                                    <div class="d-flex flex-column ">
                                        <span style="font-size: 16px;">Chicken momo</span>
                                        <span style="color: rgba(156,163,175,1);">#41551</span>
                                    </div>
                                </div>
                                <div class="item-price d-flex align-items-center">
                                    <span>+</span>
                                    <input type="">
                                    <span>-</span>
                                    <span>$10.50</span>
                                </div>
                            </div>
                            <hr style="filter: alpha(opacity=100,finishopacity=0,style=3)" width="100%"
                                color=rgb(229,231,235) SIZE=3>
                        </div>
                        <div class="items">
                            <div class="item d-flex justify-content-between">
                                <div class="item-span d-flex align-items-center">
                                    <img src={{ asset('./img/xbTAITF.jpg') }} alt="" width="60px" height="60px"
                                        style="border-radius: 50%;">
                                    <div class="d-flex flex-column">
                                        <span style="font-size: 16px;">Chicken momo</span>
                                        <span style="color: rgba(156,163,175,1);">#41551</span>
                                    </div>
                                </div>
                                <div class="item-price d-flex align-items-center">
                                    <span>+</span>
                                    <input type="">
                                    <span>-</span>
                                    <span>$10.50</span>
                                </div>
                            </div>
                            <hr style="filter: alpha(opacity=100,finishopacity=0,style=3)" width="100%"
                                color=rgb(229,231,235) SIZE=3>
                        </div>
                        <div class="total d-flex flex-column align-items-end">
                            <div class="total-item d-flex justify-content-between">
                                <span style="font-size: 14px;">數量:</span>
                                <span style="font-size: 18px;">3</span>
                            </div>
                            <div class="total-item d-flex justify-content-between">
                                <span style="font-size: 14px;">小計:</span>
                                <span style="font-size: 18px;">$24.90</span>
                            </div>
                            <div class="total-item d-flex justify-content-between">
                                <span style="font-size: 14px;">運費:</span>
                                <span style="font-size: 18px;">$24.90</span>
                            </div>
                            <div class="total-item d-flex justify-content-between">
                                <span style="font-size: 14px;">總計:</span>
                                <span style="font-size: 18px;">$24.90</span>
                            </div>
                        </div>
                        <hr style="filter: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=rgb(229,231,235)
                            SIZE=3>
                        <div class="features d-flex justify-content-between align-items-center">
                            <div class="icon">
                                <i class="bi bi-arrow-left" style="height: 12px; width: 14px;"></i>
                                <span style="font-size: 16px;">返回購物</span>
                            </div>
                            <button type="button" class="btn btn-primary">下一步</button>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <footer></footer>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>
