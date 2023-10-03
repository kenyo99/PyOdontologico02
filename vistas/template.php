<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DENTAL</title>

    <!-- Custom fonts for this template-->

    <link rel="stylesheet" type="text/css" href="./assets/css/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    --> 
    <link rel="stylesheet" href="./assets/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">

    <!-- Custom styles for this template-->
    <link href="./assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require_once './vistas/plantilla/sidebar.php';?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               <?php require_once './vistas/plantilla/nav.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <?=$contenido;?>

                </div>
            </div>

           <?php require_once './vistas/plantilla/footer.php';?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="?ctrl=CtrlPersona&accion=logout">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="./assets/js/jquery/jquery.min.js"></script>
    <script src="./assets/js/jq-toast.min.js"></script>

    <script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="./assets/js/moment.min.js"></script>	
<script type="text/javascript" src="./assets/js/fullcalendar.min.js"></script>
<script src='./assets/js/locales/es.js'></script>



        <?php require_once './vistas/plantilla/js.php'; ?>
    

</body>

</html>