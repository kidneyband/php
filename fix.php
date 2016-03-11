<?php  
	const PRIVATE_KEY = "-----BEGIN RSA PRIVATE KEY-----
MIICXwIBAAKBgQDn3AbTfiFrkgKD+KOnFj19DhuTKyt/RDn7nW5vhtGCJ8UFIYDI
3OQ10eLS3scgcbO27f3gSIYG0GRZaIDD8AHFs6o2OY7/jQwAh4N0juoeYkIte3jW
ZXELexBwF2xrU+faMQHxvklH5KITzcrpjrQB7UsZwiWtU4WN+VY4lBk9rQIDAQAB
AoGBAIOeSJW4bRpWeW0XMTeBjYg3APpLMFb/kPa/yNgwrS/4iYQ/H49mrXnL2rof
0uQdB4rZkRvHr6WgmMaUZzxTO309f0nYpTqxBQsrQglTUOOfOxWgHxZIlQI5bLox
0NZZThtVet4mCtqM16jzZxyqo1sMboQfvFDX0zJ96CtGAjzBAkEA/qQlYhRrBHt5
Cs1sF7aufHteKDcdxYvs8YBWK75q1szZASOh8RkZrbIRn5FdSXOgmOOcYzUIBIwe
V4o85zw78QJBAOkYwnHu1c51WOuUOM2rDYYKfLOfXv4od3InS/26kNc+4O5RKTLk
TgH3AhHt071x1JV0dPecAqMDhYw9jjVciX0CQQDcYBbyURVlJa7VyH5572IG3YXZ
bAnaA4UmZJku9nbkOxi7QalPTRfKGUfjPxzrCqS8bI/V0/mCZfmEbWDUBm8hAkEA
h5tm6/+FlXIBhDQcA9LisDuDpsAt9HC4ZMnl1LvoLcEf/KVs8XWOyGfaZXHWAF2r
zjMNJUw24H1ZAWiCRhsKxQJBAKpqCRosL5/6cnswhDHl9Iy0yz3NcyTvRuIn7Vzz
fApZyj5DuAlYK2kRfF4kNWLEx1Rz2XU4D/vCbMpSp/8HJFo=
-----END RSA PRIVATE KEY-----";


$priviteKey = openssl_pkey_get_private(PRIVATE_KEY);
$str = "chenyajun";
$encrypted = "";
if (openssl_encrypt($str, $encrypted, $priviteKey)) {
	echo $encrypted;
}


?>