<html>
<style>
    td{
        border-style: solid;
        border-color: black;
        border-width: 1px;
        background-color: gray;
    }
    td.none{
        border-style: none;
        border-color: black;
        border-width: 1px;
        background-color:black;
    }
    body{
        font-style:'Sarabun', sans-serif;
        color: white;
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
<body bgcolor="black"><font color="white">
    <center><h1 id="element1"></h1>
    <table id="game" width='600' height = '520' align="center">
        <tr align="center" bgcolor="black" >
            <td class="none"></td>
            <td width='40' class="none"><font id = "C1A">1</font> <br><font id = "C1F">2</font><br><font id = "C1J">1</font></td>
            <td width='40' class="none"><font id = "C2A">2</font> <br><font id = "C2D">4</font> <br><font id = "C2I">2</font></td>
            <td width='40' class="none"><font id = "C3A">7</font><br><font id = "C3J">1</font></td>
            <td width='40' class="none"><font id = "C4B">2</font><br><font id = "C4E">3</font><br><font id = "C4J">1</font></td>
            <td width='40' class="none"><font id = "C5B">9</font></td> 
            <td width='40' class="none"><font id = "C6A">10</font></td>
            <td width='40' class="none"><font id = "C7A">10</font></td>
            <td width='40' class="none"><font id = "C8C">5</font><br><font id = "C8J">1</font></td>
            <td width='40' class="none"><font id = "C9D">4</font><br><font id = "C9I">2</font></td>
            <td width='40' class="none"><font id = "CAF">2</font><br><font id = "CAJ">1</font></td>
            <td align="center" bgcolor="black" rowspan="10" class="none" width ="80px">
                <img id="myImage" src="heart.png" style="width:30px">
                <h5 id="heart"></h5>
            </td>
        </tr>
        <tr ><td align="right" bgcolor="black" class="none" height='40'><font id = "R1A">3</font> <font id = "R2A">2</font></td>
            <td id=A1 onClick="javascript:set('A1');"></td>
            <td id=A2 onClick="javascript:set('A2');"></td>
            <td id=A3 onClick="javascript:set('A3');"></td>
            <td id=A4 onClick="javascript:set('A4');"></td>
            <td id=A5 onClick="javascript:set('A5');"></td> 
            <td id=A6 onClick="javascript:set('A6');"></td>
            <td id=A7 onClick="javascript:set('A7');"></td>
            <td id=A8 onClick="javascript:set('A8');"></td>
            <td id=A9 onClick="javascript:set('A9');"></td>
            <td id=AA onClick="javascript:set('AA');"></td>
        </tr>
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R1B">6</font></td>
            <td id=B1 onClick="javascript:set('B1');"></td>
            <td id=B2 onClick="javascript:set('B2');"></td>
            <td id=B3 onClick="javascript:set('B3');"></td>
            <td id=B4 onClick="javascript:set('B4');"></td>
            <td id=B5 onClick="javascript:set('B5');"></td> 
            <td id=B6 onClick="javascript:set('B6');"></td>
            <td id=B7 onClick="javascript:set('B7');"></td>
            <td id=B8 onClick="javascript:set('B8');"></td>
            <td id=B9 onClick="javascript:set('B9');"></td>
            <td id=BA onClick="javascript:set('BA');"></td>
        </tr>
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R1C">6</font></td>
            <td id=C1 onClick="javascript:set('C1');"></td>
            <td id=C2 onClick="javascript:set('C2');"></td>
            <td id=C3 onClick="javascript:set('C3');"></td>
            <td id=C4 onClick="javascript:set('C4');"></td>
            <td id=C5 onClick="javascript:set('C5');"></td> 
            <td id=C6 onClick="javascript:set('C6');"></td>
            <td id=C7 onClick="javascript:set('C7');"></td>
            <td id=C8 onClick="javascript:set('C8');"></td>
            <td id=C9 onClick="javascript:set('C9');"></td>
            <td id=CA onClick="javascript:set('CA');"></td>
        </tr>
        <tr><td align="right" bgcolor="black" class="none" height='40' ><font id = "R1D">2 </font><font id = "R2D">5</font></td>
            <td id=D1 onClick="javascript:set('D1');"></td>
            <td id=D2 onClick="javascript:set('D2');"></td>
            <td id=D3 onClick="javascript:set('D3');"></td>
            <td id=D4 onClick="javascript:set('D4');"></td>
            <td id=D5 onClick="javascript:set('D5');"></td> 
            <td id=D6 onClick="javascript:set('D6');"></td>
            <td id=D7 onClick="javascript:set('D7');"></td>
            <td id=D8 onClick="javascript:set('D8');"></td>
            <td id=D9 onClick="javascript:set('D9');"></td>
            <td id=DA onClick="javascript:set('DA');"></td>
        </tr>
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R1E">8</font></td>
            <td id=E1 onClick="javascript:set('E1');"></td>
            <td id=E2 onClick="javascript:set('E2');"></td>
            <td id=E3 onClick="javascript:set('E3');"></td>
            <td id=E4 onClick="javascript:set('E4');"></td>
            <td id=E5 onClick="javascript:set('E5');"></td> 
            <td id=E6 onClick="javascript:set('E6');"></td>
            <td id=E7 onClick="javascript:set('E7');"></td>
            <td id=E8 onClick="javascript:set('E8');"></td>
            <td id=E9 onClick="javascript:set('E9');"></td>
            <td id=EA onClick="javascript:set('EA');"></td>
        </tr>
        <tr><td align="right" bgcolor="black" class="none"height='40'><font id = "R1F">10</font></td>
            <td id=F1 onClick="javascript:set('F1');"></td>
            <td id=F2 onClick="javascript:set('F2');"></td>
            <td id=F3 onClick="javascript:set('F3');"></td>
            <td id=F4 onClick="javascript:set('F4');"></td>
            <td id=F5 onClick="javascript:set('F5');"></td> 
            <td id=F6 onClick="javascript:set('F6');"></td>
            <td id=F7 onClick="javascript:set('F7');"></td>
            <td id=F8 onClick="javascript:set('F8');"></td>
            <td id=F9 onClick="javascript:set('F9');"></td>
            <td id=FA onClick="javascript:set('FA');"></td>
        </tr>
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R1G">10</font></td>
            <td id=G1 onClick="javascript:set('G1');"></td>
            <td id=G2 onClick="javascript:set('G2');"></td>
            <td id=G3 onClick="javascript:set('G3');"></td>
            <td id=G4 onClick="javascript:set('G4');"></td>
            <td id=G5 onClick="javascript:set('G5');"></td> 
            <td id=G6 onClick="javascript:set('G6');"></td>
            <td id=G7 onClick="javascript:set('G7');"></td>
            <td id=G8 onClick="javascript:set('G8');"></td>
            <td id=G9 onClick="javascript:set('G9');"></td>
            <td id=GA onClick="javascript:set('GA');"></td>
        </tr>
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R1H">3</font></td>
            <td id=H1 onClick="javascript:set('H1');"></td>
            <td id=H2 onClick="javascript:set('H2');"></td>
            <td id=H3 onClick="javascript:set('H3');"></td>
            <td id=H4 onClick="javascript:set('H4');"></td>
            <td id=H5 onClick="javascript:set('H5');"></td> 
            <td id=H6 onClick="javascript:set('H6');"></td>
            <td id=H7 onClick="javascript:set('H7');"></td>
            <td id=H8 onClick="javascript:set('H8');"></td>
            <td id=H9 onClick="javascript:set('H9');"></td>
            <td id=HA onClick="javascript:set('HA');"></td>
        </tr>
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R1I">1</font> <font id = "R2I">3</font>  <font id = "R3I">1</font> </td>
            <td id=I1 onClick="javascript:set('I1');"></td>
            <td id=I2 onClick="javascript:set('I2');"></td>
            <td id=I3 onClick="javascript:set('I3');"></td>
            <td id=I4 onClick="javascript:set('I4');"></td>
            <td id=I5 onClick="javascript:set('I5');"></td> 
            <td id=I6 onClick="javascript:set('I6');"></td>
            <td id=I7 onClick="javascript:set('I7');"></td>
            <td id=I8 onClick="javascript:set('I8');"></td>
            <td id=I9 onClick="javascript:set('I9');"></td>
            <td id=IA onClick="javascript:set('IA');"></td>
        </tr>
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R1J">10</font></td>
            <td id=J1 onClick="javascript:set('J1');"></td>
            <td id=J2 onClick="javascript:set('J2');"></td>
            <td id=J3 onClick="javascript:set('J3');"></td>
            <td id=J4 onClick="javascript:set('J4');"></td>
            <td id=J5 onClick="javascript:set('J5');"></td> 
            <td id=J6 onClick="javascript:set('J6');"></td>
            <td id=J7 onClick="javascript:set('J7');"></td>
            <td id=J8 onClick="javascript:set('J8');"></td>
            <td id=J9 onClick="javascript:set('J9');"></td>
            <td id=JA onClick="javascript:set('JA');"></td>
            
        </tr>
    </table>
    <div id = "back">
    <input type="button" onclick="LocationHash('back');"  value="BACK" class = "button"/></div>
    <div id = "back1">
        <input type="button" onclick="LocationHash('back1');"  value="BACK"  class = "button"/></div>
    <div id = "next2">
        <input type="button" onclick="LocationHash('next2');"  value="Next Stage"  class = "button"/></div>
</center>
</font></body>
</html>


<script>
document.body.style.backgroundImage = "url('bg.gif')";
document.getElementById('back').style.visibility='hidden';
document.getElementById('next2').style.visibility='hidden';
var heart = 10;
var A = 0,B = 0,C = 0,D = 0,E = 0,F = 0,G = 0,H = 0,I = 0,J = 0;
var CA = 0,CB = 0,CC = 0,CD = 0,CE = 0,CF = 0,CG = 0,CH = 0,CI = 0,CJ = 0;

var A11 = 0,A12 = 0,B11 = 0,C11 = 0,E11 = 0,F11 = 0,G11 = 0,H11 =0 ,I11 = 0,J11 = 0,D11 = 0,D12 = 0;

var C1 = 0,C21 = 0,C22 = 0,C23 = 0,C3 = 0,C41 = 0,C42 = 0,C5 = 0,C6 = 0,C7 = 0,C8 = 0,C91 = 0,C92 = 0,CA1 = 0;

say ("element1","What is Picture?");
say ("heart","x"+heart);
var all;
var str = '';
function LocationHash(id) {
    if(id == 'back1')location.assign("display.php");
    else if (id == 'next2')location.assign("game1.php");
    else location.assign("display.php?id1=1");
}
function set(id){
    all = A+B+C+D+E+F+G+H+I+J;
    if(heart != 0){
        if(all == 69){
            setSelect(id);
            say ("element1","TREE");
            document.getElementById('back1').style.visibility='hidden';
            document.getElementById('back').style.visibility='visible';
            document.getElementById('next2').style.visibility='visible';
        }
        else {
            setSelect(id); 
        } 
    }
    else{
        say ("element1","GameOver");
    }
}
function setSelect(id)
    {
        document.getElementById('myImage').src='heart.png';
        if(str.search(id) == -1)
        {   
//=============================Num - Collum ======================================================= 
            if(id == 'A1'){
                CA += 1;say("C1A","");
            }
                
            if(id == 'F1' || id == 'G1'){C1 += 1; CA += 1;}
                if(C1 == 2)say("C1F","");
            if(id == 'J1'){
                CA += 1;say("C1J","");
            }
                
            if(id == 'A2' || id == 'B2'){C21 +=1;CB += 1;} 
                if(C21 == 2)say("C2A","");            
            if(id == 'D2' || id == 'E2' ||id == 'F2' || id == 'G2'){C22 +=1; CB += 1;} 
                if(C22 == 4)say("C2D",""); 
            if(id == 'I2' || id == 'J2'){CB += 1; C23 +=1;}  
                if(C23 == 2)say("C2I","");
            if(id == 'A3' || id == 'B3' || id == 'C3' || id == 'D3' || id == 'E3' || id == 'F3' || id == 'G3'){CC += 1; C3 +=1; } 
                if(C3 == 7)say("C3A",""); 
            if(id == 'J3'){CC += 1;
                say("C3J",""); }
            if(id == 'B4' || id == 'C4'){C41 +=1; CD += 1;}
                if(C41 == 2)say("C4B","");
            if(id == 'E4' || id == 'F4' || id == 'G4'){C42 +=1; CD += 1;} 
                if(C42 == 3)say("C4E","");
            if(id == 'B5' || id == 'C5' || id == 'D5' ||id == 'E5'||id == 'F5'  || id == 'G5' || id == 'H5'  || id == 'I5'|| id == 'J5'){C5 +=1; CE += 1;}
                if(C5 == 9)say("C5B","");
            if(id == 'A6' || id == 'B6' || id == 'C6' || id == 'D6' ||id == 'E6'||id == 'F6'  || id == 'G6' || id == 'H6'  || id == 'I6'|| id == 'J6' )C6 +=1; 
                if(C6 == 10)say("C6A","");
            if(id == 'A7' || id == 'B7' || id == 'C7' || id == 'D7' ||id == 'E7'||id == 'F7'  || id == 'G7' || id == 'H7'  || id == 'I7'|| id == 'J7' )C7 +=1; 
                if(C7 == 10)say("C7A","");
            if(id == 'C8' || id == 'D8' || id == 'E8' || id == 'F8' || id == 'G8'){C8 +=1; CH +=1;} 
                if(C8 == 5)say("C8C","");
            if(id == 'J8'){
                CH +=1;say("C8J","");
            }
                if(id == 'J4'){
                    CD += 1;
                    say("C4J","");
                }
            if(id == 'D9' || id == 'E9' || id == 'F9' || id == 'G9'){C91 +=1; CI +=1;} 
                if(C91 == 4)say("C9D","");
            if(id == 'I9' || id == 'J9' ){C92 +=1; CI +=1; } 
                if(C92 == 2)say("C9I","");
            if(id == 'FA' || id == 'GA'){ CA1 +=1;CJ +=1; }
            if(CA1 == 2)say("CAF","");
            if(id == 'JA'){CJ +=1;
                say("CAJ","");
            }
                
// =============================Color - Row =================================================
            if(id == 'A1' || id == 'A2' || id == 'A3'){
                    A11 +=1;if(A11 == 3)say("R1A","");
                    A += 1; 
                obj=document.getElementById(id).style.backgroundColor="#FFFFFF";}
            else if(id == 'A6'){
                    A += 1;
                    A12 +=1; if(A12 == 2)say("R2A","");
                obj=document.getElementById(id).style.backgroundColor="#C5F594";}
            else if(id == 'A7'){
                    A += 1;
                    A12 +=1; if(A12 == 2)say("R2A","");
                obj=document.getElementById(id).style.backgroundColor="#176012";}


            else if(id == 'B2'||id == 'B3'||id == 'B4'){
                    B += 1; 
                    B11 +=1; if(B11 == 6)say("R1B","");
                obj=document.getElementById(id).style.backgroundColor="#FFFFFF";}
            else if(id == 'B5'){
                    B += 1; 
                    B11 +=1; if(B11 == 6)say("R1B",""); 
                obj=document.getElementById(id).style.backgroundColor="#C5F594";}
            else if(id == 'B6'){
                    B += 1; 
                    B11 +=1; if(B11 == 6)say("R1B","");
                obj=document.getElementById(id).style.backgroundColor="#54CB4B";}
            else if(id == 'B7'){
                    B += 1; 
                    B11 +=1; if(B11 == 6)say("R1B",""); 
                obj=document.getElementById(id).style.backgroundColor="#176012";}


            else if(id == 'C3'||id == 'C4'){
                    C += 1; 
                    C11 +=1; if(C11 == 6)say("R1C","");
                obj=document.getElementById(id).style.backgroundColor="#C5F594";}
            else if(id == 'C5'){
                    C += 1; 
                    C11 +=1; if(C11 == 6)say("R1C",""); 
                obj=document.getElementById(id).style.backgroundColor="#AAEA67";}
            else if(id == 'C6'){
                    C += 1; 
                    C11 +=1; if(C11 == 6)say("R1C",""); 
                obj=document.getElementById(id).style.backgroundColor="#54CB4B";}
            else if(id == 'C7'){
                    C += 1; 
                    C11 +=1; if(C11 == 6)say("R1C",""); 
                obj=document.getElementById(id).style.backgroundColor="#2B8224";}
            else if(id == 'C8'){
                    C += 1; 
                    C11 +=1; if(C11 == 6)say("R1C",""); 
                obj=document.getElementById(id).style.backgroundColor="#176012";}


            else if(id == 'D2'){
                    D += 1; 
                    D11 +=1; if(D11 == 2)say("R1D","");
                obj=document.getElementById(id).style.backgroundColor="#C5F594";}
            else if(id == 'D3' || id == 'D5'){
                    D += 1;
                    if(id == 'D3')D11 +=1; if(D11 == 2)say("R1D","");  
                    if(id == 'D5')D12 +=1; if(D12 == 5)say("R2D","");
                obj=document.getElementById(id).style.backgroundColor="#AAEA67";}
            else if(id == 'D6' || id == 'D7'){
                    D += 1;
                    D12 +=1; if(D12 == 5)say("R2D","");
                obj=document.getElementById(id).style.backgroundColor="#54CB4B";}
            else if(id == 'D8'){
                    D += 1; 
                    D12 +=1; if(D12 == 5)say("R2D","");  
                obj=document.getElementById(id).style.backgroundColor="#2B8224";}
            else if(id == 'D9'){
                    D += 1; 
                    D12 +=1; if(D12 == 5)say("R2D","");
                obj=document.getElementById(id).style.backgroundColor="#176012";}


            else if(id == 'E2'){
                    E += 1; 
                    E11 +=1; if(E11 == 8)say("R1E","");
                obj=document.getElementById(id).style.backgroundColor="#C5F594";}
            else if(id == 'E3' || id == 'E4'){
                    E += 1; 
                    E11 +=1; 
                    if(E11 == 8)say("R1E","");
                obj=document.getElementById(id).style.backgroundColor="#AAEA67";}
            else if(id == 'E5' || id == 'E6'){E += 1; 
                    E11 +=1; 
                    if(E11 == 8)say("R1E","");
                obj=document.getElementById(id).style.backgroundColor="#54CB4B";}
            else if(id == 'E7' || id == 'E8'){
                    E += 1; 
                    E11 +=1; if(E11 == 8)say("R1E","");
                obj=document.getElementById(id).style.backgroundColor="#2B8224";}
            else if(id == 'E9'){
                    E += 1; 
                    E11 +=1; if(E11 == 8)say("R1E",""); 
                obj=document.getElementById(id).style.backgroundColor="#176012";}


            else if(id == 'F1'){F += 1; 
                    F11 +=1; 
                    if(F11 == 10)say("R1F","");
                obj=document.getElementById(id).style.backgroundColor="#C5F594";}
            else if(id == 'F2'){F += 1; 
                    F11 +=1; 
                    if(F11 == 10)say("R1F","");
                obj=document.getElementById(id).style.backgroundColor="#AAEA67";}
            else if(id == 'F3' || id == 'F4' || id == 'F5'){
                    F += 1;
                    F11 +=1; if(F11 == 10)say("R1F","");
                obj=document.getElementById(id).style.backgroundColor="#54CB4B";}
            else if(id == 'F6' || id == 'F7' || id == 'F9'){
                    F += 1;
                    F11 +=1; if(F11 == 10)say("R1F","");
                obj=document.getElementById(id).style.backgroundColor="#2B8224";}
            else if(id == 'F8' || id == 'FA'){
                    F += 1; 
                    F11 +=1; if(F11 == 10)say("R1F","");
                obj=document.getElementById(id).style.backgroundColor="#176012";}


            else if(id == 'G1' || id == 'G2'){
                    G += 1; 
                    G11 +=1; if(G11 == 10)say("R1G","");
                obj=document.getElementById(id).style.backgroundColor="#C5F594";}
            else if(id == 'G3'){
                    G += 1; 
                    G11 +=1; if(G11 == 10)say("R1G","");
                obj=document.getElementById(id).style.backgroundColor="#54CB4B";}
            else if(id == 'G4' || id == 'G5' || id == 'G6'){
                    G += 1;
                    G11 +=1; if(G11 == 10)say("R1G","");
                obj=document.getElementById(id).style.backgroundColor="#2B8224";}
            else if(id == 'G7' || id == 'G8'|| id == 'G9'|| id == 'GA'){
                    G += 1;
                    G11 +=1; if(G11 == 10)say("R1G",""); 
                obj=document.getElementById(id).style.backgroundColor="#176012";}

            else if(id == 'H5'){
                    H += 1;
                    H11 +=1; if(H11 == 3)say("R1H","");
                obj=document.getElementById(id).style.backgroundColor="#A26F3D";}
            else if(id == 'H6' || id == 'H7'){
                    H += 1; 
                    H11 +=1; if(H11 == 3)say("R1H","");
                obj=document.getElementById(id).style.backgroundColor="#583917";}


            else if(id == 'I2' || id == 'I9'){
                    I += 1; 
                    if(id == 'I2')say("R1I","");
                    if(id == 'I9') say("R3I","");
                obj=document.getElementById(id).style.backgroundColor="#F7EC6B";}
            else if(id == 'I5'){
                    I += 1;
                    I11 +=1; if(I11 == 3)say("R2I","");
                obj=document.getElementById(id).style.backgroundColor="#A26F3D";}
            else if(id == 'I6'){
                    I += 1; 
                    I11 +=1; if(I11 == 3)say("R2I",""); 
                obj=document.getElementById(id).style.backgroundColor="#6E4A24";}
            else if(id == 'I7'){
                    I += 1; 
                    I11 +=1; if(I11 == 3)say("R2I",""); 
                obj=document.getElementById(id).style.backgroundColor="#583917";}

            else if(id == 'J1' || id == 'J2'){
                    J += 1; 
                    J11 +=1; if(J11 == 10)say("R1J","");
                obj=document.getElementById(id).style.backgroundColor="#54CB4B";}
            else if(id == 'J3' || id == 'J4' || id == 'J5' || id == 'J6' || id == 'J7' 
                || id == 'J8' || id == 'J9' || id == 'JA'){
                    J += 1;
                    J11 +=1; if(J11 == 10)say("R1J","");
                obj=document.getElementById(id).style.backgroundColor="#2B8224";}
            
            else{
                heart -= 1;
                if(heart == 0){
                    say ("element1","GameOver");
                }
                obj=document.getElementById(id).style.backgroundColor="red";
                document.getElementById('myImage').src='heartbrok.png';
                say ("heart","x"+heart);
            } 
            

//====================================================================================================================
            if(A == 5){
                obj=document.getElementById('A4').style.backgroundColor="black";
                obj=document.getElementById('A5').style.backgroundColor="black";
                obj=document.getElementById('A8').style.backgroundColor="black";
                obj=document.getElementById('A9').style.backgroundColor="black";
                obj=document.getElementById('AA').style.backgroundColor="black";
            }
            if(B == 6){
                obj=document.getElementById('B1').style.backgroundColor="black";
                obj=document.getElementById('B8').style.backgroundColor="black";
                obj=document.getElementById('B9').style.backgroundColor="black";
                obj=document.getElementById('BA').style.backgroundColor="black";
            }
            if(C == 6){
                obj=document.getElementById('C1').style.backgroundColor="black";
                obj=document.getElementById('C2').style.backgroundColor="black";
                obj=document.getElementById('C9').style.backgroundColor="black";
                obj=document.getElementById('CA').style.backgroundColor="black";
            }
            if(D == 7){
                obj=document.getElementById('D1').style.backgroundColor="black";
                obj=document.getElementById('D4').style.backgroundColor="black";
                obj=document.getElementById('DA').style.backgroundColor="black";
            }
            if(E == 8){
                obj=document.getElementById('E1').style.backgroundColor="black";
                obj=document.getElementById('EA').style.backgroundColor="black";
            }
            if(H == 3){
                obj=document.getElementById('H1').style.backgroundColor="black";
                obj=document.getElementById('H2').style.backgroundColor="black";
                obj=document.getElementById('H3').style.backgroundColor="black";
                obj=document.getElementById('H4').style.backgroundColor="black";
                obj=document.getElementById('H8').style.backgroundColor="black";
                obj=document.getElementById('H9').style.backgroundColor="black";
                obj=document.getElementById('HA').style.backgroundColor="black";
            }
            if(I == 5){
                obj=document.getElementById('I1').style.backgroundColor="black";
                obj=document.getElementById('I3').style.backgroundColor="black";
                obj=document.getElementById('I4').style.backgroundColor="black";
                obj=document.getElementById('I8').style.backgroundColor="black";
                obj=document.getElementById('IA').style.backgroundColor="black";
            }
//=======================================================================================    
            if(CA == 4){
                obj=document.getElementById('B1').style.backgroundColor="black";
                obj=document.getElementById('C1').style.backgroundColor="black";
                obj=document.getElementById('D1').style.backgroundColor="black";
                obj=document.getElementById('E1').style.backgroundColor="black";
                obj=document.getElementById('H1').style.backgroundColor="black";
                obj=document.getElementById('I1').style.backgroundColor="black";
            }
            if(CB == 8){
                obj=document.getElementById('C2').style.backgroundColor="black";
                obj=document.getElementById('H2').style.backgroundColor="black";
            }
            if(CC == 8){
                obj=document.getElementById('H3').style.backgroundColor="black";
                obj=document.getElementById('I3').style.backgroundColor="black";
            }
            if(CD == 6){
                obj=document.getElementById('A4').style.backgroundColor="black";
                obj=document.getElementById('D4').style.backgroundColor="black";
                obj=document.getElementById('H4').style.backgroundColor="black";
                obj=document.getElementById('I4').style.backgroundColor="black";
            }
            if(CE == 9){
                obj=document.getElementById('A5').style.backgroundColor="black";
            }
            if(CH == 6){
                obj=document.getElementById('A8').style.backgroundColor="black";
                obj=document.getElementById('B8').style.backgroundColor="black";
                obj=document.getElementById('H8').style.backgroundColor="black";
                obj=document.getElementById('I8').style.backgroundColor="black";
            }
            if(CI == 6){
                obj=document.getElementById('A9').style.backgroundColor="black";
                obj=document.getElementById('B9').style.backgroundColor="black";
                obj=document.getElementById('C9').style.backgroundColor="black";
                obj=document.getElementById('H9').style.backgroundColor="black";
            }
            if(CJ == 3){
                obj=document.getElementById('AA').style.backgroundColor="black";
                obj=document.getElementById('BA').style.backgroundColor="black";
                obj=document.getElementById('CA').style.backgroundColor="black";
                obj=document.getElementById('DA').style.backgroundColor="black";
                obj=document.getElementById('EA').style.backgroundColor="black";
                obj=document.getElementById('HA').style.backgroundColor="black";
                obj=document.getElementById('IA').style.backgroundColor="black";
            }                                          
            str+=id;
        }     
    }
function say(id, msg){
document.getElementById(id).innerHTML = msg;
}
</script>


