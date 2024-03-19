<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

    <?php include "head.php"; ?>

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
                                    Cadastro de Cliente
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                       <div class="col-lg-6">
                                         <?php
                                            require_once "../cone.php";
                                            $conecta = db_connect(); 
                                            $nome = $_GET['n'];
                                            $cpf = $_GET['c'];
                                            $nascimento = $_GET['d'];
                                            $sexo = $_GET['s'];
                                            $comandoSQL = "UPDATE 
                                            tbcliente SET nome='$nome',
                                            cpf='$cpf',nascimento='$nascimento',sexo='$sexo'";
                                            
                                            $grava = $conecta->prepare($comandoSQL); //testa o comando SQL
                                            $grava->execute(array()); 
                                            echo "<h2>DADOS ATUALIZADOS</h2>";
                                            header("Refresh:3; cadCliente.php");	
                                         
                                         
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
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../js/startmin.js"></script>

</body>

</html>
<?php
ob_end_flush();
?>