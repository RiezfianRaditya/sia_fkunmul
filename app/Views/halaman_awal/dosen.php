<?= $this->include('layouts/header/index') ?>
<?= $this->include('layouts/navbar_top/dosen') ?>
<?= $this->include('layouts/navbar_side/dosen') ?>

<div class="result"></div>

<?= $this->include('layouts/footer/operator') ?>
<?= $this->include('layouts/script/operator') ?>

<script>
    $(document).ready(function() {
        $.ajax({
            url: '<?= base_url('home/berandaDosen') ?>',
            dataType: 'json',
            success: function(response) {
                $(".result").html(response.data);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    });
</script>