
<div class="row">
    <div class="col-lg-12 box-content">
        <div class="col-lg-12 menu-text-content">
            <div class="col-lg-2 menu-content">
                <class class="col-lg-12 menu-href menu-href-ac ">
                    <a href="index.php"> Accueil</a>
                </class>
                <class class="col-lg-12 menu-href menu-href-1 ">
                    <a href="decouvrir.php?sheet=quiSommesNous"
                        <?php
                            if ($nav == 0) { echo 'class="current"'; } 
                            else {echo 'class=""';}
                        ?>
                    > Qui sommes-nous ?</a>
                </class>
                <class class="col-lg-12 menu-href menu-href-2">
                    <a href="decouvrir.php?sheet=cadiceaMama"
                        <?php
                            if ($nav == 1) { echo 'class="current"'; }
                            else {echo 'class=""';}
                        ?>
                    > Cadicea Mama</a>
                </class>
                <class class="col-lg-12 menu-href">
                    <a href="decouvrir.php?sheet=gamme"
                        <?php
                            if ($nav == 2) { echo 'class="current"'; }
                            else {echo 'class=""';}
                        ?>
                    > Cadicea Fonscare</a>
                </class>
            </div>