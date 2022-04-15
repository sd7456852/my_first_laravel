<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100vh;
            padding: 0;
            margin: 0;
            background-color: pink;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .boxes {
            width: 500px;
            height: 500px;
            background-color: aliceblue;
            border-radius: 20px;
            display: flex;
            flex-wrap: wrap;
        }
        .box {
            width: 50%;
            height: 50%;
            background-color: gray;
            border-radius: 10px;
            border: 5px solid aliceblue;
        }
        .answer-box {
            opacity: 0.5;
        }
        .countnum{
            width: 20px;
            height: 20px;
            background-color: white;
            position: absolute;
            right: 90%;
        }
    </style>
</head>

<body>
    <div class="boxes">
    </div>
    <div class="countnum">
        <span id="countnum">0</span>
    </div>
    
    <script>
        //level**2 level的2次方
        //大小如何決定
        //2*2 50%
        //3*3 100/3 %
        //4*4 100/4 %
        // level*level 100/level %
        //隨機變化 > 亂數

        //樣板語言``
        var level = 2;
        var count = 0; //count初始
        var co = 0;
        
        game(); //呼叫函數
        
        function game() { //有名函數 名稱game
            var size = 100 / level;
            size = 100 / level;
            var boxes = document.querySelector(".boxes"); //偵測boxes
            boxes.innerHTML = ""; //清空boxes

            var countnum = document.querySelector("#countnum");

            var r = Math.floor(Math.random()*256);
            var g = Math.floor(Math.random()*256);
            var b = Math.floor(Math.random()*256);
            var color = `rgb(${r},${g},${b})`;

            for (var i = 0; i < level ** 2; i++) {
                boxes.innerHTML += `<div  class="box" style="width: ${size}% ; height: ${size}%; background-color: ${color};"></div>`;
            }

            var answer = Math.floor(Math.random() * level**2) + 1;//設定答案box
            var abox = document.querySelector(`.boxes .box:nth-child(${answer})`);//找到答案那個box
            console.log(abox);
            abox.classList.add("answer-box");//加入答案的class
            abox.style.opacity = 0.5 + level * 0.01;

            // var not_abox = document.querySelector(`.boxes .box:not(:nth-child(${answer}))`);
            // not_abox.addEventListener("click", function () {
            //     alert("不是我");

            
            var not_abox_All = document.querySelectorAll(`.boxes .box:not(:nth-child(${answer}))`);
            //找到錯誤的那個box
            not_abox_All.forEach(function (nbox,index) {  //第一個參數nbox : 代表單元個體(這裡是一個box)

                nbox.addEventListener("click",function(){
                alert("不是我");
            });
        });



            var answerBox = document.querySelector(".answer-box");
            answerBox.addEventListener("click", function () {
                count++; co++;
                if(count == level){
                    level++;
                    count = 0;
                }
                countnum.innerHTML = co; 
                game();
                
            });

        }
    
    </script>
</body>

</html>