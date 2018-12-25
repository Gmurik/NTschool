
<section class="ls section_padding_top_100 section_padding_bottom_100">
    <div class="container">

        <div class="row">

            <form class="shop-register" role="form" method="post">

                <label for="email">Email address</label>
                <p><?php echo $__env->yieldContent('messages'); ?></p>
                
                    
                        
                    
                
                <input type="text" name="email" id="email"><br>

                <label for="password">Password</label>
                
                    
                        
                    
                
                <input type="password" name="password" id="password"><br>

                <label for="password_confirmation">Password confirmation</label>
                
                    
                        
                    
                
                <input type="password" name="password_confirmation" id="password_confirmation"><br>

                <div class="col-sm-12">

                    <button type="submit" class="theme_button wide_button color1 topmargin_40">Register Now</button>

                </div>

            </form>


        </div>
    </div>
</section>
