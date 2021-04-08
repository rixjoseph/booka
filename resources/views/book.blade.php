<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>

<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-6 col-xl-12 col-xxl-12">
<form action="readbook" method="post">
{{csrf_field()}}

<table class="table table-borderless">
<tr>
    <td>Book Title</td>
    <td><input type="text" class="form-control" name="btitle"></td>
</tr>
<tr>
    <td>Book Author</td>
    <td><input type="text" class="form-control" name="bauthor"></td>
</tr>
<tr>
    <td>Book Description</td>
    <td><input type="text" class="form-control" name="bdescription"></td>
</tr>
<tr>
    <td>Book Distributor</td>
    <td><input type="text" class="form-control" name="bdistributor"></td>
</tr>
<tr>
    <td>Book Price</td>
    <td><input type="text" class="form-control" name="bprice"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-success">SUBMIT</button></td>
</tr>
</table>

</form>
</div>
</div>
</div>
    
</body>
</html>