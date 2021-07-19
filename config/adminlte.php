<?php
use SideBars\NivelacionSideBars;
use SideBars\MFormacionSidebars;
use SideBars\ActividadExtraCurricularBar;
use SideBars\EnseñanzaApSideBars;
use SideBars\SeguimientoEstudianteBars;
use SideBars\SeguimientoEgresado;



$variable = 0;
if (!empty($_GET['variable'])) {
    $variable = $_GET['variable'];
}

if ($variable == 1) { //CARGAR MENU DASHBOARD FORMACION
    $mMF = new FormacionSideBars();
    return $mMF->menu();
}

if ($variable == 2) { //MENU PARA FORMACION/NIVELACION
    $mN = new MenuNivelacionSideBars();
    return $mN->menu();
}
if ($variable == 3) { //MENU PARA FORMACION/EnseñanazaAprendizaje
    $mN = new MenuEnseñanzaApSideBars();
    return $mN->menu();
}

if ($variable == 4) { //MENU PARA VENTANA PRINCIPAL
    $mN = new MenuEnseñanzaApSideBars();
    return $mN->menu();
}

if ($variable == 5) { //MENU PARA FORMACION/SEGUIMIENTO-ESTUDIANTE
    $mN = new MenuSeguimientoEstudianteBar();
    return $mN->menu();
}

if ($variable == 6) { //MENU PARA FORMACION/MOBILIDAD-ACADEMICA
    $mN = new MenuMovilidadAcademicaBar();
    return $mN->menu();
}

if ($variable == 7) { //MENU PARA FORMACION/ACTIVIDAD-EXTRACURRICULAR
    $mN = new MenuActividadExtraCurricularBar();
    return $mN->menu();
}

if ($variable == 8) { //MENU PARA FORMACION/SEGUIMIENTO-EGRESADO
    $mN = new MenuSeguimientoEgresadoBar();
    return $mN->menu();
}

if ($variable == 9) { //MENU PARA DIRECTOR/FORMACIÓN-PRINCIPAL
    $mN = new FormacionDirectorPrincipal();
    return $mN->menu();
}

if ($variable == 10) { //MENU PARA DIRECTOR/FORMACIÓN-NIVELACION
    $mN = new FormacionDirector();
    return $mN->menu();
}

if ($variable == 11) { //MENU PARA DIRECTOR/FORMACIÓN-ENSEÑANZA-APRENDIZAJE
    $mN = new EADirector();
    return $mN->menu();
}

if ($variable == 12) { //MENU PARA DIRECTOR/FORMACIÓN-SEGUIMIENTO-ESTUDIANTE
    $mN = new SeguimientoEstudianteDirector();
    return $mN->menu();
}

if ($variable == 13) { //MENU PARA DIRECTOR/FORMACIÓN-ACTIVIDADES-EXTRACURRICULARES
    $mN = new ActividadesExtracurricularesDirector();
    return $mN->menu();
}

if ($variable == 14) { //MENU PARA DIRECTOR/FORMACIÓN-SEGUIMIENTO-EGRESADO
    $mN = new SeguimientoEgresadoDirector();
    return $mN->menu();
}
//DECANO
if ($variable == 15) { //MENU PARA DECANO/FORMACIÓN-PRINCIPAL
    $mN = new FormacionDecanoPrincipal();
    return $mN->menu();
}
if ($variable == 16) { //MENU PARA DECANO/FORMACIÓN-SEGUIMIENTO-EGRESADO
    $mN = new SeguimientoEgresadoDecano();
    return $mN->menu();
}
//REGISTROS ACADEMICOS
if ($variable == 17) { //MENU PARA REGISTROS ACADEMICOS/FORMACIÓN-PRINCIPAL
    $mN = new FormacionRegistrosAcademicosPrin();
    return $mN->menu();
}

if ($variable == 18) { //MENU PARA REGISTROS ACADEMICOS/EseñanzaAprendizaje
    $mN = new EARegistrosAcademicos();
    return $mN->menu();
}

if ($variable == 19) { //MENU PARA REGISTROS ACADEMICOS/SeguimientoEgresado
    $mN = new SeguimientoEgresadoRegAc();
    return $mN->menu();
}
//ADMISION
if ($variable == 20) { //MENU PARA ADMISION/FORMACION-PRINCIPAL
    $mN = new FormacionAdmision();
    return $mN->menu();
} 
if ($variable == 21) { //MENU PARA ADMISION/Nivelacion-PRINCIPAL
    $mN = new NivelacionAdmision();
    return $mN->menu();
} 
//DOCENTE
if ($variable == 22) { //MENU PARA DOCENTE/FORMACION-PRINCIPAL
    $mN = new DocentePrincipal();
    return $mN->menu();
} 

if ($variable == 23) { //MENU PARA DOCENTE/EnseñanzaAprendizaje-PRINCIPAL
    $mN = new EADocente();
    return $mN->menu();
} 
//DOCENTE-TUTOR
if ($variable == 24) { //MENU PARA DOCENTETUTOR
    $mN = new DocenteTutorPrincipal();   
    return $mN->menu();
} 

if ($variable == 25) { //MENU PARA DOCENTETUTOR/Seguimiento-Estudiante
    $mN = new SEsDocenteTutor();   
    return $mN->menu();
} 
//PSICOPEDAGOGIA
if ($variable == 26) { //MENU PARA PSICOPEDAGOGIA/
    $mN = new PsicopedagogiaPrincipal();   
    return $mN->menu();
} 

if ($variable == 27) { //MENU PARA PSICOPEDAGOGIA/Seguimiento-Estudiante
    $mN = new SEPsicopedagogia();   
    return $mN->menu();
} 
//Relaciones Internacionales
if ($variable == 28) { //MENU PARA Relaciones Internacionales
    $mN = new RIPrincipal();   
    return $mN->menu();
} 

if ($variable == 29) { //RelacionesInternacionales/MovilidadAcademica
    $mN = new RelInterMovlidadAcademica();   
    return $mN->menu();
} 

//Unidad de pedagogia
if ($variable == 30) { //Unidad de pedagogia
    $mN = new UnidadPedagogiaPrin();   
    return $mN->menu();
} 

if ($variable == 31) { //Unidad de pedagogia//ActividadExtracurricular
    $mN = new AExUnidadPedagogia();   
    return $mN->menu();
} 
//ATT Seguimiento Egresado
if ($variable == 32) { //Principal AttSeguimientoEgresado 
    $mN = new PrinAttSE();   
    return $mN->menu();
} 

if ($variable == 33) { //Att-SeguimientoEgresado
    $mN = new AttSeguimientoEgresado();
    return $mN->menu();
} 

if ($variable == 0) { //CARGAR MENU DASHBOARD FORMACION
    return [

        /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

        'title' => '',
        'title_prefix' => 'DashBoard | ',
        'title_postfix' => '',

        /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

        'use_ico_only' => true,
        'use_full_favicon' => false,

        /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

        'logo' => '',
        'logo_img' => 'img/logo.png',
        'logo_img_class' => 'w-100',
        'logo_img_xl' => null,
        'logo_img_xl_class' => 'brand-image-xs',
        'logo_img_alt' => 'SGC',

        /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

        'usermenu_enabled' => true,
        'usermenu_header' => true,
        'usermenu_header_class' => 'bg-primary',
        'usermenu_image' => true,
        'usermenu_desc' => true,
        'usermenu_profile_url' => false,

        /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

        'layout_topnav' => null,
        'layout_boxed' => null,
        'layout_fixed_sidebar' => true,
        'layout_fixed_navbar' => null,
        'layout_fixed_footer' => null,

        /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

        'classes_auth_card' => 'card-outline card-primary',
        'classes_auth_header' => '',
        'classes_auth_body' => '',
        'classes_auth_footer' => '',
        'classes_auth_icon' => '',
        'classes_auth_btn' => 'btn-flat btn-primary',

        /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

        'classes_body' => '',
        'classes_brand' => '',
        'classes_brand_text' => '',
        'classes_content_wrapper' => '',
        'classes_content_header' => '', //bg primary
        'classes_content' => '', //bg danger
        'classes_sidebar' => 'sidebar-dark-primary elevation-4', //ligth
        'classes_sidebar_nav' => '',
        'classes_topnav' => 'navbar-white navbar-light',
        'classes_topnav_nav' => 'navbar-expand',
        'classes_topnav_container' => 'container',

        /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

        'sidebar_mini' => true,
        'sidebar_collapse' => false,
        'sidebar_collapse_auto_size' => false,
        'sidebar_collapse_remember' => false,
        'sidebar_collapse_remember_no_transition' => true,
        'sidebar_scrollbar_theme' => 'os-theme-light',
        'sidebar_scrollbar_auto_hide' => 'l',
        'sidebar_nav_accordion' => true,
        'sidebar_nav_animation_speed' => 300,

        /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

        'right_sidebar' => false,
        'right_sidebar_icon' => 'fas fa-cogs',
        'right_sidebar_theme' => 'dark',
        'right_sidebar_slide' => true,
        'right_sidebar_push' => true,
        'right_sidebar_scrollbar_theme' => 'os-theme-light',
        'right_sidebar_scrollbar_auto_hide' => 'l',

        /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

        'use_route_url' => false,
        'dashboard_url' => 'dashboard',
        'logout_url' => 'logout',
        'login_url' => 'login',
        'register_url' => 'register',
        'password_reset_url' => 'password/reset',
        'password_email_url' => 'password/email',
        'profile_url' => false,

        /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTProveekorer-Configuration
    |
    */

        'enabled_laravel_asset' => true,
        'laravel_mix_css_path' => 'css/bar.css',
        'laravel_mix_js_path' => 'js/app.js',

        /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

        'menu' => [
            [
                'text' => 'search',
                'search' => false,
                'topnav' => false,
            ],

            [
                'text' => 'blog',
                'url'  => 'admin/blog',
                'can'  => 'manage-blog',
            ],

            /*
        [
            'text' => 'dashboard',
            'route' => 'dashboard',
        ],
        */
            /*[
            'text'        => 'pages',
            'url'         => 'admin/pages',
            'icon'        => 'far fa-fw fa-file',
            'label'       => 4,
            'label_color' => 'success',
            'can'    => 'Decano'
        ],
        ['header' => 'account_settings',
        'can'    => 'Decano'],
        [
            'text' => 'profile',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
            'can'    => 'Decano'
        ],
        [
            'text' => 'change_password',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
            'can'    => 'Decano'
        ],
        [
            'text'    => 'multilevel',
            'icon'    => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text'    => 'level_one',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'level_two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'level_two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
            ],
            'can'    => 'Decano'
        ],
        ['header' => 'labels',        
        'can'    => 'Decano'],
        'header' => 'labels',]*//*

            [
                'text'       => 'Reportes',
                'icon'       => 'fas fa-file-contract',
                'url'        => '/dashboard',
                'can'        => 'dashboard'
            ],
            [
                'text'       => 'Guia Rapida',
                'icon'       => 'fas fa-book-open',
                'url'        => '/dashboard/GuiaRapida',
                'can'        => 'dashboard'

            ],
            [
                'text'       => 'Grupos de Interes',
                'icon'       => 'fas fa-users',
                'url'        => '/dashboard/GruposInteres',
                'can'        => 'dashboard'
            ],
            [
                'text'       => 'Diagramas de Flujo',
                'icon'       => 'fas fa-chart-bar',
                'url'        => '/dashboard/Procesos',
                'can'        => 'dashboard'
            ],
            [
                'text'       => 'Normativa',
                'icon'       => 'fas fa-balance-scale',
                'url'        => '#',
                'can'        => 'dashboard'
            ],
            [
                'text'       => 'Documentacion',
                'icon'       => 'fas fa-file-alt',
                'url'        => '/dashboard/Documentacion',
                'can'        => 'dashboard'
            ],*/
            [
                'text'       => 'Accesos Directos',
                'icon'       => 'fas fa-mouse-pointer',
                'url'        => '/dashboard',
                'can'        => 'dashboardFormacion'
            ],
            [
                'text'       => 'Gestor de Normas',
                'icon'       => 'fas fa-book',
                'url'        => '/dashboard/gestionNorma',
                'can'        => 'dashboardFormacion'
            ],
            [
                'text'       => 'Gestionar Usuarios',
                'icon'       => 'fas fa-users',
                'url'        => 'Usuarios',
                'can'        => 'dashboardFormacion'
            ],
        ],

        /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

        'filters' => [
            JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
            JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
            JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
            JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
            JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
            JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
            JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
        ],

        /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

        'plugins' => [
            'Datatables' => [
                'active' => false,
                'files' => [
                    [
                        'type' => 'js',
                        'asset' => false,
                        'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                    ],
                    [
                        'type' => 'js',
                        'asset' => false,
                        'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                    ],
                    [
                        'type' => 'css',
                        'asset' => false,
                        'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                    ],
                ],
            ],
            'Select2' => [
                'active' => false,
                'files' => [
                    [
                        'type' => 'js',
                        'asset' => false,
                        'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                    ],
                    [
                        'type' => 'css',
                        'asset' => false,
                        'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                    ],
                ],
            ],
            'Chartjs' => [
                'active' => false,
                'files' => [
                    [
                        'type' => 'js',
                        'asset' => false,
                        'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                    ],
                ],
            ],
            'Sweetalert2' => [
                'active' => false,
                'files' => [
                    [
                        'type' => 'js',
                        'asset' => false,
                        'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                    ],
                ],
            ],
            'Pace' => [
                'active' => false,
                'files' => [
                    [
                        'type' => 'css',
                        'asset' => false,
                        'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                    ],
                    [
                        'type' => 'js',
                        'asset' => false,
                        'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                    ],
                ],
            ],
        ],

        /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    */

        'livewire' => false,


    ];
}
