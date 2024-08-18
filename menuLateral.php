 <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-hamburger"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hamburgueria 
                <br>debugando
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
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

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->