<?php
if (isset($_POST['datainicial']) && isset($_POST['datafinal']) && $_POST['datainicial'] < $_POST['datafinal']) {
  $datainicial = new DateTime($_POST['datainicial']);
  $datafinal = new DateTime($_POST['datafinal']);

  $diferenca = $datainicial -> diff($datafinal);

  echo $diferenca -> format('%Ya %Mm %Dd %Hh %I %S');
}else{
    echo "Valores equivocados.";
}
?>