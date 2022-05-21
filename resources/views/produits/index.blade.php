<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
           <div class="col col-xs-2">
               <table class="table mb-12 table-striped table-bordered" style="text-align:center;margin-top:0px;">
                   <thead>
                       <tr>
                       <th><a href="#">Num</a></th>
                           <th><a href="#">Nom produit</a></th>
                           <th><a href="#">Prix</a></th>
                           <th>Détails</th>
                       </tr>
                   </thead>
   
                   <tbody>                        
                       @foreach ($produits as $produit)
                           <tr>
                           <th scope="row">{{ $produit->id }}</th>
                           <td>{{ $produit->nom }}</td>
                           <td>{{ $produit->prix }}</td>                                                 
                           <td>
                               <a class="btn btn-info" href="#">Détails</a>
                               <a class="btn btn-success" href="#">Modifier</a>
                               <a class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer l\'entreprise ?');" href="#">Supprimer</a>
                           </td>
                           </tr>
                       @endforeach
                   </tbody>
               </table> 
           </div>
       </div>
<main>
</main>
</body>