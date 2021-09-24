<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php  include('header.php');  ?>

      <div class="container my-4 text-center">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage.php" method="post">
                    <div class="card">
                        <img class="card-img-top" src="images/1.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Mobile 1</h4>
                            <p class="card-text">price - 450rs</p>
                            <button type="submit" name="add_to_cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" value="mobile 1" name="Item_Name">
                            <input type="hidden" value="560" name="Item_price">
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="col-lg-3">
                <form action="manage.php" method="post">
                    <div class="card">
                        <img class="card-img-top" src="images/2.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Mobile 1</h4>
                            <p class="card-text">price - 450rs</p>
                            <button type="submit" name="add_to_cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" value="mobile 2" name="Item_Name">
                            <input type="hidden" value="560" name="Item_price">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage.php" method="post">
                    <div class="card">
                        <img class="card-img-top" src="images/3.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Mobile 1</h4>
                            <p class="card-text">price - 450rs</p>
                            <button type="submit" name="add_to_cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" value="mobile 3" name="Item_Name">
                            <input type="hidden" value="560" name="Item_price">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage.php" method="post">
                    <div class="card">
                        <img class="card-img-top" src="images/4.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Mobile 1</h4>
                            <p class="card-text">price - 450rs</p>
                            <button type="submit" name="add_to_cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" value="mobile 4" name="Item_Name">
                            <input type="hidden" value="560" name="Item_price">
                        </div>
                    </div>
                </form>
            </div>

        </div>
      </div>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>