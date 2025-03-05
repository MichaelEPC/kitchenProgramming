<!DOCTYPE html>
<html lang="en">
    <?php
        include_once '../View/Partials/head.php'; 
        include_once '../Lib/helpers.php';
    ?>
    <body class="sb-nav-fixed">
    <?= include_once '../View/Partials/sb_topnav.php'; ?>
        <div id="layoutSidenav">
            <?= include_once '../View/Partials/layoutSidenav_nav.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <?php
                        if(isset($_GET['module'])){
                            resolve();
                        }
                        else{
                            include_once '../View/Order/Category/cards.php'; 
                            include_once '../View/Order/Category/dishFormContainer.php'; 
                            include_once '../View/Order/Category/table.php'; 
                        }
                        ?>
                    </div>              
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
