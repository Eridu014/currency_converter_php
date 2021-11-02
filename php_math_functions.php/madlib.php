<?php
function generateStory($singular_noun, $verb, $color, $distance_unit) {
  $story = "The $singular_noun are lovely, $color, and deep.
But I have promises to keep,
And $distance_unit to go before I $verb,
And $distance_unit to go before I $verb.";
return $story;
}

echo generateStory("helicopters", "run", "black", "inches");
?>