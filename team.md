---
title: PAThs’ team
permalink: /team
layout: default
staff:
  - name: Prof. Dr. Paola Buzi
    image: paola-buzi
    position: Principal Investigator
    email: paola.buzi@uniroma1.it
    tags:
      - Philology
      - Codicology
      - Coptic manuscript tradition
      - Coptic literature
      - Coptic paratexts
      - Late Antique Egyptian archaeology

  - name: Dr. Angela Bernardo
    image: angela-bernardo
    position: Project coordinator with technical tasks (from 1/7/2017)
    email: angela.bernardo@uniroma1.it
    tags:
      - Technical coordination
      - Organization of workshops and conferences
      - Support for the financial aspects of the project
      - Coptic literary production of contemporary Copts

  - name: Dr. Francesco Berno
    image: francesco-berno
    position: Researcher (Junior Staff) (from 1/10/2017)
    email: francesco.berno@uniroma1.it
    tags:
      - Early Egyptian Christianity
      - Coptic literature

  - name: Dr. Julian Bogdani
    image: julian-bogdani
    position: Researcher (Senior Staff) (from 1/11/2016)
    email: julian.bogdani@uniroma1.it
    tags:
      - Archaeology
      - Digital humanities
      - GIS and webGIS
      - Databases

  - name: Dr. Nathan Carlig
    image: nathan-carlig
    position: Researcher (Senior Staff) (from 1/11/2016)
    email: nathan.carlig@uniroma1.it
    tags:
      - Coptic codicology
      - Coptic manuscript tradition

  - name: Dr. Angelo Colonna
    image: angelo-colonna
    position: Researcher (Junior Staff) (from 1/10/2017)
    email: angelo.colonna@uniroma1.it
    tags:
    - Egyptian archaeology
    - Philology

  - name: Dr. Agostino Soldati
    image: agostino-soldati
    position: Researcher (Senior Staff) (from 1/11/2016)
    email: agostino.soldati@uniroma1.it 
    tags:
    - Philology
    - Coptic manuscript tradition
    - Coptic literature
    - Paratexts 

  - name: Dr. Francesco Valerio
    image: francesco-valerio
    position: Researcher (Junior Staff) (from 1/10/2017)
    email: francesco.valerio@uniroma1.it
    tags:
    - Philology
    - Codicology

  - name: Tea Ghigo, MA
    image: tea-ghigo
    position: PhD candidate (from 1/11/2017)
    email: tea.ghigo@uniroma1.it
    tags:
    - Archaeometric analysis of the inks


affiliated:
  - name: Prof. Dr. Alberto Camplani
    position: Early Christianity, Early Christian Egypt, Coptic Studies, Syriac Studies

  - name: Prof. Dr. Gianfranco Agosti
    position: Greek Philology, Late Antiquity

  - name: Prof. Dr. Maria Chiara Giorda (former team member of “PAThs”)
    position: Monasticism, Coptic Literature

  - name: Dr. Lanfranco Fabriani
    position: Digital humanities, Coptic encoding matters

  - name: Dr. Ilaria Rossetti (former team member of “PAThs”)
    position: Egyptian archaeology, G.I.S.

  - name: Dr. Richard Westall
    position: Roman Egypt

  - name: Dr. Francesca Iannarilli
    position: Egyptology

phd:
  - name: Marta Addessi
    position: PhD student in Egyptology, Rome

  - name: Leah Mascia
    position: PhD student in Egyptology and Coptic Studies, Hamburg

  - name: Anna Salsano
    position: PhD student in Egyptology, Rome

  - name: Valeria Tappeti
    position: PhD student in Egyptology, Rome

students:
  - Debora Casini
  - Domizia D'Erasmo
  - Elisabetta Falduto
  - Ilaria Lely
  - Laura Restelli
---

<div class="row my-5">

{% for item in page.staff %}
  <div class="col-12 col-md-4 col-lg-3 my-1">

    <div class="card">
      <img src="{{"/images/team/" | append: item.image | append: ".jpg" | relative_url }}" class="card-img-top p-5" alt="{{ item.name }}" />
      <div class="card-body">
        <h5 class="card-title">{{ item.title }} {{ item.name }}</h5>
        <p class="card-text text-secondary">
          {{ item.position }}
        </p>
        <div style="font-size: .9rem" class="text-secondary">
          <strong>Key aspects of activity:</strong><br>
          <li>{{ item.tags | join: "</li><li>" }}</li>
        </div>
      </div>
    </div>
  </div>

  {% if item.image == 'paola-buzi' %}
  </div><div class="row">
  {% endif %}

{% endfor %}
</div>

<div class="my-5 py-3 border-top border-bottom lead">
Although not formally part of the staff of "PAThs", the following scholars, PhD candidates and students, because of their research interests or training activities, strictly collaborate with the project.
</div>

## Affiliated collaborators
{% for item in page.affiliated %}
- **{{ item.name }}**  
  {{ item.position }}
{% endfor %}


## Phd Students
  {% for item in page.phd %}
- **{{ item.name }}**
  {{ item.position }}
{% endfor %}

## Students
{% for item in page.students %}
- **{{ item }}**
{% endfor %}
