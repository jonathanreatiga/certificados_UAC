# certificados_UAC
certificados, config 1.1

IMPORTANTE MIRAR ESTOS COMPONENTES

- 1.) primero dejar a ejemplo.env ----> .env y configugar la base de datos:

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=certificados //nombre de la base de datos
        DB_USERNAME=root
        DB_PASSWORD=

- 2.) composer install
- 3.) npm install
- 4.) verificar que ya tenga (laravelcollective): composer require laravelcollective/html

        After successfully install package, you have to open config/app.php file and add service provider and alias. config/app.php

        'providers' => [

        ....

        Collective\Html\HtmlServiceProvider::class,

        ],

        'aliases' [

            ....

            'Form' => Collective\Html\FormFacade::class,

            'Html' => Collective\Html\HtmlFacade::class,

        ],


- 5.) php artisan key:generate

- 6.) php artisan migrate
- 7.) php artisan db:seed
- 8.) php artisan storage:link

