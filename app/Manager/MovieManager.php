<?php /* app/Manager/MovieManager.php */
namespace Manager;
use \Model\Movie;

class MovieManager extends \W\Manager\Manager
{
	public function find($id) {
		return new Movie(parent::find($id));
	}

	public function findAll($orderBy = '', $orderDir = 'ASC', $limit = NULL, $offset = NULL) {
		$results = parent::findAll($orderBy, $orderDir, $limit, $offset);
		$items = array();
		foreach($results as $result) {
			$items[] = new Movie($result);
		}
		return $items;
	}

	public function getRandom()	{
		return Movie::get('SELECT * FROM '. $this->table .' ORDER BY RAND() LIMIT 1');
	}

	public function search($search) {
		return Movie::getList('SELECT * FROM '. $this->table .' WHERE title LIKE :search OR synopsis LIKE :search', array('search' => '%'.$search.'%'));
	}

}
