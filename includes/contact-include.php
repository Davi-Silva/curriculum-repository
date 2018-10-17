<section id="contact">
    <div class="contact-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-header">
                        <h3 class="text-center"><?php echo $contactHeaderH3 ?></h3>
                        <h1 class="text-center"><?php echo $contactHeaderH1 ?></h1>
                        <p class="text-center"><?php echo $contactHeaderP ?></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <form method="post" action="./includes/redirect.php">
                        <fieldset class="text-center">
                            <div class="form-field">
                                <input class="input-contact" type="text" id="name" placeholder="<?php echo $contactFormNamePlaceholder ?>" name="name" required>
                            </div>
                            <div class="form-field">
                                <input class="input-contact" type="email" id="email" placeholder="<?php echo $contactFormEmailPlaceholder ?>" name="email" required>
                            </div>
                            <div class="form-field">
                                <input class="input-contact" type="text" id="subject" placeholder="<?php echo $contactFormSubjectPlaceholder ?>" name="subject" required>
                            </div>
                            <div class="form-field">
                                <textarea class="input-contact" id="message" placeholder="<?php echo $contactFormMessagePlaceholder ?>" name="message" required></textarea>
                            </div>
                            <div class="form-field">
                                <button type="submit" id="submit-button"><?php echo $contactFormSubmit ?></button>
                            </div>
                        </fieldset>
                    </form>
                </div>



                <?php
                $iContact = array("map-marker", "envelope", "phone");
                $h5Contact = array($contactWhereToFindMe, $contactEmailMe, $contactCallMe);
                $pContact = array("davipccunhasilva@hotmail.com", "+55 (31) 99937-9709");

                for ($i = 0; $i < count($iContact); $i++) {
                    echo "
                        <div class=\"col-md-4\">
                            <div class=\"where-to-find text-center\">
                                <i class=\"fas fa-$iContact[$i]\"></i>
                                <h5>$h5Contact[$i]</h5>
                                <div class=\"info\">
                    ";

                    if ($i == 0) {
                        echo "<p>Belo Horizonte</p>
                              <p>Minas Gerais</p>
                              <p>$contactWhereToFindMeBrazil</p>";
                    } elseif ($i > 0) {
                        $j = $i - 1;
                        echo "<p>$pContact[$j]</p>";
                    }

                    echo "
                                </div>
                            </div>
                        </div>";
                }

                ?>
            </div>
        </div>
    </div>
    <script src="./js/main.js"></script>
</section>
