<?php $estudantes = $_REQUEST ["estudantes"]; ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Escola</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/<?php echo FOLDER; ?>/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=listar">Alunos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Professor&acao=listar">Professores</a>
                  </li>
          
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </div>
   

    
    
      <div class= "container ">
        <div class="text-center">
        <h1>Semana da acessibilidade</h1>
        </div>

        <div class="text-center">
        <img class="rounded" src="https://www.cnj.jus.br/wp-content/uploads/2022/09/tjsp-acessibilidade.png" alt="Demonstração ilustrativa dedicada a acessibilidade de diversas pessoas com suas variadas deficiencias ">
        </div>
       <a href="/aula3/?controller=Estudante&acao=salvar" class="btn btn-success">Cadastrar Estudante><a>
       <br>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
        
          </tr>
        </thead>
        <tbody>
            <?php foreach($estudantes as $estudanteAtual) { ?>
                      <tr>
                          
                          <td><?php echo $estudanteAtual ["id"]; ?></td>
                          <td><?php echo $estudanteAtual ["nome"]; ?></td>
                          <td><?php echo $estudanteAtual ["idade"]; ?></td>
                      </tr>

                      <?php } ?>
        
        </tbody>
      </table>


 </div>
 
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>