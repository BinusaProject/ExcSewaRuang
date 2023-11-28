<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksport PDF</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        @page {
            size: A5;
        }

        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.2;
        }

        .header {
            text-align: center;
            background: #0C356A;
            color: whitesmoke;
            padding: 40px;
            font-size: medium;
        }

        .invoice {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0;
            font-weight: bold;
            color: #1F4172;
        }

        .invoice h1 {
            margin: 0;
        }

        .name-customer {
            color: #1F4172;
            font-size: 90%;
            margin-left: 50%;
        }

        .invoice-yu {
            margin-left: 5%;
            margin-top: 20px;
        }

        .invoice-details table {
            margin-top: 0;
            margin-left: 5%;
            font-size: 90%;
        }

        .invoice-details table th {
            background: #f2f2f2;
        }

        .item-table {
            width: 100%;
            padding: 20px;
            border-collapse: collapse;
        }

        .item-table td, .item-table th {
            padding: 15px;
            font-size: 80%;
        }

        .item-table th {
            background: #f2f2f2;
            font-weight: bold;
        }

        .total {
            margin-bottom: 10%;
        }

        .total #displayTotal::after {
            content: attr(data-amount);
            display: inline-block;
            border-bottom: 1px solid #000000;
            margin-left: 5px;
            margin-right: 30px;
        }

        .payment-info {
            font-weight: bold;
            color: #0C356A;
            border-left: 20px solid #0C356A;
            margin-right: 50%;
            height: 140px;
            margin-top: 5%;
        }

        .payment-info h4, .payment-info p {
            margin-left: 18px;
        }

        .container {
            display: flex;
            float: right;
            color: #1F4172;
            font-weight: bold;
            font-size: 13px;
        }

        .merah {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php if ($peminjaman) : ?>
        <?php foreach ($peminjaman as $row) : ?>
            <div class="header">
                <h2>RuangSewa.com</h2>
            </div>
            <div class="invoice-yu">
                <h1 class="invoice">
                    CUSTOMER
                    <span class="name-customer">INVOICE</span>
                </h1>
                <p style="margin-left: 76%;"><?php echo date('F j, Y'); ?></p>
            </div>
            <div class="invoice-details">
                <table>
                    <tr>
                        <td>Name Customer : <span style="margin-left: 9px;"><?php echo tampil_nama_penyewa_byid($row->id_pelanggan) ?></span></td>
                    </tr>
                    <tr>
                        <td>Nomor Telephone :<span style="margin-left: 8px;"><?php echo tampil_nomer_penyewa_byid($row->id_pelanggan) ?></span></td>
                    </tr>
                    <tr>
                        <td>Kode pemesanan :<span style="margin-left: 8px;"><?php echo $row->kode_booking ?></span></td>
                    </tr>
                </table>
            </div>
            <table rules="rows" class="item-table hover:table-fixed" id="itemTable">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Jumlah Item</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($row->id_ruangan)) : ?>
                        <tr>
                            <td class="merah"><?php echo tampil_nama_ruangan_byid($row->id_ruangan) ?></td>
                            <td class="merah"> <?php
                                $tanggalBooking = new DateTime($row->tanggal_booking);
                                $tanggalBerakhir = new DateTime($row->tanggal_berakhir);
                                $durasi = $tanggalBooking->diff($tanggalBerakhir);
                                $hari = $durasi->days;
                                $harga = tampil_harga_ruangan_byid($row->id_ruangan);
                                echo $durasi->days . ' Hari';
                                ?></td>
                            <td class="merah"><?php echo convRupiah(tampil_harga_ruangan_byid($row->id_ruangan)); ?></td>
                            <td class="merah"><?php echo convRupiah($harga * $hari); ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if (!empty($row->id_tambahan)) : ?>
                        <?php foreach (explode(',', $row->id_tambahan) as $id_tambahan) : ?>
                            <tr>
                                <td class="merah">
                                    <?php echo tampil_nama_tambahan_byid($id_tambahan) ?>
                                </td>
                                <td class="merah"><?php
                                    if (tampil_info_tambahan_byid($id_tambahan) == 'Alat') {
                                        echo '1';
                                    } else if (tampil_info_tambahan_byid($id_tambahan) == 'Makanan' || tampil_info_tambahan_byid($id_tambahan) == 'Minuman') {
                                        echo $row->jumlah_orang;
                                    }
                                    ?></td>
                                <td class="merah"><?php echo convRupiah(tampil_harga_tambahan_byid($id_tambahan)); ?></td>
                                <td class="merah"><?php
                                    if (tampil_info_tambahan_byid($id_tambahan) == 'Alat') {
                                        echo convRupiah(tampil_harga_tambahan_byid($id_tambahan));
                                    } else if (tampil_info_tambahan_byid($id_tambahan) == 'Makanan' || tampil_info_tambahan_byid($id_tambahan) == 'Minuman') {
                                        echo convRupiah(tampil_harga_tambahan_byid($id_tambahan) * $row->jumlah_orang);
                                    }
                                    ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <div class="container">
                <div class="total" style="margin-bottom: -50%;">
                    <span style=" margin-bottom: 100%;">Total harga :</span><span id="displayTotal" data-amount="<?php echo convRupiah($row->total_harga) ?>"></span>
                </div>
            </div>
            <div class="payment-info">
                <h4>PAYMENT INFO</h4>
                <?php date_default_timezone_set('Asia/Jakarta'); ?>
                <p class="baru">Tanggal :<span><?php echo date('F j,Y'); ?></span></p>
                <p>Jam Pemesanan : <span><?php echo date('H:i'); ?></span></p>
                <p>pembayaran : <span><?php echo tampil_pyment_penyewa_byid($row->id_pelanggan); ?></span></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Data peminjaman tidak ditemukan.</p>
    <?php endif; ?>
</body>

</html>