<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>
    <div class="container">
    <h3>Data Customer</h3>
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Tambah Data Baru</button>
 
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>E-mail</th>
                    <th>Nomor Hp</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($product as $row):?>
                <tr>
                    <td><?= $row->nama;?></td>
                    <td><?= $row->email;?></td>
                    <td><?= $row->nomorhp;?></td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm btn-edit" data-id="<?= $row->product_id;?>" data-nama="<?= $row->nama;?>" data-email="<?= $row->email;?>" nomorhp="<?= $row->nomorhp;?>">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->product_id;?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
 
    </div>
     
    <!-- Modal Add Product-->
    <form action="/product/save" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Customer Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                </div>
                 
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="email" placeholder="Masukan E-mail">
                </div>
 
               <div class="form-group">
                    <label>Nomor Hp</label>
                    <input type="text" class="form-control" name="nomorhp" placeholder="Masukan Nomor Hp">
                </div>
             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add Product-->
 
    <!-- Modal Edit Product-->
    <form action="/product/update" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                 <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control nama" name="nama" >
                </div>
                 
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control email" name="email">
                </div>
 
               <div class="form-group">
                    <label>Nomor Hp</label>
                    <input type="text" class="form-control nomorhp" name="nomorhp">
                </div>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="product_id" class="product_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit Product-->
 
    <!-- Modal Delete Product-->
    <form action="/product/delete" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
               <h5>Apakah kamu yakin menghapus data ini?</h5>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="product_id" class="productID">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-primary">Ya</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Delete Product-->
 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
 
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const nama = $(this).data('nama');
            const email = $(this).data('email');
            const nomorhp = $(this).data('nomorhp');
            // Set data to Form Edit
            $('.product_id').val(id);
            $('.nama').val(nama);
            $('.email').val(email);
            $('.nomorhp').val(nomorhp);
            // Call Modal Edit
            $('#editModal').modal('show');
        });
 
        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.productID').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
         
    });
</script>
</body>
</html>