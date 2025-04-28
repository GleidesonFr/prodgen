<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ProdGen</title>
    <!--Link do dataTables-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <!-- Link do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link do FontAwesome para ícones -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ProdGen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item">
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#productModal" id="productBtn">
                            <i class="fas fa-box"></i> Criar Produto
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container do Dashboard -->
    <div class="container mt-5">
        <h2>Dashboard</h2>
        <div class="row">
            <!-- Tabela de Produtos -->
            <div class="col-md-12">
                <h5>Produtos</h5>
                <table class="table table-striped" id="table">
                    <thead>
                        <tr>
                            <th>Lote</th>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Preço</th>
                            <th>Fornecedor</th>
                            <th>Quantidade</th>
                            <th>Mínimo</th>
                            <th>Peso Líquido</th>
                            <th>Lucro</th>
                            <th>Data de Fabricação</th>
                            <th>Data de Validade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal para Criação e Edição de Produto -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Criar Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="productName" class="form-label">Nome do Produto</label>
                            <input type="text" class="form-control" id="productName" placeholder="Nome do Produto">
                        </div>
                        <div class="mb-3">
                            <label for="supplierName" class="form-label">Fornecedor</label>
                            <input type="text" class="form-control" id="supplierName" placeholder="Nome do Fornecedor">
                        </div>
                        <div class="mb-3">
                            <label for="productCategory" class="form-label">Categoria</label>
                            <select class="form-select" id="productCategory">
                                <option value="hortifruti">Hortifrúti</option>
                                <option value="frios">Frios</option>
                                <option value="laticinios">Laticinios</option>
                                <option value="mercearia">Mercearia</option>
                                <option value="higiene">Higiene</option>
                                <option value="limpeza">Limpeza</option>
                                <option value="padaria">Padaria</option>
                                <option value="enlatados">Enlatados</option>
                                <option value="cereais">Cereais</option>
                                <option value="bebidas">Bebidas</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="productPrice" class="form-label">Preço</label>
                            <input type="number" class="form-control" id="productPrice" placeholder="Preço">
                        </div>
                        <div class="mb-3">
                            <label for="productQuantity" class="form-label">Quantidade</label>
                            <input type="number" class="form-control" id="productQuantity" placeholder="Quantidade">
                        </div>
                        <div class="mb-3">
                            <label for="minimumStock" class="form-label">Estoque Mínimo</label>
                            <input type="number" class="form-control" id="minimumStock" placeholder="Estoque Mínimo">
                        </div>
                        <div class="mb-3">
                            <label for="netWeight" class="form-label">Peso Líquido</label>
                            <input type="number" class="form-control" id="netWeight" placeholder="Peso Líquido">
                        </div>
                        <div class="mb-3">
                            <label for="profitProduct" class="form-label">Lucro</label>
                            <input type="number" class="form-control" id="profitProduct" placeholder="Lucro">
                        </div>
                        <div class="mb-3">
                            <label for="manufacturingDate" class="form-label">Data de Fabricação</label>
                            <input type="date" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" class="form-control" id="manufacturingDate" placeholder="Data de Fabricação">
                        </div>
                        <div class="mb-3">
                            <label for="expitarionDate" class="form-label">Data de Validade</label>
                            <input type="date" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}"  class="form-control" id="expirationDate" placeholder="Data de Validade">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" id="addProductBtn" class="btn btn-primary">Salvar Produto</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Confirmar Exclusão -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirmar Exclusão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que deseja excluir este produto?</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" id="confirmDeleteBtn" class="btn btn-danger">Excluir</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>     
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            let table = $('#table').DataTable();
            let idForDelete = null;
            let idForUpdate = null;
            let productModal = new bootstrap.Modal(document.getElementById('productModal'));
            let deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));

            function fetchProducts(){
                $.ajax({
                   url: '/products/list/',
                   type: 'GET',
                   dataType: 'json',
                   success: function(data){
                        table.clear();
                        data.forEach(function(product){
                            table.row.add([
                                product.batch,
                                product.name,
                                product.category,
                                product.value,
                                product.supplier,
                                product.quantity,
                                product.minimun_stock,
                                product.net_weight,
                                product.profit,
                                product.manufacturing_date,
                                product.expiration_date,
                                `
                                <button class="btn btn-primary btn-edit" data-id="${product.batch}">Editar</button>
                                <button class="btn btn-danger btn-delete" data-id="${product.batch}">Excluir</button>
                                `
                            ]);

                            
                        });
                        table.draw();
                   } 
                });
            }

            fetchProducts();

            $('#productBtn').click(function(){
                idForUpdate = null;
                $('#productName').val('');
                $('#supplierName').val('');
                $('#productCategory').val('');
                $('#productQuantity').val('');
                $('#productPrice').val('');
                $('#minimumStock').val('');
                $('#netWeight').val('');
                $('#profitProduct').val('');
                $('#manufacturingDate').val('');
                $('#expirationDate').val('');
                $('#productModalLabel').text('Criar Produto');
                productModal.show();
            });

            $('#productModal').click('hidden.bs.modal', function(){
                $('#productModalLabel').text('Criar Produto');
            });

            $(document).on('click', '.btn-edit', function(e){
                let batch = $(this).data('id');
                $.ajax({
                    url: '/products/show/' + batch,
                    type: 'GET',
                    success: function(product){
                        idForUpdate = product.batch;
                        $('#productName').val(product.name);
                        $('#supplierName').val(product.supplier);
                        $('#productCategory').val(product.category);
                        $('#productQuantity').val(product.quantity);
                        $('#productPrice').val(product.value);
                        $('#minimumStock').val(product.minimun_stock);
                        $('#netWeight').val(product.net_weight);
                        $('#profitProduct').val(product.profit);
                        $('#manufacturingDate').val(product.manufacturing_date);
                        $('#expirationDate').val(product.expiration_date);
                        $('#productModalLabel').text('Editar Produto');
                        productModal.show();
                    }
                });
            });

            $('#addProductBtn').click(function(){
                let batch = idForUpdate;
                console.log(batch);
                $.ajax({
                    url: batch ? '/products/edit/' + batch : '/products/create/',
                    type: 'POST',
                    data: {
                        batch: batch,
                        name: $('#productName').val(),
                        supplier: $('#supplierName').val(),
                        category: $('#productCategory').val(),
                        quantity: $('#productQuantity').val(),
                        value: $('#productPrice').val(),
                        minimun_stock: $('#minimumStock').val(),
                        net_weight: $('#netWeight').val(),
                        profit: $('#profitProduct').val(),
                        manufacturing_date: $('#manufacturingDate').val(),
                        expiration_date: $('#expirationDate').val(),
                    },
                    success: function(){
                        productModal.hide();
                        fetchProducts();
                        $('#productModalLabel').text('Criar Produto');
                    }
                });
            });

            $(document).on('click', '.btn-delete', function(){
                idForDelete = $(this).data('id');
                deleteModal.show();
            });

            $('#confirmDeleteBtn').click(function(){
                $.ajax({
                   url: '/products/delete/' + idForDelete,
                   type: 'POST',
                   success: function(){
                        deleteModal.hide();
                        fetchProducts();
                   } 
                });
            });
        });
    </script>
</body>

</html>
