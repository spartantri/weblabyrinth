<?php
/**
 * WebLabyrinth
 *
 * config.inc.php
 *
 * Configuration options for WebLabyrinth
 *
 * All code Copyright (c) 2010-2011, Ben Jackson and Mayhemic Labs - 
 * bbj@mayhemiclabs.com. All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *     * Redistributions of source code must retain the above copyright
 *       notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *     * Neither the name of the author nor the names of contributors may be
 *       used to endorse or promote products derived from this software without
 *       specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 * 
 */

	global $config;
	$config = array(
		//Web Path where WebLabyrinth is installed
		'web_path' => '/',

		//Text file to generate text from
		'corpus' => 'alice.txt',

		//Database to track crawlers
		'tracking_db' => '/var/www/html/labyrinth.db',

		'bogus_email' => array(
			//Do we want to generate mailto: in addition to web links?
			'enabled' => 'false',

			//Domain to generate addresses to
			'domain' => '',

			//Probability (out of 100) of links generated to be e-mail
			'probability' => 10,
		),

		//How many levels deep do we want to wait before we trigger an alert?
		'alert_levels_deep' => 3,

		//Do we want generate an alert if a host we have never logged before
		//connects to the labyrinth for the first time?
		'alert_on_new' => true,
		
		'alert_syslog' => array(
			//Do we want to generate syslog alerts?
			'enabled' => 'true'
		),

		'alert_email' => array(
			//Do we want to generate email alerts?
			'enabled' => 'true',

			//e-mail to send alerts to
			'address' => 'root@localhost'
		),

		'alert_ids' => array(
			//Do we want to try to cause an IDS alert?
			'enabled' => 'true',

			//Text to trigger IDS alert
			'text' => 'honorificabilitudinitatibus'
		)
	);
?>
