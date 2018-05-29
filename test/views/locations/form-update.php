<?php
  //get id
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

  //get location
  $location = filter_input(INPUT_GET, 'location', FILTER_SANITIZE_STRING);
?>
<h1 class="page-header"> Formulier locatie updaten</h1>

<form action="index.php?controller=locations&action=update" method="post">
  <div class="form-group">
    <label for="location">Naam locatie: </label>
    <input class="form-control" name="location" id="location" value="<?php echo $location;?>">
    <input class="form-control" name="id" id="id" value="<?php echo $id;?>" type="hidden">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-default">Opslaan</button>
  </div>
</form>
