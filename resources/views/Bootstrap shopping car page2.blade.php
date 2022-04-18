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

        #shooping-step01 .green-all {
            background-color: rgb(16, 185, 129);
        }

        .progress-25::before {
            content: "";
            display: block;
            width: 35%;
            height: 10px;
            border-radius: 5px;
            background-color: rgb(16, 185, 129);
        }

        .order .pay {
            padding-top: 20px;
        }

        .order .pay .item-price input {
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


@section('main')
    <section id="shooping-step01" class="pt-3 pb-3">
        <div class="container-xxl">
            <div class="progress d-flex flex-column p-5">
                <h1>購物車</h1>
                <div class="progress-box">
                    <div class="step green  " data-text="確認購物車">1</div>
                    <div class="buy-progress-bar green-all"></div>
                    <div class="step green " data-text="付款與運送方式">2</div>
                    <div class="buy-progress-bar progress-25"></div>
                    <div class="step" data-text="填寫資料">3</div>
                    <div class="buy-progress-bar"> </div>
                    <div class="step" data-text="完成訂購">4</div>
                </div>

                <div class="order pt-5">
                    <span style="font-size: 24px; color: rgba(55,65,81,1);">付款方式</span>
                    <div class="pay px-4">
                        <div class="pay-item d-flex justify-content-between">
                            <div class="pay-item-span d-flex align-items-center">
                                <input type="radio">
                                <span style="font-size: 16px;">信用卡付款</span>
                            </div>

                        </div>
                        <hr style="filter: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=rgb(229,231,235)
                            SIZE=3>
                    </div>
                    <div class="pay px-4">
                        <div class="pay-item d-flex justify-content-between">
                            <div class="pay-item-span d-flex align-items-center">

                                <input type="radio">
                                <span style="font-size: 16px;">網路 ATM</span>

                            </div>
                        </div>
                        <hr style="filter: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=rgb(229,231,235)
                            SIZE=3>
                    </div>
                    <div class="pay px-4">
                        <div class="pay-item d-flex justify-content-between">
                            <div class="pay-item-span d-flex align-items-center">
                                <input type="radio">
                                <span style="font-size: 16px;">超商代碼</span>
                            </div>
                        </div>
                        <hr style="filter: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=rgb(229,231,235)
                            SIZE=3>
                    </div>
                    <span style="font-size: 24px; color: rgba(55,65,81,1);">運送方式</span>
                    <div class="pay px-4">
                        <div class="pay-item d-flex justify-content-between">
                            <div class="pay-item-span d-flex align-items-center">
                                <input type="radio">
                                <span style="font-size: 16px;">黑貓宅配</span>
                            </div>
                        </div>
                        <hr style="filter: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=rgb(229,231,235)
                            SIZE=3>
                    </div>
                    <div class="pay px-4">
                        <div class="pay-item d-flex justify-content-between">
                            <div class="pay-item-span d-flex align-items-center">
                                <input type="radio">
                                <span style="font-size: 16px;">超商店到店</span>
                            </div>
                        </div>
                        <hr style="filter: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=rgb(229,231,235)
                            SIZE=3>
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
                        <button type="button" class="btn btn-outline-primary">上一步</button>
                        <button type="button" class="btn btn-primary">下一步</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
@endsection
