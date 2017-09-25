<?php
include "header.php";
?>
  <div class="contaner mt50">
    <div clas="row">
      <div class="col-lg-12 col-md-12">
        <h1 class="text-center">
          Dragged Interaction
        </h1>
      </div>
      <div class="col-lg-4 col-md-4"><img src="img/22.jpg" class="img-responsive drag" alt="">
      </div>
      <div class="col-lg-4 col-md-4"><img src="img/20.jpg" class="img-responsive drag" alt="">
      </div>
      <div class="col-lg-4 col-md-4"><img src="img/21.jpg" class="img-responsive drag" alt="">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <h1 class="text-center">
          Droppable and Draggable
        </h1>
      </div>
      <div class="col-lg-6 col-md-6">
        <img src="img/24.png" class="dragpic" width="200px" height="150px" alt="">
        <img src="img/28.jpg" class="dragpic" width="200px" height="150px" alt="">
        <img src="img/26.jpg" class="dragpic" width="200px" height="150px" alt="">
      </div>
      <div class="col-lg-6 col-md-6">
        <img src="img/trashcan-empty-icon.png" class="drop" alt="">
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <h1 class="text-center">
          Sortable
        </h1>
      </div>
      <div class="col-lg-6 col-md-6">
        <ul id="sort">
          <li class="ui-state-default">Punkt 1</li>
          <li class="ui-state-default">Punkt 2</li>
          <li class="ui-state-default">Punkt 3</li>
          <li class="ui-state-default">Punkt 4</li>
        </ul>
      </div>
      <div class="col-lg-6 col-md-6">
        <ul id="sort1">
          <li class="ui-state-default">Punkt 5</li>
          <li class="ui-state-default">Punkt 6</li>
          <li class="ui-state-default">Punkt 7</li>
          <li class="ui-state-default">Punkt 8</li>
        </ul>
      </div>
    </div>



  </div>

<?php 
include "footer.php";
?>