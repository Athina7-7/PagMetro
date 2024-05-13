<?php
include("header.php");

if(!isset($_SESSION['name'])){
    header('location:error.php');
}

$name = $_SESSION['name'];
?>
 <main class="col-md-9 col-lg-10 d-md-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                        <h1 class="mt-4">Bienvenido, <?php  echo $name; ?></h1>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>