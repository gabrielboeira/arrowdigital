<?php include "head.php"; ?>
<?php
ob_start();
?>
<body>

    <div id="wrapper">
           <?php include "comum.php"; ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cadastro</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Cadastro de Produto
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                   <div class="col-lg-6">
                                     <?php
                                        require_once "../cone.php";
                                        $conecta = db_connect(); 
                                        $marca = $_GET['m'];
                                        $descricao = $_GET['d'];
                                        $valor = $_GET['v'];
                                        $nome = $_GET['n'];
                                        $comandoSQL = "INSERT INTO 
                                        tbproduto (marca,descrição,valor,nome) 
                                        VALUES ('$marca','$descricao','$valor','$nome')";
                                        $grava = $conecta->prepare($comandoSQL); //testa o comando SQL
                                        $grava->execute(array()); 
                                        echo "<h2>DADOS CADASTRADOS</h2>";
                                        header("Refresh:3; cadastro.php");	
                                     ?>
                                    </div>       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
ob_end_flush();
?>