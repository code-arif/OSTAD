<?php
//php supported timezone list
foreach (timezone_abbreviations_list() as $abbr => $timezones) {
    foreach ($timezones as $timezone) {
        if (isset($timezone['timezone_id'])) {
            echo "<pre>";
            var_dump($abbr, $timezone['timezone_id']);
            echo "</pre>";
        }
    }
}
