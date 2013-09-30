<?php

/***
  *    
  *    @author - Skylar Schipper
  *	   @copyright - 2011 (c) Skylar Schipper
  *			(All rights reserved)
  *
  *    TWSearch.php
  *    12/14/2011
  *
  *
  *	   VERSION: 0.2.2
  *
/////////////////////////////////////////////////////////

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:
    * Redistributions of source code must retain the above copyright
      notice, this list of conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright
      notice, this list of conditions and the following disclaimer in the
      documentation and/or other materials provided with the distribution.
    * Neither the name of Skylar Schipper nor the names of any contributors may 
      be used to endorse or promote products derived from this software without 
      specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL SKYLAR SCHIPPER BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

/////////////////////////////////////////////////////////
  *
  *
  *
  *
  *
  *
***/
	
// Set if you want the Twitter API to return entities
define('INCLUDE_ENTITIES',true);
// Default Twitter Search API
define('TW_API_SEARCH','http://search.twitter.com/search.json?q=');
// If no search string is set perform this search string
define('DEF_SEARCH','Twitter');


/**
*	<a> Class for Mentions URL's and Hashes
*/
define('MEN_CLASS','tw-mention');
define('URL_CLASS','tw-url');
define('HASH_CLASS','tw-hash');

// Default Tweets loop wrap
define('DEFAULT_TWEETS_WRAP',"<div class=\"tw-tweet\">%tweet%</div>");
	
class TWSearch {
	private $SEARCH;
	private $URL;
	public $DATA;
	public $RESULTS;
	
	// performs the Request to twitter
	function perform(){
		self::_make_query();
		self::_curl_tw($this->URL);
	}
	// Gets the tweet at index
	function tweet($rec=0, $echo=true){
		if(!$this->RESULTS){
			self::perform();
		}
		$tw = self::_parse_tweet($rec);
		if($echo){
			echo $tw['html'];
			return(true);
		}
		return($tw['html']);
	}
	function tweets($wrap=DEFAULT_TWEETS_WRAP, $echo=true){
		self::perform();
		for($i = 0; $i<count($this->DATA->results); $i++){
			$t[] = self::tweet($i, false);
		}
		if(!$t){
			return(false);
		}
		if($echo){
			foreach($t as $tw){
				$s = str_replace("%tweet%", $tw, $wrap);
				echo($s);
			}
			return(true);
		} else {
			return($t);
		}
	}
	
	// set search query term
	function search_query($q){
		$this->SEARCH = urlencode($q);
	}
	
	
	/**
	*
	*	Begin Private Methods
	*
	*/
	
	// parse thw tweet data
	private function _parse_tweet($id=0){
		// If another index is specified set vars
		if($id!=0){
			$text = $this->DATA->results[$id]->text;
			$res = $this->DATA->results[$id];
		} else {
			$text =  $this->RESULTS->text;
			$res = $this->RESULTS;
		}
		// Unencoded HTML
		$html = $text;
		// Check for Mentions
		if(isset($res->entities->user_mentions)){
			$html = self::_parse_mentions($html, $res);
		}
		// Check for Links
		if(isset($res->entities->urls)){
			$html = self::_parse_urls($html, $res);
		}
		// Check for Hashtags
		if(isset($res->entities->hashtags)){
			$html = self::_parse_hash($html, $res);
		}
		$html = html_entity_decode($html);
		$text = html_entity_decode($text);
		return(array('string' => $text, 'html' => $html));
	}
	// Parse Mentions
	private function _parse_mentions($html, $res){
		for($i = 0; $i<count($res->entities->user_mentions); $i++){
			$name = $res->entities->user_mentions[$i]->screen_name;
			$html = str_replace("@".$name, "<a class=\"". MEN_CLASS ."\" href=\"http://twitter.com/$name/\">@$name</a>", $html);
		}
		return($html);
	}
	// Parse URL's
	private function _parse_urls($html, $res){
		for($i = 0; $i<count($res->entities->urls); $i++){
			$url = $res->entities->urls[$i]->url;
			$url_d = $res->entities->urls[$i]->display_url;
			$html = str_replace($url, "<a class=\"". URL_CLASS ."\" href=\"$url\">$url_d</a>", $html);
		}
		return($html);
	}
	// Parse the Hashtags
	private function _parse_hash($html, $res){
		for($i = 0; $i<count($res->entities->hashtags); $i++){
			$ht = $res->entities->hashtags[$i]->text;
			$html = str_replace("#$ht", "<a class=\"". HASH_CLASS ."\" href=\"http://twitter.com/#!/search?q=%23$ht\">#$ht</a>", $html);
		}
		return($html);
	}
	
	
	/**
	*	URL and CURL set up and perform
	*/
	// Make the query string
	private function _make_query(){
		if(!$this->SEARCH){
			self::search_query(DEF_SEARCH);
		}
		$url = TW_API_SEARCH . $this->SEARCH;
		if(INCLUDE_ENTITIES){
			$url .= "&include_entities=true";
		}
		$this->URL = $url;
	}
	// Request Twitter data
	private function _curl_tw($url){
		$c = curl_init();
        curl_setopt($c, CURLOPT_URL, $url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        $resp = curl_exec($c);
        curl_close($c);
        $ut = str_replace('\u2026','&#8230;',$resp);
        $ut = str_replace('\n', '<br>', $ut);
        $this->DATA = json_decode($ut);
        $this->RESULTS = $this->DATA->results[0];
	}
	/**
	*
	*	Construct / Destruct
	*
	*/
	function __construct(){
		$this->SEARCH = false;
		$this->URL = false;
		$this->DATA = false;
		$this->RESULTS = false;
	}
	function __destruct(){
	}
}
?>