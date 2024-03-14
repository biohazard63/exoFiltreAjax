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
    <div id="loader">
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
            <label for="gender">Filtrer par genre :</label>
            <select name="gender" id="gender">
                <option value="all">Tous</option>
                <option value="male">Hommes</option>
                <option value="female">Femmes</option>
            </select>
            <label for="sort">Trier par :</label>
            <select name="sort" id="sort">
                <option value="asc">Ordre alphabétique</option>
                <option value="desc">Ordre anti-alphabétique</option>
            </select>
            <label for="birthStart">Date de naissance (début) :</label>
            <input type="date" id="birthStart" name="birthStart">
            <label for="birthEnd">Date de naissance (fin) :</label>
            <input type="date" id="birthEnd" name="birthEnd">
            <label for="search">Recherche :</label>
            <input type="text" id="search" name="search">
            <input type="submit" value="Filtrer">
        </form>

    </div>
    <div id="character-cards">
    </div>
</main>
<script src="/assets/js/script.js"></script>
</body>
</html>