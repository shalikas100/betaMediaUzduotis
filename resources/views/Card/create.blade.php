<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beta Media Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar-van">
                <a class="btn btn-primary" href="{{route('card.index')}}">Index</a>
            </nav>
        </div>
        <div class="row">
            <h5>Sukurti nauja pasiulyma</h5>
            <form action="{{route('card.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="city" class="form-control" id="floatingInput" placeholder="City">
                    <label for="floatingInput">City</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="hotel" class="form-control" id="floatingPassword" placeholder="Hotel">
                    <label for="floatingPassword">Hotel</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="description" class="form-control" id="floatingPassword" placeholder="Description">
                    <label for="floatingPassword">Description</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="persons" class="form-control" id="floatingPassword" placeholder="Persons">
                    <label for="floatingPassword">Persons</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="nights" class="form-control" id="floatingPassword" placeholder="Nights">
                    <label for="floatingPassword">Nights</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="price" class="form-control" id="floatingPassword" placeholder="Price">
                    <label for="floatingPassword">Price</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="date_expiry" class="form-control" id="floatingPassword" placeholder="Date expiry">
                    <label for="floatingPassword">Date expiry</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="file" name="photo" class="form-control" id="floatingPassword" placeholder="Photo">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
 


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>