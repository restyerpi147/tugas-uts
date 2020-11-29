@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Halaman User Blogger 24</h3>

            <div class="card">
                @include('template.utils.notif')
            	<div class="card-header">
            		<strong>Menu User</strong>
            		<a href="{{url('admin/user/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data</a>
            	</div>
            	<div class="card-body">
            		<table class="table">
            			<thead>
            				<tr>
            					<th>No</th>
            					<th>Aksi</th>
            					<th>Nama Lengkap</th>
                                <th>Alamat Email</th>
                                <th>Jumlah blog</th>
            				</tr>
            			</thead>
            			<tbody>
            				@foreach($list_user as $user)
            				<tr>
            					<td>{{$loop->iteration}}</td>
            					<td>
            						<div class="btn-group">
            							<a href="{{url('admin/user', $user->id)}}" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
            							<a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        @include('template.utils.delete', ['url' => url('admin/user', $user->id)])
            						</div>
            					</td>
            					<td>{{$user->nama}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->blog_count}}</td>
            				</tr>
            				@endforeach
            			</tbody>
            		</table>
            	</div>
            </div>
          </div>
        </div>




@endsection