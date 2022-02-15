# Svg Generator

le but est de réaliser un programme qui va générer un SVG avec un nombre infini de formes :

- dessiner des rectangles
- dessiner des carrés
- dessiner des élipses
- dessiner des cercles


## notions 

- les notions abordées sur l'introduction
- l'héritage
- l'abstraction


## conception

### définir le SVG

    réaliser un poc (proof of concept): un fichier html contenant un svg
    
    <svg 
    xmlns="http://www.w3.org/2000/svg" 
    xmlns:xlink="http://www.w3.org/1999/xlink" 
    width="800px" 
    height="400px" 
    style="background-color:red;">
    <!- Rectangle ->
    <rect x="10" y="20" width="100" height="50" fill="black" stroke="white" stroke-width="2" opacity="0.5" />
    <!- Ellipse ->
    <ellipse cx="50" cy="200" rx="200" ry="300" fill="black" stroke="white" stroke-width="2" opacity="0.5"  />
    </svg>
    
    - définir les propriétés d'un SVG
        width
        height
        background-color
        
    - définir la syntaxe pour chaque formes (voir plus haut)
    - définir les propriétés d'une forme
        propriétés communes :
        position : [x, y]
        fill : couleur de fond
        stroke : couleur du contour
        stroke-width : épaisseur du contour
        opacity : opacité
        
        Rectangle :
        width : largeur
        height : hauteur
        
        Carré : 
        cas particulier : width = height
        
        Ellipse : 
        rx : rayon sur l'axe des x
        ry : rayon sur l'axe des y
        
        Cercle :
        cas particulier : rx = ry
        
    
    
### définir nos classes et nos propriétés

#### class Svg
        propriétés :
            private int width
            private int height
            private string bckColor
            
#### class Shape
        propriétés :
            private array position
            private string fill
            private string stroke
            private int stroke-width
            private float opacity
            
            Remarque : attention à la visibilité des propriétés !
            
#### class Rectangle (extends Shape)
            propriétés :
                private int width
                private int height
                
            Remarque : attention à la visibilité des propriétés !
            
#### class Square (extends Rectangle)

            contrainte : width = height
            
#### class Ellipse (extends Shape)
            propriétés :
                private int rx
                private int ry
                
             Remarque : attention à la visibilité des propriétés !
             
#### class Circle (extends Ellipse)

            contrainte : rx = ry

### définir les actions (méthodes)

        -> profiter du constructeur pour initialiser les propriété.
        
        dans la class Svg rajouter une propriété : un tableau pour stocker l'ensemble des formes
        
        private array listShapes = [];
        
        LES METHODES
        
        dans Svg :
        
        addShape() -> ajouter dans le tableau listShapes un objet de type Shape
        
        renderer() -> construire l'ensemble des markup HTML des formes, 
        rajouter la balise SVG et retourner l"ensemble du code html
        
        pour chaque forme (Shape)
        
        draw() -> renverra le markup HTML de la forme (Shape) : soit un rectangle, un carré, une ellipse ou un cercle.

## Méthodologie :

- d'abord s'occuper uniquement d'un rectangle dans utiliser l'héritage avec Shape
- ensuite factoriser le code pour isoler les propriétés communes dans Shape

## la mise en pratique en php

## scénario d'exemple :

- je veux dessiner un SVG de 800px par 400px
- dedans je veux dessiner un rectangle rouge
- dedans je veux rajouter un cercle bleu
- .....