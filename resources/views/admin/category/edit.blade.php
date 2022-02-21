<x-admin-layout>
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            @include('admin.inc.breadcrumb', ['title' => 'Danh mục', 'subtitle' => 'Cập nhật'])
            <!--end breadcrumb-->
            <div class="d-block pb-2">
                
            </div>
            <form action="{{ route('category.update', $category->id) }}" autocomplete="off" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    @if (session('messages'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('messages') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="">Tên danh mục</label>
                                        <input type="text" id="slug" onkeyup="ChangeToSlug()" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{$category->category_name}}">
                                        @error('category_name')
                                            <span class="text-danger">{{ $errors->first('category_name') }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Đường dẫn</label>
                                        <input type="text" id="convert_slug" class="form-control @error('category_slug') is-invalid @enderror" name="category_slug" value="{{$category->category_slug}}">
                                        @error('category_slug')
                                            <span class="text-danger">{{ $errors->first('category_slug') }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Danh mục cha</label>

                                        <select name="category_parent_id" class="form-control" id="">
                                            <option value="">Chọn danh mục</option>
                                            @foreach ($categories as $cate)
                                                <option value="{{$cate->id}}" @if($cate->id == $category->category_parent_id) selected @endif>{{$cate->category_name}}</option>
                                                @foreach ($cate->parent as $child)
                                                    <option value="{{$cate->id}}" @if($cate->id == $category->category_parent_id) selected @endif>----{{$child->category_name}}</option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">Hình ảnh</div>
                                <div class="card-body text-center">
                                    <div class="preview hide mb-3" id="image__preview">
                                        @if(old('category_image'))
                                            <img src="{{asset(old('category_image'))}}" height="50px" width="auto" alt="">
                                        @else
                                            <img src="{{asset($category->category_image)}}" height="50px" width="auto" alt="">
                                        @endif
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="hidden" id="image" data-upload="category_image" data-preview="image__preview">
                                    <input type="hidden" name="category_image" value="{{$category->category_image}}">
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#filemanagerModal"><i class="fa fa-upload"></i></button>
                                </div>
                                @error('category_image')
                                        <span class="text-danger">{{ $errors->first('category_image') }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-block p-2">
                            <button class="btn btn-primary rounded-0" type="submit">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>