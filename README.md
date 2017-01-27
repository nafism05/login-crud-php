# crud-mysqli

fungsi2 yg biasa dipakai :

    1. mysqli_query($koneksi, $sql); //untuk mengeksekusi query sql

    2. mysqli_num_rows($result); //menghitung jumlah data yang direquest

    3. mysqli_fetch_assoc($result); //mengambil data dari database dalam bentuk array


Cara Mengatasi jika ada yang error:

    1. Perhatikan atribut 'name' pada form input, pastikan sama dengan $_POST[] yang ada pada file proses
        misal pada file create.php : <input type="text" name="nama_siswa" size="30" required>
        maka pada file create-proses.php : $nama = $_POST['nama_siswa']
        termasuk tombol submit juga diperhatikan

    2. Pastikan query sqlnya sudah benar, meliputi nama TABEL dan nama KOLOM harus sama persis dengan yang ada di database,
        tidak boleh dibolak balik, dan case sensitive(perhatikan huruf kapital atau bukan)

    3. Perhatikan variabelnya, pastikan valuenya benar
        misal pada create-proses.php terdapat code :

        $nis		= $_POST['nis'];
    	$nama		= $_POST['nama'];
    	$kelas		= $_POST['kelas'];
    	$jurusan	= $_POST['jurusan'];

        untuk ngetes bahwa valuenya benar dengan cara menambahkan echo dibawahnya :

        echo 'Nis : '.$nis.'<br>';
        echo 'Nama : '.$nama.'<br>';
        echo 'Kelas : '.$kelas.'<br>';
        echo 'Jurusan : '.$jurusan.'<br>';
