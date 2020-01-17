<?php

function decode_morse(string $code): string {
    // split string by words

    $previousValue = "";
              
    $answer = "";
    
    $splitString = explode(" ", $code);
    // print_r($splitString);
    
    // $a = array_map('strval', $splitString);
                            
    $strParams = [
           

        '.-' => 'A',
        '-...' => 'B', 
        '-.-.' => 'C', 
        '-..' => 'D', 
        '.' => 'E', 
        '..-.' => 'F', 
        '--.' => 'G', 
        '....' => 'H',
        '..' => 'I', 
        '.---' => 'J', 
        '-.-' => 'K', 
        '.-..' => 'L', 
        '--' => 'M', 
        '-.' => 'N', 
        '---' => 'O', 
        '.--.' => 'P',
        '--.-' => 'Q', 
        '.-.' => 'R', 
        '...' => 'S', 
        '-' => 'T', 
        '..-' => 'U', 
        '...-' => 'V', 
        '.--' => 'W', 
        '-..-' => 'X',
        '-.--' => 'Y', 
        '--..' => 'Z',
        // ' ' => ' '
                     
              ];
              
    foreach($splitString as $string) {

        if($string === "" && $previousValue === "") {
            $answer .= " ";

            // $answer .= "TWO BLANKS";
            // echo "test";
        }
        // if ($string == $answer) {
        //     $answer .= "";

        //     } 
            // elseif(empty($string)) {
            //             $answer .= " ";
            // }
            else {
            
            $newLetter = strtr($string, $strParams);
            
            // echo $string . "<br>";
            
            // echo $newLetter . "<br>";

            $previousValue = $string;
            
            $answer .= $newLetter;
                        
            }
                    
    }
                             
              //     echo strtr('...', $strParams);
              
              // $conversion = array_map(strtr($splitString, $strParams), $splitString);
              
              // print_r($conversion);
              
        echo $answer;
        
        return $answer;
}

decode_morse('.... . -.--   .--- ..- -.. .');

?>