<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
             #video{
                display: none;
               // margin-left: 500px;
            }
            //#titulo{
               // margin-left: 680px;
           // }
            //#botao{
              //  margin-left: 730px;
           // }
            #bt1{
                display: none;
            }
            #label{
                display:none;
                color: red;
            }
        </style>
        <script type="text/javascript" src="jquery-1.11.3.min.js"> </script>
        <script type="text/javascript">
        $(document).ready(function() {
              $('#botao').click(function() {
                  $('#video').show('slow');
                  $('#botao').hide('fast');
              });
        });
        function correcao(){
            perg1 = document.getElementById("3");
            perg2 = document.getElementById("6");
            perg3 = document.getElementById("12");
            perg4 = document.getElementById("15");
            
            if((perg1.selected == true) && (perg2.selected == true) && (perg3.selected == true) && (perg4.selected == true)){
                alert("Acertou todas as questões! Parabéns!");
            }else{   
                  $('#bt1').show('slow');
                  $('#bt').hide('fast');  
                  alert("Resposta Errada. Você tem a opção de verificar as resposta ou tentar novamente!");
                  return false;
            }
             $(document).ready(function() {
              $('#bt1').click(function() {
                  $('#label').show('slow');
              });
        });
        }

        </script>
    </head>
    <body>
        <h1 id="titulo"> Mentalizando </h1>
        <p> </p><br>
        <input type="button" id="botao" value="Assistir vídeo"> 
        <div id="video">
            <video width="560" height="315" controls="controls" > 
                <source src="video/ANIMAIS_VIDEO_curto.mp4" type="video/mp4"> 
                <object data="" width="560" height="315"> 
                    <embed width="560" height="315" src="video/ANIMAIS_VIDEO_curto.mp4"/>
                </object>
            </video>
           <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/CzqtMT1Zfb0" frameborder="0" allowfullscreen></iframe> -->
        </div>
        
        <form action="frutas.php" onsubmit="correcao()">
            <h3> Perguntas: </h3>
           <label> 1)Quantas animais tem no vídeo? </label> <br>
           <select id="pergunta1">
               <option id="1" > 3</option>
               <option id="2" > 7</option>
               <option id="3" > 5</option>
               <option id="4" > 2</option>
           </select> <br>
           <label id="label"> Resposta: 5 </label>
            <br>
            <label> 2)Quais animais, dos que passarão no vídeo, tem pelo? </label><br>
            <select id="pergunta2">
               <option id="5" > Galo, Porco, Vaca e Gato</option>
               <option id="6" > Vaca, Gato, Porco e Tigre</option>
               <option id="7" > Tigre, Gato, Cachorro e Joaninha</option>
               <option id="8" > Vaca, Tigre, Vaca e Galo</option>
           </select> <br>
           <label id="label"> Resposta: Vaca, Gato, PPorco e Tigre </label>
            <br>
            <label> 3)Qual animal tem pena?</label><br>
            <select id="pergunta3">
               <option id="9" > Vaca</option>
               <option id="10" > Porco</option>
               <option id="11" > Tigre</option>
               <option id="12" > Galo</option>
           </select> <br>
           <label id="label"> Resposta: Galo </label>
            <br>
            <label> 4)Qual animal possui só uma cor?</label><br>
            <select id="pergunta4">
               <option id="13" > Galo</option>
               <option id="14" > Gato</option>
               <option id="15" > Porco</option>
               <option id="16" > Tigre</option>
           </select> <br>
           <label id="label"> Resposta: Porco </label>
            <br>
            <br>
            <input type="submit" id="bt" value="Responder"/>
            <input type="button" id="bt1" name="bt1" value="Ver Correção"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
