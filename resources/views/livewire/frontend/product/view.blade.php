<div>
    <div class="py-3 py-md-5 ">
        <div class="container">
            @if (session()->has('message'))
             <div class="alert alert-success">
                {{ session('message') }}
             </div>
           @endif
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                        @if($product->productImages->count() > 0)
                         
                         <img src="{{asset($product->productImages[0]->image)}}" class="w-100" alt="{{$product->name}}">
                         {{-- <div class="exzoom" id="exzoom">
                            
                              <!-- Images -->
                            
                              <div class="exzoom_img_box">
                            
                                <ul class='exzoom_img_ul'>
                                    @foreach ($product->productImages as $item)
                                      
                                     <li><img src="{{asset($item->image)}}"/></li>
                                        
                                    @endforeach
                            
                            
                             
                          
                                  ...
                           
                                </ul>
                           
                              </div>
                          
                              <!-- <a href="https://www.jqueryscript.net/tags.php?/Thumbnail/">Thumbnail</a> Nav-->
                          
                              <div class="exzoom_nav"></div>
                            
                              <!-- Nav Buttons -->
                          
                              <p class="exzoom_btn">
                           
                                  <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                            
                                  <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                           
                              </p>
                          
                            </div> --}}
                            
                        @else
                         No Image Added 
                        
                       @endif 
                    
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            {{$product->name}}
                        
                            
                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / {{$product->category->name}} / {{$product->name}}
                        </p>
                        <div>
                            <span class="selling-price"> ${{$product->selling_price}}</span>
                            <span class="original-price">${{$product->original_price}}</span>
                        </div>
                        <div>
                         @if($product->productColors->count()> 0) 
                            @if($product->productColors)
                             @foreach ( $product->productColors as $color)
                              {{-- <input type="radio" name="colorSelection" value="{{$color->id}}">{{$color->color->name}} --}}
                                <label class="ColorSelectionLabel"  style="background-color: {{$color->color->code}}"  wire:click="colorSelected({{ $color->id }})">
                                    {{$color->color->name}}
                                </label>
                                
                             @endforeach
                            @endif
                            <div>
                                @if($this->prodColorSelectedQuantity == 'outofstock')
                                <label class="btn btn-sm py-1 mt-2 text-white bg-danger">Out of Stock</label>
   
                               @elseif($this->prodColorSelectedQuantity > 0 )
                                <label class="btn btn-sm py-1 mt-2 text-white bg-success">In Stock</label>
                               @endif

                            </div>
                          
                         @else
                                @if($product->quantity > 0)
                                <label class="btn-sm py-1 mt-2 text-white bg-success">In Stock</label>
                                @else
                                <label class="btn-sm py-1 mt-2 text-white bg-danger">Out of Stock</label>
                                @endif
                         @endif   
                        </div>
                        <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1" wire:click="decermentQuantity"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model="quantityCount" value="{{$this->quantityCount}}" readonly class="input-quantity" />
                                <span class="btn btn1" wire:click="incermentQuantity"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="button" wire:click="addToCart({{ $product->id }})"   class="btn btn1"> 
                                <i class="fa fa-shopping-cart"></i> Add To Cart
                            </button>
                        
                             <button type="button" wire:click="addToWishlist({{ $product->id }})"  class="btn btn1">
                                <span wire:loading.remove wire:target="addToWishlist">
                                 <i class="fa fa-heart"></i> Add To Wishlist 
                                </span>
                                <span wire:loading wire:target="addToWishlist">
                                    Adding...
                                </span>
                             </button>
                            
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0">Small Description</h5>
                            <p>
                                {{$product->small_description}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>Description</h4>
                        </div>
                        <div class="card-body">
                            <p>
                              {{$product->description}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
 <script>
  
    $(function(){

    $("#exzoom").exzoom({

        "navWidth": 60,
        "navHeight": 60,
        "navItemNum": 5,
        "navItemMargin": 7,
        "navBorder": 1,
        "autoPlay":false,
        "autoPlayTimeout": 2000

    });

    });


 </script>
    
@endpush
