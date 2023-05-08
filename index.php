<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row row-cols-md-3 g-5">
                <div class="col" v-for="(disco, index) in dischi" :key="index">
                    <div class="card text-center">
                        <img :src="disco.poster" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ disco.title }}</h5>
                            <p class="card-text">{{ disco.author }}</p>
                            <p class="card-text fw-bold">{{ disco.year }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="js/script.js"></script>
</body>

</html>