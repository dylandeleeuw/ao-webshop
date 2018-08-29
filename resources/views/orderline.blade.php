@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Order details</div>

                <div class="card-body">
                    @isset ($products)                    
                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th style="width:50%">Product</th>
                                <th style="width:10%">Price</th>
                                <th style="width:8%">Quantity</th>
                                <th style="width:22%" class="text-center">Subtotal</th>
                                <th style="width:10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
                                            <div class="col-sm-10">
                                                <h4 class="nomargin">{{$product->name}}</h4>
                                                <p>{{$product->description}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Price">{{$product->price}}</td>
                                    <td data-th="Quantity">
                                        {{$product->quantity}}
                                    </td>
                                    
                                    <td data-th="Subtotal" class="text-center">{{$product->totalPrice}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="visible-xs">
                                <td class="text-center"><strong>Total 1.99</strong></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="hidden-xs"></td>
                                <td class="hidden-xs text-center"><strong>Total {{$totalCartPrice}}</strong></td>

                            </tr>
                        </tfoot>
                    </table>
                    @else
                    nothing in your cart <a href="/categories" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                    @endisset                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection