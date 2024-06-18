<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/font-awesome.css" rel="stylesheet"/>
@yield('styles')
<style>
    .top1 .fa
    {
    border:1px soild white;
    height:22px;
    width:20px;
    padding-top:.70%;
    background:white;
    color:#ffc107;
    border:1px solid white;
    border-radius:2px;
    }
    .top1 .fa:hover
    {
    transform:rotate(360deg);
    transition:all ease 1s;
    }
    #menu ul li a:hover
    {
    background:green;
    border-radius:5px;
    transition:all ease 1s;
    color:red;
    border:1px soild navy;
    }
    #menu
    {
    background:transparent;
    }
    @import url('https//fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Spartan', sans-serif;
    }
    .section-p1{
        padding: 40px 80px;
    }
    .section-m1{
        margin: 40px 0;
    }

    button.normal{
        font-size: 14px;
        font-weight: 600;
        padding: 15px 30px;
        color: white;
        background-color:transparent;
        border-radius: 4px;
        cursor: pointer;
        border: none;
        outline: none;
        transition: 0.2s;
    }
    button.whites{
        font-size: 14px;
        font-weight: 600;
        padding: 15px 30px;
        color: #1a1a1a;
        background-color: white;
        border-radius: 4px;
        cursor: pointer;
        border: 1px solid black;
        outline: none;
        transition: 0.2s;
    }



    #mobile{
        display: none;
        align-items: center;

    }

    /* header start   */
    #header{
     display: flex;
     text-align: center;
     justify-content: space-between;
     padding: 20px 80px;
     background-color: #e3e6f3;
     box-shadow: 0px 5px 15px rgb(0, 0, 0,0.06);
    z-index: 999;
    position: sticky;
    top: 0;
    left: 0;
    }
    #navbar{
        display: flex;
        text-align: center;
        justify-content: center;
    }
    #navbar li{
        list-style: none;
        padding: 0px 40px;
        position: relative;
    }
    #navbar li a{
        text-decoration: none;
        font-size: 20px;
        font-weight: 600;
        color: black;
        transition: 0.3s ease;
    }
    #navbar li a:hover,
    #navbar li a.active{
        color: #088;
    }
    #navbar li a.active::after,
    #navbar li a:hover::after{
        content: "";
        width: 30%;
        height: 2px;
        background-color: #088;
        position: absolute;
        bottom: -4px;
        left: 50px;

    }
    /*-----------Home page start ---------------*/
    #hero{
        background-image:url("../img/hero4.png");
        height: 90vh;
        width: 100%;
        background-size: cover;
        background-position: top 25% right 0;
        margin-top: -22px;
        padding: 0 80px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
    }

    h1.hero123{
        font-size: 50px;
        color: #088;
        padding-bottom: 15px;
    }
    h2.hero123{
        font-size: 50px;
        padding-bottom: 15px;
    }
    p.hero123{

        padding-bottom: 15px;
    }
    #hero button{
        background-color: transparent;
        color: #088;
        border: 0;
       background-image: url("../img/button.png");
       padding: 10px 80px 10px 65px;
       font-size: 20px;
       font-weight: 600;
       background-repeat: no-repeat;
       cursor: pointer;

    }
    /*------------------feature page start-----------*/
    #feature .fe-box img{
        margin-bottom: 20px;
    }
    #feature .fe-box{
        width: 180px;
        text-align: center;
        padding: 25px 15px;
        box-shadow: 2px 3px 20px -6px rgba(0,0,0,0.75);
        border: 2px solid #ffffff;
        border-radius: 4px;
        margin: 15px 0;
    }
    #feature .fe-box:hover{
        box-shadow: 2px 2px 12px 1px rgba(0,0,0,0.75);
    }
    #feature .fe-box h6{
        display: inline-block;
        padding: 9px 8px 6px 8px;
        line-height: 1;
        border-radius: 4px;
        color: #088;
        background-color: #fddde4;
        font-size: 15px;
    }
    #feature{
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    #feature .fe-box:nth-child(2) h6{
        background-color: #cdebbc;
    }
    #feature .fe-box:nth-child(3) h6{
        background-color: #d1e8f2;
    }
    #feature .fe-box:nth-child(4) h6{
        background-color: #cdd4f8;
    }
    #feature .fe-box:nth-child(5) h6{
        background-color: #f6dbf6;
    }
    #feature .fe-box:nth-child(6) h6{
        background-color: #fff2e5;
    }

    #product1{
        text-align: center;
    }
    #product1 .pro-container{
        display: flex;
        justify-content: space-between;
        padding-top: 20px;
        flex-wrap: wrap;
    }
    #product1 .pro{
        width: 23%;
        min-width: 250px;
        padding: 10px 12px;
        border: 1px solid black;
        border-radius: 25px;
        cursor: pointer;
        box-shadow: 20px 20px 30px rgb(0, 0, 0,0.06);
        margin:15px 0px;
        transition: 0.2s ease;
        position: relative;
    }
    #product1 .pro:hover{
        box-shadow: 20px 20px 30px rgb(0, 0, 0,0.06)
    }
    #product1 .pro img{
        width: 100%;
        border-radius: 20px;
    }
    #product1 .pro .des{
        text-align: start;
        padding: 10px 0;
    }
    #product1 .pro .des span{
        color: #606063;
        font-size: 12px;
    }
    #product1 .pro .des h5{
        padding-top: 7px;
        color: #1a1a1a;
        font-size: 14px;
    }
    #product1 .pro .des i{
        font-size: 12px;
        color: rgba(249, 245, 5, 0.995);
    }
    #product1 .pro .des h4{
        padding-top: 7px;
        font-size: 15px;
        font-weight: 600;
        color: #088;
    }
    #product1 .pro .cart{
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50px;
        background-color: #e8f6ea;
        font-weight: 500;
        color: #088;
        border: 1px solid #cce7d0;
        position: absolute;
        bottom: 20px;
        right: 10px;
    }

    section#product1 {
        font-size: 25px;
    }
    section#banner h1 {
        font-size: 35px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    #banner{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-image: url("../img/banner/b2.jpg");
        width: 100%;
        height: 30vh;
        background-size: cover;
        color: white;
        font-weight: 600;
    }
    #banner h1 span{
        color: red;
    }
    #banner .normal:hover{
        background-color: #088;
        color: white;
    }
    #sm-banner{
        display: flex;
        justify-content: space-between;

    }
    #sm-banner .banner-box{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        background-image: url("../img/banner/b17.jpg");
        min-width: 670px;
        height: 40vh;
        background-size: cover;
        font-weight: 600;
        padding: 30px;
    }

    #sm-banner .banner-box2{
        background-image: url("../img/banner/b10.jpg");
    }

    #sm-banner h4{
        color: white;
        font-size: 20px;
        font-weight: 400;
        margin-bottom: 10px;
    }
    #sm-banner h2{
        color: #088;
        font-size: 40px;
        font-weight: 700;
        margin-bottom: 10px;
    }
    #sm-banner span{
        font-size: 25px;
        font-weight: 500;
        margin-bottom: 10px;
    }
    #sm-banner .banner-box:hover button{
        background-color: #088;
        border: 1px solid white;
    }
    #banner3{
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 0 80px;
    }
    #banner3 .banner-box{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        background-image: url("../img/banner/b7.jpg");
        min-width: 30%;
        height: 30vh;
        background-size: cover;
        font-weight: 600;
        padding: 30px;
        margin-bottom: 20px;
    }
    #banner3 .banner-box2{
        background-image: url("../img/banner/b4.jpg");
    }
    #banner3 .banner-box3{
        background-image: url("../img/banner/b18.jpg");
    }
    #banner3 h2{
        color: white;
        font-size: 22px;
        font-weight: 600;
    }
    #banner3 h3{
        color: red;
        font-size: 22px;
        font-weight: 600;
    }
    #newslatter{
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        align-items: center;
        background-image: url("../img/banner/b14.png");
        background-position: 20% 30%;
        background-repeat: no-repeat;
        background-color: #041e42;
    }
    #newslatter .form{
        display: flex;
        width: 40%;
    }
    #newslatter h4{
        font-size: 22px;
        font-weight: 600;
        color: #fff;
    }
    #newslatter p{
        font-size: 18px;
        font-weight: 500;
        color: #088;
        margin-top: 10px;
    }
    #newslatter span{
        color: yellow;
    }
    #newslatter input{
        height: 3.125rem;
        padding: 0 1.25em;
        font-size: 14px;
        width: 100%;
        border: 1px solid transparent;
        border-radius: 4px;
        outline: none;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    #newslatter button{
        background-color: #088;
        color: #fff;
        white-space: nowrap;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }



    footer{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        background: #e3e6f3;
    }
    footer .col{
        display: flex;
       flex-direction: column;
       align-items: flex-start;
       margin-bottom: 20px;
    }
    footer .logo{
        margin-bottom: 20px;
    }
    footer h4{
        padding-bottom: 10px;
        font-size: 14px;
    }
    footer p{
        font-size: 15px;
        margin: 0 0 8px 0;
    }
    footer a{
        font-size: 15px;
        margin: 0 0 8px 0;
        text-decoration: none;
        color: #041e42;
        margin-bottom: 10px;
    }

    footer .follow{
       margin-top: 20px;
    }
    footer .follow i{
        margin-right: 15px;
        font-size: 20px;
     }

    footer .copyright{
        text-align: center;
        width: 100%;
    }


    /* Start media Query im Ipad */
    @media (max-width:799px) {
        #navbar{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            position: fixed;
            top: 0;
            right: -300px;
            height: 100vh;
            width: 300px;
            padding: 80px 0px 0px 10px;
            background-color: white;
        }

        #navbar.active{
            right: 0px;
        }

        #mobile{
            display: flex;
            align-items: center;

        }
        #mobile i{
            color: #041e42;
            font-size: 24px;
            padding-left: 20px;
        }
    }



/* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #333;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender {
  column-gap: 5px;
}
.gender input {
  accent-color: rgb(130, 106, 251);
}
.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
}
.form button:hover {
  background: rgb(88, 56, 250);
}
/*Responsive*/
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}





.row {
  display: flex;
  flex-wrap: wrap;
}
.column {
  width: 100%;
  padding: 0 1em 1em 1em;
  text-align: center;
}
.card {
  width: 100%;
  height: 100%;
  padding: 2em 1.5em;
  background: linear-gradient(#ffffff 50%, #2c7bfe 50%);
  background-size: 100% 200%;
  background-position: 0 2.5%;
  border-radius: 5px;
  box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  transition: 0.5s;
}
h3 {
  font-size: 20px;
  font-weight: 600;
  color: #1f194c;
  margin: 1em 0;
}
p {
  color: #575a7b;
  font-size: 15px;
  line-height: 1.6;
  letter-spacing: 0.03em;
}
.icon-wrapper {
  background-color: #2c7bfe;
  position: relative;
  margin: auto;
  font-size: 30px;
  height: 2.5em;
  width: 2.5em;
  color: #ffffff;
  border-radius: 50%;
  display: grid;
  place-items: center;
  transition: 0.5s;
}
.card:hover {
  background-position: 0 100%;
}
.card:hover .icon-wrapper {
  background-color: #ffffff;
  color: #2c7bfe;
}
.card:hover h3 {
  color: #ffffff;
}
.card:hover p {
  color: #f0f0f0;
}
@media screen and (min-width: 768px) {
  section {
    padding: 0 2em;
  }
  .column {
    flex: 0 50%;
    max-width: 50%;
  }
}
@media screen and (min-width: 992px) {
  section {
    padding: 1em 3em;
  }
  .column {
    flex: 0 0 33.33%;
    max-width: 33.33%;
  }
}










    </style>
</head>
<body>
<div class="container-fluid">
    @include('layout.header')

    @yield('main_content')

    @include('layout.footer')
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>
