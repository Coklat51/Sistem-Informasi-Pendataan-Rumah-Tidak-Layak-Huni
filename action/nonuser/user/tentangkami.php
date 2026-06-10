<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');

switch ($base['afi']) {
    default:
        header('location: ' . $base['url']);
        break;

    case md5($base['kunci'] . 'Kirim'):
        if (
            empty($input['kdjenistentangkami']) ||
            empty($input['tentangkami_nama']) ||
            empty($input['tentangkami_email']) ||
            empty($input['tentangkami_deskripsi']) ||
            empty($input['tentangkami_telp'])
        ) {
            header('location: ' . $base['url'] . '/tentangkami/salah');
            break;
        }
        $isi = array(
            'tentangkami_tanggal'   => date('Y-m-d H:i:s'),
            'kdjenistentangkami'    => $input['kdjenistentangkami'],
            'tentangkami_nama'      => strtoupper($input['tentangkami_nama']),
            'tentangkami_email'     => $input['tentangkami_email'],
            'tentangkami_deskripsi' => $input['tentangkami_deskripsi'],
            'tentangkami_telp'      => $input['tentangkami_telp']
        );

        $aksi = $record->mlebu('bukutentangkami', $isi);

        switch (TRUE) {
            case $aksi:
                header('location: ' . $base['url'] . '/tentangkami/suksesreg');
                break;
            default:
                header('location: ' . $base['url'] . '/tentangkami/gagal');
                break;
        }
        break;
}
?>
