<?php


// EJERCICIO 1 realiza un programa que tome 2 numeros y muestre la suma,  resta multiplicacion y division de esos 2 numeros

$num1 = 15;
$num2= 2;

echo $num1 + $num2, '<br>';
echo $num1 - $num2, '<br>';
echo $num1 * $num2, '<br>';
echo $num1 / $num2, '<br>';


// EJERCICIO 2: escribe un programa que calcule el área de un rectangulo. Se debe ingresar la base y la altura del rectangulo 

$ancho = 10; 
$longitud = 25;
$mensaje = 'El área del rectangulo es: ';

echo $mensaje .= $longitud * $ancho , '<br>';


// EJERCICIO 3: Crea un programa que tome un número ingresado y le sume 10 utilizando el operador de asignación adecuados 


$numero = 15;


echo $numero++, '<br>';
echo $numero++, '<br>';
echo $numero++, '<br>';
echo $numero++, '<br>';
echo $numero++, '<br>';
echo $numero++, '<br>';
echo $numero++, '<br>';
echo $numero++, '<br>';
echo $numero++, '<br>';
echo $numero++, '<br>';
echo $numero++, '<br>';



// EJERCICIO 4: Haz un programa que tome dos números ingresados y realice las operaciones de suma, resta, multi, division, asignando el resultado a una variable diferente en cada operación 

$numero1 = 5;
$numero2 = 8;
// el valor de esta suma se guarda en la variable $suma
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$division = $numero1 / $numero2;
$multipliacion = $numero1 * $numero2;



echo $multipliacion, '<br>' ;




//EJERCICIO 5: Crea un programa que compare 2 números y muestre si el primero es mayor, menor o igual que el segundo 


echo $numero1 <= $numero2, '<br>';
echo $numero1 >= $numero2, '<br>';

//EJERCICIO 6: escribe un programa que determine si un numero es par o impar 
$modulo1 = $numero1 % 2;
$modulo2 = $numero2 % 2;

if ($modulo1 != 1){

echo $numero1 .= ' Es par', '<br>';

}else {

    echo  $numero1 .= ' Es impar', '<br>';
};
if ($modulo2 != 1){

    echo $numero2 .= ' Es par', '<br>';
    
    }else {
    
        echo $numero2 .= ' Es impar', '<br>';
    };
    
    
    ?>

?>

