<?php

Plugin::load('fields', true);

$dropdown = new PluginFieldsMarcafieldDropdown();
include GLPI_ROOT . "/front/dropdown.common.php";
