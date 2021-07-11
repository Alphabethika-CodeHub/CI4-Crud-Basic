<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?= $title; ?></title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">CI4</h1>
        <table class="table table-striped">
            <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($product as $row):?>
                    <tr>
                        <td><?= $row['name'];?></td>
                        <td><?= $row['price'];?></td>
                        <td>
                            <a href="/ProductController/deleteData/<?= $row['id'];?>">Delete</a>
                            <a href="/ProductController/editIndex/<?= $row['id'];?>">Update</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
        </table>

        <p>Insert Data</p>
        <form action="/ProductController/insertData" method="POST">
            <input type="text" name="name">
            <input type="text" name="price">
            <button type="submit">Save</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>