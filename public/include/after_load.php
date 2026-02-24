<?php

$obData = ob_get_clean();

print(\Main\Services\Content\PageService::loadData($obData));
// db disconnect ?