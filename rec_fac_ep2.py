# Votre code Python ici
from PIL import Image, ImageDraw
import face_recognition
import numpy as np
import json
import random
import string
import os

with open("picture.json", "r") as f:

    # Appeler la liste du fichier JSON
    picture = json.load(f)
encodage_visage_connu=[]

for pic in picture:
    image_load=face_recognition.load_image_file(pic)
    encodage_visage_load=face_recognition.face_encodings(image_load)[0]
    encodage_visage_connu.append(encodage_visage_load)


#nom des utilisateurs
with open("nom_visage_connu.json", "r") as f:

    # Appeler la liste du fichier JSON
    nom_visage_connu = json.load(f)

# Spécifiez le chemin du dossier contenant les images
dossier_images = 'img'

# Liste tous les fichiers du dossier
fichiers_dossier = os.listdir(dossier_images)

chemin_fichier_recent = os.path.join(dossier_images, max(fichiers_dossier, key=lambda fichier: os.path.getctime(os.path.join(dossier_images, fichier))))
# Charger une image avec un visage inconnu
image_inconnu = face_recognition.load_image_file(chemin_fichier_recent)

# Trouver tous les visages et encodages de visage dans l'image inconnue
emp_visage_inconnu = face_recognition.face_locations(image_inconnu)
encodage_visage_inconnu = face_recognition.face_encodings(image_inconnu, emp_visage_inconnu)

image_pil = Image.fromarray(image_inconnu)
draw = ImageDraw.Draw(image_pil)
nom_visage_connu_tempo=[]
encodage_visage_connu_tempo=[]
chemins_images = []  # Liste pour stocker les nouveaux chemins d'images créés

# Traverser chaque visage trouve dans l'image inconnue
for (haut, droite, bas, gauche), encodage_visage in zip(emp_visage_inconnu, encodage_visage_inconnu):
    # Voir si le visage correspond au visage connu
    corresp = face_recognition.compare_faces(encodage_visage_connu, encodage_visage)
    random_string = ''.join(random.choices(string.ascii_letters + string.digits, k=5))
    if not os.path.exists("gallery"):
        os.mkdir("gallery")
    # [True, False]
    if not any(corresp):
        nom = ''.join(random.choices(string.ascii_letters + string.digits, k=5))
        face_cropped = image_inconnu[haut:bas, gauche:droite]
        nom_visage_connu_tempo.append(nom)
        name_save_image="analyze/"+str(nom)+".jpg"
        new_pil = Image.fromarray(face_cropped)
        new_pil.save(name_save_image)
        picture.append(name_save_image)

        os.mkdir(f"gallery/{nom}")
    else:

        # Ou a la place, utilisez le visage connu avec la plus petite distance par rapport au nouveau visage
        distances_visages = face_recognition.face_distance(encodage_visage_connu, encodage_visage)
        meilleur_indice = np.argmin(distances_visages)
        if corresp[meilleur_indice]:
            nom = nom_visage_connu[meilleur_indice]
    
    # Dessinez une boite autour du visage a l'aide du module Pillow
    draw.rectangle(((gauche, haut), (droite, bas)), outline=(0, 0, 255))
    # Dessinez une etiquette avec un nom sous le visage
    draw.text((gauche + 6, bas - 50 - 5), nom, fill=(255, 255, 255, 255))
    nom_fichier = f"known/{nom}_{random_string}.jpg"
    chemins_images.append(nom_fichier)
    image_pil.save(nom_fichier)
    image_pil.save(f"gallery/{nom}/{nom}_{random_string}.jpg")


for nom in nom_visage_connu_tempo:
    nom_visage_connu.append(nom)

# Sauvegarder la liste des noms de visages connus dans le fichier JSON
with open("nom_visage_connu.json", "w") as f:
    json.dump(nom_visage_connu, f)

# Ajouter les nouveaux chemins d'images à la liste existante (s'il y en a une)
if os.path.exists("nouveaux_chemins_images.json"):
    with open("nouveaux_chemins_images.json", "r") as f:
        anciens_chemins_images = json.load(f)
    chemins_images.extend(anciens_chemins_images)

# Sauvegarder la liste des chemins d'images dans le fichier JSON
with open("nouveaux_chemins_images.json", "w") as f:
    json.dump(chemins_images, f)

# Sauvegarder la liste des images dans le fichier JSON
with open("picture.json", "w") as f:
    json.dump(picture, f)

# Afficher l'image resultante
# image_pil.show()

# Au lieu de print(json.dumps(chemins_images)), renvoyez la liste complète des chemins d'images connus en JSON
print(json.dumps(chemins_images))