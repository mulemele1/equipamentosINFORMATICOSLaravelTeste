<!DOCTYPE html>
<html lang="en">

<head>

    @include('frontend.css')

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




        <!-- CONTEINER / CONTEUDO DO SISTEMA-->

        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>LISTA DE SISTEMAS OPERACIONAIS</h4>
                        <h6>GERENCIAR SISTEMAS OPERACIONAIS</h6>
                    </div>
                    <div class="page-btn">
                        <a href="{{url('create_sistema')}}" class="btn btn-added">
                            <img src="assets/img/icons/plus.svg" alt="Add new Equipment">
                            Adicionar novo sistema operacional
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">
                                <div class="search-path">
                                    <a class="btn btn-filter" id="filter_search">
                                        <img src="assets/img/icons/filter.svg" alt="img">
                                        <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                                    </a>
                                </div>
                                <div class="search-input">
                                    <a class="btn btn-searchset">
                                        <img src="assets/img/icons/search-white.svg" alt="Search">
                                    </a>
                                </div>
                            </div>
                            <div class="wordset">
                                <ul>
                                    <li><a data-bs-toggle="tooltip" data-bs-placement="top" title="PDF"><img
                                                src="assets/img/icons/pdf.svg" alt="PDF"></a></li>
                                    <li><a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img
                                                src="assets/img/icons/excel.svg" alt="Excel"></a></li>
                                    <li><a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><img
                                                src="assets/img/icons/printer.svg" alt="Print"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="card mb-0" id="filter_inputs">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Escolha sistema operacional</option>
                                                        <option>Lenovo</option>
                                                        <option>HP</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Escolha Local</option>
                                                        <option>Mavalane</option>
                                                        <option>Machava</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Escolha Estado</option>
                                                        <option>Operacional</option>
                                                        <option>Nao Operacional</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Sistema operacional</option>
                                                        <option>Win 10</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Atribuido a</option>
                                                        <option>Jacinto</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <a class="btn btn-filters ms-auto">
                                                        <img src="assets/img/icons/search-whites.svg" alt="Filters">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="checkboxs">
                                                <input type="checkbox" id="select-all">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th>Nome da sistema opracional</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $machine)
                                        <tr>
                                            <td>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </td>
                                            <td>{{ $machine->nome_sistema }}</td>

                                            <td>
                                                <a href="{{url('details_sistema', $machine->id)}}"
                                                    style="margin-right: 10px;">
                                                    <img src="assets/img/icons/eye.svg" alt="View">
                                                </a>
                                                <a href="{{url('update_sistema', $machine->id)}}"
                                                    style="margin-left: 10px; margin-right: 10px;">
                                                    <img src="assets/img/icons/edit.svg" alt="Editar">
                                                </a>
                                                <a onclick="return confirm('Você tem certeza? Apagar?');"
                                                    href="{{url('delete_sistema', $machine->id)}}"
                                                    style="margin-left: 10px;">
                                                    <img src="assets/img/icons/delete.svg" alt="Apagar">
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- @include('frontend.minirelatorio') -->

    </div>
    </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>