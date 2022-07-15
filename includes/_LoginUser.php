
<!-- studetn login page  -->
<section class="login ">
    <h1 class="h-primary" style="text-align: center;"><?php echo $heading ?></h1>
    <div class="login-container row">
        <!-- left container for img  -->
    <div class="login-left col">
      
       <div class="login-left-img">
           <img src="../static/img/<?php echo $img_path ?>/<?php echo $img_path_file ?>" alt="workshop " >
       </div>
    </div>
    <!-- right container for the form  -->
    <div class="login-right col">
       
        <form action="../<?php  echo $action_folder?>/<?php echo $action_file ?>.php" id="form" class="form" method="post">
            <div class="form-input">
                <label for="username">Enter Your Username</label>
                <input type="text" name="username" id="username" class="input" placeholder="Enter your username" required>
            </div>
            <div class="form-input ">
                <label for="password">Enter Your Password</label>
                <input type="password" name="password" id="password" class="input" placeholder="Enter your password" required>
            </div>
            <div class="form-input ">
               <button class="btn" type="submit" name="login">Login</button>
            </div>
        </form>
    </div>

</section> 