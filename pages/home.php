<!DOCTYPE html>
<html lang="pt-br">
    <style>
        #logoinicio {
            margin-left: 250px;
            align-items: center;
            margin-top: 30px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            display: block;
            justify-content: center;
        }

        #wrapper {
            background: #020024;
        }

        #page-wrapper {
            margin: 0px;
            height: 100vh;
            background: rgb(2,0,36);
            display: block;
            align-items: center;
            color: #fff;
            font-family: arial;
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,34,123,1) 39%, rgba(9,9,121,1) 45%, rgba(9,12,123,1) 65%, rgba(0,104,255,1) 100%);
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
                            <h1 class="page-header">Arrow Digital</h1>
                
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                <div>
                    <h2><strong>Seja bem vindo ao sistema Arrow Digital!</strong></h2><br>
                    <h4>Seu sistema de gestão. Tenha uma ótima experiencia!</h4>
                    <img id="logoinicio" src="../img/logo2.png" alt="logo">
                </div>
                                        
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <script src="../js/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>

</html>