<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>

<!-- Form Search + Filter Kategori -->
<div class="form-container">
    <form id="search-form" class="form-inline">
        <input type="text" name="q" id="search-box" value="<?= esc($q); ?>" placeholder="Cari judul artikel" class="form-control" style="margin-right: 10px; padding: 8px;">

        <select name="kategori_id" id="category-filter" class="form-control" style="margin-right: 10px;">
            <option value="">Semua Kategori</option>
            <?php foreach ($kategori as $k): ?>
                <option value="<?= $k['id_kategori']; ?>" <?= ($kategori_id == $k['id_kategori']) ? 'selected' : ''; ?>>
                    <?= $k['nama_kategori']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <input type="submit" value="Cari" class="btn btn-primary">
    </form>
</div>

<!-- Loader -->
<div id="loading" style="display: none; text-align: center; margin-top: 20px;">
    <div class="spinner"></div>
    <p>Mencari artikel..</p>
</div>

<!-- Artikel Table -->
<div id="article-container" style="margin-top: 20px;"></div>

<!-- Pagination -->
<div class="pagination-container" style="margin-top: 20px;"></div>

<hr>

<!-- Form Tambah/Update Artikel -->
<div class="form-container" style="margin-top: 40px;">
    <h3 class="form-title-inside" id="formTitle">Tambah Artikel</h3>
    <form id="form-artikel">

        <!-- Hidden ID untuk edit -->
        <input type="hidden" name="artikel_id" id="artikel_id">

        <div class="form-group">
            <input type="text" name="judul" id="judul" placeholder="Judul Artikel" required>
        </div>

        <div class="form-group">
            <textarea name="isi" id="isi" placeholder="Isi Artikel" required></textarea>
        </div>

        <div class="form-group">
            <select name="id_kategori" id="id_kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="1">Tips dan Trik</option>
                <option value="2">Resep Makanan</option>
            </select>
        </div>

        <button type="submit" class="btn-primary" id="submitBtn">Tambah</button>
    </form>
</div>

<!-- jQuery + AJAX -->
<script src="<?= base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
<script>
    $(document).ready(function () {
        const articleContainer = $('#article-container');
        const paginationContainer = $('.pagination-container');
        const searchForm = $('#search-form');
        const searchBox = $('#search-box');
        const categoryFilter = $('#category-filter');
        const loading = $('#loading');

        const fetchData = (url, showLoading = false) => {
            if (showLoading) loading.show();

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                success: function (data) {
                    renderArticles(data.artikel);
                    renderPagination(data.pager, data.q, data.kategori_id);

                    // Delay hide loading biar kelihatan efeknya
                    if (showLoading) {
                        setTimeout(() => {
                            loading.hide();
                        }, 1000); // <-- 1000 ms = 1 detik
                    }
                },
                error: function () {
                    articleContainer.html('<p style="color:red;">Gagal mengambil data.</p>');
                    if (showLoading) loading.hide();
                }
            });
        };


        const renderArticles = (articles) => {
            let html = '<table class="table">';
            html += '<thead><tr><th>ID</th><th>Judul</th><th>Kategori</th><th>Status</th><th>Aksi</th></tr></thead><tbody>';
            if (articles.length > 0) {
                articles.forEach(article => {
                    html += `
                        <tr>
                            <td>${article.id}</td>
                            <td>
                                <strong>${article.judul}</strong><br>
                                <small>${article.isi.substring(0, 50)}...</small>
                            </td>
                            <td>${article.nama_kategori}</td>
                            <td>${article.status}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="/admin/artikel/edit/${article.id}">Ubah</a>
                                <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin menghapus data?');" href="/admin/artikel/delete/${article.id}">Hapus</a>
                            </td>
                        </tr>
                    `;
                });
            } else {
                html += '<tr><td colspan="5">Tidak ada data.</td></tr>';
            }
            html += '</tbody></table>';
            articleContainer.html(html);
        };

        const renderPagination = (pager, q, kategori_id) => {
            if (!pager || !pager.links) return;
            let html = '<nav><ul class="pagination">';
            pager.links.forEach(link => {
                const url = link.url ? `${link.url}&q=${q}&kategori_id=${kategori_id}` : '#';
                html += `<li class="page-item ${link.active ? 'active' : ''}"><a class="page-link" href="${url}">${link.title}</a></li>`;
            });
            html += '</ul></nav>';
            paginationContainer.html(html);
        };

        // Ketika form pencarian dikirim
        searchForm.on('submit', function (e) {
            e.preventDefault();
            const q = searchBox.val();
            const kategori_id = categoryFilter.val();
            const url = `/admin/artikel?q=${q}&kategori_id=${kategori_id}`;
            fetchData(url, true);
        });

        categoryFilter.on('change', function () {
            searchForm.trigger('submit');
        });

        fetchData('/admin/artikel', false); // Load awal (tanpa loading)
    });
</script>

<?= $this->include('template/admin_footer'); ?>