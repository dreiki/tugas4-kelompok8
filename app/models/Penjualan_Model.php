<?php

class Penjualan_Model
{
  private $table = 'Penjualan';
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getAll()
  {
    $this->db->query(
      "SELECT
        IdPenjualan,
        NamaBarang,
        JumlahPenjualan,
        Satuan,
        Keterangan,
        NamaPelanggan
      FROM
        Penjualan
        JOIN Barang ON Barang.IdBarang = Penjualan.IdBarang
        JOIN Pelanggan ON Pelanggan.IdPelanggan = Penjualan.IdPelanggan"
    );
    return $this->db->resultSet();
  }

  public function getReportAll()
  {
    $this->db->query(
      "SELECT `pengguna`.`IdPengguna`,`pengguna`.`NamaPengguna`,`barang`.`NamaBarang`,SUM(`penjualan`.`Jumlahpenjualan`) AS `TotalPenjualan`, `penjualan`.`HargaJual`,(SUM(`penjualan`.`Jumlahpenjualan`) * `penjualan`.`HargaJual`) AS `Keuntungan`
      FROM `pengguna`,`barang`,`penjualan`
      WHERE `pengguna`.`IdPengguna` = `barang`.`IdPengguna` AND `penjualan`.`IdBarang` = `barang`.`IdBarang` AND `pengguna`.`IdPengguna` = 1
      GROUP BY `barang`.`NamaBarang`
      ORDER BY `pengguna`.`NamaPengguna`");
    return $this->db->resultSet();
  }
}