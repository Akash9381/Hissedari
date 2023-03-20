<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class BlogController extends Controller
{
    public function Index()
    {
        $blogs = Blog::with('UserBlog')->where('status','approved')->get();
        return view('frontend.blog',compact('blogs'));
    }
    public function BlogDetails($id=null)
    {
        $blog = Blog::with('UserBlog')->where('id',$id)->where('status','approved')->first();
        return view('frontend.blog-detail',compact('blog'));
    }

    public function BlogDashboard()
    {
        $blogs = Blog::where('user_id', auth()->user()->id)->get();
        return view('blog-dashboard.stories', compact('blogs'));
    }

    public function BlogCreateNewStory($id = null)
    {
        $blog = Blog::where('id', $id)->first();
        return view('blog-dashboard.new-story', compact('blog'));
    }

    public function BlogCreate(Request $request, $id = null)
    {
        $array = $request->all();
        if ($id) {
            if ($request->hasFile('image')) {
                $filenamewithextension = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                $extension = $request->file('image')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $request->file('image')->storeAs('public/blog', $filenametostore);
                $request->file('image')->storeAs('public/blog/feature_image', $filenametostore);
                $blogimage = public_path('storage/blog/' . $filenametostore);
                $featureimagepath = public_path('storage/blog/feature_image/' . $filenametostore);
                Image::make($featureimagepath)->resize(700, 438)->save($featureimagepath);
                Image::make($featureimagepath)->resize(1920, 754)->save($blogimage);
                $array['image'] = $filenametostore;
                Blog::where('id', $id)->update([
                    'title' => $array['title'],
                    'slug' => Str::slug($array['title']),
                    'image' => $array['image'],
                    'description' => $array['editor1'],
                    'status' => 'draft'
                ]);
            } else {
                Blog::where('id', $id)->update([
                    'title' => $array['title'],
                    'slug' => Str::slug($array['title']),
                    'description' => $array['editor1'],
                    'status' => 'draft'
                ]);
            }
            return redirect('user/story-preview/' . $id);
        } else {
            if ($request->hasFile('image')) {
                $filenamewithextension = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                $extension = $request->file('image')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $request->file('image')->storeAs('public/blog', $filenametostore);
                $request->file('image')->storeAs('public/blog/feature_image', $filenametostore);
                $blogimage = public_path('storage/blog/' . $filenametostore);
                $featureimagepath = public_path('storage/blog/feature_image/' . $filenametostore);
                Image::make($featureimagepath)->resize(700, 438)->save($featureimagepath);
                Image::make($featureimagepath)->resize(1920, 754)->save($blogimage);
                $array['image'] = $filenametostore;
                $blog = new Blog;
                $blog->title = $array['title'];
                $blog->slug = Str::slug($array['title']);
                $blog->user_id = auth()->user()->id;
                $blog->image = $array['image'];
                $blog->description = $array['editor1'];
                $blog->status = 'draft';
                $blog->save();
                return redirect('user/story-preview/' . $blog['id']);
            } else {

                $blog = new Blog;
                $blog->title = $array['title'];
                $blog->slug = Str::slug($array['title']);
                $blog->user_id = auth()->user()->id;
                $blog->description = $array['editor1'];
                $blog->status = 'draft';
                $blog->save();
                return redirect('user/story-preview/' . $blog['id']);
            }
        }
    }

    public function BlogPreview($id = null)
    {
        $blog = Blog::where('id', $id)->first();
        if ($blog) {
            return view('blog-dashboard.story-preview', compact('blog'));
        }
    }

    public function BlogPublish($id = null)
    {
        Blog::where('id', $id)->update([
            'status' => 'published',
        ]);
        return redirect()->route('blog.dashboard');
    }

    public function BlogApproval()
    {
        $blogs = Blog::with('UserBlog')->where('status', 'published')->get();
        return view('admin.blog-approvel', compact('blogs'));
    }
    public function AdminBlogPreview($id = null)
    {
        $blog = Blog::where('id', $id)->first();
        return view('admin.blog-preview', compact('blog'));
    }

    public function AdminBlogApproved($id = null)
    {
        try {
            Blog::where('id', $id)->update([
                'status' => 'approved'
            ]);
            return redirect('admin/blog-approval')->with('success', 'Blog approved successfully');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
