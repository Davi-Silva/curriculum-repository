<footer>
    <div class="footer-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy davicunhasilva 2018.</p>
                    <p><?php echo $designedBy ?> <a href="#">davicunhasilva</a></p>
                </div>
                <div class="col-md-6">
                    <ul>
                        <?php
                        $fabs = array("facebook-f", "github", "linkedin-in", "instagram", "bitbucket", "youtube");
                        $links = array("https://www.facebook.com/davi.cunha.71", "https://github.com/MANGA-ESTRANHA", "https://www.linkedin.com/in/davi-cunha-silva-2a3581108/", "https://www.instagram.com/davicunhasilva/", "https://bitbucket.org/MANGA-ESTRANHA/", "https://www.youtube.com/channel/UCpTobDUtJtMWwHBH4o7fL8w");

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
</footer>
