<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Criação de assinaturas</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/assinatura.css">
    <?php // include_once("../action/session.php"); ?>   
</head>


<?php
$nome = " ";                                //nome
$sobrenome = " ";                           //sobrenome
$nome_completo = $nome . $sobrenome;        //concatenação de nome + sobrenome
$setor = " ";                               //setor de trabalho 
$telefone = " ";                            //telefone 
$gerenciadora = " ";                        //gerenciadora = empresa de trabalho

?>

<body>
    <div class="container mt-4">
        <h4>
            <center> Criação de assinaturas de e-mail</center>
        </h4>
    </div>

    <br>

    <div class="container">
        <form class="row g-3 needs-validation" action="#" method="POST" novalidate>
            <div class="col-md-4">
                <label for="validacao_nome" class="form-label">Primeiro nome</label>
                <input type="text" class="form-control" id="validacao_nome" placeholder="Matheus" name="nome" required>
            </div>

            <div class="col-md-4">
                <label for="validacao_sobrenome" class="form-label">Último nome</label>
                <input type="text" class="form-control" id="validacao_sobrenome" placeholder="Figueiredo" name="sobrenome" required>
            </div>

            <div class="col-md-4">
                <label for="valida_telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="valida_telefone" placeholder="(19) 3115-8600" name="telefone" unrequired>
            </div>

            <div class="col-md-4">
                <label for="valida_setor" class="form-label">Setor</label>
                <select class="form-select" id="valida_setor" name="setor" required>
                    <option selected disabled value="">Escolha seu setor</option>
                    <option>Atendimento</option>
                    <option>Auditoria</option>
                    <option>Cobrança</option>
                    <option>Comercial Privado</option>
                    <option>Compras</option>
                    <option>Contabilidade</option>
                    <option>Contratos</option>
                    <option>Credenciamento</option>
                    <option>Desenvolvimento</option>
                    <option>Diretoria</option>
                    <option>Faturamento</option>
                    <option>Financeiro</option>
                    <option>Fiscal</option>
                    <option>Gerência</option>
                    <option>Implantação</option>
                    <option>Infraestrutura</option>
                    <option>Jurídico</option>
                    <option>Licitação</option>
                    <option>Marketing</option>
                    <option>Ouvidoria</option>
                    <option>Produtos</option>
                    <option>Plataforma</option>
                    <option>Recepção</option>
                    <option>Relacionamento</option>
                    <option>RH - Recursos Humanos</option>
                    <option>Serviços Gerais</option>
                </select>
                <div class="invalid-feedback">
                    Por favor, selecione um setor.
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gerenciadora" value="fitcard" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            FitCard
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gerenciadora" value="prime" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Prime Benefícios
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gerenciadora" value="link" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Link Benefícios
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gerenciadora" value="neo" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Neo Facilidades
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gerenciadora" value="euro" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Euro Telecom
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Gerar assinatura</button>
            </div>
        </form>

    </div>

    <?php

    if (isset($_POST['nome']))
        $nome = $_POST['nome'];

    if (isset($_POST['sobrenome']))
        $sobrenome = $_POST['sobrenome'];

    if (isset($_POST['setor']))
        $setor = $_POST['setor'];

    if (isset($_POST['telefone']))
        $telefone = $_POST['telefone'];

    if (isset($_POST['gerenciadora']))
        $gerenciadora = $_POST['gerenciadora'];

    $padrao_euro = $nome . " " . $sobrenome . " | " . $setor;
    $padrao_fit = $nome . " " . $sobrenome . " <br> " . $setor;
    $padrao_link = $nome . " " . $sobrenome . '<span style="color:#ffa100"> | </span>' . $setor;
    $padrao_neo = $nome . " " . $sobrenome . " | " . $setor;


    ?>

    <div class="container">
        <div class="row" id="fundo_da_assinatura">
            <div class="col">
                <?php
                if ($gerenciadora == "euro") {
                ?>
                    <div class="container-fluid">
                        <div class="col" id="escrita_euro">
                            <?php echo $padrao_euro;
                            if ($telefone != "")
                            ?>
                        </div>
                        <img src="../images/euro.png" id="image_euro" name="assinatura" alt="assinatura_euro">
                    </div>
                <?php

            } else if ($gerenciadora == "fitcard") {
                ?>
                    <div class="container-fluid">
                        <div class="col" id="escrita_fit_vermelho">
                            <?php echo $padrao_fit;
                            if ($telefone != "")
                            ?>
                            <div id="escrita_fit_cinza">
                                <?php echo " | " . $telefone; ?>
                            </div>
                        </div>
                        <img src="../images/fit.png" id="image_fit" name="assinatura" alt="assinatura_fitCard">
                    </div>
                <?php
            } else if ($gerenciadora == "link") {
                ?>
                    <div class="container-fluid">
                        <div class="col" id="escrita_link">
                            <?php echo $padrao_link;
                            if ($telefone != "")
                            ?>
                            <div id="telefone_link">
                                <?php echo " | " . $telefone; ?>
                            </div>
                        </div>
                        <img src="../images/link.png" id="image_link" name="assinatura" alt="assinatura_linkbeneficios">
                    </div>
                <?php
            } else if ($gerenciadora == "prime" && $setor != "Relacionamento") {
                ?>
                    <div class="container-fluid">
                        <div class="col" id="escrita_prime">
                            <?php echo $padrao_link;
                            if ($telefone != "")
                            ?>
                            <div id="telefone_prime">
                                <?php echo " | " . $telefone; ?>
                            </div>
                        </div>
                        <img src="../images/prime.png" id="image_prime" name="assinatura" alt="assinatura_primebeneficios">
                    </div>
                <?php
            } else if ($gerenciadora == "prime" && $setor == "Relacionamento") {
            ?>
                <div class="container-fluid">
                    <div class="col" id="escrita_prime">
                        <?php echo $padrao_link;
                        if ($telefone != "")
                        ?>
                        <div id="telefone_prime_rel">
                            <?php echo "Tel " . $telefone; ?>
                        </div>
                    </div>
                    <img src="../images/prime-relacionamento.png" id="image_prime" name="assinatura" alt="assinatura_primebeneficios">
                </div>
            <?php
            } else if ($gerenciadora == "neo") {
                ?>
                    <div class="container-fluid">
                        <div class="col" id="escrita_neo">
                            <?php echo $padrao_neo;
                            if ($telefone != "") {
                            ?>
                                <div id="telefone_neo">
                                    <?php echo " " . $telefone; ?>
                                </div>
                            <?php } else
                                echo " (11) 3631-7730";
                            ?>
                        </div>
                        <img src="../images/neo.png" id="image_neo" name="assinatura" alt="assinatura_neofacilidades">
                    </div>
                <?php
            }
                ?>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <br>
    </div>
</body>

</html>
