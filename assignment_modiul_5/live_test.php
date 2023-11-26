<!-- Task 1:
Write a PHP code to read the content of a text file and display it on the webpage.
Use the following template: -->

<?php

   //  $file = '{{file_path}}'; use it following template
$file = '{{file_path}}';

    // Open the file
$handle = fopen($file, 'r');

if ($handle) {
        // Read the content of the file
    $content = fread($handle, filesize($file));

        // Close the file
    fclose($handle);

        // Display the content
    echo $content;
}

?>

<!-- Task 2: .
Write a PHP code to append new data to an existing text file.
Use the following template -->

<?php

  // $file = '{{file_path}}' use it following template;
$file = '{{file_path}}';

  // $data = '{{data}}' use it following template;
$data = "{{data}}";

    // Open the file in append mode
$handel = fopen($file, 'a');

if ($handel) {
        // Write the data to the file
    fwrite($handel, $data . "\n");

        // Close the file
    fclose($handel);

}

?>


