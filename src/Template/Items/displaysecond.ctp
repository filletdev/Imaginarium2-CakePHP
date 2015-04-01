<?= $this->assign('title', $item->title); ?>
		<main>
			<section>
				<?= $item->content ?>
				<aside>
                    <div id='calendar'></div>
					<dl>
                        <?php foreach ($sidepostdata as $key => $value): ?>
                            <h3><?= $sidepostdata[$key]->title; ?></h3>
                            <p><?= $sidepostdata[$key]->content; ?></p>
                        <?php endforeach ?>               
                    </dl>
				</aside>
			</section>
            <div class="secondlower">
                <dl>
                    <dt>
                        <?= $item->block1 ?>
                    </dt>
                    <dt>
                        <?= $item->block2 ?>
                    </dt>
                    <dt>
                        <?= $item->block3 ?>
                    </dt>
                </dl>
            </div>
		</main>