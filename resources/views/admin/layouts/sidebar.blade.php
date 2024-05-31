<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Master Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    @if(Auth::user()->role == 'admin')
                                    <a class="nav-link" href="{{url('admin/jenis_produk')}}">Jenis Produk</a>
                                    @endif
                                    <a class="nav-link" href="{{route('produk.index')}}">Produk</a>
                                    @if(Auth::user()->role == 'admin')
                                    <a class="nav-link" href="{{url('admin/kartu')}}">Kartu</a>
                                    @endif
                                    <a class="nav-link" href="{{route('pelanggan.index')}}">Pelanggan</a>
                                </nav>
                            </div>
                            @if(Auth::user()->role == 'admin')
                            <a class="nav-link" href="{{url('admin/user')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Management User
                            </a>
                            @endif
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>