<link rel="stylesheet" href="assets/css/ranking.css">

    <section class="ranking-section">
        <header>
            <h1 class="ranking-section__title">Classement 2023</h1>
            <p class="teams-section__description">
                Retrouvez le classement de toutes les équipes sur la saison 2023, ainsi que le classement pilote !
            </p>
        </header> 
        <div class="ranking-section__content">
            <div class="ranking-section_team-container">
                <h2>Classement par équipe</h2>
                <table>
                    <thead>
                        <tr>
                            <th class="column-title">Teams</th>
                            <th class="column-title">Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($viewData['teams'] as $team) :?>
                        <tr>
                            <td class="team-name <?= $team->getClass_css() ?>"><?= $team->getName() ?></td>
                            <td class="team-point"><?= $team->getPoints() ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div> 

            <div class="ranking-section_drivers-container">
                <h2>Classement par pilote</h2>
                <table>
                    <thead>
                        <tr>
                            <th class="column-title">Teams</th>
                            <th class="column-title">Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($viewData['drivers'] as $driver) :?>
                        <tr>
                            <td class="driver-name <?= $driver->getTeam_name() ?>"><?= $driver->getName() ?></td>
                            <td class="driver-point"><?= $driver->getCurrent_points() ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div> 
        </div>
    </section>