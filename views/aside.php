<!-- Main Content -->
<div class="container">
        <div class="row">
			<div class="col-lg-3">
				<!-- <div class="input-group">
					<form action="" method="post">
						<input type="text" class="form-control" placeholder="Type to search..">
						<input type="button" class="btn button-search" value="Search"/>
					</form>
				</div> -->
				<div id="kategorije">
					<ul>
						<?php $kategorije = dohvatiKategorije(); ?>
						<?php foreach($kategorije as $kat): ?>
							<li>
								<a href='index.php?stranica=pocetna&kategorija=<?= $kat->id;?>'>
									<?= $kat->naziv; ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div id="latest">
					<h2>Latest posts</h2>
					<div id="wrapp-posts">
						<div class="post">
							<a href="post.html">
								<p class="post_title">
									Man must explore, and this is exploration at its greatest
								</p>
								<p class="post_content">
									Problems look mighty small from 150 miles up
								</p>
							</a>
							<div class="post_wrapper">
								<p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
								<p class="category">
										Caterory: <b>Exploration</b>
								</p>
							</div>
							<div class="clear"></div>
						</div>
						<div class="post">
							<a href="post.html">
								<p class="post_title">
									Man must explore, and this is exploration at its greatest
								</p>
								<p class="post_content">
									Problems look mighty small from 150 miles up
								</p>
							</a>
							<div class="post_wrapper">
								<p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
								<p class="category">
										Caterory: <b>Exploration</b>
								</p>
							</div>
							<div class="clear"></div>
						</div>
						<div class="post">
							<a href="post.html">
								<p class="post_title">
									Man must explore, and this is exploration at its greatest
								</p>
								<p class="post_content">
									Problems look mighty small from 150 miles up
								</p>
							</a>
							<div class="post_wrapper">
								<p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
								<p class="category">
										Caterory: <b>Exploration</b>
								</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>