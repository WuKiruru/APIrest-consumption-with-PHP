<hgroup>
    <h3> <?= $data["title"]; ?> releases in theaters in <?= $data["days_until"] ?> days.</h3>
    <p> Release day <?= $data["release_date"]; ?> </p>
    <p> Next MCU <?= $data["following_production"]["type"]; ?> on theaters will be <?= $data["following_production"]["title"]; ?> in <?= $data["following_production"]["days_until"]; ?> days.</p>
</hgroup>