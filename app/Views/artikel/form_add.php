<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>

<?php if (isset($validation)) : ?>
    <div style="color:red"><?= $validation->listErrors(); ?></div>
<?php endif; ?>

<form action="<?= site_url('admin/artikel/add'); ?>" method="post">
    <input type="hidden" name="status" value="0">
    <p>
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="0" selected>Draft</option>
            <option value="1">Published</option>
        </select>
    </p>
    
    <p>
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" value="<?= old('judul'); ?>" required>
    </p>
    <p>
        <label for="isi">Isi</label>
        <textarea name="isi" id="isi" cols="50" rows="10"><?= old('isi'); ?></textarea>
    </p>
    <p>
        <label for="id_kategori">Kategori</label>
        <select name="id_kategori" required>
            <option value="">-- Pilih Kategori --</option>
            <?php foreach ($kategori as $k): ?>
                <option value="<?= $k['id_kategori']; ?>" <?= old('id_kategori') == $k['id_kategori'] ? 'selected' : '' ?>>
                    <?= esc($k['nama_kategori']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </p>
    <p><input type="submit" value="Tambah Artikel"></p>
</form>

<?= $this->include('template/admin_footer'); ?>
