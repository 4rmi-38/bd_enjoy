

/**/
/**/
/*"Rubik",sans-serif;*/

<?php
header('content-type:text/css');
?>

body {
    background: rgb(142 109 193);
    /* #17181c */
    margin: 0;
    background-attachment: fixed;
    background-size: 100%;
    font-style: normal;
    display: block;
}
svg{
    width: 25px;
    height: 25px;
    object-fit: cover;
    display: inline;
}
.load,
.load * {
    transition: none !important;
}
.p{
    color: white;
    margin: 0 0 0 20%;
    font-size: 2em;
    padding-top: 1%;
}
.rasmer{
    width: 100%;
    height: 100%;
}
.dobav{
    margin: 0 25% 25% 25%;
    padding: 1%;
    text-align: center;
}
.glavnay{
    font-size: 1.3em;
    cursor: pointer;
    font-family:SF,-apple-system,BlinkMacSystemFont,sans-serif;
}
.glavnay:hover{
    text-shadow: -2px 4px 7px  #af1baf;
}
.p0 {
    width:100%;
    height: 100%;
    margin: 0 auto;
}
.p1 {
    /*width: 16%;*/
    /*height: 100%;*/
     text-align: center;
    float: left;
    /* padding: 10px; */
    display: flex;
    position: unset;
    justify-content: center;
    margin: auto;
}
main{
    display: flex;
    width: 100%;
    margin: 0 auto;
    flex-wrap: nowrap;
    flex-direction: row-reverse;
    /*padding: 3%;*/
}
section{
    width: 75%;
}

.lg2 {
    display: block;
}
.st {
    margin: auto;
    width: 80%;

    border-radius: 10px;
    background: rgb(179 14 233 / 47%);
    position: relative;
}
.st1 {
    margin: auto;
    width: 100%;
    border-radius: 10px;
    background: rgb(179 14 233 / 47%);
    color: #ffffff;
    font-size: 25px;
    font-family:SF,-apple-system,BlinkMacSystemFont,sans-serif;
    cursor: pointer;
    transition: 0.3s;
}
.st1:hover{
    background: white;
    color: rgb(136, 10, 178);
}
.st11 {
    margin: auto;
    width: 50%;
    background:rgb(73 37 100);
    color: #ffffff;
    font-size: 1.3em;
    border-radius: 30px;
    font-family:SF,-apple-system,BlinkMacSystemFont,sans-serif;
}
.st11:hover{
    background: rgb(239, 239, 239);
    color: rgb(179 14 233 );
    transition: 0.2s ease;
}
.st13 {
    margin: auto;
    width: 10%;
    background:rgb(73 37 100);
    color: #ffffff;
    font-size: 1.3em;
    border-radius: 30px;
    font-family:SF,-apple-system,BlinkMacSystemFont,sans-serif;
}
.st13:hover{
    background: rgb(239, 239, 239);
    color: rgb(179 14 233 );
    transition: 0.2s ease;
}
.st{
    margin: auto;
    width: 10%;
    background:rgb(73 37 100);
    color: #ffffff;
    font-size: 1.3em;
    border-radius: 30px;
    font-family:SF,-apple-system,BlinkMacSystemFont,sans-serif;
}
.st:hover{
    background: rgb(239, 239, 239);
    color: rgb(179 14 233 );
    transition: 0.2s ease;
}
.st12 {
    margin: auto;
    width: 50%;
    background:rgb(73 37 100);
    color: #ffffff;
    font-size: 1.3em;
    border-radius: 30px;
    font-family:SF,-apple-system,BlinkMacSystemFont,sans-serif;
}
.st12:hover{
    background: rgb(239, 239, 239);
    color: rgb(179 14 233 );
    transition: 0.2s ease;
}
.oplata{
    padding-top: 2%;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-content: flex-start;
    align-items: flex-start;
}
.opl{
    width: 180px;
    height: 40px;
}
.opl2{
    width: 100px;
    height: 40px;
}
.bl {
    margin: -2% -2% 0 0 ;
    width: 100%;
    height: 100%;
    border-radius: 10px;
}

.p2 {
    margin: 0 1% 1% 1%;
    height: 45px;
    width: 84%;
    float:right;
    padding: 5px;
    border-radius: 10px;
    background: rgb(179 14 233 / 47%);
    text-align:center;
    font-size: 27px;
}
.displayGrid{

}
.form2{
    width: 45%;
    float: right;
    display: flex;
    flex-direction: row;
    margin: 0 20%;
    border: none;
}
.inputText{
    width: 90%;
    border-radius: 30px;
    background: rgb(73 37 100);
    color: rgba(255, 255, 255, 0.82);
    border: none;
    font-family: SF,-apple-system,BlinkMacSystemFont,sans-serif;
    box-shadow: 0 0 23px #ef00ff;

}
div.hide{
    display: none;
}
.post {
    display: flex;
    flex-direction: column;
}
.post1{

}
.submitForm{
    width: 10%;
    border-radius: 30px;
    background: rgb(73 37 100);
    color: white;
    border: none;
    font-family: SF,-apple-system,BlinkMacSystemFont,sans-serif;
}
.vmeste {
    width: 84%;
    height: 100%;
    display: inline-block;
    float: right;

}
.p3 {
    width: 100%;
    /*margin: auto;*/
    /*position: relative;*/
    /*lft: 10%;*/

    /*text-align: center;*/
    /*float: left;*/
    /*padding-bottom: 3%;*/
    /*border-radius: 10px;*/
    /*font-size: 27px;*/
    /*display: flex;*/
    /*justify-content: space-around;*/
    /*background: rgba(0, 0, 0, 0.52)*/
}

.p4 {
    margin: auto;
    height: 30%;
    /*position: relative;*/
    left: 10%;
    width: 100%;
    text-align: center;
    float: left;
    padding: 3% 0;
    /*border-radius: 10px;*/
    font-size: 27px;
    display: flex;
    justify-content: space-around;
    /*background: rgba(0, 0, 0, 0.52)*/
}
.p5 {
    margin: auto;
    height: 30%;
    /*position: relative;*/
    left: 10%;
    width: 100%;
    text-align: center;
    float: left;
    padding: 3% 0;
    /*border-radius: 10px;*/
    font-size: 27px;
    display: flex;
    justify-content: space-around;
    /*background: rgba(0, 0, 0, 0.52)*/
}
* {box-sizing: border-box;}
.form1 {
    position: relative;
    width: 100px;
    margin: 0 auto;
}
input, button {
    border: none;
    outline: none;
    border-radius: 3px;
}
input {
    width: 80%;
    margin-bottom: 18px;
    padding: 2%;
    background: white;
    /*border: 1px solid #ffffff;*/

}
.submit1{
    width: 45%;
    font-size: 1em;
    cursor: pointer;
    background: rgb(107, 60, 141);
border-radius: 20px;
    color: #ffffff;
}
.submit1:hover{
    background: #6b3c8d;
    color: white;
    /*text-shadow: -2px 4px 6px #ff1aff;*/
    border: 1px solid rgb(185, 28, 185);
    box-shadow: 0 0 15px #b21bb2;
}
.block {
    position: absolute;
    width: 45%;
    height: 40%;
    background: rgb(73 37 100);
    float: right;
    padding: 1%;
    margin: 0 25% 0 37%;
    text-align: center;
    border-radius: 30px;


}
.block1 {
    position: absolute;
    width: 45%;
    height: 35%;
    background: rgb(73 37 100);
    float: right;
    border-radius: 30px;
    padding: 1%;
    margin: 0 25% 0 37%;
    text-align: center;


}
.a1{
    color: white;
    text-decoration: none;
    display: flex;
    justify-content: center;
    font-size: 2em;
}
button {
    background: rgb(179 14 233 / 47%);
    cursor: pointer;
}
.img{
    width: 100%;
    /*height: 280px;*/
}
.f1 {
    /* margin: auto; */

    width: 23%;
    /*height: 300px;*/
    text-align: center;
    display: inline-block;
    float: left;
     padding: 7px;
    /* border-radius: 10px; */
    /* box-shadow: 10px 10px 10px 10px white;*/
    /* position: relative; */
    color: white;
    /* text-shadow: 0 3px 20px rgb(0 0 0 / 98%); */
    transition: transform .2s;
}
.f1:hover {
    transform: scale(1.07);
    z-index: 1;

}
form{
    display: flex;
    flex-direction: column;
    align-items: center;
}
/*.f2 {*/
/*    margin: 0 1% 1% 1%;*/
/*    height: 227px;*/
/*    width: 18%;*/
/*    text-align: center;*/
/*    float: left;*/
/*    padding: 2px;*/
/*    border-radius: 10px;*/
/*    box-shadow: 0 70px 10px rgba(0, 0, 0, 0.9);*/
/*    position: relative;*/
/*    color: white;*/
/*    text-shadow:0 3px 20px rgba(0, 0, 0, 0.98);*/
/*    transition: transform .5s;*/
/*}*/
/*.f2:hover {*/
/*    transform: scale(1.3);*/
/*    z-index: 1;*/
/*    color: white;*/
/*}*/
/*.f3 {*/
/*    margin: 0 1% 1% 1%;*/
/*    height: 227px;*/
/*    width: 18%;*/
/*    text-align: center;*/
/*    float: left;*/
/*    padding: 2px;*/
/*    border-radius: 10px;*/
/*    box-shadow: 0 70px 10px rgba(0, 0, 0, 0.9);*/
/*    position: relative;*/
/*    color: white;*/
/*    text-shadow:0 3px 20px rgba(0, 0, 0, 0.98);*/
/*    transition: transform .5s;*/
/*}*/
/*.f3:hover {*/
/*    transform: scale(1.3);*/
/*    z-index: 1;*/
/*    color: white;*/
/*}*/
/*.f4 {*/
/*    margin: 0 1% 1% 1%;*/
/*    height: 227px;*/
/*    width: 18%;*/
/*    text-align: center;*/
/*    float: left;*/
/*    padding: 2px;*/
/*    border-radius: 10px;*/
/*    box-shadow: 0 70px 10px rgba(0, 0, 0, 0.9);*/
/*    position: relative;*/
/*    color: white;*/
/*    text-shadow:0 3px 20px rgba(0, 0, 0, 0.98);*/
/*    transition: transform .5s;*/
/*}*/
/*.f4:hover {*/
/*    transform: scale(1.3);*/
/*    z-index: 1;*/
/*    color: white;*/
/*}*/
/*.f5 {*/
/*    margin: 0 1% 1% 1%;*/
/*    height: 227px;*/
/*    width: 18%;*/
/*    text-align: center;*/
/*    float: left;*/
/*    padding: 2px;*/
/*    border-radius: 10px;*/
/*    box-shadow: 0 70px 10px rgba(0, 0, 0, 0.9);*/
/*    position: relative;*/
/*    color: white;*/
/*    text-shadow:0 3px 20px rgba(0, 0, 0, 0.98);*/
/*    transition: transform .5s;*/

/*}*/
/*.f5:hover {*/
/*    transform: scale(1.3);*/
/*    z-index: 1;*/
/*    color: white;*/
/*}*/
p {
    margin-top: -10px;
    font-size: 20px;
    font-family: SF,-apple-system,BlinkMacSystemFont,sans-serif;

}
.main li button{
    margin: 10% 0 0 -55%;
    text-align: left;
    font-size: 19px;
    color:white;
    width: 127px;
    height: 40px;
    display:inline-block;
    position:relative;
    font-family: SF,-apple-system,BlinkMacSystemFont,sans-serif;
    box-shadow: 0 15px 20px rgba(0, 0, 0, 0.99);
}
.main li button:hover {
    background: black;
}
.main li button:active {
    background: black;
}
.l {
    list-style-type: none;
    color: white;

}
.g {
    margin:5% 1% 1% 1%;
    height: 40px;
    width: 98%;
    text-align:left;
    float:left;
    border-radius: 80px;
    color: white;
    text-shadow: 0 15px 10px rgba(0,0,0, 0.9);
    font-size: 50px;
}
#side-checkbox {
    display: none;
}
.side-panel {
    position: fixed;
    z-index: 999999;
    top: 0;
    background: rgb(73 37 100);
    transition: all 0.6s;
    width: 17%;
    height: 100%;

    color: #FFF;
    padding: 1% 1%;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.side-title {
    font-size: 20px;
    padding-bottom: 8px;
    margin-bottom: 10px;
    border-bottom: 2px solid #BFE2FF;
    font-family: SF,-apple-system,BlinkMacSystemFont,sans-serif;
}
/* Оформление кнопки на странице */
.side-button-1-wr {
    text-align: center; /* Контейнер для кнопки, чтобы было удобнее ее разместить */
    min-width: 20vh;
}
.side-button-1 .side-b {
   text-align: center;
    text-decoration: none;
    font-size: 175%;
    color: #FFF;
    position: absolute;
    text-transform: uppercase;
    font-family:SF,-apple-system,BlinkMacSystemFont,sans-serif;
    background: rgb(73 37 100);
    /*box-shadow: -8px 8px 14px -2px #af1baf;*/
    text-shadow: -4px 3px 5px #f13bf1;
    cursor: pointer;
    margin: auto;
    box-sizing: border-box;
    width: 15%;
    padding: 1%;
    /*transition: transform .4s;*/
    /*box-shadow: 10px 0 20px rgba(0,0,0,0.9);*/
}
.side-button-1 .side-b :hover,
.side-button-1 .side-b:active,
.side-button-1 .side-b:focus {
    /*color: #FFF;*/
}
.side-button-1 .side-b:after,
.side-button-1 .side-b:before {
    position: absolute;
    height: 4px;
    left: 50%;
    bottom: -6px;
    content: "";
    transition: all 280ms ease-in-out;
    width: 0;
}
/*.side-button-1 .side-open:after,*/
/*.side-button-1 .side-open:before {*/
/*    background: rgb(179 14 233 / 47%);*/
/*}*/
/*.side-button-1 .side-close:after,*/
/*.side-button-1 .side-close:before {*/
/*    background: rgb(179 14 233 / 47%);*/
/*}*/
.side-button-1 .side-b:before {
    top: -6px;
}
.side-button-1 .side-b:hover:after,
.side-button-1 .side-b:hover:before {
    width: 100%;
    left: 0;
}
/* Переключатели кнопки 1 */
.side-button-1 .side-close {
    display: none;
}
/*#side-checkbox:checked + .side-panel + .side-button-1-wr .side-button-1 .side-open {*/
/*    display: none;*/
/*}*/
#side-checkbox:checked + .side-panel + .side-button-1-wr .side-button-1 .side-close {
    display: block;
}
#side-checkbox:checked + .side-panel {
    left: 0;
}
/* Оформление кнопки на панеле */
.side-button-2 {
    font-size: 200%;
    border-radius: 20px;
    position: absolute;
    z-index: 1;
    top: 8px;
    right: 8px;
    cursor: pointer;
    transform: rotate(45deg);
    color: rgba(255, 255, 255, 0.66);
    transition: all 280ms ease-in-out;
}
.side-button-2:hover {
    transform: rotate(45deg) scale(1.1);
    color: #FFF;
}
.reg {
    width: 100%;
    height: 5%;
    border-radius: 10px;
    color: white;
    position: relative;
    font-family:SF,-apple-system,BlinkMacSystemFont,sans-serif;
    font-size: 20px;
    padding-top: 2%;
}
.fh {
    width: 100%;
    height: 5%;
    border-radius: 10px;
    color: white;
    position: relative;
    font-family: SF,-apple-system,BlinkMacSystemFont,sans-serif;
    font-size: 20px;
}
.op {
    width: 99%;
    height: 5%;
    position: relative;
    font-size: 20px;
    font-family: SF,-apple-system,BlinkMacSystemFont,sans-serif;
    color: #000000;
    display: flex;
    align-items: center;
    padding: 1%;

}
.po1 {
    font-family: SF,-apple-system,BlinkMacSystemFont,sans-serif;
    width: 40%;
    height: 70px;
    position: relative;
    margin:65px 57% -142px 0;
    text-align: left;
    /*text-shadow: 0 5px 2px rgba(0,0,0, 0.9);*/
    float: right;
    padding: 5px;
    color: rgb(0, 0, 0);
    font-size: 20px;
}
/*li {*/
/*    padding: 6%;*/
/*    text-decoration:none;*/
/*    text-align: left;*/
/*    font-family: SF,-apple-system,BlinkMacSystemFont,sans-serif;*/
/*    font-size: 1.5em;*/
/*    text-shadow: -3px 2px 6px #dc00ff;*/
/*    list-style: none;*/
/*    cursor: pointer;*/
/* }*/
.menu{
    font-family: SF,-apple-system,BlinkMacSystemFont,sans-serif;
    display: flex;
    width: 100%;
}
.menu *{
    margin: 0;
    padding: 3%;
}
.menu ul,
.menu ol{
list-style: none;
}
.menu > ul{
    display: flex;
    flex-direction: column;
}
.menu > ul li a{
    display: block;
    /*font-family:SF,-apple-system,BlinkMacSystemFont,sans-serif;*/
    font-size: 1.1em;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;

}
.menu  .ul li{
    position: relative;
}
.menu li a:hover{
    cursor: pointer;
    text-shadow: -2px 4px 6px #ff1aff;
    transition: 0.2s ease;
}
/*Sub menu*/
.menu li ul{
    position: absolute;
    width: 100%;
    margin: -14% 25%;
    background: rgb(100, 56, 134);
    z-index: 1;
    border-radius: 15px;
    opacity: 0;
    transition: 0.2s;
    pointer-events: none;
}
.menu li > ul li{
    /*border-bottom: 1px solid rgba(255, 255, 255, 0.91);*/
    /*background: rgb(126, 60, 180);*/
    display: flex;
    flex-direction: row;
    justify-content: center;

}
.menu li > ul li:hover{
    background:rgb(126, 61, 179);
    border-bottom: none;
    transition: 0.2s;
}

.menu li > ul a{
    padding: 10px;
}
/*.menu li > ul a:hover{*/
/*    color: #131313;*/
/*}*/
.menu li:hover > ul{
    pointer-events: all;
    opacity: 1;
    /* transition: 0.2s ; */
}
li{
    width: 100%;
}
/*.menu > ul li> a i.fa{*/
/*    position: absolute;*/
/*}*/
.podpisi {
    font-size: 1.2em ;
    margin: 0;
    color: white;
    font-family:SF,-apple-system,BlinkMacSystemFont,sans-serif;
    /* background: rgba(0, 0, 0, 0.71); */

}
a{
    text-decoration: none;
    text-shadow: #af1baf;
    color: white;
}
@media screen and (max-width: 1359px) {
    .f1 {
        width: 25%;
        text-align: left;
        float: left;
        display: inline-block;
        color: white;
        transition: 0.3s;

    }

    .side-panel {
        position: fixed;
        z-index: 999999;
        top: 0;
        background: rgb(73 37 100);
        transition: all 0.6s;
        width: 18%;
        height: 100%;
        color: #FFF;
        padding: 1% 1%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .main {
        display: flex;
        width: 100%;
        margin: 0 4%;
        /*flex-wrap: nowrap;*/
        /*flex-direction: row-reverse;*/
        /*list-style: none;*/
    }

    .main li ul {
        position: absolute;
    }

    .block {
        position: absolute;
        width: 45%;
        height: 35%;
        background: rgb(73 37 100);
        float: right;
        padding: 1%;
        margin: 0 25% 0 40%;
        text-align: center;
    }
    .form2 {
        width: 45%;
        float: right;
        display: flex;
        flex-direction: row;
        margin: 0 15%;
        border: none;
        transition: 0.3s;
    }

    .block1 {
        position: absolute;
        width: 45%;
        height: 32%;
        background: rgb(73 37 100);
        float: right;
        padding: 1%;
        border-radius: 30px;
        margin: 0 25% 0 40%;
        text-align: center;
    }
    .podpisi {
        font-size: 1.3em ;
        padding: 0.2em 0.7em;
        margin: 0;
        color: white;
        font-family:SF,-apple-system,BlinkMacSystemFont,sans-serif;
    }
    .st11 {
        margin: auto;
        width: 50%;
        background:rgb(73 37 100);
        color: #ffffff;
        font-size: 1.1em;
        border-radius: 30px;
        font-family:SF,-apple-system,BlinkMacSystemFont,sans-serif;
    }

}
    @media screen and (max-width: 1159px) {

        .f1 {
            width: 33%;
            text-align: left;
            display: inline-block;
            float: left;
            color: white;
            transition: 0.3s;

        }
        .podpisi {
            font-size: 1.3em ;
            padding: 0.2em 0.7em;
            margin: 0;
            color: white;
            font-family:SF,-apple-system,BlinkMacSystemFont,sans-serif;
        }
        .st11 {
            margin: auto;
            width: 50%;
            background:rgb(73 37 100);
            color: #ffffff;
            font-size: 1em;
            border-radius: 30px;
            font-family:SF,-apple-system,BlinkMacSystemFont,sans-serif;
        }
        .form2 {
            width: 45%;
            float: right;
            display: flex;
            flex-direction: row;
            margin: 0 13%;
            border: none;
        }

        .block {
            position: absolute;
            width: 45%;
            height: 30%;
            background: rgb(73 37 100);
            float: right;
            padding: 1%;
            margin: 0 25% 0 45%;
            text-align: center;
        }

        .block1 {
            position: absolute;
            width: 45%;
            height: 28%;
            background: rgb(73 37 100);
            float: right;
            border-radius: 30px;
            padding: 1%;
            margin: 0 25% 0 45%;
            text-align: center;
        }

        .side-panel {
            position: fixed;
            z-index: 999999;
            top: 0;
            background: rgb(73 37 100);
            transition: 0.5s;
            width: 24%;
            height: 100%;
            color: #FFF;
            padding: 1% 1%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        main {
            display: flex;
            width: 100%;
            margin: 0 auto;
            flex-wrap: nowrap;
            flex-direction: row-reverse;
        }
        .menu li ul {
            position: absolute;
            width: 110%;
            margin: -14% 30%;
            /* background: rgb(100, 56, 134); */
            z-index: 1;
            /* opacity: 0; */
            transition: 0.2s;
            pointer-events: none;
        }

        section {
            width: 69%;
        }
    }
    @media screen and (max-width: 960px) {
        .submit1{
            width: 49%;
            font-size: 1em;
            cursor: pointer;
            background: rgb(73 37 100);
            border-radius: 20px;
            color: #ffffff;
        }
    }
    @media only screen and (max-width: 960px) {

        .f1 {
            width: 50%;
            text-align: left;
            display: inline-block;
            float: left;
            color: white;
            transition: 0.3s;
        }

        .side-panel {
            position: fixed;
            z-index: 999999;
            top: 0;
            background: rgb(73 37 100);
            transition: 0.5s;
            width: 28%;
            height: 100%;
            color: #FFF;
            padding: 1% 1%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        main {
            display: flex;
            width: 100%;
            margin: 0 auto;
            flex-wrap: nowrap;
            flex-direction: row-reverse;
        }

        section {
            width: 65%;
        }
    }
	

