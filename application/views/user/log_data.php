<div class="page-header">
    <h3 class="page-title"> Log Pengguna </h3>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-speedometer"></i></a></li>
        <li class="breadcrumb-item active" aria-current="page">Log</li>
    </ol>
    </nav>
</div>

<!-- Main Content -->
<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
            <div class="box-header">
                <h3 class="card-title">
                    Information<code> Data Log User</code>
                </h3>
            </div>
            <div class="form-outline mb-4">
                <input type="text" class="form-control" id="searchInput" placeholder="Search" />
                <table id="myTable">
                    <thead>
                        <tr>
                            <th style="width: 5%;">No </th>
                            <th>Username</th>
                            <th>keterangan</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=ucfirst($data->username)?></td>
                            <td><?=ucfirst($data->keterangan)?></td>
                            <td><?=$data->waktu?></td>
                        </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
		</div>
	</div>
</div>

<script>
    document.getElementById("searchInput").addEventListener("keyup", function() {
    let filter = this.value.toUpperCase();
    let table = document.getElementById("myTable");
    let rows = table.getElementsByTagName("tr");

    for (let i = 0; i < rows.length; i++) {
        let cells = rows[i].getElementsByTagName("td");
        let found = false;
        
        for (let j = 0; j < cells.length; j++) {
        let cellValue = cells[j].textContent || cells[j].innerText;
        
        if (cellValue.toUpperCase().indexOf(filter) > -1) {
            found = true;
            break;
        }
        }

        if (found) {
        rows[i].style.display = "";
        } else {
        rows[i].style.display = "none";
        }
    }
    });
</script>