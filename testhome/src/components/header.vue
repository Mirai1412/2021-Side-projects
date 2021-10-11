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
          <li>문의하기</li>
        </ul>
    </div>
    <div class="headerm">
      <div class="headertitle">
        <svg aria-label="좋아요 취소" class="_8-yf5 " color="#ed4956" fill="#ed4956" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg>
        <h1>"Coffee makes people witty"</h1>
        <p>Montesquieu</p>
      </div>
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
  height: 500px;
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
  width: 90%;
  border-bottom:3px solid rgb(209, 209, 209);
  height: 200px;
  margin: 0 auto;
  display: flex;
  justify-content: center;
  margin-top: 30px;
    .headertitle{
      display: flex;
      flex-wrap: wrap;
      width: 36%;
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
