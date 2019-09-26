<div class="container">
        <div class="row">
            <div class="col-lg-8 ">

              <h2>Post</h2>
                <div class="post-insert" style="margin-bottom:50px;">
                  <form name="sentMessage" id="contactForm" action="models/post/unosPosta.php" method="POST" novalidate>
                      <div class="row control-group">
                          <div class="form-group col-xs-12 floating-label-form-group controls">
                              <label>Naslov</label>
                              <input type="text" class="form-control" placeholder="Naslov" 
                              id="tbNaslov" required data-validation-required-message="Unesite naslov"
                              name="tbNaslov">
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="row control-group">
                          <div class="form-group col-xs-12 floating-label-form-group controls">
                              <label>Mali naslov</label>
                              <input type="text" class="form-control" placeholder="Mali naslov" id="tbMaliNaslov"
                              name="tbMaliNaslov">
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="row control-group">
                          <div class="form-group col-xs-12 floating-label-form-group controls">
                              <label>Tekst: </label>
                              <textarea class='form-control' placeholder="Tekst posta..." rows=7 name="taTekst" id="taTekst"></textarea>
                              <!-- <input type="password" class="form-control" placeholder="Type your password" id="phone" required data-validation-required-message="Please enter your phone number." 
                              name="tbPassword"> -->
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <input type="hidden" name="idPost" id="idPost" value="6" />
                      <br>
                      <div id="success"></div>
                      <div class="row">
                          <div class="form-group col-xs-12">
                              <button type="submit" class="btn btn-default" name="btnSubmitPost" id="btnSubmitPost">Insert</button>
                          </div>
                      </div>
                  </form>
                </div>

  <table>
    <thead>
      <tr>
        <th>Naslov</th>
        <th>Mali naslov</th>
        <th>Datum Postavljanja</th>
        <th>Username</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
        require_once "./models/post/post.php";
        $postovi = dohvatiPostove();

        foreach($postovi as $post):
      ?>
        <tr>
          <td><?= $post->naslov; ?></td>
          <td><?= $post->mali_naslov; ?></td>
          <td><?= $post->datumVremePostavljanja; ?></td>
          <td><?= $post->username; ?></td>
          <td>
            <!-- <a class="izbrisi" href="models/post/izbrisi_post.php?id=<?= $post->idPost; ?>">Izbrisi</a> -->
            <a class="izbrisi" href="#" data-mojIdPost="<?= $post->idPost; ?>" data-username="">Izbrisi</a>
          </td>
          <td>
            <a class="izmeni" href="#" data-idPost="<?= $post->idPost; ?>" >Izmeni</a>
          </td>
        </tr>
      <?php 
        endforeach;
      ?>
    </tbody>
  </table>
  <div id="result_operation">
  </div>
</div>