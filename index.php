<?php
include "includes/head.php"
?>

<body>
  <!----------------         carousel                     --------->

  <?php

  include "includes/header.php";
  ?>

  
  <!----------------       end of carousel                     --------->
  <div class="container-fluid ">

    <!-- categories-->

    <div class="row" id="cards">
      <div class="col-sm-3" id="cards">
        <div class="card " style="background-color:#ffcccc; height: 70%;">
          <div class="card-body">
            <strong>
              <h5 style="font-weight:bold; color: rgb(104, 97, 97);"> Medicine Products</h5>
            </strong>
            <a href="search.php?cat=medicine">
              <img src="images/midicin.jpg" style="width:150.4px ; height:225px ;" class="d-block " alt="...">
            </a>
            <br>
            <a href="search.php?cat=medicine"> <button class="rounded-2" style="background-color: LightSalmon;
           color: white; font-weight: bold; border-color: LightSalmon;margin:10px;">Go To Medicine Products</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-3" id="cards">
        <div class="card " style="background-color:	 #ccffff ;height: 70%; ">
          <div class="card-body">
            <strong>
              <h5 style="font-weight:bold; color: rgb(104, 97, 97);"> Self care Products</h5>
            </strong>
            <a href="search.php?cat=self-care">
              <img src="images/self-care.jpg" style=" height:200px ;">
            </a>
            <br><br><br>
            <a href="search.php?cat=self-care"> <button class="rounded-2" style="background-color:lightseagreen;
           color: white; font-weight: bold; border-color: PowderBlue;margin:10px;">Go To Self Care</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-3" id="cards">
        <div class="card " style="background-color:#e6ccff;height: 70%; ">
          <div class="card-body">
            <strong>
              <h5 style="font-weight:bold; color: rgb(104, 97, 97);">Machine Products</h5>
            </strong>
            <a href="search.php?cat=machine">
              <img src="images/machine.jpg" style="width:120.4px ; height:200px ;"><br>
            </a>
            <br> <br>
            <a href="search.php?cat=machine"> <button class="rounded-2" style="background-color: LightSlateGrey;
           color: white; font-weight: bold; border-color: LightSlateGrey;margin:10px;">Go To Machines</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-3" id="cards">
        <div class="card " style="background-color:#f2d9d9; height: 70%;">
          <div class="card-body">
            <h5 style="font-weight:bold; color: rgb(104, 97, 97);">Our Stores</h5>
            </strong>
            <a href="https://www.google.com/maps/@13.0383872,80.2258944,12z" target="_blank">
              <img src="images/stores.jpeg" style="width:150.4px ; height:200px ;"><br>
            </a>
            <br> <br>
            <a href="https://www.google.com/maps/@13.0383872,80.2258944,12z" target="_blank"> <button class="rounded-2" style="background-color: #00b9e1;
           color: white; font-weight: bold; border-color: #00b9e1;margin:10px;">Check The Locations</button></a>
          </div>
        </div>
      </div>
    </div>
    <!----------------         products might you like                     --------->

    <h2 style="margin-top: 10px;">Products you might like : </h2>

    <div class="row">
     <?php
     $data = all_products();
     $num = sizeof($data);
     for ($i = 0; $i < $num; $i++) {

     ?>
        <div class="col-sm-2" id="cards" style="width: 22.0rem;">
          <div class="card border border-warning">
            <img src="images/<?php echo $data[$i]['item_image'] ?>" class="card-img-top" style="width:305.3px ; height:305px ;">
            <div class="card-body">
              <?php
              if (strlen($data[$i]['item_title']) <= 20) {
              ?>
                <h5 class="card-title"><?php echo $data[$i]['item_title'] ?></h5>

              <?php
              } else {
              ?>
                <h5 class="card-title"><?php echo substr($data[$i]['item_title'], 0, 20) . "..." ?></h5>
              <?php
              }
              ?>
              <br> <br>
              <strong>
                <h3 style="color :#82E0AA;" class="card-text"> ₹<?php echo $data[$i]['item_price'] ?></h3>
              </strong>
              <br>
              <small class="text-muted" style="font-weight: bold;">Brand Name: <?php echo $data[$i]['item_brand'] ?></small><br><br>
              <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>" class="btn btn-outline-info">More details</a>

            </div>
          </div>
        </div>
      <?php
        if ($i == 7) {
          break;
        }
      }
      ?>
    
</body>
</html>