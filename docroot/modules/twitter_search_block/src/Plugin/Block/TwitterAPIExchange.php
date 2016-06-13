<?php
namespace Drupal\twitter_search_block\Plugin\Block;
/**
 * TwitterAPIExchange library for settings.
 */
class TwitterAPIExchange {
  /**
   * OAuth Access Token.
   *
   * @var string
   */
  private $oauthAccessToken;
  /**
   * OAuth Access Token Secret.
   *
   * @var string
   */
  private $oauthAccessTokenSecret;
  /**
   * Consumer Key.
   *
   * @var string
   */
  private $consumerKey;
  /**
   * Consumer Secret.
   *
   * @var string
   */
  private $consumerSecret;
  /**
   * Fields that are posted for request.
   *
   * @var array
   */
  private $postfields;
  /**
   * Field that are GET after request.
   *
   * @var string
   */
  private $getfield;
  /**
   * OAuth value.
   *
   * @var mixed
   */
  protected $oauth;
  /**
   * The request Url.
   *
   * @var string
   */
  public $url;
  /**
   * Method that is being requested.
   *
   * @var string
   */
  public $requestMethod;

  /**
   * Create the API access object.
   *
   * @param array $settings
   *   Set the access token in array.
   *
   * @{
   *
   * Requires an array of settings oauth access token, oauth access
   * token secret, consumer key, consumer secret.
   *
   * These are all available by creating your own application, the cURL library.
   *
   * @}
   *
   * @throws \Exception
   *   When cURL isn't installed/incorrect settings parameters.
   */
  public function __construct(array $settings) {

    if (!in_array('curl', get_loaded_extensions())) {
      throw new Exception('You need to install cURL, see: http://curl.haxx.se/docs/install.html');
    }

    if (!isset($settings['oauth_access_token'])
          || !isset($settings['oauth_access_token_secret'])
          || !isset($settings['consumer_key'])
          || !isset($settings['consumer_secret'])
      ) {
      throw new Exception('Make sure you are passing in the correct parameters');
    }

    $this->oauth_access_token = $settings['oauth_access_token'];
    $this->oauth_access_token_secret = $settings['oauth_access_token_secret'];
    $this->consumer_key = $settings['consumer_key'];
    $this->consumer_secret = $settings['consumer_secret'];
  }

  /**
   * Set postfields array, example: array('screen_name' => 'J7mbo').
   *
   * @param array $array
   *   Array of parameters to send to API.
   *
   * @throws \Exception
   *   When you are trying to set both get and post fields.
   *
   * @return \TwitterAPIExchange
   *   Instance of self for method chaining
   */
  public function setPostfields(array $array) {

    if (!is_null($this->getGetfield())) {
      throw new Exception('You can only choose get OR post fields.');
    }

    if (isset($array['status']) && substr($array['status'], 0, 1) === '@') {
      $array['status'] = sprintf("\0%s", $array['status']);
    }

    foreach ($array as $key => &$value) {
      if (is_bool($value)) {
        $value = ($value === TRUE) ? 'true' : 'false';
      }
    }

    $this->postfields = $array;

    // Rebuild oAuth.
    if (isset($this->oauth['oauth_signature'])) {
      $this->buildOauth($this->url, $this->requestMethod);
    }

    return $this;
  }

  /**
   * Set getfield string, example: '?screen_name=J7mbo'.
   *
   * @param string $string
   *   Get key and value pairs as string.
   *
   * @throws \Exception
   *
   * @return \TwitterAPIExchange
   *   Instance of self for method chaining
   */
  public function setGetfield($string) {

    if (!is_null($this->getPostfields())) {
      throw new Exception('You can only choose get OR post fields.');
    }

    $getfields = preg_replace('/^\?/', '', explode('&', $string));
    $params = array();

    foreach ($getfields as $field) {
      if ($field !== '') {
        list($key, $value) = explode('=', $field);
        $params[$key] = $value;
      }
    }

    $this->getfield = '?' . http_build_query($params);

    return $this;
  }

  /**
   * Get getfield string (simple getter).
   *
   * @return string
   *   $this->getfields
   */
  public function getGetfield() {

    return $this->getfield;
  }

  /**
   * Get postfields array (simple getter).
   *
   * @return array
   *   $this->postfields
   */
  public function getPostfields() {

    return $this->postfields;
  }

  /**
   * Build the Oauth object using params set in construct and additionals.
   *
   * @param string $url
   *   The API url to use.
   * @param string $requestMethod
   *   Either POST or GET.
   *
   * @throws \Exception
   *
   * @return \TwitterAPIExchange
   *   Instance of self for method chaining
   */
  public function buildOauth($url, $requestMethod) {

    if (!in_array(strtolower($requestMethod), array('post', 'get'))) {
      throw new Exception('Request method must be either POST or GET');
    }

    $consumerKey              = $this->consumer_key;
    $consumerSecret           = $this->consumer_secret;
    $oauthAccessToken        = $this->oauth_access_token;
    $oauthAccessTokenSecret = $this->oauth_access_token_secret;

    $oauth = array(
      'oauth_consumer_key' => $consumerKey,
      'oauth_nonce' => time(),
      'oauth_signature_method' => 'HMAC-SHA1',
      'oauth_token' => $oauthAccessToken,
      'oauth_timestamp' => time(),
      'oauth_version' => '1.0',
    );

    $getfield = $this->getGetfield();

    if (!is_null($getfield)) {
      $getfields = str_replace('?', '', explode('&', $getfield));

      foreach ($getfields as $g) {
        $split = explode('=', $g);
        // In case a null is passed through.
        if (isset($split[1])) {
          $oauth[$split[0]] = urldecode($split[1]);
        }
      }
    }

    $postfields = $this->getPostfields();

    if (!is_null($postfields)) {
      foreach ($postfields as $key => $value) {
        $oauth[$key] = $value;
      }
    }

    $base_info = $this->buildBaseString($url, $requestMethod, $oauth);
    $composite_key = rawurlencode($consumerSecret) . '&' . rawurlencode($oauthAccessTokenSecret);
    $oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, TRUE));
    $oauth['oauth_signature'] = $oauth_signature;

    $this->url = $url;
    $this->requestMethod = $requestMethod;
    $this->oauth = $oauth;

    return $this;
  }

  /**
   * Perform the actual data retrieval from the API.
   *
   * @param bool $return
   *   If true,returns data.This is left for backward compatibility reasons.
   * @param array $curlOptions
   *   Curl options for this request.
   *   Additional Curl options for this request.
   *
   * @throws \Exception
   *
   * @return string
   *   json If $return param is true, returns json data.
   */
  public function performRequest($return = TRUE, $curlOptions = array()) {

    if (!is_bool($return)) {
      throw new Exception('performRequest parameter must be true or false');
    }

    $header = array($this->buildAuthorizationHeader($this->oauth), 'Expect:');

    $getfield = $this->getGetfield();
    $postfields = $this->getPostfields();

    $options = array(
      CURLOPT_HTTPHEADER => $header,
      CURLOPT_HEADER => FALSE,
      CURLOPT_URL => $this->url,
      CURLOPT_RETURNTRANSFER => TRUE,
      CURLOPT_TIMEOUT => 10,
    ) + $curlOptions;

    if (!is_null($postfields)) {
      $options[CURLOPT_POSTFIELDS] = http_build_query($postfields);
    }
    else {
      if ($getfield !== '') {
        $options[CURLOPT_URL] .= $getfield;
      }
    }

    $feed = curl_init();
    curl_setopt_array($feed, $options);
    $json = curl_exec($feed);

    if (($error = curl_error($feed)) !== '') {
      curl_close($feed);

      throw new \Exception($error);
    }

    curl_close($feed);

    return $json;
  }

  /**
   * Private method to generate the base string used by cURL.
   *
   * @param string $baseURI
   *   The base URI.
   * @param string $method
   *   String $method.
   * @param array $params
   *   Array $params.
   *
   * @return string
   *   Built base string.
   */
  private function buildBaseString($baseURI, $method, $params) {

    $return = array();
    ksort($params);

    foreach ($params as $key => $value) {
      $return[] = rawurlencode($key) . '=' . rawurlencode($value);
    }

    return $method . "&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $return));
  }

  /**
   * Private method to generate authorization header used by cURL.
   *
   * @param array $oauth
   *   Array of oauth data generated by buildOauth().
   *
   * @return string
   *   $return Header used by cURL for request
   */
  private function buildAuthorizationHeader(array $oauth) {

    $return = 'Authorization: OAuth ';
    $values = array();

    foreach ($oauth as $key => $value) {
      if (in_array(
            $key, array('oauth_consumer_key', 'oauth_nonce', 'oauth_signature',
              'oauth_signature_method', 'oauth_timestamp', 'oauth_token', 'oauth_version',
            )
        )) {
        $values[] = "$key=\"" . rawurlencode($value) . "\"";
      }
    }

    $return .= implode(', ', $values);
    return $return;
  }

  /**
   * Helper method to perform our request.
   *
   * @param string $url
   *   The request url.
   * @param string $method
   *   The request method eg. get.
   * @param string $data
   *   Data for PostField.
   * @param array $curlOptions
   *   Array $curlOptions.
   *
   * @throws \Exception
   *
   * @return string
   *   The json response from the server.
   */
  public function request($url, $method = 'get', $data = NULL, $curlOptions = array()) {

    if (strtolower($method) === 'get') {
      $this->setGetfield($data);
    }
    else {
      $this->setPostfields($data);
    }

    return $this->buildOauth($url, $method)->performRequest(TRUE, $curlOptions);
  }

}
