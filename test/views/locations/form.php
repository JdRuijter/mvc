<?php

 ?>
<h1 class="page-header"> Formulier locatie</h1>

<form action="index.php?controller=locations&action=add" method="post">
  <div class="form-group">
    <label for="location">Naam locatie: </label>
    <input class="form-control" name="location" id="location" placeholder="Vul locatie in">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-default">Opslaan</button>
  </div>
</form>
