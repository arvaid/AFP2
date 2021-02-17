# Funkcionális specifikáció
## 3. Követelmény lista

Modul | ID | Név | Kifejtés
--- | --- | --- | --------------------------------------------------
Jogosultság | K1 | Bejelentkezési felület | A felhasználó a socialmedia/github fiókja segítségével jelentkezhet be. 
Jogosultság | K2 | Regisztrációs felület | A felhasználó a socialmedia/github fiókja segítségével regisztrálhat. 
Jogosultság | K3 | Jogosultsági szintek | -Admin <br> -Felhasználó <br> -Vendég
Felület | K4 | Profil | A felhasználó részletes adatai, ranggal és pontokkal.
Felület | K5 | Posztolás (Kérdés feltétel) | A felhasználó, bejelentkezés után kérdést tehet fel különböző témákban a többi felhasználónak.
Felület | K6 | Posztolás (Válasz adás) | A felhasználó, bejelentkezés után válaszolhat, a többi felhasználó által különböző témákban feltett kérdésekre.
Felület | K7 | Keresés | Különböző témákban lehet kérdéseket/válaszokat keresni.
Modifikáció | K8 | Nem megfelelő kérdések moderálása | A nem megfelelő kérdéseket az adminisztrátor törölheti, szerkesztheti, moderálhatja.
Modifikáció | K9 | Nem megfelelő válaszok moderálása | A nem megfelelő válaszokat az adminisztrátor törölheti, szerkesztheti, moderálhatja.
Modifikáció | K10 | Felhasználó jogosultság módosítása | Az adminisztrátor módosíthatja a többi felhasználó jogosultsági szintjét


## 4. Funkcionális követelmények

1. Bejelentkezési felület
2. Regisztrációs felület
3. Posztolás:
    - Kérdés feltétel
    - Válasz adás
4. Kategória szerinti keresés
5. Válaszok minősítése
    - válaszok minősítése like-al, illetve dislike-al
6. Pontok gyűjtése
    - a felhasználó pontokat gyűjthet a válaszaival
    - minél több pontot gyűjt a felhasználó, annál magasabb rangot kap

Adminisztrátor jogosultsággal rendelkezők:
1. Nem megfelelő kérdések törlése, szerkesztése és moderálása
2. Nem megfelelő válaszok törlése, szerkesztése és moderálása
3. Felhasználók letiltása az oldalról
4. Felhasználók jogosultságainak módosítása

Jogosultságok:
    - Vendég
    - Felhasználó
    - Admin


## 5. Jelenlegi üzleti folyamatok modellje

A mai világban az internet használata mindennapos, ezen keresztül tájékozódunk minden olyan dologról, amit nem tudunk. Egy olyan webes felület, ahol a felhasználók különböző kérdéseket tehetnek fel, amelyekre más valós felhasználók adhatnak választ. Vagy akár csak keresgélni, nézelődni is lehet a kategóriákban, megkönnyítheti az emberek életét. Egy kérdésre akár több felhasználó is válaszolhat, így ki lehet választani a leg optimálisabb lehetőséget közülük.

1. Kérdés felmerülése
2. Válasz keresése:
    - interneten keresztül történik
    - különböző oldalak/cikkek átnézése által => hosszú folyamat => nem biztos, hogy eredményes
    - különböző oldalak, különböző válasz lehetőségekkel => nem tudjuk, melyik helyes


## 6. Használati esetek

Adminisztrátor: Az admin felel a rendszer problémamentes működéséért. Hozzá kell tudnia férni a felhasználók listájához, a felhasználók jogosultsági szintjének módosítása és a felhasználók letiltása miatt. Emellett a Kérdések/válaszok listáját is módosíthatja, moderálhatja, törölheti és szerkesztheti az egyes elemeit.
Felhasználó: Bejelentkezés nélkül: Olvashatóak, kereshetőek a kérdések és válaszok.
Bejelentkezés után: Kérdéseket tehet fel különböző témákban a többi felhasználónak. Különböző témákban válaszolhat, a többi felhasználó által feltett kérdésekre. Minősítheti az adott válaszokat, pontokat gyűjthet, amely által különböző rangokat szerezhet.
