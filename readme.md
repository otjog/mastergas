<h1>Версия Alpha 0.1</h1>

<p>После клонирования необходимо произвести следующие действия:</p>
<ul>
    <li>
        Выполнить: <strong>composer install</strong>
    </li>
    <li>
        Создать файл <strong>.env</strong> и заполнить его
    </li>
    <li>
        Выполнить: <strong>php artisan key:generate</strong>
    </li>
    <li>
        Выполнить: <strong>php artisan storage:link</strong>
    </li>
    <li>
        Выполнить: <strong>php artisan migrate</strong>
    </li>  
    <li>
        Выполнить: <strong>php artisan db:seed</strong>
    </li>     
    <li>Вставить <strong>GeoLite2-City.mmdb</strong> и <strong>GeoLite2-Country.mmdb</strong> в папку <strong>storage/app/public/geolite/</strong>
    </li>
</ul>
