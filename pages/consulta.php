<!DOCTYPE html>
<html lang="pt-br">
    <style>
            #page-wrapper {
                background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,34,123,1) 39%, rgba(9,9,121,1) 45%, rgba(9,12,123,1) 65%, rgba(0,104,255,1) 100%);
                margin: 0px;
                height: 100vh;
            }

            .page-header {
                color: #fff;
            }
            
    </style>
    <?php include "head.php"; ?>

    <body>

        <div id="wrapper">


              <?php include "comum.php"; ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> <strong>TABELAS</strong></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   Tabelas de dados
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>NOME</th>
                                                    <th>CPF</th>
                                                    <th>#</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php 
                                                   require_once "../cone.php";
                                                   $conecta = db_connect();
                                                   $consulta = $conecta->query("
                                                   SELECT * FROM tbcliente");
                                                   while ($linha = $consulta->fetch()) {
                                                    $idP = $linha['id'];
                                               ?> 
                                                        <tr class="odd gradeX">
                                                            <td><?php echo $linha['id']?></td> 
                                                            <td><?php echo $linha['nome']?></td>                                                    
                                                            <td><?php echo $linha['cpf']?></td>

                                                            <td>
                                                            <a href="<?php echo "cadClienteDel.php?id=$idP";?>">  
                                                               <i class="btn btn-danger fa fa-trash"></i>
                                                            </a>   
                                                                <a href="<?php echo "cadClienteEdit.php?id=$idP";?>">
                                                                    <i class="btn btn-warning fa fa-edit"></i>
                                                                </a>
                                                            </td>
                                                        </tr>  
                                                <?php } ?>                                             
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="panel-heading">
                                   Tabelas de Produtos
                                    </div>
                                    <!-- /.table-responsive --><div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>MARCA</th>
                                                    <th>DESCRICAO</th>
                                                    <th>VALOR</th>
                                                    <th>NOME</th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php 
                                                   require_once "../cone.php";
                                                   $conecta = db_connect();
                                                   $consulta = $conecta->query("
                                                   SELECT * FROM tbproduto");
                                                   while ($linha = $consulta->fetch()) {
                                                    $idP = $linha['id'];
                                               ?> 
                                                        <tr class="odd gradeX">
                                                            <td><?php echo $linha['id']?></td> 
                                                            <td><?php echo $linha['Marca']?></td>                                                    
                                                            <td><?php echo $linha['Descrição']?></td>
                                                            <td><?php echo $linha['Valor']?></td>
                                                            <td><?php echo $linha['Nome']?></td>

                                                            <td>
                                                        
                                                            </td>
                                                        </tr>  
                                                <?php } ?>                                             
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                   
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                
                   
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>

        

    </body>

</html>