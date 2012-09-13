<?php
/**
 * [Admin] Tutorials Controller
 *
 * Control structure for the tutorials portion of Learn.
 *
 * @package		Learn
 * @subpackage	Admin
 * @category	Controllers
 * @author		Axxim, LLC
 * @link		http://learn.axxim.net/admin/tutorials
 */
class Tutorials extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('admin/tutorials_model');
	}
	
	/**
	 * Tutorial Administration Homepage
	 *
	 * @access	public
	 * @return	view
	 */
	public function index() {
		var_dump($this->tutorials_model->get_all());
	}

	public function insert() {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == FALSE) {
			
			$data['meta']['title'] = 'Add Tutorial';
			$data['content'] = $this->load->view('admin/tutorials/insert', $data, true);
		} else {
			

			// Redirect to the tutorial.
		}

		$this->load->view('layouts/default', $data);
	}

}

/* End of file tutorials.php */
/* Location: ./application/controllers/admin/tutorials.php */