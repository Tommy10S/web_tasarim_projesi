﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>HELLOO</title>

    <style>


        div {
            width: 100%;
            height: 300px;
            text-align: center;
            color: black;
        }

        #üsttekidiv {
            font-family: 'Lucida Handwriting';
            background-color: cornflowerblue;
            background-size: 100% 300px;
        }

       

        .görüntülerimiz {
            float: left;
            width: 100%;
            
        }

        .görüntülerimiz1 {
            width: 33.33%;
            float: left;
        }

            .görüntülerimiz1:nth-child(1) {
                background-image: url("yenicalısma.jpg");
            }

            .görüntülerimiz1:nth-child(2) {
                background-image: url("kodfoto2.jpg");
            }

            .görüntülerimiz1:nth-child(3) {
                background-image: url("kodfoto5.jpg");
            }

        #enalttakikısım {
            clear: both;
            background-color: aqua;
            height: 330px;
            color: black;
        }

            #enalttakikısım img {
                border: 5px groove;
                border-color: darkblue;
                margin-top: 20px;
            }

            #enalttakikısım p {
                white-space: pre-line;
                text-transform: capitalize;
                font-size: 16px;
                margin: auto;
            }

       

        .formiçin {
            width: 33.33%;
            float: left;
        }

        button {
            background-color: cadetblue;
            font-family: 'Monotype Corsiva';
            font-weight: bold;
            font-size: medium;
        }

        form {
            font-weight: bold;
            font-size: medium;
        }
        @media screen and (max-width:992px) {
            .görüntülerimiz1 {
                width: 100%;
            }

            #enalttakikısım {
                margin-top: 900px;
            }

                #enalttakikısım img {
                    margin-top: 80px;
                }
            .formiçin{
                font-size:small;
            }
            button {
                font-size: small;
               margin-left:50px;
            }
        }
       
        
    </style>
</head>
<body>
    <div id="üsttekidiv">
        <h1>SİTEME HOŞGELDİNİZ!</h1>
        <div class="formiçin">
            <form action="?" method="post">
                kullanıcı adı: <input type="text" name="kullanıcıadi" id="kullanıcıadi" style="margin-left:2px"/>
                <br />
                şifre:  <input type="password" name="şifre" id="şifre" style="margin-left: 90px" />
                <br />
                <input type="submit" value="Gonder" style="margin-left:135px" />
            </form>
            <?php

            if ($_POST){
            $kullanıcıadi=$_POST['kullanıcıadi'];
            $şifre=$_POST['şifre'];
            if($kullanıcıadi==""||$şifre==""){
            echo "boş alan bırakmayınız";}
            else if($kullanıcıadi!="g181210048"||$şifre!="123"){
            echo "yanlış girdiniz";}
            else if($kullanıcıadi=="g181210048"&&$şifre=="123"){
            echo "HOŞGELDİN G181210048!";}
            }


            ?>

        </div>

        <div>

            <button onclick="window.location.href='htmlpage1.html'">HAKKIMDA</button>
            <button onclick="window.location.href='htmlpage2.html'">ÖZGEÇMİŞİM</button>
            <button onclick="window.location.href='htmlpage3.html'">TAKIMIMIZ</button>
            <button onclick="window.location.href='htmlpage4.html'">ŞEHRİM</button>
            <button onclick="window.location.href='htmlpage5.html'">İLETİŞİM SAYFASI</button>
        </div>

    </div>
    <div class="görüntülerimiz">
        <div class="görüntülerimiz1"> </div>
        <div class="görüntülerimiz1"> </div>
        <div class="görüntülerimiz1"> </div>
    </div>

    <div id="enalttakikısım">
        <img src="SAKARYAÜNİ.jpg">
        <p>
            SAKARYA ÜNİVERSİTESİ'NDEN
            SAYGILARLA..
        </p>
    </div>





    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>




</body>
</html>