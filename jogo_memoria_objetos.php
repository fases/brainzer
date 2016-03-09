<?php
include 'conexao.php';

session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: ../pagina_inicial.php");
} else {
    $pegar = "SELECT id FROM usuario WHERE user = '" . $_SESSION["usuario"] . "'";
    $sql = mysqli_query($con, $pegar);
    if ($sql) {
        while ($reg = mysqli_fetch_array($sql)) {
            $id_user = $reg["id"];
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            table{
                width: 200px;
                height: 40%;
            }
            img{
                width: 200px;
                height: 200px   ;
            }
            #img0, #img1,#img2, #img3, #img4, #img5, #img6, #img7, #img8, #img9, #img10, #img11, #img12, #img13, #img14, #img15, #img16, #img17, #img18, #img19 {
                display: none;
            }
            #princy{
              display: none;
            }

        </style>
        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
        <script>
            //EXIBINDO AS CARTAS E DESVIRANDO NOVAMENTE
            setTimeout(function() {
                $("#img0, #img1,#img2, #img3, #img4, #img5, #img6, #img7, #img8, #img9, #img10, #img11, #img12, #img13, #img14, #img15, #img16, #img17, #img18, #img19").show(2000);
                $("#verso_img0, #verso_img1,#verso_img2, #verso_img3, #verso_img4, #verso_img5, #verso_img6, #verso_img7, #verso_img8, #verso_img9, #verso_img10, #verso_img11, #verso_img12, #verso_img13, #verso_img14, #verso_img15, #verso_img16, #verso_img17, #verso_img18, #verso_img19").hide(2000);
            }, 1000);
            setTimeout(function() {
                $("#img0, #img1,#img2, #img3, #img4, #img5, #img6, #img7, #img8, #img9, #img10, #img11, #img12, #img13, #img14, #img15, #img16, #img17, #img18, #img19").hide(2000);
                $("#verso_img0, #verso_img1,#verso_img2, #verso_img3, #verso_img4, #verso_img5, #verso_img6, #verso_img7, #verso_img8, #verso_img9, #verso_img10, #verso_img11, #verso_img12, #verso_img13, #verso_img14, #verso_img15, #verso_img16, #verso_img17, #verso_img18, #verso_img19").show(2000);
            }, 1000);

            var imgs_abertas = 0;
            var img_aberta_01 = "";
            var img_aberta_02 = "";
            var pontos = 0;
            var tentativas2 = 0;

            function trocarImagem(img1, img2){
				$('#'+img1).hide();
				$('#'+img2).fadeIn("slow");
				compararImagem(img1, img2);
			}

			function compararImagem(img1, img2){
				if (imgs_abertas == 0){
					img_aberta_01 = img2;
					imgs_abertas = 1;
				}else if(imgs_abertas == 1){
					img_aberta_02 = img2;
					if ($('#'+img_aberta_01).attr("src") != $('#'+img_aberta_02).attr("src")){

						setTimeout(function(){
							$('#'+img_aberta_01).hide();
							$('#'+img_aberta_02).hide();
							$('#'+"verso_"+img_aberta_01).fadeIn();
							$('#'+"verso_"+img_aberta_02).fadeIn();
						}, 800);

					}
					imgs_abertas = 0;
                                        tentativas2++;
				}

			}
      // CHAMANDO O JOGO
      $(document).ready(function () {
          $('#comecar').click(function () {
              $('#princy').show('fast');
              $('#orientacao').hide('fast');

          });
      });
       function sair(){
        //CÁLCULO DA PONTUAÇÃO
            var pontuacao = 10000 / tentativas2;
           
            $("#pontuacao").attr("value", pontuacao);
              
            }
        </script>
    </head>
    <body>
      <h1>Jogo da Memória</h1>
      <div id='orientacao'>
        <h3> No jogo da memória você terá que: <br>
            - Memorizar as cartas; <br>
            - Encontrar os pares dos objetos; <br>
        <h3 id="h3"> Preste bastante atenção quando as cartas forem viradas automaticamente. </h3>
        <input class="butao" type="button" value="Começar" id="comecar"/>
      </div>
        <div id="princy">
            <?php
            $a = 0;
            $id_jogo = 3;
            $nivel = 3;
            $tipo_jogo = 6;


            echo "<div id='verso'>";
            $quesitos = "select * from tipo_jogo where jogo_id = $id_jogo and nivel = $nivel";
            $results = mysqli_query($con, $quesitos);
            if ($results) {
                while ($verso = mysqli_fetch_array($results)) {
                    $parteTras = $verso["complemento"];
                }
            }
            echo "<div id='img'>";

            $quesito = "select * from quesito where jogo_id = $id_jogo and tipojogo_id = $tipo_jogo";
            $result = mysqli_query($con, $quesito);



            if ($result) {

                $imagens = array();


                while ($reg = mysqli_fetch_array($result)) {
                    array_push($imagens, $reg['pergunta']);
                    array_push($imagens, $reg['respostaCorreta']);
                }
                echo "<table>";
                shuffle($imagens);
                //echo sizeof($imagens);
                $i = 0;
                for ($l = 0; $l <= 3; $l++) {
                    echo "<tr id='i.l_$i'>";
                    for ($c = 0; $c <= 4; $c++) {
                        echo "<td><img src=" . $imagens[$i] . " alt='Bugou' id='img$i'/>
                              <img src = '$parteTras' alt= 'verso' id='verso_img$i' onclick=\"trocarImagem(this.id, 'img$i')\"/> </td> ";
                        $i++;
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
            echo "</div>";
                    echo "<form action= 'jogo_memoria_objetos_correcao.php' method= 'get' onsubmit= 'sair()'>";
                    echo " <input type='hidden' name='pontuacao' id='pontuacao'/>";
                    echo "<input style='margin-left: 270px;' type='submit' value= 'Finalizar' class='butao' id='botao'/>";
                    echo "</form>";
                    echo "</div>";

            //$mysqli_close($con);
            ?>
        </div>
    </body>
</html>


