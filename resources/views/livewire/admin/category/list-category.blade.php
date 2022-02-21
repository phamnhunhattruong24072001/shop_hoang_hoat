<div>
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            @include('admin.inc.breadcrumb', ['title' => 'Danh mục', 'subtitle' => 'Danh sách'])
            <!--end breadcrumb-->
            <div class="d-block pb-2">
                <a href="{{route('category.create')}}" class="btn btn-primary rounded-0">Thêm mới <i
                        class="fa-solid fa-circle-plus"></i></a>
            </div>
            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">Danh mục sản phẩm</h4>
                    </div>
                    <hr />
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"><input type="checkbox"></th>
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">Đường dẫn</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $cate)
                                    <tr>
                                        <th scope="row"><input type="checkbox"></th>
                                        <td>{{$cate->category_name}}</td>
                                        <td>{{$cate->category_slug}}</td>
                                        <td><a href="{{route('category.edit', $cate->id)}}" class="btn btn-warning"><i class="fa fa-user-pen"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
