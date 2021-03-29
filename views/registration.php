<form action="" method="post">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" placeholder="example: SkataAndras">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">E-mail</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               placeholder="example: skata@gmail.com">
        <small id="emailHelp" class="form-text text-muted"><i>At Skata, we never share your email or personal info with
                anyone.</i></small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
               placeholder="example: Skata_Andras@123">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" name="confirmPassword" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-check text-center">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Keep me logged in</label>
    </div>
    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <br>
        <a href="/login">or login with your existing account</a>
    </div>
</form>