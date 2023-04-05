<?php if ($error) echo $error ?>

<h1>Hakuvahdit</h1>

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

<form method="post" action="index.php?page=SearchWatch&action=add" name="signup-form">
<div class="form-element">
<label>Hakusanat</label>
<input type="text" name="text" value="<?php echo $text ?>" required />
</div>
<button type="submit" name="add" value="add">Lisää</button>
</form>