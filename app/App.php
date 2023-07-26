<?php

declare(strict_types = 1);

// Your Code

/*
    reads files in transactions directory

    FUTURE IMPROVEMENTS:
    - $file var optional param for reading specific files separated by comma,
      empty = all files
*/
function read_transactions(String $files = ""): ?array {
    /* NOT IMPLEMENTED
    ~~~~~
    if (empty($files)) {
        
    } else {
        $files = explode(',', $files);
    }
    ~~~~~
    */
    $input_file_dir = FILES_PATH.'sample_1.csv';
    if (!file_exists($input_file_dir)) {
        echo "File does not exist.";
        return null;
    }

    $file = fopen($input_file_dir, 'r');
    echo "Success!";
    echo "<br />";
    fgets($file);

    $arr_trans = array();
    while(($line = fgets($file)) !== false) {
        //echo $line . "<br />";
        $line = explode(",", $line);
        $arr_trans_row = array('date' => $line[0],
            'check_num' => $line[1],
            'desc' => $line[2],
            'amt' => $line[3]);
        array_push($arr_trans, $arr_trans_row);
    }
    fclose($file);
    
    return $arr_trans;
}


// ~~~~~~~~~~~~~~~~
// HELPER FUNCTIONS
// ~~~~~~~~~~~~~~~~
function prettyPrintArray(array $value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}