<?php
    include_once('./templates/header.php');
?>

<main id="sobre-container">
    <h1 id="sobre-title">Sobre o projeto</h1>
    <p>Este blog foi desenvolvido com o objetivo de praticar meus conhecimentos em PHP, utilizando dados mockados para simular um banco de dados e gerar páginas de forma dinâmica. </p>
    <br>
    <p>A estrutura conta com templates reutilizáveis (header e footer), carregamento dinâmico dos posts via id e organização modular dos arquivos. Ao clicar em um post, o conteúdo completo é exibido em uma página individual.</p>
    <br>
    <p>O foco principal é demonstrar minha capacidade de aplicar lógica em PHP puro e estruturar um site funcional com múltiplas páginas.</p>
    </p>
    <a href="<?= $BASE_URL ?>/index.php" class="back-btn">Voltrar para o início</a>

</main>

<?php
    include_once('./templates/footer.php');
?>