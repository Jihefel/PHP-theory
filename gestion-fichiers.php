<?php 

// Ouvrir un fichier
// fopen(filename, mode)

// mode : r (read), w (write), a (append), x (create), r+ (read and write), w+ (write and read), a+ (append and read), x+ (create and read), c+ (create and read) ...

// w : Ecraser le contenu du fichier

// fread() : Lire le contenu d'un fichier, et le nombre d'octets du fichier qui doivent être lus et le retourner sous forme de chaine de caractère. filesize() : Obtenir la taille d'un fichier

$file = fopen('file.txt', 'r');
echo "\n";
echo fread($file, filesize('file.txt'));
echo "\n";
fclose($file);
// fclose() : Fermer un fichier après avoir lu son contenu

// fgets() : Lire une ligne d'un fichier, et retourner la ligne sous forme de chaine de caractère.
echo "1er appel : " . fgets($file) . "<br />";
// lire la deuxième ligne d'un fichier
echo "2eme appel : " . fgets($file) . "<br />";

// fgetc() : Lire un caractère d'un fichier, et retourner le caractère sous forme de chaine de caractère (espace compris).
echo "1er appel : " . fgetc($file) . "<br />";

// file_put_contents() : Ecrire dans un fichier => consiste a utiliser fopen(), fwrite() et fclose().
//  fopen() : Ouvrir un fichier ou le creer s'il n'existe pas et fwrite() : Ecrire dans un fichier

// Ecrase le fichier
file_put_contents('file.txt', 'Je suis un fichier texte modifié par PHP.');

// Pour ajouter :
file_put_contents('file.txt', "\n Je suis un fichier texte modifié par PHP.", FILE_APPEND);

fopen('file2.txt', 'c+');

// fwrite() = si plusiers fois appelés, les ajouter à la suite. si une fois appelé, se met au début du fichier. Pour éviter cela, utiliser la fonction fseek()
// fseek($file, nbOctet, SEEK_CUR) : Positionner le pointeur de lecture d'un fichier.