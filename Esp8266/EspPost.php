<?php

include 'conexion.php';
date_default_timezone_set('America/Sao_Paulo');
if ($con) {
   /* echo "Conexão deu certo poha ";

    print_r($_POST);

    /*if(isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        echo " nome : ".$nome;

    */
}

/* if(isset($_POST['id_user'])) { 
        $id = $_POST['id_user'];
        
        echo "id:".$id;
     */

$consulta = "SELECT * FROM usuario";
$res =  $con->query($consulta);
echo'<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="generator" content="Mobirise v5.6.11, mobirise.com">
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:image:src" content="">
<meta property="og:image" content="">
<meta name="twitter:title" content="Home">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="assets/images/travel-1962320-960.webp" type="image/x-icon">
<meta name="description" content="">


<title>Home</title>
<link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
<link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="assets/parallax/jarallax.css">
<link rel="stylesheet" href="assets/dropdown/css/style.css">
<link rel="stylesheet" href="assets/socicon/css/styles.css">
<link rel="stylesheet" href="assets/theme/css/style.css">
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel= \'stylesheet \'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
<link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">';
echo "
            <title>Sistema biométrico onibus</title>
        
            <style>
                * {
                    box-sizing: border-box;
                    padding: 0;
                    margin: 0;
                    
                  
                }    

                }
                body {
                    width: 100%;
                    margin: auto;
                   
                }
                
                table {
                    overflow:hidden;
                    width:100%;
                    max-width: 900px;
                    border-collapse: collapse;
                    margin:auto;
                    margin-top: 200px;
                    margin-bottom:400px;
                }
        
              
                tr:hover {
                    cursor:pointer; 
                    transition:all 0.15s ease;
                    background:#6592e6;
                }

                th{
                    background:#6592e6;
                }

                th,
                td {
                    padding: 10px;
                    border: 2px solid #555;
                    text-align: center;
                }

    
            </style>
        </head>
        <body>
    
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Saldo</th>
                        <th>Último acesso</th>
                        <th>Estudante</th>

                    </tr>
                </thead>
                <tbody>";



echo "<script>
        
        
                function redirecionar(id){
                    window.location.href = 'user.php?id=' + id;

                }
        
        
            </script>
        ";


for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo "<tr onclick=redirecionar(" . $row['id_user'] . ")>";
    echo "<td>" . $row['id_user'] . "</td>";
    echo "<td>" . $row['nome'] . "</    td>";
    echo "<td>" . $row['saldo'] . "</td>";
    if($row['tempo'] == null){
        echo "<td> Nunca acessado</td>";

    }else{
        
        echo "<td>" . date('d/m/Y \a\s h:i:s', strtotime($row['tempo'])) . "</td>";

    }     
    if($row["estudo"]== '1'){
        echo "<td> Sim </td>";
    } else{

        echo "<td> Não </td>";
    
    } 

    echo "</tr>";
}


echo '
        </tbody>
       
        </table>
       
        <section data-bs-version="5.1" class="menu menu3 cid-tcyq4YKfEM" once="menu" id="menu3-0">
        
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="https://cdn.pixabay.com/photo/2017/01/08/07/49/travel-1962320_960_720.png" target="_blank">
                            <img src="assets/images/travel-1962320-960.webp" alt="" style="height: 3rem;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="./index.html">CyberBus</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="./index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="./EspPost.php">Usuários</a></li>
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="./sobre2.html">Sobre</a>
                        </li></ul>
                    
                    
                </div>
            </div>
        </nav>
    </section>
    
    <section data-bs-version="5.1" class="footer4 cid-tcywWeLsU6" once="footers" id="footer4-8">


    <div class="container">
        <div class="row mbr-white">
            <div class="col-6 col-lg-3">
                <div class="media-wrap col-md-4 col-12">
                    <a href="">
                        <img src="assets2/images/jxojfikv-400x400-removebg-preview.png" alt="Mobirise Website Builder">
                        
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                
                <p class="mbr-text mbr-fonts-style mb-4 display-4"><br><br><br></p>
                
                
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Universidade Estadual do Oeste do Paraná;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Engenharia&nbsp;</span>Mecânica.<span style="font-size: 1.1rem;">&nbsp; &nbsp;</span><span style="font-size: 1.1rem;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: 1.1rem;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: 1.1rem;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: 1.1rem;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: 1.1rem;">&nbsp; &nbsp;</span></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Centro de Engenharia e Ciências Exatas(CECE).</span></li><li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Paraná, Foz do Iguaçu(2022).<br></span><br></li>
                </ul>
            </div>
            
        </div>
    </div>

    
    
        
        
        
    
    

    </body>';


   