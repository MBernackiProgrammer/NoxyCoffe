<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        html{
            margin: 0;
        }
        .UpDiv
        {
            position: absolute;
            width: 100%;
            height: 75px;
            background-color: red;
            top: 0px;
        }

        .MidleDiv
        {
            position: absolute;
            width: 100%;
            height: 400px;
            background-color: green;
            top: 75px;

            z-index: 2;
        }

        .DownDiv
        {
            position: absolute;
            width: 100%;
            height: 400px;
            background-color: greenyellow;
            top: 475px;
        }

        .CellMiddle
        {
            position: relative;
            width: 33.33%;
            float: left;
            
            height: 100%;
        }

        .InsideCell
        {
            position: relative;
            top: calc(50% - 150px);
            left: calc(50% - 150px);
            height: 300px;
            width: 300px;
            background-color: lightblue;
            z-index: 0;
            border-radius: 300px;
            color: transparent;
            transition: width 0.5s, z-index 0.5s;
            text-align: center;
            
        }

        .InsideCell:hover
        {
            width: 600px;
            z-index: 3;
            color: white;
        }

        .InsideCellLeft
        {
            position: relative;
            top: calc(50% - 150px);
            left: calc(50% - 150px);
            height: 300px;
            width: 300px;
            background-color: red;
            color: transparent;
            z-index: 0;
            text-align: center;
            transition: width 0.5s, left 0.5s;
            
            border-radius: 300px;
        }

        .InsideCellLeft:hover
        {
            width: 600px;
            left: calc(50% - 450px);
            color:white;
            z-index: 1;
           
        }

        .FotoLeft
        {
            width: 300px;
            height: 300px;
            float: left;
            background-image: url(Kawa.png);
            background-repeat: no-repeat;
            background-position: center, center; 
            background-size: 304px 304px;
            position: absolute;
            top: 0px;
            right: 0px;
        }

        .LeftTextLeft
        {
            float: left;
            width: 300px;
            height: 100%;
            position: relative;
            
        }

        .Foto
        {
            width: 300px;
            height: 300px;
            float: left;
            background-image: url(Kawa.png);
            background-repeat: no-repeat;
            background-position: center, center; 
            background-size: 304px 304px;
            position: absolute;
            top: 0px;
            left: 0px;
        }

        .LeftText
        {
            float: right;
            width: 300px;
            height: 100%;
            position: relative;
            
            
        }

        .VidoHelper
        {
            position: absolute;
            top: 200px;
            width: 100%;
        }

        video
        {
            width: 405px;
            height: 720px;
        }

        .InVideo
        {
            position: absolute;
            top: 0px;
            margin-top: -225px;
        }

        .TextCuter
        {
            position: relative;
            top: calc(50% - 150px);
            left: calc(50% - 150px);
        }

        svg{
            font-size: 6em;
            position: relative;
            top: -200px;
        }

        text{
            position:relative;
            left: 0px;
        }

        

        #Cofe
        {
            background-image: url("Kawa.png");
        }

        #Tea
        {
            background-image: url("Herbata.png");
        }

        #Yerba
        {
            background-image: url("Yerba.png");
        }

        #CofeVideo
        {
            clip-path: url(#text-overlay);
        }

        #TeaVideo
        {
            clip-path: url(#text-overlay-v2);
        }

        #YerbaVideo
        {
            clip-path: url(#text-overlay-v3);
        }

        .VidoHelper
        {
            
        }

        #YerbaIDWideo
        {
            margin-left: 59%;
        }

        #TeaIDWideo
        {
            margin-left: 30%;
        }

    </style>

</head>
<body>
    <div class="UpDiv">
        

    </div>
    <div class="MidleDiv">

        <div class="VidoHelper">
            <div class="InVideo" id="CoffeIDWideo">
                <video src="BGWideo.mov" id="CofeVideo" autoplay loop muted></video>
            </div>
            <div class="InVideo" id="TeaIDWideo">
                <video src="BGWideoTea.mov" id="TeaVideo" autoplay loop muted></video>
            </div>
            <div class="InVideo" id="YerbaIDWideo">
                <video src="BGWideoYerba.mov" id="YerbaVideo" autoplay loop muted></video>
            </div>
        </div>

        <div class="CellMiddle">
            <div class="InsideCell" onmouseover="In()" onmouseout="Out()">
                <div class="Foto" id="Cofe">
                
                </div>

                <div class="LeftText">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a quam massa. Donec cursus eu dolor id fermentum. Aliquam maximus elit vitae libero tincidunt lacinia. Nulla nec risus vulputate, arcu mi fringilla nulla, at rhoncus ligula risus et justo. Pellentesque eget pharetra justo.
                </div>
            </div>
<div class="TextCuter">
            <svg heitht="100%" width="100%">
                <clipPath id="text-overlay">
                    <text x="50%" y="450px" fill="red" text-anchor="middle" font-family="Arial, Helvetica, sans-serif" Font-weight="bold">
                        KAWA
                    </text>
                </clipPath>
            </svg>
            </div>

        </div>
        <div class="CellMiddle" >
            <div class="InsideCell" onmouseover="In()" onmouseout="Out()">
                <div class="Foto" id="Tea">
                
                </div>
                <div class="LeftText">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a quam massa. Donec cursus eu dolor id fermentum. Aliquam maximus elit vitae libero tincidunt lacinia. Nulla nec risus vulputate, arcu mi fringilla nulla, at rhoncus ligula risus et justo. Pellentesque eget pharetra justo.
                </div>
            </div>

            <svg heitht="100%" width="100%">
                <clipPath id="text-overlay-v2">
                    <text x="150%" y="450px" fill="red" text-anchor="middle" font-family="Arial, Helvetica, sans-serif" Font-weight="bold">
                        HERBATA
                    </text>
                </clipPath>
            </svg>

        </div>
        <div class="CellMiddle">
            <div class="InsideCellLeft" onmouseover="In()" onmouseout="Out()">
                
                
                <div class="LeftTextLeft">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a quam massa. Donec cursus eu dolor id fermentum. Aliquam maximus elit vitae libero tincidunt lacinia. Nulla nec risus vulputate, arcu mi fringilla nulla, at rhoncus ligula risus et justo. Pellentesque eget pharetra justo.
                    <form>
                        <input type="button" value="Zobacz więcej">
                    </form>
                </div>

                <div class="FotoLeft" id="Yerba">
                
                </div>
            </div>

            <svg heitht="100%" width="100%">
                    <clipPath id="text-overlay-v3">
                        <text x="250%" y="450px" fill="red" text-anchor="middle" font-family="Arial, Helvetica, sans-serif" Font-weight="bold">
                            YERBA
                        </text>
                    </clipPath>
            </svg>

        </div>
    </div>
    <div class="DownDiv"></div>
</body>

<script>

    MiddleDiv = document.querySelector('.MidleDiv');
    
    function In()
    {
        //MiddleDiv.style.;
        //MiddleDiv.style.zIndex = "1";

        MiddleDiv.style.filter.blur = "32px";

        MiddleDiv.style.zIndex = "2";

        console.log("in");

    }

    function Out()
    {
        console.log("out");
    }
</script>

</html>