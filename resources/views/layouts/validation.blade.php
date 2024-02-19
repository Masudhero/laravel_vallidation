<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>laravel --validation</title>
  </head>
  <body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto py-4">
                    <form method="POST" action="{{ route('validations.store') }}">
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                          </div>
                          <div class="form-group col-md-12">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                          </div>
                        </div>
                        <div class="form-group col-md-12">
                          <label for="inputAddress">Address</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="">
                        </div>
                        <div class="form-group col-md-12">
                          <label for="inputAddress2">Address 2</label>
                          <input type="text" class="form-control" id="inputAddress2" placeholder="">
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                              Check me out
                            </label>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </form>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
