<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Storage;

class CategoriesController extends Controller
{
    
    public function list(Request $request)
    {
        $perPage = $request->input('per_page', 5);
        $search = $request->input('name');
        
        $categories = Categories::with('parent')
            ->when($search, function($query) use ($search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })->paginate($perPage);
            
        $error = null;
        if ($search && $categories->isEmpty()) {
            $error = 'Không tìm thấy danh mục nào với tên: "' . $search . '"';
        }
    
        return view('admin.category.index', compact('categories', 'search', 'perPage', 'error'));
    }

    public function create()
    {
        $categories = Categories::all();
        return view('admin.category.add', compact('categories'));
    }

  

public function store(Request $request)
{
    $request->validate([
        'name' => [
            'required',
            'unique:categories,name', 
            'max:255',
            'regex:/^[\pL\pN\s]+$/u',
        ],
        'slug' => 'required|unique:categories,slug',
        'description' => 'required',
        'image_path' => 'required|image',
        'parent_id' => 'nullable|exists:categories,id',
    ], [
        'name.required' => 'Tên danh mục không được để trống.',
        'name.unique' => 'Tên danh mục đã tồn tại.',
        'name.max' => 'Tên danh mục không được vượt quá 255 ký tự.',
        'name.regex' => 'Tên danh mục chỉ được chứa chữ cái, số và khoảng trắng.',
        'slug.required' => 'Đường dẫn thân thiện không được để trống.',
        'slug.unique' => 'Đường dẫn thân thiện đã tồn tại.',
        'description.required' => 'Mô tả không được để trống.',
        'image_path.required' => 'Ảnh danh mục không được để trống.',
        'image_path.image' => 'File tải lên phải là ảnh.',
        'parent_id.exists' => 'Danh mục cha không tồn tại.',
    ]);
    

    $imagePath = $request->file('image_path')->store('categories', 'public');

    Categories::creat([
        'name' => $request->name,
        'slug' => $request->slug,
        'description' => $request->description,
        'image_path' => $imagePath,
        'parent_id' => $request->parent_id,
    ]);

    return redirect()->route('categoriesList')->with('success', 'Thêm mới thành công!');
}


 
    public function toggleStatus($id)
    {
        $category = Categories::findOrFail($id);
        $category->status = !$category->status;
        $category->save();

        $message = $category->status ? 'Danh mục đã được kích hoạt.' : 'Danh mục đã bị ẩn.';
        return redirect()->route('categoriesList')->with('success', $message);
    }

 
    public function edit($id)
    {
        $categories = Categories::findOrFail($id); 
        $categoryList = Categories::all();
        return view('admin.category.edit', compact('categoryList', 'categories',));
    }

   
    public function update(Request $request, $id)
    {
        $category = Categories::findOrFail($id);
        $request->validate([
            'name' => [
                'required',
                'unique:categories,name,' . $category->id, 
                'max:255',
                'regex:/^[\pL\pN\s]+$/u', 
            ],
            'slug' => 'required|unique:categories,slug,' . $category->id, 
            'description' => 'required',
            'image_path' => 'nullable|image',
            'parent_id' => 'nullable|exists:categories,id',
            'status' => 'required|boolean', 
        ], [
            'name.required' => 'Tên danh mục không được để trống.',
            'name.unique' => 'Tên danh mục đã tồn tại.',
            'name.max' => 'Tên danh mục không được vượt quá 255 ký tự.',
            'name.regex' => 'Tên danh mục chỉ được chứa chữ cái, số và khoảng trắng.',
            'slug.required' => 'Đường dẫn thân thiện không được để trống.',
            'slug.unique' => 'Đường dẫn thân thiện đã tồn tại.',
            'description.required' => 'Mô tả không được để trống.',
            'image_path.image' => 'File tải lên phải là ảnh.',
            'parent_id.exists' => 'Danh mục cha không tồn tại.',
            'status.required' => 'Trạng thái không được để trống.', 
        ]);
    
        if ($request->hasFile('image_path')) {
            if ($category->image_path) {
                Storage::disk('public')->delete($category->image_path); 
            }
    
            $imagePath = $request->file('image_path')->store('categories', 'public');
            $category->image_path = $imagePath; 
        }
    
        
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->status = $request->status; 
        $category->save();
    
        return redirect()->route('categoriesList')->with('success', 'Cập nhật danh mục thành công!');
    }
    
}
