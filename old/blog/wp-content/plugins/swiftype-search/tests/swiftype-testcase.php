<?php

class SwiftypeTestCase extends WP_UnitTestCase {
  // Checks if given callback is registered as a filter for a given tag in wordpress
  function assertHasFilter($tag, $function_to_check) {
    $this->assertGreaterThan(0, has_filter($tag, $function_to_check));
  }

  // Returns swiftype plugin object for current request
  function globalPluginObject() {
    global $swiftype_plugin;

    return $swiftype_plugin;
  }

  // Returns a valid API key if it is available in environment or skips the test if not
  function valid_api_key() {
    $api_key = getenv("SWIFTYPE_API_KEY");
    if ($api_key) return $api_key;

    // Skip this test
    $message = 'No SWIFTYPE_API_KEY environment variable found';
    $this->markTestSkipped($message);
    throw new Exception($message);
  }
}