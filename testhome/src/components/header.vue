<template>
  <div id="headerpage">
    <form class="headerserch">
      <input type="text" placeholder="">
      <button>검색하기</button>
    </form>
    <div class="headerl">
        <ul>
          <li>로그인</li>
          <li>회원가입</li>
          <li><router-link to="/center" class="rl">고객센터</router-link></li>
        </ul>
    </div>
    <div class="headert">
        <img src="@/views/imges/logo3.png" class="dag">
    </div>
    <div class="headerul">
        <ul>
         <li><router-link to="/" class="rl">메인</router-link></li>
         <li><router-link to="/menu" class="rl">메뉴</router-link></li>
         <li><router-link to="/coffee" class="rl">주문하기</router-link></li>
         <li><router-link to="/basket" class="rl">장바구니</router-link></li>
         <li><router-link to="/question" class="rl">문의하기</router-link></li>
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
  width: 100%;
  margin: 0 auto;
}
.rl{
    color: black; 
    text-decoration: none;
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
    font-size: 1.3em;
  }
  li:hover{
    color: brown;
  }

}
.headerserch{
  height: 25px;
  top: 15px;
  position: absolute;
  left: 5%;
  vertical-align: text-bottom;

  button{
    font-family: 'Nanum Pen Script', cursive;
    font-size: 1.2rem;
    position: absolute;
    top: 1px;
    width: 70px;
    height: 25px;
    padding: 1px;
    margin: 0px 5px;
    background: white;
    border: 1px solid black;

    &:hover{
      color: white;
      background: black;
    }
  }
  
  input{
    height: 20px;
  }
}

.headert{
  border-bottom:3px solid rgb(209, 209, 209);
  width: 90%;
  height: 150px;
  margin: 0 auto;
  padding-top: 40px;
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
  border-bottom:3px solid rgb(209, 209, 209);
  display: flex;
  height: 47px;
  justify-content: center;
  position: relative;
  
  ul{ 

      margin: 0;
      padding: 0;
      position: absolute;
  }
  li{
      font-family: 'Nanum Pen Script', cursive;
      font-size: 1.5em;
      display: inline-block;
      margin: 0 20px;
      padding: 5px 0;
      height: 37px;
  }
  li:hover{
      border-bottom:2px solid black;
  }
}

</style>
