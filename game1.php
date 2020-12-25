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
            <td width='40' class="none"><font id = "C1C">4</font></td>
            <td width='40' class="none"><font id = "C2B">1</font> <br><font id = "C2G">1</font></td>
            <td width='40' class="none"><font id = "C3A">1</font><br><font id = "C3C">1</font><br><font id = "C3H">1</font></td>
            <td width='40' class="none"><font id = "C4A">1</font><br><font id = "C4C">1</font><br><font id = "C4E">2</font><br><font id = "C4H">1</font></td>
            <td width='40' class="none"><font id = "C5A">1</font><br><font id = "C5C">1</font><br><font id = "C5F">1</font><br><font id = "C5H">3</font></td> 
            <td width='40' class="none"><font id = "C6A">1</font><br><font id = "C6C">1</font><br><font id = "C6F">1</font><br><font id = "C6H">3</font></td> 
            <td width='40' class="none"><font id = "C7A">1</font><br><font id = "C7C">1</font><br><font id = "C7F">1</font><br><font id = "C7H">1</font></td>
            <td width='40' class="none"><font id = "C8A">1</font><br><font id = "C8C">4</font><br><font id = "C8H">1</font></td>
            <td width='40' class="none"><font id = "C9B">1</font><br><font id = "C9G">1</font></td>
            <td width='40' class="none"><font id = "CAC">4</font></td>
            <td align="center" bgcolor="black" rowspan="10" class="none" width ="80px">
                <img id="myImage" src="heart.png" style="width:30px">
                <h5 id="heart"></h5>
            </td>
        </tr>
        <tr ><td align="right" bgcolor="black" class="none" height='40'><font id = "R1C">6</font></td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R2B">1</font> <font id = "R2I">1</font></td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R3A">1</font> <font id = "R3C">6</font> <font id = "R3J">1</font></td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40' ><font id = "R4A">1</font> <font id = "R4H">1</font> <font id = "R4J">1</font></td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R5A">1</font> <font id = "R5D">1</font> <font id = "R5H">1</font> <font id = "R5J">1</font></td>
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
        <tr><td align="right" bgcolor="black" class="none"height='40'><font id = "R6A">1</font> <font id = "R6D">5</font> <font id = "R6J">1</font></td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R7B">1</font> <font id = "R7I">1</font></td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R8C">6</font></td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R9E">2</font></td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "RAE">2</font></td>
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
        <input type="button" onclick="LocationHash('back1');"  value="BACK" class = "button"/></div>
    <div id = "next3">
        <input type="button" onclick="LocationHash('next3');"  value="Next Stage" class = "button"/></div>
</center>
</font></body>
</html>


<script>
document.body.style.backgroundImage = "url('bg.gif')";
document.getElementById('back').style.visibility='hidden';
document.getElementById('next3').style.visibility='hidden';
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
    else if (id == 'next3')location.assign("game2.php");
    else location.assign("display.php?id2=2&id1=1");
}
function set(id){
    all = A+B+C+D+E+F+G+H+I+J;
    if(heart != 0){
        if(all == 41){
            setSelect(id);
            say ("element1","CANDY");
            document.getElementById('back1').style.visibility='hidden';
            document.getElementById('back').style.visibility='visible';
            document.getElementById('next3').style.visibility='visible';
        }
        else {
            setSelect(id);
            
        } 
    }
    else{
        document.getElementById('back').style.visibility='visible';
        say ("element1","GameOver");
    }
}
function setSelect(id)
    {
        document.getElementById('myImage').src='heart.png';
        if(str.search(id) == -1)
        {   
//=============================Num - Collum ======================================================= 
            if(id == 'C1'  || id == 'D1'  || id == 'E1'  || id == 'F1'){
                CA += 1; 
                if(CA == 4)say("C1C","");
            }
            if(id == 'B2' || id == 'G2'){
                CB += 1;
                if(id == 'B2')say("C2B",""); 
                if(id == 'G2')say("C2G",""); 
            }            

            if(id == 'A3' ||  id == 'C3'  || id == 'H3'){CC += 1;
                if(id == 'A3')say("C3A",""); 
                if(id == 'C3')say("C3C","");
                if(id == 'H3')say("C3H",""); 
            }
            if(id == 'A4' || id == 'C4' || id == 'H4'){ 
                CD += 1;
                if(id == 'A4')say("C4A",""); 
                if(id == 'C4')say("C4C","");
                if(id == 'H4')say("C4H","");
            }
            if(id == 'E4' || id == 'F4'){ 
                CD += 1; 
                C3 += 1;
                if(C3 == 2)say("C4E",""); 
            }
            if(id == 'A5' || id == 'C5' || id == 'F5'){ 
                CE += 1;
                if(id == 'A5')say("C5A",""); 
                if(id == 'C5')say("C5C","");
                if(id == 'F5')say("C5F","");
            }
            if(id == 'H5' || id == 'I5' || id == 'J5'){ 
                CE += 1; 
                C5 += 1;
                if(C5 == 3)say("C5H",""); 
            }
            if(id == 'A6' || id == 'C6' || id == 'F6'){ 
                CF += 1;
                if(id == 'A6')say("C6A",""); 
                if(id == 'C6')say("C6C","");
                if(id == 'F6')say("C6F","");
            }
            if(id == 'H6' || id == 'I6' || id == 'J6'){ 
                CF += 1; 
                C6 += 1;
                if(C6 == 3)say("C6H",""); 
            }
            if(id == 'A7' || id == 'C7' || id == 'F7' || id == 'H7'){ 
                CG += 1;
                if(id == 'A7')say("C7A",""); 
                if(id == 'C7')say("C7C","");
                if(id == 'F7')say("C7F","");
                if(id == 'H7')say("C7H","");
            }
            if(id == 'A8' || id == 'H8'){ 
                CH += 1;
                if(id == 'A8')say("C8A",""); 
                if(id == 'H8')say("C8H","");
            }
            if(id == 'C8' || id == 'D8' || id == 'E8' || id == 'F8'){ 
                CH += 1; 
                C8 += 1;
                if(C8 == 4)say("C8C",""); 
            }
            if(id == 'B9' || id == 'G9'){ 
                CI += 1;
                if(id == 'B9')say("C9B",""); 
                if(id == 'G9')say("C9G","");
            }
            if(id == 'CA' || id == 'DA' || id == 'EA' || id == 'FA'){ 
                CJ += 1; 
                if(CJ == 4)say("CAC",""); 
            }
                
// =============================Color - Row =================================================
            if(id == 'A3' || id == 'A4'){
                    A11 +=1;if(A11 == 6)say("R1C","");
                    A += 1; 
                obj=document.getElementById(id).style.backgroundColor="#FFBCC4";}
            else if(id == 'A5'){
                    A += 1;
                    A11 +=1;if(A11 == 6)say("R1C","");
                obj=document.getElementById(id).style.backgroundColor="#FD7385";}
            else if(id == 'A6' || id == 'A7' || id == 'A8'){
                    A += 1;
                    A11 +=1;if(A11 == 6)say("R1C","");
                obj=document.getElementById(id).style.backgroundColor="#FF5065";}

            else if(id == 'B2'){
                    B += 1; say("R2B","");
                obj=document.getElementById(id).style.backgroundColor="#FFBCC4";}
            else if(id == 'B9'){
                    B += 1;say("R2I",""); 
                obj=document.getElementById(id).style.backgroundColor="#FF5065";}


            else if(id == 'C1'){
                    C += 1; say("R3A","");
                obj=document.getElementById(id).style.backgroundColor="#FFBCC4";}
            else if(id == 'C3' || id == 'C4' || id == 'C5' || id == 'C6' || id == 'C7'){
                    C += 1; 
                    C11 +=1; if(C11 == 6)say("R3C",""); 
                obj=document.getElementById(id).style.backgroundColor="#FD7385";}
            else if(id == 'C8' || id == 'CA'){
                    C += 1; 
                    if(id == 'C8'){
                        C11 +=1; if(C11 == 6)say("R3C",""); }
                    if(id == 'CA')say("R3J","");
                obj=document.getElementById(id).style.backgroundColor="#FF5065";}


            else if(id == 'D1'){
                    D += 1; 
                    say("R4A","");
                obj=document.getElementById(id).style.backgroundColor="#FD7385";}
            else if(id == 'D8' || id == 'DA'){
                    D += 1;
                    if(id == 'D8')say("R4H","");  
                    if(id == 'DA')say("R4J","");
                obj=document.getElementById(id).style.backgroundColor="#FF5065";}


            else if(id == 'E1'){
                E+=1;
                say("R5A","");
                obj=document.getElementById(id).style.backgroundColor="#FD7385";}
            else if(id == 'E4' || id == 'E8' || id == 'EA'){E+=1;
                    if(id == 'E4')say("R5D","");
                    if(id == 'E8')say("R5H","");
                    if(id == 'EA')say("R5J","");
                obj=document.getElementById(id).style.backgroundColor="#FF5065";}


            else if(id == 'F1' || id == 'F4' || id =='F5' || id == 'F6' || id == 'F7' || id == 'F8' || id == 'FA'){
                    if(id == 'F1')say("R6A","");
                    if(id == 'F4' || id =='F5' || id == 'F6' || id == 'F7' || id == 'F8' )F11 += 1;
                        if(F11 == 5)say("R6D","");
                    if(id == 'FA')say("R6J","");
                    F += 1; 
                obj=document.getElementById(id).style.backgroundColor="#FF5065";}


            else if(id == 'G2' || id == 'G9'){
                    G += 1; 
                    if(id == 'G2')say("R7B","");
                    if(id == 'G9')say("R7I","");
                obj=document.getElementById(id).style.backgroundColor="#FF5065";}


            else if(id == 'H3' || id == 'H4' || id == 'H5' || id == 'H6' || id == 'H7' || id == 'H8'){
                    H += 1;
                    if(H == 6)say("R8C","");
                obj=document.getElementById(id).style.backgroundColor="#FF5065";}


            else if(id == 'I5'){
                    I += 1;
                    if(I == 2)say("R9E","");
                obj=document.getElementById(id).style.backgroundColor="#F2EAEB";}
            else if(id == 'I6'){
                    I += 1; 
                    if(I == 2)say("R9E",""); 
                obj=document.getElementById(id).style.backgroundColor="#C6C6C6";}

            else if(id == 'J5'){
                    J += 1; 
                    if(J == 2)say("RAE",""); 
                obj=document.getElementById(id).style.backgroundColor="#F2EAEB";}
            else if(id == 'J6'){
                    J += 1;
                    if(J == 2)say("RAE",""); 
                obj=document.getElementById(id).style.backgroundColor="#C6C6C6";}
            
            else{
                heart -= 1;
                if(heart == 0){
                    document.getElementById('back').style.visibility='visible';
                    say ("element1","GameOver");
                }
                obj=document.getElementById(id).style.backgroundColor="red";
                document.getElementById('myImage').src='heartbrok.png';
                say ("heart","x"+heart);
            } 
            

//====================================================================================================================
            if(A == 6){
                obj=document.getElementById('A1').style.backgroundColor="black";
                obj=document.getElementById('A2').style.backgroundColor="black";
                obj=document.getElementById('A9').style.backgroundColor="black";
                obj=document.getElementById('AA').style.backgroundColor="black";
            }
            if(B ==2){
                obj=document.getElementById('B1').style.backgroundColor="black";
                obj=document.getElementById('B3').style.backgroundColor="black";
                obj=document.getElementById('B4').style.backgroundColor="black";
                obj=document.getElementById('B5').style.backgroundColor="black";
                obj=document.getElementById('B6').style.backgroundColor="black";
                obj=document.getElementById('B7').style.backgroundColor="black";
                obj=document.getElementById('B8').style.backgroundColor="black";
                obj=document.getElementById('BA').style.backgroundColor="black";
            }
            if(C == 8){
                obj=document.getElementById('C2').style.backgroundColor="black";
                obj=document.getElementById('C9').style.backgroundColor="black";
            }
            if(D == 3){
                obj=document.getElementById('D2').style.backgroundColor="black";
                obj=document.getElementById('D3').style.backgroundColor="black";
                obj=document.getElementById('D4').style.backgroundColor="black";
                obj=document.getElementById('D5').style.backgroundColor="black";
                obj=document.getElementById('D6').style.backgroundColor="black";
                obj=document.getElementById('D7').style.backgroundColor="black";
                obj=document.getElementById('D9').style.backgroundColor="black";
            }
            if(E == 4){
                obj=document.getElementById('E2').style.backgroundColor="black";
                obj=document.getElementById('E3').style.backgroundColor="black";
                obj=document.getElementById('E5').style.backgroundColor="black";
                obj=document.getElementById('E6').style.backgroundColor="black";
                obj=document.getElementById('E7').style.backgroundColor="black";
                obj=document.getElementById('E9').style.backgroundColor="black";
            }
            if(F == 7){
                obj=document.getElementById('F2').style.backgroundColor="black";
                obj=document.getElementById('F3').style.backgroundColor="black";
                obj=document.getElementById('F9').style.backgroundColor="black";
            }
            if(G == 2){
                obj=document.getElementById('G1').style.backgroundColor="black";
                obj=document.getElementById('G3').style.backgroundColor="black";
                obj=document.getElementById('G4').style.backgroundColor="black";
                obj=document.getElementById('G5').style.backgroundColor="black";
                obj=document.getElementById('G6').style.backgroundColor="black";
                obj=document.getElementById('G7').style.backgroundColor="black";
                obj=document.getElementById('G8').style.backgroundColor="black";
                obj=document.getElementById('GA').style.backgroundColor="black";
            }
            if(H == 6){
                obj=document.getElementById('H1').style.backgroundColor="black";
                obj=document.getElementById('H2').style.backgroundColor="black";
                obj=document.getElementById('H9').style.backgroundColor="black";
                obj=document.getElementById('HA').style.backgroundColor="black";
            }
            if(I == 2){
                obj=document.getElementById('I1').style.backgroundColor="black";
                obj=document.getElementById('I2').style.backgroundColor="black";
                obj=document.getElementById('I3').style.backgroundColor="black";
                obj=document.getElementById('I4').style.backgroundColor="black";
                obj=document.getElementById('I7').style.backgroundColor="black";
                obj=document.getElementById('I8').style.backgroundColor="black";
                obj=document.getElementById('I9').style.backgroundColor="black";
                obj=document.getElementById('IA').style.backgroundColor="black";
            }
            if(J == 2){
                obj=document.getElementById('J1').style.backgroundColor="black";
                obj=document.getElementById('J2').style.backgroundColor="black";
                obj=document.getElementById('J3').style.backgroundColor="black";
                obj=document.getElementById('J4').style.backgroundColor="black";
                obj=document.getElementById('J7').style.backgroundColor="black";
                obj=document.getElementById('J8').style.backgroundColor="black";
                obj=document.getElementById('J9').style.backgroundColor="black";
                obj=document.getElementById('JA').style.backgroundColor="black";
            }
//=======================================================================================    
            if(CA == 4){
                obj=document.getElementById('A1').style.backgroundColor="black";
                obj=document.getElementById('B1').style.backgroundColor="black";
                obj=document.getElementById('G1').style.backgroundColor="black";
                obj=document.getElementById('H1').style.backgroundColor="black";
                obj=document.getElementById('I1').style.backgroundColor="black";
                obj=document.getElementById('J1').style.backgroundColor="black";
            }
            if(CB == 2){
                obj=document.getElementById('A2').style.backgroundColor="black";
                obj=document.getElementById('C2').style.backgroundColor="black";
                obj=document.getElementById('D2').style.backgroundColor="black";
                obj=document.getElementById('E2').style.backgroundColor="black";
                obj=document.getElementById('F2').style.backgroundColor="black";
                obj=document.getElementById('H2').style.backgroundColor="black";
                obj=document.getElementById('I2').style.backgroundColor="black";
                obj=document.getElementById('J2').style.backgroundColor="black";
            }
            if(CC == 3){
                obj=document.getElementById('B3').style.backgroundColor="black";
                obj=document.getElementById('D3').style.backgroundColor="black";
                obj=document.getElementById('E3').style.backgroundColor="black";
                obj=document.getElementById('F3').style.backgroundColor="black";
                obj=document.getElementById('G3').style.backgroundColor="black";
                obj=document.getElementById('I3').style.backgroundColor="black";
                obj=document.getElementById('J3').style.backgroundColor="black";
            }
            if(CD == 5){
                obj=document.getElementById('B4').style.backgroundColor="black";
                obj=document.getElementById('D4').style.backgroundColor="black";
                obj=document.getElementById('G4').style.backgroundColor="black";
                obj=document.getElementById('I4').style.backgroundColor="black";
                obj=document.getElementById('J4').style.backgroundColor="black";
            }
            if(CE == 6){
                obj=document.getElementById('B5').style.backgroundColor="black";
                obj=document.getElementById('D5').style.backgroundColor="black";
                obj=document.getElementById('G5').style.backgroundColor="black";
                obj=document.getElementById('E5').style.backgroundColor="black";
            }
            if(CF == 6){
                obj=document.getElementById('B6').style.backgroundColor="black";
                obj=document.getElementById('D6').style.backgroundColor="black";
                obj=document.getElementById('G6').style.backgroundColor="black";
                obj=document.getElementById('E6').style.backgroundColor="black";
            }
            if(CG == 4){
                obj=document.getElementById('B7').style.backgroundColor="black";
                obj=document.getElementById('D7').style.backgroundColor="black";
                obj=document.getElementById('G7').style.backgroundColor="black";
                obj=document.getElementById('E7').style.backgroundColor="black";
                obj=document.getElementById('I7').style.backgroundColor="black";
                obj=document.getElementById('J7').style.backgroundColor="black";
            }
            if(CH == 6){
                obj=document.getElementById('B8').style.backgroundColor="black";
                obj=document.getElementById('G8').style.backgroundColor="black";
                obj=document.getElementById('I8').style.backgroundColor="black";
                obj=document.getElementById('J8').style.backgroundColor="black";
            }
            if(CI == 2){
                obj=document.getElementById('A9').style.backgroundColor="black";
                obj=document.getElementById('C9').style.backgroundColor="black";
                obj=document.getElementById('D9').style.backgroundColor="black";
                obj=document.getElementById('E9').style.backgroundColor="black";
                obj=document.getElementById('F9').style.backgroundColor="black";
                obj=document.getElementById('H9').style.backgroundColor="black";
                obj=document.getElementById('I9').style.backgroundColor="black";
                obj=document.getElementById('J9').style.backgroundColor="black";
            }
            if(CJ == 4){
                obj=document.getElementById('AA').style.backgroundColor="black";
                obj=document.getElementById('BA').style.backgroundColor="black";
                obj=document.getElementById('GA').style.backgroundColor="black";
                obj=document.getElementById('HA').style.backgroundColor="black";
                obj=document.getElementById('IA').style.backgroundColor="black";
                obj=document.getElementById('JA').style.backgroundColor="black";
            }                                          
            str+=id;
            //say("element1", str)
        }     
    }
function say(id, msg){
document.getElementById(id).innerHTML = msg;
}
</script>


