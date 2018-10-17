<section>
    <div class="services-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-header text-center">
                        <h3><?php echo $serviceHeaderH3 ?></h3>
                        <h1><?php echo $serviceHeaderH1 ?></h1>
                        <p class="text-center"><?php echo $serviceHeaderP ?></p>
                    </div>
                </div>

                <?php
                $iService = array("mobile", "window-maximize", "terminal");
                $h4Service = array($h4ServiceOne, $h4ServiceTwo, $h4ServiceThree);
                $pService = array($pServiceOne, $pServiceTwo, $pServiceThree);

                for ($i = 0; $i < count($iService); $i++) {
                    echo "
                    <div class=\"col-md-4\">
                        <div class=\"text-center\">
                            <i class=\"fas fa-$iService[$i]\"></i>
                            <h4>$h4Service[$i]</h4>
                            <p>$pService[$i]</p>
                        </div>
                    </div>";
                }
                ?>

            </div>
        </div>
    </div>
</section>
