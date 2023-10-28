<?php
defined( 'ABSPATH' ) || exit;

$rocket_cookie_hash = '41d5047fad9e6de2c78c2f7d6005c035';
$rocket_logged_in_cookie = 'wordpress_logged_in_41d5047fad9e6de2c78c2f7d6005c035';
$rocket_cache_mobile_files_tablet = 'desktop';
$rocket_cache_mobile = 1;
$rocket_do_caching_mobile_files = 1;
$rocket_cache_reject_uri = '/(?:.+/)?feed(?:/(?:.+/?)?)?$|/(?:.+/)?embed/|/(index\.php/)?(.*)wp\-json(/.*|$)';
$rocket_cache_reject_cookies = 'wordpress_logged_in_.+|wp-postpass_|wptouch_switch_toggle|comment_author_|comment_author_email_';
$rocket_cache_reject_ua = 'facebookexternalhit|WhatsApp';
$rocket_cache_query_strings = array();
$rocket_secret_cache_key = '';
$rocket_cache_ssl = 1;
$rocket_cache_ignored_parameters = array(
  'utm_source' => 0,
  'utm_medium' => 1,
  'utm_campaign' => 2,
  'utm_expid' => 3,
  'utm_term' => 4,
  'utm_content' => 5,
  'utm_id' => 6,
  'utm_source_platform' => 7,
  'utm_creative_format' => 8,
  'utm_marketing_tactic' => 9,
  'mtm_source' => 10,
  'mtm_medium' => 11,
  'mtm_campaign' => 12,
  'mtm_keyword' => 13,
  'mtm_cid' => 14,
  'mtm_content' => 15,
  'pk_source' => 16,
  'pk_medium' => 17,
  'pk_campaign' => 18,
  'pk_keyword' => 19,
  'pk_cid' => 20,
  'pk_content' => 21,
  'fb_action_ids' => 22,
  'fb_action_types' => 23,
  'fb_source' => 24,
  'fbclid' => 25,
  'campaignid' => 26,
  'adgroupid' => 27,
  'adid' => 28,
  'gclid' => 29,
  'age-verified' => 30,
  'ao_noptimize' => 31,
  'usqp' => 32,
  'cn-reloaded' => 33,
  '_ga' => 34,
  'sscid' => 35,
  'gclsrc' => 36,
  '_gl' => 37,
  'mc_cid' => 38,
  'mc_eid' => 39,
  '_bta_tid' => 40,
  '_bta_c' => 41,
  'trk_contact' => 42,
  'trk_msg' => 43,
  'trk_module' => 44,
  'trk_sid' => 45,
  'gdfms' => 46,
  'gdftrk' => 47,
  'gdffi' => 48,
  '_ke' => 49,
  'redirect_log_mongo_id' => 50,
  'redirect_mongo_id' => 51,
  'sb_referer_host' => 52,
  'mkwid' => 53,
  'pcrid' => 54,
  'ef_id' => 55,
  's_kwcid' => 56,
  'msclkid' => 57,
  'dm_i' => 58,
  'epik' => 59,
  'pp' => 60,
  'gbraid' => 61,
  'wbraid' => 62,
  'ssp_iabi' => 63,
  'ssp_iaba' => 64,
  'gad' => 65,
  'vgo_ee' => 66,
);
$rocket_cache_mandatory_cookies = '';
$rocket_cache_dynamic_cookies = array();
$rocket_permalink_structure = '';
