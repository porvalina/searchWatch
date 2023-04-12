<?php $this->layout('layout') ?>

<?php if ($error) echo $error ?>

<div class="container">
<h1>Hakuvahdit</h1>

<div class="align-items-center"> 
  <div class='tapahtumat'>
  <?php

  foreach ($watches as $searchWatch) {
      
    echo "<div>";
      echo "<div>". $searchWatch->getText() . "</div>";
      echo "<div>" . $searchWatch->getCreated()->format('j.n.Y') . "</div>";
    echo "</div>";

  }

  ?>
  </div>
</div>

<form method="post" action="index.php?page=SearchWatch&action=add" class="row g-2">
  <div class="col-auto">
    <label for="text" class="visually-hidden">Hakusanat</label>
    <input type="text" name="text" class="" value="<?php echo $text ?>" required>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Lisää</button>
  </div>
</form>
</div>