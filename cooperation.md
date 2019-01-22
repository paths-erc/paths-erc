---
title: Institutional and scientific collaborations
category: gen
permalink: cooperation
class: cooperation
items:
  - logo: logo_cmcl.png
    text: "Corpus dei Manoscritti Copti Letterari (Rome-Hamburg)"
    url: http://www.cmcl.it/

  - logo: logo_csmc.png
    text: "CSMC: Center for the Study of Manuscript Cultures (Hamburg)"
    url: https://www.manuscript-cultures.uni-hamburg.de/index_e.html

  - logo: logo_detcsot.png
    text: "Digital Edition and Translation of the Coptic-Sahidic Old Testament (Göttingen)"
    url: http://coptot.manuscriptroom.com/

  - logo: copticscriptorium.png
    text: "Coptic Scriptorium (University of the Pacific and  Georgetown University)"
    url: http://copticscriptorium.org/

  - logo: bam.png
    text: "Bundesanstalt für Materialforschung und -prüfung (BAM)"
    url: https://www.bam.de/Navigation/EN

  - logo: logoWawaEn.jpg
    text: "Polish Centre of Mediterranean Archaeology of the University of Warsaw (PCMA) (Warsaw, Poland)"
    url: http://www.pcma.uw.edu.pl/en/about-pcma/

  - logo: logo_betam.png
    text: "Beta maṣāḥǝft. Die Schriftkultur des christlichen Äthiopiens und Eritreas: Eine multimediale Forschungsumgebung (Hamburg)"
    url: https://www.betamasaheft.uni-hamburg.de/

  - logo: traces.png
    text: "TraCES: From Translation to Creation: Changes in Ethiopic Style and Lexicon from Late Antiquity to the Middle Ages (Hamburg)"
    url: https://www.traces.uni-hamburg.de

  - logo: logo_trismegistos.png
    text: "Trismegistos: An interdisciplinary portal of papirology and epigraphical resources (Leuven)"
    url: http://www.trismegistos.org/

  - logo: britishMuseum.png
    text: "The British Museum. Department of Ancient Egypt and Sudan (London) - Advisor for PAThs: dr. Elisabeth R. O’Connell"
    url: http://www.britishmuseum.org/about_us/departments/staff/ancient_egypt_and_sudan/elisabeth_oconnell.aspx

  - logo: logo_megizio.png
    text: "Museo Egizio (Turin)"
    url: http://www.museoegizio.it/

  - logo: logo_elamilano.png
    text: "Egyptological Library and Archives (Milan)"
    url: http://www.unimi.it/ENG/university/31835.htm

  - logo: logo_digilab.png
    text: "DigiLab (Rome) - Advisor for PAThs: dr. Lanfranco Fabriani"
    url: http://digilab.uniroma1.it/

  - logo: cobb_mississipi.png
    text: "Cobb Institute of Archaeology. College of Arts & Sciences, Mississippi State University"
    url: http://www.cobb.msstate.edu/



---
{% for item in page.items %}
- ![{{ item.text }}](images/partners/{{ item.logo }})[**{{item.text}}**]({{ item.url }})
{% endfor %}
