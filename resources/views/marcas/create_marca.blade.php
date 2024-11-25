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
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a href={{url('home')}}><img src="assets/img/icons/dashboard.svg" alt="img"><span>
                                    Dashboard</span> </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span>
                                    EQUIPAMENTOS</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{url('create_maquina')}}">Adicinar Equipamentos</a></li>
                                <li><a href="addproduct.html">Listar Equipamentos</a></li>
                                <li><a href="categorylist.html">Lista de Categorias</a></li>
                                <li><a href="addcategory.html">Adicionar Categoria</a></li>
                                <li><a href="subcategorylist.html">Lista de Subcategorias</a></li>
                                <li><a href="subaddcategory.html">Adicionar Subcategoria</a></li>
                                <li><a href="#">Lista de Marcas</a></li>
                                <li><a href="#">Adicionar Marca</a></li>
                                <li><a href="#">Importar Produtos</a></li>
                                <li><a href="#">Imprimir Código de Barras</a></li>
                            </ul>

                        </li>


                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="assets/img/icons/time.svg" alt="img"><span>
                                    RELATÓRIOS</span> <span class="menu-arrow"></span></a>
                            <!--<ul>
    <li><a href="purchaseorderreport.html">Relatório de Pedidos de Compra</a></li>
    <li><a href="inventoryreport.html">Relatório de Estoque</a></li>
    <li><a href="salesreport.html">Relatório de Vendas</a></li>
    <li><a href="invoicereport.html">Relatório de Faturas</a></li>
    <li><a href="purchasereport.html">Relatório de Compras</a></li>
    <li><a href="supplierreport.html">Relatório de Fornecedores</a></li>
    <li><a href="customerreport.html">Relatório de Clientes</a></li>
  </ul>-->
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="assets/img/icons/users1.svg" alt="img"><span>
                                    USUÁRIOS</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="#">Novo Usuário</a></li>
                                <li><a href="#">Lista de Usuários</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="assets/img/icons/settings.svg" alt="img"><span>
                                    CONFIGURAÇÕES</span> <span class="menu-arrow"></span></a>
                            <!--<ul>
    <li><a href="generalsettings.html">Configurações Gerais</a></li>
    <li><a href="emailsettings.html">Configurações de Email</a></li>
    <li><a href="grouppermissions.html">Permissões de Grupo</a></li>
  </ul>-->
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>ADICIONAR MARCA</h4>
                <h6>CRIAR NOVA MARCA</h6>
            </div>
        </div>

        <form action="{{url('add_marca')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label>Nome da marca do equipamento:</label>
                                <input type="text" name="nome_marca" id="nome_marca" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary me-2">Salvar</button>
                                <a href="{{url('list_marca')}}" class="btn btn-secondary">Cancelar</a>
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