<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motorcycle</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        /* Style to change the color of the text to white */
        #responseData {
            color: white;
        }
    </style>
</head>
<body class="container mt-5">
    <div class="text-center">
        
        <button class="btn btn-primary" id="getData">Get Data</button>
    </div>

    <div class="container mt-3">
        <pre id="responseData" style="white-space: pre-wrap;"></pre>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const getDataButton = document.getElementById('getData');
            const responseDataElement = document.getElementById('responseData');

            const apiEndpoint = 'https://parallelum.com.br/fipe/api/v1/carros/marcas/59/modelos/5940/anos/2014-3'; // Replace this with your API endpoint

            function fetchData() {
                axios.get(apiEndpoint)
                    .then(response => {
                        // Handle the response data according to your application's logic
                        // Instead of displaying the JSON string directly, format it for readability
                        const formattedResponse = JSON.stringify(response.data, null, 4);
                        responseDataElement.textContent = formattedResponse;
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                        // Handle error gracefully here
                    });
            }

            getDataButton.addEventListener('click', fetchData);
        });
    </script>
</body>
</ht
