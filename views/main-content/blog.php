<?php 
    function ispisPostova($postovi) {
        foreach($postovi as $post) {
            echo '<div class="post-preview" data-id='.$post->idPost.'>
                    <a href="index.php?stranica=postovi&id='.$post->idPost.' ">
                        <p class="post_title">
                            '.$post->naslov.'
                        </p>
                        <p class="post_content">
                        '.$post->tekst.'
                        </p>
                    </a>
                    <div class="post_wrapper">
                        <p class="post-meta">Posted by <a href="#">'.$post->username.'</a> on '
                        .$post->datumVremePostavljanja.'</p>
                        <p class="category">
                        Categories:';

                        $kategorije = dohvatiKategorijeZaPost($post->idPost);
                        foreach($kategorije as $kat) {
                            echo '<b>'.$kat->naziv.' </b>';
                        }
                         
                        echo '</p>
                </div>
                        
                    <div class="clear"></div>
                </div>
                <hr>';
          }
    }
?>
            <div class="col-lg-9">
                <?php 
                    if(!isset($_GET['kategorija'])): 
                        $postovi = dohvatiPostove();
                        ispisPostova($postovi);

                    else: 
                        $postovi = dohvatiPostoveZaKategoriju($_GET['kategorija']);
                        ispisPostova($postovi);
                    
                    endif;  
    
                ?>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
			
        </div>
    </div>
