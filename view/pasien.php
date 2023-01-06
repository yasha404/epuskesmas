<?php require '../config/connect.php'; ?>
<?php include 'layouts/top_link.php'; ?>
<?php include 'layouts/navbar.php'; ?>

<main class="w-full max-screen-xl max-w-6xl mt-4 mb-4 mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
  <?php require 'backend/create.php'; ?>
  <form action="" method="POST">
    <div class="mb-6">
      <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
      <input type="name" name="nama" id="nama_lengkap" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jhon Doe" required />
    </div>
    <div class="mb-6">
      <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
      <input type="address" name="alamat" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jl. Kebaharan" required />
    </div>
    <div class="grid gap-3 mb-6 md:grid-cols-3">
      <div>
        <label for="nomor_telepon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
        <input type="text" name="nomor_telepon" id="nomor_telepon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" required />
      </div>
      <div>
        <label for="birth_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="birth_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
      </div>
      <div>
        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          <option disabled selected value>Pilih Jenis Kelamin</option>
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
    </div>

    <button type="submit" name="insert-pasien" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      Submit
    </button>

  </form>
</main>

<main class="w-full max-screen-xl max-w-6xl mt-4 mb-4 mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="rounded w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            ID
          </th>
          <th scope="col" class="px-6 py-3">
            Nama
          </th>
          <th scope="col" class="px-6 py-3">
            Jenis Kelamin
          </th>
          <th scope="col" class="px-6 py-3">
            Nomor Telepon
          </th>
          <th scope="col" class="px-6 py-3">
            Tanggal Lahir
          </th>
          <th scope="col" class="px-6 py-3">
            Alamat
          </th>
          <th scope="col" class="px-6 py-3">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        <?php

        $query = 'SELECT * FROM pasien';
        $result = mysqli_query($conn, $query);
        if ($result) {
          while ($row = mysqli_fetch_array($result)) { ?>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?= $row['id_pasien']; ?>
              </th>
              <td class="px-6 py-4">
                <?= $row['nama']; ?>
              </td>
              <td class="px-6 py-4">
                <?= $row['jenis_kelamin']; ?>
              </td>
              <td class="px-6 py-4">
                <?= $row['nomor_telepon']; ?>
              </td>
              <td class="px-6 py-4">
                <?= $row['tanggal_lahir']; ?>
              </td>
              <td class="px-6 py-4">
                <?= $row['alamat']; ?>
              </td>
              <th class="px-6 py-4">
                <form action="POST">
                  <a href="updatePasien.php?id_pasien=<?= $row['id_pasien']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                  |
                  <button type='button' id='id_pasien<?= $row['id_pasien'] ?>'>Delete
                  </button>
                </form>
              </th>
            </tr>
            <script>
              var button = document.querySelector('#id_pasien<?= $row['id_pasien'] ?>');
              button.onclick = function() {
                Swal.fire({
                  title: 'Peringatan!',
                  text: "hapus enggak ya?",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Confirm'
                }).then((result) => {
                  if (result.isConfirmed) {
                    document.location.href = 'backend/delete.php?id_pasien=<?= $row['id_pasien'] ?>';
                  }
                })
              }
            </script>
        <?php }
        } ?>
      </tbody>
    </table>
  </div>
</main>


<?php include 'layouts/bottom_link.php'; ?>