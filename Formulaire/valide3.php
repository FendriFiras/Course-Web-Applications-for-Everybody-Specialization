<html>
<head>
<title>Liste de fruits</title>
</head>
<body>
<?php
if (isset($_GET['sel']) && !empty($_GET['sel']))
{/* La variable $_GET['sel'] est définie et elle n'est pas vide */
foreach($_GET['sel'] as $fruit)
echo "Vous avez choisi $fruit<br>\n" ;
}
else
echo "Vous n'avez pas choisi de fruit\n" ;
?>
</body></html>