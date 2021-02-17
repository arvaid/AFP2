# Követelmény-specifikáció

## 1. Áttekintés

A rendszer célja egy olyan webes felület biztosítása, ahol a felhasználók kérdéseket tudnak feltenni, melyekre más felhasználók válaszolhatnak. A kérdések kategóriák szerint jelennek meg. Az alkalmazás támogasson light/dark módot, GitHub fiókkal történő bejelentkezést.

## 2. Jelenlegi helyzet

A kategóriában már népszerű weboldalak:

- [Yahoo Answers](https://answers.yahoo.com/): Általános célú, angol nyelvű. Több, mint 25 kategóriában lehet kérdezni. Mindenki számára nyitott, ezért a válaszok minősége is változó.
- [Stack Exchange](https://stackexchange.com/): Tudományos, illetve szakmai témákban lehet szakértők segítségét kérni. Több al-oldalból áll, ezek közül néhány fontosabb:
    - [Stack Overflow](https://stackoverflow.com/): Minden programozó ismeri, ha valamilyen hibába fut, első dolga Stack Overflow-on megnézni, másnál is előfordult-e, és ha igen, hogyan oldotta meg.
    - [Super User](https://superuser.com/): Rendszerüzemeltetéssel kapcsolatos problémák megoldásában találhatunk segítséget.
    - Ezeken kívül van kihez fordulnunk akkor is, ha [kriptográfiával](https://crypto.stackexchange.com/), [kertészkedéssel](https://gardening.stackexchange.com/) vagy [kínai nyelvtanulással](https://chinese.stackexchange.com/) kapcsolatos kérdéseink merülnének fel. Az összes oldal listája [itt](https://stackexchange.com/sites) megtalálható.
- [Gyakori Kérdések](https://www.gyakorikerdesek.hu/): A legnagyobb magyar nyelvű Q&A oldal. Sajnos a rossz minőségű kérdések és válaszok miatt ismert.

## 3. Vágyálom rendszer

A projekt célja egy online Question-Answer (kérdés-válasz) oldal létrehozása. Lehessen kérdést feltenni, válaszolni azokra, keresni kategória szerint, háttér témát változtatni (light, dark) a weboldalon. Socialmedia/github fiókokkal lehessen bejelentkezni. Bejelentkezés nélkül is meg lehessen nézni a kérdéseket és a hozzájuk tartozó válaszokat, viszont a kérdés feltétel, válasz adás (posztolás) bejelentkezéshez legyen kötve. A válaszokat lehessen minősíteni, amely által egy felhasználó tudjon pontokat gyűjteni. Minél több egy felhasználó pontja, annál magasabb rangot kaphasson. Admin joggal lehessen törölni, szerkeszteni, moderálni a nem megfelelő kérdéseket/válaszokat, felhasználókat letiltani az oldalról, a többi felhasználó jogosultságait módosítani.

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

## 5. Rendszerre vonatkozó követelmények, szabályok

### Frontend (Next.js)
- HTML
- CSS, SCSS
- JS, jQuery
- Bootstrap
- Font Awesome
- Google Fonts
- Google Ads

### Backend
- Laravel framework (PHP)
- SQL - MongoDB

## 6. Üzleti folyamatok modelje
![use case diagram](https://github.com/arvaid/AFP2/tree/master/docs/usecase.png)

## 7. Fogalomtár

-
-

## 8. Adatbázis terv