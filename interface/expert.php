<?php
// Récupération des données du formulaire
$name = $_POST['name'];
$preferences = $_POST['preferences'] ?? [];



// Effectuer les inférences et déterminer les destinations recommandées
$destinations = array();

if (in_array('sun', $preferences) && in_array('relaxation', $preferences)) {
    $destinations[] = "Les Maldives peuvent correspondre à vos préférences de voyage.";
}
if (in_array('food', $preferences) && in_array('events', $preferences)) {
    $destinations[] = "L'Algerie(Azazga mini NewYork) peut correspondre à vos préférences de voyage.";
}
if (in_array('history', $preferences) && in_array('shopping', $preferences)) {
    $destinations[] = "Istanbul peut correspondre à vos préférences de voyage.";
}
if (in_array('music', $preferences) && in_array('nightlife', $preferences)) {
    $destinations[] = "Mexico peut correspondre à vos préférences de voyage.";
}
if (in_array('technologie', $preferences) && in_array('events', $preferences)) {
    $destinations[] = "Corée du Sud peut correspondre à vos préférences de voyage.";
}
if (in_array('beach', $preferences) && in_array('nightlife', $preferences)) {
    $destinations[] = "Sydney peut correspondre à vos préférences de voyage.";
}
if (in_array('adventure', $preferences) && in_array('mountain', $preferences)) {
    $destinations[] = "Les Alpes Suisses peuvent correspondre à vos préférences de voyage.";
}
if (in_array('beauty', $preferences) && in_array('nature', $preferences)) {
    $destinations[] = "Chine peuvt correspondre à vos préférences de voyage.";
}
if (in_array('architecture', $preferences) && in_array('history', $preferences)) {
    $destinations[] = "L'Egypte peuvt correspondre à vos préférences de voyage.";
}

if (in_array('sun', $preferences) && in_array('events', $preferences)) {
    $destinations[] = "RocheusesCanadiennes peuvent correspondre à vos préférences de voyage.";
}
if (in_array('music', $preferences) && in_array('mountain', $preferences)) {
    $destinations[] = "NewYork peut correspondre à vos préférences de voyage.";
}
if (in_array('shopping', $preferences) && in_array('architecture', $preferences)) {
    $destinations[] = "Amesterdame peut correspondre à vos préférences de voyage.";
}

if (in_array('nature', $preferences) && in_array('beauty', $preferences)) {
    $destinations[] = "Bali peut correspondre à vos préférences de voyage.";
}
if (in_array('culture', $preferences) && in_array('history', $preferences)) {
    $destinations[] = "Rome peut correspondre à vos préférences de voyage.";
}
if (in_array('nature', $preferences) && in_array('photography', $preferences)) {
    $destinations[] = "Le parc national de Yellowstone peut correspondre à vos préférences de voyage.";
}
if (in_array('nature', $preferences) && in_array('sun', $preferences)) {
    $destinations[] = "Australy peut correspondre à vos préférences de voyage.";
}
if (in_array('nature', $preferences) && in_array('music', $preferences)) {
    $destinations[] = "les iles de Madagascar peut correspondre à vos préférences de voyage.";
}
// Ajouter d'autres règles d'inférence en fonction des préférences

// Afficher les destinations recommandées
if (!empty($destinations)) {
    echo "<h2>Résultat de la recommandation pour $name :</h2>";
    echo "<ul>";
    foreach ($destinations as $destination) {
        echo "<li>$destination</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Aucune destination correspondant à vos préférences n'a été trouvée.</p>";
}
?>