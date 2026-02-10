<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Parcelas</title>
    </head>
    <body>
        <header>
            <h1>Parcelas</h1>
            <label for="nombreTecnico">Tecnico: </label>
            <span id="nombreTecnico">Mario Perez Bautista</span>
            <br>
        </header>
        <main>
            <div>
                <label for="buscarParcela">Buscar Parcela:</label>
                <input type="text" id="buscarParcela" name="buscarParcela">
                <button><a >Buscar</a></button>
                <br>
                <button><a href="Parcela.php">Agregar Parcela</a></button>
                <table >
                    <tr>
                        <th>No.</th>
                        <th>Nombre</th>
                        <th>Municipio</th>
                        <th>Localidad</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Parcela A</td>
                        <td>Springfield</td>
                        <td>10</td>
                        <td><a href="Parcela.php">Ver</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Parcela B</td>
                        <td>Shelbyville</td>
                        <td>15</td>
                        <td><button>Ver</button></td>
                    </tr>
                </table>
            </div>
        </main>
    </body>
</html>