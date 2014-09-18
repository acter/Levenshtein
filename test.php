<?php
/**
 *
 * @authors Your Name (you@example.org)
 * @date    2014-09-07 11:58:28
 * @version $Id$
 */

require_once("./levenshtein.php");
$l = new Levenshtein();
echo "距离：".$l->contrast('quite','quite');


