<?php

$obData = ob_get_clean();

print(\Main\Services\PageService::loadData($obData));
// db disconnect ?