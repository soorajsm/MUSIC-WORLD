<?php

include "connect.php";
$aid = $_GET['aid'];
$aname=$_GET['name'];
$atype=$_GET['type'];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST["name"];
    $type = $_POST["type"];
    $image = $_POST["image"];


    $sql = "UPDATE `album` SET `ALNAME` = '$name', `ALTYPE` = '$type', `ALIMAGE` = '$image' WHERE `album`.`ALID` =$aid ;" ;
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Reacord Updated')</script>";
        ?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL = ./albumInsert.php">
<?php
    } 
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="admin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="album.css?v=<?php echo time(); ?>">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>   
* {
        box-sizing: border-box;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        line-height: 1.6;
        margin: 0;
        min-height: 100vh;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }


    h2,
    h3,
    a {
        color: #34495e;
        color: white;
    }

    a {
        text-decoration: none;
    }



    .logo {
        margin: 0;
        font-size: 1.45em;
    }

    .main-nav {
        margin-top: 5px;

    }

    .logo a,
    .main-nav a {
        padding: 10px 15px;
        text-transform: uppercase;
        text-align: center;
        display: block;
    }

    .main-nav a {
        color: #34495e;
        color: white;
        font-size: .99em;
    }

    .main-nav a:hover {
        color: #718daa;
    }



    .header {


        padding-top: .5em;
        padding-bottom: .5em;
        border: 1px solid #a2a2a2;
        background-color: #f4f4f4;
        background-color: black;
        -webkit-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        color: white;
    }



    @media (min-width: 769px) {

        .header,
        .main-nav {
            display: flex;
        }

        .header {
            flex-direction: column;
            align-items: center;

            .header {
                width: 80%;
                margin: 0 auto;
                max-width: 1150px;
            }
        }

    }

    @media (min-width: 1025px) {
        .header {
            flex-direction: row;
            justify-content: space-between;
        }

    }


    .form {
        background-color: #F6F9FE;
        border-radius: 20px;
        box-sizing: border-box;
        height: 550px;
        padding: 20px;
        width: 420px;
    }

    .title {
        color: #eee;
        font-family: sans-serif;
        font-size: 36px;
        font-weight: 600;
        margin-top: 30px;
    }

    .subtitle {
        color: black;
        font-family: sans-serif;
        font-size: 16px;
        font-weight: 600;
        margin-top: 10px;
    }

    .input-container {
        height: 50px;
        position: relative;
        width: 100%;
    }

    .ic1 {
        margin-top: 40px;
    }

    .ic2 {
        margin-top: 30px;
    }

    .input {
        background-color:silver;
        border-radius: 12px;
        border: none;
        box-sizing: border-box;
        color: black;
        font-size: 18px;
        height: 100%;
        outline: 0;
        padding: 4px 20px 0;
        width: 100%;
    }

    .cut {
        background-color:#F6F9FE;
        border-radius: 10px;
        height: 20px;
        left: 20px;
        position: absolute;
        top: -20px;
        transform: translateY(0);
        transition: transform 200ms;
        width: 76px;
    }

    .cut-short {
        width: 50px;
    }

    .input:focus~.cut,
    .input:not(:placeholder-shown)~.cut {
        transform: translateY(8px);
    }

    .placeholder {
        color: #65657b;
        font-family: sans-serif;
        left: 20px;
        line-height: 14px;
        pointer-events: none;
        position: absolute;
        transform-origin: 0 50%;
        transition: transform 200ms, color 200ms;
        top: 20px;
    }

    .input:focus~.placeholder,
    .input:not(:placeholder-shown)~.placeholder {
        transform: translateY(-30px) translateX(10px) scale(0.75);
    }

    .input:not(:placeholder-shown)~.placeholder {
        color: #808097;
    }

    .input:focus~.placeholder {
        color: black;
    }

    .submit {
        background-color: #85FFBD;
    background-image: linear-gradient(80deg, #85FFBD 0%, #FFFB7D 120%);
        border-radius: 12px;
        border: 0;
        box-sizing: border-box;
        color: black;
        cursor: pointer;
        font-size: 18px;
        height: 50px;
        margin-top: 38px;
        // outline: 0;
        text-align: center;
        width: 100%;
        appearance: none;
    background-color: #fff;
    box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px, rgba(0, 0, 0, .14) 0 6px 10px 0, rgba(0, 0, 0, .12) 0 1px 18px 0;
    transition: box-shadow 280ms cubic-bezier(.4, 0, .2, 1), opacity 15ms linear 30ms, transform 270ms cubic-bezier(0, 0, .2, 1) 0ms;
    box-sizing: border-box;
    color: #3c4043;
    border-radius: 24px;
    }

    .submit:active {
        background-color: #06b;
    }

    .left {
        margin-top: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50%;
    }
    </style>
</head>

<body>
    <div style="width: 100%;" class="left">
        <div style="height:440px;" class="form">
            <form action="" method="POST">
                <div class="input-container ic1">
                    <input type="text" class="input" value="<?=$aname?>" id="name" name="name" placeholder=" " />
                    <div class="cut"></div>
                    <label class="placeholder" for="title">Name</label>
                </div>
                <div class="input-container ic2">
                    <input type="text" class="input" value="<?=$atype?>" id="type" name="type" placeholder=" " />
                    <div class="cut"></div>
                    <label class="placeholder" for="title">Type</label>
                </div>
                <div class="input-container ic2">
                        <input type="file" class="submit" id="image" name="image" placeholder=" " />
                        <label class="placeholder" for="title">Image File</label>
                    </div>
                <button style="margin-top:70px;" class="submit" type="submit">Update song</button>
            </form>
        </div>
    </div>
</body>

</html>