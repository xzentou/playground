<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Edit</h5>
              <div class="card">
                <div class="card-body">
                  <form class="row g-3" action="<?= base_url('home/aksi_e_anak') ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Anak</label>
                      <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $dua->nama_anak?>" name="nama">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Orang Tua</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $dua->orang_tua?>" name="orangtua">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Umur</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $dua->umur?>" name="umur">
                    </div>

                    
                   



                    
                    <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="id" value="<?= $dua->id_anak?>">
                  </div>
                  </form>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>