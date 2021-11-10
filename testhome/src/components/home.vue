<template>
    <div id="mainpage">

        <div class="homeimg">
            <img src="@/views/imges/d2.png" class="dag">
        </div>

        <div class="maincoffee">
            <div class="coffeehader">
                <div class="line"/>
                  <h1>인기 메뉴</h1>
                <div class="line2"/>
                  <p>카페 데이지는 브라질 스페셜티 원두를 함께 블렌딩하여 사용하여
                      <br>
                        수확한지 1년 미만 된 아라비카 뉴크롭 생두를
                      <br>
                        생산국 정부의 수확 시기, 품질, 크기 등 엄격한 기준을 토대로 선별하여 수입합니다.</p>
            </div>

        <div class="coffeechose">
            <div class="homecoffee">
                <img src="@/views/imges/아메리카노.png" class="coffeeimg">
              <h1>아메리카노</h1>
              <p>상쾌한 아침에는 한잔의 아메리카노!
                  <br>
              가격 : 1500원 
                  <br>
              Ice / Hot 선택가능, 샷추가 가능
              </p>
              <h2>장바구니 -></h2>
            </div>

            <div class="homecoffee">
                <img src="@/views/imges/아메리카노.png" class="coffeeimg">
              <h1>카페라떼</h1>
              <p>부드러운 크림이 주는 행복
                  <br>
              가격 : 6500원 
              </p>
              <h2>장바구니 -></h2>
            </div>            

            <div class="homecoffee">
                <img src="@/views/imges/아메리카노.png" class="coffeeimg">
              <h1>에스프레소</h1>
              <p>찐한 에스프레소의 감동
                  <br>
              가격 : 4500원 
                  <br>
              샷추가 가능
              </p>
              <h2>장바구니 -></h2>
            </div>

        </div>

        </div>

        <div class="homem">
            <div class="hometitle">
                  <svg
                      aria-label="하트"
                      class="_8-yf5 "
                      color="#ed4956"
                      fill="#ed4956"
                      height="24"
                      role="img"
                      viewBox="0 0 48 48"
                      width="24">
                    <path
                        d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path>
                  </svg>
                <h1>"Coffee makes people witty"</h1>
                <p>Montesquieu</p>
              </div>
          </div>


            <div class="store">
                <div class="bg1">
                    <img src="@/views/imges/bg1.jpg"></div>
                    <div class="bg2">
                        <img src="@/views/imges/bg2.jpg"></div>
                        <div class="bg3">
                            <img src="@/views/imges/bg3.png"></div>
                            <div class="bg4">
                                <img src="@/views/imges/bg4.png"></div>
                                <div class="bg5">
                                    <img src="@/views/imges/bg5.png"></div>
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

    .hometitle {
        height: 140px;
        display: flex;
        flex-wrap: wrap;
        width: 490px;
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
        svg {
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
    width: 100%;
    height: 700px;
    margin-bottom: 20px;

    .coffeehader {
        width: 100%;
        height: 170px;
        position: relative;
        display: flex;
        flex-wrap: wrap;
        h1 {
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
        height: 500px;
        display: flex;
        flex-wrap: wrap;
        margin-top: 40px;
    .homecoffee{
        margin: 0 auto;
        font-family: 'Nanum Pen Script', cursive;
        font-size: 1.5em;
        width: 80%;
        height: 150px;
        border: 1px solid rgb(175, 175, 175);
        position: relative;
        .coffeeimg{
            height: 100%;
        }
        h1{
            top: 0;
            left: 15rem;
            position: absolute;
            margin: 0;
        }
        p{
            top: 3.5rem;
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
  width: 1100px;
  margin: 0 auto;
  margin-top: 20px;
  height: 920px;
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
