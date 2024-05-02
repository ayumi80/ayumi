<?php
require "data.php";
$nama = "Jakic";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <style>
        :root{
    --bgcolor:#beb8ac;
    --blue:#2fb7fe;
    --black:#3D3F42;
    --white:#f4f7ff;
    --gray:#d8dce4;
    --lightgray:#8e9095;
}
*{
    margin: 1px;
    padding: 1px;
    box-sizing: border-box;
    font-family: monospace;
}
body{
    background: var(--bgcolor);
}
.clearfix{
    clear: both;
}
.resume-box{
    width: 800px;
    height: 1000px;
    margin: 100px auto;
    background: var(--white);
    box-shadow: 5px 21px 20px #3D3F4238;
}
.left-section{
    background: var(--black);
    width: 250px;
    height: 1000px;
    float: left;
}
.profile{
    overflow: hidden;
    position: relative;
}
.blue-box{
    width: 257px;
    height: 407px;
    background: var(--blue);
    margin-left: -100px;
    transform: rotateZ(48deg);
    margin-top: -178px;

}
.profile-img{
    position: absolute;
    z-index: 9;
    width: 120px;
    height: 120px;
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    border-radius: 50%;
    border: 3px solid var(--gray);
}
.nama{
    color: var(--gray);
    text-align: center;
    margin-top: -34px;
    font-size: 30px;
    letter-spacing: 2px;
    font-weight: 400;
    text-transform: uppercase;
}
.info{
    margin-top: 50px;
}
.heading{
    width: 180px;
    margin: 0 auto;
    
    padding: 2%;
    border-bottom: 1px solid var(--gray);
    border-top: 1px solid var(--gray);
    color: var(--gray);
    margin-top: 11px;
    text-transform: uppercase;
    font-size: 18px;

}
.p1{
    color: var(--gray);
    width: 184px;
    margin: 0 auto;
    margin-top: 25px;
    font-size: 15px;
    line-height: 14px;
}
.p1 span{
    font-size: 12px;
}
.right-section{
    padding: 40px 30px;
    background: var(--white);
    width: 68%;
    float: left;
    height: 1000px;
}
.p2{
    margin: 0 auto;
    padding: 2px;
    border-bottom: 1px solid var(--lightgray);
    border-top: 1px solid var(--lightgray);
    color: var(--black);
    text-transform: uppercase;
    font-size: 18px;
    font-weight: bolder;
    margin-left: 50px;
    line-height: 18px;
}
.p3{
    margin-top: 20px;
    color: var(--lightgray);
    text-align: justify;
    word-spacing: -4px;
}
.left{
    width: 25%;
    float: left;

}
.right{
    width: 75%;
    float: left;
}
.lr-box{
    margin-top: 20px;
    margin-bottom: 20px;

}
.p4{
    font-size: 14px;
    font-weight: 600;
}
.p5{
    font-size: 12px;
    color: var(--lightgray);

}
.s-box{
    width: 50%;
    float: left;
    padding: 20px 20px 20px 0px;
}
#progress{
    background: #333;
    border-radius: 13px;
    height: 8px;
    width: 100%;
}
#progress:after{
    content: '';
    display: block;
    background: var(--blue);
    width: 50%;
    height: 100%;
    border-radius: 9px;
    
}

    </style>
    
</head>
<body>
    <div class="resume-box">

        <div class="left-section">
            <div class="profile">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2rCjfynX1tl9NMu--kK7HqtnkHVpbRMTK5rHIYwFtHw&s" class="profile-img">
                <div class="blue-box"></div>
            </div>
            <h2 class="nama">Ni Nyoman Ayumi Widiyani</h2>

            <div class="Kontak">
                <p class="heading">Kontak</p>
                <p class="p1"><span class="span1"></span>Whatsapp<span><br>089787877878</span></span></p>
                <p class="p1"><span class="span1"></span>Email<span><br>lalayeye@gmail.com</span></span></p>
                <p class="p1"><span class="span1"></span>Instagram<span><br>@a.w</span></span></p>
            </div>
            

        </div>

        <div class="right-section">

            <div class="right-heading">
                <p class="p2">Profile</p>
            </div>
            <p class="p3">
                saya, Ni Nyoman Ayumi Widiyani, Lulusan SMK Negeri 1 Kuta Selatan dengan jurusan perhotelan. Memiliki pengetahuan dibidang perhotelan terutama di public area dan room. saat ini saya tertarik dibidang teknologi karena bisa mendapatkan uang lebih banyak. 
            </p>
            <div class="clearfix"></div>
            <br>
            <div class="right-heading">
                <p class="p2">Pengalaman Kerja</p>
            </div>
            <div class="clearfix"></div>
            <div class="lr-box">
                <div class="left">
                    <p class="p4">2022 - 2024</p>
                    <p class="p5">Esteh Indonesia</p>
                </div>
                <div class="right">
                    <p class="p4">Baristea</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <br>
            <div class="right-heading">
                <p class="p2">Pendidikan</p>
            </div>
           
            
                <?php foreach ($data as $k => $v) : ?>
                <?= ($k + 1) ?>
                <?= $v['intansi'] ?>
                <br>
                <?= $v['tahun'] ?>
                <br>
                <?= $v['status'] ?>
                <?php endforeach; ?>


        </div>
        <div class="clearfix"></div>
    </div>
</body> 
</html>
