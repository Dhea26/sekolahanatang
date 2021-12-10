<!-- Main Content -->
<div id="content">



    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->

        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>
        <!-- Page Heading -->
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?= base_url('assets/img/profil/') . $user['image']; ?>" alt="Profil">
            <div class="card-body">
                <h5 class="card-title"><?= $user['nama']; ?></h5>
                <p class="card-text">Email : <?= $user['email']; ?>.</p>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->