<!DOCTYPE html>
<html lang="pt-br">
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
                            <h1 class="page-header">Cadastro de Produtos</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <form role="form" action="cadProdutoEnv.php" method="GET">
                                            <div class="form-group">
                                                    <label>Marca</label>
                                                    <input class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Descrição</label>
                                                    <input class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Valor</label>
                                                    <input class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nome</label>
                                                    <input class="form-control" placeholder="">
                                                </div>
                                                <button type="submit" class="btn btn-default">Cadastrar produto</button>
                                            </form>
                                        </div>
                                       
                            
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
<?php
ob_end_flush();
?>
</html>