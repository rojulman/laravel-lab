<form method="POST" action="{{ route('periksa/proses') }}">
@csrf
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap">
    <br>
    <label for="tanggal">Tanggal Periksa</label>
    <input type="text" name="tanggal" id="tanggal" placeholder="Tanggal Periksa">
    <br>
    <label for="tanggal">Usia</label>
    <input type="text" name="usia" id="usia" placeholder="Usia">
    <br>
    <label for="gender">Gender</label>
    <input type="radio" name="gender" value="L">Laki-Laki
    <input type="radio" name="gender" value="P">Perempuan
    <br/>

    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Berat Badan</th>
                <th>Tekanan Darah</th>
                <th>Asam Urat</th>
                <th>Kolesterol</th>
                <th>Gula Darah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="berat" value="" size="10"/>Kg</td>
                <td><input type="text" name="tekanan_darah" value="" size="10"/></td>
                <td><input type="text" name="asam_urat" value="" size="10"/></td>
                <td><input type="text" name="kolesterol" value="" size="10"/></td>
                <td><input type="text" name="gula_darah" value="" size="10"/></td>
            </tr>
        </tbody>
    </table>
    <input type="submit" value="Periksa">
</form>