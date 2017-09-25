<?php
include "header.php";
?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <h1 class="text-center">Форма обратной связи</h1>
      </div>
      <div class="col-lg-6 col-md-6">
        <form role="form" action="post.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name" name="name">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Message</label>
            <textarea cols="35" rows="5" id="exampleInputFile" name="message">
            </textarea>
          </div>
          <button type="submit" class="btn btn-default">Отправить</button>
        </form>
      </div>
    </div>
  </div>
<?php 
include "footer.php";
?>