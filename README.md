## Használt stack

Front End: Vue.js + Vuetify
Backend: Laravel API

## Telepítés

1) composter install
2) npm install && npm run dev
3) php artisan migrate:fresh --seed
4) php artisan serve

## Leírás

Az Seeder meghívása által a NewsService létrehoz 10 darab News modelt a factory segítségével. Itt létre akartam hozni egy RandomImage managert és különböző weboldalak által kiszolgált drivereket akartam alkalmazni de túlságosan kitért a feladat scope-jából így egy egyszerűbb Helper osztályt alkalmaztam. 

Két route-ot szolgál ki a back-end:
1) /news
2) /news/{slug} (itt az id helyett a cikk 'slug'-ját használtam SEO optimalizásás miatt)

Mindkét route-ért a NewsController felelős, a /news route-ot viszont absztaktáltam egy AbstractModelService osztályhoz a showAction pedig a NewsServicehez specifikus getUsingSlug fügvény miatt a saját Controllerjében hagytam.


## Front End

A frontendet egy Vue Router-es Vue.js teszi ki, ahol a Vuetify frameworkot alkalmaztam. Itt még sok dolgon lehetne fejleszteni.

## Tesztelés

A feladat megoldását TDD-vel kezdtem Laravel oldalon de kifutottam a saját időmből (kb. 2 órám volt a tegnap meg a mai nap a feladat megoldására) ezért itt is lehetne még bőven tesztet írni. A front endre is ráfért volna a Jest alapú tesztelés.
