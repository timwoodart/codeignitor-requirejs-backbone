<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * My_Controller base for common functionality.
 * @link http://ellislab.com/codeigniter/user-guide/general/core_classes.html
 *
 */

class MY_Controller extends CI_Controller
{
	/**
	 * Set the default layout.
	 *
	 * @access public
	 * @var string
	 */
	public $layout = 'default';

	/**
	 * Override parent __construct().
	 *
	 * @access public
	 */
	public function __construct()
	{
		parent::__construct();

		// Load global css here.
		$this->load_css(array(
			'css/normalize.css',
			'css/global.css'
		));

		// Load global js here.
		$this->load_js(array(
			'js/libs/modernizr.js'
		));
	}

	/**
	 * Set page title.
	 *
	 * @access protected
	 * @param  string $page_title
	 */
	protected function set_page_title($page_title)
	{
		$this->load->vars(array('page_title' => $page_title));
	}

	/**
	 * Set meta description.
	 *
	 * @access protected
	 * @param  string $meta_description
	 */
	protected function set_meta_description($meta_description)
	{
		$this->load->vars(array('meta_description' => $meta_description));
	}

	/**
	 * Load css styles.
	 *
	 * @access protected
	 * @param  array $css
	 */
	protected function load_css(array $css)
	{
		// If globals exist - combine the globals with local
		if ($og_css = $this->load->get_var('site_css')) {
			// merge
			$css = array_merge($og_css, $css);
			// get rid of duplicates
			$css = array_unique($css);
		}

		$this->load->vars('site_css', $css);
	}

	/**
	 * Load javascript files.
	 *
	 * @access protected
	 * @param  array $js
	 */
	protected function load_js(array $js)
	{
		// If globals exist - combine the globals with local
		if ($og_js = $this->load->get_var('site_js')) {
			// merge
			$js = array_merge($og_js, $js);
			// get rid of duplicates
			$js = array_unique($js);
		}

		$this->load->vars('site_js', $js);
	}

	/**
	 * Return json data.
	 *
	 * @access protected
	 * @param  array $data
	 * @link http://ellislab.com/codeigniter/user-guide/libraries/output.html
	 *
	 */
	protected function return_json($data)
	{
		// destroy layout
		unset($this->layout);

		// Set content type and output
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($data));
	}
}