<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  
  <style type="text/css">
    .input-group-lg{
        margin-top: 1em;
        margin-bottom: 1em;
    }
    h2{
        margin-top: 50px;
        text-align: center;
    }
    #login-cad{
        background-color: #228B22;
        border-radius:20px;
        margin-top: 4em;
        margin-bottom: 2em;
        text-align:center;
        padding: 4%;
    }
    #login{
        color:white;
    } 
    
    @media screen and (min-width: 580px) {
        .container{
          display: flex;
          justify-content: center;          
          align-items: center;
          text-align:center;
          align-items:center;
          margin-left: auto;
          margin-right: auto; 
          margin-top:auto;
          margin-bottom:auto;

        }
        
        #login-cad{
        background-color: #228B22;
        border-radius:20px;
        text-align:center;
        padding: 8%;
    }
        #login{
        color:white;
    }
  }
  </style>
</head>
<body>
    <section>
     <div class="container">
      <div id="login-cad">
      <main class="form-signin w-100 m-auto">
      <form action="insert.php" method="post">
      <img class="mb-4" src="../forms/oboticario.png" alt="" width="120" height="120">
      <h3 class="h3 mb-3 fw-normal" id="login">Cadastro</h3>
          <div class="row">
            <div class="col-md-4">
                <div class="input-group input-group-lg">
                  <span class="input-group-text" id="inputGroup-sizing-lg">*Nome:</span>
                  <input type="text" name="nome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group input-group-lg">
                  <span class="input-group-text" id="inputGroup-sizing-lg">*E-mail:</span>
                  <input type="email" name="e-mail" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group input-group-lg">
                  <span class="input-group-text" id="inputGroup-sizing-lg">*Senha:</span>
                  <input type="password" name="senha" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required="">
                </div>
           </div>
              <center><button type="submit" class="mt-3 btn btn-lg btn-secondary"> Cadastrar </button><br><br>
              <a href="../forms/form-loginCliente.php" id="login">Já possui login?</a>
      </form>
      </main>
          </div>
      </div>
      </div>
    </section>
    <footer></footer>
  <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
