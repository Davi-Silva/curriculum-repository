<section>
    <div class="resume-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="resume-header">
                        <h3><?php echo $resumeHeaderH3 ?></h3>
                        <h1><?php echo $resumeHeaderH1 ?></h1>
                        <p><?php echo $resumeHeaderP ?></p>
                    </div>
                </div>

                <?php

                $timelineWrapHeaderH4 = array($timelineWrapHeaderH4One, $timelineWrapHeaderH4Two);

                echo "
                    <div class=\"col-md-12\">
                        <div class=\"timeline-wrap-header\">
                            <h4 class=\"text-center\">$timelineWrapHeaderH4[0]</h4>
                        </div>
                    </div>";

                $workH4TimelineHeader = array($workH4TimelineHeaderOne, $workH4TimelineHeaderTwo);
                $workPTimelineHeader = array($workPTimelineHeaderOne, $workPTimelineHeaderTwo);
                $workITimelineWrapIcon = "fas fa-briefcase";

                $workH4TimelineOccupation = array($workH4TimelineOccupationOne, $workH4TimelineOccupationTwo);
                $workPTimelineOccupation = array($workPTimelineOccupationOne, $workPTimelineOccupationTwo);

                for ($i = 0; $i < count($workH4TimelineHeader); $i++) {
                    echo "<div class=\"col-md-4\">
                              <div class=\"timeline-header\">
                                  <h4>$workH4TimelineHeader[$i]</h4>
                                  <p>$workPTimelineHeader[$i]</p>
                              </div>
                          </div>
                          <div class=\"col-md-1\">
                              <div class=\"timeline-wrap-icon\">
                                  <i class=\"$workITimelineWrapIcon\"></i>
                              </div>
                          </div>
                          <div class=\"col-md-5\">
                              <div class=\"timeline-occupation\">
                                  <h4>$workH4TimelineOccupation[$i]</h4>
                                  <p>$workPTimelineOccupation[$i]</p>
                              </div>
                          </div>
                          ";


                }

                echo "
                    <div class=\"col-md-12\">
                        <div class=\"timeline-wrap-header\">
                            <h4 class=\"text-center\">$timelineWrapHeaderH4[1]</h4>
                        </div>
                    </div>";

                $educationH4TimelineHeader = array($educationH4TimelineHeaderOne, $educationH4TimelineHeaderTwo, $educationH4TimelineHeaderThree);
                $educationPTimelineHeader = array($educationPTimelineHeaderOne, $educationPTimelineHeaderTwo, $educationPTimelineHeaderThree);
                $educationITimelineWrapIcon = "fas fa-graduation-cap";

                $educationH4TimelineOccupation = array($educationH4TimelineOccupationOne, $educationH4TimelineOccupationTwo, $educationH4TimelineOccupationThree);
                $educationPTimelineOccupation = array($educationPTimelineOccupationOne , $educationPTimelineOccupationTwo, $educationPTimelineOccupationThree);

                for ($i = 0; $i < count($educationH4TimelineHeader); $i++) {
                    echo "
                    <div class=\"col-md-4\">
                        <div class=\"timeline-header\">
                            <h4>$educationH4TimelineHeader[$i]</h4>
                            <p>$educationPTimelineHeader[$i]</p>
                        </div>
                    </div>
                    <div class=\"col-md-1\">
                        <div class=\"timeline-wrap-icon\">
                            <i class=\"$educationITimelineWrapIcon\"></i>
                        </div>
                    </div>
                    <div class=\"col-md-5\">
                        <div class=\"timeline-occupation\">
                            <h4>$educationH4TimelineOccupation[$i]</h4>
                            <p>$educationPTimelineOccupation[$i]</p>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </div>
</section>
