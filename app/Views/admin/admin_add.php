<?= $this->extend('admin/base'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card shadow">
            <div class="card-header bg-primary">
                <div class="row">
                    <h4 class="card-title text-white col-9">Admin</h4>
                    <button type="button" onclick="history.back()" class="btn btn-md btn-social-icon-text btn-linkedin">
                        <i class="icon-arrow-left"></i> Kembali</button>
                </div>
            </div>
            <?= form_open('U/Admin', ['class' => 'forms-sample']); ?>
            <div class="card-body">
                <div class="form-group">
                    <label>Fullname</label>
                    <?= form_input('fullname', '', [
                        'class' => 'form-control',
                        'placeholder' => 'Masukkan nama lengkap'
                    ]); ?>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <?= form_input('username', '', [
                        'class' => 'form-control',
                        'placeholder' => 'Masukkan Username'
                    ]); ?>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <?= form_input('password', '', [
                        'class' => 'form-control',
                        'placeholder' => 'Masukkan Password'
                    ], 'password'); ?>
                </div>
                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <?= form_input('konfirmasiPassword', '', [
                        'class' => 'form-control',
                        'placeholder' => 'Konfirmasi Password'
                    ], 'password'); ?>
                </div>
            </div>
            <div class="card-footer bg-primary"><button type="submit" class="btn btn-info mr-2">Submit</button></div>
            <?= form_close(''); ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>