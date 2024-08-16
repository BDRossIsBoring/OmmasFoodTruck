<!-- Creating variable variable -->
<?php foreach ($_POST as $key => $value) {
    //finding out is the value is an array or not, if it is, assign it back to value; triming white space from string value
    $value = is_array($value) ? $value : trim($value);
    // if a empty require value, add to missing array
    //give it a empty string
    if (empty($value) && in_array($key, $required)) {
        $missing[] = $key;
        $$key = '';
    } elseif (in_array($key, $expected)) {
        $$key = $key;
    }
}
