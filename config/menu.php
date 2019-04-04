<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Spatie\Menu\Html;
use Spatie\Menu\Laravel\Link;
use Spatie\Menu\Laravel\Menu;

Menu::macro('ConfiguracionsSystem', function () {
    return Menu::new()->addClass('nav-main-submenu')
        ->prepend('<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-cog"></i>
                                <span class="nav-main-link-name">'.trans('home.menSystem').'</span>
                            </a>')
        ->add(
            Link::to('/empresa', '<i class="nav-main-link-icon far fa-building"></i>
                                <span class="nav-main-link-name">'.trans('home.empresa').'</span>
                                ')->addClass('nav-main-link')
                ->addParentClass('nav-main-item')
        )
        ->addIf(Str::contains(Auth::getUser()->rol, ['system']),
            Link::to('/config', '<i class="nav-main-link-icon fa cog"></i>
                                <span class="nav-main-link-name">'.trans('home.men13').'</span>
                                ')->addClass('nav-main-link')
                ->addParentClass('nav-main-item')
        )
        ->addIf(Str::contains(Auth::getUser()->rol, ['system']),
            Link::to('/oautho2', '<i class="nav-main-link-icon fa fa-key"></i>
                                <span class="nav-main-link-name">'.trans('OAuth2').'</span>
                                ')->addClass('nav-main-link')
                ->addParentClass('nav-main-item')
        );
});

Menu::macro('sidebar_new', function () {
    return Menu::new()->addClass('nav-main')
        ->setActiveFromRequest()
        ->add(Link::to('/home', '<i class="nav-main-link-icon fa fa-tachometer-alt"></i>
                                <span class="nav-main-link-name">'.trans('home.men1').'</span>
                                ')->addClass('nav-main-link')
            ->addParentClass('nav-main-item')
        )
        ->add(Link::to('/equipos', '<i class="nav-main-link-icon fa fa-laptop"></i>
                                <span class="nav-main-link-name">'.trans('home.men2').'</span>
                                ')->addClass('nav-main-link')
            ->addParentClass('nav-main-item')

        )
        ->add(Link::to('/custodio', '<i class="nav-main-link-icon fa fa-users"></i>
                                <span class="nav-main-link-name">'.trans('home.men3').'</span>
                                ')->addClass('nav-main-link')
            ->addParentClass('nav-main-item')
        )
        ->add(Link::to('/proyecto', '<i class="nav-main-link-icon fa fa-project-diagram"></i>
                                <span class="nav-main-link-name">'.trans('Proyectos').'</span>
                                ')->addClass('nav-main-link')
            ->addParentClass('nav-main-item')
        )
        ->addIf(Str::contains(Auth::getUser()->rol, ['planta_fisica', 'system']),
            Html::raw('Planta Fisica')->addParentClass('nav-main-heading'))
        ->addIf(Str::contains(Auth::getUser()->rol, ['planta_fisica', 'system']),
            Link::to('/ubicacion', '<i class="nav-main-link-icon fa fa-map-marked-alt"></i>
                                <span class="nav-main-link-name">'.trans('Ubicaciones').'</span>
                                ')->addClass('nav-main-link')
            ->addParentClass('nav-main-item')
        )
        ->addIf(Str::contains(Auth::getUser()->rol, ['planta_fisica', 'system']),
            Link::to('/puesto', '<i class="nav-main-link-icon fa fa-suitcase"></i>
                                <span class="nav-main-link-name">'.trans('Puestos').'</span>
                                ')->addClass('nav-main-link')
            ->addParentClass('nav-main-item')
        )
        ->addIf(Str::contains(Auth::getUser()->rol, ['planta_fisica', 'system']),
            Link::to('/informes', '<i class="nav-main-link-icon fa fa-tasks"></i>
                                <span class="nav-main-link-name">'.trans('Informes').'</span>
                                ')->addClass('nav-main-link')
            ->addParentClass('nav-main-item')
        )
        ->add(Menu::reportes()
            ->addParentClass('nav-main-item'))
        ->add(Menu::fullsubmenuConfiguracions()
            ->addParentClass('nav-main-item'))
        ->add(Menu::ConfiguracionsSystem()
            ->addParentClass('nav-main-item'));
});

Menu::macro('reportes', function () {
    return Menu::new()->addClass('nav-main-submenu')
        ->prepend('<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-tachometer-alt"></i>
                                <span class="nav-main-link-name">Reportes</span>
                            </a>')
        ->addIf(Str::contains(Auth::getUser()->rol, ['system']),
            Link::to('/reporte1', '<i class="nav-main-link-icon fa fa-chart-bar"></i>
                                <span class="nav-main-link-name">'.trans('home.menrep1').'</span>
                                ')->addClass('nav-main-link')
                ->addParentClass('nav-main-item')
        )
        ->addIf(Str::contains(Auth::getUser()->rol, ['system']),
            Link::to('/reporteEstaciones/1', '<i class="nav-main-link-icon si si-bar-chart"></i>
                                <span class="nav-main-link-name">'.trans('home.menrep2').'</span>
                                ')->addClass('nav-main-link')
                ->addParentClass('nav-main-item')
        );
});

Menu::macro('fullsubmenuConfiguracions', function () {
    return Menu::new()->addClass('nav-main-submenu')
        ->prepend('<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-cogs"></i>
                                <span class="nav-main-link-name">'.trans('home.men13').'</span>
                            </a>')
        ->add(
            Link::to('/usuario', '<i class="nav-main-link-icon fa fa-user-cog"></i>
                                <span class="nav-main-link-name">'.trans('home.men7').'</span>
                                ')->addClass('nav-main-link')
                ->addParentClass('nav-main-item')
        )
        ->addIf(Str::contains(Auth::getUser()->rol, ['system']),
            Link::to('/garantiasHP', '<i class="nav-main-link-icon fa fa-scroll"></i>
                                <span class="nav-main-link-name">'.trans('home.garantiasHP').'</span>
                                ')->addClass('nav-main-link')
                ->addParentClass('nav-main-item')
        )
        ->add(
            Link::to('/opciones_check', '<i class="nav-main-link-icon fa fa-check-double"></i>
                                <span class="nav-main-link-name">'.trans('home.men8').'</span>
                                ')->addClass('nav-main-link')
                ->addParentClass('nav-main-item')
        )
        ->add(
            Link::to('/checklist', '<i class="nav-main-link-icon fa fa-clipboard-list"></i>
                                <span class="nav-main-link-name">'.trans('home.men4').'</span>
                                ')->addClass('nav-main-link')
                ->addParentClass('nav-main-item')
        )
        ->addIf(Str::contains(Auth::getUser()->rol, ['system']),
            Link::to('/checklist_opcionescheck', '<i class="nav-main-link-icon fa fa-list-alt"></i>
                                <span class="nav-main-link-name">'.trans('home.men5').'</span>
                                ')->addClass('nav-main-link')
                ->addParentClass('nav-main-item')
        )
        ->add(
            Link::to('/areas', '<i class="nav-main-link-icon fa fa-map-signs"></i>
                                <span class="nav-main-link-name">'.trans('home.men9').'</span>
                                ')->addClass('nav-main-link')
                ->addParentClass('nav-main-item')
        )
        ->add(
            Link::to('/modelo', '<i class="nav-main-link-icon far fa-registered"></i>
                                <span class="nav-main-link-name">'.trans('home.men10').'</span>
                                ')->addClass('nav-main-link')
                ->addParentClass('nav-main-item')
        )
        ->add(
            Link::to('/orden', '<i class="nav-main-link-icon fa fa-cash-register"></i>
                                <span class="nav-main-link-name">'.trans('home.men11').'</span>
                                ')->addClass('nav-main-link')
                ->addParentClass('nav-main-item')
        )
        ->add(
            Link::to('/estaciones', '<i class="nav-main-link-icon fa fa-map-marked-alt"></i>
                                <span class="nav-main-link-name">'.trans('home.men12').'</span>
                                ')->addClass('nav-main-link')
                ->addParentClass('nav-main-item')
        );
});
