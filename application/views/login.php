<div class="container" style="margin-top: 100px; margin-bottom: 25px;">
    <form class="form-horizontal" role="form" method="POST" action="<?php echo htmlspecialchars(base_url('welcome/login')); ?>">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Please Login</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <label class="sr-only" for="email">E-Mail Address</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                                placeholder="you@example.com" value="" required autofocus>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="sr-only" for="password">Password</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" value="" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="padding-top: .35rem">
                <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                    <label class="form-check-label">
                        <input class="form-check-input" name="remember"
                                type="checkbox" >
                        <span style="padding-bottom: .15rem">Remember me</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="row" style="padding-top: 1rem">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
                <a class="btn btn-link" href="/password/reset">Forgot Your Password?</a>
            </div>
        </div>
    </form>
</div>