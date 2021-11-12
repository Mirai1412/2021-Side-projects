<template>
    <div id="mainpage">

        <div class="homeimg">
            <img src="@/views/imges/d2.png" class="dag">
        </div>

        <div class="maincoffee">
            <div class="coffeehader">
                <img src="@/views/imges/sk/f1.png" >
            <div class="line"/>
                <h1>인기 메뉴</h1>
            <div class="line2"/>
                <p>우리 '매화'는 품질과 혁신에 최선을 다하여 '매화'를 방문하시는 모든 고객님께 
                    최고의 차 경험을 제공함으로
                    <br>
                    누구나 마음껏 차를 즐길 수 있는 차 대중화의 선도적 역할을 수행하겠습니다.
                </p>
            </div>
            <div class="coffeechose">
                <div class="homecoffee">
                    <img src="@/views/imges/아메리카노.png" class="coffeeimg">
                        <h1>녹차</h1>
                            <p>따뜻한 녹차는 마음도 따뜻하게!
                                <br>
                            가격 : 4500원 
                            </p>
                        <h2>장바구니 -></h2>
                </div>
            </div>

            <div class="coffeechose">
            <div class="homecoffee">
                <img src="@/views/imges/아메리카노.png" class="coffeeimg">
              <h1>녹차</h1>
              <p>따뜻한 녹차는 마음도 따뜻하게!
                  <br>
              가격 : 4500원 
              </p>
              <h2>장바구니 -></h2>
            </div>
            </div>

                <div class="coffeechose">
            <div class="homecoffee">
                <img src="@/views/imges/아메리카노.png" class="coffeeimg">
              <h1>녹차</h1>
              <p>따뜻한 녹차는 마음도 따뜻하게!
                  <br>
              가격 : 4500원 
              </p>
              <h2>장바구니 -></h2>
            </div>
            </div>
                <img src="@/views/imges/sk/q5.png" class="tree" >
                <img src="@/views/imges/sk/a4.png" class="tree2" >
        </div>

        <div class="homem">
            <div class="hometitle">
                <img src="@/views/imges/l12.png">
                <h1>"NO matter what is happening in your life, you always offer tea"</h1>
                <p>- Clemantine Wamariya -</p>
            </div>
        </div>

        <div class="store">
            <div class="bg1">
            <img src="@/views/imges/bg1.jpg">
            </div>
            <div class="bg2">
            <img src="@/views/imges/bg2.jpg">
            </div>
            <div class="bg3">
            <img src="@/views/imges/bg3.png">
            </div>
            <div class="bg4">
            <img src="@/views/imges/bg4.png">
            </div>
            <div class="bg5">
            <img src="@/views/imges/bg5.png">
            </div>
        </div>
        </div>
</template>

<script>

export default {
  name: 'home',
}
</script>
<style lang="scss">
#mainpage {
    width: 90%;
    margin: 0 auto;
}
.homem {
    width: 100%;
    // border-bottom: 3px solid rgb(209, 209, 209);
    border-bottom: 3px solid black;
    border-top: 3px solid black;
    height: 170px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    padding-top: 30px;
    position: relative;

    .hometitle {
        height: 140px;
        display: flex;
        flex-wrap: wrap;
        width: 1180px;
    h1 {
            width: 100%;
            display: flex;
            justify-content: center;
            font-family: 'Nanum Pen Script', cursive;
            font-size: 3em;
            margin: 0;
        }
    p {
            font-family: 'Nanum Pen Script', cursive;
            font-size: 2em;
            color: rgb(109, 109, 109);
            margin: 0 auto;
        }
    img{
            margin: 0 auto;
        }
    }
}

.homeimg {
    margin:  0;
    position: relative;
    img {
        width: 100%;
    }
}

.maincoffee {
    width: 1380px;
    margin: 0 auto;
    height: 700px;
    margin-bottom: 20px;
    position: relative;
    .tree{
        left: 30px;
        width: 280px;
        position: absolute;
        z-index: 1;
        top: 232px;
    }
    .tree2{
        right: 137px;
        width: 400px;
        position: absolute;
        z-index: 1;
        top: 100px;
    }
    .coffeehader {
        width: 100%;
        height: 170px;
        position: relative;
        display: flex;
        flex-wrap: wrap;
        img{
            left: 400px;
            width: 600px;
            height: 300px;
            position: absolute;
            z-index: 0;
            top: -50px;
        }
        h1 {
            z-index: 5;
            font-family: 'Nanum Pen Script', cursive;
            font-size: 3em;
            margin: 0;
            height: 85px;
            line-height: 100px;
            text-align: center;
            width: 100%;
            justify-content: center;
        }
        p {
             z-index: 5;
            font-family: 'Nanum Pen Script', cursive;
            font-size: 1.5em;
            width: 100%;
            text-align: center;
            margin: 0;
            color: rgb(139, 134, 134);
        }
        .line {
            top: 50px;
            right: 300px;
            position: absolute;
            width: 300px;
            border-bottom: 2px solid black;
        }
        .line2 {
            top: 50px;
            left: 300px;
            position: absolute;
            width: 300px;
            border-bottom: 2px solid black;
        }
    }

    .coffeechose{
        display: flex;
        flex-wrap: wrap;
        margin-top: 20px;
        width: 1380px;

        .homecoffee{
            margin: 0 auto;
            font-family: 'Nanum Pen Script', cursive;
            font-size: 1.5em;
            z-index: 6;
            width: 80%;
            height: 150px;
            border: 1px solid rgb(175, 175, 175);
            position: relative;
                .coffeeimg{
                    height: 100%;
                }
                h1{
                    top: 10px;
                    left: 15rem;
                    position: absolute;
                    margin: 0;
                }
                p{
                    top: 4.5rem;
                    left: 15rem;
                    position: absolute;
                    margin: 0;
                }
                h2{
                    top: 3.5rem;
                    right: 2rem;
                    position: absolute;
                    margin: 0;
                }
        }
    }
}
.store{
  width: 1110px;
  margin: 0 auto;
  margin-top: 20px;
  height: 920px;
  z-index: 6;
  position: relative;
    .bg1{
     position: absolute;
     width: 550px;
     height: 500px;
    }
    .bg2{
     position: absolute;
     width: 540px;
     height: 300px;
   
     right: 0;
    }
    .bg3{
     position: absolute;
     width: 540px;
     height: 300px;

     right: 0;
     top: 320px;
    }
    .bg4{
     position: absolute;
     width: 550px;
     height: 400px;

     top: 520px;
    }
    .bg5{
     position: absolute;
     width: 540px;
     height: 280px;

     right: 0;
     top: 640px;
    }
    img{
        width: 100%;
        height: 100%;
    }
}
.menupan{
    margin: 20px 0;
    img{
        width: 100%;
    }
}
</style>
