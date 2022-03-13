<!DOCTYPE html>
<html lang="pt-br"> <!-- reconhece o formato da pagina. -->
    <head>

        <title> teste php </title>
        <meta charset="utf-8">
        <meta name= "author" content="vitorio">
        <meta name="keywords" content="HTML 5, banco dados, Semanticas">
        <meta name="description" content="Aulas de php com banco dados.">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>
    <body>
        <div id="central" class="card text-white bg-secondary mb-3 text-centerd-flex justify-content-center" style="max-width:35rem;">
          <h3 class="title"> Cadastro </h3>

          <form method="POST" action="processa.php">
            <div class="form-group">
              <label for="nome">NOME:</label>
              <input type="text"class="form-control" required="required" id="nome" placeholder="Nome" name="nome">
            </div>
            <div>
              <label for="festa"> Data de nascimento:</label>
              <input type="date" id="data" name="dt_nascimento" min="1900-01-01" max="3000-31-12">    
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Escolaridade</label>
                <select class="form-control" id="exampleFormControlSelect1" name="escolaridade">
                  <option > Ensino Fundamental </option>
                  <option>Ensino Médio</option>
                  <option>Ensino Superior</option>  
               </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Telefone:</label>
              <input type="tel" class="form-control" id="exampleFormControlInput1" name="telefone" placeholder="99 999999999">
            </div>
            <div class="text-center">
            <input type="submit" value="Cadastrar" class="btn btn-dark btn-lg title" name="CadUsuario">
            </div>
          </form>

        </div>
           </body>
</html>