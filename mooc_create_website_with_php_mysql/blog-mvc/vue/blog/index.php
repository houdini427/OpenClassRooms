<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mon blog</title>
    <link href="assets/css/style.css" rel="stylesheet" />
    </head>

    <body>
        <h1>Mon super blog !</h1>
        <p>Derniers billets du blog :</p>

<?php
foreach($billets as $billet)
{
?>
<div class="news">
    <h3>
        <?php echo $billet['title']; ?>
        <em>le <?php echo $billet['create_date_fr']; ?></em>
    </h3>

    <p>
    <?php echo $billet['content']; ?>
    <br />
    <em><a href="commentaires.php?billet=<?php echo $billet['id_billet']; ?>">Commentaires</a></em>
    </p>
</div>
<?php
}
?>
</body>
</html>