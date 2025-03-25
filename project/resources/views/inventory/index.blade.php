@extends('template.main')

@section('title', 'Inventory')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-center">
                        Inventory List
                    </div>
                    <div class="card-body">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Item Name</th>
                                    <th>Category</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($inventory as $item)
                                    <tr>
                                        <td class="fw-bold">{{ $item->id }}</td>
                                        <td>{{ $item->item_name }}</td>
                                        <td>{{ $item->category->name }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>₱{{ number_format($item->price, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<td>{{ $item->category->name ?? 'No Category' }}</td>

