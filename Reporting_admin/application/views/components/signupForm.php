<h2>Create New Account</h2>

            <form action="<?php echo BASEURL;?>/accountController/createAccount" method="POST">
                <div class="form-group">
                    <input type="text" name="fullname" class="form-control" placeholder="FullName" 
                    value="<?php if(!empty($data['fullname'])):
                    echo $data['fullname'];
                    endif; ?>">
                <div class="error">
                    <?php if(!empty($data['fullnameError'])):
                    echo $data['fullnameError'];
                    endif; ?>
                </div>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" 
                    value="<?php if(!empty($data['email'])):
                    echo $data['email'];
                    endif; ?>">
                <div class="error">
                    <?php if(!empty($data['emailError'])):
                    echo $data['emailError'];
                    endif; ?>
                </div>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password"
                    value="<?php if(!empty($data['password'])):
                    echo $data['password'];
                    endif; ?>">
                    <div class="error">
                    <?php if(!empty($data['passwordError'])):
                    echo $data['passwordError'];
                    endif; ?>
                </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="signBtn" class="btn btn-primary" value="Register">
                </div>
            </form>