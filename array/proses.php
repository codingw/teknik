<?php
    $var = $_POST["editor"];

    if (isset($var) && is_array($var) && count($var) > 0) {
        foreach ($var as $editor) {
            if ($editor === "")
                break;

            echo "<input type=radio name=variabel[] value=" . $editor . ">" . $editor . "";
            #echo htmlspecialchars($editor, ENT_QUOTES); 
            echo '<br />';
        }
    }
?>