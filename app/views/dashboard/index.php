<?php $total = 0?>

<section>
  <h2>Data Penjualan : <?php echo $params["data"][0]["NamaPengguna"]?></h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nama Barang</th>
        <th>Jumlah Penjualan</th>
        <th>Harga Jual</th>
        <th>Keuntungan</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($params["data"] as $penjualan) :?>
        <tr>
          <td><?= $penjualan["NamaBarang"] ?></td>
          <td><?= $penjualan["TotalPenjualan"] ?></td>
          <td><?= $penjualan["HargaJual"] ?></td>
          <td><?= $penjualan["Keuntungan"] ?></td>
          <!-- <?= $total += $penjualan["Keuntungan"]?> -->
        </tr>
      <?php endforeach?>
    </tbody>
  </table>
  <h3>Total Keuntungan : <?php echo $total?></h3>
</section>


