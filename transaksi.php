<!DOCTYPE html>
<html>
<head>
  <title>Transaksi Rokok</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
  <nav>
    <div class="wrapper">
        <div class="logo"><a href=''>Transaksi</a></div>
        <div class="menu">
            <ul>
                <li><a href="admin.php">Kembali</a></li>
            </ul>
        </div>
  </nav>
    <tbody id="transaksi-body">
    </tbody>
  </table>
  <form id="form-transaksi">
    <input type="hidden" id="transaksi-id">
    <label for="nama-rokok">Nama Rokok:</label>
    <input type="text" id="nama-rokok" name="nama_rokok"><br><br>
    
    <label for="jumlah-rokok">Jumlah Rokok:</label>
    <input type="number" id="jumlah-rokok" name="jumlah_rokok" min="0" max="100000"><br><br>
    
    <label for="harga-rokok">Harga Rokok:</label>
    <input type="number" id="harga-rokok" name="harga_rokok" min="0" max="100000"><br><br>
    
    <button type="submit" name="action" value="submit">Submit</button>
    <button type="submit" name="action" value="update">Update</button>
    <button type="submit" name="action" value="delete">Delete</button>
  </form>
</body>
</html>