<?php

// Get the directory path to the images.
$dir = 'uploads';

// Get all the files in the directory.
$files = glob($dir . '/*');

// Iterate through the files and output them.
foreach ($files as $file) {
  // Check if the file is an image.
  $image_info = getimagesize($file);
  if ($image_info !== false) {
    // Output the image.
    echo '<img src="' . $file . '" />';
  }
}

?>
