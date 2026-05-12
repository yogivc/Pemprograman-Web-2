<?php

function repeat($text, $num = 10)
{
    echo "<ol>";

    for ($i = 0; $i < $num; $i++) {
        echo "<li>$text</li>";
    }

    echo "</ol>";
}

// pakai 2 parameter
repeat("I'm the best", 15);

// pakai default parameter
repeat("You're the man");

?>