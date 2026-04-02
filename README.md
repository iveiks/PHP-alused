<div>
    <h1>
        Andmebaasid iseseisev töö nr 3
    </h1>
    Selle projekti käivitamiseks:
    <ul>
      <li>Sikuta "autorent" kaust enda arvutisse</li>
      <li>Käivita enda arvutis Docker</li>
      <li>Enda arvuti terminaliga mine sinna kausta ning sisesta see käsk '<b>docker compose up --build -d</b>' (tõmbab vajalikud failid ning käivitab konteinerid)</li>
      <li>Kui kõik on korras ja konteinerid töötavad, peaksid saama brauseriga ligi kahele aadressile:
        <ul>
          <li><b>localhost:8081</b> see on phpMyAdmin leht. Kasutaja "admin", parool "Passw0rd".</li>
          <li><b>localhost:8080</b> see on autorendi leht.</li>
        </ul>
      </li>
      <li>Kui vajalikud toimingud tehtud, sisesta terminalis see käsk '<b>docker compose down</b>' (peatab ning kustutab konteinerid).</li>
    </ul>
    <p>
      Nagu ennegi, kasutasin töö tegemiseks Dockerit. Apache ja muu vajaliku seadistamine on seetõttu väga lihtne, kuna kasutasin olemasolevaid image'eid. <br>
      Yaml failis on ära defineeritud kolm konteinerit: üks Apache serveri jaoks, teine MySQL andmebaasi jaoks ja kolmas phpMyAdmini jaoks. <br>
      Tegin yaml failis veidi muutusi failistruktuuris (veebiserveri ja andmebaasi konteineris), et konteinerites tehtud muudatused elaksid "restardi" ka üle.
      <br>
      Samuti on yaml failis defineeritud pordid, et host masinast sinna sisse-välja saada.
      <br>
      Veebiserveri puhul ei saanud puhast image faili kasutada, kuna siis ei töötanud PHP normaalselt, seetõttu kasutasin seal Dockerfile'i.
      <br><br>
      Kahe uue tabeli tegemine admin lehel oli lihtne, seal vast miskit kirjeldada pole, sama mockaroos test andmete loomine.
    </p>

    Toimiv veebileht <br>
    <img width="1200" height="690" alt="autorent" src="https://github.com/user-attachments/assets/be59bf65-4dec-49a7-9d7b-6de3c733c53c" />
<br>
    <img width="1406" height="1138" alt="tabelid" src="https://github.com/user-attachments/assets/d15e442f-9cd8-4f55-9fb2-466093941289" />

    <img width="1357" height="1294" alt="reservations" src="https://github.com/user-attachments/assets/9b482575-00d7-4b70-93ba-7e13a5ba5d41" />

    <img width="1671" height="1315" alt="users" src="https://github.com/user-attachments/assets/259cb61c-e53f-4ff7-8b46-75bc01dac411" />

  </div>
