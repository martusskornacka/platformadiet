<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Jekyll v3.8.5" />
    <title>Panel CostiFood and Training</title>

    <link rel="stylesheet" href="sign.css" />

    <!-- Bootstrap core CSS -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet" />
  </head>
  <body class="text-center">

    <form class="form-signin" method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
    <h3>Panel CostiFood and Training</h3>
      <h1 class="h3 mb-3 font-weight-normal">Zaloguj się</h1>
  
      <label for="inputName" class="sr-only">Login</label>
      <input
        type="text"
        id="inputName"
        class="form-control"
        name="username"
        placeholder="Wpisz swój login"
        required
        autofocus
      />
      <label for="inputPassword" class="sr-only">Hasło</label>
      <input
        type="password"
        id="inputPassword"
        class="form-control"
        name="password"
        placeholder="Wpisz hasło"
        required
      />
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" /> Zapamiętaj mnie
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login_user" value="submit">
        Zaloguj się
      </button>
      <p class="mt-5 mb-3 text-muted">&copy; Costa</p>
    </form>
  </body>
</html>
