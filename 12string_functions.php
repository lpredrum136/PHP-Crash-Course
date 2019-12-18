<?php
// substr()
// Returns a portion of string
/* $output = substr('Hello', 1, 3);
echo $output; */

// strlen()
// Returns the length of string
/* $output = strlen('Hello world');
echo $output;
 */

// strpos()
// Finds the position of the first occurrence of a substring
/* $output = strpos('Hello world', 'o');
echo $output;
 */

// strrpos()
// Finds the position of the last occurrence of a substring
/* $output = strrpos('Hello world', 'o');
echo $output;
 */

// trim()
// Strips whitespace
/* $text = 'Hello world        ';
var_dump($text);

$trimmed = trim($text);
var_dump($trimmed);
 */

// strtoupper()
// Makes everything uppercase
/* $output = strtoupper('Hello world');
echo $output;
 */

// strtolower()
// Makes everything lowercase
/* $output = strtolower('HELLo World');
echo $output;
 */

// ucwords()
// Capitalise every word
/* $output = ucwords('hello world');
echo $output;
 */

// str_replace()
// Replace all occurrences of a search string with a replacement
/* $text = 'Hello World';
$output = str_replace('o', 'i', $text);
echo $output;
 */

// is_string()
// Check if string
/* $val = '22';
$output = is_string($val);
echo $output; */

/* $values = [true, false, null, 'abc', 33, '33', 24.4, '22.4', '', ' ', 0, '0'];
foreach ($values as $value)
  if (is_string($value)) echo "$value is a string<br>"; */

// gzcompress()
// Compress a string
$string = 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.';

$compressed = gzcompress($string);
echo $compressed;

$original = gzuncompress($compressed);
echo $original;
