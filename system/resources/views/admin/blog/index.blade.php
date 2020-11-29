@extends('template.base')


      @section('content')
        
        <div  class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                <div class="card-header">
                    Filter  
                </div>
                <div class="card-body">
                    <form action="{{url('admin/blog/filter')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$nama ?? ''}}">
                        </div>
                        <button class="btn btn-primary float-right"><i class="fa fa-search"> Filter </i></button>
                    </form>
                </div>
            </div>
                </div>
            </div>
            <div class="card">
                @include('template.utils.notif')
            	<div class="card-header">
            		<strong>Menu Blog</strong>
            		<a href="{{url('admin/blog/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data</a>
            	</div>
            	<div class="card-body">
            		<table class="table">
            			<thead>
            				<tr>
            					<th>No</th>
            					<th>Aksi</th>
            					<th>Nama blog</th>
                                <th>Penulis</th>
                                <th>Tanggal dibuat</th>
                                <th>Jumlah Blog</th>
                                <th>Kategori Blog</th>
            				</tr>
            			</thead>
            			<tbody>
            				@foreach($list_blog as $blog)
            				<tr>
            					<td>{{$loop->iteration}}</td>
            					<td>
            						<div class="btn-group">
            							<a href="{{url('admin/blog', $blog->id)}}" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
            							<a href="{{url('admin/blog', $blog->id)}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        @include('template.utils.delete', ['url' => url('admin/blog', $blog->id)])
            						</div>
            					</td>
            					<td>{{$blog->judul}}</td>
                                <td>{{$blog->penulis}}</td>
                                <td>{{$blog->created_at}}</td>
                                <td>{{$blog->id_kategori}}</td>
                                <td>{{$blog->kategori->nama}}</td>
            				</tr>
            				@endforeach
            			</tbody>
            		</table>
            	</div>
            </div>
          </div>




@endsection