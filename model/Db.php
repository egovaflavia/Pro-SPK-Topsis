<?php
session_start();
// $_SESSION['member'] =
//     [
//         'alternative_id' => '1',
//         'member_nama' => 'Egova',
//         'member_tlp' => '081923123'
//     ];
// var_dump($_SESSION);
// exit;
include 'Conn.php';

class Db extends Conn
{

    public function LoginAdmin($data)
    {
        global $conn;

        // var_dump($data);
        // exit;
        $username = $data['username'];
        $password = $data['password'];

        $ambil = $conn->query("SELECT * FROM tb_pengguna WHERE pengguna_username = '$username' AND pengguna_password = '$password'");

        $pecah = $ambil->fetch_object();
        $cek = $ambil->num_rows;

        if ($cek == 1) {
            $_SESSION['pengguna'] = $pecah;
            echo "
            <script>
            alert('Anda berhasil login')
            window.location='index.php';
            </script>
            ";
        } else {
            echo "
            <script>
            alert('Username / Password Anda Salah');
            window.location='index.php?page=pages/login';
            </script>
            ";
        }
    }

    // =========================================================================================
    // Kriteria Kriteria Kriteria Kriteria Kriteria Kriteria Kriteria Kriteria Kriteria Kriteria 
    // =========================================================================================
    public function getRating()
    {
        $query = $this->get("SELECT * FROM tb_nilai a LEFT JOIN tb_alternative b ON a.alternative_id = b.alternative_id ");
        return $query;
    }
    // =========================================================================================
    // Pengguna Pengguna Pengguna Pengguna Pengguna Pengguna Pengguna Pengguna Pengguna Pengguna 
    // =========================================================================================
    public function getAllPengguna()
    {
        $query = $this->get("SELECT * FROM tb_pengguna");
        return $query;
    }

    public function savePengguna($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        $nama     = $data['nama'];
        $level    = $data['level'];

        global $conn;
        $query = "INSERT INTO tb_pengguna ( pengguna_username,
                                            pengguna_password,
                                            pengguna_nama,
                                            pengguna_level) 
                                            VALUES (
                                                '$username',
                                                '$password',
                                                '$nama',
                                                '$level')";
        return $conn->query($query);
    }
    public function deletePengguna($id)
    {
        global $conn;
        $query = "DELETE FROM tb_pengguna WHERE pengguna_id = '$id'";
        return $conn->query($query);
    }
    public function getOnePengguna($id)
    {
        $query = $this->get("SELECT * FROM tb_pengguna WHERE pengguna_id = '$id'")[0];
        return $query;
    }
    public function editPengguna($data)
    {
        global $conn;

        $id       = $data['id'];
        $username = $data['username'];
        $password = $data['password'];
        $nama     = $data['nama'];
        $level    = $data['level'];

        $query    = "UPDATE tb_pengguna SET pengguna_username = '$username',
                                            pengguna_password = '$password',
                                            pengguna_nama     = '$nama',
                                            pengguna_level    = '$level'
                                            WHERE
                                            pengguna_id = '$id'";
        return $conn->query($query);
    }

    // =========================================================================================
    // Alternative Alternative Alternative Alternative Alternative Alternative Alternative Alternative Alternative 
    // =========================================================================================

    public function getAllAlternative()
    {
        $query = $this->get("SELECT * FROM tb_alternative");
        return $query;
    }

    public function saveAlternative($data)
    {
        $alternative_nip           = $data['alternative_nip'];
        $alternative_nama          = $data['alternative_nama'];
        $alternative_jenis_kelamin = $data['alternative_jenis_kelamin'];
        $alternative_tgl_lahir     = $data['alternative_tgl_lahir'];
        $alternative_alamat        = $data['alternative_alamat'];
        $alternative_agama         = $data['alternative_agama'];

        global $conn;

        $query = "INSERT INTO   tb_alternative(
                                alternative_nip,
                                alternative_nama,
                                alternative_jenis_kelamin,
                                alternative_tgl_lahir,
                                alternative_alamat,
                                alternative_agama ) 
            VALUES (
                '$alternative_nip',
                '$alternative_nama',
                '$alternative_jenis_kelamin',
                '$alternative_tgl_lahir',
                '$alternative_alamat',
                '$alternative_agama')";
        return $conn->query($query);
    }

    public function deleteAlternative($id)
    {
        global $conn;
        $query = "DELETE FROM tb_alternative WHERE alternative_id = '$id'";
        return $conn->query($query);
    }
    public function getOneAlternative($id)
    {
        $query = $this->get("SELECT * FROM tb_alternative WHERE alternative_id = '$id'")[0];
        return $query;
    }
    public function editAlternative($data)
    {
        global $conn;
        $id                        = $data['id'];
        $alternative_nip           = $data['alternative_nip'];
        $alternative_nama          = $data['alternative_nama'];
        $alternative_jenis_kelamin = $data['alternative_jenis_kelamin'];
        $alternative_tgl_lahir     = $data['alternative_tgl_lahir'];
        $alternative_alamat        = $data['alternative_alamat'];
        $alternative_agama         = $data['alternative_agama'];


        $query    = "UPDATE tb_alternative SET  alternative_nama          = '$alternative_nama',
                                                alternative_nip           = '$alternative_nip',
                                                alternative_jenis_kelamin = '$alternative_jenis_kelamin',
                                                alternative_tgl_lahir     = '$alternative_tgl_lahir',
                                                alternative_alamat        = '$alternative_alamat',
                                                alternative_agama         = '$alternative_agama'
                                                WHERE
                                                alternative_id = '$id'";

        return $conn->query($query);
    }

    // =========================================================================================
    // Nilai Nilai Nilai Nilai Nilai Nilai Nilai Nilai Nilai Nilai 
    // =========================================================================================
    public function getAllAlternativeNilai()
    {
        $query = $this->get("SELECT * FROM tb_alternative WHERE alternative_id NOT IN (SELECT alternative_id FROM tb_nilai)");
        if ($query == null || $query == 0) {
            $query = null;
        }
        return $query;
    }

    public function getAllNilai($limit = null)
    {
        if ($limit == null) {
            $query = $this->get("SELECT * FROM tb_nilai a LEFT JOIN tb_alternative b ON a.alternative_id = b.alternative_id");
        } else {
            $query = $this->get("SELECT * FROM tb_nilai LIMIT $limit");
        }
        return $query;
    }

    public function saveNilai($data)
    {
        $alternative_id     = $data['alternative_id'];
        $nilai_c1     = $data['nilai_c1'];
        $nilai_c2     = $data['nilai_c2'];
        $nilai_c3     = $data['nilai_c3'];
        $nilai_c4     = $data['nilai_c4'];
        $nilai_c5     = $data['nilai_c5'];
        $nilai_c6     = $data['nilai_c6'];

        global $conn;
        $query = "INSERT INTO tb_nilai (alternative_id,
                                        nilai_c1, 
                                        nilai_c2, 
                                        nilai_c3, 
                                        nilai_c4, 
                                        nilai_c5, 
                                        nilai_c6 ) VALUES (
                                            '$alternative_id',
                                            '$nilai_c1',
                                            '$nilai_c2',
                                            '$nilai_c3',
                                            '$nilai_c4',
                                            '$nilai_c5',
                                            '$nilai_c6'
                                            )";
        return $conn->query($query);
    }

    public function deleteNilai($id)
    {
        global $conn;
        $query = "DELETE FROM tb_nilai WHERE nilai_id = '$id'";
        return $conn->query($query);
    }
    public function getOneNilai($id)
    {
        $query = $this->get("SELECT * FROM tb_nilai WHERE nilai_id = '$id'")[0];
        return $query;
    }
    public function editNilai($data)
    {
        global $conn;

        $id   = $data['id'];
        $alternative_id     = $data['alternative_id'];
        $nilai_c1     = $data['nilai_c1'];
        $nilai_c2     = $data['nilai_c2'];
        $nilai_c3     = $data['nilai_c3'];
        $nilai_c4     = $data['nilai_c4'];
        $nilai_c5     = $data['nilai_c5'];
        $nilai_c6     = $data['nilai_c6'];
        $query    = "UPDATE tb_nilai
        SET
            alternative_id=$alternative_id,
            nilai_c1=$nilai_c1,
            nilai_c2=$nilai_c2,
            nilai_c3=$nilai_c3,
            nilai_c4=$nilai_c4,
            nilai_c5=$nilai_c5,
            nilai_c6=$nilai_c6
        WHERE nilai_id = $id";
        return $conn->query($query);
    }

    // =========================================================================================
    // Kriteria Kriteria Kriteria Kriteria Kriteria Kriteria Kriteria Kriteria Kriteria Kriteria 
    // =========================================================================================
    public function getAllKriteria()
    {
        $query = $this->get("SELECT * FROM tb_kriteria");
        return $query;
    }

    public function saveKriteria($data)
    {
        $kriteria_nama     = $data['kriteria_nama'];
        $kriteria_sifat     = $data['kriteria_sifat'];
        $kriteria_bobot     = $data['kriteria_bobot'];

        global $conn;
        $query = "INSERT INTO tb_kriteria ( kriteria_nama,
                                            kriteria_sifat,
                                            kriteria_bobot,
                                            ) VALUES (
                                                '$kriteria_nama',
                                                '$kriteria_sifat',
                                                '$kriteria_bobot'
                                                )";
        return $conn->query($query);
    }

    public function deleteKriteria($id)
    {
        global $conn;
        $query = "DELETE FROM tb_kriteria WHERE kriteria_id = '$id'";
        return $conn->query($query);
    }
    public function getOneKriteria($id)
    {
        $query = $this->get("SELECT * FROM tb_kriteria WHERE kriteria_id = '$id'")[0];
        return $query;
    }
    public function editKriteria($data)
    {
        global $conn;

        $id                 = $data['id'];
        $kriteria_nama      = $data['kriteria_nama'];
        $kriteria_sifat     = $data['kriteria_sifat'];
        $kriteria_bobot     = $data['kriteria_bobot'];

        $query    = "UPDATE tb_kriteria SET kriteria_nama = '$kriteria_nama',
                                            kriteria_sifat = '$kriteria_sifat',
                                            kriteria_bobot = '$kriteria_bobot'
                                            WHERE
                                            kriteria_id = '$id'";
        return $conn->query($query);
    }
}
