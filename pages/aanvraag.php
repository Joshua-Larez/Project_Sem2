<?php
  // set current time to amsterdam time
  date_default_timezone_set('Europe/Amsterdam');

  // get the current time 
  $datetime = date('Y/m/d H:i:s');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Local CSS -->
    <link rel="stylesheet" href="../css/aanvraag.css">

    <title>Magazijn</title>
  </head>

  <body>

    <Form action="../article_aanvraag_script.php" method="POST">
      <!-- sidebar with top content-->
      <div class="container">
        <!-- title -->
        <div class="mt-4">
          <h3>Aanvraag forum</h3>
        </div>
        <!-- gap -->
        <br>
        <!-- row with items -->
        <div class="row">
          <div class="col-4">
            <ul class="list-group list-group-vertical">
              <li class="list-group-item">
                <div class="form-check">
                  <!-- Item checkbox -->
                    <input class="form-check-input" type="checkbox" value="Keyboard" name="item[]">
                    <label class="form-check-label" for="">Keyboard</label>
                  <!-- amount box input-->
                    <input type="number" id="amount" name="amount[]" min="0" max="5">
                </div>
              </li>
              <li class="list-group-item">
                <div class="form-check">
                  <!-- Item checkbox -->
                    <input class="form-check-input" type="checkbox" value="Mouse" name="item[]">
                    <label class="form-check-label" for="">Mouse</label>
                  <!-- amount box input-->
                    <input type="number" id="amount" name="amount[]" min="0" max="5">
                </div>
              </li>
              <li class="list-group-item">
                <div class="form-check">
                  <!-- Item checkbox -->
                    <input class="form-check-input" type="checkbox" value="Monitor" name="item[]">
                    <label class="form-check-label" for="">Monitor</label>
                  <!-- amount box input-->
                    <input type="number" id="amount" name="amount[]" min="0" max="5">
                </div>
              </li>
              <li class="list-group-item">
                <div class="form-check">
                  <!-- Item checkbox -->
                    <input class="form-check-input" type="checkbox" value="Breadboard" name="item[]">
                    <label class="form-check-label" for="">Breadboard</label>
                  <!-- amount box input-->
                    <input type="number" id="amount" name="amount[]" min="0" max="5">
                </div>
              </li>
            </ul> 
          </div>
    
          <!-- row with items -->
          <div class="col-4">
            <ul class="list-group list-group-vertical">
              <li class="list-group-item">
                <div class="form-check">
                  <!-- Item checkbox -->
                    <input class="form-check-input" type="checkbox" value="Arduino" name="item[]">
                    <label class="form-check-label" for="">arduino</label>
                  <!-- amount box input-->
                    <input type="number" id="amount" name="amount[]" min="0" max="5">
                </div>
              </li>
              <li class="list-group-item">
                <div class="form-check">
                  <!-- Item checkbox -->
                    <input class="form-check-input" type="checkbox" value="component-box" name="item[]">
                    <label class="form-check-label" for="">component-box</label>
                  <!-- amount box input-->
                    <input type="number" id="amount" name="amount[]" min="0" max="5">
                </div>
              </li>
              <li class="list-group-item">
                <div class="form-check">
                  <!-- Item checkbox -->
                    <input class="form-check-input" type="checkbox" value="vga-cable" name="item[]">
                    <label class="form-check-label" for="">vga-cable</label>
                  <!-- amount box input-->
                    <input type="number" id="amount" name="amount[]" min="0" max="5">
                </div>
              </li>
              <li class="list-group-item">
                <div class="form-check">
                  <!-- Item checkbox -->
                    <input class="form-check-input" type="checkbox" value="hdmi-cable" name="item[]">
                    <label class="form-check-label" for="">hdmi-cable</label>
                  <!-- amount box input-->
                    <input type="number" id="amount" name="amount[]" min="0" max="5">
                </div>
              </li>
            </ul> 
          </div>

          <!-- row with items -->
          <div class="col-4">
            <ul class="list-group list-group-vertical">
              <li class="list-group-item">
                <div class="form-check">
                  <!-- Item checkbox -->
                    <input class="form-check-input" type="checkbox" value="spatula" name="item[]">
                    <label class="form-check-label" for="">spatula</label>
                  <!-- amount box input-->
                    <input type="number" id="amount" name="amount[]" min="0" max="5">
                </div>
              </li>
              <li class="list-group-item">
                <div class="form-check">
                  <!-- Item checkbox -->
                    <input class="form-check-input" type="checkbox" value="stoel" name="item[]">
                    <label class="form-check-label" for="">stoel</label>
                  <!-- amount box input-->
                    <input type="number" id="amount" name="amount[]" min="0" max="5">
                </div>
              </li>
              <li class="list-group-item">
                <div class="form-check">
                  <!-- Item checkbox -->
                    <input class="form-check-input" type="checkbox" value="charger-cable" name="item[]">
                    <label class="form-check-label" for="">charger-cable</label>
                  <!-- amount box input-->
                    <input type="number" id="amount" name="amount[]" min="0" max="5">
                </div>
              </li>
              <li class="list-group-item">
                <div class="form-check">
                  <!-- Item checkbox -->
                    <input class="form-check-input" type="checkbox" value="headphones" name="item[]">
                    <label class="form-check-label" for="">headphones</label>
                  <!-- amount box input-->
                    <input type="number" id="amount" name="amount[]" min="0" max="5">
                </div>
              </li>
            </ul>
          </div>
        </div>

        <br>
        <div class="row">
          <!-- Reason -->
          <div class="col-12 mb-2">
            <label for="reason" class="col-12">Reden
              <div class="input-group">
                <textarea type="text" name="reason" class="form-control" id="reason" aria-label="With textarea" maxlength="200" 
                          style="height: 7em; overflow:hidden;" required></textarea>
              </div>
            </label>
          </div>

          <!-- day => this is hidden input with the day value  -->
          <div hidden="true">
            <label for="datetime"></label>
            <input id="datetime" name="datetime" type="text" value="<?=$datetime?>">
          </div>
          
        </div>

        <!-- submit button -->
        <button type="submit" value="submit" class="btn btn-primary">submit</button>
      </div>

    </Form>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- javascript for this index -->
    <script src="./js/sidebar.js"></script>

    <!-- boxicons usage link -->
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
  </body>
</html>