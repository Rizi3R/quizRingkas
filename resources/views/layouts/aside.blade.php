<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/jata negara.png') }}" alt="Jata Negara" class="brand-image img-circle elevation-" style="opacity: .8">
        <span class="brand-text font-weight-light">Sistem DKICT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Akuan DKICT
                        </p>
                    </a>
                </li>
                <li class="nav-header">Bidang-Bidang</li>
                <li class="nav-item">
                    <a href="{{ route('bidangs.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-file"></i>
                        <p>
                            Bidang
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('sub-bidangs.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-file-alt"></i>
                        <p>
                            Sub Bidang
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('sub-sub-bidangs.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-file-alt"></i>
                        <p>
                            Sub-Sub Bidang
                        </p>
                    </a>
                </li>
                <li class="nav-header">Akuan DKICT</li>
                <li class="nav-item">
                    <a href="{{ route('bidang.readbidang') }}" class="nav-link">
                        <i class="nav-icon fa fa-book-reader"></i>
                        <p>
                            Membaca DKICT
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('question') }}" class="nav-link">
                        <i class="nav-icon fa fa-clock"></i>
                        <p>
                            Menjawab Kuiz
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>