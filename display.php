<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 270px;
  height: 290px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #000033;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 10px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #e600e6;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #ff66ff}

.button:active {
  background-color: #ff66ff;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body bgcolor="black">
    <center>
    <font color = "white"><h1 id="element1"></h1></font>
    <table align = "center" width = "100%" height = "100%" >
    <tr>
        <td align = "center"><h3> <font color = "white">Stage 1</h3></td>
        <td align = "center"><h3> <font color = "white">Stage 2</h3></td>
        <td align = "center"><h3> <font color = "white">Stage 3</h3></td>
    </tr>    
    <tr align = "center">
            <td><div width = "100px" bgcolor = "#173617" >
                <div class="flip-card"height = "200px" align = "center"
            onclick="link(1);" 
            onMouseover="this.style.backgroundColor='yellow'"
            onMouseout="this.style.backgroundColor='#173617'">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                    <img id = "pic1" src="Q.png" alt="Avatar" style="width:200px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                    <h1 id = 'text1'>What is picture?</h1> 
                    </div>
                </div>
                </div>
            </div></td>
            <td><div width = "100px" bgcolor = "#173617" >
                <div class="flip-card"height = "250px" align = "center"
            onclick="link(2);" 
            onMouseover="this.style.backgroundColor='yellow'"
            onMouseout="this.style.backgroundColor='#173617'">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                    <img id = "pic2" src="Q.png" alt="Avatar" style="width:200px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                    <h1 id = 'text2'>What is picture?</h1> 
                    </div>
                </div>
                </div>
            </div></td>  
            <td><div width = "100px" bgcolor = "#173617" >
                <div class="flip-card"height = "200px" align = "center"
            onclick="link(3);" 
            onMouseover="this.style.backgroundColor='yellow'"
            onMouseout="this.style.backgroundColor='#173617'">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                    <img id = "pic3" src="Q.png" alt="Avatar" style="width:200px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                    <h1 id = 'text3'>What is picture?</h1> 
                    </div>
                </div>
                </div>
            </div></td>    
    </tr>
    <tr align = "center">
        <td width = "100px" align = "left"><button onclick="myFunction()" class="button">How to play</button></td>
        <td width = "200px">
        <div id="myDIV">
        <font color = "black">Nonogrrams i a puzzle game to reveal a hidden<br>
                picture by filling successive blanks as many as suggested at the left</font>
        </div></td>
        <td><input type="button" onclick=";link(4);"  value="random Stage"  class = "button"/></div> <button onclick="openFullscreen();" class="button">Go Fullscreen Mode</button>
    <button onclick="closeFullscreen();" class="button">Close Fullscreen</button>
    <div id = "random">
        
</td>
</tr>
    </table>
    
    </center>
    </body>
</html>
<?php
$stage1 = false;$stage2 = false;$stage3 = false; $run = false;

if($run == true){
    openFullscreen();
}
if(isset($_GET['id1'])== 1){ 
    $stage1 == true;
?>
<script>

let dead = new Audio();
dead.src = "Sp.mp3";
dead.play();

document.getElementById('pic1').src='ecology.png'; say("text1","TREE");</script>

<?php }
if(isset($_GET['id2'])== 2){ 
    $stage2 == true;
?>
<script>

document.getElementById('pic2').src='lollipop.png';say("text2","CANDY"); </script>

<?php }
if(isset($_GET['id3'])== 3){ 
    $stage3 == true;
?>
<script>document.getElementById('pic3').src='pig.png'; say("text2","CANDY"); </script>

<?php }?>

<script>
document.body.style.backgroundImage = "url('moon.png')";
say("element1","What is picture?");
var x = document.getElementById("myDIV");
x.style.display = "none";

function myFunction() {
var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function link(num){
    if(num == 1)location.assign("game.php");
    else if (num == 2)location.assign("game1.php");
    else if (num == 4){
        var x = Math.floor(Math.random()*3);
        //say("element1",x);
        if(x == 0){
            location.assign("game1.php");
        }else if( x == 1){
            location.assign("game.php");
        }else location.assign("game2.php");
    }
    else location.assign("game2.php");
}

function say(id, msg){
    document.getElementById(id).innerHTML = msg;
}
var elem = document.documentElement;
    
    /* Function to open fullscreen mode */
    function openFullscreen() {
      run = true;  
      if (elem.requestFullscreen) {
        elem.requestFullscreen();
      } else if (elem.mozRequestFullScreen) { /* Firefox */
        elem.mozRequestFullScreen();
      } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
        elem.webkitRequestFullscreen();
      } else if (elem.msRequestFullscreen) { /* IE/Edge */
        elem = window.top.document.body; //To break out of frame in IE
        elem.msRequestFullscreen();
      }
    }
    /* Function to close fullscreen mode */
    function closeFullscreen() {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      } else if (document.msExitFullscreen) {
        window.top.document.msExitFullscreen();
        }
    }
    
    // Events
    var output = document.getElementById("myP");
    document.addEventListener("fullscreenchange", function() {
        output.innerHTML = "fullscreenchange event fired!";
    });
    document.addEventListener("mozfullscreenchange", function() {
        output.innerHTML = "mozfullscreenchange event fired!";
    });
    document.addEventListener("webkitfullscreenchange", function() {
        output.innerHTML = "webkitfullscreenchange event fired!";
    });
    document.addEventListener("msfullscreenchange", function() {
        output.innerHTML = "msfullscreenchange event fired!";
    });
</script>
