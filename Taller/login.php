<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->\
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
  <title>Login</title>
</head>

<body>
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                  <div class="text-center">
                    <img src="img/logoMetro.png" style="width: 150px;" alt="logo">
                    <hr>
                  </div>
                  <form action="send.php" method="POST">
                    <div class="form-outline mb-4">
                      <label class="form-label" for="name">Nombre:</label>
                      <input type="text" id="name" name="name" class="form-control" placeholder="Ingresa tu nombre"/>
                    </div>
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg azul mb-3" type="submit">Enviar</button>
                     
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Párchate Metro, te escuchamos</h4>
                  <p class="small mb-0">
¡Bienvenidos a la página de comentarios del metro! Aquí en nuestra plataforma, tu opinión es fundamental. Queremos escucharte, ya sea que tengas alguna queja, inconformidad o simplemente quieras compartir tu experiencia satisfactoria. Tu retroalimentación nos ayuda a mejorar y ofrecerte un servicio de transporte cada vez mejor. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>