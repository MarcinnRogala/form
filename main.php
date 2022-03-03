<?php

if ($rezultat = @$polaczenie->query(
    sprintf("SELECT * FROM users WHERE Login='%s'")));