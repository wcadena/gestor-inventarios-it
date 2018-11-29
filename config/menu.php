<?php

use Spatie\Menu\Html;
use Spatie\Menu\Laravel\Link;
use Spatie\Menu\Laravel\Menu;

Menu::macro('fullsubmenuConfiguracions', function () {
    return Menu::new()->prepend('<a href="#"><i class="glyphicon glyphicon-wrench"></i> <span>'.trans('home.men13').'</span> <i class="fa fa-angle-left pull-right"></i></a>')
        ->addParentClass('treeview')
        ->addClass('treeview-menu')
        ->url('usuario', "<i class='glyphicon glyphicon-user'></i> <span>".trans('home.men7').'</span>')
        ->addIf(str_contains(Auth::getUser()->rol, ['system']), Link::toUrl('garantiasHP', "<i class='glyphicon glyphicon glyphicon-barcode'></i> <span>".trans('home.garantiasHP').'</span>')
        )
        ->url('opciones_check', "<i class='glyphicon glyphicon-check'></i> <span>".trans('home.men8').'</span>')
        ->url('checklist', "<i class='glyphicon glyphicon-check'></i> <span>".trans('home.men4').'</span>')
        ->addIf(str_contains(Auth::getUser()->rol, ['system']), Link::toUrl('checklist_opcionescheck', "<i class='glyphicon glyphicon-link'></i> <span>".trans('home.men5').'</span>')
        )
        ->url('areas', "<i class='glyphicon glyphicon-flag'></i> <span>".trans('home.men9').'</span>')
        ->url('modelo', "<i class='glyphicon glyphicon-copyright-mark'></i> <span>".trans('home.men10').'</span>')
        ->url('orden', "<i class='glyphicon glyphicon-shopping-cart'></i> <span>".trans('home.men11').'</span>')
        ->url('estaciones', "<i class='glyphicon glyphicon-plane'></i> <span>".trans('home.men12').'</span>')

        ->addIf(str_contains(Auth::getUser()->rol, ['system']),
            Menu::ConfiguracionsSystem()
        );
});

Menu::macro('ConfiguracionsSystem', function () {
    return Menu::new()->prepend('<a href="#"><i class="glyphicon glyphicon-wrench"></i> <span>'.trans('home.menSystem').'</span> <i class="fa fa-angle-left pull-right"></i></a>')
        ->addParentClass('treeview')
        ->addClass('treeview-menu')
        ->url('empresa', "<i class='glyphicon glyphicon-globe'></i> <span>".trans('home.empresa').'</span>')
        ->url('config', "<i class='glyphicon glyphicon-wrench'></i> <span>".trans('home.men13').'</span>')
        ->url('oautho2', "<i class='glyphicon glyphicon-print'></i> <span>".trans('OAuth2').'</span>');
});

Menu::macro('adminlteSubmenu', function ($submenuName) {
    return Menu::new()->prepend('<a href="#"><span> '.$submenuName.'</span> <i class="fa fa-angle-left pull-right"></i></a>')
        ->addParentClass('treeview')->addClass('treeview-menu');
});
Menu::macro('adminlteMenu', function () {
    return Menu::new()
        ->addClass('sidebar-menu');
});
Menu::macro('adminlteSeparator', function ($title) {
    return Html::raw($title)->addParentClass('header');
});

Menu::macro('adminlteDefaultMenu', function ($content) {
    return Html::raw('<i class="fa fa-link"></i><span>'.$content.'</span>')->html();
});

Menu::macro('sidebar', function () {
    return $menuPrincipl = Menu::adminlteMenu()
        ->add(Html::raw(trans('adminlte_lang::message.header'))->addParentClass('header'))
        ->url('home', "<i class='glyphicon glyphicon-home'></i> <span>".trans('home.men1').'</span>')
        ->url('equipos', "<i class='glyphicon glyphicon-print'></i> <span>".trans('home.men2').'</span>')
        ->url('custodio', "<i class='glyphicon glyphicon-user'></i> <span>".trans('home.men3').'</span>')
        ->url('proyecto', "<i class='glyphicon glyphicon-book'></i> <span>".trans('Proyectos').'</span>')
        ->addIf(str_contains(Auth::getUser()->rol, ['planta_fisica', 'system']), Link::toUrl('ubicacion', "<i class='glyphicon glyphicon-wrench'></i> <span>".trans('Ubicaciones').'</span>'))
        ->addIf(str_contains(Auth::getUser()->rol, ['planta_fisica', 'system']), Link::toUrl('puesto', "<i class='glyphicon glyphicon-pushpin'></i> <span>".trans('Puestos').'</span>'))
        ->addIf(str_contains(Auth::getUser()->rol, ['planta_fisica', 'system']), Link::toUrl('informes', "<i class='glyphicon glyphicon-eye-open'></i> <span>".trans('Informes').'</span>'))

        //->add(Menu::adminlteSeparator('Acacha Adminlte'))
        //adminlte_menu
        //->add(Menu::adminlteSeparator('SECONDARY MENU'))
        ->add(Menu::new()->prepend('<a href="#"><i class="fa fa-share"></i><span>Reportes</span> <i class="fa fa-angle-left pull-right"></i></a>')
            ->addParentClass('treeview')
            ->addClass('treeview-menu')
            ->url('reporte1', "<i class='glyphicon glyphicon-user'></i> <span>".trans('home.menrep1').'</span>')
            ->url('reporteEstaciones/1', "<i class='glyphicon glyphicon-check'></i> <span>".trans('home.menrep2').'</span>')
            /*->add(Menu::new()->prepend('<a href="#"><span>Reportes graficos</span> <i class="fa fa-angle-left pull-right"></i></a>')
                ->addParentClass('treeview')
                ->url('reporteEstaciones/1', "<i class='glyphicon glyphicon-check'></i> <span>".trans('home.menrep2')."</span>")
            )*/
        )
        ->add(
            Menu::fullsubmenuConfiguracions()
        )
        /*->add(
            Menu::adminlteSubmenu('Best menu')
                ->add(Link::to('/acacha', 'acacha'))
                ->add(Link::to('/profile', 'Profile'))
                ->url('http://www.google.com', 'Google')
        )*/
        ->setActiveFromRequest();
});
