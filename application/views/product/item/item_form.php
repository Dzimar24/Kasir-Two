<div class="page-header">
    <h3 class="page-title"> Item 
        <small>Data Barang</small>
    </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-speedometer"></i></a></li>
        <li class="breadcrumb-item active" aria-current="page">Item</li>
    </ol>
    </nav>
    <?php $this->view('pesan')?>
</div>

<!-- Main Content -->
<div class="col-lg-12 grid-margin">
	<div class="card">
		<div class="card-body">
            <div class="box-header">
                <h4 class="card-title">
                     <?= ucfirst($page)?> Categories 
                </h4>
                <div class="pull-right" style="float: right; position: absolute; top: 10px; right: 0; margin-right: 20px;">
                    <a href="<?= site_url('item')?>" class="btn btn-inverse-warning btn-flat">
                        <i class="mdi mdi-undo-variant"></i> Back 
                    </a>
                </div>
            </div>
            <div class="box-body">
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
                <?php echo form_open('item/process')?>
                      <div class="form-group has-error">
                        <label for="exampleInputUsername1">Barcode *</label>
                        <input type="hidden" name="id" value="<?= $row->item_id?>">
                        <input type="text" name="barcode" value="<?= $row->barcode?>" class="form-control" placeholder="Barcode Barang" required>
                      </div>
                      <div class="form-group has-error">
                        <label for="product_name">Product Name *</label>
                        <input type="text" name="product_name" id="product_name" value="<?= $row->name?>" class="form-control" placeholder="Name Product" required>
                      </div>
                      <div class="form-group has-error">
                        <label for="product_name">Category *</label>
                        <select name="category" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach($category->result() as $key => $data) { ?>
                                <option value="<?=$data->category_id?>" <?=$data->category_id == $row->category_id ? "selected" : null ?>><?= $data->name?></option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="form-group has-error">
                        <label for="product_name">Unit *</label> 
                            <?php echo form_dropdown('unit', $unit, $selectedunit, 
                                ['class' => 'form-control', 'required' => 'required'])
                            ?>
                      </div>
                      <div class="form-group has-error">
                        <label for="exampleInputUsername1">Price Product *</label>
                        <input type="hidden" name="id" value="<?= $row->item_id?>">
                        <input type="number" name="price" value="<?= $row->price?>" class="form-control" placeholder="Price product" required>
                      </div>
                      <div class="form-group has-error">
                        <label for="exampleInputUsername1">Image</label>
                        <input type="file" name="image" class="form-control" placeholder="Price product">
                      </div>
                      <div class="form-group">
                        <button type="submit" name="<?=$page?>" class="btn btn-secondary btn-flat">Save</button>
                        <button type="reset" class="btn btn-info">Reset</button>
                      </div>
                    <?php echo form_close() ?>
              </div>
            </div>
		</div>
	</div>
</div>
