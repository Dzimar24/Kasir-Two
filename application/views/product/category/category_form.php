<!-- <div class="page-header">
    <h3 class="page-title"> Categories 
        <small>Kategori Barang</small>
    </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-speedometer"></i></a></li>
        <li class="breadcrumb-item active" aria-current="page">Category</li>
    </ol>
    </nav>
</div> -->

<!-- Main Content -->
<div class="col-lg-12 grid-margin">
	<div class="card">
		<div class="card-body">
            <div class="box-header">
                <h4 class="card-title">
                     <?= ucfirst($page)?> Categories 
                </h4>
                <div class="pull-right" style="float: right; position: absolute; top: 10px; right: 0; margin-right: 20px;">
                    <a href="<?= site_url('category')?>" class="btn btn-inverse-warning btn-flat">
                        <i class="mdi mdi-undo-variant"></i> Back 
                    </a>
                </div>
            </div>
            <div class="box-body">
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('category/process')?>" method="post" class="forms-sample">
                      <div class="form-group has-error">
                        <label for="exampleInputUsername1">Category Name *</label>
                        <input type="hidden" name="id" value="<?= $row->category_id?>">
                        <input type="text" name="category_name" value="<?= $row->name?>" class="form-control" placeholder="Name" required>
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
