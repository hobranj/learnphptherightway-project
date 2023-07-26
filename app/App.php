<?php

declare(strict_types = 1);

// Your Code

/*
    reads files in transactions directory

    FUTURE IMPROVEMENTS:
    - $file var optional param for reading specific files separated by comma,
      empty = all files
*/
function read_transactions(String $file = ""): void {
    /* NOT IMPLEMENTED
    ~~~~~
    if (empty($file)) {
        
    } else {
        $file = explode(',', $file);
    }
    ~~~~~
    */
    $input_file_dir = FILES_PATH.'sample_1.csv';
    if (!file_exists($input_file_dir)) {
        echo "File does not exist.";
        return;
    }

    $file = fopen($input_file_dir, 'r');
    echo "Success!";
}