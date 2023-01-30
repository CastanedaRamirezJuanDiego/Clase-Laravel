<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

</body>
@include('partials.nav')
<h1>Ejercicio mayor, menor , igual </h1>
<div id="output"></div>
<div id="output2"></div>
<div id="output3"></div>
<hr>
<div id="Resultado"></div>

<script type="text/javascript">
    var A = prompt("Ingresa A", "");
    var output = document.getElementById("output");
    output.innerHTML = ("Dato A : "+A);
    var B = prompt("Ingresa B", "");
    var output = document.getElementById("output2");
    output.innerHTML = ("Dato B : "+B);
    var C = prompt("Ingresa C", "");
    var output = document.getElementById("output3");
    output.innerHTML = ("Dato C: "+C);

    if ((A < B && A < C) && (B > A && B < C) && (C > A && C > B)) {

        
        var output = document.getElementById("Resultado");
        output.innerHTML = ("A(" + A + ") <  B(" + B + ") <  C(" + C + ")");

    } else if ((A < B && A < C) && (B > A && B > C) && (C > A && C < B)) {

     
        var output = document.getElementById("Resultado");
        output.innerHTML = ("A(" + A + ") <  C(" + C + ") < B(" + B + ")");

    } else if ((A > B && A < C) && (B < A && B < C) && (C > A && C > B)) {

     
        var output = document.getElementById("Resultado");
        output.innerHTML = ("B(" + B + ") <  A(" + A + ") <  C(" + C + ")");


    } else if ((A < B && A > C) && (B > A && B > C) && (C < A && C < B)) {

        var output = document.getElementById("Resultado");
        output.innerHTML = ("C(" + C + ") <  A(" + A + ") <  B(" + B + ")");


    } else if ((A > B && A > C) && (B < A && B > C) && (C < A && C < B)) {

      
        var output = document.getElementById("Resultado");
        output.innerHTML = ("C(" + C + ") <  B(" + B + ") < A(" + A + ")");

    } else if ((A > B && A > C) && (B < A && B < C) && (C < A && C > B)) {


        var output = document.getElementById("Resultado");
        output.innerHTML = ("B(" + B + ") <  C(" + C + ") <  A(" + A + ")");


    } else if ((A == B) && A < C) {

    
        var output = document.getElementById("Resultado");
        output.innerHTML = ("A(" + A + ") = B(" + B + ") <  C(" + C + ")");


    } else if ((A == B) && A > C) {

   
        var output = document.getElementById("Resultado");
        output.innerHTML = ("A(" + A + ") = B(" + B + ") >  C(" + C + ")");


    } else if ((A == C) && A < B) {

        var output = document.getElementById("Resultado");
        output.innerHTML = ("A(" + A + ") = C(" + C + ") <  B(" + B + ")");


    } else if ((A == C) && A > B) {

        var output = document.getElementById("Resultado");
        output.innerHTML = ("A(" + A + ") = C(" + C + ") >  B(" + B + ")");


    } else if ((B == C) && B > A) {

        var output = document.getElementById("Resultado");
        output.innerHTML = ("B(" + B + ") = C(" + C + ") >  A(" + A + ")")


    } else if ((B == C) && B < A) {

        var output = document.getElementById("Resultado");
        output.innerHTML = ("B(" + B + ") = C(" + C + ") <  A(" + A + ")");


    } else if (A == B && A == C && B == C) {

        var output = document.getElementById("Resultado");
        output.innerHTML = ("Todos los datos son iguales ");


    }


</script>



</html>