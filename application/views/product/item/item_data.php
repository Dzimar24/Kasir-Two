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
</div>

<?php
//  $this->session->flashdata('success');
?>
<!-- Main Content -->
<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
            <div class="box-header">
                <h3 class="card-title">
                    Data Product Item
                </h3>
                <div class="pull-right" style="float: right; position: absolute; top: 20px; right: 0; margin-right: 20px;">
                    <a href="<?= site_url('item/add')?>" class="btn btn-inverse-primary btn-flat">
                        <i class="mdi mdi-account-plus"></i> Create Product Item
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 5%;">No </th>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$data->barcode?></td>
                            <td><?=ucfirst($data->name)?></td>
                            <td><?=ucfirst($data->category_name)?></td>
                            <td><?=$data->unit_name?></td>
                            <td>Rp. <?=number_format($data->price)?></td>
                            <td><?=$data->stock?></td>
                            <td>
                                <?php if($data->image != null){ ?>
                                    <img src="<?=base_url('uploads/product/'.$data->image)?>" alt="" style="with: 100px; " > 
                                <?php } ?>
                            </td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('item/edit/'.$data->item_id)?>" class="btn btn-inverse-primary btn-xs">
                                    <i class="mdi mdi-grease-pencil"></i>  Update
                                </a>
                                <a href="<?= site_url('item/del/'.$data->item_id)?>" onclick="return confirm('Apakah You yakin Ingin Menghapus data ?')" class="btn btn-inverse-danger btn-xs">
                                    <i class="mdi mdi-delete-forever"></i>  Delete
                                </a>
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
