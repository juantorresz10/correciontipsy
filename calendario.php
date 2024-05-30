<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Portal Academico - TIPSY</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="msapplication-tap-highlight" content="no">

        <link href="./css/styles.css" rel="stylesheet"></head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <div class="app-header header-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
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
                                                <a type="button" tabindex="0" href="cuenta.html" class="dropdown-item">Cuenta</a>
                                                <button type="button" tabindex="0" class="dropdown-item">Cerrar sesion</button>                                     
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-left  ml-3 header-user-info p-0 ">
                                        <div class="widget-heading widget-content-wrapper" id="name_surname">
                                            Juan Sebastian Larrotta
                                        </div>
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
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
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
                            <ul class="vertical-nav-menu" id="menu">
                                <li class="app-sidebar__heading">Alumno</li>
                                <li>
                                    <a href="home.html" >
                                        <i class="metismenu-icon pe-7s-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="materias.html">
                                        <i class="metismenu-icon pe-7s-albums">
                                        </i>Materias
                                    </a>
                                </li>
                                <li>
                                    <a href="examenes.html">
                                        <i class="metismenu-icon pe-7s-note">
                                        </i>Examenes
                                    </a>
                                </li>
                                <li>
                                    <a href="calificaciones.html">
                                        <i class="metismenu-icon pe-7s-check">
                                        </i>Calificaciones
                                    </a>
                                </li>
                                <li>
                                    <a href="calendario.html"  class="mm-active">
                                        <i class="metismenu-icon pe-7s-date">
                                        </i>Calendario
                                    </a>
                                </li>
                                <li>
                                    <a href="notificaciones.html">
                                        <i class="metismenu-icon pe-7s-bell">
                                        </i>Notificaciones
                                    </a>
                                </li>

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
                                        <i class="pe-7s-date icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Calendario
                                        <div class="page-title-subheading">Aqui podras ver el calendario academico con las fechas de examenes, entrega de trabajos y fechas relevantes
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          



                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header font-size-xlg ">Marzo 15 2024
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="btn btn-success">Anterior</button>
                                                &nbsp;
                                                <button class="btn btn-success">Proximo</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless ">
                                            <thead>
                                                <tr class="text-left bg-verdi">
                                                    <th class="text-leftt">Marzo 14, 2024</th>
                                                    <th class="text-leftt"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">10:00 hs</td>
                                                    <td class="text-left">Examen Final METODOS NUMERICOS</td>

                                                </tr>
                                                <tr>
                                                    <td class="text-left">11:00 hs</td>
                                                    <td class="text-left">Entrega AP1 INGENIERIA DE SOFTWARE</td>

                                                </tr>
                                                <tr>
                                                    <td class="text-left">12:00 hs</td>
                                                    <td class="text-left">DISEÑO 1</td>

                                                </tr>
                                            </tbody>

                                            <thead>
                                                <tr class="text-left bg-verdi">
                                                    <th class="text-leftt">Marzo 14, 2024</th>
                                                    <th class="text-leftt"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">10:00 hs</td>
                                                    <td class="text-left">METODOS NUMERICOS</td>

                                                </tr>
                                                <tr>
                                                    <td class="text-left">11:00 hs</td>
                                                    <td class="text-left">DISEÑO 1</td>

                                                </tr>
                                            </tbody>

                                            <thead>
                                                <tr class="text-left bg-verdi">
                                                    <th class="text-leftt">Marzo 14, 2024</th>
                                                    <th class="text-leftt"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">10:00 hs</td>
                                                    <td class="text-left">METODOS NUMERICOS</td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    </html>
