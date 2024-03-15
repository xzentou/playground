<div class="container-fluid">
    <div class="container-fluid">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Forms</h5>
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Pelanggan</label>
                        <select class="form-control" id="selectPelanggan" name="metode">
                            <option value="">Pilih</option>
                            <option value="<?=base_url('home/t_pelangganbaru')?>">Pelanggan baru</option>
                            <option value="<?=base_url('home/t_pelanggan')?>">Pelanggan Lama</option>
                        </select>
                    </div>
                    <div id="formContainer"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#selectPelanggan').change(function() {
            var link = $(this).val();
            if (link) {
                $.ajax({
                    url: link,
                    type: 'GET',
                    success: function(response) {
                        $('#formContainer').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', status, error);
                    }
                });
            } else {
                $('#formContainer').empty();
            }
        });
    });
</script>
