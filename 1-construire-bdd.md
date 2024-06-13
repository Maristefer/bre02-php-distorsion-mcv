# Construction de la base de données

## Tables

### categories

- id
- name

### messages

- id
- content
- room
- datetime

### rooms

- id
- name
- category


## Les relations

la colonne category de la table rooms pointe vers l'id de la table category

la colonne room de la table messages pointe vers l'id de la table room
