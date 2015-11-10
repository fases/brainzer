<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            #bt1, #bt2{
                display: none;
            }
            .label{
                display:none;
                color: red;
            }
        </style>
        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
        <script type="text/javascript">

            function correcao() {
                perg1 = document.getElementById("3");
                perg2 = document.getElementById("6");
                perg3 = document.getElementById("12");
                perg4 = document.getElementById("13");
                perg5 = document.getElementById("18");
                perg6 = document.getElementById("24");

                if ((perg1.selected == true) && (perg2.selected == true) && (perg3.selected == true) && (perg4.selected == true) && (perg5.selected == true) && (perg6.selected == true)) {
                    alert("Acertou todas as questões! Parabéns!");
                    return true;
                } else {
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
            function Proximo() {
                location.href = "";
            }


        </script>
    </head>
    <body>
        <h1> "Quantos?" </h1>
        <form action="" onsubmit="return correcao();">

            <h3> Perguntas: </h3>
            <label> 1)Quantas horas tem em um dia? </label> <br>
            <select id="pergunta1" name="Pergunta1">
                <option id="1" value="8 horas"> 8 horas</option>
                <option id="2" value="16 horas"> 16 horas</option>
                <option id="3" value="24 horas"> 24 horas</option>
                <option id="4" value="12 horas"> 12 horas</option>
            </select> <br>
            <label class="label"> Resposta: 24 horas </label>
            <br>
            <label> 2)Quantos dias tem uma semana? </label><br>
            <select id="pergunta2" name="pergunta2">
                <option id="5" value="2 dias"> 2 dias</option>
                <option id="6" value="7 dias"> 7 dias </option>
                <option id="7" value="4 dias"> 4 dias</option>
                <option id="8" value="10 dias"> 10 dias</option>
            </select> <br>
            <label class="label"> Resposta: 7 dias </label>
            <br>
            <label> 3)Quantas estações tem em um ano?</label><br>
            <select id="pergunta3" name="pergunta3">
                <option id="9" value="5 estações"> 5 estações</option>
                <option id="10" value="3 estações"> 3 estações</option>
                <option id="11" value="7 estações"> 7 estações</option>
                <option id="12" value="4 estações"> 4 estações</option>
            </select> <br>
            <label class="label"> Resposta: 4 estações </label>
            <br>
            <label> 4)Quantos meses tem em um ano?</label><br>
            <select id="pergunta4" name="pergunta4">
                <option id="13" value="12 meses"> 12 meses</option>
                <option id="14" value="24 meses"> 24 meses</option>
                <option id="15" value="6 meses"> 6 meses</option>
                <option id="16" value="10 meses"> 10 meses</option>
            </select> <br>
            <label class="label"> Resposta: 12 meses </label>
            <br>
            <label> 5)Quantos minutos tem uma hora?</label><br>
            <select id="pergunta4" name="pergunta4">
                <option id="17" value="72 minutos"> 72 minutos</option>
                <option id="18" value="60 minutos"> 60 minutos</option>
                <option id="19" value="24 minutos"> 24 minutos</option>
                <option id="20" value="10 minutos"> 10 minutos</option>
            </select> <br>
            <label class="label"> Resposta: 60 minutos </label>
            <br>
            <label> 6)Quantos segundos tem em um minuto?</label><br>
            <select id="pergunta4" name="pergunta4">
                <option id="21" value="80 segundos"> 80 segundos</option>
                <option id="22" value="24 segundos"> 24 segundos</option>
                <option id="23" value="12 segundos"> 12 segundos</option>
                <option id="24" value="60 segundos"> 60 segundos</option>
            </select> <br>
            <label class="label"> Resposta: 60 segundos </label>
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
