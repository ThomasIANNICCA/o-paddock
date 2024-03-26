<link rel="stylesheet" href="assets/css/all-teams.css">
 
    <header class="header-all-teams">      
    </header>
    <section class="teams-section">
        <header>
            <h1 class="teams-section__title">Ecuries 2023</h1>
            <p class="teams-section__description">En 2023, le monde de la Formule 1 s'embrase avec la présence de dix équipes exceptionnelles, chacune prête à repousser les limites de la vitesse et de l'ingénierie. Ces équipes emblématiques fusionnent talent, technologie de pointe et passion inébranlable pour offrir un spectacle inoubliable sur les circuits mondiaux. Ainsi, la saison de Formule 1 en 2023 s'annonce comme une bataille acharnée entre ces dix équipes, chacune apportant sa propre histoire, sa stratégie et son esprit compétitif à cette compétition automobile de classe mondiale. Les amateurs de vitesse peuvent s'attendre à une année exceptionnelle, où chaque virage promet d'être une épreuve de talent et d'endurance. La réglementation 2023 encourage le développement de moteurs hybrides plus durables, mettant l'accent sur l'efficacité énergétique et la réduction des émissions. Les équipes sont incitées à adopter des technologies respectueuses de l'environnement. Le calendrier de la saison est optimisé pour garantir une variété de défis aux équipes, tout en prenant en compte les retours des pilotes et des amateurs de Formule 1. Des ajustements sont également apportés pour minimiser les contraintes logistiques et améliorer l'expérience globale.</p>
        </header> 
        <div class="teams-section__menu"> 
            <div class="teams-section__menu__content">
                <?php foreach($viewData['teams'] as $team):?>   
                    <div class="teams-section__menu__team">
                        <a href="<?= $altorouter->generate('route_team') ?><?= $team->getId() ?>">
                            <figure>
                                <img src="<?= $baseUri ?>/<?= $team->getLogo() ?>" alt="Logo de <?= $team->getName_menu() ?>">
                            </figure>
                            <div>
                                <h2><?= $team->getName_menu() ?></h2>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
