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


        .order .information span {
            padding: 4px;
            font-size: 20px;
        }

        .order .information input {
            background-color: transparent;
            border: 2px solid rgba(55, 65, 81, 0.1);
            border-radius: 0.25rem;
            height: 44px;
            font-size: 15px;
            width: 100%;
            padding: 8px 20px;
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


<body>
    @section('main')
        

        <section id="shooping-step01" class="pt-3 pb-3">
            <div class="container-xxl">
                <div class="progress d-flex flex-column p-5">
                    <h1>?????????</h1>
                    <div class="progress-box">
                        <div class="step green  " data-text="???????????????">1</div>
                        <div class="buy-progress-bar green-all"></div>
                        <div class="step green " data-text="?????????????????????">2</div>
                        <div class="buy-progress-bar green-all"></div>
                        <div class="step green" data-text="????????????">3</div>
                        <div class="buy-progress-bar progress-25"> </div>
                        <div class="step" data-text="????????????">4</div>
                    </div>
                    <div class="order pt-5">
                        <span style="font-size: 24px; color: rgba(55,65,81,1);">????????????</span>
                        <div class="information">
                            <div class="col"><span>??????</span></div>
                            <div class="col"><input type="text" name="" id="" placeholder="?????????"></div>
                            <div class="col"><span>??????</span></div>
                            <div class="col"><input type="text" name="" id="" placeholder="0912345678"></div>
                            <div class="col"><span>Email</span></div>
                            <div class="col"><input type="text" name="" id="" placeholder="abc123@gmail.com"></div>
                            <div class="col"><span>??????</span></div>
                            <div class="d-flex">
                                <div class="col-6"><input type="text" name="" id="" placeholder="??????"></div>
                                <div class="col-6"><input type="text" name="" id="" placeholder="????????????"></div>
                            </div>
                            <div class="col pt-1"><input type="text" name="" id="" placeholder="??????"></div>
                        </div>
                        <hr style="filter: alpha(opacity=100,finishopacity=0,style=3)" width="100%"
                            color=rgb(229,231,235) SIZE=3>
                        <div class="total d-flex flex-column align-items-end">
                            <div class="total-item d-flex justify-content-between">
                                <span style="font-size: 14px;">??????:</span>
                                <span style="font-size: 18px;">3</span>
                            </div>
                            <div class="total-item d-flex justify-content-between">
                                <span style="font-size: 14px;">??????:</span>
                                <span style="font-size: 18px;">$24.90</span>
                            </div>
                            <div class="total-item d-flex justify-content-between">
                                <span style="font-size: 14px;">??????:</span>
                                <span style="font-size: 18px;">$24.90</span>
                            </div>
                            <div class="total-item d-flex justify-content-between">
                                <span style="font-size: 14px;">??????:</span>
                                <span style="font-size: 18px;">$24.90</span>
                            </div>
                        </div>

                        <hr style="filter: alpha(opacity=100,finishopacity=0,style=3)" width="100%"
                            color=rgb(229,231,235) SIZE=3>
                        <div class="features d-flex justify-content-between align-items-center">
                            <button type="button" class="btn btn-outline-primary">?????????</button>
                            <button type="button" class="btn btn-primary">????????????</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection
@section('footer')
    
@endsection
