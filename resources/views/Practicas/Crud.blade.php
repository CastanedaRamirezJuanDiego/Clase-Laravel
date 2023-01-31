<!DOCTYPE html>
<head>

<title>Datos</title>
<link rel="stylesheet" href="{{ asset('estilos/Crud.css') }}">
<script src="/js/Crud.js" defer></script>
</head>

<body>
    <table>
        <tr>
            <td>
            <form autocomplete="off" onsubmit="onFormSubmit()">
                    <div>
                        <label for="Id">Id</label>
                        <input type="number" name="Id" id="Id" required>
                    </div>
                    <div>
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="Nombre" id="Nombre" required>
                    </div>
                    <div>
                        <label for="Matricula">Matricula</label>
                        <input type="Number" name="Matricula" id="Matricula" required>
                    </div>
                    <div>
                        <label for="Fecha">Fecha</label>
                        <input type="Date" name="Fecha" id="Fecha" required>
                    </div>
                    <div>
                        <label for="Genero">Genero</label>
                        <input type="text" name="Genero" id="Genero" required>
                    </div>

                    <div class="form_action--button">
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </div>
                </form>

                <td>
                    
                    <table class="list" id="storeList">
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                           <th>Fecha</th>
                           <th>Matricula</th>
                           <th>GENERO</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </td>
            </td>
        </tr>
    </table>

</body>
</html>





<script>
    
</script>

<script>
    
    
    var selectedRow = null;
function onFormSubmit(e){
    event.preventDefault();
    var formData = readFormData();
    if(selectedRow === null){
        insertNewRecord(formData);
    }
    else{
        updateRecord(formData);
    }
   
}

function readFormData(){
    var formData = {};
    var formData = {};
    formData["Id"] = document.getElementById("Id").value;
    formData["Nombre"] = document.getElementById("Nombre").value;
    formData["Matricula"] = document.getElementById("Matricula").value;
    formData["Fecha"] = document.getElementById("Fecha").value;
    formData["Genero"] = document.getElementById("Genero").value;
    return formData;
}

function insertNewRecord(data){
    var table = document.getElementById("storeList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    var cell1 = newRow.insertCell(0);
        cell1.innerHTML = data.Id;
    var cell2 = newRow.insertCell(1);
        cell2.innerHTML = data.Nombre;
    var cell3 = newRow.insertCell(2);
        cell3.innerHTML = data.Fecha;
    var cell4 = newRow.insertCell(3);
        cell4.innerHTML = data.Matricula;
    var cell5 = newRow.insertCell(4);
        cell5.innerHTML = data.Genero;   
 var cell6 = newRow.insertCell(5);
    cell6.innerHTML = `<button onClick='onEdit(this)'>Edit</button> <button onClick='onDelete(this)'>Delete</button>`
}

function onEdit(td){
    selectedRow = td.parentElement.parentElement;
    document.getElementById('Id').value = selectedRow.cells[0].innerHTML;
    document.getElementById('Nombre').value = selectedRow.cells[1].innerHTML;
    document.getElementById('Fecha').value = selectedRow.cells[2].innerHTML;
    document.getElementById('Matricula').value = selectedRow.cells[3].innerHTML;
    document.getElementById('Genero').value = selectedRow.cells[4].innerHTML;
}
function updateRecord(formData){
    selectedRow.cells[0].innerHTML = formData.Id;
    selectedRow.cells[1].innerHTML = formData.Nombre;
    selectedRow.cells[2].innerHTML = formData.Fecha;
    selectedRow.cells[3].innerHTML = formData.Matricula;
    selectedRow.cells[4].innerHTML = formData.Genero;
}
function onDelete(td){
    if(confirm('Do you want to delete this record?')){
        row = td.parentElement.parentElement;
        document.getElementById('storeList').deleteRow(row.rowIndex);
    }
    resetForm();
}

function resetForm(){
    document.getElementById('Id').value = '';
    document.getElementById('Nombre').value = '';
    document.getElementById('Fecha').value = '';
    document.getElementById('Matricula').value = '';
    document.getElementById('Genero').value = '';
}
</script>

<head>




</head>