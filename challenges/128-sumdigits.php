<?php
/**
 * June 5th, 2013: Sum-the-Digits, Part II (easy)
 * 
 * Given a well-formed (non-empty, fully valid) string of digits, let the integer N be the sum of digits.
 * Then, given this integer N, turn it into a string of digits. Repeat this process until you only have one digit left.
 *
 * @link http://www.reddit.com/r/dailyprogrammer/comments/1fnutb/06413_challenge_128_easy_sumthedigits_part_ii/ Challenge source.
 * @author Benedict Etzel <developer@beheh.de>
 */
$stdin = fopen('php://stdin', 'r');
for($s = $n = intval(fgets($stdin)); $n > 9; $s = $n) {
	for($i = $n = 0; $i < strlen($s); $i++) {
		$n += substr($s, $i, 1);
	}
	echo $n.PHP_EOL;
}
