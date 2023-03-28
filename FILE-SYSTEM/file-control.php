<?php

system("clear");

// $fileName = "aa";
// $fileExt =".txt";
$folderName = "text-files";

// aa.txt

// touch($fileName.$fileExt);
// mkdir($folderName);
// touch($folderName."/".$fileName.$fileExt);

// var_dump(is_dir($folderName));
// if(!is_dir($folderName)){
//     mkdir($folderName);
// }

// touch($folderName."/"."aa".$fileExt);
// touch($folderName."/"."bb".$fileExt);
// touch($folderName."/"."cc".$fileExt);
// touch($folderName."/"."dd".$fileExt);
// touch($folderName."/"."ee".$fileExt);





// unlink($folderName."/".$fileName.$fileExt);
// rmdir($folderName);

if(is_dir($folderName)){
    // print_r(scandir($folderName));

    foreach(scandir($folderName) as $file){
        // if($file != "." && $file != ".."){
        //     echo $file."\n";
        // }

        // var_dump(is_file($folderName."/".$file));
        
        $currentFileName = $folderName."/".$file;


        if(is_file($currentFileName)){
            // echo $file."\n";
            unlink($currentFileName);
        }
    }

}

rmdir($folderName);

?>