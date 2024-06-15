<?php
$url = 'https://aniwave.to/home'; // Replace with the actual URL of mehrab.com

// Fetch the content using cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Handle potential errors
if (curl_errno($ch)) {
  echo 'Error fetching content: ' . curl_error($ch);
} else {
  $content = curl_exec($ch);
  curl_close($ch);

  // Display the fetched content
  echo $content;
}
?>
