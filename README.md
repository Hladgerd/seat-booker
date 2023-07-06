Jelen projekt az alábbi feladatok mentén készült PHP 8.1.2 és MySQL 8.0.33 használatával:

Adott egy mozi, annak egy terme, abban 2 szabad szék.
1. Valósítsa meg, hogy weben keresztül ezekre a szabad székekre rá lehessen foglalni!
2. Egy szabad székre egyidőben csak 1 sikeres foglalás lehetséges.
3. Egy felhasználó foglalhat 1 vagy 2 szabad széket is.
4. A foglalás sikertelen „fizetés” esetén 2 perc múlva szabaduljon fel!
5. A felhasználók lássák a székekről azok státuszát: „szabad”; „foglalt”; „elkelt”
6. Sikeres foglalás után fizetésképpen kérjük be a vevő email címét, ahová küldjünk emailt a
   sikeres foglalásról, és változzon a szék státusza „elkelt”-re!
7. A feladat megoldásakor nem a megjelenítés a lényeg, hanem az egyidejű foglalások
   kizárásának biztosítása.