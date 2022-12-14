<?= $this->extend('admin/base'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card shadow">
            <div class="card-header bg-primary">
                <div class="row">
                    <h4 class="card-title text-white col-9">Admin</h4>
                    <a type="button" href="<?= base_url('U/Admin/new'); ?>"
                        class="btn btn-md btn-social-icon-text btn-facebook">
                        <i class="icon-file-add"></i> Tambah
                        Admin</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover" id="table">
                    <thead>
                        <tr>
                            <th>~</th>
                            <th>Fullname</th>
                            <th>Username</th>
                            <th>Login Terakhir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($admin as $item) : ?>
                        <tr>
                            <td><?= $item['id_admin']; ?></td>
                            <td><?= $item['fullname']; ?></td>
                            <td><?= $item['username']; ?></td>
                            <td><?= $item['last_login']; ?></td>
                            <td>
                                <a href="<?= base_url('U/Admin/' . $item['id_admin'] . '/edit'); ?>" type="button"
                                    class="btn btn-outline-secondary btn-rounded btn-ico"><i
                                        class="icon-eye text-info"></i></a>
                                <button onclick="deleteData('<?= $item['id_admin']; ?>')" type="button"
                                    class="btn btn-outline-secondary btn-rounded btn-ico"><i
                                        class="icon-trash text-danger"></i></button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<script>
function deleteData(a) {
    swal({
            title: "Apa kamu yakin?",
            text: "Data akan terhapus",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    method: "DELETE",
                    url: "Admin/" + a,
                    success: function(response) {
                        swal("Data Telah Terhapus", {
                            icon: "success",
                        }).then(() => {
                            window.location.reload()
                        })
                    },
                    error: function(response) {
                        swal("Terjadi kesalahan pada AJAX", {
                            icon: "error",
                        })
                    }
                });
            }
        });
}
</script>

<script>
$(function() {
    var table = $("#table").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "print", "colvis"]
    });

    table.buttons().container().appendTo($('.col-md-6:eq(0)', table.table().container()));
});
</script>

<?= $this->endSection(); ?>