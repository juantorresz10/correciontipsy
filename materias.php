<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Portal Academico - TIPSY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <link href="./css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <div class="app-header__content">
                <div class="title-tipsy">TIPSY</div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="/assets/images/avatars/default.png" alt="" id="avatar">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a href="cuenta.html" class="dropdown-item">Cuenta</a>
                                            <button type="button" tabindex="0" class="dropdown-item">Cerrar sesión</button>                                     
                                        </div>
                                    </div>             
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info p-0 ">
                                    <div class="widget-heading widget-content-wrapper" id="name_surname">Juan Sebastian Larrotta</div>
                                    <div class="widget-subheading widget-content-wrapper">
                                        <div class="widget-content-left">DNI: &nbsp;</div>
                                        <div class="widget-content-left" id="dni">1001316646</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>        
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Alumno</li>
                            <li><a href="home.html"><i class="metismenu-icon pe-7s-home"></i>Home</a></li>
                            <li><a href="materias.html" class="mm-active"><i class="metismenu-icon pe-7s-albums"></i>Materias</a></li>
                            <li><a href="examenes.html"><i class="metismenu-icon pe-7s-note"></i>Examenes</a></li>
                            <li><a href="calificaciones.html"><i class="metismenu-icon pe-7s-check"></i>Calificaciones</a></li>
                            <li><a href="calendario.html"><i class="metismenu-icon pe-7s-date"></i>Calendario</a></li>
                            <li><a href="notificaciones.html"><i class="metismenu-icon pe-7s-bell"></i>Notificaciones</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-albums icon-gradient bg-mean-fruit"></i>
                                </div>
                                <div>Materias
                                    <div class="page-title-subheading">Aquí podrás ver el estado de tu plan académico</div>
                                </div>
                            </div>
                        </div>
                    </div>          
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Plan académico - INGENIERIA DE MULTIMEDIA</div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Materia</th>
                                                <th class="text-center">Calificación</th>
                                                <th class="text-center">Fecha de final</th>
                                                <th class="text-center">Estado</th>
                                            </tr>
                                            <tr>
                                                <th class=" bg-secondary text-white" > 1° AÑO</th>
                                                <th class="text-center bg-secondary" ></th>
                                                <th class="text-center bg-secondary" ></th>
                                                <th class="text-center bg-secondary" ></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">METODOS NUMERICOS</td>
                                                <td class="text-center">8.0</td>
                                                <td class="text-center">14-03-2024</td>
                                                <td class="text-center">
                                                    <div class="badge badge-success">Aprobado</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">INGENIERIA DE SOFTWARE</td>
                                                <td class="text-center">9.5</td>
                                                <td class="text-center">14-03-2024</td>
                                                <td class="text-center">
                                                    <div class="badge badge-success">Aprobado</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">MODELADO 3D</td>
                                                <td class="text-center">6.5</td>
                                                <td class="text-center">14-03-2024 </td>
                                                <td class="text-center">
                                                    <div class="badge badge-success">Aprobado</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">DISEÑO 1</td>
                                                <td class="text-center">2.0</td>
                                                <td class="text-center">14-03-2024</td>
                                                <td class="text-center">
                                                    <div class="badge badge-danger">Desaprobado</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <thead>
                                            <tr>
                                                <th class="text-left bg-secondary text-white" > 2° AÑO</th>
                                                <th class="text-center bg-secondary" ></th>
                                                <th class="text-center bg-secondary" ></th>
                                                <th class="text-center bg-secondary" ></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">METODOS NUMERICOS 2</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">
                                                    <div class="badge badge-info">En curso</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">INGENIERIA DE SOFTWARE 2</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">
                                                    <div class="badge badge-info">En curso</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">MODELADO 3D 2</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">
                                                    <div class="badge badge-info">En curso</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">DISEÑO 2 </td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">
                                                    <div class="badge badge-info">En curso</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <thead>
                                            <tr>
                                                <th class="text-left bg-secondary text-white" > 3° AÑO</th>
                                                <th class="text-center bg-secondary" ></th>
                                                <th class="text-center bg-secondary" ></th>
                                                <th class="text-center bg-secondary" ></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">METODOS NUMERICOS 3</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">
                                                    <div class="badge badge-secondary">No cursado</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">INGENIERIA DE SOFTWARE 3</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">
                                                    <div class="badge badge-secondary">No cursado</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">MODELADO 3D 3</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">
                                                    <div class="badge badge-secondary">No cursado</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">DISEÑO 3</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">
                                                    <div class="badge badge-secondary">No cursado</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
