<?php
// function problem($x){
//   if (is_numeric($x)) {
//       return $x * 50 + 6;
//   } else {
//       return "Error";
//   }

// }

// function even_or_odd(int $n): string
// {
//     if ($n % 2 == 0) {
//         return "Even";
//     } else {
//         return "Odd";
//     }
// }

// function boolToWord($bool)
// {
//     if ($bool) {
//         return "Yes";
//     } else {
//         return "No";
//     }

//     return $bool;
// }

// function smallestInteger ($arr) {
//     return min($arr);
// }

$name = "John";
function greet($name) {
    return "Hello, ${name} how are you doing today?";
}
echo greet($name);
