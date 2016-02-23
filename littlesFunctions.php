<?php
function handle_sql_errors($query, $error_message) {
    echo '<pre>';
    echo $query;
    echo '</pre>';
    echo $error_message;
    die;
}
function sec ($string) {
	 return htmlspecialchars($string);
}