                    <?php

                        require './connector.php';
                        $id_mobil = rand();
                        $Nama_Mobil = $_GET['Nama_Mobil'];
                        $nama_pemilik = $_GET['nama_pemilik'];
                        $merek = $_GET['merek'];
                        $beli = $_GET['beli'];
                        $deskripsi = $_GET['deskripsi'];
                        $foto_mobil = $_FILES['foto_mobil']['name'];
                        $stausPembayran = $_GET['bayar'];
                        $file = "../Asset/image/";

                        if (move_uploaded_file($_FILES['foto_mobil']['tmp_name'], $file . $foto_mobil)){
                            $db = "INSERT INTO showroom_afran_table (ID_Mobil,Nama_Mobil,Nama_Pemilik,Merk_Mobil,Tanggal_Beli,Deskripsi,Foto,Status_Pembayaran)
                            VALUES ('$id_mobil','$Nama_Mobil','$nama_pemilik','$merek','$beli','$Deskripsi','$foto_mobil','$statusPembayaran')";

                            if (mysqli_query($db)) {
                                header("location: ../Pages/ListCar-Afran.php");
                                } else {
                                    echo "Gagal";
                                }
                            } else {
                                echo "Gagal";
                            }
                        
                        ?>