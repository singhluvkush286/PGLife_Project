<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup-heading">Signup with PGLife</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="signup-form" class="form" role="form">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="full_name" aria-placeholder="Full Name" maxlength="30" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="password" placeholder="password" minlength="6" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="college_name" placeholder="college_name" maxlength="150" required>
                        </div>

                        <div class="class-group">
                            <span>I'm a</span>
                            <input type="radio" class="m1-3" id="gender-male" name="gender" value="male"/>male
                            <label for="gender-male">
                            </label>
                            <input type="radio" class="m1-3" id="gender-male" name="gender" value="female"/>
                            <label for="gender-male">
                            </label>female
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">create account</button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <span>Already have a account?
                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                    </span>
                </div>
            </div>
        </div>
    </div>