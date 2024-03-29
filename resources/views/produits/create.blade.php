<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Importation</title>
</head>
<body>
    <section style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="car">
                        <div class="card-header">
                            Import
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('produits.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="file">CSV</label>
                                    <input type="file" name="file" class="form-control" class="mb-4">
                                </div>
                                <button type="submit" class="btn btn-primary">envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>
</html>