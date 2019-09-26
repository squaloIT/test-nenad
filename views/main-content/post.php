<!-- Post Content -->
<article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php if(isset($_GET['id'])): ?>

                    <?php $post = dohvatiPostZaID($_GET['id']); ?>
                        <h2 class="section-heading"><?= $post->naslov; ?></h2>

                        <p><?= $post->tekst; ?></p>

                        <p>Username <a href="http://spaceipsum.com/"><?= $post->username; ?></a>.</p>
                    <?php else: ?>


                    <h1>NE POSTOTJI TAJ POST</h1>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </article>
