<?php
/*
+---+
| 1 | 
+---+
Print the sentence: Welcome to PHP!
*/

echo "<h1>Welcome to PHP</h1>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 2 | 
+---+
Print the sentence: PHP stands for "Hypertext Preprocessor"!
*/

echo '<p>PHP stands for "Hypertext Preprocessor"!</p>';

// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 3 | 
+---+
Print the following sentence as a paragraph: PHP stands for "Hypertext Preprocessor"!
*/

echo 'PHP stands for "Hypertext Preprocessor"!';

// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 4 | 
+---+
Print the following acronyms - every acronym in a new line:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/

$HTML = 'HTML - Stands for Hypertext Markup Language';
$CSS = 'CSS - Stands for Cascading Stylesheet';
$JS = 'JS - Stands for JavaScript';
$PHP = 'PHP - Stands for Hypertext Preprocessor';
$SQL = 'SQL - Stands for Structural Query Language';
echo $HTML.'<br />'.$CSS.'<br />'.$JS.'<br />'.$PHP.'<br />'.$SQL;
// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 5 | 
+---+
Print the following acronyms in unordered list - <ul> ... </ul>:

HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language
*/
$HTML ='<ul><li>HTML - Stands for Hypertext Markup Language</li>';
$CSS = '<li>CSS - Stands for Cascading Stylesheet</li>';
$JS = '<li>JS - Stands for JavaScript</li>';
$PHP = '<li>PHP - Stands for Hypertext Preprocessor</li>';
$SQL = '<li>SQL - Stands for Structural Query Language</li></ul>';

$sentence  = $HTML;
$sentence .= '<br>';
$sentence .= $CSS;
$sentence .= '<br>';
$sentence .= $JS;
$sentence .= '<br>';
$sentence .= $PHP;
$sentence .= '<br>';
$sentence .= $SQL;
echo "$sentence";
?>