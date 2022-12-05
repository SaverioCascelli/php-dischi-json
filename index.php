<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href=" ./css/style.css">
    <title>php dischi json</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div class="container" id="app">
            <div class="row">
                <div
                v-for="(element, key) in diskArr " :key="key"
                class="col-4">
                    <div class="card" >
                        <img :src="element.poster" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{element.title}}</h5>
                            <p class="card-text"> {{element.author}}</p>
                            <p class="card-text fw-bold ">{{element.year}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="./js/main.js"></script>
</html>