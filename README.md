# iptc-web-editor
Page Web permettant d'éditer les métadonnées IPTC des images
## Production
Le volume `user-data` contiendra toutes les donnée utilisateur.
Vous pouvez le créer par exemple avec la commande suivante : 
```bash
docker volume create user-data
```

Commande à éxécutée pour lancer la production : 
```bash
docker run -v user-data:/data -p 8088:80 $IMG_NAME
```
*Vous pouvez bien sur adapter cette documentation en changeant par exemple l'emplacement du point de montage `/data` à l'emplcameent de votre choix ou le port d'écoute.*
