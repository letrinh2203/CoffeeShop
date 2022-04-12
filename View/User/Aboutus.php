<?php
    $jsondata = file_get_contents("View\User\AboutUs.json");
    $json = json_decode($jsondata, true);
?>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            
           
            .container-aboutus{
            width: 1100px;
            margin: 0px auto;
            background: url(https://png.pngtree.com/background/20210715/original/pngtree-creative-coffee-color-geometric-leaf-background-picture-image_1293925.jpg);
            }
            .content{
                overflow:hidden;
            }
            .row-aboutus{
                padding:0px 20px 0px;
            }
            .nameTeam{
            text-transform: uppercase;
            text-align: center;
            font-family: tahoma; 
            font-weight: bold;
            font-size: 45px; 
            color: #fff;
            }
            h4{margin:auto; padding: 5px; color: blue; font-size: 20px;}
           
            .col-sm-4{
                padding: 30px;
                position: relative;
                background-color:rgba(255,255,255,0.7);
                /* background:#fff; */
                background-clip: content-box;
                list-style: none; 
                font-size: 18px;
                margin: 0px auto;
                text-align: center;
                border-radius: 15%;
            }
            .imagestyle{
                padding: 10;
                display: block;
                border-radius: 50%;
                width: 185px;
                height: 190px;
                margin-left: auto;
                margin-right: auto;
            }
            
            .follow-us li{ 
                display:inline-block;
                margin: 0px 5px 0px;
            }
            .fa-facebook{
                font-size:20px;
                color: blue;
            }
            .fa-instagram{
                font-size:20px;
                color: #DD2A7B ;
            }
            .fa-youtube-play{
                font-size:24px;
                color:red;
            }
        </style>
<section class="our-webcoderskull padding-lg">

    
<div class="container-aboutus">
    <div class="content">
    <h2 class="nameTeam" >ABOUT MINION</h2>
        <div class="row-aboutus">
            <?php
                $index = 1;
                foreach($json['information'] as $key => $value){
                    
                    echo "<div class=\"col-sm-4\">";
                    echo        "<img src=\"Images/{$value['imageUrl'] }\" class=\"imagestyle\">";
                    echo        '<h4 >'. $value['name'].'</h4>';
                    echo        '<li>MSSV: '.$value['mssv'].'</li>';
                    echo        '<ul class="follow-us clearfix">';
                    echo        '<li><a href=' .$value['facebook'].' > <i class="fa fa-facebook"></i></a></li>';
                    echo        '<li><a href=' .$value['instagram'].'> <i class="fa fa-instagram"></i></a></li>';
                    echo        '<li><a href=' .$value['youtube'].'> <i class="fa fa-youtube-play"></i></a></li>';
                    echo        '</ul>';
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</div>
</section>
