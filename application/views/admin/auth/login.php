<div class="d-flex h-auto min-h-full justify-content-center">
    <div class="d-flex align-items-center justify-content-center flex-fill">
        <div class="container">
            <div class="row">
                <div class="col col-login mx-auto">
                    <div class="text-center mb-4 mt-4">
                        <img src="<?= base_url('assets/admin/img/logo-black.png') ?>" class="w-50" alt="">
                    </div>
                    <form class="card" action="<?= route('admin.check_login') ?>" id="login_form" method="post">
                        <div class="card-body p-6">
                            <div class="card-title">Login to your account</div>
                            <div class="mb-2 form-group">
                                <label class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter email" autocomplete="off">
                            </div>
                            <div class="mb-2 form-group">
                                <a href="<?= route('admin.forget_form') ?>" class="float-right small">I forgot password</a>
                                <label class="form-label">
                                    Password
                                </label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off">
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-submit btn-primary btn-block">Sign in</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center text-muted">
                        Don't have account yet? <a href="./register.html">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $("#login_form").submit(function(){
        $this = $(this);
        $.ajax({
            url:$this.attr("action"),
            type:'POST',
            dataType:'json',
            data:$this.serialize(),
            beforeSend:function(){ $this.find('.btn-submit').btn("loading"); },
            complete:function(){ $this.find('.btn-submit').btn("reset"); },
            success:function(json){
                json_callback(json,$this);
            },
        })
        return false;
    })
</script>