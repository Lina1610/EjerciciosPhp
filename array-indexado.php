<?php
$color = "Morado";

$arrayIndexado=array(1,2,"Hola","Mundo",$color);

for ($i = 0; $i < count($arrayIndexado); $i++):
/*echo $arrayIndexado[$i]."\n";*/
endfor;

/*Array asociativo  */

$array = array('Nombre'=> 'Lina', 'Color'=> 'Morado');

echo $array['Nombre'];

/*Entre los corchetes va la clave*/ 

/* El asociativo tiene clave y valor 
la diferencia entre los dos los arrays indexado y asociativo es 
en el indexado solo se usan numeros y no se puede cambiar el indice 
al contrario del asociativo es que se puede colocar cualquier palabra para acceder a los valores
*/