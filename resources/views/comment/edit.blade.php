@extends('Bootstrap template')
@section('title')
@endsection
@section('css')
    <style>
        h1 {
            font-weight: 700;
            margin: 0px;
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

        .mid-box {
            font-size: 50px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        .small-box{
            font-size: 25px;

        }
        .big-box{
            margin-bottom: 20px;
        }
        .big-box  {
            width: 1080px;
            border: 1px solid rgb(0, 255, 255);
            font-size: 15px;
            
        }

        .boxs-1 {
            display: flex;

        }

        .small-box {
            width: 581px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

    </style>
@endsection


<body>
    @section('nav')
        <div class="container-xxl d-flex px-5">
            <div class="col d-flex align-items-center">
                <img src="./img/logo.svg" alt="" width="106px" height="60px">
            </div>
            <div class="col box1 d-flex align-items-center justify-content-end">
                <a href="">Blog</a>
                <a href="">Portfolio</a>
                <a href="">About</a>
                <a href="">Contact</a>
                <div class="box2">
                    <a href="http://127.0.0.1:8000/page1"><i class="bi bi-cart-fill"></i></a>
                    <a href="http://127.0.0.1:8000/login"><i class="bi bi-person-circle"></i>
                        <div class="dropdown-content"><a href="">Login</a></div>
                    </a>
                </div>
            </div>
        </div>
    @endsection
    
                    <form action="/comment/save" method="get">
                        <div class="inputgrope">
                            <div class="title">
                                <h3>修改留言</h3>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">姓名</label>
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                                    placeholder="">
                            </div>
    
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">標題</label>
                                <input type="text" class="form-control" name="title" id="exampleFormControlInput1"
                                    placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">內容</label>
                                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
    
                        </div>
                        <button type="button" class="btn btn-outline-primary">清除</button>
                        <button type="submit" class="btn btn-primary">送出</button>
                    </form>
                @endsection
                @section('footer')
                @endsection
