# Proiect-Baze-de-Date
Am realizat o pagina web cu php cu xampp 
Proiectul pe care l am avut de realizat este legat de o baza de date care contine 4 tabele
Agentie (id_agentie - PRIMARY KEY , nume)
Spatiu (id_spatiu -PRIMARY KEY, adresa, zona, suprafata, id_tip)
Tip (id_tip - PRIMARY KEY, denumire, caracteristici)
Oferta ((id_agentie, id_spatiu) -PRIMARY KEY, vanzare, pret, moneda)

si urmatoarele cerinte:
3)
a) Să se găsească detaliile spațiilor a căror adresă conține ’j’ pe a treia poziție,
ordonat crescător după zonă și descrescător după suprafață.
b) Să se găsească detaliile ofertelor de tip ’vânzare’ cu prețul sub 70000 EUR
sau echivalentul în moneda ofertei (RON sau USD) la cursul zilei.

4)
a) Pentru tipul de spațiu ’apartament’ să se găsească ofertele de tip ’închiriere’
cu preț sub 250 EUR sau echivalentul în moneda ofertei (RON sau USD) la
cursul zilei.
b) Să se găsească perechi de agenții (nume1, nume2) care oferă spre vânzare
același spațiu la prețuri diferite (ținând cont de cursul valutar). O pereche este
unică în rezultat.

5)
a) Să se găsească detaliile spațiilor de tip ’garaj’ din zona 2, cu suprafața cea mai
mare.
b) Să se găsească numele agențiilor care ofertează spații de același tip și cu
același preț și aceeași monedă ca și prețul oferit de agenția cu numele
‘AgentieRoyal’ pentru spațiul cu id_spatiu 111.

6)
a) Să se găsească prețul minim, mediu și maxim per monedă și vanzare pentru
spațiile de tip ’apartament’.
b) Să se găsească pentru fiecare zonă și monedă, prețul total al ofertelor de
închiriere apartament și numărul ofertelor.

