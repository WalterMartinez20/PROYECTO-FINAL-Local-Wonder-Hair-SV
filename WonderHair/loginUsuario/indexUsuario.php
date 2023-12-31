<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/login.css">
    <title>Login de email</title>
  </head>
  <body style=" padding: 30px 35px 30px 35px;">
  <div class="container" style="display:block;">
    <!--<div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>-->
    <!--<div class="d-none d-md-flex">
      <p  id="Rgistro">Hola!</p>
      <p id="rgistro">Quieres publicar tu salon de belleza?</p>
      <div>
        <a href="../RegistroSalon.php" style="position: absolute; top: 40%; left: 130px; text-decoration: none; background-color: Skyblue;
          padding: 0.75rem 1rem; letter-spacing: 0.05rem; font-weight: 600; font-size: 20px; color: white; border-radius: 20px;"><img src="../img/barbershop.png" style="height: 30px;"> PUBLICAR SALON</a>
      </div>
    </div>----->
    
    <div class="col-md-8 col-lg-5" style="box-shadow: 0 0 20px rgba(0, 0, 0.2);
      border-radius: 25px; width:50%; margin-inline: auto;">
      <div class="login d-flex align-items-center py-5">
        <div class="container ">
          <div class="row" style="justify-content: center;">
            <div class="col-md-9 col-lg-8 align-items-center justify-content-center">
              <h3 class="login-heading mb-4">Iniciar Sesion</h3>

              <!-- Sign In Form -->
              <form action="servidor/login/logear.php" method="post">
                <span id="login-error"></span>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="email" id="email" placeholder="email">
                  <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  <label for="password">Password</label>
                </div>
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Entrar</button>
                  <div class="text-center">
                    <a class="small" href="../RegistroSalon.php">Registrate aqui!</a>
                    <a class="small" id="separo" href="../index.php">Volver al menu principal</a>
                  </div>
                  
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <script>
    let form = document.querySelector('form');
    let loginError = document.querySelector('#login-error');

    form.addEventListener("submit", function(e){
      e.preventDefault();

      let loginForm = new FormData();
      loginForm.append('email', document.querySelector('input[name="email"]').value);
      loginForm.append('password', document.querySelector('input[name="password"]').value);

      fetch("servidor/login/logear.php", {
          method: 'POST',
          body: loginForm,
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              window.location.href = '../index.php';
          } else {
              console.log('No se pudo ingresar');
              loginError.innerHTML = 'No se pudo iniciar sesión';
          }
      })

    });
  </script>

</body>
</html>