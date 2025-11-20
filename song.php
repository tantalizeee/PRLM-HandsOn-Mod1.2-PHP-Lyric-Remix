<!--
ESCAÑO, GABRIEL Z.
WD - 201
20/11/2025
DWEB
-->

<?php 
$title = "forever &";
$artist = "EJEAN";
$mood = "Nostalgic";


$verses = 2;
$pre_chorus = 2;
$chorus = 3;
$bridge = 1;


$nouns = ["moonlight", "skin", "sun", "twilight", "FaceTime", "time", "brain", "day", "things", "dirt", "memories", "love"];
$verbs = ["Kiss", "tell", "Hold", "Wake up", "remember", "Spent", "see", "give", "let", "think", "know", "change", "cling", "counting", "say", "slip", "Remind", "get", "love"];
$adjectives = ["alright", "forever", "long", "soft", "only"];

//first chorus liness:
$chorus1 = [
    "$verbs[0] me in the $nouns[0]",
    "And just $verbs[1] me I'll be $adjectives[0]",
    "$verbs[2] me 'til the $nouns[2] kisses my $nouns[1]",
    "$verbs[3] to $nouns[3]",
    "No need to $verbs[4] when",
    "I could do this for $adjectives[1]"
];

//first verse lines:
$verse1 = [
    "$verbs[5] too $adjectives[2] on $nouns[4]",
    "Half the $nouns[5] it's like I $adjectives[4] ever $verbs[6] mine, oh",
    "What I would do and $verbs[7] for",
    "My $nouns[6] to $verbs[8] me live"
];


//first prechorus liness:
$pre_chorus1 = [
    "I $verbs[9] that we're doing well, what'cha $verbs[9]?",
    "But I don't really $verbs[10] myself from yesterday to today",
    "Never $verbs[10] when things will $verbs[11]",
];


//verse 2 lines:
$verse2 = [
    "I'm kicking up the $nouns[9] and $verbs[13] days, I'm in it",
    "But I'm still not sure what I should $verbs[14] (What I should $verbs[14])",
    "I $verbs[12] onto what I can",
    "But the memories $verbs[15] again"
];

//second prechorus:
$pre_chorus2 = [
    "I $verbs[9] that we're doing well, what'cha $verbs[9]?",
    "But I don't really $verbs[10] myself from yesterday to today",
    "Never $verbs[10] when things will $verbs[11], yeah",
];


//bridge:
$bridge1 = [
    "$verbs[16] me, 'cause I $verbs[17] lonely",
    "Is my $verbs[1] as $adjectives[3] as it was the $nouns[7] before?",
    "$verbs[16] me, I'm still your $adjectives[4]",
    "Will you $verbs[18] me more than you did the $nouns[7] before?",
    "Can you $verbs[18] me for $verbs[1]?"
];


$name = "ESCAÑO, GABRIEL Z.";
$yearlevel = 200;
$blocknum = "1";
$section = $yearlevel + $blocknum;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJEAN - forever & Lyrics</title>
    <style>
        body{
            text-align: center;
            font-family: 'Arial', serif;
            background-image: url(https://images.genius.com/4fc8de00d4ce8382613c2f160fe7c43f.1000x1000x1.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-color: rgba(0, 0, 0, 0.5);
            background-blend-mode: darken;
            color:rgb(240, 141, 156);
        }
        footer{
            font-weight: bold;
            color: white;
        }
    </style>
</head>
<body>
    <br>
    <h1><?php echo $title; ?></h1>
    <h2>by <?php echo $artist; ?></h1>
    <br>
    <h3>[Chorus]</h3>
    <p><?php foreach ($chorus1 as $line) echo "<p>$line</p>"; ?></p>
    <br>
    <h3>[Verse 1]</h3>
    <p><?php foreach ($verse1 as $line) echo "<p>$line</p>"; ?></p>
    <br>
    <h3>[Pre-Chorus]</h3>
    <p><?php foreach ($pre_chorus1 as $line) echo "<p>$line</p>"; ?></p>
    <br>
    <h3>[Chorus (2nd Repeat)]</h3>
    <p><?php foreach ($chorus1 as $line) echo "<p>$line</p>"; ?></p>
    <br>
    <h3>[Verse 2]</h3>
    <p><?php foreach ($verse2 as $line) echo "<p>$line</p>"; ?></p>
    <br>
    <h3>[Pre-Chorus (2nd Repeat)]</h3>
    <p><?php foreach ($pre_chorus2 as $line) echo "<p>$line</p>"; ?></p>
    <br>
    <h3>[Bridge]</h3>
    <p><?php foreach ($bridge1 as $line) echo "<p>$line</p>"; ?></p>
    <br>
    <h3>[Chorus (3rd Repeat)]</h3>
    <p><?php foreach ($chorus1 as $line) echo "<p>$line</p>"; ?></p>
    <br><br>
</body>
<footer>
    <p><?php echo $name; ?></p>
    <p>WD - <?php echo $section;?></p>
</footer>
</html>
