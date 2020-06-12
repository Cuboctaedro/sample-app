<?php

include 'snippets/data.php';
include 'snippets/head.php';
?>


<body>

    <section class="app">
  
        <header class="app__header">

            <nav class="app__nav">
                <button class="app__burger" id="burger" aria-haspopup="true" aria-controls="menu">
                    <span class="icon"><?php include 'svg/menu-sharp.svg'; ?></span>
                    <span class="hidden">Menu</span>
                </button>
                <div class="menu" id='menu' aria-labelledby="burger" hidden>
                    <?php include 'snippets/menu.php'; ?>
                </div>
            </nav>

            <div class="app__profile">
                <div class="app__avatar ">
                    <div class="avatar">
                        <img src="img/portrait.jpg" alt="Markus Schulz"/>
                    </div>
                    
                </div>
                <h1 class="app__name">Markus Schulz</h1>
                <div class="app__location">
                    <span class="icon"><?php include 'svg/location-sharp.svg'; ?></span>
                    <span>San Francisco, CA</span>
                </div>
            </div>

        </header>

        <div class="app__body">

            <section class="app__stats stats">
                <h2 class="hidden">User stats</h2>
                <ul class="stats__list">
                    <?php foreach ($user_stats as $label => $value ) : ?>
                    <li class="stats__listitem">
                        <span class="stats__label"><?= $label; ?></span>
                        <span class="stats__value"><?= $value; ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        
            <section class="app__playlists playlists">
                <h2 class="hidden">Playlists</h2>

                <div class="app__tabs tabs" id="tabs">
                    
                    <div role="tablist" aria-label="Palylists" class="tabs__controls">
                        <?php foreach($playlists as $i => $list) : ?>
                            <?php $list_slug = strtolower(str_replace(' ', '-', $list)); ?>
                            <button class="tabs__button"
                                role="tab"
                                aria-selected="<?= $i === 0 ? 'true' : 'false'; ?>"
                                aria-controls="<?= $list_slug; ?>-tab"
                                id="<?= $list_slug; ?>">
                                <span><?= $list; ?></span>
                            </button>
                        <?php endforeach; ?>
                    </div>

                    <div class="tabs__panels">

                    <?php foreach($playlists as $i => $list) : ?>
                            <?php $list_slug = strtolower(str_replace(' ', '-', $list)); ?>
                            <div class="tabs__panel"
                                tabindex="0"
                                role="tabpanel"
                                id="<?= $list_slug; ?>-tab"
                                aria-labelledby="<?= $list_slug; ?>"
                                <?= $i === 0 ? ' ' : ' hidden '; ?> 
                                >
                                <div class="tab__content swiper-container swiper-container-<?= $list_slug; ?> glide">
                                    <div class="swiper-wrapper glide__track" data-glide-el="track"><ul class="glide__slides">
                                        <?php foreach ($playlist_content as $album) : ?>
                                            <li class="album swiper-slide glide__slide">
                                                <a href="<?= $album['url']; ?>" title="<?= $album['title']; ?>">
                                                    <img src="img/<?= $album['cover']; ?>" alt="<?= $album['title']; ?>" />                        
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                        </ul></div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>

                    <script>
                    var playlistTitles = [
                        <?php foreach($playlists as $list) : ?>
                            <?php $list_slug = strtolower(str_replace(' ', '-', $list)); ?>
                            '<?= $list_slug; ?>', 
                        <?php endforeach; ?>
                    ];
                    </script>
                
                </div>

            </section>

        </div>
        
        <footer class="app__footer footer">
            <ul class="footer__menu">
                <li class="footer__menuitem">
                    <a class="footer__link" href="">Follow</a>
                </li>
                <li class="footer__menuitem">
                    <a class="footer__link" href="">Messages</a>
                </li>
            </ul>
        </footer>
          
    </section>
  
  
    <?php
include 'snippets/footer.php';
?>