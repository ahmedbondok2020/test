<ul>
	@foreach($childs as $child)
		<li>
			{{ $child->name_ar }} &nbsp;&nbsp;&nbsp;&nbsp; {{ $child->name_en }}
			&nbsp;
			&nbsp;
			&nbsp;
				<a href="{{ url('/adminpanel/category/editCategory/') }}/{{$child->id}}" style="padding: 20px;">
					<i class="fa fa-edit" aria-hidden="true"></i>
				</a>
				 &nbsp;&nbsp;&nbsp;&nbsp;
				<a onclick="return confirm('هل انت متاكد من حذف هذا التصنيف ؟')" href="{{ url('/adminpanel/category/delete') }}/{{$child->id}}" style="padding: 20px;">
					<i class="fa fa-trash" aria-hidden="true"></i>
				</a>
			@if(count($child->childs))
				@include('admin/categories/manageChild',['childs' => $child->childs])
			@endif
		</li>
	@endforeach
</ul>
