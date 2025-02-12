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

    'accepted' => ':attribute feltet må godtas.',
    'accepted_if' => ':attribute feltet må godtas når :other er :value.',
    'active_url' => ':attribute feltet må være en gyldig URL.',
    'after' => ':attribute feltet må være en dato etter :date.',
    'after_or_equal' => ':attribute feltet må være en dato etter eller lik :date.',
    'alpha' => ':attribute feltet kan bare inneholde bokstaver.',
    'alpha_dash' => ':attribute feltet kan bare inneholde bokstaver, tall, bindestreker og understreker.',
    'alpha_num' => ':attribute feltet kan bare inneholde bokstaver og tall.',
    'array' => ':attribute feltet må være en liste.',
    'ascii' => ':attribute feltet kan bare inneholde enkle alfanumeriske tegn og symboler.',
    'before' => ':attribute feltet må være en dato før :date.',
    'before_or_equal' => ':attribute feltet må være en dato før eller lik :date.',
    'between' => [
        'array' => ':attribute feltet må ha mellom :min og :max elementer.',
        'file' => ':attribute feltet må være mellom :min og :max kilobyte.',
        'numeric' => ':attribute feltet må være mellom :min og :max.',
        'string' => ':attribute feltet må være mellom :min og :max tegn.',
    ],
    'boolean' => ':attribute feltet må være sant eller falskt.',
    'can' => ':attribute feltet inneholder en ugyldig verdi.',
    'confirmed' => ':attribute feltets bekreftelse stemmer ikke.',
    'contains' => ':attribute feltet mangler en nødvendig verdi.',
    'current_password' => 'Passordet er feil.',
    'date' => ':attribute feltet må være en gyldig dato.',
    'date_equals' => ':attribute feltet må være en dato lik :date.',
    'date_format' => ':attribute feltet må matche formatet :format.',
    'decimal' => ':attribute feltet må ha :decimal desimalplasser.',
    'declined' => ':attribute feltet må avvises.',
    'declined_if' => ':attribute feltet må avvises når :other er :value.',
    'different' => ':attribute og :other må være forskjellige.',
    'digits' => ':attribute feltet må ha :digits siffer.',
    'digits_between' => ':attribute feltet må ha mellom :min og :max siffer.',
    'dimensions' => ':attribute feltet har ugyldige bildedimensjoner.',
    'distinct' => ':attribute feltet har en duplisert verdi.',
    'doesnt_end_with' => ':attribute feltet må ikke slutte med en av følgende: :values.',
    'doesnt_start_with' => ':attribute feltet må ikke starte med en av følgende: :values.',
    'email' => ':attribute feltet må være en gyldig e-postadresse.',
    'ends_with' => ':attribute feltet må slutte med en av følgende: :values.',
    'enum' => 'Den valgte :attribute er ugyldig.',
    'exists' => 'Den valgte :attribute er ugyldig.',
    'extensions' => ':attribute feltet må ha en av følgende filendelser: :values.',
    'file' => ':attribute feltet må være en fil.',
    'filled' => ':attribute feltet må ha en verdi.',
    'gt' => [
        'array' => ':attribute feltet må ha mer enn :value elementer.',
        'file' => ':attribute feltet må være større enn :value kilobyte.',
        'numeric' => ':attribute feltet må være større enn :value.',
        'string' => ':attribute feltet må være lengre enn :value tegn.',
    ],
    'gte' => [
        'array' => ':attribute feltet må ha :value elementer eller mer.',
        'file' => ':attribute feltet må være større enn eller lik :value kilobyte.',
        'numeric' => ':attribute feltet må være større enn eller lik :value.',
        'string' => ':attribute feltet må være minst :value tegn.',
    ],
    'image' => ':attribute feltet må være et bilde.',
    'in' => 'Den valgte :attribute er ugyldig.',
    'in_array' => ':attribute feltet må finnes i :other.',
    'integer' => ':attribute feltet må være et heltall.',
    'ip' => ':attribute feltet må være en gyldig IP-adresse.',
    'json' => ':attribute feltet må være en gyldig JSON-streng.',
    'lowercase' => ':attribute feltet må være med små bokstaver.',
    'max' => [
        'array' => ':attribute feltet må ikke ha mer enn :max elementer.',
        'file' => ':attribute feltet må ikke være større enn :max kilobyte.',
        'numeric' => ':attribute feltet må ikke være større enn :max.',
        'string' => ':attribute feltet må ikke være lengre enn :max tegn.',
    ],
    'mimes' => ':attribute feltet må være en fil av typen: :values.',
    'min' => [
        'array' => ':attribute feltet må ha minst :min elementer.',
        'file' => ':attribute feltet må være minst :min kilobyte.',
        'numeric' => ':attribute feltet må være minst :min.',
        'string' => ':attribute feltet må være minst :min tegn.',
    ],
    'not_in' => 'Den valgte :attribute er ugyldig.',
    'numeric' => ':attribute feltet må være et tall.',
    'required' => ':attribute feltet er påkrevd.',
    'same' => ':attribute feltet må samsvare med :other.',
    'size' => [
        'array' => ':attribute feltet må inneholde :size elementer.',
        'file' => ':attribute feltet må være :size kilobyte.',
        'numeric' => ':attribute feltet må være :size.',
        'string' => ':attribute feltet må være :size tegn.',
    ],
    'unique' => ':attribute har allerede blitt brukt.',
    'uploaded' => ':attribute kunne ikke lastes opp.',
    'url' => ':attribute feltet må være en gyldig URL.',
    'uuid' => ':attribute feltet må være en gyldig UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],
];
