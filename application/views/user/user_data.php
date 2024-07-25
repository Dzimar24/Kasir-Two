<div class="page-header">
    <h3 class="page-title"> Users Pengguna </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-speedometer"></i></a></li>
        <li class="breadcrumb-item active" aria-current="page">Users</li>
    </ol>
    </nav>
</div>

<!-- Main Content -->
<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
            <div class="box-header">
                <h3 class="card-title">
                    Information<code> Data User</code>
                </h3>
                <div class="pull-right" style="float: right; position: absolute; top: 20px; right: 0; margin-right: 20px;">
                    <a href="<?= site_url('user/add')?>" class="btn btn-inverse-primary btn-flat">
                        <i class="mdi mdi-account-plus"></i> Create 
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 5%;">No </th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=ucfirst($data->username)?></td>
                            <td><?=ucfirst($data->name)?></td>
                            <td><?=$data->email?></td>
                            <td>
                                <?php
                                if($data->level == 1) {
                                echo "Admin";
                                } else if($data->level == 2) {
                                echo "Kasir";
                                } else if($data->level == 3) {
                                echo "Manager";
                                }
                                ?>
                            </td>
                            <td class="text-center" width="160px">
                                <form action="<?= site_url('user/del')?>" method="post">
                                    <a href="<?= site_url('user/edit/'.$data->user_id)?>" class="btn btn-inverse-primary btn-xs">
                                        <i class="mdi mdi-grease-pencil"></i>  Update
                                    </a>
                                
                                    <input type="hidden" name="user_id" value="<?= $data->user_id?>">
                                    <button onclick="return confirm('Apakah You yakin Ingin Menghapus data ?')" class="btn btn-inverse-danger btn-xs">
                                        <i class="mdi mdi-delete-forever"></i>  Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
		</div>
	</div>
</div>
