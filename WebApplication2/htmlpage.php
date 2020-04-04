<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>HELLOO</title>

    <style>


        .mySlides {
            display: none;
        }
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
            height: 745px;
            

        }
        .formiçin{
            margin-left:100px;
        }
      

        @media screen and (max-width:990px) {

            #enalttakikısım {
                margin-top: 70px;
            }
            .w3-content{
               width:70%;
               
            }
            .formiçin{

            }
            .buttons{
                margin-top:30px;
                float:left;
            }
                #enalttakikısım img {
                    margin-top: 80px;
                }
        }

        .formiçin {
            width: 100%;
            float:left;

           
        }
        .w3-content{
            float:left;
            margin-left:100px;
                 
            
        }
        button {
            background-color: cadetblue;
            font-family: 'Monotype Corsiva';
            font-weight: bold;
            font-size:large;
        }

        form {
            font-weight: bold;
            font-size: small;
            float:left;
            
        }
        
    </style>
</head>
<body>
    <div id="üsttekidiv">
        <h1>SİTEME HOŞGELDİNİZ!</h1>
        <div class="formiçin">
            <form action="?" method="post">
                kullanıcı adı:<input type="text" name="kullanıcıadi" id="kullanıcıadi" />
                <br />
                şifre:  <input type="password" name="şifre" id="şifre" style="margin-left: 92px" />
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
            <div class="buttons">

                <button onclick="window.location.href='htmlpage1.html'">HAKKIMDA</button>         
                <button onclick="window.location.href='htmlpage2.html'">ÖZGEÇMİŞİM</button>
                <button onclick="window.location.href='htmlpage3.html'">TAKIMIMIZ</button>
                <button onclick="window.location.href='htmlpage4.html'">ŞEHRİM</button>
            </div>
        </div>

            <div class="w3-content w3-section" style="max-width:450px">
                <img class="mySlides" src="kodfoto5.jpg" style="width:100%" height="300">
                <img class="mySlides" src="kodfoto6.jpg" style="width:100%" height="300">
                <img class="mySlides" src="kodfoto2.jpg" style="width:100%" height="300">
            </div>

        

       
    
        <div id="enalttakikısım">
            <img src="SAKARYAÜNİ.jpg">
            <p>
                SAKARYA ÜNİVERSİTESİ'NDEN
                SAYGILARLA..
            </p>
        </div>



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