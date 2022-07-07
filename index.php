<?php

    $paragraph = "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, 
    there live the blind text. Separated they live in Bookmarksgrove right at the coast of the Semantics, 
    a large language ocean. A small river named Duden flows by their place and supplies it with the necessary 
    regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. 
    Even the all-powerful Pointing has no control about the blind text it is an almost unorthographic life 
    One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far 
    World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, 
    wild Question Marks and devious Semikoli, but the Little blind text didn’t listen. She packed her seven 
    versalia, put her initial into the belt and made herself on the way. When she reached the first hills 
    of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the blind text 
    of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then.";

    $censured = $GET["censured"];

    $modified = str_replace($censured, "***", $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <div>
        <h1>Paragrafo originale</h1>
        <p><?php echo $paragraph ?></p>
        <p>La lunghezza del testo sopraelencato è di <strong><?php echo strlen($paragraph) ?></strong> caratteri.</p>
    </div>
    <hr>
    <div>
        <h1>Paragrafo censurato</h1>
        <h4>Censura della parola "<?php echo $censured ?>"</h4>
        <p><?php echo $modified ?></p>
        <p>La lunghezza del testo sopraelencato è di <strong><?php echo strlen($modified) ?></strong> caratteri.</p>
    </div>
</body>
</html>