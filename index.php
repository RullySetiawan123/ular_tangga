<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Ular Tangga</title>
</head>

<style>
    body {
        background-color: rgba(0, 64, 255, 0.9);
        display: none;
    }

    #dadu_123 {
        position: absolute;
        transition-duration: 100ms;
        transition-property: transform;
        margin-left: 50px;
        margin-top: 60px;
    }

    #dadu_456 {
        position: absolute;
        transition-duration: 100ms;
        transition-property: transform;
        margin-left: 50px;
        margin-top: 60px;

    }

    #dadu2_123 {
        position: absolute;
        transition-duration: 100ms;
        transition-property: transform;

        margin-left: 140px;
        margin-top: 60px;

    }

    #dadu2_456 {
        position: absolute;
        transition-duration: 100ms;
        transition-property: transform;
        margin-left: 140px;
        margin-top: 60px;

    }

    #dadu_123_p2 {
        position: absolute;
        transition-duration: 100ms;
        transition-property: transform;
        margin-left: 50px;
        margin-top: 60px;
    }

    #dadu_456_p2 {
        position: absolute;
        transition-duration: 100ms;
        transition-property: transform;
        margin-left: 50px;
        margin-top: 60px;

    }

    #dadu2_123_p2 {
        position: absolute;
        transition-duration: 100ms;
        transition-property: transform;

        margin-left: 140px;
        margin-top: 60px;

    }

    #dadu2_456_p2 {
        position: absolute;
        transition-duration: 100ms;
        transition-property: transform;
        margin-left: 140px;
        margin-top: 60px;

    }

    #tempat_dadu {
        position: absolute;
        margin-left: 1120px;
        margin-top: -300px;
        background-color: gold;
        height: 240px;
        width: 280px;
        border-radius: 25px;
        box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 1);
    }


    #kotak_dadu {
        position: absolute;
        height: 120px;
        width: 200px;
        background-color: white;
        margin-top: 50px;
        margin-left: 45px;
        border-radius: 50px;
        box-shadow: 0px 0px 9px 3px rgba(0, 0, 0, 1);

    }

    #info_turn {
        margin-top: -50px;
        margin-left: 90px;
        position: absolute;
        display: block;
        height: 80px;
        width: 80px;
        border-radius: 360px;
        background-color: goldenrod;
        box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 1);
        padding-left: 10px;
        padding-right: 10px;
        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
    }

    .label_info {
        position: absolute;
        font-size: 20px;
        font-weight: bold;
        font-family: sans-serif;
        margin-top: 30px;
        margin-left: 3px;
        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
    }

    .label_angka {
        position: absolute;
        font-size: 35px;
        font-weight: bold;
        font-family: sans-serif;
        margin-left: 30px;
        margin-top: 20px;
        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;

    }

    #tempat_dadu_p2 {
        position: absolute;
        margin-left: 1120px;
        margin-top: -300px;
        background-color: red;
        height: 240px;
        width: 280px;
        border-radius: 25px;
        box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 1);
    }

    #info_turn_p2 {
        margin-top: -50px;
        margin-left: 90px;
        position: absolute;
        display: block;
        height: 80px;
        width: 80px;
        border-radius: 360px;
        background-color: maroon;
        box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 1);
        padding-left: 10px;
        padding-right: 10px;
        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
    }

    .label_info_p2 {
        position: absolute;
        font-size: 20px;
        font-weight: bold;
        font-family: sans-serif;
        margin-top: 30px;
        margin-left: 3px;
        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
    }

    .label_angka_p2 {
        position: absolute;
        font-size: 35px;
        font-weight: bold;
        font-family: sans-serif;
        margin-left: 30px;
        margin-top: 20px;
        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;

    }

    #kotak_dadu_p2 {
        position: absolute;
        height: 120px;
        width: 200px;
        background-color: white;
        margin-top: 50px;
        margin-left: 45px;
        border-radius: 50px;
        box-shadow: 0px 0px 9px 3px rgba(0, 0, 0, 1);

    }

    #tombol {
        position: absolute;
        bottom: 40px;
        right: 50px;
    }

    #map {
        margin-top: 70px;
        margin-left: 325px;
        width: 760px;
        height: 750px;
        background-color: rgba(153, 255, 51, 0.3);
        border-radius: 5px;
        box-shadow: 0px 0px 15px 10px rgba(0, 0, 0, 1);
        overflow: hidden;
    }

    .kotak_map {
        height: 75px;
        width: 75px;
        background-color: transparent;
        box-shadow: 0px 0px 4px 3px rgba(255, 255, 255, 0.7);

    }

    .kolom_1 {
        position: absolute;
    }

    .kolom_2 {
        position: absolute;
        margin-left: 75px;
    }

    .kolom_3 {
        position: absolute;
        margin-left: 150px;
    }

    .kolom_4 {
        position: absolute;
        margin-left: 225px;
    }

    .kolom_5 {
        position: absolute;
        margin-left: 301px;
    }

    .kolom_6 {
        position: absolute;
        margin-left: 377px;
    }

    .kolom_7 {
        position: absolute;
        margin-left: 454px;
    }

    .kolom_8 {
        position: absolute;
        margin-left: 530px;
    }

    .kolom_9 {
        position: absolute;
        margin-left: 606px;
    }

    .kolom_10 {
        position: absolute;
        margin-left: 682px;
    }

    p {
        color: black;
        text-shadow: 1px 1px white;
        font-size: 16px;
        font-weight: bold;
    }

    .kolom_1 p {
        text-align: center;
        position: absolute;
        font-family: sans-serif;
        top: 12px;
        left: 1px;

    }

    .kolom_2 p {
        text-align: center;
        position: absolute;
        font-family: sans-serif;
        top: 12px;
        left: 5px;

    }

    .kolom_3 p {
        text-align: center;
        position: absolute;
        font-family: sans-serif;
        top: 12px;
        left: 5px;
    }

    .kolom_4 p {
        text-align: center;
        position: absolute;
        font-family: sans-serif;
        top: 12px;
        left: 5px;

    }

    .kolom_5 p {
        text-align: center;
        position: absolute;
        font-family: sans-serif;
        top: 12px;
        left: 5px;

    }

    .kolom_6 p {
        text-align: center;
        position: absolute;
        font-family: sans-serif;
        top: 12px;
        left: 5px;

    }

    .kolom_7 p {
        text-align: center;
        position: absolute;
        font-family: sans-serif;
        top: 12px;
        left: 5px;

    }

    .kolom_8 p {
        text-align: center;
        position: absolute;
        font-family: sans-serif;
        top: 12px;
        left: 5px;

    }

    .kolom_9 p {
        text-align: center;
        position: absolute;
        font-family: sans-serif;
        top: 12px;
        left: 5px;

    }

    .kolom_10 p {
        text-align: center;
        position: absolute;
        font-family: sans-serif;
        top: 12px;
        left: 5px;
    }

    .tombol {
        cursor: pointer;
        margin-top: 0px;
        margin-left: -120px;
        position: absolute;
        padding: 25px 15px 25px 15px;
        border-radius: 360px;
        font-size: 17px;
        font-weight: bold;
        font-family: sans-serif;
        background-color: chartreuse;
        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
        box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.7);
        border: 1px solid white;
    }

    #ladder_1 {
        position: absolute;
        height: 220px;
        width: 100px;
        margin-left: 527px;
        margin-top: 578px;
        transform: rotate(-50deg);
        filter: drop-shadow(2px 2px 2px black);

    }

    #ladder_2 {
        position: absolute;
        height: 270px;
        width: 100px;
        margin-left: 171px;
        margin-top: 244px;
        transform: rotate(20deg);
        filter: drop-shadow(2px 2px 2px black);

    }

    #ladder_3 {
        position: absolute;
        height: 340px;
        width: 100px;
        margin-left: 612px;
        margin-top: 253px;
        transform: rotate(0deg);
        filter: drop-shadow(2px 2px 2px black);

    }

    #ladder_4 {
        position: absolute;
        height: 340px;
        width: 100px;
        margin-left: 392px;
        margin-top: -62px;
        transform: rotate(-60deg);
        filter: drop-shadow(2px 2px 2px black);


    }

    #snake_1 {
        position: absolute;
        height: 70px;
        width: 200px;
        margin-left: 549px;
        margin-top: 658px;
        transform: rotate(-40deg);
        filter: drop-shadow(1px 1px 1px black);

    }


    #snake_2 {
        position: absolute;
        height: 60px;
        width: 240px;
        margin-left: 337px;
        margin-top: 428px;
        transform: rotate(-75deg);
        filter: drop-shadow(1px 1px 1px black);
    }

    #snake_3 {
        position: absolute;
        height: 350px;
        width: 150px;
        margin-left: 37px;
        margin-top: 238px;
        transform: rotate(190deg);
        filter: drop-shadow(1px 1px 1px black);

    }

    #snake_4 {
        position: absolute;
        height: 200px;
        width: 100px;
        margin-left: 577px;
        margin-top: 83px;
        transform: rotate(200deg);
        filter: drop-shadow(1px 1px 1px black);
    }

    #jetpack {
        height: 120px;
        width: 120px;
        position: absolute;
        margin-left: -15px;
        margin-top: 610px;
        transition-duration: 1s;
        z-index: 199;
        transform: rotate(45deg);
    }

    #avatar {
        height: 90px;
        width: 60px;
        position: absolute;
        margin-left: 5px;
        margin-top: 670px;
        transition-duration: 1s;
        z-index: 109;
        filter: drop-shadow(2px 2px 2px black);
        transform: scale(1);
    }

    #avatar_jalan {
        transition-duration: 1s;
    }

    #es_p1 {
        position: absolute;
        height: 140px;
        width: 110px;
        margin-left: -20px;
        margin-top: 645px;
        z-index: 200;
        opacity: 0;
        transition-duration: 2s;
    }

    #avatar_p2 {
        height: 90px;
        width: 60px;
        position: absolute;
        margin-left: 5px;
        margin-top: 670px;
        transition-duration: 1s;
        z-index: 119;
        transform: rotate(15deg);
        filter: drop-shadow(2px 2px 2px black);
        transform: scale(1);
    }

    #avatar_jalan_p2 {
        transition-duration: 1s;
    }

    #es_p2 {
        position: absolute;
        height: 140px;
        width: 110px;
        margin-left: -20px;
        margin-top: 645px;
        z-index: 200;
        opacity: 0;
        transition-duration: 2s;
    }

    .power_up_show img {
        position: absolute;
        box-shadow: 0px 0px 16px 8px rgba(255, 255, 255, 1);
        border-radius: 360px;
        width: 60px;
        height: 60px;
    }

    #power_up_show {
        margin-left: -85px;
        margin-top: 5px;
    }

    #power_1 {
        margin-top: 5px;
        filter: drop-shadow(2px 2px 2px black);
    }

    #power_2 {
        margin-top: 82px;
        filter: drop-shadow(2px 2px 2px black);
    }

    #power_3 {
        margin-top: 158px;
        filter: drop-shadow(2px 2px 2px black);
    }

    #power_4 {
        margin-top: 234px;
        filter: drop-shadow(2px 2px 2px black);
    }

    #power_5 {
        margin-top: 310px;
        filter: drop-shadow(2px 2px 2px black);
    }

    #power_6 {
        margin-top: 386px;
        filter: drop-shadow(2px 2px 2px black);
    }

    #power_7 {
        margin-top: 458px;
        filter: drop-shadow(2px 2px 2px black);
    }

    #power_8 {
        margin-top: 532px;
        filter: drop-shadow(2px 2px 2px black);

    }

    #power_9 {
        margin-top: 608px;
        filter: drop-shadow(2px 2px 2px black);

    }

    #power_10 {
        margin-top: 684px;
        filter: drop-shadow(2px 2px 2px black);

    }

    #power_11 {
        margin-top: 684px;
        filter: drop-shadow(2px 2px 2px black);


    }

    #power_12 {
        margin-top: 684px;
        filter: drop-shadow(2px 2px 2px black);

    }

    #power_13 {

        filter: drop-shadow(2px 2px 2px black);
        margin-top: 684px;
    }



    #power_up_14,
    #power_up_15,
    #power_up_16 {
        position: absolute;
        margin-top: 684px;
    }

    #power_14,
    #power_15,
    #power_16 {
        filter: drop-shadow(2px 2px 2px black);
        margin-top: 10px;
    }

    #light_14,
    #light_15,
    #light_16 {
        position: absolute;
        background-color: transparent;
        margin-left: -13px;
        opacity: 0.5;
        height: 0;
        width: 0;
        border-left: 80px solid transparent;
        border-right: 80px solid transparent;
        border-bottom: 0px solid white;
        transform: scale(0);
        -moz-border-radius: 15%;
        -webkit-border-radius: 15%;
        border-radius: 15%;
        filter: drop-shadow(10px 10px 10px white);
        top: 50px;
    }

    #profil_tutup {
        left: 20px;
        height: 350px;
        width: 270px;
        border-radius: 20px;
        position: absolute;
        background-color: transparent;
    }

    #profil_tutup_p2 {
        left: 20px;
        margin-top: 380px;
        height: 350px;
        width: 270px;
        position: absolute;
        background-color: transparent;
        border-radius: 20px;
    }

    #konten_jumlah_putaran {
        margin-left: 1160px;
        margin-top: 10px;
        height: 50px;
        width: 200px;
        border-radius: 20px;
        position: absolute;
        background-color: rgb(255, 255, 255, 0.7);
        box-shadow: 0px 0px 10px 5px black;
    }

    #jumlah_putaran {
        margin-top: 5px;
        font-size: 30px;
        font-weight: bold;
        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
        color: black;
    }

    #profil_p1 {
        left: 20px;
        height: 350px;
        width: 270px;
        border-radius: 20px;
        position: absolute;
        background-color: rgb(0, 0, 0, 0.7);
        box-shadow: 0px 0px 10px 5px gold;
    }

    #profil_p1 img {
        position: absolute;
        width: 80px;
        height: 140px;
        margin-left: 10px;
    }

    #profil_p1 p {
        position: absolute;
        font-size: 25px;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px black;
        margin-left: 110px;
    }

    .kotak_item_p1 {
        width: 200px;
        height: 170px;
        background-color: white;
        position: absolute;
        margin-top: 160px;
        margin-left: 35px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 5px goldenrod;
        display: flex;
        flex-direction: row;
    }


    #profil_p2 {
        left: 20px;
        margin-top: 380px;
        height: 350px;
        width: 270px;
        position: absolute;
        background-color: rgb(0, 0, 0, 0.7);
        box-shadow: 0px 0px 10px 5px red;
        border-radius: 20px;

    }

    #profil_p2 img {
        position: absolute;
        width: 80px;
        height: 140px;
        margin-left: 10px;
    }

    #profil_p2 p {
        position: absolute;
        font-size: 25px;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px black;
        margin-left: 110px;
    }

    .kotak_item_p2 {
        width: 200px;
        height: 170px;
        background-color: white;
        position: absolute;
        margin-top: 160px;
        margin-left: 35px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 5px maroon;
        display: flex;
        flex-direction: row;
    }

    .slot {
        display: flex;
        flex-direction: column;
        background-color: grey;
        flex-basis: 100%;
        box-shadow: 0px 0px 6px 3px rgba(255, 255, 255, 1);
        border-radius: 360px;
        transform: scale(0.95);
    }

    #modal_start_game {
        width: 100%;
        height: 100%;
        position: fixed;
        background-color: rgba(0, 0, 0, 0.9);
        display: grid;
        grid-template-columns: minmax(250px, 1fr);
        z-index: 999;
        margin-top: -70px;
        margin-left: -8px;
    }

    #konten_start_game {
        height: auto;
        width: 40%;
        border-radius: 15px;
        border: 4px solid white;
        background-color: greenyellow;
        box-shadow: 0px 0px 10px 6px rgba(255, 255, 255, 1);
        position: absolute;
        margin-top: 110px;
        margin-left: 400px;

    }

    .tombol_start_game {
        padding-top: 15px;
        padding-bottom: 15px;
        width: 35%;
        font-size: 30px;
        font-weight: bold;
        border-radius: 360px;
        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
        box-shadow: 0px 0px 15px 15px rgba(0, 0, 0, 1);
        background-color: yellow;
        cursor: pointer;
    }

    .tombol_start_game:hover {
        box-shadow: 0px 0px 15px 15px rgba(255, 255, 255, 1);
    }

    #konten_start_game p {
        margin-left: 20px;
        font-size: 17px;
        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
    }

    .tombol_pvp {
        padding-top: 15px;
        padding-bottom: 15px;
        width: 55%;
        font-size: 30px;
        font-weight: bold;
        border-radius: 360px;
        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
        box-shadow: 0px 0px 10px 6px rgba(0, 0, 0, 1);
        background-color: yellow;
        cursor: pointer;
    }

    .tombol_pvp:hover {
        box-shadow: 0px 0px 10px 6px rgba(255, 255, 255, 1);
    }

    .tombol_pvai {
        padding-top: 15px;
        padding-bottom: 15px;
        width: 55%;
        font-size: 30px;
        font-weight: bold;
        border-radius: 360px;
        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
        box-shadow: 0px 0px 10px 6px rgba(0, 0, 0, 1);
        background-color: yellow;
        cursor: pointer;
    }

    .tombol_pvai:hover {
        box-shadow: 0px 0px 10px 6px rgba(255, 255, 255, 1);
    }

    .tombol_putaran {
        padding-top: 5px;
        padding-bottom: 5px;
        width: 45%;
        font-size: 30px;
        font-weight: bold;
        border-radius: 360px;
        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
        box-shadow: 0px 0px 10px 6px rgba(0, 0, 0, 1);
        background-color: yellow;
        cursor: pointer;
    }

    #putaran_2:hover {
        box-shadow: 0px 0px 10px 6px rgba(255, 255, 255, 1);
    }

    #putaran_3:hover {
        box-shadow: 0px 0px 10px 6px rgba(255, 255, 255, 1);
    }

    #putaran_4:hover {
        box-shadow: 0px 0px 10px 6px rgba(255, 255, 255, 1);
    }

    #modal_info_lap {
        position: fixed;
        z-index: 999;
        left: 20%;
        top: 40%;
        width: 100%;
        opacity: 0;
    }

    #info_lap {
        font-weight: bold;
        font-size: 35px;
        color: black;
        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
    }

    #modal_info_item_penuh {
        position: fixed;
        z-index: 999;
        left: 23%;
        top: 40%;
        width: 100%;
        opacity: 0;
    }

    #modal_info_item_penuh p {
        font-weight: bold;
        font-size: 35px;
        color: black;
        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
    }

    #modal_info_beku {
        position: fixed;
        z-index: 999;
        left: 33%;
        top: 40%;
        width: 100%;
        opacity: 0;
    }

    #modal_info_beku p {
        font-weight: bold;
        font-size: 35px;
        color: white;
        text-shadow: 2px aquamarine;
        text-shadow: aqua 0px 0px 5px, aqua 0px 0px 60px, aqua 0px 0px 65px, aqua 0px 0px 60px, aqua 0px 0px 60px, aqua 0px 0px 60px, aqua 0px 0px 60px, aqua 0px 0px 90px;
    }
</style>

<body id="body" onload="show_body()">

    <div id='modal_info_beku'>
        <p> Anda Membeku, Sayang Sekali... </p>
    </div>

    <div id='modal_info_item_penuh'>
        <p> Slot Item Anda Penuh, Tidak Bisa Mengambil Item </p>
    </div>

    <div id='modal_info_lap'>
        <p id='info_lap'> Kerja Bagus Player 1 - Lewati 2 Putaran Lagi Untuk Menang </p>
    </div>


    <div id='modal_start_game' style="display: block;">
        <div id='konten_start_game'>
            <h2 style="font-size: 30px;text-align:center;font-weight:bold;        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
"> Ular Tangga : Balap dan Serang! </h2>
            <hr style="border-top:1px solid black;">
            <div id="start_game_1" style="display: block;">
                <p> Tentang Permainan : </p>
                <p> (-) Saat Player melewati kotak no.100, akan kembali ke kotak no.1 </p>
                <p> (-) Saat Player melewati kotak no.100, itu berarti 1 putaran</p>
                <p> (-) Player akan menang setelah melewati jumlah putaran yang ditentukan</p>
                <p> (-) Ada beragam item yang bisa didapatkan, tersebar di beberapa kotak</p>
                <p> (-) Gunakan item secara bijak, strategi diperlukan disini!</p>
                <br>
                <br>
                <br>
                <center>
                    <button onclick="start_game_1()" class='tombol_start_game'> Mulai </button>
                </center>
            </div>
            <div id='start_game_2' style="display: none;">
                <center>
                    <h2 style="font-size: 30px;text-align:center;font-weight:bold;        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
"> Mode Permainan </h2><br>
                    <button onclick="start_game_2('pvp')" class='tombol_pvp'> Player Vs Player </button>
                    <br><br>
                    <button onclick="start_game_2('pvai')" class='tombol_pvai'> Player Vs AI </button>
                </center>
            </div>

            <div id='start_game_3' style="display: none;">
                <center>
                    <h2 style="font-size: 30px;text-align:center;font-weight:bold;        text-shadow: #FFF 0px 0px 5px, #FFF 0px 0px 10px, #FFF 0px 0px 15px, #fff 0px 0px 20px, #fff 0px 0px 30px, #fff 0px 0px 40px, #fff 0px 0px 50px, #fff 0px 0px 30px;
"> Jumlah Putaran </h2>
                    <button style="margin-top: 10px;" onclick="start_game_3(2)" id="putaran_2" class='tombol_putaran'> 2 Putaran </button>
                    <br><br>
                    <button onclick="start_game_3(3)" id="putaran_3" class='tombol_putaran'> 3 Putaran </button>
                    <br><br>
                    <button onclick="start_game_3(4)" id="putaran_4" class='tombol_putaran'> 4 Putaran </button>
                </center>
            </div>
            <br>
            <br>
        </div>
    </div>

    <div id='konten_game' style="display:block">

        <div id='konten_jumlah_putaran'>
            <center>
                <p id='jumlah_putaran'> 2 Putaran </p>
            </center>
        </div>

        <div id='profil_p1'>
            <img src="avatar.png" style="        filter: drop-shadow(1px 1px 1px white);
" alt="">
            <p> P1 / Player 1 </p>
            <p id="lap_p1" style="margin-top: 50px;"> Putaran : 0</p>
            <p style="margin-top: 125px;"> Item</p>
            <div class="kotak_item_p1">
                <div class="slot">
                    <div class="slot" id="power_1_p1"></div>
                    <div class="slot" id="power_2_p2"></div>
                </div>
                <div class="slot">
                    <div class="slot" id="slot_3"></div>
                    <div class="slot" id="slot_4"></div>
                </div>
            </div>
        </div>

        <div id='profil_p2'>
            <img src="avatar2.png" style="filter: drop-shadow(1px 1px 1px white);
" alt="">
            <p> P2 / Player 2 </p>
            <p id="lap_p2" style="margin-top: 50px;"> Putaran : 0</p>
            <p style="margin-top: 125px;"> Item</p>
            <div class="kotak_item_p2">
                <div class="slot">
                    <div class="slot" id="slot_1"></div>
                    <div class="slot" id="slot_2"></div>
                </div>
                <div class="slot">
                    <div class="slot" id="slot_3"></div>
                    <div class="slot" id="slot_4"></div>
                </div>
            </div>
        </div>


        <div id='map'>
            <img style=" opacity: 0.5;position:absolute;z-index:0;" src="ikon_finish3.png" width="760px" height="750px" alt="">
            <div class="kolom_1">
                <div class="kotak_map">
                    <p style="margin-top: 39px;margin-left:-3px;">100</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:110px;">81</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:183px;">80</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:258px;">61</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:333px;">60</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:407px;">41</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:483px;">40</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:558px;">21</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:635px;">20</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:715px;">1</p>
                </div>
            </div>
            <div class="kolom_2">
                <div class="kotak_map">
                    <p style="margin-top: 34px;">99</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:110px;">82</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:183px;">79</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:258px;">62</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:333px;">59</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:407px;">42</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:483px;">39</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:558px;">22</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:635px;">19</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:715px;">2</p>
                </div>
            </div>
            <div class="kolom_3">
                <div class="kotak_map">
                    <p style="margin-top: 34px;">98</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:110px;">83</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:183px;">78</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:258px;">63</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:333px;">58</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:407px;">43</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:483px;">38</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:558px;">23</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:635px;">18</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:715px;">3</p>
                </div>
            </div>
            <div class="kolom_4">
                <div class="kotak_map">
                    <p style="margin-top: 34px;">97</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:110px;">84</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:183px;">77</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:258px;">64</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:333px;">57</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:407px;">44</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:483px;">37</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:558px;">24</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:635px;">17</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:715px;">4</p>
                </div>
            </div>
            <div class="kolom_5">
                <div class="kotak_map">
                    <p style="margin-top: 34px;">96</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:110px;">85</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:183px;">76</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:258px;">65</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:333px;">56</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:407px;">45</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:483px;">36</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:558px;">25</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:635px;">16</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:715px;">5</p>
                </div>
            </div>
            <div class="kolom_6">
                <div class="kotak_map">
                    <p style="margin-top: 38px">95</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:110px;">86</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:183px;">75</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:258px;">66</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:333px;">55</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:407px;">46</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:483px;">35</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:558px;">26</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:635px;">15</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:715px;">6</p>
                </div>
            </div>
            <div class="kolom_7">
                <div class="kotak_map">
                    <p style="margin-top: 34px;">94</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:110px;">87</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:183px;">74</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:258px;">67</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:333px;">54</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:407px;">47</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:483px;">34</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:558px;">27</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:637px;">14</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:715px;">7</p>
                </div>
            </div>
            <div class="kolom_8">
                <div class="kotak_map">
                    <p style="margin-top: 34px;">93</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:110px;">88</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:183px;">73</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:258px;">68</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:333px;">53</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:407px;">48</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:483px;">33</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:558px;">28</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:635px;">13</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:715px;">8</p>
                </div>
            </div>
            <div class="kolom_9">
                <div class="kotak_map">
                    <p style="margin-top: 34px;">92</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:110px;">89</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:183px;">72</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:258px;">69</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:333px;">52</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:407px;">49</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:483px;">32</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:558px;">29</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:635px;">12</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:715px;margin-left:53px;">9</p>
                </div>
            </div>
            <div class="kolom_10">
                <div class="kotak_map">
                    <p style="margin-top: 34px;">91</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:110px;">90</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:183px;">71</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:258px;">70</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:333px;">51</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:407px;">50</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:483px;">31</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:558px;">30</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:639px;margin-left:51px;">11</p>
                </div>
                <div class="kotak_map">
                    <p style="margin-top:715px;">10</p>
                </div>
            </div>

            <div id="power_up_show">
                <div class="power_up_show">
                    <img onclick="use_power_up('power_1')" id="power_1" class="hammer" src="hammer.png" alt="">
                </div>
                <div class="power_up_show">
                    <img onclick="use_power_up('power_2')" id="power_2" class="hammer" src="hammer.png" alt="">
                </div>
                <div class="power_up_show">
                    <img onclick="use_power_up('power_3')" id="power_3" class="hammer" src="hammer.png" alt="">
                </div>
                <div class="power_up_show">
                    <img onclick="use_power_up('power_4')" id="power_4" class="hammer" src="hammer.png" alt="">
                </div>
                <div class="power_up_show">
                    <img onclick="use_power_up('power_5')" id="power_5" class="hammer" src="hammer.png" alt="">
                </div>
                <div class="power_up_show">
                    <img onclick="use_power_up('power_6')" id="power_6" class="hammer" src="hammer.png" alt="">
                </div>
                <div class="power_up_show">
                    <img onclick="use_power_up('power_7')" id="power_7" class="hammer" src="hammer.png" alt="">
                </div>
                <div class="power_up_show">
                    <img onclick="use_power_up('power_8')" id="power_8" class="hammer" src="hammer.png" alt="">
                </div>
                <div class="power_up_show">
                    <img onclick="use_power_up('power_9')" id="power_9" class="hammer" src="hammer.png" alt="">
                </div>
                <div class="power_up_show">
                    <img onclick="use_power_up('power_10')" id="power_10" class="hammer" src="hammer.png" alt="">
                </div>
                <div class="power_up_show">
                    <img onclick="use_power_up('power_11')" id="power_11" class="freeze" src="esbatu.png" alt="">
                </div>
                <div class="power_up_show">
                    <img onclick="use_power_up('power_12')" id="power_12" class="freeze" src="esbatu.png" alt="">
                </div>
                <div class="power_up_show">
                    <img onclick="use_power_up('power_13')" id="power_13" class="freeze" src="esbatu.png" alt="">
                </div>
                <div class="power_up_show" id="power_up_14">
                    <img onclick="use_power_up('power_14')" id="power_14" class="ufo" src="ufo.png" alt="">
                    <div id="light_14"></div>
                </div>
                <div class="power_up_show" id="power_up_15">
                    <div id="light_15"></div>
                    <img onclick="use_power_up('power_15')" id="power_15" class="ufo" src="ufo.png" alt="">
                </div>
                <div class="power_up_show" id="power_up_16">
                    <div id="light_16"></div>
                    <img onclick="use_power_up('power_16')" id="power_16" class="ufo" src="ufo.png" alt="">
                </div>
            </div>


            <div id="profil_tutup"></div>
            <div id="profil_tutup_p2"></div>

            <img id="snake_4" src="snake5.png" alt="">
            <img id="snake_3" src="snake5.png" alt="">
            <img id="snake_2" src="snake3.png" alt="">
            <img id="snake_1" src="snake1.png" alt="">
            <img id="ladder_1" src="ladder1.png" alt="">
            <img id="ladder_2" src="ladder2.png" alt="">
            <img id="ladder_3" src="ladder3.png" alt="">
            <img id="ladder_4" src="ladder4.png" alt="">

            <div id="avatar_jalan2" style="z-index: 99;">
                <div id="avatar_jalan">
                    <img id="avatar" src="avatar.png" alt="">
                    <img id="es_p1" src="esbatu.png" alt="">
                </div>
            </div>

            <div id="avatar_jalan2_p2" style="z-index: 99;">
                <div id="avatar_jalan_p2">
                    <img id="avatar_p2" src="avatar2.png" alt="">
                    <img id="es_p2" src="esbatu.png" alt="">
                </div>
            </div>

        </div>

        <div id='tempat_dadu_p2' style="display:none;">
            <div id="info_turn_p2">
                <p id="label_info_p2" class="label_info_p2">P2 Turn</p>
            </div>
            <div id="kotak_dadu"></div>

            <img id="dadu_123_p2" src="dadu123.png" width="100px" height="100px" alt="">
            <img id="dadu_456_p2" src="dadu456.png" width="100px" height="100px" alt="">
            <img id="dadu2_123_p2" src="dadu123.png" width="100px" height="100px" alt="">
            <img id="dadu2_456_p2" src="dadu456.png" width="100px" height="100px" alt="">

            <div id="tombol">
                <button class="tombol" id="tombol_acak_p2" type="button" onclick="acak_aksi_p2()"> ACAK </button>
                <button class="tombol" id="tombol_stop_p2" type="button" style="visibility: hidden;" onclick="acak_stop('p2')"> STOP </button>
            </div>
        </div>

        <div id='tempat_dadu'>
            <div id="info_turn">
                <p id="label_info" class="label_info">P1 Turn</p>
            </div>
            <div id="kotak_dadu"></div>

            <img id="dadu_123" src="dadu123.png" width="100px" height="100px" alt="">
            <img id="dadu_456" src="dadu456.png" width="100px" height="100px" alt="">
            <img id="dadu2_123" src="dadu123.png" width="100px" height="100px" alt="">
            <img id="dadu2_456" src="dadu456.png" width="100px" height="100px" alt="">z

            <div id="tombol">
                <button class="tombol" id="tombol_acak" type="button" onclick="acak_aksi()"> ACAK </button>
                <button class="tombol" id="tombol_stop" type="button" style="visibility: hidden;" onclick="acak_stop('p1')"> STOP </button>
            </div>
        </div>

        <audio id='sound' controls style="display: none;">
            <source src="dice.mp3" type="audio/mpeg">
        </audio>

        <audio id='sound_step' controls style="display: none;">
            <source src="step.mp3" type="audio/mpeg">
        </audio>

        <audio id='musik' controls style="display: none;">
            <source src="musik.mp3" type="audio/mpeg">
        </audio>

        <audio id='get_item' controls style="display: none;">
            <source src="get_item.mp3" type="audio/mpeg">
        </audio>

        <audio id='jetpack_sound' controls style="display: none;">
            <source src="jetpack.mp3" type="audio/mpeg">
        </audio>

        <audio id='hammer_sound' controls style="display: none;">
            <source src="hammer.mp3" type="audio/mpeg">
        </audio>

        <audio id='freeze_sound' controls style="display: none;">
            <source src="freeze.mp3" type="audio/mpeg">
        </audio>

        <audio id='button_sound' controls style="display: none;">
            <source src="button.mp3" type="audio/mpeg">
        </audio>

    </div>


    <script src="template/assets/js/core/jquery.min.js"></script>
    <script>
        var putar1, putar2, putar3, putar1_p2, putar2_p2, putar3_p2;
        var a1, b1, a2, b2, angka1, angka2, angka, angka_p2, posisi, angka_posisi;
        var acaks_dadu1, acakss_dadu1, acaks_dadu2, acakss_dadu2;
        var status, posisi_p1, angka_posisi_p1, posisi_p2, angka_posisi_p2;
        var letak_power1, letak_power2, letak_power3, letak_power4, letak_power5, letak_power6, letak_power7, letak_power8, letak_power9, letak_power10
        var status_item, power_up_1_p1, power_up_1_p2, power_up_2_p1, power_up_2_p2, power_up_3_p1, power_up_3_p2, power_up_4_p1, power_up_4_p2;
        var lap_p1, lap_p2, jumlah_lap;
        var freeze_p1, freeze_p2;
        var sinar_1, sinar_2;
        var tipe = '';
        var dice_sound;
        $(document).ready(function() {})

        function ufo_aksi(player, jenis) {
            document.getElementById('tombol_acak').disabled = 'true';
            document.getElementById('tombol_stop').disabled = 'true';
            document.getElementById('tombol_acak_p2').disabled = 'true';
            document.getElementById('tombol_stop_p2').disabled = 'true';

            if (jenis == 'power_14') {
                power_up_x = 'power_up_14'
                power_x = 'power_14'
                light_x = 'light_14'
            } else if (jenis == 'power_15') {
                power_up_x = 'power_up_15'
                power_x = 'power_15'
                light_x = 'light_15'
            } else if (jenis == 'power_16') {
                power_up_x = 'power_up_16'
                power_x = 'power_16'
                light_x = 'light_16'
            }

            tipe = Math.random();
            if (tipe <= 1) {
                tipe = 'naik'
            } else {
                tipe = 'turun'
            }

            if (tipe == 'naik') {
                if (player == 'p1') {
                    player_avatar_1 = 'avatar'
                    player_avatar_2 = 'avatar_jalan'
                    angka_posisi_sekarang = angka_posisi_p1
                    clearTimeout(putar1);
                    clearTimeout(putar2);
                    clearTimeout(putar3);

                    if (angka_posisi_p1 == angka_posisi_p2) {
                        document.getElementById('avatar').style.marginLeft = '5px';
                        document.getElementById('avatar_p2').style.display = 'none';
                    }
                } else {
                    player_avatar_1 = 'avatar_p2'
                    player_avatar_2 = 'avatar_jalan_p2'
                    angka_posisi_sekarang = angka_posisi_p2
                    clearTimeout(putar1_p2);
                    clearTimeout(putar2_p2);
                    clearTimeout(putar3_p2);

                    if (angka_posisi_p1 == angka_posisi_p2) {
                        document.getElementById('avatar_p2').style.marginLeft = '5px';
                        document.getElementById('avatar').style.display = 'none';
                    }
                }
                batas_naik = 100 - angka_posisi_sekarang;
                angka_naik = Math.floor(Math.random() * batas_naik)
                if (angka_naik == 0) {
                    angka_naik = 1
                }

                angka_posisi_naik = angka_posisi_sekarang + angka_naik;

                move_power_up_y1 = Math.floor(angka_posisi_sekarang / 10) + 1;
                if (angka_posisi_sekarang % 10 == 0 && move_power_up_y1 != 10) {
                    move_power_up_y1 = move_power_up_y1 - 1;
                }
                if (move_power_up_y1 % 2 == 0) {
                    move_power_up_x1 = ((move_power_up_y1 * 10) + 1) - angka_posisi_sekarang
                    if (move_power_up_x1 == 0) {
                        move_power_up_x1 = 1;
                    }
                    if (move_power_up_x1 == 11) {
                        move_power_up_x1 = 10;
                    }
                } else {
                    move_power_up_x1 = angka_posisi_sekarang - ((move_power_up_y1 - 1) * 10)
                    if (move_power_up_x1 == 0) {
                        move_power_up_x1 = 1;
                    }
                    if (move_power_up_x1 == 11) {
                        move_power_up_x1 = 10;
                    }
                }
                move_power_up_y2 = Math.floor(angka_posisi_naik / 10) + 1;
                if (angka_posisi_naik % 10 == 0 && move_power_up_y2 != 10) {
                    move_power_up_y2 = move_power_up_y2 - 1;
                }
                if (move_power_up_y2 % 2 == 0) {
                    move_power_up_x2 = ((move_power_up_y2 * 10) + 1) - angka_posisi_naik
                    if (move_power_up_x2 == 0) {
                        move_power_up_x2 = 1;
                    }
                    if (move_power_up_x2 == 11) {
                        move_power_up_x2 = 10;
                    }
                } else {
                    move_power_up_x2 = angka_posisi_naik - ((move_power_up_y2 - 1) * 10)
                    if (move_power_up_x2 == 0) {
                        move_power_up_x2 = 1;
                    }
                    if (move_power_up_x2 == 11) {
                        move_power_up_x2 = 10;
                    }
                }

                avatar_y = (move_power_up_y1 - 1) * 76;
                avatar_x = (move_power_up_x1 - 1) * 76;
                move_avatar_y = (move_power_up_y2 - 1) * 76;
                if (move_avatar_y == 76) {
                    move_avatar_y = 86;
                }
                move_avatar_x = (move_power_up_x2 - 1) * 76;

                move_power_up_y1 = 560 - ((move_power_up_y1 - 1) * 76);
                move_power_up_x1 = 50 + ((move_power_up_x1 - 1) * 76);
                move_power_up_y2 = 560 - ((move_power_up_y2 - 1) * 76);
                move_power_up_x2 = 50 + ((move_power_up_x2 - 1) * 76);

                if (player == 'p1') {
                    angka_posisi_p1 = angka_posisi_naik;
                    posisi_p1 = move_avatar_x
                } else {
                    angka_posisi_p2 = angka_posisi_naik;
                    posisi_p2 = move_avatar_x
                }


                document.getElementById(light_x).style.zIndex = '0';
                document.getElementById(power_x).style.zIndex = '1';
                document.getElementById(power_up_x).style.zIndex = '999';
                document.getElementById(power_up_x).style.transitionDuration = '1s';
                document.getElementById(power_x).style.transitionDuration = '1s';
                document.getElementById(light_x).style.transitionDuration = '1s';
                document.getElementById(power_x).style.width = '140px'
                document.getElementById(power_x).style.height = '90px'
                document.getElementById(power_up_x).style.marginTop = '' + move_power_up_y1 + 'px'
                document.getElementById(power_up_x).style.marginLeft = '' + move_power_up_x1 + 'px'

                setTimeout(function() {
                    document.getElementById(power_x).style.transitionDuration = '1s';
                    document.getElementById(power_x).style.filter = 'drop-shadow(10px 10px 10px white)'
                }, 1000)

                setTimeout(function() {
                    document.getElementById(light_x).style.borderBottom = '150px solid white';
                    document.getElementById(light_x).style.transform = 'scale(1)';
                }, 1300)

                setTimeout(function() {
                    sinar_1 = setInterval(function() {
                        document.getElementById(light_x).style.opacity = '0.9';
                    }, 600)
                }, 2300)

                setTimeout(function() {
                    sinar_2 = setInterval(function() {
                        document.getElementById(light_x).style.opacity = '0.4';
                    }, 600)
                }, 2600)

                setTimeout(function() {
                    document.getElementById(player_avatar_2).style.transitionDuration = '2s';
                    document.getElementById(player_avatar_2).style.transform = 'translate(' + avatar_x + 'px,-' + (avatar_y + 93) + 'px)'
                    document.getElementById(player_avatar_1).style.transitionDuration = '2s';
                    document.getElementById(player_avatar_1).style.opacity = '0';
                    document.getElementById(player_avatar_1).style.transform = 'scale(0)';


                }, 3000)

                setTimeout(function() {
                    clearInterval(sinar_1)
                    clearInterval(sinar_2)
                    document.getElementById(light_x).style.opacity = '0.5';
                    document.getElementById(light_x).style.transitionDuration = '1s';
                    document.getElementById(light_x).style.borderBottom = '0px solid white';
                    document.getElementById(light_x).style.transform = 'scale(0)';
                    document.getElementById(player_avatar_1).style.transitionDuration = 'none';
                    document.getElementById(player_avatar_1).style.opacity = '1'
                    document.getElementById(player_avatar_2).style.transitionDuration = 'none';
                    document.getElementById(player_avatar_2).style.transform = 'translate(' + move_avatar_x + 'px,-' + (move_avatar_y + 93) +
                        'px)'
                }, 5200)

                setTimeout(function() {
                    document.getElementById(power_up_x).style.marginLeft = '' + move_power_up_x2 + 'px';
                    document.getElementById(power_up_x).style.marginTop = '' + move_power_up_y2 + 'px';

                }, 6200)

                setTimeout(function() {
                    document.getElementById(light_x).style.transform = 'scale(1)';
                    document.getElementById(light_x).style.borderBottom = '150px solid white';
                }, 7200)

                setTimeout(function() {
                    sinar_1 = setInterval(function() {
                        document.getElementById(light_x).style.opacity = '0.9';
                    }, 600)
                }, 8200)

                setTimeout(function() {
                    sinar_2 = setInterval(function() {
                        document.getElementById(light_x).style.opacity = '0.4';
                    }, 600)
                }, 8500)

                setTimeout(function() {
                    document.getElementById(player_avatar_2).style.transitionDuration = '2s';
                    document.getElementById(player_avatar_2).style.transform = 'translate(' + move_avatar_x + 'px,-' + move_avatar_y + 'px)'
                    document.getElementById(player_avatar_1).style.transitionDuration = '2s';
                    document.getElementById(player_avatar_1).style.transform = 'scale(1)'
                }, 8700)

                setTimeout(function() {
                    clearInterval(sinar_1)
                    clearInterval(sinar_2)
                    document.getElementById(light_x).style.opacity = '0.5';
                    document.getElementById(light_x).style.transitionDuration = '1s';
                    document.getElementById(light_x).style.borderBottom = '0px solid white';
                    document.getElementById(light_x).style.transform = 'scale(0)';
                }, 10700)

                setTimeout(function() {
                    document.getElementById('avatar_p2').style.display = 'block';
                    document.getElementById('avatar').style.display = 'block';
                    document.getElementById('avatar_jalan_p2').style.display = 'block';
                    document.getElementById('avatar_jalan').style.display = 'block';

                    angka_posisi = angka_posisi_naik;
                    if (player == 'p1') {
                        player = 'p1';
                    } else {
                        player = 'p2';
                    }

                    if (angka_posisi == letak_power1) {
                        get_power_up(letak_power1, 'power_1')
                        letak_power1 = null;
                    } else if (angka_posisi == letak_power2) {
                        get_power_up(letak_power2, 'power_2')
                        letak_power2 = null;
                    } else if (angka_posisi == letak_power3) {
                        get_power_up(letak_power3, 'power_3')
                        letak_power3 = null;
                    } else if (angka_posisi == letak_power4) {
                        get_power_up(letak_power4, 'power_4')
                        letak_power4 = null;
                    } else if (angka_posisi == letak_power5) {
                        get_power_up(letak_power5, 'power_5')
                        letak_power5 = null;
                    } else if (angka_posisi == letak_power6) {
                        get_power_up(letak_power6, 'power_6')
                        letak_power6 = null;
                    } else if (angka_posisi == letak_power7) {
                        get_power_up(letak_power7, 'power_7')
                        letak_power7 = null;
                    } else if (angka_posisi == letak_power8) {
                        get_power_up(letak_power8, 'power_8')
                        letak_power8 = null;
                    } else if (angka_posisi == letak_power9) {
                        get_power_up(letak_power9, 'power_9')
                        letak_power9 = null;
                    } else if (angka_posisi == letak_power10) {
                        get_power_up(letak_power10, 'power_10')
                        letak_power10 = null;
                    } else if (angka_posisi == letak_power11) {
                        get_power_up(letak_power11, 'power_11')
                        letak_power11 = null;
                    } else if (angka_posisi == letak_power12) {
                        get_power_up(letak_power12, 'power_12')
                        letak_power12 = null;
                    } else if (angka_posisi == letak_power13) {
                        get_power_up(letak_power13, 'power_13')
                        letak_power13 = null;
                    } else if (angka_posisi == letak_power14) {
                        get_power_up(letak_power14, 'power_14')
                        letak_power14 = null;
                    } else if (angka_posisi == letak_power15) {
                        get_power_up(letak_power15, 'power_15')
                        letak_power15 = null;
                    } else if (angka_posisi == letak_power16) {
                        get_power_up(letak_power16, 'power_16')
                        letak_power16 = null;
                    }

                    if (angka_posisi == 9) {
                        naik_tangga(14, 456, -86, -60, 2, player)
                    } else if (angka_posisi == 29) {
                        naik_tangga(69, 608, -464, -5, 4, player)
                    } else if (angka_posisi == 73) {
                        naik_tangga(96, 304, -685, -60, 3, player)
                    } else if (angka_posisi == 38) {
                        naik_tangga(64, 228, -464, 30, 3.5, player)
                    } else if (angka_posisi == 11) {
                        turun_ular(8, 532, 0, player)
                    } else if (angka_posisi == 54) {
                        turun_ular(26, 380, -162, player)
                    } else if (angka_posisi == 62) {
                        turun_ular(21, 0, -162, player)
                    } else if (angka_posisi == 89) {
                        turun_ular(68, 532, -464, player)
                    } else {
                        if (angka_posisi_p1 == angka_posisi_p2) {
                            document.getElementById('avatar_p2').style.marginLeft = '20px';
                            document.getElementById('avatar').style.marginLeft = '-15px';
                            document.getElementById('es_p2').style.marginLeft = '5px';
                            document.getElementById('es_p1').style.marginLeft = '-45px';
                        }
                    }
                    document.getElementById('tombol_acak').removeAttribute('disabled');
                    document.getElementById('tombol_stop').removeAttribute('disabled');
                    document.getElementById('tombol_acak_p2').removeAttribute('disabled');
                    document.getElementById('tombol_stop_p2').removeAttribute('disabled');
                    document.getElementById(jenis).style.display = 'none';
                    status_item = 0;
                    tipe = ''
                    putar_avatar()
                    putar_avatar_p2()
                }, 11700)


            } else if (tipe == 'turun') {
                if (player == 'p1') {
                    angka_posisi_sekarang = angka_posisi_p2
                    clearTimeout(putar1_p2);
                    clearTimeout(putar2_p2);
                    clearTimeout(putar3_p2);
                } else {
                    angka_posisi_sekarang = angka_posisi_p1
                    clearTimeout(putar1);
                    clearTimeout(putar2);
                    clearTimeout(putar3);
                }
            }


        }

        function start_game_1() {
            document.getElementById('button_sound').play()
            document.getElementById('start_game_1').style.display = 'none';
            document.getElementById('start_game_2').style.display = 'block';
        }

        function start_game_2(player) {
            document.getElementById('button_sound').play()
            document.getElementById('start_game_2').style.display = 'none'
            document.getElementById('start_game_3').style.display = 'block'
        }

        function start_game_3(lap) {
            document.getElementById('button_sound').play()
            document.getElementById('modal_start_game').style.display = 'none';
            document.getElementById('jumlah_putaran').innerHTML = lap + ' Putaran'
            jumlah_lap = lap;
            start_game_aksi()
        }

        function start_game_aksi() {
            lap_p1 = 0;
            lap_p2 = 0;
            status_item = 0;
            angka_posisi_p1 = 1;
            posisi_p1 = 0;

            angka_posisi_p2 = 1;
            posisi_p2 = 0;


            power_up_sebar()
            if (angka_posisi_p1 == angka_posisi_p2) {
                document.getElementById('avatar_p2').style.marginLeft = '15px';
                document.getElementById('avatar').style.marginLeft = '-15px';
                document.getElementById('es_p2').style.marginLeft = '5px';
                document.getElementById('es_p1').style.marginLeft = '-45px';
            }

            document.getElementById('musik').volume = '0.07'
            document.getElementById('musik').play()
            setInterval(function() {
                document.getElementById('musik').load()
                document.getElementById('musik').play()
            }, 170000)
        }

        function freeze_aksi(player, jenis) {
            document.getElementById('tombol_acak').disabled = 'true';
            document.getElementById('tombol_stop').disabled = 'true';
            document.getElementById('tombol_acak_p2').disabled = 'true';
            document.getElementById('tombol_stop_p2').disabled = 'true';
            if (player == 'p1') {
                freeze_p2 = 'ok'
                angka_posisi_sekarang = angka_posisi_p2
                es = 'es_p2'
                clearTimeout(putar1_p2);
                clearTimeout(putar2_p2);
                clearTimeout(putar3_p2);
            } else {
                freeze_p1 = 'ok'
                angka_posisi_sekarang = angka_posisi_p1
                es = 'es_p1'
                clearTimeout(putar1);
                clearTimeout(putar2);
                clearTimeout(putar3);
            }

            vektor_y = Math.floor(angka_posisi_sekarang / 10) + 1;
            if (angka_posisi_sekarang % 10 == 0 && vektor_y != 10) {
                vektor_y = vektor_y - 1;
            }
            console.log(vektor_y)
            if (vektor_y % 2 == 0) {
                vektor_x = ((vektor_y * 10) + 1) - angka_posisi_sekarang
                if (vektor_x == 0) {
                    vektor_x = 1;
                } else if (vektor_x == 11) {
                    vektor_x = 10;
                }
            } else {
                vektor_x = angka_posisi_sekarang - ((vektor_y - 1) * 10)
                if (vektor_x == 0) {
                    vektor_x = 1;
                } else if (vektor_x == 11) {
                    vektor_x = 10;
                }
            }
            y = 750 - (vektor_y * 76)
            x = 14 + (vektor_x * 76)

            document.getElementById(jenis).style.zIndex = '999';
            document.getElementById(jenis).style.transitionDuration = '2s';
            document.getElementById(jenis).style.marginLeft = '' + x + 'px'
            document.getElementById(jenis).style.marginTop = '' + y + 'px'
            document.getElementById(jenis).style.transform = 'scale(2.2)';


            setTimeout(function() {
                document.getElementById('freeze_sound').play();
                document.getElementById(jenis).style.opacity = '0';
                document.getElementById(es).style.opacity = '0.7';
            }, 2000)

            setTimeout(function() {
                document.getElementById('tombol_acak').removeAttribute('disabled');
                document.getElementById('tombol_stop').removeAttribute('disabled');
                document.getElementById('tombol_acak_p2').removeAttribute('disabled');
                document.getElementById('tombol_stop_p2').removeAttribute('disabled');
            }, 4000)

            status_item = 0;
        }

        function jetpack_aksi(player, jenis) {
            document.getElementById('tombol_acak').disabled = 'true';
            document.getElementById('tombol_stop').disabled = 'true';
            document.getElementById('tombol_acak_p2').disabled = 'true';
            document.getElementById('tombol_stop_p2').disabled = 'true';

            var move_avatar_x, move_avatar_y;
            if (player == 'p1') {
                player_avatar = 'avatar_jalan';
                angka_posisi_sekarang = angka_posisi_p1;


                if (angka_posisi_p1 == angka_posisi_p2) {
                    document.getElementById('avatar_jalan').style.display = 'none';
                    document.getElementById('avatar').style.marginLeft = '5px';
                    document.getElementById('es_p1').style.marginLeft = '-20px';
                }

            } else {
                player_avatar = 'avatar_jalan_p2';
                angka_posisi_sekarang = angka_posisi_p2;

                if (angka_posisi_p1 == angka_posisi_p2) {
                    document.getElementById('avatar_jalan_p2').style.display = 'none';
                    document.getElementById('avatar_p2').style.marginLeft = '5px';
                    document.getElementById('es_p2').style.marginLeft = '-20px';
                }
            }

            if (angka_posisi_sekarang >= 1 && angka_posisi_sekarang <= 10) {
                move_y = 690
                move_x = ((angka_posisi_sekarang - 1) * 76) + 60;
                move_avatar_x = ((angka_posisi_sekarang - 1) * 76);
                move_avatar_y = -10;
                move_angka_posisi = angka_posisi_sekarang + (21 - (angka_posisi_sekarang * 2));
            }
            if (angka_posisi_sekarang >= 11 && angka_posisi_sekarang <= 20) {
                move_y = 690 - 86
                move_x = ((20 - angka_posisi_sekarang) * 76) + 60;
                move_avatar_x = (20 - angka_posisi_sekarang) * 76;
                move_avatar_y = -86;
                move_angka_posisi = 20 + (21 - angka_posisi_sekarang);
            }
            if (angka_posisi_sekarang >= 21 && angka_posisi_sekarang <= 30) {
                move_y = 690 - 162
                move_x = ((angka_posisi_sekarang - 21) * 76) + 60;
                move_avatar_x = (angka_posisi_sekarang - 21) * 76;
                move_avatar_y = -162;
                move_angka_posisi = 20 + ((angka_posisi_sekarang - 20) + (21 - ((angka_posisi_sekarang - 20) * 2)));
            }
            if (angka_posisi_sekarang >= 31 && angka_posisi_sekarang <= 40) {
                move_y = 690 - 238;
                move_x = ((40 - angka_posisi_sekarang) * 76) + 60;
                move_avatar_y = -238;
                move_avatar_x = (40 - angka_posisi_sekarang) * 76;
                move_angka_posisi = 20 + (20 + (21 - (angka_posisi_sekarang - 20)));
            }
            if (angka_posisi_sekarang >= 41 && angka_posisi_sekarang <= 50) {
                move_y = 690 - 314;
                move_x = ((angka_posisi_sekarang - 41) * 76) + 60;
                move_avatar_y = -314;
                move_avatar_x = (angka_posisi_sekarang - 41) * 76;
                move_angka_posisi = 40 + ((angka_posisi_sekarang - 40) + (21 - ((angka_posisi_sekarang - 40) * 2)));
            }
            if (angka_posisi_sekarang >= 51 && angka_posisi_sekarang <= 60) {
                move_y = 690 - 389
                move_x = ((60 - angka_posisi_sekarang) * 76) + 60;
                move_avatar_y = -389;
                move_avatar_x = (60 - angka_posisi_sekarang) * 76;
                move_angka_posisi = 40 + (20 + (21 - (angka_posisi_sekarang - 40)));
            }
            if (angka_posisi_sekarang >= 61 && angka_posisi_sekarang <= 70) {
                move_y = 690 - 464
                move_x = ((angka_posisi_sekarang - 61) * 76) + 60;
                move_avatar_y = -464;
                move_avatar_x = (angka_posisi_sekarang - 61) * 76;
                move_angka_posisi = 60 + ((angka_posisi_sekarang - 60) + (21 - ((angka_posisi_sekarang - 60) * 2)));
            }
            if (angka_posisi_sekarang >= 71 && angka_posisi_sekarang <= 80) {
                move_y = 690 - 537
                move_x = ((80 - angka_posisi_sekarang) * 76) + 60;
                move_avatar_y = -537
                move_avatar_x = (80 - angka_posisi_sekarang) * 76
                move_angka_posisi = 60 + (20 + (21 - (angka_posisi_sekarang - 60)));
            }
            if (angka_posisi_sekarang >= 81 && angka_posisi_sekarang <= 90) {
                move_y = 690 - 612
                move_x = ((angka_posisi_sekarang - 81) * 76) + 60;
                move_avatar_y = -612
                move_avatar_x = (angka_posisi_sekarang - 81) * 76
                move_angka_posisi = 80 + ((angka_posisi_sekarang - 80) + (21 - ((angka_posisi_sekarang - 80) * 2)));
            }
            if (angka_posisi_sekarang >= 91 && angka_posisi_sekarang <= 100) {
                move_y = 690 - 685
                move_x = ((100 - angka_posisi_sekarang) * 76) + 60;
                move_avatar_y = -609
                move_avatar_x = (100 - angka_posisi_sekarang) * 76
                move_angka_posisi = angka_posisi_sekarang;
            }

            if (player == 'p1') {
                angka_posisi_p1 = move_angka_posisi;
            } else {
                angka_posisi_p2 = move_angka_posisi;
            }
            document.getElementById(jenis).style.transitionDuration = '1s';
            document.getElementById(jenis).style.marginLeft = '0px';
            document.getElementById(jenis).style.marginTop = '650px';
            document.getElementById(jenis).style.width = '120px';
            document.getElementById(jenis).style.height = '120px';
            document.getElementById(jenis).style.transform = 'rotate(110deg)';
            document.getElementById(jenis).style.zIndex = '50';
            document.getElementById('jetpack_sound').play();

            setTimeout(function() {
                document.getElementById(jenis).style.transitionDuration = '500ms';
                document.getElementById(jenis).style.transform = 'rotate(45deg)';
            }, 1000)

            setTimeout(function() {
                document.getElementById(jenis).style.transitionDuration = '500ms';
                document.getElementById(jenis).style.marginLeft = '' + move_x + 'px';
            }, 1500)

            setTimeout(function() {
                document.getElementById(jenis).style.marginTop = '' + move_y + 'px';
                document.getElementById(jenis).style.transform = 'rotate(0deg)';
                document.getElementById(jenis).style.zIndex = '50';
            }, 2000)

            setTimeout(function() {
                document.getElementById(jenis).style.transitionDuration = '1s';
                document.getElementById(jenis).style.transform = 'rotate(15deg)';
                if (angka_posisi_sekarang >= 91 && angka_posisi_sekarang <= 100) {
                    document.getElementById(jenis).style.marginTop = '' + move_y + 'px';
                } else {
                    document.getElementById(jenis).style.marginTop = '' + (move_y - 76) + 'px';
                }
                document.getElementById(player_avatar).style.transitionDuration = '1s';
                document.getElementById(player_avatar).style.transform = 'translate(' + move_avatar_x + 'px,' + (move_avatar_y - 76) + 'px)'
            }, 2500)

            setTimeout(function() {
                document.getElementById('avatar_p2').style.display = 'block';
                document.getElementById('avatar').style.display = 'block';
                document.getElementById('avatar_jalan_p2').style.display = 'block';
                document.getElementById('avatar_jalan').style.display = 'block';

                angka_posisi = move_angka_posisi;
                if (player == 'p1') {
                    player = 'p1';
                } else {
                    player = 'p2';
                }

                if (angka_posisi == letak_power1) {
                    get_power_up(letak_power1, 'power_1')
                    letak_power1 = null;
                } else if (angka_posisi == letak_power2) {
                    get_power_up(letak_power2, 'power_2')
                    letak_power2 = null;
                } else if (angka_posisi == letak_power3) {
                    get_power_up(letak_power3, 'power_3')
                    letak_power3 = null;
                } else if (angka_posisi == letak_power4) {
                    get_power_up(letak_power4, 'power_4')
                    letak_power4 = null;
                } else if (angka_posisi == letak_power5) {
                    get_power_up(letak_power5, 'power_5')
                    letak_power5 = null;
                } else if (angka_posisi == letak_power6) {
                    get_power_up(letak_power6, 'power_6')
                    letak_power6 = null;
                } else if (angka_posisi == letak_power7) {
                    get_power_up(letak_power7, 'power_7')
                    letak_power7 = null;
                } else if (angka_posisi == letak_power8) {
                    get_power_up(letak_power8, 'power_8')
                    letak_power8 = null;
                } else if (angka_posisi == letak_power9) {
                    get_power_up(letak_power9, 'power_9')
                    letak_power9 = null;
                } else if (angka_posisi == letak_power10) {
                    get_power_up(letak_power10, 'power_10')
                    letak_power10 = null;
                } else if (angka_posisi == letak_power11) {
                    get_power_up(letak_power11, 'power_11')
                    letak_power11 = null;
                } else if (angka_posisi == letak_power12) {
                    get_power_up(letak_power12, 'power_12')
                    letak_power12 = null;
                } else if (angka_posisi == letak_power13) {
                    get_power_up(letak_power13, 'power_13')
                    letak_power13 = null;
                } else if (angka_posisi == letak_power14) {
                    get_power_up(letak_power14, 'power_14')
                    letak_power14 = null;
                } else if (angka_posisi == letak_power15) {
                    get_power_up(letak_power15, 'power_15')
                    letak_power15 = null;
                } else if (angka_posisi == letak_power16) {
                    get_power_up(letak_power16, 'power_16')
                    letak_power16 = null;
                }

                if (angka_posisi == 9) {
                    naik_tangga(14, 456, -86, -60, 2, player)
                } else if (angka_posisi == 29) {
                    naik_tangga(69, 608, -464, -5, 4, player)
                } else if (angka_posisi == 73) {
                    naik_tangga(96, 304, -685, -60, 3, player)
                } else if (angka_posisi == 38) {
                    naik_tangga(64, 228, -464, 30, 3.5, player)
                } else if (angka_posisi == 11) {
                    turun_ular(8, 532, 0, player)
                } else if (angka_posisi == 54) {
                    turun_ular(26, 380, -162, player)
                } else if (angka_posisi == 62) {
                    turun_ular(21, 0, -162, player)
                } else if (angka_posisi == 89) {
                    turun_ular(68, 532, -464, player)
                } else {
                    if (angka_posisi_p1 == angka_posisi_p2) {
                        document.getElementById('avatar_p2').style.marginLeft = '20px';
                        document.getElementById('avatar').style.marginLeft = '-15px';
                        document.getElementById('es_p2').style.marginLeft = '5px';
                        document.getElementById('es_p1').style.marginLeft = '-45px';
                    }
                }
                document.getElementById('tombol_acak').removeAttribute('disabled');
                document.getElementById('tombol_stop').removeAttribute('disabled');
                document.getElementById('tombol_acak_p2').removeAttribute('disabled');
                document.getElementById('tombol_stop_p2').removeAttribute('disabled');
                document.getElementById(jenis).style.display = 'none';
                status_item = 0;
                document.getElementById('jetpack_sound').load();
            }, 3500)
        }

        function hammer_aksi(player, jenis) {
            document.getElementById('tombol_acak').disabled = 'true';
            document.getElementById('tombol_stop').disabled = 'true';
            document.getElementById('tombol_acak_p2').disabled = 'true';
            document.getElementById('tombol_stop_p2').disabled = 'true';
            var move_avatar_x, move_avatar_y;

            if (player == 'p1') {
                player_avatar = 'avatar_jalan_p2';
                angka_posisi_sekarang = angka_posisi_p2;


                if (angka_posisi_p1 == angka_posisi_p2) {
                    document.getElementById('avatar_jalan').style.display = 'none';
                    document.getElementById('avatar').style.marginLeft = '5px';
                    document.getElementById('es_p1').style.marginLeft = '-20px';
                }

            } else {
                player_avatar = 'avatar_jalan';
                angka_posisi_sekarang = angka_posisi_p1;

                if (angka_posisi_p1 == angka_posisi_p2) {
                    document.getElementById('avatar_jalan_p2').style.display = 'none';
                    document.getElementById('avatar_p2').style.marginLeft = '5px';
                    document.getElementById('es_p2').style.marginLeft = '-20px';
                }
            }

            if (angka_posisi_sekarang >= 1 && angka_posisi_sekarang <= 10) {
                move_y = 610
                move_x = ((angka_posisi_sekarang - 1) * 76) + 130;
                move_avatar_x = (angka_posisi_sekarang - 1) * 76;
                move_avatar_y = -76;
                move_angka_posisi = angka_posisi_sekarang;
            }
            if (angka_posisi_sekarang >= 11 && angka_posisi_sekarang <= 20) {
                move_y = 610 - 86
                move_x = ((20 - angka_posisi_sekarang) * 76) + 130;
                move_avatar_x = (20 - angka_posisi_sekarang) * 76;
                move_avatar_y = -86;
                move_angka_posisi = (21 - angka_posisi_sekarang);
            }
            if (angka_posisi_sekarang >= 21 && angka_posisi_sekarang <= 30) {
                move_y = 610 - 162
                move_x = ((angka_posisi_sekarang - 21) * 76) + 130;
                move_avatar_x = (angka_posisi_sekarang - 21) * 76;
                move_avatar_y = -162;
                move_angka_posisi = angka_posisi_sekarang - (1 + (2 * (angka_posisi_sekarang - 21)));
            }
            if (angka_posisi_sekarang >= 31 && angka_posisi_sekarang <= 40) {
                move_y = 610 - 238;
                move_x = ((40 - angka_posisi_sekarang) * 76) + 130;
                move_avatar_y = -238;
                move_avatar_x = (40 - angka_posisi_sekarang) * 76;
                move_angka_posisi = angka_posisi_sekarang - (19 - ((40 - angka_posisi_sekarang) * 2));
            }
            if (angka_posisi_sekarang >= 41 && angka_posisi_sekarang <= 50) {
                move_y = 610 - 314;
                move_x = ((angka_posisi_sekarang - 41) * 76) + 130;
                move_avatar_y = -314;
                move_avatar_x = (angka_posisi_sekarang - 41) * 76;
                move_angka_posisi = angka_posisi_sekarang - (1 + (2 * (angka_posisi_sekarang - 41)));
            }
            if (angka_posisi_sekarang >= 51 && angka_posisi_sekarang <= 60) {
                move_y = 610 - 389
                move_x = ((60 - angka_posisi_sekarang) * 76) + 130;
                move_avatar_y = -389;
                move_avatar_x = (60 - angka_posisi_sekarang) * 76;
                move_angka_posisi = angka_posisi_sekarang - (19 - ((60 - angka_posisi_sekarang) * 2));
            }
            if (angka_posisi_sekarang >= 61 && angka_posisi_sekarang <= 70) {
                move_y = 610 - 464
                move_x = ((angka_posisi_sekarang - 61) * 76) + 130;
                move_avatar_y = -464;
                move_avatar_x = (angka_posisi_sekarang - 61) * 76;
                move_angka_posisi = angka_posisi_sekarang - (1 + (2 * (angka_posisi_sekarang - 61)));
            }
            if (angka_posisi_sekarang >= 71 && angka_posisi_sekarang <= 80) {
                move_y = 610 - 537
                move_x = ((80 - angka_posisi_sekarang) * 76) + 130;
                move_avatar_y = -537
                move_avatar_x = (80 - angka_posisi_sekarang) * 76
                move_angka_posisi = angka_posisi_sekarang - (19 - ((80 - angka_posisi_sekarang) * 2));
            }
            if (angka_posisi_sekarang >= 81 && angka_posisi_sekarang <= 90) {
                move_y = 610 - 612
                move_x = ((angka_posisi_sekarang - 81) * 76) + 130;
                move_avatar_y = -612
                move_avatar_x = (angka_posisi_sekarang - 81) * 76
                move_angka_posisi = angka_posisi_sekarang - (1 + (2 * (angka_posisi_sekarang - 81)));
            }
            if (angka_posisi_sekarang >= 91 && angka_posisi_sekarang <= 100) {
                move_y = 610 - 685
                move_x = ((100 - angka_posisi_sekarang) * 76) + 130;
                move_avatar_y = -685
                move_avatar_x = (100 - angka_posisi_sekarang) * 76
                move_angka_posisi = angka_posisi_sekarang - (19 - ((100 - angka_posisi_sekarang) * 2));
            }

            if (player == 'p1') {
                angka_posisi_p2 = move_angka_posisi;
            } else {
                angka_posisi_p1 = move_angka_posisi;
            }
            document.getElementById(jenis).style.transitionDuration = '2s';
            document.getElementById(jenis).style.marginLeft = '' + move_x + 'px';
            document.getElementById(jenis).style.marginTop = '' + move_y + 'px';
            document.getElementById(jenis).style.width = '120px';
            document.getElementById(jenis).style.height = '120px';
            document.getElementById(jenis).style.transform = 'rotate(90deg)';
            document.getElementById(jenis).style.zIndex = '900';

            setTimeout(function() {
                document.getElementById(jenis).style.transitionDuration = '350ms';
                document.getElementById(jenis).style.marginLeft = '' + (move_x - 30) + 'px';
                document.getElementById(jenis).style.transform = 'rotate(0deg)';
            }, 2000)

            setTimeout(function() {
                document.getElementById('hammer_sound').play();
            }, 2250)

            setTimeout(function() {
                document.getElementById(player_avatar).style.transform = 'translate(' + move_avatar_x + 'px,' + (move_avatar_y + 76) + 'px)'
            }, 2500)

            setTimeout(function() {
                document.getElementById('sound_step').play();
            }, 2800)

            setTimeout(function() {
                document.getElementById('avatar_p2').style.display = 'block';
                document.getElementById('avatar').style.display = 'block';
                document.getElementById('avatar_jalan_p2').style.display = 'block';
                document.getElementById('avatar_jalan').style.display = 'block';

                angka_posisi = move_angka_posisi;
                if (player == 'p1') {
                    player = 'p2';
                } else {
                    player = 'p1';
                }

                if (angka_posisi == letak_power1) {
                    get_power_up(letak_power1, 'power_1')
                    letak_power1 = null;
                } else if (angka_posisi == letak_power2) {
                    get_power_up(letak_power2, 'power_2')
                    letak_power2 = null;
                } else if (angka_posisi == letak_power3) {
                    get_power_up(letak_power3, 'power_3')
                    letak_power3 = null;
                } else if (angka_posisi == letak_power4) {
                    get_power_up(letak_power4, 'power_4')
                    letak_power4 = null;
                } else if (angka_posisi == letak_power5) {
                    get_power_up(letak_power5, 'power_5')
                    letak_power5 = null;
                } else if (angka_posisi == letak_power6) {
                    get_power_up(letak_power6, 'power_6')
                    letak_power6 = null;
                } else if (angka_posisi == letak_power7) {
                    get_power_up(letak_power7, 'power_7')
                    letak_power7 = null;
                } else if (angka_posisi == letak_power8) {
                    get_power_up(letak_power8, 'power_8')
                    letak_power8 = null;
                } else if (angka_posisi == letak_power9) {
                    get_power_up(letak_power9, 'power_9')
                    letak_power9 = null;
                } else if (angka_posisi == letak_power10) {
                    get_power_up(letak_power10, 'power_10')
                    letak_power10 = null;
                } else if (angka_posisi == letak_power11) {
                    get_power_up(letak_power11, 'power_11')
                    letak_power11 = null;
                } else if (angka_posisi == letak_power12) {
                    get_power_up(letak_power12, 'power_12')
                    letak_power12 = null;
                } else if (angka_posisi == letak_power13) {
                    get_power_up(letak_power13, 'power_13')
                    letak_power13 = null;
                } else if (angka_posisi == letak_power14) {
                    get_power_up(letak_power14, 'power_14')
                    letak_power14 = null;
                } else if (angka_posisi == letak_power15) {
                    get_power_up(letak_power15, 'power_15')
                    letak_power15 = null;
                } else if (angka_posisi == letak_power16) {
                    get_power_up(letak_power16, 'power_16')
                    letak_power16 = null;
                }

                if (angka_posisi == 9) {
                    naik_tangga(14, 456, -86, -60, 2, player)
                } else if (angka_posisi == 29) {
                    naik_tangga(69, 608, -464, -5, 4, player)
                } else if (angka_posisi == 73) {
                    naik_tangga(96, 304, -685, -60, 3, player)
                } else if (angka_posisi == 38) {
                    naik_tangga(64, 228, -464, 30, 3.5, player)
                } else if (angka_posisi == 11) {
                    turun_ular(8, 532, 0, player)
                } else if (angka_posisi == 54) {
                    turun_ular(26, 380, -162, player)
                } else if (angka_posisi == 62) {
                    turun_ular(21, 0, -162, player)
                } else if (angka_posisi == 89) {
                    turun_ular(68, 532, -464, player)
                } else {
                    if (angka_posisi_p1 == angka_posisi_p2) {
                        document.getElementById('avatar_p2').style.marginLeft = '20px';
                        document.getElementById('avatar').style.marginLeft = '-15px';
                        document.getElementById('es_p2').style.marginLeft = '5px';
                        document.getElementById('es_p1').style.marginLeft = '-45px';
                    }
                }
                document.getElementById('tombol_acak').removeAttribute('disabled');
                document.getElementById('tombol_stop').removeAttribute('disabled');
                document.getElementById('tombol_acak_p2').removeAttribute('disabled');
                document.getElementById('tombol_stop_p2').removeAttribute('disabled');
                document.getElementById(jenis).style.display = 'none';
                status_item = 0;
            }, 3000)


        }

        function use_power_up(jenis) {
            status_item = status_item + 1;

            if (status_item == 1) {
                aksi = document.getElementById(jenis).className;
                if (aksi == 'hammer_p1') {
                    hammer_aksi('p1', jenis)
                } else if (aksi == 'hammer_p2') {
                    hammer_aksi('p2', jenis)
                } else if (aksi == 'jetpack_p1') {
                    jetpack_aksi('p1', jenis)
                } else if (aksi == 'jetpack_p2') {
                    jetpack_aksi('p2', jenis)
                } else if (aksi == 'freeze_p1') {
                    freeze_aksi('p1', jenis)
                } else if (aksi == 'freeze_p2') {
                    freeze_aksi('p2', jenis)
                } else if (aksi == 'ufo_p1') {
                    ufo_aksi('p1', jenis)
                } else if (aksi == 'ufo_p2') {
                    ufo_aksi('p2', jenis)
                }
            }

            if (power_up_1_p1 == jenis) {
                power_up_1_p1 = null;
            }
            if (power_up_2_p1 == jenis) {
                power_up_2_p1 = null;
            }
            if (power_up_3_p1 == jenis) {
                power_up_3_p1 = null;
            }
            if (power_up_4_p1 == jenis) {
                power_up_4_p1 = null;
            }
            if (power_up_1_p2 == jenis) {
                power_up_1_p2 = null;
            }
            if (power_up_2_p2 == jenis) {
                power_up_2_p2 = null;
            }
            if (power_up_3_p2 == jenis) {
                power_up_3_p2 = null;
            }
            if (power_up_4_p2 == jenis) {
                power_up_4_p2 = null;
            }

        }

        function get_power_up(letak, name) {
            document.getElementById('get_item').play()
            document.getElementById(name).style.transitionDuration = '1.5s';
            document.getElementById(name).style.cursor = 'pointer';

            if (name == 'power_14') {
                power_up_x = 'power_up_14'
            } else if (name == 'power_15') {
                power_up_x = 'power_up_15'
            } else if (name == 'power_16') {
                power_up_x = 'power_up_16'
            } else {
                power_up_x = name;
            }

            if (angka_posisi_p1 == letak) {
                if (!power_up_1_p1 && power_up_1_p1 != 0) {
                    power_up_1_p1 = 0;
                }
                if (!power_up_2_p1 && power_up_2_p1 != 0) {
                    power_up_2_p1 = 0;
                }
                if (!power_up_3_p1 && power_up_3_p1 != 0) {
                    power_up_3_p1 = 0;
                }
                if (!power_up_4_p1 && power_up_4_p1 != 0) {
                    power_up_4_p1 = 0;
                }

                if (power_up_1_p1 == 0) {
                    document.getElementById(name).style.transform = 'scale(1.2)';
                    document.getElementById(power_up_x).style.marginTop = '170px';
                    document.getElementById(power_up_x).style.marginLeft = '-175px';
                    power_up_1_p1 = name;
                    jenis = document.getElementById(name).className;
                    document.getElementById(name).className = jenis + '_p1';

                } else if (power_up_2_p1 == 0) {
                    document.getElementById(name).style.transform = 'scale(1.2)';
                    document.getElementById(power_up_x).style.marginTop = '170px';
                    document.getElementById(power_up_x).style.marginLeft = '-75px';
                    power_up_2_p1 = name;
                    jenis = document.getElementById(name).className;
                    document.getElementById(name).className = jenis + '_p1';

                } else if (power_up_3_p1 == 0) {
                    document.getElementById(name).style.transform = 'scale(1.2)';
                    document.getElementById(power_up_x).style.marginTop = '252px';
                    document.getElementById(power_up_x).style.marginLeft = '-175px';
                    power_up_3_p1 = name;
                    jenis = document.getElementById(name).className;
                    document.getElementById(name).className = jenis + '_p1';

                } else if (power_up_4_p1 == 0) {
                    document.getElementById(name).style.transform = 'scale(1.2)';
                    document.getElementById(power_up_x).style.marginTop = '252px';
                    document.getElementById(power_up_x).style.marginLeft = '-75px';
                    power_up_4_p1 = name;
                    jenis = document.getElementById(name).className;
                    document.getElementById(name).className = jenis + '_p1';

                } else {
                    document.getElementById('modal_info_item_penuh').style.transitionDuration = '1s';
                    document.getElementById('modal_info_item_penuh').style.opacity = '1';

                    setTimeout(function() {
                        document.getElementById('modal_info_item_penuh').style.transitionDuration = '1s';
                        document.getElementById('modal_info_item_penuh').style.opacity = '0';
                    }, 2000)
                }

            } else {
                if (!power_up_1_p2 && power_up_1_p2 != 0) {
                    power_up_1_p2 = 0;
                }
                if (!power_up_2_p2 && power_up_2_p2 != 0) {
                    power_up_2_p2 = 0;
                }
                if (!power_up_3_p2 && power_up_3_p2 != 0) {
                    power_up_3_p2 = 0;
                }
                if (!power_up_4_p2 && power_up_4_p2 != 0) {
                    power_up_4_p2 = 0;
                }

                if (power_up_1_p2 == 0) {
                    document.getElementById(name).style.transform = 'scale(1.2)';
                    document.getElementById(power_up_x).style.marginTop = '550px';
                    document.getElementById(power_up_x).style.marginLeft = '-175px';
                    power_up_1_p2 = name;
                    jenis = document.getElementById(name).className;
                    document.getElementById(name).className = jenis + '_p2';

                } else if (power_up_2_p2 == 0) {
                    document.getElementById(name).style.transform = 'scale(1.2)';
                    document.getElementById(power_up_x).style.marginTop = '550px';
                    document.getElementById(power_up_x).style.marginLeft = '-75px';
                    power_up_2_p2 = name;
                    jenis = document.getElementById(name).className;
                    document.getElementById(name).className = jenis + '_p2';

                } else if (power_up_3_p2 == 0) {
                    document.getElementById(name).style.transform = 'scale(1.2)';
                    document.getElementById(power_up_x).style.marginTop = '632px';
                    document.getElementById(power_up_x).style.marginLeft = '-175px';
                    power_up_3_p2 = name;
                    jenis = document.getElementById(name).className;
                    document.getElementById(name).className = jenis + '_p2';

                } else if (power_up_4_p2 == 0) {
                    document.getElementById(name).style.transform = 'scale(1.2)';
                    document.getElementById(power_up_x).style.marginTop = '632px';
                    document.getElementById(power_up_x).style.marginLeft = '-75px';
                    power_up_4_p2 = name;
                    jenis = document.getElementById(name).className;
                    document.getElementById(name).className = jenis + '_p2';

                } else {
                    document.getElementById('modal_info_item_penuh').style.transitionDuration = '1s';
                    document.getElementById('modal_info_item_penuh').style.opacity = '1';

                    setTimeout(function() {
                        document.getElementById('modal_info_item_penuh').style.transitionDuration = '1s';
                        document.getElementById('modal_info_item_penuh').style.opacity = '0';
                    }, 2000)
                }

            }
        }

        function power_up_sebar() {
            item = Math.random();
            if (item > 0.5) {
                document.getElementById('power_1').className = 'jetpack';
                document.getElementById('power_1').src = 'jetpack.png';
                document.getElementById('power_1').style.transform = 'rotate(40deg)';
            } else {
                document.getElementById('power_1').src = 'hammer.png';
            }

            item = Math.random();
            if (item > 0.5) {
                document.getElementById('power_2').className = 'jetpack';
                document.getElementById('power_2').src = 'jetpack.png';
                document.getElementById('power_2').style.transform = 'rotate(40deg)';
            } else {
                document.getElementById('power_2').src = 'hammer.png';
            }

            item = Math.random();
            if (item > 0.5) {
                document.getElementById('power_3').className = 'jetpack';
                document.getElementById('power_3').src = 'jetpack.png';
                document.getElementById('power_3').style.transform = 'rotate(40deg)';
            } else {
                document.getElementById('power_3').src = 'hammer.png';
            }

            item = Math.random();
            if (item > 0.5) {
                document.getElementById('power_4').className = 'jetpack';
                document.getElementById('power_4').src = 'jetpack.png';
                document.getElementById('power_4').style.transform = 'rotate(40deg)';
            } else {
                document.getElementById('power_4').src = 'hammer.png';
            }

            item = Math.random();
            if (item > 0.5) {
                document.getElementById('power_5').className = 'jetpack';
                document.getElementById('power_5').src = 'jetpack.png';
                document.getElementById('power_5').style.transform = 'rotate(40deg)';
            } else {
                document.getElementById('power_5').src = 'hammer.png';
            }

            item = Math.random();
            if (item > 0.5) {
                document.getElementById('power_6').className = 'jetpack';
                document.getElementById('power_6').src = 'jetpack.png';
                document.getElementById('power_6').style.transform = 'rotate(40deg)';
            } else {
                document.getElementById('power_6').src = 'hammer.png';
            }

            item = Math.random();
            if (item > 0.5) {
                document.getElementById('power_7').className = 'jetpack';
                document.getElementById('power_7').src = 'jetpack.png';
                document.getElementById('power_7').style.transform = 'rotate(40deg)';
            } else {
                document.getElementById('power_7').src = 'hammer.png';
            }

            item = Math.random();
            if (item > 0.5) {
                document.getElementById('power_8').className = 'jetpack';
                document.getElementById('power_8').src = 'jetpack.png';
                document.getElementById('power_8').style.transform = 'rotate(40deg)';
            } else {
                document.getElementById('power_8').src = 'hammer.png';
            }

            item = Math.random();
            if (item > 0.5) {
                document.getElementById('power_9').className = 'jetpack';
                document.getElementById('power_9').src = 'jetpack.png';
                document.getElementById('power_9').style.transform = 'rotate(40deg)';
            } else {
                document.getElementById('power_9').src = 'hammer.png';
            }

            item = Math.random();
            if (item > 0.5) {
                document.getElementById('power_10').className = 'jetpack';
                document.getElementById('power_10').src = 'jetpack.png';
                document.getElementById('power_10').style.transform = 'rotate(40deg)';
            } else {
                document.getElementById('power_10').src = 'hammer.png';
            }

            sebar1 = Math.floor(Math.random() * 9) + 2;
            letak_power1 = 101 - sebar1;
            letak1 = (sebar1 * 75) + 14;
            document.getElementById('power_1').style.transitionDuration = '3s';
            document.getElementById('power_1').style.marginLeft = '' + letak1 + 'px';
            document.getElementById('power_1').style.marginTop = '5px';


            sebar2 = Math.floor(Math.random() * 10) + 1;
            letak_power2 = 80 + sebar2;
            letak2 = (sebar2 * 76) + 14;
            document.getElementById('power_2').style.transitionDuration = '3s';
            document.getElementById('power_2').style.marginLeft = '' + letak2 + 'px';
            document.getElementById('power_2').style.marginTop = '82px';

            sebar2 = Math.floor(Math.random() * 10) + 1;
            letak_power3 = 81 - sebar2;
            letak2 = (sebar2 * 76) + 14;
            document.getElementById('power_3').style.transitionDuration = '3s';
            document.getElementById('power_3').style.marginLeft = '' + letak2 + 'px';
            document.getElementById('power_3').style.marginTop = '158px';

            sebar2 = Math.floor(Math.random() * 10) + 1;
            letak_power4 = 60 + sebar2;
            letak2 = (sebar2 * 76) + 14;
            document.getElementById('power_4').style.transitionDuration = '3s';
            document.getElementById('power_4').style.marginLeft = '' + letak2 + 'px';
            document.getElementById('power_4').style.marginTop = '234px';

            sebar2 = Math.floor(Math.random() * 10) + 1;
            letak_power5 = 61 - sebar2;
            letak2 = (sebar2 * 76) + 14;
            document.getElementById('power_5').style.transitionDuration = '3s';
            document.getElementById('power_5').style.marginLeft = '' + letak2 + 'px';
            document.getElementById('power_5').style.marginTop = '310px';

            sebar2 = Math.floor(Math.random() * 10) + 1;
            letak_power6 = 40 + sebar2;
            letak2 = (sebar2 * 76) + 14;
            document.getElementById('power_6').style.transitionDuration = '3s';
            document.getElementById('power_6').style.marginLeft = '' + letak2 + 'px';
            document.getElementById('power_6').style.marginTop = '386px';

            sebar2 = Math.floor(Math.random() * 10) + 1;
            letak_power7 = 41 - sebar2;
            letak2 = (sebar2 * 76) + 14;
            document.getElementById('power_7').style.transitionDuration = '3s';
            document.getElementById('power_7').style.marginLeft = '' + letak2 + 'px';
            document.getElementById('power_7').style.marginTop = '458px';

            sebar2 = Math.floor(Math.random() * 10) + 1;
            letak_power8 = 20 + sebar2;
            letak2 = (sebar2 * 76) + 14;
            document.getElementById('power_8').style.transitionDuration = '3s';
            document.getElementById('power_8').style.marginLeft = '' + letak2 + 'px';
            document.getElementById('power_8').style.marginTop = '532px';

            sebar2 = Math.floor(Math.random() * 10) + 1;
            letak_power9 = 21 - sebar2;
            letak2 = (sebar2 * 76) + 14;
            document.getElementById('power_9').style.transitionDuration = '3s';
            document.getElementById('power_9').style.marginLeft = '' + letak2 + 'px';
            document.getElementById('power_9').style.marginTop = '608px';

            sebar2 = Math.floor(Math.random() * 8) + 3;
            letak_power10 = sebar2;
            letak2 = (sebar2 * 76) + 14;
            document.getElementById('power_10').style.transitionDuration = '3s';
            document.getElementById('power_10').style.marginLeft = '' + letak2 + 'px';
            document.getElementById('power_10').style.marginTop = '684px';

            powers = [letak_power1, letak_power2, letak_power3, letak_power4, letak_power5, letak_power6, letak_power7, letak_power8, letak_power9, letak_power10]
            loop = true;
            while (loop) {
                cek = 10;
                letak_power11 = Math.round(Math.random() * 96) + 3;
                for (var z = 0; z < powers.length; z++) {
                    if (powers[z] != letak_power11) {
                        cek = cek - 1;
                    }
                }
                if (cek == 0) {
                    powers.push(letak_power11);
                    loop = false;
                }
            }
            letak_power_11_y = Math.floor(letak_power11 / 10) + 1;
            if (letak_power11 % 10 == 0) {
                letak_power_11_y = letak_power_11_y - 1;
            }
            if (letak_power_11_y % 2 == 0) {
                letak_power_11_x = ((letak_power_11_y * 10) + 1) - letak_power11
            } else {
                letak_power_11_x = letak_power11 - ((letak_power_11_y - 1) * 10)
            }
            y = 750 - (letak_power_11_y * 76)
            x = 14 + (letak_power_11_x * 76)
            document.getElementById('power_11').style.transitionDuration = '3s';
            document.getElementById('power_11').style.marginTop = '' + y + 'px';
            document.getElementById('power_11').style.marginLeft = '' + x + 'px';

            loops = true;
            while (loops) {
                cek = 11;
                letak_power12 = Math.round(Math.random() * 96) + 3;
                for (var z = 0; z < powers.length; z++) {
                    if (powers[z] != letak_power12) {
                        cek = cek - 1;
                    }
                }
                if (cek == 0) {
                    powers.push(letak_power12);
                    loops = false;
                }
            }
            letak_power_11_y = Math.floor(letak_power12 / 10) + 1;
            if (letak_power12 % 10 == 0) {
                letak_power_11_y = letak_power_11_y - 1;
            }
            if (letak_power_11_y % 2 == 0) {
                letak_power_11_x = ((letak_power_11_y * 10) + 1) - letak_power12
            } else {
                letak_power_11_x = letak_power12 - ((letak_power_11_y - 1) * 10)
            }
            y = 750 - (letak_power_11_y * 76)
            x = 14 + (letak_power_11_x * 76)
            document.getElementById('power_12').style.transitionDuration = '3s';
            document.getElementById('power_12').style.marginTop = '' + y + 'px';
            document.getElementById('power_12').style.marginLeft = '' + x + 'px';

            loop = true;
            while (loop) {
                cek = 12;
                letak_power13 = Math.round(Math.random() * 96) + 3;
                for (let z = 0; z < powers.length; z++) {
                    if (powers[z] != letak_power13) {
                        cek = cek - 1;
                    }
                }
                if (cek == 0) {
                    powers.push(letak_power13);
                    loop = false;
                }
            }
            letak_power_11_y = Math.floor(letak_power13 / 10) + 1;
            if (letak_power13 % 10 == 0) {
                letak_power_11_y = letak_power_11_y - 1;
            }
            if (letak_power_11_y % 2 == 0) {
                letak_power_11_x = ((letak_power_11_y * 10) + 1) - letak_power13
            } else {
                letak_power_11_x = letak_power13 - ((letak_power_11_y - 1) * 10)
            }
            y = 750 - (letak_power_11_y * 76)
            x = 14 + (letak_power_11_x * 76)
            document.getElementById('power_13').style.transitionDuration = '3s';
            document.getElementById('power_13').style.marginTop = '' + y + 'px';
            document.getElementById('power_13').style.marginLeft = '' + x + 'px';

            loop = true;
            while (loop) {
                cek = 13;
                letak_power14 = Math.round(Math.random() * 96) + 3;
                for (let z = 0; z < powers.length; z++) {
                    if (powers[z] != letak_power14) {
                        cek = cek - 1;
                    }
                }
                if (cek == 0) {
                    powers.push(letak_power14);
                    loop = false;
                }
            }
            letak_power_11_y = Math.floor(letak_power14 / 10) + 1;
            if (letak_power14 % 10 == 0) {
                letak_power_11_y = letak_power_11_y - 1;
            }
            if (letak_power_11_y % 2 == 0) {
                letak_power_11_x = ((letak_power_11_y * 10) + 1) - letak_power14
            } else {
                letak_power_11_x = letak_power14 - ((letak_power_11_y - 1) * 10)
            }
            y = 750 - (letak_power_11_y * 76)
            x = 14 + (letak_power_11_x * 76)
            document.getElementById('power_up_14').style.transitionDuration = '3s';
            document.getElementById('power_up_14').style.marginTop = '' + y + 'px';
            document.getElementById('power_up_14').style.marginLeft = '' + x + 'px';

            loop = true;
            while (loop) {
                cek = 14;
                letak_power15 = Math.round(Math.random() * 96) + 3;
                for (let z = 0; z < powers.length; z++) {
                    if (powers[z] != letak_power15) {
                        cek = cek - 1;
                    }
                }
                if (cek == 0) {
                    powers.push(letak_power15);
                    loop = false;
                }
            }
            letak_power_11_y = Math.floor(letak_power15 / 10) + 1;
            if (letak_power15 % 10 == 0) {
                letak_power_11_y = letak_power_11_y - 1;
            }
            if (letak_power_11_y % 2 == 0) {
                letak_power_11_x = ((letak_power_11_y * 10) + 1) - letak_power15
            } else {
                letak_power_11_x = letak_power15 - ((letak_power_11_y - 1) * 10)
            }
            y = 750 - (letak_power_11_y * 76)
            x = 14 + (letak_power_11_x * 76)
            document.getElementById('power_up_15').style.transitionDuration = '3s';
            document.getElementById('power_up_15').style.marginTop = '' + y + 'px';
            document.getElementById('power_up_15').style.marginLeft = '' + x + 'px';

            loop = true;
            while (loop) {
                cek = 15;
                letak_power16 = Math.round(Math.random() * 96) + 3;
                for (let z = 0; z < powers.length; z++) {
                    if (powers[z] != letak_power16) {
                        cek = cek - 1;
                    }
                }
                if (cek == 0) {
                    powers.push(letak_power16);
                    loop = false;
                }
            }
            letak_power_11_y = Math.floor(letak_power16 / 10) + 1;
            if (letak_power16 % 10 == 0) {
                letak_power_11_y = letak_power_11_y - 1;
            }
            if (letak_power_11_y % 2 == 0) {
                letak_power_11_x = ((letak_power_11_y * 10) + 1) - letak_power16
            } else {
                letak_power_11_x = letak_power16 - ((letak_power_11_y - 1) * 10)
            }
            y = 750 - (letak_power_11_y * 76)
            x = 14 + (letak_power_11_x * 76)
            document.getElementById('power_up_16').style.transitionDuration = '3s';
            document.getElementById('power_up_16').style.marginTop = '' + y + 'px';
            document.getElementById('power_up_16').style.marginLeft = '' + x + 'px';

            console.log(letak_power14, letak_power15, letak_power16)

            setTimeout(function() {
                a = 1;
                while (a <= 16) {
                    document.getElementById('power_' + a + '').style.boxShadow = 'none';
                    a++;
                }
            }, 3000)

        }

        function putar_avatar() {
            if (freeze_p1 == 'ok') {
                return false;
            }
            if (tipe != '') {
                return false;
            }
            putar1 = setTimeout(function() {
                document.getElementById('avatar').style.transform = 'rotateY(180deg)'
            }, 3000)
            putar2 = setTimeout(function() {
                document.getElementById('avatar').style.transform = 'rotateY(-180deg)'
            }, 3500)

            putar3 = setTimeout(function() {
                putar_avatar()
            }, 10000)
        }

        function putar_avatar_p2() {
            if (freeze_p2 == 'ok') {
                return false;
            }
            if (tipe != '') {
                return false;
            }
            putar1_p2 = setTimeout(function() {
                document.getElementById('avatar_p2').style.transform = 'rotateY(-180deg)'
            }, 100)
            putar2_p2 = setTimeout(function() {
                document.getElementById('avatar_p2').style.transform = 'rotateY(180deg)'
            }, 500)

            putar3_p2 = setTimeout(function() {
                putar_avatar_p2()
            }, 10000)
        }

        function acak_aksi() {
            acak_dadu1('p1');
            acak_dadu2('p1');
            document.getElementById('tombol_acak').style.visibility = 'hidden';
            document.getElementById('tombol_stop').style.visibility = 'visible';
        }

        function acak_aksi_p2() {
            acak_dadu1('p2');
            acak_dadu2('p2');
            document.getElementById('tombol_acak_p2').style.visibility = 'hidden';
            document.getElementById('tombol_stop_p2').style.visibility = 'visible';
        }

        function acak_dadu1(player) {
            if (player == 'p1') {
                dadu1_1 = 'dadu_123';
                dadu1_2 = 'dadu_456';
            } else {
                dadu1_1 = 'dadu_123_p2';
                dadu1_2 = 'dadu_456_p2';
            }
            acaks_dadu1 = setInterval(function() {
                if (a1 == 360) {
                    a1 = 0;
                }
                if (!a1 && a1 != 0) {
                    a1 = Math.floor(Math.random() * 3) * 120;
                }

                document.getElementById(dadu1_2).style.transform = 'rotate(' + a1 + 'deg)';
                document.getElementById(dadu1_1).style.transform = 'rotate(' + a1 + 'deg)';


                a1 = a1 + 120;

            }, 10)

            acakss_dadu1 = setInterval(function() {
                if (!b1 && b1 != 0) {
                    b1 = Math.floor(Math.random() * 4) + 1;
                }

                if (b1 % 2 == 0) {
                    document.getElementById(dadu1_2).style.display = 'block';
                    document.getElementById(dadu1_1).style.display = 'none';

                } else {
                    document.getElementById(dadu1_2).style.display = 'none';
                    document.getElementById(dadu1_1).style.display = 'block';

                }

                b1 = b1 + 1;
            }, 50)




        }

        function acak_dadu2(player) {
            if (player == 'p1') {
                dadu2_1 = 'dadu2_123';
                dadu2_2 = 'dadu2_456';
            } else {
                dadu2_1 = 'dadu2_123_p2';
                dadu2_2 = 'dadu2_456_p2';
            }
            acaks_dadu2 = setInterval(function() {
                if (a2 == 360) {
                    a2 = 0;
                }
                if (!a2 && a2 != 0) {
                    a2 = Math.floor(Math.random() * 3) * 120;
                }

                document.getElementById(dadu2_2).style.transform = 'rotate(' + a2 + 'deg)';
                document.getElementById(dadu2_1).style.transform = 'rotate(' + a2 + 'deg)';


                a2 = a2 + 120;
            }, 15)

            acakss_dadu2 = setInterval(function() {
                if (!b2 && b2 != 0) {
                    b2 = Math.floor(Math.random() * 4) + 1;
                }

                if (b2 % 2 == 0) {
                    document.getElementById(dadu2_2).style.display = 'block';
                    document.getElementById(dadu2_1).style.display = 'none';

                } else {
                    document.getElementById(dadu2_2).style.display = 'none';
                    document.getElementById(dadu2_1).style.display = 'block';

                }

                b2 = b2 + 1;
            }, 50)




        }


        function acak_stop(player) {
            document.getElementById('sound').src = 'dice.mp3';
            document.getElementById('sound').play();

            if (player == 'p1') {
                document.getElementById('label_info').innerHTML = "P1 Turn";
                dadu1_1 = 'dadu_123';
                dadu1_2 = 'dadu_456';
                dadu2_1 = 'dadu2_123';
                dadu2_2 = 'dadu2_456';
                document.getElementById('tombol_stop').style.visibility = 'hidden';
                document.getElementById('tombol_acak').style.visibility = 'visible';
                document.getElementById('tombol_acak').disabled = 'true';
                document.getElementById('tombol_acak').style.cursor = 'not-allowed';
            } else {
                document.getElementById('label_info_p2').innerHTML = "P2 Turn";
                dadu1_1 = 'dadu_123_p2';
                dadu1_2 = 'dadu_456_p2';
                dadu2_1 = 'dadu2_123_p2';
                dadu2_2 = 'dadu2_456_p2';
                document.getElementById('tombol_stop_p2').style.visibility = 'hidden';
                document.getElementById('tombol_acak_p2').style.visibility = 'visible';
                document.getElementById('tombol_acak_p2').disabled = 'true';
                document.getElementById('tombol_acak_p2').style.cursor = 'not-allowed';
            }



            clearInterval(acaks_dadu1);
            clearInterval(acakss_dadu1);
            clearInterval(acaks_dadu2);
            clearInterval(acakss_dadu2);

            angka1 = Math.floor(Math.random() * 6) + 1;
            if (angka1 == 1) {
                document.getElementById(dadu1_2).style.display = 'none';
                document.getElementById(dadu1_1).style.display = 'block';
                document.getElementById(dadu1_1).style.transform = 'rotate(120deg)';
            } else if (angka1 == 2) {
                document.getElementById(dadu1_2).style.display = 'none';
                document.getElementById(dadu1_1).style.display = 'block';
                document.getElementById(dadu1_1).style.transform = 'rotate(360deg)';
            } else if (angka1 == 3) {
                document.getElementById(dadu1_2).style.display = 'none';
                document.getElementById(dadu1_1).style.display = 'block';
                document.getElementById(dadu1_1).style.transform = 'rotate(240deg)';
            } else if (angka1 == 4) {
                document.getElementById(dadu1_1).style.display = 'none';
                document.getElementById(dadu1_2).style.display = 'block';
                document.getElementById(dadu1_2).style.transform = 'rotate(240deg)';
            } else if (angka1 == 5) {
                document.getElementById(dadu1_1).style.display = 'none';
                document.getElementById(dadu1_2).style.display = 'block';
                document.getElementById(dadu1_2).style.transform = 'rotate(120deg)';
            } else {
                document.getElementById(dadu1_1).style.display = 'none';
                document.getElementById(dadu1_2).style.display = 'block';
                document.getElementById(dadu1_2).style.transform = 'rotate(360deg)';
            }


            angka2 = Math.floor(Math.random() * 6) + 1;
            if (angka2 == 1) {
                document.getElementById(dadu2_2).style.display = 'none';
                document.getElementById(dadu2_1).style.display = 'block';
                document.getElementById(dadu2_1).style.transform = 'rotate(120deg)';
            } else if (angka2 == 2) {
                document.getElementById(dadu2_2).style.display = 'none';
                document.getElementById(dadu2_1).style.display = 'block';
                document.getElementById(dadu2_1).style.transform = 'rotate(360deg)';
            } else if (angka2 == 3) {
                document.getElementById(dadu2_2).style.display = 'none';
                document.getElementById(dadu2_1).style.display = 'block';
                document.getElementById(dadu2_1).style.transform = 'rotate(240deg)';
            } else if (angka2 == 4) {
                document.getElementById(dadu2_1).style.display = 'none';
                document.getElementById(dadu2_2).style.display = 'block';
                document.getElementById(dadu2_2).style.transform = 'rotate(240deg)';
            } else if (angka2 == 5) {
                document.getElementById(dadu2_1).style.display = 'none';
                document.getElementById(dadu2_2).style.display = 'block';
                document.getElementById(dadu2_2).style.transform = 'rotate(120deg)';
            } else {
                document.getElementById(dadu2_1).style.display = 'none';
                document.getElementById(dadu2_2).style.display = 'block';
                document.getElementById(dadu2_2).style.transform = 'rotate(360deg)';
            }

            angka = angka1 + angka2;

            if (angka == 1) {
                sound_number = 'satu.mp3'
            } else if (angka == 2) {
                sound_number = 'dua.mp3'
            } else if (angka == 3) {
                sound_number = 'tiga.mp3'
            } else if (angka == 4) {
                sound_number = 'empat.mp3'
            } else if (angka == 5) {
                sound_number = 'lima.mp3'
            } else if (angka == 6) {
                sound_number = 'enam.mp3'
            } else if (angka == 7) {
                sound_number = 'tujuh.mp3'
            } else if (angka == 8) {
                sound_number = 'delapan.mp3'
            } else if (angka == 9) {
                sound_number = 'sembilan.mp3'
            } else if (angka == 10) {
                sound_number = 'sepuluh.mp3'
            } else if (angka == 11) {
                sound_number = 'sebelas.mp3'
            } else if (angka == 12) {
                sound_number = 'duabelas.mp3'
            }

            setTimeout(function() {
                document.getElementById('sound').src = sound_number;
                document.getElementById('sound').play();
            }, 300)

            if (player == 'p1') {
                document.getElementById('label_info').className = "label_angka";
                document.getElementById('label_info').innerHTML = angka;
            } else {
                document.getElementById('label_info_p2').className = "label_angka_p2";
                document.getElementById('label_info_p2').innerHTML = angka;
            }

            setTimeout(function() {
                avatar_jalan_aksi(player);
            }, 500)






        }

        function avatar_jalan_aksi(player) {

            if (player == 'p2') {
                posisi = posisi_p2;
                angka_posisi = angka_posisi_p2;
                avatar_jalan = 'avatar_jalan_p2';

                if (freeze_p2 == 'ok') {
                    document.getElementById('modal_info_beku').transitionDuration = '500ms';
                    document.getElementById('modal_info_beku').style.opacity = '1';

                    setTimeout(function() {
                        document.getElementById('modal_info_beku').transitionDuration = '500ms';
                        document.getElementById('modal_info_beku').style.opacity = '0';
                    }, 2000)

                    setTimeout(function() {
                        document.getElementById('tombol_acak_p2').removeAttribute('disabled');
                        document.getElementById('tombol_acak_p2').style.cursor = 'pointer';
                        document.getElementById('tempat_dadu_p2').style.display = 'none';
                        document.getElementById('tempat_dadu').style.display = 'block';
                        document.getElementById('label_info').className = "label_info";
                        document.getElementById('label_info').innerHTML = "P1 Turn";
                        document.getElementById('profil_tutup').style.display = 'none';
                        document.getElementById('profil_tutup_p2').style.display = 'block';
                        freeze_p2 = 'done';
                    }, 4000)
                    return false;

                }
            } else {
                posisi = posisi_p1;
                angka_posisi = angka_posisi_p1;
                avatar_jalan = 'avatar_jalan';

                if (freeze_p1 == 'ok') {
                    document.getElementById('modal_info_beku').transitionDuration = '500ms';
                    document.getElementById('modal_info_beku').style.opacity = '1';

                    setTimeout(function() {
                        document.getElementById('modal_info_beku').transitionDuration = '500ms';
                        document.getElementById('modal_info_beku').style.opacity = '0';
                    }, 2000)

                    setTimeout(function() {
                        document.getElementById('tombol_acak').removeAttribute('disabled');
                        document.getElementById('tombol_acak').style.cursor = 'pointer';
                        document.getElementById('tempat_dadu_p2').style.display = 'block';
                        document.getElementById('tempat_dadu').style.display = 'none';
                        document.getElementById('label_info_p2').className = "label_info_p2";
                        document.getElementById('label_info_p2').innerHTML = "P2 Turn";
                        document.getElementById('profil_tutup').style.display = 'block';
                        document.getElementById('profil_tutup_p2').style.display = 'none';
                        freeze_p1 = 'done';
                    }, 4000)
                    return false;

                }
            }


            document.getElementById(avatar_jalan).style.transitionDuration = '100ms';

            if (!loncat) {
                var loncat = 1;
                var end = angka * 2;
            }

            sound_step = setInterval(function() {
                document.getElementById('sound_step').play()
            }, 300)

            var jalan = setInterval(function() {
                document.getElementById('avatar_p2').style.marginLeft = '5px';
                document.getElementById('avatar').style.marginLeft = '5px';
                document.getElementById('es_p2').style.marginLeft = '-20px';
                document.getElementById('es_p1').style.marginLeft = '-20px';

                posisi = posisi + 38;

                if (angka_posisi == 100) {
                    if (player == 'p2') {
                        lap_p2 = lap_p2 + 1;
                        posisi = 38;
                        angka_posisi = 1;
                        document.getElementById('lap_p2').innerHTML = 'Putaran : ' + lap_p2;
                        document.getElementById('modal_info_lap').transitionDuration = '1s';
                        document.getElementById('modal_info_lap').style.opacity = '1';
                        document.getElementById('info_lap').innerHTML = "Kerja Bagus Player 2 - Lewati " + (jumlah_lap - lap_p2) + " Putaran lagi Untuk Menang";

                        setTimeout(function() {
                            document.getElementById('modal_info_lap').style.opacity = '0';
                        }, 4000)
                    } else {
                        lap_p1 = lap_p1 + 1;
                        posisi = 38;
                        angka_posisi = 1;
                        document.getElementById('lap_p1').innerHTML = 'Putaran : ' + lap_p1;
                        document.getElementById('modal_info_lap').transitionDuration = '1s';
                        document.getElementById('modal_info_lap').style.opacity = '1';
                        document.getElementById('info_lap').innerHTML = "Kerja Bagus Player 1 - Lewati " + (jumlah_lap - lap_p1) + " Putaran lagi Untuk Menang";

                        setTimeout(function() {
                            document.getElementById('modal_info_lap').style.opacity = '0';
                        }, 4000)
                    }

                }

                if (angka_posisi > 89 && angka_posisi < 100) {

                    if (angka_posisi == 90) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-723px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else if (angka_posisi == 90.5) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-685px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else {
                        posisi = posisi - 76;
                        if (loncat % 2 != 0) {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-723px)';
                        } else {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-685px)';
                            angka_posisi = angka_posisi + 1;
                        }
                    }

                }

                if (angka_posisi > 79 && angka_posisi < 90) {
                    if (angka_posisi == 80) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-650px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else if (angka_posisi == 80.5) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-612px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else {
                        if (loncat % 2 != 0) {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-650px)';
                        } else {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-612px)';
                            angka_posisi = angka_posisi + 1;
                        }
                    }
                }

                if (angka_posisi > 69 && angka_posisi < 80) {

                    if (angka_posisi == 70) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-573px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else if (angka_posisi == 70.5) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-537px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else {
                        posisi = posisi - 76;
                        if (loncat % 2 != 0) {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-573px)';
                        } else {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-537px)';
                            angka_posisi = angka_posisi + 1;
                        }
                    }

                }

                if (angka_posisi > 59 && angka_posisi < 70) {
                    if (angka_posisi == 60) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-500px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else if (angka_posisi == 60.5) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-464px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else {
                        if (loncat % 2 != 0) {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-500px)';
                        } else {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-464px)';
                            angka_posisi = angka_posisi + 1;
                        }
                    }
                }

                if (angka_posisi > 49 && angka_posisi < 60) {

                    if (angka_posisi == 50) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-425px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else if (angka_posisi == 50.5) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-389px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else {
                        posisi = posisi - 76;
                        if (loncat % 2 != 0) {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-425px)';
                        } else {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-389px)';
                            angka_posisi = angka_posisi + 1;
                        }
                    }

                }

                if (angka_posisi > 39 && angka_posisi < 50) {
                    if (angka_posisi == 40) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-352px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else if (angka_posisi == 40.5) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-314px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else {
                        if (loncat % 2 != 0) {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-352px)';
                        } else {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-314px)';
                            angka_posisi = angka_posisi + 1;
                        }
                    }
                }

                if (angka_posisi > 29 && angka_posisi < 40) {

                    if (angka_posisi == 30) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-276px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else if (angka_posisi == 30.5) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-238px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else {
                        posisi = posisi - 76;
                        if (loncat % 2 != 0) {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-276px)';
                        } else {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-238px)';
                            angka_posisi = angka_posisi + 1;
                        }
                    }

                }


                if (angka_posisi > 19 && angka_posisi < 30) {
                    if (angka_posisi == 20) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-200px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else if (angka_posisi == 20.5) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-162px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else {
                        if (loncat % 2 != 0) {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-200px)';
                        } else {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-162px)';
                            angka_posisi = angka_posisi + 1;
                        }
                    }
                }
                if (angka_posisi > 9 && angka_posisi < 20) {

                    if (angka_posisi == 10) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-124px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else if (angka_posisi == 10.5) {
                        posisi = posisi - 38;
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-86px)';
                        angka_posisi = angka_posisi + 0.5;
                    } else {
                        posisi = posisi - 76;
                        if (loncat % 2 != 0) {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-124px)';
                        } else {
                            document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-86px)';
                            angka_posisi = angka_posisi + 1;
                        }
                    }

                }
                if (angka_posisi > 0 && angka_posisi < 10) {
                    if (loncat % 2 != 0) {
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,-38px)';
                    } else {
                        document.getElementById(avatar_jalan).style.transform = 'translate(' + posisi + 'px,0px)';
                        angka_posisi = angka_posisi + 1;
                    }
                }
                loncat = loncat + 1;

                if (player == 'p2') {
                    posisi_p2 = posisi;
                    angka_posisi_p2 = angka_posisi;
                } else {
                    posisi_p1 = posisi;
                    angka_posisi_p1 = angka_posisi;
                }

                if (loncat > end) {
                    if (freeze_p1 == 'done') {
                        document.getElementById('es_p1').style.opacity = '0';
                        freeze_p1 = null;
                        putar_avatar()
                    } else if (freeze_p2 == 'done') {
                        document.getElementById('es_p2').style.opacity = '0';
                        freeze_p2 = null;
                        putar_avatar_p2()
                    }

                    clearInterval(jalan);
                    clearInterval(sound_step);

                    if (angka_posisi == letak_power1) {
                        get_power_up(letak_power1, 'power_1')
                        letak_power1 = null;
                    } else if (angka_posisi == letak_power2) {
                        get_power_up(letak_power2, 'power_2')
                        letak_power2 = null;
                    } else if (angka_posisi == letak_power3) {
                        get_power_up(letak_power3, 'power_3')
                        letak_power3 = null;
                    } else if (angka_posisi == letak_power4) {
                        get_power_up(letak_power4, 'power_4')
                        letak_power4 = null;
                    } else if (angka_posisi == letak_power5) {
                        get_power_up(letak_power5, 'power_5')
                        letak_power5 = null;
                    } else if (angka_posisi == letak_power6) {
                        get_power_up(letak_power6, 'power_6')
                        letak_power6 = null;
                    } else if (angka_posisi == letak_power7) {
                        get_power_up(letak_power7, 'power_7')
                        letak_power7 = null;
                    } else if (angka_posisi == letak_power8) {
                        get_power_up(letak_power8, 'power_8')
                        letak_power8 = null;
                    } else if (angka_posisi == letak_power9) {
                        get_power_up(letak_power9, 'power_9')
                        letak_power9 = null;
                    } else if (angka_posisi == letak_power10) {
                        get_power_up(letak_power10, 'power_10')
                        letak_power10 = null;
                    } else if (angka_posisi == letak_power11) {
                        get_power_up(letak_power11, 'power_11')
                        letak_power11 = null;
                    } else if (angka_posisi == letak_power12) {
                        get_power_up(letak_power12, 'power_12')
                        letak_power12 = null;
                    } else if (angka_posisi == letak_power13) {
                        get_power_up(letak_power13, 'power_13')
                        letak_power13 = null;
                    } else if (angka_posisi == letak_power14) {
                        get_power_up(letak_power14, 'power_14')
                        letak_power14 = null;
                    } else if (angka_posisi == letak_power15) {
                        get_power_up(letak_power15, 'power_15')
                        letak_power15 = null;
                    } else if (angka_posisi == letak_power16) {
                        get_power_up(letak_power16, 'power_16')
                        letak_power16 = null;
                    }

                    if (angka_posisi == 9) {
                        naik_tangga(14, 456, -86, -60, 2, player)
                    } else if (angka_posisi == 29) {
                        naik_tangga(69, 608, -464, -5, 4, player)
                    } else if (angka_posisi == 73) {
                        naik_tangga(96, 304, -685, -60, 3, player)
                    } else if (angka_posisi == 38) {
                        naik_tangga(64, 228, -464, 30, 3.5, player)
                    } else if (angka_posisi == 11) {
                        turun_ular(8, 532, 0, player)
                    } else if (angka_posisi == 54) {
                        turun_ular(26, 380, -162, player)
                    } else if (angka_posisi == 62) {
                        turun_ular(21, 0, -162, player)
                    } else if (angka_posisi == 89) {
                        turun_ular(68, 532, -464, player)
                    } else {
                        if (player == 'p2') {
                            document.getElementById('tombol_acak_p2').removeAttribute('disabled');
                            document.getElementById('tombol_acak_p2').style.cursor = 'pointer';
                            document.getElementById('tempat_dadu_p2').style.display = 'none';
                            document.getElementById('tempat_dadu').style.display = 'block';
                            document.getElementById('label_info').className = "label_info";
                            document.getElementById('label_info').innerHTML = "P1 Turn";
                            document.getElementById('profil_tutup_p2').style.display = 'block';
                            document.getElementById('profil_tutup').style.display = 'none';


                        } else {
                            document.getElementById('tombol_acak').removeAttribute('disabled');
                            document.getElementById('tombol_acak').style.cursor = 'pointer';
                            document.getElementById('tempat_dadu_p2').style.display = 'block';
                            document.getElementById('tempat_dadu').style.display = 'none';
                            document.getElementById('label_info_p2').className = "label_info_p2";
                            document.getElementById('label_info_p2').innerHTML = "P2 Turn";
                            document.getElementById('profil_tutup').style.display = 'block';
                            document.getElementById('profil_tutup_p2').style.display = 'none';

                        }

                        if (freeze_p1 == 'ok') {
                            document.getElementById('profil_tutup').style.display = 'block';
                        } else if (freeze_p2 == 'ok') {
                            document.getElementById('profil_tutup_p2').style.display = 'block';
                        }

                        if (angka_posisi_p1 == angka_posisi_p2) {
                            document.getElementById('avatar_p2').style.marginLeft = '20px';
                            document.getElementById('avatar').style.marginLeft = '-15px';
                            document.getElementById('es_p2').style.marginLeft = '5px';
                            document.getElementById('es_p1').style.marginLeft = '-45px';

                        }
                    }
                }

            }, 150)

        }

        function naik_tangga(nt1, nt2, nt3, nt4, nt5, player) {

            if (player == 'p2') {
                angka_posisi_p2 = nt1;
                posisi_p2 = nt2;
                avatar_naik_tangga = 'avatar_p2'
                avatar_naik_tangga2 = 'avatar_jalan_p2'
            } else {
                angka_posisi_p1 = nt1;
                posisi_p1 = nt2;
                avatar_naik_tangga = 'avatar'
                avatar_naik_tangga2 = 'avatar_jalan'
            }
            angka_posisi = nt1;
            time = nt5 * 1000;

            document.getElementById(avatar_naik_tangga).style.transitionDuration = '300ms';
            document.getElementById(avatar_naik_tangga).style.transform = 'rotate(' + nt4 + 'deg)';

            setTimeout(function() {
                document.getElementById(avatar_naik_tangga2).style.transitionDuration = '' + nt5 + 's';
                document.getElementById(avatar_naik_tangga2).style.transform = 'translate(' + nt2 + 'px,' + nt3 + 'px)';

            }, 300)

            setTimeout(function() {
                if (angka_posisi == letak_power1) {
                    get_power_up(letak_power1, 'power_1')
                    letak_power1 = null;
                } else if (angka_posisi == letak_power2) {
                    get_power_up(letak_power2, 'power_2')
                    letak_power2 = null;
                } else if (angka_posisi == letak_power3) {
                    get_power_up(letak_power3, 'power_3')
                    letak_power3 = null;
                } else if (angka_posisi == letak_power4) {
                    get_power_up(letak_power4, 'power_4')
                    letak_power4 = null;
                } else if (angka_posisi == letak_power5) {
                    get_power_up(letak_power5, 'power_5')
                    letak_power5 = null;
                } else if (angka_posisi == letak_power6) {
                    get_power_up(letak_power6, 'power_6')
                    letak_power6 = null;
                } else if (angka_posisi == letak_power7) {
                    get_power_up(letak_power7, 'power_7')
                    letak_power7 = null;
                } else if (angka_posisi == letak_power8) {
                    get_power_up(letak_power8, 'power_8')
                    letak_power8 = null;
                } else if (angka_posisi == letak_power9) {
                    get_power_up(letak_power9, 'power_9')
                    letak_power9 = null;
                } else if (angka_posisi == letak_power10) {
                    get_power_up(letak_power10, 'power_10')
                    letak_power10 = null;
                } else if (angka_posisi == letak_power11) {
                    get_power_up(letak_power11, 'power_11')
                    letak_power11 = null;
                } else if (angka_posisi == letak_power12) {
                    get_power_up(letak_power12, 'power_12')
                    letak_power12 = null;
                } else if (angka_posisi == letak_power13) {
                    get_power_up(letak_power13, 'power_13')
                    letak_power13 = null;
                } else if (angka_posisi == letak_power14) {
                    get_power_up(letak_power14, 'power_14')
                    letak_power14 = null;
                } else if (angka_posisi == letak_power15) {
                    get_power_up(letak_power15, 'power_15')
                    letak_power15 = null;
                } else if (angka_posisi == letak_power16) {
                    get_power_up(letak_power16, 'power_16')
                    letak_power16 = null;
                }


                if (angka_posisi_p1 == angka_posisi_p2) {
                    document.getElementById('avatar_p2').style.marginLeft = '20px';
                    document.getElementById('avatar').style.marginLeft = '-15px';
                    document.getElementById('es_p2').style.marginLeft = '5px';
                    document.getElementById('es_p1').style.marginLeft = '-45px';
                } else {
                    document.getElementById('avatar_p2').style.marginLeft = '5px';
                    document.getElementById('avatar').style.marginLeft = '5px';
                    document.getElementById('es_p2').style.marginLeft = '-20px';
                    document.getElementById('es_p1').style.marginLeft = '-20px';
                }

                if (player == 'p2') {
                    document.getElementById('avatar_p2').style.transform = 'rotate(0deg)';
                    document.getElementById('tombol_acak_p2').removeAttribute('disabled');
                    document.getElementById('tombol_acak_p2').style.cursor = 'pointer';
                    document.getElementById('tempat_dadu').style.display = 'block';
                    document.getElementById('tempat_dadu_p2').style.display = 'none';
                    document.getElementById('label_info').className = "label_info";
                    document.getElementById('label_info').innerHTML = "P1 Turn";
                    document.getElementById('profil_tutup').style.display = 'none';
                    document.getElementById('profil_tutup_p2').style.display = 'block';
                    putar_avatar_p2()
                } else {
                    document.getElementById('avatar').style.transform = 'rotate(0deg)';
                    document.getElementById('tombol_acak').removeAttribute('disabled');
                    document.getElementById('tombol_acak').style.cursor = 'pointer';
                    document.getElementById('tempat_dadu_p2').style.display = 'block';
                    document.getElementById('tempat_dadu').style.display = 'none';
                    document.getElementById('label_info_p2').className = "label_info_p2";
                    document.getElementById('label_info_p2').innerHTML = "P2 Turn";
                    document.getElementById('profil_tutup').style.display = 'block';
                    document.getElementById('profil_tutup_p2').style.display = 'none';
                    putar_avatar()
                }

            }, time)
        }

        function turun_ular(nt1, nt2, nt3, player) {

            if (player == 'p2') {
                angka_posisi_p2 = nt1;
                posisi_p2 = nt2;
                avatar_turun_ular = 'avatar_p2';
                avatar_turun_ular2 = 'avatar_jalan_p2'
            } else {
                angka_posisi_p1 = nt1;
                posisi_p1 = nt2;
                avatar_turun_ular = 'avatar';
                avatar_turun_ular2 = 'avatar_jalan'
            }

            angka_posisi = nt1;

            document.getElementById(avatar_turun_ular).style.transitionDuration = '1s';
            document.getElementById(avatar_turun_ular).style.opacity = '0';

            setTimeout(function() {
                document.getElementById(avatar_turun_ular).style.transitionDuration = '0s';
                document.getElementById(avatar_turun_ular).style.transform = 'scale(0)';
            }, 900)

            setTimeout(function() {
                document.getElementById(avatar_turun_ular2).style.transitionDuration = '0s';
                document.getElementById(avatar_turun_ular2).style.transform = 'translate(' + nt2 + 'px,' + nt3 + 'px)';
                document.getElementById(avatar_turun_ular).style.transitionDuration = '1s';
                document.getElementById(avatar_turun_ular).style.transform = 'scale(1)';
                document.getElementById(avatar_turun_ular).style.opacity = '1';
            }, 1000)

            setTimeout(function() {
                if (angka_posisi == letak_power1) {
                    get_power_up(letak_power1, 'power_1')
                    letak_power1 = null;
                } else if (angka_posisi == letak_power2) {
                    get_power_up(letak_power2, 'power_2')
                    letak_power2 = null;
                } else if (angka_posisi == letak_power3) {
                    get_power_up(letak_power3, 'power_3')
                    letak_power3 = null;
                } else if (angka_posisi == letak_power4) {
                    get_power_up(letak_power4, 'power_4')
                    letak_power4 = null;
                } else if (angka_posisi == letak_power5) {
                    get_power_up(letak_power5, 'power_5')
                    letak_power5 = null;
                } else if (angka_posisi == letak_power6) {
                    get_power_up(letak_power6, 'power_6')
                    letak_power6 = null;
                } else if (angka_posisi == letak_power7) {
                    get_power_up(letak_power7, 'power_7')
                    letak_power7 = null;
                } else if (angka_posisi == letak_power8) {
                    get_power_up(letak_power8, 'power_8')
                    letak_power8 = null;
                } else if (angka_posisi == letak_power9) {
                    get_power_up(letak_power9, 'power_9')
                    letak_power9 = null;
                } else if (angka_posisi == letak_power10) {
                    get_power_up(letak_power10, 'power_10')
                    letak_power10 = null;
                } else if (angka_posisi == letak_power11) {
                    get_power_up(letak_power11, 'power_11')
                    letak_power11 = null;
                } else if (angka_posisi == letak_power12) {
                    get_power_up(letak_power12, 'power_12')
                    letak_power12 = null;
                } else if (angka_posisi == letak_power13) {
                    get_power_up(letak_power13, 'power_13')
                    letak_power13 = null;
                } else if (angka_posisi == letak_power14) {
                    get_power_up(letak_power14, 'power_14')
                    letak_power14 = null;
                } else if (angka_posisi == letak_power15) {
                    get_power_up(letak_power15, 'power_15')
                    letak_power15 = null;
                } else if (angka_posisi == letak_power16) {
                    get_power_up(letak_power16, 'power_16')
                    letak_power16 = null;
                }


                if (angka_posisi_p1 == angka_posisi_p2) {
                    document.getElementById('avatar_p2').style.marginLeft = '20px';
                    document.getElementById('avatar').style.marginLeft = '-15px';
                    document.getElementById('es_p2').style.marginLeft = '5px';
                    document.getElementById('es_p1').style.marginLeft = '-45px';
                } else {
                    document.getElementById('avatar_p2').style.marginLeft = '5px';
                    document.getElementById('avatar').style.marginLeft = '5px';
                    document.getElementById('es_p2').style.marginLeft = '-20px';
                    document.getElementById('es_p1').style.marginLeft = '-20px';
                }

                document.getElementById(avatar_turun_ular).style.transform = 'rotate(0deg)';

                if (player == 'p2') {
                    document.getElementById('tombol_acak_p2').removeAttribute('disabled');
                    document.getElementById('tombol_acak_p2').style.cursor = 'pointer';
                    document.getElementById('tempat_dadu').style.display = 'block';
                    document.getElementById('tempat_dadu_p2').style.display = 'none';
                    document.getElementById('label_info').className = "label_info";
                    document.getElementById('label_info').innerHTML = "P1 Turn";
                    document.getElementById('profil_tutup').style.display = 'none';
                    document.getElementById('profil_tutup_p2').style.display = 'block';
                    putar_avatar_p2()
                } else {
                    document.getElementById('tombol_acak').removeAttribute('disabled');
                    document.getElementById('tombol_acak').style.cursor = 'pointer';
                    document.getElementById('tempat_dadu_p2').style.display = 'block';
                    document.getElementById('tempat_dadu').style.display = 'none';
                    document.getElementById('label_info_p2').className = "label_info_p2";
                    document.getElementById('label_info_p2').innerHTML = "P2 Turn";
                    document.getElementById('profil_tutup').style.display = 'block';
                    document.getElementById('profil_tutup_p2').style.display = 'none';
                    putar_avatar()
                }

            }, 2100)
        }

        function show_body() {
            document.getElementById('body').style.display = 'block';
        }
    </script>


</body>

</html>