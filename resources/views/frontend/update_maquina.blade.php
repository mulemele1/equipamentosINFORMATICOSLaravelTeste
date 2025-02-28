<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
                        <h4>EDITAR EQUIPAMENTOS</h4>
                        <h6>ACTUALIZAR EQUIPAMENTO</h6>
                    </div>
                </div>

                <form action="{{url('edit_maquina', $data->id)}}" method="Post" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-3 col-sm-6 col-12">

                                    <div class="form-group">
                                        <label>Número da máquina</label>
                                        <input type="text" name="numero" value="{{ $data->numero_da_maquina }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="marca_id">Marca</label>
                                        <select class="form-control" name="marca_id" id="marca_id" required>
                                            <option value="">Selecione uma Marca</option>
                                            @foreach($marcas as $marca)
                                                <option value="{{ $marca->id }}" {{ $data->marca_id == $marca->id ? 'selected' : '' }}>
                                                    {{ $marca->nome_marca }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Modelo</label>
                                        <input type="text" name="modelo" value="{{ $data->modelo }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Serial Number</label>
                                        <input type="text" name="serial" value="{{ $data->serial_number }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Carregador</label>
                                        <input type="text" name="carregador" value="{{ $data->carregador }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Disco</label>
                                        <input type="text" name="disco" value="{{ $data->disco }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Memória</label>
                                        <input type="text" name="memoria" value="{{ $data->memoria }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="sis_operacional_id">Sistema Operacional</label>
                                        <select class="form-control" name="sis_operacional_id" id="sis_operacional_id"
                                            required>
                                            <option value="">Selecione um Sistema Operacional</option>
                                            @foreach($sistemas as $sistema)
                                                <option value="{{ $sistema->id }}" {{ $data->sis_operacional_id == $sistema->id ? 'selected' : '' }}>
                                                    {{ $sistema->nome_sistema }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Processador</label>
                                        <input type="text" name="processador" value="{{ $data->processador }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="local_id">Local</label>
                                        <select class="form-control" name="local_id" id="local_id" required>
                                            <option value="">Selecione um Local</option>
                                            @foreach($locals as $local)
                                                <option value="{{ $local->id }}" {{ $data->local_id == $local->id ? 'selected' : '' }}>
                                                    {{ $local->nome_local }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">

                                        <label for="estado_id">Estado</label>
                                        <select class="form-control" name="estado_id" id="estado_id" required>
                                            <option value="">Selecione um Estado</option>
                                            @foreach ($estados as $estado)
                                                <option value="{{ $estado->id }}" {{ $data->estado_id == $estado->id ? 'selected' : '' }}>
                                                    {{ $estado->nome_estado }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Projecto</label>
                                        <input type="text" name="projecto" value="{{ $data->projeto }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label> Atribuido á</label>
                                        <input type="text" name="atribuido" value="{{ $data->atribuido_a }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="form-group">
                                        <label> Ano de aquisição</label>
                                        <input type="date" name="ano_de_aquisicao" id="ano_de_aquisicao">
                                    </div>

                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary me-2">Actualizar</button>
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