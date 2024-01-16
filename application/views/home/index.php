<div class="container">
  <div class="row">
    <h3>Table Pengiriman Barang</h3>
    <div class="col-md">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Pengirim</th>
          <th scope="col">Nama Penerima</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Alamat</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=0; foreach($databarang as $db):?>
        <tr>
          <th scope="row"><?= ++$i ?></th>
          <td><?= $db["nama_pengirim"] ?></td>
          <td><?= $db["nama_penerima"] ?></td>
          <td><?= $db["nama_barang"] ?></td>
          <td><?= $db["alamat"] ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>`
    </div>
  </div>
</div>
    