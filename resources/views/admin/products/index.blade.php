@extends('layouts.admin')

@section('content')

 <div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<table class="table" id="datatable">
				<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">name</th>
					<th scope="col">description</th>
					<th scope="col">price</th>
					<th scope="col">category</th>
					<th scope="col">edit</th>
					<th scope="col">delete</th>

					


				</tr>
				</thead>
				<tbody>	
				@foreach($products as $product)
				<tr>
				<td><a href="{{route('products.edit',$product->id)}}">{{$product->id}}</a></td>
				<td>{{$product->name}}</td>
				<td>{{$product->description}}</td>
				<td>{{$product->price}}</td>
				<td>{{$product->category ? $product->category->name : 'Uncategorized'}}</td>
				<td><a href="{{route('products.edit',$product->id)}}" class="btn btn-outline-primary btn-sm">Edit</a></td>
				<td><form action="{{route('products.destroy', $product->id)}}" method="POST">
             @method('DELETE')
             @csrf
             <button type="submit" class="btn btn-outline-danger btn-sm">Delete Product</a>
        </form></td>
				</tr>
				@endforeach
			</tbody>
			</table>
		</div>
	</div>

	

 </div>



@endsection