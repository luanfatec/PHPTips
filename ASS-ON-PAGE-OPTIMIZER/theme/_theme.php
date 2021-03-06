<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?= $head; ?>

    <link rel="stylesheet" href="<?= url('theme/style.css') ?>">
</head>
<body>
    <nav class="main_nav">
        <?php if ($v->section("sidebar")):
                echo $v->section("sidebar");
            else:
                ?>
            <a href="<?= url() ?>" title="">Home</a>
            <a href="<?= url("contato") ?>" title="">Contato</a>
            <a href="<?= url("erro") ?>" title="">Erro</a>

        <?php
            endif;
        ?>
    </nav>

    <main class="main_content">
        <?= $v->section("content") ?>
    </main>

    <footer class="main_footer">
        <?= SITE; ?> - Todos os direitos reservados
    </footer>

    <script src="<?= url("theme/jquery-3.4.1.min.js") ?>"></script>
    <?= $v->section("scripts") ?>
</body>
</html>