
<?php

class WebsiteParser
{
    public $target_url = '';
    public $base_url = '';
    public $absolute_url = '';
 
    public $content = null;
    public $href_links = array();
    public $image_sources = array();
 
    private $full_link_pattern = '/\/\/|www\.|mailto:/';
    private $href_filter_pattern = '/\<|#|javascript:void/';
    private $href_expression = '/\<a\s[^>]*href\s*=\s*\"([^\"]*)\"[^>]*>(.*?)<\/a>/';
    private $img_expression = '/\<img[^>]+src=([\'"])?((?(1).+?|[^\s>]+))(?(1)\1)/';
 
    private $curl_options = array(
        CURLOPT_RETURNTRANSFER => true, // return web page
        CURLOPT_HEADER => false, // don't return headers
        CURLOPT_FOLLOWLOCATION => true, // follow redirects
        CURLOPT_ENCODING => "", // handle all encodings
        CURLOPT_USERAGENT => "spider", // who am i
        CURLOPT_AUTOREFERER => true, // set referrer on redirect
        CURLOPT_CONNECTTIMEOUT => 60, // timeout on connect
        CURLOPT_TIMEOUT => 120, // timeout on response
        CURLOPT_MAXREDIRS => 5, // stop after 10 redirects
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false
    );
 
    public $message = '';
 
    function __construct($url)
    {
        $this->target_url = $url;
        $this->setUrls();
    }
 
    /**
     * A public function to grab and return content
     * @params boolean $grab, flag to perform real time grab or use class content
     * @returned text $content, truncated text
     */
    public function getContent($grab = false)
    {
        if ($grab)
            $this->grabContent();
 
        return $this->content;
    }
 
    /**
     * Extract all href links from grab contents
     * @params boolean $grab, flag to perform real time grab or use class content
     * @returned array $href_links, an array with extracted hyper links
     */
    public function getHrefLinks($grab = true)
    {
        if ($grab)
            $this->grabContent();
 
        if (!is_null($this->content)) {
            preg_match_all($this->href_expression, $this->content, $match_links);
 
            $unique_urls = array_unique($match_links[1]);
 
            if (count($unique_urls)) {
 
                foreach ($unique_urls as $index => $url) {
                    $title = trim($match_links[2][$index] ? $match_links[2][$index] : $url);
 
                    if (!(preg_match($this->href_filter_pattern, $url, $filter_out_url)
                        || preg_match($this->href_filter_pattern, $title, $filter_out_link))
                    ) {
                        if (!preg_match($this->full_link_pattern, $url, $match)) {
                            if (strpos($url, '/') == 0) {
                                $url = $this->base_url . $url;
                            } else {
                                $url = $this->absolute_url . $url;
                            }
                        }
 
                        $this->href_links[] = array($url, $title);
                    }
                }
            }
        }
 
        return $this->href_links;
 
    }
 
    /**
     * Extract all images sources from grabbed contents
     * @param boolean $grab, flag to perform real time grab or use class content
     * @return array, an array of extracted images sources
     */
    public function getImageSources($grab = false)
    {
        if ($grab)
            $this->grabContent();
 
        if (!is_null($this->content)) {
 
            preg_match_all($this->img_expression, $this->content, $match_images);
 
            foreach ($match_images[2] as $match_image) {
 
                $match_image = trim($match_image);
 
                if ($match_image) {
 
                    if (!preg_match($this->full_link_pattern, $match_image, $match)) {
                        if (strpos($match_image, '/') == 0) {
                            $match_image = $this->base_url . $match_image;
                        } else {
                            $match_image = $this->absolute_url . $match_image;
                        }
                    }
 
                    $this->image_sources[] = $match_image;
                }
            }
        }
 
        $this->image_sources = array_values(array_unique(array_filter($this->image_sources)));
 
        return $this->image_sources;
 
    }
 
    /**
     * Truncate text in to preferred length
     * @params text $text, input text to truncate
     * @params int $length int, how many character to keep
     * @params string $replace_by string, text to explain continuity
     * @returned text $text, truncated text
     */
    public function truncateText($text, $length = 50, $replace_by = '...')
    {
        if (strlen($text) > $length) {
            return substr($text, 0, $length - 3) . $replace_by;
        }
 
        return $text;
    }
 
    /**
     * Prepare base and full url from given website link to grab
     */
    private function setUrls()
    {
        $host = parse_url($this->target_url, PHP_URL_HOST);
        $host = $host ? $host : parse_url($this->target_url, PHP_URL_PATH);
        $this->base_url = 'http://' . rtrim($host, '/') . '/';
 
        $this->absolute_url = substr($this->target_url, 0, strrpos($this->target_url, '/'));
        $this->absolute_url = $this->absolute_url ? $this->absolute_url . '/' : $this->base_url;
    }
 
    /**
     * A private method grabs website content using cUrl
     * And put content it into a class variable
     * Can be replace by file_get_contents() but it's very slow, cpu intensive
     * and does not handle redirects, caching, cookies, etc.
     */
    private function grabContent()
    {
 
        try {
            $ch = curl_init($this->target_url);
 
            curl_setopt_array($ch, $this->curl_options);
 
            $this->content = curl_exec($ch);
 
            if ($this->content === FALSE) {
                throw new Exception();
            }
 
        } catch (Exception $e) {
            $this->message = 'Unable to grab site contents';
        }
 
        curl_close($ch);
    }
}

?>


<?php


$parser = new WebsiteParser('http://www.adspace.lk/');
$links = $parser->getHrefLinks();
$images = $parser->getImageSources();
 
echo "<pre>";
print_r($links); //Print the links
echo "<pre>";



?>