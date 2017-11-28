Laddningstid och användbarhet
===============================

Urvalet för analysen är baserat på stora välbesökta webbplatser som jag själv ofta besöker. De fyra utvalda webbplatserna är supporterwebbplatsen <b>Svenskafans.com</b>, filmdatabase <b>imdb.com</b>, encyklopedin <b>wikipedia.org</b> och lokaltrafiken <b>skånetrafiken.se</b>. För varje webblats har jag valt tre sidor att analyser.

För att genomför analysen har jag använt mig av [Google PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/?hl=sv) och Google Chrome devtools network flik för att undersöka Laddningstid, antalet requests och sidans storlek. De optimeringsmöjligheter som Google PageSpeed nämner redovisas för varje sida, bokstaven inom parantes efter optimeringsmöjligheten visar om det är för desktop (D) eller mobile (M). Finns det ingen bokstav gäller optimeringsmöjligheten för både desktop och mobile.

Laddningstiden är avrundad till en decimal [här](https://docs.google.com/spreadsheets/d/1k00zjzSE4mo--Kr6HniUb04xIjm9S8OHT87aA5T0dcc/edit#gid=0) finns ett kalkylark över de olika uppmätta laddningstiderna.

Mättningarna för analysen genomförden 24/11 2017.

Jag har genomfört analysen på egen hand så det finns inga andra gruppmedlemmar.

##Svenskafans

[FIGURE src="image/svenskafans.png?h=50%&w=50%" class="center" caption="Startsidan svenskafans.com"]

####Startsida
[Länk](https://www.svenskafans.com/)

| Mätning       | Resultat      |
| ------------- |:-------------:|
| Mobile speed  | 53/100        |
| Desktop speed | 59/100        |
| Laddningstid  | 16.7 s       |
| Resurser      | 581           |
| Storlek       | 7,8 MB        |

PageSpeed nämner dessa optimeringsmöjligheter:

* Optimera bilder
* Utnyttja cachelagring i webbläsare
* Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
* Aktivera komprimering
* Förminska JavaScript
* Förminska CSS

####Malmö FF
[Länk](https://www.svenskafans.com/fotboll/mff/)

| Mätning       | Resultat      |
| ------------- |:-------------:|
| Mobile speed  | 39/100        |
| Desktop speed | 48/100        |
| Laddningstid  | 18,9 s       |
| Resurser      | 201           |
| Storlek       | 5,2 MB        |

PageSpeed nämner dessa optimeringsmöjligheter:

* Optimera bilder
* Utnyttja cachelagring i webbläsare
* Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
* Aktivera komprimering
* Förminska JavaScript
* Förminska CSS

####West Ham United
[Länk](https://www.svenskafans.com/england/westhamutd/)

| Mätning       | Resultat      |
| ------------- |:-------------:|
| Mobile speed  | 41/100        |
| Desktop speed | 50/100        |
| Laddningstid  | 17.5 s        |
| Resurser      | 217           |
| Storlek       | 4,6 MB        |

PageSpeed nämner dessa optimeringsmöjligheter:

* Optimera bilder
* Utnyttja cachelagring i webbläsare
* Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
* Aktivera komprimering
* Förminska JavaScript
* Förminska CSS
* Förminska HTML (D)

####Förbättringar
Svenskafans har en del arbete att göra för att sänka laddningstiderna och öka betydet i Google PageSpeed Insights. Främst bör de optimera sina bilder och minifiera sin JavaScript- och CSS-kod.

##IMDB

[FIGURE src="image/imdb.png?h=50%&w=50%" class="center" caption="Startsidan imdb.com"]

####Startsidan
[Länk](http://www.imdb.com/)

| Mätning       | Resultat      |
| ------------- |:-------------:|
| Mobile speed  | 58/100        |
| Desktop speed | 70/100        |
| Laddningstid  | 7.7 s         |
| Resurser      | 204           |
| Storlek       | 2,8 MB        |

PageSpeed nämner dessa optimeringsmöjligheter:

* Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
* Utnyttja cachelagring i webbläsare
* Minska svarstiden från servern
* Optimera bilder

####Top news
[Länk](http://www.imdb.com/news/top?ref_=nv_nw_tp_1)

| Mätning       | Resultat      |
| ------------- |:-------------:|
| Mobile speed  | 66/100        |
| Desktop speed | 81/100        |
| Laddningstid  | 4.4 s         |
| Resurser      | 50            |
| Storlek       | 759 kb        |

PageSpeed nämner dessa optimeringsmöjligheter:

* Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
* Prioritera synligt innehåll
* Förminska JavaScript
* Utnyttja cachelagring i webbläsare
* Optimera bilder
* Förminska HTML (M)
* Minska svarstiden från servern (D)

####Release calendar
[Länk](http://www.imdb.com/calendar/?ref_=nv_mv_cal_5)

| Mätning       | Resultat      |
| ------------- |:-------------:|
| Mobile speed  | 77/100        |
| Desktop speed | 91/100        |
| Laddningstid  | 2.7 s         |
| Resurser      | 37            |
| Storlek       | 482 kb        |

PageSpeed nämner dessa optimeringsmöjligheter:

* Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
* Optimera bilder
* Förminska JavaScript
* Förminska CSS

####Förbättringar
Även Imdb bör optimera hanteringen av bilder. Svarstiden från servern är lång och kan förbättras för att minska laddningstiden.

##Wikipedia

[FIGURE src="image/wikipedia.png?h=50%&w=50%" class="center" caption="Startsidan wikipedia.org"]

####Startsidan
[Länk](https://sv.wikipedia.org)

| Mätning       | Resultat      |
| ------------- |:-------------:|
| Mobile speed  | 69/100        |
| Desktop speed | 76/100        |
| Laddningstid  | 2.9 s         |
| Resurser      | 56            |
| Storlek       | 1,23 MB       |

PageSpeed nämner dessa optimeringsmöjligheter:

* Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
* Utnyttja cachelagring i webbläsare
* Optimera bilder (D)
* Förminska JavaScript (D)


####Blekinge tekniska högskola
[Länk](https://sv.wikipedia.org/wiki/Blekinge_tekniska_h%C3%B6gskola)

| Mätning       | Resultat      |
| ------------- |:-------------:|
| Mobile speed  | 88/100        |
| Desktop speed | 88/100        |
| Laddningstid  | 2.1 s         |
| Resurser      | 33            |
| Storlek       | 1,74 MB       |

PageSpeed nämner dessa optimeringsmöjligheter:

* Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
* Utnyttja cachelagring i webbläsare
* Förminska JavaScript (D)

####Malmö FF
[Länk](https://sv.wikipedia.org/wiki/Malm%C3%B6_FF)

| Mätning       | Resultat      |
| ------------- |:-------------:|
| Mobile speed  | 81/100        |
| Desktop speed | 70/100        |
| Laddningstid  | 4.6 s         |
| Resurser      | 94            |
| Storlek       | 2,39 MB       |

PageSpeed nämner dessa optimeringsmöjligheter:

* Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
* Utnyttja cachelagring i webbläsare
* Optimera bilder (D)
* Förminska JavaScript (D)

####Förbättringar
För att snabba på laddningstiderna kan wikipediaändra om koden så att script och style som blockerar renderingen läses asynkront. Webbplatsens bilder bör optimeras. Med tanke på att innehållet på wikipedia är skapat av användarna så är det kanske svårt att lösa en del av de optimeringsmöjligheter som Google PageSpeed Insights ger.

##Skånetrafiken

[FIGURE src="image/skanetrafiken.png?h=50%&w=50%" class="center" caption="Startsidan skanetrafiken.se"]

####Startsidan
[Länk](https://www.skanetrafiken.se/)

| Mätning       | Resultat      |
| ------------- |:-------------:|
| Mobile speed  | 51/100        |
| Desktop speed | 59/100        |
| Laddningstid  | 3.9 s         |
| Resurser      | 60            |
| Storlek       | 2,76 MB       |

PageSpeed nämner dessa optimeringsmöjligheter:

* Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
* Utnyttja cachelagring i webbläsare
* Optimera bilder
* Förminska JavaScript
* Aktivera komprimering
* Minska svarstiden från servern
* Förminska HTML

####Sök resa
[Länk](https://www.skanetrafiken.se/sok-resa/)

| Mätning       | Resultat      |
| ------------- |:-------------:|
| Mobile speed  | 56/100        |
| Desktop speed | 68/100        |
| Laddningstid  | 3.4 s         |
| Resurser      | 47            |
| Storlek       |2,38 MB        |

PageSpeed nämner dessa optimeringsmöjligheter:

* Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
* Utnyttja cachelagring i webbläsare
* Optimera bilder
* Förminska JavaScript
* Aktivera komprimering
* Minska svarstiden från servern (M)
* Förminska HTML

####Ersättning vid försening
[Länk](https://www.skanetrafiken.se/kundservice/ersattning/)

| Mätning       | Resultat      |
| ------------- |:-------------:|
| Mobile speed  | 53/100        |
| Desktop speed | 67/100        |
| Laddningstid  | 5.0 s         |
| Resurser      | 45            |
| Storlek       | 1,02 MB       |

PageSpeed nämner dessa optimeringsmöjligheter:

* Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
* Utnyttja cachelagring i webbläsare
* Optimera bilder
* Förminska JavaScript
* Aktivera komprimering
* Minska svarstiden från servern (M)
* Förminska HTML

####Förbättringar
Precis som de andra webbplatserna i analysen bör skånetrafiken optimera sina bilder. Minifiering av JavaScript och även HTML hade hjälpt till att minska laddningstiderna. Svarstiden från servern till mobile devices går långsamt och bidrar till laddningstiden.

##Sammanfattning
Den vanligast förekommande optimeringsmöjligheten hos de sidor som jag har testat är Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten. Meddelandet betyder att det finns JavaScript- och CSS-kod på sidan som blockerar och gör att renderingen måste vänta medan de blir inlästa. Lösningen kan vara att läsa in koden asynkront eller infoga de viktigaste CSS och JavaScript delarna i HTML-koden. En annan optimeringsmöjlighet som förekommer på de flesta av de analyserade sidorna är optimering av bilder. För att optimera bilderna bör de komprimeras och formateras för att minska sidans laddningstid.

För flera av sidorna angavs optimeringsmöjligheterna förminska JavaScript, CSS eller HTML. Genom att minifiera koderna blir hämtningen, tolkningen och körningen av dem snabbare. En annan vanligt förekommande optimeringsmöjlighet är att utnyttja cachelagringen i webbläsaren. För att korta ned laddningstiden bör tidigare hämtade resurser läsas in från hårddisken istället för genom nätverket.

De testade sidorna från svenskafans.com hade längst laddningstid, det var även de sidorna som hade störst antal resurser som bilder och script. Wikipedia som är en ganska ren sida med få bilder och övriga resurser och mycket text har en kort laddningstid. För att korta ned sin laddningstid och på så sätt öka användbarheten bör webbplatserna arbeta mer med sina bilder och minifieringen av koden.

####Rangordning
Rangordningen är baserad på webbplatsernas laddningstid och resultatet i Google PageSpeed Insights.

<br>1. Wikipedia.org
<br>2.  Imdb.com
<br>3.  Skånetrafiken.se
<br>4.  Svenskafans.com

####Gränsvärde för laddningstid
Min personliga gräns för vad jag tycker är acceptabel laddningstid är nog ganska hög och går vid cirka åtta sekunder. Laddningstiden som jag har mätt upp för svenskafans sidor är allt för hög för min smak. Jag anser dock att den acceptabla laddningstiden beror på webbplatsens syfte och innehåll. Det är acceptabelt att det tar längre tid att ladda imdb och svenskafans än wikipedia eftersom dem innehåller fler grafiska element och script.
