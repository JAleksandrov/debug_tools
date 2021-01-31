<?php



function LogToFile($var1,$var2){
   //A PHP array containing the data that we want to log. 
    $dataToLog = array(
    $var1,
    $var2,
    'STORE THIS'
    );
 
    //Turn array into a delimited string using
    //the implode function
    $data = implode(" - ", $dataToLog);

    //Add a newline onto the end.
    $data .= PHP_EOL;

    //The name of your log file.
    //Modify this and add a full path if you want to log it in 
    //a specific directory.
    $pathToFile = 'log_name.log';

    //Log the data to your file using file_put_contents.
    file_put_contents($pathToFile, $data, FILE_APPEND);

    //REMEMBER TO GIVE PERMISSIONS TO LOG FILE!!!!!!
}




?>
