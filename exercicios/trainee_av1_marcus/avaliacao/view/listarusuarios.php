<!DOCTYPE html>
<html lang="en">
<head>
  <title>lista de  Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/reset.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="userpage">Moobitech</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="userpage">Home</a></li>
        <li class="active" ><a href="./../usuario/gerenciarUsuarios">Listar Usuarios</a></li>
        <li><a href="../empresa/cadastro">Cadastro Empresa</a></li>
        <li><a href="../empresa/gerirEmpresa">Listar Empresa</a></li>
        <li ><a href="<?php echo APP_ERROS."avaliacao/situacao/cadastrar"?>">Cadastrar Situação</a></li>
        <li ><a href="<?php echo APP_ERROS."avaliacao/situacao/gerenciarSituacao"?>">Listar Situações</a></li>
        <li><a href="<?php echo APP_ERROS."avaliacao/cargo/cadastrar"?>">Cadastrar Cargos</a></li>
        <li ><a href="<?php echo APP_ERROS."avaliacao/cargo/gerenciarCargo"?>">Listar Cargo</a></li>
        <li><a href="../login/sair">Deslogar</a>
        <li><a> Bem vindo : <?php echo Sessao::getsessao('logado').",Logou as ".":". Sessao::getsessao('time'); ?> </a></li>
    </ul>
  </div>
</nav>
<br><br><br><br><br><br>
<div class="col-xs-9" id='lista'>
<legend><h2>Lista Usuarios</h2></legend>
<table class="table table-bordered">
  <tr bgcolor="white">
      <th><h2>Id Usuario</h2></th>
      <th><h2>login</h2></th>
      <th><h2>Senha</h2></th>
      <th><h2>Perfil</h2></th>
      <!-- <th><h2>Ação</h2></th> -->
  </tr>
<?php foreach ($aUsuarios as $key) { ?>

  <tr>
    <td><b><?php echo $key['id_user']; ?></b></td>
    <td><b> <?php echo $key['login']; ?> </b></td>
    <td><b> <?php echo $key['senha']; ?> </b></td>
    <td><b> <?php if($key['id_perfil'] == Constantes::$iADM_ID ){
          echo "Administrador";
        } else {
          echo "Usuario";
        } ?> </b>
      </td>
    <!-- Bloco de Exibição da Ação ! -->
    <!--   <td>
     <?php if(Sessao::getsessao('id_perfil') == Constantes::$iADM_ID) { ?>
    <?php if(Sessao::getsessao('logado') != $key['login']) { ?>      
          <b><a href="deletar/<?php echo $key['id_user']?>" >
          <span class="glyphicon glyphicon-remove-sign"> Remover</span></a></b>    
     <?php } ?>     
          <b><a href="editar/<?php echo $key['id_user'] ?>">
          <span class="glyphicon glyphicon-pencil">Editar</span></a></b>
    </td> -->
  <!-- <?php }?>  -->
  <!-- </tr> -->
<?php } ?>
</table>
</div>
</body>
</html> 