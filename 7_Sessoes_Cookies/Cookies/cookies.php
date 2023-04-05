
<?php
    // Cookie é um arquivo criado pelo servidor, no computador do usuário para armazenar informações
    // É um arquivo de texto simples que fica disponível para o navegador

    // criar o cookie
    // 1 - nome do cookie que será criado
    // 2 - Informação que será guardada nele
    // 3 - tempo em milisegundo de duração desse cookie
    setcookie('user', "Everson", time() + 10000);
    setcookie('email', "everson@gmail.com", time()+3600);
    setcookie('pesquisa', "livro Introdução ao JS", time()+3600);
    

    if(!isset($_COOKIE)) {
        echo "Cookie " . "is not set!";
      } else {
        var_dump($_COOKIE);
        // deletar uma variável do cookie
        setcookie('pesquisa');
      }

    
    
?>

