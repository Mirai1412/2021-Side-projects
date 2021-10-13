<template>
  <div id="headerpage">
    <div class="headerl">
        <ul>
          <li>로그인</li>
          <li>회원가입</li>
        </ul>
    </div>
    <div class="headert">
        <img src="@/views/imges/D.png" class="dag">
    </div>
    <div class="headerul">
        <ul>
          <li>메인</li>
          <li>메뉴</li>
          <li>주문하기</li>
          <li>장바구니</li>
          <li>문의하기</li>
        </ul>
    </div>

  </div>
  
</template>

<script>

export default {
  name: 'header',

}
</script>

<style lang="scss">
@import url(//fonts.googleapis.com/earlyaccess/nanumpenscript.css);

#headerpage{
  height: 204px;
  width: 100%;
  margin: 0 auto;
}
.headerl{
  height: 50px;
  position: absolute;
  right: 4.5%;
  ul{
    margin: 0;
    padding: 0;
    
  }
  li{
    display: inline-block;
    list-style: none;
    margin: 15px 10px;
    font-family: 'Nanum Pen Script', cursive;
    font-size: 25px;
  }
  li:hover{
    color: brown;
  }
}
.headert{
  border-bottom:3px solid rgb(209, 209, 209);
  width: 90%;
  height: 150px;
  margin: 0 auto;
  display: flex;
  justify-content: center;
    .dag{
      height: 150px;
      border-top: none;
    }
}
.headerul{
  width: 90%;
  margin: 0 auto;
  height: 50px;
  border-bottom:3px solid rgb(209, 209, 209);
  display: flex;
  justify-content: center;
  ul{
      margin: 0;
      padding: 0;
  }
  li{
      font-family: 'Nanum Pen Script', cursive;
      font-size: 25px;
      display: inline-block;
      margin: 13px 20px;
      height: 37px;
  }
  li:hover{
      border-bottom:2px solid black;
  }
}
.headerm{
  width: 100%;
  border-bottom:3px solid rgb(209, 209, 209);
  height: 200px;
  margin: 0 auto;
  display: flex;
  justify-content: center;
  margin-top: 30px;
    .headertitle{
      display: flex;
      flex-wrap: wrap;
      width: 490px;
      h1{
          width: 100%;
          display: flex;
          justify-content: center;
          font-family: 'Nanum Pen Script', cursive;
          font-size: 50px;
          margin: 0;
      }
      p{  
          font-family: 'Nanum Pen Script', cursive;;
          font-size: 40px;
          color: rgb(109, 109, 109);
          margin: 0 auto;
      }
      svg{
        margin-top: 20px;
         margin: 0 auto;
      }
    }

}
</style>
