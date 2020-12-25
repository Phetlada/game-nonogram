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
            <td width='40' class="none"><font id = "C1E">3</font></td>
            <td width='40' class="none"><font id = "C2D">5</font> </td>
            <td width='40' class="none"><font id = "C3A">1</font><br><font id = "C3C">7</font></td>
            <td width='40' class="none"><font id = "C4B">3</font><br><font id = "C4D">5</font></td>
            <td width='40' class="none"><font id = "C5B">8</font></td> 
            <td width='40' class="none"><font id = "C6A">9</font></td>
            <td width='40' class="none"><font id = "C6B">8</font></td>
            <td width='40' class="none"><font id = "C7B">8</font></td>
            <td width='40' class="none"><font id = "C4D1">6</font></td>
            <td width='40' class="none"><font id = "C5E">4</font></td>
            <td align="center" bgcolor="black" rowspan="10" class="none" width ="80px">
                <img id="myImage" src="heart.png" style="width:30px">
                <h5 id="heart"></h5>
            </td>
        </tr>
        <tr ><td align="right" bgcolor="black" class="none" height='40'><font id = "R1C">1</font></t> <font id = "R1F">1</font></td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R2D">4</font></td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R3C">6</font></td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40' ><font id = "R4B">8 </font></td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R5A">3</font></t> <font id = "R5E">6</font></td>
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
        <tr><td align="right" bgcolor="black" class="none"height='40'><font id = "R6A">10</font></td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R7A">10</font></td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R8B">9</font></td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "R9C">7</font> </td>
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
        <tr><td align="right" bgcolor="black" class="none" height='40'><font id = "RAD">1</font></t> <font id = "RAH">1</font></td>
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
</center>
</font></body>
</html>


<script>
document.body.style.backgroundImage = "url('bg.gif')";
document.getElementById('back').style.visibility='hidden';
var heart = 10;
var A = 0,B = 0,C = 0,D = 0,E = 0,F = 0,G = 0,H = 0,I = 0,J = 0;
var CA = 0,CB = 0,CC = 0,CD = 0,CE = 0,CF = 0,CG = 0,CH = 0,CI = 0,CJ = 0,CC1 = 0 ,CC2 =0 ,DD1 =0 ,DD2 = 0 ;

var A11 = 0,A12 = 0,B11 = 0,E12 = 0,E11 = 0,F11 = 0,G11 = 0,H11 =0 ,I11 = 0,J11 = 0,D11 = 0,D12 = 0, J1 = 0;

var C1 = 0,C21 = 0,C22 = 0,C23 = 0,C3 = 0,C41 = 0,C42 = 0,C5 = 0,C6 = 0,C7 = 0,C8 = 0,C91 = 0,C92 = 0,CA1 = 0;

say ("element1","What is Picture?");
say ("heart","x"+heart);
var all;
var str = '';
function LocationHash(id) {
    if(id == 'back1')location.assign("display.php");
    else location.assign("display.php?id2=2&id1=1&id3=3");
}
function set(id){
    all = A+B+C+D+E+F+G+H+I+J;
    if(heart != 0){
        if(all == 66){
            setSelect(id);
            say ("element1","PIG");
            document.getElementById('back1').style.visibility='hidden';
            document.getElementById('back').style.visibility='visible';
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
        if(id == 'E1' || id == 'F1' || id == 'G1'){
            CA +=1;
            if(CA == 3)say("C1E","");   
        }

        else if(id == 'D2' || id == 'E2' || id == 'F2' || id == 'G2'|| id == 'H2' ){
            CB +=1;
            if(CB == 5)say("C2D","");   
        }
        else if(id == 'A3' ){
            CC +=1;
            CC2 += 1 ;
            if(CC2 == 1)say("C3A",""); 

        }
        else if(id == 'C3' || id == 'D3'|| id == 'E3' || id == 'F3' || id == 'G3'|| id == 'H3' || id == 'I3'){
            CC +=1;
            CC1 += 1 ;
            if(CC1 == 7)say("C3C","");   
        }
        else if(id == 'B4' || id == 'C4'|| id == 'D4'){
            CD +=1;
            DD1 += 1 ;
            if(DD1 == 3)say("C4B",""); 

        }
        // nooooo
        else if(id == 'F4' || id == 'G4'|| id == 'H4'|| id == 'I4'|| id == 'J4'){
            CD +=1;
            DD2 += 1 ;
            if(DD2 == 5)say("C4D",""); 

        }
        else if(id == 'B5'|| id == 'C5'|| id == 'D5'|| id == 'E5'|| id == 'F5'|| id == 'G5'|| id == 'H5'|| id == 'I5' ){
            CE +=1;
            if(CE == 8)say("C5B",""); 

        }
        else if(id == 'A6'||id == 'B6'|| id == 'C6'|| id == 'D6'|| id == 'E6'|| id == 'F6'|| id == 'G6'|| id == 'H6'|| id == 'I6' ){
            CF +=1;
            if(CF == 9)say("C6A",""); 

        }
        //nooooooooo
        else if(id == 'B7'|| id == 'C7'|| id == 'D7'|| id == 'E7'|| id == 'F7'|| id == 'G7'|| id == 'H7'|| id == 'I7' ){
            CG +=1;
            if(CG == 8)say("C6B",""); 

        }
          //nooooooooo
        else if(id == 'C8'|| id == 'D8'|| id == 'E8'|| id == 'F8'|| id == 'G8'|| id == 'H8'|| id == 'I8'|| id == 'J8' ){
            CH +=1;
            if(CH == 8)say("C7B",""); 

        }
         //nooooooooo
        else if(id == 'D9' || id == 'E9'|| id == 'F9'|| id == 'G9'|| id == 'H9'|| id == 'I9'){
            CI +=1;
            if(CI == 6)say("C4D1",""); 

        }
        else if(id == 'EA' || id == 'FA'|| id == 'GA'|| id == 'HA'){
            CJ +=1;
            if(CJ == 4)say("C5E",""); 

        }
// =============================Color - Row =================================================
            if( id == 'A3' ){
                    A += 1;
                    say("R1C","");
                    
                obj=document.getElementById(id).style.backgroundColor="#FB767C";}
            else if(id == 'A6'){
                    A += 1;
                    say("R1F","");
                obj=document.getElementById(id).style.backgroundColor="#D3D4D5";}
        


            else if(id == 'B4'){
                    B += 1; 
                    if(B == 4)say("R2D","");
                obj=document.getElementById(id).style.backgroundColor="#FB7677";}
            else if(id == 'B5'){
                    B += 1; 
                    if(B == 4)say("R2D","");
                obj=document.getElementById(id).style.backgroundColor="#D3D4D5";}
            else if(id == 'B6'){
                    B += 1; 
                    if(B == 4)say("R2D","");
                obj=document.getElementById(id).style.backgroundColor="#AEAFAE";}
            else if(id == 'B7'){
                    B += 1; 
                    if(B == 4)say("R2D","");
                obj=document.getElementById(id).style.backgroundColor="#D3D4D5";}


            else if(id == 'C3'||id == 'C4'||id == 'C5'||id == 'C6'||id == 'C7'||id == 'C8'){
                    C += 1; 
                     if(C== 6)say("R3C","");
                obj=document.getElementById(id).style.backgroundColor="#FFA8A7";}

            else if(id == 'D2'||id == 'D3'){
                    D += 1; 
                  if(D == 8)say("R4B",""); 
                obj=document.getElementById(id).style.backgroundColor="#FFA8A7";}
            else if(id == 'D4'){
                    D += 1; 
                    if(D == 8)say("R4B",""); 
                obj=document.getElementById(id).style.backgroundColor="white";}
            else if(id == 'D5'||id == 'D6'||id == 'D7'||id == 'D8'||id == 'D9'){
                    D += 1; 
                 if(D == 8)say("R4B",""); 

                obj=document.getElementById(id).style.backgroundColor="#FFA8A7";}

            else if(id == 'E1'){
                    E+= 1; 
                    E11 += 1; 
                    if(E11 == 3)say("R5A",""); 
                obj=document.getElementById(id).style.backgroundColor="#F0767C";}

            else if(id == 'E2'||id == 'E3'){
                    E+= 1; 
                    E11 += 1; 
                   if(E11 == 3)say("R5A","");
                obj=document.getElementById(id).style.backgroundColor="#FFA8A7";}
            else if(id == 'E5' || id == 'E6'||id == 'E7'||id == 'E8'||id == 'E9'||id == 'EA'){
                    E+= 1; 
                    E12 += 1;
                   if(E12== 6)say("R5E","");  
                obj=document.getElementById(id).style.backgroundColor="#FFA8A7";}


            else if(id == 'F1' ){
                    F += 1;
                    if(F == 10)say("R6A","");
                obj=document.getElementById(id).style.backgroundColor="#F0767C";}
            else if(id == 'F2'|| id == 'F3'|| id == 'F4'|| id == 'F5'|| id == 'F6'|| id == 'F7'|| id == 'F8'|| id == 'F9'|| id == 'FA'){
                    F += 1; 
                    if(F == 10)say("R6A","");
                obj=document.getElementById(id).style.backgroundColor="#FFA8A7";}

            else if(id == 'G1'){
                    G += 1; 
                    if(G == 10)say("R7A","");
                obj=document.getElementById(id).style.backgroundColor="#F0767C";}


            else if(id == 'G2'|| id == 'G3'|| id == 'G4'|| id == 'G5'|| id == 'G6'|| id == 'G7'|| id == 'G8'|| id == 'G9'|| id == 'GA'){
                    G += 1; 
                    if(G == 10)say("R7A","");
                obj=document.getElementById(id).style.backgroundColor="#FFA8A7";}
         
                else if(id == 'H2'|| id == 'H3'|| id == 'H4'|| id == 'H5'|| id == 'H6'|| id == 'H7'|| id == 'H8'|| id == 'H9'|| id == 'HA'){
                    H += 1; 
                    if(H == 9)say("R8B","");
                obj=document.getElementById(id).style.backgroundColor="#FFA8A7";}

            else if(id == 'I3' || id == 'I4'|| id == 'I5'|| id == 'I6'|| id == 'I7'|| id == 'I8'|| id == 'I9'){I += 1; 
                   
                    if(I == 7)say("R9C","");
                obj=document.getElementById(id).style.backgroundColor="#FFA8A7";}
        
            else if(id == 'J4'){
                     J+= 1; 
                if(J == 1)say("RAD",""); 
                obj=document.getElementById(id).style.backgroundColor="#2B8224";}


            else if(id == 'J8'){J += 1; J1 += 1; 
                    if(J1 == 1)say("RAH","");
                obj=document.getElementById(id).style.backgroundColor="#2B8224";}
            
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
            if(A == 2){
                obj=document.getElementById('A1').style.backgroundColor="black";
                obj=document.getElementById('A2').style.backgroundColor="black";
                obj=document.getElementById('A4').style.backgroundColor="black";
                obj=document.getElementById('A5').style.backgroundColor="black";
                obj=document.getElementById('A7').style.backgroundColor="black";
                obj=document.getElementById('A8').style.backgroundColor="black";
                obj=document.getElementById('A9').style.backgroundColor="black";
                obj=document.getElementById('AA').style.backgroundColor="black";
            }
            if(B == 4){
                obj=document.getElementById('B1').style.backgroundColor="black";
                obj=document.getElementById('B2').style.backgroundColor="black";
                obj=document.getElementById('B3').style.backgroundColor="black";
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
            if(D == 8){
                obj=document.getElementById('D1').style.backgroundColor="black";
                obj=document.getElementById('DA').style.backgroundColor="black";
            }
            if(E == 9){
                obj=document.getElementById('E4').style.backgroundColor="black";
            }
            if(H == 9){
               
                obj=document.getElementById('H1').style.backgroundColor="black";
        
            }
            if(I == 7){
                obj=document.getElementById('I1').style.backgroundColor="black";
                obj=document.getElementById('I2').style.backgroundColor="black";
                obj=document.getElementById('IA').style.backgroundColor="black";
            }
            if(J == 2){
                obj=document.getElementById('J1').style.backgroundColor="black";
                obj=document.getElementById('J2').style.backgroundColor="black";
                obj=document.getElementById('J3').style.backgroundColor="black";
                obj=document.getElementById('J5').style.backgroundColor="black";
                obj=document.getElementById('J6').style.backgroundColor="black";
                obj=document.getElementById('J7').style.backgroundColor="black";
                obj=document.getElementById('J9').style.backgroundColor="black";
                obj=document.getElementById('JA').style.backgroundColor="black";
            }
//=======================================================================================    
            if(CA == 3){
                obj=document.getElementById('A1').style.backgroundColor="black";
                obj=document.getElementById('B1').style.backgroundColor="black";
                obj=document.getElementById('C1').style.backgroundColor="black";
                obj=document.getElementById('D1').style.backgroundColor="black";
                obj=document.getElementById('H1').style.backgroundColor="black";
                obj=document.getElementById('I1').style.backgroundColor="black";
                obj=document.getElementById('J1').style.backgroundColor="black";
            }
            if(CB == 5){
                obj=document.getElementById('A2').style.backgroundColor="black";
                obj=document.getElementById('B2').style.backgroundColor="black";
                obj=document.getElementById('C2').style.backgroundColor="black";
                obj=document.getElementById('I2').style.backgroundColor="black";
                obj=document.getElementById('J2').style.backgroundColor="black";
            }
            if(CC == 8){
                obj=document.getElementById('B3').style.backgroundColor="black";
                obj=document.getElementById('J3').style.backgroundColor="black";
            }
            if(CD == 8){
                obj=document.getElementById('A4').style.backgroundColor="black";
                obj=document.getElementById('E4').style.backgroundColor="black";
            }
            if(CE == 8){
                obj=document.getElementById('A5').style.backgroundColor="black";
                obj=document.getElementById('J5').style.backgroundColor="black";
            }
            if(CF == 9){
                obj=document.getElementById('J6').style.backgroundColor="black";
            }
            if(CG == 8){
                obj=document.getElementById('A7').style.backgroundColor="black";
                obj=document.getElementById('J7').style.backgroundColor="black";
            }
            if(CH == 8){
                obj=document.getElementById('A8').style.backgroundColor="black";
                obj=document.getElementById('B8').style.backgroundColor="black";
            
            }
            if(CI == 6){
                obj=document.getElementById('A9').style.backgroundColor="black";
                obj=document.getElementById('B9').style.backgroundColor="black";
                obj=document.getElementById('C9').style.backgroundColor="black";
                obj=document.getElementById('J9').style.backgroundColor="black";
            }
            if(CJ == 4){
                obj=document.getElementById('AA').style.backgroundColor="black";
                obj=document.getElementById('BA').style.backgroundColor="black";
                obj=document.getElementById('CA').style.backgroundColor="black";
                obj=document.getElementById('DA').style.backgroundColor="black";
                obj=document.getElementById('IA').style.backgroundColor="black";
                obj=document.getElementById('JA').style.backgroundColor="black";
            }                                          
            str+=id;
        }     
    }
function say(id, msg){
document.getElementById(id).innerHTML = msg;
}
</script>


