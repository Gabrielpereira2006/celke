<?php

/**
 * Obtém e sanitiza o ID do usuário da URL.
 * 
 * @var int|null $id ID do usuário ou null se não fornecido.
 */
$id =  filter_input(INPUT_GET, 'ID', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
}else{
    $_SESSION['msg'] = "<p style='color: #f00;'>Usuário não encontrado!</p>";
    header("Location: index.php");
   $_SESSION['msg'] = "<p style='color: #f00;'>Usuário não encontrado!</p>";
   header("Location: index.php");
}