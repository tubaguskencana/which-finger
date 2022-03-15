<?php
function which_finger($number)
{

    // define
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
    $index = ($number % 10) - 1;

    // output
    return $finger[$index] . "<br />";
}

// call function
echo which_finger(12); // return ring finger left hand
echo which_finger(8); // return middle finger right hand
echo which_finger(5); // return thumb left hand