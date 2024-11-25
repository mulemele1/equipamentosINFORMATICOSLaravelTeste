<!DOCTYPE html>
<html lang="en">

<base href="/public">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Equipamento Delegacao Cispoc</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.jpg">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

        @include('frontend.header')


        <div class="sidebar" id="sidebar">

            @include('frontend.nav_bar')

        </div>





        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Detalhes Equipamento</h4>
                        <h6>Todo Detalhe do Equipamento</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="bar-code-view">
                                    <img src="assets/img/barcode1.png" alt="barcode">
                                    <a class="printimg">
                                        <img src="assets/img/icons/printer.svg" alt="print">
                                    </a>
                                </div>

                                <div class="productdetails">
                                    <ul class="product-bar">
                                        <li>
                                            <h4>Número da máquina</h4>
                                            <h6>
                                                <input type="text" name="title" value="{{ $data->numero_da_maquina }}"
                                                    readonly style="border: none;">
                                            </h6>
                                        </li>
                                        <li>
                                            <h4>Marca</h4>
                                            <h6>
                                                <input type="text" name="marca"
                                                    value="{{ $data->marca ? $data->marca->nome_marca : 'Não informado' }}"
                                                    readonly style="border: none;">
                                            </h6>
                                        </li>
                                        <li>
                                            <h4>Modelo</h4>
                                            <h6>
                                                <input type="text" name="modelo" value="{{ $data->modelo }}" readonly
                                                    style="border: none;">
                                            </h6>
                                        </li>
                                        <li>
                                            <h4>Serial Number</h4>
                                            <h6>
                                                <input type="text" name="serial" value="{{ $data->serial_number }}"
                                                    readonly style="border: none;">
                                            </h6>
                                        </li>
                                        <li>
                                            <h4>Carregador</h4>
                                            <h6>
                                                <input type="text" name="carregador" value="{{ $data->carregador }}"
                                                    readonly style="border: none;">
                                            </h6>
                                        </li>
                                        <li>
                                            <h4>Disco</h4>
                                            <h6>
                                                <input type="text" name="disco" value="{{ $data->disco }}" readonly
                                                    style="border: none;">
                                            </h6>
                                        </li>
                                        <li>
                                            <h4>Memória</h4>
                                            <h6>
                                                <input type="text" name="memoria" value="{{ $data->memoria }}" readonly
                                                    style="border: none;">
                                            </h6>
                                        </li>
                                        <li>
                                            <h4>Sistema Operacional</h4>
                                            <h6>
                                                <input type="text" name="sistema"
                                                    value="{{ $data->sis_operacional ? $data->sis_operacional->nome_sistema : 'Não informado' }}"
                                                    readonly style="border: none;">
                                            </h6>
                                        </li>
                                        <li>
                                            <h4>Processador</h4>
                                            <h6>
                                                <input type="text" name="processador" value="{{ $data->processador }}"
                                                    readonly style="border: none;">
                                            </h6>
                                        </li>
                                        <li>
                                            <h4>Local</h4>
                                            <h6>
                                                <input type="text" name="local"
                                                    value="{{ $data->local ? $data->local->nome_local : 'Não informado' }}"
                                                    readonly style="border: none;">
                                            </h6>
                                        </li>
                                        <li>
                                            <h4>Estado</h4>
                                            <h6>
                                                <input type="text" name="estado"
                                                    value="{{ $data->estado ? $data->estado->nome_estado : 'Não informado' }}"
                                                    readonly style="border: none;">
                                            </h6>
                                        </li>
                                        <li>
                                            <h4>Projeto</h4>
                                            <h6>
                                                <input type="text" name="projeto" value="{{ $data->projeto }}" readonly
                                                    style="border: none;">
                                            </h6>
                                        </li>
                                        <li>
                                            <h4>Atribuído á</h4>
                                            <h6>
                                                <input type="text" name="atribuido" value="{{ $data->atribuido_a }}"
                                                    readonly style="border: none;">
                                            </h6>
                                        </li>
                                        <li>
                                            <h4>Ano de aquisição</h4>
                                            <h6>
                                                <input type="text" name="ano" value="{{ $data->ano_de_aquisicao }}"
                                                    readonly style="border: none;">
                                            </h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-lg-4 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="slider-product-details">
                                    <div class="owl-carousel owl-theme product-slide">
                                        <div class="slider-product">
                                            <img src="assets/img/product/product69.jpg" alt="img">
                                            <h4>macbookpro.jpg</h4>
                                            <h6>581kb</h6>
                                        </div>
                                        <div class="slider-product">
                                            <img src="assets/img/product/product69.jpg" alt="img">
                                            <h4>macbookpro.jpg</h4>
                                            <h6>581kb</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>