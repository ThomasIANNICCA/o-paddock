<link rel="stylesheet" href="<?= $baseUri ?>/assets/css/team.css">

    <main>
        <section class="team-section">
            <header class="team-section__header <?= $viewData['teams']->getClass_css() ?>">
                <figure class="team-section__header__car">
                    <img src="<?= $baseUri ?>/<?= $viewData['teams']->getPicture() ?>" alt="Voiture de <?= $viewData['teams']->getName_menu() ?>">
                </figure>
    
                <h1><?= $viewData['teams']->getName() ?></h1>
            </header>
    
            <section class="team-section__description">
                <p class="team-section__description__text"><?= $viewData['teams']->getDescription() ?></p>
           
                <div class="description__text__results">

                    <h2 class="description__text__results__title">Résultats en 2023</h2>

                        <div class="description__text__results__container">
                            <div class="description__text__results__content">
                                <div class="description__text__results__content__icon">
                                    <figure>
                                        <img src="<?= $baseUri ?>/assets/icons/points.png" alt="F1 points">
                                    </figure>
                                </div>
                                <p><?= $viewData['teams']->getPoints() ?> points</p> 
                            </div>

                            <div class="description__text__results__content">
                                <div id="main-icon">
                                    <figure>
                                        <img src="<?= $baseUri ?>/assets/icons/trophy.png" alt="F1 ranking">
                                    </figure>
                                </div>
                                <p><?= $viewData['teams']->getResult() ?> au classement constructeur</p> 
                            </div>

                            <div class="description__text__results__content">
                                <div class="description__text__results__content__icon">
                                    <figure>
                                        <img src="<?= $baseUri ?>/assets/icons/medal.png" alt="F1 victories">
                                    </figure>
                                </div>
                                <p><?= $viewData['teams']->getVictories() ?> victoire(s)</p> 
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </section>
    
            <section class="team-section__drivers <?= $viewData['teams']->getClass_css() ?>">
                <?php foreach($viewData['drivers'] as $index => $driver) : ?>
                    <article class="team-section__drivers__article">
                        <figure class="team-section__drivers__article__img">
                            <img src="<?= $baseUri ?>/<?= $driver->getPicture() ?>" alt="<?= $driver->getName() ?>">
                        </figure>
                        <div class="team-section__drivers__article__description">
                            <h2><?= $driver->getName() ?></h2>
                                <ul>
                                    <li><strong>Age : </strong><?= $driver->getAge() ?> ans</li>
                                    <li><strong>Nationalité : </strong><?= $driver->getCountry() ?></li>
                                    <li><strong>Meilleur résultat : </strong><?= $driver->getBest_result() ?></li>
                                    <li><strong>Palmarès : </strong><?= $driver->getCareer() ?></li>
                                </ul>
                                <p><?= $driver->getDescription() ?></p>
                        </div>
                </article>
                <?php endforeach; ?>
            </section>
        </section>
        </section>
    </main>
