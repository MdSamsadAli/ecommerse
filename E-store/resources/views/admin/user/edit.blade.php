<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container mt-4">

<form method="post" action="{{route('user.update', $user->id)}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="inputEmail3" placeholder="Image" name="image" value="{{$user->image}}">
      </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Product Price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="Product Price" name="product_price" value="{{$user->product_price}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="Product Name" name="product_name" value="{{$user->product_name}}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Product Mark</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="Product Mark" name="product_mark" value="{{$user->product_mark}}">
        </div>
      </div>
      <div class="col-sm-5 text-center mt-4">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
      
</form>