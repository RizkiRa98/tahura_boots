<style>
    @media (max-width: 576px) {
        img {
            width: auto;
        }
    }
</style>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="<?php echo $this->config->item('base_url'); ?>assets/pict/tahura.png" alt="Logo" style="width:400px;height:80px">
                                </div>
                                <hr>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"> Admin Login Page</h1>
                                </div>

                                <?php
                                echo $this->session->flashdata('message');
                                $this->session->unset_userdata('message');
                                $this->session->sess_destroy();
                                ?>

                                <form class="user" method="post" action="<?= base_url('auth') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value='<?= set_value('email'); ?>'>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>');  ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>');  ?>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user mb-2 btn-block">
                                        Login
                                    </button>

                                    <a href="<?php echo base_url('dashboard'); ?>" class="btn btn-secondary btn-user btn-block">
                                        Back
                                    </a>

                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>