@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Halaman Blog</h3>

            <div class="card">
            	<div class="card-header">
            		<strong>Ubah data Blog</strong>
            	</div>
            	<div class="card-body">
                <form action="{{url('admin/blog', $blog->id)}}" method="post">
                    @csrf
                    @method("PUT")
                      <div class="form-group">
                        <label for="nama">Nama blog</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{$blog->judul}}">
                      </div>
                      <div class="form-group">
                        <label for="nama">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="{{$blog->penulis}}">
                      </div>
                      <div class="form-group">
                        <label for="nama">Isi blog</label>
                        <textarea class="form-control" id="isi" name="isi" rows="10">{{$blog->isi}}</textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Ubah data</button>
                </form>
              </div>
            </div>
          </div>
        </div>




@endsection