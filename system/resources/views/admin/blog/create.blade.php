@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Halaman Blog</h3>

            <div class="card">
            	<div class="card-header">
            		<strong>Tambah blog</strong>
            	</div>
            	<div class="card-body">
            		<form action="{{url('admin/blog')}}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="nama">Nama blog</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                      </div>
                      <div class="form-group">
                        <label for="nama">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis">
                      </div>
                      <div class="form-group mt-3">
                          <label for="exampleFormControlSelect1">Kategori Blog</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="id_kategori">
                            <option selected="" disabled="">Pilih Kategori</option>
                            <option value="1">Blog Tanaman</option>
                            <option value="2">Blog Makanan</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="nama">Isi blog</label>
                        <textarea class="form-control" id="isi" name="isi" rows="5"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
            	</div>
            </div>
          </div>
        </div>




@endsection