<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noxy Cofee</title>

    <link rel="stylesheet" href="UpBar.css">
    <link rel="stylesheet" href="MidleBar.css">
    <link rel="stylesheet" href="DownBar.css">

    

</head>
<body onresize="myFunction()">
    <div class="UpBar">
        <div class="Logo"><h1>noxy</h1></div>
        
        <div class="LoginButtons"><form>
            <input type="button" value="Zaloguj">    
            <input type="button" value="Zarejestruj">
        </form></div>
    </div>

    <div class="MiddleBar">
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
        

        <div class="CellMidleBar" id="Coffe">
            <div class="OverlayDivs">
                <div class="CoffeDescribe">
                    <div class="FotoInCoffe" id="CoffeFoto"></div>
                    <div class="RightTextx">
                    <div class="TextIn">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a quam massa. Donec cursus eu dolor id fermentum. Aliquam maximus elit vitae libero tincidunt lacinia. Nulla nec risus vulputate, arcu mi fringilla nulla, at rhoncus ligula risus et justo. Pellentesque eget pharetra justo.
                    </div>
                </div>
            </div>
            
            
            </div>

            <svg heitht="100%" width="100%">
                <clipPath id="text-overlay">
                    <text x="50%" y="425px" fill="red" text-anchor="middle" font-family="Arial, Helvetica, sans-serif" Font-weight="bold">
                        KAWA
                    </text>
                </clipPath>
            </svg>

        </div>
        <div class="CellMidleBar">
        <div class="OverlayDivs">
                <div class="CoffeDescribe">
                    <div class="FotoInCoffe" id="Tea"></div>
                    <div class="RightTextx">
                    <div class="TextIn">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a quam massa. Donec cursus eu dolor id fermentum. Aliquam maximus elit vitae libero tincidunt lacinia. Nulla nec risus vulputate, arcu mi fringilla nulla, at rhoncus ligula risus et justo. Pellentesque eget pharetra justo.
                    </div>
                </div>
            </div>
            
            
            </div>

            <svg heitht="100%" width="100%">
                <clipPath id="text-overlay-v2">
                    <text x="75%" y="425px" fill="red" text-anchor="middle" font-family="Arial, Helvetica, sans-serif" Font-weight="bold">
                        HERBATA
                    </text>
                </clipPath>
            </svg>
        </div>
        <div class="CellMidleBar">
        <div class="OverlayDivsV">
                <div class="CoffeDescribeV">
                    <div class="FotoInCoffe" id="Yerba"></div>
                    <div class="RightTextx">
                    <div class="TextIn">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a quam massa. Donec cursus eu dolor id fermentum. Aliquam maximus elit vitae libero tincidunt lacinia. Nulla nec risus vulputate, arcu mi fringilla nulla, at rhoncus ligula risus et justo. Pellentesque eget pharetra justo.
                    </div>
                </div>
            </div>
            
            
            </div>
            <svg heitht="100%" width="100%">
                    <clipPath id="text-overlay-v3">
                        <text x="100%" y="425px" fill="red" text-anchor="middle" font-family="Arial, Helvetica, sans-serif" Font-weight="bold">
                            YERBA
                        </text>
                    </clipPath>
            </svg>
        </div>
        
        

        
    </div>

    <div class="DownBar">
        <div class="Half">
            <div class="UpName">Nasi dostawcy</div>
            <div class="Company">
                <div class="CompanyFoto">

                </div>
                <div class="CompanyRight">
                    <div class="CompanyName">

                    </div>
                    <div class="CompanyDiscrabe">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a quam massa. Donec cursus eu dolor id fermentum. Aliquam maximus elit vitae libero tincidunt lacinia. Nulla nec risus vulputate, rutrum sapien eget, placerat nisl. Vestibulum venenatis justo vehicula dapibus bibendum. Sed commodo libero sit amet aliquet aliquam. Phasellus vitae erat nisi. Nulla facilisi. Cras sem magna, tempor ac urna et, rutrum bibendum nulla. Donec vel convallis nisi. Nullam facilisis, libero in placerat scelerisque, augue nisi congue leo, eu congue mi lacus quis nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce sed purus faucibus, posuere arcu quis, tincidunt ante. Cras pharetra, lacus ut euismod porttitor, arcu mi fringilla nulla, at rhoncus ligula risus et justo. Pellentesque eget pharetra justo.
                    </div>
                    <div class="CompanyDiscrabe">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a quam massa. Donec cursus eu dolor id fermentum. Aliquam maximus elit vitae libero tincidunt lacinia. Nulla nec risus vulputate, rutrum sapien eget, placerat nisl. Vestibulum venenatis justo vehicula dapibus bibendum. Sed commodo libero sit amet aliquet aliquam. Phasellus vitae erat nisi. Nulla facilisi. Cras sem magna, tempor ac urna et, rutrum bibendum nulla. Donec vel convallis nisi. Nullam facilisis, libero in placerat scelerisque, augue nisi congue leo, eu congue mi lacus quis nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce sed purus faucibus, posuere arcu quis, tincidunt ante. Cras pharetra, lacus ut euismod porttitor, arcu mi fringilla nulla, at rhoncus ligula risus et justo. Pellentesque eget pharetra justo.
                    </div>
                    <div class="CompanyDiscrabe">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a quam massa. Donec cursus eu dolor id fermentum. Aliquam maximus elit vitae libero tincidunt lacinia. Nulla nec risus vulputate, rutrum sapien eget, placerat nisl. Vestibulum venenatis justo vehicula dapibus bibendum. Sed commodo libero sit amet aliquet aliquam. Phasellus vitae erat nisi. Nulla facilisi. Cras sem magna, tempor ac urna et, rutrum bibendum nulla. Donec vel convallis nisi. Nullam facilisis, libero in placerat scelerisque, augue nisi congue leo, eu congue mi lacus quis nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce sed purus faucibus, posuere arcu quis, tincidunt ante. Cras pharetra, lacus ut euismod porttitor, arcu mi fringilla nulla, at rhoncus ligula risus et justo. Pellentesque eget pharetra justo.
                    </div>
                    <div class="CompanyDiscrabe">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a quam massa. Donec cursus eu dolor id fermentum. Aliquam maximus elit vitae libero tincidunt lacinia. Nulla nec risus vulputate, rutrum sapien eget, placerat nisl. Vestibulum venenatis justo vehicula dapibus bibendum. Sed commodo libero sit amet aliquet aliquam. Phasellus vitae erat nisi. Nulla facilisi. Cras sem magna, tempor ac urna et, rutrum bibendum nulla. Donec vel convallis nisi. Nullam facilisis, libero in placerat scelerisque, augue nisi congue leo, eu congue mi lacus quis nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce sed purus faucibus, posuere arcu quis, tincidunt ante. Cras pharetra, lacus ut euismod porttitor, arcu mi fringilla nulla, at rhoncus ligula risus et justo. Pellentesque eget pharetra justo.
                    </div>
                    <div class="CompanyDiscrabe">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a quam massa. Donec cursus eu dolor id fermentum. Aliquam maximus elit vitae libero tincidunt lacinia. Nulla nec risus vulputate, rutrum sapien eget, placerat nisl. Vestibulum venenatis justo vehicula dapibus bibendum. Sed commodo libero sit amet aliquet aliquam. Phasellus vitae erat nisi. Nulla facilisi. Cras sem magna, tempor ac urna et, rutrum bibendum nulla. Donec vel convallis nisi. Nullam facilisis, libero in placerat scelerisque, augue nisi congue leo, eu congue mi lacus quis nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce sed purus faucibus, posuere arcu quis, tincidunt ante. Cras pharetra, lacus ut euismod porttitor, arcu mi fringilla nulla, at rhoncus ligula risus et justo. Pellentesque eget pharetra justo.
                    </div>
                    <div class="CompanyDiscrabe">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a quam massa. Donec cursus eu dolor id fermentum. Aliquam maximus elit vitae libero tincidunt lacinia. Nulla nec risus vulputate, rutrum sapien eget, placerat nisl. Vestibulum venenatis justo vehicula dapibus bibendum. Sed commodo libero sit amet aliquet aliquam. Phasellus vitae erat nisi. Nulla facilisi. Cras sem magna, tempor ac urna et, rutrum bibendum nulla. Donec vel convallis nisi. Nullam facilisis, libero in placerat scelerisque, augue nisi congue leo, eu congue mi lacus quis nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce sed purus faucibus, posuere arcu quis, tincidunt ante. Cras pharetra, lacus ut euismod porttitor, arcu mi fringilla nulla, at rhoncus ligula risus et justo. Pellentesque eget pharetra justo.
                    </div>
                </div>
                
            </div>
            

        </div>
        <div class="Half">Opinie naszych klientów

            <div class="CommentPanel">
                <input type="text">
                <input type="submit">
            </div>
        </div>
    </div>
</body>

<script>
function myFunction() {
  var w = window.outerWidth;
  var h = window.outerHeight;
  var txt = "Window size: width=" + w + ", height=" + h;
  document.getElementById("demo").innerHTML = txt;
}
</script>

</html>