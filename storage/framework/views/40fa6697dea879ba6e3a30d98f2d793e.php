<div>
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <?php if(session()->has('message')): ?>
            <div class="alert alert-danger">
               <?php echo e(session('message')); ?>

            </div>
           <?php endif; ?>
            <h3>MY Wishlist</h3>
            <hr>
    
            <div class="row">
                <div class="col-md-12">
                    <div class="shopping-cart">

                        <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Products</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Price</h4>
                                </div>
                              
                                <div class="col-md-4">
                                    <h4>Remove</h4>
                                </div>
                            </div>
                        </div>
                      <?php $__empty_1 = true; $__currentLoopData = $wishlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wishlistitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                          <?php if($wishlistitem->product): ?>
                            <div class="cart-item">
                                <div class="row">
                                    <div class="col-md-6 my-auto">
                                        <a href="<?php echo e(url('/collections/'.$wishlistitem->product->category->slug.'/'.$wishlistitem->product->slug)); ?>">
                                            <label class="product-name">
                                                <img src="<?php echo e($wishlistitem->product->productImages[0]->image); ?>" style="width: 50px; height: 50px" alt="">
                                                <?php echo e($wishlistitem->product->name); ?>

                                            </label>
                                        </a>
                                    </div>
                                    <div class="col-md-2 my-auto">
                                        <label class="price">$ <?php echo e($wishlistitem->product->selling_price); ?></label>
                                    </div>
                                
                                    <div class="col-md-4 col-12 my-auto">
                                        <div class="remove">
                                            <button type="button" wire:click="removeWishListItem(<?php echo e($wishlistitem->id); ?>)" class="btn btn-danger btn-sm">
                                                <span wire:loading.remove wire:target="removeWishListItem(<?php echo e($wishlistitem->id); ?>)">
                                                    <i class="fa fa-trash"></i> Remove
                                                </span>
                                                <span wire:loading wire:target="removeWishListItem(<?php echo e($wishlistitem->id); ?>)">
                                                    <i class="fa fa-trash"></i> Removing..
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              
                          <?php endif; ?>
                          
                          
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <h4>NO Wishlist Added</h4>
                          
                      <?php endif; ?>
                       
                
                                
                    </div>
                </div>
            </div>

        </div>
    </div>



</div>
<?php /**PATH D:\project1\resources\views/livewire/frontend/wishlist-show.blade.php ENDPATH**/ ?>