<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div id="review-form-wrapper">
                    <div id="comments">
                        <h2 class="woocommerce-Reviews-title">Form Review</h2>
							<ol class="commentlist">
                                <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
                                    <div id="comment-20" class="comment_container"> 
                                        
                                        <div class="comment-text">
                                        
                                            
                                        
                                        </div>  
                                    </div>
                                </li>
                            </ol>
				    </div>
                    <div id="review-form">
                         @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                        @endif
                        <div id="respond" class="comment-respond" >
                            <form wire:submit.prevent="addReview" id="comment-form" class="comment-form" >
                                <div class="comment-form-rating">
                                    <span>Your Rating</span>
                                    <p class="stars">
                                        <label for="rated-1"></label>
                                        <input type="radio" id="rated-1" name="rating" value="1" wire:model="rating">
                                        <label for="rated-2"></label>
                                        <input type="radio" id="rated-2" name="rating" value="2" wire:model="rating">
                                        <label for="rated-3"></label>
                                        <input type="radio" id="rated-3" name="rating" value="3" wire:model="rating">
                                        <label for="rated-4"></label>
                                        <input type="radio" id="rated-4" name="rating" value="4" wire:model="rating">
                                        <label for="rated-5"></label>
                                        <input type="radio" id="rated-5" name="rating" value="5" checked="checked" wire:model="rating" >
                                        @error('rating') <span class="text-danger">{{$message}}</span> @enderror

                                    </p>
                                </div>

                                <p class="comment-form-user">
                                    <label for="description">Your Review <span class="required">*</span></label>
                                    <textarea  class = "ckeditor" id="description" name="description" wire:model="description"></textarea>
                                    @error('description') <span class="text-danger">{{$message}}</span> @enderror
                                </p>
                                <p class="form-submit">
                                    <input type="submit" name="submit" id="submit" value="submit" class="btn btn-success">
                                </p>

                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
