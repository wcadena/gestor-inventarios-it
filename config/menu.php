<?php
/*
use Spatie\Menu\Laravel\Menu;
use Spatie\Menu\Html;
use Spatie\Menu\Link;
//Menu::macro('fullsubmenuexample', function () {
//    return Menu::new()->prepend('<a href="#"><span> Multilevel PROVA </span> <i class="fa fa-angle-left pull-right"></i></a>')
//        ->addParentClass('treeview')
//        ->add(Link::to('/link1prova', 'Link1 prova'))->addClass('treeview-menu')
//        ->add(Link::to('/link2prova', 'Link2 prova'))->addClass('treeview-menu')
//        ->url('http://www.google.com', 'Google');
//});


Menu::macro('adminlteSubmenu', function ($submenuName) {
    return Menu::new()->prepend('<a href="#"><span> ' . $submenuName . '</span> <i class="fa fa-angle-left pull-right"></i></a>')
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
    return Html::raw('<i class="fa fa-link"></i><span>' . $content . '</span>')->html();
});

Menu::macro('sidebar', function () {
    return Menu::adminlteMenu()
     ->add(Html::raw('HEADER')->addParentClass('header'))
    ->url('home', "<i class='glyphicon glyphicon-home'></i> <span>".trans('home.men1')."</span>")

    ->url('equipos', "<i class='glyphicon glyphicon-print'></i> <span>".trans('home.men2')."</span>")
    ->url('custodio', "<i class='glyphicon glyphicon-user'></i> <span>".trans('home.men3')."</span>")
    ->url('checklist', "<i class='glyphicon glyphicon-check'></i> <span>".trans('home.men4')."</span>")
    ->url('informes', "<i class='glyphicon glyphicon-wrench'></i> <span>".trans('Informes')."</span>")

    ->add(Menu::new()
        ->add(Html::raw("<i class='fa fa-link'></i> <span>".trans('home.menrep1')."</span> <i class='fa fa-angle-left pull-right'></i>")->addParentClass('header'))
        ->url('reporte1', "<i class='glyphicon glyphicon-stats'></i>".('home.menrep1')." <span></span>")
    )
    //->add(Link::to('#', "<i class='glyphicon glyphicon-wrench'></i> <span>".trans('home.men13')."</span> <i class='fa fa-angle-left pull-right'></i>"))
    ->each(function (Menu $link) {

        // Return if string doesn't contain 'Foo'
        if (Auth::getUser()->rol!="administrador"||
            Auth::getUser()->rol!="system") {
           // return;
        }

        $link
        ->prepend('<a href="#"><i class="fa fa-share"></i><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>')
            ->addParentClass('treeview')
            ->addClass('treeview-menu')
            ->url('usuario', "<i class='glyphicon glyphicon-user'></i> <span>".trans('home.men7')."</span>")
            ->url('opciones_check', "<i class='glyphicon glyphicon-check'></i> <span>".trans('home.men8')."</span>")
            ->url('checklist_opcionescheck', "<i class='glyphicon glyphicon-link'></i> <span>".trans('home.men5')."</span>")
            ->url('areas', "<i class='glyphicon glyphicon-flag'></i> <span>".trans('home.men9')."</span>")
            ->url('modelo', "<i class='glyphicon glyphicon-copyright-mark'></i> <span>".trans('home.men10')."</span>")
            ->url('orden', "<i class='glyphicon glyphicon-shopping-cart'></i> <span>".trans('home.men11')."</span>")
            ->url('estaciones', "<i class='glyphicon glyphicon-plane'></i> <span>".trans('home.men12')."</span>")
            ->url('config', "<i class='glyphicon glyphicon-wrench'></i> <span>".trans('home.men13')."</span>")
            ->url('oautho2', "<i class='glyphicon glyphicon-print'></i> <span>".trans('OAuth2')."</span>")
            ;
    })

        ->setActiveFromRequest();
       /* ->add(Html::raw('HEADER')->addParentClass('header'))
        ->action('HomeController@index', '<i class="fa fa-home"></i><span>Home</span>')
        ->link('http://www.acacha.org', Menu::adminlteDefaultMenu('Another link'))
//        ->url('http://www.google.com', 'Google')
        ->add(Menu::adminlteSeparator('Acacha Adminlte'))
        #adminlte_menu
        ->add(Menu::adminlteSeparator('SECONDARY MENU'))
        ->add(Menu::new()->prepend('<a href="#"><i class="fa fa-share"></i><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>')
            ->addParentClass('treeview')
            ->add(Link::to('/link1', 'Link1'))->addClass('treeview-menu')
            ->add(Link::to('/link2', 'Link2'))
            ->url('http://www.google.com', 'Google')
            ->add(Menu::new()->prepend('<a href="#"><span>Multilevel 2</span> <i class="fa fa-angle-left pull-right"></i></a>')
                ->addParentClass('treeview')
                ->add(Link::to('/link21', 'Link21'))->addClass('treeview-menu')
                ->add(Link::to('/link22', 'Link22'))
                ->url('http://www.google.com', 'Google')
            )
        )
//        ->add(
//            Menu::fullsubmenuexample()
//        )
//        ->add(
//            Menu::adminlteSubmenu('Best menu')
//                ->add(Link::to('/acacha', 'acacha'))
//                ->add(Link::to('/profile', 'Profile'))
//                ->url('http://www.google.com', 'Google')
//        )
        ->setActiveFromRequest();
        * /
});
*/
