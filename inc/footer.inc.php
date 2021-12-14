<footer>
    <div>
        <?php echo "<p>Exemple de constante PHP >>> Chemin absolu du fichier en cours : ".__FILE__."</p>"; ?>
        <p>
            <?php
            setlocale(LC_ALL, 'fr_FR');
            echo strftime("%A %e %B %Y");
            echo ' - ';
            date_default_timezone_set("Europe/Paris");
            echo date('H:i:s');
            ?>
        </p>
    </div>
</footer>