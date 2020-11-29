@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Halaman blog <b>{{$blog->seller->nama}}</b></h3>

            <div class="card">
            	<div class="card-header">
            		Detail blog <strong>{{$blog->seller->nama}}</strong>
            	</div>
            	<div class="card-body">
            		<table class="table table-responsive">
            			<thead>
            				<tr>
            					<th>No</th>
            					<th>Nama Blog</th>
                                <th>Penulis</th>
                                <th>Tanggal dibuat</th>
                                <th width="400px">Isi blog</th>
            				</tr>
            			</thead>
            			<tbody>
            				
            				<tr>
            					<td>1</td>
            					
            					<td>{{$blog->judul}}</td>
                                <td>{{$blog->penulis}}</td>
                                <td>{{$blog->created_at}}</td>
                                <td>{!! nl2br($blog->isi) !!}</td>
            				</tr>
            			</tbody>
            		</table>
            	</div>
            </div>
          </div>
        </div>




@endsection