<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gerir Empresas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/help.css">
  <link rel="stylesheet" type="text/css" href="../../css/reset.css">
  <link rel="stylesheet" type="text/css" href="../../css/menu.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">
<ul>
    <li><a href="../<?php echo APP_ERROS."avaliacao/usuario/adminpage" ?>">Home</a></li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Acesso</a>
        <div class="dropdown1-content">
            <a><?php echo  "Usuario:".Sessao::getsessao('logado')?></a>
            <a>Logou as : <?php echo Sessao::getsessao('time'); ?></a>
            <a href="../../login/sair">Deslogar</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Usuario</a>
        <div class="dropdown1-content">
            <a href="../<?php echo APP_ERROS."avaliacao/usuario/cadastrar"?>">Cadastro De Usuarios</a>
            <a href="../<?php echo APP_ERROS."avaliacao/usuario/gerenciarUsuarios"?>">Gerir Usuarios</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Empresa</a>
        <div class="dropdown1-content">
            <a href="../../empresa/cadastro">Cadastrar Empresa</a>
            <a href="../../empresa/gerirEmpresa">Gerir Empresa</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Situação</a>
        <div class="dropdown1-content">
            <a href="<?php echo APP_ERROS."situacao/cadastrar"?>">Cadastrar Situação</a>
            <a href="<?php echo APP_ERROS."situacao/gerenciarSituacao"?>">Gerir Situações</a>
        </div>
    </li>
    <li class="dropdown1"><a href="javascript:void(0)" class="dropbtn">Aréa De Cargos</a>
        <div class="dropdown1-content">
            <a href="<?php echo APP_ERROS."cargo/cadastrar"?>">Cadastrar Cargos</a>
            <a href="<?php echo APP_ERROS."cargo/gerenciarCargo"?>">Gerir Cargos</a>
        </div>
    </li>
</ul>
<?php foreach($aEmpresa as $key) { ?>
<div class="login-page">
  <div class="form">
    <legend><h1>Atualizar Cadastro de Empresa<h1></legend></br>
    <form class="login-form" method="post" action="<?php echo APP_ERROS."empresa/atualizar"?>">
        <h4>Nome da empresa</h4>
        <input type="text" class="form-control" id="empresa" value=<?php echo  $key['nome'];?> name="empresa"  required=""
        pattern="[a-zA-Z0-9]+" title="SOMENTE LETRAS E NUMEROS">
        <input type="hidden" name="id_empresa" value=<?php echo $key['id_empresa'];?> />
        <button>Atualizar</button>
         </form>
      </div>
    </div>
<?php } ?>    
</body>
</html>