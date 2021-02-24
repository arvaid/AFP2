# Funkcionális specifikáció

## 1. Áttekintés

Egy olyan rendszert fejlesztünk, ami lehetővé teszi, hogy a felhasználók kérdéseket tehetnek fel, illetve a többi felhasználó kérdéseire is tudnak válaszolni. A kérdések különböző kategóriákba sorolva jelennek meg, így megkönnyítve a keresést. A kérdések és válaszok pozitív vagy negatív értékelést kaphatnak a többi felhasználótól, ami egy összpontszám formájában jelenik meg.

A felhasználók profilján is megjelenik a válaszaira adott pontok összege, ami alapján különböző rangokat is kapnak, melyek megmutatják, hogy az adott felhasználó mennyivel járult hozzá a válaszadással az oldalhoz.

Az alkalmazás támogasson light/dark módot, GitHub fiókkal történő bejelentkezést.

## 2. Jelenlegi helyzet

Mivel a magyar nyelven elérhető legnagyobb [hasonló magyar weboldal](https://www.gyakorikerdesek.hu/) a komolytalan hangvételéről híres, könnyen betölthetünk egy piaci rést egy nála hasznosabb webes alkalmazás elkészítésével.

Az oldal jelentős hirdetőfelületet alkothatna, amennyiben elég népszerűvé válna.

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

## 5. Rendszerhez tartozó követelmények:

### Front end: 
- HTML, CSS, SCSS
- JS/jQuery
- Bootstrap
- Font Awesome
- Google Fonts
- Google Ads

### Back end: 
- Laravel framework (PHP)
- SQL - MongoDB

## 6. Jelenlegi üzleti folyamatok modellje

A mai világban az internet használata mindennapos, ezen keresztül tájékozódunk minden olyan dologról, amit nem tudunk. Egy olyan webes felület, ahol a felhasználók különböző kérdéseket tehetnek fel, amelyekre más valós felhasználók adhatnak választ. Vagy akár csak keresgélni, nézelődni is lehet a kategóriákban, megkönnyítheti az emberek életét. Egy kérdésre akár több felhasználó is válaszolhat, így ki lehet választani a leg optimálisabb lehetőséget közülük.

1. Kérdés felmerülése
2. Válasz keresése:
    - interneten keresztül történik
    - különböző oldalak/cikkek átnézése által => hosszú folyamat => nem biztos, hogy eredményes
    - különböző oldalak, különböző válasz lehetőségekkel => nem tudjuk, melyik helyes

## 7. Igényelt üzleti folyamatok modellje

1. Kérdés felmerülése
2. Válasz keresése:
    - Bejelentkezés nélkül is elérhető
    - Megfelelő kategória kiválasztása => Keresés
    - Minősített válaszok => Könnyebben megtalálható a legoptimálisabb válasz
3. Kérdés feltétele:
    - Bejelentkezés után érhető el
    - Megfelelő kategória választás után
    - Gyors válasz az adott témában => Több lehetőség, valós felhasználóktól
    - Válaszok minősítése => Segít kiválasztani a legjobbat/legoptimálisabbat
4. Válasz írása:
    - Bejelentkezés után érhető el
    - Jó válszok esetén pontok gyűjthetőek => Rangok szerzése

## 8. Használati esetek

**Adminisztrátor**: Az admin felel a rendszer problémamentes működéséért. Hozzá kell tudnia férni a felhasználók listájához, a felhasználók jogosultsági szintjének módosítása és a felhasználók letiltása miatt. Emellett a Kérdések/válaszok listáját is módosíthatja, moderálhatja, törölheti és szerkesztheti az egyes elemeit.

**Felhasználó**: Bejelentkezés nélkül: Olvashatóak, kereshetőek a kérdések és válaszok.

**Bejelentkezés után**: Kérdéseket tehet fel különböző témákban a többi felhasználónak. Különböző témákban válaszolhat, a többi felhasználó által feltett kérdésekre. Minősítheti az adott válaszokat, pontokat gyűjthet, amely által különböző rangokat szerezhet.

## 9. Megfeleltetés, hogyan fedik le a használati esetek a követelményeket:

A weboldal használatához nem szükséges a regisztráció, viszont ilyenkor a lehetőségek korlátozottak.

Regisztráció nélküli használat esetén a felhasználó a Posztokat látja illetve keresni tud témák alapján ellenben reagálni nem tud értékelést nem kap.

Ellenben a regisztrált felhasználók kezében több lehetőség van, ők feltehetnek kérdéseket.Kérdésekre válaszokat tud adni és abban az esetben ha a töbi felhasználó úgy érzi hogy a válasza hasznosnak bizonyult akkor értékelni tudja a választ, amelyel pontokat gyüjt hogy nagyobb értékelést/rangot tudjon elérni, amit a többi felhasználó is lát.

Az Adminisztrátor bejelentkezés után képes használni a privilégiumjait melyekkel a közösség rugalmas és folyékony működésének megtartására törekszik,amik a következő formában valósulhatnak meg:Törekszik rá hogy az oldalon bármely mérgező témájú,tartalmú Kérdéseket/posztokat/válaszokat ha szükség szerint moderálhatja például:rasszizmus,szexizmus.Ilyen esetekben az Adminisztrátor elveheti felhasználótól Kiváltságait és Tilthatja a fiókját.

## 10. Képernyő tervek:

**Login**: socialmedia/github fiókja segitségével jelentkezhet be, ha sikeres akkor bejelentkezés, hiba esetén Error Page.

**Főképernyő**: Legfrissebb Posztok megjelenítése,bejelentkezés esetén Posztokra reagálhatóság ellenkező esetben üzenet hogy csak bejelentkezve lehet válaszolni/reagálni a Posztokra. A képernyőn reklámbannerek lesznek elhelyezve.

**Poszt/Kérdés szerkesztő felület**: ezen a felületen tudják a felhasználók a Posztot/kérdést megírni.

**Profil**: A felhasználó részletes adatai, ranggal és pontokkal.

**Keresés**: Különböző témákban lehet kérdéseket/válaszokat keresni.

## 11. Forgatókönyv:

A kérdés posztolásához először be kell jelentkezni, illetve ha ezt még nem tettük meg, regisztrálni. Lehetőség van az oldalt bejelentkezés nélkül is használni, ekkor azonban csak a már meglévő kérdéseket és válaszokat olvashatjuk, magunk nem hozhatunk létre újat.

**Szereplők**: Kérdező, Válaszadó(k)

A Kérdező felhasználó először kiválasztja az új kérdés funkciót, ami egy gombról vagy menüből lesz elérhető. Egy form jelenik meg, ahol egy rövid formában kell megadni a kérdést, valamint egy hosszabban kifejtett magyarázatot, további részleteket. A Kérdező megadhat egy kategórát is, ha ezt nem teszi meg, a kérdés az Általános kategóriába kerül.
A Mentés gomb megnyomása után a kérdés megjelenik a főoldalon, illetve a saját kategóriájában is.

Ha egy másik felhasználó szeretne válaszolni a kérdésre, annak címére kattintva megnyitja a kérdéshez tartozó oldalt, és a kérdés alatti formban megírhatja válaszát.
Miután elmentette, a válasz megjelenik, ha több válasz is érkezett a kérdésre, azok egymás alatt.

## 12. Fogalomszótár:
Fogalom | Leírás
--- | ---
HTML (HyperText MarkUp Langage) | A weboldalak tartalmának leírására használt jelölő nyelv. [Szabvány](https://www.w3.org/standards/webdesign/htmlcss). 
CSS (Cascading Style Sheets) | A weboldalak formázásához használt jelölő nyelv. [Szabvány](https://www.w3.org/standards/webdesign/htmlcss).
JavaScript / JS | Egy, a webböngészőben futó programok írására is alkalmas programozási nyelv. A projektben az interaktivítás növeléséhez használjuk.
Webböngésző | Az a szoftver, amelyen keresztül a felhasználó weboldalakat képes meglátogatni, azok tartalmával interakcióba lépni. Ilyen például a Google Chrome, Firefox.
jQuery | Egy JavaScript függvénykönyvtár, mely a weboldalak HTML és CSS elemeinek dinamikus változtatását teszi egyszerűbbé, ezzel meggyorsítva a fejlesztést
Függvénykönyvtár | Olyan előre megírt kódok, szoftverkomponensek, melyek más szoftver fejlesztéséhez felhasználhatók.
Bootstrap | Egy CSS keretrendszer, mely előre megírt formázásokat és praktikus elrendezéseket biztosít. Nagymértékben felgyorsítja a fejlesztést.
Keretrendszer / Framework | Olyan szoftvertermék, amely más szoftverek alapjául szolgálhat. Az adott szoftvertípusra jellemző közös komponenseket már eleve tartalmazza, így gyorsabbá téve a projektek elkészítését.
Font Awesome | Egy ikonokat tartalmazó font-csomag. Könnyű és gyors hozzáférést biztosít gyakran használt felületi ikonokhoz.
Google Fonts | Egy internetes szolgáltatás, amely rengeteg különböző, ingyen használható betűtípust tesz elérhetővé.
Google Ads | Egy online hirdetési platform.
PHP | Egy szerver oldali programozási nyelv. A backend elkészítésében alkalmazzuk.
Laravel | Egy PHP keretrendszer, melyet webalkalmazások készítésére fejlesztettek ki.
Front end | A szoftver azon része, amellyel a felhasználó interakcióba tud lépni. Az adatokat valamilyen felületen jeleníti meg, ezzel a felülettel azonosítjuk a front endet.
Back end | A szoftver azon része, amely a felhasználóval közvetlenül nem, csak a front enden keresztül érintkezik. A back end feladata a különböző erőforrásokkal, például adatbáziskezelő rendszerekkel való kommunikáció. Felfogható az adatbázis és a front end közötti közvetítő rétegként.
SQL (Structured Query Langauage) | Adatbázisrendszerekben használt nyelv, adatlekérdezések megfogalmazására
MongoDB | Egy NoSQL típusú adatbáziskezelő rendszer. JSON objektumokat használ az adattárolásra.
NoSQL (Not Only SQL) | A hagyományos (SQL-alapú, vagy relációs) adatbázisrendszerektől eltérő rendszerek
JSON (JavaScript Object Notation) | Egy adatközlő formátum, amely a JavaScript nyelv object adattípusán alapul.

