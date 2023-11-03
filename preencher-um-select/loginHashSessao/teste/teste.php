<?php 
include("Sessao.php"); // para ter acesso ao método estático logoff()
if (isset($_GET['logoff'])){
  Sessao::logoff(); 
  // para criar menos arquivos, chamo o método estático que quebra a sesão
}
   session_start();
   if(isset($_SESSION['login'])) {
?>
<h1>olaaaaaaaa</h1>
<?php 
  } // fecha o bloco do if 
  else{
    echo '<script language="javascript">alert("Você não tem acesso autorizado!")</script>';
    echo '<script language="javascript">window.location="../formInsert.php"</script>';
  }
?>
