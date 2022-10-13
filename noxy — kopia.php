<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
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
            background-color: gray;
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
            transition: width 0.5s, z-index 0.5s, color 0.5;

            
        }

        .InsideCell:hover
        {
            width: 600px;
            z-index: 1;
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
            right: 0px;
        }

        .LeftText
        {
            float: left;
            width: 300px;
            height: 100%;
            position: relative;
            
        }

/*
        #Cofe
        {
            z-index: 1;
        }

        #Tea
        {
            z-index: 0;
        }

        #Yerba
        {
            z-index: 0;
        }*/
    </style>

</head>
<body>
    <div class="UpDiv">
        

    </div>
    <div class="MidleDiv">
        <div class="CellMiddle" id="Cofe">
            <div class="InsideCell">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a quam massa. Donec cursus eu dolor id fermentum. Aliquam maximus elit vitae libero tincidunt lacinia. Nulla nec risus vulputate, arcu mi fringilla nulla, at rhoncus ligula risus et justo. Pellentesque eget pharetra justo.
            </div>
        </div>
        <div class="CellMiddle" id="Tea">
            <div class="InsideCell">
                
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a quam massa. Donec cursus eu dolor id fermentum. Aliquam maximus elit vitae libero tincidunt lacinia. Nulla nec risus vulputate, arcu mi fringilla nulla, at rhoncus ligula risus et justo. Pellentesque eget pharetra justo.
                
            </div>
        </div>
        <div class="CellMiddle" id="Yerba">
            <div class="InsideCellLeft">
                
                
                
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a quam massa. Donec cursus eu dolor id fermentum. Aliquam maximus elit vitae libero tincidunt lacinia. Nulla nec risus vulputate, arcu mi fringilla nulla, at rhoncus ligula risus et justo. Pellentesque eget pharetra justo.
                </div>

                <div class="Foto">
                
                </div>
            </div>
        </div>
    </div>
    <div class="DownDiv"></div>
</body>
</html>