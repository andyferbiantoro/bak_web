@extends('layouts.app')

@section('title')
BAK INDONESIA ADMIN
@endsection


@section('content')

<div class="row">
 <div class="col-lg-12">
  <div class="card">
    <div class="card-header">

      <h5 style="color:#1C75BC "><a href="{{ route('beranda') }}"><b>Beranda</b></a> / Edit Tentang Kami</h5>
    </div>


    <div class="card-body">

      @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif
      @foreach($edit_about as $data)
      <form method="post" action="{{route('about_update', $data->id)}}" enctype="multipart/form-data">
        <div class="row">

          {{csrf_field()}}
          <div class="col-lg-6">
            <div class="form-group">
              <label for="header">Header</label>
              <input type="text" class="form-control" id="header" name="header"   value="{{$data->header}}"></input>
            </div>

             <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <input type="text" class="form-control" id="deskripsi" name="deskripsi"   value="{{$data->deskripsi}}"></input>
            </div>

            <div class="form-group">
              <label for="instagram">Link Instagram</label>
              <input type="text" class="form-control" id="instagram" name="instagram"   value="{{$data->instagram}}"></input>
            </div>

            <div class="form-group">
              <label for="facebook">Link Facebook</label>
              <input type="text" class="form-control" id="facebook" name="facebook"   value="{{$data->facebook}}"></input>
            </div>

          

          </div>


          <div class="col-lg-6">
          <div class="form-group">
              <label for="twitter">Link Twitter</label>
              <input type="text" class="form-control" id="twitter" name="twitter"   value="{{$data->twitter}}"></input>
            </div>

            <div class="form-group">
              <label for="linkedin">Link Linkedin</label>
              <input type="text" class="form-control" id="linkedin" name="linkedin"   value="{{$data->linkedin}}"></input>
            </div>
         
            <div class="form-group">
              <label for="image">Image</label><br>
              <img style="border-radius: 0%" height="190" src="{{asset('public/uploads/about/'.$data->image)}}"></img>
              <input type="file" class="form-control" id="image" name="image"   value="{{$data->image}}"></input>
            </div>

          </div>


        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="Submit">Update</button>

        </div>
      </div>
    </form>
    @endforeach
  </div>
</div>
</div>



</div>



@endsection

@section('scripts')



@endsection

