<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Form Pendaftaran</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <!-- Ini akan berisi halaman form-->
                            <div class="form-floating mb-1">
                                <input type="text" name="nama" class="form-control" id="fiNama"
                                    placeholder="name@example.com">
                                <label for="fiNama">Nama</label>
                            </div>
                            <div class="form-floating mb-1">
                                <input type="email" name="email" class="form-control" id="fiEmail"
                                    placeholder="name@example.com">
                                <label for="fiEmail">Email</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" name="alamat"
                                    id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Alamat</label>
                            </div>

                            <div class="form-floating mt-2">
                                <select class="form-select" name="program" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected disabled>Pilih</option>
                                    <option value="Junior Web Developer">Junior Web Developer</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Content Creator">Content Creator</option>
                                    <option value="Desainer Multimedia Muda">Desainer Multimedia Muda</option>
                                </select>
                                <label for="floatingSelect">Program Pelatihan</label>
                            </div>

                            <div class="form-floating mt-2">
                                <select class="form-select" name="tahun" id="fsTahun"
                                    aria-label="Floating label select example">
                                    <option selected disabled>Pilih Tahun</option>
                                    <?php
                                  for($a=2000;$a<=2023;$a++):?>
                                    <option value="<?= $a;?>">
                                        <?= $a;?>
                                    </option>
                                    <?php endfor;?>
                                </select>
                                <label for="fsTahun">Tahun Daftar</label>
                            </div>

                            <input type="submit" class="btn btn-success mt-3 col-12" value="Daftar" name="submit">
                        </form>
                    </div>

                    <div class="card-footer text-center">
                        <div class="spinner-border text-warning" role="status" style="display:none">
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Program</th>
                                        <th>Tahun</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <h5>copyright @2023</h5>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="bootstrap-5.0.2-dist/js/jquery-3.6.4.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script>
    //untuk membuat submit form
    $(document).ready(function() {
        //even ketika form disubmit
        $("form").submit(function(event) {
            //
            event.preventDefault();
            //console.log("Form Telah ok");
            var nama = $("#fiNama").val();
            var email = $("#fiEmail").val();
            var alamat = $("#floatingTextarea").val();
            var program = $("#floatingSelect").val();
            var tahun = $("#fsTahun").val();
            var formData = {
                nama:nama,
                email:email,
                alamat:alamat,
                program:program,
                tahun:tahun
            }
            $.ajax({
                type: "POST",
                url: "proces.php",
                data: formData,
                berforeSend: function(result) {
                     $(".spinner-border").show()
                },
                success: function(result) {
                    // $(".spinner-border").hide()
                    // $("tbody").append(result);
                    // $("form")[0].reset();
                    $("form").trigger("reset");
                }
            })
        })
    })
    </script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>