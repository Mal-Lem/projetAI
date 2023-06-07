<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!-- font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/search?q=bars&o=r">
    <link rel="stylesheet" href="css/style.css">
    <title>Recommandation de destinations</title>
</head>
<body>
<div class="expert" style="background: url(images/nnn.jpg) no-repeat;">
    
    <h1>Recommandation de destinations</h1>
    
    <form action="expert.php" method="post" >
        <label for="name">Entrez votre nom :</label>
        <input type="text" id="name" name="name" style="background:transparent;color:black" required><br><br>

        <label>Choisissez vos préférences de voyage :</label><br>
        <input type="checkbox" name="preferences[]" value="sun" > Soleil <br>
        <input type="checkbox" name="preferences[]" value="beach"> Plage<br>
        <input type="checkbox" name="preferences[]" value="adventure"> Aventure<br>
        <input type="checkbox" name="preferences[]" value="culture"> Culture<br>
        <input type="checkbox" name="preferences[]" value="nature"> Nature<br>
        <input type="checkbox" name="preferences[]" value="beauty"> Beauté<br>
        <input type="checkbox" name="preferences[]" value="relaxation"> Relaxation<br>
        <input type="checkbox" name="preferences[]" value="nightlife"> Vie nocturne<br>
        <input type="checkbox" name="preferences[]" value="technologie"> Technologie<br>
        <input type="checkbox" name="preferences[]" value="history"> Histoire<br>
        <input type="checkbox" name="preferences[]" value="photography"> Photographie<br>
        <input type="checkbox" name="preferences[]" value="events"> Événements<br>
        <input type="checkbox" name="preferences[]" value="food"> Nourriture<br>
        <input type="checkbox" name="preferences[]" value="music"> Musique<br>
        <input type="checkbox" name="preferences[]" value="mountain"> Montagne<br>
        <input type="checkbox" name="preferences[]" value="shopping"> Shopping<br>
        <input type="checkbox" name="preferences[]" value="architecture"> Architecture<br><br>

        <input type="submit" value="Recommander">
    </form>
    </div>

</body>
</html>

