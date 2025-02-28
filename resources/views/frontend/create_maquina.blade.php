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

                @if ($errors)

                @foreach ($errors->all() as $errors)
                
                <li>
                    {{$errors}}
                </li>
                @endforeach
                
                @endif
                <form action="{{ url('add_maquina') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Número da máquina</label>
                                        <input type="text" name="numero_da_maquina" id="numero_da_maquina">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="marca_id">Marca</label>
                                        <select class="form-control" id="marca_id" name="marca_id" onchange="updateInputValue(this)">
                                            <option value="" class="placeholder-option">Selecione a Marca</option>
                                            @if (isset($marca_id))
                                                <option value="{{ $marca_id->id }}" selected>{{ $marca_id->nome_marca }}</option>
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
                                        <input type="text" name="modelo" id="modelo">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Serial Number</label>
                                        <input type="text" name="serial_number" id="serial_number">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Carregador</label>
                                        <input type="text" name="carregador" id="carregador">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Disco</label>
                                        <input type="text" name="disco" id="disco">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Memória</label>
                                        <input type="text" name="memoria" id="memoria">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="sis_operacional_id">Sistema Operacional</label>
                                        <select class="form-control" type="text" id="sis_operacional_id" name="sis_operacional_id" onchange="updateInputValue(this)">
                                            <option value="" class="placeholder-option">Selecione o sistema</option>
                                            @if (isset($sis_operacional_id))
                                                <option value="{{ $sis_operacional_id->id }}" selected>{{ $sis_operacional_id->nome_sistema }}</option>
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
                                        <input type="text" name="processador" id="processador">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="local_id">Local</label>
                                        <select class="form-control" type="text" id="local_id" name="local_id" onchange="updateInputValue(this)">
                                            <option value="" class="placeholder-option">Selecione o Local</option>
                                            @if (isset($local_id))
                                                <option value="{{ $local_id->id }}" selected>{{ $local_id->nome_local }}</option>
                                            @endif
                                            @foreach ($locals as $loc)
                                                <option value="{{ $loc->id }}">{{ $loc->nome_local }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="estado_id">Estado</label>
                                        <select class="form-control" type="text" id="estado_id" name="estado_id" onchange="updateInputValue(this)">
                                            <option value="" class="placeholder-option">Selecione o Estado</option>
                                            @if (isset($estado_id))
                                                <option value="{{ $estado_id->id }}" selected>{{ $estado_id->nome_estado }}</option>
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
                                        <input type="text" name="projeto" id="projeto">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label> Atribuido á</label>
                                        <input type="text" name="atribuido_a" id="atribuido_a">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label> Ano de aquisição</label>
                                        <input type="date" name="ano_de_aquisicao" id="ano_de_aquisicao">
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

    <script src="assets/js/script.js">
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


        $(function(){
            // Initialize DataTable
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();

            if(month < 10)
                month = '0' + month.toString();

            if(day < 10)
                day = '0' + day.toString();
                
            var maxDate = year + '-' + month + '-' + day;
            $('#ano_de_aquisicao').attr('min', maxDate);
        });
    </script>

</body>

</html>