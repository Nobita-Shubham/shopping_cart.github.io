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
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center bg-light my-4">
            <h1>My Cart</h1>
          </div>
          <div class="col-lg-9">
            <table class="table text-center">
              <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Item Name</th>
                  <th>Item price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
                foreach ($_SESSION['cart'] as $key => $value) {
                  echo "<tr>
                            <td>$i</td>
                            <td>$value[Item_Name]</td>
                            <td>$value[Item_price]<input type='hidden' class='price' value='$value[Item_price]'></td>
                            <td>
                                <input type='number' class='text-center quantity' value='$value[Quantity]' min='1' max='10' onchange='addition()'>
                            </td>
                            <td class='total'></td>
                            <td>
                              <form action='manage.php' method='post'>
                                <input type='submit' class='btn btn-outline-danger btn-sm' name='delete' value='Remove'>
                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                              </form>
                            </td>
                        </tr>";
                  $i++;
                }
                ?>
              </tbody>
            </table>
          </div>
          <div class="col-lg-3">
            <div class="border bg-light rounded p-4">
              <h3>Total:</h3>
              <h5 class="text-right" id="gtotal"></h5>
              <form action="" method="post">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="" id="" value="checkedValue" checked>
                    Cash On Delivery
                  </label>
                </div>
                <button class="btn btn-primary btn-block my-2">Buy Now</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      var price = document.getElementsByClassName('price'); 
      var quantity = document.getElementsByClassName('quantity'); 
      var total = document.getElementsByClassName('total'); 
      var gtotal = document.getElementById('gtotal'); 

      function addition()
      {
        var gt = 0;
        for(var i=0; i<price.length; i++)
        {
          total[i].innerText = (price[i].value)*(quantity[i].value);  
          gt = gt + (price[i].value)*(quantity[i].value);
        }
        gtotal.innerText = gt;
      }
      addition();
    </script>
  </body>
</html>