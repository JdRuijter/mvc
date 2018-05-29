<?php
/**
 * Locations View
 */



?>

<h1>Locaties</h1>

<a href='index.php?controller=locations&action=addForm'>Toevoegen</a>
<table class="table table-striped table-bordered table-hover">
    <tr>
      <th>ID</th>
      <th>Locatie</th>
      <th></th><th></th>
    </tr>
    <?php foreach ($locations as $row): ?>
    <tr>
      <td><?php echo $row->id ?></td>
      <td><?php echo $row->location ?></td>
      <td><a href="index.php?controller=locations&action=updateForm&id=<?php echo $row->id; ?>&location=<?php echo $row->location; ?>">Update</a></td>
      <td><a href="index.php?controller=locations&action=delete&id=<?php echo $row->id; ?>">Verwijder</a></td>
    </tr>
  <?php endforeach; ?>
</table>
