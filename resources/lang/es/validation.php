<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El :attribute debe ser aceptado.',
    'active_url'           => 'El :attribute no es un URL valido.',
    'after'                => 'El :attribute debe ser una día posterior a :date.',
    'after_or_equal'       => 'El :attribute debe ser una día posterior o igual a :date.',
    'alpha'                => 'EL :attribute debe contener solo letras.',
    'alpha_dash'           => 'El :attribute debe contener solamente letras, números y guiones.',
    'alpha_num'            => 'El :attribute debe contener solamente letras y números.',
    'array'                => 'El :attribute debe ser un vector(array).',
    'before'               => 'El :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El :attribute debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file'    => 'El :attribute debe estar entre :min y :max kilobytes.',
        'string'  => 'El :attribute debe estar entre :min y :max caracteres.',
        'array'   => 'El :attribute debe tener entre :min y :max items.',
    ],
    'boolean'              => 'El :attribute debe ser verdadero o falso (true or false).',
    'confirmed'            => 'El :attribute de confirmación no esta marcado.',
    'date'                 => 'El :attribute no es una fecha valida.',
    'date_format'          => 'El :attribute no coincide con el formato :format.',
    'different'            => 'El :attribute y :other debe ser diferente.',
    'digits'               => 'EL :attribute debe ser :digits digitos.',
    'digits_between'       => 'El :attribute debe ser between :min y :max digitos.',
    'dimensions'           => 'El :attribute tiene una imagen de dimensiones incoretas.',
    'distinct'             => 'El :attribute el campo tiene un valor duplicado.',
    'email'                => 'El :attribute debe ser una dirección de correo electrónico válida.',
    'exists'               => 'El valor elegido :attribute es inválido.',
    'file'                 => 'El :attribute debe ser un archivo.',
    'filled'               => 'El :attribute el campo debe tener un valor.',
    'image'                => 'El :attribute debe ser una imagen.',
    'in'                   => 'El dato seleccionado :attribute es invalido.',
    'in_array'             => 'El :attribute el campo no existe en :other.',
    'integer'              => 'El :attribute debe ser un entero.',
    'ip'                   => 'El :attribute debe ser una dirección IP válida.',
    'ipv4'                 => 'El :attribute debe ser una dirección IPv4 válida.',
    'ipv6'                 => 'El :attribute debe ser una dirección IPv6 válida.',
    'json'                 => 'El :attribute debe ser una cadena JSON válida.',
    'max'                  => [
        'numeric' => 'El :attribute no debe ser mas grande que :max.',
        'file'    => 'El :attribute no debe ser mas grande que :max kilobytes.',
        'string'  => 'El :attribute no debe ser mas grande que :max caracteres.',
        'array'   => 'El :attribute no debe tener mas de :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'EL :attribute debe ser de al menos :min.',
        'file'    => 'El :attribute debe tener al menos :min kilobytes.',
        'string'  => 'El :attribute debe tener al menos :min caracteres.',
        'array'   => 'El :attribute debe tener al menos :min items.',
    ],
    'not_in'               => 'La selección :attribute es invalida.',
    'numeric'              => 'El :attribute debe ser un número.',
    'present'              => 'El :attribute como campo debe esta presente.',
    'regex'                => 'El :attribute tiene un formato invalido.',
    'required'             => 'El :attribute es necesario como campo.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'                => 'El :attribute debe ser una cadena de caracteres.',
    'timezone'              => 'El :attribute debe ser una zona valida.',
    'unique'                => 'El :attribute ya ha sido tomado anteriormente.',
    'uploaded'              => 'El :attribute fallo al subir.',
    'url'                   => 'El :attribute es un formato invalido(URL).',
    'is_jpg'                => 'The :attribute no es jpg.',
    'imageable'             => 'El texto :attribute no es jpg, revisar el texto data:image/jpeg;base64 .',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
