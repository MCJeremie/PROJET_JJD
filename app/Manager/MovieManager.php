<?php /* app/Manager/MovieManager.php */
namespace Manager;

class MovieManager extends \W\Manager\Manager
{

	public function getRandom()
	{
		$sql = "SELECT * FROM " . $this->table . " ORDER BY RAND() LIMIT 1";
		$query = $this->dbh->query($sql);
		return $query->fetch();
	}

	public function search($search) {
		$sql = "SELECT * FROM " . $this->table . " WHERE title LIKE :search OR synopsis LIKE :search";
		$query = $this->dbh->prepare($sql);
		$query->bindValue(':search', '%'.$search.'%');
		$query->execute();
		return $query->fetchAll();
	}

}
