<?php
if (!$conn) { 
# Display error masseage, if fail 
die('Could not connect to pgSQL: ' . pg_last_error()); 
} 

