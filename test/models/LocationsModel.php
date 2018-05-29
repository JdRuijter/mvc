<?php
/**
 * Locations Model
 */
class LocationsModel
{

    /**
     * Get all locations
     * @return array
     */
    public function getAll()
    {
        // get connection
        $dbConnection = getDbConnection();

        // run query
        $stmt = $dbConnection->prepare('SELECT * FROM locations');
        $stmt->execute();

        // get all rows as an arrayof objects
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    
    public function delete($id){
      $dbConnection = getDbConnection();

      // run query
      $stmt = $dbConnection->prepare('DELETE FROM locations WHERE id=:id');
      $stmt->bindParam(':id', $id);
      $stmt->execute();

      $affectedRows = $stmt->rowCount();
      //var_dump($affectedRows);
      return $affectedRows;

    }

    public function add($location){
      $dbConnection = getDbConnection();

      //run query
      $stmt = $dbConnection->prepare("INSERT INTO locations (`id`, `location`) VALUES (NULL, :location)");
      $stmt->bindParam(':location', $location);
      $stmt->execute();
    }

    public function update($id, $location){
      $dbConnection = getDbConnection();

      //run query
      $stmt = $dbConnection->prepare("UPDATE `locations` SET `location`=:location WHERE `id`=:id");
      $stmt->bindParam(':id', $id);
      $stmt->bindParam(':location', $location);
      $stmt->execute();
    }

}
