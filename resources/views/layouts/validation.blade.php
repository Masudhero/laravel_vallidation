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
        <div class="container py-5">
            <div class="row">
                <div class="col-8 mx-auto">
                    @if ($errors->any())
                    <ul class="m-0 p-0 list-unstyled">
                    @foreach ( $errors->all() as $error )
                      <li class="text-light py-0 bg-danger ">{{ $error }}</li>
                    @endforeach
                </ul>
                    @endif
                    <form method="POST" action="{{ route('validations.store') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <h3 class=" bg-light p-3">Validation From</h3>
                            </div>
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="inputEmail4">Email</label>
                            <input type="text"  name="email" class="form-control @error('email') is unvalid

                            @enderror" id="inputEmail4" placeholder="Email">
                          </div>
                          <div class="form-group col-md-12">
                            <label for="inputPassword4">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
                          </div>
                          @error('password')
                             <p class="text-warning">{{ $message }}</p>
                          @enderror
                        <div class="form-group col-md-12">
                          <label for="inputAddress">Address</label>
                          <input type="text" name="address" class="form-control" id="inputAddress" placeholder="">
                        </div>
                        @error('address')
                        <p class="text-warning">{{ $message }}</p>
                     @enderror
                        <div class="form-group col-md-12">
                          <label for="inputAddress2">Address 2</label>
                          <input type="text" name="address_2" class="form-control" id="inputAddress2" placeholder="">
                        </div>
                        @error('address_2')
                        <p class="text-warning">{{ $message }}</p>
                     @enderror
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="inputCity">City</label>
                            <input type="text" name="city" value="{{ old('city') }}" class="form-control" id="inputCity">
                          </div>
                          @error('city')
                          <p class="text-warning">{{ $message }}</p>
                       @enderror
                          <div class="form-group col-md-6">
                            <label for="inputState">State</label>
                            <select id="inputState" name="state" class="form-control">
                              <option value="">Choose...</option>
                              <option value="Mirpur-1">Mirpur-1</option>
                              <option value="Mirpur-2">Mirpur-2</option>
                              <option value="Mirpur-10">Mirpur-10</option>
                              <option value="Mirpur-12">Mirpur-12</option>
                            </select>
                            @error('state')
                            <p class="text-warning">{{ $message }}</p>
                         @enderror
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputZip">Zip</label>
                            <input type="text" name="postal" class="form-control" id="inputZip">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                              Click Me
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
