@extends('layouts.app')

@section('title')
BAK INDONESIA ADMIN
@endsection


@section('content')

<div class="row">
 <div class="col-lg-12">
  <div class="card">
    <div class="card-header">

      <h5 style="color:#1C75BC "><a href="{{ route('beranda') }}"><b>Beranda</b></a> / Edit Beranda</h5>
    </div>


    <div class="card-body">

      @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif
      @foreach($edit_beranda as $data)
      <form method="post" action="{{route('beranda_update', $data->id)}}" enctype="multipart/form-data">
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

          

          </div>

         <div class="col-lg-6">
            <div class="form-group">
              <label for="image">Image</label><br>
              <img style="border-radius: 0%" height="190" src="{{asset('public/uploads/beranda/'.$data->image)}}"></img>
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

