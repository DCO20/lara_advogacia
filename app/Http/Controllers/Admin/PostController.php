<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class postController extends Controller
{
    protected $repository;

    public function __construct(Post $post)
    {
        $this->repository = $post;

    }

    public function index()
    {
        $posts = $this->repository->latest()->paginate();

        return view('admin.pages.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.pages.posts.create');
    }

    public function store(StoreUpdatePost $request)
    {
        $data = $request->all();

        if ($request->image->isValid()) {
            $image = $request->image->store("posts");
            $data['image'] = $image;
        }

        $this->repository->create($data);

        return redirect()->route('posts.index')->with('message', 'Usuário criado com sucesso.');
    }

    public function show($id)
    {
        if (!$post = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.posts.show', compact('post'));
    }

    public function edit($id)
    {
        if (!$post = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.posts.edit', compact('post'));
    }

   
    public function update(StoreUpdatePost $request, $id)
    {
        if (!$post = $this->repository->find($id)) {
            return redirect()->back();
        }
        $data = $request->all();


        if ($request->hasFile('image') && $request->image->isValid()) {

            if (Storage::exists($post->image)) {
                Storage::delete($post->image);
            }

            $data['image'] = $request->image->store("posts");
        }

        $post->update($data);

        return redirect()->route('posts.index')->with('message', 'Usuário editado com sucesso.');
    }

    public function destroy($id)
    {
        if (!$post = $this->repository->find($id)) {
            return redirect()->back();
        }

        $post->delete();

        return redirect()->route('posts.index')->with('error', 'Usuário excluído com sucesso.');
    }

    /**
     * Search results
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $filters = $request->only('filter');

        $posts = $this->repository
                            ->where(function($query) use ($request) {
                                if ($request->filter) {
                                    $query->orWhere('name', 'LIKE', "%{$request->filter}%");
                                    $query->orWhere('email', $request->filter);
                                }
                            })
                            ->latest()
                            ->paginate();

        return view('admin.pages.posts.index', compact('posts', 'filters'));
    }
}
