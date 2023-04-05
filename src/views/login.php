<?php if ($error) echo $error ?>
<form method="post" action="index.php?page=Users&action=login" name="signin-form">
  <div class="form-element">
    <label>Email</label>
    <input type="email" name="email" value="<?php echo $email ?>" required />
  </div>
  <div class="form-element">
    <label>Password</label>
    <input type="password" name="password" required />
  </div>
  <button type="submit" name="login" value="login">Log In</button>
</form>

<div class="info">
  Jos sinulla ei ole vielä tunnuksia, niin voit luoda ne <a href="index.php?page=Users&action=registration">täällä</a>.<br>
</div>