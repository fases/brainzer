<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
             #video{
                display: none;
            }
            #bt1, #bt2{
                display: none;
            }
            .label{
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
            
            if((perg1.selected) && (perg2.selected) && (perg3.selected) && (perg4.selected)){
                alert("Acertou todas as questões! Parabéns!");
                return true;
            }else{   
                 erros = 0;

                    if (!perg1.selected) {
                        erros++;
                    }
                    if (!perg2.selected) {
                        erros++;
                    }
                    if (!perg3.selected) {
                        erros++;
                    }
                    if (!perg4.selected) {
                        erros++;
                    }
                    if (!perg5.selected) {
                        erros++;
                    }
                    if (!perg6.selected) {
                        erros++;
                    }
                    $('#bt1').show('slow');
                    $('#bt').hide('fast');
                    alert("Você errou "+ erros + " questões! Sinto muito, tente novamente :)");
                    return false;
            }
            }
             $(document).ready(function() {
              $('#bt1').click(function() {
                  $('.label').show('slow');
                  $('#bt2').show('slow');
                  
              });
        });
            function Proximo(){
                location.href="";
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
          
        </div>
        
        <form action="" onsubmit="return correcao();">
            <h3> Perguntas: </h3>
           <label> 1)Quantas animais têm no vídeo? </label> <br>
           <select id="pergunta1" name="Pergunta1">
               <option id="1" value="3"> 3</option>
               <option id="2" value="7"> 7</option>
               <option id="3" value="5"> 5</option>
               <option id="4" value="2"> 2</option>
           </select> <br>
           <label class="label"> Resposta: 5 </label>
            <br>
            <label> 2)Quais animais, dos que passarão no vídeo, têm pelo? </label><br>
            <select id="pergunta2" name="pergunta2">
               <option id="5" value="Galo, Porco, Vaca e Gato"> Galo, Porco, Vaca e Gato</option>
               <option id="6" value="Vaca, Gato, Porco e Tigre"> Vaca, Gato, Porco e Tigre</option>
               <option id="7" value="Tigre, Gato, Cachorro e Joaninha"> Tigre, Gato, Cachorro e Joaninha</option>
               <option id="8" value="Vaca, Tigre, Vaca e Galo"> Vaca, Tigre, Vaca e Galo</option>
           </select> <br>
           <label class="label"> Resposta: Vaca, Gato, Porco e Tigre </label>
            <br>
            <label> 3)Qual animal tem pena?</label><br>
            <select id="pergunta3" name="pergunta3">
               <option id="9" value="Vaca"> Vaca</option>
               <option id="10" value="Porco"> Porco</option>
               <option id="11" value="Tigre"> Tigre</option>
               <option id="12" value="Galo"> Galo</option>
           </select> <br>
           <label class="label"> Resposta: Galo </label>
            <br>
            <label> 4)Qual animal possui só uma cor?</label><br>
            <select id="pergunta4" name="pergunta4">
               <option id="13" value="Galo"> Galo</option>
               <option id="14" value="Gato"> Gato</option>
               <option id="15" value="Porco"> Porco</option>
               <option id="16" value="Tigre"> Tigre</option>
           </select> <br>
           <label class="label"> Resposta: Porco </label>
            <br>
            <br>
            <input type="submit" id="bt" value="Responder"/>
            <input type="button" id="bt1" value="Ver Correção"/>
            <input type="button" id="bt2" onclick="Proximo()" value="Próximo Jogo"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
