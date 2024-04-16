<!DOCTYPE html>
<html lang="en">
<?php
$title = 'GAAA - hecho x diego:v';
$fileJS = ['app'];
$fileCSS = ["style"];
// $fileCSS    = ['header', 'footer', 'modal'];
include_once './public/include/html_head.php';
?>

<body>

    <h1>Seccion index - hecho x diego:v</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Des_rol</th>
            </tr>
        </thead>
        <tbody id="tableBody">
        </tbody>
    </table>


    <script>
        const tableBody = document.getElementById('tableBody'); // Seleccionar el tbody por su ID

        const dataRender = () => {
            fetch('./app/trigger/prueba.php?action=GET')
                .then(res => res.json()) // Parseamos la respuesta como JSON
                .then((res = []) => {
                    tableBody.innerHTML = res.map(element => {
                        return `
                    <tr data-id="${element.ID_ROL}">
                        <td>${element.ID_ROL}</td>
                        <td>${element.DES_ROL}</td>
                    </tr>
                `
                    }).join('')
                })
                .catch(err => console.error(err));
        };
        dataRender();
    </script>

</body>

</html>