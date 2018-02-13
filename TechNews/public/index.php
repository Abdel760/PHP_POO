<?php

# Chargement de Bootstrap
require_once 'bootstrap.php';

# Chargement du Header
include_once PATH_HEADER;

# Contenu de mon site
$core = new Core($_GET);

# Chargement du Footer
include_once PATH_FOOTER;