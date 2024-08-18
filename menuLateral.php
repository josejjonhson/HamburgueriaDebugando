 <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-hamburger"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hamburgueria 
                <br>debugando
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Ações
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseUsuario"
                    aria-expanded="true" aria-controls="collapseUsuario">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Usuários</span>
                </a>
                <div id="collapseUsuario" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="UsuarioAddEdit.php">Adicionar</a>
                        <a class="collapse-item" href="UsuarioList.php">Listar</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseCategoriaProduto"
                    aria-expanded="true" aria-controls="collapseCategoriaProduto">
                    <i class="fas fa-hamburger"></i>
                    <span>Categoria de Produtos</span>
                </a>
                <div id="collapseCategoriaProduto" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="CategoriaProdutoAddEdit.php">Adicionar</a>
                        <a class="collapse-item" href="CategoriaProdutoList.php">Listar</a>
                    </div>
                </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseEndereco"
                    aria-expanded="true" aria-controls="collapseEndereco">
                    <i class="fas fa-home"></i>
                    <span>Endereços</span>
                </a>
                <div id="collapseEndereco" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="EnderecoAddEdit.php">Adicionar</a>
                        <a class="collapse-item" href="EnderecoList.php">Listar</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseComanda"
                    aria-expanded="true" aria-controls="collapseComanda">
                   <i class="fas fa-receipt"></i>
                    <span>Comandas</span>
                </a>
                <div id="collapseComanda" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="ComandaAddEdit.php">Adicionar</a>
                        <a class="collapse-item" href="ComandaList.php">Listar</a>
                    </div>
                </div>
            </li>
  
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseProduto"
                    aria-expanded="true" aria-controls="collapseProduto">
                    <i class="fas fa-utensils"></i>
                    <span>Produto</span>
                </a>
                <div id="collapseProduto" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="ProdutoAddEdit.php">Adicionar</a>
                        <a class="collapse-item" href="ProdutoList.php">Listar</a>
                    </div>
                </div>
            </li>
           
            <hr class="sidebar-divider">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>