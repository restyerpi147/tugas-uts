<?php 


namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\ClientBlog;

/**
 * 
 */
class ClientBlogController extends Controller
{
	
	function index()
	{
		$data['list_blog'] = Blog::all();
		return view('client/index', $data);
	}
	
	function create(Blog $blog)
	{
		$data['blog'] = $blog;
		$data['list_komentar'] = $blog->komentar;
		return view('client/baca', $data);
	}
	
	function store(Blog $blog)
	{
		$data['blog'] = $blog;
		$komentar = new Clientblog;
		$komentar->id_blog = $blog->id;
		$komentar->nama = request('nama');
		$komentar->email = request('email');
		$komentar->isi = request('isi');
		$komentar->save();

		return redirect('/')->with('success', 'komentar telah di tambahkan');
	}
	
	function show()
	{
		$data['list_pesanan'] = ClientBlog::all();
		return view('client/bayar', $data);
	}
	
	function edit(ClientBlog $blog)
	{
		$data['blog'] = $blog;
		return view('client/edit', $data);
		
	}
	
	function update(ClientBlog $blog)
	{
		$blog->nama = request('nama');
		$blog->harga = request('harga');
		$blog->jumlah = request('jumlah');
		$blog->save();

		return redirect('bayar')->with('success', 'Pesanan Berhasil di Update');
	}
	
	function destroy(Blog $blog)
	{
		$blog->delete();

		return redirect('bayar')->with('danger', 'Pesanan Berhasil di Hapus');
	}

	function filter(){
		$nama = request('nama');
		//$data['list_blog'] = blog::where('nama_blog', 'like' "%$nama_blog%") -> get();
		//$data['list_blog'] = blog::whereIn('kategori_blog', $kategori_blog)->get();
		//$data['list_blog'] = blog::whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_blog'] = blog::where('kategori_blog', '<>', $kategori_blog) -> get();
		//$data['list_blog'] = blog::whereNotIn('kategori_blog', $kategori_blog)->get();
		

		$data['list_blog'] = Blog::where('judul','like', "%$nama%")->get();
		$data['nama'] = $nama;

		return view('client/index', $data);
	}

}