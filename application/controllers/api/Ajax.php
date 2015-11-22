<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Ajax API handling operations
 *
 */

class Ajax extends MY_Controller
{
	/**
	 * Override construct()
	 *
	 * @access public
	 */
	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * default Ajax API index to only accept POST and return JSON
	 * If your intention is to update your db or some other data manipulation,
	 * force your api to only accept POST, its safer
	 *
	 * @access public
	 * @return JSON
	*/
	public function index() {

		if ($this->input->is_ajax_request() && !empty($_POST) ) {
			
			// Mock up Ajax request to load data from model
			// Configure this to your liking
			$id = $_POST['id'];
			if ($id != null) {
				
				// Query and/or process here
				//$this->load->model('example_model');
				//$data = $this->example_model->get($id);

				// just example data to show we are making connection. delete
				$data = array('success' => 'true');
			}

			// Error fallback
			if (empty($data)) {
				$data = array('success' => 'false');
			}
			$this->return_json($data);

		} else {
			// Access Error Fallback
			exit('Boo...');
		}
	}


	/**
	 * If you want to use GET in your ajax calls you could use without forcing POST
	 * basic $GET data from Ajax in URL
	 *
	 * @access public
	 * @param String $id
	 * @return JSON
	*/
	public function get($id = null) {

		if ( $this->input->is_ajax_request() ) {
			if ($id != null) {

				// Query here
				// $foo = 'bar';

				// and customize your callback if need be
				$data = array(
					//'baz' => $foo,
					'success' => 'true'
				);
			}

			// Error fallback
			if (empty($data)) {
				$data = array('success' => 'false');
			}

			// Return JSON
			$this->return_json($data);

		} else {
			// Access Error Fallback
			exit('Boo...');
		}
	}

	/**
	 * If your intention is to update your db or some other data manipulation,
	 * force your api to only accept POST, its safer
	 *
	 * @access public 
	 * @return JSON
	 */
	public function post() {
		if ($this->input->is_ajax_request() && !empty($_POST)) {

			// Mock up Ajax request to load data from model
			// Configure this to your liking
			$id = $_POST['id'];
			if ($id != null) {
				// do some query or updating here

				// and customize your callback
				$data = array('success' => 'true');
			}

			// Error fallback
			if (empty($data)) {
				$data = array('success' => 'false');
			}

			// Return JSON
			$this->return_json($data);

		} else {
			// Access Error Fallback
			exit('Boo...');
		}
	}
}