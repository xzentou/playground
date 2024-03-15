<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Forms</h5>
              <div class="card">
                <div class="card-body">
                  <form novalidate method="post" action="<?=base_url('home/aksi_ganti')?>" class="row g-3">
                     <?php if (session()->has('error')): ?>
    <div class="alert alert-danger" role="alert">
        <?= session('error') ?>
    </div>
<?php endif; ?>
                    <div class="mb-3">
                     <label for="inputName5" class="form-label">Old Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="inputName5" name="old">
                        <button class="btn btn-outline-secondary" type="button" id="showOldPassword">Show</button>
                    </div>

                    <div class="mb-3">
                      <label for="inputEmail5" class="form-label">New Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="inputEmail5" name="new">
                        <button class="btn btn-outline-secondary" type="button" id="showNewPassword">Show</button>
                    </div>
                    </div>
                    <div class="mb-3">
                      <label for="inputEmail5" class="form-label">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="inputpass5" name="newconfirm">
                        <button class="btn btn-outline-secondary" type="button" id="showConfirmPassword">Show</button>
                    </div>
                    </div>
                    
                    <div class="text-center">
                  <button type="submit" class="btn btn-login">Confirm</button>
                </div>

                <script>
                document.getElementById('showOldPassword').addEventListener('click', togglePasswordVisibility('inputName5'));
                document.getElementById('showNewPassword').addEventListener('click', togglePasswordVisibility('inputEmail5'))           ;
                document.getElementById('showConfirmPassword').addEventListener('click', togglePasswordVisibility('inputpass5'));

                function togglePasswordVisibility(inputId) {
                    return function () {
                        var passwordInput = document.getElementById(inputId);
                        if (passwordInput.type === "password") {
                            passwordInput.type = "text";
                        } else {
                           passwordInput.type = "password";
                       }
                   };
               }
            </script>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>