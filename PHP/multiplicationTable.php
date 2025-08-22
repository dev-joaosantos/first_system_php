<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link for CSS -->
    <link rel="stylesheet" href="../CSS/multiplicantionTable.css">
    <link rel="stylesheet" href="../CSS/universal.css">
    <!-- Link for Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"
        defer></script>
    <title>Tabuadas | Manual</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary py-4 navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-warning fw-bold ms-5" href="#">João Santos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-5">
                    <a class="nav-link active text-white" aria-current="page"
                        href="multiplicationTable.php">Tabuadas</a>
                    <a class="nav-link active text-white" aria-current="page"
                        href="../Joao Santos/HTML/sobre-mim.html">Sobre Mim</a>
                    <a class="nav-link active text-white" aria-current="page"
                        href="../Musica/music.php">Música em PHP</a>
                    <a class="nav-link disabled text-white" aria-disabled="true">Disabled</a>
                    <a class="nav-link disabled text-white" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Multiplication Table Manual-->
    <section id="multiplicantionTableManual">
        <div class="container bg-warning p-5 mt-5 rounded-2 ">
            <form class="" action="multiplicationTable.php" method="post">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <label class="fw-bold" for="multiplying">Número:</label>
                    <input class="ms-2 h-30" type="number" step="any" name="multiplying">
                    <br>
                    <p class="d-inline-flex gap-1">
                        <button class="btn btn-primary" type="submit" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample"
                            aria-expanded="<?php echo $_SERVER["REQUEST_METHOD"] == "POST" ? 'true' : 'false'; ?>"
                            aria-controls="collapseExample">
                            Calcular
                        </button>
                    <div class="collapse mt-3 <?php echo $_SERVER["REQUEST_METHOD"] == "POST" ? 'show' : ''; ?>"
                        id="collapseExample">
                        <div class="card card-body">
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["multiplying"])) {
                                require_once "multiplicationTableManual.php";
                            } else {
                                echo "<p class='text-muted'>Insira um número e clique em Calcular para ver a tabuada.</p>";
                            }
                            ?>
                        </div>
                    </div>
                    </p>

                </div>
            </form>

        </div>
    </section>




</body>

</html>