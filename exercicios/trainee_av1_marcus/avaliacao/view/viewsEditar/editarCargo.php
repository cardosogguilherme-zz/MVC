<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editar Cargo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/help.css">
  <link rel="stylesheet" type="text/css" href="../../css/reset.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">  
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../<?php echo APP_ERROS."avaliacao/usuario/adminpage"?>">Moobitech</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href= "../<?php echo APP_ERROS."avaliacao/usuario/adminpage" ?>">Home</a></li>
        <li><a href="../<?php echo APP_ERROS."avaliacao/usuario/cadastrar"?>">Cadastro De Usuarios</a></li>
        <li><a href="../<?php echo APP_ERROS."avaliacao/usuario/gerenciarUsuarios"?>">Gerir Usuarios</a></li>
        <li><a href="../../empresa/cadastro">Cadastrar Empresa</a></li>
        <li><a href="../../empresa/gerirEmpresa">Gerir Empresa</a></li>
        <li><a href="<?php echo APP_ERROS."situacao/cadastrar"?>">Cadastrar Situação</a></li>
        <li class="active" ><a href="<?php echo APP_ERROS."situacao/gerenciarSituacao"?>">Gerir Situações</a></li>
        <li><a href="<?php echo APP_ERROS."cargo/cadastrar"?>">Cadastrar Cargos</a></li>
        <li ><a href="<?php echo APP_ERROS."cargo/gerenciarCargo"?>">Gerir Cargo</a></li>
        <li><a href="../../login/sair">Deslogar</a>
        <li><a> Bem vindo : <?php echo Sessao::getsessao('logado').",Logou as ".":". Sessao::getsessao('time'); ?> </a></li>
    </ul>
  </div>
</nav>
<?php foreach($aCargo as $key) { ?>
<div class="login-page">
  <div class="form">
    <legend><h1>Atualizar Cadastro do Cargo<h1></legend></br>
    <form class="login-form" method="post" action="<?php echo APP_ERROS."cargo/atualizar"?>">
        <h4>Nome do Cargo</h4>
        <input type="text" class="form-control" id="cargo" value=<?php echo  $key['nome'];?> name="nome"  required="" pattern="[a-zA-Z]+" title="SOMENTE LETRAS">
        <input type="hidden" name="id_cargo" value=<?php echo $key['id_cargo'];?> />
        <button>Atualizar</button>
         </form>
      </div>
    </div>
<?php } ?>    
</body>
</html>