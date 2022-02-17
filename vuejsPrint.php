<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Php Ajax Dischi Fabrizio Fornone</title>
</head>

<body>
    <div id="app">
        <!-- Header -->
        <header>
            <div class="d-flex align-items-center py-2">
                <div class="mx-3">
                    <!-- Logo -->
                    <img src="./img/logo-small.svg" alt="" />
                </div>
                <div>
                    <select class="mx-3" name="genre" id="" v-model="vmodel" @change="callFilteredApi">
                        <option value="">All</option>
                        <option value="Rock">Rock</option>
                        <option value="Pop">Pop</option>
                        <option value="Metal">Metal</option>
                        <option value="Jazz">Jazz</option>
                    </select>
                </div>
            </div>
        </header>
        <main>
            <!-- Container -->
            <div class="container-custom my-4">

                <div class="d-flex flex-wrap text-center">

                    <div v-for="disc in discList" class="disc-box">

                        <div class='single-album py-2'>;

                            <img class="py-1" :src="disc.poster" alt="">
                            <div class="py-1 fs-4 fw-bold text-white">{{disc.title}}</div>
                            <div class="text-secondary">{{disc.author}}</div>
                            <div class="text-secondary">{{disc.year}}</div>

                        </div>;

                    </div>

                </div>

            </div>

        </main>
    </div>

    <script src="./js/script.js"></script>

</body>

</html>