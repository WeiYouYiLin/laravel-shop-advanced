<?php

return [
    'alipay' => [
        'app_id'         => '2016092500594645',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzSxlZ0ALIqkvkSql9wndCEues4nv44IRCJaUrQcR7CqsCq0V9H57bhQw5ZLO3UV3tt8yNPNfBIRz0l2xOiUFf2Uzxcb1Occ7RAkknp4C+jJvIGdI3FGRaCODWWM6wiONIQ4iDQEC+XAzSIom3aqBrlOBFYwDgwgArD87XDQ038t62WpcUx7bf2J720jBbFDl1a7VgKmZR7TxoAAl8NRaetiYm52bkDF/U2w9sWDye6J6zyNU59qmpdnHYh+3aMFtrUErVgPRw46GAFui2bNqpWi0cHzLftHL6bxZNWGmaa+b+nQSR23iTrwwmDbecxZNgdR5Qiiy9zvSny6Km37aqQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAsPjiC55L4tZGlH8nJsrjEmmqxWTDWDksYvFv8gjMmRBZxChtPwCN4AEgNNa1MGYWWqjv7NL21c/q0ERlfBu8bgq0DkCq+I01Rr0FXVZTakp9Ece9/7+kd2vBXCOaUU3PS+0pWV9E/p1tQiA/erXXQRIxXb0wBVGzZ8oDvSZ7uaFcbE5I5cuUfur10uVO04uJNIFdURC2hKt9ZdT23TRkzv5tVFkidF1uTgW2buXfokDtG6eESvuDb+3M/qpsLudqI30gqc1QP6u+jA7XXyTARK6ItnJmRu9d4/Pv2UbjMMR4qE28Kcjo62aU/qA4AU3ZMfmZH3D2MsH0Jv3azaDFgwIDAQABAoIBAQCAxspuG+UqjjPT0ObjcpVji6KpetYu94OWCAwmukJvSxeXBrfgNX4Ht6oA6Q/1xQOVOwNDeIwHMAG1RV/3vJMUHBPDn0kKDm7rJ5akwbF3UfbKnmdil8iM4ctVSc78RLuIi24gS5QAFvwvNxoaKAIXpq5ngMhVxorfBoBL/pnfjBaAvq1+jjf+tRKs4xPlSNESNEDzVQm3dZusyM9gdY5iB5JRQ9ydynVrPxVLdimIPVm4OTTeBHInC7qGnnxqDd5fLo+UGggiLGPR2MUefN9X8NRLtybipJjU+DApv1ld5WkiShpQZvkme/Yhof9KCqEz0Z9QTSSRlMTGRJfdUHUBAoGBAN8bE+kriwSNvJlBKt7mRLzall5nMMUpm5y1Otp3QAaOUObugSL6pO55PwA6TWkVuDldKbpquwgu+/ciSXQVXQUG2o5ItW6UByH4TP4alDFb9qcYDRop5eBDVY2xwNYMvhBKB75QNxUy7nP9N63vnXq35/OQ37Vt9KiC4C3OXpIDAoGBAMsQiTFTBl/T/opWh7Avxd7OhFtI8bND81cPXjqPbHFohoz1YtsIgFvFDkFLtUz1xAk+jbGdxB9wsHb9AZEcDoYAhGjelJZAs7ZQ5kmjHmJ9KW0o8b7UxNiaabzT2nxcgnAUFxTveFH1xyOOuohGo/Tns+9QsSrJrgN40fJzRGaBAoGAVrlM1Q9S+5Mo4528T2bNA2gomUudXpac4Z5k4TUHk0TQ1+OQGQu6/uPshGclXhrOQKYhKVCBoV26HcebK99+CA0w+avzsqch2qeNLh0gy8sGps8nkKsGq1UhNXIKFmpfmy9bsTO3Jatlm3qroRYKbgB8zmXbP8gdGT++aq/UfQcCgYEAyD63O3enGoqgQOURi1Gg65V1edtV1bSVW23hOxhCFRfBT3GQGXSpt1V8ODGjSJA2z/LqoZN1WpeyvLPEfsdPHx+VcyDDH+QQFCJ05XrAtNi+KFIvCkMhFoQ27ylvFCHZ0xJMrK11VkVrKgpOsaIPfquaic1l2E7nla7oQhEfC4ECgYBGZ3pZSeaRuqjQ8VjBBRn50EOo979CueHZTnNvCN8z0IM86f+loY7Xs9N63OuLDvXIwyvJeEXpVGt1o0rajsQICtEskUY4pNba7aZHO63vw89yZYhg+U4NAch9TuiIZM4okEf9xZYwtlwMWLWbhCQc6RWki/uKRkajuLIUEZWesQ==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
