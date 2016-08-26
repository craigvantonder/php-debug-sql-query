<?php
// Create helper function to fetch the error information from the mysqli database connection
function dieSql($link)
{
  // Store the debug information
  $debug = debug_backtrace();
  // Die and dump the MySQL error information
  echo '
    <h2>MySQL Error</h2>
    <p><strong>Executing Script:</strong> '.$debug[0]['file'].'</p>
    <p><strong>On Line:</strong> '.$debug[0]['line'].'</p>
    <p><strong>MySQL Error Number:</strong> '.$debug[0]['args'][0]->errno.'</p>
    <p><strong>MySQL Error Information:</strong> '.$debug[0]['args'][0]->error.'</p>
  ';
  // Stop executing code
  exit;
}
