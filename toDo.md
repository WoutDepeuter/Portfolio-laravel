# Laravel Project To-Do List

## Project Planning
- [ ] Kies een onderwerp voor de website.
- [ ] Begrijp en plan hoe je dynamische gegevens gaat ophalen en wegschrijven naar een database.
- [ ] Zoek en gebruik informatiebronnen indien nodig, met correcte bronvermelding.

---

## Functionele Minimumvereisten

### Login Systeem
- [ ] Maak een inlogsysteem:
  - [ ] Gebruikers kunnen inloggen.
  - [ ] Gebruikers kunnen een nieuwe account aanmaken.
  - [ ] Voeg rollen toe (gewone gebruiker of admin).
  - [ ] Alleen admins kunnen:
    - [ ] Gebruikers verheffen tot admin of adminrechten afnemen.
    - [ ] Manueel een nieuwe gebruiker aanmaken en instellen als admin of gewone gebruiker.

### Profielpagina
- [ ] Zorg dat elke gebruiker een publieke profielpagina heeft:
  - [ ] Toegankelijk voor iedereen, ook niet-ingelogde bezoekers.
  - [ ] Een ingelogde gebruiker kan zijn/haar eigen gegevens aanpassen.
- [ ] Voeg minimaal de volgende velden toe:
  - [ ] Username.
  - [ ] Verjaardag.
  - [ ] Profielfoto (opgeslagen op de webserver).
  - [ ] "Over mij"-tekst.

### Laatste Nieuwtjes
- [ ] Admins kunnen nieuwsitems beheren (toevoegen, wijzigen, verwijderen).
- [ ] Bezoekers kunnen:
  - [ ] Een lijst van alle nieuwtjes bekijken.
  - [ ] Details van een nieuwsitem bekijken.
- [ ] Elk nieuwsitem bevat minimaal:
  - [ ] Titel.
  - [ ] Afbeelding (opgeslagen op de server).
  - [ ] Content.
  - [ ] Publicatiedatum.

### FAQ Pagina
- [ ] Creëer een FAQ-pagina:
  - [ ] Lijst vragen en antwoorden, gegroepeerd per categorie.
  - [ ] Admins kunnen categorieën en vraag/antwoorden beheren (toevoegen, wijzigen, verwijderen).
  - [ ] Bezoekers kunnen de FAQ bekijken.

### Contactpagina
- [ ] Maak een contactformulier:
  - [ ] Bezoekers kunnen een formulier invullen.
  - [ ] Bij verzending ontvangt de admin een e-mail met de inhoud van het formulier.

---

## Extra Features (Optioneel, Voor Hogere Score)
- [ ] Admins kunnen ingevulde contactformulieren bekijken en beantwoorden in een admin-panel.
- [ ] Gebruikers kunnen reacties achterlaten op nieuwtjes.
- [ ] Gebruikers kunnen:
  - [ ] Berichten posten op het profiel van anderen.
  - [ ] Privéberichten sturen naar anderen.
- [ ] Gebruikers kunnen vragen toevoegen aan de FAQ.
- [ ] Implementeer een basis forum.
- [ ] Voeg een online bestelsysteem toe.

---

## Technische Vereisten

### Views
- [ ] Gebruik minimaal twee layouts.
- [ ] Gebruik components waar logisch.
- [ ] Pas technieken uit de cursus toe:
  - [ ] Control structures.
  - [ ] XSS-protectie.
  - [ ] CSRF-protectie.
  - [ ] Client-side validatie.

### Routes
- [ ] Gebruik controller methods voor alle routes.
- [ ] Gebruik middleware waar nodig.
- [ ] Groepeer routes indien mogelijk.

### Controller
- [ ] Splits logica in controllers.
- [ ] Gebruik resource controllers voor CRUD-operaties.

### Models
- [ ] Gebruik Eloquent models per entiteit.
- [ ] Voeg relaties toe:
  - [ ] Minimaal één one-to-many-relatie.
  - [ ] Minimaal één many-to-many-relatie.

### Database
- [ ] Zorg dat `php artisan migrate:fresh --seed` succesvol werkt:
  - [ ] Database bevat alle benodigde basisdata.
- [ ] Database werkt correct met de `.env`-file.

### Authenticatie
- [ ] Implementeer standaard functionaliteiten:
  - [ ] Login/logout.
  - [ ] "Remember me".
  - [ ] Registratie.
  - [ ] Wachtwoord resetten bij vergeten wachtwoord.
- [ ] Voeg één default admin toe:
  - Username: `admin`
  - Email: `admin@ehb.be`
  - Password: `Password!321`

### Layout
- [ ] Zorg voor een duidelijke en professionele layout.

---

## GIT
- [x] Maak een publieke GitHub-repo.
- [x] Voeg `vendor` en `node_modules` toe aan `.gitignore`.
- [ ] Commit regelmatig en gebruik duidelijke commit messages.
- [ ] Voeg een `readme.md` toe:
  - [ ] Beschrijf stappen om het project te laten werken.
  - [ ] Voeg bronvermeldingen toe.
  - [ ] Vermeld andere belangrijke informatie.

---

## Inzenden
- [ ] Submit de link naar de GitHub-repo via Canvas.
- [ ] Zorg ervoor dat de repo publiek is of toegang verleent aan de docent.
