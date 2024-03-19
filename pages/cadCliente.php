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
                            <h1 class="page-header"><strong>Cliente</strong></h1>
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
                                            <form role="form" action="cadClienteEnv.php" method="GET">
                                                <div class="form-group">
                                                    <label>Nome:</label>
                                                    <input type="text" name="n" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>CPF:</label>
                                                    <input type="text" name="c" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Data de Nascimento:</label>
                                                    <input type="date" name="d" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Sexo</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="s" id="optionsRadios1" value="Feminino" checked>Feminino
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="s" id="optionsRadios2" value="Masculino">Masculino
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="s" id="optionsRadios3" value="ND">Não declarado
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