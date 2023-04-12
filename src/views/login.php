<?php $this->layout('layout') ?>
<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5">
  <div class="modal-dialog">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-body p-5 pt-0">
        <?php if ($error) echo $error ?>
        <form method="post" action="index.php?page=Users&action=login" name="signin-form">
          <div class="form-floating mb-3">
            <div class="form-element">
              <label>Email</label>
              <input type="email" class="form-control rounded-3" name="email" value="<?php echo $email ?>" required />
            </div>
            <div class="form-element">
              <label>Password</label>
              <input type="password"  class="form-control rounded-3" name="password" required />
            </div>
            <button type="submit" class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" name="login" value="login">Log In</button>
          </div>
        </form>

        <div class="info">
          Jos sinulla ei ole vielä tunnuksia, niin voit luoda ne <a href="index.php?page=Users&action=registration">täällä</a>.<br>
        </div>
      </div>
    </div>
  </div>
</div>