<head>
    <meta charset="UTF-8">
    <title> {{env('APP_NAME', 'Laravel')}} - @yield('htmlheader_title', env('APP_TITLE_PAGE', 'Your title here')) </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('/safari-pinned-tab.svg') }}" color="#3570C1">
    <meta name="apple-mobile-web-app-title" content="{{env('APP_MOBILE_TITLE_PAGE', 'Inventario Activos Fijos')}}">
    <meta name="application-name" content="{{env('APP_MOBILE_TITLE_PAGE', 'Inventario Activos Fijos')}}">
    <meta name="theme-color" content="#3570C1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ mix('/css/all.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <script>
        //See https://laracasts.com/discuss/channels/vue/use-trans-in-vuejs
        window.trans = @php
            // copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
            $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
            $trans = [];
            foreach ($lang_files as $f) {
                $filename = pathinfo($f)['filename'];
                $trans[$filename] = trans($filename);
            }
            $trans['adminlte_lang_message'] = trans('adminlte_lang::message');
            echo json_encode($trans);
        @endphp
    </script>
</head>
