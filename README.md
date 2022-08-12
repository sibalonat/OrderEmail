

## Rreth këtij Aplikacioni

Ky aplikacion është i ndërtuar me Laravel dhe Vue3. 
Mënyra si funksionon është:
Përdoruesi krijon një porosi, në momentin që porosia krijohet i cohet një email personit që ka bërë porosinë. 
Ky aplikacion ka të populluara të dhëna përmes factory dhe seeders në Laravel. 
Ka një user që ka email user@email.com dhe password gjenerik të fakerit "password". 
Useri ka disa porosi të krijuara paraprakisht. Pra kur logohet dhe na drejton per tek Dashboard shohim këto porosi. 

Mënyra për ta lancuar aplikacionin. 
Në fillim duhet të krijojmë një db me emrin e databasës që ka në file .env. 
Mandej si të jetë krijuar kjo database, shkruajmë në terminal:
- [php artisan migrate --seed]
Kjo do shtojë fushat dhe të dhënat në DB.
Si kemi bërë këtë duhet të shkruajmë në terminal npm install && npm run dev (komanda të cilat lancohen njëra pas tjetrës)

Duhet të konfigurojmë një server emaili. Në këtë rast përdoret mailhog i cili është vetëm një server për emaile. 
Sugjeroj të përdoret laragon për të bërë këtë duke që se ësht
Sugjeroj të përdoret laragon për të bërë këtë duke që se është më e lehtë për të bërë konfigurimet e nevojshme. 
