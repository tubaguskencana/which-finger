<?php
function which_finger($number)
{

    // define
    $default_index = 0;
    $finger = [
        'pinky left hand',
        'ring finger left hand',
        'middle finger left hand',
        'index finger left hand',
        'thumb left hand',
        'thumb right hand',
        'index finger right hand',
        'middle finger right hand',
        'jari manis right hand',
        'pinky right hand',
    ];

    // process
    for ($i = 0; $i < $number; $i++) {
        $default_index = $default_index > 9 ? 0 : $default_index;
        $default_index++;
    }

    // output
    return $finger[$default_index - 1] . "<br />";
}

// call function
echo which_finger(12); // return ring finger left hand
echo which_finger(8); // return middle finger right hand
echo which_finger(5); // return thumb left hand