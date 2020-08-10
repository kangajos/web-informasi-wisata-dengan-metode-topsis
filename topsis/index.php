<?php
spl_autoload_register(function($class){
  require_once $class.'.php';
});

$topsis = new Topsis();

//$no = 1;
//$kriteria = $topsis->get_data_kriteria();
//$jml_kriteria = $kriteria->rowCount();


//$no = 1;
//$produk = $topsis->get_data_produk();
//
//$kriteria = $topsis->get_data_kriteria();
//
//$produk = $topsis->get_data_produk();
//while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {
//
//    $nilai = $topsis->get_data_nilai_id($data_produk['wisata_id']);
//}


//$produk = $topsis->get_data_produk();
//while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {
//
//    $nilai = $topsis->get_data_nilai_id($data_produk['wisata_id']);
//    while ($data_nilai = $nilai->fetch(PDO::FETCH_ASSOC)) {
//        $pembagi = $topsis->pembagi($data_nilai['id_kriteria']);
//        $hasil = $data_nilai['nilai'] / $pembagi;
//    }
//}


$max_min = array();
// $_hasil_pembobotan=array();

$produk = $topsis->get_data_produk();
while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {

    echo "A<br>";
    $nilai = $topsis->get_data_nilai_id($data_produk['wisata_id']);
    while ($data_nilai = $nilai->fetch(PDO::FETCH_ASSOC)) {
        echo "A<br>";
        $pembagi = $topsis->pembagi($data_nilai['id_kriteria']);

        $hasil = $data_nilai['nilai'] / $pembagi;
        // pembobotan
        $bobot = $topsis->get_data_kriteria_id($data_nilai['id_kriteria']);
        while ($data_bobot = $bobot->fetch(PDO::FETCH_ASSOC)) {
            $pembobotan = $hasil * $data_bobot['bobot'];
            $pembobotan;
            // $max_mins['nilai']= $data_nilai['nilai'];
            $max_mins['pembobotan'] = $pembobotan;
            $max_mins['id_kriteria'] = $data_nilai['id_kriteria'];
            $max_mins['wisata_id'] = $data_produk['wisata_id'];
            array_push($max_min, $max_mins);


        }
        // end pembobotan
        // print_r($max_min);
    }
}
echo "<pre>";
 print_r($max_min);
die();
foreach ($max_min as $insert_data) {
    $topsis->insert_data_max_min($insert_data['id_kriteria'], $insert_data['pembobotan']);
}

$data_hasil_min_max = array();
$data = $topsis->min_max();
while ($data_min_max = $data->fetch(PDO::FETCH_ASSOC)) {
    // print_r($data_min_max);
    $data_hasil_min_maxs['id_kriteria'] = $data_min_max['id_kriteria'];
    $data_hasil_min_maxs['min'] = $data_min_max['min'];
    $data_hasil_min_maxs['max'] = $data_min_max['max'];
    array_push($data_hasil_min_max, $data_hasil_min_maxs);

}

$topsis->delete_min_max();
// print_r($data_hasil_min_max);
// print_r($max_min);


foreach ($max_min as $row) { ?>

    <?php foreach ($data_hasil_min_max as $data) {
        if ($row['id_kriteria'] == $data['id_kriteria']) {
            $hasil = $data['max'] - $row['pembobotan'];
            $pangkat = pow($hasil, 2);

        }
    }
     number_format($pangkat, 2);
}
$ranking_array = array();
$produk = $topsis->get_data_produk();
while ($data_produk = $produk->fetch(PDO::FETCH_ASSOC)) {

    $nilai_d_plus = 0;
    $nilai_d_min = 0;
    foreach ($max_min as $row) {
        foreach ($data_hasil_min_max as $data) {
            if ($row['id_kriteria'] == $data['id_kriteria']) {
                $hasil_plus = $data['max'] - $row['pembobotan'];
                $hasil_min = $data['min'] - $row['pembobotan'];
                $pangkat_plus = pow($hasil_plus, 2);
                $pangkat_min = pow($hasil_min, 2);
            }
        }
        if ($data_produk['wisata_id'] == $row['wisata_id']) {
            $nilai_d_plus = $nilai_d_plus + $pangkat_plus;
            $nilai_d_min = $nilai_d_min + $pangkat_min;
        }
    }

    $bagi = $nilai_d_min + $nilai_d_plus;
    $nilai_v = number_format($nilai_d_min / $bagi, 2);
    $ranking_arrays['nilai_v'] = $nilai_v;
    $ranking_arrays['nama_wisata'] = $data_produk['nama_wisata'];
    array_push($ranking_array, $ranking_arrays);
} ?>


<h2>Ranking</h2>
<table border="1" cellspacing="0" width="400" height="200">
    <tr>
        <th>Ranking</th>
        <th>Nama Produk</th>
        <th>Nilai</th>
    </tr>
    <?php
    $no = 1;
    rsort($ranking_array);
    foreach ($ranking_array as $ranking) {
        ?>
        <tr>
            <td>
                <?php echo $no++; ?>
            </td>
            <td><?php echo $ranking['nama_wisata']; ?></td>
            <td><?php echo $ranking['nilai_v']; ?></td>
        </tr>
    <?php } ?>
</table>