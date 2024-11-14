<?php
/*Los arrays indexados tienen un índices numéricos  */

$indexado = ["Lina", 22, "Salomé"];

/*Añadir elementos al indexado de esta forma se hara sin indicar el indice
 */

array_push($indexado, "pepe"); /*Se agrega nuevo elemento pero al final */
array_pop($indexado); /*Eliminar el ultimo elemnto de la lista */
$indexado[] = "Mirian"; /*Añade sin indicar el indice  */
$indexado[4] = "Juego"; /*Aqui añadimos indicando el indice  */
echo $indexado[3]; /*Aqui le indicamos el indice del elemento que queremos acceder */
