<!-- <div class="page-header">
    <h3 class="page-title"> Customer 
        <small>Pelanggan</small>
    </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-speedometer"></i></a></li>
        <li class="breadcrumb-item active" aria-current="page">Customer</li>
    </ol>
    </nav>
</div> -->

<!-- Main Content -->
<div class="col-lg-12 grid-margin">
	<div class="card">
		<div class="card-body">
            <div class="box-header">
                <h4 class="card-title">
                     <?= ucfirst($page)?> customer
                </h4>
                <div class="pull-right" style="float: right; position: absolute; top: 10px; right: 0; margin-right: 20px;">
                    <a href="<?= site_url('customer')?>" class="btn btn-inverse-warning btn-flat">
                        <i class="mdi mdi-undo-variant"></i> Back 
                    </a>
                </div>
            </div>
            <div class="box-body">
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('customer/process')?>" method="post" class="forms-sample">
                      <div class="form-group has-error">
                        <label for="exampleInputUsername1">Customer Name *</label>
                        <input type="hidden" name="id" value="<?= $row->customer_id?>">
                        <input type="text" name="customer_name" value="<?= $row->name?>" class="form-control" placeholder="Name" required>
                      </div>
                      <div class="form-group has-error">
                        <label for="exampleInputUsername1">Gender  *</label>
                        <select name="gender" class="form-control" require>
                            <option value=""> --- What Are You Gender ---</option>
                            <option value="L" <?= $row->gender == 'L' ? 'selected' : ''?>>Laki-Laki</option>
                            <option value="P" <?= $row->gender == 'P' ? 'selected' : ''?>>Perempuan</option>
                        </select>
                      </div>
                      <div class="form-group has-error">
                        <label for="exampleInputUsername1">Phone *</label>
                        <input type="number" name="phone" value="<?= $row->phone ?>" class="form-control" placeholder="Phone" required>
                      </div>
                      <div class="form-group has-error">
                        <label for="exampleInputUsername1">Address *</label>
                        <textarea type="text" name="addr" class="form-control" placeholder="Address" required><?= $row->address ?></textarea>
                      </div>
                      
                      <div class="form-group">
                        <button type="submit" name="<?=$page?>" class="btn btn-secondary btn-flat">Save</button>
                        <button type="reset" class="btn btn-info">Reset</button>
                      </div>
                      
                    </form>
              </div>
            </div>
		</div>
	</div>
</div>
