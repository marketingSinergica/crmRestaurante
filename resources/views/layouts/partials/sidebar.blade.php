<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">CRM</span>
  </a>

  <div class="sidebar">
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                          Dashboard
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('admin.users.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-users"></i>
                      <p>
                          Usuarios
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('admin.proveedors.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-user-tie"></i>
                      <p>
                          Proveedores
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('admin.pedidos.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-project-diagram"></i>
                      <p>
                          Pedidos
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('admin.productos.index')}}" class="nav-link">
                      <i class="nav-icon fas fa-clipboard-list"></i <p>
                      Productos
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefautl(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-fw fa-sign-out-alt nav-icon"></i 
                    <p>
                        Cerrar Sesión
                    </p>
                </a>
            </li>
          </ul>
      </nav>
  </div>
</aside>