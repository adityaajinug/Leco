<style>
    ::-webkit-scrollbar {
        width: 5px;
    }

    ::-webkit-scrollbar-track {
        width: 5px;
        background: #f5f5f5;
    }

    ::-webkit-scrollbar-thumb {
        width: 1em;
        background-color: #ddd;
        outline: 1px solid slategrey;
        border-radius: 1rem;
    }

    .text-small {
        font-size: 0.9rem;
    }

    .messages-box,
    .chat-box {
        height: 510px;
        overflow-y: scroll;
    }

    .rounded-lg {
        border-radius: 0.5rem;
    }

    input::placeholder {
        font-size: 0.9rem;
        color: #999;
    }
</style>
<div class="container">
    <h1>Room Konseling</h1>
    <div class="row rounded-lg overflow-hidden shadow">
        <!-- Chat Box-->
        <div class="col-12 px-0">
            <div class="px-4 py-5 chat-box ">
                <!-- Sender Message-->
                <?php foreach ($chat as $pesan) :
                    if ($pesan['id_mahasiswa'] != $user['id_mahasiswa']) {
                ?>

                        <div class="media w-50 mb-3"><img src="<?= base_url('assets') ?>/img/profile/profile-avatar-png-4.png" alt="user" width="50" class="rounded-circle">
                            <div class="media-body ml-3">
                                <div class="bg-light rounded py-2 px-3 mb-2">
                                    <h7><?= $pesan['nama']; ?></h7>
                                    <p class="text-small mb-0 text-muted text-black"><?= $pesan['pesan']; ?></p>

                                </div>
                                <p class="small text-muted"><?= date('d F Y - G:i:s', $pesan['date_created']); ?> WIB</p>
                            </div>
                        </div>
                    <?php } else { ?>
                        <!-- Reciever Message-->
                        <div class="media w-50 ml-auto mb-3">
                            <div class="media-body">
                                <div class="bg-primary rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-white"><?= $pesan['pesan']; ?></p>
                                </div>
                                <p class="small text-muted"><?= date('d F Y - G:i:s', $pesan['date_created']); ?> WIB</p>
                            </div>
                        </div>
                    <?php } ?>
                <?php endforeach ?>

                <!-- Typing area -->
                <form method="POST" action="<?= base_url('kuliah_dosen/kirim_pesan') ?>" class="bg-light">
                    <div class="input-group">
                        <input type="text" name="pesan" placeholder="Type a message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
                        <input type="hidden" name="id_pesan" value="<?= $id ?>">
                        <div class="input-group-append">
                            <button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>