# Fält för att spara HSA-ID för personer/enheter i admin"

## Hur man använder Region Hallands plugin "region-halland-acf-page-personer-enheter"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-acf-page-personer-enheter".


## Licensmodell

Denna plugin använder licensmodell GPL-3.0. Du kan läsa mer om denna licensmodell via den medföljande filen:
```sh
LICENSE (https://github.com/RegionHalland/region-halland-acf-page-personer-enheter/blob/master/LICENSE)
```


## Användningsområde

Denna plugin skapar fält i admin för att spara HSA-ID för personer/enheter


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-acf-page-personer-enheter.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-acf-page-personer-enheter.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-acf-page-personer-enheter": "1.0.0"
},
```


## Hämta ut fältet "person" via Blade

```sh
<div>
  {{ get_region_halland_acf_page_personer_enheter_person() }}
</div>
```


## Hämta ut fältet "enhet" via Blade

```sh
<div>
  {{ get_region_halland_acf_page_personer_enheter_enhet() }}
</div>
```


## Versionhistorik

### 1.2.0
- Bifogat fil med licensmodell

### 1.1.0
- Uppdaterat med information om licensmodell
- Beskrivning i readme hur man hämtar ut respektive fält

### 1.0.1
- Ändrad beskrivning av enheter

### 1.0.0
- Första version
