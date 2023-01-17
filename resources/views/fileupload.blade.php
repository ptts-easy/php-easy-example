@extends('layouts.app')

@section('content')

<section class="bg-light" style="height: 800px;">
  <div class="container">
    <div class="row py-3">
      <div class="col-md-4">
          <h6>Upload Single Image File</h6>
      </div>
      <div class="col-md-6">
        <form enctype="multipart/form-data">
          <div class="input-group flex-nowrap">
            <span class="input-group-text">Name:</span>
            <input type="text" class="form-control" placeholder="Username" name="name" value = "user001">
          </div>
          <div class="input-group flex-nowrap">
            <span class="input-group-text">Email:</span>
            <input type="email" class="form-control" placeholder="Email" name="email" value = "user001@outlook.com">
          </div>
          <label for="formSingleFile" class="form-label">Select one image file:</label>
          <div class="input-group">
            <input class="form-control" type="file" id="formSingleFile" name="myfile" required accept="image/*">
            <button type="button" id="myUploadSingleFile" class="btn btn-primary float-right mr-2">Upload <i class="fa fa-upload"></i></button>
          </div>
        </form>
      </div>
    </div>
    <div class="row py-3">
      <div class="col-md-4">
          <h6>Upload Multiple</h6>
      </div>
      <div class="col-md-6">
        <form enctype="multipart/form-data">
          <label for="formMultiFile" class="form-label">Select multi files:</label>
          <div class="input-group">
            <input class="form-control" type="file" id="formMultiFile" name="myfiles" multiple>
            <button type="button" id="myUploadMultiFiles" class="btn btn-primary float-right mr-2">Upload <i class="fa fa-upload"></i></button>
          </div>
        </form>
      </div>
    </div>
    <div class="row py-3">
      <div class="col">
        <button type="button" id="showStorage" class="btn btn-success">Show Storage</button>
      </div>
      <div class="col">
        <button type="button" id="clearStorage" class="btn btn-danger">Clear Storage</button>
      </div>
    </div>
    <div class="row py-3">
      <div class="col">
        <div id="storage"></div>
      </div>
    </div>
  </div>
</section>

@endsection
