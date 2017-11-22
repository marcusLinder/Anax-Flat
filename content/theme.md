Teman
===============================

Genom [theme-selector](theme-selector) kan man byta tema på sidan. Här presenteras de teman som finns.

##Base

Ett enkelt bastema som ligger till grund för de andra teman. Temat definierar egenskaper för övriga teman. Bastemat har en sparsam färgpalett och använder bara svart och vitt, detta för att temat inte är tänkt att användas mer än till att definiera CSS-reglerna för kommande teman.

<table style="border-spacing: 4px; border-collapse: separate">
<tr>
<td style="height: 50px; width: 50px; background-color: #000; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #fff; border: 2px solid black;">
</tr>
</table>

##Light

Ett ljust tema som inte har så stora förändringar från bastemat. Vit bakgrundsfärg på stora delar av sidan och en grå bakgrundsfärg på headern, footern och i hamburgermenyn. Texten har en grå nyans för att bli ljusare och passa in i sidans tema.

<table style="border-spacing: 4px; border-collapse: separate">
<tr>
<td style="height: 50px; width: 50px; background-color: #fff; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #FAFAFA; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #6E6E6E; border: 2px solid black;">
</tr>
</table>

##Color

Temat bygget på light och använder en grå skala. Bakgrunden (outer-wraper) har en brungrå nyans. Den gåra nyansen som var bakgrund till header, footer och hamburgermenyn i light temat har flyttat ner och är bakgrundsfärg till innehållet (inner-wraper). En mörkare grå nyans har ersatt den ljusare i header, footer och hamburgermenyn för att tydligare markera dessa. Textfärgen är svart för att synas bättre. Som accentfärg har jag använt en grön nyans som kallas 'seafoam'. Accentfärgen används för att visa markerat val i menyn och på hamburgermenyn.

<table style="border-spacing: 4px; border-collapse: separate">
<tr>
<td style="height: 50px; width: 50px; background-color: #999966; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #ccccb3; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #FAFAFA; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #000; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #a0d6b4; border: 2px solid black;">
</tr>
</table>

##Dark

Ett mycket mörkt tema. Bakgrundsfärgen på inner-wrap, outer-wrap, header och footer är svart. Brödtexten och footern har samma gråa nyans som i light temat, detta för att ge en mer behaglig känsla för ögat än om färgen var vit vilket kan bli rätt så skarpt på den svarta bakgrunden. Texten i headern och knappen för hamburgermenyn har en grön nyans, detta för att få en klassisk kodkänsla med grönt på svart. En röd färg används som accentfärg för att markera valda allternativ i menyn och när man hoovrar över ett menyallternativ eller länk i footern. Texten på det aktiva menyallternativet blir vit för att synas tydligt på den röda bakgrunden.

<table style="border-spacing: 4px; border-collapse: separate">
<tr>
<td style="height: 50px; width: 50px; background-color: #000; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #6E6E6E; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #32CD32; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #bc0b17; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #fff; border: 2px solid black;">
</tr>
</table>

##Colorful

Colorful har ett triadiskt färgschema med nyanser av blått, gult och rött. Den blåa nyansen används som brakgrundsfärg på hela sidan förutom header, breadcrumb och footer som har en gul nyans. Knappen för hamburgermenyn, brödtexten och texten i footerna har en röd nyans medan texten i header och hamburgermenyn har den blåa nyansen som används som bakgrundsfärg på sidan. För att markera aktivt menyval används den blå färgen och texten blir röd. Colorful är ett mycket färgglatt tema som nog hade passat bra till en webbplats som har barn som målgrupp.

<table style="border-spacing: 4px; border-collapse: separate">
<tr>
<td style="height: 50px; width: 50px; background-color: #0392CE; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #c4071a; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #FFFE34; border: 2px solid black;">
</tr>
</table>

##Typography

Det typografiska temat är baserat på light temat och återanvänder färgerna från det, då det är typografin som står i fokus. För rubrikerna på sidan (h1-h6) används typsnittet '<b>Courgette</b>' som ger en känsla av skrivstil men ändå är väldigt tydlig och läsbar. Brödtexten har typsnittet '<b>Arial</b>' eftersom den är lättläst och tydligt sticker ut från rubrikerna. Även headern fick nya typsnitt, i menyn och hamburgermenyn används '<b>Noto serif</b>' som är en väldigt tydlig och enkel font. Sidans titel (Me-sida) fick typsnittet '<b>Lobster</b>' för att sticka ut från övriga rubriker men ändå ha skrivstilskänslan.

På listorna i sidomenyerna i rapport och analys ändrades list stilen till 'circle'. Breadcrumb fick en mindre font-size för att markera att det är ett stycke för sig. Även stilen på breadcrumb förändrades då den visas på en rad med list-style-typ none och en '>' mellan nivåerna.   

<table style="border-spacing: 4px; border-collapse: separate">
<tr>
<td style="height: 50px; width: 50px; background-color: #fff; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #FAFAFA; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #6E6E6E; border: 2px solid black;">
</tr>
</table>

##Default
Default temat är blandning av temat color och temat typografi. Det återanvänder färgerna från 'color' och de typografiska elementen från 'typography'. Temat används som standard på webbplatsen.

<table style="border-spacing: 4px; border-collapse: separate">
<tr>
<td style="height: 50px; width: 50px; background-color: #999966; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #ccccb3; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #FAFAFA; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #000; border: 2px solid black;">
<td style="height: 50px; width: 50px; background-color: #a0d6b4; border: 2px solid black;">
</tr>
</table>
