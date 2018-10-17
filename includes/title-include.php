<section>
    <div class="title-container">
        <div class="container">
            <div class="row">
                <div class="languages-change">
                    <a href="?lang=en"><img src="./img/usa-flag.png"></a>
                    <a href="?lang=pt-br"><img src="./img/brazil-flag.png"></a>
                </div>
                <div class="col-md-12">
                    <div class="title text-center">
                        <h2><?php echo $titleH2 ?></h2>
                        <h1><?php echo $titleH1 ?></h1>

                        <div class="row">
                            <?php
                            $positions = array("$titleH3One", "$titleH3Two", "$titleH3Three", "$titleH3Four");

                            for ($i = 0; $i < count($positions); $i++) {
                                echo "
                            <div class='col-md-3'>                    
                                <h3 class='text-center'>$positions[$i]</h3>                           
                            </div>";
                            }
                            ?>
                        </div>


                    </div>
                </div>

                <div class="col-md-12 text-center about-button-container">
                    <a class="about-button" href="#about"><?php echo $titleA; ?></a>
                </div>


                <div class="col-md-12">
                    <div class="text-center">
                        <ul class="list-inline">
                            <?php
                            $fabs = array("facebook-f",
                                "github",
                                "linkedin-in",
                                "instagram",
                                "bitbucket",
                                "youtube");

                            $links = array("https://www.facebook.com/davi.cunha.71",
                                "https://github.com/Davi-Cunha",
                                "https://www.linkedin.com/in/davi-cunha-silva-2a3581108/",
                                "https://www.instagram.com/davicunhasilva/",
                                "https://bitbucket.org/MANGA-ESTRANHA/",
                                "https://www.youtube.com/channel/UCpTobDUtJtMWwHBH4o7fL8w");

                            for ($i = 0; $i < count($fabs); $i++) {
                                echo "
                                <a href='$links[$i]' class='list-inline-item' target='_blank'><li><i class='fab fa-$fabs[$i]'></i></li></a>
                                ";
                            }

                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
