<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
  <link rel="stylesheet" href="dist/style.css">
  <title>Discs</title>
</head>
<body>
  <div id="app" class="flex-col vh-100">

    <header>
      <div class="container">
        <div class="brand flex">
          <img src="imgs/vinyl-2241789_640.png" alt="brand">
          <h1>My Albums</h1>
        </div>
      </div>
    </header>

    <main>
      <div class="container">
        <div class="catalog flex border">
          <div class="album flex" v-for="album in albumsList">
            <img class="border" :src="album.poster" :alt="album.title" />
            <h3>{{album.title}}</h3>
            <h4>{{album.author}}</h4>
            <span>{{album.year}}</span>
          </div>
        </div>
      </div>
    </main>
    
  </div>
  <script src="scripts/app.js"></script>
</body>
</html>