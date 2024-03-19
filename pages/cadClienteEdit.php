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
                                    <?php
                                      if(isset($_GET['id'])){
                                            $id = $_GET['id'];
                                            require_once "../cone.php";
                                            $conecta = db_connect();
                                            $consulta = $conecta->query(
                                                "SELECT * FROM tbcliente WHERE id=$id");
                                            $n="";
                                            $c="";
                                            $s="";
                                            $d="";    
                                            while ($linha = $consulta->fetch()) {
                                                  $n = $linha['nome'];
                                                  $c = $linha['cpf'];
                                                  $s = $linha['sexo'];
                                                  $d = $linha['nascimento'];
                                            }
                                            if($s=="Feminino"){
                                                $f = "checked";
                                                $m ="";
                                                $nd="";
                                            }elseif($s=="Masculino"){
                                                $f="";
                                                $m = "checked";
                                                $nd="";
                                            }else{
                                                $f="";
                                                $m = "";
                                                $nd="checked";
                                            }
                                      }
                                    ?>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                       <div class="col-lg-6">
                                            <form role="form" action="cadClienteEditEnv.php" method="GET">
                                                <div class="form-group">
                                                    <label>Nome:</label>
                                                    <input type="text" name="n" value="<?php echo $n;?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>CPF:</label>
                                                    <input type="text" name="c" value="<?php echo $c;?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Data de Nascimento:</label>
                                                    <input type="date" name="d" value="<?php echo $d;?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Sexo</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="s" id="optionsRadios1" value="Feminino" <?php echo $f;?>>Feminino
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="s" id="optionsRadios2" value="Masculino"<?php echo $m;?>>Masculino
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="s" id="optionsRadios3" value="ND"<?php echo $nd;?>>Não declarado
                                                        </label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Confirmar</button>
                                                    <button type="reset" class="btn btn-danger">Cancelar</button>
                                                </div>
                                            </form>
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