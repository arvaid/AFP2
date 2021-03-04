# Telepítési útmutató

## Requirements
- Apache 2.4
- PHP 7.3 vagy újabb
- MongoDB
- composer

## Deployment

1. Telepítse a fentebb írt függőségeket!

2. Klónozza le a git repót és másolja át az `src` mappát az Apache dokumentum mappájába! (Pl: Windows - `C:\wamp64\www`, Linux: `/srv/http`)

3. Engedélyezze az Apache virtual host funkcióját, majd konfigurálja a `httpd-vhosts.conf` fájlban:

    ```xml
    <VirtualHost *:80>
        ServerName local.test
        DocumentRoot /srv/http/src/public
        SetEnv APPLICATION_ENV "development"
        <Directory /srv/http/>
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>
    ```

    Az `/srv/http/`-t mindkét helyen helyettesítse az Apache gyökérmappájának elérési útjával, a `local.test`-et pedig az oldal URL-jével.

4. Illessze be az alábbi sort a `hosts` fájlba!

    ```
    127.0.0.1 local.test
    ```

    Ismét helyettesítse a `local.test`-et az oldal URL-jével.

5. Futtassa le az alábbi parancsokat a projekt mappájában:
    ```
    composer update
    php artisan key:generate
    ```
6. Hozza létre és töltse ki a `.env` fájlt. A projekt tartalmaz egy erre való sablont is (`.env.example`). Amit mindenképpen be kell állítani:
    - `APP_URL`: az alkalmazás URL-je. Enélkül az oldalon lévő linkek nem fognak működni.
    - Az adatbázis eléréséhez szükséges adatok:
        - `DB_HOST`
        - `DB_PORT`
        - `DB_DATABASE`
        - `DB_USERNAME`
        - `DB_PASSWORD`

7. Futtassa az Apache és MongoDB szervereket!
