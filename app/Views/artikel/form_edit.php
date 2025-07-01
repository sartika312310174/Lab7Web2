<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>

<?php if (isset($validation)) : ?>
    <div style="color:red"><?= $validation->listErrors(); ?></div>
<?php endif; ?>

<form action="" method="post">
    <p>
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" value="<?= old('judul', $artikel['judul']); ?>" required>
    </p>
    <p>
        <label for="isi">Isi</label>
        <textarea name="isi" id="isi" cols="50" rows="10"><?= old('isi', $artikel['isi']); ?></textarea>
    </p>
    <p>
        <label for="id_kategori">Kategori</label>
        <select name="id_kategori" required>
            <option value="">-- Pilih Kategori --</option>
            <?php foreach ($kategori as $k): ?>
                <option value="<?= $k['id_kategori']; ?>" <?= ($artikel['id_kategori'] == $k['id_kategori']) ? 'selected' : '' ?>>
                    <?= esc($k['nama_kategori']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </p>
    <p><input type="submit" value="Simpan Perubahan"></p>
</form>

<?= $this->include('template/admin_footer'); ?>
