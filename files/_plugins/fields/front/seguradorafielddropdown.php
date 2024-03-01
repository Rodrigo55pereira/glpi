<?php

Plugin::load('fields', true);

$dropdown = new PluginFieldsSeguradorafieldDropdown();
include GLPI_ROOT . "/front/dropdown.common.php";
