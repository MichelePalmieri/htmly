<?php
//mik begin
function msglanguage($key)
{
   // echo $key;
    static $_language = array();
    $file_language_en = 'lang/lang-en.ini';
    $file_language = 'lang/lang-'.config('language').'.ini';
//    if ($key === 'source') {
		if (file_exists($file_language)) {
			$_language = parse_ini_file($file_language, true);
		} else if (file_exists($file_language_en)) {
			$_language = parse_ini_file($file_language, true);
		}	
  //  } else 
    return (isset($_language[$key]) ? $_language[$key] : 'no language key ['.$key.']');
}
//mik end
?>
