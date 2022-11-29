@extends('layouts.app')

@section('title')
BAK INDONESIA ADMIN
@endsection


@section('content')

<div class="row">
 <div class="col-lg-12">
  <div class="card">
    <div class="card-header">

      <h5 style="color:#1C75BC "><a href="{{ route('portofolio') }}"><b>Portofolio</b></a> / Edit Portofolio</h5>
    </div>


    <div class="card-body">

      @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif
      @foreach($edit_portofolio as $data)
      <form method="post" action="{{route('portofolio_update', $data->id)}}" enctype="multipart/form-data">
        <div class="row">

          {{csrf_field()}}
          <div class="col-lg-6">
           
           <div class="form-group">
            <label>Jasa</label>
            <select type="text" class="form-control" id="id_apd" name="id_apd" required="" >
              <option selected disabled> -- Pilih Jasa -- </option>
              @foreach($list_jasa as $list_data )
              <option value="{{$list_data->id}}" {{$data->id_jasa == $list_data->id ? "selected" : "" }} >{{$list_data->nama_jasa}}</option>
              @endforeach
            </select><br>
          </div>

          
            <div class="form-group">
              <label for="image">Image</label><br>
              <img style="border-radius: 0%" height="190" src="{{asset('public/uploads/portofolio_image/'.$data->portofolio_image)}}"></img>
              <input type="file" class="form-control" id="image" name="image"   value="{{$data->portofolio_image}}"></input>
            </div>

          </div>

         <div class="col-lg-6">

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

