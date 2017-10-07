<?php require_once 'header.php' ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">Bienvenid@: Siris Vergara</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">Usuarios</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Listados</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="#" title="LISTADO DE ACUDIENTES">
                            <i class="fa fa-users"></i>
                            <span class="nav-link-text">Acudientes</span>
                        </a>
                    </li>
                    <li>
                       <a href="#" title="LISTADDO DE ESTUDIANTES">
                            <i class="fa fa-users"></i>
                            <span class="nav-link-text">Estudiantes</span>
                        </a>
                    </li>
                    <li>
                       <a href="#" title="LISTADO DE EXCUSAS">
                            <i class="fa fa-address-card"></i>
                            <span class="nav-link-text">Excusas</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Reporte</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                        <span class="d-lg-none">Alerts
                            <span class="badge badge-pill badge-warning">1 Nuevas</span>
                        </span>
                        <span class="new-indicator text-warning d-none d-lg-block">
                            <i class="fa fa-fw fa-circle"></i>
                            <span class="number">1</span>
                        </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">Nuevas alertas:</h6>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <span class="text-success">
                                <strong>
                                    <i class="fa fa-circle"></i>
                                    Dayana Carrascal Grado 11°
                                </strong>
                            </span>
                            <span class="small float-right text-muted">05:21 AM</span>
                                <div class="dropdown-message small">La presente tiene como fin informarles muy respetuosamente la inasistencia de mi  hijo(a)</div>
                        </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">Ver todas las alertas</a>
                </div>
            </li>
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar por..." required>
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>
                    Cerrar sesión
                </a>
            </li>
        </ul>
    </div>
</nav>
<?php require_once 'footer.php' ?>
