<h2>Form Pendaftaran Member</h2>

<form method="POST" action="{{ route('user/store') }}">
    @csrf
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="Alamat Email">
    <br>
    <label for="kategori">Kategori User</label>
    <select name="kategori" id="kategori">
        <?php foreach($kategori as $k) { ?>
        <option value="<?= $k; ?>"><?= $k; ?></option>
        <?php } ?>
    </select>
    <br/>
    <label for="alamat">Alamat</label>
    <textarea name="alamat" id="alamat" cols="30" rows="3"></textarea>
    <br/>
    <input type="submit" value="Daftar">
</form>