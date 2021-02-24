# Rendszerterv

## A rendszer célja

A rendszer célja egy olyan webes felület biztosítása, ahol a felhasználók kérdéseket tudnak feltenni, melyekre más felhasználók válaszolhatnak. A kérdések kategóriák szerint jelennek meg.
Az oldalra social media (GitHub) fiókkal lehet bejelentkezni/regisztrálni. A kérdéseket és válaszokat az adminok moderálják, a nem megfelelő posztok törlésre kerülnek.
A felhasználók a kérdésekre és válaszokra gombnyomással adhatnak pozitív, illetve negatív visszajelzést (like-dislike/upvote-downvote).
A rendszer webes felületen érhető el.

## 3. Ütemterv

Trello: https://trello.com/b/zGA3eTkt/nao-afp2


&nbsp;&nbsp;&nbsp;&nbsp; 1. gyakorlat: Funkcionális és Követelmény specifikáció

&nbsp;&nbsp;&nbsp;&nbsp; 2. gyakorlat: Rendszerterv

&nbsp;&nbsp;&nbsp;&nbsp; 3. gyakorlat: Fejlesztés megkezdése (Adatbázis kialakítása)

&nbsp;&nbsp;&nbsp;&nbsp; 4-5. gyakorlat: Fejlesztés (Backend funkciók elkészítése)

&nbsp;&nbsp;&nbsp;&nbsp; 6-7. gyakorlat: Fejlesztés (Frontend funkciók kialakítása)

&nbsp;&nbsp;&nbsp;&nbsp; 8-9. gyakorlat: Fejlesztés (Felhasználói felület kialakítása + Tesztelés megkezdése)

&nbsp;&nbsp;&nbsp;&nbsp; 10-11. gyakorlat: Tesztelés (Integrációs teszt)

&nbsp;&nbsp;&nbsp;&nbsp; 12. gyakorlat: Projekt befejezése, Bemutatás


## 4. Üzleti folyamatok modellje

![Üzleti folyamatok modell](../docs/img/model.png)

## 8. Architekturális terv

### Backend

A backendhez szükség van egy adatbázis szerverre, ebben az esetben MongoDB-t használunk. A szerver oldalon egy Laravel (PHP) alkalmazás fut, amely az adatbázishoz csatlakozik és a beérkező HTTP lekérdezéseket kiszolgálja.
A Laravel egy MVC (Model-View-Controller) framework, ebből az adatbázis alkotja a Modelt, a backend kód pedig a Controllert.

### Frontend

A frontendet BootStrappel formázott, JavaScript és jQuery kódot tartalmazó, a HTML5 szabványt követő oldalak alkotják, melyeket a szerver oldali Laravel MVC framework nézetei (View) valósítanak meg.

## 10. Implementációs terv

A webes felület főként HTML, CSS, és Javascript nyelven fog készülni. Használjuk továbbá a jQuery nevű JavaScript framework-öt is.

Az alkalmazás az MVC tervezési mintát használó Laravel keretrendszerre épül, így jól elkülöníthőek az egyes komponensek. Minden View, Controller és Model osztály külön fájlba kerül, a három komponens-kategóriának pedig a keretrendszer saját mappát hoz létre.
