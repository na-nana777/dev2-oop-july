<div class="modal fade" id="create-account">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0 text-danger">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h1 class="modal-title">Registration</h1>
            </div>
            <div class="modal-body">
                <form action="../actions/create-account-action.php" method="post">
                    <div class="row">
                        <div class="col">
                            <label for="first-name" class="form-label">First Name</label>
                        </div>
                        <div class="col">
                            <label for="last-name" class="form-label">Last Name</label>
                        </div>
                        <div class="row">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="row">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="row">
                            <input type="submit" value="Register" name="btn_rgister" class="btn btn-danger w-100 mt-3">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>