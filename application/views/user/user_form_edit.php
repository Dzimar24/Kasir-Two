<!-- <div class="page-header">
    <h3 class="page-title"> Users Pengguna </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-speedometer"></i></a></li>
        <li class="breadcrumb-item active" aria-current="page">Users</li>
    </ol>
    </nav>
</div> -->

<!-- Main Content -->
<div class="col-lg-12 grid-margin">
	<div class="card">
		<div class="card-body">
            <div class="box-header">
                <h3 class="card-title">
                     Edit User
                </h3>
                <div class="pull-right" style="float: right; position: absolute; top: 10px; right: 0; margin-right: 20px;">
                    <a href="<?= site_url('user')?>" class="btn btn-inverse-warning btn-flat">
                        <i class="mdi mdi-undo-variant"></i> Back 
                    </a>
                </div>
            </div>
            <div class="box-body">
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
                  <?php // echo validation_errors(); ?>
                    <form action="" method="post" class="forms-sample">
                      <div class="form-group has-error">
                        <label for="exampleInputUsername1">Name *</label>
                        <input type="hidden" name="user_id" value="<?= $row->user_id?>">
                        <input type="text" name="fullname" value="<?=$this->input->post('fullname') ?? $row->name?>" class="form-control" placeholder="Name">
                        <span class="help-block"><?= form_error('fullname')?></span>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Username *</label>
                        <input type="text" name="username" value="<?=$this->input->post('username') ?? $row->username?>" class="form-control" placeholder="Username">
                        <span class="help-block"><?= form_error('username')?></span>
                      </div> 
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label> <small>(Biarkan Kosong Jika Tidak Diganti )</small>
                        <input type="password" name="password" value="<?=$this->input->post('password') ?>" class="form-control" placeholder="Password">
                        <?= form_error('password')?>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Konfirmasi Password</label>
                        <input type="password" name="passconf" value="<?=$this->input->post('passconf')?>" class="form-control" placeholder="Password">
                        <?= form_error('passconf')?>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email </label>
                        <input type="email" name="email" value="<?=$this->input->post('email') ?? $row->email?>" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        <?= form_error('email')?>
                      </div>
                      <div class="form-group">
                        <label>Level</label>
                        <select name="level" class="form-control">
                            <?php $level = $this->input->post('level') ? $this->input->post('level'): $row->level ?>
                            <option value="1">Admin</option>
                            <option value="2" <?=$level == 2 ? 'selected' : null ?>>Kasir</option>
                            <option value="3" <?=$level == 3 ? 'selected' : null ?>>Manager</option>
                        </select>
                        <?= form_error('level')?>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-secondary btn-flat">Save</button>
                        <button type="reset" class="btn btn-info">Reset</button>
                      </div>
                      
                    </form>
              </div>
            </div>
		</div>
	</div>
</div>
