<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Kimerlee Holcom</title>
        <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">

        <style>
            body, html{
                margin:0;
                padding:0;
            }
            
            .header{
                height:60px;
                background:#090909;
                position:fixed;
                top:0px;
                width:100%;
                z-index: 100;
            }
            
            .site_name{
                color:#ff9528;
                float: left;
                width:40%;
            }
            
            .site_name h1{
                margin:0;
                padding:0.75%;
                font-family:'Maven Pro', sans-serif;
            }
            
            .p_logo{
                z-index: -1;
                position:fixed;
                top:60px;
                opacity:0.7;
            }
            
            .p_logo>img{
                width:100%;
            }
            .content{
                position:absolute;
                top:60px;
                overflow:hidden;
                width:100%;
            }
            .empty_area{
                height:700px;
            }
            
            .bio{
                background:#efefef;
                height:600px;
                opacity: 0.95;
            }
            
            .my_image, .my_bio{
                margin:0;
                padding:0;
                float: left;
                height:600px;
            }
            .my_image{
                width:40%;
            }
            .my_bio{
                width:60%;
                text-align: center;
                background:#ff9528;
                color:#090909;
                font-size:1.5em;
                
            }
            
            .my_image>img{
                margin:15% 20%;
            }
            
            #bio{
                width:75%;
                margin: 15% auto;
                
            }
        </style>
    </head>
    <body>
        <div class='header'>
            <div class='site_name'>
                <h1>Kimerlee Holcom</h1>
            </div>
        </div>
        <div class='content_area'>
            <div class='p_logo'>
                <img src='img/p_logo.png' alt='Rising Phoenix Web Design'>
            </div>
            <div class='content'>
                <div class='empty_area'><!-- This is an empty area --></div>
                <div class='bio'>
                    <div class='my_image'>
                        <img class='img' src='img/me.png' alt='Kimerlee Holcom'>
                    </div>
                    <div class='my_bio'>
                        <p id='bio'><strong>Hello, </strong><br/> I am Kimerlee Holcom! A little bit about me, I <strong><em>LOVE</em></strong> to code! That's right I love messing around with the chaos behind the scenes that makes what you see here come to life.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>