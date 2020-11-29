<?php 


namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Kategori;

/**
 * 
 */
class BlogController extends Controller
{
	
	function index()
	{
		$user = request()->user();
		$data['list_blog'] = $user->blog;
		return view('admin/blog/index', $data);
	}
	
	function create()
	{
		return view('admin/blog/create');
	}
	
	function store()
	{
		$blog = new Blog;
		$blog->id_user = request()->user()->id;
		$blog->judul = request('judul');
		$blog->penulis = request('penulis');
		$blog->id_kategori = request('id_kategori');
		$blog->isi = request('isi');
		$blog->save();

		return redirect('admin/blog')->with('success', 'Data Berhasil di Tambahkan');
	}
	
	function show(Blog $blog)
	{
		$data['blog'] = $blog;
		return view('admin/blog/show', $data);
	}
	
	function edit(Blog $blog)
	{
		$data['blog'] = $blog;
		return view('admin/blog/edit', $data);
		
	}
	
	function update(Blog $blog)
	{
		$blog->judul = request('judul');
		$blog->penulis = request('penulis');
		$blog->id_kategori = request('id_kategori');
		$blog->isi = request('isi');
		$blog->save();

		return redirect('admin/blog')->with('success', 'Data Berhasil di Update');
	}
	
	function destroy(Blog $blog)
	{
		$blog->delete();

		return redirect('admin/blog')->with('danger', 'Data Berhasil di Hapus');
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

		return view('admin/blog/index', $data);
	}
}