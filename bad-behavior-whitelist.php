<?php

// Analyze user agents claiming to be Opera

if (!defined('WP_BB_CWD'))
	die('');

// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!

// Inappropriate whitelisting WILL expose you to spam, or cause Bad Behavior
// to stop functioning entirely!  DO NOT WHITELIST unless you are 100% CERTAIN
// that you should.

// IP address ranges use the CIDR format.

// Includes four examples of whitelisting by IP address and netblock.
// All are commented out.
$wp_bb_whitelist_ip_ranges = array(
//	"10.0.0.0/8",
//	"172.16.0.0/12",
//	"192.168.0.0/16",
//	"127.0.0.1",
);

// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!

// Inappropriate whitelisting WILL expose you to spam, or cause Bad Behavior
// to stop functioning entirely!  DO NOT WHITELIST unless you are 100% CERTAIN
// that you should.

// You should not whitelist search engines by user agent. Use IP netblock
// instead. See http://whois.arin.net/ to locate the netblocks for an IP.

// User agents are matched by exact match only.

// Includes one example of whitelisting by user agent.
// All are commented out.
$wp_bb_whitelist_user_agents = array(
//	"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) It's me, let me in",
);

// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!
// DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER! DANGER!

// Do not edit below this line

function wp_bb_check_whitelist() {
	if (matchCIDR($wp_bb_remote_addr, $wp_bb_whitelist_ip_ranges)) return true;
	foreach ($wp_bb_whitelist_user_agents as $wp_bb_whitelist_user_agent) {
		if (!strcmp($wp_bb_http_user_agent, $wp_bb_whitelist_user_agent)) return true;
	}
	return false;
}
