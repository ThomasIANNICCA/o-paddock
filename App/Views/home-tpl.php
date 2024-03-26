<link rel="stylesheet" href="assets/css/home.css">

<section class="home-section">
    <header class="home-section_title">
    <h1>Bienvenue sur O'Paddock F1 !</h1>
    <p>Ce site est dédié à la Formule 1 et vous permet de vous remémorer la saison 2023 de préparer au mieux la saison 2024. Parcourez les pages et apprenez-en plus sur les pilotes, les équipes et le classement !</p>
    </header>
    <section class="home-section_content">
        <h2>Je visite</h2>
            <div class="team-section">
                <a href="<?= $altorouter->generate('route_teams-menu') ?>">
                    Les équipes
                </a>
            </div>
        
            <div class="ranking-section">
                <a href="<?= $altorouter->generate('route_ranking') ?>">
                    Le classement
                </a>
            </div>
        </a>
    </section>
</section>
