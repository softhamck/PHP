<?php
// Función para calcular la serie de Fibonacci
function fibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}


$fibonacci10 = fibonacci(10);
echo "Serie de Fibonacci (primeros 10 números): " . implode(', ', $fibonacci10);


/*el primer término es 0, el segundo término es 1, y cada término posterior es la suma de los dos anteriores.*/
?>

