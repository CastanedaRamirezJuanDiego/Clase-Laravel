<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practica-00</title>
</head>
<body>
    <h1>clic derecho y ve la consola</h1>
    <script type='text/javascript'>
        var numericos =1;
        var texto = "Valor";
        var bol =true; //false
    
        var res = numericos +17;
        console.log('ITIC-51');
        console.log(texto + '=' + res );
    
        if (res >= 18){
    console.log ('Pepe es mayor de edad');
    var opc = 'M';
        }
    else {
        console.log('Pepe es menor de edad');
        var opc ='m';
    }
    
    switch (opc){
    case 'M': 
    console.log ('Pepe trabajo mas');
    break;
    
    case 'm':
        console.log('Pepe su mesada');
    break;
    
        default:
        console.log('Pepe desconoce su edad');
    break;
    }
    
    var uni = [1,2,3,]; // matriz de numeros
    var uni2 =['a','b','c']; // matriz de cadena 
    var bid = [[1,2,3],[4,5,6]]; // matriz bidimencional de numeros 
    var bid2 = [['a','b','c'],['d','e','f']]; // matriz bidimencional caracteres de cadena
    
    //recorre las matrices de uni 2 y uni
    for (var i=0; i<3; i++){
        console.log(uni[i]);
        console.log(uni2[i]);
    }
    
    //recorren las matrices bidimencionales 
    
    for (var y=0; y<2; y++){
        for (var x=0; x<3; x++){
            console.log (bid[y][x]);
            
        }
    }

    for (var y=0; y<2; y++){
        for (var x=0; x<3; x++){
          
            console.log (bid2[y][x]);
        }
    }
    var z=1;
    
    // imrpimer que cuando el valor z sea menor a 10 
    while (z<10)
    {
    console.log('error: ' +z);
    z++;
    }
    
    </script>
</body>
</html>