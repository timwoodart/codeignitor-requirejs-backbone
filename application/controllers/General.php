<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller contains the general home site pages.
 *
 */

class General extends MY_Controller
{
	/**
	 * Site Default Landing Page.
	 *
	 * @access public
	 * @return void
	 */
	public function index()
	{
		// Load via MY_Controller
		$this->set_page_title('Your Custom Page Title');
		$this->set_meta_description('Your Custom Meta Description.');
		$this->load_css(array(
			// relative path to your page specific css eg: /css/example.css
			'css/test.css'
		));
		$this->load_js(array(
			// relative path to your page specific javascript eg: /js/example.js
			// Remember we are going to handle the JS with require.js
		));

		// Do something here...
		$foo = 'bar';

		// Assign your data to an array
		$data = array(
			'foo' => $foo
		);

		// relative path to your views file.php eg: index.php or custom/index.php
		// pass your data to the view
		$this->load->view('/general/index', $data);
	}

	/**
	 *
	 * Example of using another layout and view template for your view if needed
	 *
	 * @access public
	 * @return void
	 *
	*/
	public function highlight(){
		$this->set_page_title('Example of another page');
		$this->set_meta_description('Example of another page Meta Description.');

		// Set another layout
		$this->layout = 'highlight';

		// Do something here...
		// $foo = 'bar';

		// Assign your data to an array
		$data = array(
			//'baz' => $foo
		);

		// Load another view and pass the data
		$this->load->view('/example/index', $data);
	}
}