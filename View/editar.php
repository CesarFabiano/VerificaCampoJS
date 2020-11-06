<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar - Agenda PHP</title>
    <!-- CSS do Bootstrap e CSS customizado -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include_once "include/menu.php";
    ?>

    <div class="container">
        <div class="row">
            <div class="col"></div>

            <div class="col-lg-4">
                <h3>Editar Contato</h3>

                <form>

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Informe o Nome">
                    </div>

                    <div class="form-group">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" placeholder="Informe o Sobrenome">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Informe o E-mail">
                    </div>

                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="id" class="form-control" id="id" placeholder="Informe o ID a ser alterado">
                    </div>
                    
                    <button type="button" class="btn btn-primary" id="editar" onclick="editarContato()">Editar</button>
                </form>

                <div id="status"></div>
            </div>

            <div class="col"></div>
        </div>
    </div> <!-- fecha /container -->

    <!-- jQuery (online) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- JavaScript customizado -->
    <script src="js/scripts.js"></script>
</body>
</html>