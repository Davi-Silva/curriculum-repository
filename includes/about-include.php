<section id="about">
    <div class="about-container">
        <div class="container">
            <div class="row">
                <header class="col-md-12 text-center about-header">
                    <h3><?php echo $aboutHeaderH3?></h3>
                    <h2><?php echo $aboutHeaderH2?></h2>
                </header>
                <div class="col-md-4">
                    <div class="profile-pic-container">
                        <img class="profile-pic" src="img/profile-pic.png">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="about-me">
                        <p><?php echo $aboutParagraph?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-container">
                        <ul>

                            <?php
                            $strong = array("$profileContainerStrongOne", "$profileContainerStrongTwo", "$profileContainerStrongThree", "$profileContainerStrongFour", "$profileContainerStrongFive", "$profileContainerStrongSix", "$profileContainerStrongSeven");
                            $span = array("$profileContainerSpanOne.", "$profileContainerSpanTwo", "$profileContainerSpanThree", "$profileContainerSpanFour", "$profileContainerSpanFive", "$profileContainerSpanSix", "$profileContainerSpanSeven");

                            for ($i = 0; $i < count($strong); $i++) {
                                if ($i == 0) {
                                    echo "
                                    <header>
                                        <li>
                                            <strong>$strong[$i]</strong>
                                            <br>
                                            <p>$span[$i]</p>
                                        </li>
                                    </header>";
                                } else {
                                    echo "
                                    <li>
                                        <strong>$strong[$i]</strong>
                                        <br>
                                        <span>$span[$i]</span>
                                    </li>
                                    ";
                                }
                            }

                            ?>
                        </ul>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skills-container">
                        <ul>
                            <?php
                            $strong = array("$profileContainerSkillsStrong", "Android", "Java", "HTML5", "CSS3", "Bootstrap 4", "PHP 7", "JavaScript", "Python", "C", "C++", "Go", "Linux");
                            $progress_bar = array("android", "java", "html", "css", "bootstrap", "php", "javascript", "python", "c", "cplusplus", "go", "linux");

                            for ($i = 0, $j = 0; $i < count($strong); $i++) {
                                if ($i == 0) {
                                    echo "
                                    <header>
                                        <li>
                                            <strong>$strong[$i]</strong>
                                            <br>
                                            <p>$profileContainerSkillsP</p>
                                        </li>
                                    </header>";
                                } else {
                                    echo "
                                    <li>
                                        <strong>$strong[$i]</strong>
                                        <br>
                                        <div class=\"progress-bar-container\">
                                            <div class=\"progress-bar-background\"></div>
                                            <div class=\"progress-bar-$progress_bar[$j]\"></div>
                                        </div>
                                    </li>";
                                    $j++;
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <div class="hire-me">
                                <a href="#contact"><?php echo $hireme?></a>
                            </div>
                        </div>
                        <div class="cv col-md-6">
                            <div class="cv">
                                <a href="../download/CirrículoDavi.pdf" download="Davi's Curriculum"><?php echo $downloadCV?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>


    </div>
</section>




