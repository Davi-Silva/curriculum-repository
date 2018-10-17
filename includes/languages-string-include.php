<?php

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

$xml = simplexml_load_file("./languages/languages.xml") or die("xml not found!");


/*RESPONSIVE ACCORDING WITH THE LANGUAGE*/
if($lang == 'en') {
    echo "
    <link href=\"../css/responsive-english.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"./css/responsive-english.css\" rel=\"stylesheet\" type=\"text/css\">
    ";
} elseif ($lang == 'pt-br') {
    echo "
    <link href=\"../css/responsive-portuguese.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"./css/responsive-portuguese.css\" rel=\"stylesheet\" type=\"text/css\">
    ";
}

/*WEBSITE TITLE TAG*/

$titleTag = $xml->titleTag->$lang;

/*TITLE*/

$titleH1 = $xml->titleH1->$lang;
$titleH2 = $xml->titleH2->$lang;
$titleH3One = $xml->titleH3One->$lang;
$titleH3Two = $xml->titleH3Two->$lang;
$titleH3Three = $xml->titleH3Three->$lang;
$titleH3Four = $xml->titleH3Four->$lang;
$titleA = $xml->titleA->$lang;

/*ABOUT*/

/*ABOUT HEADER*/
$aboutHeaderH3 = $xml->aboutHeaderH3->$lang;
$aboutHeaderH2 = $xml->aboutHeaderH2->$lang;
$aboutParagraph = $xml->aboutParagraph->$lang;

/*ABOUT CONTAINER INFO STRONG*/
$profileContainerStrongOne = $xml->profileContainerStrongOne->$lang;
$profileContainerStrongTwo = $xml->profileContainerStrongTwo->$lang;
$profileContainerStrongThree = $xml->profileContainerStrongThree->$lang;
$profileContainerStrongFour = $xml->profileContainerStrongFour->$lang;
$profileContainerStrongFive = $xml->profileContainerStrongFive->$lang;
$profileContainerStrongSix = $xml->profileContainerStrongSix->$lang;
$profileContainerStrongSeven = $xml->profileContainerStrongSeven->$lang;

/*ABOUT CONTAINER INFO SPAN*/
$profileContainerSpanOne = $xml->profileContainerSpanOne->$lang;
$profileContainerSpanTwo = $xml->profileContainerSpanTwo->$lang;
$profileContainerSpanThree = $xml->profileContainerSpanThree->$lang;
$profileContainerSpanFour = $xml->profileContainerSpanFour->$lang;
$profileContainerSpanFive = $xml->profileContainerSpanFive->$lang;
$profileContainerSpanSix = $xml->profileContainerSpanSix->$lang;
$profileContainerSpanSeven = $xml->profileContainerSpanSeven->$lang;

/*ABOUT CONTAINER SKILLS STRONG*/
$profileContainerSkillsStrong = $xml->profileContainerSkillsStrong->$lang;

/*ABOUT CONTAINER SKILLS P*/
$profileContainerSkillsP = $xml->profileContainerSkillsP->$lang;

/*ABOUT HIRE ME*/
$hireme = $xml->hireme->$lang;

/*ABOUT DOWNLOAD CV*/
$downloadCV = $xml->downloadCV->$lang;


/*RESUME*/

/*RESUME HEADER*/
$resumeHeaderH3 = $xml->resumeHeaderH3->$lang;
$resumeHeaderH1 = $xml->resumeHeaderH1->$lang;
$resumeHeaderP = $xml->resumeHeaderP->$lang;

/*RESUME WORK CONTAINER WRAP*/
$timelineWrapHeaderH4One = $xml->timelineWrapHeaderH4One->$lang;
$timelineWrapHeaderH4Two = $xml->timelineWrapHeaderH4Two->$lang;

/*RESUME WORK CONTAINER TIMELINE HEADER*/
$workH4TimelineHeaderOne = $xml->workH4TimelineHeaderOne->$lang;
$workH4TimelineHeaderTwo = $xml->workH4TimelineHeaderTwo->$lang;
$workPTimelineHeaderOne = $xml->workPTimelineHeaderOne->$lang;
$workPTimelineHeaderTwo = $xml->workPTimelineHeaderTwo->$lang;

/*RESUME WORK CONTAINER OCCUPATION*/
$workH4TimelineOccupationOne = $xml->workH4TimelineOccupationOne->$lang;
$workH4TimelineOccupationTwo = $xml->workH4TimelineOccupationTwo->$lang;
$workPTimelineOccupationOne = $xml->workPTimelineOccupationOne->$lang;
$workPTimelineOccupationTwo = $xml->workPTimelineOccupationTwo->$lang;

/*RESUME EDUCATION CONTAINER TIMELINE HEADER*/
$educationH4TimelineHeaderOne = $xml->educationH4TimelineHeaderOne->$lang;
$educationH4TimelineHeaderTwo = $xml->educationH4TimelineHeaderTwo->$lang;
$educationH4TimelineHeaderThree = $xml->educationH4TimelineHeaderThree->$lang;
$educationPTimelineHeaderOne = $xml->educationPTimelineHeaderOne->$lang;
$educationPTimelineHeaderTwo = $xml->educationPTimelineHeaderTwo->$lang;
$educationPTimelineHeaderThree = $xml->educationPTimelineHeaderThree->$lang;

/*RESUME EDUCATION CONTAINER OCCUPATION*/
$educationH4TimelineOccupationOne = $xml->educationH4TimelineOccupationOne->$lang;
$educationH4TimelineOccupationTwo = $xml->educationH4TimelineOccupationTwo->$lang;
$educationH4TimelineOccupationThree = $xml->educationH4TimelineOccupationThree->$lang;
$educationPTimelineOccupationOne = $xml->educationPTimelineOccupationOne->$lang;
$educationPTimelineOccupationTwo = $xml->educationPTimelineOccupationTwo->$lang;
$educationPTimelineOccupationThree = $xml->educationPTimelineOccupationThree->$lang;


/*SERVICES*/

/*SERVICES HEADER*/
$serviceHeaderH3 = $xml->serviceHeaderH3->$lang;
$serviceHeaderH1 = $xml->serviceHeaderH1->$lang;
$serviceHeaderP = $xml->serviceHeaderP->$lang;

/*SERVICE CONTAINER*/
$h4ServiceOne = $xml->h4ServiceOne->$lang;
$h4ServiceTwo = $xml->h4ServiceTwo->$lang;
$h4ServiceThree = $xml->h4ServiceThree->$lang;
$pServiceOne = $xml->pServiceOne->$lang;
$pServiceTwo = $xml->pServiceTwo->$lang;
$pServiceThree = $xml->pServiceThree->$lang;


/*CONTACT*/

/*CONTACT HEADER*/
$contactHeaderH3 = $xml->contactHeaderH3->$lang;
$contactHeaderH1 = $xml->contactHeaderH1->$lang;
$contactHeaderP = $xml->contactHeaderP->$lang;

/*CONTACT FROM PLACEHOLDER*/
$contactFormNamePlaceholder = $xml->contactFormNamePlaceholder->$lang;
$contactFormEmailPlaceholder = $xml->contactFormEmailPlaceholder->$lang;
$contactFormSubjectPlaceholder = $xml->contactFormSubjectPlaceholder->$lang;
$contactFormMessagePlaceholder = $xml->contactFormMessagePlaceholder->$lang;
$contactFormSubmit = $xml->contactFormSubmit->$lang;

/*CONTACT WHERE TO FIND ME*/
$contactWhereToFindMe = $xml->contactWhereToFindMe->$lang;
$contactWhereToFindMeBrazil = $xml->contactWhereToFindMeBrazil->$lang;
$contactEmailMe = $xml->contactEmailMe->$lang;
$contactCallMe = $xml->contactCallMe->$lang;

/*FOOTER DESIGNED BY*/
$designedBy = $xml->designedBy->$lang;

