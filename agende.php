<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psicóloga - Bárbara Caixeta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body link="" alink="" vlink="">
  <!--Banner e menu de navegação-->
    <header>
        <div class = "nav">
            <div>
                <a href="#" class="logo"><img class="logo" src="img/banner2.png" alt="Logo da Página"></a>
            </div>
            <br>
            <nav class="menu">
                
                    <a href="#">HOME</a>
                    <a href="#">SOBRE MIM</a>
                    <a href="#">BENEFÍCIOS</a>
                    <a href="agendamento.html">AGENDAMENTOS</a>
                    
                    <a target="_blank" href= "https://wa.me/5561999915606">
                        <button class="button">
                            ainda está com dúvidas ? 
                        </button>
                    </a>
                
            </nav> 
            </div>
        </div>
    </header>
   <main>
    <h1 class="agenda">CONFIRMADA SEU AGENDAMENTO</h1>
    <h2 class="dados" >Dados Pessoais</h2>
    <?php 

        $nome = $_POST["nome"];
        $tel = $_POST["tel"];
        $data = $_POST["date"];
        $time = $_POST["time"];
        
        echo"<p>Nome Completo: $nome</p>";
        echo"<p>Data da Consulta: $data</p>";
        echo"<p>Horário: $time</p>";

        echo "Tente não chegar atrasado, a asessão será cobrada se o paciente não comparecer na data marcada.";
    
    ?>

   </main>
    
    
</body>
</html>