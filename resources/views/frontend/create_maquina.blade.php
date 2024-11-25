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


        @include('frontend.nav_bar')

        <!-- CONTEINER / CONTEUDO DO SISTEMA-->
        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>ADICIONAR EQUIPAMENTOS</h4>
                        <h6>CRIAR NOVO EQUIPAMENTO</h6>
                    </div>
                </div>

                <form action="{{url('add_maquina')}}" method="Post" enctype="multipart/form-data">

                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Número da máquina</label>
                                        <input type="text" name="numero">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="marca">Marca</label>
                                        <select class="form-control" id="marca" name="marca" onchange="updateInputValue(this)">
                                            <option value="" class="placeholder-option">Selecione a Marca</option>
                                            @if (isset($marca))
                                                <option value="{{ $marca->id }}" selected>{{ $marca->nome_marca }}</option>
                                            @endif
                                            @foreach ($marcas as $mar)
                                                <option value="{{ $mar->id }}">{{ $mar->nome_marca }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Modelo</label>
                                        <input type="text" name="modelo">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Serial Number</label>
                                        <input type="text" name="serial">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Carregador</label>
                                        <input type="text" name="carregador">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Disco</label>
                                        <input type="text" name="disco">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Memória</label>
                                        <input type="text" name="memoria">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="sistema">Sistema Operacional</label>
                                        <select class="form-control" type="text" id="sistema" name="sistema" onchange="updateInputValue(this)">
                                            <option value="" class="placeholder-option">Selecione o sistema</option>
                                            @if (isset($sistema))
                                                <option value="{{ $sistema->id }}" selected>{{ $sistema->nome_sistema }}</option>
                                            @endif
                                            @foreach ($sistemas as $sist)
                                                <option value="{{ $sist->id }}">{{ $sist->nome_sistema }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label>Processador</label>
                                        <input type="text" name="processador">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="local">Local</label>
                                        <select class="form-control" type="text" id="local" name="local" onchange="updateInputValue(this)">
                                            <option value="" class="placeholder-option">Selecione o Local</option>
                                            @if (isset($local))
                                                <option value="{{ $local->id }}" selected>{{ $local->nome_local }}</option>
                                            @endif
                                            @foreach ($locals as $loc)
                                                <option value="{{ $loc->id }}">{{ $loc->nome_local }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="estado">Estado</label>
                                        <select class="form-control" type="text" id="estado" name="estado" onchange="updateInputValue(this)">
                                            <option value="" class="placeholder-option">Selecione o Estado</option>
                                            @if (isset($estado))
                                                <option value="{{ $estado->id }}" selected>{{ $estado->nome_estado }}</option>
                                            @endif
                                            @foreach ($estados as $estad)
                                                <option value="{{ $estad->id }}">{{ $estad->nome_estado }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Projecto</label>
                                        <input type="text" name="projecto">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label> Atribuido á</label>
                                        <input type="text" name="atribuido">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label> Ano de aquisição</label>
                                        <input type="text" name="ano">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary me-2">Salvar</button>
                                        <a href="{{url('view_maquina')}}" class="btn btn-secondary">Cancelar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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


    <script>
        document.getElementById('myForm').addEventListener('submit', async (event) => {
            event.preventDefault(); // Prevent default form submission

            const Swal = await Swal.fire({
                title: 'Confirmar Salvo',
                text: "Deseja realmente salvar os dados?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, Salvar!',
                cancelButtonText: 'Não, Cancelar'
            });

            if (Swal.isConfirmed) {
                // Form was confirmed, proceed with submission
                document.getElementById('myForm').submit();

                // After submission, redirect to view_maquina page
                setTimeout(() => {
                    window.location.href = "{{url('view_maquina')}}";
                }, 1000); // Add a small delay to allow time for submission
            }
        });
    </script>

</body>

</html>