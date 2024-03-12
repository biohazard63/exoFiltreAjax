
<!DOCTYPE html>
<html>
<head>
    <title>Harry Potter Characters</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
<header>
    <h1>Personnages de Harry Potter</h1>
</header>
<main>
    <p>Cette page affiche des informations sur les personnages de l'univers Harry Potter.</p>
    <button id="showCards">Afficher les cartes</button>
    <form id="filterForm">
        <label for="house">Filtrer par maison :</label>
        <select name="house" id="house">
            <option value="all">Toutes</option>
            <option value="Gryffindor">Gryffondor</option>
            <option value="Hufflepuff">Poufsouffle</option>
            <option value="Ravenclaw">Serdaigle</option>
            <option value="Slytherin">Serpentard</option>
        </select>
        <input type="submit" value="Filtrer">
    </form>
    <div id="character-cards">
    </div>
</main>
<script src="/assets/js/script.js"></script>
</body>
</html>