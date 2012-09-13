<?php
/**
 * [Admin] Tutorials Model
 *
 * Database communication for elevated permissions on tutorials.
 *
 * @package		Learn
 * @subpackage	Admin
 * @category	Models
 * @author		Axxim, LLC
 */
class Tutorials_model extends CI_Model  {

	protected $_table = 'tutorials';

	/**
	 * Init's the construct for models from CI
	 */
	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * Get all tutorials
	 *
	 * @access	public
	 * @return	array
	 */
	public function get_all() {
		$tutorials = $this->mongo_db->get($this->_table);

		return $tutorials;
	}

	/**
	 * Inserts a Tutorial
	 *
	 * @access	public
	 * @return	array
	 */
	public function insert() {
		$tutorials = $this->mongo_db->get($this->_table);

		return $tutorials;
	}


}

/* End of file tutorials_model.php */
/* Location: ./application/models/admin/tutorials_model.php */