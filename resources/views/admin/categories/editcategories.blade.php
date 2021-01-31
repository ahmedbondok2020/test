@extends('admin.layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> All Categories </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/adminpanel') }}">Home</a></li>
                        <li class="breadcrumb-item active"> All Categories </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="table-responsive table-desi">
                <ul id="tree1" class="tree">
                    @foreach($categories as $category)
                        <li>
                            {{ $category->name_ar }} &nbsp;&nbsp;&nbsp;&nbsp; {{ $category->name_en }}
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            <a href="{{ url('/adminpanel/category/editCategory/') }}/{{$category->id}}">
                                <i class="fa fa-edit " aria-hidden="true"></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a onclick="return confirm('هل انت متاكد من حذف هذا التصنيف ؟')" href="{{ url('/adminpanel/category/delete') }}/{{$category->id}}">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>

                            @if(count($category->childs))
                                @include('admin/categories/manageChild',['childs' => $category->childs])
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="row">

                <!-- left column -->
                <div class="col-md-10">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{ $title }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/adminpanel/category/updateCategory" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="card-body">
                                <div class="form-group">
                                    @if (session('msg'))
                                        <div class="msg_box alert alert-default-success">
                                            {{ session('msg') }}
                                        </div>
                                    @endif

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                <input type="hidden" value="{{ $Details->id }}" name="id">
                                <div class="form-group {{ $errors->has('name_ar') ? 'has-error' : '' }}">
                                    <label for="exampleInputEmail1">اسم التصنيف :</label>
{{--                                    {!! Form::text('name_ar', old('name_ar'), ['value'=> '','class' => "form-control" ,'id' => "exampleInputEmail1"]) !!}--}}
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $Details->name_ar }}" name="name_ar">
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                </div>
                                <div class="form-group {{ $errors->has('name_en') ? 'has-error' : '' }}">
                                    <label for="exampleInputEmail1"> Category Name </label>
{{--                                    {!! Form::text('name_en', old('name_en'), ['placeholder'=> 'اسم التصنيف','class' => "form-control" ,'id' => "exampleInputEmail1"]) !!}--}}
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $Details->name_en }}" name="name_en">
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                </div>
                                <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
                                    <select name="parent_id" class="form-control select2" style="width: 100%;">
                                        @if(isset($Details->parent_id) && $Details->parent_id == 0)
                                            <option selected="selected" value="0"> تصنيف رئيسيى </option>
                                        @else
                                            @php($catname= \App\categories::where('id', $Details->parent_id)->first())
                                            <option selected="selected" value="$Details->parent_id"> {{ $catname->name_ar }} </option>
                                        @endif

                                        @foreach ($allCategories as $pack_type)
                                            <option value="{{ $pack_type->id }}">{{ $pack_type->name_ar }} -- {{ $pack_type->name_en }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">image</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

@section('js')
    {!! Html::script('admin/js/treeview.js') !!}
@endsection