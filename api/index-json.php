<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<header class="container-fluid">
    <div class="container-logo">
        <img src="./img/spotify_logo.png" alt="">
    </div>
</header>
<main id="root">
        <div class="container">
            <div class="row justify-content-center py-5 row-cols-4">
                <div class="container-box my-5 mx-5 py-5 px-5" v-for="value in database">
                        
                        <img :src="value.poster "/>
                        <h2>{{ value.title }}</h2>
                        <p>{{ value.author }}</p>
                        <p>{{ value.year }}</p>
                    
                </div>
            </div>
        </div>
</main>
<script src="./js/script.js"></script>
</body>
</html>